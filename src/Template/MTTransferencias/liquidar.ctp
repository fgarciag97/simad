<?php $this->assign('title', 'Liquidación'); ?>

<?php
    $n = 10 - strlen($requisicion);
    $req = '';
    for($i=0; $i < $n; $i++){
        $req .= "0";
    }
    $req .= $requisicion; 
?>

<!---------------------------------------------------------------------------------------------------------------------->
	<?= $this->Form->create(@$transferencia, ['class'=>'well']);?>
		<table class="table table-responsive">
			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>Orden de Pago N°<?= $req ?></strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<!---------------------------------------------------------------------------------------------------------------------->

<?php if($status['status'] != 7){ ?>

		<?= $this->Form->hidden('requisicion', ['type'=> 'text', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'value' => @$requisicion, 'readonly', 'id' => 'requisicion']); ?>
		<?= $this->Form->hidden('numero_orden_pago', ['type'=> 'text', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'value' => @$numero_orden_pago, 'readonly', 'id' => 'numero_orden_pago']); ?>
		<?= $this->Form->hidden('numero_orden_pago_ord', ['type'=> 'text', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'value' => @$numero_orden_pago_ord, 'readonly', 'id' => 'numero_orden_pago_ord']); ?>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
		        	<td><label> Operacion </label></td>
		        	<td><label> Cuenta a Debitar </label></td>
		        	<td><label> Disponibilidad </label></td>
				</tr> 
			</thead>

			<tr style="text-align: center;">
				<td style="width: 15%">
					<?= $this->Form->select('id_operacion', $operacion, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'style' => 'width: 100%', 'id' => 'id_operacion']); ?>
				</td>
				<td>
					<?= $this->Form->select('numero_cuenta', @$c, ['empty' => '--Seleccione Operacion--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'id' => 'numero_cuenta_credito', 'readonly']); ?>
				</td>
				<td>
					<?= $this->Form->input('disponibilidad_moneda',['class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'id' => 'disponibilidad_moneda', 'readonly']); ?>
					<?= $this->Form->hidden('disponibilidad',['class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'id' => 'disponibilidad', 'readonly']); ?>
				</td>
			</tr>
		</table>

		<hr>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td> <label>Fecha de Transacción</label></td>
				    <td> <label>N° Referencia</label></td>
				    <td> <label>N° Cheque</label></td>
				    <td> <label>N° Control Cheque</label></td>
				</tr> 
			</thead>

			<tr style="text-align: center;">
				<td>
					<input type="date" name="fecha" onKeyPress='return soloNum(event);' id='fecha'>
				</td>
				<td>
					<?= $this->Form->input('n_referencia', ['type'=> 'text', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'id' => 'n_referencia', 'readonly']); ?>
				</td>
				<td>
					<?= $this->Form->input('n_cheque', ['type'=> 'text', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'id' => 'n_cheque', 'readonly']); ?>
				</td>
				<td>
					<?= $this->Form->input('n_control', ['type'=> 'text', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'onKeyPress' => 'return soloNum(event);', 'id' => 'n_control', 'readonly']); ?>
				</td>
			</tr>

		</table>

		<hr>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
		        	<td> Cuenta Destino </td>
		        	<td><label> Nombre </label></td>
				    <td> <label>C.I. / RIF</label></td>
				</tr>
			</thead>

			<tr style="text-align: center;">
				<td>
					<?= $this->Form->select('numero_cuenta', @$c, ['empty' => '--Seleccione Operacion--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'id' => 'numero_cuenta_destino', 'readonly']); ?>
				</td>
				<td>
					<?= $this->Form->input('nombre', ['type'=> 'text', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'id' => 'nombre', 'readonly', 'required']); ?>
				</td>
				<td>
					<?= $this->Form->input('cedula', ['type'=> 'text', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'id' => 'cedula', 'readonly', 'required']); ?>
				</td>
			</tr>

		</table>

		<!---------------------------------------------------------------------------------------------------------------------->

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>			    
		        	<td> <label>Descripcion </label></td>
				    <td> <label>Monto</label></td>
				    <td> <label>Monto Orden</label></td>
				</tr>
			</thead>

			<tr style="text-align: center;">
				<td style="width: 70%">
					<?= $this->Form->textarea('descripcion', ['type'=> 'text', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'style' => 'width: 100%', 'onkeyup' => 'mayus(this);', 'rows' => 2, 'value' => $concepto]); ?>
				</td>
				<td>
					<?= $this->Form->input('monto', ['type'=> 'text', 'class'=> 'form-control moneda', 'required', 'label' => false, 'escape' => false]); ?>
				</td>
				<td>
					<?= $this->Form->input('monto_orden', ['type'=> 'text', 'class'=> 'form-control moneda', 'required', 'label' => false, 'escape' => false, 'readonly', 'value' => @$monto_orden]); ?>
				</td>
			</tr>

		</table>

		<hr>

		<!---------------------------------------------------------------------------------------------------------------------->
	    
	    <table class="table table-responsive">
	    	<tr>
	    		<td>
	    			<?= $this->Form->submit('Registrar Pago', ['class'=> 'btn btn-default pull-right']); ?>
				</td>
			</tr>
		</table>
<?php } ?>

	<?php echo $this->Form->end(); ?>

<!------------------------------------------------------------------------------------------------------------>

<?php if(isset($data)){ ?>
	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
		<thead style="text-align: center;">
	        <tr>
	        	<td> N° Ref/Cheq </td>
	        	<td><label> Fecha - Facturacion </label></td>
	        	<td><label> Fecha - Pago </label></td>
			    <td> <label> Monto</label></td>
			    <td> <label> Accion</label></td>
			</tr>
		</thead>

		<?php 
			$total = 0;
		 ?>


		<?php foreach ($data as $key) { ?>
			<tr style="text-align: center;">
					<td>
						<?= $key['n_referencia'] ?>
					</td>
					<td> 
						<?= date_format($key['fecha'], 'd/m/Y') ?>
					</td>
				    <td>
						<?= date_format($key['fecha_pago'], 'd/m/Y') ?>
				    </td>
				    <td> <?= number_format($key['monto'], 2, ',', '.') ?></td>
				    <td>
				    	<?php if($status['status'] == 6){ 
				    		echo $this->Form->postLink('Eliminar', ['action' => 'delete', $key['id'], $requisicion, $numero_orden_pago, $numero_orden_pago_ord], ['confirm' => __('Desea eliminar este registro?'), 'class' => 'btn btn-danger btn-xs']);
				    	} ?> 
				    </td>
			</tr>

			<?php $total += $key['monto']; ?>
			
		<?php } ?> 

		<tr>
				<td></td>
				<td></td>
				<td></td>
				<td style="border-radius: 15px; background-color: #a22818; color: white; text-align: center;"> Total: <?= MONEDA . number_format(@$total, 2, ',', '.'); ?> </td>
				<td></td>
			</tr>
		

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		    <td>
		    	<table class="table table-responsive">
		    		<br>
		    		
			    		<td style="width: 10%;"> 

			    			<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=>'btn btn-danger btn-sm pull-left']); ?>
			    			<?php if($status['status'] == 6){ ?>
								<?= $this->Html->link('Procesar', ['action' => 'procesar', $requisicion, $numero_orden_pago, $numero_orden_pago_ord], ['class'=>'btn btn-success btn-sm pull-right', 'confirm' => ['Seguro desea liquidar esta orden?']]); ?>
							<?php } ?> 
						</td>
				</table>
			</td>
		</tr>
	</table>
<?php } ?> 