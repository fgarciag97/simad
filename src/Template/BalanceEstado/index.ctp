<?php $this->assign('title', 'Ejecucion Presupuestaria'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Ejecucion Presupuestaria</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->create('BalanceEstado', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'BalanceEstado', 'action' => 'index'))) ?>

		<table class="table table-responsive" style="width: 60%; position: center; margin-left: 10%;">
			<tr>	
				<td style="width: 10%;">
					<div class="input-group">
						<span class="input-group-addon">Consultar Por:</span>
						<select required name="libro" value="<?= @$libro ?>">
							<option value="" disabled> --Seleccione-- </option>
							<option value="1"> Partidas</option>
							<option value="2"> Sectores</option> 
							<option value="3"> Programas</option> 
							<option value="4"> Sub-Programas</option> 
							<option value="5"> Actividad/Proyecto</option> 
							<option value="6"> General</option> 
						</select>
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

	<!--
	<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('ramo', 'Partida') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('ramo_denominacion', 'Denominacion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Asignado </td>
				    <td> Ajustado </td>
				    <td> Comprometido </td>
				    <td> Disponible </td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)){

		    	if($libro == 1){
			    	$ramo = null;
			    	$ramo_denominacion = null;
			    	$monto_ramo = 0;
			    	$monto_comprometido = 0;
			    	$ajuste = 0;
			    	$disponible = 0;

			    	foreach($data as $reg){  
			    		if($ramo != $reg->ramo and $ramo_denominacion != $reg->ramo_denominacion){
				    		$ramo = $reg->ramo;
				    		$ramo_denominacion = $reg->ramo_denominacion;
				    		$monto_ramo = $reg->monto_ramo;
				    		$ajuste = $reg->ajuste;
				    		$monto_comprometido = $reg->monto_comprometido_nomina + $reg->monto_comprometido_compra;
				    		$disponible = ($reg->monto_ramo + $reg->ajuste) - ($reg->monto_comprometido_nomina + $reg->monto_comprometido_nomina);

				    		if($ramo != null and $ramo_denominacion != null){ ?>
			    				<tr style="text-align: center;">
							        <td> <?= $ramo; ?> </td>
							        <td> <?= $ramo_denominacion; ?> </td>
							        <td> <?= number_format($monto_ramo, 2, ',', '.'); ?> </td>
							        <td> <?= number_format($ajuste, 2, ',', '.'); ?> </td>
							        <td> <?= number_format($monto_comprometido, 2, ',', '.'); ?> </td>
							        <td> <?= number_format($disponible, 2, ',', '.') ?> </td>
							    </tr>
			    			<?php } 
			    		}else{
				    		$ajuste += $reg->ajuste;
			    			$monto_comprometido += $reg->monto_comprometido_nomina + $reg->monto_comprometido_compra;
				    		$disponible += ($reg->monto_ramo + $reg->ajuste) - ($reg->monto_comprometido_nomina + $reg->monto_comprometido_nomina);
			    		}
			    	}
			    }else if($libro == 2){

			    	foreach($data as $reg){  ?>
	    				<tr style="text-align: center;">
					        <td> <?= $reg->sector; ?> </td>
					        <td> <?= $reg->denominacion_sector; ?> </td>
					        <td> <?= number_format($reg->monto_actividad + $reg->monto_proyecto, 2, ',', '.'); ?> </td>
					        <td> <?= number_format($reg->ajuste, 2, ',', '.'); ?> </td>
					        <td> <?= number_format($reg->monto_comprometido_nomina + $reg->monto_comprometido_compra, 2, ',', '.'); ?> </td>
					        <td> <?= number_format(($reg->monto_actividad + $reg->monto_proyecto + $reg->ajuste) - ($reg->monto_comprometido_nomina + $reg->monto_comprometido_nomina), 2, ',', '.') ?> </td>
					    </tr>
	    			<?php } 
			    }

		    } ?>
		    <br>
		</table>

			
		<br>

		<table class="table-responsive table" style="width: 30%; position: center; margin-left: 75%; padding: 10px;">
			<tr style="text-align: center;">
				<td>
					<?php 
						if(@$libro == 1){
							echo $this->Html->link("<i class='fa fa-file-pdf-o'> </i> Reporte Partidas",array('action' => 'EjecucionPartidasRamos', @$libro, @$inicio, @$corte, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); 
						}else if(@$libro == 2){
							echo $this->Html->link("<i class='fa fa-file-pdf-o'> </i> Reporte Sectores",array('action' => 'EjecucionPartidasSectores', @$libro, @$inicio, @$corte, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); 
						}else if(@$libro == 3){
							
						}
					?>
					
				</td>
			</tr>
		</table>

	-->
	</div>