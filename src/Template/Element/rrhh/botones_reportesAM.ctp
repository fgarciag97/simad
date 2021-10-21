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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMEmpleadosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMEMpleadosFijos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
					<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMEmpleadosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMEmpleadosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMEMpleadosContratados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMEmpleadosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMDirectivos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMDirectivos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMDirectivos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMDirectivos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMObrerosFijos', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMObrerosFijos', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMObrerosContratados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMObrerosContratados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMObrerosNP', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMObrerosNP', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMJubiladosEmpleados', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMJubiladosEmpleados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMJubiladosObreros', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMJubiladosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMEmpleadosP', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMEmpleadosPensionados', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMEmpleadosPensionadosS', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionadosS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMEmpleadosPS', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMEmpleadosPensionadosS', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMEmpleadosPensionadosE', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMEmpleadosPensionadosE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMEmpleadosPE', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMEmpleadosPensionadosE', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMObrerosPensionadosSobrevivientes', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosPensionadosSobrevivientes', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMObrerosPS', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMObrerosPensionadosObrerosSobrevivientes', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Asignaciones",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'BonoAMObrerosPensionadosEspeciales', @$ms, @$qs, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'AcumuladoBonoAMObrerosPensionadosEspeciales', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php if($estatus){ ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'RequisionBonoAMObrerosPE', @$ms, @$qs, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>
						<?php } ?>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHAsistenciaMedicaReporte', 'action' => 'ResumenAMObrerosPensionadosObreros', @$ms, @$qs, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						</td>

					</tr>
				</table>
			</td>
		</table>
	<?php  ?>

	<?php }
	
