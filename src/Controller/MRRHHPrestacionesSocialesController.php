<?php
namespace App\Controller;

use App\Controller\AppController;

/*============================ ENCABEZADOS ===============================*/
class PDF_ResumenPrestacionSocial extends \FPDF {
    function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,3,25,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',185,5,25,20,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    /*$this->SetX(70);
    $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/
    }

    function Footer()
    {
        
        $this->SetY(-15);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}

class MRRHHPrestacionesSocialesController extends AppController
{

    public function index($tp = null, $m = null){
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
        $condicion = ['concepto <>' => '', 'tipo' => 'PRESTACIONES SOCIALES'];
        $ps = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        
        $this->set(compact('ps'));

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
        /*$this->loadModel('Quincena');

        $quincena = $this->Quincena->find('all')->toArray();
        $options = [];
        foreach ($quincena as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('quincena', $options);*/

        $a = 0;


        //========================================================
        //Generar PDF
        //========================================================

        //if($tp != null and $m != null and $q != null){
        if($tp != null and $m != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            //$this->set('qs');

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

            //$condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp];
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhPrestacionesSocialesx');
            $n = $this->ViewMrrhhPrestacionesSocialesx->find('all', ['conditions' => $condicion])->count();

            if($n == 0){
                foreach ($query as $reg) {

                    $this->loadModel('MrrhhPrestacionesSocialesx');
                    $ps = $this->MrrhhPrestacionesSocialesx->newEntity();
                    $ps = $this->MrrhhPrestacionesSocialesx->patchEntity($ps, $this->request->getData());

                    $ps->ano = ANO_FISCAL;
                    $ps->mes = $m;
                    //$ps->quincena = $q;
                    $ps->id_tipo_personal = $tp;
                    $ps->cedula = $reg->cedula;
                    //-------------------------------
                    $ps->ano_servicio = $reg->ano_servicio;
                    $ps->anos_institucion = $reg->anos_institucion;
                    $ps->anos_servicio = $reg->anos_servicio;
                    $ps->grado_porcentaje = $reg->grado_porcentaje;
                    $ps->grupo = $reg->grupo;
                    $ps->ente_adscrito = $reg->ente_adscrito;
                    $ps->sueldo_base = $reg->sueldo_base;
                    $ps->sueldo = $reg->sueldo;
                    $ps->status = $reg->status;
                    $ps->grado_nivel = $reg->grado_nivel;
                    $ps->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                    $ps->beca_escolar_inicial = $reg->beca_escolar_inicial;
                    $ps->beca_escolar_primaria = $reg->beca_escolar_primaria;
                    $ps->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                    $ps->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                    $ps->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                    $ps->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                    $ps->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                    $ps->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                    $ps->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                    $ps->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                    $ps->prima_hogar = $reg->prima_hogar;
                    $ps->caja_ahorro = $reg->caja_ahorro;
                    $ps->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                    $ps->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                    $ps->funeraria = $reg->funeraria;
                    $ps->asociacion_funeraria = $reg->asociacion_funeraria;
                    $ps->sindicato = $reg->sindicato;
                    $ps->hijos = $reg->hijos;
                    $ps->prima_hijos = $reg->prima_hijos;
                    $ps->antiguedad = $reg->antiguedad;
                    $ps->banco = $reg->banco;
                    $ps->numero_cuenta = $reg->numero_cuenta;

                    $ps->prima_profesion = $reg->prima_profesion;
                    $ps->prima_antiguedad = $reg->prima_antiguedad;
                    $ps->deduccion_sso = $reg->deduccion_sso;
                    $ps->deduccion_rpe = $reg->deduccion_rpe;
                    $ps->deduccion_fpj = $reg->deduccion_fpj;
                    $ps->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                    $ps->aporte_patronal_asso = $reg->aporte_patronal_asso;
                    $ps->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                    $ps->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                    $ps->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                    $ps->depositario_judicial = $reg->depositario_judicial;
                    $ps->depositario_judicial_monto = $reg->depositario_judicial_monto;
                    
                    $ps->x_prima_profesion = $reg->x_prima_profesion;
                    $ps->x_prima_antiguedad = $reg->x_prima_antiguedad;
                    $ps->x_deduccion_sso = $reg->x_deduccion_sso;
                    $ps->x_deduccion_rpe = $reg->x_deduccion_rpe;
                    $ps->x_deduccion_fpj = $reg->x_deduccion_fpj;
                    $ps->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                    $ps->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                    $ps->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                    $ps->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                    $ps->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                    $ps->x_depositario_judicial = $reg->x_depositario_judicial;
                    $ps->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;
                    $ps->procesado = 0;

                    $this->MrrhhPrestacionesSocialesx->save($ps);
                }
            }
        }

        //if($tp != '' and $m != '' and $q != ''){
        if($tp != '' and $m != ''){
            //$condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 0];
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhPrestacionesSocialesx');
            $data = $this->paginate($this->ViewMrrhhPrestacionesSocialesx->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhPrestacionesSocialesx->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            //$condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 1];
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhPrestacionesSocialesx');
            $data2 = $this->ViewMrrhhPrestacionesSocialesx->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhPrestacionesSocialesx->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            //$condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp];
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhPrestacionesSociales');
            $db = $this->ViewMrrhhPrestacionesSociales->find('all', ['conditions' => $condicion]);
            $this->set(compact('db'));

            $ndb = $this->ViewMrrhhPrestacionesSociales->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            //$condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'tipo' => 'PRESTACIONES SOCIALES'];
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'tipo' => 'PRESTACIONES SOCIALES'];

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
            //$q = $this->request->data['quincena'];

            //if($tp != '' and $m != '' and $q != ''){
            if($tp != '' and $m != ''){

                return $this->redirect(['action' => 'index', $tp, $m]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
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
            $req->mes = $m;
            $req->tipo = 'PRESTACIONES SOCIALES';

            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){
                
                $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 1];

                $this->loadModel('ViewMrrhhPrestacionesSocialesx');
                $query = $this->ViewMrrhhPrestacionesSocialesx->find('all')->where($condicion);

                //=============================================================

                foreach ($query as $reg) {
                    $this->loadModel('MrrhhPrestacionesSociales');
                    $ps = $this->MrrhhPrestacionesSociales->newEntity();
                    $ps = $this->MrrhhPrestacionesSociales->patchEntity($ps, $this->request->getData());

                    $ps->ano = ANO_FISCAL;
                    $ps->mes = $m;
                    $ps->id_tipo_personal = $tp;
                    $ps->cedula = $reg->cedula;
                    $ps->requisicion = $requisicion;
                    //-------------------------------
                    $ps->ano_servicio = $reg->ano_servicio;
                    $ps->anos_institucion = $reg->anos_institucion;
                    $ps->anos_servicio = $reg->anos_servicio;
                    $ps->grado_porcentaje = $reg->grado_porcentaje;
                    $ps->grupo = $reg->grupo;

                    $ps->sueldo_base = $reg->sueldo_base;
                    $ps->monto = $reg->monto;
                    
                    $ps->sueldo = $reg->sueldo;
                    $ps->status = $reg->status;
                    $ps->grado_nivel = $reg->grado_nivel;
                    $ps->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                    $ps->beca_escolar_inicial = $reg->beca_escolar_inicial;
                    $ps->beca_escolar_primaria = $reg->beca_escolar_primaria;
                    $ps->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                    $ps->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                    $ps->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                    $ps->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                    $ps->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                    $ps->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                    $ps->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                    $ps->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                    $ps->prima_hogar = $reg->prima_hogar;
                    $ps->caja_ahorro = $reg->caja_ahorro;
                    $ps->funeraria = $reg->funeraria;
                    $ps->asociacion_funeraria = $reg->asociacion_funeraria;
                    $ps->sindicato = $reg->sindicato;
                    $ps->hijos = $reg->hijos;
                    $ps->prima_hijos = $reg->prima_hijos;
                    $ps->antiguedad = $reg->antiguedad;
                    $ps->banco = $reg->banco;
                    $ps->numero_cuenta = $reg->numero_cuenta;

                    $ps->prima_profesion = $reg->prima_profesion;
                    $ps->prima_antiguedad = $reg->prima_antiguedad;
                    $ps->deduccion_sso = $reg->deduccion_sso;
                    $ps->deduccion_rpe = $reg->deduccion_rpe;
                    $ps->deduccion_fpj = $reg->deduccion_fpj;
                    $ps->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                    $ps->aporte_patronal_asso = $reg->aporte_patronal_asso;
                    $ps->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                    $ps->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                    $ps->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                    $ps->depositario_judicial = $reg->depositario_judicial;
                    $ps->depositario_judicial_monto = $reg->depositario_judicial_monto;
                    
                    $ps->x_prima_profesion = $reg->x_prima_profesion;
                    $ps->x_prima_antiguedad = $reg->x_prima_antiguedad;
                    $ps->x_deduccion_sso = $reg->x_deduccion_sso;
                    $ps->x_deduccion_rpe = $reg->x_deduccion_rpe;
                    $ps->x_deduccion_fpj = $reg->x_deduccion_fpj;
                    $ps->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                    $ps->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                    $ps->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                    $ps->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                    $ps->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                    $ps->x_depositario_judicial = $reg->x_depositario_judicial;
                    $ps->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;

                    $this->MrrhhPrestacionesSociales->save($ps);
                }


                $this->loadModel('MrrhhPrestacionesSocialesx');
                $this->MrrhhPrestacionesSocialesx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m]);

                $this->Flash->success(__('Prestacion Finalizada'));
                return $this->redirect(['action' => 'index', $tp, $m]);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'index', $tp, $m]);
            }
        }

        //=============================================================
    }

    public function asignar()
    {
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $query = $this->MrrhhPrestacionesSocialesx->query();

        $query->update()
            ->set(['monto' => $this->request->data['monto']])
            ->where(['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tp'], 'mes' => $this->request->data['mes']])
            ->execute();

        if ($query) {
            $this->Flash->success(__('Monto asignado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index', $this->request->data['tp'], $this->request->data['mes']]);
    } 

    public function eliminar($tp = null, $m = null){

        $this->loadModel('MrrhhPrestacionesSociales');
        $this->MrrhhPrestacionesSociales->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m]);

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $this->MrrhhPrestacionesSocialesx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m]);

        $this->Flash->success(__('Prestacion Eliminada'));
        return $this->redirect(['action' => 'index']);
    }

    public function incluir($cedula = null, $tp = null, $m = null){

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $query = $this->MrrhhPrestacionesSocialesx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $m]);
    }

    public function incluirtodos($tp = null, $m = null){

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $query = $this->MrrhhPrestacionesSocialesx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $m]);
    }

    public function excluir($cedula = null, $tp = null, $m = null){

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $query = $this->MrrhhPrestacionesSocialesx->query();
        $query->update()
            ->set(['procesado' => 0, 'monto' => '0.00'])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $m]);
    }

    public function excluirtodos($tp = null, $m = null){

        $this->loadModel('MrrhhPrestacionesSocialesx');
        $query = $this->MrrhhPrestacionesSocialesx->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $m]);
    }


    public function excel($tp, $mes, $requisicion){
        
        $this->layout='ajax';

        if($tp > 0 and $tp < 16){
            $this->loadModel('ViewMrrhhPrestacionesSociales');
            $data = $this->ViewMrrhhPrestacionesSociales->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function txt($tp, $mes, $requisicion){
        $this->layout='txt';

        if($tp > 0 and $tp < 16){
            $this->loadModel('ViewMrrhhPrestacionesSociales');
            $data = $this->ViewMrrhhPrestacionesSociales->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }


















     public function ResumenNomina($mes = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewMrrhhPrestacionesSociales');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion];
        $data2 = $this->ViewMrrhhPrestacionesSociales->find('all')->where($condicion);

            if($data[0]['id_tipo_personal'] == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $query = $this->ViewMrrhhEmpleadosFijosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                $query = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $query = $this->ViewMrrhhDirectivosAux->find('all');
            }if($data[0]['id_tipo_personal'] == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $query = $this->ViewMrrhhObrerosNoPermanentesAux->find('all');
            }if($data[0]['id_tipo_personal'] == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $query = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $query = $this->ViewMrrhhJubiladosObrerosAux->find('all');
            }else if($data[0]['id_tipo_personal'] == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find('all');
            }


        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',180,6,25,20,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',12);
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $this->requisicion($data[0]['id']),0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha($data[0]['fecha_rrhh']) . '
UNIDAD SOLICITANTE:  OFIC. DE ADMINISTRACION Y TALENTO HUMANO

',1,'L',0);

    $pdf -> SetFont('Arial','B',12);

    $pdf -> ln();
    $pdf -> SetX(13);
    $pdf -> Cell(20,2,'DESCRIPCION',0,1,'C');
    $pdf -> SetFont('Arial','',8);
    $pdf -> SetX(90);
    $pdf -> Cell(10,1,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


     /* Aqui se toman los parametros *TIPO DE NOMINA*, *QUINCENA*, *MES*, *AÑO DEL SERVIDOR**/
    $pdf -> ln();$pdf -> ln();
    $pdf -> ln();$pdf -> ln();
    $pdf -> SetX(10);
    $pdf -> MultiCell(180,5, $data[0]['concepto'], 0, 'L', 0);


    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO:




___________________________

FIRMA Y SELLO.

',1,'L',0);

        $pdf -> AddPage();

        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',180,6,25,20,"JPG","");

        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');


        $pdf -> SetFont('Arial','B',10);

         $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $asignaciones = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_caja = 0;

        $neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $total = 0;

        $pdf -> SetFont('Arial','B',8);


            $pdf -> SetX(90);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(40,5,'Nomina:'.' '.$data[0]['tipo_personal_denominacion'].' '.' (Correspondiente al mes de'.' '.$data[0]['mes_denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

            $pdf->SetY(30);
            $pdf->SetX(10);
            $pdf->MultiCell(190,5,$data[0]['concepto'],0,'C',0);

            $cargo = 0;

            $t_neto = 0;


            foreach ($data2 as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;
            $monto = $key['monto'];

            /*==================================================================================================*/

            $neto = $key['monto'];

            $total += $monto;


             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);

             foreach ($query as $ef) {
                    if($key['cedula'] == $ef['cedula']){
                        $cargo = $ef['cargo'];
                    }
                }
            
            
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($cargo,0,60),0,40)),1,0,'L');
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);

            if($key['requisicion'] == 897){
                $pdf -> Cell(130,5,'1001'.' Ajuste de Bono Vacacional',0,0,'L');
            }else if($key['requisicion'] == 896){
                $pdf -> Cell(130,5,'1001'.' Remuneracion a empleado contratado',0,0,'L');
            }else if($key['requisicion'] == 879){
                $pdf -> Cell(130,5,'1001'.' Bono de Evaluacion',0,0,'L');
            }else{
                $pdf -> Cell(130,5,'1001'.' Prestaciones Sociales',0,0,'L');
            }

            $pdf -> Cell(40,5, $this->moneda($monto),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($monto),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/


        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){

                $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
                $pdf ->Image(WWW_ROOT.'img/escudo.jpg',180,6,25,20,"JPG","");

                $pdf -> SetX(70);
                $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
                $pdf -> SetX(70);
                $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');


                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina:'.' '.$data[0]['tipo_personal_denominacion'].' '.' (Correspondiente al mes de'.' '.$data[0]['mes_denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

                $pdf->SetY(30);
                $pdf->SetX(10);
                $pdf->MultiCell(190,5,$data[0]['concepto'],0,'C',0);
            }
        }

                $neto  += $total - 0;

                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($total).'    ',0,0,'R');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda(0),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($total),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
    }

    public function Acumulado($mes = '', $requisicion = ''){

        $this->loadModel('MrrhhPrestacionesSociales');
        $data2 = $this->MrrhhPrestacionesSociales->find('all')->last();

        $this->loadModel('ViewMrrhhPrestacionesSociales');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhPrestacionesSociales->find('all')->where($condicion);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion];
        $data3 = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        

        

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        if ($data2['id_tipo_personal'] == 1) {
                $tipo_personal = 'EMPLEADOS FIJOS';
            }else if ($data2['id_tipo_personal'] == 2) {
                $tipo_personal = 'EMPLEADOS CONTRATADOS';
            }else if ($data2['id_tipo_personal'] == 3) {
                $tipo_personal = 'PERSONAL DIRECTIVO';
            }else if ($data2['id_tipo_personal'] == 4) {
                $tipo_personal = 'OBREROS FIJOS';
            }else if ($data2['id_tipo_personal'] == 5) {
                $tipo_personal = 'OBREROS CONTRATADOS';
            }else if ($data2['id_tipo_personal'] == 6) {
                $tipo_personal = 'OBREROS NO PERMANENTES';
            }else if ($data2['id_tipo_personal'] == 7) {
                $tipo_personal = 'EMPLEADOS CONTRATADOS';
            }else if ($data2['id_tipo_personal'] == 8) {
                $tipo_personal = 'EMPLEADOS JUBILADOS';
            }else if ($data2['id_tipo_personal'] == 9) {
                $tipo_personal = 'OBREROS JUBILADOS';
            }else if ($data2['id_tipo_personal'] == 10) {
                $tipo_personal = 'EMPLEADOS PENSIONADOS';
            }else if ($data2['id_tipo_personal'] == 11) {
                $tipo_personal = 'EMPLEADOS PENSIONADOS SOBREVIVIENTES';
            }else if ($data2['id_tipo_personal'] == 12) {
                $tipo_personal = 'EMPLEADOS PENSIONADOS ESPECIALES';
            }else if ($data2['id_tipo_personal'] == 13) {
                $tipo_personal = 'OBREROS PENSIONADOS SOBREVIVIENTES';
            }else if ($data2['id_tipo_personal'] == 14) {
                $tipo_personal = 'OBREROS PENSIONADOS ESPECIALES';
            }else if ($data2['id_tipo_personal'] == 15) {
                $tipo_personal = 'PROTECCION CIVIL';
            }else if ($data2['id_tipo_personal'] == 16) {
                $tipo_personal = 'CEMENTERIO';
            }else if ($data2['id_tipo_personal'] == 17) {
                $tipo_personal = 'COMISION DE SERVICIO';
            }else if ($data2['id_tipo_personal'] == 18) {
                $tipo_personal = 'HONORARIOS PROFESIONALES';
            }

            $pdf -> SetX(90);
            $pdf -> SetFont('Arial','',8);
            

        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(130);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina:'.' '.$tipo_personal.' '.' (Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL.')',0,1,'C');
        $pdf -> SetX(60);
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> MultiCell(180,5, $data3[0]['concepto'], 0, 'C', 0);
        /* Membrete Faltan Imagenes a los lados */

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'SECTOR',0,0);
        $pdf -> Cell(10,5,'14',0,0);
        $pdf -> Cell(120,5,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'PROGRAMA',0,0);
        $pdf -> Cell(10,5,'01',0,0);
        $pdf -> Cell(120,5,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        if ($data2['id_tipo_personal'] == 1 OR $data2['id_tipo_personal'] == 2) {
            $personal = 'EMPLEADOS';
        }else{
            $personal = 'OBREROS';
        }


        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'ACTIVIDAD',0,0);
        if ($data2['id_tipo_personal'] == 1 OR $data2['id_tipo_personal'] == 2) {
            $pdf -> Cell(10,5,'51',0,0);
        }else{
            $pdf -> Cell(10,5,'52',0,0);
        }
        $pdf -> Cell(120,5,'SEGURIDAD SOCIAL A'.' '.$personal,0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(40,5,'Cod. Presup',0,0);
        $pdf -> Cell(40,5,'Asignaciones',0,0);
        $pdf -> Cell(40,5,'Deducciones',0,0);
        $pdf -> Cell(40,5,'Patronales',0,0);

        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        
        $var1 = 0;
        $t_sueldo_base = 0;
        $t_sueldo_base = 0;
        $total = 0;

        $i = 0;

        foreach ($data as $key) {

            ++$i;

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;
            $monto = $key['monto'];

            /*==================================================================================================*/

            if($key['status'] !=0) $neto = $key[0]['monto'] + $key[0]['monto3'] + $key[0]['monto4'] ;
            $total += $monto;

         }


        $pdf -> SetFont('Arial','',8);

        


        if ($data2['id_tipo_personal'] == 1 OR $data2['id_tipo_personal'] == 2) {
            $pdf -> SetX(10);
            $pdf -> Cell(25,5,'1001',0,0);
            $pdf -> Cell(110,5,'Prestaciones Sociales ',0,0);
            $pdf -> Cell(40,5,'4.01.08.01.00',0,0);
        }else{
            $pdf -> SetX(10);
            $pdf -> Cell(25,5,'1001',0,0);
            $pdf -> Cell(110,5,'Prestaciones Sociales ',0,0);
            $pdf -> Cell(40,5,'4.01.08.02.00',0,0);
        }

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(40,5, $this->moneda($total),0,0);
        $pdf -> Cell(40,5,'',0,0);
        $pdf -> Cell(40,5,'',0,1);

        

        $pdf -> SetX(150);
        $pdf -> Cell(10,3,'___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(70,5,'Totales',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,$this->moneda($total),0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);

        $pdf -> Cell(70,5,'Neto',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,$this->moneda($total),0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);


        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,6,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,6,$i,0,'R',0);
        $pdf->ln();



        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 
        $pdf -> Output();
    }

}