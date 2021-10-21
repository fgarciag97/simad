<?php $this->assign('title', 'Cuentas Bancarias'); ?>
<?= $this->Form->create('MTCuentas', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MTCuentas', 'action' => 'buscar1'))) ?>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Cuentas de la Institución</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>
	<table class="table table-responsive">
		<tr>	
				<td></td>
				<td></td>
				<td style="width: 50%;">
					<div id="" class="input-group">

						<span class="input-group-addon">N° de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
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
<?php echo $this->Form->end();?>
	<?php if(isset($data) and !empty($data)){ ?>
		<div class="well" >
			<table class="table table-responsive">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('nombre_banco') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('numero_cuenta') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('representante') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('saldo') ?> <i class='fa fa-arrow-down'></i></td>
					    <td>Acción</td>
					</tr>
				</thead>
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->nombre_banco; ?> </td>
				        <td> <?= $reg->numero_cuenta; ?> </td>
				        <td> <?= $reg->representante; ?> </td>
				        <td> <?= number_format($reg->saldo, 2, ',', '.'); ?> </td>
				        <td>
				         	<?= $this->Html->link(__('Ver'), ['action' => 'view1', $reg->numero_cuenta], ['class' => 'btn btn-danger btn-sm']) ?>
				        </td>
				    </tr>
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
			    	<tr>
				    	<td colspan="7"> <strong>Total de Cuentas Bancarias:</strong> <?= $n_data ?></td>
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

		</div>
	<?php } ?>