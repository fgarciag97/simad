<?php
namespace App\Controller;

use App\Controller\AppController;


class PDF_CT_OBREROS_FIJOS extends \FPDF {
    function Header()
    {

    $this->SetFont('Arial','B',10);

    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
    $this->Image(WWW_ROOT.'img/escudo.jpg',300,5,35,25,"JPG","");  

    $this->SetX(140);
    $this->Cell(80,5,'REPORTE DE ASIGANCIONES',0,1,'C');
    $this->SetX(140);
    $this->Cell(80,5,'NOMINA DE: '. 'OBREROS FIJOS'. ' -  BONO DE ALIMENTACION',0,1,'C');

    $this->SetFont('Arial','B',6);

    $this->ln();
    $this->SetY(30);
    $this->SetX(5);
    $this->MultiCell(6,10,'N',1,'J',0);
    $this->SetY(30);
    $this->SetX(11);
    $this->MultiCell(25,10,'CEDULA',1,'C',0);
    $this->SetY(30);
    $this->SetX(36);
    $this->MultiCell(50,10,'APELLIDO',1,'C',0);
    $this->SetY(30);
    $this->SetX(86);
    $this->MultiCell(50,10,'NOMBRES',1,'C',0);
    $this->SetY(30);
    $this->SetX(136);
    $this->MultiCell(80,10,'DEPENDENCIA',1,'C',0);
    $this->SetY(30);
    $this->SetX(216);
    $this->MultiCell(20,10,'MONTO DIARIO',1,'C',0);
    $this->SetY(30);
    $this->SetX(236);
    $this->MultiCell(20,5,'DIAS TRABAJADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(256);
    $this->MultiCell(20,10,'DIAS FALTADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(276);
    $this->MultiCell(15,5,'DIAS A CANCELAR',1,'C',0);
    $this->SetY(30);
    $this->SetX(291);
    $this->MultiCell(25,5,'TOTAL DIAS TRABAJADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(316);
    $this->MultiCell(20,10,'NETO A COBRAR',1,'C',0);
    }
}

class PDF_CT_OBREROS_CONTRATADOS extends \FPDF {
   function Header()
    {

    $this->SetFont('Arial','B',10);

    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
    $this->Image(WWW_ROOT.'img/escudo.jpg',300,5,35,25,"JPG",""); 

    $this->SetX(140);
    $this->Cell(80,5,'REPORTE DE ASIGANCIONES',0,1,'C');
    $this->SetX(140);
    $this->Cell(80,5,'NOMINA DE: '. 'OBREROS CONTRATADOS'. ' -  BONO DE ALIMENTACION',0,1,'C');

    $this->SetFont('Arial','B',6);

    $this->ln();
    $this->SetY(30);
    $this->SetX(5);
    $this->MultiCell(6,10,'N',1,'J',0);
    $this->SetY(30);
    $this->SetX(11);
    $this->MultiCell(25,10,'CEDULA',1,'C',0);
    $this->SetY(30);
    $this->SetX(36);
    $this->MultiCell(50,10,'APELLIDO',1,'C',0);
    $this->SetY(30);
    $this->SetX(86);
    $this->MultiCell(50,10,'NOMBRES',1,'C',0);
    $this->SetY(30);
    $this->SetX(136);
    $this->MultiCell(80,10,'DEPENDENCIA',1,'C',0);
    $this->SetY(30);
    $this->SetX(216);
    $this->MultiCell(20,10,'MONTO DIARIO',1,'C',0);
    $this->SetY(30);
    $this->SetX(236);
    $this->MultiCell(20,5,'DIAS TRABAJADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(256);
    $this->MultiCell(20,10,'DIAS FALTADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(276);
    $this->MultiCell(15,5,'DIAS A CANCELAR',1,'C',0);
    $this->SetY(30);
    $this->SetX(291);
    $this->MultiCell(25,5,'TOTAL DIAS TRABAJADOS',1,'C',0);
    $this->SetY(30);
    $this->SetX(316);
    $this->MultiCell(20,10,'NETO A COBRAR',1,'C',0);
    }
}


class MRRHHCestaTicketObrerosController extends AppController
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
        $condicion = ['concepto <>' => '', 'tipo' => 'CESTA TICKET'];
        $vaca = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        
        $this->set(compact('vaca'));

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

        if($tp != null and $m != null ){

            $this->set('tps', $tp);
            $this->set('ms', $m);

            if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijos');
                $query = $this->ViewMrrhhObrerosFijos->find('all');

            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratados');
                $query = $this->ViewMrrhhObrerosContratados->find('all');
                
            }


            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp];

            $this->loadModel('ViewMrrhhCestaTicketObreros');
            $n = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion])->count();


            if($n == 0){
                
                foreach ($query as $reg) {
                    
                    $this->loadModel('MrrhhCestaTicketObreros');
                    $ct = $this->MrrhhCestaTicketObreros->newEntity();
                    $ct = $this->MrrhhCestaTicketObreros->patchEntity($ct, $this->request->getData());

                    $ct->ano = ANO_FISCAL;
                    $ct->mes = $m;
                    $ct->id_tipo_personal = $tp;
                    $ct->cedula = $reg->cedula;
                    $ct->requisicion = 9999;

                    if($ct->cedula != 12732280 and $ct->cedula != 14794432){
                        $this->MrrhhCestaTicketObreros->save($ct);
                    }
                }
            }
        }

