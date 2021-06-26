@include('layout.header')
        
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Usuários Administradores do Sistema</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><strong>Nome</strong></th>
                                            <th><strong>E-mail</strong></th>
                                            <th><strong>Ação</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fábio Stockler</td>
                                            <td>fs@gmail.com</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</button>
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-bomb"></i> Excluir</button>
                                            </td>
                                        </tr>
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