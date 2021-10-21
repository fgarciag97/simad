	<form action="" method="post" id="ingreso">
  <div class="modal fade" id="ingresos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Ingresos</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="id_i" name="id" readonly hidden>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Denominación</span>
              <textarea class="form-control" id="denominacion_i" name="denominacion" required rows="3" onkeyup = 'mayus(this);'></textarea>
          </div>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Monto</span>
              <input type="input" class="moneda form-control" id="monto_i" name="monto" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>