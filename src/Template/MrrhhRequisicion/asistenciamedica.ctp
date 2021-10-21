<?php $this->assign('title', 'Asistencia Medica'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'asistenciamedica'))) ?>

	<?php if (isset($am) && !empty($am)){ ?>

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

	    	<?php foreach($am as $ams){ 

	    		if ($ams->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($ams->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($ams->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($ams->status == 5) {
		            $status = 'APROBADA';
		        }else if ($ams->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($ams->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $ams->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $ams->tipo_personal_denominacion; ?> </td>
			        <td> <?= $ams->quincena_denominacion . " " . $ams->mes_denominacion; ?> </td>
			        <td> <?= $ams->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	<?php if($ams->id_tipo_personal == 1 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?> 

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'AcumuladoBonoAMEmpleadosFijos', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 2 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
							

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 3 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>


						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 4 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>


						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 5 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
							

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 6 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>


						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 7 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>


						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 8 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
							

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 9 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
						

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
					<?php }else if($ams->id_tipo_personal == 10 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
							

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 11 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>

						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 12 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>

						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 13 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>

						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoAMObrerosPensionadosEspeciales', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'ResumenAMObrerosPensionadosObreros', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($ams->id_tipo_personal == 14 and $ams->tipo == 'ASISTENCIA MEDICA'){ ?>
						
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $ams->mes, $ams->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php } ?> -->
					<!-- ----------------------------------------------------------------------------->
					<?php if($ams->tipo == 'ASISTENCIA MEDICA'){ ?>
						
						<!-- EXCEL ----------------------------------------------------------------------------->
						<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => '', 'action' => 'excel', $ams->id_tipo_personal, $ams->mes, $ams->quincena,  $ams->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						
						<!-- TXT ----------------------------------------------------------------------------->
						<!--<?= $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => '', 'action' => 'txt', $ams->id_tipo_personal, $ams->mes, $ams->quincena,  $ams->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
					<?php } ?>

				    </td>
						

				    <td>
				    	<?php if($ams->tipo == 'ASISTENCIA MEDICA'){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHAsistenciaMedica', 'action' => 'index', $ams->id_tipo_personal, $ams->mes, $ams->quincena), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
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
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>

	    </div>