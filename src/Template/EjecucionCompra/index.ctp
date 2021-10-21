<?php $this->assign('title', 'Requisicion de Compra'); ?>

<div class="well">

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Buscador </strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

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
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Requisición</label>
	                                <?= @$this->Form->input('req', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 6% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <!--<th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Numero Orden</label>
	                                <?= @$this->Form->input('op', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 6% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>-->

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-4">
	                                <label for="inputCity"> Rango de Fecha</label>
	                                <input type="date" name="d">
	                                <input type="date" name="h">
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


	<table class="table table-responsive">
		<thead> 
			<tr>
				<th></th>
				<th class="text-center"><strong> Tabla de Requisiciones Recibidas de Compra</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisición') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('mes', 'Mes') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Reporte" ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= "Acción" ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

			<?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ ?>

		    		<?php if($reg->status >= 1){ 

                        $n = 10 - strlen($reg->id);
                        $requisicion = '';
                        for($i=0; $i < $n; $i++){
                            $requisicion .= "0";
                        }
                        $requisicion .= $reg->id; 
                    ?>

				    <tr style="text-align: center;">
						<td><label> <?= $requisicion ?></label></td>
						<td><label> <?= $reg->fecha ?> </label></td>
						<td><label> <?= $reg->tipo ?> </label></td>
						<td> <?= $reg->mes_denominacion;  ?> </td>
						<td>
						<?php 
		         			if($reg->tipo == 'COMPRA'){
		         				echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'MCompraOrdenesEmitidas', 'action' => 'reporte', 0, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
		         			}else if($reg->tipo == 'SERVICIO'){
		         				echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'MCompraOrdenesServicio', 'action' => 'reporte', 0, $reg->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
		         			}
		         		?>
						</td>
						<td>
							<?php 
							if($reg->status == 1){
								echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => 'partidas', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
							}else if($reg->status == 2){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'elaborarcompra', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a ordenamiento la requisicion # {0}?', $requisicion)));
							}else if($reg->status == 4){
								echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
							}else if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'disabled'));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-default', 'disabled'));
							}
						?>
						</td>
					</tr>
			    
		    <?php } }

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>

			    <tr>
				    	<td><div class="paginator">
						        <ul class="pagination">
						            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
						            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
						            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
						        </ul>
						    </div>
						</td>
				    </tr>  
		    <?php endif; ?>


			


		</table>
	</div>

	<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>

	<div class="well">
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
			<tr>
					<td></td>
					<td class="text-center"><strong>Leyenda</strong></td>
					<td></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-info"><i class='fa fa-exclamation-circle'></i></button>
					<label>Elaborada</label>
				</td>
				<td>
					<button class = "btn btn-success"><i class='fa fa-check'></i></button>
					<label>Comprometida</label>
				</td>
				<td>
					<button class = "btn btn-info"><i class='fa fa-send'></i></button>
					<label>En Ejecucion</label>
				</td>
				<td>
					<button class = "btn btn-success"><i class='fa fa-list'></i></button>
					<label>Aprobada</label>
				</td>

				<td>
					<button class = "btn btn-default"><i class='fa fa-credit-card'></i></button>
					<label>Liquidada</label>
				</td>
			</tr>
		</table>

	</div>

</br>