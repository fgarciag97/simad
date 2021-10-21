<?php $this->assign('title', 'Cesta Ticket'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'cestaticket'))) ?>

	<?php if (isset($ct) && !empty($ct)){ ?>

	<table class="table table-responsive" style="width: 90%; position: center; margin-left: 5%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> <?= $this->Paginator->sort('id', 'Requisicion') ?> </td>
				    <td> Tipo Personal </td>
				    <td> Fecha </td>
				    <td> Concepto </td>
				    <td> Estatus </td>
				    <td> Reporte </td>
				    <td> Ver </td>
				</tr>
			</thead>

	    	<?php foreach($ct as $cts){ 

	    		if ($cts->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($cts->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($cts->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($cts->status == 5) {
		            $status = 'APROBADA';
		        }else if ($cts->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($cts->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $cts->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $cts->tipo_personal_denominacion; ?> </td>
			        <td> <?= $cts->quincena_denominacion . " " . $cts->mes_denominacion; ?> </td>
			        <td> <?= $cts->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> 
			        	<!--<?php if($cts->id_tipo_personal == 1 and $cts->tipo == 'CESTA TICKET'){ ?> 

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoEmpleadosFijos', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'ReportesEmpleadosFijos', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($cts->id_tipo_personal == 2 and $cts->tipo == 'CESTA TICKET'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoEmpleadosContratados', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'ReportesEmpleadosContratados', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($cts->id_tipo_personal == 3 and $cts->tipo == 'CESTA TICKET'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'AcumuladoDirectivos', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'ReportesDirectivos', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($cts->id_tipo_personal == 4 and $cts->tipo == 'CESTA TICKET'){ ?>

							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'AcumuladoObrerosFijos', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'ReportesObrerosFijos', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($cts->id_tipo_personal == 5 and $cts->tipo == 'CESTA TICKET'){ ?>
								
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'AcumuladoObrerosContratados', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'ReportesObrerosContratados', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>


						<?php }else if($cts->id_tipo_personal == 14 and $cts->tipo == 'CESTA TICKET'){ ?>
							
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'AcumuladoProteccionCivil', $cts->mes, $cts->id, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'ReportesProteccionCivil', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php }else if($cts->id_tipo_personal == 15 and $cts->tipo == 'CESTA TICKET'){ ?>
							
							<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'ReportesCementerio', $cts->mes, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?php } ?> -->
						<!-- ----------------------------------------------------------------------------->
						<?php 

							if(($cts->id_tipo_personal == 1 or $cts->id_tipo_personal == 2 or $cts->id_tipo_personal == 3) and $cts->tipo == 'CESTA TICKET'){
				        		//-- EXCEL ----------------------------------------------------------------------------->
								echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'excel', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

								//-- TXT -----------------------------------------------------------------------------
								/*echo $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'txt', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));*/

				        	}else if(($cts->id_tipo_personal == 4 or $cts->id_tipo_personal == 5) and $cts->tipo == 'CESTA TICKET'){
				        		//-- EXCEL ----------------------------------------------------------------------------->
								echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'excel', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

								//-- TXT -----------------------------------------------------------------------------
								/*echo $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'txt', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));*/

				        	}else if(($cts->id_tipo_personal == 14) and $cts->tipo == 'CESTA TICKET'){
				        		//-- EXCEL ----------------------------------------------------------------------------->
								echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'excel', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

								//-- TXT -----------------------------------------------------------------------------
								/*echo $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'txt', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));*/
				        	}else if(($cts->id_tipo_personal == 15) and $cts->tipo == 'CESTA TICKET'){
				        		//-- EXCEL ----------------------------------------------------------------------------->
								echo $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'excel', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));

								//-- TXT -----------------------------------------------------------------------------
								/*echo $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'txt', $cts->id_tipo_personal, $cts->mes, $cts->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm'));*/
				        	}
						?>
						

				    </td>
						

				    <td>
				    	<?php 
					    	if(($cts->id_tipo_personal >= 1 and $cts->id_tipo_personal <= 3) and $cts->tipo == 'CESTA TICKET'){
					        		echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'index', $cts->id_tipo_personal, $cts->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
					        	}else if(($cts->id_tipo_personal >= 4 and $cts->id_tipo_personal <= 5) and $cts->tipo == 'CESTA TICKET'){
					        		echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'index', $cts->id_tipo_personal, $cts->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
					        	}else if(($cts->id_tipo_personal == 14) and $cts->tipo == 'CESTA TICKET'){
					        		echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'index', $cts->id_tipo_personal, $cts->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
					        	}else if(($cts->id_tipo_personal == 15) and $cts->tipo == 'CESTA TICKET'){
					        		echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'index', $cts->id_tipo_personal, $cts->mes), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
					        	}
				        ?> 
				    </td>
		    	</tr>
				    
		    <?php } } ?>

		    
	</table>

<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>

	    </div>