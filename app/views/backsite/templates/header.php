<style>
  /* Navbar Styling */
  .navbar {
    background-color: #3498db; /* Background color for the navbar */
    border-bottom: 1px solid #2980b9; /* Border color below the navbar */
  }

  .navbar-nav .nav-item {
    margin-right: 10px; /* Adjust the spacing between navbar items */
  }

  .navbar-nav .nav-link {
    color: #ecf0f1; /* Text color for navbar items */
  }

  .navbar-nav .nav-link:hover {
    color: #ffffff; /* Text color on hover */
  }

  .navbar-toggler-icon {
    background-color: #ecf0f1; /* Color for the navbar toggle icon */
  }

  .navbar-toggler {
    border-color: #ecf0f1; /* Border color for the navbar toggle button */
  }

  /* Optional: Adjust elevation of the navbar */
  .navbar {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow to the navbar */
  }
</style>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="<?= BASEURL; ?>/backsite/logout" role="button">
        <i class="bi bi-box-arrow-in-left">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
        </i>Log Out
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
