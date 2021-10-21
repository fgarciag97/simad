	<form action="" method="post" id="numeroorden">
  <div class="modal fade" id="numeroordenm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Registro</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="n_id" name="id" readonly hidden>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Numero Orden Pago</span>
              <input type="input" class="form-control" id="n_numero_orden_pago_ord" name="numero_orden_pago_ord" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Fecha de Emision </span>
              <input type="date" class="form-control" id="n_fecha_rrhh" name="fecha_rrhh" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>


          <div id="" class="input-group" on>
              <span class="input-group-addon">Fecha Aprobacion </span>
              <input type="date" class="form-control" id="n_fecha_ordenamiento" name="fecha_ordenamiento" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
          </div>

        </div>
        
          <div id="" class="input-group" on>
              <span class="input-group-addon">Fecha Compromiso</span>
              <input type="date" class="form-control" id="n_fecha_ejecucion" name="fecha_ejecucion" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
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