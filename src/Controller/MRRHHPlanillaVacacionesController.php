<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_AsignacionesObrerosFijos extends \FPDF {
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
        $this->SetY(-15);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}

class MRRHHPlanillaVacacionesController extends AppController
{
    /*------------------------------ FIJOS ------------------------------------*/
    public function Planilla($cedula = null, $tp = null, $mes = null, $quincena = null, $requisicion = false){


        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhVacacionesObreros');
        //$condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhVacacionesObreros->find('all');
        

            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');


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

        $pdf = new PDF_AsignacionesObrerosFijos();
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
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

        $diario_sueldo = 0;
        $diario_hogar = 0;
        $diario_antiguedad_ = 0;
        $diario_profesion = 0;
        $diario_horas = 0;

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
        $deduccion_caja_ahorro = 0;


        $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        $diario_faov_a = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {

    if($key['dias'] != 0){

        $sueldo_base = $key['sueldo_base'];

        if($key['requisicion'] >1122){

           if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } else {
            if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } 

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }




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



                 $aporte_patronal_asso = (($sueldo_base / 30) * 0.09) * $dias;
                  $aporte_patronal_arpe = (($sueldo_base / 30) * 0.017) * $dias;

                  $afaov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.02) / 30) * $key['dias']; 

                  // QUITAR
                if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $afaov = 20937.28;
                if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $afaov = 8219.05;

                  if ($key['caja_ahorro'] != 0 ) 
                        $aporte_deduccion_caja = (($sueldo_base / 30) * 0.15) * $dias; 
                    else $aporte_deduccion_caja = 0;

