<?php $this->assign('title', 'Formulacion - Jubilados y Pensionados'); ?>

<div class="well">

	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> Personal </td>
				    <td> Año Fiscal </td>
				    <td> Año Real </td>
				    <td> Ultimo Año Estimado </td>
				    <td> Año Presupuestario </td>
				    <td> Reporte </td>
				</tr>
			</thead>

	    	<?php foreach(@$calculos as $calculo){ 

	    		if($calculo->tipo == 'JUBILADOS' or $calculo->tipo == 'PENSIONADOS'){ ?>

		    	<tr style="text-align: center;">
			        <td> <?= $calculo->tipo . " - " . $calculo->subtipo; ?> </td>
			        <td> <?= $calculo->ano; ?> </td>
			        <td> 
		        		<a 
			         		data-toggle = "modal" 
						    ano_real_femenino = "<?= $calculo->ano_real_femenino; ?>"
						    ano_real_maculino = "<?= $calculo->ano_real_maculino; ?>"
						    ano_real_monto = "<?= number_format($calculo->ano_real_monto, 2, ',', '.'); ?>"
						    ano_real_incidencias = "<?= number_format($calculo->ano_real_incidencias, 2, ',', '.'); ?>"
				            onclick="ver_ano_real(this);" class="btn btn-success btn-sm"><i class='fa fa-check'></i>
				        </a>
			    	</td>
			        <td>
			        	<?php 
			        		if($calculo->ultimo_ano_femenino != 0 and $calculo->ultimo_ano_maculino != 0){ ?>
				        		<a
					         		data-toggle = "modal" 
								    ultimo_ano_id = "<?= $calculo->id; ?>"
								    ultimo_ano_femenino = "<?= $calculo->ultimo_ano_femenino; ?>"
								    ultimo_ano_maculino = "<?= $calculo->ultimo_ano_maculino; ?>"
								    ultimo_ano_monto = "<?= number_format($calculo->ultimo_ano_monto, 2, ',', '.'); ?>"
								    ultimo_ano_incidencias = "<?= number_format($calculo->ultimo_ano_incidencias, 2, ',', '.'); ?>"
						            onclick="ver_ultimo_ano(this);" 
						            class="btn btn-success btn-sm">
						            <i class='fa fa-check'></i>
						        </a>
						<?php }else{ ?>
								<a
					         		data-toggle = "modal" 
								    ultimo_ano_id = "<?= $calculo->id; ?>"
								    ultimo_ano_femenino = "<?= $calculo->ultimo_ano_femenino; ?>"
								    ultimo_ano_maculino = "<?= $calculo->ultimo_ano_maculino; ?>"
								    ultimo_ano_monto = "<?= number_format($calculo->ultimo_ano_monto, 2, ',', '.'); ?>"
								    ultimo_ano_incidencias = "<?= number_format($calculo->ultimo_ano_incidencias, 2, ',', '.'); ?>"
						            onclick="ver_ultimo_ano(this);" class="btn btn-warning btn-sm"><i class='fa fa-exclamation'></i> 
						        </a>
						<?php } ?>
			        </td>
			        <td>
			        	<?php 
			        		if($calculo->ano_presupuestado_femenino != 0 and $calculo->ano_presupuestado_maculino != 0){ ?>
				        		<a
					         		data-toggle = "modal" 
								    ano_presupuestado_femenino = "<?= $calculo->ano_presupuestado_femenino; ?>"
								    ano_presupuestado_maculino = "<?= $calculo->ano_presupuestado_maculino; ?>"
								    ano_presupuestado_monto = "<?= number_format($calculo->ano_presupuestado_monto, 2, ',', '.'); ?>"
								    ano_presupuestado_incidencias = "<?= number_format($calculo->ano_presupuestado_incidencias, 2, ',', '.'); ?>"
						            onclick="ver_ano_presupuestado(this);" 
						            class="btn btn-success btn-sm">
						            <i class='fa fa-check'></i>
						        </a>
						<?php }else{ ?>
								<a
									data-toggle = "modal" 
								    ano_presupuestado_femenino = "<?= $calculo->ano_presupuestado_femenino; ?>"
								    ano_presupuestado_maculino = "<?= $calculo->ano_presupuestado_maculino; ?>"
								    ano_presupuestado_monto = "<?= number_format($calculo->ano_presupuestado_monto, 2, ',', '.'); ?>"
								    ano_presupuestado_incidencias = "<?= number_format($calculo->ano_presupuestado_incidencias, 2, ',', '.'); ?>"
						            onclick="ver_ano_presupuestado(this);" 
						            class="btn btn-warning btn-sm">
									<i class='fa fa-exclamation'></i> 
						        </a>
						<?php } ?>
			        </td>
			        <td> 
			        	<?php 
				        	if($calculo->ano_presupuestado_femenino != 0 and $calculo->ano_presupuestado_maculino != 0){ 
				        		echo $this->Html->link("<i class='fa fa-file-pdf-o'> Reporte </i>",array('controller' => 'MrrhhFormulacionReportes', 'action' => 'reportejubpen', $calculo->id, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-default', 'target' => '_blank'));
				        	} 
				        ?>
				    </td>
		    	</tr>
			<?php } } ?>
	</table>
</div>