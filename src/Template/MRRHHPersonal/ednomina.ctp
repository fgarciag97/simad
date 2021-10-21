<?php $this->assign('title', 'Editar Asignación de Nomina'); ?>

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
								<?= $this->Form->select('tipo_nomina', $tipo_nomina, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $tn, 'disabled']); ?>
						</div>
					</td>

					<td><div id="" class="input-group">
							<span class="input-group-addon">Tipo de Personal</span>
								<?= $this->Form->select('tipo_personal', $tipo_personal, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $tp, 'disabled']); ?>
						</div>
					</td>
					<td><div id="" class="input-group">
							<span class="input-group-addon">Cargo</span>
								<?= $this->Form->select('cargo', $cargos, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $personal->cargo]); ?>
						</div>	</td>
			</tr>
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Grupo</span>
						<?= $this->Form->select('nivel', $grupos, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $personal->nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Nivel</span>
						<?= $this->Form->select('grado_nivel', $niveles, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $personal->grado_nivel]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial (%)</span>
						<?= $this->Form->select('depositario_judicial_monto', ['0' => '0','0.30' => '0.30', '0.40'=>'0.40','0.50'=> '0.50','0.60' =>'0.60'], ['empty' => '-- Seleccione solo si aplica--', 'class'=> 'form-control', 'label' => false, 'escape' => false, 'value' => $personal->depositario_judicial]); ?>
					</div>					
				</td>
			</tr>
			<tr>		
				<td><div id="" class="input-group">
						<span class="input-group-addon">Depositario Judicial (Monto)</span>
						<?= $this->Form->input('depositario_judicial', ['class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onkeyup' => 'soloNum(this)', 'maxlength' => '20', 'value' => $personal->depositario_judicial]); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon">Entidad Bancaria</span>
						<?= $this->Form->select('banco', ['TESORO' => 'TESORO'], ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'value' => $personal->banco]); ?>
					</div>					
				</td>

				<td><div id="" class="input-group">
						<span class="input-group-addon">Numero de Cuenta</span>
						<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'class'=> 'form-control', 'required', 'label' => false, 'escape' => false, 'onkeyup' => 'soloNum(this)', 'maxlength' => '20', 'value' => $personal->numero_cuenta]); ?>
					</div>		
				</td>
			</tr>

			<tr>

				<td><br><div id="" class="input-group">
					<span class="input-group-addon">Sueldo</span>
							<?= $this->Form->input('sueldo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0.00 Bs.S', 'value' => $personal->sueldo]); ?>
						</div>
					</div>
				</td>

				<td><br><div id="" class="input-group">
					<span class="input-group-addon">Prestamo de Caja de Ahorro</span>
							<?= $this->Form->input('prestamo_caja_ahorro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0.00 Bs.S', 'value' => $personal->prestamo_caja_ahorro]); ?>
						</div>
					</div>
				</td>

				<td><br><div id="" class="input-group">
					<span class="input-group-addon">Dias dejados de Cancelar</span>
							<?= $this->Form->input('dias_dejados_cancelar', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);','maxlength' => 30, 'placeholder' => '0', 'value' => $personal->dias_dejados_cancelar]); ?>
					</div>
				</td>

			</tr>
	</table>

	<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>MOVER A OTRA NOMINA (OPCIONAL)</strong></th>
					<th></th>
				</tr>
			</thead>
	</table>

	<table class="table table-responsive">
			<tr>
					<td><div id="" class="input-group">
							<span class="input-group-addon">Tipo de Nomina</span>
								<?= $this->Form->select('tipo_nomina_nuevo', $tipo_nomina, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'id' => 'tipo_nomina']); ?>
						</div>
					</td>

					<td><div id="" class="input-group">
							<span class="input-group-addon">Tipo de Personal</span>
								<?= $this->Form->select('tipo_personal_nuevo', @$t, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'id' => 'tipo_personal']); ?>
						</div>
					</td>
			</tr>
	</table>
	
	<table class="table table-responsive">
			<tr>
				<td><div class="form-group">
						<div class="input-group pull-right ">
						    	<?= $this->Form->submit('Actualizar Nomina', ['class'=>'btn btn-success pull-right']); ?>
					    </div>
					</div>				
				</td>
			</tr>
	</table>


	<?php echo $this->Form->end();?>

	<?php if($tp == 3 || ($tp >= 7 && $tp <= 16)): ?>
			<script type="text/javascript">
		        element = document.getElementById("display");
		        element.style.display='block';
			</script>
	<?php endif; ?>