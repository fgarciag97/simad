<form action="" method="post" id="fo_form_fin">
    <div class="modal fade" id="fo_fin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"><strong>ASIGNACION DE BONO FIN DE AÑO</strong></th>
                    <th></th>
                  </tr>
                </thead>
            </table>

            <input type="text" id="fo_tpso" name="tps" readonly hidden>
            <input type="text" id="fo_dso" name="ds" readonly hidden>
            <input type="text" id="fo_hso" name="hs" readonly hidden>

            <div class="modal-body">
              <table class="table table-responsive">
                  <tr>
                      <td><span class="">Cedula</span></td>
                      <td><span class="">Apellidos</span></td>
                      <td><span class="">Nombres</span></td>
                  </tr>

                  <tr>
                      <td> 
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="fo_cedulao" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="fo_apellidoso" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="fo_nombreso"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="fo_cargoo"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="fo_sueldo_baseo"readonly>
                      </div>
                    </td>
            </table>

              <table class="table table-responsive">

                <tr>
                    <td><span class="">Prima Antiguedad (Quinc.)</span></td>
                    <td><span class="">Prima Profesion (Quinc.)</span></td>
                    <td><span class="">Prima Hijos (Quinc.)</span></td>
                    <td><span class="">Prima Hogar</span></td>
                </tr>

                <tr>
                  <td><div class="input-group" on>
                      <input type="text" name="prima_antiguedad" id="fo_prima_antiguedado" class="moneda form-control" onKeyPress='return soloNum(event);'>
                    </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_profesion" id="fo_prima_profesiono" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hijos" id="fo_prima_hijoso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hogar" id="fo_prima_hogaro" class="form-control" onkeyup='mayus(this);' placeholder="SI/NO" onKeyPress = 'return soloLetras(event);' maxlength="2">
                      </div>
                  </td>
                </tr>
            </table>

            <?php if($tps == 4){ ?>
            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias</span>
                        <input type="text" class="form-control" name="dias" id="fo_dias5" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Horas Extras</span>
                        <input type="text" class="form-control" name="horas_extras" id="fo_horas_extraso" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>
            </table>
            <?php } ?>

            <?php if($tps == 5){ ?>
            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias de Vacaciones</span>
                        <input type="text" class="form-control" name="dias_d" id="fo_dias_do" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias de Bono Vacacional</span>
                        <input type="text" class="form-control" name="dias_bono" id="fo_dias_bonoo" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Horas Extras</span>
                        <input type="text" class="moneda form-control" name="horas_extras" id="fo_horas_extraso" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>
                  </tr>
            </table>
            <?php } ?>


            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div iclass="input-group" on>
                          <span class="input-group-addon">Fecha desde</span>
                          <input type="date" id="fo_fecha_desdeo" name="fecha_desde" autocomplete="off" >
                      </div>

                    </td>

                    <td>
                      <div iclass="input-group" on>
                          <span class="input-group-addon">Fecha hasta</span>
                          <input type="date" id="fo_fecha_hastao" name="fecha_hasta" autocomplete="off" >
                      </div>
                    </td>

                    <td>
                      <div iclass="input-group" on>
                          <span class="input-group-addon">Fecha de Reintegro</span>
                          <input type="date" id="fo_fecha_reintegroo" name="fecha_reintegro" autocomplete="off" >
                      </div>
                    </td>
            </table>

            <?php if($tps == 4){ ?>
            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div iclass="input-group" on>
                          <span class="input-group-addon">Cantidad de dias de Vacaciones</span>
                          <input type="text" class="form-control" id="fo_cantidad_diaso" name="cantidad_dias" autocomplete="off">
                      </div>
                    </td>
            </table>
            <?php } ?>

                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Asignar</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
</form>