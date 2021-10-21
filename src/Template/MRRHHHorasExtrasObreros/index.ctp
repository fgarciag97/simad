<?php $this->assign('title', 'Horas Extras Obreros'); ?>

<?= $this->Form->create('MRRHHHorasExtrasObreros', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Horas Extras Obreros </strong>
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
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar las Horas Extras?'), 'class'=>'btn btn-default pull-right']); ?>
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
				    	<p style="color: green"> <strong> HORAS EXTRAS ELABORADA </strong> </p>
				    </center>
			<?php }else if (@$status == 2){ ?>
				    <center>
				    	<p style="color: green"> <strong> HORAS EXTRAS COMPROMETIDA </strong> </p>
				    </center>
			<?php }else if (@$status == 4){ ?>
				    <center>
				    	<p style="color: green"> <strong> HORAS EXTRAS EN EJECUCION </strong> </p>
				    </center>
			<?php }else if (@$status == 5){ ?>
				    <center>
				    	<p style="color: green"> <strong> HORAS EXTRAS APROBADA </strong> </p>
				    </center>
			<?php }else if (@$status == 6){ ?>
				    <center>
				    	<p style="color: green"> <strong> HORAS EXTRAS LIQUIDADA </strong> </p>
				    </center>
			<?php }else if (@$status == 0){ ?>
					<center>
				    	<p style="color: blue"> <strong> HORAS EXTRAS GENERADA </strong> </p>
				    </center>
			<?php } ?>

		<!----------------------------------------------------------------------------------------------------------------------------->
	<?php if(!@$estatus){ ?>

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
					       <tr style="background-color: #a22818; color: white; text-align: center;">
							    <td> Cedula </td>
							    <td> Apellidos </td>
							    <td> Nombres </td>
							    <td> Cantidad de Dias </td>
							    <td> Dias No Laborables </td>
							    <td> Cant. de Horas </td>
							    <td> Cant. Hr. Ext. Diurnas </td>
							    <td> Cant. Hr. Ext. Nocturnas </td>
							</tr>
						</thead>
				    
					    <?php if (isset($data) && !empty($data)){

					    	foreach($data as $reg){ ?>

						    	<tr style="text-align: center;">
							        <td> <?= $reg->cedula; ?> </td>
							        <td> <?= $reg->apellidos; ?> </td>
							        <td> <?= $reg->nombres; ?> </td>
							        <td> <?= $reg->cantidad_dias; ?> </td>
							        <td> <?= $reg->dias_no_laborables; ?> </td>
							        <td> <?= $reg->cantidad_horas; ?> </td>
							        <td> <?= $reg->cantidad_horas_extra_diurnas; ?> </td>
							        <td> <?= $reg->cantidad_horas_extra_nocturnas; ?> </td>
							        <td>
							         	<a
							         		data-toggle = "modal" 
							         		id = "<?= $reg->id; ?>" 
										    data-id = "<?= $reg->id; ?>"
										    data-cedula = "<?= $reg->cedula; ?>"
								            data-cantidad_dias = "<?= $reg->cantidad_dias; ?>"
								            data-dias_no_laborables = "<?= $reg->dias_no_laborables; ?>"
								            data-cantidad_horas = "<?= $reg->cantidad_horas; ?>"
								            data-cantidad_horas_extra_diurnas = "<?= $reg->cantidad_horas_extra_diurnas; ?>"
								            data-cantidad_horas_extra_nocturnas = "<?= $reg->cantidad_horas_extra_nocturnas; ?>"
								            tp = "<?= $tps; ?>"
								            m = "<?= $ms; ?>"
								            o = "<?= $o; ?>"
								            onclick="asignar_he_obreros(this);" class="btn btn-info btn-sm">+
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
						    		<?php if(isset($n)){ ?>
						    			<strong>Total de Personal:</strong> <?= @$n->count() ?>
						    		<?php } ?>
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
					<?php } ?>


			<?php if(@$tps == 4){ ?>
				<center>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('action' => 'AcumuladoObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('action' => 'ResumenNominaObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<!--<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . $requisicion ,array('action' => 'RequisicionObrerosFijos', @$m, @$o, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
			    </center>
		    <?php }else if(@$tps == 5){ ?>
		    	<center>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('action' => 'AcumuladoObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('action' => 'ResumenNominaObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<!--<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . $requisicion ,array('action' => 'RequisicionObrerosContratados', @$m, @$o, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
			    </center>
			<?php } ?>

	  	<!------------------------------------------------------------------------------->

	  	<?php echo $this->Form->create('MRRHHHorasExtrasObreros', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>

		<br>
		<hr>
		<br>

		<table class="table table-responsive">
				<tr>
					<th> Descripcion (Requisicion) <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Descripcion de las Horas Extras', 'onkeyup' => 'mayus(this);', 'value' => @$concepto]); ?></th>
				</tr>
		</table>

		<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
		<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
		<?= $this->Form->hidden('o', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$o]);  ?>
		<!------------------------------------------------------------------------------------------------------->

			    <center>
			    	<?php  

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Generar las Horas Extras?')]);  

			    		echo $this->Form->end(); 
			    	?>
			    	<br>
			    	<?= $this->Form->postLink('Eliminar Horas Extras ', ['action' => 'eliminar', @$tps, @$ms], ['confirm' => __('Desea eliminar las Horas Extras ?'), 'class' => 'btn btn-danger btn-sm']) ?>
			    </center>

		<?php }else{ ?>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th></th>
						<td></td>
						<th class="text-center">
								<strong> Horas Extras  del Personal </strong>
							</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
			</table>

		  	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
		         <tr style="background-color: #a22818; color: white; text-align: center;">
				    <td> Cedula </td>
				    <td> Apellidos </td>
				    <td> Nombres </td>
				    <td> Cantidad de Dias </td>
				    <td> Dias No Laborables </td>
				    <td> Cant. de Horas </td>
				    <td> Cant. Hr. Ext. Diurnas </td>
				    <td> Cant. Hr. Ext. Nocturnas </td>
				</tr>
		    
			    <?php if (isset($data) && !empty($data)){
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td> <?= $reg->cantidad_dias; ?> </td>
				        <td> <?= $reg->dias_no_laborables; ?> </td>
				        <td> <?= $reg->cantidad_horas; ?> </td>
				        <td> <?= $reg->cantidad_horas_extra_diurnas; ?> </td>
				        <td> <?= $reg->cantidad_horas_extra_nocturnas; ?> </td>
				    </tr>
			    	<?php }  ?>


			    <?php } else{ ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php } ?>

			    	<br>
			    	<tr>
				    	<td colspan="7"> <strong>Total de Personal:</strong> <?= $n->count() ?></td>
				    </tr>

		  	</table>


				
			<?php if(@$tps == 4){ ?>
				<center>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('action' => 'AcumuladoObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('action' => 'ResumenNominaObrerosFijos', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . $requisicion ,array('action' => 'RequisicionObrerosFijos', @$ms, @$o, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    </center>
		    <?php }else if(@$tps == 5){ ?>
		    	<center>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('action' => 'AcumuladoObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Resumen Nomina ",array('action' => 'ResumenNominaObrerosContratados', @$ms, @$o, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . $requisicion ,array('action' => 'RequisicionObrerosContratados', @$ms, @$o, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
			    </center>
			<?php } ?>



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
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte HorasExtrasObreros ",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'ResumenHorasExtrasObreros', $reg->mes, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'Acumulado', $reg->mes, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); 	
				   
				         ?> 
				    </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'index', $reg->id_tipo_personal, $reg->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } } ?>
	</table>

<?php } ?>