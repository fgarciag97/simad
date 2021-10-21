<?php if($tps == 1){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'asignaciones_empleados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'deducciones_empleados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'aporte_patronal_empleados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'Neto_cobrar_empleados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'requision_empleados_fijos',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosFijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table> 

		
	<?php }else if($tps == 2){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'asignaciones_empleados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'deducciones_empleados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'aporte_patronal_empleados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'neto_cobrar_empleados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>  	
					</tr>
				</table>
			</td>
		</table>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'requision_empleados_contratados',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosContratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>


	<?php }else if($tps == 3){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'asignaciones_directivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'deducciones_directivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'aporte_patronal_directivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'neto_cobrar_directivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_directivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'requision_directivos',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaDirectivos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>


<?php if($tps == 4){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'asignaciones_obreros_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'deducciones_obreros_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'aporte_patronal_obreros_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'Neto_cobrar_obreros_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'requision_obreros_fijos', @$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 5){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'asignaciones_obreros_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'deducciones_obreros_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'aporte_patronal_obreros_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'neto_cobrar_obreros_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'requision_obreros_contratados',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosContratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
					</tr>
				</table>
			</td>
		</table>


	<?php }else if($tps == 6){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'asignaciones_no_permanentes', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'requision_no_permanentes',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>					
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_no_permanentes', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'resumen_nomina_obreros_no_permanentes',@$tps, @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>



<?php if($tps == 7){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'asignaciones_jubilados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'deducciones_jubilados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'aporte_patronal_jubilados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'Neto_cobrar_jubilados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'requision_jubilados_fijos',$tps, @$ms, @$qs, @$requisicion, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'ResumenNominaJubiladosEmpleados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 8){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'asignaciones_jubilados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'deducciones_jubilados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'aporte_patronal_jubilados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'neto_cobrar_jubilados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
					
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'requision_jubilados_contratados',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
						</td>
						<?php } ?>
						<td>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'ResumenNominaJubiladosEmpleadosContratados', @$tps, @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

							
							
						</td>
					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>



	<?php if($tps == 9){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'asignaciones_pensionados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'deducciones_pensionados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'aporte_patronal_pensionados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'Neto_cobrar_pensionados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_fijos', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'requision_pensionados_fijos',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenNominaEmpleadosPensionados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 10){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
							</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'asignaciones_pensionados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'RequisionPensionadosEmpleadosSobrevivientes',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'resumen_pensionados_contratados', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	<?php }else if($tps == 11){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AsignacionesPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'DeduccionesPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<!--<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AportePatronalPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>-->
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'NetoPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'RequisionPensionadosEspeciales',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>


	<?php }else if($tps == 12){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
							</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AsignacionesPensionadosObreros', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosSobrevivientes', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'RequisionPensionadosObrerosSobrevivientes',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php } ?>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosObrerosSobrevivientes', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	<?php }else if($tps == 13){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AsignacionesPensionadosEspecialesObreros', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'DeduccionesPensionadosEspecialesObreros', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<!--<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => '', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>-->
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'NetoPensionadosEspecialesObreros', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'RequisionPensionadosEspecialesObreros',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosObrerosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 14){ ?>

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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'AsignacionesProteccionCivil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'deducciones_proteccion_civil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Aporte Patronal",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'AportePatronalProteccionCivil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Neto a Cobrar",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'Neto_cobrar_proteccion_civil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
			</td>bhg

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'acumulado_proteccion_civil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'RequisionProteccionCivil',@$tps, @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'ResumenNominaProteccionCivil', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 15){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reporte detallado de Nomina </strong>
							</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
					<tr>
						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AsignacionesEspecialesObreros', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosObrerosEspeciales', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 16){ ?>

			<table class="table table-responsive">

				<td>
					<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
						<thead>
							<tr>
								<th></th>
								<th class="text-center">
									<strong> Reporte detallado de Nomina </strong>
								</th>
								<th></th>
							</tr>
						</thead>
					</table>
				</td>

				<td>
					<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
						<tr>
							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AsignacionesComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'DeduccionesComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Aporte Patronal ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AportePatronalComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Neto a Pagar ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'NetoCobrarComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AcumuladoComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'RequisionComisionServicio', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'ResumenNominaComisionServicio', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
		<?php } ?>


	<?php if($tps == 17){ ?>

		<table class="table table-responsive">

				<td>
					<table class="table table-responsive" style="width: 80%; position: center; margin-left: 20%; padding: 10px;">
						<thead>
							<tr>
								<th></th>
								<th class="text-center">
									<strong> Reporte detallado de Nomina </strong>
								</th>
								<th></th>
							</tr>
						</thead>
					</table>
				</td>

				<td>
					<table class="table table-responsive" style="width: 30%;" style="width: 80%; position: center; margin-left: 30%; padding: 10px;">
						<tr>
							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AsignacionesHonorariosP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Deducciones",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'DeduccionesHonorarioP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Aporte Patronal ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AportePatronalHonorarioP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							</td>

							<td><?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Neto a Pagar ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'NetoCobrarHonorarioP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'AcumuladoHonorarioP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if (@$status != 0){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion,array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'RequisionHonorarioP', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEspecialesReporte', 'action' => 'ResumenNominaHonorarioP', @$ms, @$qs, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>