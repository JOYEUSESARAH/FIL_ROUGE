<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Clients</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('clients.index')}}">
              <i class="bi bi-circle"></i><span>Liste Clients</span>
            </a>
          </li>
          <li>
            <a href="{{route('clients.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Client</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Commandes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('commandes.index')}}">
              <i class="bi bi-circle"></i><span>Liste Commandes</span>
            </a>
          </li>
          <li>
            <a href="{{route('commandes.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Commande</span>
            </a>
          </li>

        </ul>
    </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Livraisons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('livraisons.index')}}">
              <i class="bi bi-circle"></i><span>Liste Livraisons</span>
            </a>
          </li>
          <li>
            <a href="{{route('livraisons.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Livraison</span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Icons Nave -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Samoussas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('samoussas.index')}}">
              <i class="bi bi-circle"></i><span>Liste Samoussas</span>
            </a>
          </li>
          <li>
            <a href="{{route('samoussas.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Samoussa</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_1 -->


    </ul>

  </aside>
