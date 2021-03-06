<?php $this->assign('title', 'Vacaciones'); ?>

<?= $this->Form->create('MRRHHVacaciones', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHVacaciones', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Vacaciones </strong>
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
					<?= $this->Form->select('quincena', @$quincena, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'value' => @$qs]); ?>	
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar las vacaciones?'), 'class'=>'btn btn-default pull-right']); ?>
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
				    	<p style="color: green"> <strong> VACACIONES ELABORADA </strong> </p>
				    </center>
			<?php }else if (@$status == 2){ ?>
				    <center>
				    	<p style="color: green"> <strong> VACACIONES COMPROMETIDA </strong> </p>
				    </center>
			<?php }else if (@$status == 4){ ?>
				    <center>
				    	<p style="color: green"> <strong> VACACIONES EN EJECUCION </strong> </p>
				    </center>
			<?php }else if (@$status == 5){ ?>
				    <center>
				    	<p style="color: green"> <strong> VACACIONES APROBADA </strong> </p>
				    </center>
			<?php }else if (@$status == 6){ ?>
				    <center>
				    	<p style="color: green"> <strong> VACACIONES LIQUIDADA </strong> </p>
				    </center>
			<?php }else if (@$status == 0){ ?>
					<center>
				    	<p style="color: blue"> <strong> VACACIONES GENERADA </strong> </p>
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
							    <td> Acci??n </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data) && !empty($data)){

					    	foreach($data as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td> 
							        <td>
								        <?= $this->Form->postLink('Incluir', ['action' => 'incluir', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						        <td> <?= $this->Form->postLink('Incluir Todos', ['action' => 'incluirtodos', @$tps, @$ms, $qs], ['confirm' => __('Desea incluir a todo el personal a las Vacaciones?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
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
										<strong> Personal Incluido a las vacaciones </strong>
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
							    <td> Fecha </td>
							    <!--<td> Quinquenio </td>-->
							    <td> Al(5). </td>
							    <td> Disf. </td>
							    <td> Ali. V. </td>
							    <td> Ali. F. </td>
							    <td> Bono V. </td>
							    <td> Acci??n </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data2) && !empty($data2)){

					    	foreach($data2 as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td>
							        <td> <?= date_format($reg->fecha_salida, "d/m/Y") . " - " . date_format($reg->fecha_entrada, "d/m/Y") ?>
							        <!--<td> <?= $reg->quinquenio; ?> </td>-->
							        <td> <?= ($reg->alicuota == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuota', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuota', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>
							        
							        <td> <?= ($reg->disfrute == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropdisfrute', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'adddisfrute', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->alicuota_v == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuotav', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuotav', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->alicuota_f == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropalicuotaf', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addalicuotaf', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>

							        <td> <?= ($reg->bono_v == true) ?  
							        $this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => 'dropbonov', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]) : 
							        $this->Form->postLink("<i style='color:red' class='fa fa-close'></i>", ['action' => 'addbonov', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> </td>
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
										    mesv = "<?= $ms; ?>"
										    quincenav = "<?= $qs; ?>"
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
								            
								            onclick="asignar_v(this);" class="btn btn-info btn-sm"><i class='fa fa-pencil'></i>
								        </a>
								        <?= $this->Form->postLink('Excluir', ['action' => 'excluir', $reg->cedula, @$tps, @$ms, $qs], ['class' => 'btn btn-danger btn-sm']) ?>
								        
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
						        <td> <?= $this->Form->postLink('Excluir Todos', ['action' => 'excluirtodos', @$tps, @$ms, $qs], ['confirm' => __('Desea excluir a todo el personal de las Vacaciones?'), 'class' => 'btn btn-danger btn-sm']) ?></td>
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
										<strong> Reportes de Vacaciones</strong>
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
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte ",array('controller' => 'MRRHHVacaciones', 'action' => 'reporte', @$reg->id_tipo_personal, @$reg->mes, $reg->quincena, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('controller' => 'MRRHHVacaciones', 'action' => 'Resumen', @$reg->id_tipo_personal, @$reg->mes, $reg->quincena, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHVacaciones', 'action' => 'Acumulado', $reg->id_tipo_personal, $reg->mes, $reg->quincena, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

							</tr>
						</table>
					</td>
				</table>

	  	<!------------------------------------------------------------------------------->

	  	<?php echo $this->Form->create('MRRHHNomina', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>

		<br>
		<hr>
		<br>

		<table class="table table-responsive">
				<tr>
					<th> Descripcion (Requisicion) <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Descripcion de las vacaciones', 'onkeyup' => 'mayus(this);']); ?></th>
				</tr>
		</table>

		<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
		<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
		<?= $this->Form->hidden('qs', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$qs]);  ?>

		<!------------------------------------------------------------------------------------------------------->

		    <?php if (isset($data2)){ ?>
			    <center>
			    	<?php if ($n2->count() != 0){  

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Generar las vacaciones?')]);  

			    		echo $this->Form->end(); 
			    	} ?>
			    	<br>
			    	<?= $this->Form->postLink('Eliminar Vacaciones', ['action' => 'eliminar', @$tps, @$ms, $qs], ['confirm' => __('Desea eliminar las Vacaciones?'), 'class' => 'btn btn-danger btn-sm']) ?>
			    </center>
			<?php } ?>

		<?php }else{ ?>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th></th>
						<td></td>
						<th class="text-center">
								<strong> Vacaciones del Personal </strong>
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
								<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Solicitud ",array('controller' => 'MRRHHVacaciones', 'action' => 'solicitud', $reg->id_tipo_personal, $reg->mes, $reg->quincena, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
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
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Requisicion ",array('controller' => 'MRRHHVacaciones', 'action' => 'ResumenNomina', $reg->id_tipo_personal, $reg->mes, $reg->quincena, 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>
								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte ",array('controller' => 'MRRHHVacaciones', 'action' => 'reporte', $reg->id_tipo_personal, $reg->mes, $reg->quincena, 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('controller' => 'MRRHHVacaciones', 'action' => 'resumen', $reg->id_tipo_personal, $reg->mes, $reg->quincena, 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
								</td>

								<td>
									<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHVacaciones', 'action' => 'Acumulado', $reg->id_tipo_personal, $reg->mes, $reg->quincena, 0, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); ?>
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
			        <td> <?= $reg->quincena_denominacion . " " . $reg->mes_denominacion; ?> </td>
			        <td> <?= $reg->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <?php
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHVacaciones', 'action' => 'ResumenNomina', $reg->mes, $reg->quincena, $reg->quincena, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHVacaciones', 'action' => 'Acumulado', $reg->mes, $reg->quincena, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); 	
				   
				         ?> 
				    </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHVacaciones', 'action' => 'index', $reg->id_tipo_personal, $reg->mes, $reg->quincena), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } } ?>
	</table>

<?php } ?>