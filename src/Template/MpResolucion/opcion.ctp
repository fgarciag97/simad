<?php $this->assign('title', 'Resolución - Relación de Proyectos'); ?>

<?= $this->Flash->render();?>

<?= $this->Form->create(@$forma2121, ['class'=>'well']);?>
	<table class="table table-responsive">

		<thead>
			<tr>
				<th><?= $this->html->link('Atrás', ['action' => 'index'], ['class'=>'btn btn-default btn-sm pull-left']); ?></th>
				<th class="text-center" ><strong>Resolución (<?= $rel ?>) - <?= $deno_rel ?></strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
			<tr>	
					<td style="width: 65%;">
						<div id="" class="input-group">
							<span class="input-group-addon">Categoria Programática</span>
							<?= $this->Form->select('unidad_solicitante', $unidad_solicitante, ['label' => false, 'class'=> 'form-control', 'empty' => '--', 'value' => @$us]); ?>
							<?= $this->Form->hidden('rel2', ['label' => false, 'value' => @$rel]); ?>
						</div>
					</td>
					<td style="width: 20%">					    	
						<?= $this->Form->button('Seleccionar', ['class'=>'btn btn-default pull-left']); ?>
					</td>
					<td style="width: 15%">
						<?= $this->Html->link("Crear Categoria Programática", array('action' => 'categorias', @$rel, @$us), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-danger')); ?>
					</td>
			</tr>
	</table>
<?php echo $this->Form->end();?>

<?php if(@$show == true){ ?>

	<div class="well">

		<center>
			<?= $this->Html->link("<i class='fa fa-click'></i> Crear Proyecto ",array('action' => 'proyecto', @$rel, $id_sector, $id_programa, $id_sub_programa, $us), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-info btn-sm')); ?>
			<?= $this->Html->link("<i class='fa fa-click'></i> Crear Actividad ",array('action' => 'actividad', @$rel, $id_sector, $id_programa, $id_sub_programa, $us), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-info btn-sm')); ?>
			<?= $this->Html->link("<i class='fa fa-click'></i> Creditos Presupuestarios ",array('action' => 'proyectos', @$rel, $id_sector, $id_programa, $id_sub_programa, $us), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-warning btn-sm')); ?>
		</center>
	</div>

	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
			<thead>
		        <tr>
				    <th style="text-align: center;"> Proyecto </th>
				    <th style="text-align: center;"> Denominacion </i></th>
				    <th style="text-align: center;"> Ajustar </i></th>
				    <th style="text-align: center;">Acción</th>
				</tr>
			</thead>
			<tbody>
	    
			    <?php if (isset($proyectos) && !empty($proyectos)): 
			    	foreach($proyectos as $reg){ 
			    ?>
				    <tr style="text-align: center;">
				        <td> <?= @$reg->proyecto; ?> </td>
				        <td> <?= @$reg->denominacion; ?> </td>
				        <td>
				        	<?= $this->Html->link("<i class='fa fa-click'></i> Ajuste ",array('action' => 'ajuste', @$rel, $id_sector, $id_programa, $id_sub_programa, $reg->id, 0, $us), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-success btn-sm')); ?>
				        </td>
				        <td>

				        	<?php if(@$reg->resolucion == true){ ?>
				         	<?= $this->Form->postLink('Eliminar', ['action' => 'deleteproyecto', $reg->id, $reg->id_sector, $reg->id_programa, $reg->id_sub_programa, $rel, $us], ['confirm' => __('Desea eliminar el proyecto?'), 'class' => 'btn btn-danger btn-xs']) ?>
				        	<?php } ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
		    </tbody>
	  	</table>
	</div>

	<br>

	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
			<thead>
		        <tr>
				    <th style="text-align: center;"> Actividad </th>
				    <th style="text-align: center;"> Denominacion </i></th>
				    <th style="text-align: center;"> Ajustar </i></th>
				    <th style="text-align: center;">Acción</th>
				</tr>
			</thead>

	    	<tbody>
			    <?php if (isset($actividades) && !empty($actividades)): 
			    	foreach($actividades as $reg){ 
			    ?>
				    <tr style="text-align: center;">
				        <td> <?= @$reg->actividad; ?> </td>
				        <td> <?= @$reg->denominacion; ?> </td>
				        <td>
				        	<?= $this->Html->link("<i class='fa fa-click'></i> Ajuste ",array('action' => 'ajuste', @$rel, $id_sector, $id_programa, $id_sub_programa, 0, $reg->id, $us), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-success btn-sm')); ?>
				        </td>
				        <td>
				        	<?php if(@$reg->resolucion == true){ ?>
				         	<?= $this->Form->postLink('Eliminar', ['action' => 'deleteactividad', $reg->id, $reg->id_sector, $reg->id_programa, $reg->id_sub_programa, $rel, $us], ['confirm' => __('Desea eliminar la actividad?'), 'class' => 'btn btn-danger btn-xs']) ?>
				        	<?php } ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
		    </tbody>
	  	</table>
	</div>

<?php }else{ ?>

	<div class="well">

		<center>
			<h4> <strong> Incrementos y Decrementos </strong> </h4>
		</center>
	</div>

	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
			<thead>
		        <tr>
				    <th style="text-align: center;"> Categoria Programatica </th>
				    <th style="text-align: center;"> Partida </i></th>
				    <th style="text-align: center;"> Tipo </i></th>
				    <th style="text-align: center;"> Monto </i></th>
				    <th style="text-align: center;">Acción</th>
				</tr>
			</thead>
			<tbody>
	    
			    <?php if (isset($ajustes) && !empty($ajustes)): 
			    	foreach($ajustes as $reg){ 
			    ?>
				    <tr style="text-align: center;">
				        <td> <?= @$reg->sector . "." . @$reg->programa . "." . @$reg->actividad . @$reg->proyecto ?> </td>
				        <td> <?= @$reg->partida; ?> </td>
				        <td>
				        	<?php if(@$reg->tipo_ajuste == '+'){ 
				        		echo "<p style='color: green'>Incremento</p>";
				        	 }else{ 
				        		echo "<p style='color: red'>Decremento</p>";
				        	 } ?>
				        </td>
				        <td>
				        	<?php if(@$reg->tipo_ajuste == '+'){ ?>
				        		<?= @number_format($reg->incrementar, 2, ',', '.'); ?>
				        	<?php }else{ ?>
				        		<?= @number_format($reg->disminuir, 2, ',', '.'); ?>
				        	<?php } ?>
				        </td>
				        <td>
				         	<?= $this->Form->postLink('Eliminar', ['action' => 'deleteajuste', $reg->id, $rel], ['confirm' => __('Desea eliminar el ajuste?'), 'class' => 'btn btn-danger btn-xs']) ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>
		    </tbody>
	  	</table>
	</div>


<?php } ?>