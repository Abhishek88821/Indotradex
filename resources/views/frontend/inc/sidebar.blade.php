<div class="profile-navbar position-relative">
    <div class="profile-navbar-menu">
        <h5>MENU</h5>
        <div class="profile-close position-relative d-block d-md-none" >
            <img src="{{asset('frontend/assets/img/icon/close.svg')}}" class="img-fluid me-2" alt="Menu Icon" title="Menu" /> 
        </div>
        <ul class="list-unstyled ps-0 mb-md-4">
            <li class="d-flex align-items-center">
                <a href="{{route('dashboard')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-home-gear-line"></i> <span
                    class="ms-md-2">Dashboard</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="{{ route('supply')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-customer-service-2-line"></i><span
                    class="ms-md-2">Supply</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="{{ route('buy')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-store-line"></i> <span
                    class="ms-md-2">Buy</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="{{route('resources')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-download-2-line"></i> <span
                    class="ms-md-2">Resources</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="{{route('call')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-customer-service-line"></i> <span
                    class="ms-md-2">Call</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="{{route('meeting')}}" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-google-fill"></i> <span
                    class="ms-md-2">Meeting</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="visit.html" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-ancient-gate-line"></i> <span
                    class="ms-md-2">Visit</span> </a> </li>
        </ul>
    </div>
    <div class="profile-navbar-menu border-0">
        <h5>SETTING</h5>
        <ul class="list-unstyled ps-0 mb-md-4">
            <li class="d-flex align-items-center">
                <a href="profile.html" class="text-decoration-none d-flex align-items-center" role="button" >
                    <i class="ri-user-line"></i> <span
                    class="ms-md-2">Profile</span> </a> </li>
            <li class="d-flex align-items-center">
                <a href="investment.html" class="text-decoration-none d-flex align-items-center" role="button" >
                <i class="ri-exchange-dollar-line"></i> <span
                    class="ms-md-2">Investment</span> </a> </li>
        </ul>
    </div>
    <div class="create-user">
        <a href="create-user.html" class="text-decoration-none d-flex align-items-center justify-content-center"
            role="button"> <i class="ri-user-3-line"></i><span class="ms-2">Create User</span></a>
    </div>
</div>