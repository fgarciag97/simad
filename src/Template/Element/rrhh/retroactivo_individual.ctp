<form action="" method="post" id="form_retroactivo_individual">
    <div class="modal fade" id="retroactivo_individual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"><strong>ASIGNAR SUELDO INDIVIDUAL</strong></th>
                    <th></th>
                  </tr>
                </thead>
            </table>

            <input type="text" id="r_tps" name="tps" readonly hidden>
            <input type="text" id="r_ms" name="ms" readonly hidden>
            <input type="text" id="r_qs" name="qs" readonly hidden>
            <input type="text" id="r_cedula" name="cedula" readonly hidden>

            <div class="modal-body">
              <table class="table table-responsive">
                  <tr>
                      <td><span class="">Sueldo Segun Sistema</span></td>
                      <td><span class="">Sueldo Fijado</span></td>
                      <td><span class="">Sueldo Anterior</span></td>
                      <td><span class="">Retroactivo</span></td>
                  </tr>

                  <tr>
                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control moneda" id="r_sueldo_base" name="sueldo_base" readonly>
                        </div>
                      </td>
                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control moneda" id="r_sueldo" name="sueldo" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control moneda" id="r_sueldo_anterior" name="sueldo_anterior" readonly>
                        </div>
                      </td>
                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control moneda" id="r_monto" name="monto" readonly>
                        </div>
                      </td>
                  </tr>
            </table>


                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
</form>