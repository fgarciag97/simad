<form action="" method="post" id="form_editar">
    <div class="modal fade" id="nomina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

            <input type="text" id="tpsn" name="tps" readonly hidden>
            <input type="text" id="msn" name="ms" readonly hidden>
            <input type="text" id="qsn" name="qs" readonly hidden>
            <input type="text" id="on" name="o" readonly hidden>

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
                          <input type="text" class="form-control" id="cedula2" name="cedula" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="apellidos2" readonly>
                        </div>
                      </td>

                      <td>
                        <div class="input-group" on>
                          <input type="text" class="form-control" id="nombres2"readonly>
                        </div>
                      </td>
                  </tr>
            </table>

            <table class="table table-responsive">
                  <tr>
                    <td>
                      <div class="input-group" on>
                        <span class="input-group-addon">Cargo</span>
                        <input type="text" class="form-control" id="cargo2"readonly>
                      </div>
                    </td>

                    <td>
                      <div class="input-group" on>
                          <span class="input-group-addon">Sueldo Base</span>
                          <input type="text" class="form-control" id="sueldo_base2"readonly>
                      </div>
                    </td>
            </table>

                  <div class="container-anuncio">
                     <p class="login-box-msg" style="font-size: 12pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> INSTRUCCIONES </strong></p>
                    <h4 style="font-size: 12pt; text-align: justify;"><small><strong>
                      1) Dias dejados de Cancelar:</strong> Se realiza el calculo automatico de los dias que especifique y su valor se sumara a cada concepto en la nomina.</br>

                      <strong>2) Dias a Cancelar:</strong> El sistema tomara el valor ingresado y sustituira todos los calculos tomando en cuenta la cantidad de dias ingresados.</br>

                      <strong>3) Sueldo Ajustado:</strong> Si este campo es llenado, se sustituira el sueldo base por el ingresado en este campo.</br>

                      <strong>4) Prestamo Caja de Ahorro:</strong> Si solo se desea realizar un descuento en una nomina especifica rellene este campo, en cualquier otro caso dirijase a la opcion "Personal".
                  </div>

            <table class="table table-responsive">
                <tr>
                    <td></td>
                    <td><span class="">Dias Dejados de Cancelar</span></td>
                    <td><span class="">Dias A Cancelar</span></td>
                    <td><span class="">Sueldo Ajustado</span></td>
                    <td><span class="">Prestamo Caja de Ahorro</span></td>
                    <td></td>
                </tr>

                <tr>
                      <td></td>
                      <td>
                        <div class="input-group" on>
                          <input type="text" name="dias_dejados_c" id="dias_dejados_c" class="form-control" onKeyPress='return soloNum(event);' >
                        </div>
                      </td>

                      <td><div class="input-group" on><!-- Tomo como dias a Cancelar -->
                            <input type="text" name="ajuste_caja" id="ajuste_caja" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                          <input type="text" name="ajuste_sueldo" id="ajuste_sueldo" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on><!-- Tomo como Prestamo Caja -->
                            <input type="text" name="ajuste_a_caja" id="ajuste_a_caja" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>
                      <td></td>
                <tr>
            </table>

                <div class="container-anuncio">
                     <p class="login-box-msg" style="font-size: 12pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> INSTRUCCIONES </strong></p>
                    <h4 style="font-size: 12pt; text-align: justify;"><small><strong>
                      1) Modificaciones:</strong> Todo campo que se llene en esta seccion sustituira los valores originales en Nomina.</br>
                  </div>

            <table class="table table-responsive">

                <tr>
                    <td><span class="">Ajuste de  Prima Profesion</span></td>
                    <td><span class="">Ajuste de  Prima Antiguedad</span></td>
                    <td><span class="">Ajuste de  Prima Hijos</span></td>
                    <td><span class="">Ajuste de  Prima Hogar</span></td>
                    <td><span class="">Ajuste de  Funeraria</span></td>
                </tr>

                <tr>
                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_profesion" id="ajuste_p_profesion" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_antiguedad" id="ajuste_p_antiguedad" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_hijos" id="ajuste_p_hijos" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on>
                        <input type="text" name="ajuste_p_hogar" id="ajuste_p_hogar" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                  <td><div class="input-group" on> <!-- ajuste de funeraria -->
                        <input type="text" name="ajuste_a_fpj" id="ajuste_a_fpj" class="moneda form-control" onKeyPress='return soloNum(event);'>
                      </div>
                  </td>

                </tr>
            </table>

              <table class="table table-responsive">

                      <tr>
                          <td><span class="">Ajuste. SSO </span></td>
                          <td><span class="">Ajuste. RPE</span></td>
                          <td><span class="">Ajuste. FPJ</span></td>
                          <td><span class="">Ajuste. FAOV</span></td>
                      </tr>

                    <tr>

                    <td><div class="input-group" on>
                          <input type="text" name="ajuste_a_sso" id="ajuste_a_sso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                        </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_rpe" id="ajuste_a_rpe" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_faov" id="ajuste_a_faov" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_fpj" id="ajuste_a_fpj" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_a_caja" id="ajuste_a_caja" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>
                    </tr>
              </table> 

              <table class="table table-responsive">

                      <tr>
                          <td><span class="">Ajuste. SSO </span></td>
                          <td><span class="">Ajuste. RPE</span></td>
                          <td><span class="">Ajuste. FPJ</span></td>
                          <td><span class="">Ajuste. FAOV</span></td>
                      </tr>

                    <tr>

                      <td><div class="input-group" on>
                          <input type="text" name="ajuste_sso" id="ajuste_sso" class="moneda form-control" onKeyPress='return soloNum(event);'>
                        </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_rpe" id="ajuste_rpe" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_faov" id="ajuste_faov" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>

                      <td><div class="input-group" on>
                            <input type="text" name="ajuste_fpj" id="ajuste_fpj" class="moneda form-control" onKeyPress='return soloNum(event);'>
                          </div>
                      </td>
                    </tr>
              </table>

                  <div class="container-anuncio">
                     <p class="login-box-msg" style="font-size: 12pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> IMPORTANTE </strong></p>
                    <h4 style="font-size: 12pt; text-align: justify;"><small>
                      <strong>1) Nominas :</strong> Cualquier cambio que se realize con este apartado solo afectara esta nomina.</br>

                      <strong>2) Personal:</strong> Nada de lo que se ingrese en este apartado afecta la Ficha del Trabajador.</br>

                      <strong>3) Actualizar Nomina:</strong> Si "Actualiza la Nomina" esta eliminar los registros automaticos y las modificaciones que haya realizado.</br>

                      <strong>4) Recomendacion:</strong> Si algun cambio realizado en la ficha del trabajador no se muestra reflejada, debe actualizar la nomina, para que se tomen los nuevos cambios ingresado en la ficha.
                  </div>

                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Asignar</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
</form>