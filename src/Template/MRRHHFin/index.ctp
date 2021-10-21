<?php $this->assign('title', 'Bono Fin de Año'); ?>

<?= $this->Form->create('MRRHHFin', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHFin', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Bono BONO FIN DE AÑO </strong>
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
					<span class="input-group-addon">Desde</span>
					<input type="date" name="desde" class="form-control" required value="<?= @$ds ?>">
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Hasta</span>
					<input type="date" name="hasta" class="form-control" required value="<?= @$hs ?>">
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar el bono?'), 'class'=>'btn btn-default pull-right']); ?>
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
				    	<p style="color: green"> <strong> BONO FIN DE AÑO ELABORADA </strong> </p>
				    </center>
			<?php }else if (@$status == 2){ ?>
				    <center>
				    	<p style="color: green"> <strong> BONO FIN DE AÑO COMPROMETIDA </strong> </p>
				    </center>
			<?php }else if (@$status == 4){ ?>
				    <center>
				    	<p style="color: green"> <strong> BONO FIN DE AÑO EN EJECUCION </strong> </p>
				    </center>
			<?php }else if (@$status == 5){ ?>
				    <center>
				    	<p style="color: green"> <strong> BONO FIN DE AÑO APROBADA </strong> </p>
				    </center>
			<?php }else if (@$status == 6){ ?>
				    <center>
				    	<p style="color: green"> <strong> BONO FIN DE AÑO LIQUIDADA </strong> </p>
				    </center>
			<?php }else if (@$status == 0){ ?>
					<center>
				    	<p style="color: blue"> <strong> BONO FIN DE AÑO GENERADA </strong> </p>
				    </center>
			<?php } ?>

		<!----------------------------------------------------------------------------------------------------------------------------->
	<?php if(!@$estatus){ ?>

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
							    <td> Acción </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data) && !empty($data)){

					    	foreach($data as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td> 
							        <td>
								        <?= $this->Form->postLink('Incluir', ['action' => 'incluir', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						    		<?php if(isset($n)){ ?>
						    			<strong>Total de Personal:</strong> <?= @$n->count() ?>
						    		<?php } ?>
						    	</td>
						    </tr>
						    <tr>
						        <td> <?= $this->Form->postLink('Incluir Todos', ['action' => 'incluirtodos', @$tps, @$ds, $hs], ['confirm' => __('Desea incluir a todo el personal al Bono?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
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
										<strong> Personal Incluido al bono </strong>
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
							    <!--<td> Fecha </td>-->
							    <!--<td> Quinquenio </td>-->
							    <td> Al(5). </td>
							    <td> Disf. </td>
							    <td> Ali. V. </td>
							    <td> Ali. F. </td>
							    <td> Bono V. </td>
							    <td> Acción </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data2) && !empty($data2)){

					    	foreach($data2 as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td>
							        <!--<td> <?= date_format($reg->fecha_salida, "d/m/Y") . " - " . date_format($reg->fecha_entrada, "d/m/Y") ?>-->
							        <!--<td> <?= $reg->quinquenio; ?> </td>-->
							        <td> <?= ($reg->alicuota == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuota', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuota', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>
							        
							        <td> <?= ($reg->disfrute == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropdisfrute', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'adddisfrute', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->alicuota_v == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuotav', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuotav', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->alicuota_f == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuotaf', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuotaf', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->bono_v == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropbonov', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addbonov', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>
							        <td>
							         	<a
							         		data-toggle = "modal" 
							         		idv = "<?= $reg->id; ?>" 
							         		cedulav = "<?= $reg->cedula; ?>" 
							         		fechasv = "<?= $reg->fecha_salida; ?>" 
							         		fechaev = "<?= $reg->fecha_entrada; ?>" 
							         		alicuota = "<?= $reg->alicuota; ?>" 
							         		disfrute = "<?= $reg->disfrute; ?>" 
										    tpv = "<?= $tps; ?>"
										    desdev = "<?= $ds; ?>"
										    hastav = "<?= $hs; ?>"
										    quinqueniov = "<?= $reg->quinquenio; ?>" 

										    data-apellidosvx = "<?= $reg->apellidos; ?>"
								            data-nombresvx = "<?= $reg->nombres; ?>"
								            data-cargovx = "<?= $reg->cargo; ?>"
								            data-sueldo_base = "<?= number_format($reg->sueldo_base, 2, ',', '.') ?>"

								            data-diasvx = "<?= $reg->dias; ?>"
								            data-dias_bonovx = "<?= $reg->dias_bono; ?>"
								            data-horas_extrasvx = "<?= $reg->horas_extras; ?>"

											data-prima_antiguedad = "<?= $reg->prima_antiguedad; ?>"
								            data-prima_profesion = "<?= $reg->prima_profesion; ?>"
								            data-prima_hijos = "<?= $reg->prima_hijos; ?>"
								            data-prima_hogar = "<?= ($reg->prima_hogar == true) ? "SI" : "NO"; ?>"
								            
								            onclick="asignar_f(this);" class="btn btn-info btn-sm"><i class='fa fa-pencil'></i>
								        </a>
								        <?= $this->Form->postLink('Excluir', ['action' => 'excluir', $reg->cedula, @$tps, @$ds, $hs], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						    		<?php if(isset($n2)){ ?>
						    			<strong>Total de Personal:</strong> <?= @$n2->count() ?>
						    		<?php } ?>
						    	</td>
						    </tr>
						    <tr>
						        <td> <?= $this->Form->postLink('Excluir Todos', ['action' => 'excluirtodos', @$tps, @$ds, $hs], ['confirm' => __('Desea excluir a todo el personal de las Fin?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
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
										<strong> Reportes de Fin de Año</strong>
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
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte ",array('controller' => 'MRRHHFin', 'action' => 'reporte', @$reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('controller' => 'MRRHHFin', 'action' => 'Resumen', @$reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHFin', 'action' => 'Acumulado', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

							</tr>
						</table>
					</td>
				</table>

	  	<!------------------------------------------------------------------------------->

	  	<?php echo $this->Form->create('MRRHHFin', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>

		<br>
		<hr>
		<br>

		<table class="table table-responsive">
				<tr>
					<th> Descripcion (Requisicion) <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Descripcion del Bono', 'onkeyup' => 'mayus(this);']); ?></th>
				</tr>
		</table>

		<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
		<?= $this->Form->hidden('ds', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ds]);  ?>
		<?= $this->Form->hidden('hs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$hs]);  ?>

		<!------------------------------------------------------------------------------------------------------->

		    <?php if (isset($data2)){ ?>
			    <center>
			    	<?php if ($n2->count() != 0){  

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Generar el bono?')]);  

			    		echo $this->Form->end(); 
			    	} ?>
			    	<br>
			    	<?= $this->Form->postLink('Eliminar Bono', ['action' => 'eliminar', @$tps, @$ds, $hs], ['confirm' => __('Desea eliminar las Fin?'), 'class' => 'btn btn-danger btn-sm']) ?>
			    </center>
			<?php } ?>

		<?php }else{ ?>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th></th>
						<td></td>
						<th class="text-center">
								<strong> Fin del Personal </strong>
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
					    <td> Fecha </td>
					    <td> Solicitud </td>
					</tr>
				</thead>
		    
			    <?php if (isset($db) && !empty($db)){

			    	foreach($db as $reg){ ?>

				    	<tr style="text-align: center;">
					        <td> <?= $reg->cedula; ?> </td>
					        <td> <?= $reg->apellidos; ?> </td>
					        <td> <?= $reg->nombres; ?> </td>
					        <td> 
					        	<?= date_format($reg->fecha_salida, "d/m/Y") . " - " . date_format($reg->fecha_entrada, "d/m/Y") ?>  
					        </td>
					        <td>
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Solicitud ",array('controller' => 'MRRHHFin', 'action' => 'solicitud', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
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
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Requisicion ",array('controller' => 'MRRHHFin', 'action' => 'ResumenNomina', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>
								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte ",array('controller' => 'MRRHHFin', 'action' => 'reporte', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('controller' => 'MRRHHFin', 'action' => 'resumen', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHFin', 'action' => 'Acumulado', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>
							</tr>
						</table>
					</td>
				</table>


		<?php } ?>

	</div>

<?php }else{ ?>

	<?php if (isset($datas) && !empty($datas)){ ?>

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

	    	<?php foreach($datas as $reg){ 

	    		if ($reg->status == 0) {
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
			        <td> <?= $reg->hasta_denominacion . " " . $reg->desde_denominacion; ?> </td>
			        <td> <?= $reg->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <?php
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHFin', 'action' => 'ResumenNomina', @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), $reg->hasta, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHFin', 'action' => 'Acumulado', @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y"), $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); 	
				   
				         ?> 
				    </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHFin', 'action' => 'index', $reg->id_tipo_personal, @date_format($reg->desde, "d-m-Y"), @date_format($reg->hasta, "d-m-Y")), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } } ?>
	</table>

<?php } ?>