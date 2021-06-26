@include('layout.header')
  <div class="page-wrapper">
    <div class="container-fluid">
      <h3 class="center">Cadastrar Associado</h3>
      <form class="" action="{{route('admin.associados.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.associados._form')
        <button class="btn btn-info">Salvar</button>
      </form>
    </div>
  </div>
@include('layout.footer')