<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir categoria</h5>

      </div>
      <div class="modal-body">
        <form class="" action="{{route('admin.category.store')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Nombre</label>
              <input type="text" class="form-control" placeholder="Añadir nombre a categoria" name="name" value="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Tipo</label>
              <select class="form-control" name="type">
                <option value="filtrado">Filtrado</option>
                <option value="principal">Principal</option>
                <option value="secundaria">Secundaria</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <label for="">Descripción</label>
              <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