        if($tp != '' and $m != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m,'id_tipo_personal' => $tp, 'procesado' => 0];

            $this->loadModel('ViewMrrhhCestaTicketObreros');
            $data = $this->paginate($this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'procesado' => 1];

            $this->loadModel('ViewMrrhhCestaTicketObreros');
            $db = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);
            $this->set(compact('db'));

            $ndb = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp, 'tipo' => 'CESTA TICKET'];

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

            $concepto = strtoupper('PAGO DE CESTA TICKET DEL MES DE ' . $mes_d['denominacion'] . " DEL " . ANO_FISCAL . " DE " . $tp_d['denominacion']);
            $this->set('concepto', $concepto);
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $m = $this->request->data['mes'];

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
            $req->tipo = 'CESTA TICKET';

            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){

                $this->loadModel('ViewMrrhhCestaTicketObreros');
                $query = $this->ViewMrrhhCestaTicketObreros->query();
                $query->update()
                    ->set(['procesado' => 1])
                    ->where(['ano' => ANO_FISCAL, 'mes' => $m, 'id_tipo_personal' => $tp])
                    ->execute();

                $this->Flash->success(__('Cesta Ticket Finalizada'));
                return $this->redirect(['action' => 'index', $tp, $m]);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'index', $tp, $m]);
            }
        }

        //=============================================================
    }

    public function eliminar($tp = null, $m = null){

        if($tp == 4 or $tp == 5){

            $this->loadModel('MrrhhCestaTicketObreros');
            $this->MrrhhCestaTicketObreros->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m]);
        }

        $this->Flash->success(__('Cesta Ticket Eliminado'));
        return $this->redirect(['action' => 'index']);
    }

    public function eliminarp($id = null, $tp = null, $m = null){

            $this->loadModel('MrrhhCestaTicketObreros');
            $this->MrrhhCestaTicketObreros->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'id' => $id]);

        $this->Flash->success(__('Personal eliminado de Cesta Ticket'));
        return $this->redirect(['action' => 'index', $tp, $m]);
    }

	public function EditarCT(){
        $this->loadModel('MrrhhCestaTicketObreros');

		$query = $this->MrrhhCestaTicketObreros->updateAll(['dias_trabajados' => $this->request->data['dias_trabajados'], 'dias_faltados' => $this->request->data['dias_faltados'], 'dias_a_cancelar' => $this->request->data['dias_a_cancelar']], ['id' => $this->request->data['id']]);

        $tp = $this->request->data['tp'];
        $m = $this->request->data['m'];

        $this->Flash->success(__('Asignación Actualizada'));
        return $this->redirect(['action' => 'index', $tp, $m]);	
	}

	public function ReportesObrerosFijos($mes = null){

		$this->loadModel('ViewMrrhhCestaTicketObreros');
		$condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 4];
        $data = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_CT_OBREROS_FIJOS('L','mm','LEGAL');
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(110);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');  
        $pdf-> ln();
        $pdf-> ln();
    

	    $i = 0;
        $t_neto = 0;
        $t_total = 0;

        foreach ($data as $key) {


            if ($key['dias_trabajados'] == 0) $sueldo_base = 0  ; else $sueldo_base = (400000.00 / $key['dias_trabajados'] );
            if ($key['dias_trabajados'] == 0) $total_dias = 0; else $total_dias =  $key['dias_trabajados'] - $key['dias_faltados']; 
            if ($key['dias_trabajados'] == 0)$neto = 0; else $neto = (400000.00/30) * $total_dias; 

           
            $pdf -> SetX(5);
            $pdf -> Cell(6,7, ++$i,1,0,'C');
            $pdf -> Cell(25,7, $key['cedula'],1,0,'L');
            $pdf -> Cell(50,7, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(50,7, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(80,7, $this->mayus($key['dependencia']),1,0,'L');
            $pdf -> Cell(20,7, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,7, $key['dias_trabajados'],1,0,'R');
            $pdf -> Cell(20,7, $key['dias_faltados'],1,0,'R');
            $pdf -> Cell(15,7, $key['dias_a_cancelar'],1,0,'R');
            $pdf -> Cell(25,7, $total_dias,1,0,'R');
            $pdf -> Cell(20,7, $this->moneda($neto),1,1,'R');
      

            @$t_neto  += $neto;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 190){
                $pdf -> AddPage();
            }

            if($y > 190){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(110);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(311,7,'TOTAL',1,0,'C');
        $pdf -> Cell(20,7, $this->moneda($t_neto),1,1,'C');




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
        exit;
	}


	public function ReportesObrerosContratados($mes = null){

		$this->loadModel('ViewMrrhhCestaTicketObreros');
		$condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 5];
        $data = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);


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

        $pdf = new PDF_CT_OBREROS_FIJOS('L','mm','LEGAL');
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(110);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');  
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',8);

	     $i = 0;
        $t_neto = 0;
        $t_total = 0;

        foreach ($data as $key) {
            if ($key['dias_trabajados'] == 0) $sueldo_base = 0  ; else $sueldo_base = (400000.00 / $key['dias_trabajados'] );
            if ($key['dias_trabajados'] == 0) $total_dias = 0; else $total_dias =  $key['dias_trabajados'] - $key['dias_faltados']; 
            if ($key['dias_trabajados'] == 0)$neto = 0; else $neto = (400000.00/30) * $total_dias; 

            if ($key['dias_trabajados'] != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(6,7, ++$i,1,0,'C');
                $pdf -> Cell(25,7, $key['cedula'],1,0,'L');
                $pdf -> Cell(50,7, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(50,7, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(80,7, $this->mayus($key['dependencia']),1,0,'L');
                $pdf -> Cell(20,7, $this->moneda(@$sueldo_base),1,0,'R');
                $pdf -> Cell(20,7, $key['dias_trabajados'],1,0,'R');
                $pdf -> Cell(20,7, $key['dias_faltados'],1,0,'R');
                $pdf -> Cell(15,7, $key['dias_a_cancelar'],1,0,'R');
                $pdf -> Cell(25,7, $total_dias,1,0,'R');
                $pdf -> Cell(20,7, $this->moneda($neto),1,1,'R');
            }else{

            }
      

            @$t_neto  += $neto;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 190){
                $pdf -> AddPage();
            }

            if($y > 190){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(110);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Correspondiente al'.' mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(160);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$desde. ANO_FISCAL.' '.'Hasta:'.' '.$Hasta. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(311,7,'TOTAL',1,0,'C');
        $pdf -> Cell(20,7, $this->moneda($t_neto),1,1,'C');

         


     /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);

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
        exit;
	}

    public function RequisicionObrerosFijos($mes = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($data['fecha_rrhh']) . '
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
    $pdf -> MultiCell(200,5,'PERSONAL OBREROS FIJOS CORRESPONDIENTES AL BONO DE ALIMENTACION DEL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);

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


    public function RequisicionObrerosContratados($mes = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($data['fecha_rrhh']) . '
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
    $pdf -> MultiCell(200,5,'PERSONAL OBREROS CONTRATADOS CORRESPONDIENTES AL BONO DE ALIMENTACION DEL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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

    public function AcumuladoObrerosFijos($mes = '', $requisicion = ''){

        
        $this->loadModel('ViewMrrhhCestaTicketObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 4];
        $data = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'NOMINA : BONO DE ALIMENTACION',0,1,'C');
 
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

        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        
        $i = 0;
        $t_neto = 0;
        $t_total = 0;

        foreach ($data as $key) {

            ++$i;

            if ($key['dias_trabajados'] == 0) $sueldo_base = 0  ; else $sueldo_base = (400000.00 / $key['dias_trabajados'] );
            if ($key['dias_trabajados'] == 0) $total_dias = 0; else $total_dias =  $key['dias_trabajados'] - $key['dias_faltados']; 
            if ($key['dias_trabajados'] == 0)$neto = 0; else $neto = (400000.00/30) * $total_dias; 


            @$t_neto  += $neto;

            @$t_total  += $neto;
        }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,6,'1001',0,0);
        $pdf -> Cell(95,6,'Otros complementos al personal obrero',0,0);
        $pdf -> Cell(22,6,'4.01.04.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,6, $this->moneda($t_neto),0,0,'R');
        $pdf -> Cell(22,6,'',0,0);
        $pdf -> Cell(22,6,'',0,1);


        $pdf -> SetX(150);
        $pdf -> Cell(10,3,'___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3, $this->moneda($t_neto),1,1,'R');
        //$pdf -> Cell(40,3,$this->moneda($var2),0,0);
        //$pdf -> Cell(40,3,$this->moneda($var3),0,1);
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Neto',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3, $this->moneda($t_neto),1,1,'R');

         $pdf -> ln();

        $pdf -> ln();
        $pdf -> SetX(110);
        $pdf -> Cell(30,3,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,3,$i,1,'R',1);

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

    public function AcumuladoObrerosContratados($mes = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhCestaTicketObreros');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'id_tipo_personal' => 5];
        $data = $this->ViewMrrhhCestaTicketObreros->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'NOMINA : BONO DE ALIMENTACION',0,1,'C');
 
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
        $t_neto = 0;
        $t_total = 0;

        foreach ($data as $key) {

            ++$i;

            if ($key['dias_trabajados'] == 0) $sueldo_base = 0  ; else $sueldo_base = (400000.00 / $key['dias_trabajados'] );
            if ($key['dias_trabajados'] == 0) $total_dias = 0; else $total_dias =  $key['dias_trabajados'] - $key['dias_faltados']; 
            if ($key['dias_trabajados'] == 0)$neto = 0; else $neto = (400000.00/30) * $total_dias; 

            @$t_neto  += $neto;
            @$t_total  += $neto;
        }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,6,'1001',0,0);
        $pdf -> Cell(95,6,'Otros complementos al personal obrero',0,0);
        $pdf -> Cell(22,6,'4.01.04.26.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,6, $this->moneda($t_neto),0,0,'R');
        $pdf -> Cell(22,6,'',0,0);
        $pdf -> Cell(22,6,'',0,1);


        $pdf -> SetX(150);
        $pdf -> Cell(10,3,'___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3,$this->moneda($t_total),1,1,'R');
        //$pdf -> Cell(40,3,$this->moneda($var2),0,0);
        //$pdf -> Cell(40,3,$this->moneda($var3),0,1);
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Neto',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3, $this->moneda($t_neto),1,1,'R');

        $pdf->ln();
        $pdf->ln();

        $pdf->SetX(110);
        $pdf -> Cell(30,3,'Total Obreros ',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(10,3,$i,1,1,'R');

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


    public function txt($tp, $mes, $requisicion){
        $this->layout='txt';

        if($tp == 4 or $tp == 5){
            $this->loadModel('ViewMrrhhCestaTicketObreros');
            $data = $this->ViewMrrhhCestaTicketObreros->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }

    public function excel($tp, $mes, $requisicion){
        
        $this->layout='ajax';

        if($tp == 4 or $tp == 5){
            $this->loadModel('ViewMrrhhCestaTicketObreros');
            $data = $this->ViewMrrhhCestaTicketObreros->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);
            $this->set('data', $data);
        }

/*
        if($tp == 4){
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $data2 = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);

        } else if($tp == 5){
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $data2 = $this->ViewMrrhhHistoricoObrerosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'requisicion' => $requisicion]);
        }*/

            
        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }
}
