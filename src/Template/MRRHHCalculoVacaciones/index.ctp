<?php $this->assign('title', 'Personal'); ?>

<!-- Selector de fecha -->

<?= $this->Form->create('MRRHHCalculoVacaciones', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHCalculoVacaciones', 'action' => 'index'))) ?>

	<legend bgcolor="lightblue" style="text-align: center;"> Calculo Vacaciones </legend>
	
	<div id="" class="input-group">
		<span class="input-group-addon">Año</span>
		<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'autocomplete' => 'off']); ?>

		<span class="input-group-addon">Mes</span>
		<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'id' => 'selector']); ?>
	</div>

	<br>

	<div class="form-group">
	    <div class="input-group">
		    <span class="input-group-btn">
		    	<?= $this->Form->button('Limpiar', ['type' => 'reset', 'class'=> 'btn btn-danger']); ?>
		    </span>
		    	<?= $this->Form->button('Buscar', ['class'=>'btn btn-success pull-right']); ?>
	    </div>
	</div>

<?php echo $this->Form->end();?>


<?php if(isset($data1)){ ?>
	<div class="well">
	         <!-- Table -->
		<table class="table">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td><?= $this->Paginator->sort('cedula') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('apellidos') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('nombres') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('pago_vacaciones') ?> <i class='fa fa-arrow-down'></i></td>
			    <td>Acción</td>
			</tr>
	    
		    <?php if (isset($data1) && !empty($data1) && isset($data2) && !empty($data2)): 
		    	foreach($data1 as $vacaciones){ ?>
			    <tr style="text-align: center;">
			        <td> <?= $vacaciones->cedula; ?> </td>
			        
			        <?php foreach($data2 as $personal){ 
			        	if($personal->cedula == $vacaciones->cedula){ ?>
				        <td> <?= $personal->apellidos; ?> </td>
				        <td> <?= $personal->nombres; ?> </td>
				    <?php }} ?>

				    <td> <?= MONEDA . number_format(@$vacaciones->pago_vacaciones, 2, ',', '.'); ?> </td>
			        <td>
			         	<?= $this->Html->link(__('Ver'), ['action' => 'view', $vacaciones->cedula], ['class' => 'btn btn-info btn-sm']) ?>
			         	<?= $this->Html->link(__('Editar'), ['action' => 'editar', $vacaciones->cedula], ['class' => 'btn btn-warning btn-sm']) ?>
			         	<?= $this->Html->link(__('Eliminar'), ['controller' => 'MRRHHCalculoVacaciones', 'action' => 'delete', $vacaciones->cedula], ['class' => 'btn btn-danger btn-sm']) ?>
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
			        <td> </td>
			        <td> </td>
			    </tr>
	  	</table>

	</div>

	<center class = "well">
		<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> ASIGNACIÓN", array('action' => 'asignacionpdf', $a, $m), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-danger btn-sm')) ?>
		<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> ACUMULADO", array('action' => 'acumuladopdf', $a, $m), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-danger btn-sm')) ?>
		<?= $this->Html->link("<i class='fa fa-file-o'></i> ASIGNACIÓN", array('action' => 'asignaciontxt', $a, $m), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-info btn-sm')) ?>
		<?= $this->Html->link("<i class='fa fa-file-o'></i> ACUMULADO", array('action' => 'acumuladotxt', $a, $m), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-info btn-sm')) ?>
	</center>
<?php } ?>