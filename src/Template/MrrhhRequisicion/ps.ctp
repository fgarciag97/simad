<?php $this->assign('title', 'Prestaciones Sociales'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'ps'))) ?>

	<?php if (isset($ps) && !empty($ps)){ ?>

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

	    	<?php foreach($ps as $pss){ 

	    		if ($pss->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($pss->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($pss->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($pss->status == 5) {
		            $status = 'APROBADA';
		        }else if ($pss->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($pss->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $pss->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $pss->tipo_personal_denominacion; ?> </td>
			        <td> <?= $pss->quincena_denominacion . " " . $pss->mes_denominacion; ?> </td>
			        <td> <?= $pss->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	<?php if($pss->tipo == 'PRESTACIONES SOCIALES'){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHPrestacionesSociales', 'action' => 'Acumulado', $pss->mes, $pss->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'MRRHHPrestacionesSociales', 'action' => 'ResumenNomina', $pss->mes, $pss->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						

						<?php } ?> -->
						<!-- ----------------------------------------------------------------------------->
						<!--<?php if($pss->tipo == 'PRESTACIONES SOCIALES'){ ?> -->
							<!-- EXCEL ----------------------------------------------------------------------------->
							<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHNomina', 'action' => 'excel', $pss->id_tipo_personal, $pss->mes, $pss->quincena,  $pss->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> 
							<!-- TXT ----------------------------------------------------------------------------->
							<!--<?= $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHNomina', 'action' => 'txt', $pss->id_tipo_personal, $pss->mes, $pss->quincena,  $pss->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
						<!--<?php } ?> -->

				    </td>
						

				    <td>
				    	<?php if($pss->tipo == 'PRESTACIONES SOCIALES'){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHPrestacionesSociales', 'action' => 'index', $pss->id_tipo_personal, $pss->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
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