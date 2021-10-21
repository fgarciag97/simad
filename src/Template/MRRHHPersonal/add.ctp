<?php $this->assign('title', 'Registrar Personal'); ?>

	<?= $this->Form->create($personal, ['class'=>'well']);?>

	<div id="main-container2">

		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DEL TRABAJADOR</strong></th>
					<th></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Cedula</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'readonly', 'onKeyPress' => 'return soloNum(event);', 'value' => $cedula]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Rif</span>
					<?= $this->Form->input('rif', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => 'V-']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Numero de Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div></td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Nombres</span>
					<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Apellidos</span>
					<?= $this->Form->input('apellidos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Genero</span>
					<?= $this->Form->select('genero', ['MASCULINO' => 'MASCULINO', 'FEMENINO' => 'FEMENINO'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?>
				</div></td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Estado Civil</span>
					<?= $this->Form->select('estado_civil', ['SOLTERO/A' => 'SOLTERO/A', 'CASADO/A' => 'CASADO/A', 'VIUDO/A' => 'VIUDO/A'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Grado Instruccion</span>
					<?= $this->Form->select('grado', $grado, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Estatus</span>
					<?= $this->Form->select('status', ['1' => 'ACTIVO', '0' => 'SUSPENDIDO'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion</span>
					<?= $this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Correo Electronico</span>
					<?= $this->Form->input('correo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Hijos</span>
					<?= $this->Form->input('hijos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Ente Adcrito</span>
					<?= $this->Form->select('ente_adscrito', $entes, [ 'empty' => '--Seleccione--', 'type' => 'text', 'label' => false, 'class'=> 'form-control']); ?>
				</div></td>
			</tr>
		</table>

		<h4 class="text-center"><small><strong>Rellene solo los datos que sean Necesarios</strong></small></h4>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Años de Servicio en otras Instituciones Publica</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Fecha de Ingreso a la Institucion</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Fecha de Egreso de la Institucion</strong></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon"></span> 	
					<?= $this->Form->input('ano_servicio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','value' => 0]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<input type="date" name="fecha_ingreso_institucion" required>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"></span>
					<input type="date" name="fecha_egreso_institucion">
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Beca Escolar Inicial</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Beca Escolar Primaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Beca Escolar Secundaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Beca Escolar Universitaria</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Beca Escolar Discapacidad</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Prima Hogar</strong></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
							<?= $this->Form->input('cantidad_beca_inicial', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 1, 'placeholder' => '0']); ?>
						</div>
					</div>
				</td>

				<td><div id="" class="input-group">
							<?= $this->Form->input('cantidad_beca_primaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 1, 'placeholder' => '0']); ?>
						</div>
					</div>
				</td>

				<td><div id="" class="input-group">
							<?= $this->Form->input('cantidad_beca_secundaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 1, 'placeholder' => '0']); ?>
						</div>
					</div>
				</td>

				<td><div id="" class="input-group">
							<?= $this->Form->input('cantidad_beca_universitaria', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 1, 'placeholder' => '0']); ?>
						</div>
					</div>
				</td>

				<td><div id="" class="input-group">
							<?= $this->Form->input('cantidad_beca_discapacidad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 1, 'placeholder' => '0']); ?>
						</div>
					</div>
				</td>

				<td><div class="container-asignaciones">
					<div class="checkbox-container green">
						<h3><small> Asignar </small></small></h3>
						<?= $this->Form->checkbox('prima_hogar', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle15']); ?>
						<label for="toggle15"></label>
						<div class="active-circle"></div>
					</div>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">

			<thead>
				<tr>
					<th class="text-center" style="border: solid 5px white;"><strong>Aporte de Servicio Funerario</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Aporte a la Caja de Ahorro</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>% Caja de Ahorro</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Sindicato</strong></th>
					<th class="text-center" style="border: solid 5px white;"><strong>Asoc. Funeraria</strong></th>
					<!--<th class="text-center" style="border: solid 5px white;"><strong>Prestamo Caja de Ahorro</strong></th>-->
				</tr>
			</thead>

			<tr>
				<td><div class="container-asignaciones">
					<div class="checkbox-container green">
						<h3><small>Asignar</small></h3>
						<?= $this->Form->checkbox('funeraria', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle8']); ?>
						<label for="toggle8"></label>
						<div class="active-circle"></div>
					</div>
				</div></td>

				<td><div class="container-asignaciones">
					<div class="checkbox-container green">
						<h3><small>Caja de Ahorro</small></h3>
							<?= $this->Form->checkbox('caja_ahorro', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle7', 'onchange' => "javascript:showContent()"]); ?>
						<label for="toggle7"></label>
						<div class="active-circle"></div>
					</div>
				</div></td>

				<td><div class="container-asignaciones" style="margin-right:40%; display: none; color: #000;" id="content">
					<h5><small>Porcentaje</small></h5>
					<div class="radio">
						<label><input type="radio" name="porcentaje_caja" checked value="0.05">5%</label>
						<label><input type="radio" name="porcentaje_caja" checked value="0.10">10%</label>
						<label><input type="radio" name="porcentaje_caja" checked value="0.15">15%</label>
						<label><input type="radio" name="porcentaje_caja" value="0.20">20%</label>
					</div>
				</div></td>
				<td><div class="container-asignaciones">
						<div class="checkbox-container green">
							<h3><small> Asignar </small></small></h3>
							<?= $this->Form->checkbox('sindicato', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle16']); ?>
							<label for="toggle16"></label>
							<div class="active-circle"></div>
						</div>
					</div>
				</td>
				<td><div class="container-asignaciones">
						<div class="checkbox-container green">
							<h3><small> Asignar </small></small></h3>
							<?= $this->Form->checkbox('asociacion_funeraria', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle17']); ?>
							<label for="toggle17"></label>
							<div class="active-circle"></div>
						</div>
					</div>
				</td>

				<!-- <td><div id="" class="input-group">
							<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0.00 Bs.S']); ?>
						</div>
					</div>
				</td> -->
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<tbody><div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
						<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-warning']); ?>
						</span>
						<?= $this->Form->submit('Siguiente', ['class'=>'btn btn-success pull-right']); ?>
					</div>
				</div></tbody>
			</tr>
		</table>

		<br><br><br>
	</div>
	<?php echo $this->Form->end(); ?>