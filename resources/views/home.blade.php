@extends('layouts.app')

@section('content')
<!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Início</li>
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
                                    <input autocomplete="off" class="form-control" type="text" id="localizainput" placeholder="Aproxime a carteirinha no leitor.">
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
                            <div style="background: #fff; padding: 15px">
                                <p><strong><i class="fa fa-keyboard-o fa-lg"></i> Atalhos do Teclado</strong></p>
                                <table class="table" style="font-size: 10pt;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div style="border: 1px #000; width: 20px; height: 20px; background: #ccc; text-align: center">
                                                    <strong>s</strong>
                                                </div>
                                            </td>
                                            <td>Abrir localização rápida de segurados.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="border: 1px #000; width: 20px; height: 20px; background: #ccc; text-align: center">
                                                    <strong>e</strong>
                                                </div>
                                            </td>
                                            <td>Abrir Listagem de segurados.</td>
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
                key('s', function(){ 
                    $('.localizacao-rapida').modal();
                    $('.localizacao-rapida').on('shown.bs.modal', function () {
                        $('#localizainput').focus();
                    })
                });

                key('e', function(){ 
                    document.location.href = '/cadastro/servidores';
                });
            </script>
        @endpush
@endsection