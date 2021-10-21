
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina</strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'asignaciones_obreros_fijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'deducciones_obreros_fijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'aporte_patronal_obreros_fijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'Neto_cobrar_obreros_fijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'acumulado_obreros_fijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'requision_obreros_fijos', @$ms, @$qs, @$requisicion, @$tps, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHVacacionesOReporte', 'action' => 'ResumenNominaObrerosFijos', @$ms, @$qs, @$tps, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
