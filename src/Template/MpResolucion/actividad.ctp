<?php $this->assign('title', 'Resolucion - Actividad'); ?>

<?= $this->Flash->render();?>

	<?= $this->Form->create(@$proyecto, ['class'=>'well']);?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th><?= $this->html->link('Atrás', ['action' => 'opcion', @$rel, $id_sector, $id_programa, $id_sub_programa, $us], ['class'=>'btn btn-default btn-sm pull-left']); ?></th>
				<th class="text-center" ><strong>Resolución (<?= $rel ?>) - <?= $deno_rel ?></strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Resolucion - Asociar Actividad a la Categoria Programatica</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive" >
			<tr>
				<td style="width: 10%;"><div id="" class="input-group">
						<span class="input-group-addon">N°</span>
						<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '3',  'onKeyPress' => 'return soloNum(event);']); ?>
					</div>
				</td>
				<td><div id="" class="input-group">
						<span class="input-group-addon"> Denominacion</span>
						<?= $this->Form->input('denominacion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'rows' => 2]); ?>
					</div>
				</td>
			</tr>
		</table>

	</table>

	<?= $this->Form->hidden('id_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$id_sector]); ?>
	<?= $this->Form->hidden('id_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$id_programa]); ?>
	<?= $this->Form->hidden('id_sub_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$id_sub_programa]); ?>
	<?= $this->Form->hidden('n_resolucion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$rel]); ?>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>
		
	<?php echo $this->Form->end();?>
