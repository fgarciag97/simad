<?php
namespace App\Controller;

use App\Controller\AppController;

class MRRHHPersonalController extends AppController
{
	public function index($tp = null){

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
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        if($tp != null and $tp != ''){
            if($tp == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijos');
                $data = $this->paginate($this->ViewMrrhhEmpleadosFijos->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhEmpleadosFijos->find('all')->count());
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratados');
                $data = $this->paginate($this->ViewMrrhhEmpleadosContratados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhEmpleadosContratados->find('all')->count());
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhDirectivos');
                $data = $this->paginate($this->ViewMrrhhDirectivos->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhDirectivos->find('all')->count());
            }else if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijos');
                $data = $this->paginate($this->ViewMrrhhObrerosFijos->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhObrerosFijos->find('all')->count());
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratados');
                $data = $this->paginate($this->ViewMrrhhObrerosContratados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhObrerosContratados->find('all')->count());
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentes');
                $data = $this->paginate($this->ViewMrrhhObrerosNoPermanentes->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhObrerosNoPermanentes->find('all')->count());
            }else if($tp == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleados');
                $data = $this->paginate($this->ViewMrrhhJubiladosEmpleados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhJubiladosEmpleados->find('all')->count());
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhJubiladosObreros');
                $data = $this->paginate($this->ViewMrrhhJubiladosObreros->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhJubiladosObreros->find('all')->count());
            }else if($tp == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleados');
                $data = $this->paginate($this->ViewMrrhhPensionadosEmpleados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhPensionadosEmpleados->find('all')->count());
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleados');
                $data = $this->paginate($this->ViewMrrhhPenSobreEmpleados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhPenSobreEmpleados->find('all')->count());
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleados');
                $data = $this->paginate($this->ViewMrrhhPenEspEmpleados->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhPenEspEmpleados->find('all')->count());
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhPenSobreObreros');
                $data = $this->paginate($this->ViewMrrhhPenSobreObreros->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhPenSobreObreros->find('all')->count());
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhPenEspObreros');
                $data = $this->paginate($this->ViewMrrhhPenEspObreros->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhPenEspObreros->find('all')->count());
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivil');
                $data = $this->paginate($this->ViewMrrhhProteccionCivil->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhProteccionCivil->find('all')->count());
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhCementerio');
                $data = $this->paginate($this->ViewMrrhhCementerio->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhCementerio->find('all')->count());
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicio');
                $data = $this->paginate($this->ViewMrrhhComisionServicio->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhComisionServicio->find('all')->count());
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioP');
                $data = $this->paginate($this->ViewMrrhhHonorarioP->find('all'));
                $this->set(compact('data'));
                $this->set('n_data', $this->ViewMrrhhHonorarioP->find('all')->count());
            }
        }


        //---------------------------------------------------------------------
        // CONTADORES
        //---------------------------------------------------------------------
        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $this->set('n_empleados_fijos', $this->ViewMrrhhEmpleadosFijos->find('all')->count());

        $this->loadModel('ViewMrrhhEmpleadosContratados');
        $this->set('n_empleados_contratados', $this->ViewMrrhhEmpleadosContratados->find('all')->count());

        $this->loadModel('ViewMrrhhDirectivos');
        $this->set('n_directivos', $this->ViewMrrhhDirectivos->find('all')->count());

        $this->loadModel('ViewMrrhhObrerosFijos');
        $this->set('n_obreros_fijos', $this->ViewMrrhhObrerosFijos->find('all')->count());

        $this->loadModel('ViewMrrhhObrerosContratados');
        $this->set('n_obreros_contratados', $this->ViewMrrhhObrerosContratados->find('all')->count());

        $this->loadModel('ViewMrrhhObrerosNoPermanentes');
        $this->set('n_obreros_no_permanentes', $this->ViewMrrhhObrerosNoPermanentes->find('all')->count());

        $this->loadModel('ViewMrrhhJubiladosEmpleados');
        $this->set('n_jubilados_empleados', $this->ViewMrrhhJubiladosEmpleados->find('all')->count());

        $this->loadModel('ViewMrrhhJubiladosObreros');
        $this->set('n_jubilados_obreros', $this->ViewMrrhhJubiladosObreros->find('all')->count());

        $this->loadModel('ViewMrrhhPensionadosEmpleados');
        $this->set('n_pensionados_empleados', $this->ViewMrrhhPensionadosEmpleados->find('all')->count());

        $this->loadModel('ViewMrrhhPenSobreEmpleados');
        $this->set('n_pensionados_sobrevivientes_empleados', $this->ViewMrrhhPenSobreEmpleados->find('all')->count());

        $this->loadModel('ViewMrrhhPenEspEmpleados');
        $this->set('n_pensionados_especiales_empleados', $this->ViewMrrhhPenEspEmpleados->find('all')->count());

        $this->loadModel('ViewMrrhhPenSobreObreros');
        $this->set('n_pensionados_sobrevivientes_obreros', $this->ViewMrrhhPenSobreObreros->find('all')->count());

        $this->loadModel('ViewMrrhhPenEspObreros');
        $this->set('n_pensionados_especiales_obreros', $this->ViewMrrhhPenEspObreros->find('all')->count());

        $this->loadModel('ViewMrrhhProteccionCivil');
        $this->set('n_proteccion_civil', $this->ViewMrrhhProteccionCivil->find('all')->count());

        $this->loadModel('ViewMrrhhCementerio');
        $this->set('n_cementerio', $this->ViewMrrhhCementerio->find('all')->count());

        $this->loadModel('ViewMrrhhComisionServicio');
        $this->set('n_comision_servicio', $this->ViewMrrhhComisionServicio->find('all')->count());

