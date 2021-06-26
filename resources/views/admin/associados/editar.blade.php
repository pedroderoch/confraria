@include('/layout.header')


  <div class="page-wrapper">
    <div class="container-fluid">
      <h3 class="center">Editar dados do Associado</h3>
      <form class="" action="{{route('admin.associados.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.associados._form')
        <button class="btn btn-info">Atualizar</button>
      </form>
    </div>
  </div>

  @include('/layout.footer')