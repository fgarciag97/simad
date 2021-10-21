<?php $this->assign('title', 'Orden de Servicio'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Orden de Servicio</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('requisicion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('proveedor') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('sub_total') ?> <i class='fa fa-arrow-down'></i></td>
				    <td>Acción</td>
				    <td>Enviar a Presupuesto</td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ ?>
			    <tr style="text-align: center;">

			    	<?php
                        $n = 10 - strlen($reg->requisicion);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->requisicion; 
                    ?>

                    <?php
                        $n = 6 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 
                    ?>

			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $numero_orden_pago; ?> </td>
			        <td> <?= $reg->fecha; ?> </td>
			        <td> <?= $reg->proveedor; ?> </td>
			        <td> <?= number_format($reg->total + ($reg->total * 0.16), 2, ',', '.') ?> </td>
			         <td>
		         		<?php 
		         			if($reg->status == 0){ 
		         				echo $this->html->Link('Ver', ['action' => 'view', $reg->id, $reg->requisicion], ['class' => 'btn btn-warning btn-xs']);
		         				echo $this->form->postlink("Eliminar", ['action' => 'delete', $reg->id], ['class'=>'btn btn-danger btn-xs', 'scape' => -1, 'label' => false, 'confirm' => __('Desea eliminar la orden # {0}?', $reg->requisicion)]); 
		         			} 
		         		?>

		         		<?php 
		         			if($reg->total != null){
		         				echo $this->html->link("Reporte", ['action' => 'reporte', $reg->id, $reg->requisicion, 'PDF'], ['class'=>'btn btn-default btn-xs', 'scape' => -1, 'label' => false, 'target' => '_blank']); 
		         			}
		         		?>    		
		        	</td>
		        	<td>
		        		<?php 
		         			if($reg->status == 2){ 
		         				echo $this->html->Link('Comprometida', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		         			}else if($reg->status == 0 and $reg->total != ''){ 
		        				echo $this->html->Link('Enviar', ['action' => 'enviar', $reg->requisicion], ['class' => 'btn btn-success btn-xs', 'confirm' => __('Seguro desea enviar la orden # {0}?', $reg->requisicion)]);
		        			}else if($reg->status == 1){ 
		        				echo $this->html->Link('Enviado', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 4){
		        				echo $this->html->Link('En Ejecucion', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 5){
		        				echo $this->html->Link('Aprobada', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 6){
		        				echo $this->html->Link('Liquidada', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}
		        		?>
		        	</td>
			    </tr>

			    	<?php @$total += $reg->sub_total; ?>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>
		    	<br>
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

	    <hr>

		<tr>
			<td>					    	
				<?= $this->html->Link('Crear', ['action' => 'add'],['class'=>'btn btn-default']); ?>
			</td>
		</tr>
	</div>