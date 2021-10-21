<?php $this->assign('title', 'Nomina'); ?>

<?= $this->Form->create('MRRHHNomina', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Nomina </strong>
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

			<td style="width: 10%;">
				<div class="input-group">
					<span class="input-group-addon">¿Omitida?</span>
					<input type="checkbox" name="omitida" value="1" <?= (@$o == 1) ? "checked" : "" ?>>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Calcular', ['confirm' => __('Desea Calcular  la Pre-Nomina?'), 'class'=>'btn btn-default pull-right']); ?>
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
			    	<p style="color: green"> <strong> NOMINA ELABORADA </strong> </p>
			    </center>
		<?php }else if (@$status == 2){ ?>
			    <center>
			    	<p style="color: green"> <strong> NOMINA COMPROMETIDA </strong> </p>
			    </center>
		<?php }else if (@$status == 4){ ?>
			    <center>
			    	<p style="color: green"> <strong> NOMINA EN EJECUCION </strong> </p>
			    </center>
		<?php }else if (@$status == 5){ ?>
			    <center>
			    	<p style="color: green"> <strong> NOMINA APROBADA </strong> </p>
			    </center>
		<?php }else if (@$status == 6){ ?>
			    <center>
			    	<p style="color: green"> <strong> NOMINA LIQUIDADA </strong> </p>
			    </center>
		<?php }else if (@$status == 0){ ?>
				<center>
			    	<p style="color: blue"> <strong> NOMINA GENERADA </strong> </p>
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
				    <?php if (@$tps == 14){ ?>
					    <td> Bono E. </td>
					    <td> Vacaciones </td>
					    <td> Bono Evaluacion </td>
				    <?php } ?>

				    <?php if(@$reg->$status == 0) { ?>
				    	<td> Acción </td>
					<?php } ?>

				    <td> Recibo </td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)){

		    	foreach($data as $reg){ ?>

			    	<tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <!--<td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>-->

				        	<td> 
				        		<?= ($reg->status == true) ?  
					        		$this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'statusfalse', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) 
					        	: 
					        		$this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'statustrue', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> 
					        </td>

				        <?php if (@$tps == 14){ ?>
				        	<td> 
				        		<?= ($reg->bono_estabilidad == true) ?  
					        		$this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropbe', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) 
					        	: 
					        		$this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addbe', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> 
					        </td>
					    	<td> 
					    		<?= ($reg->vacaciones == true) ?  
					        		$this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropvaca', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) 
					        	: 
					        		$this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addvaca', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> 
					        </td>

					        <td> 
					    		<?= ($reg->evaluacion == true) ?  
					        		$this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropeva', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) 
					        	: 
					        		$this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addeva', $reg->cedula, @$tps, @$ms, $qs, @$o], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> 
					        </td>

					    <?php } ?>
				        	<td>
					        <?php if (@$status == 0){ ?>
				         	<a
				         		data-toggle = "modal" id = "<?= $reg->cedula; ?>" 
							    data-cedula = "<?= $reg->cedula; ?>"
					            data-apellidos = "<?= $reg->apellidos; ?>"
					            data-nombres = "<?= $reg->nombres; ?>"
					            data-cargo = "<?= $reg->cargo; ?>"
					            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"
					            
					            data-dias_dejados_c = "<?= $reg->dias_dejados_c; ?>"
					            data-ajuste_sueldo = "<?= $reg->ajuste_sueldo; ?>"
					            data-ajuste_p_profesion = "<?= $reg->ajuste_p_profesion; ?>"
					            data-ajuste_p_antiguedad = "<?= $reg->ajuste_p_antiguedad; ?>"
					            data-ajuste_p_hijos = "<?= $reg->ajuste_p_hijos; ?>"
					            data-ajuste_p_hogar = "<?= $reg->ajuste_p_hogar; ?>"

					            data-ajuste_sso = "<?= $reg->ajuste_sso; ?>"
					            data-ajuste_rpe = "<?= $reg->ajuste_rpe; ?>"
					            data-ajuste_faov = "<?= $reg->ajuste_faov; ?>"
					            data-ajuste_fpj = "<?= $reg->ajuste_fpj; ?>"
					            data-ajuste_caja = "<?= $reg->ajuste_caja; ?>"

					            data-ajuste_a_sso = "<?= $reg->ajuste_a_sso; ?>"
					            data-ajuste_a_rpe = "<?= $reg->ajuste_a_rpe; ?>"
					            data-ajuste_a_faov = "<?= $reg->ajuste_a_faov; ?>"
					            data-ajuste_a_fpj = "<?= $reg->ajuste_a_fpj; ?>"
					            data-ajuste_a_caja = "<?= $reg->ajuste_a_caja; ?>"

					            data-tps = "<?= $tps; ?>"
					            data-ms = "<?= $ms; ?>"
					            data-qs = "<?= $qs; ?>"
					            data-o = "<?= $o; ?>"
					            
					            onclick="ver_nomina_editar(this);" class="btn btn-primary btn-sm"><i class='fa fa-pencil'></i>
					        </a>



							<?php	echo $this->Form->postLink('Eliminar', ['action' => 'eliminardenomina', @$tps, @$ms, @$qs, @$o, $reg->cedula], ['confirm' => __('Desea eliminarlo de la Prenomina?'), 'class' => 'btn btn-danger btn-sm']);
								 } ?>
					        </td>

				        <td>

				        	<?php
				        		if($tps == 1){
				        		 	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboEmpleadosFijos', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		 	
				        		}else if($tps == 2){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboEmpleadosContratados', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 3){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboEmpleadosDirectivos', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

				        			// PENDIENTE POR REVISAR CONTROLADORES PARA CAMBIO DE VALOR FIJO A BD 
				        		}else if($tps == 4){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboObrerosFijos', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @@$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 5){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboObrerosContratados', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 6){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboObrerosNoPermanentes', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 7){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboJubiladosEmpleados', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 8){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboJubiladosObreros', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 9){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboPensionadosEmpleados', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 10){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboPensionadosEmpleadosSobrevivientes', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 11){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboPensionadosEmpleadosEspeciales', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 12){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboPensionadosObrerosSobrevivientes', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 13){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Recibo ",array('controller' => 'MRRHHNominaRecibo', 'action' => 'ReciboPensionadosObrerosEspeciales', $reg->cedula, $reg->id_tipo_personal, $reg->mes, $reg->quincena, @$requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 14){
				        			
				        		}else if($tps == 15){
				        			
				        		}else if($tps == 16){
				        			
				        		}else if($tps == 17){
				        			
				        		}
				        	?>
						</td>
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

	  		<?= $this->element('rrhh/botones_reportes') ?>
	  		
	    <?php } ?>



	  	<!------------------------------------------------------------------------------->
	  	<?php

	  		if(!$estatus){
	  	
			  	echo $this->Form->create('MRRHHNomina', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>


			  	<table class="table table-responsive">
						<tr>
							<th> Concepto <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'value' => @$concepto]); ?></th>
							<!--<th> Sueldo (Opcional) <?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']);  ?></th>-->
						</tr>

						<?= $this->Form->hidden('tps',['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
						<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
						<?= $this->Form->hidden('qs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$qs]); ?>
						<?= $this->Form->hidden('o', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$o]); ?>
				</table>

			    <center>
			    	<?php 

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Procesar la nomina?')]);  

			    		echo $this->Form->end(); 

			    		echo $this->Form->postLink('Actualizar datos Prenomina', ['action' => 'eliminar', @$tps, @$ms, @$qs, @$o], ['confirm' => __('Desea eliminar la Prenomina?'), 'class' => 'btn btn-primary btn-sm']) 
			    	?>
			    </center>
			<?php }else if($estatus and $id_status == 0){ ?> 
				<center>
					<?php 
						echo $this->Html->link('Procesar', ['action' => 'enviar', @@$requisicion], ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Procesar la nomina?')]); 

						echo $this->Form->postLink('Actualizar datos Prenomina', ['action' => 'eliminar', @$tps, @$ms, @$qs, @$o], ['confirm' => __('Desea eliminar la Prenomina?'), 'class' => 'btn btn-primary btn-sm'])  
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