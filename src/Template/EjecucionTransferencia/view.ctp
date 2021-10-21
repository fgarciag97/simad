<?php $this->assign('title', 'Requisicion - Transferencia'); ?>

<?= $this->Form->create('EjecucionTransferencia', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'EjecucionTransferencia', 'action' => 'view'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Requisicion - Transferencia</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->hidden('req', ['readonly', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $req]); ?>
	<?= $this->Form->hidden('id', ['readonly', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $id]); ?>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Beneficiario</span>
					<?= $this->Form->input('beneficiario', ['readonly', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $orden['cedula']]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
				<td><div id="" class="input-group">
				<span class="input-group-addon">Decripcion</span>
				<?= $this->Form->input('descripcion_ordena', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'readonly', 'value' => $orden['descripcion_ordena']]); ?>
			</td>
		</tr>
	</table>

	<?php 
		if(count($unidad_s) != 0){ ?>

			<table class="table table-responsive">
				<tr>
					<td>
						<div id="" class="input-group">
							<span class="input-group-addon">Unidad solicitante</span>
							<?= $this->Form->select('unidad_solicitante', @$us, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'us', 'value' => @$unidad_s[0]['id_unidad_solicitante'], 'readonly']); ?>
						</div>
					</td>
				</tr>
			</table>

	<?php 
		}else{ ?>
			<table class="table table-responsive">
				<tr>
					<td>
						<div id="" class="input-group">
							<span class="input-group-addon">Unidad solicitante</span>
							<?= $this->Form->select('unidad_solicitante', @$us, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'us', 'value' => @$unidad_s[0]['id_unidad_solicitante']]); ?>
						</div>
					</td>
				</tr>
			</table>
	<?php 
		} ?>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Descripcion del Items</span>
					<?= $this->Form->input('descripcion_item', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'rows' => '2','value' => 'TRANSFERENCIA', 'onkeyup' => 'mayus(this);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Partida</span>
					<?= $this->Form->select('id_partida', @$p, ['empty' => '--Seleccione--', 'label' => false, 'class'=> 'form-control', 'required', 'id' => 'id_partida', 'onchange' => 'cargar_descripcion_partida(this);']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Descripción de la Partida</span>
					<!--<input type="text" name="descripcion_partida" id="descripcion_partida" class="form-control" readonly required value = 'TERMINAL DE PASAJEROS POLICA'> -->
					<input type="text" name="descripcion_partida" id="descripcion_partida" class="form-control" readonly required>
				</div>
			</td>
			<!--<td><div id="" class="input-group">
				<?= $this->Html->Link("<i style='color:green' class='fa fa-plus'></i> Crear Ordinal", ['action' => 'CrearOrdinal', $id, $req], ['class' => 'btn btn-default ', 'tabindex' => '-1', 'escape' => false]) ?>
				</div>
			</td>-->
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Cantidad</span>
					<?= $this->Form->input('cantidad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'onKeyPress' => 'return soloNum(event);', 'onchange' => 'ordent(this.value);', 'id' => 'cantidad','value' => '1']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Unidad de Medida</span>
					<?= $this->Form->input('unidad_medida', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'onchange' => 'ordent(this.value);', 'id' => 'unidad_medida','value' => 'BS']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Precio Unitario</span>
					<?= $this->Form->input('precio_unitario', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'onchange' => 'ordent(this.value);', 'id' => 'precio_unitario']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Total</span>
					<?= $this->Form->input('sub_total', ['type' => 'float', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'value' => '0', 'autocomplete' => 'off', 'id' => 'total', 'readonly', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<a data-toggle="modal" 
						orden = "<?= $orden['id'] ?>" 
						beneficiario = "<?= $orden['beneficiario'] ?>" 
                        descripcion ="<?= $orden['descripcion_ordena'] ?>"
                        id_orden   ="<?= $orden['id'] ?>"
		                req   ="<?= $req ?>"
                      onclick="editar_orden_trans(this);" class="btn btn-warning pull-left">Editar Orden</a>
			</td>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>

	<?php if(isset($data) and !empty($data)){ ?>

		<div class="well" >
			<table class="table table-responsive">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('unidad_solicitante') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('descripcion_item') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('cantidad') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('unidad_medida') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('precio_unitario') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('sub_total') ?> <i class='fa fa-arrow-down'></i></td>
					    <td>Acción</td>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->unidad_solicitante; ?> </td>
				        <td> <?= $reg->descripcion_item; ?> </td>
				        <td> <?= $reg->cantidad; ?> </td>
				        <td> <?= ($reg->unidad_medida) ?> </td>
				        <td> <?= number_format($reg->precio_unitario, 2, ',', '.') ?> </td>
				        <td> <?= number_format($reg->sub_total, 2, ',', '.') ?> </td>
				        <td>
				        	<a data-toggle="modal" id = "<?= $reg->id ?>" 
		                      data-id   ="<?= $reg->id ?>"
		                      data-id_orden   ="<?= $reg->id_orden ?>"
		                      data-requisicion   ="<?= $req ?>"
		                      data-unidad_solicitante   ="<?= $reg->id_unidad_solicitante ?>"
		                      data-descripcion_item   ="<?= $reg->descripcion_item ?>"
		                      data-id_partida ="<?= $reg->partida ?>"
		                      data-descripcion_partida ="<?= $reg->descripcion_partida ?>"
		                      data-cantidad ="<?= $reg->cantidad ?>"
		                      data-unidad_medida ="<?= $reg->unidad_medida ?>"
		                      data-precio_unitario ="<?= $reg->precio_unitario ?>"
		                      onclick="editar_partida_trans(this);" class="btn btn-warning btn-xs">Editar</a>
			         		<?= $this->Form->postLink('Eliminar', ['action' => 'delete_item', $reg->id, $id, $req], ['confirm' => __('Desea eliminar este Items -> {0}?', $reg->descripcion_item), 'class' => 'btn btn-danger btn-xs']) ?>
			        	</td>
				    </tr>

				    	<?php @$total += $reg->sub_total; ?>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
			    	<br>

			    	<tr>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td style="border-radius: 15px; background-color: #a22818; color: white; text-align: center;"> Total: <?= MONEDA . number_format(@$total, 2, ',', '.'); ?> </td>
			        <td> </td>
			    </tr>
			</table>
			






			<table class="table table-responsive">
			    <tr>
			    	<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('unidad_solicitante', 'Categoria') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('id_partida', 'Partida') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('descripcion_partida', 'Descripcion Partida') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('Monto') ?> <i class='fa fa-arrow-down'></i></td>
					</tr>
				</thead>

				<?php $total = 0 ?>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->unidad_solicitante; ?> </td>
				        <td> <?= $reg->id_partida; ?> </td>
				        <td> <?= $reg->descripcion_partida; ?> </td>
				        <td> <?= number_format($reg->sub_total, 2, ',', '.') ?> </td>
				    </tr>

				    	<?php @$total += $reg->sub_total; ?>
				    
			    <?php } ?>

			    <?php if(count($data) != 0){ ?>
			    	

				    	<?php @$total += @$total * 0.0; ?>

				<?php } ?>
			    <?php else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
			    	<br>

			    	<tr>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td style="border-radius: 15px; background-color: #a22818; color: white; text-align: center;"> Total: <?= MONEDA . number_format(@$total, 2, ',', '.'); ?> </td>
			    </tr>
			    	
			    </tr>
		  	</table>

		  	<table class="table table-responsive">
				<tr>
					<td>
						<?= $this->html->link('Atrás', ['action' => 'index'], ['class'=>'btn btn-default pull-right']); ?>
					</td>
				</tr>
			</table>
		</div>

	<?php } ?>