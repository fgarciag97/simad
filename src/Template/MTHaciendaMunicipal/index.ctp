<?php $this->assign('title', 'Registro Hacienda'); ?>

<div class="well">
	<?= $this->Form->create('MTHaciendaMunicipal', array('type' => 'post', 'url' => array('controller' => 'MTHaciendaMunicipal', 'action' => 'index'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center"><strong> Historial de Pagos de Hacienda</strong></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Cuenta Bancaria</span>
					<?= $this->Form->select('id_banco', $nombre_banco, ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$b]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Revisión</span>
					<?= $this->Form->select('r', ['0' => 'Pendiente', '1' => 'Revisado'], ['empty' => '--TODOS--', 'class'=> 'form-control', 'label' => false, 'value' => @$r]); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Rango de Fecha</span>
					<input type="date" name="desde" required value = "<?= @date_format($d, 'Y-m-d');  ?>">
					<input type="date" name="hasta" required value = "<?= @date_format($h, 'Y-m-d'); ?>">
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

	<div class="row">
	    <div class="col-md-12 ">
	        <div class="card strpied-tabled-with-hover">
	            <div class="card-header border-0">
	                <?= $this->Form->create(@$buscador) ?>
	                  <table style="width:100%">
	                    <tr>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-8">
	                                <label for="inputCity"> N° Comprobante 1</label>
	                                <?= @$this->Form->input('n1', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 5% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-8">
	                                <label for="inputCity"> N° Comprobante 2 </label>
	                                <?= @$this->Form->input('n2', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 5% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                    </tr> 
	                  </table> 
	              <?php echo $this->Form->end();?>

	            </div>
	        </div>
	    </div>
	</div>
</div>



<?php if(isset($data) and $show){ ?>


	<div class="well">

		<table class="table-responsive table">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> Registros en PDF </i>",array('controller' => 'MTHaciendaMunicipal', 'action' => 'reporte', @$d, @$h, @$b, @$r, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>

				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> Registros en EXCEL </i>",array('controller' => 'MTHaciendaMunicipal', 'action' => 'excel', @$d, @$h, @$b, @$r, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>

				<!--<td><?= $this->Html->link("<i class='fa fa-file-excel'></i> Hoja de Calculo",array('controller' => 'MTHaciendaMunicipal', 'action' => 'excel', @$to, @$p, @$s, @$d, @$h, "EXCEL"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default')) ?></td>-->
			</tr>
		</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Banco') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('referencia', 'N° Comprobante') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('recibo', 'N° Comprobante 2') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('descripcion', 'Descripcion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_pago') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto_debe','Debe') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto_haber','Haber') ?> <i class='fa fa-arrow-down'></i></td>
				   	<?php if(@$d != null and @$h != null and @$b != null){ ?>
				    <td><?= $this->Paginator->sort('','Saldo') ?> <i class='fa fa-arrow-down'></i></td>
				   	<?php } ?>
				    <td>Revisión</td>
				    <td>Accion</td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    
		    	foreach($data as $reg){ 
			?>

					<tr style="text-align: center;">
						<td> <label><?= $reg->nombre_banco ?></label></td>

						<?php if($reg->referencia == 0) { ?>
							<td> <label> -- </label></td>
						<?php } else { ?>
							<td> <label><?= $reg->referencia ?></label></td>
						<?php } ?>

						<?php if($reg->recibo == 0) { ?>
							<td> <label> -- </label></td>
						<?php } else { ?>
							<td> <label><?= $reg->recibo ?></label></td>
						<?php } ?>

						<td> <label><?= $reg->descripcion ?></label></td>
						<td> <label><?= date_format($reg->fecha_pago, 'd/m/Y') ?></label></td>

						<!-- Monto del Debe Aumenta el Saldo --> 
						<td> <?= number_format(@$reg->monto_debe, 2, ',', '.') ?> </td>

						<!-- Monto del Haber disminuye el Saldo -->
						<td> <label> <?= number_format(@$reg->monto_haber, 2, ',', '.') ?>  </label></td>


						<?php if(@$d != null and @$h != null and @$b != null){ ?>
						<td> <label> <?= number_format(@$reg->saldo, 2, ',', '.') ?>  </label></td>
						<?php } ?>

						<td> 
							<?= ($reg->revision == true) ?  
								$this->Form->postLink("<i style='color:green' class='fa fa-check'></i>", ['action' => '', $reg->id, 0, @$b, @$d, @$h, @$r], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false, 'disabled']) : 
								$this->Html->Link("<i style='color:red' class='fa fa-close'></i>", ['action' => 'revision', $reg->id, 1, @$b, @$d, @$h, @$r], ['class' => 'btn btn-default btn-sm', 'tabindex' => '-1', 'escape' => false]); ?> 
						</td>

						<td>

							<?= $this->Html->Link("Editar", ['action' => 'edit', $reg->id], ['class' => 'btn btn-primary btn-sm', 'tabindex' => '-1', 'escape' => false]) ?> 
							<?= $this->Html->Link("Eliminar", ['action' => 'delete', $reg->id], ['class' => 'btn btn-danger btn-sm', 'tabindex' => '-1', 'escape' => false]) ?> 
						</td>
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

<table class="table table-responsive">
 		<tr>
			<td>					    	
				<?= $this->html->Link('Registro', ['action' => 'add'],['class'=>'btn btn-success pull-right']); ?>
				<?= $this->html->Link('Ajuste de saldo', ['action' => 'saldo'],['class'=>'btn btn-danger pull-right']); ?>
			</td>
		</tr>

 </table>