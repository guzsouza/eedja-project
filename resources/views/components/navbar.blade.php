<div class="logo">EEDJA</div>
  <nav>
      <ul>
          @auth
            <li><a href="#">Planejamentos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Portfólio</a></li>
            <li><a href="#">Contato</a></li>
          @endauth
          @guest
            <li><a href="#login" class="cta">Entrar</a></li>
          @endguest
      </ul>
  </nav>