<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
  <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Mantenimientos main</a>
  </li>
  <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Procesos main</a>
  </li>
</ul>
<div class="tab-content custom-menu-content">
  <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
      <ul class="notika-main-menu-dropdown">
          <li><a @click="menu=1" href="#">Bingos</a></li>
          <li><a @click="menu=2" href="#">Responsables</a></li>
      </ul>
  </div>
  <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
      <ul class="notika-main-menu-dropdown">
          <li><a href="#">Juego en marcha</a></li>
          <li><a href="#">Jugadores en linea</a></li>
      </ul>
  </div>
</div>