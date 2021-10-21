<?php
namespace App\Controller;

use App\Controller\AppController;


class PDF_HE_OBREROS_FIJOS extends \FPDF {
    function Header()
    {
    $this->SetFont('Arial','B',10);
    
    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
    $this->Image(WWW_ROOT.'img/escudo.jpg',300,5,35,25,"JPG","");

    $this->SetX(140);
    $this->Cell(80,5,'REPORTE DE ASIGANCIONES',0,1,'C');
    $this->SetX(140);
    $this->Cell(80,5,'HORAS EXTRAS NOMINA DE OBREROS FIJOS',0,1,'C');

    $this->SetFont('Arial','B',6);

    $this->ln();
    $this->SetY(40);
    $this->SetX(5);
    $this->MultiCell(6,10,'N',1,'J',0);
    $this->SetY(40);
    $this->SetX(11);
    $this->MultiCell(25,10,'CEDULA',1,'C',0);
    $this->SetY(40);
    $this->SetX(36);
    $this->MultiCell(40,10,'APELLIDO',1,'C',0);
    $this->SetY(40);
    $this->SetX(76);
    $this->MultiCell(40,10,'NOMBRES',1,'C',0);
    $this->SetY(40);
    $this->SetX(116);
    $this->MultiCell(80,10,'CARGO',1,'C',0);
    $this->SetY(40);
    $this->SetX(196);
    $this->MultiCell(20,10,'ASIGNACIONES',1,'C',0);
    $this->SetY(40);
    $this->SetX(216);
    $this->MultiCell(10,10,'CANT.',1,'C',0);
    $this->SetY(40);
    $this->SetX(226);
    $this->MultiCell(25,5,'HORAS EXTRAS DIURNAS',1,'C',0);
    $this->SetY(40);
    $this->SetX(251);
    $this->MultiCell(10,10,'CANT',1,'C',0);
    $this->SetY(40);
    $this->SetX(261);
    $this->MultiCell(25,5,'HORAS EXTRAS NOCTURNAS',1,'C',0);
    $this->SetY(40);
    $this->SetX(286);
    $this->MultiCell(10,10,'CANT',1,'C',0);
    $this->SetY(40);
    $this->SetX(296);
    $this->MultiCell(25,5,'DIAS NO LABORABLES',1,'C',0);
    $this->SetY(40);
    $this->SetX(321);
    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}

class PDF_HE_OBREROS_CONTRATADOS extends \FPDF {
    function Header()
    {
    $this->SetFont('Arial','B',10);
    
    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
    $this->Image(WWW_ROOT.'img/escudo.jpg',300,5,35,25,"JPG","");

    $this->SetX(140);
    $this->Cell(80,5,'REPORTE DE ASIGANCIONES',0,1,'C');
    $this->SetX(140);
    $this->Cell(80,5,'HORAS EXTRAS NOMINA DE OBREROS CONTRATADOS',0,1,'C');

    $this->SetFont('Arial','B',6);

    $this->ln();
    $this->SetY(40);
    $this->SetX(5);
    $this->MultiCell(6,10,'N',1,'J',0);
    $this->SetY(40);
    $this->SetX(11);
    $this->MultiCell(25,10,'CEDULA',1,'C',0);
    $this->SetY(40);
    $this->SetX(36);
    $this->MultiCell(40,10,'APELLIDO',1,'C',0);
    $this->SetY(40);
    $this->SetX(76);
    $this->MultiCell(40,10,'NOMBRES',1,'C',0);
    $this->SetY(40);
    $this->SetX(116);
    $this->MultiCell(80,10,'CARGO',1,'C',0);
    $this->SetY(40);
    $this->SetX(196);
    $this->MultiCell(20,10,'ASIGNACIONES',1,'C',0);
    $this->SetY(40);
    $this->SetX(216);
    $this->MultiCell(10,10,'CANT.',1,'C',0);
    $this->SetY(40);
    $this->SetX(226);
    $this->MultiCell(25,5,'HORAS EXTRAS DIURNAS',1,'C',0);
    $this->SetY(40);
    $this->SetX(251);
    $this->MultiCell(10,10,'CANT',1,'C',0);
    $this->SetY(40);
    $this->SetX(261);
    $this->MultiCell(25,5,'HORAS EXTRAS NOCTURNAS',1,'C',0);
    $this->SetY(40);
    $this->SetX(286);
    $this->MultiCell(10,10,'CANT',1,'C',0);
    $this->SetY(40);
    $this->SetX(296);
    $this->MultiCell(25,5,'DIAS NO LABORABLES',1,'C',0);
    $this->SetY(40);
    $this->SetX(321);
    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}

class PDF_ResumenNominaObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

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



class MRRHHHorasExtrasObrerosController extends AppController
{
	public function index($tp = null, $m = null, $o = null){
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
        $condicion = ['concepto <>' => '', 'tipo' => 'HORAS EXTRAS'];
        $vaca = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        
        $this->set(compact('vaca'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_nomina = $this->MrrhhTipoPersonal->find('all', ['conditions' => ['tipo_nomina' => 2]])->toArray();
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
        //Verifica
        //========================================================

        if($tp != null and $m != null  and $o != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('o', $o);

            if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijos');
                $query = $this->ViewMrrhhObrerosFijos->find('all');

            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratados');
                $query = $this->ViewMrrhhObrerosContratados->find('all');
                
            }



            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHorasExtrasObreros');
            $n = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion])->count();


            if($n == 0){
                
                foreach ($query as $reg) {
                    
                    $this->loadModel('MrrhhHorasExtrasObreros');
                    $he = $this->MrrhhHorasExtrasObreros->newEntity();
                    $he = $this->MrrhhHorasExtrasObreros->patchEntity($he, $this->request->getData());

                    $he->ano = ANO_FISCAL;
                    $he->mes = $m;
                    $he->id_tipo_personal = $tp;
                    $he->cedula = $reg->cedula;
                    $he->requisicion = 9999;
                    $he->omitida = $o;

                    if($he->cedula != 12732280 and $he->cedula != 14794432){
                        $this->MrrhhHorasExtrasObreros->save($he);
                    }
                }
            }
        }

