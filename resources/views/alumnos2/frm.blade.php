@extends("plantillas/plantilla2")

    @section("contenido1")
        @include("alumnos2/tablahtml")
    @endsection

    @section("contenido2")
        <H1> Insertando frm</H1>
        <ul>
            @foreach ($errors->all() as $error )
            <li>
                {{$error}}
            </li>
                
            @endforeach
        </ul>
        @if ($accion== 'C')
            <form action="{{route('alumnos.store')}}" method="POST">
                @else ($accion== 'E')
                <form action="{{route('alumnos.update',$alumno->id)}}" method="POST"> 
        @endif
        
            @csrf
                <div class="form-group row">
                    <label for="nombre" class="col-sm-3 col-form-label"> Nombre </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $alumno->nombre)}}">
                        @error("nombre")
                            <p class="text-danger"> Error en: {{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellidop" class="col-sm-3 col-form-label"> Apellido Paterno: </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop', $alumno->apellidop)}}">
                        @error("apellidop")
                            <p class="text-danger"> Error en: {{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label"> Email </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email', $alumno->email)}}">
                        @error("email")
                            <p class="text-danger"> Error en: {{$message}}</p>
                        @enderror
                    </div>
                </div>
                
                    <button type="submit" class="btn btn-primary"> Grabar </button>
        </form>
    
    @endsection