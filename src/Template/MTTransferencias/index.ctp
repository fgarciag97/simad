<?php $this->assign('title', 'Orden de Compra'); ?>

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
				<th class="text-center"><strong> Ordenes por Liquidar</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('id', 'Requisicion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'N° de Orden') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero_orden_pago_ord', 'N° Pago') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('mes', 'Fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('razon_social') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('Monto') ?> <i class='fa fa-arrow-down'></i></td>
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

	                    if($reg->tipo == 'TRANSFERENCIA'){
	                    	$fecha = @date_format($reg->fecha_ordenamiento, 'd/m/Y');
	                    }else{
	                    	$fecha = $reg->mes_denominacion . "-" . $reg->ano;
	                    }

                    ?>

					<tr style="text-align: center;">
						<td> <label><?= $requisicion ?></label></td>
						<td> <label><?= $numero_orden_pago ?></label></td>
						<td> <label><?= $numero_orden_pago_ord ?></label></td>
						<td> <label><?= $fecha  ?></label> </td>
						<td> <?= $reg->tipo ?> </td>
						<td> ALCALDIA DE MIRANDA </td>
						<td> <?= number_format(@$reg->monto, 2, ',', '.') ?> </td>
						<td> 
							<?php 
								if($reg->status == 6){
									echo $this->Html->link("<i class='fa fa-check'></i>",array('action' => 'liquidar', $reg->id, $reg->numero_orden_pago, $reg->numero_orden_pago_ord), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-success')); 
								}else if($reg->status == 7){
									echo $this->Html->link("<i class='fa fa-credit-card'></i>",array('action' => 'liquidar', $reg->id, $reg->numero_orden_pago, $reg->numero_orden_pago_ord), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default')); 
								}
							?>
							
						</td>
					</tr>

				<?php } 
			 endif; ?>


		</table>
 
	<div class="well">
		<table class="table table-responsive" style="width: 26%; position: center; margin-left: 40%; padding: 10px;">
			<tr>
				<td>
					<button class = "btn btn-success btn-sm"><i class='fa fa-check'></i></button>
					<label>Comprometida</label>
				</td>
			</tr>
		</table>

	</div>

	</div>