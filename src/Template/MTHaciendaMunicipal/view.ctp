<?php $this->assign('title', 'Orden de Compra'); ?>

<?= $this->Form->create('MCompraOrdenesEmitidas', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MCompraOrdenesEmitidas', 'action' => 'view'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Orden de Compra</strong></th>
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
					<span class="input-group-addon">Proveedor</span>
					<?= $this->Form->input('proveedor', ['readonly', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $orden['proveedor']]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
				<td><div id="" class="input-group">
				<span class="input-group-addon">La Ordena</span>
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
							<?= $this->Form->select('unidad_solicitante', @$us, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'partida', 'value' => @$unidad_s[0]['id_unidad_solicitantem'], 'readonly']); ?>
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
							<?= $this->Form->select('unidad_solicitante', @$us, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'partida', 'value' => @$unidad_s[0]['id_unidad_solicitante']]); ?>
						</div>
					</td>
				</tr>
			</table>
	<?php 
		} ?>

	<table class="table table-responsive">
		<tr>
			<td style="width: 30%;">
				<div id="" class="input-group">
					<span class="input-group-addon">Descripcion del Items</span>
					<?= $this->Form->input('descripcion_item', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'rows' => '2', 'onkeyup' => 'mayus(this);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Partida</span>
					<?= $this->Form->select('id_partida', @$partidas, ['empty' => '--Seleccione--', 'label' => false, 'class'=> 'form-control', 'required', 'id' => 'id_partida', 'onchange' => 'cargar_descripcion_partida(this);']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Descripción de la Partida</span>
					<input type="text" name="descripcion_partida" id="descripcion_partida" class="form-control" readonly required>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Cantidad</span>
					<?= $this->Form->input('cantidad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'onKeyPress' => 'return soloNum(event);', 'onchange' => 'orden(this.value);', 'id' => 'cantidad']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Unidad de Medida</span>
					<?= $this->Form->input('unidad_medida', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'onchange' => 'orden(this.value);', 'id' => 'unidad_medida', 'onkeyup' => 'mayus(this);']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Precio Unitario</span>
					<?= $this->Form->input('precio_unitario', ['type' => 'float', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'id' => 'precio_unitario', 'onkeypress' => 'return filterFloat(event,this);', 'onKeyPress' => 'return soloNum(event);', 'onchange' => 'orden(this.value);']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">I.V.A %</span>
					<?= $this->Form->input('iva', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required','readonly', 'value' => '16.00', 'onchange' => 'orden(this.value);', 'id' => 'iva']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Total</span>
					<?= $this->Form->input('sub_total', ['type' => 'float', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'value' => '0', 'autocomplete' => 'off', 'id' => 'total', 'onkeypress' => 'return filterFloat(event,this);', 'readonly', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<a data-toggle="modal" 
						orden = "<?= $orden['id'] ?>" 
                        descripcion ="<?= $orden['descripcion_ordena'] ?>"
                        id_orden   ="<?= $orden['id'] ?>"
		                requisicion   ="<?= $req ?>"
                      onclick="editar_orden_compra(this);" class="btn btn-warning pull-left">Editar Orden</a>
			</td>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>

	<?php if(isset($data) and !empty($data)){ ?>

		<div class="well" >
			<table class="table table-responsive" id="">
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
				        <td style="width: 10%;"> <?= substr($reg->descripcion_item,0,15);?> </td>
				        <td> <?= $reg->cantidad; ?> </td>
				        <td> <?= ($reg->unidad_medida) ?> </td>
				        <td> <?= number_format($reg->precio_unitario, 2, ',', '.') ?> </td>
				        <td> <?= number_format($reg->sub_total, 2, ',', '.') ?> </td>
				        <td>
				        	<a data-toggle="modal" id = "<?= $reg->id ?>" 
		                      data-id   ="<?= $reg->id ?>"
		                      data-id_orden   ="<?= $reg->id_orden ?>"
		                      data-requisicion   ="<?= $req ?>"
		                      data-unidad_solicitante   ="<?= $reg->id_unidad_solicitantem ?>"
		                      data-descripcion_item   ="<?= $reg->descripcion_item ?>"
		                      data-id_partida ="<?= $reg->partida ?>"
		                      data-descripcion_partida ="<?= $reg->descripcion_partida ?>"
		                      data-cantidad ="<?= $reg->cantidad ?>"
		                      data-unidad_medida ="<?= $reg->unidad_medida ?>"
		                      data-precio_unitario ="<?= $reg->precio_unitario ?>"
		                      onclick="editar_item_compra(this);" class="btn btn-warning btn-xs">Editar</a>
			         		<?= $this->Form->postLink('Eliminar', ['action' => 'delete_item', $reg->id, $req, $reg->id_orden], ['confirm' => __('Desea eliminar este Items -> {0}?', $reg->descripcion_item), 'class' => 'btn btn-danger btn-xs']) ?>
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
				        <td style="width: 30%;"> <?= $reg->descripcion_partida; ?> </td>
				        <td> <?= number_format($reg->sub_total, 2, ',', '.') ?> </td>
				    </tr>

				    	<?php @$total += $reg->sub_total; ?>
				    
			    <?php } ?>

			    <?php if(count($data) != 0){ ?>
			    	<tr style="text-align: center;">
				        <td> <?= @$reg->unidad_solicitante; ?> </td>
				        <td> <?= "4.03.18.01.00" ?> </td>
				        <td> <?= "Impuesto al Valor Agregado" ?> </td>
				        <td> <?= number_format(@$total * 0.16, 2, ',', '.') ?> </td>
				    </tr>

				    	<?php @$total += @$total * 0.16; ?>

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