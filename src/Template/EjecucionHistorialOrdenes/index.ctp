<?php $this->assign('title', 'Historial de Ordenes'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Historial de Ordenes - RRHH</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisición') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Pago de: </td>
				    <td><?= $this->Paginator->sort('ano') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('mes') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Reporte" ?> </td>
				    <td style="width: 10%;"> Fecha de Aprobada </td>
				    <td style="width: 10%;"> N° de OP </td>
				    <td><?= "Estatus" ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

			<?php if ((isset($nomina) && !empty($nomina)) or (isset($comra) && !empty($comra)) or (isset($servicios) && !empty($servicios))): 
		    	foreach($nomina as $reg){ ?>

		    		<?php if($reg->status != 0){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 

                        if($reg->numero_orden_pago_ord != null){
	                        $n = 6 - strlen($reg->numero_orden_pago_ord);
	                        $numero_orden_pago_ord = '';
	                        for($i=0; $i < $n; $i++){
	                            $numero_orden_pago_ord .= "0";
	                        }
	                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
	                    }else{
	                    	$numero_orden_pago_ord = null;
	                    }
                    ?>

				    <tr style="text-align: center;">
						<td><label> <?= $requisicion ?></label></td>
						<td><label> Nomina </label></td>
						<td> <?= $reg->ano;  ?> </td>
						<td> <?= $reg->mes_denominacion;  ?> </td>
						<td>
						<?php 
							echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reportenomina', $requisicion, $reg->numero_orden_pago, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
						?>
						</td>
						<td> <?= $reg->fecha_ordenamiento . " - " . $reg->hora_ordenamiento;  ?></td>
						<td> <?= @$numero_orden_pago_ord;  ?></td>
						<td>
							<?php 
								if($reg->status == 1){
									echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => '', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
								}else if($reg->status == 2){
									echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'elaborarnomina', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a ordenamiento la requisicion # {0}?', $requisicion)));
								}else if($reg->status == 4){
									echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
								}else if($reg->status == 5){
									echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
								}else if($reg->status == 6){
									echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
								}
							?>
						</td>
						
					</tr>
			    
		    <?php } } ?>

	</table>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Historial de Ordenes - COMPRA</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">

		    <thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisición') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Pago de: </td>
				    <td><?= $this->Paginator->sort('ano') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('mes') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Reporte" ?> </td>
				    <td style="width: 10%;"> Fecha de Aprobada </td>
				    <td style="width: 10%;"> N° de OP </td>
				    <td><?= "Estatus" ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

		    <?php foreach($compra as $reg){ ?>

		    		<?php if($reg->status != 0){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 

                        if($reg->numero_orden_pago_ord != null){
	                        $n = 6 - strlen($reg->numero_orden_pago_ord);
	                        $numero_orden_pago_ord = '';
	                        for($i=0; $i < $n; $i++){
	                            $numero_orden_pago_ord .= "0";
	                        }
	                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                       	}else{
	                    	$numero_orden_pago_ord = null;
	                    }
                    ?>

				    <tr style="text-align: center;">
						<td><label> <?= $requisicion ?></label></td>
						<td><label> Compra </label></td>
						<td> <?= $reg->ano;  ?> </td>
						<td> <?= $reg->mes_denominacion;  ?> </td>
						<td>
						<?php 
							if($reg->tipo == 'COMPRA'){
								echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reportecompra', $requisicion, $reg->numero_orden_pago, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
							}else if($reg->tipo == 'SERVICIO'){
								echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reporteservicio', $requisicion, $reg->numero_orden_pago, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
							}
							
						?>
						</td>
						<td> <?= $reg->fecha_ordenamiento . " - " . $reg->hora_ordenamiento;  ?></td>
						<td> <?= @$reg->numero_orden_pago_ord;  ?></td>
						<td> 
							<?php 
								if($reg->status == 1){
								echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => '', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
							}else if($reg->status == 2){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'elaborarcompra', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a ordenamiento la requisicion # {0}?', $requisicion)));
							}else if($reg->status == 4){
								echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
							}else if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
						</td>
					</tr>

			    
		    <?php } } endif;?>

		</table>











		<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Historial de Ordenes - Requisicion de Servicios</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">

		    <thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisición') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_rrhh', 'Fecha Generada') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Reporte" ?> </td>
				    <td style="width: 10%;"> Fecha de Aprobada </td>
				    <td style="width: 10%;"> N° de OP </td>
				    <td><?= "Estatus" ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

		    <?php foreach($servicios as $reg){ ?>

		    		<?php if($reg->status != 0){ ?>

		    		<?php
                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 


                        $n = 6 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 

                        if($reg->numero_orden_pago_ord != null){
	                        $n = 6 - strlen($reg->numero_orden_pago_ord);
	                        $numero_orden_pago_ord = '';
	                        for($i=0; $i < $n; $i++){
	                            $numero_orden_pago_ord .= "0";
	                        }
	                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                       	}else{
	                    	$numero_orden_pago_ord = null;
	                    }
                    ?>

				    <tr style="text-align: center;">
						<td><label> <?= $requisicion ?></label></td>
						<td><label> <?= $numero_orden_pago ?></label></td>
						<td> <?= $reg->fecha_rrhh ?> </td>
						<td>
						<?php 
							echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reportereqservicio', $requisicion, $reg->numero_orden_pago, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
						?>
						</td>
						<td> <?= $reg->fecha_ordenamiento . " - " . $reg->hora_ordenamiento;  ?></td>
						<td> <?= @$reg->numero_orden_pago_ord;  ?></td>
						<td> 
							<?php 
								if($reg->status == 1){
								echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => '', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
							}else if($reg->status == 2){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'elaborarservicio', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a ordenamiento la requisicion # {0}?', $requisicion)));
							}else if($reg->status == 4){
								echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
							}else if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
						</td>
					</tr>

			    
		    <?php } } ?>

		</table>
	</div>



	<div class="well">
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
			<tr>
					<td></td>
					<td></td>
					<td class="text-center"><strong>Leyenda</strong></td>
					<td></td>
					<td></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-info"><i class='fa fa-exclamation-circle'></i></button>
					<label>Elaborada</label>
				</td>
				<td>
					<button class = "btn btn-success"><i class='fa fa-check'></i></button>
					<label>Comprometida</label>
				</td>
				<td>
					<button class = "btn btn-info"><i class='fa fa-send'></i></button>
					<label>En Ejecucion</label>
				</td>
				<td>
					<button class = "btn btn-success"><i class='fa fa-list'></i></button>
					<label>Aprobada</label>
				</td>

				<td>
					<button class = "btn btn-default"><i class='fa fa-credit-card'></i></button>
					<label>Liquidada</label>
				</td>
			</tr>
		</table>

	</div>

</br>