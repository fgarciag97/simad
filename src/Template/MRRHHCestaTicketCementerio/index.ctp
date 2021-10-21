<?php $this->assign('title', 'Cesta Ticket Cementerio'); ?>

<?= $this->Form->create('MRRHHCestaTicketCementerio', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Cesta Ticket Cementerio </strong>
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
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['confirm' => __('Desea generar las Cesta Ticket?'), 'class'=>'btn btn-default pull-right']); ?>
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
				    	<p style="color: green"> <strong> CESTA TICKET ELABORADA </strong> </p>
				    </center>
			<?php }else if (@$status == 2){ ?>
				    <center>
				    	<p style="color: green"> <strong> CESTA TICKET COMPROMETIDA </strong> </p>
				    </center>
			<?php }else if (@$status == 4){ ?>
				    <center>
				    	<p style="color: green"> <strong> CESTA TICKET EN EJECUCION </strong> </p>
				    </center>
			<?php }else if (@$status == 5){ ?>
				    <center>
				    	<p style="color: green"> <strong> CESTA TICKET APROBADA </strong> </p>
				    </center>
			<?php }else if (@$status == 6){ ?>
				    <center>
				    	<p style="color: green"> <strong> CESTA TICKET LIQUIDADA </strong> </p>
				    </center>
			<?php }else if (@$status == 0){ ?>
					<center>
				    	<p style="color: blue"> <strong> CESTA TICKET GENERADA </strong> </p>
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
								        <a
							         		data-toggle = "modal" 
							         		id = "<?= $reg->id; ?>" 
										    data-id = "<?= $reg->id; ?>"
										    data-cedula = "<?= $reg->cedula; ?>"
								            data-dias_trabajados = "<?= $reg->dias_trabajados; ?>"
								            data-dias_faltados = "<?= $reg->dias_faltados; ?>"
								            data-dias_a_cancelar = "<?= $reg->dias_a_cancelar; ?>"
								            tp = "<?= $tps; ?>"
								            m = "<?= $ms; ?>"
								            onclick="asignar_ct_cementerio(this);" class="btn btn-info btn-sm">+
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


				<?php if($tps == 15){ ?> 
					<center>
				    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesCementerio', @$ms, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
				    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('action' => 'AcumuladoCementerio', @$ms,  "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
				    	<!--<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('action' => 'RequisicionCementerio', @$ms, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>-->
				    </center>
				<?php } ?>

	  	<!------------------------------------------------------------------------------->

	  	<?php echo $this->Form->create('MRRHHCestaTicketCementerio', array('class'=>'well', 'type' => 'post', 'url' => array('action' => 'procesar'))); ?>

		<br>
		<hr>
		<br>

		<table class="table table-responsive">
				<tr>
					<th> Descripcion (Requisicion) <?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Descripcion de las Cesta Ticket', 'onkeyup' => 'mayus(this);', 'value' => @$concepto]); ?></th>
				</tr>
		</table>

		<?= $this->Form->hidden('tps', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$tps]); ?>
		<?= $this->Form->hidden('ms', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => @$ms]);  ?>
		<!------------------------------------------------------------------------------------------------------->

			    <center>
			    	<?php  

			    		echo $this->Form->button('Procesar', ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Generar las Cesta Ticket?')]);  

			    		echo $this->Form->end(); 
			    	?>
			    	<br>
			    	<?= $this->Form->postLink('Eliminar Cesta Ticket ', ['action' => 'eliminar', @$tps, @$ms], ['confirm' => __('Desea eliminar las Cesta Ticket ?'), 'class' => 'btn btn-danger btn-sm']) ?>
			    </center>

		<?php }else{ ?>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th></th>
						<td></td>
						<th class="text-center">
								<strong> Cesta Ticket  del Personal </strong>
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
				    <td> Dias Trabajados </td>
				    <td> Dias Faltantes </td>
				    <td> Dias a Cancelar </td>
				    <td> Dias a Pagar </td>
				</tr>
		    
			    <?php if (isset($db) && !empty($db)){
			    	foreach($db as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td> <?= $reg->dias_trabajados; ?> </td>
				        <td> <?= $reg->dias_faltados; ?> </td>
				        <td> <?= $reg->dias_a_cancelar; ?> </td>
				        <td> <?=  $reg->dias_trabajados - $reg->dias_faltados; ?> </td>
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


					<?php if($tps == 15){ ?> 
					<center>
				    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'ReportesCementerio', @$ms, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
				    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('action' => 'AcumuladoCementerio', @$ms,  "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
				    	<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Nº de Requision: " . @$requisicion ,array('action' => 'RequisicionCementerio', @$ms, @$requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
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
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte CestaTicketCementerio ",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'ResumenCestaTicketCementerio', $reg->mes, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado ",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'Acumulado', $reg->mes, $requisicion, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')); 	
				   
				         ?> 
				    </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'index', $reg->id_tipo_personal, $reg->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } } ?>
	</table>

<?php } ?>