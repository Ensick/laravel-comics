
@extends('layouts.app')

@section('titolo-pagina', "Home-DC-Comics")

@section('main-content')

    <span class="label-jumbo">
        CURRENT SERIES
    </span>


    @foreach ($comics as $id => $elem)
        <div class="cont-card">
            <div class="card">
                <a href="{{route('show.comics', ['id' => $id])}}">
                    <img src="{{$elem['thumb']}}" alt="img">
                </a>
                <span>{{$elem['title']}}</span>
            </div>
        </div>
    @endforeach 


@endsection