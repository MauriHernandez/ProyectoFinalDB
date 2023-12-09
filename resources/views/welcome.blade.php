<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{'/'}}" aria-current="page">Hospital <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('perfiles')}}">Perfiles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('doctores')}}">Doctores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pacientes')}}">Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('medicamentos')}}">Medicamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('apoyos')}}">Apoyos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('usuarios')}}">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('citas')}}">Citas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('recetas')}}">Recetas</a>
            </li>
                      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vistas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/vistas/vista1')}}">Pacientes y Doctores</a></li>
            <li><a class="dropdown-item" href="{{url('/vistas/vista2')}}">Pacientes y Recetas</a></li>
            <li><a class="dropdown-item" href="{{url('/vistas/vista3')}}">Doctores y Recetas</a></li>
            <li><a class="dropdown-item" href="{{url('/vistas/vista4')}}">Pacientes y Apoyos</a></li>
            <li><a class="dropdown-item" href="{{url('/vistas/vista5')}}"> Doctores, pacientes y Recetas</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/consultas/consulta1')}}">Usuario-Tipo de perfil</a></li>
            <li><a class="dropdown-item" href="{{url('/consultas/consulta2')}}">Doctor-Paciente</a></li>
            <li><a class="dropdown-item" href="{{url('/vistas/vista3')}}">Paciente-Doctor</a></li>
          </ul>
        </li>


            <a href="{{ url('/backup') }}" class="btn btn-primary">Crear Backup</a>
          
        



            
</script>

        </ul>
    </nav>


    <main class="container">
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
            @yield('content')
            </div>

            <div class="col-md-2"></div>
        </div>

    </main>
    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>