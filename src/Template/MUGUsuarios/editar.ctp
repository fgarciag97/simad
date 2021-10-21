 <?php $this->assign('title', 'Registrar Usuario'); ?>

 <?= $this->Form->create($usuario, ['class'=>'well']);?>

	<legend bgcolor="lightblue" style="text-align: center;"> Registrar Usuario</legend>
	
	<div id="" class="input-group">
		<span class="input-group-addon">Responsable</span>
		<?= $this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'placeholder' => 'Nombre y Apellido', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'readonly']); ?>
	</div>

	<br>

	<div id="" class="input-group">
		<span class="input-group-addon">Usuario</span>
		<?= $this->Form->input('username', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'placeholder' => 'Ingrese Usuario', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'readonly']); ?>
	</div>

	<br>

	<div id="" class="input-group">
		<span class="input-group-addon">Contraseña</span>
		<?= $this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Ingrese Contraseña', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
		<span class="input-group-addon">Repetir Contraseña</span>
		<?= $this->Form->input('password2', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'required', 'placeholder' => 'Repita la Contraseña', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'value' => $usuario->password]); ?>
	</div>

	<br><br>

	<legend bgcolor="lightblue" style="text-align: center;"> Privilegios del Usuario</legend>

	<br>

	<!-- Opciones para los privilegios del usuario -->

	<div class="rows">
		<div class="container">
			<h3>Presupuesto</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('presupuestof', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle1']); ?>
				<label for="toggle1"></label>
				<div class="active-circle"></div>
			</div>
		</div>

		<div class="container">
			<h3>RRHH</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('rrhh', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle2']); ?>
				<label for="toggle2"></label>
				<div class="active-circle"></div>
			</div>
		</div>

		<<div class="container">
			<h3>Ordenamiento</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('ordenamiento', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle3']); ?>
				<label for="toggle3"></label>
				<div class="active-circle"></div>
			</div>
		</div>
	</div>

	<br>

	<div class="rows">
		<!--<div class="container">
			<h3>Administracion</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('administracion', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle4']); ?>
				<label for="toggle4"></label>
				<div class="active-circle"></div>
			</div>
		</div>-->

		<div class="container">
			<h3>Compra</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('compra', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle5']); ?>
				<label for="toggle5"></label>
				<div class="active-circle"></div>
			</div>
		</div>

		<div class="container">
			<h3>Tesoreria</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('tesoreria', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle6']); ?>
				<label for="toggle6"></label>
				<div class="active-circle"></div>
			</div>
		</div>
	</div>

	<br>

	<div class="rows">
		<div class="container">
			<h3>Uso general</h3>
			<div class="checkbox-container green">
				<?= $this->Form->checkbox('usogeneral', ['type' => 'checkbox', 'label' => false, 'id' => 'toggle7']); ?>
				<label for="toggle7"></label>
				<div class="active-circle"></div>
			</div>
		</div>
	</div>

	<br>

	<div class="form-group">
	    <div class="input-group">
		    <span class="input-group-btn">
		    	<?= $this->Form->button('Limpiar Formulario', ['type' => 'reset', 'class'=> 'btn btn-danger']); ?>
		    </span>
		    	<?= $this->Form->submit('Actualizar', ['class'=>'btn btn-success pull-right']); ?>
	    </div>
	</div>
<?php echo $this->Form->end();?>