<form action="" method="post" id="form_v">
    <div class="modal fade" id="vacaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

            <input type="text" id="idv" name="id" readonly hidden>
            <input type="text" id="tpv" name="tps" readonly hidden>
            <input type="text" id="mesv" name="ms" readonly hidden>
            <input type="text" id="quincenav" name="qs" readonly hidden>

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
                          <input type="text" class="form-control" id="cedulav" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="apellidosvx" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="nombresvx"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="sueldo_basev"readonly>
                      </div>
                    </td>
            </table>


            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias de Vacaciones</span>
                        <input type="text" class="form-control" id="diasvx" name="dias">
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Dias de Bono</span>
                          <input type="text" class="form-control" id="dias_bonovx" name="dias_bono">
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Horas Extras</span>
                          <input type="text" class="moneda form-control" id="horas_extrasvx" name="horas_extras">
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
                      <input type="text" name="prima_antiguedad" id="prima_antiguedadv" class="moneda form-control" onKeyPress='return soloNum(event);'>
                    </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_profesion" id="prima_profesionv" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hijos" id="prima_hijosv" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="prima_hogar" id="prima_hogarv" class="form-control" onkeyup='mayus(this);' placeholder="SI/NO" onKeyPress = 'return soloLetras(event);' maxlength="2">
                      </div>
                  </td>
                </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div id="" class="input-group" on>
                        <span class="input-group-addon">Fecha de Salida</span>
                        <input type="date" class="form-control" id="fechasv" name="fecha_salida" autocomplete="off">
                      </div>
                    </td>

                    <td>
                      <div id="" class="input-group" on>
                          <span class="input-group-addon">Fecha de Retorno</span>
                          <input type="date" class="form-control" id="fechaev" name="fecha_entrada" autocomplete="off">
                      </div>
                    </td>
            </table>

                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Asignar</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
</form>