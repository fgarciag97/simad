<?php $this->assign('title', 'Filtrar Personal'); ?>

<?= $this->Form->create('MRRHHFiltroPersonal', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHFiltroPersonal', 'action' => 'index'))) ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> FILTRO DE PERSONAL EMPLEADOS </strong>
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
					<span class="input-group-addon">Tipo Nomina</span>
					<?= $this->Form->select('tipo_nomina', @$tp, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'required', 'id'=>'tipo_personal', 'onchange' => 'cargar_cargos(this);']); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Ente Adscrito</span>
					<?= $this->Form->select('ente_adscrito', @$ea, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div class="input-group">
					<span class="input-group-addon"> Cargo</span>
					<?= $this->Form->select('cargo', @$c, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false, 'id' => 'cargo']); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Grupo-Nivel</span>
					<?= $this->Form->select('grupo', @$g, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false, 'id' => 'grupo']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Grado de Instruccion</span>
					<?= $this->Form->select('grado_instruccion', @$gi, ['empty' => '--Todos--', 'class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Fecha de ingreso <strong>(Desde)</strong></span>
					<input type="date" name="fecha_ingreso_d">
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> <strong>(Hasta)</strong></span>
					<input type="date" name="fecha_ingreso_h">
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div class="input-group">
					<span class="input-group-addon"> Funeraria</span>
					<?= $this->Form->checkbox('funeraria', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Caja de Ahorro</span>
					<?= $this->Form->checkbox('caja_ahorro', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Sindicato</span>
					<?= $this->Form->checkbox('sindicato', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Asoc. Funeraria</span>
					<?= $this->Form->checkbox('asociacion', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Prima Hogar</span>
					<?= $this->Form->checkbox('prima_hogar', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Beca Escolar Inicial</span>
					<?= $this->Form->checkbox('inicial', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Beca Escolar Primaria</span>
					<?= $this->Form->checkbox('primaria', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Beca Escolar Secundaria</span>
					<?= $this->Form->checkbox('secundaria', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Beca Escolar Universitaria</span>
					<?= $this->Form->checkbox('universitaria', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon"> Beca Escolar Discapacidad</span>
					<?= $this->Form->checkbox('discapacidad', ['class'=> 'form-control', 'label' => false]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Generar', ['class'=>'btn btn-default pull-right']); ?>
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
	<div class="well" >
			<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('cedula') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('apellidos') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('nombres') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('status') ?> <i class='fa fa-arrow-down'></i></td>
					    <td>Acción</td>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td> <?= ($reg->status) ? "Activo" : "Suspendido" ?> </td>
				        <td>
				         	<?= $this->Html->link(__('Ver'), ['controller' => 'MRRHHPersonal', 'action' => 'view', $reg->cedula], ['class' => 'btn btn-danger btn-sm', 'target' => '_blank']) ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>

			    	<tr>
				    	<td colspan="7"> <strong>Total de Personal:</strong> <?= $n_data ?></td>
				    </tr>

			    	<br>

				    <tr>
				        <td> </td>
				        <td> </td>
				        <td> </td>
				        <td> </td>
				    </tr>
				   </table>
				   <table class="table table-responsive" >

				    <tr>
				    	<td><div class="paginator" style="margin-left: 30%;">
						        <ul class="pagination">
						            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
						            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
						            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
						        </ul>
						    </div>
						</td>
				    </tr>
		  	</table>
		</div>

<?php } ?>