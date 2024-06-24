<div class="logo">EEDJA</div>
@auth
  <nav>
    <ul>
      <li>
        <div class="dropdown">
          <button class="btn dropdown-toggle nav-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Serviços
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Área do professor</a></li>
            <li><a class="dropdown-item" href="/notFound">Área do aluno</a></li>
            <li><a class="dropdown-item" href="/notFound">Área do secretário</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <nav>
    <ul>
      <li>
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
      </li>
    </ul>
  </nav>
@endauth

  @guest
  <nav>
    <ul>
        <li><a href="#login" class="cta"></a></li>
    </ul>
  </nav>
  @endguest

  <style>
    .nav-btn{
      display: flex;
      align-items: center;
      font-size: 1.2rem;
    }

    .ionic{
      padding: 1px;
    }

    .logout-btn{
      border: none;
      background-color: transparent;
      letter-spacing: 1px;
    }

    .dropdown-toggle:focus{
      border: none;
    }
  </style>