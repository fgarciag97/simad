<?php
namespace App\Controller;

use App\Controller\AppController;

class MTTransferenciasController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $condicion = ['status >=' => 6];
        $data = $this->ViewTesoreria->find('all')->where($condicion);
        
        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $op2 = (@$this->request->data['op2'] != '') ? @$this->request->data['op2'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $data->where(['id' => $req]);
            }

            if($op != null){
                $data = $data->where(['numero_orden_pago' => $op]);
            }

            if($op2 != null){
                $data = $data->where(['numero_orden_pago_ord' => $op2]);
            }

            if($d != null and $h != null){
                $data = $data->where(['and' => ['fecha_ordenamiento >=' => $d, 'fecha_ordenamiento <=' => $h]]);
            }
        }

        $data = $this->paginate($data);
        $this->set(compact('data'));
	}

	public function liquidar($requisicion = null, $numero_orden_pago = null, $numero_orden_pago_ord = null){

        if($requisicion == null or $numero_orden_pago == null or $numero_orden_pago_ord == null){
            return $this->redirect(['action' => 'index']);
        }

        $this->loadModel('ViewTesoreria');
        $concepto = $this->ViewTesoreria->find('all')->where(['id' => $requisicion])->last();
        $concepto = ($concepto['concepto_mod'] != null) ? $concepto['concepto_mod'] : $concepto['concepto'];
        $this->set('concepto', $concepto);

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->set('requisicion', $requisicion);
        $this->set('numero_orden_pago', $numero_orden_pago);
        $this->set('numero_orden_pago_ord', $numero_orden_pago_ord);

        //========================================================
        //Verifica si la orden esta liquidada
        //========================================================

        $this->loadModel('ViewTesoreriaLiquidar');
        $condicion = ['requisicion' => $requisicion];
        $data = $this->ViewTesoreriaLiquidar->find('all')->where($condicion)->toArray();
        $this->set('data', $data);

        $status = $this->ViewTesoreriaLiquidar->find('all')->where($condicion)->last();
        $this->set('status', $status);
                
        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $condicion = ['id' => $requisicion];
        $monto_orden = $this->ViewTesoreria->find('all')->where($condicion)->last();
        $this->set("monto_orden", $this->moneda($monto_orden['monto']));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('TesoreriaOperacion');

        $operacion = $this->TesoreriaOperacion->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($operacion as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('operacion', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('TesoreriaCuentas');

        $cuentas_d = $this->TesoreriaCuentas->find('all')->where(['tipo' => 0])->toArray();
        $options = [];
        foreach ($cuentas_d as $key) 
        {
            $options[$key->numero_cuenta] = strtoupper($key->nombre_banco) . " (" . substr($key->numero_cuenta, -4) . ")";
        }
        $this->set('cuentas_d', $options);

        //========================================================

        $this->loadModel('TesoreriaPago');
        $tesoreria = $this->TesoreriaPago->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->TesoreriaPago->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->requisicion = $requisicion;
            $tesoreria->numero_orden_pago = $numero_orden_pago;
            $tesoreria->numero_orden_pago_ord = $numero_orden_pago_ord;

            $monto_cuenta = $this->revertir_moneda($this->request->data['disponibilidad']);
            $monto_orden = $this->revertir_moneda($this->request->data['monto_orden']);
            $monto = $this->revertir_moneda($this->request->data['monto']);
            
            $tesoreria->monto = $monto;

            if($monto > $monto_cuenta){
                $this->Flash->error(__('Fondo insuficiente en la cuenta seleccionada'));
            }else if($monto > $monto_orden){
                $this->Flash->error(__('Fondo Supera el monto de la Orden'));
            }else{
                if ($this->TesoreriaPago->save($tesoreria)) {

                    $this->loadModel('CompraRequisicion');
                    $query = $this->CompraRequisicion->query();
                    $query->update()
                        ->set(['fecha_tesoreria' => date('d/m/Y'), 'hora_tesoreria' => date('h:i:s')])
                        ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
                        ->execute();

                    $this->loadModel('MrrhhRequisicion');
                    $query = $this->MrrhhRequisicion->query();
                    $query->update()
                        ->set(['fecha_tesoreria' => date('d/m/Y'), 'hora_tesoreria' => date('h:i:s')])
                        ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
                        ->execute();

                    $this->loadModel('EjecucionRequisicionTransferencia');
                    $query = $this->EjecucionRequisicionTransferencia->query();
                    $query->update()
                        ->set(['fecha_tesoreria' => date('d/m/Y'), 'hora_tesoreria' => date('h:i:s')])
                        ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
                        ->execute();

                    //==============================================================

                    $this->Flash->success(__('Datos de la cuenta actualizada'));
                    return $this->redirect(['action' => 'liquidar', $requisicion, $numero_orden_pago, $numero_orden_pago_ord]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
        }
        $this->set(compact('tesoreria'));
	}

    public function procesar($requisicion = null, $numero_orden_pago = null, $numero_orden_pago_ord = null){
        
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 7])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 7])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->loadModel('EjecucionRequisicionTransferencia');
        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 7])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Datos procesados'));
        return $this->redirect(['action' => 'liquidar', $requisicion, $numero_orden_pago, $numero_orden_pago_ord]);
    }

    public function delete($id = null, $requisicion = null, $numero_orden_pago = null, $numero_orden_pago_ord = null)
    {
        $this->loadModel('TesoreriaPago');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->TesoreriaPago->get($id);
        if ($this->TesoreriaPago->delete($data)) {
            $this->Flash->success(__('Registro Eliminada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'liquidar', $requisicion, $numero_orden_pago, $numero_orden_pago_ord]);
    }
}
