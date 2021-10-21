<?php $this->assign('title', 'Bono de Estabilidad'); ?>

<?= $this->Form->create('MRRHHRequisicion', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHNomina', 'action' => 'bonoestabilidad'))) ?>

	<?php if (isset($be) && !empty($be)){ ?>

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

	    	<?php foreach($be as $bes){ 

	    		if ($bes->status == 1) {
		            $status = 'ELABORADA';
		        }else if ($bes->status == 2) {
		            $status = 'COMPROMETIDA';
		        }else if ($bes->status == 4) {
		            $status = 'EN EJECUCION';
		        }else if ($bes->status == 5) {
		            $status = 'APROBADA';
		        }else if ($bes->status == 6) {
		            $status = 'LIQUIDADO';
		        }

                    $n = 10 - strlen($bes->id);
                    $requisicion = '';
                    for($i=0; $i < $n; $i++){
                        $requisicion .= "0";
                    }
                    $requisicion .= $bes->id; 
                ?>

		    	<tr style="text-align: center;">
			        <td> <?= $requisicion; ?> </td>
			        <td> <?= $bes->tipo_personal_denominacion; ?> </td>
			        <td> <?= $bes->quincena_denominacion . " " . $bes->mes_denominacion; ?> </td>
			        <td> <?= $bes->concepto ?> </td>
			        <td> <?= @$status ?> </td>
			        <td> <!--
			        	<?php if($bes->id_tipo_personal == 1 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>  
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosFijos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'BonoEstabilidadEmpleadosFijos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 2 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
							
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosContratados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'BonoEstabilidadEmpleadosContratados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 3 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'AcumuladoBonoEstabilidadDirectos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaEmpleadosReporte', 'action' => 'BonoEstabilidadDirectivos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 4 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosFijos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'BonoEstabilidadObrerosFijos', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 5 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
							
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosContratados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'BonoEstabilidadObrerosContratados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 6 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosNP', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaObrerosReporte', 'action' => 'BonoEstabilidadObrerosNP', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 7 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosEmpleados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'BonoEstabilidadJubiladosEmpleados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 8 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
							
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'AcumuladoBonoEstabilidadJubiladosObreros', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaJubiladosReporte', 'action' => 'BonoEstabilidadJubiladosObreros', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 9 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPensionados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'BonoEstabilidadEmpleadosPensionados', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
							
					<?php }else if($bes->id_tipo_personal == 10 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
							
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPS', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'BonoEstabilidadEmpleadosPS', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 11 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoEstabilidadEmpleadosPE', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'BonoEstabilidadEmpleadosPE', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 12 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPS', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'BonoEstabilidadObrerosPS', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 13 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>

						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Acumulado",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'AcumuladoBonoEstabilidadObrerosPE', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i>  Resumen Nomina",array('controller' => 'MRRHHNominaPensionadosReporte', 'action' => 'BonoEstabilidadObrerosPE', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1', 'target' => '_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php }else if($bes->id_tipo_personal == 14 and $bes->tipo == 'BONO ESTABILIDAD'){ ?>
						
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Acumulado",array('controller' => '', 'action' => '', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>
						<?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reporte Nomina ",array('controller' => '', 'action' => '', $bes->mes, $bes->quincena, "PDF"), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

					<?php } ?> -->
					<!-- ----------------------------------------------------------------------------->
					<?php if($bes->tipo == 'BONO ESTABILIDAD'){ ?>
						<!-- EXCEL ----------------------------------------------------------------------------->
						<?= $this->Html->link("<i class='fa fa-file-excel-o'></i> Hoja de Calculo",array('controller' => 'MRRHHNomina', 'action' => 'excelbe', $bes->id_tipo_personal, $bes->mes, $bes->quincena,  $bes->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?>

						<!-- TXT ----------------------------------------------------------------------------->
						<!-- <?= $this->Html->link("<i class='fa fa-file-text-o'></i> TXT ",array('controller' => 'MRRHHNomina', 'action' => 'txtbe', $bes->id_tipo_personal, $bes->mes, $bes->quincena,  $bes->id), array('tabindex' => '-1','target'=>'_blank','escape' => false, 'class' => 'btn btn-default btn-sm')) ?> -->
					<?php } ?>

				    </td>
						

				    <td>
				    	<?php 
				    	if($bes->tipo == 'BONO ESTABILIDAD'){
				        	echo $this->Html->link("<i class='fa fa-search'></i> Ver",array('controller' => 'MRRHHBonoEstabilidad', 'action' => 'index', $bes->id_tipo_personal, $bes->mes, $bes->quincena), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
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
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>