        $this->loadModel('ViewMrrhhHonorarioP');
        $this->set('n_honorario_profesionales', $this->ViewMrrhhHonorarioP->find('all')->count());
    }

    //Verifica si el usuario existe, en caso de que no existe lo registra
    public function buscar(){
        //========================================================
        //Verifica si existe la cedula
        //========================================================
        $this->loadModel('MrrhhPersonal');

        if($this->request->is('post')){
            $cedula = @$this->request->data['cedula'];
            if ($cedula != null){
                $condicion = ['conditions' => ['cedula' => $cedula]];
                $n = $this->MrrhhPersonal->find('all', $condicion)->count();
                
                if ($n > 0) {
                    $this->Flash->success(__('Personal encontrado. A continuacion podrá visualizar sus datos'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }else{
                    $this->Flash->success(__('Este trabajador no se encuentra registrado. Por favor ingrese sus datos a continuacion'));
                    return $this->redirect(['action' => 'add', $cedula]);
                }
            }
        }
    }

    //Registra los datos personales de una nueva persona
    public function add($cedula = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Grados');

        $grado = $this->Grados->find('all')->toArray();
        $options = [];
        foreach ($grado as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grado', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('EnteAdscrito');

        $entes = $this->EnteAdscrito->find('all')->toArray();
        $options = [];
        foreach ($entes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('entes', $options);
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('MrrhhPersonal');
        $personal = $this->MrrhhPersonal->newEntity();
        
        if ($this->request->is('post')) {
            $personal = $this->MrrhhPersonal->patchEntity($personal, $this->request->getData());

            if ($this->MrrhhPersonal->save($personal)) {
                $this->Flash->success(__('Datos Personales Registrados'));
                return $this->redirect(['action' => 'asignar', $cedula]);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('personal'));
        $this->set('cedula', $cedula);
    }

    //Edita la informacion personal de una persona
    public function editar($cedula = null, $nominas = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        $meses = array(
            ''=>'',
            '01'=>'Enero',
            '02'=>'Febrero',
            '03'=>'Marzo',
            '04'=>'Abril',
            '05'=>'Mayo',
            '06'=>'Junio',
            '07'=>'Julio',
            '08'=>'Agosto',
            '09'=>'Septiembre',
            '10'=>'Octubre',
            '11'=>'Noviembre',
            '12'=>'Diciembre'
            ); 

        $this->set('meses', $meses);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoNomina');

        $tipo_nomina = $this->MrrhhTipoNomina->find('all')->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('GradoNivel');

        $grado_nivel = $this->GradoNivel->find('all')->toArray();
        $options = [];
        foreach ($grado_nivel as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grado_nivel', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Grados');

        $grado = $this->Grados->find('all')->toArray();
        $options = [];
        foreach ($grado as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grado', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('EnteAdscrito');

        $entes = $this->EnteAdscrito->find('all')->toArray();
        $options = [];
        foreach ($entes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('entes', $options);

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhPersonal');

        $personal = $this->MrrhhPersonal->get($cedula, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personal = $this->MrrhhPersonal->patchEntity($personal, $this->request->getData());

            if ($this->MrrhhPersonal->save($personal)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view', $cedula]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('personal'));

        if($cedula != '') $this->set("cedula", $cedula);
    }

    //Muestra toda la informacion de una persona, incluyendo las nominas en donde se encuentre
    public function view($cedula = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($cedula != ''){
            $condicion = ['cedula' => $cedula];

            $this->loadModel('ViewMrrhhPersonal');
            $personal = $this->ViewMrrhhPersonal->find('all', ['conditions' => $condicion])->last();
            $this->set('personal', $personal);

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $empleado_contratado = $this->ViewMrrhhEmpleadosContratadosAux->find('all', ['conditions' => $condicion]);
            $n = $empleado_contratado->count();
            
            if($n =! 0){
                $empleado_contratado = $empleado_contratado->last();
                $this->set('empleado_contratado', $empleado_contratado);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $empleado_fijo = $this->ViewMrrhhEmpleadosFijosAux->find('all', ['conditions' => $condicion]);
            $n = $empleado_fijo->count();
            
            if($n =! 0){
                $empleado_fijo = $empleado_fijo->last();
                $this->set('empleado_fijo', $empleado_fijo);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivo = $this->ViewMrrhhDirectivosAux->find('all', ['conditions' => $condicion]);
            $n = $directivo->count();
            
            if($n =! 0){
                $directivo = $directivo->last();
                $this->set('directivo', $directivo);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $obrero_contratado = $this->ViewMrrhhObrerosContratadosAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_contratado->count();
            
            if($n =! 0){
                $obrero_contratado = $obrero_contratado->last();
                $this->set('obrero_contratado', $obrero_contratado);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $obrero_fijo = $this->ViewMrrhhObrerosFijosAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_fijo->count();
            
            if($n =! 0){
                $obrero_fijo = $obrero_fijo->last();
                $this->set('obrero_fijo', $obrero_fijo);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
            $obrero_no_permanente = $this->ViewMrrhhObrerosNoPermanentesAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_no_permanente->count();
            
            if($n =! 0){
                $obrero_no_permanente = $obrero_no_permanente->last();
                $this->set('obrero_no_permanente', $obrero_no_permanente);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
            $pensionados_especiales_empleados = $this->ViewMrrhhPenEspEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_especiales_empleados->count();
            
            if($n =! 0){
                $pensionados_especiales_empleados = $pensionados_especiales_empleados->last();
                $this->set('pensionados_especiales_empleados', $pensionados_especiales_empleados);
            }

            //-----------------------------------------------------------------------

             $this->loadModel('ViewMrrhhPenEspObrerosAux');
            $pensionados_especiales_obreros = $this->ViewMrrhhPenEspObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_especiales_obreros->count();
            
            if($n =! 0){
                $pensionados_especiales_obreros = $pensionados_especiales_obreros->last();
                $this->set('pensionados_especiales_obreros', $pensionados_especiales_obreros);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
            $pensionados_sobrevivientes_empleados = $this->ViewMrrhhPenSobreEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_sobrevivientes_empleados->count();
            
            if($n =! 0){
                $pensionados_sobrevivientes_empleados = $pensionados_sobrevivientes_empleados->last();
                $this->set('pensionados_sobrevivientes_empleados', $pensionados_sobrevivientes_empleados);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenSobreObrerosAux');
            $pensionados_sobrevivientes_obreros = $this->ViewMrrhhPenSobreObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_sobrevivientes_obreros->count();
            
            if($n =! 0){
                $pensionados_sobrevivientes_obreros = $pensionados_sobrevivientes_obreros->last();
                $this->set('pensionados_sobrevivientes_obreros', $pensionados_sobrevivientes_obreros);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
            $pensionado_empleado = $this->ViewMrrhhPensionadosEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionado_empleado->count();
            
            if($n =! 0){
                $pensionado_empleado = $pensionado_empleado->last();
                $this->set('pensionado_empleado', $pensionado_empleado);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
            $jubilado_empleado = $this->ViewMrrhhJubiladosEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $jubilado_empleado->count();
            
            if($n =! 0){
                $jubilado_empleado = $jubilado_empleado->last();
                $this->set('jubilado_empleado', $jubilado_empleado);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhJubiladosObrerosAux');
            $jubilado_obrero = $this->ViewMrrhhJubiladosObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $jubilado_obrero->count();
            
            if($n =! 0){
                $jubilado_obrero = $jubilado_obrero->last();
                $this->set('jubilado_obrero', $jubilado_obrero);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhProteccionCivilAux');
            $proteccion_civil = $this->ViewMrrhhProteccionCivilAux->find('all', ['conditions' => $condicion]);
            $n = $proteccion_civil->count();
            
            if($n =! 0){
                $proteccion_civil = $proteccion_civil->last();
                $this->set('proteccion_civil', $proteccion_civil);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhCementerioAux');
            $cementerio = $this->ViewMrrhhCementerioAux->find('all', ['conditions' => $condicion]);
            $n = $cementerio->count();
            
            if($n =! 0){
                $cementerio = $cementerio->last();
                $this->set('cementerio', $cementerio);
            }


            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhComisionServicioAux');
            $comision_servicio = $this->ViewMrrhhComisionServicioAux->find('all', ['conditions' => $condicion]);
            $n = $comision_servicio->count();
            
            if($n =! 0){
                $comision_servicio = $comision_servicio->last();
                $this->set('comision_servicio', $comision_servicio);
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhHonorarioPAux');
            $honorario_profesionales = $this->ViewMrrhhHonorarioPAux->find('all', ['conditions' => $condicion]);
            $n = $honorario_profesionales->count();
            
            if($n =! 0){
                $honorario_profesionales = $honorario_profesionales->last();
                $this->set('honorario_profesionales', $honorario_profesionales);
            }

        }
    }

   public function constancia($cedula = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($cedula != ''){
            $condicion = ['cedula' => $cedula];

            $this->loadModel('ViewMrrhhPersonal');
            $personal = $this->ViewMrrhhPersonal->find('all', ['conditions' => $condicion])->last();
            $this->set('personal', $personal);

            $nominas = [];

            //==================================================================================

            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $empleado_contratado = $this->ViewMrrhhEmpleadosContratadosAux->find('all', ['conditions' => $condicion]);
            $n = $empleado_contratado->count();
            
            if($n =! 0){
                $empleado_contratado = $empleado_contratado->last();
            }else{
                $empleado_contratado = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $empleado_fijo = $this->ViewMrrhhEmpleadosFijosAux->find('all', ['conditions' => $condicion]);
            $n = $empleado_fijo->count();
            
            if($n =! 0){
                $empleado_fijo = $empleado_fijo->last();
            }else{
                $empleado_fijo = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivo = $this->ViewMrrhhDirectivosAux->find('all', ['conditions' => $condicion]);
            $n = $directivo->count();
            
            if($n =! 0){
                $directivo = $directivo->last();
            }else{
                $directivo = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $obrero_contratado = $this->ViewMrrhhObrerosContratadosAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_contratado->count();
            
            if($n =! 0){
                $obrero_contratado = $obrero_contratado->last();
            }else{
                $obrero_contratado = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $obrero_fijo = $this->ViewMrrhhObrerosFijosAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_fijo->count();
            
            if($n =! 0){
                $obrero_fijo = $obrero_fijo->last();
            }else{
                $obrero_fijo = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
            $obrero_no_permanente = $this->ViewMrrhhObrerosNoPermanentesAux->find('all', ['conditions' => $condicion]);
            $n = $obrero_no_permanente->count();
            
            if($n =! 0){
                $obrero_no_permanente = $obrero_no_permanente->last();
            }else{
                $obrero_no_permanente = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
            $pensionados_especiales_empleados = $this->ViewMrrhhPenEspEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_especiales_empleados->count();
            
            if($n =! 0){
                $pensionados_especiales_empleados = $pensionados_especiales_empleados->last();
            }else{
                $pensionados_especiales_empleados = null;
            }

            //-----------------------------------------------------------------------

             $this->loadModel('ViewMrrhhPenEspObrerosAux');
            $pensionados_especiales_obreros = $this->ViewMrrhhPenEspObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_especiales_obreros->count();
            
            if($n =! 0){
                $pensionados_especiales_obreros = $pensionados_especiales_obreros->last();
            }else{
                $pensionados_especiales_obreros = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
            $pensionados_sobrevivientes_empleados = $this->ViewMrrhhPenSobreEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_sobrevivientes_empleados->count();
            
            if($n =! 0){
                $pensionados_sobrevivientes_empleados = $pensionados_sobrevivientes_empleados->last();
            }else{
                $pensionados_sobrevivientes_empleados = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPenSobreObrerosAux');
            $pensionados_sobrevivientes_obreros = $this->ViewMrrhhPenSobreObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionados_sobrevivientes_obreros->count();
            
            if($n =! 0){
                $pensionados_sobrevivientes_obreros = $pensionados_sobrevivientes_obreros->last();
            }else{
                $pensionados_sobrevivientes_obreros = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
            $pensionado_empleado = $this->ViewMrrhhPensionadosEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $pensionado_empleado->count();
            
            if($n =! 0){
                $pensionado_empleado = $pensionado_empleado->last();
            }else{
                $pensionado_empleado = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
            $jubilado_empleado = $this->ViewMrrhhJubiladosEmpleadosAux->find('all', ['conditions' => $condicion]);
            $n = $jubilado_empleado->count();
            
            if($n =! 0){
                $jubilado_empleado = $jubilado_empleado->last();
            }else{
                $jubilado_empleado = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhJubiladosObrerosAux');
            $jubilado_obrero = $this->ViewMrrhhJubiladosObrerosAux->find('all', ['conditions' => $condicion]);
            $n = $jubilado_obrero->count();
            
            if($n =! 0){
                $jubilado_obrero = $jubilado_obrero->last();
            }else{
                $jubilado_obrero = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhProteccionCivilAux');
            $proteccion_civil = $this->ViewMrrhhProteccionCivilAux->find('all', ['conditions' => $condicion]);
            $n = $proteccion_civil->count();
            
            if($n =! 0){
                $proteccion_civil = $proteccion_civil->last();
            }else{
                $proteccion_civil = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhCementerioAux');
            $cementerio = $this->ViewMrrhhCementerioAux->find('all', ['conditions' => $condicion]);
            $n = $cementerio->count();
            
            if($n =! 0){
                $cementerio = $cementerio->last();
            }else{
                $cementerio = null;
            }


            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhComisionServicioAux');
            $comision_servicio = $this->ViewMrrhhComisionServicioAux->find('all', ['conditions' => $condicion]);
            $n = $comision_servicio->count();
            
            if($n =! 0){
                $comision_servicio = $comision_servicio->last();
            }else{
                $comision_servicio = null;
            }

            //-----------------------------------------------------------------------

            $this->loadModel('ViewMrrhhHonorarioPAux');
            $honorario_profesionales = $this->ViewMrrhhHonorarioPAux->find('all', ['conditions' => $condicion]);
            $n = $honorario_profesionales->count();
            
            if($n =! 0){
                $honorario_profesionales = $honorario_profesionales->last();
            }else{
                $honorario_profesionales = null;
            }
        }


        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',170,8,25,20,"JPG","");

        //ENCABEZADO 

        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetX(90);
        $pdf -> Cell(30,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(30,5,ENTIDAD_FEDERAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(30,5,'SANTA ANA DE CORO - EDO. FALCON',0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(30,5,'OFICINA DE ADMINISTRACION DE TALENTO HUMANO',0,1,'C');

        $pdf -> ln();
        $pdf -> ln();

        //CUERPO DE CONSTANCIA

        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(90);
        $pdf -> Cell(30,5,'CONSTANCIA',0,1,'C');

        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','I',10);

        $pdf -> SetX(20);
        $pdf->MultiCell(170,7,'         Quien Suscribe, MsC Yoel Antonio Sanchez, en mi condicion de jefe de la Oficina de Administracion de Talento Humano de la '.ENTIDAD_FEDERAL.' del Estado Falcon, por medio del presente hago constar que:',0,'J',0);

        $pdf -> ln();

        $pdf -> SetFont('Arial','I',10);

        $pdf -> SetX(20);
        $pdf->MultiCell(170,7,'         El Ciudadano'.' '.$personal['nombres'].' '.$personal['apellidos'].'  '.'Titular de la Cedula de Identidad Nro:'.'  '.'V-'.$personal['cedula'].'  '.'presta sus servicios en esta Alcaldia Bolivariana desempenandose como'.'  '.$personal['cargo'].'  '.' Adscrito a la '.MUNICIPIO.' , desde el '. $this->fecha($personal['fecha_ingreso_institucion']) .' hasta la presente fecha devengando una remuneracion mensual que corresponde a los siguientes conceptos:',0,'J',0);

        $pdf -> ln();
        $pdf -> ln();

        // CALCULOS DE TABLA DE ASIGNACIONES 

        if ($personal['sueldo'] != 0) $sueldo_base = $personal['sueldo']; else $sueldo_base = $personal['sueldo_base'];

        if($personal['cantidad_beca_discapacidad'] !=0) $discapacidad = (62500 * $personal['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($personal['cantidad_beca_universitaria'] !=0) $universitaria = (62500 * $personal['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($personal['cantidad_beca_secundaria'] !=0) $secundaria = (62500 * $personal['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($personal['cantidad_beca_primaria'] !=0) $primaria = (62500 * $personal['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($personal['cantidad_beca_inicial'] !=0) $inicial = (62500 * $personal['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

        $pdf -> SetX(70);
        $pdf -> Cell(40,5,'Sueldo Mensual',1,0,'L');
        $pdf -> Cell(30,5,$sueldo_base,1,1,'R');

        if ($personal['grado'] != 'BACHILLER') {
            $pdf -> SetX(70);
            $pdf -> Cell(40,5,'Prima Profesion',1,0,'L');
            $pdf -> Cell(30,5,'0.00',1,1,'R');
        }else if ($personal['ano_servicio'] !=0){
            $pdf -> SetX(70);
            $pdf -> Cell(40,5,$personal['prima_antiguedad'],1,0,'L');
            $pdf -> Cell(30,5,'0.00',1,1,'R');    
        }else if($personal['prima_hogar'] != 0){
            $pdf -> SetX(70);
            $pdf -> Cell(40,5,'Prima Hogar',1,0,'L');
            $pdf -> Cell(30,5,'0.00',1,1,'R');    
        }else if ($personal['hijos'] != 0) {
            $pdf -> SetX(70);
            $pdf -> Cell(40,5,'Prima Hijos',1,0,'L');
            $pdf -> Cell(30,5,'0.00',1,1,'R');
        }else if ($Bescas != 0){
            $pdf -> SetX(70);
            $pdf -> Cell(40,5,'Bescas Ecolares',1,0,'L');
            $pdf -> Cell(30,5,'0.00',1,1,'R');    
        }
        
        
        $pdf -> SetFont('Arial','B',10);
        $pdf -> SetX(70);
        $pdf -> Cell(40,5,'Total Mensual',1,0,'L');
        $pdf -> Cell(30,5,'0.00',1,1,'R');

        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','I',10);

        $pdf -> SetX(20);
        $pdf->MultiCell(170,7,'         Constancia que se expide a solicitud de la parte interesada en la Ciudad de Santa Ana de Coro, a los'.' '.'('.date('d').')'.' dias del Mes de'.' '.date('m').' del'.'  '.'20'.date('y').':',0,'J',0);


        // FIRMA DEL JEFE DE TALENTO HUMANO 

        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','B',10);
        $pdf -> SetX(85);
        $pdf -> Cell(40,5,'Atentamente',0,1,'C');

        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',10);
        $pdf -> SetX(85);
        $pdf -> Cell(40,5,'____________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(85);
        $pdf -> Cell(40,5,'MsC Yoel Antonio Sanchez',0,1,'C');
        $pdf -> SetX(85);
        $pdf -> Cell(40,5,'Jefe de la Oficina de Administracion de Talento Humano',0,1,'C');


        //PIE DE PAGINA 

        $pdf -> ln();$pdf -> ln();$pdf -> ln();
        $pdf -> ln();$pdf -> ln();$pdf -> ln();

        $pdf -> SetFont('Arial','I',7);



        //==========================================================================================================
        //==========================================================================================================
        $pdf -> AddPage();

        if($empleado_contratado != null){
            // imprime la tabla con $empleado_contratado['nombre_campo']
        }

        if($empleado_fijo != null){
            // imprime la tabla con $empleado_fijo['nombre_campo']
        }

        if($directivo != null){
            // imprime la tabla con $directivo['nombre_campo']
        }

        if($obrero_contratado != null){
            // imprime la tabla con $obrero_contratado['nombre_campo']
        }

        if($obrero_fijo != null){
            // imprime la tabla con $obrero_fijo['nombre_campo']
        }

        if($obrero_no_permanente != null){
            // imprime la tabla con $obrero_no_permanente['nombre_campo']
        }

        if($pensionados_especiales_empleados != null){
            // imprime la tabla con $pensionados_especiales_empleados['nombre_campo']
        }

        if($pensionados_especiales_obreros != null){
            // imprime la tabla con $pensionados_especiales_obreros['nombre_campo']
        }

        if($pensionados_sobrevivientes_empleados != null){
            // imprime la tabla con $pensionados_sobrevivientes_empleados['nombre_campo']
        }

        if($pensionados_sobrevivientes_obreros != null){
            // imprime la tabla con $pensionados_sobrevivientes_obreros['nombre_campo']
        }

        if($pensionado_empleado != null){
            // imprime la tabla con $pensionado_empleado['nombre_campo']
        }

        if($jubilado_empleado != null){
            // imprime la tabla con $jubilado_empleado['nombre_campo']
        }

        if($jubilado_obrero != null){
            // imprime la tabla con $jubilado_obrero['nombre_campo']
        }

        if($proteccion_civil != null){
            // imprime la tabla con $proteccion_civil['nombre_campo']
        }

        if($cementerio != null){
            // imprime la tabla con $cementerio['nombre_campo']
        }

        if($comision_servicio != null){
            // imprime la tabla con $comision_servicio['nombre_campo']
        }

        if($honorario_profesionales != null){
            // imprime la tabla con $honorario_profesionales['nombre_campo']
        }

        //==========================================================================================================
        //==========================================================================================================

        $pdf -> Output();
    }

    //Asigna una nomina a una persona en especifico
    public function asignar($cedula = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        $this->loadModel('MrrhhHistorial');
        $this->set('existencia', $this->MrrhhHistorial->find('all')->where(['cedula' => $cedula])->toArray());

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoNomina');

        $tipo_nomina = $this->MrrhhTipoNomina->find('all')->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('GradoNivel');

        $grado_nivel = $this->GradoNivel->find('all')->toArray();
        $options = [];
        foreach ($grado_nivel as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grado_nivel', $options);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        
        if ($this->request->is('post')) {
           
            $tp = $this->request->data['tipo_personal'];

            if($tp == 1){

                $this->loadModel('MrrhhEmpleadosFijos');
                $personal = $this->MrrhhEmpleadosFijos->newEntity();
                $personal = $this->MrrhhEmpleadosFijos->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhEmpleadosFijos->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------

            }else if($tp == 2){
                $this->loadModel('MrrhhEmpleadosContratados');
                $personal = $this->MrrhhEmpleadosContratados->newEntity();
                $personal = $this->MrrhhEmpleadosContratados->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhEmpleadosContratados->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
               $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
                
            }else if($tp == 3){
                $this->loadModel('MrrhhDirectivos');
                $personal = $this->MrrhhDirectivos->newEntity();
                $personal = $this->MrrhhDirectivos->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhDirectivos->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 4){
                $this->loadModel('MrrhhObrerosFijos');
                $personal = $this->MrrhhObrerosFijos->newEntity();
                $personal = $this->MrrhhObrerosFijos->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhObrerosFijos->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
                
            }else if($tp == 5){
                $this->loadModel('MrrhhObrerosContratados');
                $personal = $this->MrrhhObrerosContratados->newEntity();
                $personal = $this->MrrhhObrerosContratados->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhObrerosContratados->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 6){
                $this->loadModel('MrrhhObrerosNoPermanentes');
                $personal = $this->MrrhhObrerosNoPermanentes->newEntity();
                $personal = $this->MrrhhObrerosNoPermanentes->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhObrerosNoPermanentes->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 7){
                $this->loadModel('MrrhhJubiladosEmpleados');
                $personal = $this->MrrhhJubiladosEmpleados->newEntity();
                $personal = $this->MrrhhJubiladosEmpleados->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhJubiladosEmpleados->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 8){
                $this->loadModel('MrrhhJubiladosObreros');
                $personal = $this->MrrhhJubiladosObreros->newEntity();
                $personal = $this->MrrhhJubiladosObreros->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhJubiladosObreros->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 9){
                $this->loadModel('MrrhhPensionadosEmpleados');
                $personal = $this->MrrhhPensionadosEmpleados->newEntity();
                $personal = $this->MrrhhPensionadosEmpleados->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhPensionadosEmpleados->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 10){
                $this->loadModel('MrrhhPensionadosSobrevivientesE');
                $personal = $this->MrrhhPensionadosSobrevivientesE->newEntity();
                $personal = $this->MrrhhPensionadosSobrevivientesE->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhPensionadosSobrevivientesE->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 11){
                $this->loadModel('MrrhhPensionadosEspecialesEmpleados');
                $personal = $this->MrrhhPensionadosEspecialesEmpleados->newEntity();
                $personal = $this->MrrhhPensionadosEspecialesEmpleados->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhPensionadosEspecialesEmpleados->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 12){
                $this->loadModel('MrrhhPensionadosSobrevivientesO');
                $personal = $this->MrrhhPensionadosSobrevivientesO->newEntity();
                $personal = $this->MrrhhPensionadosSobrevivientesO->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhPensionadosSobrevivientesO->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 13){
                $this->loadModel('MrrhhPensionadosEspecialesObreros');
                $personal = $this->MrrhhPensionadosEspecialesObreros->newEntity();
                $personal = $this->MrrhhPensionadosEspecialesObreros->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhPensionadosEspecialesObreros->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            
            //-----------------------------------------------------------------------

            }else if($tp == 14){
                $this->loadModel('MrrhhProteccionCivil');
                $personal = $this->MrrhhProteccionCivil->newEntity();
                $personal = $this->MrrhhProteccionCivil->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhProteccionCivil->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            //-----------------------------------------------------------------------
            }else if($tp == 15){
                $this->loadModel('MrrhhCementerio');
                $personal = $this->MrrhhCementerio->newEntity();
                $personal = $this->MrrhhCementerio->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhCementerio->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            //-----------------------------------------------------------------------
            }else if($tp == 16){
                $this->loadModel('MrrhhComisionServicio');
                $personal = $this->MrrhhComisionServicio->newEntity();
                $personal = $this->MrrhhComisionServicio->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhComisionServicio->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            //-----------------------------------------------------------------------
            }else if($tp == 17){
                $this->loadModel('MrrhhHonorarioProfesionales');
                $personal = $this->MrrhhHonorarioProfesionales->newEntity();
                $personal = $this->MrrhhHonorarioProfesionales->patchEntity($personal, $this->request->getData());
                $personal->cedula = $cedula; 

                if ($this->MrrhhHonorarioProfesionales->save($personal)) {
                    $this->Flash->success(__('Personal Registrado'));
                    return $this->redirect(['action' => 'view', $cedula]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            //-----------------------------------------------------------------------
            }else{
                $this->Flash->error(__('Error. Intente de nuevo'));
            }

            //-----------------------------------------------------------------------

            
            return $this->redirect(['action' => 'view', $cedula]);
        
        }
        @$this->set(compact('personal'));
        $this->set('cedula', $cedula);
    }

    //Elimina todos los cargos asignados a una persona
     public function desasignar($cedula = null, $tp = null)
    {
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['cedula' => $cedula];

        //-----------------------------------------------------------------------

        if($tp != '' and $tp != null){
            if($tp == 1){
                $this->loadModel('MrrhhEmpleadosFijos');
                $n = $this->MrrhhEmpleadosFijos->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                    $historial = $this->ViewMrrhhEmpleadosFijosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "EMPLEADOS";
                    $historial_save->tipo_personal = "EMPLEADOS FIJOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhEmpleadosFijos = $this->MrrhhEmpleadosFijos->get($cedula);
                    $this->MrrhhEmpleadosFijos->delete($MrrhhEmpleadosFijos);
                }
            }else if($tp == 2){

                $this->loadModel('MrrhhEmpleadosContratados');
                $n = $this->MrrhhEmpleadosContratados->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                    $historial = $this->ViewMrrhhEmpleadosContratadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "EMPLEADOS";
                    $historial_save->tipo_personal = "EMPLEADOS CONTRATADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhEmpleadosContratados = $this->MrrhhEmpleadosContratados->get($cedula);
                    $this->MrrhhEmpleadosContratados->delete($MrrhhEmpleadosContratados);
                }
            }else if($tp == 3){
                $this->loadModel('MrrhhDirectivos');
                $n = $this->MrrhhDirectivos->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhDirectivosAux');
                    $historial = $this->ViewMrrhhDirectivosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "EMPLEADOS";
                    $historial_save->tipo_personal = "DIRECTIVOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhDirectivos = $this->MrrhhDirectivos->get($cedula);
                    $this->MrrhhDirectivos->delete($MrrhhDirectivos);
                }
            }else if($tp == 4){
                $this->loadModel('MrrhhObrerosFijos');
                $n = $this->MrrhhObrerosFijos->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhObrerosFijosAux');
                    $historial = $this->ViewMrrhhObrerosFijosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "OBREROS";
                    $historial_save->tipo_personal = "FIJOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhObrerosFijos = $this->MrrhhObrerosFijos->get($cedula);
                    $this->MrrhhObrerosFijos->delete($MrrhhObrerosFijos);
                }
            }else if($tp == 5){
                $this->loadModel('MrrhhObrerosContratados');
                $n = $this->MrrhhObrerosContratados->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhObrerosContratadosAux');
                    $historial = $this->ViewMrrhhObrerosContratadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "OBREROS";
                    $historial_save->tipo_personal = "CONTRATADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhObrerosContratados = $this->MrrhhObrerosContratados->get($cedula);
                    $this->MrrhhObrerosContratados->delete($MrrhhObrerosContratados);
                }
            }else if($tp == 6){
                $this->loadModel('MrrhhObrerosNoPermanentes');
                $n = $this->MrrhhObrerosNoPermanentes->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                    $historial = $this->ViewMrrhhObrerosNoPermanentesAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "OBREROS";
                    $historial_save->tipo_personal = "NO PERMANENTES";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhObrerosNoPermanentes = $this->MrrhhObrerosNoPermanentes->get($cedula);
                    $this->MrrhhObrerosNoPermanentes->delete($MrrhhObrerosNoPermanentes);
                }
            }else if($tp == 7){
                $this->loadModel('MrrhhJubiladosEmpleados');
                $n = $this->MrrhhJubiladosEmpleados->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                    $historial = $this->ViewMrrhhJubiladosEmpleadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "JUBILADOS";
                    $historial_save->tipo_personal = "EMPLEADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhJubiladosEmpleados = $this->MrrhhJubiladosEmpleados->get($cedula);
                    $this->MrrhhJubiladosEmpleados->delete($MrrhhJubiladosEmpleados);
                }
            }else if($tp == 8){
                $this->loadModel('MrrhhJubiladosObreros');
                $n = $this->MrrhhJubiladosObreros->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                    $historial = $this->ViewMrrhhJubiladosObrerosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "JUBILADOS";
                    $historial_save->tipo_personal = "OBREROS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhJubiladosObreros = $this->MrrhhJubiladosObreros->get($cedula);
                    $this->MrrhhJubiladosObreros->delete($MrrhhJubiladosObreros);
                }
            }else if($tp == 9){
                $this->loadModel('MrrhhPensionadosEmpleados');
                $n = $this->MrrhhPensionadosEmpleados->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                    $historial = $this->ViewMrrhhPensionadosEmpleadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "PENSIONADOS";
                    $historial_save->tipo_personal = "EMPLEADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhPensionadosEmpleados = $this->MrrhhPensionadosEmpleados->get($cedula);
                    $this->MrrhhPensionadosEmpleados->delete($MrrhhPensionadosEmpleados);
                }
            }else if($tp == 10){
                $this->loadModel('MrrhhPensionadosSobrevivientesE');
                $n = $this->MrrhhPensionadosSobrevivientesE->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                    $historial = $this->ViewMrrhhPenSobreEmpleadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "PENSIONADOS";
                    $historial_save->tipo_personal = "SOBREVIVIENTES EMPLEADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhPensionadosSobrevivientesEmpleados = $this->MrrhhPensionadosSobrevivientesE->get($cedula);
                    $this->MrrhhPensionadosSobrevivientesE->delete($MrrhhPensionadosSobrevivientesEmpleados);
                }
            }else if($tp == 11){
                $this->loadModel('MrrhhPensionadosEspecialesEmpleados');
                $n = $this->MrrhhPensionadosEspecialesEmpleados->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                    $historial = $this->ViewMrrhhPenEspEmpleadosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "PENSIONADOS";
                    $historial_save->tipo_personal = "ESPECIALES EMPLEADOS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhPensionadosEspecialesEmpleados = $this->MrrhhPensionadosEspecialesEmpleados->get($cedula);
                    $this->MrrhhPensionadosEspecialesEmpleados->delete($MrrhhPensionadosEspecialesEmpleados);
                }
            }else if($tp == 12){
                $this->loadModel('MrrhhPensionadosSobrevivientesO');
                $n = $this->MrrhhPensionadosSobrevivientesO->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                    $historial = $this->ViewMrrhhPenSobreObrerosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "PENSIONADOS";
                    $historial_save->tipo_personal = "SOBREVIVIENTES OBREROS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhPensionadosSobrevivientesObreros = $this->MrrhhPensionadosSobrevivientesO->get($cedula);
                    $this->MrrhhPensionadosSobrevivientesO->delete($MrrhhPensionadosSobrevivientesObreros);
                }
            }else if($tp == 13){
                $this->loadModel('MrrhhPensionadosEspecialesObreros');
                $n = $this->MrrhhPensionadosEspecialesObreros->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhPenEspObrerosAux');
                    $historial = $this->ViewMrrhhPenEspObrerosAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "PENSIONADOS";
                    $historial_save->tipo_personal = "ESPECIALES OBREROS";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhPensionadosEspecialesObreros = $this->MrrhhPensionadosEspecialesObreros->get($cedula);
                    $this->MrrhhPensionadosEspecialesObreros->delete($MrrhhPensionadosEspecialesObreros);
                }
            }else if($tp == 14){
                $this->loadModel('MrrhhProteccionCivil');
                $n = $this->MrrhhProteccionCivil->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhProteccionCivilAux');
                    $historial = $this->ViewMrrhhProteccionCivilAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "ESPECIAL";
                    $historial_save->tipo_personal = "PROTECCION CIVIL";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhProteccionCivil = $this->MrrhhProteccionCivil->get($cedula);
                    $this->MrrhhProteccionCivil->delete($MrrhhProteccionCivil);
                }
            }else if($tp == 15){
                $this->loadModel('MrrhhCementerio');
                $n = $this->MrrhhCementerio->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhCementerioAux');
                    $historial = $this->ViewMrrhhCementerioAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "ESPECIAL";
                    $historial_save->tipo_personal = "CEMENTERIO";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhCementerio = $this->MrrhhCementerio->get($cedula);
                    $this->MrrhhCementerio->delete($MrrhhCementerio);
                }
            }else if($tp == 16){
                $this->loadModel('MrrhhComisionServicio');
                $n = $this->MrrhhComisionServicio->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhComisionServicioAux');
                    $historial = $this->ViewMrrhhComisionServicioAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "ESPECIAL";
                    $historial_save->tipo_personal = "COMISION ESPECIAL";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhComisionServicio = $this->MrrhhComisionServicio->get($cedula);
                    $this->MrrhhComisionServicio->delete($MrrhhComisionServicio);
                }
            }else if($tp == 17){
                $this->loadModel('MrrhhHonorarioProfesionales');
                $n = $this->MrrhhHonorarioProfesionales->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $this->loadModel('ViewMrrhhHonorarioPAux');
                    $historial = $this->ViewMrrhhHonorarioPAux->find('All', ['conditions' => $condicion])->last();

                    $this->loadModel('MrrhhHistorial');
                    $historial_save = $this->MrrhhHistorial->newEntity();
                    $historial_save->cedula = $cedula;
                    $historial_save->tipo_nomina = "ESPECIAL";
                    $historial_save->tipo_personal = "HONORARIOS PROFESIONALES";
                    $historial_save->cargo = $historial['cargo'];
                    $historial_save->banco = $historial['banco'];
                    $historial_save->grupo = $historial['grupo'];
                    $historial_save->numero_cuenta = $historial['numero_cuenta'];
                    $this->MrrhhHistorial->save($historial_save);

                    $MrrhhHonorarioProfesionales = $this->MrrhhHonorarioProfesionales->get($cedula);
                    $this->MrrhhHonorarioProfesionales->delete($MrrhhHonorarioProfesionales);
                }
            }
        }
        //-----------------------------------------------------------------------

        return $this->redirect(['action' => 'view', $cedula]);
    }

    //Edita la Asignacion una nomina a una persona en especifico
    public function ednomina($cedula = '', $tn = '', $tp = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoNomina');

        $tipo_nomina = $this->MrrhhTipoNomina->find('all')->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_personal = $this->MrrhhTipoPersonal->find('all', ['conditions' => ['tipo_nomina' => $tn]])->toArray();
        $options = [];
        foreach ($tipo_personal as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_personal', $options);


        //========================================================
        //Carga del Select de cargos
        //========================================================
        if($tp == 1){
            $this->loadModel('MrrhhCargosEmpleadosFijos');
            $query = $this->MrrhhCargosEmpleadosFijos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 2){
            $this->loadModel('MrrhhCargosEmpleadosContratados');
            $query = $this->MrrhhCargosEmpleadosContratados->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 3 or $tp == 16 or $tp == 17){
            $this->loadModel('MrrhhCargosDirectivos');
            $query = $this->MrrhhCargosDirectivos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 4 or $tp == 15){
            $this->loadModel('MrrhhCargosObrerosFijos');
            $query = $this->MrrhhCargosObrerosFijos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 5){
            $this->loadModel('MrrhhCargosObrerosContratados');
            $query = $this->MrrhhCargosObrerosContratados->find('all', ['order' => 'denominacion'])->toArray();
            
        }else if($tp == 6){
            $this->loadModel('MrrhhCargosObrerosNoPermanentes');
            $query = $this->MrrhhCargosObrerosNoPermanentes->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 7  or $tp == 8){
            $this->loadModel('MrrhhCargosJubilados');
            $query = $this->MrrhhCargosJubilados->find('all', ['order' => 'denominacion'])->toArray();
        }else if($tp == 14){
            $this->loadModel('MrrhhCargosProteccionCivil');
            $query = $this->MrrhhCargosProteccionCivil->find('all', ['order' => 'denominacion'])->toArray();
        }else{
            $this->loadModel('MrrhhCargosPensionados');
            $query = $this->MrrhhCargosPensionados->find('all', ['order' => 'denominacion'])->toArray();
        }
        $options = [];
        foreach ($query as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('cargos', $options);

        //========================================================
        //Carga del Select de grupo
        //========================================================
        if($tp == 1 or $tp == 2 or $tp == 7 or $tp == 9 or $tp == 10 or $tp == 11){
            $this->loadModel('MrrhhGruposEmpleados');
            $query = $this->MrrhhGruposEmpleados->find('all')->toArray();
            
        }else if($tp == 3 or $tp == 16 or $tp == 17){
            $this->loadModel('MrrhhGruposDirectivos');
            $query = $this->MrrhhGruposDirectivos->find('all')->toArray();

        }else if($tp == 4 or $tp == 5 or $tp == 8 or $tp == 12 or $tp == 13 or $tp == 15){
            $this->loadModel('MrrhhGruposObreros');
            $query = $this->MrrhhGruposObreros->find('all')->toArray();
            
        }else if($tp == 6){
            $this->loadModel('MrrhhGruposObrerosNoPermanentes');
            $query = $this->MrrhhGruposObrerosNoPermanentes->find('all')->toArray();
            
        }else if($tp == 14){
            $this->loadModel('MrrhhGruposProteccionCivil');
            $query = $this->MrrhhGruposProteccionCivil->find('all')->toArray();
        }
        $options = [];
        foreach ($query as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grupos', $options);


        //========================================================
        //Carga del Select Grado Nivel
        //========================================================
        if($tp == 1 or $tp == 2 or $tp == 3 or $tp == 7 or $tp == 9 or $tp == 10 or $tp == 11 or $tp == 16 or $tp == 17){
            $this->loadModel('GradoNivel');
            $query = $this->GradoNivel->find('all')->toArray();
            
        }else if($tp == 4 or $tp == 5 or $tp == 6 or $tp == 8 or $tp == 12 or $tp == 13 or $tp == 15){
            $this->loadModel('GradoNivelObreros');
            $query = $this->GradoNivelObreros->find('all')->toArray();
            
        }else if($tp == 14){
            $this->loadModel('GradoNivelProteccionCivil');
            $query = $this->GradoNivelProteccionCivil->find('all')->toArray();
        }
        $options = [];
        foreach ($query as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('niveles', $options);


        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('GradoNivel');

        $grado_nivel = $this->GradoNivel->find('all')->toArray();
        $options = [];
        foreach ($grado_nivel as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grado_nivel', $options);

        //========================================================
        //Almacena los datos ingresados
        //========================================================

        if(@$this->request->data['tipo_nomina_nuevo'] != '' and @$this->request->data['tipo_personal_nuevo'] != ''){

            if($tp == 1){

                $this->loadModel('MrrhhEmpleadosFijos');

                $personal = $this->MrrhhEmpleadosFijos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhEmpleadosFijos->patchEntity($personal, $this->request->getData());
                    $this->MrrhhEmpleadosFijos->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhEmpleadosFijos->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhEmpleadosFijos->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------

            }else if($tp == 2){

                $this->loadModel('MrrhhEmpleadosContratados');

                $personal = $this->MrrhhEmpleadosContratados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhEmpleadosContratados->patchEntity($personal, $this->request->getData());
                    $this->MrrhhEmpleadosContratados->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhEmpleadosContratados->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhEmpleadosContratados->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
                
            }else if($tp == 3){
                $this->loadModel('MrrhhDirectivos');

                $personal = $this->MrrhhDirectivos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhDirectivos->patchEntity($personal, $this->request->getData());
                    $this->MrrhhDirectivos->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhDirectivos->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhDirectivos->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 4){
                $this->loadModel('MrrhhObrerosFijos');

                $personal = $this->MrrhhObrerosFijos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosFijos->patchEntity($personal, $this->request->getData());
                    $this->MrrhhObrerosFijos->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhObrerosFijos->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhObrerosFijos->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
                
            }else if($tp == 5){
                $this->loadModel('MrrhhObrerosContratados');

                $personal = $this->MrrhhObrerosContratados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosContratados->patchEntity($personal, $this->request->getData());
                    $this->MrrhhObrerosContratados->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhObrerosContratados->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhObrerosContratados->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 6){
                $this->loadModel('MrrhhObrerosNoPermanentes');

                $personal = $this->MrrhhObrerosNoPermanentes->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosNoPermanentes->patchEntity($personal, $this->request->getData());
                    $this->MrrhhObrerosNoPermanentes->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhObrerosNoPermanentes->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhObrerosNoPermanentes->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 7){
                $this->loadModel('MrrhhJubiladosEmpleados');

                $personal = $this->MrrhhJubiladosEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhJubiladosEmpleados->patchEntity($personal, $this->request->getData());
                    $this->MrrhhJubiladosEmpleados->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhJubiladosEmpleados->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhJubiladosEmpleados->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 8){
                $this->loadModel('MrrhhJubiladosObreros');
                $personal = $this->MrrhhJubiladosObreros->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhJubiladosObreros->patchEntity($personal, $this->request->getData());
                    $this->MrrhhJubiladosObreros->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhJubiladosObreros->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhJubiladosObreros->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 9){
                $this->loadModel('MrrhhPensionadosEmpleados');
                $personal = $this->MrrhhPensionadosEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEmpleados->patchEntity($personal, $this->request->getData());
                    $this->MrrhhPensionadosEmpleados->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhPensionadosEmpleados->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhPensionadosEmpleados->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 10){
                $this->loadModel('MrrhhPensionadosSobrevivientesE');
                $personal = $this->MrrhhPensionadosSobrevivientesE->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosSobrevivientesE->patchEntity($personal, $this->request->getData());
                    $this->MrrhhPensionadosSobrevivientesE->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhPensionadosSobrevivientesE->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhPensionadosSobrevivientesE->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 11){
                $this->loadModel('MrrhhPensionadosEspecialesEmpleados');
                $personal = $this->MrrhhPensionadosEspecialesEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEspecialesEmpleados->patchEntity($personal, $this->request->getData());
                    $this->MrrhhPensionadosEspecialesEmpleados->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhPensionadosEspecialesEmpleados->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhPensionadosEspecialesEmpleados->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 12){
                $this->loadModel('MrrhhPensionadosSobrevivientesO');
                $personal = $this->MrrhhPensionadosSobrevivientesO->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosSobrevivientesO->patchEntity($personal, $this->request->getData());
                    $this->MrrhhPensionadosSobrevivientesO->save($personal);
                }

                $this->set(compact('personal'));

                $cambio = $this->MrrhhPensionadosSobrevivientesO->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhPensionadosSobrevivientesO->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------
               
            }else if($tp == 13){
                $this->loadModel('MrrhhPensionadosEspecialesObreros');
                $personal = $this->MrrhhPensionadosEspecialesObreros->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEspecialesObreros->patchEntity($personal, $this->request->getData());
                    $this->MrrhhPensionadosEspecialesObreros->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhPensionadosEspecialesObreros->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhPensionadosEspecialesObreros->deleteAll(['cedula IS' => $cedula]);
            
            //-----------------------------------------------------------------------

            }else if($tp == 14){
                $this->loadModel('MrrhhProteccionCivil');
                $personal = $this->MrrhhProteccionCivil->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhProteccionCivil->patchEntity($personal, $this->request->getData());
                    $this->MrrhhProteccionCivil->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhProteccionCivil->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhProteccionCivil->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------

            }else if($tp == 15){
                $this->loadModel('MrrhhCementerio');
                $personal = $this->MrrhhCementerio->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhCementerio->patchEntity($personal, $this->request->getData());
                    $this->MrrhhCementerio->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhCementerio->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhCementerio->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------

            }else if($tp == 16){
                $this->loadModel('MrrhhComisionServicio');
                $personal = $this->MrrhhComisionServicio->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhComisionServicio->patchEntity($personal, $this->request->getData());
                    $this->MrrhhComisionServicio->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhComisionServicio->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhComisionServicio->deleteAll(['cedula IS' => $cedula]);

            //-----------------------------------------------------------------------

            }else if($tp == 17){
                $this->loadModel('MrrhhHonorarioProfesionales');
                $personal = $this->MrrhhHonorarioProfesionales->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhHonorarioProfesionales->patchEntity($personal, $this->request->getData());
                    $this->MrrhhHonorarioProfesionales->save($personal);
                }
                $this->set(compact('personal'));

                $cambio = $this->MrrhhHonorarioProfesionales->find('all')->where(['cedula' => $cedula])->last();
                $delete = $this->MrrhhHonorarioProfesionales->deleteAll(['cedula IS' => $cedula]);
            }


            if($this->request->data['tipo_personal_nuevo'] == 1){

                $this->loadModel('MrrhhEmpleadosFijos');
                $nomina = $this->MrrhhEmpleadosFijos->newEntity();
                $nomina = $this->MrrhhEmpleadosFijos->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhEmpleadosFijos->save($nomina);

            //-----------------------------------------------------------------------

            }else if($this->request->data['tipo_personal_nuevo'] == 2){

                $this->loadModel('MrrhhEmpleadosContratados');
                $nomina = $this->MrrhhEmpleadosContratados->newEntity();
                $nomina = $this->MrrhhEmpleadosContratados->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhEmpleadosContratados->save($nomina);

            //-----------------------------------------------------------------------
                
            }else if($this->request->data['tipo_personal_nuevo'] == 3){
                
                $this->loadModel('MrrhhDirectivos');
                $nomina = $this->MrrhhDirectivos->newEntity();
                $nomina = $this->MrrhhDirectivos->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhDirectivos->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 4){
                
                $this->loadModel('MrrhhObrerosFijos');
                $nomina = $this->MrrhhObrerosFijos->newEntity();
                $nomina = $this->MrrhhObrerosFijos->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhObrerosFijos->save($nomina);

            //-----------------------------------------------------------------------
                
            }else if($this->request->data['tipo_personal_nuevo'] == 5){
                
                $this->loadModel('MrrhhObrerosContratados');
                $nomina = $this->MrrhhObrerosContratados->newEntity();
                $nomina = $this->MrrhhObrerosContratados->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhObrerosContratados->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 6){
                
                $this->loadModel('MrrhhObrerosNoPermanentes');
                $nomina = $this->MrrhhObrerosNoPermanentes->newEntity();
                $nomina = $this->MrrhhObrerosNoPermanentes->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhObrerosNoPermanentes->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 7){
                
                $this->loadModel('MrrhhJubiladosEmpleados');
                $nomina = $this->MrrhhJubiladosEmpleados->newEntity();
                $nomina = $this->MrrhhJubiladosEmpleados->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhJubiladosEmpleados->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 8){
                
                $this->loadModel('MrrhhJubiladosObreros');
                $nomina = $this->MrrhhJubiladosObreros->newEntity();
                $nomina = $this->MrrhhJubiladosObreros->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhJubiladosObreros->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 9){
                
                $this->loadModel('MrrhhPensionadosEmpleados');
                $nomina = $this->MrrhhPensionadosEmpleados->newEntity();
                $nomina = $this->MrrhhPensionadosEmpleados->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhPensionadosEmpleados->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 10){
                
                $this->loadModel('MrrhhPensionadosSobrevivientesE');
                $nomina = $this->MrrhhPensionadosSobrevivientesE->newEntity();
                $nomina = $this->MrrhhPensionadosSobrevivientesE->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhPensionadosSobrevivientesE->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 11){
                
                $this->loadModel('MrrhhPensionadosEspecialesEmpleados');
                $nomina = $this->MrrhhPensionadosEspecialesEmpleados->newEntity();
                $nomina = $this->MrrhhPensionadosEspecialesEmpleados->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhPensionadosEspecialesEmpleados->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 12){
                
                $this->loadModel('MrrhhPensionadosSobrevivientesO');
                $nomina = $this->MrrhhPensionadosSobrevivientesO->newEntity();
                $nomina = $this->MrrhhPensionadosSobrevivientesO->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhPensionadosSobrevivientesO->save($nomina);

            //-----------------------------------------------------------------------
               
            }else if($this->request->data['tipo_personal_nuevo'] == 13){
                
                $this->loadModel('MrrhhPensionadosEspecialesObreros');
                $nomina = $this->MrrhhPensionadosEspecialesObreros->newEntity();
                $nomina = $this->MrrhhPensionadosEspecialesObreros->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhPensionadosEspecialesObreros->save($nomina);
            
            //-----------------------------------------------------------------------

            }else if($this->request->data['tipo_personal_nuevo'] == 14){
                
                $this->loadModel('MrrhhProteccionCivil');
                $nomina = $this->MrrhhProteccionCivil->newEntity();
                $nomina = $this->MrrhhProteccionCivil->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhProteccionCivil->save($nomina);

            //-----------------------------------------------------------------------

            }else if($this->request->data['tipo_personal_nuevo'] == 15){
                
                $this->loadModel('MrrhhCementerio');
                $nomina = $this->MrrhhCementerio->newEntity();
                $nomina = $this->MrrhhCementerio->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhCementerio->save($nomina);

            //-----------------------------------------------------------------------

            }else if($this->request->data['tipo_personal_nuevo'] == 16){
                
                $this->loadModel('MrrhhComisionServicio');
                $nomina = $this->MrrhhComisionServicio->newEntity();
                $nomina = $this->MrrhhComisionServicio->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhComisionServicio->save($nomina);

            //-----------------------------------------------------------------------

            }else if($this->request->data['tipo_personal_nuevo'] == 17){
                
                $this->loadModel('MrrhhHonorarioProfesionales');
                $nomina = $this->MrrhhHonorarioProfesionales->newEntity();
                $nomina = $this->MrrhhHonorarioProfesionales->patchEntity($nomina, $this->request->getData());
                    
                $nomina->cedula = $cedula;
                $nomina->tipo_nomina = $this->request->data['tipo_nomina_nuevo'];
                $nomina->tipo_personal = $this->request->data['tipo_personal_nuevo'];
                $nomina->banco = $cambio['banco'];
                $nomina->numero_cuenta = $cambio['numero_cuenta'];
                $nomina->prestamo_caja_ahorro = $cambio['prestamo_caja_ahorro'];
                $nomina->dias_dejados_cancelar = $cambio['dias_dejados_cancelar'];
                $nomina->depositario_judicial = $cambio['depositario_judicial'];
                $nomina->depositario_judicial_monto = $cambio['depositario_judicial_monto'];
                $nomina->nivel = 1;
                $nomina->grado_nivel = 1;
                $nomina->cargo = 1;

                $this->MrrhhHonorarioProfesionales->save($nomina);
            }

            $this->Flash->success(__('Personal cambiado de nomina. Por favor, seleccione su Cargo-Grupo-Nivel'));
            return $this->redirect(['action' => 'ednomina', $cedula, @$this->request->data['tipo_nomina_nuevo'], @$this->request->data['tipo_personal_nuevo']]);

        }else{

            if($tp == 1){

                $this->loadModel('MrrhhEmpleadosFijos');

                $personal = $this->MrrhhEmpleadosFijos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhEmpleadosFijos->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhEmpleadosFijos->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------

            }else if($tp == 2){

                $this->loadModel('MrrhhEmpleadosContratados');

                $personal = $this->MrrhhEmpleadosContratados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhEmpleadosContratados->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhEmpleadosContratados->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
                
            }else if($tp == 3){
                $this->loadModel('MrrhhDirectivos');

                $personal = $this->MrrhhDirectivos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhDirectivos->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhDirectivos->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 4){
                $this->loadModel('MrrhhObrerosFijos');

                $personal = $this->MrrhhObrerosFijos->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosFijos->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhObrerosFijos->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
                
            }else if($tp == 5){
                $this->loadModel('MrrhhObrerosContratados');

                $personal = $this->MrrhhObrerosContratados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosContratados->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhObrerosContratados->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 6){
                $this->loadModel('MrrhhObrerosNoPermanentes');

                $personal = $this->MrrhhObrerosNoPermanentes->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhObrerosNoPermanentes->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhObrerosNoPermanentes->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 7){
                $this->loadModel('MrrhhJubiladosEmpleados');

                $personal = $this->MrrhhJubiladosEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhJubiladosEmpleados->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhJubiladosEmpleados->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 8){
                $this->loadModel('MrrhhJubiladosObreros');
                $personal = $this->MrrhhJubiladosObreros->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhJubiladosObreros->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhJubiladosObreros->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 9){
                $this->loadModel('MrrhhPensionadosEmpleados');
                $personal = $this->MrrhhPensionadosEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEmpleados->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhPensionadosEmpleados->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 10){
                $this->loadModel('MrrhhPensionadosSobrevivientesE');
                $personal = $this->MrrhhPensionadosSobrevivientesE->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosSobrevivientesE->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhPensionadosSobrevivientesE->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 11){
                $this->loadModel('MrrhhPensionadosEspecialesEmpleados');
                $personal = $this->MrrhhPensionadosEspecialesEmpleados->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEspecialesEmpleados->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhPensionadosEspecialesEmpleados->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 12){
                $this->loadModel('MrrhhPensionadosSobrevivientesO');
                $personal = $this->MrrhhPensionadosSobrevivientesO->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosSobrevivientesO->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhPensionadosSobrevivientesO->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));

            //-----------------------------------------------------------------------
               
            }else if($tp == 13){
                $this->loadModel('MrrhhPensionadosEspecialesObreros');
                $personal = $this->MrrhhPensionadosEspecialesObreros->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhPensionadosEspecialesObreros->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhPensionadosEspecialesObreros->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));
            
            //-----------------------------------------------------------------------

            }else if($tp == 14){
                $this->loadModel('MrrhhProteccionCivil');
                $personal = $this->MrrhhProteccionCivil->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhProteccionCivil->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhProteccionCivil->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));
            }else if($tp == 15){
                $this->loadModel('MrrhhCementerio');
                $personal = $this->MrrhhCementerio->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhCementerio->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhCementerio->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));
            }else if($tp == 16){
                $this->loadModel('MrrhhComisionServicio');
                $personal = $this->MrrhhComisionServicio->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhComisionServicio->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhComisionServicio->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));
            }else if($tp == 17){
                $this->loadModel('MrrhhHonorarioProfesionales');
                $personal = $this->MrrhhHonorarioProfesionales->get($cedula, [
                    'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $personal = $this->MrrhhHonorarioProfesionales->patchEntity($personal, $this->request->getData());

                    if ($this->MrrhhHonorarioProfesionales->save($personal)) {
                        $this->Flash->success(__('La nomina ha sido actualizada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }
                    $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
                }

                $this->set(compact('personal'));
            }else{
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
        }

        //-----------------------------------------------------------------------

        $this->set('cedula', $cedula);
        $this->set('tn', $tn);
        $this->set('tp', $tp);
    }

    //Oculta a una persona del sistema
    public function suspender($cedula = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhPersonal');

        $this->request->allowMethod(['get', 'save']);
        $registro = $this->MrrhhPersonal->get($cedula);
        $registro->status = false;

        if ($this->MrrhhPersonal->save($registro)) {
            $this->Flash->success(__('Suspendido'));
            return $this->redirect(['action' => 'view', $cedula]);
        }
    }

    //Oculta a una persona del sistema
    public function activar($cedula = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhPersonal');

        $this->request->allowMethod(['get', 'save']);
        $registro = $this->MrrhhPersonal->get($cedula);
        $registro->status = true;

        if ($this->MrrhhPersonal->save($registro)) {
            $this->Flash->success(__('Activado'));
            return $this->redirect(['action' => 'view', $cedula]);
        }
    }

    public function historial($cedula = null){

        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->set('cedula', $cedula);
        
        $this->loadModel('MrrhhHistorial');
        $this->set('data', $this->MrrhhHistorial->find('all')->where(['cedula' => $cedula]));
    }
}