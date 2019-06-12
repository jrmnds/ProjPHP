<div class="row">
  <div class="col-sm-2">
    {!! form::label('nome','Nome') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('nome') ? 'has-error' : "" }}">
      {{ Form::text('nome',NULL, ['class'=>'form-control', 'id'=>'nome', 'placeholder'=>'Nome do Campeão']) }}
      {{ $errors->first('nome', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('descricao','Descrição') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('descricao') ? 'has-error' : "" }}">
      {{ Form::text('descricao',NULL, ['class'=>'form-control', 'id'=>'descricao', 'placeholder'=>'Descrição do Campeão']) }}
      {{ $errors->first('descricao', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
