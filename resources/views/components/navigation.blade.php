<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">StepUp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero d-flex align-items-center text-center text-white">
    <div class="container bg-dark p-2 mt-3">
        <h1 class="fw-bold">Prati svoje treninge, postiži ciljeve!</h1>
        <p class="lead">Organizuj svoje aktivnosti, postavi ciljeve i unapredi svoju formu.</p>
        @guest
            <a href="/" class="btn btn-light btn-lg mt-3">Registruj se</a>
            <a href="/" class="btn btn-outline-light btn-lg mt-3">Prijavi se</a>
        @else
            <a href="/" class="btn btn-light btn-lg mt-3">Idi na Dashboard</a>
        @endguest
    </div>
</section>
