<?php $this->assign('title', 'Reporte Ordenamiento'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Consulta de Ordenes</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->create(@$x, ['class'=>'well']);?>
		<table class="table table-responsive"  style=" width: 30%;">
			<tr>	
				<td>
					<div class="input-group">
						<span class="input-group-addon">Ordenes</span>
						<select name="tipo_orden">
							<option value="0"> -- Todos --</option>
							<option value="1"> RRHH </option>
							<option value="2"> Compra </option> 
							<option value="3"> Transferencias </option> 
						</select>
					</div>
				</td>

				<td>
					<div class="input-group">
						<span class="input-group-addon">Estatus</span>
						<select name="estatus">
							<option value="0"> -- Todos --</option>
							<option value="4"> En Ejecucion </option> 
							<option value="5"> Aprobadas </option> 
							<option value="6"> En Tesoreria </option> 
							<option value="7"> Liquidadas </option> 
						</select>
					</div>
				</td>

				<td>
					<div class="input-group">
						<span class="input-group-addon">Fecha de Inicio</span>
						<input type="date" name="inicio" required>
					</div>
				</td>

				<td>
					<div class="input-group">
						<span class="input-group-addon">Fecha de Corte</span>
						<input type="date" name="corte" required>
					</div>
				</td>

				<td>					    	
						<?= $this->Form->button('Buscar', ['class'=>'btn btn-info pull-right']); ?>
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end(); ?>

	<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisicion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago_ord', 'Pago') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_ordenamiento', 'Fecha Facturacion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('beneficiario') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= 'Estatus' ?> </td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)){ 
		    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">

				    	<?php
				    		$n = 10 - strlen(@$reg->id);
	                        $requisicion = '';
	                        for($i=0; $i < $n; $i++){
	                            $requisicion .= "0";
	                        }
	                        $requisicion .= $reg->id; 

	                        $n = 6 - strlen(@$reg->numero_orden_pago);
	                        $numero_orden_pago = '';
	                        for($i=0; $i < $n; $i++){
	                            $numero_orden_pago .= "0";
	                        }
	                        $numero_orden_pago .= $reg->numero_orden_pago; 

	                        $n = 6 - strlen(@$reg->numero_orden_pago_ord);
	                        $numero_orden_pago_ord = '';
	                        for($i=0; $i < $n; $i++){
	                            $numero_orden_pago_ord .= "0";
	                        }
	                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
	                    ?>

				        <td> <?= $requisicion; ?> </td>
				        <td> <?= $numero_orden_pago; ?> </td>
				        <td> <?= $numero_orden_pago_ord; ?> </td>
				        <td> <?= $reg->tipo; ?> </td>
				        <td> <?= $reg->fecha_ordenamiento; ?> </td>
				        <td> <?= ($reg->beneficiario != '') ? $reg->beneficiario : "ALCALDIA DE MIRANDA"; ?> </td>
				        <td> <?= number_format($reg->monto); ?> </td>
			        	<td>
			        		<?php 
			         			if($reg->status == 4){ 
			         				echo $this->html->Link('<i class="fa fa-check"></i>', ['action' => ''], ['class' => 'btn btn-success btn-sm', 'tabindex' => '-1', 'escape' => false, 'disabled']);
			         			}else if($reg->status == 5){ 
			         				echo $this->html->Link("<i class='fa fa-check'></i>", ['action' => ''], ['class' => 'btn btn-success btn-sm', 'tabindex' => '-1', 'escape' => false, 'disabled']);
			         			}else if($reg->status == 6){
			        				echo $this->html->Link("<i class='fa fa-send'></i>", ['action' => ''], ['class' => 'btn btn-info btn-xs', 'tabindex' => '-1', 'escape' => false, 'disabled']);
			        			}else if($reg->status == 7){
			        				echo $this->html->Link("<i class='fa fa-credit-card'></i>", ['action' => ''], ['class' => 'btn btn-default btn-xs', 'tabindex' => '-1', 'escape' => false, 'disabled']);
			        			}
			        		?>
			        	</td>
				    </tr>
		    <?php } } ?>
		</table>

		<div class="paginator">
	        <ul class="pagination">
	            <?= @$this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= @$this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= @$this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= @$this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= @$this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>

	    </div>
			
		<br>

		<?php if (isset($data) && !empty($data)){  ?>
		<tr style="text-align: center;">
			<td ><?=$this->Html->link("<i class='fa fa-file-pdf-o'> </i>  Reporte Consultado",array('action' => 'reporteconsultado', @$inicio, @$corte, @$tipo_orden, @$estatus, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default pull-right', 'target' => '_blank')); ?></td>
		</tr>

	<?php }  ?>
		<br>
		
	</div>



	<div class="well">
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 35%; padding: 10px;">
			<tr>
					<td></td>
					<td></td>
					<td class="text-center"><strong>Leyenda</strong></td>
					<td></td>
					<td></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-success btn-xs"><i class='fa fa-list'></i></button>
					<label>En Ejecucion</label>
				</td>
				<td>
					<button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button>
					<label>Aprobada</label>
				</td>
				<td></td>
				<td>
					<button class = "btn btn-info btn-xs"><i class='fa fa-send'></i></button>
					<label>En Tesoreria</label>
				</td>
				<td>
					<button class = "btn btn-default btn-xs"><i class='fa fa-credit-card'></i></button>
					<label>Liquidada</label>
				</td>
			</tr>
		</table>

	</div>