<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

//========================================================
// Variables Globales
//========================================================

define('NOMBRE_SISTEMA', 'SIMAD');
define('NOMBRE_SISTEMA_COMPLETO', 'Sistema Municipal de Administración');
define('ENTIDAD_FEDERAL', 'ALCALDIA DEL MUNICIPIO BOLIVAR');
define('NOMBRE_ALCALDE', 'EVARISTO JIMENEZ');
define('MONEDA', 'BsS. ');
define('MUNICIPIO', 'BOLIVAR');

define('DIRECTOR_GENERAL', '');
define('CONTRALOR_MUNICIPAL', '');
define('DOMICILIO_CONTRALOR_MUNICIPAL', '');
define('PRESIDENTE_CONCEJO_MUNICIPAL', '');
define('SECRETARIO_CONCEJO_MUNICIPAL', '');
define('DOMICILIO_CONCEJO_MUNICIPAL', '');
define('CONCEJO_LOCAL', '');
define('DIRECCION_ADMINISTRATIVA', '');
define('NOMBRES_DIRECCION','');
define('CORREOS_DIRECCION','');
define('TELEFONOS_DIRECCION','');

//========================================================



class AppController extends Controller
{

    public function beforeFilter(Event $event) {
        //===============================================================
        //Lectura de la tabla de año fiscal, para saber cual es el actual
        //===============================================================
        $this->loadModel('AnoFiscal');
        $result = $this->AnoFiscal->find('all', ['fields' => 'ano_fiscal']);
        $row = $result->last();
        $this->set('ano',$row['ano_fiscal']);

        define('ANO_FISCAL', $row['ano_fiscal']);
    }

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',                                        
                    'fields' => [
                        'username' => 'username', 
                        'password' => 'password'
                    ]                        
                ]
            ],
            'loginAction' => [
                'controller' => 'Login',
                'action' => 'index'
            ],
            'authError' => '',
            'loginRedirect' => [
                'controller' => 'Panel', 
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Login', 
                'action' => 'index'
            ],
            'storage' => 'Session'
        ]);
        //$this->loadComponent('Security');
    }

    public function isAuthorized($user){
        return true;
    }

    public function mayus($x){
        $x = strtoupper(utf8_decode($x));
        return $x;
    }

    public function fecha($x){
        $x = date_format($x, 'd/m/Y');
        return $x;
    }

    function mes_castellano ($mes) {
      
      $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
      $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
      return $nombreMes;
    }   

    public function revertir_moneda($decimal){
        $decimal = str_replace(',', '.', str_replace('.', '', $decimal));
        return $decimal;
    }

    public function moneda($x){
        $x = number_format($x, 2, ',', '.');
        return $x;
    }

    public function verificamoneda($x){
        $pos = strpos($x, ',');

        if($pos === false){
            $x = $x;
        }else{
            $x = str_replace(',', '.', str_replace('.', '', $x));
        }
        return $x;
    }

    public function requisicion($x){
        $n = 10 - strlen($x);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $x;
        return $requisicion;
    }

    public function DameRequisicion(){

        $condicion = ['id <>' => 9999];

        $this->loadModel('MrrhhRequisicion');
        $rrhh = $this->MrrhhRequisicion->find('all')->where($condicion)->order(['id' => 'ASC'])->last();
        $nrrhh = 0;
        $nrrhh = $rrhh['id'];

        $this->loadModel('MrrhhRequisicionServicios');
        $servicios = $this->MrrhhRequisicionServicios->find('all')->where($condicion)->order(['id' => 'ASC'])->last();
        $nservicios = 0;
        $nservicios = $servicios['id'];
        
        $this->loadModel('CompraRequisicion');
        $compra = $this->CompraRequisicion->find('all')->where($condicion)->order(['id' => 'ASC'])->last();
        $ncompra = 0;
        $ncompra = $compra['id'];
        
        $this->loadModel('EjecucionRequisicionTransferencia');
        $transf = $this->EjecucionRequisicionTransferencia->find('all')->where($condicion)->order(['id' => 'ASC'])->last();
        $ntransf = 0;
        $ntransf = $transf['id'];

        $requisicion = 0;

        if(($ntransf == 0) and ($nservicios == 0) and ($ncompra == 0) and ($nrrhh == 0)){
            $requisicion = 1;
        }else if(($nrrhh >= $nservicios) and ($nrrhh >= $ncompra) and ($nrrhh >= $ntransf)){
            $requisicion = $nrrhh + 1;
        }else if(($nservicios >= $nrrhh) and ($nservicios >= $ncompra) and ($nservicios >= $ntransf)){
            $requisicion = $nservicios + 1;
        }else if(($ncompra  >= $nrrhh) and ($ncompra >= $nservicios) and ($ncompra >= $ntransf)){
            $requisicion = $ncompra + 1;
        }else if(($ntransf >= $nrrhh) and ($ntransf >= $nservicios) and ($ntransf >= $ncompra)){
            $requisicion = $ntransf + 1;
        }

        return $requisicion;
    }

    public function DameOrdenServicio(){

        $condicion = ['id <>' => 9999, 'numero_orden_pago <>' => 0];

        $this->loadModel('MrrhhRequisicion');
        $rrhh = $this->MrrhhRequisicion->find('all')->where($condicion)->order(['numero_orden_pago' => 'ASC'])->last();
        $nrrhh = 0;
        $nrrhh = $rrhh['numero_orden_pago'];

        $this->loadModel('MrrhhRequisicionServicios');
        $servicios = $this->MrrhhRequisicionServicios->find('all')->where($condicion)->order(['numero_orden_pago' => 'ASC'])->last();
        $nservicios = 0;
        $nservicios = $servicios['numero_orden_pago'];
        
        $this->loadModel('CompraRequisicion');
        $compra = $this->CompraRequisicion->find('all')->where($condicion)->where(['tipo' => 'SERVICIO'])->order(['numero_orden_pago' => 'ASC'])->last();
        $ncompra = 0;
        $ncompra = $compra['numero_orden_pago'];
        
        $this->loadModel('EjecucionRequisicionTransferencia');
        $transf = $this->EjecucionRequisicionTransferencia->find('all')->where($condicion)->order(['numero_orden_pago' => 'ASC'])->last();
        $ntransf = 0;
        $ntransf = $transf['numero_orden_pago'];

        $requisicion = 0;

        if(($ntransf == 0) and ($nservicios == 0) and ($ncompra == 0) and ($nrrhh == 0)){
            $requisicion = 1;
        }else if(($nrrhh >= $nservicios) and ($nrrhh >= $ncompra) and ($nrrhh >= $ntransf)){
            $requisicion = $nrrhh + 1;
        }else if(($nservicios >= $nrrhh) and ($nservicios >= $ncompra) and ($nservicios >= $ntransf)){
            $requisicion = $nservicios + 1;
        }else if(($ncompra  >= $nrrhh) and ($ncompra >= $nservicios) and ($ncompra >= $ntransf)){
            $requisicion = $ncompra + 1;
        }else if(($ntransf >= $nrrhh) and ($ntransf >= $nservicios) and ($ntransf >= $ncompra)){
            $requisicion = $ntransf + 1;
        }

        return $requisicion;
    }


    public function DameOrdenCompra(){

        $condicion = ['id <>' => 9999, 'numero_orden_pago <>' => 0];
        
        $this->loadModel('CompraRequisicion');
        $compra = $this->CompraRequisicion->find('all')->where($condicion)->where(['tipo' => 'COMPRA'])->order(['numero_orden_pago' => 'ASC'])->last();
        $ncompra = 0;
        $ncompra = $compra['numero_orden_pago'];

        $requisicion = $ncompra + 1;

        return $requisicion;
    }

    public function DameOrdenPago(){

        $condicion = ['id <>' => 9999, 'numero_orden_pago_ord <>' => 0];

        $this->loadModel('MrrhhRequisicion');
        $rrhh = $this->MrrhhRequisicion->find('all')->where($condicion)->order(['numero_orden_pago_ord' => 'ASC'])->last();
        $nrrhh = 0;
        $nrrhh = ($rrhh['numero_orden_pago_ord'] == null) ? 0 : $rrhh['numero_orden_pago_ord'];

        $this->loadModel('MrrhhRequisicionServicios');
        $servicios = $this->MrrhhRequisicionServicios->find('all')->where($condicion)->order(['numero_orden_pago_ord' => 'ASC'])->last();
        $nservicios = 0;
        $nservicios = ($servicios['numero_orden_pago_ord'] == null) ? 0 : $servicios['numero_orden_pago_ord'];
        
        $this->loadModel('CompraRequisicion');
        $compra = $this->CompraRequisicion->find('all')->where($condicion)->order(['numero_orden_pago_ord' => 'ASC'])->last();
        $ncompra = 0;
        $ncompra = $compra['numero_orden_pago_ord'];
        $ncompra = ($compra['numero_orden_pago_ord'] == null) ? 0 : $compra['numero_orden_pago_ord'];

        $this->loadModel('CompraRequisicion');
        $compra2 = $this->CompraRequisicion->find('all')->where($condicion)->order(['numero_orden_pago_ord2' => 'ASC'])->last();
        $ncompra2 = 0;
        $ncompra2 = ($compra['numero_orden_pago_ord2'] == null) ? 0 : $compra['numero_orden_pago_ord2'];

        $this->loadModel('CompraRequisicion');
        $compra3 = $this->CompraRequisicion->find('all')->where($condicion)->order(['numero_orden_pago_ord3' => 'ASC'])->last();
        $ncompra3 = 0;
        $ncompra3 = ($compra['numero_orden_pago_ord3'] == null) ? 0 : $compra['numero_orden_pago_ord3'];

        $this->loadModel('CompraRequisicion');
        $compra4 = $this->CompraRequisicion->find('all')->where($condicion)->order(['numero_orden_pago_ord4' => 'ASC'])->last();
        $ncompra4 = 0;
        $ncompra4 = ($compra['numero_orden_pago_ord4'] == null) ? 0 : $compra['numero_orden_pago_ord4'];
        
        $this->loadModel('EjecucionRequisicionTransferencia');
        $transf = $this->EjecucionRequisicionTransferencia->find('all')->where($condicion)->order(['numero_orden_pago_ord' => 'ASC'])->last();
        $ntransf = 0;
        $ntransf = ($transf['numero_orden_pago_ord'] == null) ? 0 : $transf['numero_orden_pago_ord'];

        $requisicion = 0;

        if(($ntransf == 0) and ($nservicios == 0) and ($ncompra == 0)  and ($ncompra2 == 0) and ($ncompra3 == 0) and ($ncompra4 == 0) and ($nrrhh == 0)){
            $requisicion = 1;
        }else if(($nrrhh >= $nservicios) and ($nrrhh >= $ncompra) and ($nrrhh >= $ncompra2) and ($nrrhh >= $ncompra3) and ($nrrhh >= $ncompra4) and ($nrrhh >= $ntransf)){
            $requisicion = $nrrhh + 1;
        }else if(($nservicios >= $nrrhh) and ($nservicios >= $ncompra) and ($nservicios >= $ncompra2) and ($nservicios >= $ncompra3) and ($nservicios >= $ncompra4) and ($nservicios >= $ntransf)){
            $requisicion = $nservicios + 1;
        }else if(($ncompra  >= $nrrhh) and ($ncompra >= $nservicios) and ($ncompra >= $ncompra2) and ($ncompra >= $ncompra3) and ($ncompra >= $ncompra4) and ($ncompra >= $ntransf)){
            $requisicion = $ncompra + 1;
        }else if(($ncompra2  >= $nrrhh) and ($ncompra2 >= $nservicios) and ($ncompra2 >= $ncompra) and ($ncompra2 >= $ncompra3) and ($ncompra2 >= $ncompra4) and ($ncompra2 >= $ntransf)){
            $requisicion = $ncompra2 + 1;
        }else if(($ncompra3  >= $nrrhh) and ($ncompra3 >= $nservicios) and ($ncompra3 >= $ncompra) and ($ncompra3 >= $ncompra2) and ($ncompra3 >= $ncompra4) and ($ncompra3 >= $ntransf)){
            $requisicion = $ncompra3 + 1;
        }else if(($ncompra4  >= $nrrhh) and ($ncompra4 >= $nservicios) and ($ncompra4 >= $ncompra) and ($ncompra4 >= $ncompra2) and ($ncompra4 >= $ncompra3) and ($ncompra4 >= $ntransf)){
            $requisicion = $ncompra4 + 1;
        }else if(($ntransf >= $nrrhh) and ($ntransf >= $nservicios) and ($ntransf >= $ncompra) and ($ntransf >= $ncompra2) and ($ntransf >= $ncompra3) and ($ntransf >= $ncompra4)){
            $requisicion = $ntransf + 1;
        }

        return $requisicion;
    }





    public function sesion($id = null, $minutos = 5){
        $this->loadModel('LogUser');
        $x = $this->LogUser->find('all')->where(['id_usuario' => @$id, 'status' => true])->last();

        @$dif = date("h:i", strtotime("00:00") + strtotime(date('h:i')) - strtotime(date_format($x['ultima_hora'], 'h:i')));
        $dif = explode(":", $dif);

        if((int)$dif[0] == 12){
                $dif = (((int)$dif[0] - 12)*60) + (int)$dif[1];
            }else{
                $dif = (((int)$dif[0])*60) + (int)$dif[1];
            }

        if($x['status'] == false){
            $this->Auth->logout();
            return $this->redirect($this->Auth->logout());
        }

        //Cierre de sesion a los x minutos
        if($dif < ($minutos * 60)){
            $query = $this->LogUser->query();
            $query->update()
                ->set(['ultima_fecha' => date('d/m/Y'), 'ultima_hora' => date('h:i:s')])
                ->where(['id' => $x['id'], 'id_usuario' => $id])
                ->execute();
        }else{
            $query = $this->LogUser->query();
            $query->update()
                ->set(['fecha_cierre' => date('d/m/Y'), 'hora_cierre' => date('h:i:s'), 'status' => 0])
                ->where(['id' => $x['id'], 'id_usuario' => $id])
                ->execute();

            $this->Auth->logout();
            return $this->redirect($this->Auth->logout());
        }
    }


    public function usuario_unico($id){
        $this->loadModel('LogUser');
        $x = $this->LogUser->find('all')->where(['id_usuario' => @$id, 'status' => true])->count();

        if($x == 0){
            return true;
        }else{
            return false;
        }
    }

    public function IPreal() {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
       
        return $_SERVER['REMOTE_ADDR'];
    }

     public function cierres(){
        $this->loadModel('LogUser');
        $x = $this->LogUser->find('all')->where(['status' => true])->toArray();

        foreach ($x as $key) {
            $dif = date("H:i", strtotime("12:00") + strtotime(date('H:i')) - strtotime(date_format($key['ultima_hora'], 'H:i')));
            $dif = explode(":", $dif);

            if((int)$dif[0] == 12){
                $dif = (((int)$dif[0] - 12)*60) + (int)$dif[1];
            }else{
                $dif = (((int)$dif[0])*60) + (int)$dif[1];
            }

            //Cierre de sesion a los x minutos
            if($dif > 10){
                $query = $this->LogUser->query();
                $query->update()
                    ->set(['fecha_cierre' => date('d/m/Y'), 'hora_cierre' => date('h:i:s'), 'status' => 0])
                    ->where(['id' => $key['id'], 'id_usuario' => $key['id_usuario']])
                    ->execute();
            }
        }
    }

    //======================================================
    //Seguimiento Presupuesto
    //======================================================
    public function seguimiento_mp()
    {
        $this->loadModel('MpSeguimiento');

            $save = $this->MpSeguimiento->newEntity();
            $save = $this->MpSeguimiento->patchEntity($save, array('ano' => ANO_FISCAL));
            $this->MpSeguimiento->save($save);
        
    }

    public function seguimiento_Datosentidad()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('datosentidad' => true),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }

    public function seguimiento_Datosentidad_editar()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('datosentidad' => false),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }

    public function seguimiento_ingresos()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('ingresos' => true),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }

    public function seguimiento_categorias()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('categorias' => true),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }

    public function seguimiento_PoliticaPresupuestaria()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('politica_presupuestaria' => true),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }

    public function seguimiento_PoliticaPresupuestaria_editar()
    {
        $this->loadModel('MpSeguimiento');

        $this->MpSeguimiento->updateAll(
            array('politica_presupuestaria' => false),
            array('ano' => ANO_FISCAL)
        );

        return true;
    }



    //=====================================================================================================
    //MONTO EN LETRAS
   
    public function unidad($numuero){
        switch ($numuero)
        {
            case 9:
            {
                $numu = "NUEVE";
                break;
            }
            case 8:
            {
                $numu = "OCHO";
                break;
            }
            case 7:
            {
                $numu = "SIETE";
                break;
            }       
            case 6:
            {
                $numu = "SEIS";
                break;
            }       
            case 5:
            {
                $numu = "CINCO";
                break;
            }       
            case 4:
            {
                $numu = "CUATRO";
                break;
            }       
            case 3:
            {
                $numu = "TRES";
                break;
            }       
            case 2:
            {
                $numu = "DOS";
                break;
            }       
            case 1:
            {
                $numu = "UN";
                break;
            }       
            case 0:
            {
                $numu = "";
                break;
            }       
        }
        return $numu;   
    }

    public function decena($numdero){
    
        if ($numdero >= 90 && $numdero <= 99)
        {
            $numd = "NOVENTA ";
            if ($numdero > 90)
                $numd = $numd."Y ".($this->unidad($numdero - 90));
        }
        else if ($numdero >= 80 && $numdero <= 89)
        {
            $numd = "OCHENTA ";
            if ($numdero > 80)
                $numd = $numd."Y ".($this->unidad($numdero - 80));
        }
        else if ($numdero >= 70 && $numdero <= 79)
        {
            $numd = "SETENTA ";
            if ($numdero > 70)
                $numd = $numd."Y ".($this->unidad($numdero - 70));
        }
        else if ($numdero >= 60 && $numdero <= 69)
        {
            $numd = "SESENTA ";
            if ($numdero > 60)
                $numd = $numd."Y ".($this->unidad($numdero - 60));
        }
        else if ($numdero >= 50 && $numdero <= 59)
        {
            $numd = "CINCUENTA ";
            if ($numdero > 50)
                $numd = $numd."Y ".($this->unidad($numdero - 50));
        }
        else if ($numdero >= 40 && $numdero <= 49)
        {
            $numd = "CUARENTA ";
            if ($numdero > 40)
                $numd = $numd."Y ".($this->unidad($numdero - 40));
        }
        else if ($numdero >= 30 && $numdero <= 39)
        {
            $numd = "TREINTA ";
            if ($numdero > 30)
                $numd = $numd."Y ".($this->unidad($numdero - 30));
        }
        else if ($numdero >= 20 && $numdero <= 29)
        {
            if ($numdero == 20)
                $numd = "VEINTE ";
            else
                $numd = "VEINTI".($this->unidad($numdero - 20));
        }
        else if ($numdero >= 10 && $numdero <= 19)
        {
            switch ($numdero){
            case 10:
            {
                $numd = "DIEZ ";
                break;
            }
            case 11:
            {               
                $numd = "ONCE ";
                break;
            }
            case 12:
            {
                $numd = "DOCE ";
                break;
            }
            case 13:
            {
                $numd = "TRECE ";
                break;
            }
            case 14:
            {
                $numd = "CATORCE ";
                break;
            }
            case 15:
            {
                $numd = "QUINCE ";
                break;
            }
            case 16:
            {
                $numd = "DIECISEIS ";
                break;
            }
            case 17:
            {
                $numd = "DIECISIETE ";
                break;
            }
            case 18:
            {
                $numd = "DIECIOCHO ";
                break;
            }
            case 19:
            {
                $numd = "DIECINUEVE ";
                break;
            }
            }   
        }
        else
            $numd = $this->unidad($numdero);
    return $numd;
    }

    public function centena($numc){
        if ($numc >= 100)
        {
            if ($numc >= 900 && $numc <= 999)
            {
                $numce = "NOVECIENTOS ";
                if ($numc > 900)
                    $numce = $numce.($this->decena($numc - 900));
            }
            else if ($numc >= 800 && $numc <= 899)
            {
                $numce = "OCHOCIENTOS ";
                if ($numc > 800)
                    $numce = $numce.($this->decena($numc - 800));
            }
            else if ($numc >= 700 && $numc <= 799)
            {
                $numce = "SETECIENTOS ";
                if ($numc > 700)
                    $numce = $numce.($this->decena($numc - 700));
            }
            else if ($numc >= 600 && $numc <= 699)
            {
                $numce = "SEISCIENTOS ";
                if ($numc > 600)
                    $numce = $numce.($this->decena($numc - 600));
            }
            else if ($numc >= 500 && $numc <= 599)
            {
                $numce = "QUINIENTOS ";
                if ($numc > 500)
                    $numce = $numce.($this->decena($numc - 500));
            }
            else if ($numc >= 400 && $numc <= 499)
            {
                $numce = "CUATROCIENTOS ";
                if ($numc > 400)
                    $numce = $numce.($this->decena($numc - 400));
            }
            else if ($numc >= 300 && $numc <= 399)
            {
                $numce = "TRESCIENTOS ";
                if ($numc > 300)
                    $numce = $numce.($this->decena($numc - 300));
            }
            else if ($numc >= 200 && $numc <= 299)
            {
                $numce = "DOSCIENTOS ";
                if ($numc > 200)
                    $numce = $numce.($this->decena($numc - 200));
            }
            else if ($numc >= 100 && $numc <= 199)
            {
                if ($numc == 100)
                    $numce = "CIEN ";
                else
                    $numce = "CIENTO ".($this->decena($numc - 100));
            }
        }
        else
            $numce = $this->decena($numc);
        
        return $numce;  
    }

    public function miles($nummero){
        if ($nummero >= 1000 && $nummero < 2000){
            $numm = "MIL ".($this->centena($nummero%1000));
        }
        if ($nummero >= 2000 && $nummero <10000){
            $numm = $this->unidad(Floor($nummero/1000))." MIL ".($this->centena($nummero%1000));
        }
        if ($nummero < 1000)
            $numm = $this->centena($nummero);
        
        return $numm;
    }

    public function decmiles($numdmero){
        if ($numdmero == 10000)
            $numde = "DIEZ MIL";
        if ($numdmero > 10000 && $numdmero <20000){
            $numde = $this->decena(Floor($numdmero/1000))."MIL ".($this->centena($numdmero%1000));        
        }
        if ($numdmero >= 20000 && $numdmero <100000){
            $numde = $this->decena(Floor($numdmero/1000))." MIL ".($this->miles($numdmero%1000));     
        }       
        if ($numdmero < 10000)
            $numde = $this->miles($numdmero);
        
        return $numde;
    }       

    public function cienmiles($numcmero){
        if ($numcmero == 100000)
            $num_letracm = "CIEN MIL";
        if ($numcmero >= 100000 && $numcmero <1000000){
            $num_letracm = $this->centena(Floor($numcmero/1000))." MIL ".($this->centena($numcmero%1000));        
        }
        if ($numcmero < 100000)
            $num_letracm = $this->decmiles($numcmero);
        return $num_letracm;
    }   
    
    public function millon($nummiero){
        if ($nummiero >= 1000000 && $nummiero <2000000){
            $num_letramm = "UN MILLON ".($this->cienmiles($nummiero%1000000));
        }
        if ($nummiero >= 2000000 && $nummiero <10000000){
            $num_letramm = $this->unidad(Floor($nummiero/1000000))." MILLONES ".($this->cienmiles($nummiero%1000000));
        }
        if ($nummiero < 1000000)
            $num_letramm = $this->cienmiles($nummiero);
        
        return $num_letramm;
    }   

    public function decmillon($numerodm){
        if ($numerodm == 10000000)
            $num_letradmm = "DIEZ MILLONES";
        if ($numerodm > 10000000 && $numerodm <20000000){
            $num_letradmm = $this->decena(Floor($numerodm/1000000))."MILLONES ".($this->cienmiles($numerodm%1000000));        
        }
        if ($numerodm >= 20000000 && $numerodm <100000000){
            $num_letradmm = $this->decena(Floor($numerodm/1000000))." MILLONES ".($this->millon($numerodm%1000000));      
        }
        if ($numerodm < 10000000)
            $num_letradmm = $this->millon($numerodm);
        
        return $num_letradmm;
    }

    public function cienmillon($numcmeros){
        if ($numcmeros == 100000000)
            $num_letracms = "CIEN MILLONES";
        if ($numcmeros >= 100000000 && $numcmeros <1000000000){
            $num_letracms = $this->centena(Floor($numcmeros/1000000))." MILLONES ".($this->millon($numcmeros%1000000));       
        }
        if ($numcmeros < 100000000)
            $num_letracms = $this->decmillon($numcmeros);
        return $num_letracms;
    }   

    public function milmillon($nummierod){
        if ($nummierod >= 1000000000 && $nummierod <2000000000){
            $num_letrammd = "MIL ".($this->cienmillon($nummierod%1000000000));
        }
        if ($nummierod >= 2000000000 && $nummierod <10000000000){
            $num_letrammd = $this->unidad(Floor($nummierod/1000000000))." MIL ".($this->cienmillon($nummierod%1000000000));
        }
        if ($nummierod < 1000000000)
            $num_letrammd = $this->cienmillon($nummierod);
        
        return $num_letrammd;
    }   
            
        
    public function convertir($numero){

        //$cents = $this->decena(substr($numero,strlen($numero)-2,strlen($numero)-1));
        $num = (int)$numero;
        $num = $this->milmillon($num);
        
        $cents=explode('.',$numero);
        $n = count($cents);
        
        if($n != 1){
            if( strlen($cents[1])  == 1) $cents = $cents[1].'0';
            else  $cents = $cents[1];
            $cents = $this->decena($cents);
            return $num." BOLIVARES CON ".@$cents." CENTIMOS"; 
        }else{
            return $num." BOLIVARES CON CERO CENTIMOS"; 
            
        }

    }






    /*public function ultimo_sueldo($numero){

        $this->loadModel('MrrhhUltimoSueldo');
        $query = $this->MrrhhUltimoSueldo->deleteAll();

        for ($i = 1; $i < 18 ; $i++) { 
            $this->loadModel('MrrhhRequisicion');
            $tp = $this->MrrhhRequisicion->find('all')->where(['tipo' => 'NOMINA', 'id_tipo_personal' => $i])->last();

            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $tp['id']];
            if($i == 1){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
                $nomina = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion)->toArray();
            }else if($i == 2){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
                $nomina = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion)->toArray();
            }else if($i == 3){
                $this->loadModel('ViewMrrhhHistoricoDirectivos');
                $nomina = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion)->toArray();
            }if($i == 4){
                $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
                $nomina = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion)->toArray();
            }else if($i == 5){
                $this->loadModel('ViewMrrhhHistoricoObrerosC');
                $nomina = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion)->toArray();
            }else if($i == 6){
                $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
                $nomina = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion)->toArray();
            }if($i == 7){
                $this->loadModel('ViewMrrhhHistoricoEJubilados');
                $nomina = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion)->toArray();
            }else if($i == 8){
                $this->loadModel('ViewMrrhhHistoricoOJubilados');
                $nomina = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion)->toArray();
            }if($i == 9){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
                $nomina = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion)->toArray();
            }else if($i == 10){
                $this->loadModel('ViewMrrhhHistoricoEPSobre');
                $nomina = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion)->toArray();
            }else if($i == 11){
                $this->loadModel('ViewMrrhhHistoricoEPEsp');
                $nomina = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion)->toArray();
            }else if($i == 12){
                $this->loadModel('ViewMrrhhHistoricoOPSobre');
                $nomina = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion)->toArray();
            }else if($i == 13){
                $this->loadModel('ViewMrrhhHistoricoOPEsp');
                $nomina = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion)->toArray();
            }else if($i == 14){
                $this->loadModel('ViewMrrhhHistoricoPc');
                $nomina = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion)->toArray();
            }else if($i == 15){
                $this->loadModel('ViewMrrhhHistoricoCementerio');
                $nomina = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion)->toArray();
            }else if($i == 16){
                $this->loadModel('ViewMrrhhHistoricoComS');
                $nomina = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion)->toArray();
            }else if($i == 17){
                $this->loadModel('ViewMrrhhHistoricoHonorarioP');
                $nomina = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion)->toArray();
            }

            foreach ($nomina as $key) {
                $this->loadModel('MrrhhUltimoSueldo');
                $us = $this->MrrhhUltimoSueldo->newEntity();
                $us->cedula = $key['cedula'];
                $us->id_tipo_personal = $i;
                $us->mes = $key['mes'];
                $us->quincena = $key['quincena'];
                $us->tipo = 'NOMINA';
                $us->monto = $this->monto_persona('NOMINA', $key['cedula'], $i, $key['mes'], $key['quincena']);
            
                $this->MrrhhUltimoSueldo->save($us);
            }
            break;
        }
        return true; 
    }*/

    public function monto_persona($tipo = null, $cedula = null, $id_tipo_personal = null, $mes = null, $quincena = null, $monto = null){

        $this->loadModel('MrrhhUltimoSueldo');
        $n = $this->MrrhhUltimoSueldo->find('all')->where(['id_tipo_personal IN' => $id_tipo_personal, 'cedula IN' => $cedula, 'mes >=' => $mes, 'quincena >=' => $quincena, 'tipo' => $tipo, 'ano' => ANO_FISCAL])->count();

        if($n == 0){
            $query = $this->MrrhhUltimoSueldo->deleteAll(['id_tipo_personal IN' => $id_tipo_personal, 'cedula IN' => $cedula, 'tipo' => $tipo]);

            $us = $this->MrrhhUltimoSueldo->newEntity();
            $us->cedula = $cedula;
            $us->id_tipo_personal = $id_tipo_personal;
            $us->mes = $mes;
            $us->quincena = $quincena;
            $us->tipo = $tipo;
            $us->monto = $monto;
            $us->ano = ANO_FISCAL;
            $this->MrrhhUltimoSueldo->save($us);
        }

        return true;
    }

}