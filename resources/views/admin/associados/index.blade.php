@include('layout.header')
        
    <div class="page-wrapper">
        <div class="container-fluid">
            <h3 class="center">Associados</h3>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Nome</strong></th>
                                            <th><strong>Categoria</strong></th>
                                            <th><strong>Registro</strong></th>
                                            <th><strong>Adiplente</strong></th>
                                            <th><strong>Admissão</strong></th>
                                            <th><strong>Conselheiro</strong></th>
                                            <th><strong>E-mail</strong></th>
                                            <th><strong>WhatsApp</strong></th>
                                            <th><strong>Ação</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($registros as $registro)
                                        <tr>
                                            <td>{{ $registro->id }}</td>
                                            <td>{{ $registro->nome }}</td>
                                            <td>{{ $registro->categoria }}</td>
                                            <td>{{ $registro->registro }}</td>
                                            <td>{{ $registro->adiplente }}</td>
                                            <td>{{ $registro->admissao }}</td>
                                            <td>{{ $registro->conselheiro }}</td>
                                            <td>{{ $registro->email }}</td>
                                            <td>{{ $registro->whatsapp }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('admin.associados.editar',$registro->id) }}"><i class="fas fa-edit"></i> Editar</a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('admin.associados.deletar', $registro->id) }}" role="button"><i class="fas fa-trash"></i> Excluir</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')