<?php
namespace App\Controller;

use App\Controller\AppController;

class AjaxController extends AppController
{
    public function cargarpartidasus($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('ViewPresupuestoForma2121');
        $condicion = ['id' => $op];
        $x = $this->ViewPresupuestoForma2121->find('all')->where($condicion)->last();


        $this->loadModel('ViewPresupuestoPartidasTransf');
        $condicion = [ 'or' =>
            [['ano' => $x['ano'], 'id_sector' => $x['id_sector'], 'id_programa' => $x['id_programa'], 'id_sub_programa' => $x['id_sub_programa']], 
            ['id >' => 5000]]
        ];
        $query = $this->ViewPresupuestoPartidasTransf->find('all')->where($condicion)->order(['concatenado' => 'ASC'])->toArray();
        //$query = $this->ViewPresupuestoPartidasTransf->find('all')->order(['concatenado' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function cargarcuenta($numero_cuenta = null){

        $this->layout = 'ajax';

        $this->loadModel('TesoreriaCuentas');
        $condicion = ['numero_cuenta' => $numero_cuenta];
        $query = $this->TesoreriaCuentas->find('all')->where($condicion)->last()->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function cargarcuentacredito($numero_cuenta = null){

        $this->layout = 'ajax';

        $this->loadModel('ViewTesoreriaCuentas');
        $condicion = ['numero_cuenta' => $numero_cuenta];
        $query = $this->ViewTesoreriaCuentas->find('all')->where($condicion)->last()->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function credito(){

        $this->layout = 'ajax';

        $this->loadModel('TesoreriaCuentas');
        $query = $this->TesoreriaCuentas->find('all')->where(['tipo' => true])->toArray();


        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function credito2(){

        $this->layout = 'ajax';

        $this->loadModel('TesoreriaCuentas');
        $query = $this->TesoreriaCuentas->find('all')->where(['tipo' => false])->toArray();


        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function debito(){

        $this->layout = 'ajax';

        $this->loadModel('TesoreriaCuentas');
        $query = $this->TesoreriaCuentas->find('all')->where(['tipo' => false])->toArray();


        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function datoscuenta($numero_cuenta = null){

        $this->layout = 'ajax';

        $this->loadModel('TesoreriaCuentas');
        $query = $this->TesoreriaCuentas->find('all')->where(['numero_cuenta' => $numero_cuenta])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionsector($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSector');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

	public function programas($id = null){

		$this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoPrograma');
		$condicion = ['id_sector' => $op];
		$query = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion, 'order' => 'programa'])->toArray();

		$query = json_encode([$query]);
    	$this->response->type('json');
    	$this->response->body($query);
    	return $this->response;
	}

    public function denominacionprograma($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoPrograma');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

     public function denominacionpartida($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoEgresos');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoEgresos->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function subprogramas($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubPrograma');
        $condicion = ['id_programa' => $op];
        $query = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion, 'order' => 'sub_programa'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionsubprograma($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubPrograma');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function proyectos($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoProyecto');
        $condicion = ['id_sub_programa' => $op];
        $query = $this->PresupuestoProyecto->find('all', ['conditions' => $condicion, 'order' => 'proyecto'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function actividades($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoActividad');
        $condicion = ['id_sub_programa' => $op];
        $query = $this->PresupuestoActividad->find('all', ['conditions' => $condicion, 'order' => 'actividad'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionproyecto($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoProyecto');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoProyecto->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionactividad($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoActividad');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoActividad->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function descripcionpartida($id = null){

        $this->layout = 'ajax'; 
        $op = $id;

        $this->loadModel('ViewPresupuestoPartidasTransf');
        $condicion = ['id' => $op];
        $query = $this->ViewPresupuestoPartidasTransf->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }


    public function disponibilidadpartidaegreso($partida = null, $d = null, $p = null, $a = null){
 
        $this->layout = 'ajax';

        $this->loadModel('ViewPresupuestoForma2121Disponible');
        
        if($d == 0 or $p == 0 or $a == 0){
            $condicion = ['concatenado' => $partida];
        }else{
            $condicion = ['concatenado' => $partida, 'sector' => $d, 'programa' => $p, 'actividad' => $a];
        }
        
        $query = $this->ViewPresupuestoForma2121Disponible->find()->where($condicion)->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

	public function tipopersonal($id = null){

		$this->layout = 'ajax';
        $op = $id;

        $this->loadModel('MrrhhTipoPersonal');
		$condicion = ['tipo_nomina' => $op];
		$query = $this->MrrhhTipoPersonal->find('all', ['conditions' => $condicion])->toArray();

		$query = json_encode([$query]);
    	$this->response->type('json');
    	$this->response->body($query);
    	return $this->response;
	}

	public function cargos($id = null){

		$this->layout = 'ajax';
        $op = $id;

        if($op == 1){
        	$this->loadModel('MrrhhCargosEmpleadosFijos');
			$query = $this->MrrhhCargosEmpleadosFijos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 2){
        	$this->loadModel('MrrhhCargosEmpleadosContratados');
			$query = $this->MrrhhCargosEmpleadosContratados->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 3 or $op == 16 or $op == 17){
        	$this->loadModel('MrrhhCargosDirectivos');
			$query = $this->MrrhhCargosDirectivos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 4 or $op == 15){
        	$this->loadModel('MrrhhCargosObrerosFijos');
			$query = $this->MrrhhCargosObrerosFijos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 5){
            $this->loadModel('MrrhhCargosObrerosContratados');
            $query = $this->MrrhhCargosObrerosContratados->find('all', ['order' => 'denominacion'])->toArray();
            
        }else if($op == 6){
        	$this->loadModel('MrrhhCargosObrerosNoPermanentes');
			$query = $this->MrrhhCargosObrerosNoPermanentes->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 7){
            $this->loadModel('MrrhhCargosJubilados');
            $query = $this->MrrhhCargosJubilados->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 8){
            $this->loadModel('MrrhhCargosObrerosFijos');
            $query = $this->MrrhhCargosObrerosFijos->find('all', ['order' => 'denominacion'])->toArray();
        }else if($op == 14){
            $this->loadModel('MrrhhCargosProteccionCivil');
            $query = $this->MrrhhCargosProteccionCivil->find('all', ['order' => 'denominacion'])->toArray();
        }else{
            $this->loadModel('MrrhhCargosPensionados');
            $query = $this->MrrhhCargosPensionados->find('all', ['order' => 'denominacion'])->toArray();
        }
      
		$query = json_encode([$query]);
    	$this->response->type('json');
    	$this->response->body($query);
    	return $this->response;
	}

	public function grupos($id = null){

		$this->layout = 'ajax';
        $op = $id;

        if($op == 1 or $op == 2 or $op == 9 or $op == 10 or $op == 11 ){
        	$this->loadModel('MrrhhGruposEmpleados');
			$query = $this->MrrhhGruposEmpleados->find('all')->toArray();
            
        }else if($op == 3 or $op == 16 or $op == 17){
        	$this->loadModel('MrrhhGruposDirectivos');
			$query = $this->MrrhhGruposDirectivos->find('all')->toArray();

        }else if ($op == 7) {
            $this->loadModel('MrrhhGruposJubiladosEmpleados');
            $query = $this->MrrhhGruposJubiladosEmpleados->find('all')->toArray();

        }else if($op == 4 or $op == 5 or $op == 8 or $op == 12 or $op == 13 or $op == 15){
        	$this->loadModel('MrrhhGruposObreros');
			$query = $this->MrrhhGruposObreros->find('all')->toArray();
        	
        }else if($op == 6){
            $this->loadModel('MrrhhGruposObrerosNoPermanentes');
            $query = $this->MrrhhGruposObrerosNoPermanentes->find('all')->toArray();
            
        }else if($op == 14){
            $this->loadModel('MrrhhGruposProteccionCivil');
            $query = $this->MrrhhGruposProteccionCivil->find('all')->toArray();
            
        }
      
		$query = json_encode([$query]);
    	$this->response->type('json');
    	$this->response->body($query);
    	return $this->response;
	}


    public function gradonivel($id = null){

        $this->layout = 'ajax';
        $op = $id;

        if($op == 1 or $op == 2 or $op == 3 or $op == 7 or $op == 9 or $op == 10 or $op == 11  or $op == 16 or $op == 17){
            $this->loadModel('GradoNivel');
            $query = $this->GradoNivel->find('all')->toArray();
            
        }/*<!--else if($op == 7){
            $this->loadModel('GradoNivelJubilados');
            $query = $this->GradoNivelJubilados->find('all')->toArray();
            
        }-->*/else if($op == 4 or $op == 5 or $op == 6 or $op == 8 or $op == 12 or $op == 13 or $op == 15){
            $this->loadModel('GradoNivelObreros');
            $query = $this->GradoNivelObreros->find('all')->toArray();
            
        }else if($op == 14){
            $this->loadModel('GradoNivelProteccionCivil');
            $query = $this->GradoNivelProteccionCivil->find('all')->toArray();
            
        }
      
        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function ramo(){

        $this->layout = 'ajax';

        $this->loadModel('PresupuestoRamo');
        $query = $this->PresupuestoRamo->find('all')->where(['id >' => 11])->order(['ramo' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function ramoegreso(){

        $this->layout = 'ajax';

        $this->loadModel('PresupuestoRamo');
        $query = $this->PresupuestoRamo->find('all')->where(['OR' => ['id <' => 12, 'id >' => 24]])->order(['ramo' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionramo($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoRamo');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoRamo->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function subramo($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubRamo');
        $condicion = ['id_ramo' => $op];
        $query = $this->PresupuestoSubRamo->find('all', ['conditions' => $condicion, 'order' => 'sub_ramo'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionsubramo($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubRamo');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoSubRamo->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function especifico($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoEspecifico');
        $condicion = ['id_sub_ramo' => $op];
        $query = $this->PresupuestoEspecifico->find('all', ['conditions' => $condicion, 'order' => 'especifico'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionespecifico($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoEspecifico');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoEspecifico->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function subespecifico($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubEspecifico');
        $condicion = ['id_especifico' => $op];
        $query = $this->PresupuestoSubEspecifico->find('all', ['conditions' => $condicion, 'order' => 'sub_especifico'])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function denominacionsubespecifico($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('PresupuestoSubEspecifico');
        $condicion = ['id' => $op];
        $query = $this->PresupuestoSubEspecifico->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function datosnomina($id = null){

        $this->layout = 'ajax';
        $op = $id;

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['id' => $op];
        $query = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function ultimosueldo($id = null, $d = null, $h = null){

        $this->layout = 'ajax';

        $this->loadModel('ViewRegistrosHacienda');
        $data = $this->ViewRegistrosHacienda->find('all')->where(['banco' => $id, 'and' => ['fecha_pago >=' => $d, 'fecha_pago <=' => $h]])->order(['banco' => 'ASC', 'fecha_pago' => 'ASC', 'id' => 'ASC'])->toArray();

        $banco = 0;
        $saldo = 0;

        foreach ($data as $key) {

            if($key['monto_debe'] != 0){
                $saldo += $key['monto_debe'];
            }
            if($key['monto_haber'] != 0){
                $saldo -= $key['monto_haber'];
            }
        }

        //=================================================================================

        $query = json_encode([$saldo]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function baseimponible($req = null){
        $this->layout = 'ajax';
        $req = $req;

        $this->loadModel('Ordenamiento_Nomina');
        $this->loadModel('Ordenamiento_Compra');
        $this->loadModel('Ordenamiento_Presupuesto');

        $condicion = ['id_requisicion' => $req];
        $n = $this->Ordenamiento_Nomina->find('all', ['conditions' => $condicion])->count();

        if($n != 0){
            $query = $this->Ordenamiento_Nomina->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $n = $this->Ordenamiento_Compra->find('all', ['conditions' => $condicion])->count();

            if($n != 0){
                $query = $this->Ordenamiento_Compra->find('all', ['conditions' => $condicion])->toArray();
            }else{
                $n = $this->Ordenamiento_Presupuesto->find('all', ['conditions' => $condicion])->count();

                if($n != 0){
                    $query = $this->Ordenamiento_Presupuesto->find('all', ['conditions' => $condicion])->toArray();
                }
            }
        }

        $neto = $query[0]['neto'];

        foreach ($query as $key) {
            if($key['tipo_porcentaje'] != ''){
                $neto -= $key['bs'];
            }
        }

        $query = json_encode([$neto]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function inpuesto($req = null){
        $this->layout = 'ajax';
        $req = $req;

        $this->loadModel('Ordenamiento_Nomina');
        $this->loadModel('Ordenamiento_Compra');
        $this->loadModel('Ordenamiento_Presupuesto');

        $condicion = ['id_requisicion' => $req];
        $n = $this->Ordenamiento_Nomina->find('all', ['conditions' => $condicion])->count();

        if($n != 0){
            $query = $this->Ordenamiento_Nomina->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $n = $this->Ordenamiento_Compra->find('all', ['conditions' => $condicion])->count();

            if($n != 0){
                $query = $this->Ordenamiento_Compra->find('all', ['conditions' => $condicion])->toArray();
            }else{
                $n = $this->Ordenamiento_Presupuesto->find('all', ['conditions' => $condicion])->count();

                if($n != 0){
                    $query = $this->Ordenamiento_Presupuesto->find('all', ['conditions' => $condicion])->toArray();
                }
            }
        }

        $neto = 0;

        foreach ($query as $key) {
            if($key['tipo_porcentaje'] != ''){
                $neto += $key['bs'];
            }
        }

        $query = json_encode([$neto]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }



    public function deducciones($requisicion = null, $tipo = null){

        $this->layout = 'ajax';

        $this->loadModel('MrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $x = $this->MrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        $tp = $x['id_tipo_personal'];

        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        if($tp == 1){
            
            $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

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

                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                    $funeraria = 20000/2; 
                else $funeraria = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['hijos'] != 0 AND $key['status'] !=0) 
                    $prima_hijos = ( 62500 * $key['hijos']) / 2; 
                else $prima_hijos = 0;

                if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                    $prima_hogar = 62500 / 2; 
                else $prima_hogar = 0;

                //DEDUCCIONES DE LEY
                if($key['status'] !=0) 
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                else $faov = 0;

                if($key['status'] !=0) 
                    $deduccion_sso = $key['deduccion_sso']; 
                else $deduccion_sso = 0;

                if($key['status'] !=0) 
                    $deduccion_rpe = $key['deduccion_rpe']; 
                else $deduccion_rpe = 0;

                if($key['status'] !=0) 
                    $deduccion_fpj = $key['deduccion_fpj']; 
                else $deduccion_fpj = 0;

                //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
                if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
                if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
                if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;

                if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
                if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
                if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
                if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;

                if($key['sindicato'] != 0 AND $key['status'] !=0) 
                    $sindicato = (250000*0.01) / 2; else 
                $sindicato = 0;

                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                    $asociacion = 0.10; 
                else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;

                if($key['status'] !=0) 
                    $sueldo_base = $key['sueldo_base']; 
                else $sueldo_base = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                @$t_sso += $sso;
                @$t_rpe += $rpe;
                @$t_faov += $faov_dc;
                @$t_fpj += $fpj;
                @$t_caja += $deduccion_caja;
                @$t_prestamo_caja += $prestamo_caja;
                @$t_funeraria += $funeraria;
                @$t_sindicato += $sindicato;
                @$t_asociacion += $asociacion;
                @$t_x_depositario += $x_depositario;
            }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 2){
            
            $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

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

            $deducciones = 0;
            $t_prestamo_caja = 0;

            $t_ajuste_sueldo = 0;

            foreach ($data as $key) {
                
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

                    if($key['funeraria'] != 0 AND $key['status'] !=0) 
                        $funeraria = 20000/2; 
                    else $funeraria = 0;

                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                        $deduccion_caja = $key['deduccion_caja_ahorro']; 
                    else $deduccion_caja = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['hijos'] != 0 AND $key['status'] !=0) 
                        $prima_hijos = ( 62500 * $key['hijos']) / 2; 
                    else $prima_hijos = 0;

                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                        $prima_hogar = 62500 / 2; 
                    else $prima_hogar = 0;

                    //DEDUCCIONES DE LEY
                    if($key['status'] !=0) 
                        $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                    else $faov = 0;

                    if($key['status'] !=0) 
                        $deduccion_sso = $key['deduccion_sso']; 
                    else $deduccion_sso = 0;

                    if($key['status'] !=0) 
                        $deduccion_rpe = $key['deduccion_rpe']; 
                    else $deduccion_rpe = 0;

                    //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                    if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
                    if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
                    if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;

                    if($key['ajuste_a_caja'] !=0) $a_funeraria = $key['ajuste_a_caja']; else $a_funeraria = 0;

                    if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
                    if($rpe_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
                    if($faov_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                        $sindicato = (250000*0.01) / 2; else 
                    $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                        $asociacion = 0.10; 
                    else $asociacion = 0;


                    $funeraria_dc = $funeraria + $a_funeraria;

                    if($key['status'] !=0){
                        if ($deduccion_sso != 0) {
                            $deducciones +=  $deduccion_sso;
                        }

                        if ($deduccion_rpe != 0) {
                            $deducciones +=  $deduccion_rpe;
                        }

                        if ($faov != 0) {
                            $deducciones +=  $faov;
                        }

                        if ($deduccion_caja != 0) {
                            $deducciones +=  $deduccion_caja;
                        }

                        if ($funeraria_dc != 0) {
                            $deducciones +=  $funeraria_dc;
                        }
                    }else{ $deducciones = 0; }

                    $t_sso += $deduccion_sso;
                    $t_rpe += $deduccion_rpe;
                    $t_faov += $faov;
                    $t_funeraria += $funeraria_dc;
    
            }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 3){
            
            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

            $this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

            $t_sueldo_base = 0;
            $t_prima_hijos  = 0;
            $t_prima_antiguedad  = 0;
            $t_prima_profesion  = 0;
            $t_total  = 0;
            $t_sueldo_altos = 0;

            $t_sso = 0;
            $t_rpe = 0;
            $t_faov = 0;
            $t_fpj = 0;
            $t_caja = 0;

            $t_funeraria = 0;
            $t_sindicato = 0;
            $t_asso = 0;
            $t_arpe = 0;
            $t_afaov = 0;
            $t_afpj = 0;
            $t_acaja = 0;

            foreach ($data as $key) {

                if ($key['sueldo'] !=0) {

                     if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                   
                }else{
                    if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                    
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

                            if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                            if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                            if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                            if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $var2 = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $dif_sso +
                            $dif_rpe + 
                            $dif_faov + 
                            $dif_fpj +
                            $x_depositario;
                         else $var2 = 0;
                        

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

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                            if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                            if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                            if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $var2 = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $dif_sso +
                            $dif_rpe + 
                            $dif_faov + 
                            $dif_fpj +
                            $x_depositario;
                         else $var2 = 0;

                }

                @$t_sso += $deduccion_sso;
                @$t_rpe += $deduccion_rpe ;
                @$t_faov += $faov;
                @$t_fpj += $deduccion_fpj;
                @$t_caja += $deduccion_caja_ahorro;
                @$t_prestamo_caja += $prestamo_caja;
                @$t_funeraria += $funeraria;
                @$t_sindicato += $sindicato;
                @$t_asociacion += $asociacion;
             }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 4){
            
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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

            $t_ajuste_sueldo  = 0;
            $t_prueba  = 0;

            foreach ($data as $key) {

                if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
               
                if($key['status'] !=0) 
                    $deduccion_sso = $key['deduccion_sso']; 
                else $deduccion_sso = 0;

                if($key['status'] !=0) 
                    $deduccion_rpe = $key['deduccion_rpe']; 
                else $deduccion_rpe = 0;

                if($key['status'] !=0) 
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                else $faov = 0;


                if ($key['requisicion'] == 14) {
                    if($key['cedula'] == '3543802') $faov = 1662.38;
                    if($key['cedula'] == '3833997') $faov = 2785.63;
                    if($key['cedula'] == '5293955') $faov = 1500.53;
                    if($key['cedula'] == '5295914') $faov = 1275.00;
                    if($key['cedula'] == '6564129') $faov = 1500.53;
                    if($key['cedula'] == '7473695') $faov = 1250.00;
                    if($key['cedula'] == '7474517') $faov = 1849.88;
                    if($key['cedula'] == '7478636') $faov = 2234.50;
                    if($key['cedula'] == '7479753') $faov = 1790.63;
                    if($key['cedula'] == '7482688') $faov = 2979.75;
                    if($key['cedula'] == '7482939') $faov = 3163.50;
                    if($key['cedula'] == '7485241') $faov = 2308.13;
                    if($key['cedula'] == '7492058') $faov = 1300.00;
                    if($key['cedula'] == '7494701') $faov = 1462.50;
                    if($key['cedula'] == '7495687') $faov = 1623.90;
                    if($key['cedula'] == '7496768') $faov = 2507.50;
                    if($key['cedula'] == '7574464') $faov = 1250.00;
                    if($key['cedula'] == '7881126') $faov = 1726.50;
                    if($key['cedula'] == '8722666') $faov = 3293.63;
                    if($key['cedula'] == '8998092') $faov = 3045.00;
                    if($key['cedula'] == '9500984') $faov = 1705.73;
                    if($key['cedula'] == '9501706') $faov = 1500.53;
                    if($key['cedula'] == '9502207') $faov = 1978.13;
                    if($key['cedula'] == '9503364') $faov = 2640.63;
                    if($key['cedula'] == '9503770') $faov = 3275.00;
                    if($key['cedula'] == '9505045') $faov = 1752.15;
                    if($key['cedula'] == '9505957') $faov = 1893.23;
                    if($key['cedula'] == '9510004') $faov = 1893.23;
                    if($key['cedula'] == '9510312') $faov = 2080.73;
                    if($key['cedula'] == '9510680') $faov = 4422.90;
                    if($key['cedula'] == '9516191') $faov = 2268.23;
                    if($key['cedula'] == '9519397') $faov = 1462.50;
                    if($key['cedula'] == '9519407') $faov = 1375.00;
                    if($key['cedula'] == '9520363') $faov = 1790.63;
                    if($key['cedula'] == '9521122') $faov = 2976.00;
                    if($key['cedula'] == '9524559') $faov = 2042.25;
                    if($key['cedula'] == '9525144') $faov = 1662.38;
                    if($key['cedula'] == '9526473') $faov = 1829.10;
                    if($key['cedula'] == '9529752') $faov = 1978.13;
                    if($key['cedula'] == '9923330') $faov = 1553.00;
                    if($key['cedula'] == '9925274') $faov = 1553.00;
                    if($key['cedula'] == '9926257') $faov = 1250.00;
                    if($key['cedula'] == '9926409') $faov = 2296.25;
                    if($key['cedula'] == '9927004') $faov = 1752.15;
                    if($key['cedula'] == '9929428') $faov = 3048.75;
                    if($key['cedula'] == '9929503') $faov = 1662.38;
                    if($key['cedula'] == '9929504') $faov = 1553.00;
                    if($key['cedula'] == '9931669') $faov = 1462.50;
                    if($key['cedula'] == '9932596') $faov = 1700.00;
                    if($key['cedula'] == '9932905') $faov = 1854.75;
                    if($key['cedula'] == '9932940') $faov = 3275.00;
                    if($key['cedula'] == '10475223') $faov = 2625.20;
                    if($key['cedula'] == '10475903') $faov = 1829.10;
                    if($key['cedula'] == '10476624') $faov = 1978.13;
                    if($key['cedula'] == '10476975') $faov = 4047.90;
                    if($key['cedula'] == '10477887') $faov = 1650.00;
                    if($key['cedula'] == '10478306') $faov = 2618.75;
                    if($key['cedula'] == '10479220') $faov = 1512.50;
                    if($key['cedula'] == '10601643') $faov = 2016.60;
                    if($key['cedula'] == '10700085') $faov = 3354.75;
                    if($key['cedula'] == '10701275') $faov = 1939.65;
                    if($key['cedula'] == '10701643') $faov = 1970.18;
                    if($key['cedula'] == '10703897') $faov = 2018.13;
                    if($key['cedula'] == '10704496') $faov = 2507.50;
                    if($key['cedula'] == '10707101') $faov = 2653.40;
                    if($key['cedula'] == '10709033') $faov = 1790.63;
                    if($key['cedula'] == '10709265') $faov = 3519.30;
                    if($key['cedula'] == '10709757') $faov = 3048.32;
                    if($key['cedula'] == '11137031') $faov = 2405.00;
                    if($key['cedula'] == '11139537') $faov = 2253.00;
                    if($key['cedula'] == '11141183') $faov = 4918.75;
                    if($key['cedula'] == '11141615') $faov = 2405.00;
                    if($key['cedula'] == '11141882') $faov = 1662.38;
                    if($key['cedula'] == '11472085') $faov = 2832.70;
                    if($key['cedula'] == '11472666') $faov = 2084.38;
                    if($key['cedula'] == '11475903') $faov = 2652.50;
                    if($key['cedula'] == '11476310') $faov = 2652.50;
                    if($key['cedula'] == '11479035') $faov = 2973.13;
                    if($key['cedula'] == '11479989') $faov = 2861.25;
                    if($key['cedula'] == '11523671') $faov = 2108.75;
                    if($key['cedula'] == '11785597') $faov = 2547.68;
                    if($key['cedula'] == '11800660') $faov = 3219.00;
                    if($key['cedula'] == '11801017') $faov = 1790.63;
                    if($key['cedula'] == '11801533') $faov = 1849.88;
                    if($key['cedula'] == '11803194') $faov = 3747.60;
                    if($key['cedula'] == '11805286') $faov = 2098.43;
                    if($key['cedula'] == '11805838') $faov = 2217.50;
                    if($key['cedula'] == '12175546') $faov = 1726.50;
                    if($key['cedula'] == '12175690') $faov = 1914.00;
                    if($key['cedula'] == '12176602') $faov = 1500.53;
                    if($key['cedula'] == '12177347') $faov = 1914.00;
                    if($key['cedula'] == '12178787') $faov = 2571.15;
                    if($key['cedula'] == '12180011') $faov = 2080.73;
                    if($key['cedula'] == '12182879') $faov = 2425.13;
                    if($key['cedula'] == '12488070') $faov = 1250.00;
                    if($key['cedula'] == '12488626') $faov = 3097.05;
                    if($key['cedula'] == '12489821') $faov = 2459.38;
                    if($key['cedula'] == '12586280') $faov = 2640.63;
                    if($key['cedula'] == '12588550') $faov = 1650.00;
                    if($key['cedula'] == '12713199') $faov = 1437.50;
                    if($key['cedula'] == '12732114') $faov = 2080.73;
                    if($key['cedula'] == '12732322') $faov = 2465.63;
                    if($key['cedula'] == '12732580') $faov = 2658.38;
                    if($key['cedula'] == '12733032') $faov = 3385.50;
                    if($key['cedula'] == '12733982') $faov = 2574.38;
                    if($key['cedula'] == '12735401') $faov = 1275.00;
                    if($key['cedula'] == '12736776') $faov = 3270.75;
                    if($key['cedula'] == '12817756') $faov = 2398.75;
                    if($key['cedula'] == '13027910') $faov = 1705.73;
                    if($key['cedula'] == '13028206') $faov = 2588.95;
                    if($key['cedula'] == '13028927') $faov = 1752.15;
                    if($key['cedula'] == '13106005') $faov = 1250.00;
                    if($key['cedula'] == '13202093') $faov = 2580.15;
                    if($key['cedula'] == '13202971') $faov = 1250.00;
                    if($key['cedula'] == '13204828') $faov = 2223.75;
                    if($key['cedula'] == '13487516') $faov = 1500.53;
                    if($key['cedula'] == '13487758') $faov = 1921.95;
                    if($key['cedula'] == '13496585') $faov = 2165.63;
                    if($key['cedula'] == '13724295') $faov = 2127.15;
                    if($key['cedula'] == '14028041') $faov = 3027.50;
                    if($key['cedula'] == '14168351') $faov = 1650.00;
                    if($key['cedula'] == '14610356') $faov = 2223.75;
                    if($key['cedula'] == '14654553') $faov = 3010.50;
                    if($key['cedula'] == '14654879') $faov = 3041.25;
                    if($key['cedula'] == '14793692') $faov = 2652.50;
                    if($key['cedula'] == '14793913') $faov = 2037.38;
                    if($key['cedula'] == '14793974') $faov = 2063.03;
                    if($key['cedula'] == '14794362') $faov = 1437.50;
                    if($key['cedula'] == '15096391') $faov = 3645.11;
                    if($key['cedula'] == '15096461') $faov = 2695.00;
                    if($key['cedula'] == '15236045') $faov = 2296.25;
                    if($key['cedula'] == '15237399') $faov = 1970.18;
                    if($key['cedula'] == '15558926') $faov = 2282.50;
                    if($key['cedula'] == '15702033') $faov = 3822.30;
                    if($key['cedula'] == '16103138') $faov = 1675.00;
                    if($key['cedula'] == '16347383') $faov = 2165.63;
                    if($key['cedula'] == '16348608') $faov = 2181.25;
                    if($key['cedula'] == '16519583') $faov = 2412.38;
                    if($key['cedula'] == '16708236') $faov = 1250.00;
                    if($key['cedula'] == '16709619') $faov = 3145.20;
                    if($key['cedula'] == '16941738') $faov = 2592.50;
                    if($key['cedula'] == '16943846') $faov = 1617.50;
                    if($key['cedula'] == '17102463') $faov = 2768.13;
                    if($key['cedula'] == '17102826') $faov = 2834.38;
                    if($key['cedula'] == '17178067') $faov = 2250.53;
                    if($key['cedula'] == '17351327') $faov = 2224.88;
                    if($key['cedula'] == '17351379') $faov = 1931.70;
                    if($key['cedula'] == '17628371') $faov = 3481.13;
                    if($key['cedula'] == '17628866') $faov = 1552.50;
                    if($key['cedula'] == '17924461') $faov = 1983.26;
                    if($key['cedula'] == '17924762') $faov = 1500.53;
                    if($key['cedula'] == '18047203') $faov = 1931.70;
                    if($key['cedula'] == '18198063') $faov = 1978.13;
                    if($key['cedula'] == '18199686') $faov = 1811.40;
                    if($key['cedula'] == '18292793') $faov = 1875.53;
                    if($key['cedula'] == '18294101') $faov = 3028.40;
                    if($key['cedula'] == '18480700') $faov = 1650.00;
                    if($key['cedula'] == '18605572') $faov = 3048.75;
                    if($key['cedula'] == '19007212') $faov = 2495.63;
                    if($key['cedula'] == '19007875') $faov = 2016.60;
                    if($key['cedula'] == '20295968') $faov = 2504.13;
                    if($key['cedula'] == '20297389') $faov = 0.00;
                    if($key['cedula'] == '20569435') $faov = 2459.38;
                    if($key['cedula'] == '20569708') $faov = 2224.88;
                    if($key['cedula'] == '20682540') $faov = 2957.02;
                    if($key['cedula'] == '20932080') $faov = 3335.70;
                    if($key['cedula'] == '20933405') $faov = 1849.88;
                    if($key['cedula'] == '21113093') $faov = 2223.75;
                    if($key['cedula'] == '21114952') $faov = 2217.50;
                    if($key['cedula'] == '21666856') $faov = 1662.30;
                    if($key['cedula'] == '22600924') $faov = 2517.00;
                    if($key['cedula'] == '23515366') $faov = 2447.50;
                    if($key['cedula'] == '23678242') $faov = 2187.50;
                    if($key['cedula'] == '24308486') $faov = 1919.13;
                    if($key['cedula'] == '24562975') $faov = 2075.00;
                    if($key['cedula'] == '24590046') $faov = 2402.25;
                    if($key['cedula'] == '24590174') $faov = 2695.00;
                    if($key['cedula'] == '24787298') $faov = 2260.00;
                    if($key['cedula'] == '25127589') $faov = 2412.38;
                    if($key['cedula'] == '26656518') $faov = 2260.00;
                    if($key['cedula'] == '26991629') $faov = 2271.88;
                 }else{
                    if($key['status'] !=0) 
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                    else $faov = 0;
                 }


                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                    $asociacion = 0.10; 
                else $asociacion = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                    $funeraria = 20000/2; 
                else $funeraria = 0;

                if($key['sindicato'] != 0 AND $key['status'] !=0) 
                    $sindicato = (250000*0.01) / 2; else 
                $sindicato = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

           
                @$t_sso += $deduccion_sso;
                @$t_rpe += $deduccion_rpe;
                @$t_faov += $faov;
                @$t_caja += $deduccion_caja;
                @$t_prestamo_caja += $prestamo_caja;
                @$t_funeraria += $funeraria;
                @$t_sindicato += $sindicato;
                @$t_asociacion += $asociacion;
                @$t_x_depositario += $x_depositario;

            }

        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 5){
            
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];

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
                   
                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                    $funeraria = 20000/2; 
                else $funeraria = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['hijos'] != 0 AND $key['status'] !=0) 
                    $prima_hijos = ( 62500 * $key['hijos']) / 2; 
                else $prima_hijos = 0;

                if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                    $prima_hogar = 62500 / 2; 
                else $prima_hogar = 0;

                if($key['status'] !=0) 
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                else $faov = 0;

                if($key['status'] !=0) 
                    $deduccion_sso = $key['deduccion_sso']; 
                else $deduccion_sso = 0;

                if($key['status'] !=0) 
                    $deduccion_rpe = $key['deduccion_rpe']; 
                else $deduccion_rpe = 0;

                if($key['status'] !=0) 
                    $deduccion_fpj = $key['deduccion_fpj']; 
                else $deduccion_fpj = 0;

                if($key['sindicato'] != 0 AND $key['status'] !=0) 
                    $sindicato = (250000*0.01) / 2; else 
                $sindicato = 0;

                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                    $asociacion = 0.10; 
                else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;


                if($key['status'] !=0) 
                    $sueldo_base = $key['sueldo_base']; 
                else $sueldo_base = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                @$t_sso += $deduccion_sso;
                @$t_rpe += $deduccion_rpe;
                @$t_faov += $faov;
                @$t_fpj += $deduccion_fpj;
                @$t_caja += $deduccion_caja;
                @$t_prestamo_caja += $prestamo_caja;
                @$t_funeraria += $funeraria;
                @$t_sindicato += $sindicato;
                @$t_asociacion += $asociacion;
                @$t_x_depositario += $x_depositario;
             }

        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 6){
            //NO TIENE DEDUCCIONES EN EL REPORTE
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 7){
            
            $this->loadModel('ViewMrrhhHistoricoEJubilados');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

            $t_sueldo_base = 0;
            $t_prima_hijos  = 0;
            $t_prima_antiguedad  = 0;
            $t_prima_profesion  = 0;

            $t_total  = 0;
            $t_sso = 0;
            $t_rpe = 0;
            $t_faov = 0;
            $t_funeraria = 0;
            $t_sindicato = 0;
            $t_asociacion = 0;
            $t_caja = 0;

            $t_asso = 0;
            $t_arpe = 0;
            $t_afaov = 0;
            $t_acaja = 0;

            $t_aportecaja = 0;
            $t_prestamo_caja = 0;

            $t_ajuste_p_profesion = 0;
            $t_profesion_dc=0;

            $t_x_depositario = 0;

            $ajuste_p_profesion = 0;
            $t_dias_a_pagar = 0;

            $prima_profesion_dc = 0;

            $dias_dejados_c = 0;

            foreach ($data as $key) {

                if ($key['sueldo'] != 0) {

                    if($key['status'] !=0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = 0;
                    if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

                    if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;


                     if($key['dias_dejados_c'] != 0){
                        
                        $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c'];
                        $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']);;
                     }

                    //===============================================================================================
                   
                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                        $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                     if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                        $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                    $prestamo = (double)$key['prestamo_caja_ahorro'];

                    if ($key['prestamo_caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_prestamo_caja = $prestamo; else $deduccion_prestamo_caja = 0;
                   
                    @$t_caja += $deduccion_caja;
                    @$t_prestamo_caja += $deduccion_prestamo_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;
                    @$t_x_depositario += $x_depositario;

                 }else{

                    if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
                    if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;

                     if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

                     if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c']; else $dias_a_pagar = 0;

                    if($key['dias_dejados_c'] != 0){
                        
                        $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c'];
                        $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']);;
                     } 

                    //===============================================================================================
                   
                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                        $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                     if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                        $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                    $prestamo = (double)$key['prestamo_caja_ahorro'];

                    if ($key['prestamo_caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_prestamo_caja = $prestamo; else $deduccion_prestamo_caja = 0;
                }
                    @$t_caja += $deduccion_caja;
                    @$t_prestamo_caja += $deduccion_prestamo_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;
                    @$t_x_depositario += $x_depositario;
         }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 8){
        
            $this->loadModel('ViewMrrhhHistoricoOJubilados');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);


            $t_sueldo_base = 0;
            $t_prima_hijos  = 0;
            $t_prima_antiguedad  = 0;
            $t_prima_profesion  = 0;

            $t_total  = 0;
            $t_sso = 0;
            $t_rpe = 0;
            $t_faov = 0;
            $t_funeraria = 0;
            $t_sindicato = 0;
            $t_asociacion = 0;
            $t_caja = 0;

            $t_asso = 0;
            $t_arpe = 0;
            $t_afaov = 0;
            $t_acaja = 0;

            $t_aportecaja = 0;
            $t_prestamo_caja = 0;

            $t_x_depositario = 0;
            $t_becas = 0;

            $t_var1 = 0;
            $t_var2 = 0;
            $t_var3 = 0;

            $var3 = 0;

            foreach ($data as $key) {


                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
               

                 if ($key['sueldo'] !=0) {

                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;

                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                     if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                        else $prestamo_caja = 0;

                    if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) /2 ; else $sindicato = 0;
                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                    if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $var2 = 0;


                 }else{

                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;

                     if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                        else $prestamo_caja = 0;

                    if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                    if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $var2 = 0;
                 }

                $t_funeraria += $funeraria;
                $t_caja += $deduccion_caja;
                $t_prestamo_caja += $prestamo_caja;
                $t_sindicato += $sindicato;
             }

        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

            $t_sueldo_base = 0;
            $t_prima_hijos  = 0;
            $t_prima_antiguedad  = 0;
            $t_prima_profesion  = 0;

            $t_total  = 0;
            $t_sso = 0;
            $t_rpe = 0;
            $t_faov = 0;
            $t_funeraria = 0;
            $t_sindicato = 0;
            $t_asociacion = 0;
            $t_caja = 0;

            $t_asso = 0;
            $t_arpe = 0;
            $t_afaov = 0;
            $t_acaja = 0;

            $t_aportecaja = 0;
            $t_prestamo_caja = 0;

            $t_x_depositario = 0;


            foreach ($data as $key) {

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja; else $total = 0;
               
                @$t_caja += $deduccion_caja;
                @$t_prestamo_caja += $prestamo_caja;
                @$t_funeraria += $funeraria;
                @$t_sindicato += $sindicato;
                @$t_asociacion += $asociacion;
                @$t_x_depositario += $x_depositario;

            }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 10){
            //NO TIENE DEDUCCIONES EN EL REPORTE
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 11){
            //NO TIENE DEDUCCIONES EN EL REPORTE
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 12){
            //NO TIENE DEDUCCIONES EN EL REPORTE
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 13){
            
            $this->loadModel('ViewMrrhhHistoricoOPEsp');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

            $t_asignacion = 0;
            $t_deduccion = 0;
            $t_sindicato = 0;
            $t_funeraria = 0;

            foreach ($data as $key) {

                if ($key['sueldo'] !=0) {

                        if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2; else 
                        $sindicato = 0;

                        if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                }else{

                        if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (250000*0.01) / 2; else 
                        $sindicato = 0;

                        if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                }
             }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistoricoPc');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

            $t_sueldo_base = 0;
            $t_prima_hijos  = 0;
            $t_prima_antiguedad  = 0;
            $t_prima_profesion  = 0;
            $t_prima_hogar  = 0;
            $t_total  = 0;

            $t_sso = 0;
            $t_caja = 0;
            $t_rpe = 0;
            $t_faov = 0;
            $t_funeraria = 0;

            $t_asso = 0;
            $t_arpe = 0;
            $t_afaov = 0;

            $asignaciones = 0;
            $deducciones = 0;
            $aporte_patronal = 0;
            $t_asignacion = 0;
            $t_deduccion = 0;
            $t_aporte = 0;
            $aporte_patronal_afpj = 0;
            $t_aporte_patronal_afpj = 0;

            foreach ($data as $key) {

                 if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                

                if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;


                if($key['cedula'] == 7103555) $faov = 3075.98;
                if($key['cedula'] == 7138631) $faov = 3190.03;
                if($key['cedula'] == 9508679) $faov = 3175.20;
                if($key['cedula'] == 9518601) $faov = 1908.00;
                if($key['cedula'] == 11476248) $faov = 2184.50;
                if($key['cedula'] == 13496354) $faov =  2809.50;
                if($key['cedula'] == 14397446) $faov =  0.00;
                if($key['cedula'] == 15095743) $faov =  1872.00;
                if($key['cedula'] == 16708563) $faov =  3418.13;
                if($key['cedula'] == 16828557) $faov =  3151.43;
                if($key['cedula'] == 16941831) $faov =  1836.00;
                if($key['cedula'] == 17842117) $faov =  2526.42;
                if($key['cedula'] == 18768891) $faov =  2184.50;
                if($key['cedula'] == 4447784) $faov =  2184.50;


                if($key['status'] !=0) 
                    $deduccion_fpj = $key['deduccion_fpj']; 
                else $deduccion_fpj = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
               
                @$t_sso += $deduccion_sso;
                @$t_rpe += $deduccion_rpe;
                @$t_fpj += $deduccion_fpj;
                @$t_faov += $faov;
                @$t_funeraria += $funeraria;
                @$t_deduccion  += $deduccion;
             }
        //=============================================================================================
        //=============================================================================================
        //=============================================================================================
        }

        if($tipo == 2){
             $query =  $t_sso;
        }else if($tipo == 3){
             $query =  $t_rpe;
        }else if($tipo == 4){
             $query =  $t_faov;
        }else if($tipo == 5){
             $query =  $t_fpj;
        }else if($tipo == 6){
             $query =  $t_caja;
        }else if($tipo == 7){
             $query =  $t_prestamo_caja;
        }else if($tipo == 8){
             $query =  $t_funeraria;
        }else if($tipo == 9){
             $query =  $t_sindicato;
        }else if($tipo == 10){
             $query =  $t_asociacion;
        }else if($tipo == 11){
            $query =  $t_x_depositario;
        }    

        $query = json_encode([$query]);
        $this->response->type('json');
        $this->response->body($query);
        return $this->response;
    }

    public function excel(){
        $this->layout='ajax';
        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }

    public function txt(){
        $this->layout='ajax';
        $this->response->type('application/vnd.opentxtformats-officedocument.spreadsheetml.sheet');
    }

}
