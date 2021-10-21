<?php
namespace App\Controller;

use App\Controller\AppController;


class MRRHHRetroactivoController extends AppController
{
   
    public function nomina($tp = null, $m = null, $q = null){
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

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['concepto <>' => '', 'tipo' => 'RETROACTIVO'];
        $nominas = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        $this->set(compact('nominas'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_nomina = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);


        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Quincena');

        $quincena = $this->Quincena->find('all')->toArray();
        $options = [];
        foreach ($quincena as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('quincena', $options);

        $a = 0;


        //========================================================
        //Generar PDF
        //========================================================

        if($tp != null and $m != null and $q != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('qs', $q);

            if($tp == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $query = $this->ViewMrrhhEmpleadosFijosAux->find('all');
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                $query = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $query = $this->ViewMrrhhDirectivosAux->find('all');
            }if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $query = $this->ViewMrrhhObrerosNoPermanentesAux->find('all');
            }if($tp == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $query = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $query = $this->ViewMrrhhJubiladosObrerosAux->find('all');
            }if($tp == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                $query = $this->ViewMrrhhPensionadosEmpleadosAux->find('all');
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                $query = $this->ViewMrrhhPenSobreEmpleadosAux->find('all');
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                $query = $this->ViewMrrhhPenEspEmpleadosAux->find('all');
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                $query = $this->ViewMrrhhPenSobreObrerosAux->find('all');
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhPenEspObrerosAux');
                $query = $this->ViewMrrhhPenEspObrerosAux->find('all');
            }if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find('all');
            }if($tp == 15){
                $this->loadModel('ViewMrrhhCementerioAux');
                $query = $this->ViewMrrhhCementerioAux->find('all');
            }if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicioAux');
                $query = $this->ViewMrrhhComisionServicioAux->find('all');
            }if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioPAux');
                $query = $this->ViewMrrhhHonorarioPAux->find('all');
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhHistoricoRetroactivox');
            $n = $this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion])->count();

            if($n == 0){
                foreach ($query as $reg) {

                    $this->loadModel('MrrhhUltimoSueldo');
                    $money = $this->MrrhhUltimoSueldo->find('all')->where(['cedula' => $reg->cedula, 'id_tipo_personal' => $tp])->last();

                    $this->loadModel('MrrhhHistoricoRetroactivox');
                    $nomina = $this->MrrhhHistoricoRetroactivox->newEntity();
                    $nomina = $this->MrrhhHistoricoRetroactivox->patchEntity($nomina, $this->request->getData());

                    $nomina->ano = ANO_FISCAL;
                    $nomina->mes = $m;
                    $nomina->quincena = $q;
                    $nomina->id_tipo_personal = $tp;
                    $nomina->cedula = $reg->cedula;
                    $nomina->requisicion = 9999;
                    //-------------------------------
                    $nomina->ano_servicio = $reg->ano_servicio;
                    $nomina->anos_institucion = $reg->anos_institucion;
                    $nomina->anos_servicio = $reg->anos_servicio;
                    $nomina->grado_porcentaje = $reg->grado_porcentaje;
                    $nomina->grupo = $reg->grupo;
                    $nomina->ente_adscrito = $reg->ente_adscrito;
                    $nomina->sueldo_base = $reg->sueldo_base;
                    $nomina->sueldo = $reg->sueldo;

                    $nomina->sueldo_anterior = ($money['monto'] != null) ? $money['monto'] : 0.00;
                    
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
                    $nomina->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                    $nomina->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
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
                    $nomina->procesado = 0;

                    $this->MrrhhHistoricoRetroactivox->save($nomina);
                }
            }
        }

        if($tp != '' and $m != '' and $q != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhHistoricoRetroactivox');
            $data = $this->paginate($this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhHistoricoRetroactivox');
            $data2 = $this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhHistoricoRetroactivo');
            $db = $this->ViewMrrhhHistoricoRetroactivo->find('all', ['conditions' => $condicion])->toArray();
            $this->set('db', $db);

            $ndb = $this->ViewMrrhhHistoricoRetroactivo->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'tipo' => 'RETROACTIVO'];

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
            $m = $this->request->data['mes'];
            $q = $this->request->data['quincena'];

            if($tp != '' and $m != '' and $q != ''){

                return $this->redirect(['action' => 'nomina', $tp, $m, $q]); 
            }
        } 
    }

    public function procesarnomina(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $q = $this->request->data['qs'];
            $tp = $this->request->data['tps'];

            $concepto = @$this->request->data['concepto'];
            @$monto = @$this->request->data['monto'];

            @$partida = @$this->request->data['partida'];
            @$denominacion = @$this->request->data['denominacion'];


            /*@$porcentaje = @$this->request->data['porcentaje'];
            @$tipo_porcentaje = @$this->request->data['tipo_porcentaje'];
            //----------------------------------------------------------
            @$concepto2 = @$this->request->data['concepto2'];
            @$monto2 = @$this->request->data['monto2'];
            @$tipo_porcentaje2 = @$this->request->data['tipo_porcentaje2'];
            //----------------------------------------------------------
            @$concepto3 = @$this->request->data['concepto3'];
            @$monto3 = @$this->request->data['monto3'];
            @$tipo_porcentaje3 = @$this->request->data['tipo_porcentaje3'];
            //----------------------------------------------------------
            @$concepto4 = @$this->request->data['concepto4'];
            @$monto4 = @$this->request->data['monto4'];
            @$tipo_porcentaje4 = @$this->request->data['tipo_porcentaje4'];*/
            //----------------------------------------------------------           

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
            $req->mes = $m;
            $req->quincena = $q;
            $req->tipo = 'RETROACTIVO';

            $req->concepto = $concepto;
            $req->monto = $this->revertir_moneda(@$monto);

            $req->partida = @$partida;
            $req->denominacion = @$denominacion;
            
            /*$req->porcentaje = @$porcentaje;
            $req->tipo_porcentaje = @$tipo_porcentaje;

            $req->concepto2 = @$concepto2;
            $req->monto2 = @$monto2;
            $req->tipo_porcentaje2 = @$tipo_porcentaje2;

            $req->concepto3 = @$concepto3;
            $req->monto3 = @$monto3;
            $req->tipo_porcentaje3 = @$tipo_porcentaje3;
            
            $req->concepto4 = @$concepto4;
            $req->monto4 = @$monto4;
            $req->tipo_porcentaje4 = @$tipo_porcentaje4;*/

            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){
                
                $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 1];

                $this->loadModel('ViewMrrhhHistoricoRetroactivox');
                $query = $this->ViewMrrhhHistoricoRetroactivox->find('all')->where($condicion);

                //=============================================================

                foreach ($query as $reg) {
                    $this->loadModel('MrrhhHistoricoRetroactivo');
                    $nomina = $this->MrrhhHistoricoRetroactivo->newEntity();
                    $nomina = $this->MrrhhHistoricoRetroactivo->patchEntity($nomina, $this->request->getData());

                    $nomina->ano = ANO_FISCAL;
                    $nomina->mes = $m;
                    $nomina->quincena = $q;
                    $nomina->id_tipo_personal = $tp;
                    $nomina->cedula = $reg->cedula;
                    $nomina->requisicion = $requisicion;
                    //-------------------------------
                    $nomina->ano_servicio = $reg->ano_servicio;
                    $nomina->anos_institucion = $reg->anos_institucion;
                    $nomina->anos_servicio = $reg->anos_servicio;
                    $nomina->grado_porcentaje = $reg->grado_porcentaje;
                    $nomina->grupo = $reg->grupo;

                    $nomina->sueldo_base = $reg->sueldo_base;
                    

                    $nomina->sueldo = $reg->sueldo;
                    $nomina->sueldo_anterior = $reg->sueldo_anterior;

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

                    $this->MrrhhHistoricoRetroactivo->save($nomina);
                }


                $this->loadModel('MrrhhHistoricoRetroactivox');
                $this->MrrhhHistoricoRetroactivox->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

                $this->Flash->success(__('Personalizacion Finalizada'));
                return $this->redirect(['action' => 'nomina']);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
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

    public function eliminarnomina($tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivo');
        $this->MrrhhHistoricoRetroactivo->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

        $this->loadModel('MrrhhHistoricoRetroactivox');
        $this->MrrhhHistoricoRetroactivox->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

        $this->Flash->success(__('Nomina Eliminada'));
        return $this->redirect(['action' => 'nomina']);
    }

     public function deletep($id = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhnominaPartidas');
        $this->MrrhhnominaPartidas->deleteAll(['id IN' => $id]);

        $this->Flash->success(__('Partida Eliminada'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }


    public function incluir($cedula = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivox');
        $query = $this->MrrhhHistoricoRetroactivox->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }

    public function incluirtodos($tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivox');
        $query = $this->MrrhhHistoricoRetroactivox->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }

    public function excluir($cedula = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivox');
        $query = $this->MrrhhHistoricoRetroactivox->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }

    public function excluirtodos($tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivox');
        $query = $this->MrrhhHistoricoRetroactivox->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }


    public function sueldoindividual(){

        $cedula = $this->request->data['cedula'];
        $tp = $this->request->data['tps'];
        $m = $this->request->data['ms'];
        $q = $this->request->data['qs'];
        $sueldo_base = $this->request->data['sueldo_base'];
        $sueldo = $this->request->data['sueldo'];
        $sueldo_anterior = $this->request->data['sueldo_anterior'];

        if($sueldo != null){
            $this->loadModel('MrrhhHistoricoRetroactivox');
            $query = $this->MrrhhHistoricoRetroactivox->query();
            $query->update()
                ->set(['sueldo' => $this->revertir_moneda($sueldo)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }

        if($sueldo_anterior != null){
            $this->loadModel('MrrhhHistoricoRetroactivox');
            $query = $this->MrrhhHistoricoRetroactivox->query();
            $query->update()
                ->set(['sueldo_anterior' => $this->revertir_moneda($sueldo_anterior)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }

        if($sueldo_base != null){
            $this->loadModel('MrrhhHistoricoRetroactivox');
            $query = $this->MrrhhHistoricoRetroactivox->query();
            $query->update()
                ->set(['sueldo_base' => $this->revertir_moneda($sueldo_base)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }
        
        $this->Flash->success(__('Sueldo Asignado'));
        return $this->redirect(['action' => 'nomina', $tp, $m, $q]);
    }












    public function excel($tp, $mes, $quincena, $requisicion, $omitida){
        
        $this->layout='ajax';
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion, 'omitida' => $omitida];

        if($tp == 1){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
            $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
            $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion);
            $this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $data = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
            $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistoricoEJubilados');
            $data = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistoricoOJubilados');
            $data = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
            $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistoricoEPSobre');
            $data = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistoricoEPEsp');
            $data = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistoricoOPSobre');
            $data = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistoricoOPEsp');
            $data = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistoricoPc');
            $data = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistoricoCementerio');
            $data = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistoricoComS');
            $data = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistoricoHonorarioP');
            $data = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function txt($tp, $mes, $quincena, $requisicion){
        $this->layout='txt';
        //$condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion, 'omitida' => $omitida];
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion];
 
        if($tp == 1){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
            $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
            $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion);
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $data = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
            $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistoricoEJubilados');
            $data = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistoricoOJubilados');
            $data = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
            $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistoricoEPSobre');
            $data = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistoricoEPEsp');
            $data = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistoricoOPSobre');
            $data = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistoricoOPEsp');
            $data = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistoricoPc');
            $data = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistoricoCementerio');
            $data = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistoricoComS');
            $data = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistoricoHonorarioP');
            $data = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }




























































      /*----------------------------- CONTRATADOS -----------------------------=*/
     public function ResumenNomina($tp = '', $mes = '', $quincena = '', $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        $data = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];

        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivox');
            $data2 = $this->ViewMrrhhHistoricoRetroactivox->find('all')->where($condicion)->where(['procesado' => 1]);
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivo');
            $data2 = $this->ViewMrrhhHistoricoRetroactivo->find('all')->where($condicion);
        }


         $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> Output();
        exit();
    }

    public function Acumulado($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivox');
            $data = $this->ViewMrrhhHistoricoRetroactivox->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivo');
            $data = $this->ViewMrrhhHistoricoRetroactivo->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> Output();
        exit();
    }

}