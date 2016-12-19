@extends('layouts.app')

@section('content')
<!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Segurado</li>
                <li class="breadcrumb-item active">Juliana Vasconcelos Alves</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-4">
                            Matrícula: <h6>{{$id}}</h6>
                            Servidor(a): <h6>Juliana Vasconcelos Alves</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-block">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Emitir Guia</button>
                                    <button type="button" class="btn btn-inf"><i class="fa fa-lightbulb-o"></i>&nbsp; Imprimir</button>
                                    <button type="button" class="btn btn-inf"><i class="fa fa-magic"></i>&nbsp; Editar</button>
                                    <button type="button" class="btn btn-inf"><i class="fa fa-map-marker"></i>&nbsp; Carteirinha</button>
                                    <button type="button" class="btn btn-inf"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" ><i class="icon-calculator"></i> Dados Gerais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#funcionais" role="tab" aria-controls="funcionais" ><i class="icon-basket-loaded"></i> Dados Funcionais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contatos" role="tab" aria-controls="contatos" ><i class="icon-calculator"></i> Contatos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#dependentes" role="tab" aria-controls="dependentes"><i class="icon-calculator"></i> Dependentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contribuicoes" role="tab" aria-controls="contribuicoes"><i class="icon-pie-chart"></i> Contribuições &nbsp;<span class="tag tag-pill tag-danger">2</span></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="dados" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Dados Pessoais</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="ccnumber">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="ccnumber" placeholder="0000 0000 0000 0000">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Month</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Year</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-4">

                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input type="text" class="form-control" id="cvv" placeholder="123">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Company</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label for="company">Company</label>
                                                        <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vat">VAT</label>
                                                        <input type="text" class="form-control" id="vat" placeholder="PL1234567890">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" class="form-control" id="street" placeholder="Enter street name">
                                                    </div>

                                                    <div class="row">

                                                        <div class="form-group col-sm-8">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="Enter your city">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="postal-code">Postal Code</label>
                                                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country" placeholder="Country name">
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
                                                    <strong>Dados Pessoais</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="ccnumber">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="ccnumber" placeholder="0000 0000 0000 0000">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Month</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Year</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-4">

                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input type="text" class="form-control" id="cvv" placeholder="123">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Company</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label for="company">Company</label>
                                                        <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vat">VAT</label>
                                                        <input type="text" class="form-control" id="vat" placeholder="PL1234567890">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" class="form-control" id="street" placeholder="Enter street name">
                                                    </div>

                                                    <div class="row">

                                                        <div class="form-group col-sm-8">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="Enter your city">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="postal-code">Postal Code</label>
                                                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country" placeholder="Country name">
                                                    </div>
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
                                                    <strong>Contatos</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label for="ccnumber">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="ccnumber" placeholder="0000 0000 0000 0000">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Month</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Year</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-4">

                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input type="text" class="form-control" id="cvv" placeholder="123">
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!--/row-->
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                        <div class="col-sm-6">

                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Company</strong>
                                                    <small>Form</small>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group">
                                                        <label for="company">Company</label>
                                                        <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vat">VAT</label>
                                                        <input type="text" class="form-control" id="vat" placeholder="PL1234567890">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" class="form-control" id="street" placeholder="Enter street name">
                                                    </div>

                                                    <div class="row">

                                                        <div class="form-group col-sm-8">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="Enter your city">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="postal-code">Postal Code</label>
                                                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                                                        </div>

                                                    </div>
                                                    <!--/row-->

                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country" placeholder="Country name">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-->

                                    </div>
                                </div>

        

                                <div class="tab-pane" id="dependentes" role="tabpanel">
                                    
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Data de Nascimento</th>
                                                        <th>Grau</th>
                                                        <th>Situação</th>
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
                                                    </tr>
                                                    <tr>
                                                        <td>Avram Tarasios</td>
                                                        <td>2012/02/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quintin Ed</td>
                                                        <td>2012/02/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enéas Kwadwo</td>
                                                        <td>2012/03/01</td>
                                                        <td>Filho</td>
                                                        <td>
                                                            <span class="tag tag-success">Ativo</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agapetus Tadeáš</td>
                                                        <td>2012/01/21</td>
                                                        <td>Irmão</td>
                                                        <td>
                                                            <span class="tag tag-default">Inativo</span>
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
                                                        <th>Entidade</th>
                                                        <th>Vencimento</th>
                                                        <th>Mês</th>
                                                        <th>Situação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yiorgos Avraamu</td>
                                                        <td>2012/01/01</td>
                                                        <td>Janeiro</td>
                                                        <td>
                                                            <span class="tag tag-danger">Vencido</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Avram Tarasios</td>
                                                        <td>2012/02/01</td>
                                                        <td>Fevereiro</td>
                                                        <td>
                                                            <span class="tag tag-danger">Vencido</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quintin Ed</td>
                                                        <td>2012/02/01</td>
                                                        <td>Março</td>
                                                        <td>
                                                            <span class="tag tag-default">Não faturado</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enéas Kwadwo</td>
                                                        <td>2012/03/01</td>
                                                        <td>Abril</td>
                                                        <td>
                                                            <span class="tag tag-success">Pago</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agapetus Tadeáš</td>
                                                        <td>2012/01/21</td>
                                                        <td>Maio</td>
                                                        <td>
                                                            <span class="tag tag-success">pago</span>
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
@endsection
