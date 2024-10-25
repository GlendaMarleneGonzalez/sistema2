@extends("plantillas/plantilla1")

@section("contenido1")

<div class="row">
    <div class="col">
        <h3> APERTURA DE MATERIAS </h3>
    </div>

    <div class="col">
        <select name="idperiodo" id="idperiodo">
            <option value="1"> ENE-JUN 204 </option>
        </select> <br>
        
        <select name="idcarrera" id="carrera">
            <option value="1"> ISC </option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col">
        <button> Sem 1 </button>
            <input type="checkbox" name="m1" id="m1"> interfaz grafica de usuario 1 <br>
            <input type="checkbox" name="m2" id="m2"> Materia 2 <br>
            <input type="checkbox" name="m3" id="m3"> Materia 3 <br>
            <input type="checkbox" name="m4" id="m4"> Materia 4 <br>
            <input type="checkbox" name="m5" id="m5"> Materia 5 <br>
    </div>

    <div class="col">
        <button> Sem 2 </button>
            <input type="checkbox" name="m1" id="m1"> base de datos 1 <br>
            <input type="checkbox" name="m2" id="m2"> Materia 2 <br>
            <input type="checkbox" name="m3" id="m3"> Materia 3 <br>
            <input type="checkbox" name="m4" id="m4"> Materia 4 <br>
            <input type="checkbox" name="m5" id="m5"> Materia 5 <br>
    </div>

    <div class="col">
        <button> Sem 1 </button>
            <input type="checkbox" name="m1" id="m1"> Materia 1 <br>
            <input type="checkbox" name="m2" id="m2"> Materia 2 <br>
            <input type="checkbox" name="m3" id="m3"> Materia 3 <br>
            <input type="checkbox" name="m4" id="m4"> Materia 4 <br>
            <input type="checkbox" name="m5" id="m5"> Materia 5 <br>
    </div>
</div>


@endsection