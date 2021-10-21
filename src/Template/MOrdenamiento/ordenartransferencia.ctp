<?php $this->assign('title', 'Ordenamiento de Pago'); ?>

<?php
    $n = 10 - strlen($requisicion);
    $req = '';
    for($i=0; $i < $n; $i++){
        $req .= "0";
    }
    $req .= $requisicion; 
?>

<?= $this->Form->create(@$orden, ['class'=>'well']);?>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Requisicion Ordenamiento <?= $req ?></strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<!---------------------------------------------------------------------------------------------------------------------------->

	<?php if ($data['status'] == 5){ ?>
		    <center>
		    	<p style="color: green"> <strong> ORDEN APROBADA </strong> </p>
		    </center>
	<?php } ?>

	<!---------------------------------------------------------------------------------------------------------------------------->

	<?= $this->Form->hidden('id_requisicion', ['type' => 'text', 'label' => false, 'required', 'value' => $requisicion, 'id' => 'id_requisicion']); ?>

	<?php 
		if(@$data['concepto_mod'] != ''){
			$concepto = @$data['concepto_mod'];
		}else{
			$concepto = @$data['concepto'];
		}
	?> 

	<?php if(count($registros) == 0){ ?>

		<table class="table table-responsive">
			<tr>
				<td>Concepto <?= $this->Form->textarea('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'value' => @$concepto, 'rows' => 2, 'onkeyup' => 'mayus(this);']); ?></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>Nº de Factura <?= $this->Form->input('n_factura', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off']); ?></td>
				<td>Nº de Control <?= $this->Form->input('n_control', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off']); ?></td>
				<td>Fecha <?= $this->Form->input('fecha', ['label' => false, 'type' => 'date', 'class'=> 'form-control', 'dateFormat' => 'YMD', 'monthNames' => $meses, 'minYear'=>ANO_FISCAL, 'maxYear'=>ANO_FISCAL]); ?></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table table-responsive">
			<tr>
				<td>Concepto <?= $this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'value' => @$concepto, 'readonly', 'rows' => 3]); ?></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>Nº de Factura <?= $this->Form->input('n_factura', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'readonly', 'value' => $registros[0]['n_factura']]); ?></td>
				<td>Nº de Control <?= $this->Form->input('n_control', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'readonly', 'value' => $registros[0]['n_control']]); ?></td>
				<td>Fecha <?= $this->Form->input('fecha', ['label' => false, 'type' => 'date', 'class'=> 'form-control', 'required',  'value' => date_format($registros[0]['fecha'], "Y/m/d"), 'monthNames' => $meses, 'minYear'=>ANO_FISCAL, 'maxYear'=>ANO_FISCAL, 'readonly']); ?></td>
			</tr>
		</table>
	<?php } ?>

	<!---------------------------------------------------------------------------------------------------------------------------->
	

	<table class="table table-responsive">
		<thead style="text-align: center;">
	        <tr>
			    <td> <label> Calculo de: </label></td>
			    <td> <label> Porcenataje: </label></td>
			    <td> <label> Monto BsS </label></td>
			    <td> Acción </td>
			</tr>
		</thead>

		<?php foreach ($registros as $reg) { ?>

			<tr style="text-align: center;">
			    	<td>
			    		<?= $reg->tipo_calculo; ?>
			    	</td>
			    	<td>
			    		<?= ($reg->tipo_porcentaje * 100) . "%" ; ?>
			    	</td>
			    	<td>
			    		<?= number_format($reg->bs, 2, ',', '.') ?>
			    	</td>
			    	<td>
			    		<?php 
				    		if($data['status'] == 4){
				    			echo $this->Html->Link('Eliminar', ['action' => 'deletetransferencia', $reg->id, $requisicion], ['confirm' => __('Desea eliminar este Items?'), 'class' => 'btn btn-danger btn-xs']);
				    		}else{
				    			echo $this->Html->Link('Eliminar', ['action' => 'deletetransferencia', $reg->id, $requisicion], ['confirm' => __('Desea eliminar este Items?'), 'class' => 'btn btn-danger btn-xs', 'disabled']);
				    		}
			    		?>
			    	</td>
			</tr>
		<?php } ?>
		
		<?php  if($data['status'] == 4): ?>
			<tr style="text-align: center;">
			    	<td>
			    		<?= $this->Form->select('tipo_calculo', $calculo, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'id' => 'tipo_calculo']); ?>
			    	</td>
			    	<td>
			    		<?= $this->Form->select('tipo_porcentaje', [
			    			'0.01' => '1%',
			    			'0.02' => '2%',
			    			'0.03' => '3%',
			    			'0.04' => '4%',
			    			'0.05' => '5%',
			    			'0.06' => '6%',
			    			'0.07' => '7%',
			    			'0.08' => '8%',
			    			'0.09' => '9%',
			    			'0.10' => '10%',
			    			'0.15' => '15%',
			    			'0.20' => '20%',
			    			'0.25' => '25%',
			    			'0.30' => '30%',
			    			'0.35' => '35%',
			    			'0.40' => '40%',
			    			'0.45' => '45%',
			    			'0.50' => '50%',
			    			'0.55' => '55%',
			    			'0.60' => '60%',
			    			'0.65' => '65%',
			    			'0.70' => '70%',
			    			'0.75' => '75%',
			    			'0.80' => '80%',
			    			'0.85' => '85%',
			    			'0.90' => '90%',
			    			'0.95' => '95%',
			    			'1' => '100%'],['empty' => '--',
			    			'class'=> 'form-control', 'label' => false, 'escape' => false, 'readonly', 'id' => 'tipo_porcentaje']); ?>
			    	</td>
			    	<td>
			    		<?= $this->Form->input('bs', ['type' => 'text', 'label' => false, 'id' => 'bs', 'min' => '0', 'placeholder' => 'Bs', 'class' => 'moneda']); ?>
			    	</td>
			    	<td>
			    		<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default btn-xs']); ?>
			    	</td>
			</tr>
		<?php  endif; ?>
	</table>
	<!---------------------------------------------------------------------------------------------------------------------------->
	<hr>
    
    <table class="table table-responsive">
    	<tr>
    		<td class="pull-left">					    	
				<?= $this->html->Link('Atrás', ['action' => 'recibidastransferencia'], ['class'=>'btn btn-default pull-right']); ?>
			</td>
			<td>
				<?php if($data['status'] == 5): ?>
					<?= $this->html->Link('Revertir', ['action' => 'revertirtransferencia', $req], ['class'=>'btn btn-info pull-right', 'confirm' => __('Seguro desea revertir la requisicion # {0}?', $req)]); ?>
				<?php endif; ?>

				<?php if($data['status'] == 4): ?>
					<?= $this->html->Link('Aprobar', ['action' => 'aprobartransferencia', $req], ['class'=>'btn btn-success btn-success pull-right', 'confirm' => __('Seguro que desea procesar la requisicion # {0}?', $req)]); ?>
					<?= $this->html->Link('Rechazar', ['action' => 'rechazartransferencia', $req], ['class'=>'btn btn-danger pull-right', 'confirm' => __('Seguro desea rechazar la requisicion # {0}?', $req)]); ?>
				<?php endif; ?>

			</td>
		</tr>
	</table>
	<!---------------------------------------------------------------------------------------------------------------------------->
	<?= $this->Form->hidden('neto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'id' => 'neto', 'readonly', 'value' => @$data['monto']]); ?>
	<?= $this->Form->hidden('id_requisicion', ['type' => 'text', 'label' => false, 'required', 'value' => $requisicion, 'id' => 'id_requisicion']); ?>
	<!---------------------------------------------------------------------------------------------------------------------------->

<?php echo $this->Form->end(); ?>