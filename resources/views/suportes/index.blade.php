@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Suportes</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th with="80px">Numero</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th with="140px" class="text-center">
                <a href="{{route('suportes.create')}}" class="btn btn-success btn-sm">
                    add
                </a>
            </th>
        </tr>
        <?php $numero=1; ?>
            @foreach($suporte as $key => $value)
                <tr>
                    <td>{{$numero++}}</td>
                    <td>{{$value->nome}}</td>
                    <td>{{$value->descricao}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{route('suportes.show', $value->id)}}">
                            show
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{route('suportes.edit', $value->id)}}">
                            editar
                        </a>
                        {{ Form::open(['method' => 'DELETE','route' => ['suportes.destroy', $value->id],'style'=>'display:inline']) }}
                        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">Excluir</i></button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

    </table>
@endsection