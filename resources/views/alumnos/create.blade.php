@extends("plantillas/plantilla2")
    @section("contenido1")
        @include("alumnos/tablahtml")
    @endsection

    @section("contenido2")
    <H1> Formulario </H1>
    
        <form action="{{route('alumnos.store')}}" method="POST">
            @csrf
                <div class="form-group row">
                    <label for="nombre" class="col-sm-3 col-form-label"> Nombre </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellidop" class="col-sm-3 col-form-label"> Apellido </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="apellidop" name="apellidop">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label"> Email </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                
                    <button type="submit" class="btn btn-primary"> Guardar </button>
        </form>
    
    @endsection