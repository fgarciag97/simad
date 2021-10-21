<?php $this->assign('title', 'Personal'); ?>

<div class="well">

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Historial de nominas</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<!-------------------------------------------------------------------------------------------->


		<div class="well" >
			<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
				<thead style="text-align: center;">
			        <tr>
					    <td><?= $this->Paginator->sort('tipo_nomina') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('tipo_personal') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('cargo') ?> <i class='fa fa-arrow-down'></i></td>
					    <td><?= $this->Paginator->sort('numero_cuenta') ?> <i class='fa fa-arrow-down'></i></td>
					</tr>
				</thead>
		    
			    <?php if (isset($data) && !empty($data)): 
			    	foreach($data as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->tipo_nomina; ?> </td>
				        <td> <?= $reg->tipo_personal; ?> </td>
				        <td> <?= $reg->cargo; ?> </td>
				        <td> <?= $reg->numero_cuenta; ?> </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>


		  	</table>

		  	<div class="input-group pull-right">
		    	<?= $this->Html->link(__('Atrás'), ['action' => 'view', @$cedula], ['class'=>'btn btn-sm btn-danger']) ;?>
		    </div>
		</div>
</div>