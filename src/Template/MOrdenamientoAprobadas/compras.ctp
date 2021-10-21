<?php $this->assign('title', 'Historial de Orden de Compra'); ?>

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
				<th class="text-center"><strong>Ordenes Aprobadas - Compra</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				     <td>Requisicion</td>
				    <td>Orden</td>
				    <td>Pago</td>
				    <td>Fecha</td>
				    <td>Tipo Orden</td>
				    <td>Monto</td>
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

                        $n = 10 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; 

                        $n = 10 - strlen($reg->numero_orden_pago_ord);
                        $numero_orden_pago_ord = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago_ord .= "0";
                        }
                        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 
                    ?>

                    <?php 
                    	$monto = number_format(@$reg->monto, 2, ',', '.');
                    ?>

				 <tr style="text-align: center;">
			    	<td><label> <?= $requisicion ?> </label></td>
			    	<td><label> <?= $numero_orden_pago ?> </label></td>
			    	<td><label> <?= $numero_orden_pago_ord ?> </label></td>
			    	<td><label> <?= $reg->mes_denominacion . "-" . $reg->ano . " - " . $reg->fecha_rrhh  ?></label></td>
			    	<td><?= $reg->tipo ?></td>
			    	<td><?= @$monto ?></td>
			    	<td>
			    		
			    	</td>
			    	<td>
			    		<?php 
							if($reg->status == 5){
								echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'enviarcompra', $reg->id), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-success', 'confirm' => __('Desea enviar a tesoreria la orden # {0}?', $numero_orden_pago)));
							}else if($reg->status == 6){
								echo $this->Html->link("<i class='fa fa-send'></i>",array('action' => ''), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-info', 'disabled'));
							}
						?>
			    	</td>
			    </tr>

			<?php } 

		    else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>

			    
		    <?php endif; ?>
	
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












<div class="well">
		<table class="table table-responsive" style="width: 30%; position: center; margin-left: 30%; padding: 10px;">
			<tr>
					<td></td>
					<td class="text-center"><strong>Leyenda</strong></td>
					<td></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button>
					<label>Aprobada</label>
				</td>
				<td></td>
				<td>
					<button class = "btn btn-info btn-xs"><i class='fa fa-send'></i></button>
					<label>En Tesoreria</label>
				</td>
			</tr>
		</table>

	</div>