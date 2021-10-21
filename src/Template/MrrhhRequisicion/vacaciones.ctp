<?php $this->assign('title', 'Vacaciones'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'vacaciones'))) ?>

	<?php if (isset($vaca) && !empty($vaca)){ ?>

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

	    	<?php foreach($vaca as $vacas){ 

	    		if ($vacas->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($vacas->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($vacas->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($vacas->status == 5) {
		            $status = 'APROBADA';
		        }else if ($vacas->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($vacas->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $vacas->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $vacas->tipo_personal_denominacion; ?> </td>
			        <td> <?= $vacas->quincena_denominacion . " " . $vacas->mes_denominacion; ?> </td>
			        <td> <?= $vacas->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> 
			        	<?php if($vacas->tipo == 'VACACIONES'){ ?> 
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHVacaciones', 'action' => 'reporte', $vacas->id_tipo_personal, $vacas->mes, $vacas->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?php } ?>
						<!-- ----------------------------------------------------------------------------->
						<?php if($vacas->tipo == 'VACACIONES' and ($vacas->id_tipo_personal > 0 and $vacas->id_tipo_personal < 4)){ ?>
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHVacaciones', 'action' => 'excel', $vacas->id_tipo_personal, $vacas->mes, $vacas->quincena,  $vacas->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 
						<?php } ?>
						<?php if($vacas->tipo == 'VACACIONES' and ($vacas->id_tipo_personal > 3 and $vacas->id_tipo_personal < 7)){ ?>
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHVacacionesO', 'action' => 'excel', $vacas->id_tipo_personal, $vacas->mes, $vacas->quincena,  $vacas->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 
						<?php } ?>

				    </td>
						

				    <td>
				    	<?php 

				    	if($vacas->tipo == 'VACACIONES' and ($vacas->id_tipo_personal > 0 and $vacas->id_tipo_personal < 4 OR $vacas->id_tipo_personal = 16)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHVacaciones', 'action' => 'index', $vacas->id_tipo_personal, $vacas->mes, $vacas->quincena), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
				        }else if($vacas->tipo == 'VACACIONES' and ($vacas->id_tipo_personal > 3)){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHVacacionesO', 'action' => 'index', $vacas->id_tipo_personal, $vacas->mes, $vacas->quincena), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
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