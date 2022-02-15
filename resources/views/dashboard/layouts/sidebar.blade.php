<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link" href="/">
                <span data-feather="home"></span>Home Page
              </a>
            </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="layout"></span>Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>My Post
          </a>
        </li>
      </ul>

      {{-- hanya bisa di akses oleh admin --}}
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted px-3 mt-4 mb-1">Administrator</h6>
      <ul class="nav flex-colum">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="file-text"></span>Post Category
            </a>
          </li>
      </ul>
      @endcan
    </div>
</nav>
