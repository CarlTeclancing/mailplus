

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= ADMINURL ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= ADMINURL ?>/adduser.php">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
          <li>
            <a href="<?= ADMINURL ?>./view.php">
              <i class="bi bi-circle"></i><span>All User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Mail Options</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= ADMINURL ?>/mail.php">
              <i class="bi bi-circle"></i><span>Emails</span>
            </a>
          </li>
          <li>
            <a href="<?= ADMINURL ?>/mail.php">
              <i class="bi bi-circle"></i><span>Bulk Emails</span>
            </a>
          </li>
          <li>
            <a href="<?= ADMINURL ?>/mail.php">
              <i class="bi bi-circle"></i><span>Sellect Email</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link" href="<?= ADMINURL ?>/index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Analytics</span>
        </a>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= ADMINURL?>/profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
  </aside><!-- End Sidebar-->
