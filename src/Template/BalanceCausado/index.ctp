<?php $this->assign('title', 'Ejecucion Presupuestaria'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Ejecucion Presupuestaria Según Causado</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->create('BalanceCausado', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'BalanceCausado', 'action' => 'index'))) ?>

		<table class="table table-responsive" style="width: 100%; position: center;">
			<tr>	
				<td style="width: 40%;">
					<div class="input-group">
						<span class="input-group-addon">Unidad Solicitante</span>
						<?= $this->Form->select('us', @$uss, ['empty' => '--Todos--', 'class'=> 'form-control', 'value' => @$us]); ?>
					</div>
				</td>
				<td style="width: 10%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Inicio</span>
						<input type="date" name="inicio" required value="<?= @$inicio ?>">
					</div>
				</td>

				<td style="width: 10%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Corte</span>
						<input type="date" name="corte" required value="<?= @$corte ?>">
					</div>
				</td>

				<td style="width: 10%">					    	
						<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-left btn-md', 'target'=>'_blank']); ?>
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end(); ?>

	<?php if(@$show){ ?>
	<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td> Unidad Solicitante </td>
				    <td> Partida </td>
				    <td> Denominacion </td>
				    <td> Causado</td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)){

		    	foreach($data as $reg){  

		    		$concatenado = $reg['sector'] . "." . $reg['programa'] . "." . $reg['sub_programa'] . "." . $reg['actividad'] . $reg['proyecto'];

		    		if($us == 0 or $concatenado == $us){

			    		$monto_causado = 0;
			            foreach ($comprometido as $key) {
			                if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
			                    $monto_causado += $key['monto'];
			                }
			            }

			            if($monto_causado != 0){
			           ?>

	    				<tr style="text-align: center;">
					        <td> <?= $concatenado ?> </td>
					        <td> <?= $reg['ramo'] . "." . $reg['sub_ramo'] . "." . $reg['especifico'] . "." . $reg['sub_especifico'] . "." . $reg['ordinal']  ?> </td>
					        <td> <?= $reg['ordinald_denominacion'] ?> </td>
					        <td> <?= number_format($monto_causado, 2, ',', '.'); ?> </td>
					    </tr>
		    	<?php }}}
		    } ?>
		    <br>
		</table>

		<table class="table-responsive table" style="width: 30%; position: center; margin-left: 75%; padding: 10px;">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte ",array('action' => 'reporte', $us, $inicio, $corte, 'PDF'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>
				
			</tr>
		</table>

	<?php } ?>
	</div>