<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
      <i class="fas fa-graduation-cap"></i>
      <span>Knowledge Dot</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- Search Form -->
       
        
        <!-- Divider -->
        <div class="topbar-divider d-none d-sm-block"></div>
    

        <!-- User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];   ?></span>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login.php">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>