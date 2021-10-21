<?php
namespace App\Controller;

use App\Controller\AppController;

class MrrhhFormulacionController extends AppController
{
	public function jubpen(){
		//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('rrhh');

		//========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Verifica si existe la formulacion del ANO FISCAL actual
        //========================================================
        $this->loadModel('MrrhhFormulacion');
        $calculos = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL, 'OR' => ['tipo' => 'JUBILADOS', 'tipo' => 'PENSIONADOS']])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);

        if($calculos->count() != 0){
            $calculos = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);
        	$this->set('calculos', $calculos);
        }else{
        	$this->calcular_jubpen();
        	return $this->redirect(['action' => 'jubpen']);
        }
	}

	public function calcular_jubpen(){
		//========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================

        $this->loadModel('ViewMrrhhJubiladosEmpleados');
        $je = $this->ViewMrrhhJubiladosEmpleados->find('all');
        $total_f_je = $je->where(['genero' => 'FEMENINO'])->count();
        $je = $this->ViewMrrhhJubiladosEmpleados->find('all');
        $total_m_je = $je->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'JUBILADOS';
        $save->subtipo = 'EMPLEADOS';
        $save->ano_real_femenino = $total_f_je;
        $save->ano_real_maculino = $total_m_je;
        $save->ano_real_monto = $this->montoje();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhJubiladosObreros');
        $jo = $this->ViewMrrhhJubiladosObreros->find('all');
        $total_f_jo = $jo->where(['genero' => 'FEMENINO'])->count();
        $jo = $this->ViewMrrhhJubiladosObreros->find('all');
        $total_m_jo = $jo->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'JUBILADOS';
        $save->subtipo = 'OBREROS';
        $save->ano_real_femenino = $total_f_jo;
        $save->ano_real_maculino = $total_m_jo;
        $save->ano_real_monto = $this->montojo();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhPensionadosEmpleados');
        $pe = $this->ViewMrrhhPensionadosEmpleados->find('all');
        $total_f_pe = $pe->where(['genero' => 'FEMENINO'])->count();
        $pe = $this->ViewMrrhhPensionadosEmpleados->find('all');
        $total_m_pe = $pe->where(['genero' => 'MASCULINO'])->count();
        $montope = $this->montope();


        $this->loadModel('ViewMrrhhPenEspEmpleados');
        $pe = $this->ViewMrrhhPenEspEmpleados->find('all');
        $total_f_pe += $pe->where(['genero' => 'FEMENINO'])->count();
        $pe = $this->ViewMrrhhPenEspEmpleados->find('all');
        $total_m_pe += $pe->where(['genero' => 'MASCULINO'])->count();
        $montope += $this->montopee();


        $this->loadModel('ViewMrrhhPenSobreEmpleados');
        $pe = $this->ViewMrrhhPenSobreEmpleados->find('all');
        $total_f_pe += $pe->where(['genero' => 'FEMENINO'])->count();
        $pe = $this->ViewMrrhhPenSobreEmpleados->find('all');
        $total_m_pe += $pe->where(['genero' => 'MASCULINO'])->count();
        $montope += $this->montopse();


        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'PENSIONADOS';
        $save->subtipo = 'EMPLEADOS';
        $save->ano_real_femenino = $total_f_pe;
        $save->ano_real_maculino = $total_m_pe;
        $save->ano_real_monto = $montope;
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhPenEspObreros');
        $po = $this->ViewMrrhhPenEspObreros->find('all');
        $total_f_po = $po->where(['genero' => 'FEMENINO'])->count();
        $po = $this->ViewMrrhhPenEspObreros->find('all');
        $total_m_po = $po->where(['genero' => 'MASCULINO'])->count();
        $montopo = $this->montopeo();

        $this->loadModel('ViewMrrhhPenSobreObreros');
        $po = $this->ViewMrrhhPenSobreObreros->find('all');
        $total_f_po += $po->where(['genero' => 'FEMENINO'])->count();
        $po = $this->ViewMrrhhPenSobreObreros->find('all');
        $total_m_po += $po->where(['genero' => 'MASCULINO'])->count();
        $montopo += $this->montopso();


        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'PENSIONADOS';
        $save->subtipo = 'OBREROS';
        $save->ano_real_femenino = $total_f_po;
        $save->ano_real_maculino = $total_m_po;
        $save->ano_real_monto = $montopo;
        $this->MrrhhFormulacion->save($save);
	}

	public function editarultimoano()
    {
        $this->loadModel('MrrhhFormulacion');
        $this->request->allowMethod(['post', 'get', 'save']);
        $update = $this->MrrhhFormulacion->get($this->request->data['ultimo_ano_id']);

        $update->ultimo_ano_femenino = $this->request->data['ultimo_ano_femenino'];
        $update->ultimo_ano_maculino = $this->request->data['ultimo_ano_maculino'];
        $update->ultimo_ano_monto = $this->revertir_moneda($this->request->data['ultimo_ano_monto']);
        $update->ultimo_ano_incidencias = $this->revertir_moneda($this->request->data['ultimo_ano_incidencias']);

        $update->ano_presupuestado_femenino = $update->ultimo_ano_femenino + $update->ano_real_femenino;
        $update->ano_presupuestado_maculino = $update->ultimo_ano_maculino + $update->ano_real_maculino;
        $update->ano_presupuestado_monto = $update->ultimo_ano_monto + $update->ano_real_monto;
        $update->ano_presupuestado_incidencias = $update->ultimo_ano_incidencias + $update->ano_real_incidencias;

        if ($this->MrrhhFormulacion->save($update)) {
            $this->Flash->success(__('Datos Actualizados'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'jubpen']);
    } 

    public function montoje(){
    	$this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
        $data = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');

        $i  = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        foreach ($data as $key) {


            if ($key['sueldo'] !=0) {

            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

             if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $x_depositario +$prestamo_caja; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/

         }else{
            
            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
             if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $x_depositario + $prestamo_caja; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/
         }

            $t_sueldo_base += $sueldo_mensual;
        }

        return $t_sueldo_base*12;
    }

    public function montojo(){
    	$this->loadModel('ViewMrrhhJubiladosObrerosAux');
        $data = $this->ViewMrrhhJubiladosObrerosAux->find('all');

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        foreach ($data as $key) {


            if ($key['sueldo'] !=0) {

            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/

         }else{
            
            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/
         }
            $t_sueldo_base += $sueldo_mensual;
        }

        return $t_sueldo_base*12;
    }

    public function montope(){
    	$this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
        $data = $this->ViewMrrhhPensionadosEmpleadosAux->find('all');

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        foreach ($data as $key) {


        	if ($key['sueldo'] !=0) {

         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/

         }else{
         	
         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/
         }
		    $t_sueldo_base += $sueldo_mensual;
	    }
        return $t_sueldo_base*12;
    }

    public function montopse(){
    	$this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
        $data = $this->ViewMrrhhPenSobreEmpleadosAux->find('all');

        $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

		    $t_sueldo_base += $sueldo_base;
	    }
        return $t_sueldo_base*12;
    }

    public function montopee(){
    	$this->loadModel('ViewMrrhhPenEspEmpleadosAux');
        $data = $this->ViewMrrhhPenEspEmpleadosAux->find('all');

        $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

		    $t_sueldo_base += $sueldo_base;
	    }

        return $t_sueldo_base*12;
    }

    public function montopeo(){
    	$this->loadModel('ViewMrrhhPenEspObrerosAux');
        $data = $this->ViewMrrhhPenEspObrerosAux->find('all');

        $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

		    $t_sueldo_base += $sueldo_base;
	    }

        return $t_sueldo_base*12;
    }

    public function montopso(){
    	$this->loadModel('ViewMrrhhPenSobreObrerosAux');
        $data = $this->ViewMrrhhPenSobreObrerosAux->find('all');

        $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

		    $t_sueldo_base += $sueldo_base;
	    }

        return $t_sueldo_base*12;
    }


















    //===========================================================================================

    public function empleados(){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Verifica si existe la formulacion del ANO FISCAL actual
        //========================================================
        $this->loadModel('MrrhhFormulacion');
        $calculos = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL, 'OR' => ['tipo' => 'EMPLEADOS', 'tipo' => 'OBREROS']])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);

        if($calculos->count() != 0){
            $calculos = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);
            $this->set('calculos', $calculos);
        }else{
            $this->calcular_empleados();
            return $this->redirect(['action' => 'empleados']);
        }
    }

    public function calcular_empleados(){
        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $ef = $this->ViewMrrhhEmpleadosFijos->find('all');
        $total_f_ef = $ef->where(['genero' => 'FEMENINO'])->count();
        $ef = $this->ViewMrrhhEmpleadosFijos->find('all');
        $total_m_ef = $ef->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'EMPLEADOS';
        $save->subtipo = 'FIJOS';
        $save->ano_real_femenino = $total_f_ef;
        $save->ano_real_maculino = $total_m_ef;
        $save->ano_real_monto = $this->montoef();
        $save->ano_real_primas = $this->primaef();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhEmpleadosContratados');
        $ec = $this->ViewMrrhhEmpleadosContratados->find('all');
        $total_f_ec = $ec->where(['genero' => 'FEMENINO'])->count();
        $ec = $this->ViewMrrhhEmpleadosContratados->find('all');
        $total_m_ec = $ec->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'EMPLEADOS';
        $save->subtipo = 'CONTRATADOS';
        $save->ano_real_femenino = $total_f_ec;
        $save->ano_real_maculino = $total_m_ec;
        $save->ano_real_monto = $this->montoec();
        $save->ano_real_primas = $this->primaec();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhDirectivos');
        $ep = $this->ViewMrrhhDirectivos->find('all')->where(['cedula' => 16519394]);
        $total_f_ep = $ep->where(['genero' => 'FEMENINO'])->count();
        $ep = $this->ViewMrrhhDirectivos->find('all')->where(['cedula' => 12736419]);
        $total_m_ep = $ep->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'EMPLEADOS';
        $save->subtipo = 'ELECCION POPULAR';
        $save->ano_real_femenino = $total_f_ep;
        $save->ano_real_maculino = $total_m_ep;
        $save->ano_real_monto = $this->montoep();
        $save->ano_real_primas = $this->primaep();
        $this->MrrhhFormulacion->save($save);

         //========================================================

        $this->loadModel('ViewMrrhhDirectivos');
        $an = $this->ViewMrrhhDirectivos->find('all')->where(['cedula <>' => 16519394]);
        $total_f_an = $an->where(['genero' => 'FEMENINO'])->count();
        $an = $this->ViewMrrhhDirectivos->find('all')->where(['cedula <>' => 12736419]);
        $total_m_an = $an->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'EMPLEADOS';
        $save->subtipo = 'ALTO NIVEL';
        $save->ano_real_femenino = $total_f_an;
        $save->ano_real_maculino = $total_m_an;
        $save->ano_real_monto = $this->montoan();
        $save->ano_real_primas = $this->primaan();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhObrerosFijos');
        $of = $this->ViewMrrhhObrerosFijos->find('all');
        $total_f_of = $of->where(['genero' => 'FEMENINO'])->count();
        $of = $this->ViewMrrhhObrerosFijos->find('all');
        $total_m_of = $of->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'OBREROS';
        $save->subtipo = 'FIJOS';
        $save->ano_real_femenino = $total_f_of;
        $save->ano_real_maculino = $total_m_of;
        $save->ano_real_monto = $this->montoof();
        $save->ano_real_primas = $this->primaof();
        $this->MrrhhFormulacion->save($save);

        //========================================================

        $this->loadModel('ViewMrrhhObrerosContratados');
        $oc = $this->ViewMrrhhObrerosContratados->find('all');
        $total_f_oc = $oc->where(['genero' => 'FEMENINO'])->count();
        $oc = $this->ViewMrrhhObrerosContratados->find('all');
        $total_m_oc = $oc->where(['genero' => 'MASCULINO'])->count();

        $this->loadModel('MrrhhFormulacion');
        $save = $this->MrrhhFormulacion->newEntity();
        $save->ano = ANO_FISCAL;
        $save->tipo = 'OBREROS';
        $save->subtipo = 'CONTRATADOS';
        $save->ano_real_femenino = $total_f_oc;
        $save->ano_real_maculino = $total_m_oc;
        $save->ano_real_monto = $this->montooc();
        $save->ano_real_primas = $this->primaoc();
        $this->MrrhhFormulacion->save($save);

        //========================================================
    }

    public function editarultimoanoempleados()
    {
        $this->loadModel('MrrhhFormulacion');
        $this->request->allowMethod(['post', 'get', 'save']);
        $update = $this->MrrhhFormulacion->get($this->request->data['ultimo_ano_id']);

        $update->ultimo_ano_femenino = $this->request->data['ultimo_ano_femenino'];
        $update->ultimo_ano_maculino = $this->request->data['ultimo_ano_maculino'];
        $update->ultimo_ano_monto = $this->revertir_moneda($this->request->data['ultimo_ano_monto']);
        $update->ultimo_ano_compensaciones = $this->revertir_moneda($this->request->data['ultimo_ano_compensaciones']);
        $update->ultimo_ano_primas = $this->revertir_moneda($this->request->data['ultimo_ano_primas']);

        $update->ano_presupuestado_femenino = $update->ultimo_ano_femenino + $update->ano_real_femenino;
        $update->ano_presupuestado_maculino = $update->ultimo_ano_maculino + $update->ano_real_maculino;
        $update->ano_presupuestado_monto = $update->ultimo_ano_monto + $update->ano_real_monto;
        $update->ano_presupuestado_compensaciones = $update->ultimo_ano_compensaciones + $update->ano_real_compensaciones;
        $update->ano_presupuestado_primas = $update->ultimo_ano_primas + $update->ano_real_primas;

        if ($this->MrrhhFormulacion->save($update)) {
            $this->Flash->success(__('Datos Actualizados'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'empleados']);
    } 

    public function montoef(){
        $this->loadModel('ViewMrrhhEmpleadosFijosAux');
        $data = $this->ViewMrrhhEmpleadosFijosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;


            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;

         }

        return $t_sueldo_base*12;
    }

    public function primaef(){
        $this->loadModel('ViewMrrhhEmpleadosFijosAux');
        $data = $this->ViewMrrhhEmpleadosFijosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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
        $t_primas = 0;

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;


            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;

            @$t_primas += $t_prima_hijos + $t_prima_antiguedad + $t_prima_hogar + $t_prima_profesion;
         }

        return $t_primas*12;
    }

    public function montoec(){
        $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
        $data = $this->ViewMrrhhEmpleadosContratadosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
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

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;
        }

        return $t_sueldo_base*12;
    }

    public function montoep(){
        $this->loadModel('ViewMrrhhDirectivosAux');
        $data = $this->ViewMrrhhDirectivosAux->find('all')->where(['OR' => ['cedula' => 12736419, 'cedula' => 16519394]]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $t_sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

          
            /*============================================================ ASIGANCION ========================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
            }


            /*===================================================== DEDUCCION ======================================================*/



            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
             $deduccion_sso = 0;
            $deduccion_rpe= 0;
            $faov= 0;
            $deduccion_fpj= 0;
            $deduccion_caja_ahorro= 0;
            $prestamo_caja= 0;
            $funeraria= 0;
            $asociacion_funeraria= 0;
            $x_depositario= 0;
            $total= 0;

                   

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];
                    if($key['funeraria'] != 0 AND $key['status'] !=0) 
                        $funeraria = 20000/2; 
                    else $funeraria = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] ==11751843){
                                if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                            }

                            $funeraria = 0;
                        }
                     }
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];

                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);


                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2;
                    else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    foreach ($dataef as $ef) {
                    if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }else {$prima_hijos =$key['prima_hijos'];}
                 }                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];

                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);


                    if($key['funeraria'] != 0 AND $key['status'] !=0) 
                        $funeraria = 20000/2; 
                    else $funeraria = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2;
                    else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;
                    
                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;

            }
             /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
             /*================================================================================================*/
            $t_sueldo_base += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;
        }

        return $t_sueldo_base*12;
    }

    public function primaep(){
        $this->loadModel('ViewMrrhhDirectivosAux');
        $data = $this->ViewMrrhhDirectivosAux->find('all')->where(['OR' => ['cedula' => 12736419, 'cedula' => 16519394]]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $t_sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_primas = 0;

        foreach ($data as $key) {


            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
            }
        


            $t_primas += $prima_profesion + $prima_hijos + $prima_antiguedad;
        }

        return $t_primas*12;
    }


    public function montoan(){
        $this->loadModel('ViewMrrhhDirectivosAux');
        $data = $this->ViewMrrhhDirectivosAux->find('all')->where(['AND' => ['cedula <>' => 12736419, 'cedula <>' => 16519394]]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $t_sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

          
            /*============================================================ ASIGANCION ========================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
            }


            /*===================================================== DEDUCCION ======================================================*/



            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
             $deduccion_sso = 0;
            $deduccion_rpe= 0;
            $faov= 0;
            $deduccion_fpj= 0;
            $deduccion_caja_ahorro= 0;
            $prestamo_caja= 0;
            $funeraria= 0;
            $asociacion_funeraria= 0;
            $x_depositario= 0;
            $total= 0;

                   

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];
                    if($key['funeraria'] != 0 AND $key['status'] !=0) 
                        $funeraria = 20000/2; 
                    else $funeraria = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] ==11751843){
                                if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                            }

                            $funeraria = 0;
                        }
                     }
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];

                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);


                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2;
                    else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    foreach ($dataef as $ef) {
                    if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }else {$prima_hijos =$key['prima_hijos'];}
                 }                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];

                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);


                    if($key['funeraria'] != 0 AND $key['status'] !=0) 
                        $funeraria = 20000/2; 
                    else $funeraria = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2;
                    else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;
                    
                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;

            }
             /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
             /*================================================================================================*/
            $t_sueldo_base += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;
        }

        return $t_sueldo_base*12;
    }

    public function primaan(){
        $this->loadModel('ViewMrrhhDirectivosAux');
        $data = $this->ViewMrrhhDirectivosAux->find('all')->where(['AND' => ['cedula <>' => 12736419, 'cedula <>' => 16519394]]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $t_sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_primas = 0;

        foreach ($data as $key) {


            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;
            }
        


            $t_primas += $prima_profesion + $prima_hijos + $prima_antiguedad;
        }

        return $t_primas*12;
    }

    public function primaec(){
        $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
        $data = $this->ViewMrrhhEmpleadosContratadosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
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
        $t_primas = 0;

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;

            @$t_primas += $t_prima_hijos + $t_prima_antiguedad + $t_prima_hogar + $t_prima_profesion;
        }

        return $t_primas*12;
    }

    public function montooc(){
        $this->loadModel('ViewMrrhhObrerosContratadosAux');
        $data = $this->ViewMrrhhObrerosContratadosAux->find('all');

       $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;


            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;
        }

        return $t_sueldo_base*12;
    }

    public function primaoc(){
        $this->loadModel('ViewMrrhhObrerosContratadosAux');
        $data = $this->ViewMrrhhObrerosContratadosAux->find('all');

       $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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
        $t_primas = 0;

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

            if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;


            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;

            @$t_primas += $t_prima_hijos + $t_prima_antiguedad + $t_prima_hogar + $t_prima_profesion;
        }

        return $t_primas*12;
    }

    public function montoof(){
        $this->loadModel('ViewMrrhhObrerosFijosAux');
        $data = $this->ViewMrrhhObrerosFijosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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



        foreach ($data as $key) {

            
        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;     
       
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas += $becas;

         }

        return $t_sueldo_base*12;
    }

    public function primaof(){
        $this->loadModel('ViewMrrhhObrerosFijosAux');
        $data = $this->ViewMrrhhObrerosFijosAux->find('all');

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
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
        $t_primas = 0;


        foreach ($data as $key) {

            
        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;     
       
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas += $becas;

            @$t_primas += $t_prima_hijos + $t_prima_antiguedad + $t_prima_hogar + $t_prima_profesion;
         }

        return $t_primas*12;
    }
}
