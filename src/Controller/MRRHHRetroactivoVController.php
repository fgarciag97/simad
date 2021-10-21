<?php
namespace App\Controller;

use App\Controller\AppController;


class PDF_AsignacionesObrerosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
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
        $this->MultiCell(30,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(136);
        $this->MultiCell(17,20,'GRUPO',1,'C',0);

        $this->SetY(40);
        $this->SetX(153);
        $this->MultiCell(17,20,'SUELDO',1,'C',0);

        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(17,5,'
HORAS EXTRAS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(187);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(203);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(218);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(238);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(255);
        $this->MultiCell(15,5,'
 BECAS QUINCENAL
            ',1,'C',0);


        $this->SetY(40);
        $this->SetX(270);
        $this->MultiCell(20,5,'
BONO ESTABILIDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(290);
        $this->MultiCell(40,5,'
 SALARIO, BECAS, PRIMAS 
 BONO DE ESTABILIDAD
            ',1,'C',0);

        $this->SetY(40);
        $this->SetX(330);
        $this->MultiCell(20,5,'
PAGO VACACIONES

',1,'C',0);

        $this->SetY(40);
        $this->SetX(350);
        $this->MultiCell(20,5,'
TOTAL

',1,'C',0); 
    }
}


class PDF_DeduccionesObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);
        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,5,'
N

',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,5,'
CEDULA

',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(30,5,'
APELLIDO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(66);
        $this->MultiCell(30,5,'
NOMBRES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(96);
        $this->MultiCell(15,5,'
SSO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(111);
        $this->MultiCell(15,5,'
RPE

',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(15,5,'
FAOV

',1,'C',0);
        
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(25,5,'
CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(20,5,'
FUNERARIA

',1,'C',0);
        $this->SetY(30);
        $this->SetX(186);
        $this->MultiCell(20,5,'
ACOFJAM

',1,'C',0);

        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,5,'
SINDICATO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,5,'
TOTAL DEDUC
',1,'C',0);
    }
}

class PDF_AportePatronalObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

        $this->SetFont('Arial','B',8);

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
        $this->MultiCell(30,20,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(118);
        $this->MultiCell(20,5,'
SUELDO MENSUAL

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(138);
        $this->MultiCell(16,5,'
SSO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(154);
        $this->MultiCell(15,5,'
RPE

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(169);
        $this->MultiCell(15,5,'
FAOV


        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(184);
        $this->MultiCell(25,5,'
CAJA DE AHORRO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(209);
        $this->MultiCell(17,5,' 
TOTAL

        ',1,'C',0);
    }
}


class PDF_NetoCobrarObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');
        /*$this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,15,'Nro',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,15,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(40,15,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(80);
        $this->MultiCell(40,15,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(120);
        $this->MultiCell(50,15,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(30,5,'
SALARIO BASICO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(200);
        $this->MultiCell(30,5,'
TOTAL ASIGNACIONES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(230);
        $this->MultiCell(30,5,'
TOTAL DEDUCCIONES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(260);
        $this->MultiCell(30,5,'
NETO A PAGAR

',1,'C',0);
    }
}


class PDF_ResumenNominaObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',5,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',185,5,20,15,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    }

    function Footer()
    {
        
        $this->SetY(-35);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}



class MRRHHRetroactivoVController extends AppController
{
   
    public function vacaciones($tp = null, $m = null, $q = null){
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


             if($tp >= 4 and $tp <= 6){
                $this->loadModel('ViewMrrhhVacacionesObreros');
                $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];
                $query = $this->ViewMrrhhVacacionesObreros->find('all')->where($condicion);
            }else{
                $this->loadModel('ViewMrrhhVacaciones');
                $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];
                $query = $this->ViewMrrhhVacaciones->find('all')->where($condicion);
            }

            if($query->count() == 0){
                $this->Flash->error('No se ha encontrado ningunas vacaciones generadas');
                return $this->redirect(['action' => 'vacaciones']);
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $n = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->count();

            if($n == 0){
                foreach ($query as $reg) {

                    $this->loadModel('MrrhhUltimoSueldo');
                    $money = $this->MrrhhUltimoSueldo->find('all')->where(['cedula' => $reg->cedula, 'id_tipo_personal' => $tp, 'tipo' => 'VACACIONES'])->last();

                    $this->loadModel('MrrhhHistoricoRetroactivoVx');
                    $nomina = $this->MrrhhHistoricoRetroactivoVx->newEntity();
                    $nomina = $this->MrrhhHistoricoRetroactivoVx->patchEntity($nomina, $this->request->getData());



                    $nomina->ano = ANO_FISCAL;
                        $nomina->mes = $m;
                        $nomina->quincena = $q;
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
                        $nomina->sueldo_anterior = ($money['monto'] != null) ? $money['monto'] : 0.00;


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
                        
                        $nomina->cantidad_dias = $reg->cantidad_dias;
                        $nomina->fecha_desde = $reg->fecha_desde;
                        $nomina->fecha_hasta = $reg->fecha_hasta;
                        $nomina->fecha_reintegro = $reg->fecha_reintegro;

                        $nomina->alicuota_v = $reg->alicuota_v;
                        $nomina->alicuota_f = $reg->alicuota_f;
                        $nomina->alicuota = $reg->alicuota;
                        $nomina->disfrute_v = ($reg->disfrute == null) ? $reg->disfrute_v : $reg->disfrute;
                        $nomina->bono_v = $reg->bono_v;
                        $nomina->dias_d = $reg->dias_d;
                        $nomina->dias_bono = $reg->dias_bono;
                        $nomina->horas_extras = $reg->horas_extras;

                    $this->MrrhhHistoricoRetroactivoVx->save($nomina);
                }
            }
        }

        if($tp != '' and $m != '' and $q != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->paginate($this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data2 = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $db = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
            $this->set('db', $db);

            $ndb = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion]);
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

                return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]); 
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

                $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
                $query = $this->ViewMrrhhHistoricoRetroactivoVx->find('all')->where($condicion);

                //=============================================================

                foreach ($query as $reg) {
                    $this->loadModel('MrrhhHistoricoRetroactivoV');
                    $nomina = $this->MrrhhHistoricoRetroactivoV->newEntity();
                    $nomina = $this->MrrhhHistoricoRetroactivoV->patchEntity($nomina, $this->request->getData());

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

                        $nomina->sueldo = $reg->sueldo;
                        $nomina->sueldo_base = $reg->sueldo_base;
                        $nomina->sueldo_anterior = $reg->sueldo_anterior;
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
                        $nomina->disfrute_v = ($reg->disfrute == null) ? $reg->disfrute_v : $reg->disfrute;
                        $nomina->bono_v = $reg->bono_v;
                        $nomina->dias_d = $reg->dias_d;
                        $nomina->dias_bono = $reg->dias_bono;
                        $nomina->horas_extras = $reg->horas_extras;

                    $this->MrrhhHistoricoRetroactivoV->save($nomina);
                }


                $this->loadModel('MrrhhHistoricoRetroactivoVx');
                $this->MrrhhHistoricoRetroactivoVx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

                $this->Flash->success(__('Personalizacion Finalizada'));
                return $this->redirect(['action' => 'vacaciones']);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
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

        $this->loadModel('MrrhhHistoricoRetroactivoV');
        $this->MrrhhHistoricoRetroactivoV->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

        $this->loadModel('MrrhhHistoricoRetroactivoVx');
        $this->MrrhhHistoricoRetroactivoVx->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);

        $this->Flash->success(__('Nomina Eliminada'));
        return $this->redirect(['action' => 'vacaciones']);
    }

     public function deletep($id = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhnominaPartidas');
        $this->MrrhhnominaPartidas->deleteAll(['id IN' => $id]);

        $this->Flash->success(__('Partida Eliminada'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
    }


    public function incluir($cedula = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivoVx');
        $query = $this->MrrhhHistoricoRetroactivoVx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
    }

    public function incluirtodos($tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivoVx');
        $query = $this->MrrhhHistoricoRetroactivoVx->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
    }

    public function excluir($cedula = null, $tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivoVx');
        $query = $this->MrrhhHistoricoRetroactivoVx->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
    }

    public function excluirtodos($tp = null, $m = null, $q = null){

        $this->loadModel('MrrhhHistoricoRetroactivoVx');
        $query = $this->MrrhhHistoricoRetroactivoVx->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
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
            $this->loadModel('MrrhhHistoricoRetroactivoVx');
            $query = $this->MrrhhHistoricoRetroactivoVx->query();
            $query->update()
                ->set(['sueldo' => $this->revertir_moneda($sueldo)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }

        if($sueldo_anterior != null){
            $this->loadModel('MrrhhHistoricoRetroactivoVx');
            $query = $this->MrrhhHistoricoRetroactivoVx->query();
            $query->update()
                ->set(['sueldo_anterior' => $this->revertir_moneda($sueldo_anterior)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }

        if($sueldo_base != null){
            $this->loadModel('MrrhhHistoricoRetroactivoVx');
            $query = $this->MrrhhHistoricoRetroactivoVx->query();
            $query->update()
                ->set(['sueldo_base' => $this->revertir_moneda($sueldo_base)])
                ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
                ->execute();
        }
        
        $this->Flash->success(__('Sueldo Asignado'));
        return $this->redirect(['action' => 'vacaciones', $tp, $m, $q]);
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
     public function ResumenNominae($tp = '', $mes = '', $quincena = '', $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        $data = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];

        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data2 = $this->ViewMrrhhHistoricoRetroactivoVx->find('all')->where($condicion)->where(['procesado' => 1]);
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data2 = $this->ViewMrrhhHistoricoRetroactivoV->find('all')->where($condicion);
        }


         $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        $pdf -> Output();
        exit();
    }

    public function Acumuladoe($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
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

    public function Reportee($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
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

    public function Requisicione($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
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


















     /*----------------------------- CONTRATADOS -----------------------------=*/
     public function Asignaciono($tp = '', $mes = '', $quincena = '', $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        $data = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];

        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data2 = $this->ViewMrrhhHistoricoRetroactivoVx->find('all')->where($condicion)->where(['procesado' => 1]);
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data2 = $this->ViewMrrhhHistoricoRetroactivoV->find('all')->where($condicion);
        }

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);


        $this->loadModel('Quincena');
        $q = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $m = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        if($m['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($m['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($m['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($m['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($m['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($m['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($m['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($m['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($m['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($m['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($m['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($m['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($m['denominacion'] == 'FEBRERO' AND $q['fecha_hasta'] == 30) $dia = 29; else $dia = $q['fecha_hasta']; 

        $pdf = new PDF_AsignacionesObrerosFijos('L','mm',array(320,380));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  


        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        
        $pdf -> SetFont('Arial','',6);  

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_bono_estabilidad = 0;
        $t_horas_extras = 0;

        $t_vacaciones  = 0;
        $t_asignaciones  = 0;
        $i  = 0;

        $t_becas = 0;
        $horasd = 0;
        $horasn = 0;
        $horash = 0;
       $dias = 0;

       $horas = 0;
       $bono_estabilidad = 0;
       $t_asignacion = 0;

        foreach ($data2 as $key) {

    if($key['dias'] != 0){

        $sueldo_base = $key['sueldo_base'];

        
       if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

        if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

        if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

        if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

        if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;


         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;




         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/

        if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']); else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

        $prima_profesion = ($key['prima_profesion'] * 2);
        $prima_antiguedad = ($key['prima_antiguedad'] * 2);

        //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
        $horas = $key['horas_extras'];

        if($key['mes'] == 2 and $key['quincena'] == 1){
            $bono_estabilidad = 0;
        }else{
            $bono_estabilidad = $sueldo_base  * 0.40;
        }
        
        //$horas = $horasd + $horasn + $horash;

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 9524559){
                    $vacaciones = 1849041.83;
                }

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 11801533){
                    $vacaciones = 3448494.35;
                }

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 14793913){
                    $vacaciones = 1353725.33;
                }

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                $total_asignaciones = ($asignacion / 30) * $key['dias'];
                

                 /*if($key['cedula'] == 11801533){
                        $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $vacaciones + 62499.98;
                 } else{
                    $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad +
                            $vacaciones;
                     }*/

                     $asignaciones = $total_asignaciones + $vacaciones;

                     if($mes == 2 and $quincena == 1 and $key['cedula'] == 11801533){
                        $asignaciones =  3679599.35;
                    }

                    if($mes == 2 and $quincena == 1 and $key['cedula'] == 14793913){
                        $asignaciones = 1459830.333;
                    }
                 

                            @$t_sueldo_base += $sueldo_base;
                            @$t_becas += $becas;
                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_hogar  += $prima_hogar;
                            @$t_bono_estabilidad  += $bono_estabilidad;
                            @$t_horas_extras  += $horas;

                            @$t_vacaciones  += $vacaciones;
                            @$t_asignaciones  += $asignaciones;
                            @$t_asignacion  += $total_asignaciones;

               } 



       

        /*======================================================================================================*/

                if($key['cedula'] != 0){
                    $pdf -> SetFont('Arial','',6);
                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5, ++$i ,1,0,'C');
                    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
                    $pdf -> Cell(30,5, $this->mayus(@$key['apellidos']),1,0,'L');
                    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
                    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
                    $pdf -> Cell(30,5, $this->mayus(substr($key['cargo'],0,40)),1,0,'L');
                    $pdf -> Cell(17,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');
                    $pdf -> Cell(17,5, $this->moneda(@$sueldo_base),1,0,'R');
                    $pdf -> Cell(17,5, $this->moneda($horas),1,0,'R');
                    $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
                    $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$bono_estabilidad),1,0,'R');
                    $pdf -> Cell(40,5, $this->moneda(@$total_asignaciones),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$vacaciones),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$asignaciones),1,1,'R');

                }

                //$this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $asignaciones);

                    /*======================================================================================================*/
                    /*====================================== TOTAL EN COLUMNAS ============================================*/
                   
                


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$q['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(1);
        $pdf -> Cell(152,5,'TOTAL',1,0,'C');

        /*======================================================================================================*/
        /*====================================== FILA DE TOTALES ============================================*/
            
            $pdf -> Cell(17,5, $this->moneda($t_sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda($t_horas_extras),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda($t_prima_profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda($t_prima_hijos ),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_prima_antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda($t_prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda($t_becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_bono_estabilidad),1,0,'R');
            $pdf -> Cell(40,5, $this->moneda($t_asignacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_vacaciones),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_asignaciones),1,1,'R');

        $pdf -> ln();

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+4);
        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
        
        $pdf -> Output();
        exit();
    }

    public function Deducciono($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new PDF_DeduccionesObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_prestamo_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_x_depositario = 0;
        $x_depositario = 0;
        $t_total = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            $sueldo_base = $key['sueldo_base']; 

             if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if($key['cedula'] == 11137031 ){
                $deduccion_caja = 18729.17;
            }else{
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            }

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $total = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            if($key['cedula'] != 0){

                    $pdf -> SetFont('Arial','',6);
                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5, ++$i ,1,0,'C');
                    $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
                    $pdf -> Cell(30,5, $key['apellidos'],1,0,'R');
                    $pdf -> Cell(30,5, $key['nombres'],1,0,'R');
                    $pdf -> SetFont('Arial','',6);
                    $pdf -> Cell(15,5, $this->moneda(@$deduccion_sso),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$faov),1,0,'R');
                    $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$asociacion),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_asociacion += $asociacion;
                    @$t_sindicato += $sindicato;
                    @$t_total += $total;
            }


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

            $pdf -> Cell(15,5, $this->moneda(@$t_sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$t_rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$t_faov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_asociacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_sindicato),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
        
        $pdf -> Output();
        exit();
    }

    public function Aporteo($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new PDF_AportePatronalObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();
        

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();


        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {

              $sueldo_base = $key['sueldo_base']; 
              $dias = $key['dias'];

                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

                $prima_profesion = $key['prima_profesion'] * 2;
                $prima_antiguedad = $key['prima_antiguedad'] * 2;

                $horas = $key['horas_extras']; 

              $aporte_patronal_asso = (($sueldo_base / 30) * 0.09) * $dias;
              $aporte_patronal_arpe = (($sueldo_base / 30) * 0.017) * $dias;

              $afaov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.02) / 30) * $key['dias']; 

              // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $afaov = 20937.28;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $afaov = 8219.05;

              if ($key['caja_ahorro'] != 0 ) 
                    $aporte_deduccion_caja = (($sueldo_base / 30) * 0.15) * $dias; 
                else $aporte_deduccion_caja = 0;

                

              $total =
                    $aporte_patronal_asso +
                    $aporte_patronal_arpe +
                    $aporte_deduccion_caja +
                    $afaov;




              if($key['cedula'] != 0){

                $pdf -> SetX(5);
                $pdf -> Cell(6,5, ++$i,1,0,'C');
                $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
                $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(30,5, $this->mayus(substr($key['cargo'],1,45)),1,0,'R');
                $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
                $pdf -> Cell(16,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$aporte_patronal_arpe),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$afaov),1,0,'R');
                $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
                $pdf -> Cell(17,5, $this->moneda(@$total),1,0,'R');
                $pdf -> ln();

                    $t_asso += $aporte_patronal_asso; 
                    $t_arpe += $aporte_patronal_arpe;
                    $t_afaov += $afaov;
                    $t_caja += $aporte_deduccion_caja;
                    $t_total += $total;

                    //$this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $t_total);
               
              }

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones  Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(133,5,'TOTAL:',1,0,'C');
        $pdf -> Cell(16,5, $this->moneda(@$t_asso),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_arpe),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda(@$t_total),1,1,'R');


        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 
        
        $pdf -> Output();
        exit();
    }

    public function Netoo($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new PDF_NetoCobrarObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {


                if($key['requisicion'] == 531){
                    $sueldo_base = $key['sueldo_base'];
                }else{
                    $sueldo_base = ($key['sueldo_base'] / 30) *  $key['dias'];
                }

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias'] ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias'] ; else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias'] ; else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias'] ; else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias'] ; else $inicial = 0;


                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = (( 100000 * $key['hijos']) / 30) * $key['dias'] ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = (100000 / 30) * $key['dias'] ; else $prima_hogar = 0;

                $prima_profesion = (($key['prima_profesion'] * 2) / 30) * $key['dias'];
                $prima_antiguedad = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];

                //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
                $horas = $key['horas_extras'];

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }


               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

              

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                $total_asignaciones = ($asignacion / 30) * $key['dias'];

                $valor = $total_asignaciones + $vacaciones;
                

                    $total_asignaciones = ($asignacion / 30) * $key['dias'];


        /*======================================================================================================*/

            $sueldo_base = $key['sueldo_base']; 

             if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = (((($sueldo_base ) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if($key['cedula'] == 11137031 ){
                $deduccion_caja = 18729.17;
            }else{
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            }

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

            /*=====================================================================================================================================*/

            $neto = $asignacion - $deduccion;

            /*======================================================================================================================================*/
            if($key['cedula'] != 0){

                $pdf -> SetFont('Arial','',8);
                $pdf -> SetX(10);
                $pdf -> Cell(10,5, ++$i,1,0,'C');
                $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
                $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'J');
                $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$valor),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

                $t_incremento += $sueldo_base;
                $t_asignacion += $asignacion;
                $t_deduccion += $deduccion;
                $t_neto += $neto;

                //$this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $t_neto);
            }

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(10);
            $pdf -> Cell(160,5, 'TOTAL',1,0,'C');
            $pdf -> Cell(30,5, $this->moneda(@$t_incremento),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$t_asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$t_deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$t_neto),1,1,'R');
        
        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
        
        $pdf -> Output();
        exit();
    }

    public function Acumuladoo($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(80,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$quincena['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_hijos2  = 0;

        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_prima_hogar2  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $t_x_depositario = 0;

        $t_ajuste_sueldo  = 0;
        $t_prueba  = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        $t_becas = 0;
        $t_becas1 = 0;

        $t_horas = 0;

        $t_bono_estabilidad = 0;
         $var1 = 0;
         $var1 = 0;
         $var1 = 0;


         $t_vacaciones = 0;
         $t_asignacion = 0;
         $t_prima_antiguedad2 = 0;
         $t_prima_profesion2 = 0;
         $t_bono_estabilidad2 = 0;
         $t_sueldo = 0;


        foreach ($data as $key) {
            if($key['dias']){
                ++$i;
            }
            
                $horas = $key['horas_extras'];
                
                $sueldo = ($key['sueldo_base'] / 30) * $key['dias'];

                $sueldo_base = $key['sueldo_base'];

            if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
            $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

            if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad1 = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias']; else $discapacidad1 = 0;
            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria1 = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias']; else $universitaria1 = 0;
            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria1 = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias']; else $secundaria1 = 0;
            if($key['cantidad_beca_primaria'] !=0 ) $primaria1 = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias']; else $primaria1 = 0;
            if($key['cantidad_beca_inicial'] !=0 ) $inicial1 = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias']; else $inicial1 = 0;
            $becas1 = $inicial1 + $primaria1 + $secundaria1 + $universitaria1 + $discapacidad1;




                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']); else $prima_hijos = 0;
                if($key['hijos'] != 0 ) $prima_hijos2 = (( 100000 * $key['hijos']) / 30) * $key['dias']; else $prima_hijos2 = 0;


                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar2 = (100000 / 30) * $key['dias'] ; else $prima_hogar2 = 0;

                $prima_profesion = ($key['prima_profesion'] * 2);
                $prima_profesion2 = (($key['prima_profesion'] * 2) / 30) * $key['dias'];


                $prima_antiguedad = ($key['prima_antiguedad'] * 2);
                $prima_antiguedad2 = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];
             

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }


                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad2 = (($sueldo_base  * 0.40) / 30) * $key['dias'];
                }


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            if($key['dias'] != 0){

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);


                   /* if($key['cedula'] == 9524559){
                        $vacaciones = 1849041.83;
                    }

                    if($key['cedula'] == 11801533){
                        $vacaciones = 3448494.35;
                    }

                    if($key['cedula'] == 14793913){
                        $vacaciones = 1353725.33;
                    }*/


                
                 $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                    //$total_asignaciones = $asignacion;
                    $total_asignaciones = ($asignacion / 30) * $key['dias'];
                

                 /*if($key['cedula'] == 11801533){
                        $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $vacaciones + 62499.98;
                 } else{
                    $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad +
                            $vacaciones;
                     }*/

                     $asignaciones = $total_asignaciones + $vacaciones;

                            @$t_sueldo_base += $sueldo_base;
                            @$t_sueldo += $sueldo;

                            @$t_becas += $becas;
                            @$t_becas1 += $becas1;

                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_hijos2  += $prima_hijos2;

                            @$t_prima_hogar  += $prima_hogar;
                            @$t_prima_hogar2  += $prima_hogar2;
                            
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_profesion2  += $prima_profesion2;

                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_antiguedad2  += $prima_antiguedad2;


                            @$t_bono_estabilidad  += $bono_estabilidad;
                            @$t_bono_estabilidad2  += $bono_estabilidad2;

                            @$t_horas += $horas;         

                            @$t_vacaciones  += $vacaciones;
                            @$t_asignacion  += $total_asignaciones;
                            @$t_asignaciones  += $asignaciones;

               } 
          


            //===============================================================================================
      
            $sueldo_base = $key['sueldo_base']; 

             if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = (((($sueldo_base ) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

          
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            

            if($key['requisicion'] > 910){
                    if($key['funeraria'] != 0 ) 
                        $funeraria = (40000/30) * $key['dias']; 
                        else $funeraria = 0;
            }else{
                    if($key['funeraria'] != 0 ) 
                        $funeraria = (20000/30) * $key['dias']; 
                        else $funeraria = 0;
            }

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;



                
            //=======================================================================================================

                $sueldo_base = $key['sueldo_base']; 

                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

                $prima_profesion = $key['prima_profesion'] * 2;
                $prima_antiguedad = $key['prima_antiguedad'] * 2;


              $aporte_patronal_asso = (($sueldo_base / 30) * 0.09) * $key['dias'];
              $aporte_patronal_arpe = (($sueldo_base / 30) * 0.017) * $key['dias'];

              $afaov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.02) / 30) * $key['dias']; 

              $aporte_deduccion_caja = (($sueldo_base / 30) * 0.10) * $key['dias'];

               // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $afaov = 20937.28;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $afaov = 29403.01;

              if ($key['caja_ahorro'] != 0 ) 
                    $aporte_deduccion_caja = (($sueldo_base / 30) * 0.15) * $key['dias']; 
                else $aporte_deduccion_caja = 0;



            if($key['dias'] != 0){
              $total =
                    $aporte_patronal_asso +
                    $aporte_patronal_arpe +
                    $aporte_deduccion_caja +
                    $afaov;
            }

                $t_asso += $aporte_patronal_asso; 
                $t_arpe += $aporte_patronal_arpe;
                $t_afaov += $afaov;
                $t_acaja += $aporte_deduccion_caja;

        }
            $var1 = $t_vacaciones + $t_asignacion;
            $var2 =  @$t_sso +  @$t_rpe + @$t_faov  + @$t_caja + @$t_funeraria + $t_sindicato + $t_asociacion;
            $var3 =  $t_asso  + $t_arpe + $t_afaov + $t_acaja;

          
        //if($key['requisicion'] == )

        $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Vacaciones (Clausula N° 36)',0,0);
        $pdf -> Cell(30,4,'4.01.05.06.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_vacaciones),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Sueldo Base',0,0);
        $pdf -> Cell(30,4,'4.01.05.06.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_sueldo),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1002',0,0);
        $pdf -> Cell(110,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(30,4,'4.01.03.19.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_hijos2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1003',0,0);
        $pdf -> Cell(110,4,'Prima por Hogar',0,0);
        $pdf -> Cell(30,4,'4.01.03.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_hogar2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1004',0,0);
        $pdf -> Cell(110,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(30,4,'4.01.03.21.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_antiguedad2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1005',0,0);
        $pdf -> Cell(110,4,'Prima de Profesion',0,0);
        $pdf -> Cell(30,4,'4.01.03.22.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_profesion2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);


        $pdf -> Cell(25,4,'1006',0,0);
        $pdf -> Cell(110,4,'Beca Escolares',0,0);
        $pdf -> Cell(30,4,'4.01.07.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_becas1),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1006',0,0);
        $pdf -> Cell(110,4,'Bono Estabilidad Economica',0,0);
        $pdf -> Cell(30,4,'4.01.04.97.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono_estabilidad2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2001',0,0);
        $pdf -> Cell(110,4,'Seguro Social Obligatorio',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_sso),0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2002',0,0);
        $pdf -> Cell(110,4,'Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_rpe),0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2003',0,0);
        $pdf -> Cell(110,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_faov),0,0);
        $pdf -> Cell(30,4,'',0,1);

        if($t_fpj != 0){
            $pdf -> Cell(25,4,'2004',0,0);
            $pdf -> Cell(110,4,'Fondo de Pension y Jubilacion',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_fpj),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_caja != 0){
            $pdf -> Cell(25,4,'2005',0,0);
            $pdf -> Cell(110,4,'Caja de Ahorros',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_caja),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_funeraria != 0){
            $pdf -> Cell(25,4,'2007',0,0);
            $pdf -> Cell(110,4,'Servicios Funerarios',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_funeraria),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_sindicato != 0){
            $pdf -> Cell(25,4,'2008',0,0);
            $pdf -> Cell(110,4,'SINDICATO',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_sindicato),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_asociacion != 0){
            $pdf -> Cell(25,4,'2009',0,0);
            $pdf -> Cell(110,4,'ACOFJAM',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_asociacion),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

         if($t_x_depositario != 0){
            $pdf -> Cell(25,4,'2010',0,0);
            $pdf -> Cell(110,4,'Depositario Judicial',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4,$this->moneda($t_x_depositario),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        $pdf -> Cell(25,4,'3001',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(30,4,'4.01.06.10.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_asso),0,1);

        $pdf -> Cell(25,4,'3002',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(30,4,'4.01.06.12.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_arpe),0,1);

        $pdf -> Cell(25,4,'3003',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(30,4,'4.01.06.13.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_afaov),0,1);

        if($t_afpj != 0){
            $pdf -> Cell(25,4,'3004',0,0);
            $pdf -> Cell(110,4,'Aporte Patronal del F.P.J',0,0);
            $pdf -> Cell(30,4,'4.01.06.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_afpj),0,1);
        }

        $pdf -> Cell(25,4,'3005',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal de la Caja de Ahorros',0,0);
        $pdf -> Cell(30,4,'4.01.07.23.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_acaja),0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);


            $pdf -> Cell(30,4,$this->moneda($var1- 0.01),1,0);
            $pdf -> Cell(30,4,$this->moneda($var2),1,0);
            $pdf -> Cell(30,4,$this->moneda($var3),1,1);


        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        $pdf -> Cell(30,4,$this->moneda(($var1 - 0.01) - $var2),1,1);        
        

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
        exit();
    }

    public function Reporteo($tp = '', $mes = '', $quincena = '', $requisicion = ''){

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoRetroactivoVx');
            $data = $this->ViewMrrhhHistoricoRetroactivoVx->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoRetroactivoV');
            $data = $this->ViewMrrhhHistoricoRetroactivoV->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $faov = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $sueldo = 0;

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        $diferencia_prima_profesion = 0;

         $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha.ANO_FISCAL.'  '.'Hasta:'.' '.$quincena['fecha_hasta'].$fecha.ANO_FISCAL,0,1,'C');
        

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        $asignacion = 0;
        $deduccion = 0;
        $neto = 0;

        $prima_hijos2 = 0;
        $prima_hogar2 = 0;

        $t_asignacion = 0; 

        foreach ($data as $key) {
        //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
                
                $horas = $key['horas_extras'];

                if($key['requisicion'] == 531){
                    $sueldo_base = $key['sueldo_base'];
                }else{
                    $sueldo_base = ($key['sueldo_base'] / 30) *  $key['dias'];

                }

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias'] ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias'] ; else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias'] ; else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias'] ; else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias'] ; else $inicial = 0;


                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;




                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = (( 100000 * $key['hijos']) / 30) * $key['dias'] ; else $prima_hijos = 0;
                if($key['hijos'] != 0 ) $prima_hijos2 = ( 100000 * $key['hijos']); else $prima_hijos2 = 0;


                if($key['prima_hogar'] != 0 ) $prima_hogar = (100000 / 30) * $key['dias'] ; else $prima_hogar = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar2 = 100000; else $prima_hogar2 = 0;

                $prima_profesion = (($key['prima_profesion'] * 2) / 30) * $key['dias'];
                $prima_antiguedad = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];;

                //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }

        
        //$horas = $horasd + $horasn + $horash;

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        $vacaciones2 = (($key['sueldo_base'] + ($key['prima_profesion'] * 2) + ($key['prima_antiguedad'] * 2) + $horas + $prima_hijos2  + $prima_hogar2) / 30) * $key['cantidad_dias'];

        $total_asignaciones = $vacaciones2 + $sueldo_base + $prima_antiguedad + $prima_profesion + $prima_hijos + $prima_hogar + $bono_estabilidad + $becas;

        //$this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $total_asignaciones);

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

  

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;



                 
                        if($key['dias'] != 0){

                            @$t_sueldo_base += $sueldo_base;
                            @$t_becas += $becas;
                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_hogar  += $prima_hogar;
                            @$t_bono_estabilidad  += $bono_estabilidad;

                            @$t_vacaciones  += $vacaciones;
                            @$t_asignaciones  += $asignaciones;

                            @$t_asignacion += $total_asignaciones;


                            $var1 = $t_vacaciones + $t_prima_antiguedad + $t_prima_hogar + $t_prima_profesion + $t_bono_estabilidad;
                        }
               
          


            //===============================================================================================



                        $sueldo_base = $key['sueldo_base']; 

                    if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

                    $prima_profesion = $key['prima_profesion'] * 2;
                    $prima_antiguedad = $key['prima_antiguedad'] * 2;

                    $horas = $key['horas_extras']; 

                    $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
                    $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

                    $faov = (((($sueldo_base ) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

                    // QUITAR
                    if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
                    if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

                    if ($key['caja_ahorro'] != 0 ) 
                        $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                    else $deduccion_caja = 0;

                    if($key['requisicion'] > 910){
                        if($key['funeraria'] != 0 ) 
                            $funeraria = (40000/30) * $key['dias']; 
                        else $funeraria = 0;
                    }else{
                        if($key['funeraria'] != 0 ) 
                            $funeraria = (20000/30) * $key['dias']; 
                        else $funeraria = 0;
                    }

                    if($key['asociacion_funeraria'] != 0 ) 
                        $asociacion = (0.2/30) * $key['dias']; 
                    else $asociacion = 0;

                    if($key['sindicato'] != 0 ) 
                        $sindicato = ((400000/30) * 0.01) * $key['dias']; 
                    else $sindicato = 0;


                   $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_caja + 
                        $faov + 
                        $funeraria + 
                        $asociacion + 
                        $sindicato;
                 

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;

                    @$t_deduccion += $deduccion;
            



            /*======================================================================================================*/
            /*====================================== NETO  =========================================

            
            /*================================================= REPEAT =================================================*/


            $sueldo_base = ($key['sueldo_base'] / 30) *  $key['dias'];

        if($key['cedula'] != 0){

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,$this->mayus('1001 Vacaciones (Clausula N° 36'),0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($vacaciones2),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'R');

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1002 Sueldo Base',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'R');


            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1007'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($bono_estabilidad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1008'.' Bono Estabilidad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_estabilidad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'R');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($total_asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deduccion),1,1,'R');

            $neto = $total_asignaciones - $deduccion;

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');

             $y = $pdf -> GetY();
                if($y > 215){
                    $pdf -> AddPage();
                }

                if($y >215){
                    $pdf -> SetX(90);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].''.$fecha.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].''.$fecha.ANO_FISCAL,0,1,'C');
                }
            }    
        }

        
        $pdf -> ln();
            $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetFont('Arial','B',8);
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL            ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_asignacion - 0.01).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $t_neto = $t_asignacion - $t_deduccion;

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto - 0.01),0,0,'R');


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

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
        
        $pdf -> Output();
        exit();
    }

}