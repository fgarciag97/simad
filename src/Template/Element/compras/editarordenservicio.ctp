<form action="" method="post" id="form_servicio">
  <div class="modal fade" id="ordenservicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

      <table class="table table-responsive table-border">

      <thead>
            <tr>
              <th><h4 class="modal-title text-center">Descripcion quien la ordena</h4></th>
              <th></th>
            </tr>
          </thead>
      </table>

      <table class="table table-responsive table-border">
        <?= $this->Form->hidden('id', ['class'=> 'form-control', 'required', 'id' => 'orden2']); ?>
        <?= $this->Form->hidden('id_orden', ['class'=> 'form-control', 'required', 'id' => 'id_orden2']); ?>
        <?= $this->Form->hidden('requisicion', ['class'=> 'form-control', 'required', 'id' => 'requisicion2']); ?>
        
          <tr>
              <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Descripcion</span>
                    <textarea type="textarea" class="form-control" id="descripcion2" name="descripcion_ordena" onkeyup='mayus(this);'></textarea>
                </div>
              </td>
          </tr>
      </table>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div>
    </div>
  </div>
   </div><
</div>
</div>
 </form>
