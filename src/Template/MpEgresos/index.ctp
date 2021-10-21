<?php $this->assign('title', 'Resolución'); ?>


	<div class="media-body well">

		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>Resolución de Partidas</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

	         <!-- Table -->
		<table class="table table-responsive">
			<thead class="text-center" style="text-align: center;">
		        <tr>
				    <th><?= $this->Paginator->sort('partida') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= $this->Paginator->sort('denominacion') ?> <i class='fa fa-arrow-down'></i></th>
				    <th><?= 'Monto Partida' ?></th>
				    <th><?= 'Monto Ajustado' ?></th>
				    <th><?= 'Monto Comprometido' ?></th>
				    <th><?= $this->Paginator->sort('monto_disponible') ?> <i class='fa fa-arrow-down'></i></th>
				    <th>Acción</th>
				</tr>
			</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){  ?>
			    <tr>
			        <td> <?= $reg->partida; ?> </td>
			        <td> <?= $reg->denominacion; ?> </td>
			        <td> <?= MONEDA . number_format($reg->monto, 2, ',', '.'); ?><br></td>
			        <td> <?= MONEDA . number_format($reg->ajuste, 2, ',', '.'); ?><br></td>
			        <td> <?= MONEDA . number_format(($reg->monto_comprometido_nomina + $reg->monto_comprometido_compra), 2, ',', '.'); ?><br></td>
			        <td> <?= MONEDA . number_format(($reg->monto + $reg->ajuste) - ($reg->monto_comprometido_nomina + $reg->monto_comprometido_compra), 2, ',', '.'); ?><br></td>
			        <td>
			        	<a 
			        	data-toggle="modal" 
			        	partida = "<?= $reg->partida ?>" 
	                     onclick="ajustar(this);" class="btn btn-warning btn-xs">Ajustar</a>
	                </td>
			    </tr>
			    
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


	    <div></div>
	</div>
