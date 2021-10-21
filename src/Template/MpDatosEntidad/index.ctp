<?php $this->assign('title', 'Datos de la Entidad'); ?>

<?php if (@$status == 'procesado'){ ?>

	<!-- DATOS PROCESADOS DE LA FORMA 2100 -->

	<?= $this->Form->create($forma2100, ['class'=>'well']); ?>

		<table class="table table-responsive">

			<thead>
				<tr>
					<th class="text-center">
						<strong>Forma 2100 - Información General de la Entidad Municipal.</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Año Fiscal</span>
						<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '4', 'value' => @$data[0]['ano'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Nombre Alcalde</span>
						<?= $this->Form->input('nombre_alcalde', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => @$data[0]['nombre_alcalde'], 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center">
						<strong>Personal Directivo de la Alcaldia</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Director General</span>
						<?= $this->Form->input('director_general', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['director_general'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correo</span>
						<?= $this->Form->input('correo_director_general', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'maxlength' => '30', 'value' => @$data[0]['correo_director_general'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefono</span>
						<?= $this->Form->input('telefono_director_general', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['telefono_director_general'], 'readonly']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Contralor Municipal</span>
						<?= $this->Form->input('contralor_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => @$data[0]['contralor_municipal'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Domicilio legal</span>
						<?= $this->Form->input('domicilio_contralor', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '100', 'value' => @$data[0]['domicilio_contralor'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefono</span>
						<?= $this->Form->input('telefono_contralor', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['telefono_contralor'], 'readonly']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Pagina Web</span>
						<?= $this->Form->input('pagina_web_contralor', ['type' => 'url', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['pagina_web_contralor'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Fax</span>
						<?= $this->Form->input('fax_contralor', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['fax_contralor'], 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Dirreccion Administrativa</span>
						<?= $this->Form->input('personal_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '200', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '2','readonly','value' => @$data[0]['personal_directivo']]); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Nombres y Apellidos</span>
						<?= $this->Form->input('nombres_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '200', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '2', 'autocomplete' => 'off', 'readonly','value' => @$data[0]['nombres_directivo']]); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correos Electronicos</span>
						<?= $this->Form->input('correo_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '200', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '2', 'autocomplete' => 'off', 'readonly','value' => @$data[0]['correo_directivo']]); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefonos (s)</span>
						<?= $this->Form->input('telefono_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '200', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '2', 'autocomplete' => 'off', 'readonly','value' => @$data[0]['telefono_directivo'], 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center"><strong>Concejo Municipal o Cabildo</strong></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Presidente del Concejo Municipal</span>
						<?= $this->Form->input('presidente_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => @$data[0]['presidente_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Secretario del Concejo Municipal</span>
						<?= $this->Form->input('secretario_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => @$data[0]['secretario_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Domicilio legal</span>
						<?= $this->Form->input('domicilio_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '100', 'value' => @$data[0]['domicilio_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
			</tr>
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Teléfono</span>
						<?= $this->Form->input('telefono_concejo_municipal', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['domicilio_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Página web</span>
						<?= $this->Form->input('pagina_web_concejo_municipal', ['type' => 'url', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['pagina_web_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Fax</span>
						<?= $this->Form->input('fax_concejo_municipal', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'value' => @$data[0]['fax_concejo_municipal'], 'readonly']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correo</span>
						<?= $this->Form->input('correo_consejal', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'maxlength' => '30', 'value' => @$data[0]['correo_director_general'], 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center">
						<strong>Concejo Local de Planificación Pública</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Concejo Local</span>
						<?= $this->Form->input('concejo_local', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '2', 'value' => @$data[0]['concejo_local'], 'readonly']); ?>
					</div>
				</td>
			</tr>
		</table>

		<br>

		<table class="table table-responsive">
			<tr>
				<td><?= $this->Html->link(__('Editar'), ['action' => 'editar'], ['class'=>'btn btn-warning pull-left']) ?>	    	 	
				</td>
				<td><?= $this->Form->submit('Guardado',['class'=>'btn btn-success pull-right', 'disabled']);?>				
				</td>
			</tr>
		</table>

	<?php echo $this->Form->end();?>

<?php }else{ ?>

	<!-- EDITAR DATOS DE LA FORMA 2100 -->

	<?= $this->Form->create($forma2100, ['class'=>'well']); ?>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center" >
						<strong>Forma 2100 - Información General de la Entidad Municipal.</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Año Fiscal</span>
						<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Nombre Alcalde</span>
						<?= $this->Form->input('nombre_alcalde', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => NOMBRE_ALCALDE, 'readonly', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center">
						<strong>Personal Directivo de la Alcaldia</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Director General</span>
						<?= $this->Form->input('director_general', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => DIRECTOR_GENERAL, 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correo</span>
						<?= $this->Form->input('correo_director_general', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'maxlength' => '30', 'placeholder' => 'correo@dominio.com', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefono</span>
						<?= $this->Form->input('telefono_director_general', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Contralor Municipal</span>
						<?= $this->Form->input('contralor_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => CONTRALOR_MUNICIPAL, 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Domicilio legal</span>
						<?= $this->Form->input('domicilio_contralor', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '100', 'value' => DOMICILIO_CONTRALOR_MUNICIPAL, 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefono</span>
						<?= $this->Form->input('telefono_contralor', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
			</tr>
				
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Pagina Web</span>
						<?= $this->Form->input('pagina_web_contralor', ['type' => 'url', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
		
			</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Fax</span>
						<?= $this->Form->input('fax_contralor', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Dirreccion Administrativa</span>
						<?= $this->Form->input('personal_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'Oficina 1, Oficina 2 ...', 'rows' => '2', 'autocomplete' => 'off','value' => DIRECCION_ADMINISTRATIVA, 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Nombres y Apellidos</span>
						<?= $this->Form->input('nombres_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'Nombre y Apellido 1, Nombre y Apellido 2...', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'onKeyPress' => 'return soloLetras(event);']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correos Electronicos</span>
						<?= $this->Form->input('correo_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'correo 1, correo 2...', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Telefono(s)</span>
						<?= $this->Form->input('telefono_directivo', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'telefono 1, telefono 2 ...', 'rows' => '2', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center">
						<strong>Concejo Municipal o Cabildo</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Presidente del Concejo Municipal</span>
						<?= $this->Form->input('presidente_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => PRESIDENTE_CONCEJO_MUNICIPAL, 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'onKeyPress' => 'return soloLetras(event);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Secretario del Concejo Municipal</span>
						<?= $this->Form->input('secretario_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'value' => SECRETARIO_CONCEJO_MUNICIPAL, 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'onKeyPress' => 'return soloLetras(event);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Domicilio legal</span>
						<?= $this->Form->input('domicilio_concejo_municipal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '100', 'value' => DOMICILIO_CONCEJO_MUNICIPAL, 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
			</tr>
			<tr>	
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Teléfono</span>
						<?= $this->Form->input('telefono_concejo_municipal', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Página web</span>
						<?= $this->Form->input('pagina_web_concejo_municipal', ['type' => 'url', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Fax</span>
						<?= $this->Form->input('fax_concejo_municipal', ['type' => 'tel', 'label' => false, 'class'=> 'form-control', 'maxlength' => '20', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Correo</span>
						<?= $this->Form->input('correo_consejal', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'maxlength' => '30', 'value' => @$data[0]['correo_director_general'], 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th class="text-center">
						<strong>Concejo Local de Planificación Pública</strong>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>
					<div id="" class="input-group">
						<span class="input-group-addon">Concejo Local</span>
						<?= $this->Form->input('concejo_local', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'placeholder' => 'Nombre y Apellido, Nombre y Apellido ...', 'rows' => '3', 'autocomplete' => 'off', 'value' => CONCEJO_LOCAL, 'onkeyup' => 'mayus(this);', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<?= $this->Form->submit('Guardar', ['class'=>'btn btn-success pull-right']);?>
			</tr>
		</table>

	<?= $this->Form->end(); ?>
<?php } ?>