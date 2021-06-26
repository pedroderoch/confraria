@include('layout.header')

  <div class="page-wrapper">
    <div class="container-fluid">
      <form class="" action="{{route('admin.associados.salvar')}}" method="post">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title m-b-0">teste</h5>
                <div class="form-group m-t-20">
                    <label>Nome </label>
                    <input type="text" class="form-control" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}" placeholder="Nome do Associado" autocomplete="off">
                </div>
                <div class="form-group m-t-20">
                    <label>Categoria </label>
                    <select class="select2 form-control custom-select" name="categoria" style="width: 100%; height:36px;">
                        <option value="individual">Individual</option>
                        <option value="familiar_titular">Familiar Titular</option>
                        <option value="familiar_dependente">Familiar Dependente</option>
                    </select>
                </div>
                <div class="form-group m-t-20">
                    <label>Registro </label>
                    <input type="text" class="form-control" name="registro" value="{{isset($registro->registro) ? $registro->registro : ''}}" placeholder="Número da Cota" autocomplete="off">
                </div>
                <div class="form-group m-t-20">
                    <label>Sócio Adiplente </label>
                    <select class="select2 form-control custom-select" name="adiplente" style="width: 100%; height:36px;">
                        <option value="sim" name="adiplente">SIM</option>
                        <option value="nao" name="adiplente">NÃO</option>
                    </select>
                </div>
                <div class="form-group m-t-20">
                    <label>Admissão </label>
                    <input type="date" name="admissao" class="form-control date-inputmask" id="date-mask" value="{{isset($registro->admissao) ? $registro->admissao : ''}}" placeholder="Data de Admissão">
                </div>
                <div class="form-group m-t-20">
                    <label>Conselheiro </label>
                    <select class="select2 form-control custom-select" name="conselheiro" style="width: 100%; height:36px;">
                        <option value="nao">Não é Conselheiro</option>
                        <option value="suplente">Conselheiro Suplente</option>
                        <option value="efetivo">Conselheiro Efetivo</option>
                        <option value="nato">Conselheiro Nato</option>
                        <option value="benemerito">Conselheiro Benemérito</option>
                    </select>
                </div>
                <div class="form-group m-t-20">
                    <label>E-mail </label>
                    <input type="text" class="form-control" name="email" value="{{isset($registro->email) ? $registro->email : ''}}" placeholder="E-mail do Associado" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>WhatsApp </label>
                    <input type="text" class="form-control phone-inputmask" name="whatsapp" value="{{isset($registro->whatsapp) ? $registro->whatsapp : ''}}" id="phone-mask" placeholder="Celular / WhatsApp do Associado">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="offset-md-11 ">
                <button class="btn btn-info">Gravar</button>
            </div>
        </div>
      </form>
    </div>
  </div>
@include('layout.footer')
