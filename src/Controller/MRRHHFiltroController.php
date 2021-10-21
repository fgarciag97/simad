<?php
namespace App\Controller;

use App\Controller\AppController;


class MRRHHFiltroController extends AppController
{
	public function index(){
		$this->viewBuilder()->setLayout('rrhh');

		//========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

		//========================================================
        //Carga del Select de TIPO PERSONAL
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tp = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tp as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tp', $options);

        //========================================================
        //Carga del Select de EnteAdscrito
        //========================================================
        $this->loadModel('EnteAdscrito');

        $dependencias = $this->EnteAdscrito->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($dependencias as $key) 
        {
            $options[$key->denominacion] = strtoupper($key->denominacion);
        }
        $this->set('dependencias', $options);

        //========================================================
        //Carga del Select de AÑO
        //========================================================
        $this->loadModel('AnoFiscal');

        $ano = $this->AnoFiscal->find('all')->where(['ano_fiscal <>' => '9999'])->distinct(['ano_fiscal'])->toArray();
        $options = [];
        foreach ($ano as $key) 
        {
            $options[$key->ano_fiscal] = strtoupper($key->ano_fiscal);
        }
        $this->set('anos', $options);

        //========================================================
        //Carga del Select de MES
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('meses', $options);

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
        $this->set('quincenas', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('OrdenamientoTipoCalculo');

        $condicion = ['tipo' => 'DEDUCCION'];
        $tc = $this->OrdenamientoTipoCalculo->find('all')->where($condicion)->toArray();
        $options = [];
        foreach ($tc as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tc', $options);

        //============================================================

        if($this->request->is('post')){
            
            if(@$this->request->data['tipo_personal'] == 1){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
                $query = $this->ViewMrrhhHistoricoEmpleadosFijos->find();
                $personal = 'EMPLEADOS FIJOS'; 
            }else if(@$this->request->data['tipo_personal'] == 2){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
                $query = $this->ViewMrrhhHistoricoEmpleadosC->find();
                $personal = 'EMPLEADOS CONTRATADOS'; 
            }else if(@$this->request->data['tipo_personal'] == 3){
                $this->loadModel('ViewMrrhhHistoricoDirectivos');
                $query = $this->ViewMrrhhHistoricoDirectivos->find();
                $personal = 'PERSONAL DIRECTIVO'; 
            }else if(@$this->request->data['tipo_personal'] == 4){
                $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
                $query = $this->ViewMrrhhHistoricoObrerosFijos->find();
                $personal = 'OBREROS FIJOS';
            }else if(@$this->request->data['tipo_personal'] == 5){
                $this->loadModel('ViewMrrhhHistoricoObrerosC');
                $query = $this->ViewMrrhhHistoricoObrerosC->find();
                $personal = 'OBREROS CONTRATADOS';
            }else if(@$this->request->data['tipo_personal'] == 6){
                $this->loadModel('ViewMrrhhHistoricoObrerosNoPermanentes');
                $query = $this->ViewMrrhhHistoricoObrerosNoPermanentes->find();
                $personal = 'OBREROS NO PERMANENTES';
            }else if(@$this->request->data['tipo_personal'] == 7){
                $this->loadModel('ViewMrrhhHistoricoEJubilados');
                $query = $this->ViewMrrhhHistoricoEJubilados->find();
                $personal = 'EMPLEADOS JUBILADOS';
            }else if(@$this->request->data['tipo_personal'] == 8){
                $this->loadModel('ViewMrrhhHistoricoOJubilados');
                $query = $this->ViewMrrhhHistoricoOJubilados->find();
                $personal = 'OBREROS JUBILADOS';
            }else if(@$this->request->data['tipo_personal'] == 9){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
                $query = $this->ViewMrrhhHistoricoEmpleadosP->find();
                $personal = 'EMPLEADOS PENSIONADOS';
            }else if(@$this->request->data['tipo_personal'] == 10){
                $this->loadModel('ViewMrrhhHistoricoEPSobre');
                $query = $this->ViewMrrhhHistoricoEPSobre->find();
                $personal = 'EMPLEADOS PENSIONADOS SOBREVIVIENTES';
            }else if(@$this->request->data['tipo_personal'] == 11){
                $this->loadModel('ViewMrrhhHistoricoEPEsp');
                $query = $this->ViewMrrhhHistoricoEPEsp->find();
                $personal = 'EMPLEADOS PENSIONADOS ESPECIALES';
            }else if(@$this->request->data['tipo_personal'] == 12){
                $this->loadModel('ViewMrrhhHistoricoOPEsp');
                $query = $this->ViewMrrhhHistoricoOPEsp->find();
                $personal = 'OBREROS PENSIONADOS SOBREVIVIENTES'; 
            }else if(@$this->request->data['tipo_personal'] == 13){
                $this->loadModel('ViewMrrhhHistoricoOPEsp');
                $query = $this->ViewMrrhhHistoricoOPEsp->find();
                $personal = 'OBREROS PENSIONADOS ESPECIALES';
            }else if(@$this->request->data['tipo_personal'] == 14){
                $this->loadModel('ViewMrrhhHistoricoPc');
                $query = $this->ViewMrrhhHistoricoPc->find();
                $personal = 'PROTECCION CIVIL'; 
            }else if(@$this->request->data['tipo_personal'] == 15){
                $this->loadModel('ViewMrrhhHistoricoCementerio');
                $query = $this->ViewMrrhhHistoricoCementerio->find();
                $personal = 'CEMENTERIO MUNICIPAL';
            }else if(@$this->request->data['tipo_personal'] == 16){
                $this->loadModel('ViewMrrhhHistoricoComS');
                $query = $this->ViewMrrhhHistoricoComS->find();
                $personal = 'COMISION DE SERVICIO';
            }else if(@$this->request->data['tipo_personal'] == 17){
                $this->loadModel('ViewMrrhhHistoricoHonorarioP');
                $query = $this->ViewMrrhhHistoricoHonorarioP->find();
                $personal = 'HONORARIO PROFESIONALES';
            }


            if(@$this->request->data['dependencia'] != null){
                $query = $query->where(['ente_adscrito' => $this->request->data['dependencia']]);
            }

            if(@$this->request->data['ano'] != null){
                $query = $query->where(['ano' => $this->request->data['ano']]);
            }

            if(@$this->request->data['mes'] != null){
                $query = $query->where(['mes' => $this->request->data['mes']]);

                if($this->request->data['mes'] == 1) $desde = '01/01';
                if($this->request->data['mes'] == 2) $desde = '01/02';
                if($this->request->data['mes'] == 3) $desde = '01/03';
                if($this->request->data['mes'] == 4) $desde = '01/04';
                if($this->request->data['mes'] == 5) $desde = '01/05';
                if($this->request->data['mes'] == 6) $desde = '01/06';
                if($this->request->data['mes'] == 7) $desde = '01/07';
                if($this->request->data['mes'] == 8) $desde = '01/08';
                if($this->request->data['mes'] == 9) $desde = '01/09';
                if($this->request->data['mes'] == 10) $desde = '01/10';
                if($this->request->data['mes'] == 11) $desde = '01/11';
                if($this->request->data['mes'] == 12) $desde = '01/12';

                if($this->request->data['mes'] == 1) $hasta = '15/01';
                if($this->request->data['mes'] == 2) $hasta = '15/02';
                if($this->request->data['mes'] == 3) $hasta = '15/03';
                if($this->request->data['mes'] == 4) $hasta = '15/04';
                if($this->request->data['mes'] == 5) $hasta = '15/05';
                if($this->request->data['mes'] == 6) $hasta = '15/06';
                if($this->request->data['mes'] == 7) $hasta = '15/07';
                if($this->request->data['mes'] == 8) $hasta = '15/08';
                if($this->request->data['mes'] == 9) $hasta = '15/09';
                if($this->request->data['mes'] == 10) $hasta = '15/10';
                if($this->request->data['mes'] == 11) $hasta = '15/11';
                if($this->request->data['mes'] == 12) $hasta = '15/12';
                $mes = $this->request->data['mes'];
            }else{
                $mes = 0;
                $desde = 0;
                $hasta = 0;
            }

            if(@$this->request->data['quincena'] != null){
                $query = $query->where(['quincena' => $this->request->data['quincena']]);

                if($this->request->data['quincena'] == 1){
                        $quincena = 'PRIMERA QUINCENA';
                }else{
                        $quincena = 'SEGUNDA QUINCENA';
                } 
            }else{
                $quincena = 0;
            }

            if(@$this->request->data['ente_adscrito'] != null){
                $query = $query->where(['ente_adscrito' => $this->request->data['ente_adscrito']]);
            }

            $query = $query->toArray();            
        
            //=========================================================================================

            $tipo_calculo = $this->request->data['tipo_calculo'];


                if($tipo_calculo == 20){
                    $pdf = new \FPDF('L','mm','A4');
		            $pdf -> AddPage();

                    $pdf->Image(WWW_ROOT.'img/logo.jpg',20,4,30,20,"JPG","");
                    $pdf->Image(WWW_ROOT.'img/escudo.jpg',250,5,25,20,"JPG","");


                    $pdf -> SetFont('arial','B',8);
                    $pdf -> SetX(120);
                    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
                    $pdf -> SetX(120);
                    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
                    $pdf -> SetX(120);
                    $pdf -> Cell(80,5,'REPORTE DE PERSONAL',0,1,'C');

                    $pdf -> SetFont('Arial','B',6);
                    $pdf -> SetX(135);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,'Nomina:  '. $personal .'(Pago Correspondiente de Aportes Patronales de la '.$quincena.' '.' '.'del mes de'.' '.$mes. ' '.'del'.' '. ANO_FISCAL,0,1,'C');
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' .$desde.ANO_FISCAL.'   '.'Hasta:'.' '.$hasta. ANO_FISCAL,0,1,'C'); 
                    $pdf->ln();

                    /*=============================================  VARIABLES ===========================================*/
                    $i = 0;
                    $sindicato = 0;
                    $asociacion_funeraria = 0;
                    $sso = 1;
                    $rpe = 0;
                    $faov = 0;
                    $fpj = 0;
                    $caja_ahorro = 0;
                    $funeraria = 0;
                    $depositario_judicial = 0;

                    $t_total = 0;
                    $t_sso = 0;
                    $t_rpe = 0;
                    $t_faov = 0;
                    $t_fpj = 0;

                    $t_asso = 0;
                    $t_arpe = 0;
                    $t_afaov = 0;
                    $t_afpj = 0;


                    $t_caja = 0;
                    $t_prestamo_caja = 0;
                    $t_funeraria = 0;
                    $t_sindicato = 0;
                    $t_asociacion_funeraria = 0;
                    $t_x_depositario = 0;


                    $tipo_calculo = $this->request->data['tipo_calculo'];

                    /*=============================================  END ===========================================*/
                    $pdf -> SetFont('Arial','B',8);
                    
                    if ($tipo_calculo == 20) {
                        $pdf -> SetX(5);
                        $pdf -> Cell(6,5,'N',1,0,'C');
                        $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                        $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                        $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                        $pdf -> Cell(50,5,'DEPENDENCIA',1,0,'L');
                        $pdf -> Cell(30,5,'APORTE SSO',1,0,'C');
                        $pdf -> Cell(30,5,'APORTE RPE',1,0,'C');
                        $pdf -> Cell(30,5,'APORTE FAOV',1,0,'C');
                        $pdf -> Cell(30,5,'APORTE FPJ',1,1,'C');
                    }

                    foreach ($query as $key) {

                            // ============================================= SUELDO BASE 
                            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
                            //==========================================================================================================

                            // ============================================ BECAS ESCOLARES 
                            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
                            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
                            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
                            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
                            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

                            $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
                            //==========================================================================================================



                             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;



                            // ============================================= PRIMAS 
                            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
                            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
                            //==========================================================================================================




                             //cuando existan ajustes de primas o Sueldo 
                             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

                             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
                             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
                             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;


                             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
                             

                             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
                             

                             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
                             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
                             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;



                            /*======================================================================================================*/
                            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

                            //================================================= DEDUCCIONES DE LEY
                            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); else $faov = 0;
                            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] / 2; else $deduccion_sso = 0;
                            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
                            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj'] / 2; else $deduccion_fpj = 0;


                            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;


                            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
                            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
                            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
                             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

                            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
                            //==========================================================================================================


                            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
                            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
                            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
                            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
                            //==========================================================================================================

                            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

                            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
                            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
                            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
                            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;



                            if($key['status'] !=0) $total = 
                                $sso + 
                                $rpe + 
                                $fpj + 
                                $faov_dc + 
                                $deduccion_caja + 
                                $funeraria + 
                                $sindicato + 
                                $asociacion +
                                $prestamo_caja +
                                $x_depositario;
                             else $total = 0;

                            /*======================================================================================================*/
                            /*====================================== TOTAL COLUMNAS ================================================*/
                            @$t_sso += $sso;
                            @$t_rpe += $rpe;
                            @$t_faov += $faov *2;
                            @$t_fpj += $fpj;
                            @$t_caja += $deduccion_caja;
                            @$t_prestamo_caja += $prestamo_caja;
                            @$t_funeraria += $funeraria / 2;
                            @$t_sindicato += $sindicato;
                            @$t_asociacion += $asociacion;
                            @$t_x_depositario += $x_depositario;
                            @$t_total += $total;


                                            
                                            // ============================================= APORTES DE LEY 
                            if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso'] /2; else $aporte_patronal_asso = 0;
                            if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe'] /2; else $aporte_patronal_arpe = 0;
                            if($key['status'] !=0) $aporte_patronal_afpj = $key['aporte_patronal_afpj'] / 2; else $aporte_patronal_afpj = 0;
                            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2;else $aporte_deduccion_caja = 0;
                            if($key['status'] !=0) $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02) / 2;else$afaov = 0;
                            //==========================================================================================================

                 
                            // ============================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                            if($key['dias_dejados_c'] !=0) $asso_dc = (($aporte_patronal_asso / 30) * $key['dias_dejados_c']); else $asso_dc = $aporte_patronal_asso;
                            if($key['dias_dejados_c'] !=0) $arpe_dc = (($aporte_patronal_arpe / 30) * $key['dias_dejados_c']); else $arpe_dc = $aporte_patronal_arpe;
                            if($key['dias_dejados_c'] !=0) $afaov_dc = (($afaov / 30) * $key['dias_dejados_c']); else $afaov_dc = $afaov;
                            if($key['dias_dejados_c'] !=0) $afpj_dc = (($aporte_patronal_afpj / 30) * $key['dias_dejados_c']); else $afpj_dc = $aporte_patronal_afpj;
                            //==========================================================================================================


                            if($asso_dc != 0) $asso =  $aporte_patronal_asso + $asso_dc; else $asso = $aporte_patronal_asso;
                            if($asso_dc != 0) $arpe =  $aporte_patronal_arpe + $arpe_dc; else $arpe = $aporte_patronal_arpe;
                            if($asso_dc != 0) $afaov_dc =  $afaov + $afaov_dc; else $sso = $afaov;
                            if($asso_dc != 0) $afpj =  $aporte_patronal_afpj + $afpj_dc; else $afpj = $aporte_patronal_afpj;


                            if($key['status'] !=0) $total = 
                                $asso + 
                                $arpe + 
                                $afaov_dc + 
                                $afpj + 
                                $aporte_deduccion_caja;
                            else $total = 0;
                            
                            $t_asso += $asso; 
                            $t_arpe += $arpe;
                            $t_afaov += $afaov_dc;
                            $t_afpj += $afpj;
                            $t_caja += $aporte_deduccion_caja;
                            $t_total += $total;

                            ++$i;

                            $pdf -> SetFont('Arial','',8);

                            if ($tipo_calculo == 20) {
                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,$i,1,0,'C');
                                    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
                                    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
                                    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
                                    $pdf -> Cell(50,5,$this->mayus(substr($key['ente_adscrito'],0,25)),1,0,'L');
                                    $pdf -> Cell(30,5,$this->moneda($aporte_patronal_asso),1,0,'R');
                                    $pdf -> Cell(30,5,$this->moneda($aporte_patronal_arpe),1,0,'R');
                                    $pdf -> Cell(30,5,$this->moneda($afaov),1,0,'R');
                                    $pdf -> Cell(30,5,$this->moneda($aporte_patronal_afpj),1,1,'R');
                                }

                                $y = $pdf -> GetY();
                                    if($y > 170){
                                        $pdf -> AddPage();
                                    }

                                    if($y > 170){

                                        
                                        $pdf->Image(WWW_ROOT.'img/logo.jpg',20,4,30,20,"JPG","");
                                        $pdf->Image(WWW_ROOT.'img/escudo.jpg',250,5,25,20,"JPG","");


                                        $pdf -> SetFont('arial','B',8);
                                        $pdf -> SetX(120);
                                        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
                                        $pdf -> SetX(120);
                                        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
                                        $pdf -> SetX(120);
                                        $pdf -> Cell(80,5,'REPORTE DE PERSONAL',0,1,'C');

                                        $pdf -> SetFont('Arial','B',6);
                                        $pdf -> SetX(135);
                                        $pdf -> SetFont('Arial','',8);
                                        $pdf -> Cell(40,5,'Nomina:  '. $personal .'(Pago Correspondiente a la '.$quincena.' '.' '.'del mes de'.' '.$mes. ' '.'del'.' '. ANO_FISCAL,0,1,'C');
                                        $pdf -> SetX(135);
                                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' .$desde.ANO_FISCAL.'   '.'Hasta:'.' '.$hasta. ANO_FISCAL,0,1,'C'); 
                                        $pdf->ln();


                                        $pdf -> SetFont('Arial','B',8);

                                        if ($tipo_calculo == 20) {
                                            $pdf -> SetX(5);
                                            $pdf -> Cell(6,5,'N',1,0,'C');
                                            $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                            $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                            $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                            $pdf -> Cell(50,5,'DEPENDENCIA',1,0,'L');
                                            $pdf -> Cell(30,5,'APORTE SSO',1,0,'C');
                                            $pdf -> Cell(30,5,'APORTE RPE',1,0,'C');
                                            $pdf -> Cell(30,5,'APORTE FAOV',1,0,'C');
                                            $pdf -> Cell(30,5,'APORTE FPJ',1,1,'C');
                                            
                                        }
                                    }

                                    $total = $key['deduccion_sso'] +$key['deduccion_rpe'] + $faov + $key['deduccion_fpj'] + $key['deduccion_caja_ahorro'] + $funeraria + $sindicato + $asociacion_funeraria + $x_depositario;
                                }

