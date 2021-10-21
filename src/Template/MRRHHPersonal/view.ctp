<?php $this->assign('title', 'Ver Personal'); ?>

<?php $nominas = ""; ?>
<?php if($personal->status == 1) $status = "ACTIVO"; else $status = "SUSPENDIDO"; ?>


<div class="" id="main-container2">
	<!-- <legend bgcolor="lightblue" style="text-align: center;"> Ficha de Trabajador</legend> -->

	<table class="table table-responsive" >

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DEL TRABAJADOR</strong></th>
					<th></th>
				</tr>
			</thead>

			<tr>
					<td><div id="" class="input-group" >
							<span class="input-group-addon">Cedula</span>
							<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cedula]); ?>
						</div></td>
					<td><div id="" class="input-group">
							<span class="input-group-addon">RIF</span>
							<?= $this->Form->input('rif', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->rif]); ?>
						</div>
					</td>
					<td><div id="" class="input-group">
							<span class="input-group-addon">Numero de Telefono</span>
							<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->telefono]); ?>
						</div>
					</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Nombres</span>
							<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->nombres]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Apellidos</span>
							<?= $this->Form->input('apellidos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->apellidos]); ?>
						</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Genero</span>
						<?= $this->Form->input('genero', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->genero]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Estado Civil</span>
							<?= $this->Form->input('estado_civil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->estado_civil]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">G. Instruccion</span>
							<?= $this->Form->input('grado', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->grado]); ?>
						</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Estatus</span>
						<?= $this->Form->input('status', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => $status]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Direccion</span>
							<?= $this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->direccion]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
							<span class="input-group-addon">Correo Electrónico</span>
							<?= $this->Form->input('correo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->correo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Hijos</span>
							<?= $this->Form->input('hijos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'value' => $personal->hijos, 'readonly']); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
							<span class="input-group-addon">Ente Adcrito</span>
							<?= $this->Form->input('ente_adscrito', [ 'empty' => '--Seleccione--', 'type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => $personal->ente_adscrito, 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Años de Servicio en otras Instituciones Publica</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Fecha de Ingreso a la Institucion</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Fecha de Egreso de la Institucion</strong></th>
				</tr>
			</thead>

			<tr>

				<td ><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('ano_servicio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'readonly','value' => $personal->ano_servicio]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('fecha_ingreso_institucion', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => @date_format($personal->fecha_ingreso_institucion, "d/m/Y")]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('fecha_egreso_institucion', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => @date_format($personal->fecha_egreso_institucion, "d/m/Y")]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Beca Escolar Inicial</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Beca Escolar Primaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Beca Escolar Secundaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Beca Escolar Universitaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Beca Escolar Discapacidad</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Posee Prima Hogar</strong></th>
				</tr>
			</thead>
			
			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('cantidad_beca_inicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cantidad_beca_inicial]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('cantidad_beca_primaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cantidad_beca_primaria]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('cantidad_beca_secundaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cantidad_beca_secundaria]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('cantidad_beca_universitaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cantidad_beca_universitaria]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<?= $this->Form->input('cantidad_beca_discapacidad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->cantidad_beca_discapacidad]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('prima_hogar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($personal->prima_hogar) ?  "Si" : "No"]); ?></div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">

			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Aporte de Servicio Funerario</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Aporte a la Caja de Ahorro</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>%</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Sindicato</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Asoc. Funeraria</strong></th>
					<!-- <th class="text-center" style="border: solid 5px white;"><strong>Prestamo Caja de Ahorro</strong></th> -->
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('funeraria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($personal->funeraria) ?  "Si" : "No"]); ?>
					</div>
				</td>				
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($personal->caja_ahorro) ?  "Si" : "No"]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Porcentaje</span>
							<?= $this->Form->input('porcentaje_caja', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->porcentaje_caja]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($personal->sindicato) ?  "Si" : "No"]); ?></div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('asociacion_funeraria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  (@$personal->asociacion_funeraria) ?  "10.00" : "No"]); ?></div>
				</td>

				<!-- <td><div id="" class="input-group">
							<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'value' => $personal->prestamo_caja_ahorro, 'readonly']); ?>
					</div>
				</td> -->


				<!--<td><div id="" class="input-group">
						<span class="input-group-addon"></span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  (@$depositario_judicial) ?  "0" : "0"]); ?>
					</div>
				</td>-->
			</tr>
		</table>


		<center>
		    <div class="input-group">
			    <?= $this->Html->link(__('Editar Datos Personales'), ['action' => 'editar', $personal->cedula, $nominas], ['class'=>'btn btn-sm btn-default']) ?>
		    </div>
		</center>

		<br><br><br><br>

		
		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS NOMINA</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>


