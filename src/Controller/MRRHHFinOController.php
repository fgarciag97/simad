<?php
namespace App\Controller;

use App\Controller\AppController;

class MRRHHFinOController extends AppController 
{
     public function index($tp = null, $d = null, $h = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 250);

        //========================================================

        /*$this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['concepto <>' => '', 'tipo' => 'FIN'];
        $nominas = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        $this->set(compact('nominas'));*/

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');
        $tipo_nomina = $this->MrrhhTipoPersonal->find('all')->where(['AND' => ['id >' => 3, 'id <' => 6]])->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        $a = 0;

        //========================================================
        //Generar PDF
        //========================================================

        if($tp != null and $d != null and $h != null){

            $this->set('tps', $tp);
            $this->set('ds', $d);
            $this->set('hs', $h);

            if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhFinObrerosx');
            $n = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->count();

            $this->loadModel('MrrhhFinObreros');
            $verifica = $this->MrrhhFinObreros->find('all')->where(['AND' => ['fecha_desde >' => "01/01/".ANO_FISCAL, 'fecha_desde <' => "31/12/".ANO_FISCAL]]);

            if($n == 0){
                foreach ($query as $reg) {

                    $var = false;

                   /* foreach ($verifica as $v) {
                        if($v['cedula'] == $reg['cedula']){
                            $var = true;
                        }
                    }*/

                    if($var == false){
                        $this->loadModel('MrrhhFinObrerosx');
                        $nomina = $this->MrrhhFinObrerosx->newEntity();
                        $nomina = $this->MrrhhFinObrerosx->patchEntity($nomina, $this->request->getData());

                        $nomina->ano = ANO_FISCAL;
                        $nomina->desde = $d;
                        $nomina->hasta = $h;
                        $nomina->id_tipo_personal = $tp;
                        $nomina->cedula = $reg->cedula;
                        $nomina->requisicion = 9999;
                        //-------------------------------
                        $nomina->ente_adscrito = $reg->ente_adscrito;
                        $nomina->status = $reg->status;
                        $nomina->ano_servicio = $reg->ano_servicio;
                        $nomina->anos_institucion = $reg->anos_institucion;
                        $nomina->anos_servicio = $reg->anos_servicio;
                        $nomina->grado_porcentaje = $reg->grado_porcentaje;
                        $nomina->grupo = $reg->grupo;
                        $nomina->sueldo_base = $reg->sueldo_base;
                        $nomina->sueldo = $reg->sueldo;
                        $nomina->grado_nivel = $reg->grado_nivel;
                        $nomina->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                        $nomina->beca_escolar_inicial = $reg->beca_escolar_inicial;
                        $nomina->beca_escolar_primaria = $reg->beca_escolar_primaria;
                        $nomina->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                        $nomina->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                        $nomina->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                        $nomina->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                        $nomina->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                        $nomina->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                        $nomina->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                        $nomina->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                        $nomina->prima_hogar = $reg->prima_hogar;
                        $nomina->caja_ahorro = $reg->caja_ahorro;
                        $nomina->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                        $nomina->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                        $nomina->funeraria = $reg->funeraria;
                        $nomina->asociacion_funeraria = $reg->asociacion_funeraria;
                        $nomina->sindicato = $reg->sindicato;
                        $nomina->hijos = $reg->hijos;
                        $nomina->prima_hijos = $reg->prima_hijos;
                        $nomina->antiguedad = $reg->antiguedad;

                        $nomina->prima_profesion = $reg->prima_profesion;
                        $nomina->prima_antiguedad = $reg->prima_antiguedad;
                        $nomina->deduccion_sso = $reg->deduccion_sso;
                        $nomina->deduccion_rpe = $reg->deduccion_rpe;
                        $nomina->deduccion_fpj = $reg->deduccion_fpj;
                        $nomina->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                        $nomina->aporte_patronal_asso = $reg->aporte_patronal_asso;
                        $nomina->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                        $nomina->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                        $nomina->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                        $nomina->depositario_judicial = $reg->depositario_judicial;
                        $nomina->depositario_judicial_monto = $reg->depositario_judicial_monto;
                        
                        $nomina->x_prima_profesion = $reg->x_prima_profesion;
                        $nomina->x_prima_antiguedad = $reg->x_prima_antiguedad;
                        $nomina->x_deduccion_sso = $reg->x_deduccion_sso;
                        $nomina->x_deduccion_rpe = $reg->x_deduccion_rpe;
                        $nomina->x_deduccion_fpj = $reg->x_deduccion_fpj;
                        $nomina->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                        $nomina->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                        $nomina->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                        $nomina->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                        $nomina->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                        $nomina->x_depositario_judicial = $reg->x_depositario_judicial;
                        $nomina->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;
                        
                        $nomina->cantidad_dias = 104 + $reg->anos_servicio;
                        if($nomina->cantidad_dias > 120) $nomina->cantidad_dias = 120; 
                        $nomina->fecha_desde = date('d-m-Y');
                        $nomina->fecha_hasta = strtotime(date('d-m-Y') . "+ " . $nomina->cantidad_dias . " days");
                        $nomina->fecha_reintegro = strtotime(date('d-m-Y') . "+ " . ($nomina->cantidad_dias + 1) . " days");


                        $nomina->alicuota_v = $reg->alicuota_v;
                        $nomina->alicuota_f = $reg->alicuota_f;
                        $nomina->alicuota = $reg->alicuota;
                        $nomina->disfrute_v = $reg->disfrute_v;
                        $nomina->bono_v = $reg->bono_v;
                        $nomina->dias_d = $reg->dias_d;
                        $nomina->dias_bono = $reg->dias_bono;
                        $nomina->horas_extras = $reg->horas_extras;


                        $nomina->procesado = 0;

                        $this->MrrhhFinObrerosx->save($nomina);
                    }
                }
            }
        }

