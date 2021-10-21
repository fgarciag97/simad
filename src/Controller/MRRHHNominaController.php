<?php
namespace App\Controller;

use App\Controller\AppController;


class MRRHHNominaController extends AppController
{
    public function index($tp = null, $m = null, $q = null, $o = null){
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
        $condicion = ['concepto <>' => '', 'tipo' => 'NOMINA'];
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

            $concepto = strtoupper("PAGO NOMINA DE LA " . $quincena[0]['denominacion'] . " DEL MES DE " . $mes[0]['denominacion'] . " DE " . $tipo_personal[0]['denominacion']);
            $this->set('concepto', $concepto);
        }

        //========================================================
        //Almacenar en tabla
        //========================================================

        if($tp != null and $m != null and $q != null and ($tp > 0 and $tp < 18) and $o != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('qs', $q);
            $this->set('o', $o);

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

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'omitida' => $o];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
                $n = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion)->count();
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
                $n = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion)->count();
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistoricoDirectivos');
                $n = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion)->count();
            }if($tp == 4){
                $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
                $n = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion)->count();
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistoricoObrerosC');
                $n = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion)->count();
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
                $n = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion)->count();
            }if($tp == 7){
                $this->loadModel('ViewMrrhhHistoricoEJubilados');
                $n = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion)->count();
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistoricoOJubilados');
                $n = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion)->count();
            }if($tp == 9){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
                $n = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion)->count();
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistoricoEPSobre');
                $n = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion)->count();
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistoricoEPEsp');
                $n = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion)->count();
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistoricoOPSobre');
                $n = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion)->count();
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistoricoOPEsp');
                $n = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion)->count();
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistoricoPc');
                $n = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion)->count();
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistoricoCementerio');
                $n = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion)->count();
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistoricoComS');
                $n = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion)->count();
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistoricoHonorarioP');
                $n = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion)->count();
            }

            if($n == 0){
                foreach ($query as $reg) {

                    if($tp == 1){
                        $this->loadModel('MrrhhHistoricoEmpleadosFijos');
                            $nomina = $this->MrrhhHistoricoEmpleadosFijos->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 2){
                        $this->loadModel('MrrhhHistoricoEmpleadosContratados');
                            $nomina = $this->MrrhhHistoricoEmpleadosContratados->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 3){
                        $this->loadModel('MrrhhHistoricoDirectivos');
                            $nomina = $this->MrrhhHistoricoDirectivos->newEntity();
                            $nomina = $this->MrrhhHistoricoDirectivos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 4){
                        $this->loadModel('MrrhhHistoricoObrerosFijos');
                            $nomina = $this->MrrhhHistoricoObrerosFijos->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 5){
                        $this->loadModel('MrrhhHistoricoObrerosContratados');
                            $nomina = $this->MrrhhHistoricoObrerosContratados->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 6){
                        $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
                            $nomina = $this->MrrhhHistoricoObrerosNoPermanentes->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosNoPermanentes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 7){
                        $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
                            $nomina = $this->MrrhhHistoricoEmpleadosJubilados->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 8){
                        $this->loadModel('MrrhhHistoricoObrerosJubilados');
                            $nomina = $this->MrrhhHistoricoObrerosJubilados->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 9){
                        $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionados->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 10){
                        $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 11){
                        $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 12){
                        $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 13){
                        $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistoricoObrerosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistoricoObrerosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 14){
                        $this->loadModel('MrrhhHistoricoProteccionCivil');
                            $nomina = $this->MrrhhHistoricoProteccionCivil->newEntity();
                            $nomina = $this->MrrhhHistoricoProteccionCivil->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 15){
                        $this->loadModel('MrrhhHistoricoCementerio');
                            $nomina = $this->MrrhhHistoricoCementerio->newEntity();
                            $nomina = $this->MrrhhHistoricoCementerio->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 16){
                        $this->loadModel('MrrhhHistoricoComisionServicio');
                            $nomina = $this->MrrhhHistoricoComisionServicio->newEntity();
                            $nomina = $this->MrrhhHistoricoComisionServicio->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 17){
                        $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
                            $nomina = $this->MrrhhHistoricoHonorarioProfesionales->newEntity();
                            $nomina = $this->MrrhhHistoricoHonorarioProfesionales->patchEntity($nomina, $this->request->getData());
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
                    $nomina->monto_becas = $reg->monto_becas;
                    $nomina->prima_hogar = $reg->prima_hogar;
                    $nomina->monto_hogar = $reg->monto_hogar;
                    $nomina->caja_ahorro = $reg->caja_ahorro;
                    $nomina->prestamo_caja_ahorro = $reg->prestamo_caja_ahorro;
                    $nomina->dias_dejados_cancelar = $reg->dias_dejados_cancelar;
                    $nomina->funeraria = $reg->funeraria;
                    $nomina->monto_funeraria = $reg->monto_funeraria;
                    $nomina->asociacion_funeraria = $reg->asociacion_funeraria;
                    $nomina->sindicato = $reg->sindicato;
                    $nomina->monto_sindicato = $reg->monto_sindicato;
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
                    $nomina->omitida = $o;

                    if($tp == 1){
                        $this->MrrhhHistoricoEmpleadosFijos->save($nomina);
                    }else if($tp == 2){
                        $this->MrrhhHistoricoEmpleadosContratados->save($nomina);
                    }else if($tp == 3){
                        $this->MrrhhHistoricoDirectivos->save($nomina);
                    }else if($tp == 4){
                        $this->MrrhhHistoricoObrerosFijos->save($nomina);
                    }else if($tp == 5){
                        $this->MrrhhHistoricoObrerosContratados->save($nomina);
                    }else if($tp == 6){
                        $this->MrrhhHistoricoObrerosNoPermanentes->save($nomina);
                    }else if($tp == 7){
                        $this->MrrhhHistoricoEmpleadosJubilados->save($nomina);
                    }else if($tp == 8){
                        $this->MrrhhHistoricoObrerosJubilados->save($nomina);
                    }else if($tp == 9){
                        $this->MrrhhHistoricoEmpleadosPensionados->save($nomina);
                    }else if($tp == 10){
                        $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 11){
                        $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->save($nomina);
                    }else if($tp == 12){
                        $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 13){
                        $this->MrrhhHistoricoObrerosPensionadosEspeciales->save($nomina);
                    }else if($tp == 14){
                        $this->MrrhhHistoricoProteccionCivil->save($nomina);
                    }else if($tp == 15){
                        $this->MrrhhHistoricoCementerio->save($nomina);
                    }else if($tp == 16){
                        $this->MrrhhHistoricoComisionServicio->save($nomina);
                    }else if($tp == 17){
                        $this->MrrhhHistoricoHonorarioProfesionales->save($nomina);
                    }
                }
            }
        }






        if($tp != '' and $m != '' and $q != '' and $o != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'omitida' => $o];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
                $data = $this->paginate($this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
                $data = $this->paginate($this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistoricoDirectivos');
                $data = $this->paginate($this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 4){
                $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
                $data = $this->paginate($this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistoricoObrerosC');
                $data = $this->paginate($this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
                $data = $this->paginate($this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 7){
                $this->loadModel('ViewMrrhhHistoricoEJubilados');
                $data = $this->paginate($this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistoricoOJubilados');
                $data = $this->paginate($this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 9){
                $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
                $data = $this->paginate($this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistoricoEPSobre');
                $data = $this->paginate($this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistoricoEPEsp');
                $data = $this->paginate($this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistoricoOPSobre');
                $data = $this->paginate($this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistoricoOPEsp');
                $data = $this->paginate($this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistoricoPc');
                $data = $this->paginate($this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistoricoCementerio');
                $data = $this->paginate($this->ViewMrrhhHistoricoCementerio->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoCementerio->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistoricoComS');
                $data = $this->paginate($this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistoricoHonorarioP');
                $data = $this->paginate($this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'tipo' => 'NOMINA', 'omitida' => $o];

            $this->loadModel('MrrhhRequisicion');
            $estatus = $this->MrrhhRequisicion->find('all')->where($condicion)->count();
            
            if($estatus != 0){
                $this->set('estatus', true);
                $concep = $this->MrrhhRequisicion->find('all')->where($condicion)->toArray();
                $this->set('concepto', $concep[0]['concepto']);
                $this->set('status', $concep[0]['status']);
                $this->set('id_status', $concep[0]['status']);
                $this->set('requisicion', $this->requisicion($concep[0]['id']));
            }else{
                $this->set('estatus', false);
            }
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $m = $this->request->data['mes'];
            $q = $this->request->data['quincena'];
            $o = (@$this->request->data['omitida'] == null) ? "0" : @$this->request->data['omitida'];

            if($tp != '' and $m != '' and $q != '' and $o != ''){

                return $this->redirect(['action' => 'index', $tp, $m, $q, $o]); 
            }
        } 
    }

    public function procesar(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $q = $this->request->data['qs'];
            $tp = $this->request->data['tps'];
            $o = $this->request->data['o'];
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
            $req->tipo = 'NOMINA';
            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');
            $req->omitida = $o;

            $this->MrrhhRequisicion->save($req);
            
            //=============================================================

            if($tp == 1){
                $this->loadModel('MrrhhHistoricoEmpleadosFijos');
                $query = $this->MrrhhHistoricoEmpleadosFijos->query();
            }else if($tp == 2){
                $this->loadModel('MrrhhHistoricoEmpleadosContratados');
                $query = $this->MrrhhHistoricoEmpleadosContratados->query();
            }else if($tp == 3){
                $this->loadModel('MrrhhHistoricoDirectivos');
                $query = $this->MrrhhHistoricoDirectivos->query();
            }else if($tp == 4){
                $this->loadModel('MrrhhHistoricoObrerosFijos');
                $query = $this->MrrhhHistoricoObrerosFijos->query();
            }else if($tp == 5){
                $this->loadModel('MrrhhHistoricoObrerosContratados');
                $query = $this->MrrhhHistoricoObrerosContratados->query();
            }else if($tp == 6){
                $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
                $query = $this->MrrhhHistoricoObrerosNoPermanentes->query();
            }else if($tp == 7){
                $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
                $query = $this->MrrhhHistoricoEmpleadosJubilados->query();
            }else if($tp == 8){
                $this->loadModel('MrrhhHistoricoObrerosJubilados');
                $query = $this->MrrhhHistoricoObrerosJubilados->query();
            }else if($tp == 9){
                $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
                $query = $this->MrrhhHistoricoEmpleadosPensionados->query();
            }else if($tp == 10){
                $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
                $query = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->query();
            }else if($tp == 11){
                $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
                $query = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->query();
            }else if($tp == 12){
                $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
                $query = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->query();
            }else if($tp == 13){
                $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
                $query = $this->MrrhhHistoricoObrerosPensionadosEspeciales->query();
            }else if($tp == 14){
                $this->loadModel('MrrhhHistoricoProteccionCivil');
                $query = $this->MrrhhHistoricoProteccionCivil->query();
            }else if($tp == 15){
                $this->loadModel('MrrhhHistoricoCementerio');
                $query = $this->MrrhhHistoricoCementerio->query();
            }else if($tp == 16){
                $this->loadModel('MrrhhHistoricoComisionServicio');
                $query = $this->MrrhhHistoricoComisionServicio->query();
            }else if($tp == 17){
                $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
                $query = $this->MrrhhHistoricoHonorarioProfesionales->query();
            }
            
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'omitida' => $o];
            $query->update()
                ->set(['procesado' => 1, 'requisicion' => $requisicion])
                ->where($condicion)
                ->execute();


            $this->Flash->success(__('Nomina Elaborada'));
            return $this->redirect(['controller' => 'MrrhhRequisicion','action' => 'nomina']);

        }

        //=============================================================
    }

    public function eliminar($tp = null, $m = null, $q = null, $o = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o];

        if($tp == 1){
            $this->loadModel('MrrhhHistoricoEmpleadosFijos');
            $this->MrrhhHistoricoEmpleadosFijos->deleteAll($condicion);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistoricoEmpleadosContratados');
            $this->MrrhhHistoricoEmpleadosContratados->deleteAll($condicion);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistoricoDirectivos');
            $this->MrrhhHistoricoDirectivos->deleteAll($condicion);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistoricoObrerosFijos');
            $this->MrrhhHistoricoObrerosFijos->deleteAll($condicion);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistoricoObrerosContratados');
            $this->MrrhhHistoricoObrerosContratados->deleteAll($condicion);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
            $this->MrrhhHistoricoObrerosNoPermanentes->deleteAll($condicion);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
            $this->MrrhhHistoricoEmpleadosJubilados->deleteAll($condicion);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistoricoObrerosJubilados');
            $this->MrrhhHistoricoObrerosJubilados->deleteAll($condicion);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
            $this->MrrhhHistoricoEmpleadosPensionados->deleteAll($condicion);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
            $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
            $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
            $this->MrrhhHistoricoObrerosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistoricoProteccionCivil');
            $this->MrrhhHistoricoProteccionCivil->deleteAll($condicion);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistoricoCementerio');
            $this->MrrhhHistoricoCementerio->deleteAll($condicion);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistoricoComisionServicio');
            $this->MrrhhHistoricoComisionServicio->deleteAll($condicion);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
            $this->MrrhhHistoricoHonorarioProfesionales->deleteAll($condicion);
        }

        $this->Flash->success(__('Nomina Eliminada'));
        return $this->redirect(['action' => 'index']);
    }


    public function eliminardenomina($tp = null, $m = null, $q = null, $o = null, $cedula = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o, 'cedula' => $cedula];
        if($tp == 1){
            $this->loadModel('MrrhhHistoricoEmpleadosFijos');
            $this->MrrhhHistoricoEmpleadosFijos->deleteAll($condicion);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistoricoEmpleadosContratados');
            $this->MrrhhHistoricoEmpleadosContratados->deleteAll($condicion);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistoricoDirectivos');
            $this->MrrhhHistoricoDirectivos->deleteAll($condicion);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistoricoObrerosFijos');
            $this->MrrhhHistoricoObrerosFijos->deleteAll($condicion);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistoricoObrerosContratados');
            $this->MrrhhHistoricoObrerosContratados->deleteAll($condicion);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
            $this->MrrhhHistoricoObrerosNoPermanentes->deleteAll($condicion);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
            $this->MrrhhHistoricoEmpleadosJubilados->deleteAll($condicion);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistoricoObrerosJubilados');
            $this->MrrhhHistoricoObrerosJubilados->deleteAll($condicion);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
            $this->MrrhhHistoricoEmpleadosPensionados->deleteAll($condicion);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
            $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
            $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
            $this->MrrhhHistoricoObrerosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistoricoProteccionCivil');
            $this->MrrhhHistoricoProteccionCivil->deleteAll($condicion);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistoricoCementerio');
            $this->MrrhhHistoricoCementerio->deleteAll($condicion);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistoricoComisionServicio');
            $this->MrrhhHistoricoComisionServicio->deleteAll($condicion);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
            $this->MrrhhHistoricoHonorarioProfesionales->deleteAll($condicion);
        }

        $this->Flash->success(__('Eliminado de Nomina'));
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }


    public function statustrue($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o, 'cedula' => $cedula];
        if($tp == 1){
            $this->loadModel('MrrhhHistoricoEmpleadosFijos');
            $query = $this->MrrhhHistoricoEmpleadosFijos->query();
        }else if($tp == 2){
            $this->loadModel('MrrhhHistoricoEmpleadosContratados');
            $query = $this->MrrhhHistoricoEmpleadosContratados->query();
        }else if($tp == 3){
            $this->loadModel('MrrhhHistoricoDirectivos');
            $query = $this->MrrhhHistoricoDirectivos->query();
        }else if($tp == 4){
            $this->loadModel('MrrhhHistoricoObrerosFijos');
            $query = $this->MrrhhHistoricoObrerosFijos->query();
        }else if($tp == 5){
            $this->loadModel('MrrhhHistoricoObrerosContratados');
            $query = $this->MrrhhHistoricoObrerosContratados->query();
        }else if($tp == 6){
            $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
            $query = $this->MrrhhHistoricoObrerosNoPermanentes->query();
        }else if($tp == 7){
            $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
            $query = $this->MrrhhHistoricoEmpleadosJubilados->query();
        }else if($tp == 8){
            $this->loadModel('MrrhhHistoricoObrerosJubilados');
            $query = $this->MrrhhHistoricoObrerosJubilados->query();
        }else if($tp == 9){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
            $query = $this->MrrhhHistoricoEmpleadosPensionados->query();
        }else if($tp == 10){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->query();
        }else if($tp == 11){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->query();
        }else if($tp == 12){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->query();
        }else if($tp == 13){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoObrerosPensionadosEspeciales->query();
        }else if($tp == 14){
            $this->loadModel('MrrhhHistoricoProteccionCivil');
            $query = $this->MrrhhHistoricoProteccionCivil->query();
        }else if($tp == 15){
            $this->loadModel('MrrhhHistoricoCementerio');
            $query = $this->MrrhhHistoricoCementerio->query();
        }else if($tp == 16){
            $this->loadModel('MrrhhHistoricoComisionServicio');
            $query = $this->MrrhhHistoricoComisionServicio->query();
        }else if($tp == 17){
            $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
            $query = $this->MrrhhHistoricoHonorarioProfesionales->query();
        }

        $query->update()
            ->set(['status' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

    public function statusfalse($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o, 'cedula' => $cedula];
        if($tp == 1){
            $this->loadModel('MrrhhHistoricoEmpleadosFijos');
            $query = $this->MrrhhHistoricoEmpleadosFijos->query();
        }else if($tp == 2){
            $this->loadModel('MrrhhHistoricoEmpleadosContratados');
            $query = $this->MrrhhHistoricoEmpleadosContratados->query();
        }else if($tp == 3){
            $this->loadModel('MrrhhHistoricoDirectivos');
            $query = $this->MrrhhHistoricoDirectivos->query();
        }else if($tp == 4){
            $this->loadModel('MrrhhHistoricoObrerosFijos');
            $query = $this->MrrhhHistoricoObrerosFijos->query();
        }else if($tp == 5){
            $this->loadModel('MrrhhHistoricoObrerosContratados');
            $query = $this->MrrhhHistoricoObrerosContratados->query();
        }else if($tp == 6){
            $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
            $query = $this->MrrhhHistoricoObrerosNoPermanentes->query();
        }else if($tp == 7){
            $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
            $query = $this->MrrhhHistoricoEmpleadosJubilados->query();
        }else if($tp == 8){
            $this->loadModel('MrrhhHistoricoObrerosJubilados');
            $query = $this->MrrhhHistoricoObrerosJubilados->query();
        }else if($tp == 9){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
            $query = $this->MrrhhHistoricoEmpleadosPensionados->query();
        }else if($tp == 10){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->query();
        }else if($tp == 11){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->query();
        }else if($tp == 12){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->query();
        }else if($tp == 13){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoObrerosPensionadosEspeciales->query();
        }else if($tp == 14){
            $this->loadModel('MrrhhHistoricoProteccionCivil');
            $query = $this->MrrhhHistoricoProteccionCivil->query();
        }else if($tp == 15){
            $this->loadModel('MrrhhHistoricoCementerio');
            $query = $this->MrrhhHistoricoCementerio->query();
        }else if($tp == 16){
            $this->loadModel('MrrhhHistoricoComisionServicio');
            $query = $this->MrrhhHistoricoComisionServicio->query();
        }else if($tp == 17){
            $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
            $query = $this->MrrhhHistoricoHonorarioProfesionales->query();
        }
        //$query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['status' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }


    public function addbe($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['bono_estabilidad' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

    public function dropbe($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['bono_estabilidad' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

     public function addvaca($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['vacaciones' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

    public function dropvaca($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['vacaciones' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

    public function addeva($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['evaluacion' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }

    public function dropeva($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoProteccionCivil');
        $query = $this->MrrhhHistoricoProteccionCivil->query();
        $query->update()
            ->set(['evaluacion' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'cedula' => $cedula, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        return $this->redirect(['action' => 'index', $tp, $m, $q, $o]);
    }





    public function personalizada($tp = null, $m = null, $q = null, $o = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->paginate = array('limit' => 250);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Partidas');

        $partidas = $this->ViewPresupuestoForma2121Partidas->find('all', ['order' => 'concatenado'])->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->concatenado] = $key->concatenado;
        } 
        $this->set('p', $options);


        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['concepto <>' => '', 'tipo' => 'ESPECIAL'];
        $nominas = $this->ViewMrrhhRequisicion->find('all')->where($condicion);
        $this->set(compact('nominas'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Disponible');

        $partidas = $this->ViewPresupuestoForma2121Disponible->find('all')->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->partida] = $key->partida;
        } 
        $this->set('partidas', $options);

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
        //Generar PDF
        //========================================================

        if($tp != null and $m != null and $q != null){

            $this->set('tps', $tp);
            $this->set('ms', $m);
            $this->set('qs', $q);
            $this->set('o', $o);

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
            }if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find('all');
            }if($tp == 15){
                $this->loadModel('ViewMrrhhCementerioAux');
                $query = $this->ViewMrrhhCementerioAux->find('all');
            }if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicioAux');
                $query = $this->ViewMrrhhComisionServicioAux->find('all');
            }if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioPAux');
                $query = $this->ViewMrrhhHonorarioPAux->find('all');
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
            $n = $this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion])->count();

            if($n == 0){
                foreach ($query as $reg) {

                    $this->loadModel('MrrhhHistoricoPersonalizadax');
                    $nomina = $this->MrrhhHistoricoPersonalizadax->newEntity();
                    $nomina = $this->MrrhhHistoricoPersonalizadax->patchEntity($nomina, $this->request->getData());

                    $nomina->ano = ANO_FISCAL;
                    $nomina->mes = $m;
                    $nomina->quincena = $q;
                    $nomina->id_tipo_personal = $tp;
                    $nomina->cedula = $reg->cedula;
                    //-------------------------------
                    $nomina->ano_servicio = $reg->ano_servicio;
                    $nomina->anos_institucion = $reg->anos_institucion;
                    $nomina->anos_servicio = $reg->anos_servicio;
                    $nomina->grado_porcentaje = $reg->grado_porcentaje;
                    $nomina->grupo = $reg->grupo;
                    $nomina->ente_adscrito = $reg->ente_adscrito;
                    $nomina->sueldo_base = $reg->sueldo_base;
                    $nomina->sueldo = $reg->sueldo;
                    $nomina->status = $reg->status;
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
                    $nomina->procesado = 0;
                    $nomina->omitida = $o;

                    $this->MrrhhHistoricoPersonalizadax->save($nomina);
                }
            }
        }

        if($tp != '' and $m != '' and $q != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 0, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
            $data = $this->paginate($this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion]));
            $this->set(compact('data'));

            $n = $this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion]);
            $this->set('n', $n);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 1, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
            $data2 = $this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion]);
            $this->set(compact('data2'));

            $n2 = $this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion]);
            $this->set('n2', $n2);

            //====================================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'omitida' => $o];

            $this->loadModel('ViewMrrhhHistoricoPersonalizada');
            $db = $this->ViewMrrhhHistoricoPersonalizada->find('all', ['conditions' => $condicion])->toArray();
            $this->set('db', $db);

            $ndb = $this->ViewMrrhhHistoricoPersonalizada->find('all', ['conditions' => $condicion]);
            $this->set('ndb', $ndb);

            //======================================================

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'tipo' => 'ESPECIAL', 'omitida' => $o];

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

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];
            $this->loadModel('MrrhhPersonalizadaPartidas');
            $registros = $this->MrrhhPersonalizadaPartidas->find('all', ['conditions' => $condicion]);
            $this->set(compact('registros'));
        }

        if($this->request->is('post')){
            $tp = $this->request->data['tipo_nomina'];
            $m = $this->request->data['mes'];
            $q = $this->request->data['quincena'];
            @$o = ($this->request->data['omitida'] != null) ? $this->request->data['omitida'] : 0;

            if($tp != '' and $m != '' and $q != ''){

                return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]); 
            }
        } 
    }

    public function procesarpersonalizada(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $q = $this->request->data['qs'];
            $tp = $this->request->data['tps'];
            $o = $this->request->data['o'];

            $concepto = @$this->request->data['concepto'];
            @$monto = @$this->request->data['monto'];

            $this->loadModel('MrrhhPersonalizadaPartidas');
            $registros = $this->MrrhhPersonalizadaPartidas->find('all')->where(['ano' => ANO_FISCAL, 'id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q])->toArray();

            $monto = 0;
            foreach ($registros as $key) {
                $monto += $key['monto'];
            }

            @$partida = @$this->request->data['partida'];
            @$denominacion = @$this->request->data['denominacion'];


            /*@$porcentaje = @$this->request->data['porcentaje'];
            @$tipo_porcentaje = @$this->request->data['tipo_porcentaje'];
            //----------------------------------------------------------
            @$concepto2 = @$this->request->data['concepto2'];
            @$monto2 = @$this->request->data['monto2'];
            @$tipo_porcentaje2 = @$this->request->data['tipo_porcentaje2'];
            //----------------------------------------------------------
            @$concepto3 = @$this->request->data['concepto3'];
            @$monto3 = @$this->request->data['monto3'];
            @$tipo_porcentaje3 = @$this->request->data['tipo_porcentaje3'];
            //----------------------------------------------------------
            @$concepto4 = @$this->request->data['concepto4'];
            @$monto4 = @$this->request->data['monto4'];
            @$tipo_porcentaje4 = @$this->request->data['tipo_porcentaje4'];*/
            //----------------------------------------------------------           

            //========================================================
            //Numero de requisicion
            //========================================================
            $this->loadModel('MrrhhRequisicion');

            $requisicion = $this->DameRequisicion(); 
            $numero_orden_pago = $this->DameOrdenServicio();

            $req = $this->MrrhhRequisicion->newEntity();
            $req = $this->MrrhhRequisicion->patchEntity($req, $this->request->getData());
            $req->id = $requisicion;
            $req->numero_orden_pago = $numero_orden_pago;
            $req->id_tipo_personal = $tp;
            $req->ano = ANO_FISCAL;
            $req->mes = $m;
            $req->quincena = $q;
            $req->tipo = 'ESPECIAL';
            $req->omitida = $o;

            $req->concepto = $concepto;
            $req->monto = $this->revertir_moneda(@$monto);

            $req->partida = @$partida;
            $req->denominacion = @$denominacion;
            
            /*$req->porcentaje = @$porcentaje;
            $req->tipo_porcentaje = @$tipo_porcentaje;

            $req->concepto2 = @$concepto2;
            $req->monto2 = @$monto2;
            $req->tipo_porcentaje2 = @$tipo_porcentaje2;

            $req->concepto3 = @$concepto3;
            $req->monto3 = @$monto3;
            $req->tipo_porcentaje3 = @$tipo_porcentaje3;
            
            $req->concepto4 = @$concepto4;
            $req->monto4 = @$monto4;
            $req->tipo_porcentaje4 = @$tipo_porcentaje4;*/

            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            if($this->MrrhhRequisicion->save($req)){
                
                $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'procesado' => 1];

                $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
                $query = $this->ViewMrrhhHistoricoPersonalizadax->find('all')->where($condicion);

                //=============================================================

                foreach ($query as $reg) {
                    $this->loadModel('MrrhhHistoricoPersonalizada');
                    $nomina = $this->MrrhhHistoricoPersonalizada->newEntity();
                    $nomina = $this->MrrhhHistoricoPersonalizada->patchEntity($nomina, $this->request->getData());

                    $nomina->ano = ANO_FISCAL;
                    $nomina->mes = $m;
                    $nomina->quincena = $q;
                    $nomina->id_tipo_personal = $tp;
                    $nomina->cedula = $reg->cedula;
                    $nomina->requisicion = $requisicion;
                    //-------------------------------
                    $nomina->ano_servicio = $reg->ano_servicio;
                    $nomina->anos_institucion = $reg->anos_institucion;
                    $nomina->anos_servicio = $reg->anos_servicio;
                    $nomina->grado_porcentaje = $reg->grado_porcentaje;
                    $nomina->grupo = $reg->grupo;

                    $nomina->sueldo_base = $monto; 
                    $nomina->sueldo = $reg->sueldo;
                    

                    $nomina->sueldo = $reg->sueldo;
                    $nomina->status = $reg->status;
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
                    $nomina->omitida = $reg->omitida;

                    $this->MrrhhHistoricoPersonalizada->save($nomina);
                }


                $this->loadModel('MrrhhHistoricoPersonalizadax');
                $this->MrrhhHistoricoPersonalizadax->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o]);

                $this->Flash->success(__('Personalizacion Finalizada'));
                return $this->redirect(['action' => 'personalizada']);
            }else{
                $this->Flash->error(__('Error'));
                return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
            }
        }

        //=============================================================
    }

    public function enviar($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 1])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Procesada'));
        return $this->redirect(['action' => 'index']);
    }

    public function eliminarpersonalizada($tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoPersonalizada');
        $this->MrrhhHistoricoPersonalizada->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o]);

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $this->MrrhhHistoricoPersonalizadax->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'omitida IN' => $o]);

        $this->Flash->success(__('Nomina Eliminada'));
        return $this->redirect(['action' => 'personalizada']);
    }

     public function deletep($id = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhPersonalizadaPartidas');
        $this->MrrhhPersonalizadaPartidas->deleteAll(['id IN' => $id]);

        $this->Flash->success(__('Partida Eliminada'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }

    public function addpartida(){

        if ($this->request->is('post')) {

            $m = $this->request->data['ms'];
            $q = $this->request->data['qs'];
            $tp = $this->request->data['tps'];
            $o = $this->request->data['o'];

            @$monto = @$this->request->data['monto'];

            @$partida = @$this->request->data['partida'];
            @$denominacion = @$this->request->data['denominacion'];

            $this->loadModel('MrrhhPersonalizadaPartidas');
            $registros = $this->MrrhhPersonalizadaPartidas->newEntity();
            $registros->ano = ANO_FISCAL;
            $registros->id_tipo_personal = $tp;
            $registros->mes = $m;
            $registros->quincena = $q;

            $registros->partida = $partida;
            $registros->denominacion = $denominacion;
            $registros->monto = $this->revertir_moneda($monto);

            if ($this->MrrhhPersonalizadaPartidas->save($registros)) {
                $this->Flash->success(__('Partida Registrada'));

                return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
            }
            $this->Flash->error(__('Error, intente de nuevo'));
        
        }
    }

    public function incluir($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $query = $this->MrrhhHistoricoPersonalizadax->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula, 'omitida' => $o])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }

    public function incluirtodos($tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $query = $this->MrrhhHistoricoPersonalizadax->query();
        $query->update()
            ->set(['procesado' => 1])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        $this->Flash->success(__('Personal Incluido'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }

    public function excluir($cedula = null, $tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $query = $this->MrrhhHistoricoPersonalizadax->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula, 'omitida' => $o])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }

    public function excluirtodos($tp = null, $m = null, $q = null, $o = null){

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $query = $this->MrrhhHistoricoPersonalizadax->query();
        $query->update()
            ->set(['procesado' => 0])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'omitida' => $o])
            ->execute();
        
        $this->Flash->success(__('Personal Excluido'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }

    public function asignardias(){
        $this->request->allowMethod(['post', 'get', 'save']);

        if($this->request->data['tps'] == 1){
            $this->loadModel('MrrhhHistoricoEmpleadosFijos');
            $query = $this->MrrhhHistoricoEmpleadosFijos->query();
        }else if($this->request->data['tps'] == 2){
            $this->loadModel('MrrhhHistoricoEmpleadosContratados');
            $query = $this->MrrhhHistoricoEmpleadosContratados->query();
        }else if($this->request->data['tps'] == 3){
            $this->loadModel('MrrhhHistoricoDirectivos');
            $query = $this->MrrhhHistoricoDirectivos->query();
        }else if($this->request->data['tps'] == 4){
            $this->loadModel('MrrhhHistoricoObrerosFijos');
            $query = $this->MrrhhHistoricoObrerosFijos->query();
        }else if($this->request->data['tps'] == 5){
            $this->loadModel('MrrhhHistoricoObrerosContratados');
            $query = $this->MrrhhHistoricoObrerosContratados->query();
        }else if($this->request->data['tps'] == 6){
            $this->loadModel('MrrhhHistoricoObrerosNoPermanentes');
            $query = $this->MrrhhHistoricoObrerosNoPermanentes->query();
        }else if($this->request->data['tps'] == 7){
            $this->loadModel('MrrhhHistoricoEmpleadosJubilados');
            $query = $this->MrrhhHistoricoEmpleadosJubilados->query();
        }else if($this->request->data['tps'] == 8){
            $this->loadModel('MrrhhHistoricoObrerosJubilados');
            $query = $this->MrrhhHistoricoObrerosJubilados->query();
        }else if($this->request->data['tps'] == 9){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionados');
            $query = $this->MrrhhHistoricoEmpleadosPensionados->query();
        }else if($this->request->data['tps'] == 10){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 11){
            $this->loadModel('MrrhhHistoricoEmpleadosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoEmpleadosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 12){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosSobrevivientes');
            $query = $this->MrrhhHistoricoObrerosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 13){
            $this->loadModel('MrrhhHistoricoObrerosPensionadosEspeciales');
            $query = $this->MrrhhHistoricoObrerosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 14){
            $this->loadModel('MrrhhHistoricoProteccionCivil');
            $query = $this->MrrhhHistoricoProteccionCivil->query();
        }else if($this->request->data['tps'] == 15){
            $this->loadModel('MrrhhHistoricoCementerio');
            $query = $this->MrrhhHistoricoCementerio->query();
        }else if($this->request->data['tps'] == 16){
            $this->loadModel('MrrhhHistoricoComisionServicio');
            $query = $this->MrrhhHistoricoComisionServicio->query();
        }else if($this->request->data['tps'] == 17){
            $this->loadModel('MrrhhHistoricoHonorarioProfesionales');
            $query = $this->MrrhhHistoricoHonorarioProfesionales->query();
        }

        $dias_dejados_c = ($this->request->data['dias_dejados_c'] != null) ? $this->request->data['dias_dejados_c'] : 0;

        $ajuste_sueldo = ($this->request->data['ajuste_sueldo'] != null) ? $this->request->data['ajuste_sueldo'] : 0;
        $ajuste_p_profesion = ($this->request->data['ajuste_p_profesion'] != null) ? $this->request->data['ajuste_p_profesion'] : 0;
        $ajuste_p_antiguedad = ($this->request->data['ajuste_p_antiguedad'] != null) ? $this->request->data['ajuste_p_antiguedad'] : 0;
        $ajuste_p_hijos = ($this->request->data['ajuste_p_hijos'] != null) ? $this->request->data['ajuste_p_hijos'] : 0;
        $ajuste_p_hogar = ($this->request->data['ajuste_p_hogar'] != null) ? $this->request->data['ajuste_p_hogar'] : 0;

        $ajuste_sso = ($this->request->data['ajuste_sso'] != null) ? $this->request->data['ajuste_sso'] : 0;
        $ajuste_rpe = ($this->request->data['ajuste_rpe'] != null) ? $this->request->data['ajuste_rpe'] : 0;
        $ajuste_faov = ($this->request->data['ajuste_faov'] != null) ? $this->request->data['ajuste_faov'] : 0;
        $ajuste_fpj = ($this->request->data['ajuste_fpj'] != null) ? $this->request->data['ajuste_fpj'] : 0;
        $ajuste_caja = ($this->request->data['ajuste_caja'] != null) ? $this->request->data['ajuste_caja'] : 0;

        $ajuste_a_sso = ($this->request->data['ajuste_a_sso'] != null) ? $this->request->data['ajuste_a_sso'] : 0;
        $ajuste_a_rpe = ($this->request->data['ajuste_a_rpe'] != null) ? $this->request->data['ajuste_a_rpe'] : 0;
        $ajuste_a_faov = ($this->request->data['ajuste_a_faov'] != null) ? $this->request->data['ajuste_a_faov'] : 0;
        $ajuste_a_fpj = ($this->request->data['ajuste_a_fpj'] != null) ? $this->request->data['ajuste_a_fpj'] : 0;
        $ajuste_a_caja = ($this->request->data['ajuste_a_caja'] != null) ? $this->request->data['ajuste_a_caja'] : 0;

        $ajuste_sueldo = $this->verificamoneda($ajuste_sueldo);
        $ajuste_p_profesion = $this->verificamoneda($ajuste_p_profesion);
        $ajuste_p_antiguedad = $this->verificamoneda($ajuste_p_antiguedad);
        $ajuste_p_hijos = $this->verificamoneda($ajuste_p_hijos);
        $ajuste_p_hogar = $this->verificamoneda($ajuste_p_hogar);

        $ajuste_sso = $this->verificamoneda($ajuste_sso);
        $ajuste_rpe = $this->verificamoneda($ajuste_rpe);
        $ajuste_faov = $this->verificamoneda($ajuste_faov);
        $ajuste_fpj = $this->verificamoneda($ajuste_fpj);
        $ajuste_caja = $this->verificamoneda($ajuste_caja);

        $ajuste_a_sso = $this->verificamoneda($ajuste_a_sso);
        $ajuste_a_rpe = $this->verificamoneda($ajuste_a_rpe);
        $ajuste_a_faov = $this->verificamoneda($ajuste_a_faov);
        $ajuste_a_fpj = $this->verificamoneda($ajuste_a_fpj);
        $ajuste_a_caja = $this->verificamoneda($ajuste_a_caja);

        $parametros = ['dias_dejados_c' => @$dias_dejados_c, 
                        'ajuste_sueldo' => @$ajuste_sueldo,
                        'ajuste_p_profesion' => @$ajuste_p_profesion,
                        'ajuste_p_antiguedad' => @$ajuste_p_antiguedad,
                        'ajuste_p_hijos' => @$ajuste_p_hijos,
                        'ajuste_p_hogar' => @$ajuste_p_hogar,
                        'ajuste_sso' => @$ajuste_sso,
                        'ajuste_rpe' => @$ajuste_rpe,
                        'ajuste_faov' => @$ajuste_faov,
                        'ajuste_fpj' => @$ajuste_fpj,
                        'ajuste_caja' => @$ajuste_caja,
                        'ajuste_a_sso' => @$ajuste_a_sso,
                        'ajuste_a_rpe' => @$ajuste_a_rpe,
                        'ajuste_a_faov' => @$ajuste_a_faov,
                        'ajuste_a_fpj' => @$ajuste_a_fpj,
                        'ajuste_a_caja' => @$ajuste_a_caja
                    ];

        if(@$this->request->data['o'] != null){
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'mes' => $this->request->data['ms'], 'quincena' => $this->request->data['qs'], 'omitida' => $this->request->data['o']];

        }else{
            $condicion = ['cedula' => $this->request->data['cedula'], 'id_tipo_personal' => $this->request->data['tps'], 'mes' => $this->request->data['ms'], 'quincena' => $this->request->data['qs']];

        }

        $query->update()
            ->set($parametros)
            ->where($condicion)
            ->execute();

        if($query){
            $this->Flash->success(__('Parametros asignados'));
        }else{
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        
        return $this->redirect(['action' => 'index', $this->request->data['tps'], $this->request->data['ms'], $this->request->data['qs'], $this->request->data['o']]);
    } 














    public function excel($tp, $mes, $quincena, $requisicion, $omitida){
        
        $this->layout='ajax';
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion, 'omitida' => $omitida];

        if($tp == 1){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
            $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
            $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion);
            $this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $data = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
            $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistoricoEJubilados');
            $data = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistoricoOJubilados');
            $data = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
            $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistoricoEPSobre');
            $data = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistoricoEPEsp');
            $data = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistoricoOPSobre');
            $data = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistoricoOPEsp');
            $data = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistoricoPc');
            $data = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistoricoCementerio');
            $data = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistoricoComS');
            $data = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistoricoHonorarioP');
            $data = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function txt($tp, $mes, $quincena, $requisicion){
        $this->layout='txt';
        //$condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion, 'omitida' => $omitida];
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion];
 
        if($tp == 1){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
            $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
            $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all')->where($condicion);
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
            $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistoricoObrerosC');
            $data = $this->ViewMrrhhHistoricoObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
            $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistoricoEJubilados');
            $data = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistoricoOJubilados');
            $data = $this->ViewMrrhhHistoricoOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistoricoEmpleadosP');
            $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistoricoEPSobre');
            $data = $this->ViewMrrhhHistoricoEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistoricoEPEsp');
            $data = $this->ViewMrrhhHistoricoEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistoricoOPSobre');
            $data = $this->ViewMrrhhHistoricoOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistoricoOPEsp');
            $data = $this->ViewMrrhhHistoricoOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistoricoPc');
            $data = $this->ViewMrrhhHistoricoPc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistoricoCementerio');
            $data = $this->ViewMrrhhHistoricoCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistoricoComS');
            $data = $this->ViewMrrhhHistoricoComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistoricoHonorarioP');
            $data = $this->ViewMrrhhHistoricoHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }


    public function excelbe($tp, $mes, $quincena, $requisicion){
        
        $this->layout='ajax';
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion];

        if($tp == 1){
            $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
            $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistBeEmpleadosC');
            $data = $this->ViewMrrhhHistBeEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistBeDirectivos');
            $data = $this->ViewMrrhhHistBeDirectivos->find('all')->where($condicion);
            /*$this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');*/
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistBeObrerosFijos');
            $data = $this->ViewMrrhhHistBeObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistBeObrerosC');
            $data = $this->ViewMrrhhHistBeObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistBeObrerosNoP');
            $data = $this->ViewMrrhhHistBeObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistBeEJubilados');
            $data = $this->ViewMrrhhHistBeEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistBeOJubilados');
            $data = $this->ViewMrrhhHistBeOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistBeEmpleadosP');
            $data = $this->ViewMrrhhHistBeEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistBeEPSobre');
            $data = $this->ViewMrrhhHistBeEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistBeEPEsp');
            $data = $this->ViewMrrhhHistBeEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistBeOPSobre');
            $data = $this->ViewMrrhhHistBeOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistBeOPEsp');
            $data = $this->ViewMrrhhHistBeOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistBePc');
            $data = $this->ViewMrrhhHistBePc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistBeCementerio');
            $data = $this->ViewMrrhhHistBeCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistBeComS');
            $data = $this->ViewMrrhhHistBeComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistBeHonorarioP');
            $data = $this->ViewMrrhhHistBeHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }

    //Bono de Estabilidad
    public function txtbe($tp, $mes, $quincena, $requisicion){
        $this->layout='txt';
        $condicion = ['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion];
 
        if($tp == 1){
            $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
            $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all')->where($condicion);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistBeEmpleadosC');
            $data = $this->ViewMrrhhHistBeEmpleadosC->find('all')->where($condicion);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistBeDirectivos');
            $data = $this->ViewMrrhhHistBeDirectivos->find('all')->where($condicion);
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistBeObrerosFijos');
            $data = $this->ViewMrrhhHistBeObrerosFijos->find('all')->where($condicion);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistBeObrerosC');
            $data = $this->ViewMrrhhHistBeObrerosC->find('all')->where($condicion);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistBeObrerosNoP');
            $data = $this->ViewMrrhhHistBeObrerosNoP->find('all')->where($condicion);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistBeEJubilados');
            $data = $this->ViewMrrhhHistBeEJubilados->find('all')->where($condicion);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistBeOJubilados');
            $data = $this->ViewMrrhhHistBeOJubilados->find('all')->where($condicion);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistBeEmpleadosP');
            $data = $this->ViewMrrhhHistBeEmpleadosP->find('all')->where($condicion);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistBeEPSobre');
            $data = $this->ViewMrrhhHistBeEPSobre->find('all')->where($condicion);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistBeEPEsp');
            $data = $this->ViewMrrhhHistBeEPEsp->find('all')->where($condicion);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistBeOPSobre');
            $data = $this->ViewMrrhhHistBeOPSobre->find('all')->where($condicion);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistBeOPEsp');
            $data = $this->ViewMrrhhHistBeOPEsp->find('all')->where($condicion);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistBePc');
            $data = $this->ViewMrrhhHistBePc->find('all')->where($condicion);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistBeCementerio');
            $data = $this->ViewMrrhhHistBeCementerio->find('all')->where($condicion);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistBeComS');
            $data = $this->ViewMrrhhHistBeComS->find('all')->where($condicion);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistBeHonorarioP');
            $data = $this->ViewMrrhhHistBeHonorarioP->find('all')->where($condicion);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }


    public function excelpersonalizada($tp, $mes, $quincena, $requisicion){
        
        $this->layout='ajax';

        if($tp > 0 and $tp < 16){
            $this->loadModel('ViewMrrhhHistoricoPersonalizada');
            $data = $this->ViewMrrhhHistoricoPersonalizada->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();
        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }


    public function txtpersonalizada($tp, $mes, $quincena, $requisicion){
        $this->layout='txt';

        if($tp > 0 and $tp < 16){
            $this->loadModel('ViewMrrhhHistoricoPersonalizada');
            $data = $this->ViewMrrhhHistoricoPersonalizada->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }

        $this->set('data', $data);

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id' => $requisicion])->last();

        $concepto = $concepto['tipo_personal_denominacion'] . " " .$concepto['ano'] .  " " .$concepto['mes_denominacion'] .  " " .$concepto['quincena_denominacion'];

        $this->set('concepto', $concepto);

         $this->response->type('text');
    }


    public function sueldoindividual(){

        $cedula = $this->request->data['cedula'];
        $tp = $this->request->data['tps'];
        $m = $this->request->data['ms'];
        $q = $this->request->data['qs'];
        $o = $this->request->data['o'];
        $sueldo = $this->request->data['sueldo'];

        $this->loadModel('MrrhhHistoricoPersonalizadax');
        $query = $this->MrrhhHistoricoPersonalizadax->query();
        $query->update()
            ->set(['sueldo' => $this->revertir_moneda($sueldo)])
            ->where(['id_tipo_personal' => $tp, 'mes' => $m, 'quincena' => $q, 'cedula' => $cedula])
            ->execute();
        
        $this->Flash->success(__('Sueldo Asignado'));
        return $this->redirect(['action' => 'personalizada', $tp, $m, $q, $o]);
    }
}