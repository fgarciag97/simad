<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_ResumenNominaEmpleadosFijos extends \FPDF {
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


class MRRHHNominaReciboController extends AppController
{
   // ===================================================== RECIBOS DE PAGO

    public function ReciboEmpleadosFijos($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        // ============================================= SUELDO BASE 
        if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = $data['monto_becas'] * $data['cantidad_beca_inicial']; else $inicial = 0;
        if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = $data['monto_becas'] * $data['cantidad_beca_primaria']; else $primaria = 0;
        if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = $data['monto_becas'] * $data['cantidad_beca_secundaria']; else $secundaria = 0;
        if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = $data['monto_becas'] * $data['cantidad_beca_universitaria']; else $universitaria = 0;
        if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = $data['monto_becas'] * $data['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($data['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $data['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
            if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;
            if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = $data['prima_hijos'] ; else $prima_hijos = 0;
            if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = $data['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($data['ajuste_sueldo'] != 0) $ajuste_sueldo = $data['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($data['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($data['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $data['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($data['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $data['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($data['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

                 
                /*======================================================================================================*/
                /*====================================== TOTAL ASIGNACIONES ============================================*/
                    if($data['status'] !=0) $asignacion = 
                        $sueldo + 
                        $profesion + 
                        $antiguedad + 
                        $prima_hogar + 
                        $hijos + 
                        $becas;
                    else $asignacion = 0;

                    $asignaciones += $asignacion;

                
            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($data['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($data['status'] !=0) $deduccion_sso = $data['deduccion_sso'] / 2; else $deduccion_sso = 0;
            if($data['status'] !=0) $deduccion_rpe = $data['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
            if($data['status'] !=0) $deduccion_fpj = $data['deduccion_fpj'] / 2; else $deduccion_fpj = 0;
            if($data['funeraria'] != 0 AND $data['status'] !=0) $funeraria = $data['monto_funeraria']; else $funeraria = 0;
            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            //if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($data['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = $data['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = $data['monto_sindicato']*0.01; else $sindicato = 0;
            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) $depositario_porcentaje = ($data['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($data['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $data['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($data['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $data['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($data['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $data['dias_dejados_c']); else $faov_dc = $faov;
            if($data['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $data['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;


                    if($data['status'] !=0) $deduccion = 
                        $sso + 
                        $rpe + 
                        $fpj + 
                        $faov_dc + 
                        $deduccion_caja + 
                        $funeraria + 
                        $sindicato + 
                        $asociacion +
                        $prestamo_caja;
                     else $deduccion = 0;

                     $deducciones += $deduccion;

            /*=====================================================================================================================================*/

            if($data['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================================================*/
        

             $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $cedula,1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
           $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base/2),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($data['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }

            if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }

            if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov * 2),0,1,'R');
            }

            if ($deduccion_fpj != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Fondo de Jubilacion y Pension',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_fpj),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $fpj_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.'Fondo de Pension dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }

            if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }

            if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(100);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }

    public function ReciboEmpleadosContratados($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        // ============================================= SUELDO BASE 
        if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = $data['monto_becas'] * $data['cantidad_beca_inicial']; else $inicial = 0;
        if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = $data['monto_becas'] * $data['cantidad_beca_primaria']; else $primaria = 0;
        if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = $data['monto_becas'] * $data['cantidad_beca_secundaria']; else $secundaria = 0;
        if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = $data['monto_becas'] * $data['cantidad_beca_universitaria']; else $universitaria = 0;
        if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = $data['monto_becas'] * $data['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($data['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $data['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
            if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;
            if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = $data['prima_hijos'] ; else $prima_hijos = 0;
            if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = $data['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($data['ajuste_sueldo'] != 0) $ajuste_sueldo = $data['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($data['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($data['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $data['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($data['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $data['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($data['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($data['status'] !=0) $asignaciones = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $asignaciones = 0;


        /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($data['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($data['status'] !=0) $deduccion_sso = $data['deduccion_sso']; else $deduccion_sso = 0;
            if($data['status'] !=0) $deduccion_rpe = $data['deduccion_rpe']; else $deduccion_rpe = 0;

            //no funciona
            //if($data['funeraria'] != 0 AND $data['status'] !=0) $funeraria = $data['monto_funeraria']; else $funeraria = 0;

                    if($data['requisicion'] > 910){

                        if($data['funeraria'] != 0 AND $data['status'] !=0) 
                            $funeraria = 40000/2; 
                        else $funeraria = 0;
                    } else {
                        if($data['funeraria'] != 0 AND $data['status'] !=0) 
                            $funeraria = 20000/2; 
                        else $funeraria = 0;
                    }


            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            //if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($data['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = $data['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = $data['monto_sindicato']*0.01; else $sindicato = 0;
            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) $depositario_porcentaje = ($data['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($data['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $data['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($data['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $data['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($data['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $data['dias_dejados_c']); else $faov_dc = $faov;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($data['status'] !=0) $deducciones = 
                        $sso + 
                        $rpe + 
                        $faov + 
                        $funeraria + 
                        $prestamo_caja;
                     else $deducciones = 0;

            /*=====================================================================================================================================*/

            if($data['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================================================*/
        

             $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $cedula,1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
           $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($data['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }

            if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }

            if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov * 2),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $fpj_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.'Fondo de Pension dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }

            if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }

            if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(100);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }



   public function ReciboEmpleadosDirectivos($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        // ============================================= SUELDO BASE 
        if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = $data['monto_becas'] * $data['cantidad_beca_inicial']; else $inicial = 0;
        if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = $data['monto_becas'] * $data['cantidad_beca_primaria']; else $primaria = 0;
        if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = $data['monto_becas'] * $data['cantidad_beca_secundaria']; else $secundaria = 0;
        if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = $data['monto_becas'] * $data['cantidad_beca_universitaria']; else $universitaria = 0;
        if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = $data['monto_becas'] * $data['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($data['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $data['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
            if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;
            if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = $data['prima_hijos'] ; else $prima_hijos = 0;
            if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = $data['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($data['ajuste_sueldo'] != 0) $ajuste_sueldo = $data['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($data['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($data['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $data['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($data['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $data['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($data['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($data['status'] !=0) $asignaciones = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $asignaciones = 0;


        /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($data['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($data['status'] !=0) $deduccion_sso = $data['deduccion_sso']; else $deduccion_sso = 0;
            if($data['status'] !=0) $deduccion_rpe = $data['deduccion_rpe']; else $deduccion_rpe = 0;

            //no funciona
            //if($data['funeraria'] != 0 AND $data['status'] !=0) $funeraria = $data['monto_funeraria']; else $funeraria = 0;

                    if($data['requisicion'] > 910){

                        if($data['funeraria'] != 0 AND $data['status'] !=0) 
                            $funeraria = 40000/2; 
                        else $funeraria = 0;
                    } else {
                        if($data['funeraria'] != 0 AND $data['status'] !=0) 
                            $funeraria = 20000/2; 
                        else $funeraria = 0;
                    }


            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            //if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($data['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0)$prestamo_caja = $data['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = $data['monto_sindicato']*0.01; else $sindicato = 0;
            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) $depositario_porcentaje = ($data['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($data['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $data['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($data['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $data['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($data['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $data['dias_dejados_c']); else $faov_dc = $faov;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($data['status'] !=0) $deducciones = 
                        $sso + 
                        $rpe + 
                        $faov + 
                        $funeraria + 
                        $prestamo_caja;
                     else $deducciones = 0;

            /*=====================================================================================================================================*/

            if($data['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================================================*/
        

             $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $cedula,1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
           $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($data['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }

            if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }

            if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov * 2),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $fpj_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.'Fondo de Pension dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }

            if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }

            if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(100);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }




     public function ReciboObrerosFijos($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;

        //En caso que existan "DIAS A CANCELAR"
        if($data['ajuste_caja'] != 0) $sueldo_base = (($data['sueldo_base'] / 15) * $data['ajuste_caja']) /2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($data['requisicion'] > 1122){

            if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (100000 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (100000 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (100000 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (100000 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (100000 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0; 

        } else {

            if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (62500 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (62500 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (62500 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (62500 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (62500 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0;
        }
         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/
        
        if($data['requisicion'] > 1122){
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

        if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
        if($data['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $data['ajuste_caja']);

        if($data['status'] != 0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0; 
        if($data['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $data['ajuste_caja']); 

        if($data['ajuste_caja'] !=0 AND $becas != 0) $becas = ((($becas) / 15) * $data['ajuste_caja']); 

        //Cuando existen dias dejados de Cancelar
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $data['dias_dejados_c'])); // + sueldo
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $data['dias_dejados_c'])); // + prima_profesion
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $data['dias_dejados_c'])); // + prima_antiguedad
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $data['dias_dejados_c'])); // + prima_hogar
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $data['dias_dejados_c'])); // + prima_hijos


         // Ajuste Monto sumados al total asignaciones =======================================================
         if($data['status'] != 0) $ajuste_antiguedad = $data['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
         if($data['status'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($data['status'] != 0) $ajuste_p_hijos = $data['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($data['status'] != 0) $ajuste_p_hogar = $data['ajuste_p_hogar']; else $ajuste_p_hogar = 0;
         if($data['status'] != 0) $ajuste_sueldo = $data['ajuste_sueldo']; else $ajuste_sueldo = 0;

         //Ajuste de sueldo se suma a sueldo base 
         if($data['status'] != 0) $sueldo_base =  $sueldo_base + $ajuste_sueldo; else $ajuste_sueldo = 0;
         if($data['status'] != 0) $prima_profesion =  $prima_profesion + $ajuste_p_profesion; else $prima_profesion = 0;
         if($data['status'] != 0) $prima_antiguedad =  $prima_antiguedad + $ajuste_antiguedad; else $prima_antiguedad = 0;
         if($data['status'] != 0) $prima_hogar =  $prima_hogar + $ajuste_p_hogar; else $prima_hogar = 0;
         if($data['status'] != 0) $prima_hijos =  $prima_hijos + $ajuste_p_hijos; else $prima_hijos = 0;
            

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($data['status'] !=0) $asignaciones = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas; 
        else $asignaciones  = 0;

        /*======================================================================================================*/

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            if($data['status'] !=0) 
                $sueldo_base = $data['sueldo_base']; 
            else $sueldo_base = 0;

            if($data['ajuste_caja'] != 0) $sueldo_base = (($data['sueldo_base'] / 30) * $data['ajuste_caja']) /2;

            if($data['requisicion'] > 1122){
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($data['status'] !=0) 
                $deduccion_sso = $data['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($data['status'] !=0) 
                $deduccion_rpe = $data['deduccion_rpe']; 
            else $deduccion_rpe = 0;
    
            if($data['ajuste_caja'] != 0){
                    if($data['status'] !=0) 
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
                    else $faov = 0;
            }else{
            if($data['status'] != 0) $faov = ((($data['sueldo_base'] / 2) + $data['prima_profesion'] + $prima_hijos + $data['prima_antiguedad'] + $prima_hogar) * 0.01); else $faov = 0;

            }

            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($data['sindicato'] != 0 AND $data['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) 
                $deduccion_caja = $data['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $data['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($data['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) 
                $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


             //Cuando existen dias dejados de Cancelar
             if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_sso = ($deduccion_sso + ((($deduccion_sso * 2) / 30) * $data['dias_dejados_c'])); // + deduccion_sso
             if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_rpe = ($deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $data['dias_dejados_c'])); // + deduccion_rpe
             if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $faov = ($faov + ((($faov * 2) / 30) * $data['dias_dejados_c'])); // + faov
             //if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $data['dias_dejados_c'])); // + deduccion_caja

            
            if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $deduccion_sso = ((($deduccion_sso) / 15) * $data['ajuste_caja']);
            if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $deduccion_rpe = ((($deduccion_rpe) / 15) * $data['ajuste_caja']);

            //if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $faov = ($faov * $data['ajuste_caja']) / 15;

            if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $deduccion_caja = ((($deduccion_caja) / 15) * $data['ajuste_caja']);
            if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $funeraria = ((($funeraria) / 15) * $data['ajuste_caja']);
            if($data['status'] != 0 AND $data['ajuste_caja'] != 0) $sindicato = ((($sindicato) / 15) * $data['ajuste_caja']);



            if($data['status'] !=0) $deducciones = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;

            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            if($data['status'] !=0) $neto = 
                $asignaciones - 
                $deducciones; 
            else $neto = 0;
        

             $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $cedula,1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
           $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($data['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }

            if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }

            if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov * 2),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'R');
            }

            if ($data['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ( $data['dias_dejados_c'] != 0 AND $fpj_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.'Fondo de Pension dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'R');
            }

            if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }

            if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }

            if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(100);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(100);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }


    public function ReciboObrerosContratados($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;

        if($data['ajuste_sueldo'] != 0) $sueldo_base = $data['ajuste_sueldo']; else $sueldo_base = $data['sueldo_base'] / 2;
           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($data['requisicion'] > 1122){

            if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (100000 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (100000 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (100000 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (100000 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (100000 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0; 

        } else {

            if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (62500 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (62500 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (62500 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (62500 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (62500 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0;
        }
         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/

        if($data['requisicion'] > 1122){
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }


        if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
        if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;


        /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $data['dias_dejados_c'])); // + sueldo
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $data['dias_dejados_c'])); // + prima_profesion
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $data['dias_dejados_c'])); // + prima_antiguedad
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $data['dias_dejados_c'])); // + prima_hogar
         if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $data['dias_dejados_c'])); // + prima_hijos


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/


        if($data['status'] !=0) $asignaciones = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas;
        else $asignaciones = 0;

        /*======================================================================================================*/
        
        if ($data['status'] != 0 AND $data['dias_dejados_cancelar'] != 0) {

            if($data['requisicion'] > 1122){
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
            if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;
            if($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;
        }


            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo_base;
            @$t_becas += $becas;
            @$t_prima_hijos  += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_hogar  += $prima_hogar;
            @$t_total  += $total;

            /*======================================================================================================*/
            /*====================================== DECUCCIONES  ===============================================*/
            
             if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }


            if($data['ajuste_p_hogar'] != 0) $funeraria = $funeraria + $data['ajuste_p_hogar'];

            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) 
                $deduccion_caja = $data['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $data['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($data['requisicion'] > 1122){
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }


            if($data['status'] !=0) 
                $faov = ((($data['sueldo_base'] / 2) + $data['prima_profesion'] + $prima_hijos + $data['prima_antiguedad']) * 0.01); 
            else $faov = 0;

            if($data['status'] !=0) 
                $deduccion_sso = $data['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($data['status'] !=0) 
                $deduccion_rpe = $data['deduccion_rpe']; 
            else $deduccion_rpe = 0;

            if($data['status'] !=0) 
                $deduccion_fpj = $data['deduccion_fpj']; 
            else $deduccion_fpj = 0;

            if($data['sindicato'] != 0 AND $data['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;

            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($data['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) 
                $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;


            if($data['status'] !=0) 
                $sueldo_base = $data['sueldo_base']; 
            else $sueldo_base = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_sso = ( $deduccion_sso + ((($deduccion_sso * 2) / 30) * $data['dias_dejados_c'])); // + sueldo
                 if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_rpe = ( $deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $data['dias_dejados_c'])); // + prima_profesion
                 if($data['status'] != 0 AND $data['dias_dejados_c'] != 0) $deduccion_fpj = ( $deduccion_fpj + ((($deduccion_fpj * 2) / 30) * $data['dias_dejados_c'])); // + prima_antiguedad

            if($data['status'] !=0) $deducciones = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;

                        $t_asignacion += $asignaciones;
                        $t_deduccion += $deducciones;
                        


                        $t_neto = $t_asignacion - $t_deduccion;


            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            if($data['status'] !=0) $neto = 
                $asignaciones - 
                $deducciones; 
            else $neto = 0;
        

             $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $cedula,1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
           $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            if ($data['ajuste_sueldo'] != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($data['ajuste_sueldo']),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }else {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_base /2),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }


            if ($sueldo_base_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal Dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_base_d),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_profesion_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion dejados de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion_d),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_antiguedad_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad Dejada de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad_d),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empleo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'R');
            }if ($deduccion_fpj != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Fondo de Jubilacion y Pension',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_fpj),0,1,'R');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'R');
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


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(80);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(80);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(80);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }



    public function ReciboObrerosNoPermanentes($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
        if($data['dias_dejados_c'] != 0){
                if($data['status'] != 0)$sueldo_base = (($data['dias_dejados_c'] * 400000) / 30); else $sueldo_base = 0;
            }else{
                $sueldo_base = $data['sueldo_base']/2;
            }

            $t_asignacion += $sueldo_base;
            $t_deduccion = 0;
           

            $asignaciones = $sueldo_base;
            $deducciones = 0;
            $neto = $asignaciones - $deducciones;

            $t_neto = $t_asignacion - $t_deduccion;
        

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base * 2),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            $pdf-> ln();


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }


    public function ReciboJubiladosEmpleados($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

    
           //ASIGNACIONES 

            if ($data['sueldo'] !=0) {

                if($data['status'] !=0) $sueldo_mensual = $data['sueldo'] ; else $sueldo_mensual = 0;
                if($data['status'] !=0) $sueldo_base = $data['sueldo']/2 ; else $sueldo_base = 0;
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;
                if($data['status'] !=0) $prima_antiguedad = $data['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($data['status'] !=0 AND $data['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

                if($data['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $data['dias_dejados_c']; else $dias_a_pagar = 0;

                if($data['dias_dejados_c']) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $data['dias_dejados_c']); else $prima_profesion_dc = 0;

                if($data['ajuste_p_profesion']) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

                if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;

             }else{
                if($data['status'] !=0) $sueldo_mensual = $data['sueldo_base'] ; else $sueldo_mensual = 0;
                if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2 ; else $sueldo_base = 0;
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
                if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;

                if($data['status'] !=0 AND $data['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

                if($data['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $data['dias_dejados_c']; else $dias_a_pagar = 0;

                if($data['dias_dejados_c']) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $data['dias_dejados_c']); else $prima_profesion_dc = 0;

                if($data['ajuste_p_profesion']) $ajuste_p_profesion = $data['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

                if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;
             }

                $t_asignacion += $asignaciones;

              //DEDUCCIONES 


       if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($data['sueldo'] != 0){
                 if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) 
                    $deduccion_caja = $data['x_deduccion_caja_ahorro']; 
                 else $deduccion_caja = 0;
            }else{
                if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) 
                    $deduccion_caja = $data['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;
            }

            $prestamo = (double)$data['prestamo_caja_ahorro'];

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != '') 
                $prestamo_caja = $prestamo; 
            else $prestamo_caja = 0;

            if($data['mes'] == 2 AND $data['quincena'] == 1){
                if($data['cedula'] == 11804964) $deduccion_caja = 98992.50;
                if($data['cedula'] == 14396765) $deduccion_caja = 72846.00;
            }

            if($data['hijos'] != 0 AND $data['status'] !=0) 
                $prima_hijos = ( 62500 * $data['hijos']) / 2; 
            else $prima_hijos = 0;

            if($data['prima_hogar'] != 0 AND $data['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($data['status'] !=0) 
                $faov = ((($data['sueldo_base'] / 2) + $data['prima_profesion'] + $prima_hijos + $data['prima_antiguedad'] + $prima_hogar) * 0.01); 
            else $faov = 0;

            if($data['status'] !=0) 
                $deduccion_sso = $data['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($data['status'] !=0) 
                $deduccion_rpe = $data['deduccion_rpe']; 
            else $deduccion_rpe = 0;

            if($data['status'] !=0) 
                $deduccion_fpj = $data['deduccion_fpj']; 
            else $deduccion_fpj = 0;

            if($data['sindicato'] != 0 AND $data['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;

            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($data['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) 
                $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;


            if($data['status'] !=0) 
                $sueldo_base = $data['sueldo_base']; 
            else $sueldo_base = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($data['status'] !=0) $deducciones = 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;


             $t_deduccion += $deducciones;

             if($data['status'] != 0) $neto = $asignaciones - $deducciones; else $neto = 0;

            $y = $pdf-> GetY();
            $pdf -> SetY($y+5.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'R');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'R');
            if ($data['sueldo'] != 0) {
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'R');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'R');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            if($data['sueldo'] != 0){
                $sueldo = $data['sueldo'] / 2;
            }else{
                $sueldo = $data['sueldo_base'] / 2;
            }

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($dias_dejados_c != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Dias dejados de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($dias_dejados_c),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($profesion_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Profesionalizacion dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($profesion_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.'Ajuste Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
                
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }


    public function ReciboJubiladosObreros($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

    
           if ($data['status'] !=0) $sueldo_base = $data['sueldo_base'] / 2; else $sueldo_base = 0;

            if ($data['sueldo'] !=0) {

                if($data['status'] !=0) $sueldo_mensual = $data['sueldo'] ; else $sueldo_mensual = 0;

                if($data['status'] !=0) $sueldo_base = $data['sueldo']/2 ; else $sueldo_base = 0;
                if($data['requisicion'] > 1122){

                    if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (100000 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (100000 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (100000 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (100000 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (100000 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                } else {

                    if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (62500 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (62500 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (62500 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (62500 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (62500 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0;
                }

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                 if($data['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $data['dias_dejados_c']; else $dias_dejados_c = 0;


                /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($data['requisicion'] > 1122){
                    if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                    if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                } else {
                    if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                    if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                }


                if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;
                if($data['status'] !=0) $prima_antiguedad = $data['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;

             }else{
                if($data['status'] !=0) $sueldo_mensual = $data['sueldo_base'] ; else $sueldo_mensual = 0;
                if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2 ; else $sueldo_base = 0;

                    if($data['requisicion'] > 1122){

                        if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (100000 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (100000 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (100000 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (100000 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (100000 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                    } else {

                        if($data['cantidad_beca_discapacidad'] !=0 AND $data['status'] !=0) $discapacidad = (62500 * $data['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($data['cantidad_beca_universitaria'] !=0 AND $data['status'] !=0) $universitaria = (62500 * $data['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($data['cantidad_beca_secundaria'] !=0 AND $data['status'] !=0) $secundaria = (62500 * $data['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($data['cantidad_beca_primaria'] !=0 AND $data['status'] !=0) $primaria = (62500 * $data['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($data['cantidad_beca_inicial'] !=0 AND $data['status'] !=0) $inicial = (62500 * $data['cantidad_beca_inicial']) / 2; else $inicial = 0;
                    }

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                     if($data['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $data['dias_dejados_c']; else $dias_dejados_c = 0;
                    /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($data['requisicion'] > 1122){
                        if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 100000 * $data['hijos']) / 2; else $prima_hijos = 0;
                        if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                    } else {
                        if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                        if($data['prima_hogar'] != 0 AND $data['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                    }


                if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
                if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;

                if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;
             }

           $t_asignacion += $asignaciones;

            /*======================================================================================================*/
                                                        //DEDUCCIONES //
            /*======================================================================================================*/     
             // DEDUCIONES 

             if ($data['sueldo'] !=0) {

            if($data['status'] !=0) $sueldo_mensual = $data['sueldo'] ; else $sueldo_mensual = 0;
            if($data['funeraria'] != 0 AND $data['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($data['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $data['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($data['status'] !=0 AND $data['caja_ahorro'] !=0) $porcentaje_caja = $data['porcentaje_caja']; else $porcentaje_caja = 0;
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = (400000*0.01) /2 ; else $sindicato = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($data['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;


         }else{

            if($data['status'] !=0) $sueldo_mensual = $data['sueldo_base'] ; else $sueldo_mensual = 0;

             if($data['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($data['funeraria'] != 0 AND $data['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
            if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $data['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($data['status'] !=0 AND $data['caja_ahorro'] !=0) $porcentaje_caja = $data['porcentaje_caja']; else $porcentaje_caja = 0;
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($data['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;
         }

           $t_deduccion += $deducciones;

            /*======================================================================================================*/
                                                        //NETO //
            /*======================================================================================================*/

            $neto = $asignaciones - $deducciones;
            $t_neto += $neto;



             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

           $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'R');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'R');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'R');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'R');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base / 2),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
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
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2010'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }

     public function ReciboPensionadosEmpleados($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

    
           if ($data['sueldo'] != 0) {

             if($data['status'] !=0) $sueldo_base = $data['sueldo']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;

          
            if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
             if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($data['status'] !=0 AND $data['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($data['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) 
                $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $data['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;
            
            if($data['status'] !=0) $decucciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $decucciones;

            /*==================================================================================================*/

        }else{

             if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;

          
            if($data['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if($data['sindicato'] != 0 AND $data['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($data['asociacion_funeraria'] != 0 AND $data['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($data['status'] !=0 AND $data['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($data['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($data['status'] !=0 AND $data['depositario_judicial_monto'] !=0) 
                $depositario = ($data['sueldo_base'] * $data['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            
            if($data['status'] !=0 AND $data['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $data['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;
            
            if($data['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
        }

        $t_asignacion += $asignaciones;
        $t_deduccion += $deducciones;
        $t_neto = $t_asignacion - $t_deduccion;

            $y = $pdf-> GetY();
            $pdf -> SetY($y+5.8);

            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            if ($data['sueldo'] != 0) {
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'R');
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


             //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }


    public function ReciboPensionadosEmpleadosSobrevivientes($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 10;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEPSobre');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

    
           //======================================== ASIGNACIONES ================================================
            if ($data['sueldo'] !=0) {
                 if($data['sueldo'] !=0 AND $data['status'] !=0) $sueldo_base = $data['sueldo']/2; else $sueldo_base =0;
                 if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;
                 if($data['status'] !=0) $prima_antiguedad = $data['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                 if($data['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
                
    
            }else{
                if($data['status'] !=0 AND $data['sueldo_base'] != 0) $sueldo_base = $data['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;
                if($data['status'] !=0) $prima_antiguedad = $data['prima_antiguedad']; else $prima_antiguedad = 0;
                if($data['hijos'] != 0 AND $data['status'] !=0) $prima_hijos = ( 62500 * $data['hijos']) / 2; else $prima_hijos = 0;
                if($data['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            }


            //======================================== DEDUCCIONES  ================================================

            if($data['status'] !=0) $deducciones = 0;
            else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
                        
            $t_neto = $t_asignacion - $t_deduccion;
        


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/

            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            if ($data['sueldo'] != 0) {
                $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($data['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');
            //===============================================================================================

            $pdf-> ln();

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }



    public function ReciboPensionadosEmpleadosEspeciales($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_asignaciones = 0;
        $t_deducciones = 0;
        $t_neto = 0;

    
           if ($data['sueldo'] != 0) {

             if($data['status'] !=0) $sueldo_base = $data['sueldo']/2; else $sueldo_base = 0;

            if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($data['status'] !=0) $deducciones =  $funeraria; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

        }else{

            if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;

          
            if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($data['status'] !=0) $deducciones =  $funeraria; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
            $t_asignaciones += $asignaciones;
            $t_deducciones += $deducciones ;
        }


        $neto = $asignaciones - $deducciones;
        $t_neto = $t_asignaciones - $t_deducciones;


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }


            $pdf-> ln();

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }


    public function ReciboPensionadosObrerosSobrevivientes($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 12;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOPSobre');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetX(50);
        $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_asignaciones = 0;
        $t_deducciones = 0;
        $t_neto = 0;

    
           if ($data['sueldo'] != 0) {

             if($data['status'] !=0) $sueldo_base = $data['sueldo']/2; else $sueldo_base = 0;

            if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($data['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

        }else{

             if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;

          
            if($data['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($data['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
            $t_asignaciones += $asignaciones;
            $t_deducciones += $deducciones ;
        }


            $neto = $asignaciones - $deducciones;
            $t_neto = $t_asignaciones - $t_deducciones;


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }


            $pdf-> ln();

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }

     public function ReciboPensionadosObrerosEspeciales($cedula = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['cedula' => $cedula, 'requisicion' => $requisicion];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
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

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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
        $ajuste_sueldo = 0;
        $ajuste_p_profesion = 0;
        $ajuste_p_hijos = 0;
        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;
        $dias_dejados_c = 0;
        $profesion_dc = 0;

         $pdf -> SetFont('Arial','',8);
        
        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
                

        $sueldo_base = 0;
        $asignaciones = 0;
        $deducciones = 0;
        $ajuste_p_antiguedad = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_asignaciones = 0;
        $t_deducciones = 0;
        $t_neto = 0;

    
           if ($data['sueldo'] != 0) {

             if($data['status'] !=0) $sueldo_base = $data['sueldo']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['x_prima_profesion']; else $prima_profesion = 0;

            if($data['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $data['dias_dejados_c']); else $sueldo_dc = 0;

          
            if($data['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $sueldo_dc; else $asignacion = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($data['sindicato'] != 0 AND $data['status'] !=0) 
                 $sindicato = (400000*0.01) / 2;
            else $sindicato = 0;
            
            if($data['status'] !=0) $deduccion = $funeraria + $sindicato; else $deduccion = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignacion - $deduccion;

            /*==================================================================================================*/

        }else{

             if($data['status'] !=0) $sueldo_base = $data['sueldo_base']/2; else $sueldo_base = 0;
            if($data['status'] !=0) $prima_profesion = $data['prima_profesion']; else $prima_profesion = 0;

            if($data['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $data['dias_dejados_c']); else $sueldo_dc = 0;

          
            if($data['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $sueldo_dc; else $asignacion = 0;
            
            /*==================================================================================================*/

            if($data['requisicion'] > 910){

                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($data['funeraria'] != 0 AND $data['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($data['caja_ahorro'] != 0 AND $data['status'] !=0) $deduccion_caja = $data['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($data['sindicato'] != 0 AND $data['status'] !=0) 
                $sindicato = (400000*0.01) / 2;
            else $sindicato = 0;
            
            if($data['status'] !=0) $deduccion = $funeraria + $sindicato; else $deduccion = 0;

            /*==================================================================================================*/

            if($data['status'] !=0)@$neto = $asignacion - $deduccion;

            /*==================================================================================================*/

           
        }

            

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/

            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $data['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($data['apellidos']) . " " . $this->mayus($data['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($data['grupo'].' - '.$data['denominacion_grado_nivel']),1,0,'L');
            if ($data['sueldo'] != 0) {
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($data['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($data['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($data['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');
            if($sueldo_dc != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Sueldo dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
                            }
            if($funeraria != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(40,3, $this->moneda($funeraria),0,1,'R');
            }if($sindicato != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Sindicato',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(40,3, $this->moneda($sindicato),0,1,'R');
            }
            //===============================================================================================

            $asignaciones = $sueldo_base + $sueldo_dc;
            $deducciones = $funeraria + $sindicato;
            $neto = $asignaciones - $deducciones;


            $pdf-> ln();

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');


            //===============================================================================================

                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(70);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(70);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

    $pdf -> SetX(5);
    $pdf -> Cell(160,7,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1,'C');

        $pdf -> Output();
    }
}