<!-- --------------------------------------------------------------------------------------->



	<?php if(isset($directivo)){ $nominas .= "-" . $directivo->tipo_personal; ?>
		<table class="table table-responsive">
			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "DIRECTIVOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->denominacion_grado_nivel]); ?>
					</div>
				</td>

				<?php
					if($directivo->sueldo != 0.00){
						$sueldo = $directivo->sueldo;
					}else{
						$sueldo = $directivo->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($directivo->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->depositario_judicial]); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td> <br>
						<div id="" class="input-group">
						<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
						<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $directivo->prestamo_caja_ahorro]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $directivo->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 1, $directivo->tipo_personal], ['class'=>'btn btn-sm btn-default']); ?>
		    </div>
		</center>

		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($empleado_contratado)){ $nominas .= "-" . $empleado_contratado->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS CONTRATADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($empleado_contratado->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($empleado_contratado->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_contratado->prestamo_caja_ahorro]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $empleado_contratado->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 1, $empleado_contratado->tipo_personal], ['class'=>'btn btn-sm btn-default']); ?>
		    </div>
		</center>
		<br>
		

<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($empleado_fijo)){ $nominas .= "-" . $empleado_fijo->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
		
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS FIJOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($empleado_fijo->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($empleado_fijo->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $empleado_fijo->dias_dejados_cancelar]); ?>
					</div>
				</td>

			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $empleado_fijo->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 1, $empleado_fijo->tipo_personal], ['class'=>'btn btn-sm btn-default']); ?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($obrero_contratado)){ $nominas .= "-" . $obrero_contratado->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS CONTRATADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($obrero_contratado->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($obrero_contratado->sindicato) ?  "10.00" : "1%"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_contratado->dias_dejados_cancelar]); ?>
					</div>
				</td>

			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $obrero_contratado->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 2, $obrero_contratado->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($obrero_fijo)){ $nominas .= "-" . $obrero_fijo->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS FIJOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($obrero_fijo->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($obrero_fijo->sindicato) ?  "10.00" : "1%"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_fijo->dias_dejados_cancelar]); ?>
					</div>
				</td>

			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $obrero_fijo->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 2, $obrero_fijo->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($obrero_no_permanente)){ $nominas .= "-" . $obrero_no_permanente->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS NO PERMANENTES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($obrero_no_permanente->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($obrero_no_permanente->sindicato) ?  "10.00" : "1%"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_no_permanente->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $obrero_no_permanente->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 2, $obrero_no_permanente->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($pensionados_especiales_empleados)){ $nominas .= "-" . $pensionados_especiales_empleados->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS EMPLEADOS ESPECIALES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($pensionados_especiales_empleados->sueldo != 0.00){
						$sueldo = $pensionados_especiales_empleados->sueldo;
					}else{
						$sueldo = $pensionados_especiales_empleados->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($pensionados_especiales_empleados->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_empleados->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $pensionados_especiales_empleados->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $pensionados_especiales_empleados->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($pensionados_especiales_obreros)){ $nominas .= "-" . $pensionados_especiales_obreros->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS OBREROS ESPECIALES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($pensionados_especiales_obreros->sueldo != 0.00){
						$sueldo = $pensionados_especiales_obreros->sueldo;
					}else{
						$sueldo = $pensionados_especiales_obreros->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($pensionados_especiales_obreros->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_especiales_obreros->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $pensionados_especiales_obreros->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $pensionados_especiales_obreros->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($pensionados_sobrevivientes_empleados)){ $nominas .= "-" . $pensionados_sobrevivientes_empleados->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS EMPLEADOS SOBREVIVIENTES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($pensionados_sobrevivientes_empleados->sueldo != 0.00){
						$sueldo = $pensionados_sobrevivientes_empleados->sueldo;
					}else{
						$sueldo = $pensionados_sobrevivientes_empleados->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($pensionados_sobrevivientes_empleados->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_empleados->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>

		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $pensionados_sobrevivientes_empleados->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $pensionados_sobrevivientes_empleados->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



		<?php } if(isset($pensionados_sobrevivientes_obreros)){ $nominas .= "-" . $pensionados_sobrevivientes_obreros->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS OBREROS SOBREVIVIENTES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($pensionados_sobrevivientes_obreros->sueldo != 0.00){
						$sueldo = $pensionados_sobrevivientes_obreros->sueldo;
					}else{
						$sueldo = $pensionados_sobrevivientes_obreros->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($pensionados_sobrevivientes_obreros->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionados_sobrevivientes_obreros->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $pensionados_sobrevivientes_obreros->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $pensionados_sobrevivientes_obreros->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($pensionado_empleado)){ $nominas .= "-" . $pensionado_empleado->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS PENSIONADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($pensionado_empleado->sueldo != 0.00){
						$sueldo = $pensionado_empleado->sueldo;
					}else{
						$sueldo = $pensionado_empleado->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->cargo]); ?>
					</div>
				</td>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->numero_cuenta]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->depositario_judicial]); ?>
					</div>
				</td>

			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $pensionado_empleado->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
			
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $pensionado_empleado->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $pensionado_empleado->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



<?php } if(isset($obrero_pensionados_sobrevivientes_empleados)){ $nominas .= "-" . $obrero_pensionados_sobrevivientes_empleados->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS PENSIONADOS SOBREVIVIENTES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($obrero_pensionados_sobrevivientes_empleados->sueldo != 0.00){
						$sueldo = $obrero_pensionados_sobrevivientes_empleados->sueldo;
					}else{
						$sueldo = $obrero_pensionados_sobrevivientes_empleados->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($obrero_pensionados_sobrevivientes_empleados->sindicato) ?  "10.00" : "1%"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_sobrevivientes_empleados->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $obrero_pensionados_sobrevivientes_empleados->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $obrero_pensionados_sobrevivientes_empleados->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($obrero_pensionados_especiales_empleados)){ $nominas .= "-" . $obrero_pensionados_especiales_empleados->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS PENSIONADOS ESPECIALES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($obrero_pensionados_especiales_empleados->sueldo != 0.00){
						$sueldo = $obrero_pensionados_especiales_empleados->sueldo;
					}else{
						$sueldo = $obrero_pensionados_especiales_empleados->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($obrero_pensionados_especiales_empleados->sindicato) ?  "10.00" : "1%"]); ?>
					</div>
				</td>-->
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $obrero_pensionados_especiales_empleados->numero_cuenta]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $obrero_pensionados_especiales_empleados->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 4, $obrero_pensionados_especiales_empleados->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($jubilado_empleado)){ $nominas .= "-" . $jubilado_empleado->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "JUBILADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "EMPLEADOS JUBILADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($jubilado_empleado->sueldo != 0.00){
						$sueldo = $jubilado_empleado->sueldo;
					}else{
						$sueldo = $jubilado_empleado->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->cargo]); ?>
					</div>
				</td>
				<!--<td style="width: 20%;"><div id="" class="input-group">
						<span class="input-group-addon">Sindicato</span>
						<?= $this->Form->input('sindicato', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  ($jubilado_empleado->sindicato) ?  "1%" : "10.00"]); ?>
					</div>
				</td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_empleado->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $jubilado_empleado->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 3, $jubilado_empleado->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($jubilado_obrero)){ $nominas .= "-" . $jubilado_obrero->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "JUBILADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "OBREROS JUBILADOS"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($jubilado_obrero->sueldo != 0.00){
						$sueldo = $jubilado_obrero->sueldo;
					}else{
						$sueldo = $jubilado_obrero->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->cargo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $jubilado_obrero->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $jubilado_obrero->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 3, $jubilado_obrero->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


		<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($cementerio)){ $nominas .= "-" . $cementerio->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "CEMENTERIO"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "CEMENTERIO"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($cementerio->sueldo != 0.00){
						$sueldo = $cementerio->sueldo;
					}else{
						$sueldo = $cementerio->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->cargo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $cementerio->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $cementerio->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 6, $cementerio->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->




	<?php } if(isset($comision_servicio)){ $nominas .= "-" . $comision_servicio->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "COMISION DE SERVICIO"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "COMISION DE SERVICIO"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($comision_servicio->sueldo != 0.00){
						$sueldo = $comision_servicio->sueldo;
					}else{
						$sueldo = $comision_servicio->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->cargo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $comision_servicio->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $comision_servicio->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 6, $comision_servicio->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->




	<?php } if(isset($honorario_profesionales)){ $nominas .= "-" . $honorario_profesionales->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "HONORARIOS PROFESIONALES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "HONORARIOS PROFESIONALES"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->denominacion_grado_nivel]); ?>
					</div>
				</td>
				
				<?php
					if($honorario_profesionales->sueldo != 0.00){
						$sueldo = $honorario_profesionales->sueldo;
					}else{
						$sueldo = $honorario_profesionales->sueldo_base;
					}
				?>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($sueldo, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->cargo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $honorario_profesionales->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $honorario_profesionales->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 6, $honorario_profesionales->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>


<!-- --------------------------------------------------------------------------------------->



	<?php } if(isset($proteccion_civil)){ $nominas .= "-" . $proteccion_civil->tipo_personal; ?>

	<table class="table table-responsive">

			<thead style="background-color: #ddd;">
				<tr>
					<th></th>
					<th style="color: black; width: 100%;">Asignado(a), a Nomina de:</th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Nomina</span>
						<?= $this->Form->input('tipo_nomina', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PROTECCION CIVIL"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Tipo Personal</span>
						<?= $this->Form->input('tipo_personal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  "PROTECCION CIVIL"]); ?>
					</div>	
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Años de Antiguedad</span>
						<?= $this->Form->input('antiguedad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->antiguedad]); ?>
					</div>	
				</td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->input('grupo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->grupo]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->input('denominacion_grado_nivel', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->denominacion_grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Sueldo Base</span>
						<?= $this->Form->input('sueldo_base', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  number_format($proteccion_civil->sueldo_base, 2, ',', '.')]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
						<?= $this->Form->input('cargo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->cargo]); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			 <tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaraia</span>
						<?= $this->Form->input('banco', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->banco]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->numero_cuenta]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial</span>
						<?= $this->Form->input('depositario_judicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->depositario_judicial]); ?>
					</div>
				</td>
			</tr>

			<tr>
				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
					<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->prestamo_caja_ahorro]); ?>
					</div>
				</td>

				<td> <br>
					<div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
					<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' =>  $proteccion_civil->dias_dejados_cancelar]); ?>
					</div>
				</td>
			</tr>
		</table>

		<center>
		    <div class="input-group">
			    	<?= $this->Html->link('Eliminar de esta Nomina', ['action' => 'desasignar', $personal->cedula, $proteccion_civil->tipo_personal], ['class'=> 'btn btn-sm btn-default', 'confirm' => ('Seguro que Desea Eliminarlo de Nómina?')]); ?>

			    	<?= $this->Html->link(__('Editar esta Nomina'), ['action' => 'ednomina', $personal->cedula, 5, $proteccion_civil->tipo_personal], ['class'=>'btn btn-sm btn-default']);?>
		    </div>
		</center>
		<br>
	<?php } ?>

	<hr>

	<center>
		<div class="container-anuncio">
			 <p class="login-box-msg" style="font-size: 10pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> !IMPORTANTE¡ </strong></p>
			<h4 style="font-size: 10pt;"><small><strong> Debe asignar al trabajador en una nomina para que el sistema realice el calculo correspondiente a su asignaciones y deducciones, al no asignarlo no se vera reflejado en ninguna tipo de nomina sin embargo sus datos permaneceran registrados dentro del sistema. Colocar al trabajador en estatus "suspendido", significara que seguira dentro de la nomina, pero sus calculos de nomina seran evaluados en Bs.S 0,00 </strong></small></h4>

			<h4 style="font-size: 10pt;"><small><strong> Si el trabajador es depositario Judicial indique al momento de asignar a nomina, este dato sera almacenado para su descuento en nomina.</strong></small></h4><!--
					<p><small style="font-size: 8pt;">ir atras generaria un error por razones de manipulacion de datos de los trabajadores</small></p>-->
		</div>
	</center>

	<br><br>

	<div class="form-group">
	    <div class="input-group pull-left">
	    	<input class=" btn btn-danger" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
		    	<!--<?= $this->Html->link('Ir Atrás', ['action' => '$_SERVER["HTTP_REFERER"]'], ['class'=> 'btn btn-danger btn-sm']); ?> -->
	    </div>

	    <div class="input-group pull-right">

	    	<?= $this->Html->link(__('Constancia de Trabajo'), ['action' => 'constancia', $personal->cedula], ['class'=>'btn btn-sm btn-default', 'target' => '_blank']) ;?>

	    	<?= $this->Html->link(__('Asignar Nomina'), ['action' => 'asignar', $personal->cedula], ['class'=>'btn btn-sm btn-default']) ;?>

	    	<?= $this->Html->link(__('Historial de Nominas'), ['action' => 'historial', $personal->cedula], ['class'=>'btn btn-sm btn-default']) ;?>

	    	<?php if($personal->status == 1){ ?>
	    		<?= $this->Html->link(__('Suspender Trabajador'), ['action' => 'suspender', $personal->cedula], ['class'=>'btn btn-sm btn-danger']) ;?>
	    	<?php }else{ ?>

	    		<?= $this->Html->link(__('Activar Trabajador'), ['action' => 'activar', $personal->cedula], ['class'=>'btn btn-sm btn-info']) ?>

	    	<?php } ?>
	    </div>
	</div>

	<br><br><br>
</div>