
<?php if($tps == 4){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Vacaciones</strong>
							</th>
							<th></th> 
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'asignaciones_obreros_fijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'deducciones_obreros_fijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'aporte_patronal_obreros_fijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'Neto_cobrar_obreros_fijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th class="text-center">
								<strong> Seguimiento y Reporte de pago </strong>
							</th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'acumulado_obreros_fijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'requision_obreros_fijos', @$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'ResumenNominaObrerosFijos', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 5){ ?>
		
		<!--<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Vacaciones </strong>
							</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'asignaciones_obreros_contratados', @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'deducciones_obreros_contratados', @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'aporte_patronal_obreros_contratados', @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'neto_cobrar_obreros_contratados', @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>-->

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th class="text-center">
								<strong> Seguimiento y Reporte de pago </strong>
							</th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'AsignacionesObrerosContratados', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'acumulado_obreros_contratados', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'requision_obreros_contratados', @$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'ResumenNominaObrerosContratados', @$tps, @$ms, @$qs, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
					</tr>
				</table>
			</td>
		</table>


	<?php } ?>