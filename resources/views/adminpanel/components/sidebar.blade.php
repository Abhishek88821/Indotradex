<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="true">
                <span class="d-flex">
                    <i class="ti ti-chart-donut-3"></i>
                </span>
                <span class="hide-menu">Enquiries</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{ route('admin.product.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>
                 <li class="sidebar-item">
                    <a href="{{ route('admin.project.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Project</span>
                    </a>
                </li>
               <li class="sidebar-item">
                    <a href="{{ route('admin.business.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Business</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('admin.call.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Call</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('admin.metting.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Metting</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('admin.visit.enquiries') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Visit</span>
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
                    <a href="{{ route('admin.product') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Project</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.trading.category') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Category</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item">
                    <a href="{{ route('admin.trading.subcategory') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Sub Category</span>
                    </a>
                </li> --}}
            </ul>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="true">
                <span class="d-flex">
                    <i class="ti ti-chart-donut-3"></i>
                </span>
                <span class="hide-menu">Tranding</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{ route('admin.project') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.tranding.category') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu"> Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.category') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Category</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.business') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Business</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('slider.index') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Slider</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('about.index') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">About Us</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.contact') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Contact Us</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('teams.index') }}" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Team</span>
            </a>
        </li>


    </ul>
</nav>
