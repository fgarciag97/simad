<?php $this->assign('title', 'Requisicion de Nomina'); ?>

<?php
    $n = 10 - strlen($requisicion);
    $req = '';
    for($i=0; $i < $n; $i++){
        $req .= "0";
    }
    $req .= $requisicion; 
?>

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

	<table class="table table-responsive">
		<thead style="text-align: center;">
	        <tr>
	        	<td> OPeracion</td>
			    <td style="width: 10%;"> <label>N° Ref.</label></td>
			    <td style="width: 10%;"> <label>N° Chequ.</label></td>
			    <td style="width: 10%;"> <label>N° Contol Cheq..</label></td>
			    <td style="width: 10%;"> <label>Descripcion </label></td>
			    <td style="width: 100%;"> <label>Cuenta</label></td>
			    <td> <label>Monto</label></td>
			</tr>
		</thead>

		<tr style="text-align: center;">
			<td style="width: 10%;"><?= $this->Form->select('tipo', ['ND' => 'ND', 'NC' => 'NC', 'Cheque' => 'Cheque', 'transferencia' => 'transferencia'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?></td>
			<td><input type="text" name=""></td>
			<td><input type="text" name="" placeholder="en caso de Cheq."></td>
			<td><input type="text" name="" placeholder="en caso de Cheq."></td>
			<td style="width: 10%;"><?= $this->Form->select('tipo', ['BASE IMPOSIBLE' => 'BASE IMPOSIBLE', 'I.V.A' => 'I.V.A', 'I.P.C' => 'I.P.C', 'RESP. SOC' => 'RESP. SOC'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?></td>
			<td style="width: 100%;"><?= $this->Form->select('tipo', ['BOD (0175)' => 'BOD (0175)', 'BANESCO (0134)' => 'BANESCO (0134)', 'BDV (0102)' => 'BDV (0102)', 'BICENTENARIO (0176)' => 'BICENTENARIO (0176)'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?></td>
			<td><input type="text" name=""></td>

		</tr>

	</table>

	<hr>
    
    <table class="table table-responsive">
    	<tr>
    		<td>					    	
				<?= $this->html->Link('Registrar Pago', ['action' => 'index'], ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end(); ?>