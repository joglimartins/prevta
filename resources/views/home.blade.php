@extends('layouts.app')

@section('content')
<!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Painel</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <!-- <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Configurações</a> -->
                    </div>
                </li>
            </ol>
            <div class="container-fluid">

                <!-- modal localizacao rapida -->
                <div class="modal fade localizacao-rapida" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6 class="modal-title">Localização Rápida</h6>
                      </div>
                      <div class="modal-body">
                        <form method="get" action="{{url('/cadastro/servidores/1234')}}">
                            <div class="form-group form-group-lg">
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" id="localizainput" placeholder="Nome, Matrícula, CPF, etc.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-5">
                            <div style="padding: 10px">
                                <table class="table" style="font-size: 10pt;">
                                    <thead>
                                        <tr>
                                            <th>Atalho</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ctrl+Espaço</td>
                                            <td>Abrir localização rápida de segurados.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @push('homekey')
            <script type="text/javascript">
                key('ctrl+space', function(){ 
                    $('.localizacao-rapida').modal();
                    $('.localizacao-rapida').on('shown.bs.modal', function () {
                        $('#localizainput').focus();
                    })
                });
            </script>
        @endpush
@endsection