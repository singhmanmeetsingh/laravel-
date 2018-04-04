@extends('layouts.app')

@section('content')

  <h1>contact</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
     <div class="form-group">

      {!!Form::label('name', 'Name');!!}
      {!!Form::text('name','',['class'=>'form-control']);!!}
     </div>

     <div class="form-group">

      {!!Form::label('email', 'E-Mail Address');!!}
      {!!Form::text('email','',['class'=>'form-control']);!!}
     </div>

     <div class="form-group">

      {!!Form::label('message', 'Message');!!}
      {!!Form::textarea('message','',['class'=>'form-control']);!!}
     </div>
     <div>
       {!!Form::submit('Submit',['class'=>'btn bt'])!!}
     </div>




{!! Form::close() !!}

@endsection
