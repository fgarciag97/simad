<?php $this->assign('title', 'Ingresos'); ?>

	<?= $this->Form->create('MpIngresos', ['class'=>'well']);?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Forma 2102  - Partidas Presupuestarias</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td><div id="" class="input-group">
						<?= $this->Form->hidden('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
							<span class="input-group-addon">Ramo</span>
							<select class="form-control" name="ramo" id='ramo' onchange='cargar_subramo(this);' required>
							    <option disabled selected>---</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Sub-Ramo</span>
									<select class="form-control" name="subramo" id='subramo' onchange='cargar_especifico(this);' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Especifico</span>
									<select class="form-control" name="especifico" id='especifico' onchange='cargar_subespecifico(this);' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Sub-Especifico</span>
									<select class="form-control" name="subespecifico" id='subespecifico' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Ordinal</span>
							<?= $this->Form->input('ordinal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '3', 'id' => 'ordinal', 'readonly',  'onKeyPress' => 'return soloNum(event);', 'value' => '00']); ?>
					</div>
				</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td><div id="" class="input-group">
						<span class="input-group-addon">Denominacion</span>
							<?= $this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'readonly', 'id' => 'denominacion', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td><div id="" class="input-group">
					<span class="input-group-addon">Monto</span>
						<?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'required', 'placeholder' => '0,00', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><div class="form-group">
				    <div class="input-group">
					    <span class="input-group-btn">
					    	<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default pull-right']); ?>
				    </div>
				</div>
			</td>
		</tr>
	</table>

		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table table-responsive">
			<thead class="text-center" style="text-align: center;">
		        <tr>
				    <th><?= $this->Paginator->sort('concatenado', 'Partida') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('ordinald_denominacion', 'Descripcion') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('monto_ordinald','Monto') ?> <i class='fa fa-arrow-down'></i></th>
				    <th>Acción</th>
				</tr>
			</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    		@$total += $reg->monto_ordinald;
		    ?>
			    <tr>
			        <td> <?= $reg->concatenado; ?> </td>
			        <td> <?= $reg->ordinald_denominacion; ?> </td>
			        <td> <?= MONEDA . number_format($reg->monto_ordinald, 2, ',', '.'); ?><br></td>
			        <td>
			         	<?= $this->Form->postLink('Eliminar', ['action' => 'delete', $reg->id], ['confirm' => __('Desea eliminar la partida # {0}?', $reg->concatenado), 'class' => 'btn btn-danger btn-xs']) ?>
			         	<a 
				         	data-toggle="modal" 
				         	id = "<?= $reg->id ?>" 
	                      	data-id   ="<?= $reg->id ?>"
	                      	data-denominacion   ="<?= $reg->ordinald_denominacion ?>"
	                      	data-monto ="<?= number_format($reg->monto_ordinald, 2, ',', '.') ?>"
	                      	onclick="editar_ingreso(this);" class="btn btn-warning btn-xs">Editar
                      	</a>
			        </td>
			    </tr>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>

		    	<br>

			    <tr>
			        <td> </td>
			        <td> </td>
			        <td style="border-radius: 15px; background-color: #a22818; color: white; text-align: center;"> Total: <?= MONEDA . number_format(@$total, 2, ',', '.'); ?> </td>
			        <td> </td>
			    </tr>
	  	</table>

	  	<table class="table table-responsive">
		  		<tr>
			    	<td><?= $this->Form->postLink('Procesar', ['action' => 'seguimiento'], ['confirm' => __('Desea Procesar los Ingresos?'), 'class' => 'btn btn-success pull-right']) ?>
			    	</td>
			    </tr>
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

	    <div></div>
	</div>
