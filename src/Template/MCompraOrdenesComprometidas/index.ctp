<?php $this->assign('title', 'Ordenes Comprometidas'); ?>

	<?= $this->Form->create('MCompraOrdenesComprometidas', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MCompraOrdenesComprometidas', 'action' => 'index'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center"><strong>ORDENES COMPROMETIDAS</strong></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Tipo de Orden</span>
					<?= $this->Form->select('tipo_orden', ['COMPRA' =>'COMPRA', 'SERVICIO' =>'SERVICIO'], ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$to]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Proveedor</span>
					<?= $this->Form->select('proveedor', $proveedores, ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$p]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Estatus</span>
					<?= $this->Form->select('status', [1 =>'Elaboradas', 2 =>'Comprometidas', 4 =>'En ejecucion', 5 =>'Aprobadas', 6 =>'Liquidadas'], ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$s]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Rango de Fecha</span>
					<input type="date" name="desde" required value = <?= @$d ?>>
					<input type="date" name="hasta" required value = <?= @$h ?>>
				</div>
			</td>



			<td>
				<div class="input-group">
    				<?= $this->Form->button('Generar', ['class'=>'btn btn-md btn-default pull-right']); ?>
			    </div>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>


<?php if(isset($data)){ ?>

	<div class="well">

		<table class="table">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
			    <td> Proveedor </td>
			    <td> Tipo Orden </td>
			    <td> Estatus </td>
			    <td> Fecha </td>
			    <td> Monto </td>
			    <td> Reporte </td>
			</tr>
	    
		    <?php if (isset($data) && !empty($data) && $data->count() != 0){
		    	foreach($data as $reg){ 

		    		$x = $reg->requisicion;
					$n = 10 - strlen($x);
					$requisicion = '';
					for($i=0; $i < $n; $i++){
					    $requisicion .= "0";
					}
					$requisicion .= $x;

					$x = $reg->numero_orden_pago;
					$n = 10 - strlen($x);
					$numero_orden_pago = '';
					for($i=0; $i < $n; $i++){
					    $numero_orden_pago .= "0";
					}
					$numero_orden_pago .= $x;

				?>

				<?php 
					$status = '';
					if($reg->status == 1){
						$status = "ELABORADA";
					}else if($reg->status == 2){
						$status = "COMPROMETIDA";
					}else if($reg->status == 4){
						$status = "EN EJECUCION";
					}else if($reg->status == 5){
						$status = "APROBADA";
					}else if($reg->status == 6){
						$status = "LIQUIDADA";
					}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $requisicion ?> </td>
				        <td> <?= @$numero_orden_pago; ?> </td>
				        <td> <?= $reg->proveedor_denominacion ?> </td>
				        <td> <?= $reg->tipo ?> </td>
				        <td> <?= $status ?> </td>
				        <td> <?= $reg->fecha ?> </td>
				        <td> <?= number_format($reg->monto + ($reg->monto * 0.16), 2, ',', '.');  ?> </td>
				        <td> <?php 
				        		if($reg->tipo == 'COMPRA'){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte", array('controller' => 'MCompraOrdenesEmitidas', 'action' => 'reporte', $reg->id_registro, $reg->requisicion), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
				        		}else if($reg->tipo == 'SERVICIO'){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte", array('controller' => 'MCompraOrdenesServicio', 'action' => 'reporte', $reg->id_registro, $reg->requisicion), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm', 'target' => '_blank'));
				        		}
				        	?> 
				    	</td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>

	  	<br>

		<table class="table-responsive table" style="width: 30%; position: center; margin-left: 75%; padding: 10px;">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> Reporte Consultado </i>",array('action' => 'reporte', @$to, @$p, @$s, @$d, @$h, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>
			</tr>
		</table>
	</div>
<?php }  ?>