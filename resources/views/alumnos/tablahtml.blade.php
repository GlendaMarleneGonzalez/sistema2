
@section('contenido1')

   {{-- @dd($alumnos)  monitorear cual es el contenido de una variable --}}
   <ul>
    {{-- @foreach ($alumnos as $alumno )
        <li>{{$alumno->nombre}}</li>
    @endforeach --}}
    </ul>
        {{-- bs5- nos da opciones de objetos --}}
<hr>
    <a href="{{ route('alumnos.create') }}" class="btn button btn-primary"> Insertar </a>
</hr>

    <div class="table-responsive-md">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Apellido paterno </th>
                    <th scope="col"> E-Mail </th>
                    <th scope="col"> Editar </th>
                    <th scope="col"> Eliminar </th>
                    <th scope="col"> Ver </th>
                    <th scope="col" colspan="3" class="text center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr class="">
                        <td scope="row">{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidop }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn button btn-primary"> ED </a></td>
                        <td><a href="{{ route('alumnos.show', $alumno->id) }}" class="btn button btn-primary"> X </a></td>
                        <td><a href="{{ route('alumnos.show', $alumno->id) }}" class="btn button btn-primary"> VER </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$alumnos->links()}}
    </div>
</a>
            