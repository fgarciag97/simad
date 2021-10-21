<?php $this->assign('title', 'Registrar Personal en Nomina'); ?>

	<?= $this->Form->create(@$personal, ['class'=>'well']);?>

	<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DE NOMINA</strong></th>
					<th></th>
				</tr>
			</thead>
	</table>

	<table class="table table-responsive">
			<tr>
					<td><div id="" class="input-group">
							<span class="input-group-addon">Tipo de Nomina</span>
								<?= $this->Form->select('tipo_nomina', $tipo_nomina, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'id' => 'tipo_nomina', 'onchange' => 'cargar_tipo_personal(this);']); ?>
						</div>
					</td>

					<td><div id="" class="input-group">
							<span class="input-group-addon">Tipo de Personal</span>
								<select class="form-control" required name="tipo_personal" id='tipo_personal' required onchange='cargar_cargos(this);'>
					              	<option disabled selected>--Seleccione--</option>
					            </select>
						</div>
					</td>
					<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
								<select class="form-control" required name="cargo" id='cargo' required>
					              	<option disabled selected>--Seleccione--</option>
					            </select>
						</div>	</td>
			</tr>
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<select class="form-control" required name="nivel" id='grupo' required>
				              	<option disabled selected>--Seleccione--</option>
				        </select>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<select class="form-control" required name="grado_nivel" id='grado_niveles'>
				              	<option disabled selected>--Seleccione--</option>
				        </select>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial (%)</span>
						<?= $this->Form->select('depositario_judicial_monto', ['0' => '0','0.30' => '0.30', '0.40'=>'0.40','0.50'=> '0.50','0.60' =>'0.60'], ['empty' => '-- Seleccione solo si aplica--', 'class'=> 'form-control', 'label' => false, 'escape' => false]); ?>
					</div>					
				</td>
			</tr>
			<tr>		
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial (Monto)</span>
						<?= $this->Form->input('depositario_judicial', ['class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onkeyup' => 'soloNum(this)', 'maxlength' => '20', 'value' => 0]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaria</span>
						<?= $this->Form->select('banco', ['TESORO' => 'TESORO'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false]); ?>
					</div>					
				</td>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onkeyup' => 'soloNum(this)', 'maxlength' => '20', 'value' => @$existencia[0]['numero_cuenta']]); ?>
					</div>		
				</td>
			</tr>

			<tr>		
				<td><div id="display" class="input-group">
						<span class="input-group-addon">Sueldo</span>
						<input type="text" name="sueldo" class= 'form-control' onkeyup = 'soloNum(this)' maxlength = '20' value = '0'>
					</div>
				</td>

				<td><br><div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
							<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0.00 Bs.S']); ?>
					</div>
				</td>

				<td><br><div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
							<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0.00 Bs.S']); ?>
					</div>
				</td>

			</tr>
	</table>
	
	<table class="table table-responsive">
			<tr>
				<td><div class="form-group">
						<div class="input-group pull-right ">
						    	<?= $this->Form->submit('Procesar', ['class'=>'btn btn-success pull-right']); ?>
					    </div>
					</div>				
				</td>
			</tr>
	</table>
	<div class="container-anuncio">
		 <p class="login-box-msg" style="font-size: 10pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> !IMPORTANTE¡ </strong></p>
		<h4><small><strong> Debes Culminar este formulario para la asignacion de nomina al trabajador </strong></small></h4><!--
				<p><small style="font-size: 8pt;">ir atras generaria un error por razones de manipulacion de datos de los trabajadores</small></p>-->
	</div>
			

		

		<?php echo $this->Form->end();?>

