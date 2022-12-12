<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="https://cdn.pixabay.com/photo/2022/07/07/10/46/woman-7306978__340.jpg" height="50px" width="50px" style="border-radius: 50%" class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('gallary') }}">Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('new') }}">New Student</a></li>
            <li><a class="dropdown-item" href="{{ route('details') }}">Students Details</a></li>
            <li><a class="dropdown-item" href="{{ route('teacher.create') }}">New Teacher</a></li>
            <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Teachers Details</a></li>
            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
