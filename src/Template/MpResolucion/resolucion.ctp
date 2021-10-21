<?php $this->assign('title', 'Resolución'); ?>

<?= $this->Form->create("MpResolucion", ['class'=>'well']);?>
	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Seleccione la Resolución</strong></th>
				<th></th>
			</tr>
		</thead>
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Resoluciones</span>
					<?= $this->Form->select('rel', @$resoluciones, ['label' => false, 'class'=> 'form-control', 'empty' => '--Seleccione--', 'value' => @$rel]); ?>
				</div>
			</td>
			<td>
				<div id="" class="input-group">
					<?= $this->Form->submit('Continuar', ['class'=>'btn btn-default pull-right']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
	</table>
<?php echo $this->Form->end();?>


<?php if(@$rel != 0){ ?>
	<?= $this->Form->create('MpResolucion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MpResolucion', 'action' => 'ajuste'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Resolución (<?= $rel ?>) - <?= $deno_rel ?></strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>Seleccione Unidad Solicitante</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>	
					<td></td>
					<td></td>
					<td style="width: 50%;">
						<div id="" class="input-group">
							<span class="input-group-addon">Unidad Solicitante</span>
							<?= $this->Form->select('unidad_solicitante', $unidad_solicitante, ['label' => false, 'class'=> 'form-control', 'empty' => '--', 'value' => @$us]); ?>
							<?= $this->Form->hidden('rel2', ['label' => false, 'value' => @$rel]); ?>
						</div>
					</td>
					<td style="width: 10%">					    	
						<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-right']); ?>
					</td>
					<td></td>
					<td></td>
			</tr>
		</table>
	<?php echo $this->Form->end();?>



	<?php if(isset($data) and !empty($data)){ ?>

		<div class="media-body well">

			<table class="table table-responsive">

				<thead>
					<tr>
						<th></th>
						<th class="text-center"><strong>Resolución de Partidas</strong></th>
						<th></th>
					</tr>
				</thead>
			</table>

		         <!-- Table -->
			<table class="table table-responsive">
				<thead class="text-center" style="text-align: center;">
			        <tr>
					    <th>Unidad Solicitante</th>
					    <th><?= $this->Paginator->sort('concatenado', 'Partida') ?> <i class='fa fa-arrow-down'></i></th>
					    <th><?= $this->Paginator->sort('ordinald_denominacion', 'Denominacion') ?> <i class='fa fa-arrow-down'></i></th>
					    <th><?= 'Monto Presupuesto' ?></th>
					    <th><?= 'Monto Incrementado' ?></th>
					    <th><?= 'Monto Disminuido' ?></th>
					    <th><?= 'Monto Comprometido' ?></th>
					    <th><?= 'Monto Disponible' ?></th>
					    <th>Acción</th>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){  ?>
				    <tr>
				        <td> <?= $reg->sector.".".$reg->programa.".".$reg->actividad.$reg->proyecto; ?> </td>
				        <td> <?= $reg->concatenado; ?> </td>
				        <td> <?= strtoupper($reg->ordinald_denominacion); ?> </td>
				        <td> <?= number_format($reg->monto_presupuesto, 2, ',', '.'); ?><br></td>
				        <td> <?= number_format($reg->monto_incremento, 2, ',', '.'); ?><br></td>
				        <td> <?= number_format($reg->monto_disminuido, 2, ',', '.'); ?><br></td>
				        <td> <?= number_format(($reg->monto_comprometido_nomina + $reg->monto_comprometido_compra), 2, ',', '.'); ?><br></td>
				        <td> <?= number_format(($reg->monto_presupuesto + $reg->monto_incremento) - ($reg->monto_disminuido) - ($reg->monto_comprometido_nomina + $reg->monto_comprometido_compra), 2, ',', '.'); ?><br></td>
				        <td>
				        	<a 
				        	data-toggle="modal" 
				        	partidai = "<?= $reg->concatenado ?>"
				        	id_sectori = "<?= $reg->id_sector ?>" 
				        	id_programai = "<?= $reg->id_programa ?>" 
				        	id_sub_programai = "<?= $reg->id_sub_programa ?>" 
				        	id_proyectoi = "<?= ($reg->id_proyecto == null) ? 0 : $reg->id_proyecto ?>"  
				        	id_actividadi = "<?= ($reg->id_actividad == null) ? 0 : $reg->id_actividad ?>"  
				        	n_resolucion = "<?= $rel ?>"
		                     onclick="incrementar(this);" class="btn btn-success btn-xs">(+) Incrementar</a>
		                     <a 
				        	data-toggle="modal" 
				        	partidad = "<?= $reg->concatenado ?>"
				        	id_sectord = "<?= $reg->id_sector ?>" 
				        	id_programad = "<?= $reg->id_programa ?>" 
				        	id_sub_programad = "<?= $reg->id_sub_programa ?>" 
				        	id_proyectod = "<?= ($reg->id_proyecto == null) ? 0 : $reg->id_proyecto ?>"
				        	id_actividadd = "<?= ($reg->id_actividad == null) ? 0 : $reg->id_actividad ?>" 
				        	n_resolucion = "<?= $rel ?>" 
		                     onclick="disminuir(this);" class="btn btn-warning btn-xs">(-) Disminuir</a>
		                </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen data</td>
				    </tr>
			    <?php endif; ?>

			    	<br>
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


		    <div></div>

		</div>

		

	<?php }} ?>