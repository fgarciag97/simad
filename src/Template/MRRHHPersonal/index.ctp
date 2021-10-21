<?php $this->assign('title', 'Personal'); ?>

<?= $this->Form->create('MrrhhPersonal', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHPersonal', 'action' => 'buscar'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Buscar Registro</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td></td>
			<td></td>
			<td style="width: 35%;">
				<div id="" class="input-group">
					<span class="input-group-addon">Cedula</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
			<td style="width: 10%">					    	
				<?= $this->Form->button('Buscar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
			<td></td>
			<td style="width: 10%">
				<?= $this->Html->link("Filtrar <i class='fa fa-filter'></i>", array('controller' => 'MRRHHFiltroPersonal'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info')); ?>
			</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>

	<table class="table table-responsive" >

		<tr>
			<td><table class="table table-responsive" style="width: 80%; margin-left: 7%;">
					<tr>
						<td style="font-size: 18pt;">
							<div class="">
								<?= $this->Html->link(("Directivos <br><span class=''>"."<h4>".$n_directivos.'</h4>' ."</span>"), ['action' => 'index', 3], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?>
							</div>
						</td>

						<td><?= $this->Html->link(("Empleados Fijos <br><span class=''>"."<h4>". $n_empleados_fijos.'</h4>' ."</span>"), ['action' => 'index', 1], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?>
						</td>

						<td><?= $this->Html->link(("Empleados Contratados <br><span class=''>"."<h4>". $n_empleados_contratados.'</h4>' ."</span>"), ['action' => 'index', 2], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Obreros Contratados <br><span class=''>"."<h4>". $n_obreros_contratados.'</h4>' ."</span>"), ['action' => 'index', 5], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						 <td><?= $this->Html->link(("Cementerio <br><span class=''>"."<h4>". @$n_cementerio.'</h4>' ."</span>"), ['action' => 'index', 15], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td> 

						<td><?= $this->Html->link(("Comision Servicio <br><span class=''>"."<h4>". @$n_comision_servicio.'</h4>' ."</span>"), ['action' => 'index', 16], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Proteccion Civil <br><span class=''>"."<h4>". $n_proteccion_civil.'</h4>' ."</span>"), ['action' => 'index', 14], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Empleados Jubilados <br><span class=''>"."<h4>". $n_jubilados_empleados.'</h4>' ."</span>"), ['action' => 'index', 7], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Obreros Jubilados <br><span class=''>"."<h4>". $n_jubilados_obreros.'</h4>' ."</span>"), ['action' => 'index', 8], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>


						<td><?= $this->Html->link(("Obreros Fijos <br><span class=''>"."<h4>". $n_obreros_fijos.'</h4>' ."</span>"), ['action' => 'index', 4], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><table class="table table-responsive" style="width: 80%; margin-left: 5%;">
					<tr>

						<td><?= $this->Html->link(("Obreros Pensionados Sobrevivientes <br><span class=''>"."<h4>". $n_pensionados_sobrevivientes_obreros.'</h4>' ."</span>"), ['action' => 'index', 12], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Obreros Pensionados Especiales <br><span class=''>"."<h4>". $n_pensionados_especiales_obreros.'</h4>' ."</span>"), ['action' => 'index', 13], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

											
						<td><?= $this->Html->link(("Obreros No Permanentes <br><span class=''>"."<h4>". $n_obreros_no_permanentes.'</h4>' ."</span>"), ['action' => 'index', 6], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>
			

						<td><?= $this->Html->link(("Empleados Pensionados <br><span class=''>"."<h4>". $n_pensionados_empleados.'</h4>' ."</span>"), ['action' => 'index', 9], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>
				
						<td><?= $this->Html->link(("Empleados Pensionados Sobrevivientes <br><span class=''>"."<h4>". $n_pensionados_sobrevivientes_empleados.'</h4>' ."</span>"), ['action' => 'index', 10], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>

						<td><?= $this->Html->link(("Empleados Pensionados Especiales <br><span class=''>"."<h4>". $n_pensionados_especiales_empleados.'</h4>' ."</span>"), ['action' => 'index', 11], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>



				
						<td><?= $this->Html->link(("Honorarios Profesionales <br><span class=''>"."<h4>". @$n_honorario_profesionales.'</h4>' ."</span>"), ['action' => 'index', 17], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?></td>
					</tr>
				</table>
			</td>
		</tr>

	</table>

		<!-------------------------------------------------------------------------------------------->
	<?php if(isset($data) and !empty($data)){ ?>

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
				         	<?= $this->Html->link(__('Ver'), ['action' => 'view', $reg->cedula], ['class' => 'btn btn-danger btn-sm']) ?>
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