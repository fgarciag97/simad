<?php
namespace App\Controller;

use App\Controller\AppController;

class MrrhhRequisicionController extends AppController
{
	public function index($tp = null, $m = null, $a = null){
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

        $tipo_personal = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tipo_personal as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_personal', $options);


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
        $this->set('mes', $options);

        //========================================================
        //Carga del ARRAY de MES
        //========================================================
        $this->loadModel('Mes');

        $mesd = $this->Mes->find('all')->toArray();
        $this->set('mesd', $mesd);

        //========================================================
        //Carga del ARRAY de QUINCENA
        //========================================================
        $this->loadModel('Quincena');

        $quincenad = $this->Quincena->find('all')->toArray();
        $this->set('quincenad', $quincenad);

        //========================================================
        //Carga del Select de MES
        //========================================================
        $this->loadModel('MrrhhRequisicion');

        $ano = $this->MrrhhRequisicion->find('all')->where(['ano <>' => '9999'])->distinct(['ano'])->toArray();
        $options = [];
        foreach ($ano as $key) 
        {
            $options[$key->ano] = strtoupper($key->ano);
        }
        $this->set('anoo', $options);

        //---------------------------------------------------------------------

        if ($tp != null or $m != null or $a != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('as', $a);

            $this->loadModel('MrrhhRequisicion');
            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'NOMINA'];
            $data_nomina = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_nomina'));

            //-------------------------------------------------------------------------

            $this->loadModel('MrrhhRequisicion');
            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'BONO ESTABILIDAD'];
            $data_be = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_be'));

            //-------------------------------------------------------------------------

            $this->loadModel('MrrhhRequisicion');
            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'ASISTENCIA MEDICA'];
            $data_am = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_am'));

            //-------------------------------------------------------------------------
            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'CESTA TICKET'];
            $data_cesta_ticket = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_cesta_ticket'));

            //-------------------------------------------------------------------------

            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'HORAS EXTRAS'];
            $data_horas_extras = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_horas_extras'));

            //-------------------------------------------------------------------------

            $condicion = ['id_tipo_personal' => $tp, 'mes' => $m, 'ano' => $a, 'tipo' => 'VACACIONES'];
            $data_vacaciones = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion]);
            $this->set(compact('data_vacaciones'));

            //-------------------------------------------------------------------------

            $this->loadModel('MrrhhTipoPersonal');
            $data_tp = $this->MrrhhTipoPersonal->find('all');
            $this->set(compact('data_tp'));
        }

        //========================================================
        //Data capturada via POST
        //========================================================

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_personal'];
            $m = $this->request->data['mes'];
            $a = $this->request->data['ano'];

            if($tp == '' or $tp == null){
                $tp = 0;
            }

            if($m == '' or $m == null){
                $m = 0;
            }

            if($a == '' or $a == null){
                $a = 0;
            }

            return $this->redirect(['action' => 'index', $tp, $m, $a]); 
            
        }
	}

    public function nomina(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 10);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'NOMINA'];
        $nominas = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('nominas'));
    }

    public function cestaticket(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'CESTA TICKET'];
        $ct = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('ct'));
    }

    public function horasextras(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'HORAS EXTRAS'];
        $he = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('he'));
    }

    public function vacaciones(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'VACACIONES'];
        $vaca = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('vaca'));
    }

     public function fin(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'FIN'];
        $fin = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('fin'));
    }

    public function especial(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'ESPECIAL'];
        $esp = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('esp'));
    }

    public function bonoestabilidad(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'BONO ESTABILIDAD'];
        $be = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('be'));
    }

    public function asistenciamedica(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'ASISTENCIA MEDICA'];
        $am = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('am'));
    }

    public function ps(){
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id <>' => '9999', 'tipo' => 'PRESTACIONES SOCIALES'];
        $ps = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'DESC']));
        $this->set(compact('ps'));
    }

}