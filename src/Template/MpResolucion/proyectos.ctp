<?php $this->assign('title', 'Resolución - Relación de Proyectos'); ?>


<?= $this->Flash->render();?>

<?php if(@$rel != 0){ ?>
	<?= $this->Form->create($forma2121, ['class'=>'well']);?>

	<table class="table table-responsive">
			<thead>
				<tr>
					<th>
						<?= $this->html->link('Atrás', ['action' => 'opcion', $rel, $id_sector, $id_programa, $id_sub_programa, $us], ['class'=>'btn btn-default btn-sm pull-left']); ?>
					</th>
					<th class="text-center" ><strong>Resolución (<?= $rel ?>) - <?= $deno_rel ?></strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

	<table class="table table-responsive">

			<thead>
					<tr>
						<th></th>
						<th class="text-center"><strong> Resolución - Créditos Presupuestarios del Sector por Programa y Actividades a Nivel de Partidas y Sub-Partidas</strong></th>
						<th></th>
					</tr>
			</thead>
	</table>

	<table class="table table-responsive">
			<?= $this->Form->hidden('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>
			<?= $this->Form->hidden('id_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly', 'value' => $id_sector]); ?>
			<?= $this->Form->hidden('id_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly', 'value' => $id_programa]); ?>
			<?= $this->Form->hidden('id_sub_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly', 'value' => $id_sub_programa]); ?>
						

          	<div class="row ">
				<div class="col-md-3 col-sm-2 col-xs-2">
		             <input type="text" class="form-control" placeholder="Proyecto" disabled="" />
		        </div>

		        <div id="" class="col-md-2 col-sm-2 col-xs-2">
						<?= $this->Form->select('id_proyecto', @$proyectos, ['label' => false, 'class'=> 'form-control', 'empty' => '--', 'id' => 'id_proyectox']); ?>
				</div>

				<div id="" class="col-md-7 col-sm-2 col-xs-2">
						<?= $this->Form->input('denominacion_proyecto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'id' => 'denominacion_proyecto', 'readonly']); ?>
				</div>
          	</div>


          	<div class="row ">
				<div class="col-md-3 col-sm-2 col-xs-2">
		             <input type="text" class="form-control" placeholder="Actividad" disabled="" />
		        </div>

		        <div id="" class="col-md-2 col-sm-2 col-xs-2">
						<?= $this->Form->select('id_actividad', @$actividades, ['label' => false, 'class'=> 'form-control', 'empty' => '--', 'id' => 'id_actividadx']); ?>
				</div>

				<div id="" class="col-md-7 col-sm-2 col-xs-2">
					<?= $this->Form->input('denominacion_actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '50', 'id' => 'denominacion_actividad', 'readonly']); ?>
				</div>
          	</div>

          	<div class="col-md-6 col-sm-6 col-xs-6">
		          <span class="input-group-btn">
		    	<?= $this->Form->submit('Guardar', ['class'=>'btn btn-default pull-right']); ?></span>
		    </div>

		</table>
		
		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
			<thead>
		        <tr>
				    <th><?= $this->Paginator->sort('sector') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('programa') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('proyecto') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('actividad') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></th>
				    <th>Acción</th>
				    <th>Añadir</th>
				    <th>Reporte</th>
				</tr>
			</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    		if($reg->monto_total_actividad_formulacion != null){
		    			@$total += $reg->monto_total_actividad_formulacion;
		    		}else{
		    			@$total += $reg->monto_total_proyecto_formulacion;
		    		}
		    ?>
			    <tr>
			        <td> <?= $reg->sector; ?> </td>
			        <td> <?= $reg->programa; ?> </td>
			        <td> <?= $reg->proyecto; ?> </td>
			        <td> <?= $reg->actividad; ?> </td>
			        <td>
			        	<?php
			        		if($reg->proyecto != ''){
			        			echo MONEDA . number_format(@$reg->monto_total_proyecto_formulacion, 2, ',', '.');
			        		}else{
			        			echo MONEDA . number_format(@$reg->monto_total_actividad_formulacion, 2, ',', '.');
			        		}
			        	?>
			    	</td>
			        <td>
			         	<?= $this->Form->postLink('Eliminar', ['action' => 'deleteproyectos', $reg->id, $rel, $id_sector, $id_programa, $id_sub_programa, $us], ['confirm' => __('Desea eliminar el presupuesto?'), 'class' => 'btn btn-danger btn-xs']) ?>
			        </td>
			        <td> 
			        	<?php
			        		if($reg->actividad == ''){
			        			$actividad = 0;
			        		}else{
			        			$actividad = $reg->id_actividad;
			        		}

			        		if($reg->proyecto == ''){
			        			$proyecto = 0;
			        		}else{
			        			$proyecto = $reg->id_proyecto;
			        		}
			        	?>
			        	<?= $this->Html->Link('Partidas', ['action' => 'partidas', $reg->id_sector, $reg->id_programa, $reg->id_sub_programa, $proyecto, $actividad, $rel, $us], ['class' => 'btn btn-info btn-xs']) ?>
			        </td>
			        <td>
			        	<?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Reporte </span>",array('controller' => 'MpReportes', 'action' => 'forma2121individual', $reg->id_sector, $reg->id_programa, $reg->id_sub_programa, $proyecto, $actividad, $rel, 'PDF'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank', 'class' => 'btn btn-default btn-xs')) ?>
			        </td>
			    </tr>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>
		    	<br>

			    <tr>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			    </tr>
			    <tr>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td> </td>
			        <td style="border-radius: 15px; background-color: #a22818; color: white; text-align: center;">Total: <?= MONEDA . number_format(@$total, 2, ',', '.'); ?> </td>
			    </tr>
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
<?php } ?>

