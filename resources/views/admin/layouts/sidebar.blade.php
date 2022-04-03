<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/SAHAM.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user-bahmou.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ahmed Bahmou</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('indextab')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Tableau de bord
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('indexclient')}}" class="nav-link">
                    <i class="fa-solid fa-list"></i>
                        <p>
                        Liste des clients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Assurances
                        </p>
                    </a>
                </li>
                <li class="nav-header">Rapport</li>
                
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                    <i class="fa-solid fa-file-pen"></i>                <p>
                        Transactions par date
                        </p>
                    </a>
                </li>
</li>
                
                <li class="nav-header">Maintenance</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
            <i class="fa-solid fa-rectangle-list"></i>
              <p> Liste des catégories
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
            <i class="fa-solid fa-clipboard-list"></i>
              <p>
              Liste des politiques
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
            <i class="fa-solid fa-elevator"></i>
              <p>
              liste d'utilisateur
              </p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
            <i class="fa-solid fa-calendar-day"></i>
              <p>
              echance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
            <i class="fa-solid fa-gear"></i>              <p>
              Réglages
              </p>
            </a>
          </li>
            
          
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
