<!DOCTYPE html>
<!-- Link per i file css usati nel codice -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>





<!-- Navbar -->
<!-- As a link -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="{{route('homepublic')}}">
        <img
          src="{{asset('images/image20.png')}}"
          height="15"
          alt="MDB Logo"
          loading="lazy"
          style="height: 40px;"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('chisiamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dovesiamo')}}">Dove siamo</a>
        </li>
        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">

        <form action="{{route('login')}}" method=GET>
            <button type="submit" class="btn btn-light px-3 me-3">
          Login
        </button>
        </form>

        <form action="{{route('register')}}" method="GET">
                <button type="submit" class="btn btn-light px-3 me-2">
          Registrati
        </button>
        </form>


   
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

