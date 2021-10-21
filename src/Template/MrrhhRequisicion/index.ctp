<?php $this->assign('title', 'Requisición'); ?>

	<?= $this->Form->create('MrrhhRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MrrhhRequisicion', 'action' => 'index'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center"><strong>REQUISICION</strong></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Tipo de Personal</span>
					<?= $this->Form->select('tipo_personal', $tipo_personal, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'required']); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
				<span class="input-group-addon">Año</span>
					<?= $this->Form->select('ano', $anoo, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'required']); ?>
				</div>
			</td>


			<td><div id="" class="input-group">
					<span class="input-group-addon">Mes</span>
					<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'required']); ?>	
				</div>
			</td>

			<td><div class="input-group">
	    			<?= $this->Form->button('Generar', ['class'=>'btn btn-md btn-default pull-right']); ?>
			    </div>
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>


<!----------------------- NOMINA -------------------------->


<?php if(isset($data_nomina)){ ?>

	<div class="well">

	    <center>
	    	<p>NOMINA</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Quicena-Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			    
			</tr>
	    
		    <?php if (isset($data_nomina) && !empty($data_nomina) && $data_nomina->count() != 0){
		    	foreach($data_nomina as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;


					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					foreach($quincenad as $regq){
						if($reg->quincena == $regq->id){
							$qd = $regq->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 4){
							$status = "En Ejecucion";
					}if($reg->status == 5){
							$status = "Aprobada";
					}if($reg->status == 6){
							$status = "Liquidada";
					}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $qd . " - " . $md ; ?> </td>
				        <td>
				        	<?php
				        		if($tps == 1){
				        		 	echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		 	
				        		}else if($tps == 2){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 3){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaDirectivos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 4){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 5){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 6){
				        			echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}

				        		
				        	?>
				        </td>
				        <td> <?= $status ?> </td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>


<!----------------------- BONO ESTABILIDAD -------------------------->


<?php if(isset($data_be)){ ?>

	<div class="well">

	    <center>
	    	<p>BONO DE ESTABILIDAD</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Quicena-Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			    
			</tr>
	    
		    <?php if (isset($data_be) && !empty($data_be) && $data_be->count() != 0){
		    	foreach($data_be as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;


					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					foreach($quincenad as $regq){
						if($reg->quincena == $regq->id){
							$qd = $regq->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 4){
							$status = "En Ejecucion";
					}if($reg->status == 5){
							$status = "Aprobada";
					}if($reg->status == 6){
							$status = "Liquidada";
					}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $qd . " - " . $md ; ?> </td>
				        <td>
				        	<?php
				        		if($tps == 1){
				        		 	//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		 	
				        		}else if($tps == 2){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 3){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaDirectivos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 4){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 5){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 6){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}

				        		
				        	?>
				        </td>
				        <td> <?= $status ?> </td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>


<!----------------------- BONO ESTABILIDAD -------------------------->


<?php if(isset($data_am)){ ?>

	<div class="well">

	    <center>
	    	<p>ASISTENCIA MEDICA</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Quicena-Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			    
			</tr>
	    
		    <?php if (isset($data_am) && !empty($data_am) && $data_am->count() != 0){
		    	foreach($data_am as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;


					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					foreach($quincenad as $regq){
						if($reg->quincena == $regq->id){
							$qd = $regq->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 4){
							$status = "En Ejecucion";
					}if($reg->status == 5){
							$status = "Aprobada";
					}if($reg->status == 6){
							$status = "Liquidada";
					}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $qd . " - " . $md ; ?> </td>
				        <td>
				        	<?php
				        		if($tps == 1){
				        		 	//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		 	
				        		}else if($tps == 2){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaEmpleadosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 3){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'ResumenNominaDirectivos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 4){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 5){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosContratados', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}else if($tps == 6){
				        			//echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'ResumenNominaObrerosFijos', $ms, 1, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        		}

				        		
				        	?>
				        </td>
				        <td> <?= $status ?> </td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>

<!----------------------- CESTA TICKET -------------------------->

<?php if(isset($data_cesta_ticket)){ ?>

	<div class="well">

	    <center>
	    	<p>CESTA TICKET</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			    
			</tr>
	    
		    <?php if (isset($data_cesta_ticket) && !empty($data_cesta_ticket) && $data_cesta_ticket->count() != 0){
		    	foreach($data_cesta_ticket as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;

					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 3 OR $reg->status == 4){
							$status = "Liquidada";}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $md; ?> </td>
				        <td> 
				        	<?php
				        		if($tps == 1){

				        		}else if($tps == 2){

				        		}else if($tps == 3){

				        		}else if($tps == 4){

				        		}else if($tps == 5){

				        		}else if($tps == 6){

				        		}else if($tps == 7){

				        		}else if($tps == 8){

				        		}else if($tps == 9){

				        		}else if($tps == 10){

				        		}else if($tps == 11){

				        		}else if($tps == 12){

				        		}else if($tps == 13){

				        		}else if($tps == 14){

				        		}else if($tps == 15){

				        		}else if($tps == 16){

				        		}else if($tps == 17){

				        		}
				        	?>
				        </td>
				        <td> <?= $status ?></td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>




<!----------------------- HORAS EXTRAS  -------------------------->

<?php if(isset($data_horas_extras)){ ?>

	<div class="well">

	    <center>
	    	<p>HORAS EXTRAS</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			    
			</tr>
	    
		    <?php if (isset($data_horas_extras) && !empty($data_horas_extras) && $data_horas_extras->count() != 0){
		    	foreach($data_horas_extras as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;

					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 3 OR $reg->status == 4){
							$status = "Liquidada";}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $md; ?> </td>
				        <td>
				        	<?php
				        		if($tps == 1){

				        		}else if($tps == 2){

				        		}else if($tps == 3){

				        		}else if($tps == 4){

				        		}else if($tps == 5){

				        		}else if($tps == 6){

				        		}else if($tps == 7){

				        		}else if($tps == 8){

				        		}else if($tps == 9){

				        		}else if($tps == 10){

				        		}else if($tps == 11){

				        		}else if($tps == 12){

				        		}else if($tps == 13){

				        		}else if($tps == 14){

				        		}else if($tps == 15){

				        		}else if($tps == 16){

				        		}else if($tps == 17){

				        		}
				        	?>
				        </td>
				        <td> <?= $status ?></td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>



<!----------------------- VACACIONES -------------------------->

<?php if(isset($data_vacaciones)){ ?>

	<div class="well">

	    <center>
	    	<p>VACACIONES</p>
	    </center>

		<table class="table" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
	        <tr style="background-color: #a22818; color: white; text-align: center;">
			    <td> Requisición </td>
			    <td> Tipo Nomina </td>
			    <td> Mes </td>
			    <td> Reporte  </td>
			    <td> Estatus </td>
			</tr>
	    
		    <?php if (isset($data_vacaciones) && !empty($data_vacaciones) && $data_vacaciones->count() != 0){
		    	foreach($data_vacaciones as $reg){ 

		    		$requisicion = $reg->id;
					$n = 10 - strlen($requisicion);
					$a = '';
					for($i=0; $i < $n; $i++){
					    $a .= "0";
					}
					$a .= $requisicion;

					foreach($data_tp as $regtp){
						if($reg->id_tipo_personal == $regtp->id){
							$tipo_personal = $regtp->denominacion;
						}
					}

					foreach($mesd as $regm){
						if($reg->mes == $regm->id){
							$md = $regm->denominacion;
						}
					}

					if($reg->status == 0){
							$status = "Abierta";
					}else if($reg->status == 1){
							$status = "Elaborada";
					}else if($reg->status == 2){
							$status = "Comprometida";
					}if($reg->status == 3 OR $reg->status == 4){
							$status = "Liquidada";}
				?>
				    <tr style="text-align: center;">
				        <td> <?= $a; ?> </td>
				        <td> <?= strtoupper($tipo_personal) ?> </td>
				        <td> <?= $md; ?> </td>
				        <td>
				        	<?php
				        		if($tps == 1){

				        		}else if($tps == 2){

				        		}else if($tps == 3){

				        		}else if($tps == 4){

				        		}else if($tps == 5){

				        		}else if($tps == 6){

				        		}else if($tps == 7){

				        		}else if($tps == 8){

				        		}else if($tps == 9){

				        		}else if($tps == 10){

				        		}else if($tps == 11){

				        		}else if($tps == 12){

				        		}else if($tps == 13){

				        		}else if($tps == 14){

				        		}else if($tps == 15){

				        		}else if($tps == 16){

				        		}else if($tps == 17){

				        		}
				        	?>
				        </td>
				        <td> <?= $status ?></td>
				    </tr>
			    
		    	<?php }  ?>

		    <?php }else{ ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php } ?>
	  	</table>
	</div>
<?php }  ?>