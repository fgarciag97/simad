<?php $this->assign('title', 'Orden de Compra'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Impuestos Registrados</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('N° de Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_facturacion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_Pago') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('razon_social') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td>Comprobante</td>
				    <td><?= $this->Paginator->sort('estatus') ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ ?>
			    <tr style="text-align: center;">

			    	<?php
                        $n = 10 - strlen(@$reg->requisicion);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->requisicion; ?>

			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $reg->fecha_facturacion; ?> </td>
			        <td> <?= $reg->fecha_pago; ?> </td>
			        <td> <?= $reg->tipo; ?> </td>
			        <td> <?= $reg->razon_social; ?> </td>
			        <td> <?= number_format($reg->monto); ?> </td>
			        <td><?=$this->Html->link("<i class='fa fa-file-pdf-o'></i>",array('action' => 'comprobante', $reg->requisicion), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-xs btn-default', 'target' => '_blank')); ?></td>
		        	<td>
		        		<?php 
		         			if($reg->status == 7){ 
		         				echo $this->html->Link('Liquidado', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		         			}else{
		        				echo $this->html->Link('En Ejecucion', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
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

			<!-- END DE LOS EJEMPLOS -->
	    
		  

		<!--<table class="table-responsive table" style="width: 20%; position: center; margin-left: 70%; padding: 10px;">

			<tr>
				<td></td>
				<td class="text-center"> Reportes Generales</td>
				<td></td>
			</tr>

			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> I.P.C</i>",array('action' => 'ipc'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-xs btn-default', 'target' => '_blank')); ?></td>
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> I.V.A</i>",array('action' => 'iva'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-xs btn-default', 'target' => '_blank')); ?></td>
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'>Respon. Social</i>",array('action' => 'responsabilidad'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-xs btn-default', 'target' => '_blank')); ?></td>
			</tr>
			
		</table>-->

		<div class="well">
		<table class="table table-responsive" style="width: 25%; position: center; margin-left: 40%; padding: 10px;">
			<tr>
				<td>
					<button class = "btn btn-success btn-sm"><i class='fa fa-check'></i></button>
					<label>Por Liquidar</label>
				</td>
				<td>
					<button class = "btn btn-default btn-sm"><i class='fa fa-credit-card'></i></button>
					<label>Liquidada</label>
				</td>
			</tr>
		</table>

	</div>

	</div>