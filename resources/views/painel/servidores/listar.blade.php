@extends('layouts.app')

@section('content')
<!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Servidores</li>
                <li class="breadcrumb-item active">Listagem</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <!-- <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Configurações</a> -->
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-lg">
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" id="localizainput" placeholder="Nome, Matrícula, CPF, etc.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Servidores</strong>
                                    <small>Listagem</small>
                                </div>
                                <div class="card-block">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Data de Nascimento</th>
                                                <th>Cargo</th>
                                                <th>Situação</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Yiorgos Avraamu</td>
                                                <td>2012/01/01</td>
                                                <td>Acessor I</td>
                                                <td>
                                                    <span class="tag tag-success">Ativo</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-print"></i></a>
                                                    <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Avram Tarasios</td>
                                                <td>2012/02/01</td>
                                                <td>Diretor de Setor</td>
                                                <td>
                                                    <span class="tag tag-success">Ativo</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-print"></i></a>
                                                    <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quintin Ed</td>
                                                <td>2012/02/01</td>
                                                <td>Secretário</td>
                                                <td>
                                                    <span class="tag tag-success">Ativo</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-print"></i></a>
                                                    <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Enéas Kwadwo</td>
                                                <td>2012/03/01</td>
                                                <td>SubSecretário</td>
                                                <td>
                                                    <span class="tag tag-success">Ativo</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-print"></i></a>
                                                    <a href="#"><i class="fa fa-sticky-note"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agapetus Tadeáš</td>
                                                <td>2012/01/21</td>
                                                <td>Marceneiro</td>
                                                <td>
                                                    <span class="tag tag-default">Inativo</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/cadastro/servidores/1234')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-print"></i></a>
                                                    <a href="#"><i class="fa fa-sticky-note"></i></a>
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
                    </div>
                </div>
            </div>
        </main>

        @push('homekey')
            
        @endpush
@endsection