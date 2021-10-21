<?php
namespace App\Controller;

use App\Controller\AppController;

class MOrdenamientoController extends AppController
{

	public function index(){
	   //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
		$this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);
        
	}

    public function recibidasnomina(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')
                ->where(['tipo <>' => 'COMPRA'])
                ->where(['tipo <>' => 'TRANSFERENCIA'])
                ->where(['tipo <>' => 'SERVICIO'])
                ->where(['tipo <>' => 'REQSERVICIO'])
                ->where(['and' => ['status >=' => '4', 'status <=' => '7']])
                ->order(['id' => 'DESC']);

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

    public function recibidascompra(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')
            ->where(['tipo <>' => 'NOMINA'])
            ->where(['tipo <>' => 'VACACIONES'])
            ->where(['tipo <>' => 'CESTA TICKET'])
            ->where(['tipo <>' => 'ASISTENCIA MEDICA'])
            ->where(['tipo <>' => 'BONO ESTABILIDAD'])
            ->where(['tipo <>' => 'HORAS EXTRAS'])
            ->where(['tipo <>' => 'TRANSFERENCIA'])
            ->where(['tipo <>' => 'REQSERVICIO'])
            ->where(['tipo <>' => 'PRESTACIONES SOCIALES'])
            ->where(['tipo <>' => 'ESPECIAL'])
            ->where(['tipo <>' => 'FIN'])
            ->order(['id' => 'DESC']);


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

    public function recibidasTransferencia(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')
            ->where(['tipo' => 'TRANSFERENCIA'])
            ->where(['and' => ['status >=' => '4', 'status <=' => '7']])
            ->order(['id' => 'DESC']);

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

    public function recibidasservicio(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')
            ->where(['tipo' => 'REQSERVICIO'])
            ->where(['and' => ['status >=' => '4', 'status <=' => '7']])
            ->order(['id' => 'DESC']);
        
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
 
    public function ordenarcompra($requisicion = null, $tipo = null){

        $this->set('requisicion', $requisicion);
        $this->set('tipo', $tipo);
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select de TIPO CALCULO
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo <>' => 'DEDUCCION'];
        $calculo = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($calculo as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('calculo', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewOrdenamientoCompra');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion, 'fraccion' => 1];
        $registros1 = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();
        $this->set(compact('registros1'));

        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion, 'fraccion' => 2];
        $registros2 = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();
        $this->set(compact('registros2'));

        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion, 'fraccion' => 3];
        $registros3 = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();
        $this->set(compact('registros3'));

        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion, 'fraccion' => 4];
        $registros4 = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();
        $this->set(compact('registros4'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')->where(['tipo' => $tipo, 'ano' => ANO_FISCAL, 'id' => $requisicion])->last()->toArray();
        $this->set('data', $data);

        //========================================================
        //Consulta el monto total de la requisicion
        //========================================================
        $this->loadModel('ViewCompraOrdenCompras');
        $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
        $compra = $this->ViewCompraOrdenCompras->find('all')->where($condicion)->toArray();
        $this->set(compact('compra'));

        //========================================================
        //Consulta el monto total de la requisicion
        //========================================================
        $this->loadModel('ViewCompraOrdenServicio');
        $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
        $servicio = $this->ViewCompraOrdenServicio->find('all')->where($condicion)->toArray();
        $this->set(compact('servicio'));

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('OrdenamientoCompra');
        $orden = $this->OrdenamientoCompra->newEntity();

        if ($this->request->is('post')) {
            $orden = $this->OrdenamientoCompra->patchEntity($orden, $this->request->getData());
            $orden->ano = ANO_FISCAL;
            $orden->bs = $this->verificamoneda($this->request->data('bs')); 

            if ($this->OrdenamientoCompra->save($orden)) {

                $this->loadModel('CompraOrdenCompras');
                $query = $this->CompraOrdenCompras->query(); 
                $query->update()
                    ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                    ->execute();

                $this->loadModel('CompraOrdenServicio');
                $query = $this->CompraOrdenServicio->query();
                $query->update()
                    ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                    ->execute();

                $this->Flash->success(__('Orden Registrada'));
                return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('orden'));
        //========================================================
    }

    public function ordenartransferencia($requisicion = null){

        $this->set('requisicion', $requisicion);
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select de TIPO CALCULO
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo <>' => 'DEDUCCION'];
        $calculo = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($calculo as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('calculo', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewOrdenamientoTransferencia');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewOrdenamientoTransferencia->find('all')->where($condicion))->toArray();
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')->where(['tipo' => 'TRANSFERENCIA', 'ano' => ANO_FISCAL, 'id' => $requisicion])->last()->toArray();
        $this->set('data', $data);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('OrdenamientoTransferencia');
        $orden = $this->OrdenamientoTransferencia->newEntity();

        if ($this->request->is('post')) {
            $orden = $this->OrdenamientoTransferencia->patchEntity($orden, $this->request->getData());
            $orden->ano = ANO_FISCAL;
            $orden->bs = $this->verificamoneda($this->request->data('bs'));

            if ($this->OrdenamientoTransferencia->save($orden)) {

                $this->loadModel('EjecucionTransferencia');
                $query = $this->EjecucionTransferencia->query();
                $query->update()
                    ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                    ->execute();

                $this->Flash->success(__('Orden Registrada'));
                return $this->redirect(['action' => 'ordenartransferencia', $requisicion]);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('orden'));
        //========================================================
    }


    public function ordenarreqservicio($requisicion = null){

        $this->set('requisicion', $requisicion);
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select de TIPO CALCULO
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo <>' => 'DEDUCCION'];
        $calculo = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($calculo as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('calculo', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewOrdenamientoServicio');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewOrdenamientoServicio->find('all')->where($condicion))->toArray();
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')->where(['tipo' => 'REQSERVICIO', 'ano' => ANO_FISCAL, 'id' => $requisicion])->last()->toArray();
        $this->set('data', $data);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('OrdenamientoServicio');
        $orden = $this->OrdenamientoServicio->newEntity();

        if ($this->request->is('post')) {
            $orden = $this->OrdenamientoServicio->patchEntity($orden, $this->request->getData());
            $orden->ano = ANO_FISCAL;
            $orden->bs = $this->verificamoneda($this->request->data('bs'));

            if ($this->OrdenamientoServicio->save($orden)) {

                $this->loadModel('MrrhhRequisicionServicios');
                $query = $this->MrrhhRequisicionServicios->query();
                $query->update()
                    ->set(['concepto_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'id' => $this->request->data('id')])
                    ->execute();

                $this->Flash->success(__('Orden Registrada'));
                return $this->redirect(['action' => 'ordenarreqservicio', $requisicion]);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('orden'));
        //========================================================
    }

    public function ordenarservicio($requisicion = null){

        $this->set('requisicion', $requisicion);
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select de TIPO CALCULO
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo <>' => 'DEDUCCION'];
        $calculo = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($calculo as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('calculo', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewOrdenamientoServicio');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewOrdenamientoServicio->find('all')->where($condicion))->toArray();
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')->where(['tipo' => 'SERVICIO', 'ano' => ANO_FISCAL, 'id' => $requisicion])->last()->toArray();
        $this->set('data', $data);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('OrdenamientoServicio');
        $orden = $this->OrdenamientoServicio->newEntity();

        if ($this->request->is('post')) {
            $orden = $this->OrdenamientoServicio->patchEntity($orden, $this->request->getData());
            $orden->ano = ANO_FISCAL;
            $orden->bs = $this->verificamoneda($this->request->data('bs'));

            if ($this->OrdenamientoServicio->save($orden)) {

                $this->loadModel('MrrhhRequisicionServicios');
                $query = $this->MrrhhRequisicionServicios->query();
                $query->update()
                    ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                    ->execute();

                $this->Flash->success(__('Orden Registrada'));
                return $this->redirect(['action' => 'ordenarservicio', $requisicion]);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('orden'));
        //========================================================
    }

    public function ordenarnomina($requisicion = null){

        $this->set('requisicion', $requisicion);
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select de TIPO CALCULO
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo <>' => 'IMPUESTO'];
        $calculo = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->toArray();
        $options = [];
        foreach ($calculo as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('calculo', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewOrdenamientoNomina');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewOrdenamientoNomina->find('all')->where($condicion))->toArray();
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewOrdenamiento');
        $data = $this->ViewOrdenamiento->find('all')->where(['tipo <>' => 'COMPRA', 'ano' => ANO_FISCAL, 'id' => $requisicion])->last()->toArray();
        $this->set('data', $data);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('OrdenamientoNomina');
        $orden = $this->OrdenamientoNomina->newEntity();

        if ($this->request->is('post')) {
            $orden = $this->OrdenamientoNomina->patchEntity($orden, $this->request->getData());
            $orden->ano = ANO_FISCAL;
            $orden->bs = $this->verificamoneda($this->request->data('bs'));

            if ($this->OrdenamientoNomina->save($orden)) {

                $this->loadModel('MrrhhRequisicion');
                $query = $this->MrrhhRequisicion->query();
                $query->update()
                    ->set(['concepto_mod' => $this->request->data('concepto')])
                    ->where(['ano' => ANO_FISCAL, 'id' => $this->request->data('id_requisicion')])
                    ->execute();

                $this->Flash->success(__('Orden Registrada'));
                return $this->redirect(['action' => 'ordenarnomina', $requisicion]);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('orden'));
        //========================================================
    }

    public function aprobarnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');

        $x = $this->MrrhhRequisicion->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord'] != null){
            $orden = $x['numero_orden_pago_ord'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 5, 'fecha_ordenamiento' => date('d/m/Y'), 'hora_ordenamiento' => date('h:i:s'), 'numero_orden_pago_ord' => $orden])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'recibidasnomina']);
    }

    public function deletenomina($id = null, $requisicion = null)
    {
        $this->loadModel('OrdenamientoNomina');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->OrdenamientoNomina->get($id);
        if ($this->OrdenamientoNomina->delete($data)) {
            $this->Flash->success(__('El calculo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'ordenarnomina', $requisicion]);
    }

    public function aprobarreqservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');

        $x = $this->MrrhhRequisicionServicios->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord'] != null){
            $orden = $x['numero_orden_pago_ord'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 5, 'fecha_ordenamiento' => date('d/m/Y'), 'hora_ordenamiento' => date('h:i:s'), 'numero_orden_pago_ord' => $orden])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'ordenarreqservicio', $requisicion]);
    }

    public function deletereqservicio($id = null, $requisicion = null)
    {
        $this->loadModel('OrdenamientoServicio');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->OrdenamientoServicio->get($id);
        if ($this->OrdenamientoServicio->delete($data)) {
            $this->Flash->success(__('El calculo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'ordenarreqservicio', $requisicion]);
    }

    public function aprobartransferencia($requisicion = null){
        $this->loadModel('EjecucionRequisicionTransferencia');
        
        $x = $this->EjecucionRequisicionTransferencia->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord'] != null){
            $orden = $x['numero_orden_pago_ord'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 5, 'fecha_ordenamiento' => date('d/m/Y'), 'hora_ordenamiento' => date('h:i:s'), 'numero_orden_pago_ord' => $orden])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'recibidastransferencia']);
    }

    public function deletetransferencia($id = null, $requisicion = null)
    {
        $this->loadModel('OrdenamientoTransferencia');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->OrdenamientoTransferencia->get($id);
        if ($this->OrdenamientoTransferencia->delete($data)) {
            $this->Flash->success(__('El calculo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'ordenartransferencia', $requisicion]);
    }


    public function aprobarservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        
        $x = $this->EjecucionRequisicionTransferencia->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord'] != null){
            $orden = $x['numero_orden_pago_ord'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 5, 'fecha_ordenamiento' => date('d/m/Y'), 'hora_ordenamiento' => date('h:i:s'), 'numero_orden_pago_ord' => $orden])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'recibidasservicio']);
    }

    public function deleteservicio($id = null, $requisicion = null)
    {
        $this->loadModel('OrdenamientoServicio');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->OrdenamientoServicio->get($id);
        if ($this->OrdenamientoServicio->delete($data)) {
            $this->Flash->success(__('El calculo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'ordenarservicio', $requisicion]);
    }

    public function aprobarcompra1($requisicion = null, $tipo = null){
        $this->loadModel('CompraRequisicion');

        $x = $this->CompraRequisicion->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord'] != null){
            $orden = $x['numero_orden_pago_ord'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 5, 'fecha_ordenamiento' => date('d/m/Y'), 'hora_ordenamiento' => date('h:i:s'), 'numero_orden_pago_ord' => $orden, 'status1' => true])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'ordenarcompra' , $requisicion, $tipo]);
    }

    public function aprobarcompra2($requisicion = null, $tipo = null){
        $this->loadModel('CompraRequisicion');

        $x = $this->CompraRequisicion->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord2'] != null){
            $orden = $x['numero_orden_pago_ord2'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['numero_orden_pago_ord2' => $orden, 'status2' => true])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'ordenarcompra' , $requisicion, $tipo]);
    }

    public function aprobarcompra3($requisicion = null, $tipo = null){
        $this->loadModel('CompraRequisicion');

        $x = $this->CompraRequisicion->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord3'] != null){
            $orden = $x['numero_orden_pago_ord3'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['numero_orden_pago_ord3' => $orden, 'status3' => true])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'ordenarcompra' , $requisicion, $tipo]);
    }

    public function aprobarcompra4($requisicion = null, $tipo = null){
        $this->loadModel('CompraRequisicion');

        $x = $this->CompraRequisicion->find('all')->where(['id' => $requisicion])->last();

        if($x['numero_orden_pago_ord4'] != null){
            $orden = $x['numero_orden_pago_ord4'];
        }else{
            $orden = $this->DameOrdenPago();
        }

        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['numero_orden_pago_ord4' => $orden, 'status4' => true])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Aprobada'));
        return $this->redirect(['action' => 'ordenarcompra' , $requisicion, $tipo]);
    }

    public function deletecompra($id = null, $requisicion = null, $tipo = null)
    {
        $this->loadModel('OrdenamientoCompra');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->OrdenamientoCompra->get($id);
        if ($this->OrdenamientoCompra->delete($data)) {
            $this->Flash->success(__('El calculo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
    }


    public function rechazarnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 2])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'recibidasnomina']);
    }
    
    public function revertirnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarnomina', $requisicion]);
    }


    public function rechazarcompra($requisicion = null, $tipo = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 2])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'recibidascompra',$tipo]);
    }
    
    public function revertircompra1($requisicion = null, $tipo= null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 4, 'status1' => false])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
    }

    public function revertircompra2($requisicion = null, $tipo= null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status2' => false])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
    }

    public function revertircompra3($requisicion = null, $tipo= null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status3' => false])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
    }

    public function revertircompra4($requisicion = null, $tipo= null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status4' => false])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarcompra', $requisicion, $tipo]);
    }

    public function rechazartransferencia($requisicion = null){
        $this->loadModel('EjecucionRequisicionTransferencia');
        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 2])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'recibidastransferencia']);
    }
    
    public function revertirtransferencia($requisicion = null){
        $this->loadModel('EjecucionRequisicionTransferencia');
        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenartransferencia', $requisicion]);
    }

    public function rechazarreqservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 2])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'recibidasservicio']);
    }
    
    public function revertirreqservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'ordenarreqservicio', $requisicion]);
    }









    public function numeroordennomina(){

        if($this->request->data['id'] != null){

            $this->loadModel('MrrhhRequisicion');
            $query = $this->MrrhhRequisicion->query();
            $query->update()
                ->set(['numero_orden_pago_ord' => $this->request->data['numero_orden_pago_ord'], 'fecha_rrhh' => $this->request->data['fecha_rrhh'], 'fecha_ejecucion' => $this->request->data['fecha_ejecucion'], 'fecha_ordenamiento' => $this->request->data['fecha_ordenamiento']])
                ->where(['id' => $this->request->data['id']])
                ->execute();
            

            $this->Flash->success(__('Registro Modificada'));
        }else{
            $this->Flash->error(__('Ha ocurrido un error'));
        }
        return $this->redirect(['action' => 'recibidasnomina']);
    }

    public function numeroordencompra(){

        if($this->request->data['id'] != null){

            $this->loadModel('CompraRequisicion');
            $query = $this->CompraRequisicion->query();
            $query->update()
                ->set(['numero_orden_pago_ord' => $this->request->data['numero_orden_pago_ord'], 'fecha_rrhh' => $this->request->data['fecha_rrhh'], 'fecha_ejecucion' => $this->request->data['fecha_ejecucion'], 'fecha_ordenamiento' => $this->request->data['fecha_ordenamiento']])
                ->where(['id' => $this->request->data['id']])
                ->execute();
            

            $this->Flash->success(__('Registro Modificada'));
        }else{
            $this->Flash->error(__('Ha ocurrido un error'));
        }
        return $this->redirect(['action' => 'recibidascompra']);
    }

    public function numeroordenservicio(){

        if($this->request->data['id'] != null){

            $this->loadModel('MrrhhRequisicionServicios');
            $query = $this->MrrhhRequisicionServicios->query();
            $query->update()
                ->set(['numero_orden_pago_ord' => $this->request->data['numero_orden_pago_ord'], 'fecha_rrhh' => $this->request->data['fecha_rrhh'], 'fecha_ejecucion' => $this->request->data['fecha_ejecucion'], 'fecha_ordenamiento' => $this->request->data['fecha_ordenamiento']])
                ->where(['id' => $this->request->data['id']])
                ->execute();
            

            $this->Flash->success(__('Registro Modificada'));
        }else{
            $this->Flash->error(__('Ha ocurrido un error'));
        }
        return $this->redirect(['action' => 'recibidasservicio']);
    }

    public function numeroordentransferencia(){

        if($this->request->data['id'] != null){

            $this->loadModel('EjecucionRequisicionTransferencia');
            $query = $this->EjecucionRequisicionTransferencia->query();
            $query->update()
                ->set(['numero_orden_pago_ord' => $this->request->data['numero_orden_pago_ord'], 'fecha_ordenamiento' => $this->request->data['fecha_ordenamiento'], 'fecha' => $this->request->data['fecha']])
                ->where(['id' => $this->request->data['id']])
                ->execute();

            $this->loadModel('EjecucionTransferencia');
            $query = $this->EjecucionTransferencia->query();
            $query->update()
                ->set(['fecha' => $this->request->data['fecha']])
                ->where(['requisicion' => $this->request->data['id']])
                ->execute();

            $id_orden = $this->EjecucionTransferencia->find('all')->where(['requisicion' => $this->request->data['id']])->last();

            $this->loadModel('EjecucionTransferenciaItems');
            $query = $this->EjecucionTransferenciaItems->query();
            $query->update()
                ->set(['fecha' => $this->request->data['fecha']])
                ->where(['id_orden' => $id_orden['id']])
                ->execute();
            
            $this->Flash->success(__('Registro Modificada'));
        }else{
            $this->Flash->error(__('Ha ocurrido un error'));
        }
        return $this->redirect(['action' => 'recibidastransferencia']);
    }


















    
    public function reportenominacomprometido($req = null, $num = null){

        $n = 10 - strlen($req);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $req; 
            
 
        $condicion = ['id_requisicion' => $req];
        $this->loadModel('ViewOrdenamientoNomina');
        $data = $this->ViewOrdenamientoNomina->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewEjecucionRequisicionNomina');
        $partidas = $this->ViewEjecucionRequisicionNomina->find('all')->where($condicion)->toArray();

        $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicion');
        $numeros = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->last();

        $n = 6 - strlen($numeros['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $numeros['numero_orden_pago']; 


        $n = 6 - strlen($numeros['numero_orden_pago_ord']);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $numeros['numero_orden_pago_ord']; 

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($numeros['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($numeros['fecha_ordenamiento'], 'F')) . ' del ' . date_format($numeros['fecha_ordenamiento'], 'Y'),0,1,'R');



        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();


        $total = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }


        $pdf -> SetFont('Arial','',8);


        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Alcaldia del Municipio Miranda',0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'RIF: G-20000169-0',0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);

        if($total < 0){
            $t = 0; 

            if($data[0]['id_requisicion'] == 685){
                $pdf -> MultiCell(140,5,$this->convertir(18394276.37),0,'J',0);
            }else{
                $pdf -> MultiCell(140,5,$this->convertir($t),0,'J',0);
            }

        }else{

            if($data[0]['id_requisicion'] == 685){
                $pdf -> MultiCell(140,5,$this->convertir(18394276.37),0,'J',0);
            }else{
                $pdf -> MultiCell(140,5,$this->convertir($total),0,'J',0);
            }
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);

            if($data[0]['id_requisicion'] == 685){
                $pdf -> Cell(40,5,'Bs.S'.'   '. number_format(18394276.37, 2, ',', '.'),1,1,'J');
            }else{
                if($data[0]['id_requisicion'] == 522){
                    $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total - 5.4, 2, ',', '.'),1,1,'J');
                } else {
                    $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');
                }
            }




        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        /*$pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');*/
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha($numeros['fecha_rrhh']),0,1,'L');
        //$pdf -> Cell(40,5, '   '.date('d/m/Y'),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

         $y = $pdf-> GetY();
        $pdf -> SetY($y+25);

        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(160,5,$this->mayus($numeros['concepto']),0,'J',0);
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Deducciones)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);

        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'],1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');

        if($data[0]['id_requisicion'] == 685){
                $pdf -> Cell(40,6,number_format(18394276.37, 2, ',', '.'),1,1,'R');
            }else{
                if($data[0]['id_requisicion'] == 522){
                    $pdf -> Cell(40,6,number_format($total- 5.4, 2, ',', '.'),1,1,'R');
                } else {
                    $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');
                }
            }


        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(175);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(175);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(175);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(175);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);




        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {


                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(5,$y);
                    $pdf->MultiCell($x + 8,3,'14.01.51',0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(25,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 165,$y);
                    $pdf->MultiCell(25,3,$this->moneda($key['monto_comprometer']),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);



           /* $pdf -> SetX(5);
            $pdf -> Cell(20,6, "14.01.51",1,0,'L');
            $pdf -> Cell(25,6, $key['partida'],1,0,'L');
            $pdf -> Cell(120,6, $this->mayus($key['denominacion']),1,0,'J');
            $pdf -> Cell(30,6, number_format($key['monto_comprometer'], 2, ',', '.'),1,1,'R');*/
        }
   

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }


   public function reportetransferenciacomprometido($req = null, $num = null){

        $n = 10 - strlen($req);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $req; 
            

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $num; 
    
        $condicion = ['id_requisicion' => $req];
        $this->loadModel('ViewOrdenamientoTransferencia');
        $data = $this->ViewOrdenamientoTransferencia->find('all')->where($condicion)->toArray();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewEjecucionTransferenciaItems');
        $partidas = $this->ViewEjecucionTransferenciaItems->find('all')->where($condicion)->toArray();

        $condicion = ['id' => $req];
        $this->loadModel('ViewOrdenamiento');
        $fecha = $this->ViewOrdenamiento->find('all')->where($condicion)->last();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewEjecucionTransferencia');
        $beneficiario = $this->ViewEjecucionTransferencia->find('all')->where($condicion)->last();

         $condicion = ['id' => $req];
        $this->loadModel('ViewEjecucionRequisicionTransferencia');
        $numeros = $this->ViewEjecucionRequisicionTransferencia->find('all')->where($condicion)->last();


         $n = 6 - strlen($numeros['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $numeros['numero_orden_pago']; 


        $n = 6 - strlen($numeros['numero_orden_pago_ord']);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $numeros['numero_orden_pago_ord']; 

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($numeros['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($numeros['fecha_ordenamiento'], 'F')) . ' del ' . date_format($numeros['fecha_ordenamiento'], 'Y'),0,1,'R');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);


        $total = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }


        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> MultiCell(120,4,$this->mayus($beneficiario['beneficiario']),0,'J',0);
        //$pdf -> Cell(80,5,$beneficiario['beneficiario'],0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'V-'.$beneficiario['cedula'],0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);

        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(140,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(140,5,$this->convertir($total),0,'J',0);
        }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(55);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        //$pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        //$pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        //$pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        //$pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '. $this->fecha(@$numeros['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

         $y = $pdf-> GetY();
        $pdf -> SetY($y+25);

        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($beneficiario['descripcion_ordena']),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'],1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 024-2018',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {
            $pdf -> SetX(5);
            $pdf -> Cell(20,6, $partidas[0]['unidad_solicitante'],1,0,'C');
            $pdf -> Cell(25,6, $partidas[0]['id_partida'],1,0,'C');
            $pdf -> Cell(120,6, $this->mayus($partidas[0]['descripcion_partida']),1,0,'J');
            $pdf -> Cell(30,6, number_format($partidas[0]['sub_total'], 2, ',', '.'),1,1,'R');
        }
   

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }

    public function reportecompracomprometido($req = null, $num = null){

        $n = 10 - strlen($req);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $req; 
            

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $num; 
    
        $condicion = ['id_requisicion' => $req, 'fraccion' => 1];
        $this->loadModel('ViewOrdenamientoCompra');
        $data = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();

        $condicion = ['id' => $req];
        $this->loadModel('ViewOrdenamiento');
        $fecha = $this->ViewOrdenamiento->find('all')->where($condicion)->last();

        $condicion = ['id_requisicion' => $req];
        $this->loadModel('ViewEjecucionRequisicionCompra');
        $partidas = $this->ViewEjecucionRequisicionCompra->find('all')->where($condicion)->toArray();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewCompraFusion');
        $beneficiario = $this->ViewCompraFusion->find('all')->where($condicion)->last();

        $condicion = ['id' => $req];
        $this->loadModel('ViewCompraRequisicion');
        $numeros = $this->ViewCompraRequisicion->find('all')->where($condicion)->last();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewCompraOrdenFusion');
        $us = $this->ViewCompraOrdenFusion->find('all')->where($condicion)->first();

        $n = 6 - strlen($numeros['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $numeros['numero_orden_pago']; 


        $n = 6 - strlen($numeros['numero_orden_pago_ord']);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $numeros['numero_orden_pago_ord']; 

        if($numeros['numero_orden_pago_ord2'] != ''){
            $n = 6 - strlen($numeros['numero_orden_pago_ord2']);
            $numero_orden_pago_ord2 = '';
            for($i=0; $i < $n; $i++){
                $numero_orden_pago_ord2 .= "0";
            }
            $numero_orden_pago_ord2 .= $numeros['numero_orden_pago_ord2']; 
        }else{
            $numero_orden_pago_ord2 = null;
        }

        if($numeros['numero_orden_pago_ord3'] != ''){
            $n = 6 - strlen($numeros['numero_orden_pago_ord3']);
            $numero_orden_pago_ord3 = '';
            for($i=0; $i < $n; $i++){
                $numero_orden_pago_ord3 .= "0";
            }
            $numero_orden_pago_ord3 .= $numeros['numero_orden_pago_ord3']; 
        }else{
            $numero_orden_pago_ord3 = null;
        }

        if($numeros['numero_orden_pago_ord4'] != ''){
            $n = 6 - strlen($numeros['numero_orden_pago_ord4']);
            $numero_orden_pago_ord4 = '';
            for($i=0; $i < $n; $i++){
                $numero_orden_pago_ord4 .= "0";
            }
            $numero_orden_pago_ord4 .= $numeros['numero_orden_pago_ord4']; 
        }else{
            $numero_orden_pago_ord4 = null;
        }

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($numeros['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($numeros['fecha_ordenamiento'], 'F')) . ' del ' . date_format($numeros['fecha_ordenamiento'], 'Y'),0,1,'R');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        $bi = 0;
        $iva = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
                $bi = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
                $iva = $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> MultiCell(120,4,$this->mayus($beneficiario['proveedor']),0,'J',0);
        //$pdf -> Cell(80,5,$beneficiario['beneficiario'],0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,$beneficiario['letra'].'-'.$beneficiario['rif'],0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);


        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(55);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$numeros['fecha_rrhh']),0,0,'L');

        $pdf ->Ln();
        
        //$pdf -> Cell(40,5, '   '.$this->fecha(@$data[0]['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        if($beneficiario['descripcion_ordena_mod'] == null){
            $concepto = $beneficiario['descripcion_ordena'];
        }else{
           $concepto = $beneficiario['descripcion_ordena_mod']; 
        }

        $y = $pdf-> GetY();
        $pdf -> SetY($y+25);

        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($concepto),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'RETENCION DEL IPC') $tipo_porcentaje = 0.0080; else $tipo_porcentaje = $key['tipo_porcentaje'];
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$tipo_porcentaje*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {

                    $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell(20,3,$us['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 160,$y);
                    if($req == 634 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 273849469.41;
                    }
                    if($req == 634 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 43815915.11;
                    }


                    if($req == 677 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 107572227.39;
                    }
                    if($req == 677 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 17211556.38;
                    }

                    if($key['partida'] == '4.03.02.02.00.00'){
                        $key['monto_comprometer'] = (@$bi == null) ? 0 : @$bi;
                    }
                    if($key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = (@$iva == null) ? 0 : @$iva;
                    }
                    $pdf->MultiCell(30,3,number_format($key['monto_comprometer'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
        }

    //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================
    
    $condicion = ['id_requisicion' => $req, 'fraccion' => 2];
        $this->loadModel('ViewOrdenamientoCompra');
        $data = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();

    if($numero_orden_pago_ord2 != null){
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($fecha['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($fecha['fecha_ordenamiento'], 'F')) . ' del ' . date_format($fecha['fecha_ordenamiento'], 'Y'),0,1,'R');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord2,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        $bi = 0;
        $iva = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
                $bi = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
                $iva = $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> MultiCell(120,4,$this->mayus($beneficiario['proveedor']),0,'J',0);
        //$pdf -> Cell(80,5,$beneficiario['beneficiario'],0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,$beneficiario['letra'].'-'.$beneficiario['rif'],0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);


        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        
        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(55);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$data[0]['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        if($beneficiario['descripcion_ordena_mod'] == null){
            $concepto = $beneficiario['descripcion_ordena'];
        }else{
           $concepto = $beneficiario['descripcion_ordena_mod']; 
        }

        $y = $pdf-> GetY();
        $pdf -> SetY($y+25);

        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($concepto),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$key['tipo_porcentaje']*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'
',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {

                    $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell(20,3,$us['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 160,$y);
                    if($req == 634 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 273849469.41;
                    }
                    if($req == 634 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 43815915.11;
                    }

                    if($key['partida'] == '4.03.02.02.00.00'){
                        $key['monto_comprometer'] = (@$bi == null) ? 0 : @$bi;
                    }
                    if($key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = (@$iva == null) ? 0 : @$iva;
                    }
                    $pdf->MultiCell(30,3,number_format($key['monto_comprometer'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
        }
   }


   //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================
    
    $condicion = ['id_requisicion' => $req, 'fraccion' => 3];
        $this->loadModel('ViewOrdenamientoCompra');
        $data = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();

    if($numero_orden_pago_ord3 != null){
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($fecha['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($fecha['fecha_ordenamiento'], 'F')) . ' del ' . date_format($fecha['fecha_ordenamiento'], 'Y'),0,1,'R');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord2,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        $bi = 0;
        $iva = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
                $bi = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
                $iva = $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> MultiCell(120,4,$this->mayus($beneficiario['proveedor']),0,'J',0);
        //$pdf -> Cell(80,5,$beneficiario['beneficiario'],0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,$beneficiario['letra'].'-'.$beneficiario['rif'],0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);


        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        
        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(55);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$data[0]['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        if($beneficiario['descripcion_ordena_mod'] == null){
            $concepto = $beneficiario['descripcion_ordena'];
        }else{
           $concepto = $beneficiario['descripcion_ordena_mod']; 
        }

         $y = $pdf-> GetY();
        $pdf -> SetY($y+25);


        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($concepto),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$key['tipo_porcentaje']*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {

                    $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell(20,3,$us['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 160,$y);
                    if($req == 634 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 273849469.41;
                    }
                    if($req == 634 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 43815915.11;
                    }

                    if($key['partida'] == '4.03.02.02.00.00'){
                        $key['monto_comprometer'] = (@$bi == null) ? 0 : @$bi;
                    }
                    if($key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = (@$iva == null) ? 0 : @$iva;
                    }
                    $pdf->MultiCell(30,3,number_format($key['monto_comprometer'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
        }
   }

   //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================   
    //==========================================================================================================================
    
    $condicion = ['id_requisicion' => $req, 'fraccion' => 4];
        $this->loadModel('ViewOrdenamientoCompra');
        $data = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();

    if($numero_orden_pago_ord4 != null){
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($fecha['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($fecha['fecha_ordenamiento'], 'F')) . ' del ' . date_format($fecha['fecha_ordenamiento'], 'Y'),0,1,'R');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord2,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        $bi = 0;
        $iva = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
                $bi = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
                $iva = $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);
        $pdf -> MultiCell(120,4,$this->mayus($beneficiario['proveedor']),0,'J',0);
        //$pdf -> Cell(80,5,$beneficiario['beneficiario'],0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,$beneficiario['letra'].'-'.$beneficiario['rif'],0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);


        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        
        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(55);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$data[0]['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        if($beneficiario['descripcion_ordena_mod'] == null){
            $concepto = $beneficiario['descripcion_ordena'];
        }else{
           $concepto = $beneficiario['descripcion_ordena_mod']; 
        }

        $y = $pdf-> GetY();
        $pdf -> SetY($y+25);

        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($concepto),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$key['tipo_porcentaje']*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(190);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(190);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {

                    $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell(20,3,$us['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 160,$y);
                    if($req == 634 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 273849469.41;
                    }
                    if($req == 634 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 43815915.11;
                    }

                    if($key['partida'] == '4.03.02.02.00.00'){
                        $key['monto_comprometer'] = (@$bi == null) ? 0 : @$bi;
                    }
                    if($key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = (@$iva == null) ? 0 : @$iva;
                    }
                    $pdf->MultiCell(30,3,$this->moneda($key['monto_comprometer']),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
        }
   }

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }


    public function reportereqserviciocomprometido($req = null, $num = null){

        $n = 10 - strlen($req);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $req; 
            

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $num; 
    
        $condicion = ['id_requisicion' => $req];
        $this->loadModel('ViewOrdenamientoServicio');
        $data = $this->ViewOrdenamientoServicio->find('all')->where($condicion)->toArray();

        $condicion = ['id' => $req];
        $this->loadModel('ViewOrdenamiento');
        $fecha = $this->ViewOrdenamiento->find('all')->where($condicion)->last();

        $condicion = ['id_requisicion' => $req];
        $this->loadModel('ViewEjecucionRequisicionServicio');
        $partidas = $this->ViewEjecucionRequisicionServicio->find('all')->where($condicion)->toArray();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewMrrhhRequisicionServiciosPartidas');
        $beneficiario = $this->ViewMrrhhRequisicionServiciosPartidas->find('all')->where($condicion)->last();

        $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $concepto = $this->ViewMrrhhRequisicionServicios->find('all')->where($condicion)->last();

         $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $numeros = $this->ViewMrrhhRequisicionServicios->find('all')->where($condicion)->last();

        $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $orden = $this->ViewMrrhhRequisicionServicios->find('all')->where($condicion)->toArray();


         $n = 6 - strlen($numeros['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $numeros['numero_orden_pago']; 


        $n = 6 - strlen($numeros['numero_orden_pago_ord']);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $numeros['numero_orden_pago_ord']; 

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($fecha['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($fecha['fecha_ordenamiento'], 'F')) . ' del ' . date_format($fecha['fecha_ordenamiento'], 'Y'),0,1,'R');



        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numero_orden_pago_ord,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

         /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(55);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetX(15);

        if($orden[0]['requisicion'] == 838){

            $pdf -> SetX(15);
            $pdf -> SetFont('Arial','B',12);

            $pdf->MultiCell(100,4,$this->mayus('ALONSO MANZANO'),0,'J',0);
            $pdf -> SetX(15);
            $pdf -> Cell(80,5,'C.I / RIF: '.  'J'.' - '. '7.116.522',0,1,'L');
        }else{
            $pdf->MultiCell(100,4,$this->mayus($orden[0]['beneficiario']),0,'J',0);
            $pdf -> SetX(15);
            $pdf -> Cell(80,5,$numeros['letra'].'-'.$numeros['rif'],0,1,'J');
            $pdf -> SetX(15);
            $pdf -> Cell(80,5,'C.I / RIF: ' .$orden[0]['letra'].' - '. $orden[0]['rif'],0,1,'L');
            
        }


        
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);
        
        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        /*$pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');*/
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$numeros['fecha_rrhh']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        $y = $pdf-> GetY();
        $pdf -> SetY($y+40);
        
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(160,5,$this->mayus($numeros['concepto']),0,'J',0);




        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$key['tipo_porcentaje']*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);

        if($numero_orden_pago_ord == 624){
            $pdf -> SetX(5);
            $pdf -> Cell(20,6, "14.01.51",1,0,'L');
            $pdf -> Cell(25,6, '4.11.02.06.00',1,0,'L');
            $pdf -> Cell(120,6, 'Disminucion de aportes patronales y retenciones laborales por pagar al seguro de vida, accidentes personal..',1,0,'J');
            $pdf -> Cell(30,6, number_format(39581300.00, 2, ',', '.'),1,1,'R');
        }
        /*foreach ($partidas as $key) {
            $pdf -> SetX(5);
            $pdf -> Cell(20,6, "14.01.51",1,0,'L');
            $pdf -> Cell(25,6, $partidas['partida'],1,0,'L');
            $pdf -> Cell(120,6, $this->mayus($partidas['denominacion']),1,0,'J');
            $pdf -> Cell(30,6, number_format($partidas['monto_comprometer'], 2, ',', '.'),1,1,'R');
        }*/

        foreach ($partidas as $key) {

                    $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell(20,3,'14.01.51',0,'C',0);
                    //$pdf->MultiCell(20,3,@$key['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(25,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 40,$y);
                    $pdf->MultiCell(120,3,$this->mayus($key['denominacion']),0,'J',0);

                    $pdf->SetXY($x + 160,$y);
                    if($req == 634 and $key['partida'] == '4.02.08.07.00.00'){
                        $key['monto_comprometer'] = 273849469.41;
                    }
                    if($req == 634 and $key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = 43815915.11;
                    }

                    if($key['partida'] == '4.03.02.02.00.00'){
                        $key['monto_comprometer'] = (@$bi == null) ? 0 : @$bi;
                    }
                    if($key['partida'] == '4.03.18.01.00.00'){
                        $key['monto_comprometer'] = (@$iva == null) ? 0 : @$iva;
                    }
                    $pdf->MultiCell(30,3,$this->moneda($key['monto_comprometer']),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
        }



   

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }
    
    public function reporteserviciocomprometido($req = null){

         $n = 10 - strlen($req);
            $requisicion = '';
            for($i=0; $i < $n; $i++){
                $requisicion .= "0";
            }
            $requisicion .= $req; 
            
        $condicion = ['id_requisicion' => $req];
    
        $this->loadModel('ViewOrdenamientoCompra');
        $data = $this->ViewOrdenamientoCompra->find('all')->where($condicion)->toArray();
        
        $this->loadModel('ViewEjecucionRequisicionCompra');
        $partidas = $this->ViewEjecucionRequisicionCompra->find('all')->where($condicion)->toArray();

        $condicion = ['requisicion' => $req];
        $this->loadModel('ViewCompraOrdenServicio');
        $proveedor = $this->ViewCompraOrdenServicio->find('all')->where($condicion)->toArray();

         $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicion');
        $numeros = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->last();


         $n = 6 - strlen($numeros['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $numeros['numero_orden_pago']; 


        $n = 6 - strlen($numeros['numero_orden_pago_ord']);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $numeros['numero_orden_pago_ord']; 

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'SECRETARIA DE HACIENDA MUNICIPAL',0,1,'C');
        $pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(40,5,'Santa Ana de Coro; ' . date_format($fecha['fecha_ordenamiento'], 'd') . ' de ' . $this->mes_castellano(date_format($fecha['fecha_ordenamiento'], 'F')) . ' del ' . date_format($fecha['fecha_ordenamiento'], 'Y'),0,1,'R');



        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE PAGO: ' . $numeros[0]['numero_orden_pago'],0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();



        $pdf -> SetFont('Arial','',8);

        $total = 0;
        foreach ($data as $key) {

            if($key['tipo_calculo'] == 'BASE IMPONIBLE'){
                $total = $key['bs'];
            }else if($key['tipo_calculo'] == 'IVA'){
                $total += $key['bs']; 
            }else{
                $total -= $key['bs'];
            }
        }

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Sirvase a pagar a:',0,1,'J');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'RIF: G-20000169-0',0,1,'J');
        $pdf -> SetFont('Arial','I',9);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'La Cantidad de:',0,1,'J');
        $pdf -> SetX(15);

        if($total < 0){
            $t = 0; 
            $pdf -> MultiCell(120,5,$this->convertir($t),0,'J',0);
        }else{
            $pdf -> MultiCell(120,5,$this->convertir($total),0,'J',0);
        }
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Bs.S'.'   '. number_format($total, 2, ',', '.'),1,1,'J');



        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Factura:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_factura'],0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Nro Control',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, @$data[0]['n_control'],0,1,'L');
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, '   '.$this->fecha(@$data[0]['fecha']),0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'ODC: ' . $numero_orden_pago,0,0,'L');
        $pdf -> SetX(165);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        $y = $pdf-> GetY();
        $pdf -> SetY($y+25);
        
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'Valor de los bienes que se detallan a continuacion.',0,1,'L');
        $pdf -> SetX(15);
        $pdf -> MultiCell(160,5,$this->mayus($numeros['concepto']),0,'J',0);
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'Tipo de Calculo (Impuestos)',1,0,'L');
        $pdf -> Cell(40,6,'Montos',1,1,'R');
        
        $pdf -> SetFont('Arial','I',8);
        foreach ($data as $key) {
            $pdf -> SetX(10);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(140,6, $key['tipo_calculo'].' ( '. (@$key['tipo_porcentaje']*100) .'% )',1,0,'L');
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,6, number_format($key['bs'], 2, ',', '.'),1,1,'R');
        }

        $pdf -> SetX(10);
        $pdf -> Cell(140,6,'TOTAL A PAGAR'. '   ',1,0,'L');
        $pdf -> Cell(40,6,number_format($total, 2, ',', '.'),1,1,'R');

        $pdf-> ln();



        /* APARTIR DE AQUI LOS DATOS DE CALCULOS QUE INGRESA EL USUARIO AL MOMENTO DE ELABORAR LA APROBACION DEL COMPROMISO*/
        /*ESTO ES LA TABLA DE DATOS FIJOS*/
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> Cell(35,6,'REVISADO POR',1,0,'C');
        $pdf -> Cell(35,6,'APROBADO POR',1,0,'C');
        $pdf -> Cell(40,6,'RECIBIDO CONFORME',1,0,'C');
        $pdf -> SetY(101);

        
        /* ESTOS 3 CAMPOS SON DATOS FIJOS*/ 
        $pdf -> SetY(170);
        $pdf -> SetX(50);
        $pdf -> MultiCell(35,4,'




__________________
Licdo. Jose Gonzalez
C.I: 13.108.401
Jefe de la Oficina de
Contabilidad Fiscal
Decreto',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(85);
        $pdf -> MultiCell(35,4,'




__________________
Licda. Doryeli Aldama
C.I: 17.177.771
Jefa de la Secretaria de
Hacienda Municipal
Decreto- 006-2020',1,'C',0);
        $pdf -> SetY(170);
        $pdf -> SetX(120);
        $pdf -> MultiCell(40,4,'










',1,'C',0);



        $pdf -> ln();$pdf -> ln();

        /* AQUI SE TRAE EL CODIGO DE CATEGORIA PROGRAMATICA Y PRESUPUESTARIO EN CASO DE MODULO DE COMPRA*/
        $pdf -> SetX(15);
        $pdf -> Cell(40,5,'CODIGO PRESUPUESTARIO',0,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $pdf -> SetFont('Arial','',7);
        foreach ($partidas as $key) {
            $pdf -> SetX(5);
            $pdf -> Cell(20,6, "14.01.51",1,0,'L');
            $pdf -> Cell(25,6, $key['partida'],1,0,'L');
            $pdf -> Cell(120,6, $this->mayus($key['denominacion']),1,0,'J');
            $pdf -> Cell(30,6, number_format($key['monto_comprometer'], 2, ',', '.'),1,1,'R');
        }
   

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }

    
}
