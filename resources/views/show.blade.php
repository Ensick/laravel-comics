@extends('layouts.app')

@section('titolo-pagina', "Home-DC-Comics")

@section('main-content')

<div class="show-cont-top">

    <div class="cont-poster">
        <img class="show-poster" src="{{$fumetto_singolo['thumb']}}" alt="img">
    </div>

    <div class="show-content">
        <div class="show-cont-right">
            <h2>{{$fumetto_singolo['title']}}</h2>
            <div class="info-cont">
                <div class="price">
                    <span>U.S. Price: {{$fumetto_singolo['price']}}</span>
                    <span>AVAILABLE</span>
                </div>
                <div class="available">
                    <span>Check Available</span>
                </div>
            </div>
            <p>{{$fumetto_singolo['description']}}</p>
        </div>
    
       
        <div class="show-cont-left">
            <img src="{{asset('img/adv.jpg')}}" alt="img">
        </div>  
    </div>

</div>


@endsection