	<form action="" method="post" id="form_he">
  <div class="modal fade" id="horasextras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de Asignación de Cesta Ticket</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="id2" name="id" readonly hidden>
          <input type="text" id="tp2" name="tp" readonly hidden>
          <input type="text" id="m2" name="m" readonly hidden>
          <input type="text" id="o2" name="o" readonly hidden>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Cedula</span>
              <input type="text" class="form-control" id="cedula25" name="cedula" readonly>
          </div>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Cantidad de Dias</span>
              <input type="text" class="form-control" id="cantidad_dias" name="cantidad_dias" min="1" max="30" autocomplete="off" onKeyPress='return soloNum(event);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Dias No Laborables</span>
              <input type="text" class="form-control" id="dias_no_laborables" name="dias_no_laborables" min="1" max="30" autocomplete="off" onKeyPress='return soloNum(event);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Cantidad de Horas</span>
              <input type="text" class="form-control" id="cantidad_horas" name="cantidad_horas" min="1" max="30" autocomplete="off" onKeyPress='return soloNum(event);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Cantidad de Horas Extra Diurnas</span>
              <input type="text" class="form-control" id="cantidad_horas_extra_diurnas" name="cantidad_horas_extra_diurnas" min="1" max="30" autocomplete="off" onKeyPress='return soloNum(event);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Cantidad de Horas Extra Nocturnas</span>
              <input type="text" class="form-control" id="cantidad_horas_extra_nocturnas" name="cantidad_horas_extra_nocturnas" min="1" max="30" autocomplete="off" onKeyPress='return soloNum(event);'>
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