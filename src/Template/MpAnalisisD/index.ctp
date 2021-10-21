<?php $this->assign('title', 'Analisis de Disponibilidad'); ?>

<div class="well">
	<?= $this->Form->create('MpAnalisisD', array('type' => 'post', 'url' => array('controller' => 'MpAnalisisD', 'action' => 'index'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center"><strong> Analisis de Disponibilidad </strong></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Resolución</span>
					<?= $this->Form->select('rel', $resoluciones, ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$rel]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Categoria Programática</span>
					<?= $this->Form->select('us', $unidad_solicitante, ['label' => false, 'class'=> 'form-control', 'empty' => '--TODOS--', 'value' => @$us]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Rango de Fecha</span>
					<input type="date" name="d" required value = "<?= @$d ?>">
					<input type="date" name="h" required value = "<?= @$h ?>">
				</div>
			</td>

			

			<td>
				<div class="input-group">
    				<?= $this->Form->button('Generar', ['class'=>'btn btn-md btn-default pull-right']); ?>
			    </div>
			</td>
		</tr>
	</table>

	<?php echo $this->Form->end();?>
</div>



<?php if(@$show){ ?>


	<div class="well">

		<table class="table-responsive table">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> Analisis de Disponibilidad </i>",array('controller' => 'MpAnalisisD', 'action' => 'Reporte', @$d, @$h, @$rel, @$us, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td> Resolucion </td>
				    <td> Unidad Solicitante </td>
				    <td> <?= $this->Paginator->sort('partida') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo_ajuste') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('incrementar') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('disminuir') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    
		    	foreach($data as $reg){ 
			?>

					<tr style="text-align: center;">
						<td> <label><?= $reg->n_resolucion ?></label></td>

						<td> <label><?= $reg->sector.".".$reg->programa.".".$reg->sub_programa ?></label></td>

						<td> <label><?= $reg->partida ?></label></td>
						<td> <label>
							<?php
								if($reg->tipo_ajuste == '+'){
									echo "<p style='color: green'> Incremento</p>";
								}else{
									echo "<p style='color: red'> Disminucion</p>";
								}
							?>
						</label></td>

						<td> <?= number_format(@$reg->incrementar, 2, ',', '.') ?> </td>
						<td> <?= number_format(@$reg->disminuir, 2, ',', '.') ?> </td>

						<td> <label><?= date_format($reg->fecha, 'd/m/Y') ?></label></td>
					</tr>


				<?php } 
			 endif; ?>


		</table>

		<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>
	</div>
<?php }  ?>