        if($tp != '' and $d != '' and $h != ''){
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhFinObrerosx');
            $data = $this->paginate($this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhFinObrerosx');
            $data2 = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhFinObreros');
            $db = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion]);
            $this->set(compact('db'));

            $ndb = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp, 'tipo' => 'FIN'];

            $this->loadModel('MrrhhRequisicion');
            $estatus = $this->MrrhhRequisicion->find('all')->where($condicion)->count();
            
            if($estatus != 0){
                $this->set('estatus', true);
                $concep = $this->MrrhhRequisicion->find('all')->where($condicion)->toArray();
                $this->set('concepto', $concep[0]['concepto']);
                $this->set('status', $concep[0]['status']);
                $this->set('requisicion', $this->requisicion($concep[0]['id']));
            }else{
                $this->set('estatus', false);
            }
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $d = $this->request->data['desde'];
            $h = $this->request->data['hasta'];

            if($tp != '' and $d != '' and $h != ''){

                return $this->redirect(['action' => 'index', $tp, $d, $h]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $d = $this->request->data['ds'];
            $h = $this->request->data['hs'];
            $tp = $this->request->data['tps'];

            $concepto = @$this->request->data['concepto'];  

            //========================================================
            //Numero de requisicion
            //========================================================
            $this->loadModel('MrrhhRequisicion');

            $requisicion = $this->DameRequisicion(); 
            $numero_orden_pago = $this->DameOrdenServicio();

            $req = $this->MrrhhRequisicion->newEntity();
            $req = $this->MrrhhRequisicion->patchEntity($req, $this->request->getData());
            $req->id = $requisicion;
            $req->numero_orden_pago = $numero_orden_pago;
            $req->id_tipo_personal = $tp;
            $req->ano = ANO_FISCAL;
            $req->desde = $d;
            $req->hasta = $h;
            $req->tipo = 'FIN';

            $req->concepto = $concepto;

            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){
                
                $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp, 'procesado' => 1];

                $this->loadModel('ViewMrrhhFinObrerosx');
                $query = $this->ViewMrrhhFinObrerosx->find('all')->where($condicion);

                //=============================================================

                foreach ($query as $reg) {

                    if($reg->dias != 0 or $reg->dias_d != 0){
                        $this->loadModel('MrrhhFinObreros');
                        $nomina = $this->MrrhhFinObreros->newEntity();
                        $nomina = $this->MrrhhFinObreros->patchEntity($nomina, $this->request->getData());

                        $nomina->ano = ANO_FISCAL;
                        $nomina->desde = $d;
                        $nomina->hasta = $h;
                        $nomina->id_tipo_personal = $tp;
                        $nomina->cedula = $reg->cedula;
                        $nomina->requisicion = $requisicion;
                        //-------------------------------
                        $nomina->ano_servicio = $reg->ano_servicio;
                        $nomina->anos_institucion = $reg->anos_institucion;
                        $nomina->anos_servicio = $reg->anos_servicio;
                        $nomina->grado_porcentaje = $reg->grado_porcentaje;
                        $nomina->grupo = $reg->grupo;

                        $nomina->sueldo = $reg->sueldo;
                        $nomina->sueldo_base = $reg->sueldo_base;
                        $nomina->ente_adscrito = $reg->ente_adscrito;
                        $nomina->status = $reg->status;
                        $nomina->grado_nivel = $reg->grado_nivel;
                        $nomina->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                        $nomina->beca_escolar_inicial = $reg->beca_escolar_inicial;
                        $nomina->beca_escolar_primaria = $reg->beca_escolar_primaria;
                        $nomina->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                        $nomina->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                        $nomina->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                        $nomina->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                        $nomina->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                        $nomina->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                        $nomina->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                        $nomina->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                        $nomina->prima_hogar = $reg->prima_hogar;
                        $nomina->caja_ahorro = $reg->caja_ahorro;
                        $nomina->funeraria = $reg->funeraria;
                        $nomina->asociacion_funeraria = $reg->asociacion_funeraria;
                        $nomina->sindicato = $reg->sindicato;
                        $nomina->hijos = $reg->hijos;
                        $nomina->prima_hijos = $reg->prima_hijos;
                        $nomina->antiguedad = $reg->antiguedad;
                        $nomina->banco = $reg->banco;
                        $nomina->numero_cuenta = $reg->numero_cuenta;

                        $nomina->prima_profesion = $reg->prima_profesion;
                        $nomina->prima_antiguedad = $reg->prima_antiguedad;
                        $nomina->deduccion_sso = $reg->deduccion_sso;
                        $nomina->deduccion_rpe = $reg->deduccion_rpe;
                        $nomina->deduccion_fpj = $reg->deduccion_fpj;
                        $nomina->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                        $nomina->aporte_patronal_asso = $reg->aporte_patronal_asso;
                        $nomina->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                        $nomina->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                        $nomina->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                        $nomina->depositario_judicial = $reg->depositario_judicial;
                        $nomina->depositario_judicial_monto = $reg->depositario_judicial_monto;
                        
                        $nomina->x_prima_profesion = $reg->x_prima_profesion;
                        $nomina->x_prima_antiguedad = $reg->x_prima_antiguedad;
                        $nomina->x_deduccion_sso = $reg->x_deduccion_sso;
                        $nomina->x_deduccion_rpe = $reg->x_deduccion_rpe;
                        $nomina->x_deduccion_fpj = $reg->x_deduccion_fpj;
                        $nomina->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                        $nomina->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                        $nomina->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                        $nomina->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                        $nomina->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                        $nomina->x_depositario_judicial = $reg->x_depositario_judicial;
                        $nomina->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;

                        $nomina->dias = $reg->dias;
                        $nomina->cantidad_dias = $reg->cantidad_dias;
                        $nomina->fecha_desde = $reg->fecha_desde;
                        $nomina->fecha_hasta = $reg->fecha_hasta;
                        $nomina->fecha_reintegro = $reg->fecha_reintegro;

                        $nomina->alicuota_v = $reg->alicuota_v;
                        $nomina->alicuota_f = $reg->alicuota_f;
                        $nomina->alicuota = $reg->alicuota;
                        $nomina->disfrute_v = $reg->disfrute_v;
                        $nomina->bono_v = $reg->bono_v;
                        $nomina->dias_d = $reg->dias_d;
                        $nomina->dias_bono = $reg->dias_bono;
                        $nomina->horas_extras = $reg->horas_extras;

                        $this->MrrhhFinObreros->save($nomina);
                    }
                }


                $this->loadModel('MrrhhFinObrerosx');
                $this->MrrhhFinObrerosx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

                $this->Flash->success(__('Fin Elaborada'));
                return $this->redirect(['controller' => 'MrrhhRequisicion', 'action' => 'fin']);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'index', $tp, $d, $h]);
            }
        }

        //=============================================================
    }

    public function enviar($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 1])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Procesada'));
        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObreros');
        $this->MrrhhFinObreros->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

        $this->loadModel('MrrhhFinObrerosx');
        $this->MrrhhFinObrerosx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

        $this->Flash->success(__('Fin Eliminada'));
        return $this->redirect(['action' => 'index']);
    }

    public function incluir($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function incluirtodos($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function excluir($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function excluirtodos($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function asignardias(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();

        if(@$this->request->data['fecha_desde'] != null){
            $parametros = ['fecha_desde' => @$this->request->data['fecha_desde']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['fecha_hasta'] != null){
            $parametros = ['fecha_hasta' => @$this->request->data['fecha_hasta']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['fecha_reintegro'] != null){
            $parametros = ['fecha_reintegro' => @$this->request->data['fecha_reintegro']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        /*if(@$this->request->data['fecha_reintegro'] != null){
            $parametros = ['fecha_reintegro' => @$this->request->data['fecha_reintegro']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }*/


        if(@$this->request->data['dias'] != null){
            $parametros = ['dias' => @$this->request->data['dias']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }


        if(@$this->request->data['prima_antiguedad'] != null){
            $parametros = ['prima_antiguedad' => $this->revertir_moneda($this->request->data['prima_antiguedad'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['prima_profesion'] != null){
            $parametros = ['prima_profesion' => $this->revertir_moneda($this->request->data['prima_profesion'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['prima_hijos'] != null){
            $parametros = ['prima_hijos' => $this->revertir_moneda($this->request->data['prima_hijos'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }


        if(@$this->request->data['prima_hogar'] != null){
            $parametros = ['prima_hogar' => ($this->request->data['prima_hogar'] == 'SI') ? true : false];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['cantidad_dias'] != null){
            $parametros = ['cantidad_dias' => $this->request->data['cantidad_dias']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        /*if(@$this->request->data['cantidad_dias'] != null){
            $parametros = ['cantidad_dias' => $this->request->data['cantidad_dias']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }*/

        if(@$this->request->data['dias_d'] != null){
            $parametros = ['dias_d' => $this->request->data['dias_d']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['dias_bono'] != null){
            $parametros = ['dias_bono' => $this->request->data['dias_bono']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if(@$this->request->data['horas_extras'] != null){
            $parametros = ['horas_extras' => $this->request->data['horas_extras']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        

        if($query){
            $this->Flash->success(__('Parametros asignados'));
        }else{
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        
        return $this->redirect(['action' => 'index', $this->request->data['tps'], $this->request->data['ds'], $this->request->data['hs']]);
    } 





    public function addalicuota($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuota($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

     public function adddisfrute($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['disfrute_v' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropdisfrute($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['disfrute_v' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }



    public function addalicuotav($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota_v' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuotav($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota_v' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

     public function addalicuotaf($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota_f' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuotaf($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['alicuota_f' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function addbonov($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['bono_v' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropbonov($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinObrerosx');
        $query = $this->MrrhhFinObrerosx->query();
        $query->update()
            ->set(['bono_v' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }








    public function excel($tp, $mes, $h, $requisicion){
        
        $this->layout='ajax';

        if($tp > 3 and $tp < 7){
            $this->loadModel('ViewMrrhhFinObreros');
            $data = $this->ViewMrrhhFinObreros->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $mes, 'requisicion' => $requisicion, 'hasta' => $h]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $mes, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


}