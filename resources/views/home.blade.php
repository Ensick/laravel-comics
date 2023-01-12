
@extends('layouts.app')

@section('titolo-pagina', "Home-DC-Comics")

@section('main-content')


    @foreach ($comics as $elem)
        <div class="cont-card">
            <div class="card">
                <img src="{{$elem['thumb']}}" alt="img">
                <span>{{$elem['title']}}</span>
            </div>
        </div>
    @endforeach 


@endsection