<form action="" method="post" id="form_editar_pago">
    <div class="modal fade" id="sueldo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

            <input type="text" id="tpsn2" name="tps" readonly hidden >
            <input type="text" id="msn2" name="ms" readonly hidden> 
            <input type="text" id="qsn2" name="qs" readonly hidden>

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
                          <input type="text" class="form-control" id="cedula3" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="apellidos3" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="nombres3"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="cargo3"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="sueldo_base3"readonly>
                      </div>
                    </td>
            </table>


            <table class="table table-responsive">
                <tr>
                    <td></td>
                    <td><span class=""> Indicar Monto</span></td>
                    <td></td>
                </tr>

                <tr>
                      <td></td>
                        <td>
                          <div class="input-group" on>
                            <input type="text" name="bono_dejado_c" id="bono_dejado_cbe" class="form-control moneda" onKeyPress='return soloNum(event);' >
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