<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg sticky-top custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand text-danger fw-bold" href="#">ChainsawApp</a>
    <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/feedback">Feedback</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<style>
  .custom-navbar {
    background-color: #111; /* Deep black */
    box-shadow: 0 2px 8px rgba(255, 0, 0, 0.3);
    font-family: 'Impact', 'Arial Black', sans-serif;
    letter-spacing: 1px;
  }

  .custom-navbar .nav-link {
    position: relative;
    transition: all 0.3s ease-in-out;
  }

  .custom-navbar .nav-link:hover {
    color: red !important;
    text-shadow: 0 0 5px red;
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28 255,255,255, 0.8%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
</style>
@yield('content')