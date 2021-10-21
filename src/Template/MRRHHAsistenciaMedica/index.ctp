<?php $this->assign('title', 'ASISTENCIA MEDICA'); ?>

<?= $this->Form->create('MRRHHAsistenciaMedica', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHAsistenciaMedica', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> ASISTENCIA MEDICA </strong>
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
					<span class="input-group-addon">Tipo de Personal</span>
					<?= $this->Form->select('tipo_nomina', $tipo_nomina, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => @$tps]); ?>
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Mes</span>
					<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => @$ms]); ?>	
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Quincena</span>
					<?= $this->Form->select('quincena', $quincena, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => @$qs]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Calcular', ['confirm' => __('Desea Calcular  la ASISTENCIA MEDICA?'), 'class'=>'btn btn-default pull-right']); ?>
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




<?php if(isset($data)){ ?>


	<div class="well">

		<!----------------------------------------------------------------------------------------------------------------------------->

		<?php if (@$status == 1){ ?>
			    <center>
			    	<p style="color: green"> <strong> ASISTENCIA MEDICA ELABORADA </strong> </p>
			    </center>
		<?php }else if (@$status == 2){ ?>
			    <center>
			    	<p style="color: green"> <strong> ASISTENCIA MEDICA COMPROMETIDA </strong> </p>
			    </center>
		<?php }else if (@$status == 4){ ?>
			    <center>
			    	<p style="color: green"> <strong> ASISTENCIA MEDICA EN EJECUCION </strong> </p>
			    </center>
		<?php }else if (@$status == 5){ ?>
			    <center>
			    	<p style="color: green"> <strong> ASISTENCIA MEDICA APROBADA </strong> </p>
			    </center>
		<?php }else if (@$status == 6){ ?>
			    <center>
			    	<p style="color: green"> <strong> ASISTENCIA MEDICA LIQUIDADA </strong> </p>
			    </center>
		<?php }else if (@$status == 0){ ?>
				<center>
			    	<p style="color: blue"> <strong> ASISTENCIA MEDICA GENERADA </strong> </p>
			    </center>
		<?php } ?>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th></th>
					<td></td>
					<th class="text-center">
							<strong> Personal</strong>
						</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> Cedula </td>
				    <td> Apellidos </td>
				    <td> Nombres </td>
				    <td> Estatus </td>
				    <?php if(@$status == 0) { ?>
					    <td> Acción </td>
					<?php } ?>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)){

		    	foreach($data as $reg){ ?>

			    	<tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>
				        <?php if(@$status == 0) { ?>
					        <td>
					         	<a
					         		data-toggle = "modal" id = "<?= $reg->cedula; ?>" 
								    data-cedula = "<?= $reg->cedula; ?>"
						            data-apellidos = "<?= $reg->apellidos; ?>"
						            data-nombres = "<?= $reg->nombres; ?>"
						            data-cargo = "<?= $reg->cargo; ?>"
						            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"
						            
						            data-bono_dejado_cam = "<?= $reg->bono_dejado_c; ?>"
					            	data-bono_dias_cancelaram = "<?= $reg->bono_dias_cancelar; ?>"

						            data-tps = "<?= $tps; ?>"
						            data-ms = "<?= $ms; ?>"
						            data-qs = "<?= $qs; ?>"
						            
						            onclick="modal_asistencia_editar(this);" class="btn btn-primary btn-sm"><i class='fa fa-pencil'></i>
						        </a>
						        <?php if (@$status == 0){ 
									echo $this->Form->postLink('Eliminar', ['action' => 'eliminardenomina', @$tps, @$ms, @$qs, $reg->cedula], ['confirm' => __('Desea eliminarlo de la Prenomina?'), 'class' => 'btn btn-danger btn-sm']);
								 } ?>
					        </td>
					      <?php } ?>
			    	</tr>
			    
		    <?php } }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		   	<?php } ?>
		    	<br>
		    	<tr>
			    	<td colspan="7"> 
			    		<strong>Total de Personal:</strong> <?= $n->count() ?>
			    	</td>
			    </tr>
	  	</table>

	  	<?php if (isset($data)){ ?>
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

	  		<?= $this->element('rrhh/botones_reportesAM') ?>
	  		
	    <?php } ?>



	  	<!------------------------------------------------------------------------------->
	  	<?php

	  		if(!$estatus){
	  	
			  	echo $this->Form->create('MRRHHAsistenciaMedica', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>


			  	<table class="table table-responsive">
						<tr>
							<th> Concepto <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'value' => @$concepto]); ?></th>
							<!--<th> Sueldo (Opcional) <?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']);  ?></th>-->
						</tr>

						<?= $this->Form->hidden('tps',['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
						<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
						<?= $this->Form->hidden('qs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$qs]); ?>
				</table>

			    <center>
			    	<?php 

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Procesar la ASISTENCIA MEDICA?')]);  

			    		echo $this->Form->end(); 

			    		echo $this->Form->postLink('Actualizar datos', ['action' => 'eliminar', @$tps, @$ms, @$qs], ['confirm' => __('Desea eliminar la ASISTENCIA MEDICA?'), 'class' => 'btn btn-primary btn-sm']) 
			    	?>
			    </center>
			<?php }else{ ?> 
				<table class="table table-responsive">
						<tr>
							<th> Concepto <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly','value' => @$concepto]); ?></th>
						</tr>
				</table>

				
			<?php } ?> 
		
	</div>
<?php }