        if($tp != '' and $m != '' and $o != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m,'id_tipo_personal' => $tp, 'procesado' => 0, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHorasExtrasObreros');
            $data = $this->paginate($this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 1, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHorasExtrasObreros');
            $db = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);
            $this->set(compact('db'));

            $ndb = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'tipo' => 'HORAS EXTRAS', 'omitida' => $o];

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

            $this->loadModel('Mes');
            $mes_d = $this->Mes->find('all')->where(['id' => $m])->last();

            $this->loadModel('MrrhhTipoPersonal');
            $tp_d = $this->MrrhhTipoPersonal->find('all')->where(['id' => $tp])->last();

            $concepto = strtoupper('PAGO DE HORAS EXTRAS DEL MES DE ' . $mes_d['denominacion'] . " DEL " . ANO_FISCAL . " DE " . $tp_d['denominacion']);
            $this->set('concepto', $concepto);
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $m = $this->request->data['mes'];
            $o = (@$this->request->data['omitida'] == null) ? "0" : @$this->request->data['omitida'];

            if($tp != '' and $m != ''){

                return $this->redirect(['action' => 'index', $tp, $m, $o]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $tp = $this->request->data['tps'];
            $o = $this->request->data['o'];

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
            $req->omitida = $o;
            $req->tipo = 'HORAS EXTRAS';

            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){

                $this->loadModel('ViewMrrhhHorasExtrasObreros');
                $query = $this->ViewMrrhhHorasExtrasObreros->query();
                $query->update()
                    ->set(['procesado' => 1])
                    ->where(['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'omitida' => $o])
                    ->execute();

                $this->Flash->success(__('HORAS EXTRAS Finalizada'));
                return $this->redirect(['action' => 'index', $tp, $m, $o]);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'index', $tp, $m, $o]);
            }
        }

        //=============================================================
    }

