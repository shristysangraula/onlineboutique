@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
              <br>
              <!--
        <a href="{{url('/apparels')}}">
            <button class="button large">CHECK OUT SOME LATEST  <BR> JANANI'S STYLE </button>
        </a>
    -->
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Janani&rsquo;s Latest apparels
        </h2>
    </div>

    <!-- Latest apparels -->
    <div class="row">
        @forelse($apparels->chunk(4) as $chunk)
            @foreach($chunk as $apparel)
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
                        ${{$apparel->price}}

                    </h5>
                    <p>
                        {{$apparel->description}}
                    </p>
                </div>
            </div>
            @endforeach
        @empty
            <h3>No apparels</h3>
        @endforelse
    </div>

    <!-- Footer -->
    <br>
@endsection