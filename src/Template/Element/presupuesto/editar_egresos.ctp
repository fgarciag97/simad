	<form action="" method="post" id="egreso">
  <div class="modal fade" id="egresos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Ingresos</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="id_e" name="id" readonly hidden>
          <input type="text" id="id_sectore" name="id_sector" readonly hidden>
          <input type="text" id="id_programae" name="id_programa" readonly hidden>
          <input type="text" id="id_sub_programae" name="id_sub_programa" readonly hidden>
          <input type="text" id="id_actividade" name="id_actividad" readonly hidden>
          <input type="text" id="id_proyectoe" name="id_proyecto" readonly hidden>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Denominación</span>
              <textarea class="form-control" id="denominacion_e" name="denominacion" required rows="3" onkeyup = 'mayus(this);' readonly></textarea>
          </div>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Monto</span>
              <input type="input" class="moneda form-control" id="monto_e" name="monto" autocomplete="off" required onKeyPress = 'return soloNum(event);'>
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