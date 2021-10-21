<?php $this->assign('title', 'Proveedores'); ?>

<?= $this->Form->create('MCompraProveedores', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MCompraProveedores', 'action' => 'buscar'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Buscar Proveedor</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td style="width: 35%;">
					<div id="" class="input-group">
						<span class="input-group-addon">Tipo</span>

						<?= $this->Form->select('letra', ['V' => 'V', 'G' => 'G','J' => 'J'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?>

						<span class="input-group-addon">RIF</span>
						<?= $this->Form->input('rif', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '9', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
				<td style="width: 10%">					    	
					<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-right']); ?>
				</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>



<?php echo $this->Form->end();?>


	<?php if(isset($data) and !empty($data)){ ?>

		<div class="well" >
			<table class="table table-responsive">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('rif') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('razon_social') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('responsable') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('actividad') ?> <i class='fa fa-arrow-down'></i></td>
					    <td>Acción</td>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->letra . "-" . $reg->rif; ?> </td>
				        <td> <?= $reg->razon_social; ?> </td>
				        <td> <?= $reg->responsable; ?> </td>
				        <td> <?= ($reg->estado) ? "Activo" : "Suspendido" ?> </td>
				        <td>
				         	<?= $this->Html->link(__('Ver'), ['action' => 'view', $reg->letra, $reg->rif], ['class' => 'btn btn-danger btn-sm']) ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>

			    	<tr>
				    	<td colspan="7"> <strong>Total de Proveedores:</strong> <?= $n_data ?></td>
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