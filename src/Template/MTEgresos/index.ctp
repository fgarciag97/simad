<?php $this->assign('title', 'Orden de Compra'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Consulta de Egresos</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->create(@$egreso, ['class'=>'well']);?>
		<table class="table table-responsive" style="width: 60%; position: center; margin-left: 20%;">

			<tr>	
				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Libro</span>
						<select required name="libro">
							<option value="1"> Libro de Tesoreria</option>
							<option value="2"> Libro de Hacienda</option> 
						</select>
					</div>
				</td>

				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Inicio</span>
						<input type="date" name="inicio" required>
					</div>
				</td>

				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Corte</span>
						<input type="date" name="corte" required>
					</div>
				</td>

				<td style="width: 10%">					    	
						<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-right btn-sm']); ?>
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end(); ?>

	<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('N° de Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_facturacion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_Pago') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('razon_social') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
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
			        <td> <?= $reg->razon_social; ?> </td>
			        <td> <?= number_format($reg->monto); ?> </td>
		        	<td>
		        		<?php 
		         			if($reg->status == 7){ 
		         				echo $this->html->Link('<i class="fa fa-check"></i>', ['action' => ''], ['class' => 'btn btn-success btn-sm', 'tabindex' => '-1', 'escape' => false, 'disabled']);
		         			}else if($reg->status == 6){
		        				echo $this->html->Link('Pendiente', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status > 7){
		        				echo $this->html->Link('Cheque', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}
		        		?>
		        	</td>
			    </tr>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>
		    	<br>
		</table>

			
		<br>

		<table class="table-responsive table" style="width: 30%; position: center; margin-left: 75%; padding: 10px;">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> Reporte Consultado </i>",array('action' => 'reporteconsultado', @$libro, @$inicio, @$corte, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>
			</tr>
		</table>
		
		<div class="well">
			<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
				<tr>
						<td></td>
						<td class="text-center"><strong>Leyenda</strong></td>
						<td></td>
				</tr>
				<tr>

					<td>
						<button class = "btn btn-primary btn-sm"><i class='fa fa-exclamation-circle'></i></button>
						<label>Pendiente</label>
					</td>

					<td>
						<button class = "btn btn-success btn-sm"><i class='fa fa-check'></i></button>
						<label>Pagado</label>
					</td>

					<td>
						<button class = "btn btn-danger btn-sm"><i class='fa fa-credit-card'></i></button>
						<label>Cheque</label>
					</td>
				</tr>
			</table>
		</div>
	</div>