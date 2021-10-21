	<form action="" method="post" id="form_ps">
  <div class="modal fade" id="ps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <table class="table table-responsive">
            <tr>
              <thead>
                <td></td>
                <td><div class="modal-header">
                    <h4 class="modal-title">Asignar Prestacion Social</h4>
                  </div>
                </td>
                <td></td>
              </thead>
            </tr>
          </table>

          <table class="table table-responsive">

            <tr>
              <div class="modal-body">
          
              <input type="text" id="cedulax" name="cedula" readonly hidden>
              <input type="text" id="tpx" name="tp" readonly hidden>
              <input type="text" id="mesx" name="mes" readonly hidden>
              <br>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Monto a Pagar</span>
                  <input type="text" class="form-control" name="monto" autocomplete="off" required>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
               <button type="submit" class="btn btn-success btn-sm pull-right">Asignar</button>
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