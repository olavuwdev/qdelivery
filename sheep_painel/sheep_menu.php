

<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="sheep.php" title="Quentinha Delivery "> <img alt="image" src="<?= QUENTINHA_LOGO ?>" class="header-logo" style="margin-top:5px; width:50%; height: auto;" /> <span class="logo-name"></span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Quentinha Delivery</li>
      <li class="dropdown active">
        <a href="sheep.php" class="nav-link"><i data-feather="monitor"></i><span>Painel</span></a>
      </li>

      <li class="menu-header">Personalizações</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="cpu"></i><span>Configurações</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= FILTROS ?>sheep-dados/index&token=<?=$_SESSION['timeWT']?>">Configurações</a></li>
          <li><a class="nav-link" href="<?= FILTROS ?>sheep-efi/index&token=<?=$_SESSION['timeWT']?>">Banco EFI</a></li>
          <li><a class="nav-link" href="<?= FILTROS ?>sheep-redes/index&token=<?=$_SESSION['timeWT']?>">Redes Sociais</a></li>
        
        </ul>
      </li>

      <li class="menu-header">Clientes e Usuários</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="trending-up"></i><span>Usuarios</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= FILTROS ?>sheep-usuarios/index&token=<?=$_SESSION['timeWT']?>">Listar</a></li>
         

        </ul>
      </li>
<br>
<br>
<br>
<br>
<br>
    </ul>
  </aside>
</div>