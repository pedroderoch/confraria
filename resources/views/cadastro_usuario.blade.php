@include('layout.header')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">CADASTRAR USUÁRIO</h5>
                            <div class="form-group m-t-20">
                                <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Nome do Usuário" autocomplete="off">
                            </div>
                            <div class="form-group m-t-20">
                                <label>E-mail </label>
                                <input type="text" class="form-control" placeholder="E-mail de Login do Usuário" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-11 ">
                    <button type="button" class="btn btn-info">Gravar</button>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')