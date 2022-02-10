<!DOCTYPE html>
<html>
    <head>
        <title>Post Larvel 8 CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">

            @if(last(request()->segments()) == "formulario")
            <a href="{{ url('es/post/') }}">
                @else
                <a href=" {{url('es/post/'. last(request()->segments()) ) }}"> 
                    @endif
                    <button class="btn btn-light btn-sm">@lang('espanol')</button></a>

                @if(last(request()->segments()) == "formulario")
                <a href="{{ url('en/post/') }}">
                    @else
                    <a href=" {{url('en/post/'. last(request()->segments()) ) }}"> 
                        @endif
                        <button class="btn btn-light btn-sm">@lang('ingles')</button></a>
                    <a href="{{ url('/') }}"><button class="btn btn-light btn-sm">Ir al Dashboard</button></a>
                    @yield('content')
        </div>

    </body>
</html>


