<?php $this->assign('title', 'Requisicion de Compra'); ?>
 
<?php
    $n = 10 - strlen($requisicion);
    $req = '';
    for($i=0; $i < $n; $i++){
        $req .= "0";
    }
    $req .= $requisicion; 
?>

<?= $this->Form->create(@$ejecucion, ['class'=>'well']);?>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Requisicion Compra <?= $req ?></strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?php if ($status['status'] == 2){ ?>
		    <center>
		    	<p style="color: green"> <strong> REQUISICION COMPROMETIDA </strong> </p>
		    </center>
	<?php }else if ($status['status'] == 3){ ?>
			<center>
		    	<p style="color: red"> <strong> REQUISICION RECHAZADA </strong> </p>
		    </center>
	<?php } ?>

	<?php 
		if(@$concepto['descripcion_ordena_mod'] != ''){
			$concepto = @$concepto['descripcion_ordena_mod'];
		}else{
			$concepto = @$concepto['descripcion_ordena'];
		}
	?> 

	<table class="table table-responsive">
		<tr>
			<td>Concepto <?= $this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'value' => @$concepto, 'rows' => 3]); ?></td>
			<td><?= $this->Form->hidden('id_requisicion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'value' => @$req]); ?></td>
		</tr>
	</table>

	<table class="table table-responsive">
		<thead style="text-align: center;">
	        <tr>
			    <td> <label> Partidas </label></td>
			    <td> <label> Descripción </label></td>
			    <td> <label> Monto Disponible </label></td>
			    <td> <label> Monto Comprometer </label></td>
			    <td> <label> Monto Restante </label></td>
			    <?php if($status['status'] == 1): ?>
			    	<td> Acción </td>
			    <?php endif; ?>
			</tr>
		</thead>

		<?php if($status['status'] == 1): ?>
			<tr style="text-align: center;">
				<td><?= $this->Form->select('partida', @$partidas, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'id_partida_egreso']); ?></td>

				<td><?= $this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'descripcion_partida']); ?></td>

				<td><?= $this->Form->input('monto_disponible', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'monto_disponible_egreso']); ?></td>

				<td><?= $this->Form->input('monto_comprometer', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'monto_comprometer_egreso', 'onkeyup' => 'sumar_orden()', 'onKeyPress' => 'return soloNum(event);']); ?></td>

				<td><?= $this->Form->input('monto_restante', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'monto_restante_egreso', 'min' => '0']); ?></td>
				<td>
					<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default btn-xs']); ?>
				</td>
			</tr>
		<?php endif; ?>

		<?php
			foreach ($registros as $reg) { ?>
				<tr style="text-align: center;">
					<td><?= $reg['partida']; ?></td>
					<td><?= $reg['denominacion']; ?></td>
					<td></td>
					<td><?= number_format($reg['monto_comprometer'], 2, ',', '.'); ?></td>
					<td></td>
					<?php if($status['status'] == 1): ?>
						<td><?= $this->Html->Link('Eliminar', ['action' => 'delete', $reg['id'], $req], ['confirm' => __('Desea eliminar la partida?'), 'class' => 'btn btn-danger btn-xs']) ?></td>
					<?php endif; ?>
				</tr>
		<?php
			}
		?>

	</table>

	<hr>
    
    <table class="table table-responsive">
    	<tr>
    		<td class="pull-left">					    	
				<?= $this->html->Link('Atrás', ['action' => 'index'], ['class'=>'btn btn-default pull-right']); ?>
			</td>
			<td>
				<?php if($status['status'] == 1): ?>
					<?= $this->html->Link('Comprometer', ['action' => 'Comprometer', $req], ['class'=>'btn btn-success  btn-xs pull-right', 'confirm' => __('Seguro desea comprometer la requisicion # {0}?', $req)]); ?>
					<?= $this->html->Link('Rechazar', ['action' => 'rechazar', $req], ['class'=>'btn btn-danger  btn-xs pull-right', 'confirm' => __('Seguro desea rechazar la requisicion # {0}?', $req)]); ?>
				<?php endif; ?>

				<?php if($status['status'] == 2 or $status['status'] == 3): ?>
					<?= $this->html->Link('Revertir', ['action' => 'revertir', $req], ['class'=>'btn btn-info  btn-xs pull-right', 'confirm' => __('Seguro desea revertir la requisicion # {0}?', $req)]); ?>
				<?php endif; ?>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end(); ?>