<?php if($tps == 1){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadEmpleadosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoEmpleadosFijos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEEmpleadoFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
		
	<?php }else if($tps == 2){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadEmpleadosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoEmpleadosContratados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEEmpleadoContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>


	<?php }else if($tps == 3){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadDirectivos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadDirectos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoDirectivos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEDirectivos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>


<?php if($tps == 4){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoObrerosFijos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 5){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoObrerosContratad', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>


	<?php }else if($tps == 6){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoObrerosNP', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>	
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>



<?php if($tps == 7){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoJubiladosEmpleados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 8){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoJubiladosObreros', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	
	<?php } ?>



	<?php if($tps == 9){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoEmpleadosPensionados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

		
	<?php }else if($tps == 10){ ?>
		
		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadEmpleadosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoEmpleadosPS', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEEmpleadosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	<?php }else if($tps == 11){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadEmpleadosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoEmpleadosPE', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEEmpleadosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	<?php }else if($tps == 12){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadObrerosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoObrerosPS', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEObrerosPS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	<?php }else if($tps == 13){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadObrerosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoObrerosPE', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEObrerosPE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 14){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadProteccionCivil', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadProteccionCivil', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoProteccionCivil', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEProteccionCivil', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 15){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadCementerio', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadCementerio', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoCementerio', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEProteccionCivil', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 16){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadComisionS', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadComisionS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoComisionS', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEComisionS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }else if($tps == 17){ ?>

		<table class="table table-responsive">

			<td>
				<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%; padding: 10px;">
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
				<table class="table table-responsive" style="width: 40%; position: center; padding: 10px;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'BonoEstabilidadHonorarioP', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'AcumuladoBonoEstabilidadHonorarioP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'RequisionBonoHonorarioP', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHBonoEstabilidadReporte', 'action' => 'ResumenBEHonorarioP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }
	
