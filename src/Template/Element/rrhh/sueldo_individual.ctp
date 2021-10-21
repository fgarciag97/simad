<form action="" method="post" id="form_sueldo_individual">
    <div class="modal fade" id="sueldo_individual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

            <input type="text" id="s_tps" name="tps" readonly hidden>
            <input type="text" id="s_ms" name="ms" readonly hidden>
            <input type="text" id="s_qs" name="qs" readonly hidden>
            <input type="text" id="s_o" name="o" readonly hidden>
            <input type="text" id="s_cedula" name="cedula" readonly hidden>

            <div class="modal-body">
              <table class="table table-responsive">
                  <tr>
                      <td><span class="">Sueldo</span></td>
                  </tr>

                  <tr>
                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control moneda" id="s_sueldo_base" name="sueldo" >
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