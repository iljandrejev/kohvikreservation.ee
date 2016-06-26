@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading restaurant">
                        <h2>Restoraan: <span>{{$cafe->name}}</span></h2>
                        <div class="aadress"><i class="fa fa-map-marker" aria-hidden="true" ></i> {{$cafe->aadress}} </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-4">
                                <h3>Lauad</h3>
                            </div>
                            <div class="col-md-2 col-md-offset-6">
                                <button class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Lisa uus</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <th>Laua number</th>
                                    <th>Staatus</th>
                                    <th>Max istmeid</th>
                                    <th>Kommentaar</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                        @if(!empty($cafe->tables))
                                            @foreach($cafe->tables as $table)
                                            <tr>
                                                <td>{{$table->number}}</td>
                                                <td>
                                                    @if($table->avaibel == 1)
                                                        <span class="btn btn-success btn-xs">Kasutusel</span>
                                                    @endif
                                                    {{$table->avaible}}</td>
                                                <td>{{$table->max_seats}}</td>
                                                <td>{{$table->comment}}</td>
                                                <td></td>

                                            </tr>
                                            @endforeach
                                        @else
                                    <tr>
                                        <td colspan="5">Pole ühte lauda veel lisatud!</td>
                                    </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header new-restaurant-table">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Lisa uus laud</h4>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="/restaurant/{{$cafe->id}}/tables" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Laua number: </label>
                                <div class="col-md-2">
                                    <input class="form-control" type="text" name="number">
                                </div>
                                <div class="col-md-6 col-md-offset-1">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-success active">
                                            <input type="radio" name="avaible" id="option1" autocomplete="off" value="1" checked> Kasutusel
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="avaible" id="option2" autocomplete="off" value="0"> Mitte kasutusel
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Iste kohti </label>
                                <div class="col-md-2">
                                    <input class="form-control" type="text" name="seats_number">
                                </div>
                                <div class="col-md-6 col-md-offset-1">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="grouped" id="option1" autocomplete="off" value="1" checked> Grupeeritav
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="grouped" id="option2" autocomplete="off" value="0"> Mitte grupeeritav
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Kommentaar: </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" type="text" name="comment" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-4">
                                    <button type="submit" class="btn btn-success">Salvesta</button>
                                    <button type="reset" class="btn btn-default" data-dismiss="modal">Tühista</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection