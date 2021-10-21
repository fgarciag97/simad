<?php $this->assign('title', 'Horas Extras'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'horasextras'))) ?>

	<?php if (isset($he) && !empty($he)){ ?>

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

	    	<?php foreach($he as $hes){ 

	    		if ($hes->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($hes->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($hes->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($hes->status == 5) {
		            $status = 'APROBADA';
		        }else if ($hes->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($hes->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $hes->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $hes->tipo_personal_denominacion; ?> </td>
			        <td> <?= $hes->quincena_denominacion . " " . $hes->mes_denominacion; ?> </td>
			        <td> <?= $hes->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	<?php if($hes->id_tipo_personal == 1 and $hes->tipo == 'HORAS EXTRAS'){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoEmpleadosFijos', $hes->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'ReportesEmpleadosFijos', $hes->mes, $hes->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($hes->id_tipo_personal == 2 and $hes->tipo == 'HORAS EXTRAS'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoEmpleadosContratados', $hes->mes, $hes->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'ReportesEmpleadosContratados', $hes->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($hes->id_tipo_personal == 3 and $hes->tipo == 'HORAS EXTRAS'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'AcumuladoDirectivos', $hes->mes, $hes->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'ReportesDirectivos', $hes->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($hes->id_tipo_personal == 4 and $hes->tipo == 'HORAS EXTRAS'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'ReportesObrerosFijos', $hes->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'AcumuladoObrerosFijos', $hes->mes, $hes->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($hes->id_tipo_personal == 5 and $hes->tipo == 'HORAS EXTRAS'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'AcumuladoObrerosContratados', $hes->mes, $hes->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'ReportesObrerosContratados', $hes->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php } ?> -->
						<!-- ----------------------------------------------------------------------------->
						<?php if($hes->tipo == 'HORAS EXTRAS'){ ?> 
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?php
								if(($hes->id_tipo_personal == 1 or $hes->id_tipo_personal == 2 or $hes->id_tipo_personal == 3) and $hes->tipo == 'HORAS EXTRAS'){
					        		//-- EXCEL ----------------------------------------------------------------------------->
					        		echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'excel', $hes->id_tipo_personal, $hes->mes, $hes->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

					        	}else if(($hes->id_tipo_personal == 4 or $hes->id_tipo_personal == 5) and $hes->tipo == 'HORAS EXTRAS'){
					        		//-- EXCEL ----------------------------------------------------------------------------->
									echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'excel', $hes->id_tipo_personal, $hes->mes, $hes->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

					        	}
				        	?>


							

							<!-- TXT ----------------------------------------------------------------------------->
							<!--<?= $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHNomina', 'action' => 'txt', $hes->id_tipo_personal, $hes->mes, $hes->quincena,  $hes->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
						<!--<?php } ?> -->

				    </td>
						

				    <td>
				    	<?php if($hes->tipo == 'HORAS EXTRAS' and ($hes->id_tipo_personal > 0 and $hes->id_tipo_personal < 4)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'index', $hes->id_tipo_personal, $hes->mes, $hes->omitida), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
				        	}else if($hes->tipo == 'HORAS EXTRAS' and ($hes->id_tipo_personal > 3)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'index', $hes->id_tipo_personal, $hes->mes, $hes->omitida), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
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