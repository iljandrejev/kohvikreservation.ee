@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading restaurant">Restoraanid</div>
                    <div class="grid">
                        @foreach($restaurants as $restaurant)
                            <figure class="effect-steve">
                                <img src="img/{{ rand(1,33) }}.jpg" alt="img27"/>
                                <figcaption>
                                    <h2>{{$restaurant->name}}</h2>
                                    <p>{{$restaurant->description}}</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$restaurant->aadress}}</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection