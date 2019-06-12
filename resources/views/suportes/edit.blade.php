@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($suporte,['route'=>['suportes.update',$suporte->id],'method'=>'PATCH']) }}
      @include('suportes.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection
