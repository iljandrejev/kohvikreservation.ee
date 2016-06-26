@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Broneeringut</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Kuupäev</th>
                            <th>Kohvik</th>
                            <th>Broneeris</th>
                            <th>Kestvus</th>
                            <th>Külaliste arv</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15. aug 15:00</td>
                                <td>Tartu mnt. 7</td>
                                <td>Ilja Andrejev</td>
                                <td>1 h</td>
                                <td>4</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Details"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Cancel"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </div>

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
