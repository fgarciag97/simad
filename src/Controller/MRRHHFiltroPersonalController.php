<?php
namespace App\Controller;

use App\Controller\AppController;


class MRRHHFiltroPersonalController extends AppController
{
	public function index($tipo_nomina = null, $ente_adscrito = null, $cargo = null, $grupo = null, $grado_instruccion = null, $fecha_ingreso_d = null, $fecha_ingreso_h = null, $funeraria = null, $caja_ahorro = null, $sindicato = null, $asociacion = null, $prima_hogar = null, $inicial = null, $primaria = null, $secundaria = null, $universitaria = null, $discapacidad = null){

		$this->viewBuilder()->setLayout('rrhh');

		//========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        //========================================================
        //Carga del Select
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
        //Carga del Select de Grados de Instruccion
        //========================================================
        $this->loadModel('Grados');

        $gi = $this->Grados->find('all')->toArray();
        $options = [];
        foreach ($gi as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('gi', $options);

        //========================================================
        //Carga del Select de Entes Adscritos
        //========================================================
        $this->loadModel('EnteAdscrito');

        $ea = $this->EnteAdscrito->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($ea as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('ea', $options);

        //============================================================

        if($tipo_nomina != null){

            if($tipo_nomina == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $query = $this->ViewMrrhhEmpleadosFijosAux->find();
            }else if($tipo_nomina == 2){
                $this->loadModel('ViewMrrhhEmpleadosCAux');
                $query = $this->ViewMrrhhEmpleadosCAux->find();
            }else if($tipo_nomina == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $query = $this->ViewMrrhhDirectivosAux->find();
            }else if($tipo_nomina == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find();
            }else if($tipo_nomina == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find();
            }else if($tipo_nomina == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $query = $this->ViewMrrhhObrerosNoPermanentesAux->find();
            }else if($tipo_nomina == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $query = $this->ViewMrrhhJubiladosEmpleadosAux->find();
            }else if($tipo_nomina == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $query = $this->ViewMrrhhJubiladosObrerosAux->find();
            }else if($tipo_nomina == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                $query = $this->ViewMrrhhPensionadosEmpleadosAux->find();
            }else if($tipo_nomina == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                $query = $this->ViewMrrhhPenSobreEmpleadosAux->find();
            }else if($tipo_nomina == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                $query = $this->ViewMrrhhPenEspEmpleadosAux->find();
            }else if($tipo_nomina == 12){
                $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                $query = $this->ViewMrrhhPenSobreObrerosAux->find();
            }else if($tipo_nomina == 13){
                $this->loadModel('ViewMrrhhPenEspObrerosAux');
                $query = $this->ViewMrrhhPenEspObrerosAux->find();
            }else if($tipo_nomina == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find();
            }


            if($ente_adscrito != 0){
                $query = $query->where(['id_ente_adscrito' => $ente_adscrito]);
            }
            
            if($cargo != 0){
                $query = $query->where(['id_cargo' => $cargo]);
            }
            
            if($grupo != 0){
                $query = $query->where(['id_grupo' => $grupo]);
            }

            if($grado_instruccion != 0){
                $query = $query->where(['id_grado_instruccion' => $grado_instruccion]);
            }

            if($fecha_ingreso_d != 0 and $fecha_ingreso_h != 0){
                $query = $query->where(['AND' => ['fecha_ingreso_institucion >=' => $fecha_ingreso_d, 'fecha_ingreso_institucion <=' => $fecha_ingreso_h]]);
            }

            if($query->count() == 0){
                $this->Flash->error(__('No se encontraron registros'));
                return $this->redirect(['action' => 'index']);
            }else{
                $data = $this->paginate($query);
                $this->set(compact('data'));
                $this->set('n_data', $query->count());
            }
            
            $this->Flash->success(__('Datos encontrados'));
        }

        if($this->request->is('post')){
            $tipo_nomina = @$this->request->data['tipo_nomina'];

            $ente_adscrito = $this->request->data['ente_adscrito'];
            if($ente_adscrito == null or $ente_adscrito == 0 or $ente_adscrito == '' or !isset($ente_adscrito)) $ente_adscrito = 0;

            $cargo = @$this->request->data['cargo'];
            if($cargo == null or $cargo == 0 or $cargo == '' or !isset($cargo)) $cargo = 0;

            $grupo = @$this->request->data['grupo'];
            if($grupo == null or $grupo == 0 or $grupo == '' or !isset($grupo)) $grupo = 0;

            $grado_instruccion = @$this->request->data['grado_instruccion'];
            if($grado_instruccion == null or $grado_instruccion == 0 or $grado_instruccion == '' or !isset($grado_instruccion)) $grado_instruccion = 0;

            $fecha_ingreso_d = @$this->request->data['fecha_ingreso_d'];
            if($fecha_ingreso_d == null or $fecha_ingreso_d == 0 or $fecha_ingreso_d == '' or !isset($fecha_ingreso_d)) $fecha_ingreso_d = 0;

            $fecha_ingreso_h = @$this->request->data['fecha_ingreso_h'];
            if($fecha_ingreso_h == null or $fecha_ingreso_h == 0 or $fecha_ingreso_h == '' or !isset($fecha_ingreso_h)) $fecha_ingreso_h = 0;

            $funeraria = @$this->request->data['funeraria'];
            if($funeraria == null or $funeraria == 0 or $funeraria == '' or !isset($funeraria)) $funeraria = 0;
            
            $caja_ahorro = @$this->request->data['caja_ahorro'];
            if($caja_ahorro == null or $caja_ahorro == 0 or $caja_ahorro == '' or !isset($caja_ahorro)) $caja_ahorro = 0;

            $sindicato = @$this->request->data['sindicato'];
            if($sindicato == null or $sindicato == 0 or $sindicato == '' or !isset($sindicato)) $sindicato = 0;
            
            $asociacion = @$this->request->data['asociacion'];
            if($asociacion == null or $asociacion == 0 or $asociacion == '' or !isset($asociacion)) $asociacion = 0;
            
            $prima_hogar = @$this->request->data['prima_hogar'];
            if($prima_hogar == null or $prima_hogar == 0 or $prima_hogar == '' or !isset($prima_hogar)) $prima_hogar = 0;

            $inicial = @$this->request->data['inicial'];
            if($inicial == null or $inicial == 0 or $inicial == '' or !isset($inicial)) $inicial = 0;
            
            $primaria = @$this->request->data['primaria'];
            if($primaria == null or $primaria == 0 or $primaria == '' or !isset($primaria)) $primaria = 0;
            
            $secundaria = @$this->request->data['secundaria'];
            if($secundaria == null or $secundaria == 0 or $secundaria == '' or !isset($secundaria)) $secundaria = 0;
            
            $universitaria = @$this->request->data['universitaria'];
            if($universitaria == null or $universitaria == 0 or $universitaria == '' or !isset($universitaria)) $universitaria = 0;
            
            $discapacidad = @$this->request->data['discapacidad'];
            if($discapacidad == null or $discapacidad == 0 or $discapacidad == '' or !isset($discapacidad)) $discapacidad = 0;

            return $this->redirect(['action' => 'index', $tipo_nomina, $ente_adscrito, $cargo, $grupo, $grado_instruccion, $fecha_ingreso_d, $fecha_ingreso_h, $funeraria, $caja_ahorro, $sindicato, $asociacion, $prima_hogar, $inicial, $primaria, $secundaria, $universitaria, $discapacidad]); 
            
        } 
	}

    public function reporte($tipo_nomina = null, $ente_adscrito = null, $cargo = null, $grupo = null, $grado_instruccion = null, $fecha_ingreso_d = null, $fecha_ingreso_h = null, $funeraria = null, $caja_ahorro = null, $sindicato = null, $asociacion = null, $prima_hogar = null, $inicial = null, $primaria = null, $secundaria = null, $universitaria = null, $discapacidad = null){


    }
}
