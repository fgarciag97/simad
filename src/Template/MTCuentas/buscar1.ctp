<?php $this->assign('title', 'Beneficiarioes'); ?>

<?= $this->Form->create('EjecucionBeneficiarios', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'EjecucionBeneficiarios', 'action' => 'buscar1'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Buscar Registro</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td></td>
				<td></td>
				<td style="width: 35%;">
					<div id="" class="input-group">
						<span class="input-group-addon">CEDULA</span>
						<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
				<td style="width: 10%">					    	
					<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-right']); ?>
				</td>
				<td></td>
				<td></td>
		</tr>
	</table>
<?php echo $this->Form->end();?>

<!--

	<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DE LA EMPRESA</strong></th>
					<th></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">RIF</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'value' => 'J-', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Razon Social</span>
					<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Representante Legal</span>
					<?= $this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div></td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion de Domicilio</span>
					<?= $this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Actividad Economica</span>
					<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<tbody><div class="form-group">
					<div class="input-group">
						<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default']); ?>
					</div>
				</div></tbody>
			</tr>
		</table>
-->


<!--<?php echo $this->Form->end();?>

	-------------------------------------------------------------------------------------------
	<?php if(isset($data) and !empty($data)){ ?>

		<div class="well" >
			<table class="table table-responsive">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('cedula') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('nombres') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('responsable') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('actividad') ?> <i class='fa fa-arrow-down'></i></td>
					    <td>Acción</td>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td> <?= $reg->responsable; ?> </td>
				        <td> <?= ($reg->actividad) ? "Activo" : "Suspendido" ?> </td>
				        <td>
				         	<?= $this->Html->link(__('Ver'), ['action' => 'view1', $reg->cedula], ['class' => 'btn btn-danger btn-sm']) ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>

			    	<tr>
				    	<td colspan="7"> <strong>Total de Beneficiarioes:</strong> <?= $n_data ?></td>
				    </tr>

			    	<br>

				    <tr>
				        <td> </td>
				        <td> </td>
				        <td> </td>
				        <td> </td>
				    </tr>
		  	</table>

		  	<div class="paginator">
		        <ul class="pagination">
		            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
		            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
		            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
		        </ul>
		    </div>
		</div>-->
	<?php } ?>