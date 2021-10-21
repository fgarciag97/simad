<?php $this->assign('title', 'Pago Especial'); ?>

<?= $this->Form->create('MRRHHNomina', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'personalizada'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Pago Especial </strong>
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
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar la Nomina?'), 'class'=>'btn btn-default pull-right']); ?>
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


		<!----------------------------------------------------------------------------------------------------------------------------->
	<?php if(!$estatus){ ?>

		<table class="table table-responsive">
			<tr>
				<td>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th></th>
								<td></td>
								<th class="text-center">
										<strong> Listado del Personal</strong>
									</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
					</table>

					<table class="table table-responsive">
						<thead style="text-align: center;">
					        <tr>
							    <td> Cedula </td>
							    <td> Apellidos </td>
							    <td> Nombres </td>
							    <td> Estatus </td>
							    <td> Acción </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data) && !empty($data)){

					    	foreach($data as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td>
							        <td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>
							        <td>
							         	<a
							         		data-toggle = "modal" id = "<?= $reg->cedula; ?>" 
										    data-cedula = "<?= $reg->cedula; ?>"
								            data-apellidos = "<?= $reg->apellidos; ?>"
								            data-nombres = "<?= $reg->nombres; ?>"
								            data-status = "<?= ($reg->status) ? "ACTIVO" : "SUSPENDIDO"; ?>"
								            data-fecha_ingreso_institucion = "<?php if ($reg->fecha_ingreso_institucion != '') echo date_format($reg->fecha_ingreso_institucion,"d/m/Y"); ?>"
								            data-fecha_egreso_institucion = "<?php if ($reg->fecha_egreso_institucion != '') echo date_format($reg->fecha_egreso_institucion,"d/m/Y"); ?>"
								            data-fecha_ingreso_administracion = "<?php if ($reg->fecha_ingreso_administracion != '') echo date_format($reg->fecha_ingreso_administracion,"d/m/Y"); ?>"
								            data-fecha_egreso_administracion = "<?php if ($reg->fecha_egreso_administracion != '') echo date_format($reg->fecha_egreso_administracion,"d/m/Y"); ?>"
								            data-anos_institucion = "<?= $reg->anos_servicio; ?>"
								            data-cargo = "<?= $reg->cargo; ?>"
								            data-grupo = "<?= $reg->grupo; ?>"
								            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"
								            data-banco = "<?= $reg->banco; ?>"
								            data-numero_cuenta = "<?= $reg->numero_cuenta; ?>"
								            
								            data-beca1 = "<?php if($reg->beca_escolar_inicial) echo "Si"; else echo "No" ?>"
								            data-beca2 = "<?php if($reg->beca_escolar_primaria) echo "Si"; else echo "No" ?>"
								            data-beca3 = "<?php if($reg->beca_escolar_secundaria) echo "Si"; else echo "No" ?>"
								            data-beca4 = "<?php if($reg->beca_escolar_universitaria) echo "Si"; else echo "No" ?>"
								            data-beca5 = "<?php if($reg->beca_escolar_discapacidad) echo "Si"; else echo "No" ?>"
								            data-caja = "<?php if($reg->caja_ahorro) echo "Si"; else echo "No" ?>"
								            data-porcentaje_caja = "<?php echo $reg->porcentaje_caja; ?>"
								            data-funeraria = "<?php if($reg->funeraria) echo "Si"; else echo "No" ?>"

								            data-prima_profesion = "<?= number_format($reg->prima_profesion, 2, ',', '.') ?>"
								            data-prima_antiguedad = "<?= number_format($reg->prima_antiguedad, 2, ',', '.') ?>"
								            data-deduccion_sso = "<?= number_format($reg->deduccion_sso, 2, ',', '.') ?>"
								            data-deduccion_rpe = "<?= number_format($reg->deduccion_rpe, 2, ',', '.') ?>"
								            data-deduccion_fpj = "<?= number_format($reg->deduccion_fpj, 2, ',', '.') ?>"
								            data-deduccion_caja_ahorro = "<?= number_format($reg->deduccion_caja_ahorro, 2, ',', '.') ?>"
								            data-aporte_patronal_asso = "<?= number_format($reg->aporte_patronal_asso, 2, ',', '.') ?>"
								            data-aporte_patronal_arpe = "<?= number_format($reg->aporte_patronal_arpe, 2, ',', '.') ?>"
								            data-aporte_patronal_afpj = "<?= number_format($reg->aporte_patronal_afpj, 2, ',', '.') ?>"
								            data-aporte_patronal_caja_ahorro = "<?= number_format($reg->aporte_patronal_caja_ahorro, 2); ?>"

								            onclick="ver_nomina(this);" class="btn btn-info btn-sm"><i class='fa fa-search'></i>
								        </a>
								        <?= $this->Form->postLink('Incluir', ['action' => 'incluir', $reg->cedula, @$tps, @$ms, @$qs, $o], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						    <tr>
						        <td> <?= $this->Form->postLink('Incluir Todos', ['action' => 'incluirtodos', @$tps, @$ms, @$qs, $o], ['confirm' => __('Desea incluir a todo el personal a la Prenomina?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
						        <td> </td>
						        <td> </td>
						        <td>  </td>
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
				</td>

				<td>
					<?php } ?>

					<!----------------------------------------------------------------------------------------------------------------------------->

					<table class="table table-responsive">
						<thead>
							<tr>
								<th></th>
								<td></td>
								<th class="text-center">
										<strong> Personal Incluido a la nomina Personalizada </strong>
									</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
					</table>

				  	<table class="table table-responsive">
						<thead style="text-align: center;">
					        <tr>
							    <td> Cedula </td>
							    <td> Apellidos </td>
							    <td> Nombres </td>
							    <td> Estatus </td>
							    <td> Acción </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data2) && !empty($data2)){

					    	foreach($data2 as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td>
							        <td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>
							        <td>
							         	<a
							         		data-toggle = "modal" id = "<?= $reg->cedula; ?>" 
										    data-cedula = "<?= $reg->cedula; ?>"
								            data-apellidos = "<?= $reg->apellidos; ?>"
								            data-nombres = "<?= $reg->nombres; ?>"
								            data-status = "<?= ($reg->status) ? "ACTIVO" : "SUSPENDIDO"; ?>"
								            data-fecha_ingreso_institucion = "<?php if ($reg->fecha_ingreso_institucion != '') echo date_format($reg->fecha_ingreso_institucion,"d/m/Y"); ?>"
								            data-fecha_egreso_institucion = "<?php if ($reg->fecha_egreso_institucion != '') echo date_format($reg->fecha_egreso_institucion,"d/m/Y"); ?>"
								            data-fecha_ingreso_administracion = "<?php if ($reg->fecha_ingreso_administracion != '') echo date_format($reg->fecha_ingreso_administracion,"d/m/Y"); ?>"
								            data-fecha_egreso_administracion = "<?php if ($reg->fecha_egreso_administracion != '') echo date_format($reg->fecha_egreso_administracion,"d/m/Y"); ?>"
								            data-anos_institucion = "<?= $reg->anos_servicio; ?>"
								            data-cargo = "<?= $reg->cargo; ?>"
								            data-grupo = "<?= $reg->grupo; ?>"
								            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"
								            data-banco = "<?= $reg->banco; ?>"
								            data-numero_cuenta = "<?= $reg->numero_cuenta; ?>"
								            
								            data-beca1 = "<?php if($reg->beca_escolar_inicial) echo "Si"; else echo "No" ?>"
								            data-beca2 = "<?php if($reg->beca_escolar_primaria) echo "Si"; else echo "No" ?>"
								            data-beca3 = "<?php if($reg->beca_escolar_secundaria) echo "Si"; else echo "No" ?>"
								            data-beca4 = "<?php if($reg->beca_escolar_universitaria) echo "Si"; else echo "No" ?>"
								            data-beca5 = "<?php if($reg->beca_escolar_discapacidad) echo "Si"; else echo "No" ?>"
								            data-caja = "<?php if($reg->caja_ahorro) echo "Si"; else echo "No" ?>"
								            data-porcentaje_caja = "<?php echo $reg->porcentaje_caja; ?>"
								            data-funeraria = "<?php if($reg->funeraria) echo "Si"; else echo "No" ?>"

								            data-prima_profesion = "<?= number_format($reg->prima_profesion, 2, ',', '.') ?>"
								            data-prima_antiguedad = "<?= number_format($reg->prima_antiguedad, 2, ',', '.') ?>"
								            data-deduccion_sso = "<?= number_format($reg->deduccion_sso, 2, ',', '.') ?>"
								            data-deduccion_rpe = "<?= number_format($reg->deduccion_rpe, 2, ',', '.') ?>"
								            data-deduccion_fpj = "<?= number_format($reg->deduccion_fpj, 2, ',', '.') ?>"
								            data-deduccion_caja_ahorro = "<?= number_format($reg->deduccion_caja_ahorro, 2, ',', '.') ?>"
								            data-aporte_patronal_asso = "<?= number_format($reg->aporte_patronal_asso, 2, ',', '.') ?>"
								            data-aporte_patronal_arpe = "<?= number_format($reg->aporte_patronal_arpe, 2, ',', '.') ?>"
								            data-aporte_patronal_afpj = "<?= number_format($reg->aporte_patronal_afpj, 2, ',', '.') ?>"
								            data-aporte_patronal_caja_ahorro = "<?= number_format($reg->aporte_patronal_caja_ahorro, 2); ?>"

								            onclick="ver_nomina(this);" class="btn btn-info btn-sm"><i class='fa fa-pencil'></i>

								            <a
							         		data-toggle = "modal" 
							         		id = "<?= $reg->cedula; ?>" 
										    data-cedula = "<?= $reg->cedula; ?>"
										    data-tps = "<?= $tps; ?>"
										    data-ms = "<?= $ms; ?>"
										    data-qs = "<?= $qs; ?>"
										    data-o = "<?= $o; ?>"

								            data-sueldo_base = "<?php 
								            						if($reg->sueldo == 0 or $reg->sueldo == ''){
								            							echo number_format($reg->sueldo_base, 2, ',', '.');
								            						}else{
								            							echo number_format($reg->sueldo, 2, ',', '.');
								            						} 
								            					?>"

								            onclick="sueldo_individual(this);" class="btn btn-success btn-sm"><i class='fa fa-pencil'></i>
								        </a>
								        <?= $this->Form->postLink('Excluir', ['action' => 'excluir', $reg->cedula, @$tps, @$ms, @$qs, @$o], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						    		<strong>Total de Personal:</strong> <?= $n2->count() ?>
						    	</td>
						    </tr>
						    <tr>
						        <td> <?= $this->Form->postLink('Excluir Todos', ['action' => 'excluirtodos', @$tps, @$ms, @$qs, @$o], ['confirm' => __('Desea excluir a todo el personal de la Prenomina?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
						        <td> </td>
						        <td> </td>
						        <td> </td>
						    </tr>
				  	</table>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<td>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th></th>
							<th class="text-center">
								<strong> Reportes de Nomina</strong>
							</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</td>

			<td>
				<table class="table table-responsive" style="width: 30%;">

					<tr>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'ResumenNomina', $reg->id_tipo_personal, $reg->mes, $reg->quincena, $reg->omitida, 0, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
						</td>
						<td>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'Acumulado', $reg->id_tipo_personal, $reg->mes, $reg->quincena, $reg->omitida, 0, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
						</td>

					</tr>
				</table>
			</td>
		</table>

	  	<!------------------------------------------------------------------------------->

	  	<div class="well">


		<table class="table table-responsive">
			<thead>
				<tr>
					<th></th>
					<td></td>
					<th class="text-center">
							<strong> Partidas </strong>
						</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td> <label> Partidas </label></td>
				    <td> <label> Descripción </label></td>
				    <td> <label> Monto </label></td>
			    	<td> Acción </td>			
				</tr>
			</thead>
				<?= $this->Form->create('MRRHHNomina', array('type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'addpartida'))) ?>

					<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
					<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
					<?= $this->Form->hidden('qs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$qs]); ?>
					<?= $this->Form->hidden('o', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$o]); ?>
					<?= $this->Form->hidden('partida', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'part']); ?>

					<tr style="text-align: center;">
						<td><?= $this->Form->select('x', @$p, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'id_partida_egreso']); ?></td>

						<td><?= $this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'descripcion_partida']); ?></td>

						<td><?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'required']); ?></td>
						<td>
							<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default btn-xs']); ?>
						</td>
					</tr>
				<?= $this->Form->end(); ?>

			<?php
				foreach ($registros as $reg) { ?>
					<tr style="text-align: center;">
						<td><?= $reg['partida']; ?></td>
						<td><?= $reg['denominacion']; ?></td>
						<td><?= number_format($reg['monto'], 2, ',', '.'); ?></td>
						<td><?= $this->Html->Link('Eliminar', ['action' => 'deletep', $reg['id'], $tps, $ms, $qs, $o], ['confirm' => __('Desea eliminar la partida?'), 'class' => 'btn btn-danger btn-xs']) ?></td>
					</tr>
			<?php } ?>

		</table>

		<br>
		<hr>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th></th>
					<td></td>
					<th class="text-center">
							<strong> Datos Nomina </strong>
						</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<?php echo $this->Form->create('MRRHHNomina', array('type' => 'post', 'url' => array('action' => 'procesarpersonalizada'))); ?>

		<table class="table table-responsive">
				<tr>
					<th> Descripcion (Requisicion) <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Descripcion de pago especial', 'onkeyup' => 'mayus(this);']); ?></th>
				</tr>
		</table>

		<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
		<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
		<?= $this->Form->hidden('qs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$qs]); ?>
		<?= $this->Form->hidden('o', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$o]); ?>

		<!--<table class="table table-responsive">
				<tr>
					<th> Monto (Opcional) <?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']);  ?></th>
				</tr>


		</table>-->


		<!------------------------------------------------------------------------------------------------------->

		    <?php if (isset($data2)){ ?>
			    <center>
			    	<?php if ($n2->count() != 0){  

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Generar la nomina?')]);  

			    		echo $this->Form->end(); 
			    	} ?>
			    	<br>
			    	<?= $this->Form->postLink('Eliminar Prenomina', ['action' => 'eliminarpersonalizada', @$tps, @$ms, @$qs, @$o], ['confirm' => __('Desea eliminar la Prenomina?'), 'class' => 'btn btn-danger btn-sm']) ?>
			    </center>
			<?php } ?>

		<?php }else{ ?>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th></th>
						<td></td>
						<th class="text-center">
								<strong> Personal en Nomina Especial </strong>
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
					    <td> Acción </td>
					</tr>
				</thead>
		    
			    <?php if (isset($db) && !empty($db)){

			    	foreach($db as $reg){ ?>

				    	<tr style="text-align: center;">
					        <td> <?= $reg->cedula; ?> </td>
					        <td> <?= $reg->apellidos; ?> </td>
					        <td> <?= $reg->nombres; ?> </td>
					        <td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>
					        <td>
					         	<a
					         		data-toggle = "modal" id = "<?= $reg->cedula; ?>" 
								    data-cedula = "<?= $reg->cedula; ?>"
						            data-apellidos = "<?= $reg->apellidos; ?>"
						            data-nombres = "<?= $reg->nombres; ?>"
						            data-status = "<?= ($reg->status) ? "ACTIVO" : "SUSPENDIDO"; ?>"
						            data-fecha_ingreso_institucion = "<?php if ($reg->fecha_ingreso_institucion != '') echo date_format($reg->fecha_ingreso_institucion,"d/m/Y"); ?>"
						            data-fecha_egreso_institucion = "<?php if ($reg->fecha_egreso_institucion != '') echo date_format($reg->fecha_egreso_institucion,"d/m/Y"); ?>"
						            data-fecha_ingreso_administracion = "<?php if ($reg->fecha_ingreso_administracion != '') echo date_format($reg->fecha_ingreso_administracion,"d/m/Y"); ?>"
						            data-fecha_egreso_administracion = "<?php if ($reg->fecha_egreso_administracion != '') echo date_format($reg->fecha_egreso_administracion,"d/m/Y"); ?>"
						            data-anos_institucion = "<?= $reg->anos_servicio; ?>"
						            data-cargo = "<?= $reg->cargo; ?>"
						            data-grupo = "<?= $reg->grupo; ?>"
						            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"
						            data-banco = "<?= $reg->banco; ?>"
						            data-numero_cuenta = "<?= $reg->numero_cuenta; ?>"
						            
						            data-beca1 = "<?php if($reg->beca_escolar_inicial) echo "Si"; else echo "No" ?>"
						            data-beca2 = "<?php if($reg->beca_escolar_primaria) echo "Si"; else echo "No" ?>"
						            data-beca3 = "<?php if($reg->beca_escolar_secundaria) echo "Si"; else echo "No" ?>"
						            data-beca4 = "<?php if($reg->beca_escolar_universitaria) echo "Si"; else echo "No" ?>"
						            data-beca5 = "<?php if($reg->beca_escolar_discapacidad) echo "Si"; else echo "No" ?>"
						            data-caja = "<?php if($reg->caja_ahorro) echo "Si"; else echo "No" ?>"
						            data-porcentaje_caja = "<?php echo $reg->porcentaje_caja; ?>"
						            data-funeraria = "<?php if($reg->funeraria) echo "Si"; else echo "No" ?>"

						            data-prima_profesion = "<?= number_format($reg->prima_profesion, 2, ',', '.') ?>"
						            data-prima_antiguedad = "<?= number_format($reg->prima_antiguedad, 2, ',', '.') ?>"
						            data-deduccion_sso = "<?= number_format($reg->deduccion_sso, 2, ',', '.') ?>"
						            data-deduccion_rpe = "<?= number_format($reg->deduccion_rpe, 2, ',', '.') ?>"
						            data-deduccion_fpj = "<?= number_format($reg->deduccion_fpj, 2, ',', '.') ?>"
						            data-deduccion_caja_ahorro = "<?= number_format($reg->deduccion_caja_ahorro, 2, ',', '.') ?>"
						            data-aporte_patronal_asso = "<?= number_format($reg->aporte_patronal_asso, 2, ',', '.') ?>"
						            data-aporte_patronal_arpe = "<?= number_format($reg->aporte_patronal_arpe, 2, ',', '.') ?>"
						            data-aporte_patronal_afpj = "<?= number_format($reg->aporte_patronal_afpj, 2, ',', '.') ?>"
						            data-aporte_patronal_caja_ahorro = "<?= number_format($reg->aporte_patronal_caja_ahorro, 2); ?>"

						            onclick="ver_nomina(this);" class="btn btn-info btn-sm"><i class='fa fa-search'></i>
						        </a>
						        
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
				    		<strong>Total de Personal:</strong> <?= $ndb->count() ?>
				    	</td>
				    </tr>
		  	</table>

		  		<!--<table class="table-responsive table">
					<tr>
						<td>
							<div class="paginator">
						        <ul class="pagination">
						            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
						            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
						            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
						        </ul>
						    </div>
						</td>
					</tr>
				</table> -->

				<table class="table table-responsive">

					<td>
						<table class="table table-responsive">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">
										<strong> Reportes de Nomina</strong>
									</th>
									<th></th>
								</tr>
							</thead>
						</table>
					</td>

					<td>
						<table class="table table-responsive" style="width: 30%;">

							<tr>
								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'ResumenNomina', $db[0]['id_tipo_personal'], $db[0]['mes'], $db[0]['quincena'], $db[0]['requisicion'], $db[0]['omitida'], "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>
								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'Acumulado', $db[0]['id_tipo_personal'], $db[0]['mes'], $db[0]['quincena'], $db[0]['requisicion'], $db[0]['omitida'], "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

							</tr>
						</table>
					</td>
				</table>


		<?php } ?>

	</div>

<?php }else{ ?>

	<?php if (isset($nominas) && !empty($nominas)){ ?>

	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> Requisicion </td>
				    <td> Fecha </td>
				    <td> Concepto </td>
				    <td> Estatus </td>
				    <td> Reporte </td>
				    <td>  </td>
				</tr>
			</thead>

	    	<?php foreach($nominas as $reg){ 

	    		if ($reg->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($reg->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($reg->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($reg->status == 5) {
		            $status = 'APROBADA';
		        }else if ($reg->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($reg->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $reg->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $reg->quincena_denominacion . " " . $reg->mes_denominacion; ?> </td>
			        <td> <?= $reg->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <?php
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'ResumenNomina', $reg->mes, $reg->quincena, $reg->requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHNominaPersonalizada', 'action' => 'Acumulado', $reg->mes, $reg->quincena, $reg->requisicion, $reg->omitida, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); 	
				   
				         ?> 
				    </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHNomina', 'action' => 'personalizada', $reg->id_tipo_personal, $reg->mes, $reg->quincena, $reg->omitida), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } } ?>
	</table>

<?php } ?>