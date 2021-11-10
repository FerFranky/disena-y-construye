<link rel="stylesheet" href="{{asset('public/css/dropzone.min.css')}}">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir producto</h5>

      </div>
      <div class="modal-body">
        <form class="dropzone"
        enctype="multipart/form-data" action="{{route('admin.category.store')}}" method="post">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="fallback">
            <input name="file" type="file"  multiple width="100%">
          </div>
        </div>
      </form>
        <form enctype="multipart/form-data" action="{{route('admin.category.store')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Nombre</label>
              <input type="text" class="form-control" placeholder="Añadir nombre a producto" name="name" value="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Precio</label>
              <input type="number" class="form-control" placeholder="Añadir precio a producto" name="name" value="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <label for="">Descripción</label>
              <textarea class="form-control" name="description" rows="3" cols="80"></textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Compresion</label>
              <select class="form-control" name="compression">
                <option value="zip">ZIP</option>
                <option value="rar">RAR</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Tamaño de archivo</label>
              <input type="text" class="form-control" placeholder="Tamaño de archivo" name="name" value="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Dimensiones de archivo</label>
              <input type="text" class="form-control" placeholder="Dimensiones de archivo" name="name" value="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="">Tipo de archivo</label>
              <input type="text" class="form-control" placeholder="Tipo de archivo" name="name" value="">
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
<script src="{{asset('public/js/dropzone.min.js')}}" charset="utf-8"></script>
<script>
// Note that the name "myDropzone" is the camelized
// id of the form.
Dropzone.options.myDropzone = {
  maxFiles:1
  // Configuration options go here
};
</script>
