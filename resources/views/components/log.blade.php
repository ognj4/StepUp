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
