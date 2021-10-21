<form action="" method="post" id="form_editar_asistencia">
    <div class="modal fade" id="asistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"><strong>DATOS DE NOMINA</strong></th>
                    <th></th>
                  </tr>
                </thead>
            </table>

            <input type="text" id="tpsnam" name="tps" readonly hidden >
            <input type="text" id="msnam" name="ms" readonly hidden>
            <input type="text" id="qsnam" name="qs" readonly hidden>

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
                          <input type="text" class="form-control" id="cedulaam" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="apellidosam" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="nombresam"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="cargoam"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="sueldo_baseam"readonly>
                      </div>
                    </td>
            </table>


            <table class="table table-responsive">
                <tr>
                    <td></td>
                    <td><span class="">Bono de Estabilidad Dejado de Cancelar</span></td>
                    <td><span class="">Bono de Estabilidad Dias de Cancelar</span></td>
                    <td></td>
                </tr>

                <tr>
                      <td></td>
                        <td>
                          <div class="input-group" on>
                            <input type="text" name="bono_dejado_c" id="bono_dejado_cam" class="form-control moneda" onKeyPress='return soloNum(event);' >
                          </div>
                        </td>
                        <td>
                          <div class="input-group" on>
                            <input type="text" name="bono_dias_cancelar" id="bono_dias_cancelaram" class="form-control moneda" onKeyPress='return soloNum(event);' >
                          </div>
                        </td>
                      <td></td>
                <tr>
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