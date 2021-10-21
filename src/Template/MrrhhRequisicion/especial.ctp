<?php $this->assign('title', 'Pagos Especiales'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'especiales'))) ?>

	<?php if (isset($esp) && !empty($esp)){ ?>

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

	    	<?php foreach($esp as $esps){ 

	    		if ($esps->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($esps->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($esps->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($esps->status == 5) {
		            $status = 'APROBADA';
		        }else if ($esps->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($esps->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $esps->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $esps->tipo_personal_denominacion; ?> </td>
			        <td> <?= $esps->quincena_denominacion . " " . $esps->mes_denominacion; ?> </td>
			        <td> <?= $esps->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	
			        	<?php if($esps->tipo == 'ESPECIAL'){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'Acumulado', $esps->mes, $esps->quincena, $esps->id,"PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'ResumenNomina', $esps->mes, $esps->quincena, $esps->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php } ?>-->
						<!-- ----------------------------------------------------------------------------->
						
			        	<?php 
							if($esps->tipo == 'ESPECIAL'){
				        		//-- EXCEL ----------------------------------------------------------------------------->
								echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHNomina', 'action' => 'excelpersonalizada', $esps->id_tipo_personal, $esps->mes, $esps->quincena, $esps->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

								//-- TXT -----------------------------------------------------------------------------
								//echo $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHNomina', 'action' => 'txtpersonalizada', $esps->id_tipo_personal, $esps->mes, $esps->quincena, $esps->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	}
						?>
				    </td>
						

				    <td>
				    	<?php if($esps->tipo == 'ESPECIAL'){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHNomina', 'action' => 'personalizada', $esps->id_tipo_personal, $esps->mes, $esps->quincena, $esps->omitida), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
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