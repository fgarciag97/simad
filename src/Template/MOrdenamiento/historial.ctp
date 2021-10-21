<?php $this->assign('title', 'Historial de Orden de Compra'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Ordenamiento de Pago - Nomina</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td>Requisicion</td>
				    <td>Orden</td>
				    <td>Pago</td>
				    <td>Fecha</td>
				    <td>Tipo Orden</td>
				    <td>Monto</td>
				    <td>Reporte</td>
				    <td>Acción</td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ 

		    		if($reg->status == 5 and $reg->tipo != 'COMPRA' and $reg->tipo != 'TRANSFERENCIA' and $reg->tipo != 'SERVICIO'){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 

                        $n = 10 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 

                        $n = 10 - strlen($reg->numero_orden_pago_ord);
                        $numero_orden_pago_ord = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago_ord .= "0";
                        }
                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                    ?>

                    <?php 
                    	$monto = number_format(@$reg->monto, 2, ',', '.');
                    ?>

				 <tr style="text-align: center;">
			    	<td><label> <?= $requisicion ?> </label></td>
			    	<td><label> <?= $numero_orden_pago ?> </label></td>
			    	<td><label> <?= $numero_orden_pago_ord ?> </label></td>
			    	<td><label> <?= $reg->quincena_denominacion . "-" . $reg->mes_denominacion . "-" . $reg->ano . " - " . $reg->fecha_rrhh  ?></label></td>
			    	<td><?= $reg->tipo ?></td>
			    	<td><?= @$monto ?></td>
			    	<td>
			    		
			    	</td>
			    	<td>
			    		<?php 
							if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
			    	</td>
			    </tr>

			<?php } } 

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
 
		    <?php endif; ?>
</table>

















<hr>
<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Ordenamiento de Pago - Compra</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				     <td>Requisicion</td>
				    <td>Orden</td>
				    <td>Pago</td>
				    <td>Fecha</td>
				    <td>Tipo Orden</td>
				    <td>Monto</td>
				    <td>Reporte</td>
				    <td>Acción</td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ 

		    		if($reg->status == 5 and $reg->tipo == 'COMPRA'){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 

                        $n = 10 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 

                        $n = 10 - strlen($reg->numero_orden_pago_ord);
                        $numero_orden_pago_ord = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago_ord .= "0";
                        }
                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                    ?>

                    <?php 
                    	$monto = number_format(@$reg->monto, 2, ',', '.');
                    ?>

				 <tr style="text-align: center;">
			    	<td><label> <?= $requisicion ?> </label></td>
			    	<td><label> <?= $numero_orden_pago ?> </label></td>
			    	<td><label> <?= $numero_orden_pago_ord ?> </label></td>
			    	<td><label> <?= $reg->mes_denominacion . "-" . $reg->ano . " - " . $reg->fecha_rrhh  ?></label></td>
			    	<td><?= $reg->tipo ?></td>
			    	<td><?= @$monto ?></td>
			    	<td>
			    		
			    	</td>
			    	<td>
			    		<?php 
							if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
			    	</td>
			    </tr>

			<?php } } 

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>

			    
		    <?php endif; ?>
	
</table>











<hr>
<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Ordenamiento de Pago - Transferencia</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				     <td>Requisicion</td>
				    <td>Orden</td>
				    <td>Pago</td>
				    <td>Fecha</td>
				    <td>Tipo Orden</td>
				    <td>Monto</td>
				    <td>Reporte</td>
				    <td>Acción</td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ 

		    		if($reg->status == 5 and $reg->tipo == 'TRANSFERENCIA'){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 

                        $n = 10 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 

                        $n = 10 - strlen($reg->numero_orden_pago_ord);
                        $numero_orden_pago_ord = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago_ord .= "0";
                        }
                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                    ?>

                    <?php 
                    	$monto = number_format(@$reg->monto, 2, ',', '.');
                    ?>

				 <tr style="text-align: center;">
			    	<td><label> <?= $requisicion ?> </label></td>
			    	<td><label> <?= $numero_orden_pago ?> </label></td>
			    	<td><label> <?= $numero_orden_pago_ord ?> </label></td>
			    	<td><label> <?= $reg->fecha_rrhh ?></label></td>
			    	<td><?= $reg->tipo ?></td>
			    	<td><?= @$monto ?></td>
			    	<td>
			    		
			    	</td>
			    	<td>
			    		<?php 
							if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
			    	</td>
			    </tr>

			<?php } } 

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>

			    
		    <?php endif; ?>
	
</table>
</div>












		<div class="well">
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
			<tr>
					<td class="text-center"><strong>Leyenda</strong></td>
			</tr>
			<tr>
				<td class="text-center">
					<button class = "btn btn-success"><i class='fa fa-check'></i></button>
					<label>Aprobada</label>
				</td>
				<!--<td></td>
				<td>
					<button class = "btn btn-danger"><i class='fa fa-check'></i></button>
					<label>Liquidada</label>
				</td>-->
			</tr>
		</table>

	</div>
