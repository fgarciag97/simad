	<form action="" method="post" id="form_info">
  <div class="modal fade" id="cestaticket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <table class="table table-responsive">
            <tr>
              <thead>
                <td></td>
                <td><div class="modal-header">
                    <h4 class="modal-title">Actualización de Asignación de Cesta Ticket</h4>
                  </div>
                </td>
                <td></td>
              </thead>
            </tr>
          </table>

          <table class="table table-responsive">

            <tr>
              <div class="modal-body">
          
              <input type="text" id="id" name="id" readonly hidden>
              <input type="text" id="tp" name="tp" readonly hidden>
              <input type="text" id="m" name="m" readonly hidden>

              <td><div id="" class="input-group" on>
                  <span class="input-group-addon">Cedula</span>
                  <input type="text" class="form-control" id="cedula" name="cedula" readonly>
              </div>

              <br>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Dias Trabajados</span>
                  <input type="text" class="form-control" id="dias_trabajados" name="dias_trabajados" min="1" max="30" autocomplete="off">
              </div>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Dias Faltados</span>
                  <input type="text" class="form-control" id="dias_faltados" name="dias_faltados" min="1" max="30" autocomplete="off">
              </div>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Dias Dejados de Cancelar</span>
                  <input type="text" class="form-control" id="" name="" min="1" max="30" autocomplete="off">
              </div>

              <br>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Dias a Cancelar</span>
                  <input type="text" class="form-control" id="dias_a_cancelar" name="dias_a_cancelar" min="1" max="30" autocomplete="off">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
               <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</button>
            </div>
          </div><!-- /.modal-content -->
            </tr>
        </table>
        
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>