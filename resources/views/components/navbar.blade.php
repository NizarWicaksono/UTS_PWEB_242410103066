@props(['username'])

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">

    <a class="navbar-brand fs-5" href="#">NZ-Warehouse</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">

          <a class="nav-link px-3" href="/dashboard?username={{ $username }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="/pengelolaan?username={{ $username }}">Pengelolaan Stok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="/profile?username={{ $username }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger px-3" href="/login">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
