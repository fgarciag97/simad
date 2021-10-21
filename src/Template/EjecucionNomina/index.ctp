<?php $this->assign('title', 'Requisicion de Nomina'); ?>

<div class="well">

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Buscador </strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<div class="row">
	    <div class="col-md-12 ">
	        <div class="card strpied-tabled-with-hover">
	            <div class="card-header border-0">
	                <?= $this->Form->create(@$buscador) ?>
	                  <table style="width:100%">
	                    <tr>
 
	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Requisición</label>
	                                <?= @$this->Form->input('req', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 6% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Numero Orden</label>
	                                <?= @$this->Form->input('op', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 6% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Rango de Fecha</label>
	                                <input type="date" name="d">
	                                <input type="date" name="h">
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 7% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>



	                    </tr> 
	                  </table> 
	              <?php echo $this->Form->end();?>

	            </div>
	        </div>
	    </div>
	</div>





	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Tabla de Requisiciones Recibidas de RRHH</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisición') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo_personal') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('concepto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Reporte" ?> <i class='fa fa-arrow-down'></i></td>
				    <td>Accion</td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ ?>

		    		<?php if($reg->status != 0){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 
                    ?>

                    <?php
                        $n = 6 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 
                    ?>

				    <tr style="text-align: center;">
						<td><label> <?= $requisicion ?></label></td>
						<td><label> <?= $numero_orden_pago ?></label></td>
						<td><label> <?= $reg->tipo_personal_denominacion ?> </label></td>
						<td> <?= $reg->tipo . " - " . $reg->quincena_denominacion . " " . $reg->mes_denominacion;  ?> </td>
						<td>
						
							<?php if($reg->id_tipo_personal == 1 and $reg->tipo == 'NOMINA'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_fijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 2 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_contratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 3 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_directivos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 4 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_fijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 5 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_contratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 6 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_no_permanentes', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 7 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_fijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 8 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_contratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 9 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_fijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 10 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_contratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 11 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosEspeciales', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 12 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosSobrevivientes', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 13 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosEspeciales', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 14 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'acumulado_proteccion_civil', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 15 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 16 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AcumuladoComisionServicio', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 17 and $reg->tipo == 'NOMINA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AcumuladoHonorarioP', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>



							<?php if($reg->id_tipo_personal == 1 and $reg->tipo == 'CESTA TICKET'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoEmpleadosFijos', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 2 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoEmpleadosContratados', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 3 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoDirectivos', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 4 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'AcumuladoObrerosFijos', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 5 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'AcumuladoObrerosContratados', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 14 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'AcumuladoProteccionCivil', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 15 and $reg->tipo == 'CESTA TICKET'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'ReportesCementerio', $reg->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>



							<?php if($reg->id_tipo_personal == 1 and $reg->tipo == 'HORAS EXTRAS'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoEmpleadosFijos', $reg->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 2 and $reg->tipo == 'HORAS EXTRAS'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoEmpleadosContratados', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 3 and $reg->tipo == 'HORAS EXTRAS'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoDirectivos', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 4 and $reg->tipo == 'HORAS EXTRAS'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'ReportesObrerosFijos', $reg->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 5 and $reg->tipo == 'HORAS EXTRAS'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'AcumuladoObrerosContratados', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>



							<?php if(($reg->id_tipo_personal >= 1 and $reg->id_tipo_personal <= 3) and $reg->tipo == 'VACACIONES'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacaciones', 'action' => 'Acumulado', $reg->id_tipo_personal, $reg->mes, $reg->quincena, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

							<?php }else if(($reg->id_tipo_personal == 4) and $reg->tipo == 'VACACIONES'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'AcumuladoObrerosFijos', $reg->mes, $reg->quincena, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

							<?php }else if(($reg->id_tipo_personal == 5) and $reg->tipo == 'VACACIONES'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'AcumuladoObrerosContratados', $reg->mes, $reg->quincena, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>


							<?php }else if(($reg->id_tipo_personal == 6) and $reg->tipo == 'VACACIONES'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'AcumuladoObrerosNoPermanentes', $reg->mes, $reg->quincena, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

							<?php } ?>





							<?php if($reg->id_tipo_personal == 1 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>  
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosFijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 2 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosContratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 3 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMDirectivos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 4 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosFijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 5 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosContratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 6 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosNP', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 7 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMJubiladosEmpleados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 8 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMJubiladosObreros', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 9 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 10 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionadosS', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 11 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionadosE', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 12 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosPensionadosSobrevivientes', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 13 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosPensionadosEspeciales', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
								<!-- FALTA TERMINAR UNOS REPORTES Y ANEXAR AQUI*/-->
							<?php }else if($reg->id_tipo_personal == 14 and $reg->tipo == 'ASISTENCIA MEDICA'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>





							<?php if($reg->id_tipo_personal == 1 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>  
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosFijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 2 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosContratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 3 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadDirectos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 4 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosFijos', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 5 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosContratados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 6 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosNP', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 7 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosEmpleados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 8 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosObreros', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 9 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPensionados', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 10 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPS', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 11 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPE', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 12 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPS', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 13 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPE', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 14 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadProteccionCivil', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 15 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadCementerio', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 16 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadComisionS', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php }else if($reg->id_tipo_personal == 17 and $reg->tipo == 'BONO ESTABILIDAD'){ ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadHonorarioP', $reg->mes, $reg->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>





							<?php if($reg->tipo == 'ESPECIAL'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'Acumulado', $reg->mes, $reg->quincena, $reg->id,"PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>


							<?php if($reg->tipo == 'PRESTACIONES SOCIALES'){ ?> 
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHPrestacionesSociales', 'action' => 'Acumulado', $reg->mes, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?php } ?>






						</td>
						<td>
							<?php 
							if($reg->status == 1){
								echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => 'partidas', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
							}else if($reg->status == 2){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'elaborarnomina', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a ordenamiento la requisicion # {0}?', $requisicion)));
							}else if($reg->status == 4){
								echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
							}else if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
						</td>
					</tr>
		    <?php } }

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>

		</table>
	</div>

	<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>

	<div class="well">
	
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
			<tr>
					<td></td>
					<td class="text-center"><strong>Leyenda</strong></td>
					<td></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-info btn-sm"><i class='fa fa-exclamation-circle' style="align-content: center;"></i></button>
					<label>Elaborada</label>
				</td>
				<td></td>
				<td>
					<button class = "btn btn-success btn-sm"><i class='fa fa-check'></i></button>
					<label>Comprometida</label>
				</td>
				<td>
					<button class = "btn btn-info"><i class='fa fa-send'></i></button>
					<label>En Ejecucion</label>
				</td>
				<td>
					<button class = "btn btn-success"><i class='fa fa-list'></i></button>
					<label>Aprobada</label>
				</td>

				<td>
					<button class = "btn btn-default"><i class='fa fa-credit-card'></i></button>
					<label>Liquidada</label>
				</td>
			</tr>
		</table>

	</div>

</br>