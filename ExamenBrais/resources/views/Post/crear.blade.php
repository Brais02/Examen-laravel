@extends('Post.layout')
@section('content')

   @if($errors->any())
    <ul class='red'>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li> 
        @endforeach
    </ul>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-header">@lang('CrearPub') </div>
            <div class="card-body">
                <form action="{{ url('/es/post') }}" method="post">
                    {!! csrf_field() !!}

                    <label for="nombre">@lang('Post.titulo')</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required value="{{ old('titulo', $post->titulo ?? '') }}"><br>
                    {{$errors->first('titulo')}}

                     <label for="nombre">@lang('Post.extracto')</label>
                    <input type="text" id="extracto" name="extracto" class="form-control" required value="{{ old('extracto', $post->extracto ?? '') }}"><br>
                    {{$errors->first('extracto')}}
                    
                     <label for="nombre">contenido</label>
                    <input type="text" id="contenido" name="contenido" class="form-control" required value="{{ old('contenido', $post->contenido ?? '') }}"><br>
                    {{$errors->first('contenido')}}
                    
                    <input type="checkbox" id="caducable" name="caducable" value="true" {{ (old('caducable') == "true") ? "checked" : "" }}>
                    <label for="caducable">Caducable</label><br>
                    <input type="checkbox" id="comentable" name="comentable" value="true" {{ (old('comentable') == "true") ? "checked" : "" }}>
                    <label for="comentable">Comentable</label><br><br>

                    
                    <div class="form-group{{ $errors->has('acceso') ? ' has-error' : '' }}">
                        <label for="acceso">Tipo de acceso:</label>
                        <select name="acceso" id="acceso" required>
                            <option value="privado" @if (old('acceso') === 'privado' ) selected @endif >privado</option>
                            <option value="publico" @if (old('acceso') === 'publico' ) selected @endif >publico</option>
                        </select><br>
                        <small class="text-danger">{{$errors->first('acceso')}}</small>
                    </div>

                    <label for="fecha">@lang('Post.fecha'):</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ old('fecha', $post->fecha ?? '') }}"><br>

                   <!-- <input hidden type="number" name="usuario" value="">-->
                    
                    <button type="submit" class="btn btn-success" value="Save">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</html>
@endsection