        /*======================================================================================================*/
        }


                    $pdf -> SetFont('Arial','B',8);
                    $pdf -> SetX(20);
                    $pdf -> Cell(40,5,'NOMBRES',0,0,'L');
                    $pdf -> Cell(40,5, $key['nombres'],0,0,'J');
                    $pdf -> Cell(10,5, '',0,0,'C');
                    $pdf -> Cell(40,5,'APELLIDOS  ',0,0,'L');
                    $pdf -> Cell(40,5, $key['apellidos'],0,1,'J');

                    $pdf -> SetX(20);
                    $pdf -> Cell(40,5,'CEDULA:',0,0,'L');
                    $pdf -> Cell(40,5, $key['cedula'],0,0,'J');
                    $pdf -> Cell(10,5, '',0,0,'C');
                    $pdf -> Cell(40,5,'CARGO  ',0,0,'L');
                    $pdf -> Cell(40,5, $key['cargo'],0,1,'J');

                    $pdf -> SetX(20);
                    $pdf -> Cell(40,5,'FECHA INGRESO:  ',0,0,'L');
                    $pdf -> Cell(40,5, $this->fecha($key['fecha_ingreso_institucion']),0,0,'J');
                    $pdf -> Cell(10,5, '',0,0,'C');
                    $pdf -> Cell(40,5,'PERIODO',0,0,'L');
                    $pdf -> Cell(40,5, ANO_FISCAL,0,1,'J');

                    $pdf -> SetX(20);
                    $pdf -> Cell(40,5,'ANTIGUEDAD:  ',0,0,'L');
                    $pdf -> Cell(40,5, $key['anos_servicio']. $this->mayus('Años'),0,0,'J');
                    $pdf -> Cell(10,5, '',0,0,'C');
                    $pdf -> Cell(40,5,'DEPENDENCIA',0,0,'L');
                    $pdf -> Cell(40,5, $key['ente_adscrito'],0,1,'J');


                    $pdf->ln();

                    $pdf -> SetX(20);
                    $pdf -> Cell(170,5,'Periodo a Disfrutar:  ',1,1,'C');


                    $pdf -> SetX(20);
                    $pdf -> Cell(30,5,'Fecha Desde:  ',0,0,'L');
                    $pdf -> Cell(30,5, $this->fecha($key['fecha_desde']),0,0,'J');
                    $pdf -> Cell(30,5,'Fecha Hasta',0,0,'L');
                    $pdf -> Cell(30,5, $this->fecha($key['fecha_hasta']),0,0,'J');
                    $pdf -> Cell(30,5,'Fecha Reintegro',0,0,'L');
                    $pdf -> Cell(30,5, $this->fecha($key['fecha_reintegro']),0,1,'J');


                    $pdf->ln();

                    // Asignaciones 
                    $pdf -> SetY(100);
                    $pdf -> SetX(20);
                    $pdf->MultiCell(25,5,'Asignaciones / Conceptos:',1,'C',0);

                    $pdf -> SetY(100);
                    $pdf -> SetX(45);
                    $pdf->MultiCell(25,5,'Salario Integral Mensual:',1,'C',0);

                    $pdf -> SetY(100);
                    $pdf -> SetX(70);
                    $pdf->MultiCell(25,5,'Salario Integral Diario:',1,'C',0);


                    $pdf -> SetFont('Arial','',8);
                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Sueldo:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($sueldo_base),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_sueldo),1,1,'R');

                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Prima Hogar:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($prima_hogar),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_hogar),1,1,'R');

                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Prima Antiguedad:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($prima_antiguedad),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_antiguedad_),1,1,'R');


                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Prima Profesion:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($prima_profesion),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_profesion),1,1,'R');

                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Dias No Laborables:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($horas),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_horas),1,1,'R');


                    $diario_sueldo = ($sueldo_base / 30) * $key['dias'];
                    $diario_hogar = ($prima_hogar / 30) * $key['dias'];
                    $diario_antiguedad_ = ($prima_antiguedad / 30) * $key['dias'];
                    $diario_profesion = ($prima_profesion / 30) * $key['dias'];
                    $diario_horas = ($horas / 30) * $key['dias'];

                    $mensual = $sueldo_base + $prima_hogar + $prima_hijos + $prima_antiguedad + $horas;
                    $diario = $diario_sueldo + $diario_hogar + $diario_antiguedad_ + $diario_profesion + $diario_horas;

                    $pdf -> SetFont('Arial','B',8);
                    $pdf -> SetX(20);
                    $pdf -> Cell(25,5,'Total:',1,0,'L');
                    $pdf -> Cell(25,5,$this->moneda($mensual),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario),1,1,'R');












                    $diario_sso = ($deduccion_sso / 30) * $key['dias'];
                    $diario_rpe = ($deduccion_rpe / 30) * $key['dias'];
                    $diario_faov_ = ($faov / 30) * $key['dias'];
                    $diario_caja = ($deduccion_caja_ahorro / 30) * $key['dias'];
                    $diario_funeraria = ($funeraria / 30) * $key['dias'];
                    $diario_asosiacion = ($asociacion / 30) * $key['dias'];
                    $diario_sindicato = ($sindicato / 30) * $key['dias'];

                    $mensual_d = $deduccion_sso + $deduccion_rpe + $faov + $deduccion_caja_ahorro + $funeraria + $asociacion + $sindicato;
                    $diario_d = $diario_sso + $diario_rpe + $diario_faov_ + $diario_caja + $diario_funeraria  + $diario_asosiacion + $diario_asosiacion + $diario_sindicato;







                    // Deducciones 
                    $pdf -> SetY(100);
                    $pdf -> SetX(110);
                    $pdf->MultiCell(25,10,'Deducciones:',1,'C',0);

                    $pdf -> SetY(100);
                    $pdf -> SetX(135);
                    $pdf->MultiCell(25,5,'Dias Fuera de Nomina:',1,'C',0);

                    $pdf -> SetY(100);
                    $pdf -> SetX(160);
                    $pdf->MultiCell(25,10,'Monto:',1,'C',0);


                    $pdf -> SetFont('Arial','',8);
                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'S.S.O:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_sso),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Sindicato:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_rpe),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Paro Forzozo:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_faov_),1,1,'R');


                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Serv. Funerario:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_caja),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Caja de Ahorro:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_funeraria),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'ACOFJAM:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_asosiacion),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'ACOFJAM:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_sindicato),1,1,'R');


                    

                    $pdf -> SetFont('Arial','B',8);
                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Total:',1,0,'L');
                    $pdf -> Cell(25,5,'',1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_d),1,1,'R');











                    $diario_sso_a = ($aporte_patronal_asso / 30) * $key['dias'];
                    $diario_rpe_a = ($aporte_patronal_arpe / 30) * $key['dias'];
                    $diario_faov_a_ = ($afaov / 30) * $key['dias'];
                    $diario_caja_a = ($aporte_deduccion_caja / 30) * $key['dias'];

                    $mensual_a = $aporte_patronal_asso + $aporte_patronal_arpe + $faov + $afaov + $aporte_deduccion_caja;
                    $diario_a = $diario_sso_a + $diario_rpe_a + $diario_faov_a_ + $diario_caja_a;





                    // Aportes 
                    $pdf -> SetY(160);
                    $pdf -> SetX(110);
                    $pdf->MultiCell(25,5,'Aportes Patronales:',1,'C',0);

                    $pdf -> SetY(160);
                    $pdf -> SetX(135);
                    $pdf->MultiCell(25,5,'Dias Fuera de Nomina:',1,'C',0);

                    $pdf -> SetY(160);
                    $pdf -> SetX(160);
                    $pdf->MultiCell(25,10,'Monto:',1,'C',0);


                    $pdf -> SetFont('Arial','',8);
                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'S.S.O A:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_sso_a),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'R.P.E P:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_rpe_a),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Paro Forzozo P:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_faov_a),1,1,'R');

                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Caja de Ahorro P:',1,0,'L');
                    $pdf -> Cell(25,5,$this->mayus($key['dias']),1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_faov_a),1,1,'R');




                    $pdf -> SetFont('Arial','B',8);
                    $pdf -> SetX(110);
                    $pdf -> Cell(25,5,'Total:',1,0,'L');
                    $pdf -> Cell(25,5,'',1,0,'R');
                    $pdf -> Cell(25,5,$this->moneda($diario_a),1,1,'R');



                    // OTROS CONCEPTOS 
                    $pdf -> SetY(150);
                    $pdf -> SetX(20);
                    $pdf -> Cell(35,5,'Becas',1,0,'L');
                    $pdf->Cell(25,5,$this->moneda($becas),1,'R',0);

                    $pdf -> SetY(155);
                    $pdf -> SetX(20);
                    $pdf -> Cell(35,5,'Bono de Estabilidad',1,0,'L');
                    $pdf->Cell(25,5,$this->moneda($bono_estabilidad),1,1,'R');

                    $pdf -> SetY(165);
                    $pdf -> SetX(20);
                    $pdf -> Cell(35,5,'Total Asignaciones',1,0,'L');
                    $pdf->Cell(25,5,$this->moneda($asignacion),1,1,'R');

                    $pdf-> ln();

                    $pdf -> SetY(175);
                    $pdf -> SetX(20);
                    $pdf->MultiCell(45,5,' Disfrute de Vacaciones Art. 190 y 192 L.O.T (2019-2020):',1,'C',0);

                    $pdf-> ln();

                    $pdf -> SetY(195);
                    $pdf -> SetX(20);
                    $pdf -> Cell(35,5,'Dias de Disfrute',1,0,'L');
                    $pdf->Cell(25,5,$this->mayus($key['cantidad_dias']),1,1,'R');


                    $pdf-> ln();

                    $pdf -> SetY(175);
                    $pdf -> SetX(20);
                    $pdf->MultiCell(45,5,'Bono Vacacional Art. 36 C.C.O.M (2019-2020):',1,'C',0);

                    $pdf-> ln();

                    $pdf -> SetY(195);
                    $pdf -> SetX(20);
                    $pdf -> Cell(35,5,'90 Dias de Vacaciones',1,0,'L');
                    $pdf->Cell(25,5,$this->mayus($key['cantidad_dias']),1,1,'R');



        $pdf -> ln();

       $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






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
}
