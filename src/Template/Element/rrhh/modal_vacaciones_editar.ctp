<form action="" method="post" id="form_vaca">
    <div class="modal fade" id="vaca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center"><strong>DATOS DE VACACIONES</strong></th>
                    <th></th>
                  </tr>
                </thead>
            </table>

            <input type="text" id="vtpsn" name="tps" readonly hidden>
            <input type="text" id="vmsn" name="ms" readonly hidden>
            <input type="text" id="vqsn" name="qs" readonly hidden>

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
                          <input type="text" class="form-control" id="vcedula2" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="vapellidos2" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="vnombres2"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="vcargo2"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="vsueldo_base2"readonly>
                      </div>
                    </td>
            </table>


            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Dias</span>
                        <input type="text" class="form-control" name="dias" id="vdias" onKeyPress='return soloNum(event);' >
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Bono Vacacional</span>
                          <input type="text" class="moneda form-control" name="bono_vacacional" id="vbono" onKeyPress='return soloNum(event);' >
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Disfrute</span>
                          <input type="text" class="moneda form-control" name="disfrute" id="vdisfrute" onKeyPress='return soloNum(event);' >
                      </div>
                    </td>
            </table>

            <!--
            <table class="table table-responsive">
                <tr>
                    <td></td>
                    <td><span class="">Dias Dejados de Cancelar</span></td>
                    <td></td>
                </tr>

                <tr>
                      <td></td>
                      <td>
                        <div class="input-group" on>
                          <input type="text" name="dias_dejados_c" id="vdias_dejados_c" class="form-control" onKeyPress='return soloNum(event);' >
                        </div>
                      </td>
                      <td></td>
                <tr>
            </table>

            <table class="table table-responsive">

                <tr>
                    <td><span class="">Ajuste de Sueldo</span></td>
                    <td><span class="">Ajuste de  Prima Profesion</span></td>
                    <td><span class="">Ajuste de  Prima Antiguedad</span></td>
                    <td><span class="">Ajuste de  Prima Hijos</span></td>
                    <td><span class="">Ajuste de  Prima Hogar</span></td>
                </tr>

                <tr>
                  <td><div class="input-group" on>
                      <input type="text" name="ajuste_sueldo" id="vajuste_sueldo" class="moneda form-control" onKeyPress='return soloNum(event);'>
                    </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_profesion" id="vajuste_p_profesion" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_antiguedad" id="vajuste_p_antiguedad" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_hijos" id="vajuste_p_hijos" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_hogar" id="vajuste_p_hogar" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>
                </tr>
            </table>

              <table class="table table-responsive">

                      <tr>
                          <td><span class="">DC. SSO </span></td>
                          <td><span class="">DC. RPE</span></td>
                          <td><span class="">DC. FPJ</span></td>
                          <td><span class="">DC. FAOV</span></td>
                          <td><span class="">DC. CAJA AHORRO</span></td>
                      </tr>

                    <tr>

                      <td><div class="input-group" on>
                          <input type="text" name="ajuste_sso" id="vajuste_sso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                        </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_rpe" id="vajuste_rpe" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_faov" id="vajuste_faov" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_fpj" id="vajuste_fpj" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_caja" id="vajuste_caja" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>
                    </tr>
              </table>

              <table class="table table-responsive">

                      <tr>
                          <td><span class="">A. SSO </span></td>
                          <td><span class="">A. RPE</span></td>
                          <td><span class="">A. FPJ</span></td>
                          <td><span class="">A. FAOV</span></td>
                          <td><span class="">A. CAJA AHORRO</span></td>
                      </tr>

                    <tr>

                      <td><div class="input-group" on>
                          <input type="text" name="ajuste_a_sso" id="vajuste_a_sso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                        </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_rpe" id="vajuste_a_rpe" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_faov" id="vajuste_a_faov" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_fpj" id="vajuste_a_fpj" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_caja" id="vajuste_a_caja" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>
                    </tr>
              </table>
  -->
                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Asignar</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
</form>