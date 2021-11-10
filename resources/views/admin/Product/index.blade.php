@extends('layouts.admin_app')
@section('content')
@include('admin.partials.navbar')
@include('admin.partials.menu')
@include('admin.Product.partials.new')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>DASHBOARD</h2>
    </div>


    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="header" align='right'>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Nuevo
            </button>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table table-hover dashboard-task-infos dataTable">
                <thead>
                  <tr>
                    <th align='center'>#</th>
                    <th align='center'>Nombre</th>
                    <th align='center'>Descripcion</th>
                    <th align='center'>Tipo</th>
                    <th colspan="2" style="text-align:center;">Acciones</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
