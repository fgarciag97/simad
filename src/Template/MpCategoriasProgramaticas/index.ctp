<?php $this->assign('title', 'Categorias Programáticas'); ?>

<?= $this->Flash->render();?>

	<?= $this->Form->create(@$forma2103, ['class'=>'well']);?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Forma 2103 - Indice de Categoria Programaticas</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td style="width: 20%;"><div id="" class="input-group">
					<span class="input-group-addon"> Sector</span>
						<?= $this->Form->hidden('nuevo_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '2',  'onKeyPress' => 'return soloNum(event);', 'id' => 'nuevo_sector']); ?>

						<?= $this->Form->select('sector', $sectores, ['label' => false, 'class'=> 'form-control', 'empty' => '--', 'onchange' => 'cargar_programas(this);', 'id' => 'sector']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
					<span class="input-group-addon"> Denominacion</span>
						<?= $this->Form->input('denominacion_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'id' => 'denominacion_sector', 'readonly', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<input id="add_sector" type="button" value="+">
					</div>
				</td>
		</tr>

		<tr>	
				<td><div id="" class="input-group">
					<span class="input-group-addon"> Programa</span>
						<?= $this->Form->hidden('nuevo_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '2',  'onKeyPress' => 'return soloNum(event);', 'id' => 'nuevo_programa']); ?>
						<select class="form-control" name="programa" id='programa' onchange='cargar_subprogramas(this);'>
						    <option disabled selected>--</option>
						</select>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
					<span class="input-group-addon"> Denominacion</span>
						<?= $this->Form->input('denominacion_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'id' => 'denominacion_programa', 'readonly', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<input id="add_programa" type="button" value="+">
					</div>
				</td>
		</tr>

		<tr>	
				<td><div id="" class="input-group">
					<span class="input-group-addon"> Sub-Programa</span>
						<?= $this->Form->hidden('nuevo_subprograma', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '2',  'onKeyPress' => 'return soloNum(event);', 'id' => 'nuevo_subprograma']); ?>
						<select class="form-control" name="subprograma" id='subprograma' onchange='cargar_proyectos(this);'>
						    <option disabled selected>--</option>
						</select>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
					<span class="input-group-addon"> Denominacion</span>
						<?= $this->Form->input('denominacion_subprograma', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'id' => 'denominacion_subprograma', 'readonly', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
				<td>
					<div id="" class="input-group">
						<input id="add_subprograma" type="button" value="+">
					</div>
				</td>
		</tr>
	</table>


	<table class="table table-responsive">
		<tr>	
				<td><div id="" class="input-group">
					<span class="input-group-addon"> Unidad Ejecutora</span>
						<?= $this->Form->input('unidad_ejecutora', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
					<span class="input-group-addon"> Funcionario Responsable</span>
						<?= $this->Form->input('funcionario_responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
		</tr>
	</table>

	          <div class="row ">
					<div class="col-md-6 col-sm-6 col-xs-6">
			         <span class="input-group-btn">
			    	<?= $this->Form->button('Limpiar Formulario', ['type' => 'reset', 'class'=> 'btn btn-default  pull-left']); ?></span>
			        </div>

			        <div class="col-md-6 col-sm-6 col-xs-6">
			          <span class="input-group-btn">
			    	<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default pull-right']); ?></span>
			        </div>
	          </div><br>

			</table><br>
		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table table-responsive" style="width: 80%; margin-left: 10%;">
		<thead>
	        <tr>
			    <th style="text-align: center;"><?= $this->Paginator->sort('concatenado', 'Sector') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"><?= $this->Paginator->sort('unidad_ejecutora') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"> Incluir Proyectos</th>
			    <th style="text-align: center;"> Incluir Actividades</th>
			    <th style="text-align: center;"> Acción</th>
			</tr>
		</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    ?>
			    <tr style="text-align: center;">
			        <td> <?= $reg->concatenado; ?> </td>
			        <td> <?= $reg->unidad_ejecutora; ?> </td>
			        <td style="width: 10%;"> 
			        	<?= $this->Html->Link('Proyecto', ['action' => 'proyecto', $reg->id_sector, $reg->id_programa, $reg->id_sub_programa], ['class' => 'btn btn-default btn-xs']) ?></td>
			        <td style="width: 15%;">
			        	<?= $this->Html->Link('Actividad', ['action' => 'actividad', $reg->id_sector, $reg->id_programa, $reg->id_sub_programa], ['class' => 'btn btn-default btn-xs']) ?>
			        </td>
			        <td>
			         	<?= $this->Form->postLink('Eliminar', ['action' => 'delete', $reg->id], ['confirm' => __('Desea eliminar la Categoria # {0}?', $reg->concatenado), 'class' => 'btn btn-danger btn-xs']) ?>
			        </td>
			    </tr>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>
	  	</table>

	  	 <div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>

	    </div>

	  	<table class="table table-responsive" style="margin-right: 10%;">
		  		<tr>
			    	<td>	<?= $this->Form->postLink('Procesar', ['action' => 'seguimiento'], ['confirm' => __('Desea Procesar los datos?'), 'class' => 'btn btn-success pull-right']) ?>
			    	</td>
			    </tr>
		  	</table>
	  
	   
	</div>

	<br>

