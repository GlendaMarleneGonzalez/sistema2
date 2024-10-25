 
 <!---Nav Tab--->
 <ul
 class="nav nav-tabs"
 id="navId"
 role="tablist"
>

<li class="nav-item">
 <a
     href="#tab1Id"
     class="nav-link active"
     data-bs-toggle="tab"
     aria-current="page"
 > Active </a>
</li>

<li class="nav-item dropdown">
 <a
     class="nav-link dropdown-toggle"
     data-bs-toggle="dropdown"
     href="#"
     role="button"
     aria-haspopup="true"
     aria-expanded="false"
 > Catalogos </a>

 <div class="dropdown-menu">
     <a class="dropdown-item" href="{{route("alumnos")}}"> Corte de pelo Hombre </a>
     <a class="dropdown-item" href="{{route('maestros')}}"> Corte de Pelo Mujer </a>
     <a class="dropdown-item" href="{{route('deptos')}}"> Corte de pelo Niños </a>
     <a class="dropdown-item" href="{{route('reticulas')}}"> Corte de pelo Niñas </a>
     <a class="dropdown-item" href="{{route('materias')}}"> Tintes de pelo Mujer </a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#tab4Id"> Action </a>
 </div>
</li>
@guest
 
<li class="nav-item" role="presentation">
 <a href="{{ route('login') }}" class="nav-link"
     > Login </a
 >
</li>
@endguest

@auth
<li class="nav-item" role="presentation">
 <form action="{{ route('logout') }}" method="POST">
 @csrf
 <button>Logout</button>
 
 </form>
</li>
@endauth

</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
 
</div>
<div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector("#navId a");
bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>

@auth
{{ Auth::user()->name }}
<br>
{{ Auth::user()->email }}
@endauth