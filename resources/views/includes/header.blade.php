<style>

</style>

<hr class="hr-navbar2 ">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img width="100px" src="/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="/" href="/">Inicio</a>
        <a class="nav-link" aria-current="/" href="/logout">logout</a>
        <a class="nav-link" href="/assistants/create">Agregar cliente</a>
        @if (!$isAuth)
        <a class="nav-link text-primary" href="/login">Login</a>
        <a class="nav-link text-primary" href="/register">Register</a>
        @endif

      </div>
    </div>
  </div>
</nav>
<hr class="hr-navbar">
