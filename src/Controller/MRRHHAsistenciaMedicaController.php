<?php
namespace App\Controller;

use App\Controller\AppController;


class MRRHHAsistenciaMedicaController extends AppController
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
        $condicion = ['concepto <>' => '', 'tipo' => 'ASISTENCIA MEDICA'];
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

            $concepto = strtoupper("PAGO ASISTENCIA MEDICA DE LA " . $quincena[0]['denominacion'] . " DEL MES DE " . $mes[0]['denominacion'] . " DE " . $tipo_personal[0]['denominacion']);
            $this->set('concepto', $concepto);
        }

        //========================================================
        //Almacenar en tabla
        //========================================================

        if($tp != null and $m != null and $q != null and ($tp > 0 and $tp < 15)){

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
                $this->loadModel('ViewMrrhhHononarioPAux');
                $query = $this->ViewMrrhhHononarioPAux->find('all');
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
                $n = $this->ViewMrrhhHistAmEmpleadosFijos->find('all')->where($condicion)->count();
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistAmEmpleadosC');
                $n = $this->ViewMrrhhHistAmEmpleadosC->find('all')->where($condicion)->count();
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistAmDirectivos');
                $n = $this->ViewMrrhhHistAmDirectivos->find('all')->where($condicion)->count();
            }if($tp == 4){
                $this->loadModel('ViewMrrhhHistAmObrerosFijos');
                $n = $this->ViewMrrhhHistAmObrerosFijos->find('all')->where($condicion)->count();
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistAmObrerosC');
                $n = $this->ViewMrrhhHistAmObrerosC->find('all')->where($condicion)->count();
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistAmObrerosNoP');
                $n = $this->ViewMrrhhHistAmObrerosNoP->find('all')->where($condicion)->count();
            }if($tp == 7){
                $this->loadModel('ViewMrrhhHistAmEJubilados');
                $n = $this->ViewMrrhhHistAmEJubilados->find('all')->where($condicion)->count();
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistAmOJubilados');
                $n = $this->ViewMrrhhHistAmOJubilados->find('all')->where($condicion)->count();
            }if($tp == 9){
                $this->loadModel('ViewMrrhhHistAmEmpleadosP');
                $n = $this->ViewMrrhhHistAmEmpleadosP->find('all')->where($condicion)->count();
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistAmEPSobre');
                $n = $this->ViewMrrhhHistAmEPSobre->find('all')->where($condicion)->count();
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistAmEPEsp');
                $n = $this->ViewMrrhhHistAmEPEsp->find('all')->where($condicion)->count();
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistAmOPSobre');
                $n = $this->ViewMrrhhHistAmOPSobre->find('all')->where($condicion)->count();
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistAmOPEsp');
                $n = $this->ViewMrrhhHistAmOPEsp->find('all')->where($condicion)->count();
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistAmPc');
                $n = $this->ViewMrrhhHistAmPc->find('all')->where($condicion)->count();
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistAmCementerio');
                $query = $this->ViewMrrhhHistAmCementerio->find('all');
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistAmComS');
                $query = $this->ViewMrrhhHistAmComS->find('all');
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistAmHononarioP');
                $query = $this->ViewMrrhhHistAmHononarioP->find('all');
            }

            if($n == 0){
                foreach ($query as $reg) {

                    if($tp == 1){
                        $this->loadModel('MrrhhHistAmEmpleadosFijos');
                            $nomina = $this->MrrhhHistAmEmpleadosFijos->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 2){
                        $this->loadModel('MrrhhHistAmEmpleadosContratados');
                            $nomina = $this->MrrhhHistAmEmpleadosContratados->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 3){
                        $this->loadModel('MrrhhHistAmDirectivos');
                            $nomina = $this->MrrhhHistAmDirectivos->newEntity();
                            $nomina = $this->MrrhhHistAmDirectivos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 4){
                        $this->loadModel('MrrhhHistAmObrerosFijos');
                            $nomina = $this->MrrhhHistAmObrerosFijos->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosFijos->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 5){
                        $this->loadModel('MrrhhHistAmObrerosContratados');
                            $nomina = $this->MrrhhHistAmObrerosContratados->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosContratados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 6){
                        $this->loadModel('MrrhhHistAmObrerosNoPermanentes');
                            $nomina = $this->MrrhhHistAmObrerosNoPermanentes->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosNoPermanentes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 7){
                        $this->loadModel('MrrhhHistAmEmpleadosJubilados');
                            $nomina = $this->MrrhhHistAmEmpleadosJubilados->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 8){
                        $this->loadModel('MrrhhHistAmObrerosJubilados');
                            $nomina = $this->MrrhhHistAmObrerosJubilados->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosJubilados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 9){
                        $this->loadModel('MrrhhHistAmEmpleadosPensionados');
                            $nomina = $this->MrrhhHistAmEmpleadosPensionados->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosPensionados->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 10){
                        $this->loadModel('MrrhhHistAmEmpleadosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 11){
                        $this->loadModel('MrrhhHistAmEmpleadosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistAmEmpleadosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistAmEmpleadosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 12){
                        $this->loadModel('MrrhhHistAmObrerosPensionadosSobrevivientes');
                            $nomina = $this->MrrhhHistAmObrerosPensionadosSobrevivientes->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosPensionadosSobrevivientes->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 13){
                        $this->loadModel('MrrhhHistAmObrerosPensionadosEspeciales');
                            $nomina = $this->MrrhhHistAmObrerosPensionadosEspeciales->newEntity();
                            $nomina = $this->MrrhhHistAmObrerosPensionadosEspeciales->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 14){
                        $this->loadModel('MrrhhHistAmProteccionCivil');
                            $nomina = $this->MrrhhHistAmProteccionCivil->newEntity();
                            $nomina = $this->MrrhhHistAmProteccionCivil->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 15){
                        $this->loadModel('MrrhhHistAmCementerio');
                            $nomina = $this->MrrhhHistAmCementerio->newEntity();
                            $nomina = $this->MrrhhHistAmCementerio->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 16){
                        $this->loadModel('MrrhhHistAmComS');
                            $nomina = $this->MrrhhHistAmComS->newEntity();
                            $nomina = $this->MrrhhHistAmComS->patchEntity($nomina, $this->request->getData());
                    }else if($tp == 17){
                        $this->loadModel('MrrhhHistAmHonorarioP');
                            $nomina = $this->MrrhhHistAmHonorarioP->newEntity();
                            $nomina = $this->MrrhhHistAmHonorarioP->patchEntity($nomina, $this->request->getData());
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
                        $this->MrrhhHistAmEmpleadosFijos->save($nomina);
                    }else if($tp == 2){
                        $this->MrrhhHistAmEmpleadosContratados->save($nomina);
                    }else if($tp == 3){
                        $this->MrrhhHistAmDirectivos->save($nomina);
                    }else if($tp == 4){
                        $this->MrrhhHistAmObrerosFijos->save($nomina);
                    }else if($tp == 5){
                        $this->MrrhhHistAmObrerosContratados->save($nomina);
                    }else if($tp == 6){
                        $this->MrrhhHistAmObrerosNoPermanentes->save($nomina);
                    }else if($tp == 7){
                        $this->MrrhhHistAmEmpleadosJubilados->save($nomina);
                    }else if($tp == 8){
                        $this->MrrhhHistAmObrerosJubilados->save($nomina);
                    }else if($tp == 9){
                        $this->MrrhhHistAmEmpleadosPensionados->save($nomina);
                    }else if($tp == 10){
                        $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 11){
                        $this->MrrhhHistAmEmpleadosPensionadosEspeciales->save($nomina);
                    }else if($tp == 12){
                        $this->MrrhhHistAmObrerosPensionadosSobrevivientes->save($nomina);
                    }else if($tp == 13){
                        $this->MrrhhHistAmObrerosPensionadosEspeciales->save($nomina);
                    }else if($tp == 14){
                        $this->MrrhhHistAmProteccionCivil->save($nomina);
                    }else if($tp == 15){
                        $this->MrrhhHistAmCementerio->save($nomina);
                    }else if($tp == 16){
                        $this->MrrhhHistAmComS->save($nomina);
                    }else if($tp == 17){
                        $this->MrrhhHistAmHonorarioP->save($nomina);
                    }
                }
            }
        }






        if($tp != '' and $m != '' and $q != ''){
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];

            if($tp == 1){
                $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
                $data = $this->paginate($this->ViewMrrhhHistAmEmpleadosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEmpleadosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 2){
                $this->loadModel('ViewMrrhhHistAmEmpleadosC');
                $data = $this->paginate($this->ViewMrrhhHistAmEmpleadosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEmpleadosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhHistAmDirectivos');
                $data = $this->paginate($this->ViewMrrhhHistAmDirectivos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmDirectivos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 4){
                $this->loadModel('ViewMrrhhHistAmObrerosFijos');
                $data = $this->paginate($this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhHistAmObrerosC');
                $data = $this->paginate($this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhHistAmObrerosNoP');
                $data = $this->paginate($this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 7){
                $this->loadModel('ViewMrrhhHistAmEJubilados');
                $data = $this->paginate($this->ViewMrrhhHistAmEJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhHistAmOJubilados');
                $data = $this->paginate($this->ViewMrrhhHistAmOJubilados->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmOJubilados->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 9){
                $this->loadModel('ViewMrrhhHistAmEmpleadosP');
                $data = $this->paginate($this->ViewMrrhhHistAmEmpleadosP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEmpleadosP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhHistAmEPSobre');
                $data = $this->paginate($this->ViewMrrhhHistAmEPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhHistAmEPEsp');
                $data = $this->paginate($this->ViewMrrhhHistAmEPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmEPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhHistAmOPSobre');
                $data = $this->paginate($this->ViewMrrhhHistAmOPSobre->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmOPSobre->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhHistAmOPEsp');
                $data = $this->paginate($this->ViewMrrhhHistAmOPEsp->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmOPEsp->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 14){
                $this->loadModel('ViewMrrhhHistAmPc');
                $data = $this->paginate($this->ViewMrrhhHistAmPc->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmPc->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 15){
                $this->loadModel('ViewMrrhhHistAmCementerio');
                $data = $this->paginate($this->ViewMrrhhHistAmCementerio->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmCementerio->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 16){
                $this->loadModel('ViewMrrhhHistAmComS');
                $data = $this->paginate($this->ViewMrrhhHistAmComS->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmComS->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);

            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHistAmHonorarioP');
                $data = $this->paginate($this->ViewMrrhhHistAmHonorarioP->find('all', ['conditions' => $condicion]));
                $this->set(compact('data'));

                $n = $this->ViewMrrhhHistAmHonorarioP->find('all', ['conditions' => $condicion]);
                $this->set('n', $n);
            }

            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp, 'tipo' => 'ASISTENCIA MEDICA'];

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
            $req->tipo = 'ASISTENCIA MEDICA';
            $req->concepto = $concepto;
            $req->status = 1;
            $req->fecha_rrhh = date('d/m/Y');
            $req->hora_rrhh = date('h:i:s');

            $this->MrrhhRequisicion->save($req);
            
            //=============================================================

            if($tp == 1){
                $this->loadModel('MrrhhHistAmEmpleadosFijos');
                $query = $this->MrrhhHistAmEmpleadosFijos->query();
            }else if($tp == 2){
                $this->loadModel('MrrhhHistAmEmpleadosContratados');
                $query = $this->MrrhhHistAmEmpleadosContratados->query();
            }else if($tp == 3){
                $this->loadModel('MrrhhHistAmDirectivos');
                $query = $this->MrrhhHistAmDirectivos->query();
            }else if($tp == 4){
                $this->loadModel('MrrhhHistAmObrerosFijos');
                $query = $this->MrrhhHistAmObrerosFijos->query();
            }else if($tp == 5){
                $this->loadModel('MrrhhHistAmObrerosContratados');
                $query = $this->MrrhhHistAmObrerosContratados->query();
            }else if($tp == 6){
                $this->loadModel('MrrhhHistAmObrerosNoPermanentes');
                $query = $this->MrrhhHistAmObrerosNoPermanentes->query();
            }else if($tp == 7){
                $this->loadModel('MrrhhHistAmEmpleadosJubilados');
                $query = $this->MrrhhHistAmEmpleadosJubilados->query();
            }else if($tp == 8){
                $this->loadModel('MrrhhHistAmObrerosJubilados');
                $query = $this->MrrhhHistAmObrerosJubilados->query();
            }else if($tp == 9){
                $this->loadModel('MrrhhHistAmEmpleadosPensionados');
                $query = $this->MrrhhHistAmEmpleadosPensionados->query();
            }else if($tp == 10){
                $this->loadModel('MrrhhHistAmEmpleadosPensionadosSobrevivientes');
                $query = $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->query();
            }else if($tp == 11){
                $this->loadModel('MrrhhHistAmEmpleadosPensionadosEspeciales');
                $query = $this->MrrhhHistAmEmpleadosPensionadosEspeciales->query();
            }else if($tp == 12){
                $this->loadModel('MrrhhHistAmObrerosPensionadosSobrevivientes');
                $query = $this->MrrhhHistAmObrerosPensionadosSobrevivientes->query();
            }else if($tp == 13){
                $this->loadModel('MrrhhHistAmObrerosPensionadosEspeciales');
                $query = $this->MrrhhHistAmObrerosPensionadosEspeciales->query();
            }else if($tp == 14){
                $this->loadModel('MrrhhHistAmProteccionCivil');
                $query = $this->MrrhhHistAmProteccionCivil->query();
            }else if($tp == 15){
                $this->loadModel('MrrhhHistAmCementerio');
                $query = $this->MrrhhHistAmCementerio->query();
            }else if($tp == 16){
                $this->loadModel('MrrhhHistAmComS');
                $query = $this->MrrhhHistAmComS->query();
            }else if($tp == 17){
                $this->loadModel('MrrhhHistAmHonorarioP');
                $query = $this->MrrhhHistAmHonorarioP->query();
            }
            
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $m, 'quincena' => $q, 'id_tipo_personal' => $tp];
            $query->update()
                ->set(['procesado' => 1, 'requisicion' => $requisicion])
                ->where($condicion)
                ->execute();


            $this->Flash->success(__('ASISTENCIA MEDICA Elaborada'));
            return $this->redirect(['controller' => 'MrrhhRequisicion','action' => 'asistenciamedica']);

        }

        //=============================================================
    }

    public function eliminar($tp = null, $m = null, $q = null){

        if($tp == 1){
            $this->loadModel('MrrhhHistAmEmpleadosFijos');
            $this->MrrhhHistAmEmpleadosFijos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistAmEmpleadosContratados');
            $this->MrrhhHistAmEmpleadosContratados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistAmDirectivos');
            $this->MrrhhHistAmDirectivos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistAmObrerosFijos');
            $this->MrrhhHistAmObrerosFijos->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistAmObrerosContratados');
            $this->MrrhhHistAmObrerosContratados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistAmObrerosNoPermanentes');
            $this->MrrhhHistAmObrerosNoPermanentes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistAmEmpleadosJubilados');
            $this->MrrhhHistAmEmpleadosJubilados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistAmObrerosJubilados');
            $this->MrrhhHistAmObrerosJubilados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistAmEmpleadosPensionados');
            $this->MrrhhHistAmEmpleadosPensionados->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosEspeciales');
            $this->MrrhhHistAmEmpleadosPensionadosEspeciales->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistAmObrerosPensionadosSobrevivientes');
            $this->MrrhhHistAmObrerosPensionadosSobrevivientes->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistAmObrerosPensionadosEspeciales');
            $this->MrrhhHistAmObrerosPensionadosEspeciales->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistAmProteccionCivil');
            $this->MrrhhHistAmProteccionCivil->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistAmCementerio');
            $this->MrrhhHistAmCementerio->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistAmComS');
            $this->MrrhhHistAmComS->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistAmHonorarioP');
            $this->MrrhhHistAmHonorarioP->deleteAll(['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q]);
        }

        $this->Flash->success(__('ASISTENCIA MEDICA Eliminada'));
        return $this->redirect(['action' => 'index']);
    }

    public function eliminardenomina($tp = null, $m = null, $q = null, $cedula = null){

        $condicion = ['id_tipo_personal IN' => $tp, 'ano IN' => ANO_FISCAL, 'mes IN' => $m, 'quincena IN' => $q, 'cedula' => $cedula];
        if($tp == 1){
            $this->loadModel('MrrhhHistAmEmpleadosFijos');
            $this->MrrhhHistAmEmpleadosFijos->deleteAll($condicion);
        }else if($tp == 2){
            $this->loadModel('MrrhhHistAmEmpleadosContratados');
            $this->MrrhhHistAmEmpleadosContratados->deleteAll($condicion);
        }else if($tp == 3){
            $this->loadModel('MrrhhHistAmDirectivos');
            $this->MrrhhHistAmDirectivos->deleteAll($condicion);
        }else if($tp == 4){
            $this->loadModel('MrrhhHistAmObrerosFijos');
            $this->MrrhhHistAmObrerosFijos->deleteAll($condicion);
        }else if($tp == 5){
            $this->loadModel('MrrhhHistAmObrerosContratados');
            $this->MrrhhHistAmObrerosContratados->deleteAll($condicion);
        }else if($tp == 6){
            $this->loadModel('MrrhhHistAmObrerosNoPermanentes');
            $this->MrrhhHistAmObrerosNoPermanentes->deleteAll($condicion);
        }else if($tp == 7){
            $this->loadModel('MrrhhHistAmEmpleadosJubilados');
            $this->MrrhhHistAmEmpleadosJubilados->deleteAll($condicion);
        }else if($tp == 8){
            $this->loadModel('MrrhhHistAmObrerosJubilados');
            $this->MrrhhHistAmObrerosJubilados->deleteAll($condicion);
        }else if($tp == 9){
            $this->loadModel('MrrhhHistAmEmpleadosPensionados');
            $this->MrrhhHistAmEmpleadosPensionados->deleteAll($condicion);
        }else if($tp == 10){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosSobrevivientes');
            $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 11){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosEspeciales');
            $this->MrrhhHistAmEmpleadosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 12){
            $this->loadModel('MrrhhHistAmObrerosPensionadosSobrevivientes');
            $this->MrrhhHistAmObrerosPensionadosSobrevivientes->deleteAll($condicion);
        }else if($tp == 13){
            $this->loadModel('MrrhhHistAmObrerosPensionadosEspeciales');
            $this->MrrhhHistAmObrerosPensionadosEspeciales->deleteAll($condicion);
        }else if($tp == 14){
            $this->loadModel('MrrhhHistAmProteccionCivil');
            $this->MrrhhHistAmProteccionCivil->deleteAll($condicion);
        }else if($tp == 15){
            $this->loadModel('MrrhhHistAmCementerio');
            $this->MrrhhHistAmCementerio->deleteAll($condicion);
        }else if($tp == 16){
            $this->loadModel('MrrhhHistAmComisionServicio');
            $this->MrrhhHistAmComisionServicio->deleteAll($condicion);
        }else if($tp == 17){
            $this->loadModel('MrrhhHistAmHonorarioP');
            $this->MrrhhHistAmHonorarioP->deleteAll($condicion);
        }

        $this->Flash->success(__('Eliminado de Nomina'));
        return $this->redirect(['action' => 'index', $tp, $m, $q]);
    }


    public function asignarasistencia(){
        $this->request->allowMethod(['post', 'get', 'save']);

        if($this->request->data['tps'] == 1){
            $this->loadModel('MrrhhHistAmEmpleadosFijos');
            $query = $this->MrrhhHistAmEmpleadosFijos->query();
        }else if($this->request->data['tps'] == 2){
            $this->loadModel('MrrhhHistAmEmpleadosContratados');
            $query = $this->MrrhhHistAmEmpleadosContratados->query();
        }else if($this->request->data['tps'] == 3){
            $this->loadModel('MrrhhHistAmDirectivos');
            $query = $this->MrrhhHistAmDirectivos->query();
        }else if($this->request->data['tps'] == 4){
            $this->loadModel('MrrhhHistAmObrerosFijos');
            $query = $this->MrrhhHistAmObrerosFijos->query();
        }else if($this->request->data['tps'] == 5){
            $this->loadModel('MrrhhHistAmObrerosContratados');
            $query = $this->MrrhhHistAmObrerosContratados->query();
        }else if($this->request->data['tps'] == 6){
            $this->loadModel('MrrhhHistAmObrerosNoPermanentes');
            $query = $this->MrrhhHistAmObrerosNoPermanentes->query();
        }else if($this->request->data['tps'] == 7){
            $this->loadModel('MrrhhHistAmEmpleadosJubilados');
            $query = $this->MrrhhHistAmEmpleadosJubilados->query();
        }else if($this->request->data['tps'] == 8){
            $this->loadModel('MrrhhHistAmObrerosJubilados');
            $query = $this->MrrhhHistAmObrerosJubilados->query();
        }else if($this->request->data['tps'] == 9){
            $this->loadModel('MrrhhHistAmEmpleadosPensionados');
            $query = $this->MrrhhHistAmEmpleadosPensionados->query();
        }else if($this->request->data['tps'] == 10){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosSobrevivientes');
            $query = $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 11){
            $this->loadModel('MrrhhHistAmEmpleadosPensionadosEspeciales');
            $query = $this->MrrhhHistAmEmpleadosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 12){
            $this->loadModel('MrrhhHistAmObrerosPensionadosSobrevivientes');
            $query = $this->MrrhhHistAmObrerosPensionadosSobrevivientes->query();
        }else if($this->request->data['tps'] == 13){
            $this->loadModel('MrrhhHistAmObrerosPensionadosEspeciales');
            $query = $this->MrrhhHistAmObrerosPensionadosEspeciales->query();
        }else if($this->request->data['tps'] == 14){
            $this->loadModel('MrrhhHistAmProteccionCivil');
            $query = $this->MrrhhHistAmProteccionCivil->query();
        }else if($this->request->data['tps'] == 15){
            $this->loadModel('MrrhhHistAmCementerio');
            $query = $this->MrrhhHistAmCementerio->query();
        }else if($this->request->data['tps'] == 16){
            $this->loadModel('MrrhhHistAmComisionServicio');
            $query = $this->MrrhhHistAmComisionServicio->query();
        }else if($this->request->data['tps'] == 17){
            $this->loadModel('MrrhhHistAmHonorarioP');
            $query = $this->MrrhhHistAmHonorarioP->query();
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
            $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
            $data = $this->ViewMrrhhHistAmEmpleadosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistAmEmpleadosC');
            $data = $this->ViewMrrhhHistAmEmpleadosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistAmDirectivos');
            $data = $this->ViewMrrhhHistAmDirectivos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
            /*$this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');*/
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistAmObrerosFijos');
            $data = $this->ViewMrrhhHistAmObrerosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistAmObrerosC');
            $data = $this->ViewMrrhhHistAmObrerosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistAmObrerosNoP');
            $data = $this->ViewMrrhhHistAmObrerosNoP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistAmEJubilados');
            $data = $this->ViewMrrhhHistAmEJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistAmOJubilados');
            $data = $this->ViewMrrhhHistAmOJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistAmEmpleadosP');
            $data = $this->ViewMrrhhHistAmEmpleadosP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistAmEPSobre');
            $data = $this->ViewMrrhhHistAmEPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistAmEPEsp');
            $data = $this->ViewMrrhhHistAmEPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistAmOPSobre');
            $data = $this->ViewMrrhhHistAmOPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistAmOPEsp');
            $data = $this->ViewMrrhhHistAmOPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistAmPc');
            $data = $this->ViewMrrhhHistAmPc->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistAmCementerio');
            $data = $this->ViewMrrhhHistAmCementerio->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistAmComS');
            $data = $this->ViewMrrhhHistAmComS->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistAmHonorarioP');
            $data = $this->ViewMrrhhHistAmHonorarioP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
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
            $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
            $data = $this->ViewMrrhhHistAmEmpleadosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 2){
            $this->loadModel('ViewMrrhhHistAmEmpleadosC');
            $data = $this->ViewMrrhhHistAmEmpleadosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 3){
            $this->loadModel('ViewMrrhhHistAmDirectivos');
            $data = $this->ViewMrrhhHistAmDirectivos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 4){
            $this->loadModel('ViewMrrhhHistAmObrerosFijos');
            $data = $this->ViewMrrhhHistAmObrerosFijos->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 5){
            $this->loadModel('ViewMrrhhHistAmObrerosC');
            $data = $this->ViewMrrhhHistAmObrerosC->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 6){
            $this->loadModel('ViewMrrhhHistAmObrerosNoP');
            $data = $this->ViewMrrhhHistAmObrerosNoP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 7){
            $this->loadModel('ViewMrrhhHistAmEJubilados');
            $data = $this->ViewMrrhhHistAmEJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 8){
            $this->loadModel('ViewMrrhhHistAmOJubilados');
            $data = $this->ViewMrrhhHistAmOJubilados->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 9){
            $this->loadModel('ViewMrrhhHistAmEmpleadosP');
            $data = $this->ViewMrrhhHistAmEmpleadosP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 10){
            $this->loadModel('ViewMrrhhHistAmEPSobre');
            $data = $this->ViewMrrhhHistAmEPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 11){
            $this->loadModel('ViewMrrhhHistAmEPEsp');
            $data = $this->ViewMrrhhHistAmEPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 12){
            $this->loadModel('ViewMrrhhHistAmOPSobre');
            $data = $this->ViewMrrhhHistAmOPSobre->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 13){
            $this->loadModel('ViewMrrhhHistAmOPEsp');
            $data = $this->ViewMrrhhHistAmOPEsp->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 14){
            $this->loadModel('ViewMrrhhHistAmPc');
            $data = $this->ViewMrrhhHistAmPc->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 15){
            $this->loadModel('ViewMrrhhHistAmCementerio');
            $data = $this->ViewMrrhhHistAmCementerio->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 16){
            $this->loadModel('ViewMrrhhHistAmComS');
            $data = $this->ViewMrrhhHistAmComS->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
        }else if($tp == 17){
            $this->loadModel('ViewMrrhhHistAmHonorarioP');
            $data = $this->ViewMrrhhHistAmHonorarioP->find('all')->where(['id_tipo_personal' => $tp, 'ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'requisicion' => $requisicion]);
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