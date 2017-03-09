@extends('layouts.main')

@section('title','apparels')
@section('content')
    <!-- products listing -->
    <!-- Latest apparels -->
    <div class="row">
        @forelse($apparels as $apparel)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$apparel->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="{{route('productdetail',$apparel->id)}}">
                            <img src="{{url('images',$apparel->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('apparel')}}">
                        <h3>
                            {{$apparel->name}}
                        </h3>
                    </a>
                    <h5>
                        Rs.{{$apparel->price}}

                    </h5>
                    <p>
                        {{$apparel->description}}
                    </p>
                </div>
            </div>

        @empty
        <h3>No apparels</h3>
       @endforelse
    </div>
@endsection