@extends('layouts.app')

@section('content')
<!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Início</li>
                <li class="breadcrumb-item">Segurado</li>
                <li class="breadcrumb-item active">Juliana Vasconcelos Alves</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                        <button data-toggle="tooltip" data-placement="left" title="Tempo do atendimento" class="btn btn-secondary" disabled="disabled"><time id="atime">...</time></button>
                        <script type="text/javascript">
                            var segundo = 0;
                            var minuto = 0;
                            var hora = 0;

                            window.setInterval(function () {
                                segundo++;

                                if(segundo > 59){
                                    segundo = 0;
                                    minuto++;
                                } 

                                if(minuto > 59){
                                    minuto = 0;
                                    hora++;
                                }
                                
                                if(minuto > 0){
                                    $('#atime').html('<span style="color: red"><i class="icon-clock"></i> '+hora+'h '+minuto+'m '+segundo+'s </span>');
                                } else {
                                    $('#atime').html('<span><i class="icon-clock"></i> '+hora+'h '+minuto+'m '+segundo+'s </span>');
                                }

                            }, 1000);

                        </script>

                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="http://localhost:8000/img/avatars/6.jpg" alt="" width="100">
                                </div>
                                <div class="col-md-9" style="font-size: 14px;">
                                    Matrícula: <br><strong>{{$id}}</strong> <span class="tag tag-success">Ativo</span><br>
                                    Servidor(a): <br><strong>Juliana Vasconcelos Alves</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7" align="right">
                            <div class="card card-inverse card-default">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <button type="button" data-toggle="modal" data-target=".emitir-guia" class="btn btn-sm btn-primary"><i class="fa fa-sticky-note"></i>&nbsp; Emitir Guia</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i>&nbsp; Imprimir
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Ficha de Cadastro</a>
                                            <a class="dropdown-item" href="#">Lista de Dependentes</a>
                                            <a class="dropdown-item" href="#">Histórico de Contribuições</a>
                                        </div>
                                    </div>
                                
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-credit-card"></i>&nbsp; Carteirinha
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Solicitar</a>
                                            <a class="dropdown-item" href="#">Emitir</a>
                                            <a class="dropdown-item" href="#">Histórico</a>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-sm btn-inf"><i class="fa fa-bar-chart"></i>&nbsp; Relatório</button>
                                    <button type="button" class="btn btn-sm btn-inf"><i class="fa fa-pencil"></i>&nbsp; Notas &nbsp;&nbsp;<span class="tag tag-pill tag-primary">2</span></button>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" ><i class="icon-user"></i> Dados Gerais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#funcionais" role="tab" aria-controls="funcionais" ><i class="icon-briefcase"></i> Dados Funcionais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contatos" role="tab" aria-controls="contatos" ><i class="icon-speech"></i> Contatos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#dependentes" role="tab" aria-controls="dependentes"><i class="icon-people"></i> Dependentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contribuicoes" role="tab" aria-controls="contribuicoes"><i class="icon-pie-chart"></i> Contribuições &nbsp;<span class="tag tag-pill tag-danger">2</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#documentacao" role="tab" aria-controls="documentacao"><i class="icon-docs"></i> Documentações</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="dados" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Dados Pessoais</strong>
                                                    <small></small>
                                                    <a href="#" class="float-xs-right mb-0"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label for="name">Nome</label>
                                                        <input type="text" value="Juliana Vasconcelos Alves" class="form-control" id="name" placeholder="Enter your name">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Endereço</strong>
                                                    <small></small>
                                                    <a href="#" class="float-xs-right mb-0"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Endereço</label>
                                                                    <input type="text" value="Rua Tancredo Neves" class="form-control" id="name" placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                             <div class="col-md-4">
                                                                <div class="form-group">
                                                                     <label for="name">Numero</label>
                                                                    <input type="text" value="688" class="form-control" id="name" placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="name">Complemento</label>
                                                                    <input type="text" value="Bloco 5 Apto 555" class="form-control" id="name" placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                             <div class="col-md-8">
                                                                 <div class="form-group">
                                                                     <label for="name">Cidade</label>
                                                                    <input type="text" value="Itaboraí" class="form-control" id="name" placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="name">Estado</label>
                                                                    <input type="text" value="RJ" class="form-control" id="name" placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                    </div>
                                </div>
                                <div class="tab-pane" id="funcionais" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Dados Funcionais</strong>
                                                    <small></small>
                                                    <a href="#" class="float-xs-right mb-0"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="card-block">
                                                    Carregando ...
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Cargo e Locação</strong>
                                                    <small></small>
                                                    <a href="#" class="float-xs-right mb-0"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="card-block">
                                                    Carregando ...
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                    </div>
                                </div>


                                <div class="tab-pane" id="contatos" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Cadastrar </strong>Contato
                                                </div>
                                                <div class="card-block">
                                                    <form action="" method="post" class="form-horizontal ">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 form-control-label" for="hf-email">Tipo</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control">
                                                                    <option value="1">Telefone</option>
                                                                    <option value="2">Email</option>
                                                                    <option value="3">...</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 form-control-label" for="hf-password">Contato</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Adicionar</button>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-align-justify"></i> Contatos
                                                </div>
                                                <div class="card-block">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Contato</th>
                                                                <th>Ações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>juliana@email.com</td>
                                                                <td>
                                                                    <span class="tag tag-danger">Excluir</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Telefone</td>
                                                                <td>(21) 2323-2323</td>
                                                                <td>
                                                                    <span class="tag tag-danger">Excluir</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Celular</td>
                                                                <td>(21) 98888-8888</td>
                                                                <td>
                                                                    <span class="tag tag-danger">Excluir</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Twitter</td>
                                                                <td>@juliana</td>
                                                                <td>
                                                                    <span class="tag tag-danger">Excluir</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Prev</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                    </div>
                                </div>

        

                                <div class="tab-pane" id="dependentes" role="tabpanel">
                                            <button class="btn btn-primary">Cadastrar Novo</button><br><br>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Data de Nascimento</th>
                                                        <th>Grau</th>
                                                        <th>Situação</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yiorgos Avraamu</td>
                                                        <td>2012/01/01</td>
                                                        <td>Esposo</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                            <a href="#"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Avram Tarasios</td>
                                                        <td>2012/02/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                            <a href="#"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quintin Ed</td>
                                                        <td>2012/02/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                            <a href="#"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enéas Kwadwo</td>
                                                        <td>2012/03/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                            <a href="#"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agapetus Tadeáš</td>
                                                        <td>2012/01/21</td>
                                                        <td>Irmão</td>
                                                        <td>
                                                            <span class="tag tag-default">Inativo</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                            <a href="#"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                </div>
                                <div class="tab-pane" id="contribuicoes" role="tabpanel">
                                    
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Origem</th>
                                                        <th>Vencimento</th>
                                                        <th>Mês</th>
                                                        <th>Situação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>PMI</td>
                                                        <td>2012/01/01</td>
                                                        <td>Janeiro</td>
                                                        <td>
                                                            <span class="tag tag-danger">Não Contribuiu</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ITAPREVI</td>
                                                        <td>2012/02/01</td>
                                                        <td>Fevereiro</td>
                                                        <td>
                                                            <span class="tag tag-danger">Não Contribuiu</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ITAPREVI</td>
                                                        <td>2012/02/01</td>
                                                        <td>Março</td>
                                                        <td>
                                                            <span class="tag tag-default">Não faturado</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PMI</td>
                                                        <td>2012/03/01</td>
                                                        <td>Abril</td>
                                                        <td>
                                                            <span class="tag tag-success">Contribuiu</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PMI</td>
                                                        <td>2012/01/21</td>
                                                        <td>Maio</td>
                                                        <td>
                                                            <span class="tag tag-success">Contribuiu</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>

                                </div>



                                <div class="tab-pane" id="documentacao" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="card">
                                                <div class="card-header">
                                                    Carregar Documentos
                                                </div>
                                                <div class="card-block">
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Nome</span>
                                                                <input type="text" id="username3" name="username3" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Obs.</span>
                                                                <input type="email" id="email3" name="email3" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-actions">
                                                            <button type="submit" class="btn btn-sm btn-primary">Carregar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="card">
                                                <div class="card-header">
                                                    Documentos Digitalizados
                                                </div>
                                                <div class="card-block">
                                                    <p>Nenhuma documentação digitalizada.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                            
                                </div>


    

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>



        <!-- modal emitir guia -->
                <div class="modal fade emitir-guia" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6 class="modal-title">Emitir Guia</h6>
                      </div>
                      <div class="modal-body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home3" role="tab" aria-controls="home"><i class="icon-user"></i> Servidor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile"><i class="icon-people"></i> Dependentes</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home3" role="tabpanel">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="tipo">Tipo</label>
                                            <select class="input-group form-control" name="tipo" id="">
                                                <option value="">Guia Consulta</option>
                                                <option value="">Guia Exames</option>
                                                <option value="">Guia Consulta - Boleto</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary pull-right" value="Emitir">
                                        </div><br><br>
                                    </form>
                                </div>
                                <div class="tab-pane" id="profile3" role="tabpanel">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="dependente">Dependente</label>
                                            <select class="input-group form-control" name="dependente" id="">
                                                <option value="">Yiorgos Avraamu</option>
                                                <option value="">Avram Tarasios</option>
                                                <option value="">Enéas Kwadwo</option>
                                                <option value="">Agapetus Tadeáš</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo">Tipo</label>
                                            <select class="input-group form-control" name="tipo" id="">
                                                <option value="">Guia Consulta</option>
                                                <option value="">Guia Exames</option>
                                                <option value="">Guia Consulta - Boleto</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary pull-right" value="Emitir">
                                        </div><br><br>
                                    </form>
                                </div>
                            </div>

                      </div>
                      <div class="modal-footer">
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

        @push('homekey')
            <script type="text/javascript">

            </script>
        @endpush

@endsection
