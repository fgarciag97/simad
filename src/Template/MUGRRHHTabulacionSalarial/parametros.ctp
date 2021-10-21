 <?php $this->assign('title', 'Parametros Fijos'); ?>

<!------------------------------------------------------------------------------------->

<div class="well">
    <table>
        <tr>
            <td>
                <legend bgcolor="lightblue" style="text-align: center;"> Tabla  % por Antiguedad</legend>

                <table class="table table-responsive">
                    <tr style="background-color: #a22818; color: white; text-align: center;">
                        <td> Años</td>
                        <td> Porcentaje </td>
                        <td> Acción </td>
                    </tr>
      
                    <?php if (isset($prima_antiguedad) && !empty($prima_antiguedad)): 
                        foreach($prima_antiguedad as $tab){  ?>
                            <tr style="text-align: center;">
                                <td> <?= $tab->cantidad ?> </td>
                                <td><?= number_format($tab->porcentaje, 2, ',', '.'); ?></td>
                                <td>
                                  <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                      data-cantidad   ="<?= $tab->cantidad ?>"
                                      data-porcentaje ="<?= number_format($tab->porcentaje, 2, ',', '.'); ?>"
                                      onclick="editar_tabulacion_primas(this);" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                    <?php } else: ?>
                            <tr>
                                <td colspan="7">No existen registros</td>
                            </tr>
                    <?php endif; ?>

                        <br>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                </table>
            </td>

            <td>
                <table class="table table-responsive">
                    <tr>
                        <legend bgcolor="lightblue" style="text-align: center;"> Parametros Fijos </legend><table>
                            <td>
                                <table class="table">
                                    <tr style="background-color: #a22818; color: white; text-align: center;">
                                        <td> # </td>
                                        <td> Denominacion </td>
                                        <td> Monto </td>
                                        <td> Acción </td>
                                    </tr>
              
                                    <?php if (isset($parametros_fijos) && !empty($parametros_fijos)): 
                                        foreach($parametros_fijos as $tab){  ?>
                                            <tr style="text-align: center;">
                                                <td> <?= $tab->id ?> </td>
                                                <td> <?= $tab->descripcion ?> </td>
                                                <td><?= number_format($tab->monto, 2, ',', '.'); ?></td>
                                                <td>
                                                  <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                                      data-id   ="<?= $tab->id ?>"
                                                      data-monto ="<?= number_format($tab->monto, 2, ',', '.'); ?>"
                                                      onclick="parametrosparametros(this);" class="btn btn-warning btn-xs">Editar</a>
                                                </td>
                                            </tr>
                                    <?php } else: ?>
                                            <tr>
                                                <td colspan="7">No existen registros</td>
                                            </tr>
                                    <?php endif; ?>

                                    <br>

                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <legend bgcolor="lightblue" style="text-align: center;"> Prima Profesion </legend>

                                <table class="table">
                                    <tr style="background-color: #a22818; color: white; text-align: center;">
                                        <td> # </td>
                                        <td> profesion </td>
                                        <td> porcentaje </td>
                                        <td> Acción </td>
                                    </tr>
                                
                                    <?php if (isset($grados) && !empty($grados)): 
                                        foreach($grados as $tab){  ?>
                                            <tr style="text-align: center;">
                                                <td> <?= $tab->id ?> </td>
                                                <td> <?= $tab->denominacion ?> </td>
                                                <td><?= number_format($tab->porcentaje, 2, ',', '.'); ?></td>
                                                <td>
                                                  <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                                      data-id   ="<?= $tab->id ?>"
                                                      data-porcentaje ="<?= $tab->porcentaje ?>"
                                                      onclick="parametrosprofesion(this);" class="btn btn-warning btn-xs">Editar</a>
                                                </td>
                                            </tr>
                                      <?php
                                          } else: ?>
                                        <tr>
                                          <td colspan="7">No existen registros</td>
                                        </tr>
                                      <?php endif; ?>

                                      <br>

                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </td>
                  </tr>
                </table>
</div>