@extends('layouts.app')

@section('main_content')

    
    <div class="title-description-container">
        
        <div class="title-description">
            <h2>{{ $product['title'] }}</h2>

            <div class="price-check">
                
                <span>US price: 
                    <span class="price">{{ $product['price'] }}</span>
                </span>
    
                <span>AVAILABLE</span>

            </div>

            <p> {{ $product['description'] }} </p>
        </div>

        <div class="ad">
            <img src="{{ asset('img/pub.jpg') }}" alt="">
        </div>
        
    </div>

    <div class="d-background">
        <div class="details">
            
            <div class="talent">
                <h2>Talent</h2>

                <div class="art">
                    <h4>Art by:</h4>

                    <div class="artists">
                        
                        @foreach ($product['artists'] as $artist)
                        
                        {{$artist}}

                        @endforeach

                    </div>
                    

                </div>

                <div class="written">
                    <h4>Written by:</h4>

                    <div class="writers">

                        @foreach ($product['writers'] as $writer)
                        
                        {{$writer}}

                        @endforeach    

                    </div>
                    
               
                </div>
            </div>

            <div class="specs">
                <h2>Specs</h2>

                <div class="specs-lines">
                    <h4>Series:</h4>
                    <span>{{ $product['series'] }}</span>
                </div>

                <div class="specs-lines">
                    <h4>US price:</h4>
                    <span>{{ $product['price'] }}</span>
                </div>

                <div class="specs-lines">
                    <h4>On sale date:</h4>
                    <span>{{ $product['sale_date'] }}</span>
                </div>
            </div>
        </div>
    </div>
    

@endsection