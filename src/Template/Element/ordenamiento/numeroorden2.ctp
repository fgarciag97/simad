	<form action="" method="post" id="numeroorden2">
  <div class="modal fade" id="numeroordenm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Registro</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="nn_id" name="id" readonly hidden>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Numero Orden Pago</span>
              <input type="input" class="form-control" id="nn_numero_orden_pago_ord" name="numero_orden_pago_ord" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Fecha Emision</span>
              <input type="date" class="form-control" id="nn_fecha" name="fecha" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Fecha Aprobacion</span>
              <input type="date" class="form-control" id="nn_fecha_ordenamiento" name="fecha_ordenamiento" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
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