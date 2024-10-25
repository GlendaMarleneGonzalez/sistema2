@section('contenido1')
    {{-- @dd($alumnos)  monitorear cual es el contenido de una variable --}}
        
        <ul>
            @isset($mensaje)
                <p>{{$mensaje}}</p>
            @endisset
                
                {{-- @foreach ($alumnos as $alumno )
                    <li>{{$alumno->nombre}}</li>
                @endforeach --}}
        </ul>

{{-- bs5- nos da opciones de objetos --}}
    
    <div>
        <a href="{{route('alumnos.create') }}" class="btn button btn-primary"> Nuevo </a>
    <div class="table-responsive-md">
        
        <table class="table table-primary">
            
            <thead>
                
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col"> Carrera </th>
                    <th scope="col"> Deptos </th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                    <th scope="col">VER</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr class="">
                        <td scope="row">{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidop }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->carrera->nombrecarrera}}</td>
                        <td>{{ $alumno->carrera->depto->nombredepto}}</td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id)}}" class="btn button btn-primary"> ED </a></td>
                        <td><a href="{{ route('alumnos.show', $alumno->id)}}" class="btn button btn-primary"> X </a></td>
                        <td><a href="{{ route('alumnos.show', $alumno->id)}}" class="btn button btn-primary"> VER </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$alumnos->links()}}
    </div>
</div>
<hr>
<ul>
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($deptos as $depto)
                    <li>{{$depto->nombredepto}}</li>
                    <ul>
                        @foreach ($depto->carreras as $carrera)
                            <li>{{$carrera->nombrecarrera}}</li>
                            
                            <ul>
                                @foreach ($carrera->alumnos as $alumno)
                                    <li>{{ $alumno->nombre }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>
                @endforeach
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('alumnos.index')}}" method="get">
                            <select name="iddepto" onchange="this.form.submit">
                            @foreach ($deptos as $depto )
                                <option value="{{ $depto->id }}">{{ $depto->nombredepto }}</option>
                            @endforeach
                        </select>

                        <select name="idcarrera" id="idcarrera">
                            <option value="0">Selecciona la materia</option>
                            @if (request("iddepto") !==null)
                                @foreach ($deptos->find(request('iddepto')) as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->nombrecarrera }}</option>
                                @endforeach
                            @endif
                        </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</ul>

<script>

    documento.getElementById("iddepto").value=request('iddepto');

</script>
