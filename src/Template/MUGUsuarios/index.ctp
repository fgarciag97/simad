 <?php $this->assign('title', 'Usuarios'); ?>

<div class="well">
	<legend bgcolor="lightblue" style="text-align: center;"> Usuarios</legend>

	<table class="table">
        <tr style="background-color: #a22818; color: white; text-align: center;">
		    <td><?= $this->Paginator->sort('username') ?> <i class='fa fa-arrow-down'></i></td>
		    <td><?= $this->Paginator->sort('responsable') ?> <i class='fa fa-arrow-down'></i></td>
		    <td> Acceso a: </td>
		    <td>Acción</td>
		</tr>
    
	    <?php if (isset($usuarios) && !empty($usuarios)): 
	    	foreach($usuarios as $reg){ 
			    if($reg->username != 'FGARCIAG97' and $reg->username != 'BLANCO' and $reg->username != 'JOSEFSANCHEZ'): ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->username; ?> </td>
				        <td> <?= $reg->responsable; ?> </td>
				        <td>  
				        	<?php
				        		$i = 0;
				        		if($reg->presupuestof) $i++;
				        		if($reg->rrhh) $i++;
				        		if($reg->tesoreria) $i++;
				        		if($reg->usogeneral) $i++;
				        		if ($i==4) echo "<p style='color:green'>Acceso Total</p>";
				        		else if($i!=0) echo $i . " modulos";
				        		else echo "<p style='color:red'>Sin acceso</p>";
				        	?>
				        </td>
				        <td>
				         	<?= $this->Html->link('Editar', ['action' => 'editar', $reg->id], ['class' => 'btn btn-warning btn-xs']) ?>
				         	<?= $this->Form->postLink('Eliminar', ['action' => 'delete', $reg->id], ['confirm' => __('Seguro que desea eliminar el usuario?'), 'class' => 'btn btn-danger btn-xs']) ?>
				        </td>
				    </tr>
			<?php
				endif;
	     		} else: ?>
		    <tr>
		    	<td colspan="7">No existen registros</td>
		    </tr>
	    <?php endif; ?>

	    	<br>

		    <tr>
		        <td> </td>
		        <td> </td>
		        <td>  </td>
		        <td> </td>
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
  	</table>

  	<!--
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers(['before' => ' ', 'after' => ' ']) ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p>
        	<?= $this->Paginator->counter(['format' => 'Pagina {{page}} de {{pages}}']) ?>
        </p>
    </div>
	-->
	<?= $this->Html->link(__('Registrar'), ['action' => 'registrar'], ['class' => 'btn btn-success btn-sm']) ?>
</div>

