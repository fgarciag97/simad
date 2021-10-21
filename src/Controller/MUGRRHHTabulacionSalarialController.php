<?php
namespace App\Controller;

use App\Controller\AppController;

class MUGRRHHTabulacionSalarialController extends AppController
{

    public function index()
    {
        //========================================================
        //Selecciona el Layout de Uso General
        //========================================================
        $this->viewBuilder()->setLayout('usogeneral');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.usogeneral')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('MrrhhNivelesEmpleados');
        $tabulacion_empleados = $this->paginate($this->MrrhhNivelesEmpleados, ['order' => [
            'id' => 'asc'
        ]]);
        $this->set(compact('tabulacion_empleados'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('MrrhhNivelesDirectivos');
        $tabulacion_directivos = $this->paginate($this->MrrhhNivelesDirectivos, ['order' => [
            'id' => 'asc'
        ]]);
        $this->set(compact('tabulacion_directivos'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('MrrhhNivelesObreros');
        $tabulacion_obreros = $this->paginate($this->MrrhhNivelesObreros, ['order' => [
            'id' => 'asc'
        ]]);
        $this->set(compact('tabulacion_obreros'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('MrrhhNivelesObrerosNoPermanentes');
        $tabulacion_obreros_no_permanentes = $this->paginate($this->MrrhhNivelesObrerosNoPermanentes, ['order' => [
            'id' => 'asc'
        ]]);
        $this->set(compact('tabulacion_obreros_no_permanentes'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('MrrhhNivelesProteccionCivil');
        $tabulacion_proteccion_civil = $this->paginate($this->MrrhhNivelesProteccionCivil, ['order' => [
            'id' => 'asc'
        ], 'limit' => 30]);
        $this->set(compact('tabulacion_proteccion_civil'));

         //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('AumentoRotativoNivel');
        $aumento_nivel = $this->paginate($this->AumentoRotativoNivel, ['order' => [
            'id' => 'asc'
        ], 'limit' => 30]);
        $this->set(compact('aumento_nivel'));

        $saltos = $this->AumentoRotativoNivel->find('all')->where(['denominacion' => 'EMPLEADOS'])->last();
        $this->set('saltos', $saltos['monto']);
    }


    // PARAMETROS FIJOS 

    public function parametros()
    {
        //========================================================
        //Selecciona el Layout de Uso General
        //========================================================
        $this->viewBuilder()->setLayout('usogeneral');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.usogeneral')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('ParametrosFijos');
        $parametros_fijos = $this->paginate($this->ParametrosFijos, ['order' => [
            'id' => 'asc'
        ], 'limit' => 30]);
        $this->set(compact('parametros_fijos'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('Grados');
        $grados = $this->paginate($this->Grados, ['order' => [
            'id' => 'asc'
        ], 'limit' => 30]);
        $this->set(compact('grados'));

        //========================================================
        //Carga tabulacion
        //========================================================
        $this->loadModel('PrimaAntiguedad');
        $prima_antiguedad = $this->paginate($this->PrimaAntiguedad, ['order' => [
            'cantidad' => 'asc'
        ], 'limit' => 30]);
        $this->set(compact('prima_antiguedad'));
    }



    public function EditarTabulacionRotativo()
    {
        $this->loadModel('AumentoRotativoNivel');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->AumentoRotativoNivel->get($this->request->data['id']);
        $tabulacion->monto = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->AumentoRotativoNivel->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion Rotativa Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 

    public function EditarTabulacionEmpleados()
    {
        $this->loadModel('MrrhhNivelesEmpleados');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhNivelesEmpleados->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhNivelesEmpleados->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion de Empleados Fijos Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 


    public function EditarTabulacionDirectivos()
    {
        $this->loadModel('MrrhhNivelesDirectivos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhNivelesDirectivos->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhNivelesDirectivos->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion de Directivos Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 

    public function EditarTabulacionObreros()
    {
        $this->loadModel('MrrhhNivelesObreros');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhNivelesObreros->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhNivelesObreros->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion de Obreros Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 

    public function EditarTabulacionObrerosNoPermanentes()
    {
        $this->loadModel('MrrhhNivelesObrerosNoPermanentes');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhNivelesObrerosNoPermanentes->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhNivelesObrerosNoPermanentes->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion de Obreros No Permanentes Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 

    public function EditarTabulacionProteccionCivil()
    {
        $this->loadModel('MrrhhNivelesProteccionCivil');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhNivelesProteccionCivil->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhNivelesProteccionCivil->save($tabulacion)) {
            $this->Flash->success(__('Tabulacion de Protección Civil Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 


    public function EditarSalarioMinimo()
    {
        $this->loadModel('MrrhhSueldoBase');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->MrrhhSueldoBase->get($this->request->data['id']);
        $tabulacion->sueldo_base = $this->revertir_moneda($this->request->data['sueldo_base']);

        if ($this->MrrhhSueldoBase->save($tabulacion)) {
            $this->Flash->success(__('Sueldo Minimo Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 


    public function parametrosprimas()
    {
        $this->loadModel('PrimaAntiguedad');
        $query = $this->PrimaAntiguedad->query();
        $query->update()
            ->set(['porcentaje' => $this->revertir_moneda($this->request->data['porcentaje'])])
            ->where(['cantidad' => $this->request->data['cantidad']])
            ->execute();

        if ($query) {
            $this->Flash->success(__('Prima Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'parametros']);
    } 

    public function parametrosparametros()
    {
        $this->loadModel('ParametrosFijos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->ParametrosFijos->get($this->request->data['id']);
        $tabulacion->monto = $this->revertir_moneda($this->request->data['monto']);

        if ($this->ParametrosFijos->save($tabulacion)) {
            $this->Flash->success(__('Parametro Actualizado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'parametros']);
    } 

    public function parametrosprofesion()
    {
        $this->loadModel('Grados');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tabulacion = $this->Grados->get($this->request->data['id']);
        $tabulacion->porcentaje = $this->revertir_moneda($this->request->data['porcentaje']);

        if ($this->Grados->save($tabulacion)) {
            $this->Flash->success(__('Parametro Actualizado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'parametros']);
    } 
}
