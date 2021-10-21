<?php $this->assign('title', 'Filtrar Datos'); ?>

<?= $this->Form->create('MRRHHFiltro', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHFiltro', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> FILTRO DEL REPORTE DETALLADO </strong>
					</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Tipo de Personal</span>
					<?= $this->Form->select('tipo_personal', $tp, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'required']); ?>
				</div>
			</td>


			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Dependencia</span>
					<?= $this->Form->select('dependencia', $dependencias, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Tipo de Calculo</span>
					<?= $this->Form->select('tipo_calculo', $tc, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div class="input-group">
					<span class="input-group-addon"> Año</span>
					<?= $this->Form->select('ano', $anos, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Mes</span>
					<?= $this->Form->select('mes', $meses, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Quincena</span>
					<?= $this->Form->select('quincena', $quincenas, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['class'=>'btn btn-default pull-right', 'target'=>'_blank']); ?>
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
