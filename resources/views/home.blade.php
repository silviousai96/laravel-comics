@extends('layouts.app')

@section('main_content')

<div class="home-background">

    <div class="wrapper">

        
        <h2>Current series</h2>
        

        <div class="comics-container">
           
            @foreach ($comics_array as $comic)
    
            <div class="single-comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h4> {{ $comic['series'] }} </h4>
            </div>
            
    
            @endforeach
    
        </div>
    
    </div>

</div>    


@endsection