    public function eliminar($tp = null, $m = null, $o = null){

        if($tp == 4 or $tp == 5){

            $this->loadModel('MrrhhHorasExtrasObreros');
            $this->MrrhhHorasExtrasObreros->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'omitida' => $o,]);
        }

        $this->Flash->success(__('Horas Extras Eliminada'));
        return $this->redirect(['action' => 'index']);
    }

	public function EditarHE(){
        $this->loadModel('MrrhhHorasExtrasObreros');

		$query = $this->MrrhhHorasExtrasObreros->updateAll(['cantidad_dias' => $this->request->data['cantidad_dias'], 'dias_no_laborables' => $this->request->data['dias_no_laborables'], 'cantidad_horas' => $this->request->data['cantidad_horas'], 'cantidad_horas_extra_diurnas' => $this->request->data['cantidad_horas_extra_diurnas'], 'cantidad_horas_extra_nocturnas' => $this->request->data['cantidad_horas_extra_nocturnas']], ['id' => $this->request->data['id']]);
        
        $tp = $this->request->data['tp'];
        $m = $this->request->data['m'];
        $o = $this->request->data['o'];

        $this->Flash->success(__('Asignación Actualizada'));
        return $this->redirect(['action' => 'index', $tp, $m, $o]);	
	}

	public function ReportesObrerosFijos($mes = null, $omitida = null){

		$this->loadModel('ViewMrrhhHorasExtrasObreros');
		$condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 4, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1'];
        $data2 = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}

        if($mes['denominacion'] == 'ENERO-FEBRERO-MARZO') {$desde = '01/01/'; $Hasta = '01/03/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];


        $pdf = new PDF_HE_OBREROS_FIJOS('L','mm',array(350,250));
        $pdf -> AddPage();


        $pdf -> SetY(20);
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(160);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
	    $pdf -> SetFont('Arial','',8);

	    $i = 0;
        $diurnas = 0;
        $nocturnas = 0;
        $dias_no_laborables = 0;
        $total = 0;

            $t_asignaciones = 0;
            $t_diurnas = 0;
            $t_nocturnas = 0;
            $t_dias = 0;

          
            $t_total = 0;

        foreach ($data as $key) {

                    foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;



                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                

                  

                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            if($key['cantidad_horas_extra_diurnas'] != 0 or $key['cantidad_horas_extra_diurnas'] != 0 or $key['dias_no_laborables'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(6,7, ++$i,1,0,'C');
                $pdf -> Cell(25,7, $key['cedula'],1,0,'L');
                $pdf -> Cell(40,7, $this->mayus(@$key['apellidos']),1,0,'L');
                $pdf -> Cell(40,7, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(80,7, $this->mayus($key['cargo']),1,0,'L');
                $pdf -> Cell(20,7,$this->moneda(@$asignaciones),1,0,'R');
                $pdf -> Cell(10,7, $key['cantidad_horas_extra_diurnas'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$diurnas),1,0,'R');
                $pdf -> Cell(10,7, $key['cantidad_horas_extra_nocturnas'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$nocturnas),1,0,'R');
                $pdf -> Cell(10,7, $key['dias_no_laborables'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$dias_no_laborables),1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$total),1,1,'R');
            }else{

            }

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(160);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(191,7, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(20,7,'',1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_diurnas),1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_nocturnas),1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_dias),1,0,'R');
        $pdf -> Cell(25,7, $this->moneda(@$t_total),1,1,'R');


     /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/


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


	public function ReportesObrerosContratados($mes = null, $omitida = null){

		$this->loadModel('ViewMrrhhHorasExtrasObreros');
		$condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 5, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1', 'omitida' => $omitida];
        $data2 = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}

        if($mes['denominacion'] == 'ENERO-FEBRERO-MARZO') {$desde = '01/01/'; $Hasta = '01/03/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];


        $pdf = new PDF_HE_OBREROS_FIJOS('L','mm',array(350,250));
        $pdf -> AddPage();


        $pdf -> SetY(20);
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(160);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> SetFont('Arial','',8);

        $i = 0;
        $diurnas = 0;
        $nocturnas = 0;
        $dias_no_laborables = 0;
        $total = 0;

            $t_asignaciones = 0;
            $t_diurnas = 0;
            $t_nocturnas = 0;
            $t_dias = 0;
            $t_total = 0;

        foreach ($data as $key) {

                    foreach ($data2 as $key2) {
                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;



                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                if($key['cedula'] == 5295914 or $key['cedula'] == 9503364){
                    
                        if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.50 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.30) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;

                }else{
                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                }

                  

                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            if($key['cantidad_horas_extra_diurnas'] != 0 or $key['cantidad_horas_extra_diurnas'] != 0 or $key['dias_no_laborables'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(6,7, ++$i,1,0,'C');
                $pdf -> Cell(25,7, $key['cedula'],1,0,'L');
                $pdf -> Cell(40,7, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(40,7, $this->mayus(@$key['nombres']),1,0,'L');
                $pdf -> Cell(80,7, $this->mayus($cargo),1,0,'L');
                $pdf -> Cell(20,7,$this->moneda(@$asignaciones),1,0,'R');
                $pdf -> Cell(10,7, $key['cantidad_horas_extra_diurnas'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$diurnas),1,0,'R');
                $pdf -> Cell(10,7, $key['cantidad_horas_extra_nocturnas'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$nocturnas),1,0,'R');
                $pdf -> Cell(10,7, $key['dias_no_laborables'],1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$dias_no_laborables),1,0,'R');
                $pdf -> Cell(25,7, $this->moneda(@$total),1,1,'R');
            }else{

            }

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(160);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(191,7, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(20,7,'',1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_diurnas),1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_nocturnas),1,0,'R');
        $pdf -> Cell(10,7, '',1,0,'C');
        $pdf -> Cell(25,7, $this->moneda(@$t_dias),1,0,'R');
        $pdf -> Cell(25,7, $this->moneda(@$t_total + 0.01),1,1,'R');


     /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/


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



    public function RequisicionObrerosFijos($mes = '', $omitida = null, $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion, 'omitida' => $omitida];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',16);
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $requisicion,0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha($data['fecha_rrhh']). '
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
    $pdf -> MultiCell(190,5,'PAGO DE HORAS EXTRAS DIURNAS, HORAS EXTRAS NOCTURNAS Y DIAS NO LABORALES A OBREROS FIJOS CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


    $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }


    public function RequisicionObrerosContratados($mes = '', $omitida = null, $requisicion = ''){

         $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion, 'omitida' => $omitida];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',16);
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $requisicion,0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha($data['fecha_rrhh']). '
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
    $pdf -> MultiCell(190,5,'PAGO DE HORAS EXTRAS DIURNAS, HORAS EXTRAS NOCTURNAS Y DIAS NO LABORALES A OBREROS CONTRATADOS CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


    $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }





    public function AcumuladoObrerosFijos($mes = '', $omitida = null){

        $this->loadModel('ViewMrrhhHorasExtrasObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 4, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1'];
        $data2 = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}


        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'NOMINA : HORAS EXTRAS',0,1,'C');
 
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');  

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,5,'Codigo',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,5,'concepto',0,0,'L');
        $pdf -> Cell(22,5,'Cod. Presup',0,0);
        $pdf -> Cell(22,5,'Asignaciones',0,0,'R');
        $pdf -> Cell(22,5,'Deducciones',0,0,'R');
        $pdf -> Cell(22,5,'Patronales',0,0,'R');

        $pdf -> ln();


        $i = 0;
        $diurnas = 0;
        $nocturnas = 0;
        $dias_no_laborables = 0;
        $total = 0;

            $t_asignaciones = 0;
            $t_diurnas = 0;
            $t_nocturnas = 0;
            $t_dias = 0;
            $t_total = 0;

        foreach ($data as $key) {

                    foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;



                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                


                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;
        }

        $t_asignacion = $t_diurnas + $t_nocturnas + $t_dias;




        $pdf -> SetFont('Arial','',6);

        if($t_diurnas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1001',0,0);
            $pdf -> Cell(95,4,'Pago de Horas Extras Dirunas',0,0);
            $pdf -> Cell(22,4,'4.01.04.14.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_diurnas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_nocturnas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',1,0);
            $pdf -> Cell(95,4,'Pago de Horas Extras Nocturnas',1,0);
            $pdf -> Cell(22,4,'4.01.04.15.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_nocturnas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_dias != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1004',0,0);
            $pdf -> Cell(95,4,'Pago por Dias No Laborables ',0,0);
            $pdf -> Cell(22,4,'4.01.04.20.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_dias),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }
           
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,1,'R');

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Neto a Pagar',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,1);

        $pdf -> SetX(110);
        $pdf -> Cell(30,3,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,3,$i,1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);  

        
        $pdf -> Output();
    }

    public function AcumuladoObrerosContratados($mes = '', $omitida = null){

        $this->loadModel('ViewMrrhhHorasExtrasObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 5, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1'];
        $data2 = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}


        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'NOMINA : HORAS EXTRAS',0,1,'C');
 
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');  

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,5,'Codigo',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,5,'concepto',0,0,'L');
        $pdf -> Cell(22,5,'Cod. Presup',0,0);
        $pdf -> Cell(22,5,'Asignaciones',0,0,'R');
        $pdf -> Cell(22,5,'Deducciones',0,0,'R');
        $pdf -> Cell(22,5,'Patronales',0,0,'R');

        $pdf -> ln();


        $i = 0;
        $diurnas = 0;
        $nocturnas = 0;
        $dias_no_laborables = 0;
        $total = 0;

            $t_asignaciones = 0;
            $t_diurnas = 0;
            $t_nocturnas = 0;
            $t_dias = 0;
            $t_total = 0;

        foreach ($data as $key) {

            if($key['cantidad_horas_extra_diurnas'] != 0 or $key['cantidad_horas_extra_diurnas'] != 0 or $key['dias_no_laborables'] != 0){
                ++$i;
            }

                    foreach ($data2 as $key2) {
                        if($key['cedula'] == $key2['cedula']){

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;



                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
    
                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;
        }

        $t_asignacion = $t_diurnas + $t_nocturnas + $t_dias;




        $pdf -> SetFont('Arial','',5);

        if($t_diurnas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1001',0,0);
            $pdf -> Cell(95,4,'Pago de Horas Extras Dirunas',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_diurnas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_nocturnas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',0,0);
            $pdf -> Cell(95,4,'Pago de Horas Extras Nocturnas',0,0);
            $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_nocturnas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_dias != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1004',0,0);
            $pdf -> Cell(95,4,'Pago por Dias No Laborables ',0,0);
            $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_dias),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }
           
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,1,'R');

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Neto a Pagar',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,1,'R');

        $pdf -> ln();
        $pdf -> SetX(110);
        $pdf -> Cell(30,3,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,3,$i,1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);  
        $pdf -> Output();
    }


    public function ResumenNominaObrerosFijos($mes = '', $omitida = ''){


        $this->loadModel('ViewMrrhhHorasExtrasObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 4, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1'];
        $data2 = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
        

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $i = 0;

        foreach ($data as $key) {

            ++$i;

            foreach ($data2 as $key2) {
                        foreach ($data2 as $key2) {
                        if($key['cedula'] == $key2['cedula']){

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                if($key['cedula'] == 5295914 or $key['cedula'] == 9503364){
                    
                        if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.50 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.30) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;

                }else{
                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                }


                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;
        }

        @$t_asignacion = $t_diurnas + $t_nocturnas + $t_dias;

            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            $deducciones = 0;

            if($key['status'] !=0) @$neto = 
                $total - 
                $deducciones; 
            else $neto = 0;


    if(@$diurnas != 0 or @$nocturnas != 0 or @$dias_no_laborables != 0){
            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            if($key['sueldo'] != 0){
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key2['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key2['sueldo_base']),1,1,'L');
            }
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $key['fecha_ingreso_institucion'],1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            if($diurnas != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.'  Horas Extras Dirunas',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($diurnas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if($nocturnas != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.'  Horas Extras Nocturnas',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($nocturnas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if($dias_no_laborables != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'  Dias No Laborables',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($dias_no_laborables),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');
        }

             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y >215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');
            }

            $t_asignacion = $t_asignacion;
            $t_deduccion += $deducciones;
        }

        

        $t_neto = $t_asignacion - $t_deduccion;


        $pdf -> ln();
            $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL            ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_asignacion).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'L');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto),0,0,'L');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');



            $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }


    public function ResumenNominaObrerosContratados($mes = '', $omitida = ''){


        $this->loadModel('ViewMrrhhHorasExtrasObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 5, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHorasExtrasObreros->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => '1'];
        $data2 = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        if($mes['denominacion'] == 'ENERO')  {$desde = '01/01/'; $Hasta = '30/01/';}
        if($mes['denominacion'] == 'FEBRERO') {$desde = '01/02/'; $Hasta = '29/02/';}
        if($mes['denominacion'] == 'MARZO') {$desde = '01/03/'; $Hasta = '30/03/';}
        if($mes['denominacion'] == 'ABRIL') {$desde = '01/04/'; $Hasta = '30/04/';}
        if($mes['denominacion'] == 'MAYO') {$desde = '01/05/'; $Hasta = '30/05/';}
        if($mes['denominacion'] == 'JUNIO') {$desde = '01/06/'; $Hasta = '30/06/';}
        if($mes['denominacion'] == 'JULIO') {$desde = '01/07/'; $Hasta = '30/07/';}
        if($mes['denominacion'] == 'AGOSTO') {$desde = '01/08/'; $Hasta = '30/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE') {$desde = '01/09/'; $Hasta = '30/09/';}
        if($mes['denominacion'] == 'OCTUBRE') {$desde = '01/10/'; $Hasta = '30/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE') {$desde = '01/11/'; $Hasta = '30/11/';}
        if($mes['denominacion'] == 'DICIEMBRE') {$desde = '01/12/'; $Hasta = '30/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta'];

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C'); 
        

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $i = 0;


        $asignaciones = 0;

        foreach ($data as $key) {

            ++$i;

            foreach ($data2 as $key2) {
                        foreach ($data2 as $key2) {
                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];
                            $sueldo_base = $key2['sueldo_base'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;



                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                if($key['cedula'] == 5295914 or $key['cedula'] == 9503364){
                    
                        if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.50 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.30) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;

                }else{
                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                }


                  /*============================ Total ==========================*/

                  $total = $diurnas + $nocturnas + $dias_no_laborables;

            @$t_asignaciones += $asignaciones;
            @$t_diurnas += $diurnas;
            @$t_nocturnas += $nocturnas;
            @$t_dias += $dias_no_laborables;
            @$t_total += $total;
        }

        $t_asignacion = $t_diurnas + $t_nocturnas + $t_dias;

            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            $deducciones = 0;

            if($key['status'] !=0) $neto = 
                $total - 
                $deducciones; 
            else $neto = 0;


    if($diurnas != 0 or $nocturnas != 0 or $dias_no_laborables != 0){
            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            if($key['sueldo'] != 0){
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base),1,1,'L');
            }
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($cargo,0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key2['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            if($diurnas != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.'  Horas Extras Dirunas',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($diurnas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if($nocturnas != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.'  Horas Extras Nocturnas',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($nocturnas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if($dias_no_laborables != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'  Dias No Laborables',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($dias_no_laborables),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');
        }

             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y >215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Pago de Horas Extras Diurnas, Horas Extras Nocturnas y Dias No Laborables Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C'); 
            }

            $t_asignacion = $t_asignacion;
            $t_deduccion += $deducciones;
        }

        

        $t_neto = $t_asignacion - $t_deduccion;


        $pdf -> ln();
            $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL            ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_asignacion).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'L');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto),0,0,'L');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');



            $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }

}
