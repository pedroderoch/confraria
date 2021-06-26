@include('layout.header')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cadastro_associado" aria-expanded="false">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                <h6 class="text-white">Cadastrar Associado</h6>
                            </div>
                        </a>    
                    </div>
                </div>
                 <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cadastro_usuario" aria-expanded="false">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">Cadastrar Usuário</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')