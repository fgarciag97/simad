<?php $this->assign('title', 'Ordenamiento de Pago - Requisicion de Servicios'); ?>

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
	                              <div class="form-group col-md-8">
	                                <label for="inputCity"> Requisición</label>
	                                <?= @$this->Form->input('req', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 10% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-8">
	                                <label for="inputCity"> Numero Orden</label>
	                                <?= @$this->Form->input('op', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 10% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-8">
	                                <label for="inputCity"> Orden Pago</label>
	                                <?= @$this->Form->input('op2', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 10% 0">
	                                <?= $this->Form->button('Filtrar', ['class'=>'btn btn-primary']); ?>
	                              </div>
	                            </div>
	                          </div>
	                      </th>

	                      <th>
	                        <div class="form-group">
	                            <div class="form-row">
	                              <div class="form-group col-md-6">
	                                <label for="inputCity"> Rango de Fecha</label>
	                                <input type="date" name="d">
	                                <input type="date" name="h">
	                              </div>
	                              <div class="form-group col-md-2" style="margin: 7% 0">
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
				<th class="text-center"><strong>Ordenamiento de Pago - Requisicion de Servicios</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<thead style="text-align: center;">
	        <tr>
			    <td><?= $this->Paginator->sort('id', 'Requisicion') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('numero_orden_pago_ord', 'Pago') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('fecha_rrhh', 'Fecha') ?> <i class='fa fa-arrow-down'></i></td>
			    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
			    <td>Reporte</td>
			    <td>Acción</td>
			</tr>
		</thead>

		<?php if (isset($data) && !empty($data)): 
	    	foreach($data as $reg){ 

                    $n = 10 - strlen($reg->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $reg->id; 

                    $n = 6 - strlen($reg->numero_orden_pago);
                    $numero_orden_pago = '';
                    for($i=0; $i < $n; $i++){
                        $numero_orden_pago .= "0";
                    }
                    $numero_orden_pago .= $reg->numero_orden_pago; 

                    if($reg->numero_orden_pago_ord != ''){
	                    $n = 6 - strlen($reg->numero_orden_pago_ord);
	                    $numero_orden_pago_ord = '';
	                    for($i=0; $i < $n; $i++){
	                        $numero_orden_pago_ord .= "0";
	                    }
	                    $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                    }else{
                    	$numero_orden_pago_ord = null;
                    }
                ?>

			 <tr style="text-align: center;">
		    	<td><label> <?= $requisicion ?> </label></td>
		    	<td><label> <?= $numero_orden_pago ?> </label></td>
		    	<td><label> <?= $numero_orden_pago_ord ?> </label></td>
		    	<td><label> <?= $reg->fecha_rrhh  ?></label></td>
		    	<td><?= number_format($reg->monto, 2, ',', '.') ?></td>
		    	<td>
		    		<?php 
		    			
		    			if($reg->status == 5){
							echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('action' => 'reportereqserviciocomprometido', $reg->id, $numero_orden_pago, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
	    				}else{
							echo $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte",array('controller' => 'EjecucionHistorialOrdenes', 'action' => 'reportereqservicio', $reg->id, $numero_orden_pago, 'PDF'), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));
	    				}
					?>
		    	</td>
		    	<td>
		    		<?php 
						if($reg->status == 4){
							echo $this->Html->link("<i class='fa fa-exclamation-circle'></i>",array('action' => 'ordenarreqservicio', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info'));
						}else if($reg->status == 5){
							echo $this->Html->link("<i class='fa fa-list'></i>",array('action' => 'ordenarreqservicio', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success'));
						?>

							<a
				         		data-toggle = "modal" 
				         		id = "<?= @$reg->id; ?>" 
				         		fecha_rrhh = "<?= @date_format($reg->fecha_rrhh, "Y-m-d"); ?>" 
				         		fecha_ejecucion = "<?= @date_format($reg->fecha_ejecucion, "Y-m-d"); ?>" 
				         		fecha_ordenamiento = "<?= @date_format($reg->fecha_ordenamiento, "Y-m-d"); ?>" 
				         		numero_orden_pago_ord = "<?= $reg->numero_orden_pago_ord; ?>" 
					            
					            onclick="numeroordenservicio(this);" class="btn btn-info"><i class='fa fa-pencil'></i>
					        </a>

					<?php }
					?>
		    	</td>
		    </tr>

		<?php } 

	    else: ?>
		    <tr>
		    	<td colspan="7">No existen registros</td>
		    </tr>

	    <?php endif; ?>
		      
		</div>
	</table>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
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
					<button class = "btn btn-info btn-xs"><i class='fa fa-exclamation-circle'></i></button>
					<label>Pendiente</label>
				</td>
				<td></td>
				<td>
					<button class = "btn btn-success btn-xs"><i class='fa fa-list'></i></button>
					<label>Aprobada</label>
				</td>
			</tr>
		</table>

	</div>
