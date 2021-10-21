<?php $this->assign('title', 'Bono Fin de Año'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'fin'))) ?>

	<?php if (isset($fin) && !empty($fin)){ ?>

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

	    	<?php foreach($fin as $fins){ 

	    		if ($fins->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($fins->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($fins->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($fins->status == 5) {
		            $status = 'APROBADA';
		        }else if ($fins->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($fins->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $fins->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $fins->tipo_personal_denominacion; ?> </td>
			        <td> <?= $fins->desde . " " . $fins->hastas; ?> </td>
			        <td> <?= $fins->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> 
			        	<?php if($fins->tipo == 'FIN'){ ?> 
			        		<?php if($fins->id_tipo_personal == 4 or $fins->id_tipo_personal == 5 or $fins->id_tipo_personal == 6 or $fins->id_tipo_personal == 8 or $fins->id_tipo_personal == 12 or $fins->id_tipo_personal == 13){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHFinO', 'action' => 'reporte', $fins->id_tipo_personal, $fins->desde, $fins->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

			        		<?php }else{ ?> 
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHFin', 'action' => 'reporte', $fins->id_tipo_personal, $fins->desde, $fins->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			        		<?php } ?> 
						<?php } ?>
						<!-- ----------------------------------------------------------------------------->
						<?php if($fins->tipo == 'FIN' and ($fins->id_tipo_personal > 0 and $fins->id_tipo_personal < 4)){ ?>
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?php if($fins->id_tipo_personal == 4 or $fins->id_tipo_personal == 5 or $fins->id_tipo_personal == 6 or $fins->id_tipo_personal == 8 or $fins->id_tipo_personal == 12 or $fins->id_tipo_personal == 13){ ?> 

								<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHFinO', 'action' => 'excel', $fins->id_tipo_personal, $fins->desde, $fins->hasta,  $fins->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 

							<?php }else{ ?> 
								<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHFin', 'action' => 'excel', $fins->id_tipo_personal, $fins->desde, $fins->hasta,  $fins->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 
			        		<?php } ?> 
						<?php } ?>
						<?php if($fins->tipo == 'FIN' and ($fins->id_tipo_personal > 3 and $fins->id_tipo_personal < 7)){ ?>
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?php if($fins->id_tipo_personal == 4 or $fins->id_tipo_personal == 5 or $fins->id_tipo_personal == 6 or $fins->id_tipo_personal == 8 or $fins->id_tipo_personal == 12 or $fins->id_tipo_personal == 13){ ?> 

								<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHFinO', 'action' => 'excel', $fins->id_tipo_personal, $fins->desde, $fins->hasta,  $fins->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 

							<?php }else{ ?> 
								<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHFin', 'action' => 'excel', $fins->id_tipo_personal, $fins->desde, $fins->hasta,  $fins->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 
			        		<?php } ?> 
						<?php } ?>

				    </td>
						

				    <td>
				    	<?php 

				    	if($fins->tipo == 'FIN' and ($fins->id_tipo_personal > 0 and $fins->id_tipo_personal < 4 OR $fins->id_tipo_personal = 16)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHFin', 'action' => 'index', $fins->id_tipo_personal, $fins->desde, $fins->hasta), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
				        }else if($fins->tipo == 'FIN' and ($fins->id_tipo_personal > 3)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHFinO', 'action' => 'index', $fins->id_tipo_personal, $fins->desde, $fins->hasta), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
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