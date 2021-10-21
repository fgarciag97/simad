<?php $this->assign('title', 'Requisicion de Servicios'); ?>

<?= $this->Form->create('MRRHHNomina', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHRequisicionServicios', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Requisicion de Servicios </strong>
					</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Concepto</span>
					<?= $this->Form->input('concepto', ['type' => 'textarea', 'rows' => '2', 'class'=> 'form-control', 'required', 'label' => false, 'onkeyup' => 'mayus(this);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Nomina a Vincular <strong>(Opcional)</strong></span>
					<?= $this->Form->select('nomina', $nomina, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'id' => 'nomina']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Tipo de Personal <strong>(Opcional)</strong></span>
					<?= $this->Form->select('id_tipo_personal', $tipo_personal, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'id' => 'tp']); ?>
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Mes <strong>(Opcional)</strong></span>
					<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'readonly', 'id' => 'mes']); ?>	
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Quincena <strong>(Opcional)</strong></span>
					<?= $this->Form->select('quincena', $quincena, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'readonly', 'id' => 'quincena']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar la requisicion?'), 'class'=>'btn btn-default pull-right']); ?>
				</div>	
			</td>

			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
					<?= $this->Form->button('Limpiar', ['type' => 'reset', 'class'=> 'btn btn-default']); ?>
				</div>	
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>

	<?php if (isset($data) && !empty($data)){ ?>

		<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
				<thead style="text-align: center;">
			        <tr>
					    <td> Requisicion </td>
					    <td> Concepto </td>
					    <td> Monto </td>
					    <td> Reporte </td>
					    <td> Ver </td>
					    <td> Estatus </td>
					</tr>
				</thead>

		    	<?php foreach($data as $dat){ 

	                    $n = 10 - strlen($dat->id);
	                    $requisicion = '';
	                    for($i=0; $i < $n; $i++){
	                        $requisicion .= "0";
	                    }
	                    $requisicion .= $dat->id; 
	                ?>

			    	<tr style="text-align: center;">
				        <td> <?= $requisicion; ?> </td>
				        <td> <?= $dat->concepto ?> </td>
				        <td> <?= number_format($dat->monto, 2, ',', '.') ?> </td>
				        <td>
				        	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reporte', $dat->id, "PDF"), array('tabindex' => '-1', 'target'=>'_blank', 'escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
				        </td>
					    <td>
					    	<?php
					        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHRequisicionServicios', 'action' => 'view', $dat->id), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
					        ?> 
					    </td>
					    <td>
					    	<?php
					    		if($dat->status == 0){ ?>
					    			<center>
								    	<p style="color: blue"> <strong> <small>GENERADA</small></strong> </p>
								    </center>
					    		<?php }else if($dat->status == 1){ ?>
					    			<center>
								    	<p style="color: green"> <strong><small> ELABORADA </small></strong> </p>
								    </center>
					    		<?php }
					    		else if($dat->status == 2){ ?>
					    			<center>
								    	<p style="color: green"> <strong><small> COMPROMETIDA </small></strong> </p>
								    </center>
					    		<?php }else if($dat->status == 4){ ?>
					    			<center>
								    	<p style="color: green"> <strong><small> EN EJECUCION </small></strong> </p>
								    </center>
					    		<?php }else if($dat->status == 5){ ?>
					    			<center>
								    	<p style="color: green"> <strong><small> APROBADA </small></strong> </p>
								    </center>
					    		<?php }else if($dat->status == 6){ ?>
					    			<center>
								    	<p style="color: orange"> <strong><small> LIQUIDADA </small></strong> </p>
								    </center>
					    		<?php }
					    	?>
					    </td>
			    	</tr>
				    
			    <?php } ?>
		</table>
	<?php } ?>

	<table class="table-responsive table">
				  			<tr>
				  				<td><div class="paginator">
								        <ul class="pagination">
								            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
								            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
								            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
								        </ul>
								    </div>
				  				</td>
				  			</tr>
				  		</table>