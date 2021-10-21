<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_FinEmpleadosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',380,8,35,25,"JPG","");

        $this->SetX(170);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');
        $this->SetX(170);
        $this->Cell(80,5,'Nomina: EMPLEADOS FIJOS (Pago de Bono Fin de Año) Correspondiente al mes de Enero de 2020
',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(50,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(156);
        $this->MultiCell(17,20,'SUELDO',1,'C',0);

        $this->SetY(40);
        $this->SetX(173);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(189);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(204);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(224);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(241);
        $this->MultiCell(20,5,'HORAS EXTRAS Y DIAS NO LABORABLES',1,'C',0);
        $this->SetY(40);
        $this->SetX(261);
        $this->MultiCell(20,5,'
 ALICUOTA B. VACACIONAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(281);
        $this->MultiCell(20,5,'
 ALICUOTA B. FIN DE ANO',1,'C',0);
        $this->SetY(40);
        $this->SetX(301);
        $this->MultiCell(20,5,'
 ALICUOTA 5 DIAS',1,'C',0);
        $this->SetY(40);
        $this->SetX(321);
        $this->MultiCell(20,5,'SUELDO INTEGRAL MENSUAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(341);
        $this->MultiCell(20,5,'
 PAGO BONO VACACIONAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(361);
        $this->MultiCell(20,5,'
 PAGO ESPEC DE DISFRUTE',1,'C',0);



        $this->SetY(40);
        $this->SetX(381);
        $this->MultiCell(20,5,'
PAGO VACACIONES
',1,'C',0); 
    }
}

class PDF_FinEmpleadosDIrectivos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',380,8,35,25,"JPG","");

        $this->SetX(170);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(50,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(156);
        $this->MultiCell(17,20,'SUELDO',1,'C',0);

        $this->SetY(40);
        $this->SetX(173);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(189);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(204);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(224);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(241);
        $this->MultiCell(20,5,'
HORAS EXTRAS Y DIAS NO LABORABLES',1,'C',0);
        $this->SetY(40);
        $this->SetX(261);
        $this->MultiCell(20,5,'
 ALICUOTA B. VACACIONAL

 ',1,'C',0);
        $this->SetY(40);
        $this->SetX(281);
        $this->MultiCell(20,5,'
 ALICUOTA B. FIN DE ANO

 ',1,'C',0);
        $this->SetY(40);
        $this->SetX(301);
        $this->MultiCell(20,5,'
 ALICUOTA 5 DIAS

 ',1,'C',0);
        $this->SetY(40);
        $this->SetX(321);
        $this->MultiCell(20,5,'
SUELDO INTEGRAL MENSUAL

',1,'C',0);
        $this->SetY(40);
        $this->SetX(341);
        $this->MultiCell(20,5,'
 PAGO BONO VACACIONAL
 ',1,'C',0);
        $this->SetY(40);
        $this->SetX(361);
        $this->MultiCell(20,5,'
 PAGO ESPEC DE DISFRUTE
 ',1,'C',0);



        $this->SetY(40);
        $this->SetX(381);
        $this->MultiCell(20,5,'
PAGO VACACIONES

',1,'C',0); 
    }
}

class PDF_ResumenNominaDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,20,15,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}

class MRRHHFinController extends AppController
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

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['concepto <>' => '', 'tipo' => 'FIN'];
        $bono_fin = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        
        $this->set(compact('bono_fin'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_nomina = $this->MrrhhTipoPersonal->find('all')->where(['AND' => ['id >' => 0, 'id <' => 17]])->where(['id <>' => 4])->where(['id <>' => 5])->where(['id <>' => 6])->where(['id <>' => 8])->where(['id <>' => 12])->where(['id <>' => 13])->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        $a = 0;

        //========================================================
        //Verifica
        //========================================================

        if($tp != null and $d != null and $h != null){

            $this->set('tps', $tp);
            $this->set('ds', $d);
            $this->set('hs', $h);

            if($tp == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $huery = $this->ViewMrrhhEmpleadosFijosAux->find('all');
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                $huery = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $huery = $this->ViewMrrhhDirectivosAux->find('all');
            }if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $huery = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $huery = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $huery = $this->ViewMrrhhObrerosNoPermanentesAux->find('all');
            }if($tp == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $huery = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $huery = $this->ViewMrrhhJubiladosObrerosAux->find('all');
            }if($tp == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                $huery = $this->ViewMrrhhPensionadosEmpleadosAux->find('all');
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                $huery = $this->ViewMrrhhPenSobreEmpleadosAux->find('all');
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                $huery = $this->ViewMrrhhPenEspEmpleadosAux->find('all');
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                $huery = $this->ViewMrrhhPenSobreObrerosAux->find('all');
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhPenEspObrerosAux');
                $huery = $this->ViewMrrhhPenEspObrerosAux->find('all');
            }if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $huery = $this->ViewMrrhhProteccionCivilAux->find('all');
            }if($tp == 15){
                $this->loadModel('ViewMrrhhCementerioAux');
                $huery = $this->ViewMrrhhCementerioAux->find('all');
            }if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicioAux');
                $huery = $this->ViewMrrhhComisionServicioAux->find('all');
            }if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioPAux');
                $huery = $this->ViewMrrhhHonorarioPAux->find('all');
            }

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'id_tipo_personal' => $tp, 'hasta' => $h];

            $this->loadModel('ViewMrrhhFinx');
            $n = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion])->count();

            //$this->loadModel('ViewMrrhhFin');
            //$verifica = $this->ViewMrrhhFin->find('all')->where(['AND' => ['fecha_salida >' => "01/01/".ANO_FISCAL, 'fecha_salida <' => "31/12/".ANO_FISCAL]]);

            if($n == 0){
                
                foreach ($huery as $reg) {

                    $var = false;

                    //foreach ($verifica as $v) {
                        //if($v['cedula'] == $reg['cedula']){
                            //$var = true;
                        //}
                    //}

                    if($var == false){
                        $this->loadModel('MrrhhFinx');
                        $vaca = $this->MrrhhFinx->newEntity();
                        $vaca = $this->MrrhhFinx->patchEntity($vaca, $this->request->getData());

                        $vaca->requisicion = 9999;
                        $vaca->ano = ANO_FISCAL;
                        $vaca->desde = $d;
                        $vaca->hasta = $h;
                        $vaca->id_tipo_personal = $tp;
                        $vaca->cedula = $reg->cedula;

                        //-------------------------------
                        $vaca->ente_adscrito = $reg->ente_adscrito;
                        $vaca->ano_servicio = $reg->ano_servicio;
                        $vaca->anos_institucion = $reg->anos_institucion;
                        $vaca->anos_servicio = $reg->anos_servicio;
                        $vaca->grado_porcentaje = $reg->grado_porcentaje;
                        $vaca->grupo = $reg->grupo;
                        $vaca->sueldo_base = $reg->sueldo_base;
                        $vaca->sueldo = $reg->sueldo;
                        $vaca->grado_nivel = $reg->grado_nivel;
                        $vaca->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                        $vaca->beca_escolar_inicial = $reg->beca_escolar_inicial;
                        $vaca->beca_escolar_primaria = $reg->beca_escolar_primaria;
                        $vaca->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                        $vaca->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                        $vaca->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                        $vaca->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                        $vaca->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                        $vaca->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                        $vaca->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                        $vaca->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                        $vaca->prima_hogar = $reg->prima_hogar;
                        $vaca->caja_ahorro = $reg->caja_ahorro;
                        $vaca->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                        $vaca->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                        $vaca->funeraria = $reg->funeraria;
                        $vaca->asociacion_funeraria = $reg->asociacion_funeraria;
                        $vaca->sindicato = $reg->sindicato;
                        $vaca->hijos = $reg->hijos;
                        $vaca->prima_hijos = $reg->prima_hijos;
                        $vaca->antiguedad = $reg->antiguedad;

                        $vaca->prima_profesion = $reg->prima_profesion;
                        $vaca->prima_antiguedad = $reg->prima_antiguedad;
                        $vaca->deduccion_sso = $reg->deduccion_sso;
                        $vaca->deduccion_rpe = $reg->deduccion_rpe;
                        $vaca->deduccion_fpj = $reg->deduccion_fpj;
                        $vaca->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                        $vaca->aporte_patronal_asso = $reg->aporte_patronal_asso;
                        $vaca->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                        $vaca->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                        $vaca->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                        $vaca->depositario_judicial = $reg->depositario_judicial;
                        $vaca->depositario_judicial_monto = $reg->depositario_judicial_monto;
                        
                        $vaca->x_prima_profesion = $reg->x_prima_profesion;
                        $vaca->x_prima_antiguedad = $reg->x_prima_antiguedad;
                        $vaca->x_deduccion_sso = $reg->x_deduccion_sso;
                        $vaca->x_deduccion_rpe = $reg->x_deduccion_rpe;
                        $vaca->x_deduccion_fpj = $reg->x_deduccion_fpj;
                        $vaca->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                        $vaca->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                        $vaca->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                        $vaca->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                        $vaca->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                        $vaca->x_depositario_judicial = $reg->x_depositario_judicial;
                        $vaca->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;

                        $vaca->fecha_salida = date('d/m/Y');
                        $vaca->fecha_entrada = strtotime(date('d-m-Y') . " + 1 month");

                        $vaca->monto = $reg->monto;
                        $vaca->alicuota_v = $reg->alicuota_v;
                        $vaca->monto_av = $reg->monto_av;
                        $vaca->alicuota_f = $reg->alicuota_f;
                        $vaca->monto_af = $reg->monto_af;
                        $vaca->alicuota = $reg->alicuota;
                        $vaca->monto_a = $reg->monto_a;
                        $vaca->disfrute = $reg->disfrute;
                        $vaca->monto_disfrute = $reg->monto_disfrute;
                        $vaca->bono_v = $reg->bono_v;
                        $vaca->quinquenio = $reg->quinquenio;
                        $vaca->dias = $reg->dias;
                        $vaca->dias_bono = $reg->dias_bono;
                        $vaca->horas_extras = $reg->horas_extras;
                        //-------------------------------
                        $vaca->procesado = 0;

                        $this->MrrhhFinx->save($vaca);
                    }
                }
            }
        }

        if($tp != '' and $d != '' and $h != ''){
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h,'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhFinx');
            $data = $this->paginate($this->ViewMrrhhFinx->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhFinx');
            $data2 = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'hasta' => $h, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhFin');
            $db = $this->ViewMrrhhFin->find('all', ['conditions' => $condicion]);
            $this->set(compact('db'));

            $ndb = $this->ViewMrrhhFin->find('all', ['conditions' => $condicion]);
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

            if($tp != '' and $d != ''){

                return $this->redirect(['action' => 'index', $tp, $d, $h]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $d = $this->request->data['ds'];
            $tp = $this->request->data['tps'];
            $h = $this->request->data['hs'];

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
                
                $condicion = ['ano' => ANO_FISCAL, 'desde' => $d, 'id_tipo_personal' => $tp, 'hasta' => $h, 'procesado' => 1];

                $this->loadModel('ViewMrrhhFinx');
                $huery = $this->ViewMrrhhFinx->find('all')->where($condicion);

                //=============================================================

                foreach ($huery as $reg) {
                    $this->loadModel('MrrhhFin');
                    $vaca = $this->MrrhhFin->newEntity();
                    $vaca = $this->MrrhhFin->patchEntity($vaca, $this->request->getData());

                    $vaca->ano = ANO_FISCAL;
                    $vaca->desde = $d;
                    $vaca->id_tipo_personal = $tp;
                    $vaca->hasta = $h;
                    $vaca->cedula = $reg->cedula;
                    $vaca->requisicion = $requisicion;

                    //-------------------------------
                    $vaca->ente_adscrito = $reg->ente_adscrito;
                    $vaca->ano_servicio = $reg->ano_servicio;
                    $vaca->anos_institucion = $reg->anos_institucion;
                    $vaca->anos_servicio = $reg->anos_servicio;
                    $vaca->grado_porcentaje = $reg->grado_porcentaje;
                    $vaca->grupo = $reg->grupo;
                    $vaca->sueldo_base = $reg->sueldo_base;
                    $vaca->sueldo = $reg->sueldo;
                    $vaca->grado_nivel = $reg->grado_nivel;
                    $vaca->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                    $vaca->beca_escolar_inicial = $reg->beca_escolar_inicial;
                    $vaca->beca_escolar_primaria = $reg->beca_escolar_primaria;
                    $vaca->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                    $vaca->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                    $vaca->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                    $vaca->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                    $vaca->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                    $vaca->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                    $vaca->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                    $vaca->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                    $vaca->prima_hogar = $reg->prima_hogar;
                    $vaca->caja_ahorro = $reg->caja_ahorro;
                    $vaca->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                    $vaca->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                    $vaca->funeraria = $reg->funeraria;
                    $vaca->asociacion_funeraria = $reg->asociacion_funeraria;
                    $vaca->sindicato = $reg->sindicato;
                    $vaca->hijos = $reg->hijos;
                    $vaca->prima_hijos = $reg->prima_hijos;
                    $vaca->antiguedad = $reg->antiguedad;

                    $vaca->prima_profesion = $reg->prima_profesion;
                    $vaca->prima_antiguedad = $reg->prima_antiguedad;
                    $vaca->deduccion_sso = $reg->deduccion_sso;
                    $vaca->deduccion_rpe = $reg->deduccion_rpe;
                    $vaca->deduccion_fpj = $reg->deduccion_fpj;
                    $vaca->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                    $vaca->aporte_patronal_asso = $reg->aporte_patronal_asso;
                    $vaca->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                    $vaca->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                    $vaca->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                    $vaca->depositario_judicial = $reg->depositario_judicial;
                    $vaca->depositario_judicial_monto = $reg->depositario_judicial_monto;
                    
                    $vaca->x_prima_profesion = $reg->x_prima_profesion;
                    $vaca->x_prima_antiguedad = $reg->x_prima_antiguedad;
                    $vaca->x_deduccion_sso = $reg->x_deduccion_sso;
                    $vaca->x_deduccion_rpe = $reg->x_deduccion_rpe;
                    $vaca->x_deduccion_fpj = $reg->x_deduccion_fpj;
                    $vaca->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                    $vaca->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                    $vaca->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                    $vaca->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                    $vaca->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                    $vaca->x_depositario_judicial = $reg->x_depositario_judicial;



                    $vaca->fecha_salida = $reg->fecha_salida;
                    $vaca->fecha_entrada = $reg->fecha_entrada;
                    //-------------------------------


                    $vaca->monto = $reg->monto;
                    $vaca->alicuota_v = $reg->alicuota_v;
                    $vaca->monto_av = $reg->monto_av;
                    $vaca->alicuota_f = $reg->alicuota_f;
                    $vaca->monto_af = $reg->monto_af;
                    $vaca->alicuota = $reg->alicuota;
                    $vaca->monto_a = $reg->monto_a;
                    $vaca->disfrute = $reg->disfrute;
                    $vaca->monto_disfrute = $reg->monto_disfrute;
                    $vaca->bono_v = $reg->bono_v;
                    $vaca->quinquenio = $reg->quinquenio;
                    $vaca->dias = $reg->dias;
                    $vaca->dias_bono = $reg->dias_bono;
                    $vaca->horas_extras = $reg->horas_extras;

                    $this->MrrhhFin->save($vaca);
                }


                $this->loadModel('MrrhhFinx');
                $this->MrrhhFinx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

                $this->Flash->success(__('Fin Finalizada'));
                return $this->redirect(['action' => 'index', $tp, $d, $h]);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'index', $tp, $d, $h]);
            }
        }

        //=============================================================
    }

    public function asignar()
    {
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();

        $huery->update()
            ->set(['monto' => $this->request->data['monto']])
            ->where(['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tp'], 'desde' => $this->request->data['desde'], 'hasta' => $this->request->data['hasta']])
            ->execute();

        if ($huery) {
            $this->Flash->success(__('Monto asignado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index', $this->request->data['tp'], $this->request->data['desde'], $this->request->data['hasta']]);
    } 

   
    public function eliminar($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFin');
        $this->MrrhhFin->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

        $this->loadModel('MrrhhFinx');
        $this->MrrhhFinx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'desde IN' => $d, 'hasta IN' => $h]);

        $this->Flash->success(__('Fin Eliminada'));
        return $this->redirect(['action' => 'index']);
    }

    public function incluir($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['procesado' => 1, 'fecha_salida' => date('d/m/Y'), 'quinquenio' => 0,'fecha_entrada' => strtotime(date('d-m-Y') . "+ 1 month")])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function incluirtodos($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function excluir($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['procesado' => 0, 'monto' => '0.00'])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function excluirtodos($tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'hasta' => $h])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }


    public function excel($tp, $desde, $hasta, $requisicion){
        
        $this->layout='ajax';

        if($tp > 0 and $tp < 4){
            $this->loadModel('ViewMrrhhFin');
            $data = $this->ViewMrrhhFin->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $desde, 'requisicion' => $requisicion, 'hasta' => $hasta]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $desde, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function txt($tp, $desde, $hasta, $requisicion){
        $this->layout='txt';

        if($tp > 0 and $tp < 16){
            $this->loadModel('ViewMrrhhFin');
            $data = $this->ViewMrrhhFin->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $desde, 'requisicion' => $requisicion, 'hasta' => $hasta]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'desde' => $desde, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }

    public function EditarF(){
        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();

        /*if($this->request->data['fecha_salida'] != null){
            $parametros = ['fecha_salida' => $this->request->data['fecha_salida']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['fecha_entrada'] != null){
            $parametros = ['fecha_entrada' => $this->request->data['fecha_entrada']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }*/


        if($this->request->data['prima_antiguedad'] != null){
            $parametros = ['prima_antiguedad' => $this->revertir_moneda($this->request->data['prima_antiguedad'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['prima_profesion'] != null){
            $parametros = ['prima_profesion' => $this->revertir_moneda($this->request->data['prima_profesion'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['prima_hijos'] != null){
            $parametros = ['prima_hijos' => $this->revertir_moneda($this->request->data['prima_hijos'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }


        if($this->request->data['prima_hogar'] != null){
            $parametros = ['prima_hogar' => ($this->request->data['prima_hogar'] == 'SI') ? true : false];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['dias'] != null){
            $parametros = ['dias' => $this->request->data['dias']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['dias_bono'] != null){
            $parametros = ['dias_bono' => $this->request->data['dias_bono']];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($this->request->data['horas_extras'] != null){
            $parametros = ['horas_extras' => $this->revertir_moneda($this->request->data['horas_extras'])];
            
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'desde' => $this->request->data['ds'], 'hasta' => $this->request->data['hs']];

            $huery->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        
        $tp = $this->request->data['tps'];
        $d = $this->request->data['ds'];
        $h = $this->request->data['hs'];

        $this->Flash->success(__('Asignación Actualizada'));
        return $this->redirect(['action' => 'index', $tp, $d, $h]); 
    }

    public function addalicuota($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuota($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function adddisfrute($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['disfrute' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropdisfrute($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['disfrute' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function addalicuotav($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota_v' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuotav($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota_v' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function addalicuotaf($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota_f' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropalicuotaf($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['alicuota_f' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function addbonov($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['bono_v' => 1])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }

    public function dropbonov($cedula = null, $tp = null, $d = null, $h = null){

        $this->loadModel('MrrhhFinx');
        $huery = $this->MrrhhFinx->query();
        $huery->update()
            ->set(['bono_v' => 0])
            ->where(['id_tipo_personal' => $tp, 'desde' => $d, 'cedula' => $cedula, 'hasta' => $h])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $d, $h]);
    }
















































     public function ResumenNomina($tp = null, $desde = null, $hasta = null, $status = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhFin');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'requisicion' => $requisicion];
        $data2 = $this->ViewMrrhhFin->find('all')->where($condicion);


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
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $requisicion,0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/Y') . '
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
    $pdf -> MultiCell(180,5, $data['concepto']. ' DEL ' . ANO_FISCAL, 0, 'L', 0);


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

       

        $pdf -> Output();
    }

    //modificado
    public function reporte($tp = null, $desde = null, $hasta = null, $status = null, $requisicion = null){

        $tps = $tp;
        $ds = $desde;
        $hs = $hasta;

        if(@$status == 1){
            $this->loadModel('ViewMrrhhFinx');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta, 'procesado' => 1];
            $data = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFin');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta];
            $data = $this->ViewMrrhhFin->find('all', ['conditions' => $condicion])->toArray();
        }
        
        $d = $desde;
        $h = $hasta;
        

        if($tp == 1){
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all');
        }if($tp == 2){
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
        }if($tp == 3){
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all');
        }if($tp == 4){
            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');
        }if($tp == 5){
            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all');
        }if($tp == 16){
            $this->loadModel('ViewMrrhhComisionServicioAux');
            $data2 = $this->ViewMrrhhComisionServicioAux->find('all');
        }

        $this->loadModel('ViewMrrhhDirectivosAux');
        $directivos = $this->ViewMrrhhDirectivosAux->find('all');


        $pdf = new PDF_FinEmpleadosDIrectivos('L','mm',array(420,250));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(196);
        $pdf -> SetFont('Arial','',8);


        if($tp == 1){
            $pdf -> Cell(40,5,'Nomina: EMPLEADOS FIJOS - Pago del Bono de Fin de Año Correspondiente desde '.$d.' hasta '.$h.' del'.' '. @$data[0]['ano'],0,1,'C');
        }if($tp == 2){
            $pdf -> Cell(40,5,'Nomina: EMPLEADOS CONTRATADOS - Pago del Bono de Fin de Año Correspondiente desde '.$d.' hasta '.$h.' del'.' '. @$data[0]['ano'],0,1,'C');
        }if($tp == 3){
            $pdf -> Cell(40,5,'Nomina: PERSONAL DIRECTIVO - Pago del Bono de Fin de Año Correspondiente desde '.$d.' hasta '.$h.' del'.' '. @$data[0]['ano'],0,1,'C');
        }if($tp == 16){
            $pdf -> Cell(40,5,'Nomina: PERSONAL COMISION DE SERVICIO - Pago del Bono de Fin de Año Correspondiente desde '.$d.' hasta '.$h.' del'.' '. @$data[0]['ano'],0,1,'C');
        }
   

        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $dias = 0;

        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];


                            if($key2['tipo_personal'] == 1){
                                $dia_bono = $key['dias'];
                            }else{
                               if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                    $dia_bono = 45;
                                }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                    $dia_bono = 50;
                                }else if($key2['anos_servicio'] >= 12){
                                    $dia_bono = 50;
                                    $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                                }
                            }
                            
                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        

                        if($key2['sueldo'] != 0){
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo'] ; else $sueldo_base = 0;

                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['x_prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key2['x_prima_antiguedad'] * 2; else $prima_antiguedad = 0;

                        }else{
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;
                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        }


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                $sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones + $alicuota_vacacional + $alicuota_fin_ano + $alicuota_dias;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias'] != 0){
                            $dia_bono = $key['dias'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $dia_bono;
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }
                 }

              


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($fecha_ingreso),1,0,'C');
            $pdf -> Cell(50,5, $this->mayus(substr($cargo,0,40)),1,0,'L');
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$horasextras),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$alicuota_vacacional),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$alicuota_fin_ano),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$alicuota_dias),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sueldo_integral),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$bono_vacacional),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$bono_disfrute),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');


            @$t_bono_vacacional += $bono_vacacional;
            @$t_bono_disfrute += $bono_disfrute;
            @$t_total += $total;

            //$this->monto_persona('FIN', $key['cedula'], $tps, $ds, $hs, $t_total);

        }

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(330,5, 'TOTAL',1,0,'C');
            $pdf -> Cell(20,5, $this->moneda(@$t_bono_vacacional),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_bono_disfrute),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');


        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

       
        $pdf -> Output();
    }

    //modificado
    public function Resumen($tp = null, $desde = null, $hasta = null, $status = null, $requisicion = null){

        $tps = $tp;
        $ds = $desde;
        $hs = $hasta;

        

        if(@$status == 1){
            $this->loadModel('ViewMrrhhFinx');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta, 'procesado' => 1];
            $data = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFin');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta];
            $data = $this->ViewMrrhhFin->find('all', ['conditions' => $condicion])->toArray();

            $this->loadModel('ViewMrrhhRequisicion');
            $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
            $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        }
        

        if($tp == 1){
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all');
        }if($tp == 2){
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
        }if($tp == 3){
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all');
        }if($tp == 16){
            $this->loadModel('ViewMrrhhComisionServicioAux');
            $data2 = $this->ViewMrrhhComisionServicioAux->find('all');
        }
         $this->loadModel('ViewMrrhhDirectivosAux');
        $directivos = $this->ViewMrrhhDirectivosAux->find('all');

        $pdf = new PDF_ResumenNominaDirectivos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

         $pdf -> SetY(20);
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);


        /*if($tp == 1){
            $pdf -> Cell(40,5,'Nomina: EMPLEADOS FIJOS - Pago del Bono de Fin de Año Correspondiente a la '.$hasta.' del mes de '.$mes.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 2){
            $pdf -> Cell(40,5,'Nomina: EMPLEADOS CONTRATADOS - Pago del Bono de Fin de Año Correspondiente a la '.$hasta.' del mes de '.$mes.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 3){
            $pdf -> Cell(40,5,'Nomina: PERSONAL DIRECTIVO - Pago del Bono de Fin de Año Correspondiente a la '.$hasta.' del mes de ' .$mes.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 16){
            $pdf -> Cell(40,5,'Nomina: PERSONAL COMISION DE SERVICIO - Pago del Bono de Fin de Año Correspondiente a la '.$hasta.' del mes de '.$mes.' del ' .' '. @$data[0]['ano'],0,1,'C');
        }*/
        
            $pdf -> Cell(40,5,@$concepto['concepto'],0,1,'C');
        
        $t_sueldo_base = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;



        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $total = 0;
        $dias = 0;

        $asignacion = 0;
        $deduccion = 0;
        $deducciones = 0;

        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];


                            if($key2['tipo_personal'] == 1){
                                $dia_bono = $key['dias'];
                            }else{
                               if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                    $dia_bono = 45;
                                }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                    $dia_bono = 50;
                                }else if($key2['anos_servicio'] >= 12){
                                    $dia_bono = 50;
                                    $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                                }
                            }
                            


                            


                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        

                        if($key2['sueldo'] != 0){
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo'] ; else $sueldo_base = 0;

                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['x_prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key2['x_prima_antiguedad'] * 2; else $prima_antiguedad = 0;

                        }else{
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;
                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        }


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                $sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones + $alicuota_vacacional + $alicuota_fin_ano + $alicuota_dias;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias'] != 0){
                            $dia_bono = $key['dias'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $dia_bono;
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }
                
                
                 }

                $y = $pdf-> GetY();
                $pdf -> SetY($y+6.8);
                /*================================================= REPEAT =================================================*/
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetX(5);
                $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
                $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
                if ($key['sueldo'] != 0) {
                    $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo']),1,1,'L');
                }else{
                    $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
                }
           
                $pdf -> SetX(5);
                $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($cargo,0,35),0,40)),1,0,'L');
                
                $pdf -> Cell(50,4,'Fecha de Ingreso: '. $key['fecha_ingreso_institucion'],1,0,'L');
                $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

                $pdf -> SetFont('Arial','B',8);
                /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

                /*$pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.'Bono Vacacional',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_vacacional),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');*/

                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.'Bono Especial para el Disfrute de Fin de Año',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_disfrute),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');

                $pdf-> ln();


                $pdf -> SetFont('Arial','B',8);
                $pdf -> SetX(15); 
                $pdf -> Cell(90,4,'',0,0,'L');
                $pdf -> Cell(30,4,'Totales',1,0,'C');
                $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
                $pdf -> Cell(30,4, $this->moneda(0),1,1,'C');

                $pdf -> SetX(15); 
                $pdf -> Cell(90,4,'',0,0,'L');
                $pdf -> Cell(30,4,'Neto',1,0,'C');
                $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');

                $y = $pdf -> GetY();
                if($y > 215){
                    $pdf -> AddPage();
                }

                if($y > 215){
                    $pdf -> SetX(90);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,$concepto['concepto'],0,1,'C');
                }

                @$neto += $total;

                //$this->monto_persona('FIN', $key['cedula'], $tps, $ds, $hs, $neto);
        }


                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($neto).'    ',0,0,'R');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda(0),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($neto),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    //modificado
     public function Acumulado($tp = null, $desde = null, $hasta = null, $status = null, $requisicion = null){

        $tps = $tp;
        $ds = $desde;
        $hs = $hasta;


        

        if(@$status == 1){
            $this->loadModel('ViewMrrhhFinx');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta, 'procesado' => 1];
            $data = $this->ViewMrrhhFinx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFin');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'desde' => $desde, 'hasta' => $hasta];
            $data = $this->ViewMrrhhFin->find('all', ['conditions' => $condicion])->toArray();

            $this->loadModel('ViewMrrhhRequisicion');
            $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
            $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        }
        

        if($tp == 1){
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all');
        }if($tp == 2){
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
        }if($tp == 3){
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all');
        }if($tp == 4){
            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');
        }if($tp == 5){
            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all');
        }if($tp == 16){
            $this->loadModel('ViewMrrhhComisionServicioAux');
            $data2 = $this->ViewMrrhhComisionServicioAux->find('all');
        }

         $this->loadModel('ViewMrrhhDirectivosAux');
        $directivos = $this->ViewMrrhhDirectivosAux->find('all');
        

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(130);
        $pdf -> SetFont('Arial','',8);

        /*if($tp == 1){
            $pdf -> Cell(80,5,'Nomina: EMPLEADOS FIJOS  - Pago de Fin (Correspondiente a la'.' '.$hasta.' '.'del mes de '.' '.$mes.' '.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 2){
            $pdf -> Cell(80,5,'Nomina: EMPLEADOS CONTRATADOS  - Pago de Fin (Correspondiente a la'.' '.$hasta.' '.'del mes de '.' '.$mes.' '.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 3){
            $pdf -> Cell(80,5,'Nomina: EMPLEADOS DIRECTIVO   - Pago de Fin (Correspondiente a la'.' '.$hasta.' '.' del mes de '.' '.$mes.' '.' del '.' '. $data[0]['ano'],0,1,'C');
        }if($tp == 16){
            $pdf -> Cell(40,5,'Nomina: PERSONAL COMISION DE SERVICIO - Pago del Bono de Fin de Año Correspondiente a la '.$hasta.' del mes de '.$mes.' del '.' '. @$data[0]['ano'],0,1,'C');
        }*/

            $pdf -> Cell(40,5,@$concepto['concepto'],0,1,'C');

        $pdf -> SetX(110);
        //$pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$hasta['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$hasta['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,''.'Asignaciones',0,0);
        $pdf -> Cell(30,5,''.'Deducciones',0,0);
        $pdf -> Cell(30,5,''.'Patronales',0,0);

        $pdf -> ln();

        $i = 0;
        $t_total = 0;

        $t_sueldo_base = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;



        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $total = 0;
        $dias = 0;

        $asignacion = 0;
        $deduccion = 0;
        $deducciones = 0;
        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;


        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];


                            if($key2['tipo_personal'] == 1){
                                $dia_bono = $key['dias'];
                            }else{
                               if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                    $dia_bono = 45;
                                }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                    $dia_bono = 50;
                                }else if($key2['anos_servicio'] >= 12){
                                    $dia_bono = 50;
                                    $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                                }
                            }
                            


                            


                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        

                        if($key2['sueldo'] != 0){
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo'] ; else $sueldo_base = 0;

                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['x_prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key2['x_prima_antiguedad'] * 2; else $prima_antiguedad = 0;

                        }else{
                            if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;
                            if($key['requisicion'] > 1122){
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                            }else{
                                if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                                if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                            }
                            if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                            if($key2['status'] !=0) $prima_antiguedad = $key['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        }


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                $sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones + $alicuota_vacacional + $alicuota_fin_ano + $alicuota_dias;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias'] != 0){
                            $dia_bono = $key['dias'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $dia_bono;
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }
                 }

                $i++;
                $t_bono_vacacional += $bono_vacacional;
                $t_bono_disfrute += $bono_disfrute;
                @$neto += $total;

                //$this->monto_persona('FIN', $key['cedula'], $tps, $ds, $hs, $neto);
        }

        $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Bono Fin de Ano',0,0);
        $pdf -> Cell(30,4,'4.01.05.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono_vacacional),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);



        if($t_bono_disfrute != 0){
            $pdf -> SetX(10);
            $pdf -> Cell(25,4,'1002',0,0);
            $pdf -> Cell(110,4,'Bono Especial para el Disfrute de Fin',0,0);
            $pdf -> Cell(30,4,'4.01.05.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4, $this->moneda($t_bono_disfrute),0,0);
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4,'',0,1);
        }
       

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);


        $pdf -> Cell(30,4,$this->moneda($neto),1,0);
        $pdf -> Cell(30,4,$this->moneda(0),1,0);
        $pdf -> Cell(30,4,$this->moneda(0),1,1);
       

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        
        $pdf -> Cell(30,4,$this->moneda($neto),1,1);
        
        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();

            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');



        $pdf -> Output();
    }

    public function horasextras($cedula = null, $tp = null, $mes = null){

        if($tp == 1){
            $this->loadModel('ViewMrrhhHorasExtrasEmpleados');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'id_tipo_personal' => $tp, 'cedula' => $cedula];
            $data = $this->ViewMrrhhHorasExtrasEmpleados->find('all', ['conditions' => $condicion])->last();

            $condicion = ['cedula' => $cedula];
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all')->where($condicion)->last();
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHorasExtrasEmpleados');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'id_tipo_personal' => $tp, 'cedula' => $cedula];
            $data = $this->ViewMrrhhHorasExtrasEmpleados->find('all', ['conditions' => $condicion])->last();

            $condicion = ['cedula' => $cedula];
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all')->where($condicion)->last();
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHorasExtrasEmpleados');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'id_tipo_personal' => $tp, 'cedula' => $cedula];
            $data = $this->ViewMrrhhHorasExtrasEmpleados->find('all', ['conditions' => $condicion])->last();

            $condicion = ['cedula' => $cedula];
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all')->where($condicion)->last();
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHorasExtrasObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'id_tipo_personal' => $tp, 'cedula' => $cedula];
            $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion])->last();

            $condicion = ['cedula' => $cedula];
            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all')->where($condicion)->last();
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHorasExtrasObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'id_tipo_personal' => $tp, 'cedula' => $cedula];
            $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion])->last();

            $condicion = ['cedula' => $cedula];
            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all')->where($condicion)->last();
        }

                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($data2['hijos'] != 0 AND $data2['status'] !=0) $prima_hijos = ( 100000 * $data2['hijos']); else $prima_hijos = 0;
                if($data2['prima_hogar'] != 0 AND $data2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                if($data2['status'] !=0) $prima_profesion = $data2['prima_profesion']; else $prima_profesion = 0;
                if($data2['status'] !=0) $prima_antiguedad = $data2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                if($data2['status'] !=0) $sueldo_base = $data2['sueldo_base'] ; else $sueldo_base = 0;


                /*======================================================================================================*/
                /*====================================== TOTAL ASIGNACIONES ============================================*/

                if($data2['status'] !=0) $asignaciones = 
                    $sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar;
                else $asignaciones = 0;

                  /*====================== Horas Diurnas ===================*/

                  if($data['cantidad_horas_extra_diurnas'] != 0){
                    $diurnas = ((((($asignaciones) / 30) / 8) * 0.50 * $data['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $data['cantidad_horas_extra_diurnas']));}
                  else $diurnas = 0;

                  /*====================== Horas Nocturnas ===================*/

                  if($data['cantidad_horas_extra_nocturnas'] != 0){
                  $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.30) + (((($asignaciones) / 30) / 8))) * $data['cantidad_horas_extra_nocturnas'];}
                  else $nocturnas = 0;

                  /*====================== Dias no Laborables ===================*/

                  if($data['dias_no_laborables'] != 0){
                  $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $data['dias_no_laborables'];}
                  else $dias_no_laborables = 0;

                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;
     

        return $total;
    }


    public function solicitud($tp = '', $mes = '', $requisicion = ''){

       

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

        $pdf -> Output();
    }

}