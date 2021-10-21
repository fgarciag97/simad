<?php $this->assign('title', 'Resolución - Proyectos'); ?>

<?= $this->Flash->render();?>

	<?= $this->Form->create(@$proyecto, ['class'=>'well']);?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th>
					<?= $this->html->link('Atrás', ['action' => 'proyectos', $rel, $s, $p, $sp, $us], ['class'=>'btn btn-default btn-sm pull-left']); ?>
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
				<th class="text-center" ><strong> Resolución - Asociar Partida a Proyecto</strong></th> 
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
		<tr>	
				<td><div id="" class="input-group">
						<?= $this->Form->hidden('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>
					</div>
				</td>

				<td><div id="" class="input-group">
							<span class="input-group-addon">Ramo</span>
							<select class="form-control" name="id_ramo" id='ramo_egreso' onchange='cargar_subramo(this);' required>
							    <option disabled selected>---</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Sub-Ramo</span>
									<select class="form-control" name="id_sub_ramo" id='subramo' onchange='cargar_especifico(this);' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Especifico</span>
									<select class="form-control" name="id_especifico" id='especifico' onchange='cargar_subespecifico(this);' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Sub-Especifico</span>
									<select class="form-control" name="id_sub_especifico" id='subespecifico' required>
							    <option disabled selected>--</option>
							</select>
					</div>
				</td>
				<td><div id="" class="input-group">
							<span class="input-group-addon">Ordinal</span>
							<?= $this->Form->input('ordinal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'maxlength' => '3', 'id' => 'ordinal', 'readonly',  'onKeyPress' => 'return soloNum(event);', 'value' => '00']); ?>
					</div>
				</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
				<td><div id="" class="input-group">
						<span class="input-group-addon">Denominacion</span>
							<?= $this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '800', 'readonly', 'id' => 'denominacion', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);']); ?>
					</div>
				</td>
		</tr>
	</table>

         <table class="table table-responsive">
		<tr>
			
			<td><div id="" class="input-group">
					<span class="input-group-addon">Ingreso Propio</span>
						<?= $this->Form->input('ingreso_propio', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'autocomplete' => 'off', 'onchange' => 'sumar(this.value); ', 'id' => 'ip', 'onKeyPress' => 'return soloNum(event);']); ?> 
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Ejecutivo Nacional</span>
						<?= $this->Form->input('situado', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'autocomplete' => 'off', 'onchange' => 'sumar(this.value);', 'id' => 'im', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Ingreso Estadal</span>
						<?= $this->Form->input('ingreso_estadal', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'autocomplete' => 'off', 'onchange' => 'sumar(this.value);', 'id' => 'ie', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Ingreso FCI</span>
						<?= $this->Form->input('ingreso_fci', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'autocomplete' => 'off', 'onchange' => 'sumar(this.value);', 'id' => 'ifci', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Otra Fuente</span>
						<?= $this->Form->input('otra_fuente', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'autocomplete' => 'off', 'onchange' => 'sumar(this.value);', 'id' => 'io', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

		</tr>

	</table>

	<table class="table table-responsive">

		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Monto</span>
						<?= $this->Form->input('monto', ['type' => 'decimal', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '15', 'value' => '0', 'id' => 'total', 'readonly', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<?= $this->Form->hidden('id_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$s]); ?>
	<?= $this->Form->hidden('id_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$p]); ?>
	<?= $this->Form->hidden('id_sub_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$sp]); ?>
	<?= $this->Form->hidden('id_proyecto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => @$proy]); ?>
	<?= $this->Form->hidden('id_actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => @$act]); ?>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>


	<table class="table table-responsive">
		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
		<thead>
	        <tr>
			    <th style="text-align: center;"><?= $this->Paginator->sort('proyecto') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"><?= $this->Paginator->sort('concatenado', 'Partida') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"><?= $this->Paginator->sort('ordinald_denominacion', 'Denominacion') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;">Acción</th>
			</tr>
		</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    		if($reg->resolucion == false or $reg->n_resolucion == $rel){
		    ?>
			    <tr style="text-align: center;">
			        <td> 
			        	<?php 
			        		if($reg->proyecto != 0){
			        			echo @$reg->sector . "." . @$reg->programa . "." . @$reg->proyecto;
			        		}else{
			        			echo @$reg->sector . "." . @$reg->programa . "." . @$reg->actividad; 
			        		}
			        	?> 
			    	</td>
			        <td>
			        	<?= @$reg->concatenado; ?>
			    	</td>
			        <td>
			        	<?= @$reg->ordinald_denominacion; ?> 
			        </td>
			        <td>
			        	<?= number_format($reg->monto, 2, ',', '.') ?> 
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
			         	<?= $this->Form->postLink('Eliminar', ['action' => 'deletepartida', $reg->id, $reg->id_sector, $reg->id_programa, $reg->id_sub_programa, $proyecto, $actividad, $rel], ['confirm' => __('Desea eliminar el proyecto?'), 'class' => 'btn btn-danger btn-xs']) ?>

			         	<a 
				         	id = "<?= $reg->id ?>"
	                      	id_sector ="<?= $reg->id_sector ?>"
	                      	id_programa ="<?= $reg->id_programa ?>"
	                      	id_sub_programa ="<?= $reg->id_sub_programa ?>"
	                      	id_proyecto ="<?= $proyecto ?>"
	                      	id_actividad ="<?= $actividad ?>"
	                      	rel ="<?= $rel ?>"

	                      	ingreso_propio ="<?= number_format($reg->ingreso_propio, 2, '.', ''); ?>"
	                      	situado ="<?= number_format($reg->situado, 2, '.', ''); ?>"
	                      	ingreso_estadal ="<?= number_format($reg->ingreso_estadal, 2, '.', ''); ?>"
	                      	ingreso_fci ="<?= number_format($reg->ingreso_fci, 2, '.', ''); ?>"
	                      	otra_fuente ="<?= number_format($reg->otra_fuente, 2, '.', ''); ?>"
	                      	monto ="<?= number_format($reg->monto, 2, '.', ''); ?>"
	                      	onclick="editar_partida_rel(this);" class="btn btn-warning btn-xs">Editar
                      	</a>
			        </td>
			    </tr>
			    
		    <?php }} else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>


		    <?php endif; ?>
	  	</table>

	  	<table class="table table-responsive">
		  		<tr>
			    	<td>	<?= $this->Html->Link('Procesar', ['action' => 'proyectos', $rel, $s, $p, $sp, $us], ['class' => 'btn btn-success pull-right']) ?>
			    	</td>
			    </tr>

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

	<br>

