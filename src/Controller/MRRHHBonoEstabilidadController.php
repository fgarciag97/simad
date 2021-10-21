<?php
namespace App\Controller;

use App\Controller\AppController;

 
class MRRHHBonoEstabilidadController extends AppController
{
    public function index($tp = null, $m = null, $q = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['concepto <>' => '', 'tipo' => 'BONO ESTABILIDAD'];
        $nominas = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        $this->set(compact('nominas'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_nomina = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tipo_nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_nomina', $options);

        //========================================================
        //Carga del Select
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
        //Carga del Select
        //========================================================
        $this->loadModel('Quincena');

        $quincena = $this->Quincena->find('all')->toArray();
        $options = [];
        foreach ($quincena as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('quincena', $options);

        $a = 0;

        //========================================================
        //COncepto de la nomina
        //========================================================
        if($m != null and $q != null){
            $mes = $this->Mes->find('all')->Where(['id' => $m])->toArray();
            $quincena = $this->Quincena->find('all')->Where(['id' => $q])->toArray();
            $tipo_personal = $this->MrrhhTipoPersonal->find('all')->Where(['id' => $tp])->toArray();

            $concepto = strtoupper("PAGO BONO DE ESTABILIDAD DE LA " . @$quincena[0]['denominacion'] . " DEL MES DE " . @$mes[0]['denominacion'] . " DE " . @$tipo_personal[0]['denominacion']);
            $this->set('concepto', $concepto);
        }

        //========================================================
        //Almacenar en tabla
        //========================================================

        if($tp != null and $m != null and $q != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('qs', $q);

            if($tp == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $query = $this->ViewMrrhhEmpleadosFijosAux->find('all');
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                $query = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $query = $this->ViewMrrhhDirectivosAux->find('all');
            }if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $query = $this->ViewMrrhhObrerosNoPermanentesAux->find('all');
            }if($tp == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $query = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $query = $this->ViewMrrhhJubiladosObrerosAux->find('all');
            }if($tp == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                $query = $this->ViewMrrhhPensionadosEmpleadosAux->find('all');
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                $query = $this->ViewMrrhhPenSobreEmpleadosAux->find('all');
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                $query = $this->ViewMrrhhPenEspEmpleadosAux->find('all');
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                $query = $this->ViewMrrhhPenSobreObrerosAux->find('all');
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhPenEspObrerosAux');
                $query = $this->ViewMrrhhPenEspObrerosAux->find('all');
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find('all');
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhCementerioAux');
                $query = $this->ViewMrrhhCementerioAux->find('all');
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicioAux');
                $query = $this->ViewMrrhhComisionServicioAux->find('all');
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioPAux');
                $query = $this->ViewMrrhhHonorarioPAux->find('all');
            }


            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
                $n = $this->ViewMrrhhHistBeEmpleadosFijos->find('all')->where($condicion)->count();
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistBeEmpleadosC');
                $n = $this->ViewMrrhhHistBeEmpleadosC->find('all')->where($condicion)->count();
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistBeDirectivos');
                $n = $this->ViewMrrhhHistBeDirectivos->find('all')->where($condicion)->count();
            }if($tp == 4){
                $this->loadModel('ViewMrrhhHistBeObrerosFijos');
                $n = $this->ViewMrrhhHistBeObrerosFijos->find('all')->where($condicion)->count();
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistBeObrerosC');
                $n = $this->ViewMrrhhHistBeObrerosC->find('all')->where($condicion)->count();
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistBeObrerosNoP');
                $n = $this->ViewMrrhhHistBeObrerosNoP->find('all')->where($condicion)->count();
            }if($tp == 7){
                $this->loadModel('ViewMrrhhHistBeEJubilados');
                $n = $this->ViewMrrhhHistBeEJubilados->find('all')->where($condicion)->count();
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistBeOJubilados');
                $n = $this->ViewMrrhhHistBeOJubilados->find('all')->where($condicion)->count();
            }if($tp == 9){
                $this->loadModel('ViewMrrhhHistBeEmpleadosP');
                $n = $this->ViewMrrhhHistBeEmpleadosP->find('all')->where($condicion)->count();
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistBeEPSobre');
                $n = $this->ViewMrrhhHistBeEPSobre->find('all')->where($condicion)->count();
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistBeEPEsp');
                $n = $this->ViewMrrhhHistBeEPEsp->find('all')->where($condicion)->count();
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistBeOPSobre');
                $n = $this->ViewMrrhhHistBeOPSobre->find('all')->where($condicion)->count();
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistBeOPEsp');
                $n = $this->ViewMrrhhHistBeOPEsp->find('all')->where($condicion)->count();
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistBePc');
                $n = $this->ViewMrrhhHistBePc->find('all')->where($condicion)->count();
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistBeCementerio');
                $n = $this->ViewMrrhhHistBeCementerio->find('all')->where($condicion)->count();
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistBeComS');
                $n = $this->ViewMrrhhHistBeComS->find('all')->where($condicion)->count();
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistBeHonorarioP');
                $n = $this->ViewMrrhhHistBeHonorarioP->find('all')->where($condicion)->count();
            }

            if($n == 0){
                foreach ($query as $reg) {

                    if($tp == 1){
                        $this->loadModel('MrrhhHistBeEmpleadosFijos');
                            $nomina = $this->MrrhhHistBeEmpleadosFijos->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 2){
                        $this->loadModel('MrrhhHistBeEmpleadosContratados');
                            $nomina = $this->MrrhhHistBeEmpleadosContratados->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 3){
                        $this->loadModel('MrrhhHistBeDirectivos');
                            $nomina = $this->MrrhhHistBeDirectivos->newEntity();
                            $nomina = $this->MrrhhHistBeDirectivos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 4){
                        $this->loadModel('MrrhhHistBeObrerosFijos');
                            $nomina = $this->MrrhhHistBeObrerosFijos->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 5){
                        $this->loadModel('MrrhhHistBeObrerosContratados');
                            $nomina = $this->MrrhhHistBeObrerosContratados->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 6){
                        $this->loadModel('MrrhhHistBeObrerosNoPermanentes');
                            $nomina = $this->MrrhhHistBeObrerosNoPermanentes->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosNoPermanentes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 7){
                        $this->loadModel('MrrhhHistBeEmpleadosJubilados');
                            $nomina = $this->MrrhhHistBeEmpleadosJubilados->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 8){
                        $this->loadModel('MrrhhHistBeObrerosJubilados');
                            $nomina = $this->MrrhhHistBeObrerosJubilados->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 9){
                        $this->loadModel('MrrhhHistBeEmpleadosPensionados');
                            $nomina = $this->MrrhhHistBeEmpleadosPensionados->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosPensionados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 10){
                        $this->loadModel('MrrhhHistBeEmpleadosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 11){
                        $this->loadModel('MrrhhHistBeEmpleadosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistBeEmpleadosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistBeEmpleadosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 12){
                        $this->loadModel('MrrhhHistBeObrerosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistBeObrerosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 13){
                        $this->loadModel('MrrhhHistBeObrerosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistBeObrerosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistBeObrerosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 14){
                        $this->loadModel('MrrhhHistBeProteccionCivil');
                            $nomina = $this->MrrhhHistBeProteccionCivil->newEntity();
                            $nomina = $this->MrrhhHistBeProteccionCivil->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 15){
                        $this->loadModel('MrrhhHistBeCementerio');
                            $nomina = $this->MrrhhHistBeCementerio->newEntity();
                            $nomina = $this->MrrhhHistBeCementerio->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 16){
                        $this->loadModel('MrrhhHistBeComisionServicio');
                            $nomina = $this->MrrhhHistBeComisionServicio->newEntity();
                            $nomina = $this->MrrhhHistBeComisionServicio->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 17){
                        $this->loadModel('MrrhhHistBeHonorarioP');
                            $nomina = $this->MrrhhHistBeHonorarioP->newEntity();
                            $nomina = $this->MrrhhHistBeHonorarioP->patchEntity($nomina, $this->request->getData());
                    }


                    $nomina->ano = ANO_FISCAL;
                    $nomina->mes = $m;
                    $nomina->quincena = $q;
                    $nomina->id_tipo_personal = $tp;
                    $nomina->cedula = $reg->cedula;
                    $nomina->requisicion = 9999;
                    //-------------------------------
                    $nomina->ano_servicio = $reg->ano_servicio;
                    $nomina->anos_institucion = $reg->anos_institucion;
                    $nomina->anos_servicio = $reg->anos_servicio;
                    $nomina->grado_porcentaje = $reg->grado_porcentaje;
                    $nomina->grupo = $reg->grupo;
                    $nomina->sueldo_base = $reg->sueldo_base;
                    $nomina->sueldo = $reg->sueldo;
                    $nomina->status = $reg->status;
                    $nomina->ente_adscrito = $reg->ente_adscrito;
                    $nomina->grado_nivel = $reg->grado_nivel;
                    $nomina->denominacion_grado_nivel = $reg->denominacion_grado_nivel;
                    $nomina->beca_escolar_inicial = $reg->beca_escolar_inicial;
                    $nomina->beca_escolar_primaria = $reg->beca_escolar_primaria;
                    $nomina->beca_escolar_secundaria = $reg->beca_escolar_secundaria;
                    $nomina->beca_escolar_universitaria = $reg->beca_escolar_universitaria;
                    $nomina->beca_escolar_discapacidad = $reg->beca_escolar_discapacidad;
                    $nomina->cantidad_beca_inicial = $reg->cantidad_beca_inicial;
                    $nomina->cantidad_beca_primaria = $reg->cantidad_beca_primaria;
                    $nomina->cantidad_beca_secundaria = $reg->cantidad_beca_secundaria;
                    $nomina->cantidad_beca_universitaria = $reg->cantidad_beca_universitaria;
                    $nomina->cantidad_beca_discapacidad = $reg->cantidad_beca_discapacidad;
                    $nomina->prima_hogar = $reg->prima_hogar;
                    $nomina->caja_ahorro = $reg->caja_ahorro;
                    $nomina->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                    $nomina->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                    $nomina->funeraria = $reg->funeraria;
                    $nomina->asociacion_funeraria = $reg->asociacion_funeraria;
                    $nomina->sindicato = $reg->sindicato;
                    $nomina->hijos = $reg->hijos;
                    $nomina->prima_hijos = $reg->prima_hijos;
                    $nomina->antiguedad = $reg->antiguedad;
                    $nomina->banco = $reg->banco;
                    $nomina->numero_cuenta = $reg->numero_cuenta;

                    $nomina->prima_profesion = $reg->prima_profesion;
                    $nomina->prima_antiguedad = $reg->prima_antiguedad;
                    $nomina->deduccion_sso = $reg->deduccion_sso;
                    $nomina->deduccion_rpe = $reg->deduccion_rpe;
                    $nomina->deduccion_fpj = $reg->deduccion_fpj;
                    $nomina->deduccion_caja_ahorro = $reg->deduccion_caja_ahorro;
                    $nomina->aporte_patronal_asso = $reg->aporte_patronal_asso;
                    $nomina->aporte_patronal_arpe = $reg->aporte_patronal_arpe;
                    $nomina->aporte_patronal_afpj = $reg->aporte_patronal_afpj;
                    $nomina->aporte_patronal_caja_ahorro = $reg->aporte_patronal_caja_ahorro;
                    $nomina->depositario_judicial = $reg->depositario_judicial;
                    $nomina->depositario_judicial_monto = $reg->depositario_judicial_monto;
                    
                    $nomina->x_prima_profesion = $reg->x_prima_profesion;
                    $nomina->x_prima_antiguedad = $reg->x_prima_antiguedad;
                    $nomina->x_deduccion_sso = $reg->x_deduccion_sso;
                    $nomina->x_deduccion_rpe = $reg->x_deduccion_rpe;
                    $nomina->x_deduccion_fpj = $reg->x_deduccion_fpj;
                    $nomina->x_deduccion_caja_ahorro = $reg->x_deduccion_caja_ahorro;
                    $nomina->x_aporte_patronal_asso = $reg->x_aporte_patronal_asso;
                    $nomina->x_aporte_patronal_arpe = $reg->x_aporte_patronal_arpe;
                    $nomina->x_porte_patronal_afpj = $reg->x_porte_patronal_afpj;
                    $nomina->x_aporte_patronal_caja_ahorro = $reg->x_aporte_patronal_caja_ahorro;
                    $nomina->x_depositario_judicial = $reg->x_depositario_judicial;
                    $nomina->x_depositario_judicial_monto = $reg->x_depositario_judicial_monto;

                    if($tp == 1){
                        $this->MrrhhHistBeEmpleadosFijos->save($nomina);
                    }else if($tp == 2){
                        $this->MrrhhHistBeEmpleadosContratados->save($nomina);
                    }else if($tp == 3){
                        $this->MrrhhHistBeDirectivos->save($nomina);
                    }else if($tp == 4){
                        $this->MrrhhHistBeObrerosFijos->save($nomina);
                    }else if($tp == 5){
                        $this->MrrhhHistBeObrerosContratados->save($nomina);
                    }else if($tp == 6){
                        $this->MrrhhHistBeObrerosNoPermanentes->save($nomina);
                    }else if($tp == 7){
                        $this->MrrhhHistBeEmpleadosJubilados->save($nomina);
                    }else if($tp == 8){
                        $this->MrrhhHistBeObrerosJubilados->save($nomina);
                    }else if($tp == 9){
                        $this->MrrhhHistBeEmpleadosPensionados->save($nomina);
                    }else if($tp == 10){
                        $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 11){
                        $this->MrrhhHistBeEmpleadosPensionadosEspeciales->save($nomina);
                    }else if($tp == 12){
                        $this->MrrhhHistBeObrerosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 13){
                        $this->MrrhhHistBeObrerosPensionadosEspeciales->save($nomina);
                    }else if($tp == 14){
                        $this->MrrhhHistBeProteccionCivil->save($nomina);
                    }else if($tp == 15){
                        $this->MrrhhHistBeCementerio->save($nomina);
                    }else if($tp == 16){
                        $this->MrrhhHistBeComisionServicio->save($nomina);
                    }else if($tp == 17){
                        $this->MrrhhHistBeHonorarioP->save($nomina);
                    }
                }
            }
        }






        if($tp != '' and $m != '' and $q != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
                $data = $this->paginate($this->ViewMrrhhHistBeEmpleadosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEmpleadosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistBeEmpleadosC');
                $data = $this->paginate($this->ViewMrrhhHistBeEmpleadosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEmpleadosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistBeDirectivos');
                $data = $this->paginate($this->ViewMrrhhHistBeDirectivos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeDirectivos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 4){
                $this->loadModel('ViewMrrhhHistBeObrerosFijos');
                $data = $this->paginate($this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistBeObrerosC');
                $data = $this->paginate($this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistBeObrerosNoP');
                $data = $this->paginate($this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 7){
                $this->loadModel('ViewMrrhhHistBeEJubilados');
                $data = $this->paginate($this->ViewMrrhhHistBeEJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistBeOJubilados');
                $data = $this->paginate($this->ViewMrrhhHistBeOJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeOJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 9){
                $this->loadModel('ViewMrrhhHistBeEmpleadosP');
                $data = $this->paginate($this->ViewMrrhhHistBeEmpleadosP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEmpleadosP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistBeEPSobre');
                $data = $this->paginate($this->ViewMrrhhHistBeEPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistBeEPEsp');
                $data = $this->paginate($this->ViewMrrhhHistBeEPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeEPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistBeOPSobre');
                $data = $this->paginate($this->ViewMrrhhHistBeOPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeOPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistBeOPEsp');
                $data = $this->paginate($this->ViewMrrhhHistBeOPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeOPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistBePc');
                $data = $this->paginate($this->ViewMrrhhHistBePc->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBePc->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistBeCementerio');
                $data = $this->paginate($this->ViewMrrhhHistBeCementerio->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeCementerio->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistBeComS');
                $data = $this->paginate($this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistBeHonorarioP');
                $data = $this->paginate($this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'tipo' => 'BONO ESTABILIDAD'];

            $this->loadModel('MrrhhRequisicion');
            $estatus = $this->MrrhhRequisicion->find('all')->where($condicion)->count();
            
            if($estatus != 0){
                $this->set('estatus', true);
                $concep = $this->MrrhhRequisicion->find('all')->where($condicion)->toArray();
                $this->set('concepto', $concep[0]['concepto']);
                $this->set('status', $concep[0]['status']);
                $this->set('requisicion', $this->requisicion($concep[0]['id']));
            }else{
                $this->set('estatus', false);
            }
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $m = $this->request->data['mes'];
            $q = $this->request->data['quincena'];

            if($tp != '' and $m != '' and $q != ''){

                return $this->redirect(['action' => 'index', $tp, $m, $q]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $q = $this->request->data['qs'];
            $tp = $this->request->data['tps'];
            $concepto = $this->request->data['concepto'];

            //========================================================
            //Numero de requisicion
            //========================================================

            $requisicion = $this->DameRequisicion();
            $numero_orden_pago = $this->DameOrdenServicio();

            $this->loadModel('MrrhhRequisicion');

            $req = $this->MrrhhRequisicion->newEntity();
            $req = $this->MrrhhRequisicion->patchEntity($req, $this->request->getData());
            $req->id = $requisicion;
            $req->numero_orden_pago = $numero_orden_pago;
            $req->id_tipo_personal = $tp;
            $req->ano = ANO_FISCAL;
            $req->mes = $m;
            $req->quincena = $q;
            $req->tipo = 'BONO ESTABILIDAD';
            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            $this->MrrhhRequisicion->save($req);
            
            //=============================================================

            if($tp == 1){
                $this->loadModel('MrrhhHistBeEmpleadosFijos');
                $query = $this->MrrhhHistBeEmpleadosFijos->query();
            }else if($tp == 2){
                $this->loadModel('MrrhhHistBeEmpleadosContratados');
                $query = $this->MrrhhHistBeEmpleadosContratados->query();
            }else if($tp == 3){
                $this->loadModel('MrrhhHistBeDirectivos');
                $query = $this->MrrhhHistBeDirectivos->query();
            }else if($tp == 4){
                $this->loadModel('MrrhhHistBeObrerosFijos');
                $query = $this->MrrhhHistBeObrerosFijos->query();
            }else if($tp == 5){
                $this->loadModel('MrrhhHistBeObrerosContratados');
                $query = $this->MrrhhHistBeObrerosContratados->query();
            }else if($tp == 6){
                $this->loadModel('MrrhhHistBeObrerosNoPermanentes');
                $query = $this->MrrhhHistBeObrerosNoPermanentes->query();
            }else if($tp == 7){
                $this->loadModel('MrrhhHistBeEmpleadosJubilados');
                $query = $this->MrrhhHistBeEmpleadosJubilados->query();
            }else if($tp == 8){
                $this->loadModel('MrrhhHistBeObrerosJubilados');
                $query = $this->MrrhhHistBeObrerosJubilados->query();
            }else if($tp == 9){
                $this->loadModel('MrrhhHistBeEmpleadosPensionados');
                $query = $this->MrrhhHistBeEmpleadosPensionados->query();
            }else if($tp == 10){
                $this->loadModel('MrrhhHistBeEmpleadosPensionadosSobrevivientes');
                $query = $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->query();
            }else if($tp == 11){
                $this->loadModel('MrrhhHistBeEmpleadosPensionadosEspeciales');
                $query = $this->MrrhhHistBeEmpleadosPensionadosEspeciales->query();
            }else if($tp == 12){
                $this->loadModel('MrrhhHistBeObrerosPensionadosSobrevivientes');
                $query = $this->MrrhhHistBeObrerosPensionadosSobrevivientes->query();
            }else if($tp == 13){
                $this->loadModel('MrrhhHistBeObrerosPensionadosEspeciales');
                $query = $this->MrrhhHistBeObrerosPensionadosEspeciales->query();
            }else if($tp == 14){
                $this->loadModel('MrrhhHistBeProteccionCivil');
                $query = $this->MrrhhHistBeProteccionCivil->query();
            }else if($tp == 15){
                $this->loadModel('MrrhhHistBeCementerio');
                $query = $this->MrrhhHistBeCementerio->query();
            }else if($tp == 16){
                $this->loadModel('MrrhhHistBeComisionServicio');
                $query = $this->MrrhhHistBeComisionServicio->query();
            }else if($tp == 17){
                $this->loadModel('MrrhhHistBeHonorarioP');
                $query = $this->MrrhhHistBeHonorarioP->query();
            }
            
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];
            $query->update()
                ->set(['procesado' => 1, 'requisicion' => $requisicion])
                ->where($condicion)
                ->execute();


            $this->Flash->success(__('Bono De Estabilidad Elaborada'));
            return $this->redirect(['controller' => 'MrrhhRequisicion','action' => 'bonoestabilidad']);

        }

        //=============================================================
    }

    public function eliminar($tp = null, $m = null, $q = null){

        if($tp == 1){
            $this->loadModel('MrrhhHistBeEmpleadosFijos');
            $this->MrrhhHistBeEmpleadosFijos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistBeEmpleadosContratados');
            $this->MrrhhHistBeEmpleadosContratados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistBeDirectivos');
            $this->MrrhhHistBeDirectivos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistBeObrerosFijos');
            $this->MrrhhHistBeObrerosFijos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistBeObrerosContratados');
            $this->MrrhhHistBeObrerosContratados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistBeObrerosNoPermanentes');
            $this->MrrhhHistBeObrerosNoPermanentes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistBeEmpleadosJubilados');
            $this->MrrhhHistBeEmpleadosJubilados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistBeObrerosJubilados');
            $this->MrrhhHistBeObrerosJubilados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistBeEmpleadosPensionados');
            $this->MrrhhHistBeEmpleadosPensionados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosEspeciales');
            $this->MrrhhHistBeEmpleadosPensionadosEspeciales->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistBeObrerosPensionadosSobrevivientes');
            $this->MrrhhHistBeObrerosPensionadosSobrevivientes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistBeObrerosPensionadosEspeciales');
            $this->MrrhhHistBeObrerosPensionadosEspeciales->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistBeProteccionCivil');
            $this->MrrhhHistBeProteccionCivil->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistBeCementerio');
            $this->MrrhhHistBeCementerio->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistBeComisionServicio');
            $this->MrrhhHistBeComisionServicio->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistBeHonorarioP');
            $this->MrrhhHistBeHonorarioP->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }

        $this->Flash->success(__('Bono de Estabilidad Eliminada'));
        return $this->redirect(['action' => 'index']);
    }


    public function eliminardenomina($tp = null, $m = null, $q = null, $cedula = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'cedula' => $cedula];
        if($tp == 1){
            $this->loadModel('MrrhhHistBeEmpleadosFijos');
            $this->MrrhhHistBeEmpleadosFijos->deleteAll($condicion);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistBeEmpleadosContratados');
            $this->MrrhhHistBeEmpleadosContratados->deleteAll($condicion);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistBeDirectivos');
            $this->MrrhhHistBeDirectivos->deleteAll($condicion);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistBeObrerosFijos');
            $this->MrrhhHistBeObrerosFijos->deleteAll($condicion);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistBeObrerosContratados');
            $this->MrrhhHistBeObrerosContratados->deleteAll($condicion);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistBeObrerosNoPermanentes');
            $this->MrrhhHistBeObrerosNoPermanentes->deleteAll($condicion);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistBeEmpleadosJubilados');
            $this->MrrhhHistBeEmpleadosJubilados->deleteAll($condicion);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistBeObrerosJubilados');
            $this->MrrhhHistBeObrerosJubilados->deleteAll($condicion);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistBeEmpleadosPensionados');
            $this->MrrhhHistBeEmpleadosPensionados->deleteAll($condicion);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosEspeciales');
            $this->MrrhhHistBeEmpleadosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistBeObrerosPensionadosSobrevivientes');
            $this->MrrhhHistBeObrerosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistBeObrerosPensionadosEspeciales');
            $this->MrrhhHistBeObrerosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistBeProteccionCivil');
            $this->MrrhhHistBeProteccionCivil->deleteAll($condicion);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistBeCementerio');
            $this->MrrhhHistBeCementerio->deleteAll($condicion);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistBeComisionServicio');
            $this->MrrhhHistBeComisionServicio->deleteAll($condicion);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistBeHonorarioP');
            $this->MrrhhHistBeHonorarioP->deleteAll($condicion);
        }

        $this->Flash->success(__('Eliminado de Nomina'));
        return $this->redirect(['action' => 'index', $tp, $m, $q]);
    }

    public function asignarbono(){
        $this->request->allowMethod(['post', 'get', 'save']);

        if($this->request->data['tps'] == 1){
            $this->loadModel('MrrhhHistBeEmpleadosFijos');
            $query = $this->MrrhhHistBeEmpleadosFijos->query();
        }else if($this->request->data['tps'] == 2){
            $this->loadModel('MrrhhHistBeEmpleadosContratados');
            $query = $this->MrrhhHistBeEmpleadosContratados->query();
        }else if($this->request->data['tps'] == 3){
            $this->loadModel('MrrhhHistBeDirectivos');
            $query = $this->MrrhhHistBeDirectivos->query();
        }else if($this->request->data['tps'] == 4){
            $this->loadModel('MrrhhHistBeObrerosFijos');
            $query = $this->MrrhhHistBeObrerosFijos->query();
        }else if($this->request->data['tps'] == 5){
            $this->loadModel('MrrhhHistBeObrerosContratados');
            $query = $this->MrrhhHistBeObrerosContratados->query();
        }else if($this->request->data['tps'] == 6){
            $this->loadModel('MrrhhHistBeObrerosNoPermanentes');
            $query = $this->MrrhhHistBeObrerosNoPermanentes->query();
        }else if($this->request->data['tps'] == 7){
            $this->loadModel('MrrhhHistBeEmpleadosJubilados');
            $query = $this->MrrhhHistBeEmpleadosJubilados->query();
        }else if($this->request->data['tps'] == 8){
            $this->loadModel('MrrhhHistBeObrerosJubilados');
            $query = $this->MrrhhHistBeObrerosJubilados->query();
        }else if($this->request->data['tps'] == 9){
            $this->loadModel('MrrhhHistBeEmpleadosPensionados');
            $query = $this->MrrhhHistBeEmpleadosPensionados->query();
        }else if($this->request->data['tps'] == 10){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosSobrevivientes');
            $query = $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 11){
            $this->loadModel('MrrhhHistBeEmpleadosPensionadosEspeciales');
            $query = $this->MrrhhHistBeEmpleadosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 12){
            $this->loadModel('MrrhhHistBeObrerosPensionadosSobrevivientes');
            $query = $this->MrrhhHistBeObrerosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 13){
            $this->loadModel('MrrhhHistBeObrerosPensionadosEspeciales');
            $query = $this->MrrhhHistBeObrerosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 14){
            $this->loadModel('MrrhhHistBeProteccionCivil');
            $query = $this->MrrhhHistBeProteccionCivil->query();
        }else if($this->request->data['tps'] == 15){
            $this->loadModel('MrrhhHistBeCementerio');
            $query = $this->MrrhhHistBeCementerio->query();
        }else if($this->request->data['tps'] == 16){
            $this->loadModel('MrrhhHistBeComisionServicio');
            $query = $this->MrrhhHistBeComisionServicio->query();
        }else if($this->request->data['tps'] == 17){
            $this->loadModel('MrrhhHistBeHonorarioP');
            $query = $this->MrrhhHistBeHonorarioP->query();
        }

        $bono_dejado_c = ($this->request->data['bono_dejado_c'] != null) ? $this->verificamoneda($this->request->data['bono_dejado_c']) : 0;
        $bono_dias_cancelar = ($this->request->data['bono_dias_cancelar'] != null) ? $this->verificamoneda($this->request->data['bono_dias_cancelar']) : 0;

        if($bono_dejado_c != 0){
            $parametros = [
                'bono_dejado_c' => $bono_dejado_c
            ];

            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'mes' => $this->request->data['ms']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }

        if($bono_dias_cancelar != 0){
            $parametros = [
                'bono_dias_cancelar' => $bono_dias_cancelar
            ];

            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'mes' => $this->request->data['ms']];

            $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
        }
        
        if($query){
            $this->Flash->success(__('Parametros asignados'));
        }else{
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        
        return $this->redirect(['action' => 'index', $this->request->data['tps'], $this->request->data['ms'], $this->request->data['qs']]);
    }

















    public function excel($tp, $mes, $quincena, $requisicion){
        
        $this->layout='ajax';

        if($tp == 1){
            $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
            $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistBeEmpleadosC');
            $data = $this->ViewMrrhhHistBeEmpleadosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistBeDirectivos');
            $data = $this->ViewMrrhhHistBeDirectivos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
            /*$this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');*/
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistBeObrerosFijos');
            $data = $this->ViewMrrhhHistBeObrerosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistBeObrerosC');
            $data = $this->ViewMrrhhHistBeObrerosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistBeObrerosNoP');
            $data = $this->ViewMrrhhHistBeObrerosNoP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistBeEJubilados');
            $data = $this->ViewMrrhhHistBeEJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistBeOJubilados');
            $data = $this->ViewMrrhhHistBeOJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistBeEmpleadosP');
            $data = $this->ViewMrrhhHistBeEmpleadosP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistBeEPSobre');
            $data = $this->ViewMrrhhHistBeEPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistBeEPEsp');
            $data = $this->ViewMrrhhHistBeEPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistBeOPSobre');
            $data = $this->ViewMrrhhHistBeOPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistBeOPEsp');
            $data = $this->ViewMrrhhHistBeOPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistBePc');
            $data = $this->ViewMrrhhHistBePc->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistBeCementerio');
            $data = $this->ViewMrrhhHistBeCementerio->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistBeComS');
            $data = $this->ViewMrrhhHistBeComS->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistBeHonorarioP');
            $data = $this->ViewMrrhhHistBeHonorarioP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function ReporteTXT(){
        $this->viewBuilder()->setLayout('txt');
        echo "Sus datos";
    }

    public function txt($tp, $mes, $quincena, $requisicion){
        $this->layout='txt';

        if($tp == 1){
            $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
            $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistBeEmpleadosC');
            $data = $this->ViewMrrhhHistBeEmpleadosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistBeDirectivos');
            $data = $this->ViewMrrhhHistBeDirectivos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistBeObrerosFijos');
            $data = $this->ViewMrrhhHistBeObrerosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistBeObrerosC');
            $data = $this->ViewMrrhhHistBeObrerosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistBeObrerosNoP');
            $data = $this->ViewMrrhhHistBeObrerosNoP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistBeEJubilados');
            $data = $this->ViewMrrhhHistBeEJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistBeOJubilados');
            $data = $this->ViewMrrhhHistBeOJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistBeEmpleadosP');
            $data = $this->ViewMrrhhHistBeEmpleadosP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistBeEPSobre');
            $data = $this->ViewMrrhhHistBeEPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistBeEPEsp');
            $data = $this->ViewMrrhhHistBeEPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistBeOPSobre');
            $data = $this->ViewMrrhhHistBeOPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistBeOPEsp');
            $data = $this->ViewMrrhhHistBeOPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistBePc');
            $data = $this->ViewMrrhhHistBePc->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistBeCementerio');
            $data = $this->ViewMrrhhHistBeCementerio->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistBeComS');
            $data = $this->ViewMrrhhHistBeComS->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistBeHonorarioP');
            $data = $this->ViewMrrhhHistBeHonorarioP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }

     public function Reporte(){
           $this->viewBuilder()->setLayout('txt');
           echo "Sus datos";
        }

}