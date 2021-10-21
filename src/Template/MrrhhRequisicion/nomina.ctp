<?php $this->assign('title', 'Nomina'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'nomina'))) ?>

	<?php if (isset($nominas) && !empty($nominas)){ ?>

	<table class="table table-responsive" style="width: 90%; position: center; margin-left: 5%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> <?= $this->Paginator->sort('id', 'Requisicion') ?> </td>
				    <td> Tipo Personal </td>
				    <td> Fecha </td>
				    <td> Concepto </td>
				    <td> Estatus </td>
				    <td> Reporte </td>
				    <td> Ver </td>
				</tr>
			</thead>

	    	<?php foreach($nominas as $nomina){ 

	    		if ($nomina->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($nomina->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($nomina->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($nomina->status == 5) {
		            $status = 'APROBADA';
		        }else if ($nomina->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($nomina->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $nomina->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $nomina->tipo_personal_denominacion; ?> </td>
			        <td> <?= $nomina->quincena_denominacion . " " . $nomina->mes_denominacion; ?> </td>
			        <td> <?= $nomina->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	<?php if($nomina->id_tipo_personal == 1 and $nomina->tipo == 'NOMINA'){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_fijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosFijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 2 and $nomina->tipo == 'NOMINA'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_empleados_contratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosContratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 3 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'acumulado_directivos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaDirectivos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 4 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_fijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 5 and $nomina->tipo == 'NOMINA'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_contratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosContratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 6 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'acumulado_obreros_no_permanentes', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 7 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_fijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'ResumenNominaJubiladosEmpleados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 8 and $nomina->tipo == 'NOMINA'){ ?>
								
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'acumulado_jubilados_contratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'ResumenNominaJubiladosEmpleadosContratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 9 and $nomina->tipo == 'NOMINA'){ ?>
							
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_fijos', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenNominaEmpleadosPensionados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
								
						<?php }else if($nomina->id_tipo_personal == 10 and $nomina->tipo == 'NOMINA'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'acumulado_pensionados_contratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'resumen_pensionados_contratados', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 11 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosEspeciales', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosEspeciales', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 12 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosSobrevivientes', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosObrerosSobrevivientes', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 13 and $nomina->tipo == 'NOMINA'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoPensionadosObrerosEspeciales', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenPensionadosObrerosEspeciales', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($nomina->id_tipo_personal == 14 and $nomina->tipo == 'NOMINA'){ ?>
							
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'acumulado_proteccion_civil', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaProteccionCivilReporte', 'action' => 'ResumenNominaProteccionCivil', $nomina->mes, $nomina->quincena, $nomina->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php } ?> -->
						<!-- ----------------------------------------------------------------------------->
						<?php if($nomina->tipo == 'NOMINA'){ ?>
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHNomina', 'action' => 'excel', $nomina->id_tipo_personal, $nomina->mes, $nomina->quincena, $nomina->id, $nomina->omitida), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

							<!-- TXT ----------------------------------------------------------------------------->
							<!-- <?= $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHNomina', 'action' => 'txt', $nomina->id_tipo_personal, $nomina->mes, $nomina->quincena,  $nomina->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> -->
						<?php } ?>

				    </td>
						

				    <td>
				    	<?php if($nomina->tipo == 'NOMINA'){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHNomina', 'action' => 'index', $nomina->id_tipo_personal, $nomina->mes, $nomina->quincena, $nomina->omitida), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	}
				        ?> 
				    </td>
		    	</tr>
				    
		    <?php } } ?>

		    
	</table>

<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>

	    </div>