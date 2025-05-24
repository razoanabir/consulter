<aside style="background-color: white;"
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-xl-none d-block"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" target="_blank">
            <img src="https://img.icons8.com/?size=100&id=49144&format=png&color=000000" width="26px" height="26px"
                class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Control Panel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <!-- single sidebar-item for dashboard-->
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=10245&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
            </li>

            <!-- single sidebar-item for landing page-->
            <li class="nav-item">
                <a href="{{route('view.landing.page')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=86527&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">Landing Page</span>
                </a>
            </li>

            <!-- single sidebar-item for about-->
            <li class="nav-item">
                <a href="{{route('view.about')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=7694&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">About Page</span>
                </a>
            </li>

            <!-- single sidebar-item for personal information-->
            <li class="nav-item">
                <a href="{{route('view.personal.information')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=myMKNLjqaZik&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">Personal Information</span>
                </a>
            </li>

            <!-- single sidebar-item for cover photos-->
            <li class="nav-item">
                <a href="{{route('view.cover.photo')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=o9wV-YuAW79D&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">Cover Photos</span>
                </a>
            </li>

            <!-- multiple sidebar-item for company information -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#company_information" class="nav-link " aria-controls="company_information" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=b9LQKEJsfNt4&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Company Informations</span>
                </a>
                <div class="collapse " id="company_information">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.company.information')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Company Information </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.company.information')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Company Info </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for potential clients -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#potential_client" class="nav-link " aria-controls="potential_client" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=9542&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Potential Clients</span>
                </a>
                <div class="collapse " id="potential_client">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.potential.client')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Potential Clients </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.potential.client')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Client </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for team -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#team" class="nav-link " aria-controls="team" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=yHmk9ruAuVj3&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Our Team</span>
                </a>
                <div class="collapse " id="team">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.team')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Team Members </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.team')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Team Member </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for blog post -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#blog" class="nav-link " aria-controls="blog" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=fNhzyj3Azznp&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Blogs</span>
                </a>
                <div class="collapse " id="blog">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.blog')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Blogs </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.blog')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Blog </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for pricing -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pricing" class="nav-link " aria-controls="pricing" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=8412&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Our Price Plan</span>
                </a>
                <div class="collapse " id="pricing">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.pricing')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Price Plans </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.pricing')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Price Plan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for testimonial -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#testimonial" class="nav-link " aria-controls="testimonial"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=tiqN5HkdkaRU&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Testimonial</span>
                </a>
                <div class="collapse " id="testimonial">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.testimonial')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Reviews </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.testimonial')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Review </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for service -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px" src="https://img.icons8.com/?size=100&id=44471&format=png&color=000000"
                            alt="">
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.service')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Services </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('add.service')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Service </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for category -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#category" class="nav-link " aria-controls="blog" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=cFq7DlA1dUzs&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1"> Category </span>
                </a>
                <div class="collapse " id="category">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.category')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Category </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.category')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- multiple sidebar-item for project -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#project" class="nav-link " aria-controls="blog" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <img height="20px"
                            src="https://img.icons8.com/?size=100&id=35881&format=png&color=000000" alt="">
                    </div>
                    <span class="nav-link-text ms-1"> Project </span>
                </a>
                <div class="collapse " id="project">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('view.project')}}">
                                <img height="30px" class="p-1"
                                    src="https://img.icons8.com/?size=100&id=48441&format=png&color=000000" alt="">
                                <span class="sidenav-normal "> Project </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('add.project')}}">
                                <img height="30px"
                                    src="https://img.icons8.com/?size=100&id=pCgghrJwOmGQ&format=png&color=000000"
                                    class="p-1" alt="">
                                <span class="sidenav-normal"> New Project </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</aside>