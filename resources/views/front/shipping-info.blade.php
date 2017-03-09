@extends('layouts.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Shipping Info</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline1', 'Address Line 1') }}
            {{ Form::text('addressline1', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('addressline2', 'Address line 2') }}
            {{ Form::text('addressline2', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('full_name', 'Full Name') }}
            {{ Form::text('full_name', null, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection