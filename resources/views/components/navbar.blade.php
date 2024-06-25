<div class="nav-container">
  <div class="logo">
    <a href="/dashboard">
      <img src="/img/logo-eedja.svg" alt="" width="38px" height="38px">
    </a>
  </div>
@auth
  <div class="link-container">
    <div class="dropdown" style="margin-right: 10px">
      <button class="btn dropdown-toggle nav-btn nav-font" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Serviços
      </button>
      <ul class="dropdown-menu nav-font">
        <li><a class="dropdown-item" href="#">Área do professor</a></li>
        <li><a class="dropdown-item" href="/notFound">Área do aluno</a></li>
        <li><a class="dropdown-item" href="/notFound">Área do secretário</a></li>
      </ul>
    </div>

    <div>
      <a href="#login" class="btn nav-btn nav-font">Sair</a>
    </div>
    
    {{-- 
    <div class="dropdown">
      <button class="btn dropdown-toggle nav-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <ion-icon class="ionic" name="person-circle-outline"></ion-icon>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Perfil</a></li>
        <li><div class="dropdown-item btn">
          <form action="{{ route('logout') }}" method="POST">
            <input type="submit" class="logout-btn" value="Sair">
          </form>
        </div>
        </li>
      </ul>
    </div>
    --}}
  </div>
@endauth

  @guest
  <div>
    <a href="#login" class="cta">Entrar</a>
  </div>
  @endguest
  </div>
</div>

  <style>
    .nav-container {
      display: flex;
      justify-content: space-between;
      background: #ffffff; 
      padding: 10px 20px;
    }
    
    .nav-btn{
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.2rem;
    }

    .ionic:hover{
      color: blue;
    }

    .nav-btn:hover{
      color: blue;
    }

    .dropdown{
      display: flex;
    }

    .logout-btn{
      border: none;
      background-color: transparent;
      letter-spacing: 1px;
    }

    .dropdown-toggle:focus,
    .dropdown-item:focus{
      outline: none;
      border: 1px solid transparent;
    }

    .dropdown-toggle:active,
    .dropdown-item:active{
      outline: none;
      border: 1px solid transparent;
    }

    .dropdown-toggle:focus:active,
    .dropdown-item:focus:active{
      outline: none;
      border: 1px solid transparent;
    }

    .test{
      background-color: black;
    }

    .link-container{
      display: flex;
      align-content: center;
    }

    .nav-font{
      font-size: 1.5rem;
    }
  </style>