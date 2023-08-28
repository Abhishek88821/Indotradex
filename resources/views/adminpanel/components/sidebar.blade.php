<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="#" aria-expanded="true">
          <span class="d-flex">
            <i class="ti ti-chart-donut-3"></i>
          </span>
          <span class="hide-menu">Tranding</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
           <li class="sidebar-item">
            <a href="{{route('admin.project')}}" class="sidebar-link">
              <div class="round-16 d-flex align-items-center justify-content-center">
                <i class="ti ti-circle"></i>
              </div>
              <span class="hide-menu">Products</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{route('admin.tranding.category')}}" class="sidebar-link">
              <div class="round-16 d-flex align-items-center justify-content-center">
                <i class="ti ti-circle"></i>
              </div>
              <span class="hide-menu"> Category</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="#" aria-expanded="true">
          <span class="d-flex">
            <i class="ti ti-chart-donut-3"></i>
          </span>
          <span class="hide-menu">Trading</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="{{route('admin.product')}}" class="sidebar-link">
              <div class="round-16 d-flex align-items-center justify-content-center">
                <i class="ti ti-circle"></i>
              </div>
              <span class="hide-menu">Project</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{route('admin.trading.category')}}" class="sidebar-link">
              <div class="round-16 d-flex align-items-center justify-content-center">
                <i class="ti ti-circle"></i>
              </div>
              <span class="hide-menu"> Category</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.category')}}" aria-expanded="false">
          <span class="d-flex">
            <i class="ti ti-archive"></i>
          </span>
          <span class="hide-menu">Category</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.business')}}" aria-expanded="false">
          <span class="d-flex">
            <i class="ti ti-archive"></i>
          </span>
          <span class="hide-menu">Business</span>
        </a>
      </li>

    </ul>


    
  </nav>
  <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
    <div class="hstack gap-3">
      <div class="john-img">
        <img src="{{asset('adminpanel/dist/images/profile/user-1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
      </div>
      <div class="john-title">
        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
        <span class="fs-2 text-dark">Designer</span>
      </div>
      <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
        <i class="ti ti-power fs-6"></i>
      </button>
    </div>
  </div>  