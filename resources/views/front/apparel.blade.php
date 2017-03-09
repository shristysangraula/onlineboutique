@extends('layouts.main')

@section('title','apparel')

@section('content')

    <!-- products listing -->
    <!-- Latest apparels -->

                    {{$product->name}}
                    
                    
                    {{$product->size}}
                    </div>
                    
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                     <img src="{{url('images',$product->image)}}"/>
                </div>
            </div>
        </div>
        
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">{{$product->price}}</span> {{$product->name}}

            {{$product->description}}
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select >
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>

                            </select>
                        </label>
                        <a href=" <a href = "{{route('cart.addItem', $product->id) }}" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
               

            </div>
        </div>
    </div>

@endsection