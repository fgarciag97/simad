<form action="" method="post" id="form_vaco">
    <div class="modal fade" id="vaco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"><strong>ASIGNACION DE VACACIONES</strong></th>
                    <th></th>
                  </tr>
                </thead>
            </table>

            <input type="text" id="tpso" name="tps" readonly hidden>
            <input type="text" id="mso" name="ms" readonly hidden>
            <input type="text" id="qso" name="qs" readonly hidden>

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
                          <input type="text" class="form-control" id="cedulao" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="apellidoso" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="nombreso"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="cargoo"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="sueldo_baseo"readonly>
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
                      <input type="text" name="prima_antiguedad" id="prima_antiguedado" class="moneda form-control" onKeyPress='return soloNum(event);'>
                    </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_profesion" id="prima_profesiono" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hijos" id="prima_hijoso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hogar" id="prima_hogaro" class="form-control" onkeyup='mayus(this);' placeholder="SI/NO" onKeyPress = 'return soloLetras(event);' maxlength="2">
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
                        <input type="text" class="form-control" name="dias" id="dias5" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Horas Extras</span>
                        <input type="text" class="form-control" name="horas_extras" id="horas_extraso" onKeyPress='return soloNum(event);'>
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
                        <input type="text" class="form-control" name="dias_d" id="dias_do" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias de Bono Vacacional</span>
                        <input type="text" class="form-control" name="dias_bono" id="dias_bonoo" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Horas Extras</span>
                        <input type="text" class="moneda form-control" name="horas_extras" id="horas_extraso" onKeyPress='return soloNum(event);'>
                      </div>
                    </td>
                  </tr>
            </table>
            <?php } ?>


            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div id="" class="input-group" on>
                          <span class="input-group-addon">Fecha desde</span>
                          <input type="date" id="fecha_desdeo" name="fecha_desde" autocomplete="off" >
                      </div>

                    </td>

                    <td>
                      <div id="" class="input-group" on>
                          <span class="input-group-addon">Fecha hasta</span>
                          <input type="date" id="fecha_hastao" name="fecha_hasta" autocomplete="off" >
                      </div>
                    </td>

                    <td>
                      <div id="" class="input-group" on>
                          <span class="input-group-addon">Fecha de Reintegro</span>
                          <input type="date" id="fecha_reintegroo" name="fecha_reintegro" autocomplete="off" >
                      </div>
                    </td>
            </table>

            <?php if($tps == 4){ ?>
            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div id="" class="input-group" on>
                          <span class="input-group-addon">Cantidad de dias de Vacaciones</span>
                          <input type="text" class="form-control" id="cantidad_diaso" name="cantidad_dias" autocomplete="off">
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