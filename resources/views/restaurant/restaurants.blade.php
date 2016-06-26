@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading restaurant">Restoraanid</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-10">
                                <button class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">Lisa uus</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <th>Kohvik</th>
                                    <th>Aadress</th>
                                    <th>Kirjeldus</th>
                                    <th>Broneerimisi</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    @foreach($restaurants as $restaurant)
                                        <tr>
                                            <td>{{$restaurant->name}}</td>
                                            <td>{{$restaurant->aadress}}</td>
                                            <td>{{$restaurant->description}}</td>
                                            <td>{{count($restaurant->reservations)}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button id="dLabel" type="button" class="btn btn-primary btn-sm btn-block"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Tegevus
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                        <li><a href="{{url('/restaurant/'.$restaurant->id.'/tables')}}">Lauad</a></li>
                                                        <li><a href="#">Muuda</a></li>
                                                        <li><a href="#">Kustuta</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
                    <div class="modal-header new-restaurant">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Lisa uus restoraan</h4>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="/restaurants" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nimetus: </label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Aadress: </label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="aadress">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kirjeldus: </label>
                                <div class="col-md-10">
                                    <textarea class="form-control" type="text" name="description" rows="6"></textarea>
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