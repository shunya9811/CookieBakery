<nav class="navbar navbar-expand-lg navbar-light bg-light px-md-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/history')}}">Dr.Sweet's factory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/location')}}">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>