                                    $pdf -> SetFont('arial','B',8);
                                    if ($tipo_calculo == 20) {
                                        $pdf -> SetX(5);
                                        $pdf -> Cell(161,5,'TOTALES',1,0,'C');
                                        $pdf -> Cell(30,5,$this->moneda($t_asso),1,0,'C');
                                        $pdf -> Cell(30,5,$this->moneda($t_arpe),1,0,'C');
                                        $pdf -> Cell(30,5,$this->moneda($t_afaov),1,0,'C');
                                        $pdf -> Cell(30,5,$this->moneda($t_afpj),1,1,'C');
                                    }
                           

                }else{
                    $pdf = new \FPDF();
                    $pdf -> AddPage();

    		        $pdf->Image(WWW_ROOT.'img/logo.jpg',5,4,20,15,"JPG","");
                    $pdf->Image(WWW_ROOT.'img/escudo.jpg',185,5,20,15,"JPG","");


                    $pdf -> SetFont('arial','B',8);
    		        $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'REPORTE DE PERSONAL',0,1,'C');

    			    $pdf -> SetFont('Arial','B',6);
                    $pdf -> SetX(90);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,'Nomina:  '. @$personal .'(Pago Correspondiente a la '.@$quincena.' del mes de '. @$mes.' del'. ANO_FISCAL,0,1,'C');
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' .$desde.ANO_FISCAL.'   '.'Hasta:'.' '.$hasta. ANO_FISCAL,0,1,'C'); 
                    $pdf->ln();


                    /*=============================================  VARIABLES ===========================================*/
                    $i = 0;
                    $sindicato = 0;
                    $asociacion_funeraria = 0;
                    $sso = 1;
                    $rpe = 0;
                    $faov = 0;
                    $fpj = 0;
                    $caja_ahorro = 0;
                    $funeraria = 0;
                    $depositario_judicial = 0;

                    $t_total = 0;
                    $t_sso = 0;
                    $t_rpe = 0;
                    $t_faov = 0;
                    $t_fpj = 0;
                    $t_caja = 0;
                    $t_prestamo_caja = 0;
                    $t_funeraria = 0;
                    $t_sindicato = 0;
                    $t_asociacion_funeraria = 0;
                    $t_x_depositario = 0;
                }




			    
                

                $tipo_calculo = $this->request->data['tipo_calculo'];

			    /*=============================================  END ===========================================*/
                    $pdf -> SetFont('Arial','B',8);
                if ($tipo_calculo == "") {
    			    $pdf -> SetX(5);
    			    $pdf -> Cell(6,5,'N',1,0,'C');
    			    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
    			    $pdf -> Cell(30,5,'NOMBRES',1,0,'C');
    			    $pdf -> Cell(30,5,'APELLIDO',1,0,'C');
    			    $pdf -> Cell(40,5,'FECHA DE INGRESO',1,0,'C');
    			    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'SSO',1,0,'C');
                    $pdf -> Cell(20,5,'RPE',1,0,'C');
                    $pdf -> Cell(20,5,'FAOV',1,0,'C');
                    $pdf -> Cell(20,5,'FPJ',1,0,'C');
                    $pdf -> Cell(20,5,'CAJA DE HORRO',1,0,'C');
                    $pdf -> Cell(20,5,'FUNERARIA',1,0,'C');
                    $pdf -> Cell(20,5,'SINDICATO',1,0,'C');
                    $pdf -> Cell(22,5,'ASOC. FUNERARIA',1,0,'C');
                    $pdf -> Cell(22,5,'D. JUDICIAL',1,1,'C');
			        
			    }else if ($tipo_calculo == 2) {
                    
                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL SEGURO SOCIAL',0,1,'C');

                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'SSO',1,1,'C');
                }else if ($tipo_calculo == 3) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS DEL REGIMEN PRESTACIONAL DE EMPLEO',0,1,'C');

                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'RPE',1,1,'C');
                }else if ($tipo_calculo == 4) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL FONDO DE AHORRO OBLIGATORIO PARA LA VIVIENDA',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'FAOV',1,1,'C');
                }else if ($tipo_calculo == 5) {
                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'FPJ',1,1,'C');
                }else if ($tipo_calculo == 6) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS A LA CAJA DE AHORRO',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'CAJA DE HORRO',1,1,'C');
                }else if ($tipo_calculo == 7) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS SOBRE PRESTAMO A LA CAJA DE AHORRO',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'P.CAJA DE AHORRO',1,1,'C');
                }else if ($tipo_calculo == 8) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS DEL SERVICIO FUNERARIO',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'FUNERARIA',1,1,'C');
                }else if ($tipo_calculo == 9) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL SINDICATO DE EMPLEADOS',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'SINDICATO',1,1,'C');
                }else if ($tipo_calculo == 10) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS A LA ASOCIACION FUNERARIA',0,1,'C');


                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'ASOC. FUNERARIA',1,1,'C');
                }else if ($tipo_calculo == 11) {

                    $pdf -> SetX(70);
                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS COMO DEPOSITARIOS JUDICIALES',0,1,'C');

                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5,'N',1,0,'C');
                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                    $pdf -> Cell(25,5,'D. JUDICIAL',1,1,'C');
                }

			    /* CONDICIONES IF ELSEIF ELSE*/

                $i = 0;

                foreach ($query as $key) {

                    ++$i;

                    // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

        $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================



             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;



            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================




             //cuando existan ajustes de primas o Sueldo 
             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;


             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             

             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;



            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) ; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] / 2; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj'] / 2; else $deduccion_fpj = 0;

            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;
            
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================

            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;



            if($key['status'] !=0) $total = 
                $sso + 
                $rpe + 
                $fpj + 
                $faov_dc + 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $total = 0;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            @$t_sso += $sso;
            @$t_rpe += $rpe;
            @$t_faov += $faov *2;
            @$t_fpj += $fpj;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria / 2;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;
            @$t_total += $total;

                    

                    $pdf -> SetFont('Arial','',8);

                    if ($tipo_calculo == "") {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(30,5,$this->moneda($key['deduccion_sso']),1,0,'R');
                            $pdf -> Cell(30,5,$this->moneda($key['deduccion_rpe']),1,0,'R');
                            $pdf -> Cell(30,5,$this->moneda($faov),1,0,'R');
                            $pdf -> Cell(30,5,$this->moneda($key['deduccion_fpj']),1,0,'R');
                            $pdf -> Cell(30,5,$this->moneda($key['deduccion_caja_ahorro']),1,0,'R');
                            $pdf -> Cell(20,5,$this->moneda($funeraria),1,0,'R');
                            $pdf -> Cell(30,5,$this->moneda($sindicato),1,0,'R');
                            $pdf -> Cell(22,5,$this->moneda($asociacion_funeraria),1,0,'R');
                            $pdf -> Cell(22,5,$this->moneda($x_depositario),1,1,'R');
                            
                        }else if ($tipo_calculo == 2 AND $key['deduccion_sso'] != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($deduccion_sso),1,1,'R');

                        }else if ($tipo_calculo == 3 AND $key['deduccion_rpe'] != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($key['deduccion_rpe']),1,1,'R');
                        }else if ($tipo_calculo == 4 AND $faov != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($faov),1,1,'R');
                        }else if ($tipo_calculo == 5 AND $key['deduccion_fpj'] != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($key['deduccion_fpj']),1,1,'R');
                        }else if ($tipo_calculo == 6 AND $key['deduccion_caja_ahorro'] != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($key['deduccion_caja_ahorro']),1,1,'R');
                        }else if ($tipo_calculo == 7 AND $key['prestamo_caja_ahorro'] != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($prestamo_caja),1,1,'C');
                        }else if ($tipo_calculo == 8  AND $funeraria != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($funeraria),1,1,'R');
                        }else if ($tipo_calculo == 9  AND $sindicato != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($sindicato),1,1,'R');
                        }else if ($tipo_calculo == 10 AND $asociacion_funeraria != 0) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($asociacion_funeraria),1,1,'R');
                        }else if ($tipo_calculo == 11 AND $x_depositario) {
                            $pdf -> SetX(5);
            			    $pdf -> Cell(6,5,$i,1,0,'C');
            			    $pdf -> Cell(25,5,$key['cedula'],1,0,'C');
            			    $pdf -> Cell(40,5,$key['nombres'],1,0,'L');
            			    $pdf -> Cell(40,5,$key['apellidos'],1,0,'L');
            			    $pdf -> Cell(60,5,$this->mayus(substr($key['ente_adscrito'],0,28)),1,0,'L');
                            $pdf -> Cell(25,5,$this->moneda($x_depositario),1,1,'R');
                        }

                        $total = $key['deduccion_sso'] +$key['deduccion_rpe'] + $faov + $key['deduccion_fpj'] + $key['deduccion_caja_ahorro'] + $funeraria + $sindicato + $asociacion_funeraria + $x_depositario;                           
                        $t_total += $total;
                        $t_sso += $key['deduccion_sso'];
                        $t_rpe += $key['deduccion_rpe'];
                        $t_faov += $faov;
                        $t_fpj += $key['deduccion_fpj'];
                        $t_caja += $key['deduccion_caja_ahorro'];
                        $t_funeraria += $funeraria / 2;
                        $t_prestamo_caja += $prestamo_caja;
                        $t_sindicato += $sindicato;
                        $t_asociacion_funeraria += $asociacion_funeraria;
                        $t_x_depositario += $x_depositario;


                            $y = $pdf -> GetY();
                            if($y > 275){
                                $pdf -> AddPage();
                            }

                            if($y > 275){

                                
                                $pdf->Image(WWW_ROOT.'img/logo.jpg',5,4,20,15,"JPG","");
                                $pdf->Image(WWW_ROOT.'img/escudo.jpg',185,5,20,15,"JPG","");


                                $pdf -> SetFont('arial','B',8);
                                $pdf -> SetX(70);
                                $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
                                $pdf -> SetX(70);
                                $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
                                $pdf -> SetX(70);
                                $pdf -> Cell(80,5,'REPORTE DE PERSONAL',0,1,'C');

                                $pdf -> SetFont('Arial','B',6);
                                $pdf -> SetX(90);
                                $pdf -> SetFont('Arial','',8);
                                $pdf -> Cell(40,5,'Nomina:  '. $personal .'(Pago Correspondiente a la '.$quincena.' '.' '.'del mes de'.' '.$mes. ' '.'del'.' '. ANO_FISCAL,0,1,'C');
                                $pdf -> SetX(90);
                                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' .$desde.ANO_FISCAL.'   '.'Hasta:'.' '.$hasta. ANO_FISCAL,0,1,'C'); 
                                $pdf->ln();


                                $pdf -> SetFont('Arial','B',8);

                                if ($tipo_calculo == "") {
                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(30,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(30,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'FECHA DE INGRESO',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'SSO',1,0,'C');
                                    $pdf -> Cell(20,5,'RPE',1,0,'C');
                                    $pdf -> Cell(20,5,'FAOV',1,0,'C');
                                    $pdf -> Cell(20,5,'FPJ',1,0,'C');
                                    $pdf -> Cell(20,5,'CAJA DE HORRO',1,0,'C');
                                    $pdf -> Cell(20,5,'FUNERARIA',1,0,'C');
                                    $pdf -> Cell(20,5,'SINDICATO',1,0,'C');
                                    $pdf -> Cell(22,5,'ASOC. FUNERARIA',1,0,'C');
                                    $pdf -> Cell(22,5,'D. JUDICIAL',1,1,'C');
                                    
                                }else if ($tipo_calculo == 2) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL SEGURO SOCIAL',0,1,'C');

                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'SSO',1,1,'C');
                                }else if ($tipo_calculo == 3) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS DEL REGIMEN PRESTACIONAL DE EMPLEO',0,1,'C');

                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'RPE',1,1,'C');
                                }else if ($tipo_calculo == 4) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL FONDO DE AHORRO OBLIGATORIO PARA LA VIVIENDA',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'FAOV',1,1,'C');
                                }else if ($tipo_calculo == 5) {
                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'FPJ',1,1,'C');
                                }else if ($tipo_calculo == 6) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS A LA CAJA DE AHORRO',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'CAJA DE HORRO',1,1,'C');
                                }else if ($tipo_calculo == 7) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS SOBRE PRESTAMO A LA CAJA DE AHORRO',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'P.CAJA DE AHORRO',1,1,'C');
                                }else if ($tipo_calculo == 8) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS DEL SERVICIO FUNERARIO',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'FUNERARIA',1,1,'C');
                                }else if ($tipo_calculo == 9) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS AL SINDICATO DE EMPLEADOS',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'SINDICATO',1,1,'C');
                                }else if ($tipo_calculo == 10) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS A LA ASOCIACION FUNERARIA',0,1,'C');


                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'ASOC. FUNERARIA',1,1,'C');
                                }else if ($tipo_calculo == 11) {

                                    $pdf -> SetX(70);
                                    $pdf -> Cell(80,5,'POR CONCEPTO DE  PAGOS COMO DEPOSITARIOS JUDICIALES',0,1,'C');

                                    $pdf -> SetX(5);
                                    $pdf -> Cell(6,5,'N',1,0,'C');
                                    $pdf -> Cell(25,5,'CEDULA',1,0,'C');
                                    $pdf -> Cell(40,5,'APELLIDO',1,0,'C');
                                    $pdf -> Cell(40,5,'NOMBRES',1,0,'C');
                                    $pdf -> Cell(60,5,'DEPENDENCIA',1,0,'L');
                                    $pdf -> Cell(25,5,'D. JUDICIAL',1,1,'C');
                                }
                                $pdf -> SetFont('Arial','',8);
                        }

                }


			    /*Condicion para sumar montos que seleccione ha filtrar*/ 
			    
                    $pdf -> ln();

                    $pdf -> SetFont('Arial','B',8);

                    if ($tipo_calculo == "") {

                            $pdf -> SetX(5);
                            $pdf -> Cell(278,5,'',0,0,'R');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_total),1,1,'C');
                            
                    }else if ($tipo_calculo == 2) {

                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_sso),1,1,'C');
                    }else if ($tipo_calculo == 3) {

                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_rpe),1,1,'C');

                    }else if ($tipo_calculo == 4) {

                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_faov),1,1,'C');

                    }else if ($tipo_calculo == 5) {

                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_fpj),1,1,'C');

                    }else if ($tipo_calculo == 6) {

                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_caja),1,1,'C');

                    }else if ($tipo_calculo == 7) {
                            
                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_prestamo_caja),1,1,'C');
                    
                    }else if ($tipo_calculo == 8) {
                     
                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_funeraria),1,1,'C');
                    
                    }else if ($tipo_calculo == 9) {
                            
                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'R');
                            $pdf -> Cell(25,5,$this->moneda($t_sindicato),1,1,'C');
                        
                    }else if ($tipo_calculo == 10) {
                    
                            $pdf -> SetX(5);
                            $pdf -> Cell(146,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'C');
                            $pdf -> Cell(25,5,$this->moneda($t_asociacion_funeraria),1,1,'R');
                    
                    }else if ($tipo_calculo == 11) {
                            $pdf -> SetX(5);
                            $pdf -> Cell(124,5,'',0,0,'C');
                            $pdf -> Cell(25,5,'TOTAL',1,0,'C');
                            $pdf -> Cell(25,5,$this->moneda($t_x_depositario),1,1,'R');                        
                    }



                    if ($tipo_calculo == 20) {
                                    $pdf->ln();
                                    $pdf -> SetX(5);
                                    $pdf -> Cell(221,5,'',0,0,'R');
                                    $pdf -> Cell(30,5,'TOTAL',1,0,'R');
                                    $pdf -> Cell(30,5,$this->moneda($t_total),1,1,'C');
                                    $pdf->ln();
                                    $pdf->ln();
                                    }

                    if ($tipo_calculo == 20) {
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
                                    } else{
                                            $pdf -> ln();$pdf -> ln();$pdf -> ln();
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

                                    }

		        


		        $pdf -> Output('Reporte'."-".date('d-m-Y').".pdf", 'I'); // Cambiar "I" por "D"
		        exit;
            
        }
	}

}
