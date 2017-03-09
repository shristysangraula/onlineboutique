

@extends('layouts.main')

@section('title','apparel')

@section('content')

    <!-- products listing -->
    <!-- Latest apparels -->

                
                    
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    @foreach($products as $product)
                     <img src="{{url('images',$product->image)}}"/>
                </div>
            </div>
        </div>
        
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    
                    <span class="price-tag">{{$product->name}}</span> 

            
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <h3>{{$product->price}}</h3></br>
                        <h3>Description:</h3>{{$product->description}}
                        
                     <a href = "{{route('cart.addItem', $product->id) }}" class="button  expanded">Add to Cart</a>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection