 <?php $this->assign('title', 'Tabulación Salarial'); ?>

<div class="well">

  <table class="table table-responsive" style="margin-left: 15%; width: 70%;">
    <tr>
      <td><legend bgcolor="lightblue" style="text-align: center;"> Sueldo Minimo</legend>

              <table class="table">
                    <tr style="background-color: #a22818; color: white; text-align: center;">
                    <td> # </td>
                    <td> Sueldo Base </td>
                    <td> Acción </td>
                </tr>
                
                  <?php if (isset($tabulacion_obreros_no_permanentes) && !empty($tabulacion_obreros_no_permanentes)): 
                    foreach($tabulacion_obreros_no_permanentes as $tab){  ?>
                        <tr style="text-align: center;">
                            <td> <?= $tab->id ?> </td>
                            <td><?= number_format($tab->sueldo_base, 2, ',', '.'); ?></td>
                            <td>
                              <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                  data-id   ="<?= $tab->id ?>"
                                  data-grupo   ="<?= $tab->grupo ?>"
                                  data-sueldobase ="<?= number_format($tab->sueldo_base, 2, ',', '.'); ?>"
                                  onclick="editar_tabulacion_obreros_no_permanentes(this);" class="btn btn-warning btn-xs">Editar</a>
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

      <td><legend bgcolor="lightblue" style="text-align: center;"> Aumento Rotativo por Nivel</legend>

              <table class="table">
                    <tr style="background-color: #a22818; color: white; text-align: center;">
                    <td> # </td>
                    <td> Tipo Personal </td>
                    <td> monto </td>
                    <td> Acción </td>
                </tr>
                
                  <?php if (isset($aumento_nivel) && !empty($aumento_nivel)): 
                    foreach($aumento_nivel as $tab){  ?>
                        <tr style="text-align: center;">
                            <td> <?= $tab->id ?> </td>
                            <td> <?= $tab->denominacion ?> </td>
                            <td><?= number_format($tab->monto, 2, ',', '.'); ?></td>
                            <td>
                              <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                  data-id   ="<?= $tab->id ?>"
                                  data-grupo   ="<?= $tab->grupo ?>"
                                  data-sueldobase ="<?= number_format($tab->monto, 2, ',', '.'); ?>"
                                  onclick="editar_tabulacion_rotativo(this);" class="btn btn-warning btn-xs">Editar</a>
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



  <legend bgcolor="lightblue" style="text-align: center;"> Tabulación Salarial - Empleados</legend>

  <table class="table">
        <tr style="background-color: #a22818; color: white; text-align: center;">
        <td> # </td>
        <td> Nivel I </td>
        <td> Nivel II </td>
        <td> Nivel III </td>
        <td> Nivel IV </td>
        <td> Nivel V </td>
        <td> Nivel VI </td>
        <td> Nivel VII </td>
        <td> Acción </td>
    </tr>
    
      <?php if (isset($tabulacion_empleados) && !empty($tabulacion_empleados)): 
        foreach($tabulacion_empleados as $tab){  ?>
            <tr style="text-align: center;">
            
              <?php if($tab->id == 1) { ?>
                 <td> BI </td>
              <?php } else if($tab->id == 2) { ?>
                 <td> BII </td>
              <?php } else if($tab->id == 3) { ?>
                 <td> BIII </td>
              <?php } else if($tab->id == 4) { ?>
                 <td> TI </td>
              <?php } else if($tab->id == 5) { ?>
                 <td> TII </td>
              <?php } else if($tab->id == 6) { ?>
                 <td> PI </td>
              <?php } else if($tab->id == 7) { ?>
                 <td> PII </td>
              <?php } else if($tab->id == 8) { ?>
                 <td> PIII </td>
              <?php } else if($tab->id >= 9) { ?>
                 <td> DIR </td>
              <?php } else {} ?> 


                <td><?= number_format($tab->sueldo_base, 2, ',', '.'); ?></td>
                <?php for ($i=1; $i < 7 ; $i++): ?>
                  <td> <?= number_format($tab->sueldo_base + ($i * @$saltos), 2, ',', '.'); ?> </td>
                <?php endfor; ?>
                <td>
                  <a data-toggle="modal" id = "<?= $tab->id ?>" 
                      data-id   ="<?= $tab->id ?>"
                      data-grupo   ="<?= $tab->grupo ?>"
                      data-sueldobase ="<?= number_format($tab->sueldo_base, 2, ',', '.'); ?>"
                      onclick="editar_tabulacion_empleados(this);" class="btn btn-warning btn-xs">Editar</a>
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
</div>

<!------------------------------------------------------------------------------------->

<div class="well">

  <table class="table table-responsive">

    <tr>
      <td><legend bgcolor="lightblue" style="text-align: center;"> Tabulación Salarial - Directivos</legend>

        <table class="table">
              <tr style="background-color: #a22818; color: white; text-align: center;">
              <td> # </td>
              <td> Salario Base </td>
              <td> Acción </td>
          </tr>
          
            <?php if (isset($tabulacion_directivos) && !empty($tabulacion_directivos)): 
              foreach($tabulacion_directivos as $tab){  ?>
                  <tr style="text-align: center;">
                      <td> <?= $tab->id ?> </td>
                      <td><?= number_format($tab->sueldo_base, 2, ',', '.'); ?></td>
                      <td>
                        <a data-toggle="modal" id = "<?= $tab->id ?>" 
                            data-id   ="<?= $tab->id ?>"
                            data-grupo   ="<?= $tab->grupo ?>"
                            data-sueldobase ="<?= number_format($tab->sueldo_base, 2, ',', '.'); ?>"
                            onclick="editar_tabulacion_directivos(this);" class="btn btn-warning btn-xs">Editar</a>
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
              </tr>
          </table>
        </td>

        <td><legend bgcolor="lightblue" style="text-align: center;"> Tabulación Salarial - Obreros</legend>

          <table class="table">
                <tr style="background-color: #a22818; color: white; text-align: center;">
                <td> # </td>
                <td> Sueldo Base </td>
                <td> Acción </td>
            </tr>
            
              <?php if (isset($tabulacion_obreros) && !empty($tabulacion_obreros)): 
                foreach($tabulacion_obreros as $tab){  ?>
                    <tr style="text-align: center;">
                        <td> <?= $tab->id ?> </td>
                        <td><?= number_format($tab->sueldo_base, 2, ',', '.'); ?></td>
                        <td>
                          <a data-toggle="modal" id = "<?= $tab->id ?>" 
                              data-id   ="<?= $tab->id ?>"
                              data-grupo   ="<?= $tab->grupo ?>"
                              data-sueldobase ="<?= number_format($tab->sueldo_base, 2, ',', '.'); ?>"
                              onclick="editar_tabulacion_obreros(this);" class="btn btn-warning btn-xs">Editar</a>
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

          <td><legend bgcolor="lightblue" style="text-align: center;"> Tabulación Salarial - Protección Civil</legend>

            <table class="table">
                  <tr style="background-color: #a22818; color: white; text-align: center;">
                  <td> # </td>
                  <td> Sueldo Base </td>
                  <td> Acción </td>
              </tr>
              
                <?php if (isset($tabulacion_proteccion_civil) && !empty($tabulacion_proteccion_civil)): 
                  foreach($tabulacion_proteccion_civil as $tab){  ?>
                      <tr style="text-align: center;">
                          <td> <?= $tab->id ?> </td>
                          <td><?= number_format($tab->sueldo_base, 2, ',', '.'); ?></td>
                          <td>
                            <a data-toggle="modal" id = "<?= $tab->id ?>" 
                                data-id   ="<?= $tab->id ?>"
                                data-grupo   ="<?= $tab->grupo ?>"
                                data-sueldobase ="<?= number_format($tab->sueldo_base, 2, ',', '.'); ?>"
                                onclick="editar_tabulacion_proteccion_civil(this);" class="btn btn-warning btn-xs">Editar</a>
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
  
</div>
