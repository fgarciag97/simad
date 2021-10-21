<?php $this->assign('title', 'Requisición - Transferencias'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Requisición - Transferencias</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<!------------------------------------------------------------------------------------->

	<table class="table table-responsive">
		<thead style="text-align: center;">
	        <tr>
			    <td>Beneficiarios</td>
			    <td> </td>
			</tr>
		</thead>

		<tr style="text-align: center;">
	        <td> Total: <?= @$total_beneficiarios; ?> </td>
	        <td> <?= $this->html->Link('Ver Todos', ['controller' => 'EjecucionBeneficiarios', 'action' => 'index'], ['class' => 'btn btn-warning btn-xs']); ?> </td>
		</tr>
	</table>

	<!------------------------------------------------------------------------------------->



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

	                      <th>
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


	
	<!------------------------------------------------------------------------------------->

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('numero_orden_pago', 'Orden N°') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('beneficiario') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('total') ?> <i class='fa fa-arrow-down'></i></td>
				    <td>Acción</td>
				    <td>Enviar a Ordenamiento</td>
				</tr>
			</thead>
	    
		    <?php if (isset($data) && !empty($data)): 
		    	foreach($data as $reg){ ?>
			    <tr style="text-align: center;">

			    	<?php
                        $n = 6 - strlen($reg->numero_orden_pago);
                        $numero_orden_pago = '';
                        for($i=0; $i < $n; $i++){
                            $numero_orden_pago .= "0";
                        }
                        $numero_orden_pago .= $reg->numero_orden_pago; ?>

			        <td> <?= $numero_orden_pago; ?> </td>
			        <td> <?= $reg->fecha; ?> </td>
			        <td> <?= $reg->beneficiario; ?> </td>
			        <td> <?= number_format($reg->total , 2, ',', '.') ?> </td>
			        <td>
		         		<?php 
		         			if($reg->status == 2){ 
		         				echo $this->html->Link('Ver', ['action' => 'view', $reg->id, $reg->requisicion], ['class' => 'btn btn-warning btn-xs']);
		         				echo $this->form->postlink("Eliminar", ['action' => 'delete', $reg->id], ['class'=>'btn btn-danger btn-xs', 'scape' => -1, 'label' => false, 'confirm' => __('Desea eliminar la orden # {0}?', $reg->requisicion)]); 
		         			} 
		         		?>

		         		<?php 
		         			if($reg->total != null){
		         				echo $this->html->link("Reporte", ['action' => 'reporte', $reg->id, $reg->requisicion, 'PDF'], ['class'=>'btn btn-default btn-xs', 'scape' => -1, 'label' => false, 'target' => '_blank']); 
		         			}
		         		?>    		
		        	</td>
		        	<td>
		        		<?php 
		         			if($reg->status == 2){ 
		         				echo $this->html->Link('Enviar', ['action' => 'enviar', $reg->requisicion], ['class' => 'btn btn-success btn-xs', 'confirm' => __('Desea enviar la orden # {0}?', $numero_orden_pago)]);
		         			}else if($reg->status == 4){ 
		        				echo $this->html->Link('En Ejecucion', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 5){ 
		        				echo $this->html->Link('Aprobada', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 6){ 
		        				echo $this->html->Link('En Tesoreria', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}else if($reg->status == 7){ 
		        				echo $this->html->Link('Liquidada', ['action' => ''], ['class' => 'btn btn-default btn-xs', 'disabled']);
		        			}
		        		?>
		        	</td>
			    </tr>

			    	<?php @$total += $reg->sub_total; ?>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
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

	    <hr>

		<tr>
			<td>					    	
				<?= $this->html->Link('Crear', ['action' => 'add'],['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</div>
