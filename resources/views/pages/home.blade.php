@extends('layouts.app')
@section('content')

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
    <div class="spinner-grow align-self-center"></div>
</div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

        <a href="javascript:void(0);" class="sidebarCollapse">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>

        <div class="search-animated toggle-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <form class="form-inline search-full form-inline search" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </div>
            </form>
            <span class="badge badge-secondary">Ctrl + /</span>
        </div>

        <ul class="navbar-item flex-row ms-lg-auto ms-0">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/tr.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Turkish</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/br.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Portuguese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/in.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Hindi</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/de.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                </div>
            </li>

            <li class="nav-item theme-toggle-item">
                <a href="javascript:void(0);" class="nav-link theme-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                </a>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <div class="drodpown-title message">
                        <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
                    </div>
                    <div class="notification-scroll">
                        <div class="dropdown-item">
                            <div class="media server-log">
                                <img src="../src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Kara Young</h6>
                                        <p class="">1 hr ago</p>
                                    </div>
                                    
                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown-item">
                            <div class="media ">
                                <img src="../src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Daisy Anderson</h6>
                                        <p class="">8 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <img src="../src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Oscar Garner</h6>
                                        <p class="">14 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="drodpown-title notification mt-2">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                        </div>

                        <div class="dropdown-item">
                            <div class="media server-log">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Server Rebooted</h6>
                                        <p class="">45 min ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Kelly Portfolio.pdf</h6>
                                        <p class="">670 kb</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Licence Expiring Soon</h6>
                                        <p class="">8 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="{{ asset('img/shafiq.svg') }}" class="rounded-circle">
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <div class="emoji me-2">
                                {{-- &#x1F44B; --}}
                                <img alt="avatar" src="{{ asset('img/shafiq.svg') }}" class="rounded-circle">
                            </div>
                            <div class="media-body">
                                <h5>Dr. Shafiq</h5>
                                <p>Super Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="user-profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="app-mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth-boxed-lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth-boxed-signin.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
                
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">

            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href="/">
                            {{-- <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 107 48" fill="none">
                                <path d="M30.038 7.74685L29.8101 9.87343H24.1899V9.64558L24.4177 8.77216V1.70887L24.1899 0.835454V0.607605H25.7848V0.835454L25.557 1.70887V8.73419H29.0886L29.8101 7.74685H30.038Z" fill="#666566"/>
                                <path d="M35.7721 7.48102H35.924V8.96204C35.6202 9.37976 34.7088 9.9114 33.6835 9.9114C31.6708 9.9114 30.6075 8.35444 30.6075 6.45571C30.6075 4.55697 31.6708 2.96204 33.4936 2.96204C35.7341 2.96204 36.3037 5.01267 36.3037 6.22786C36.3037 6.41773 36.2658 6.60761 36.2658 6.72153H31.6708C31.6708 8.05064 32.5443 8.84811 33.6835 8.84811C34.6708 8.84811 35.4303 8.27849 35.7721 7.48102ZM31.7088 5.65824H35.0886C35.0506 4.8228 34.5569 3.98735 33.4177 3.98735C32.5443 3.98735 31.8987 4.70887 31.7088 5.65824Z" fill="#666566"/>
                                <path d="M42.1519 9.64558V9.87343H40.8608V8.77216C40.2912 9.37976 39.5317 9.87343 38.5823 9.87343C37.9747 9.87343 36.7595 9.53166 36.7595 8.12659C36.7595 6.03799 39.3038 5.81014 40.481 5.24052C40.6329 5.16457 40.7469 4.97469 40.7469 4.8228C40.7469 4.78482 40.7469 4.70887 40.7089 4.63292C40.557 4.2152 40.2152 3.94938 39.4557 3.94938C38.5064 3.94938 37.6329 4.519 37.3671 5.39242H37.1393V4.02533C37.519 3.60761 38.1266 2.96204 39.4937 2.96204C40.9367 2.96204 41.8861 3.83545 41.8861 5.24052V8.77216L42.1519 9.64558ZM40.8608 7.6709V6.03799C40.2532 6.64558 37.9747 6.87343 37.9747 8.05064C37.9747 8.35444 38.1646 8.84811 38.8861 8.84811C39.7975 8.84811 40.4431 8.20254 40.8608 7.6709Z" fill="#666566"/>
                                <path d="M48.4936 9.64556V9.87341H47.2405V9.22784C46.8228 9.64556 46.2152 9.87341 45.6455 9.87341C43.8228 9.87341 42.7595 8.31645 42.7595 6.41771C42.7595 4.51898 43.7848 2.92404 45.6076 2.92404C46.2911 2.92404 47.0506 3.30379 47.2405 3.56961V1.3291L47.0126 0.759483V0.531636L48.3038 0.0379639V8.77214L48.4936 9.64556ZM47.2025 7.82277V5.01265C46.8987 4.40505 46.3671 3.98733 45.6076 3.98733C44.3544 3.98733 43.7468 5.0886 43.7468 6.41771C43.7468 7.74683 44.3544 8.84809 45.6076 8.84809C46.3291 8.84809 46.8987 8.43037 47.2025 7.82277Z" fill="#666566"/>
                                <path d="M54.7215 8.46837L54.4937 9.87343H49.0633C49.0633 6.26583 53.4684 5.24052 53.4684 3.15191C53.4684 2.27849 52.8608 1.74685 51.5316 1.74685C51 1.74685 50.0886 1.97469 49.557 2.46837H49.3671V0.683555H49.5949L49.8228 0.949378C50.2405 0.797479 51.038 0.607605 51.6456 0.607605C53.1266 0.607605 54.6076 1.25318 54.6076 3.18988C54.6076 5.54432 50.7342 6.87343 50.4304 8.77216H54.1139L54.4937 8.46837H54.7215Z" fill="#E53E2B"/>
                                <path d="M61.2152 9.87343H55.2911V9.64558L55.519 8.73419V1.70887L55.2911 0.835454V0.607605H61.0633L61.2911 2.73419H61.0633L60.3418 1.74685H56.6582V4.17723H58.8987L59.7722 3.72153H60V5.77216H59.7722L58.8987 5.27849H56.6582V8.73419H60.4937L61.2152 7.74685H61.443L61.2152 9.87343Z" fill="#666566"/>
                                <path d="M67.7848 9.87338H66.2659V9.64553L66.5317 8.73414V5.69616C66.5317 4.67085 66.3798 3.9873 65.2026 3.9873C64.481 3.9873 63.6076 4.5949 63.3038 5.24047V8.73414L63.5317 9.60755V9.87338H62.0127V9.64553L62.2405 8.77211V4.25313L62.0127 3.64553V3.41768L63.2659 2.92401V3.79743C63.6456 3.37971 64.519 2.92401 65.3924 2.92401C66.9114 2.92401 67.557 3.79743 67.557 5.20249V8.73414L67.7848 9.60755V9.87338Z" fill="#666566"/>
                                <path d="M72.4177 4.63288C72.3038 4.21516 71.962 4.02529 71.5443 4.02529C70.519 4.02529 69.6076 5.2025 69.6076 6.41769V8.73415L69.8355 9.60757V9.87339H68.3165V9.64554L68.5443 8.77212V4.25314L68.3165 3.64554V3.41769L69.5696 2.92402V4.40503C69.9494 3.41769 70.8987 2.88605 71.6962 2.88605C72.1899 2.88605 72.6076 2.962 72.9114 3.15187L72.5317 4.59491H72.4177V4.63288Z" fill="#666566"/>
                                <path d="M78.8354 6.37972C78.8354 8.27845 77.7722 9.87339 75.9494 9.87339C74.1266 9.87339 73.0633 8.31643 73.0633 6.37972C73.0633 4.48098 74.1266 2.88605 75.9494 2.88605C77.7722 2.92402 78.8354 4.48098 78.8354 6.37972ZM77.8101 6.37972C77.8101 5.0506 77.2025 3.94934 75.9494 3.94934C74.6962 3.94934 74.0886 5.0506 74.0886 6.37972C74.0886 7.70883 74.6962 8.8101 75.9494 8.8101C77.2025 8.8101 77.8101 7.74681 77.8101 6.37972Z" fill="#666566"/>
                                <path d="M80.8861 9.64557V9.87342H79.3671V9.64557L79.5949 8.77215V1.32911L79.3671 0.72152V0.493671L80.6582 0V8.73418L80.8861 9.64557Z" fill="#666566"/>
                                <path d="M90.5696 9.64553V9.87338H89.0506V9.64553L89.2785 8.77211V5.73414C89.2785 4.70882 89.1266 4.02528 87.9494 4.02528C87.4557 4.02528 86.8861 4.32907 86.5063 4.70882C86.5443 4.89869 86.5443 5.08857 86.5443 5.27844V8.73414L86.7721 9.60755V9.87338H85.2532V9.64553L85.481 8.77211V5.73414C85.481 4.70882 85.3291 4.02528 84.1519 4.02528C83.6962 4.02528 83.1266 4.2911 82.7468 4.67085V8.73414L82.9747 9.60755V9.87338H81.4557V9.64553L81.6835 8.77211V4.25313L81.4557 3.64553V3.41768L82.7089 2.92401V3.41768C83.1266 3.15186 83.7342 2.92401 84.3418 2.92401C85.2152 2.92401 85.7848 3.18983 86.1266 3.6835C86.5443 3.30376 87.3418 2.92401 88.1392 2.92401C89.6582 2.92401 90.3038 3.79743 90.3038 5.20249V8.73414L90.5696 9.64553Z" fill="#666566"/>
                                <path d="M96.3417 7.48102H96.4936V8.96204C96.1898 9.37976 95.2785 9.9114 94.2531 9.9114C92.2405 9.9114 91.1772 8.35444 91.1772 6.45571C91.1772 4.55697 92.2405 2.96204 94.0633 2.96204C96.3038 2.96204 96.8734 5.01267 96.8734 6.22786C96.8734 6.41773 96.8354 6.60761 96.8354 6.72153H92.2405C92.2405 8.05064 93.1139 8.84811 94.2531 8.84811C95.2405 8.84811 96 8.27849 96.3417 7.48102ZM92.2784 5.65824H95.6582C95.6202 4.8228 95.1265 3.98735 93.9873 3.98735C93.1139 3.98735 92.4683 4.70887 92.2784 5.65824Z" fill="#666566"/>
                                <path d="M103.101 9.87338H101.582V9.64553L101.848 8.73414V5.69616C101.848 4.67085 101.696 3.9873 100.519 3.9873C99.7975 3.9873 98.9241 4.5949 98.6203 5.24047V8.73414L98.8481 9.60755V9.87338H97.3292V9.64553L97.557 8.77211V4.25313L97.3292 3.64553V3.41768L98.5823 2.92401V3.79743C98.9621 3.37971 99.8355 2.92401 100.709 2.92401C102.228 2.92401 102.873 3.79743 102.873 5.20249V8.73414L103.101 9.60755V9.87338Z" fill="#666566"/>
                                <path d="M105.038 8.73416L105.266 9.60758V9.8734H103.747V9.64555L103.975 8.77213V3.79745H103.253V2.96201H103.975V1.82277L105.038 1.0253V2.96201H106.139V3.79745H105.038V8.73416Z" fill="#666566"/>
                                <path d="M45.8355 13.6709H49.9747C52.8988 13.6709 55.481 15.076 57.1139 16.8228L54.9114 19.1393C53.6582 17.7342 51.4177 16.9747 50.0127 16.9747H45.7975C42.9494 16.9747 39.6076 19.2912 39.6076 23.1646C39.6076 26.3165 42.1899 29.3165 45.7975 29.3165H49.9747C51.9114 29.3165 53.6582 28.3671 54.9114 27.1519L57.1139 29.4684C55.519 31.1393 52.8608 32.6203 50.0127 32.6203H45.9114C40.519 32.6203 36.3418 28.3671 36.3418 23.0506C36.3418 17.8861 40.6709 13.6709 45.8355 13.6709Z" fill="#4D76BB"/>
                                <path d="M60.5316 32.6203V13.8987H73.8228C77.3544 13.8987 80.2025 16.7468 80.1645 20.2025C80.1266 23.0127 78.3038 25.2152 75.6835 25.9367V25.9747L82.1392 32.6203H77.4304L71.5063 26.5063H63.8734V32.6203H60.5316ZM63.8734 23.1266H73.8607C75.5316 23.1266 76.8228 21.7595 76.8228 20.2025C76.8228 18.6456 75.5696 17.2405 73.8607 17.2405H63.8734V23.1266Z" fill="#4D76BB"/>
                                <path d="M96.1899 29.3544H94.2912L87.7215 20.2405V32.5823H84.3798V13.8987H87.2279L95.2405 24.9874L103.253 13.8987H106.101V32.6203H102.76V20.2405L96.1899 29.3544Z" fill="#4D76BB"/>
                                <path d="M12.0759 31.1392V48L20.1645 42.1899V27.3038C18.5696 28.7468 16.7468 29.8481 14.6582 30.5317C13.7848 30.7975 12.9114 30.9873 12.0759 31.1392Z" fill="#E53E2B"/>
                                <path d="M17.8101 23.3165C18.4557 22.6329 19.0253 21.8734 19.5569 21.1139C19.7848 20.8101 19.9747 20.4684 20.1645 20.1646V19.2152C19.6709 19.3671 19.1392 19.481 18.6455 19.5949C17.8861 19.7848 17.2025 19.3291 16.9747 18.6076C16.7468 17.8481 17.2025 17.0506 18.038 16.8228C18.7595 16.6329 19.443 16.443 20.1645 16.2532V0.227844L12.0759 6V27.3038C14.2785 26.4304 16.1772 25.1013 17.8101 23.3165Z" fill="#E53E2B"/>
                                <path d="M24.2658 13.8608V15.1899C24.3418 15.1899 24.4177 15.1519 24.4557 15.1519C25.443 14.8861 26.1645 15.3038 26.3924 16.2912C26.962 18.4177 27.4937 20.5063 28.0633 22.6329C28.1013 22.7469 28.1392 22.8608 28.1392 22.9747C28.1772 23.4304 28.0253 23.8101 27.7215 24.1519C26.962 24.9114 25.7088 24.5696 25.3671 23.5443C25.2152 23.0127 25.0633 22.481 24.9494 21.9494C24.9114 21.8734 24.9114 21.7975 24.8734 21.7215C24.8354 21.7595 24.7975 21.7975 24.7595 21.8355C24.6076 22.0633 24.4177 22.3291 24.2658 22.557V39.4557L32.3544 33.7215V13.8608H24.2658Z" fill="#4D76BB"/>
                                <path d="M0.987343 27.1139C0.911393 27 0.797468 26.8861 0.949367 26.8101C1.02532 26.7722 1.17721 26.7722 1.25316 26.8101C1.82278 27.076 2.3924 27.3798 2.96203 27.5696C4.63291 28.1772 6.34177 28.3671 8.08861 28.2152V8.54431L0 14.2785V34.0633H8.08861V31.0633C6.75949 30.8355 5.46835 30.3798 4.17722 29.6582C2.96203 29.0127 1.89874 28.1772 0.987343 27.1139Z" fill="#2DA24B"/>
                              </svg>
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href="/" class="nav-link"> L2E CRM </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                    </div>
                </div>
            </div>
            {{-- <div class="shadow-bottom"></div> --}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu active">
                    <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <rect x="11.3169" y="10.8953" width="7.93307" height="7.93307" rx="1.25" stroke="white" stroke-width="1.5"/>
                                <rect x="12.476" y="1.99792" width="5.61512" height="5.61512" rx="1.25" stroke="white" stroke-width="1.5"/>
                                <rect x="0.75" y="0.75" width="7.93307" height="7.93307" rx="1.25" stroke="white" stroke-width="1.5"/>
                                <rect x="1.909" y="11.9654" width="5.61512" height="5.61512" rx="1.25" stroke="white" stroke-width="1.5"/>
                                </svg>
                            <span>Admin Dashboard</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                        <li class="active">
                            <a href="/"> Main Dashboard </a>
                        </li>
                        <li>
                            <a href=""> Branch Performance </a>
                        </li>
                        <li>
                            <a href=""> Counselor Performance </a>
                        </li>
                        <li>
                            <a href=""> Agent Performance </a>
                        </li>
                        <li>
                            <a href=""> Marketing Performance </a>
                        </li>
                        <li>
                            <a href=""> Institutions Performance </a>
                        </li>
                        <li>
                            <a href=""> Courses Performance </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                </li> --}}

                <li class="menu">
                    <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0667 6.91749C17.4792 7.86166 17.7084 8.90416 17.7084 9.99999C17.7084 14.2542 14.2542 17.7083 10 17.7083C5.74585 17.7083 2.29169 14.2542 2.29169 9.99999C2.29169 5.74582 5.74585 2.29166 10 2.29166C10.345 2.29166 10.625 2.01166 10.625 1.66666C10.625 1.32166 10.345 1.04166 10 1.04166C5.05585 1.04166 1.04169 5.05582 1.04169 9.99999C1.04169 14.9442 5.05585 18.9583 10 18.9583C14.9442 18.9583 18.9584 14.9442 18.9584 9.99999C18.9584 8.72582 18.6917 7.51416 18.2117 6.41582C18.0734 6.09999 17.7042 5.95582 17.3884 6.09416C17.0725 6.23249 16.9284 6.60082 17.0667 6.91749Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1667 1.04166C12.5833 1.04166 11.2983 2.32666 11.2983 3.90999C11.2983 4.40499 11.5225 5.00749 11.8692 5.59582C12.565 6.77999 13.725 7.94166 13.725 7.94166C13.9692 8.18582 14.3642 8.18582 14.6083 7.94166C14.6083 7.94166 15.7683 6.77999 16.4642 5.59582C16.8108 5.00749 17.035 4.40499 17.035 3.90999C17.035 2.32666 15.75 1.04166 14.1667 1.04166ZM14.1667 2.29166C15.06 2.29166 15.785 3.01666 15.785 3.90999C15.785 4.34999 15.4575 4.89082 15.1058 5.40082C14.7917 5.85582 14.4375 6.27916 14.1667 6.58416C13.8958 6.27916 13.5417 5.85582 13.2275 5.40082C12.8758 4.89082 12.5483 4.34999 12.5483 3.90999C12.5483 3.01666 13.2733 2.29166 14.1667 2.29166Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33583 10.53L4.06083 12.2333C4.5575 12.5433 5.13167 12.7083 5.71667 12.7083H6.35C6.8975 12.7083 7.4175 12.9475 7.77417 13.3633L8.65 14.3858C9.06 14.8641 9.2025 15.5158 9.03 16.1208C8.80667 16.9008 8.56583 17.745 8.56583 17.745C8.47083 18.0766 8.66333 18.4225 8.995 18.5175C9.32667 18.6125 9.6725 18.42 9.7675 18.0883C9.7675 18.0883 10.0083 17.2441 10.2317 16.4641C10.52 15.4558 10.2825 14.3691 9.59917 13.5725C9.31333 13.2383 8.99833 12.8716 8.7225 12.55C8.12917 11.8566 7.2625 11.4583 6.35 11.4583H5.71667C5.36583 11.4583 5.02167 11.36 4.72333 11.1733L1.9975 9.46998C1.705 9.28748 1.31917 9.37581 1.13667 9.66915C0.954167 9.96165 1.0425 10.3475 1.33583 10.53Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.44083 3.6125C4.44083 3.6125 5.28416 5.29917 5.77083 6.2725C6.06499 6.86167 6.59833 7.295 7.23499 7.46334L8.69999 7.85084C9.06916 7.94834 9.35499 8.24 9.44499 8.61084L10.0725 11.1833C10.2083 11.7417 10.5492 12.2283 11.0275 12.5475L11.4158 12.8058C11.9625 13.1708 12.64 13.2833 13.275 13.1142C13.9108 12.9458 14.4425 12.5125 14.7367 11.9242L15.2158 10.965C15.3525 10.6933 15.6 10.4942 15.895 10.4208C15.895 10.42 18.2208 9.83917 18.2208 9.83917C18.555 9.755 18.7592 9.41584 18.675 9.08084C18.5917 8.74667 18.2525 8.5425 17.9175 8.62667L15.5917 9.2075C14.9433 9.37 14.3975 9.8075 14.0983 10.4058L13.6183 11.365C13.485 11.6325 13.2433 11.8292 12.9542 11.9058C12.6658 11.9825 12.3575 11.9317 12.1092 11.7658L11.7208 11.5075C11.5033 11.3625 11.3483 11.1408 11.2867 10.8875L10.66 8.315C10.4608 7.49917 9.83166 6.8575 9.01916 6.6425L7.55416 6.255C7.26499 6.17834 7.02249 5.98167 6.88916 5.71334C6.40166 4.74 5.55916 3.05417 5.55916 3.05417C5.40499 2.745 5.02916 2.62 4.72083 2.77417C4.41166 2.92834 4.28666 3.30417 4.44083 3.6125Z" fill="#475467"/>
                                </svg>
                            <span>Countries</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                        <li>
                            <a href="#"> Add Country </a>
                        </li>
                        <li>
                            <a href="#"> View Country</a>
                        </li>                      
                    </ul>
                </li>

                <li class="menu">
                    <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_408_693)">
                                  <path d="M18.9583 19.7917H1.04165C0.583313 19.7917 0.208313 19.4167 0.208313 18.9583C0.208313 18.5 0.583313 18.125 1.04165 18.125H19C19.4583 18.125 19.8333 18.5 19.8333 18.9583C19.8333 19.4167 19.4166 19.7917 18.9583 19.7917Z" fill="#475467"/>
                                  <path d="M11.3333 16.375H2.16665C1.70831 16.375 1.33331 16 1.33331 15.5417V1.04168C1.33331 0.583343 1.70831 0.208344 2.16665 0.208344H11.3333C11.7916 0.208344 12.1666 0.583343 12.1666 1.04168V15.5833C12.1666 16.0417 11.7916 16.375 11.3333 16.375ZM2.99998 14.75H10.5416V1.83334H2.99998V14.75Z" fill="#475467"/>
                                  <path d="M12.5 1.83334H1.04165C0.583313 1.83334 0.208313 1.45834 0.208313 1.00001C0.208313 0.541672 0.583313 0.166672 1.04165 0.166672H12.5C12.9583 0.166672 13.3333 0.541672 13.3333 1.00001C13.3333 1.45834 12.9583 1.83334 12.5 1.83334Z" fill="#475467"/>
                                  <path d="M18.2916 16.375H11.4166C10.9583 16.375 10.5833 16 10.5833 15.5417V6.25001C10.5833 5.79167 10.9583 5.41667 11.4166 5.41667H18.2916C18.75 5.41667 19.125 5.79167 19.125 6.25001V15.5833C19.0833 16.0417 18.7083 16.375 18.2916 16.375ZM12.2083 14.75H17.4583V7.08334H12.2083V14.75Z" fill="#475467"/>
                                  <path d="M18.9583 7.08334H18.1666C17.7083 7.08334 17.3333 6.70834 17.3333 6.25001C17.3333 5.79167 17.7083 5.41667 18.1666 5.41667H18.9583C19.4166 5.41667 19.7916 5.79167 19.7916 6.25001C19.7916 6.70834 19.375 7.08334 18.9583 7.08334Z" fill="#475467"/>
                                  <path d="M18.9583 16.375H1.04165C0.583313 16.375 0.208313 16 0.208313 15.5417C0.208313 15.0833 0.583313 14.7083 1.04165 14.7083H19C19.4583 14.7083 19.8333 15.0833 19.8333 15.5417C19.8333 16 19.4166 16.375 18.9583 16.375Z" fill="#475467"/>
                                  <path d="M8.20833 16.375H5.33333C4.875 16.375 4.5 16 4.5 15.5417V8.83333C4.5 8.375 4.875 8 5.33333 8H8.20833C8.66667 8 9.04167 8.375 9.04167 8.83333V15.5417C9 16 8.625 16.375 8.20833 16.375ZM6.125 14.7083H7.375V9.625H6.125V14.7083Z" fill="#475467"/>
                                  <path d="M7.58331 5.20834H5.91665C5.45831 5.20834 5.08331 4.83334 5.08331 4.37501C5.08331 3.91667 5.45831 3.54167 5.91665 3.54167H7.58331C8.04165 3.54167 8.41665 3.91667 8.41665 4.37501C8.41665 4.83334 8.04165 5.20834 7.58331 5.20834Z" fill="#475467"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_408_693">
                                    <rect width="20" height="20" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            <span>Institutions</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="ecommerce" data-bs-parent="#accordionExample">
                        <li>
                            <a href="./app-ecommerce-product-shop.html"> Add Institutions </a>
                        </li>
                        <li>
                            <a href="./app-ecommerce-product.html"> View Institutions </a>
                        </li>                           
                    </ul>
                </li>

                <li class="menu">
                    <a href="#courses" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_408_995)">
                                  <path d="M10 14.9869C10.3452 14.9869 10.625 14.7071 10.625 14.3619C10.625 14.0167 10.3452 13.7369 10 13.7369C9.65482 13.7369 9.375 14.0167 9.375 14.3619C9.375 14.7071 9.65482 14.9869 10 14.9869Z" fill="#475467"/>
                                  <path d="M9.99999 10.9506C9.71186 10.9506 9.42436 10.8856 9.16186 10.7544L5.41186 8.87938C4.77249 8.55938 4.37561 7.91688 4.37561 7.20251V2.50125C4.37561 1.84688 4.70811 1.25063 5.26499 0.906255C5.82311 0.561255 6.50499 0.53188 7.08936 0.82438L9.72061 2.14C9.89499 2.22813 10.105 2.22813 10.28 2.14L12.9112 0.82438C13.4962 0.532505 14.1775 0.56188 14.7356 0.906255C15.2925 1.25001 15.625 1.84625 15.625 2.50125V7.20188C15.625 7.91625 15.2281 8.55876 14.5887 8.87876L10.8394 10.7538C10.5769 10.885 10.2887 10.95 10.0006 10.95L9.99999 10.9506ZM5.97124 7.76063L9.72061 9.63563C9.89436 9.72251 10.1037 9.72313 10.2806 9.63563L14.0294 7.76063C14.2425 7.65438 14.375 7.44001 14.375 7.20188V2.50125C14.375 2.18688 14.1675 2.025 14.0781 1.96938C13.9894 1.915 13.7519 1.80063 13.47 1.94251L10.8387 3.25813C10.3137 3.52063 9.68624 3.52063 9.16124 3.25813L6.52999 1.94251C6.25061 1.80125 6.01124 1.915 5.92186 1.96938C5.83249 2.02438 5.62499 2.18688 5.62499 2.50125V7.20188C5.62499 7.44001 5.75811 7.65376 5.97124 7.76063Z" fill="#475467"/>
                                  <path d="M9.375 2.83125H10.625V10.3263H9.375V2.83125Z" fill="#475467"/>
                                  <path d="M16.25 16.875H3.75C2.02437 16.875 0.625 15.4756 0.625 13.75V6.24999C0.625 5.35249 1.00438 4.51812 1.65 3.93374C1.95687 3.65624 2.4425 3.73624 2.63375 4.10312C2.77 4.36499 2.69187 4.67312 2.475 4.87374C2.09687 5.22374 1.875 5.71812 1.875 6.24999V13.75C1.875 14.7856 2.71437 15.625 3.75 15.625H16.25C17.2856 15.625 18.125 14.7856 18.125 13.75V6.24999C18.125 5.71812 17.9031 5.22374 17.5244 4.87374C17.3075 4.67312 17.2287 4.36499 17.365 4.10312C17.5562 3.73624 18.0419 3.65624 18.3487 3.93374C18.9944 4.51812 19.3744 5.35249 19.3744 6.24999V13.75C19.3744 15.4756 17.9756 16.875 16.25 16.875Z" fill="#475467"/>
                                  <path d="M14.1363 19.375H5.86377L7.73939 15.625H12.2606L14.1363 19.375ZM7.88627 18.125H12.1138L11.4881 16.875H8.51189L7.88627 18.125Z" fill="#475467"/>
                                  <path d="M15.625 18.125H4.375C4.02982 18.125 3.75 18.4048 3.75 18.75C3.75 19.0952 4.02982 19.375 4.375 19.375H15.625C15.9702 19.375 16.25 19.0952 16.25 18.75C16.25 18.4048 15.9702 18.125 15.625 18.125Z" fill="#475467"/>
                                  <path d="M1.25 11.8494H18.75V13.0994H1.25V11.8494Z" fill="#475467"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_408_995">
                                    <rect width="20" height="20" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            <span>Courses</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="courses" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Courses </a>
                        </li>
                        <li>
                            <a href=""> Course Category </a>
                        </li>
                        <li>
                            <a href=""> Course Level </a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#office" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 2.5V18.3333C13.125 18.6783 12.845 18.9583 12.5 18.9583H2.50002C2.11335 18.9583 1.74252 18.805 1.46919 18.5308C1.19502 18.2575 1.04169 17.8867 1.04169 17.5V2.5C1.04169 2.11333 1.19502 1.7425 1.46919 1.46916C1.74252 1.195 2.11335 1.04166 2.50002 1.04166H11.6667C12.0534 1.04166 12.4242 1.195 12.6975 1.46916C12.9717 1.7425 13.125 2.11333 13.125 2.5ZM11.875 2.5C11.875 2.445 11.8534 2.39166 11.8142 2.3525C11.775 2.31333 11.7217 2.29166 11.6667 2.29166H2.50002C2.44502 2.29166 2.39169 2.31333 2.35252 2.3525C2.31335 2.39166 2.29169 2.445 2.29169 2.5V17.5C2.29169 17.555 2.31335 17.6083 2.35252 17.6475C2.39169 17.6867 2.44502 17.7083 2.50002 17.7083H11.875V2.5Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.79167 12.9167V18.3333C9.79167 18.6783 9.51167 18.9583 9.16667 18.9583H5C4.655 18.9583 4.375 18.6783 4.375 18.3333V12.9167C4.375 12.64 4.485 12.3758 4.68 12.18C4.87583 11.985 5.14083 11.875 5.41667 11.875H8.75C9.02583 11.875 9.29083 11.985 9.48667 12.18C9.68167 12.3758 9.79167 12.64 9.79167 12.9167ZM5.625 13.125V17.7083H8.54167V13.125H5.625Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9583 7.5V17.5C18.9583 18.3058 18.305 18.9583 17.5 18.9583H12.5C12.155 18.9583 11.875 18.6783 11.875 18.3333V6.66666C11.875 6.32166 12.155 6.04166 12.5 6.04166H17.5C18.305 6.04166 18.9583 6.69416 18.9583 7.5ZM17.7083 7.5C17.7083 7.385 17.615 7.29166 17.5 7.29166H13.125V17.7083H17.5C17.615 17.7083 17.7083 17.615 17.7083 17.5V7.5Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95837 3.75H5.20837V5H3.95837V3.75Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95837 6.66666H5.20837V7.91666H3.95837V6.66666Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95837 9.58333H5.20837V10.8333H3.95837V9.58333Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45837 3.75H7.70837V5H6.45837V3.75Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45837 6.66666H7.70837V7.91666H6.45837V6.66666Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45837 9.58333H7.70837V10.8333H6.45837V9.58333Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95837 3.75H10.2084V5H8.95837V3.75Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 8.95833H16.0417V10.2083H14.7917V8.95833Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 11.875H16.0417V13.125H14.7917V11.875Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 14.7917H16.0417V16.0417H14.7917V14.7917Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95837 6.66666H10.2084V7.91666H8.95837V6.66666Z" fill="#475467"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95837 9.58333H10.2084V10.8333H8.95837V9.58333Z" fill="#475467"/>
                              </svg>
                            <span>Office</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="office" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Branch Office </a>
                        </li>
                        <li>
                            <a href=""> Front Office </a>
                        </li>
                        <li>
                            <a href=""> Marketing </a>
                        </li>
                        <li>
                            <a href=""> Agent Management </a>
                        </li>
                        <li>
                            <a href=""> User Management </a>
                        </li>
                        <li>
                            <a href=""> Essential Folder </a>
                        </li>
                        <li>
                            <a href=""> IELTS Video </a>
                        </li>
                        <li>
                            <a href=""> Jobs </a>
                        </li>
                    </ul>
                </li> 
                <li class="menu">
                    <a href="#counselor" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_408_321)">
                                  <path d="M16.5409 14.8851L13.0963 13.9457V12.7532C13.3006 12.549 13.508 12.3416 13.7048 12.1448C14.1543 11.6953 14.493 11.1646 14.7079 10.5859H15.3346C15.6431 10.5859 15.9365 10.5203 16.2021 10.4029C16.041 11.0334 15.7148 11.612 15.2448 12.0856C15.0131 12.3115 15.0084 12.6825 15.2344 12.9142C15.4603 13.1459 15.8313 13.1505 16.0629 12.9246C16.9829 12.0047 17.4895 10.7815 17.4895 9.48016V7.80336C17.4895 6.70734 16.6668 5.80047 15.6067 5.66617V5.60672C15.6068 2.5152 13.0916 0 9.99934 0C6.90809 0 4.3932 2.51492 4.3932 5.60617V5.66621C3.33305 5.80051 2.51039 6.70738 2.51039 7.8034V8.43098C2.51039 9.61922 3.47711 10.5859 4.66535 10.5859H5.29215C5.50715 11.1646 5.84594 11.6953 6.29551 12.1449L6.90363 12.753V13.9457L3.45937 14.8851C1.42254 15.4405 0 17.3029 0 19.4141C0 19.7377 0.262344 19.9999 0.585938 19.9999C0.909531 19.9999 1.17188 19.7375 1.17188 19.4139C1.17188 17.8299 2.2393 16.4325 3.7677 16.0157L6.91949 15.1561C6.95078 15.288 7.0273 15.4066 7.13805 15.4896L9.4141 17.1966V19.4141C9.4141 19.7377 9.67645 20 10 20C10.3236 20 10.586 19.7377 10.586 19.4141V17.1966L12.862 15.4896C12.9728 15.4065 13.0493 15.288 13.0806 15.1561L16.2327 16.0157C17.7608 16.4325 18.8281 17.8298 18.8281 19.4141C18.8281 19.7377 19.0905 19.9999 19.4141 19.9999C19.7377 19.9999 20 19.7375 20 19.4139C20 17.3029 18.5776 15.4405 16.5409 14.8851ZM14.9792 9.06781V7.48961V6.82031H15.3346C15.8767 6.82031 16.3177 7.26133 16.3177 7.8034V8.43098C16.3177 8.97305 15.8767 9.41406 15.3346 9.41406H14.9792V9.06781ZM5.02082 7.48957V9.06777V9.41406H4.66535C4.12328 9.41406 3.68227 8.97305 3.68227 8.43098V7.8034C3.68227 7.26133 4.12328 6.82031 4.66535 6.82031H5.02082V7.48957ZM10 1.17188C12.3048 1.17188 14.2042 2.93918 14.4152 5.18973C13.583 3.59879 11.9164 2.51043 10 2.51043C8.08359 2.51043 6.41687 3.59887 5.5848 5.18988C5.79535 2.9393 7.69477 1.17188 10 1.17188ZM13.7622 6.90363H11.9277C11.2459 6.90363 10.605 6.63813 10.1229 6.15617L8.13703 4.17027C8.68812 3.85977 9.32367 3.6823 10 3.6823C11.9001 3.6823 13.4795 5.08148 13.7622 6.90363ZM7.91625 5.60676L7.33543 6.18773C7.03008 6.49309 6.65797 6.70699 6.25215 6.81734C6.38312 6.08512 6.72437 5.42492 7.2107 4.90121C7.39527 5.08578 7.64227 5.33277 7.91625 5.60676ZM11.9245 14.7279L10 16.1712L8.07551 14.7279V13.7972C8.6466 14.1577 9.30828 14.3516 10.0003 14.3516C10.692 14.3516 11.3534 14.1577 11.9245 13.7974V14.7279H11.9245ZM12.8762 11.3161L11.7286 12.4638C11.267 12.9255 10.6532 13.1797 10 13.1797C9.34715 13.1797 8.73336 12.9254 8.27164 12.4637L7.12414 11.3163C6.52348 10.7155 6.1927 9.91699 6.1927 9.06777V8.02773C6.93594 7.90738 7.62121 7.55922 8.1641 7.01641L8.74488 6.43543L9.29422 6.98488C9.99777 7.6882 10.933 8.07555 11.9277 8.07555H13.8073V9.06781C13.8073 9.91719 13.4766 10.7157 12.8762 11.3161Z" fill="#475467"/>
                                  <path d="M15.0208 18.8281H13.138C12.8144 18.8281 12.5521 19.0905 12.5521 19.4141C12.5521 19.7377 12.8144 20 13.138 20H15.0208C15.3444 20 15.6067 19.7377 15.6067 19.4141C15.6067 19.0905 15.3444 18.8281 15.0208 18.8281Z" fill="#475467"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_408_321">
                                    <rect width="20" height="20" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            <span>Counselor</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="counselor" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Add Counselor </a>
                        </li>
                        <li>
                            <a href=""> View Counselor </a>
                        </li>
                        <li>
                            <a href=""> Appointment </a>
                        </li>
                        <li>
                            <a href=""> Counselor Tools </a>
                        </li>
                        <li>
                            <a href=""> Archived Counselor </a>
                        </li>
                        <li>
                            <a href=""> Add General Questions </a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#leads" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.0703 10.4747H15.1126C14.8461 10.4747 14.5882 10.5111 14.3427 10.5781C13.8584 9.62602 12.8696 8.97188 11.7303 8.97188H8.26973C7.13039 8.97188 6.14164 9.62602 5.65734 10.5781C5.41184 10.5111 5.15387 10.4747 4.88742 10.4747H2.92969C1.31426 10.4747 0 11.7889 0 13.4044V16.534C0 17.5032 0.788555 18.2918 1.75781 18.2918H18.2422C19.2114 18.2918 20 17.5032 20 16.534V13.4044C20 11.7889 18.6857 10.4747 17.0703 10.4747ZM5.34004 11.9016V17.12H1.75781C1.43473 17.12 1.17188 16.8571 1.17188 16.534V13.4044C1.17188 12.4352 1.96043 11.6466 2.92969 11.6466H4.88742C5.04648 11.6466 5.20051 11.6682 5.34715 11.708C5.34293 11.7721 5.34004 11.8366 5.34004 11.9016ZM13.4881 17.12H6.51191V11.9016C6.51191 10.9323 7.30047 10.1438 8.26973 10.1438H11.7303C12.6995 10.1438 13.4881 10.9323 13.4881 11.9016V17.12ZM18.8281 16.534C18.8281 16.8571 18.5653 17.12 18.2422 17.12H14.66V11.9016C14.66 11.8365 14.6571 11.772 14.6529 11.708C14.7995 11.6682 14.9535 11.6466 15.1126 11.6466H17.0703C18.0396 11.6466 18.8281 12.4351 18.8281 13.4044V16.534Z" fill="#475467"/>
                                <path d="M3.9086 4.94156C2.47309 4.94156 1.30524 6.10941 1.30524 7.54492C1.3052 8.98043 2.47309 10.1483 3.9086 10.1483C5.34406 10.1483 6.51196 8.98043 6.51196 7.54492C6.51196 6.10941 5.3441 4.94156 3.9086 4.94156ZM3.90856 8.9764C3.11922 8.9764 2.47707 8.33425 2.47707 7.54492C2.47707 6.75558 3.11922 6.11343 3.90856 6.11343C4.69789 6.11343 5.34004 6.75558 5.34004 7.54492C5.34004 8.33425 4.69789 8.9764 3.90856 8.9764Z" fill="#475467"/>
                                <path d="M10 1.70816C8.08221 1.70816 6.52197 3.26839 6.52197 5.18621C6.52197 7.10402 8.08221 8.66425 10 8.66425C11.9178 8.66425 13.4781 7.10402 13.4781 5.18621C13.4781 3.26843 11.9178 1.70816 10 1.70816ZM10 7.49238C8.72838 7.49238 7.69385 6.45785 7.69385 5.18621C7.69385 3.91461 8.72838 2.88004 10 2.88004C11.2717 2.88004 12.3062 3.91457 12.3062 5.18621C12.3062 6.45785 11.2717 7.49238 10 7.49238Z" fill="#475467"/>
                                <path d="M16.0914 4.94156C14.6559 4.94156 13.488 6.10941 13.488 7.54492C13.4881 8.98043 14.6559 10.1483 16.0914 10.1483C17.5269 10.1483 18.6948 8.98043 18.6948 7.54492C18.6948 6.10941 17.5269 4.94156 16.0914 4.94156ZM16.0914 8.9764C15.3021 8.9764 14.6599 8.33425 14.6599 7.54492C14.66 6.75558 15.3021 6.11343 16.0914 6.11343C16.8807 6.11343 17.5229 6.75558 17.5229 7.54492C17.5229 8.33425 16.8807 8.9764 16.0914 8.9764Z" fill="#475467"/>
                              </svg>
                            <span>Leads</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="leads" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Add Quick Lead </a>
                        </li>
                        <li>
                            <a href=""> All Lead </a>
                        </li>
                        <li>
                            <a href=""> Lead Status </a>
                        </li>
                        <li>
                            <a href=""> Counselor Tools </a>
                        </li>
                        <li>
                            <a href=""> Archived Counselor </a>
                        </li>
                        <li>
                            <a href=""> Add General Questions </a>
                        </li>
                        <li>
                            <a href=""> Web Form </a>
                        </li>
                    </ul>
                </li>  
                <li class="menu">
                    <a href="#applications" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_439_1187)">
                                  <path d="M19.9977 16.8755V4.80616C20.0007 4.77705 20.0007 4.7477 19.9977 4.71859C19.9996 4.69527 19.9996 4.67183 19.9977 4.64851L19.9539 4.57842L19.9013 4.50834H19.84L19.7612 4.45579C19.2783 4.28541 18.7872 4.13925 18.2898 4.01785V1.96834C18.2898 1.72648 18.0937 1.5304 17.8518 1.5304C14.7497 1.56201 11.8443 3.05529 10.0129 5.55933C8.19908 3.05316 5.30255 1.55774 2.20899 1.5304C1.96713 1.5304 1.77105 1.72648 1.77105 1.96834V3.95655C1.27017 4.07943 0.7761 4.22855 0.290861 4.40324L0.203289 4.45579H0.141951L0.0893997 4.52587L0.0455931 4.59596C0.0437456 4.61928 0.0437456 4.64272 0.0455931 4.66604C0.0270769 4.69621 0.0123789 4.72857 0.00178648 4.7624V16.8842C-0.000676873 16.9105 -0.000676873 16.9368 0.00178648 16.9631C0.00888915 16.9842 0.0176751 17.0047 0.0280622 17.0243C0.0419391 17.0556 0.0595932 17.085 0.0806138 17.1119V17.1645L0.150696 17.217L0.220779 17.2608H0.282075H0.387178H0.45726H0.536088C3.62706 16.2215 7.02341 16.6505 9.75888 18.4257L9.83771 18.4695H9.96909H10.1005H10.1793C12.9153 16.728 16.2906 16.3129 19.3671 17.3397H19.4459H19.516H19.6211H19.6824L19.7612 17.2871L19.8225 17.2433V17.182C19.8945 17.1468 19.9551 17.0922 19.9977 17.0243C19.9997 17.001 19.9997 16.9776 19.9977 16.9543C20.0001 16.9281 20.0001 16.9017 19.9977 16.8755ZM0.868928 16.2887V5.13022C1.14335 5.03677 1.43533 4.9492 1.74477 4.86746V13.7311C1.74432 13.973 1.94003 14.1694 2.18189 14.1699C2.19093 14.1699 2.19996 14.1696 2.20895 14.1691L2.2177 14.1778C4.48316 14.1771 6.65649 15.0748 8.26112 16.674C5.90279 15.7534 3.31027 15.6183 0.868928 16.2887ZM9.57495 16.7704C7.86115 14.6848 5.35104 13.4139 2.65568 13.267V2.41507C5.46 2.60487 8.01684 4.08719 9.57495 6.42651V16.7704ZM10.4596 16.8054V6.42647C12.0325 4.09869 14.5857 2.62035 17.3876 2.41503H17.3964V13.3019C14.6968 13.4515 12.1822 14.7215 10.4596 16.8054ZM19.1481 16.2887C16.7091 15.6239 14.1212 15.759 11.7646 16.6741C13.3759 15.073 15.5541 14.1728 17.8256 14.1691C18.0674 14.1691 18.2635 13.973 18.2635 13.7312V4.86746C18.5555 4.94337 18.8503 5.03094 19.1482 5.13022V16.2887H19.1481Z" fill="#344054"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_439_1187">
                                    <rect width="20" height="20" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            <span>Application</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="applications" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Add Application Process </a>
                        </li>
                        <li>
                            <a href=""> Direct Application Leads </a>
                        </li>
                        <li>
                            <a href=""> Agent Application </a>
                        </li>
                    </ul>
                </li>        
                <li class="menu">
                    <a href="#archived" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.6667 18.9583H3.33335C2.7257 18.9579 2.14306 18.7163 1.71339 18.2866C1.28371 17.857 1.04213 17.2743 1.04169 16.6667V6.66667C1.04169 6.50091 1.10754 6.34194 1.22475 6.22473C1.34196 6.10752 1.50093 6.04167 1.66669 6.04167H18.3334C18.4991 6.04167 18.6581 6.10752 18.7753 6.22473C18.8925 6.34194 18.9584 6.50091 18.9584 6.66667V16.6667C18.9579 17.2743 18.7163 17.857 18.2867 18.2866C17.857 18.7163 17.2743 18.9579 16.6667 18.9583ZM2.29169 7.29167V16.6667C2.29213 16.9428 2.40202 17.2075 2.59727 17.4028C2.79253 17.598 3.05722 17.7079 3.33335 17.7083H16.6667C16.9428 17.7079 17.2075 17.598 17.4028 17.4028C17.598 17.2075 17.7079 16.9428 17.7084 16.6667V7.29167H2.29169Z" fill="#344054"/>
                                <path d="M18.3333 7.29167H1.66667C1.56016 7.29166 1.45543 7.26444 1.3624 7.21259C1.26938 7.16074 1.19114 7.08598 1.13513 6.9954C1.07911 6.90482 1.04717 6.80143 1.04233 6.69504C1.0375 6.58865 1.05993 6.48279 1.1075 6.3875L3.3775 1.8475C3.49788 1.60474 3.68387 1.40057 3.91438 1.25813C4.14489 1.1157 4.4107 1.04071 4.68167 1.04167H15.3183C15.5894 1.04069 15.8553 1.11577 16.0859 1.25836C16.3164 1.40096 16.5023 1.60536 16.6225 1.84833L18.8925 6.3875C18.9401 6.48279 18.9625 6.58865 18.9577 6.69504C18.9528 6.80143 18.9209 6.90482 18.8649 6.9954C18.8089 7.08598 18.7306 7.16074 18.6376 7.21259C18.5446 7.26444 18.4398 7.29166 18.3333 7.29167ZM2.67833 6.04167H17.3217L15.5042 2.40667C15.4871 2.37198 15.4606 2.3428 15.4278 2.32247C15.3949 2.30213 15.357 2.29145 15.3183 2.29167H4.68167C4.64315 2.29157 4.60536 2.3022 4.57254 2.32236C4.53972 2.34253 4.51316 2.37143 4.49583 2.40583L2.67833 6.04167Z" fill="#344054"/>
                                <path d="M10 15.625C9.83424 15.625 9.67527 15.5592 9.55806 15.4419C9.44085 15.3247 9.375 15.1658 9.375 15V10C9.375 9.83424 9.44085 9.67527 9.55806 9.55806C9.67527 9.44085 9.83424 9.375 10 9.375C10.1658 9.375 10.3247 9.44085 10.4419 9.55806C10.5592 9.67527 10.625 9.83424 10.625 10V15C10.625 15.1658 10.5592 15.3247 10.4419 15.4419C10.3247 15.5592 10.1658 15.625 10 15.625Z" fill="#344054"/>
                                <path d="M10 15.625C9.91795 15.6252 9.83663 15.6091 9.76081 15.5776C9.685 15.5462 9.61618 15.4999 9.55837 15.4417L7.05837 12.9417C6.94797 12.8232 6.88787 12.6665 6.89072 12.5046C6.89358 12.3427 6.95917 12.1882 7.07368 12.0737C7.18819 11.9591 7.34268 11.8935 7.5046 11.8907C7.66652 11.8878 7.82322 11.9479 7.9417 12.0583L10 14.1158L12.0584 12.0583C12.1768 11.9479 12.3336 11.8878 12.4955 11.8907C12.6574 11.8935 12.8119 11.9591 12.9264 12.0737C13.0409 12.1882 13.1065 12.3427 13.1093 12.5046C13.1122 12.6665 13.0521 12.8232 12.9417 12.9417L10.4417 15.4417C10.3839 15.4999 10.3151 15.5462 10.2393 15.5776C10.1634 15.6091 10.0821 15.6252 10 15.625Z" fill="#344054"/>
                              </svg>
                            <span>Archived</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="archived" data-bs-parent="#accordionExample">
                        <li>
                            <a href=""> Archived Leads </a>
                        </li>
                        <li>
                            <a href=""> Archived Application </a>
                        </li>
                        <li>
                            <a href=""> Archived Courses </a>
                        </li>
                    </ul>
                </li>       
            </ul>
            
        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class=" widget-six container container-xxl mt-4">
                <h4 class="fw-bold">Welcome to Lead2Enrollment CRM</h4>
            </div>
            <div class="widget widget-six container container-xxl mt-4">
                <div class="d-flex justify-content-between">
                    <h4 class="fw-bold">2024 Target is <span class="text-warning">70%</span> complete</h4>
                    <button class="btn btn-primary">See More Data</button>
                </div>
            </div>
            <div class="middle-content container-xxl p-0">

                <div class="row layout-top-spacing">
                    <div class="row pb-3">
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1613 1.48698C13.5063 1.48698 13.7863 1.76698 13.7863 2.11198L13.7867 2.81849C15.0034 2.90191 16.014 3.31869 16.7292 4.0354C17.51 4.81957 17.9209 5.94707 17.9167 7.29957V14.9021C17.9167 17.6787 16.1534 19.4037 13.3159 19.4037H6.26752C3.43002 19.4037 1.66669 17.6546 1.66669 14.8387V7.2979C1.66669 4.67889 3.23923 2.99777 5.80393 2.81878L5.80444 2.11198C5.80444 1.76698 6.08444 1.48698 6.42944 1.48698C6.77444 1.48698 7.05444 1.76698 7.05444 2.11198L7.05419 2.80282H12.5359L12.5363 2.11198C12.5363 1.76698 12.8163 1.48698 13.1613 1.48698ZM16.6667 8.90698H2.91669V14.8387C2.91669 16.9771 4.10669 18.1537 6.26752 18.1537H13.3159C15.4767 18.1537 16.6667 16.9987 16.6667 14.9021L16.6667 8.90698ZM13.501 14.1506C13.846 14.1506 14.126 14.4306 14.126 14.7756C14.126 15.1206 13.846 15.4006 13.501 15.4006C13.156 15.4006 12.8727 15.1206 12.8727 14.7756C12.8727 14.4306 13.1485 14.1506 13.4935 14.1506H13.501ZM9.8031 14.1506C10.1481 14.1506 10.4281 14.4306 10.4281 14.7756C10.4281 15.1206 10.1481 15.4006 9.8031 15.4006C9.4581 15.4006 9.17477 15.1206 9.17477 14.7756C9.17477 14.4306 9.4506 14.1506 9.7956 14.1506H9.8031ZM6.09744 14.1506C6.44244 14.1506 6.72244 14.4306 6.72244 14.7756C6.72244 15.1206 6.44244 15.4006 6.09744 15.4006C5.75244 15.4006 5.46827 15.1206 5.46827 14.7756C5.46827 14.4306 5.74494 14.1506 6.08994 14.1506H6.09744ZM13.501 10.9117C13.846 10.9117 14.126 11.1917 14.126 11.5367C14.126 11.8817 13.846 12.1617 13.501 12.1617C13.156 12.1617 12.8727 11.8817 12.8727 11.5367C12.8727 11.1917 13.1485 10.9117 13.4935 10.9117H13.501ZM9.8031 10.9117C10.1481 10.9117 10.4281 11.1917 10.4281 11.5367C10.4281 11.8817 10.1481 12.1617 9.8031 12.1617C9.4581 12.1617 9.17477 11.8817 9.17477 11.5367C9.17477 11.1917 9.4506 10.9117 9.7956 10.9117H9.8031ZM6.09744 10.9117C6.44244 10.9117 6.72244 11.1917 6.72244 11.5367C6.72244 11.8817 6.44244 12.1617 6.09744 12.1617C5.75244 12.1617 5.46827 11.8817 5.46827 11.5367C5.46827 11.1917 5.74494 10.9117 6.08994 10.9117H6.09744ZM12.5359 4.05282H7.05419L7.05444 4.85448C7.05444 5.19948 6.77444 5.47948 6.42944 5.47948C6.08444 5.47948 5.80444 5.19948 5.80444 4.85448L5.80399 4.07174C3.93713 4.22856 2.91669 5.3602 2.91669 7.2979V7.65698H16.6667L16.6667 7.2979C16.67 6.26873 16.3934 5.46873 15.8442 4.91873C15.3621 4.43524 14.6574 4.14649 13.787 4.07214L13.7863 4.85448C13.7863 5.19948 13.5063 5.47948 13.1613 5.47948C12.8163 5.47948 12.5363 5.19948 12.5363 4.85448L12.5359 4.05282Z" fill="#98A2B3"/>
                                  </svg> <span class="px-1">Date Filter</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault" style="">
                                    <a href="#" class="dropdown-item">Today</a>
                                    <a href="#" class="dropdown-item">Yesterday</a>
                                    <a href="#" class="dropdown-item">Last Week</a>
                                    <a href="#" class="dropdown-item">Last 30 Days</a>
                                    <a href="#" class="dropdown-item">Life Time</a>
                                    <a href="#" id="custom" class="dropdown-item fw-bold">Custom Date Filter</a>
                                    <div class="px-2 pb-2 text-secondary" id="customDates" style="display: block;">
                                        From: <input class="form-control p-1 mb-1" type="date" id="fromDate"> To: <input class="form-control p-1" type="date" id="toDate">
                                        <button class="btn btn-sm btn-success mt-2 py-1 px-2 fw-bold" id="applyCustom">Apply</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault4" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 3.15366V18.987C13.125 19.332 12.845 19.612 12.5 19.612H2.49999C2.11332 19.612 1.74249 19.4587 1.46916 19.1845C1.19499 18.9112 1.04166 18.5403 1.04166 18.1537V3.15366C1.04166 2.76699 1.19499 2.39616 1.46916 2.12283C1.74249 1.84866 2.11332 1.69533 2.49999 1.69533H11.6667C12.0533 1.69533 12.4242 1.84866 12.6975 2.12283C12.9717 2.39616 13.125 2.76699 13.125 3.15366ZM11.875 3.15366C11.875 3.09866 11.8533 3.04533 11.8142 3.00616C11.775 2.96699 11.7217 2.94533 11.6667 2.94533H2.49999C2.44499 2.94533 2.39166 2.96699 2.35249 3.00616C2.31332 3.04533 2.29166 3.09866 2.29166 3.15366V18.1537C2.29166 18.2087 2.31332 18.262 2.35249 18.3012C2.39166 18.3403 2.44499 18.362 2.49999 18.362H11.875V3.15366Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.79167 13.5703V18.987C9.79167 19.332 9.51167 19.612 9.16667 19.612H5C4.655 19.612 4.375 19.332 4.375 18.987V13.5703C4.375 13.2937 4.485 13.0295 4.68 12.8337C4.87583 12.6387 5.14083 12.5287 5.41667 12.5287H8.75C9.02583 12.5287 9.29083 12.6387 9.48667 12.8337C9.68167 13.0295 9.79167 13.2937 9.79167 13.5703ZM5.625 13.7787V18.362H8.54167V13.7787H5.625Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9583 8.15366V18.1537C18.9583 18.9595 18.305 19.612 17.5 19.612H12.5C12.155 19.612 11.875 19.332 11.875 18.987V7.32033C11.875 6.97533 12.155 6.69533 12.5 6.69533H17.5C18.305 6.69533 18.9583 7.34783 18.9583 8.15366ZM17.7083 8.15366C17.7083 8.03866 17.615 7.94533 17.5 7.94533H13.125V18.362H17.5C17.615 18.362 17.7083 18.2687 17.7083 18.1537V8.15366Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95831 4.40366H5.20831V5.65366H3.95831V4.40366Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95831 7.32033H5.20831V8.57033H3.95831V7.32033Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95831 10.237H5.20831V11.487H3.95831V10.237Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45831 4.40366H7.70831V5.65366H6.45831V4.40366Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45831 7.32033H7.70831V8.57033H6.45831V7.32033Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45831 10.237H7.70831V11.487H6.45831V10.237Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95831 4.40366H10.2083V5.65366H8.95831V4.40366Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 9.612H16.0417V10.862H14.7917V9.612Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 12.5287H16.0417V13.7787H14.7917V12.5287Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7917 15.4453H16.0417V16.6953H14.7917V15.4453Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95831 7.32033H10.2083V8.57033H8.95831V7.32033Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.95831 10.237H10.2083V11.487H8.95831V10.237Z" fill="#98A2B3"/>
                                  </svg> <span class="px-1">Branch</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault4" style="">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="allBranch">
                                        <label for="allBranch"><i class="flaticon-home-fill-1 mr-1 ps-1"></i> All Branch</label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="londonOffice">
                                        <label for="londonOffice"><i class="flaticon-gear-fill mr-1 ps-1"></i> London Branch</label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="manchesterOffice">
                                        <label for="manchesterOffice"><i class="flaticon-gear-fill mr-1 ps-1"></i> Manchester Branch</label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="dhakaOffice">
                                        <label for="dhakaOffice"><i class="flaticon-gear-fill mr-1 ps-1"></i> Dhaka Branch</label>
                                    </a>
                                </div>
                                
                            </div>

                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault1" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <g clip-path="url(#clip0_526_130)">
                                      <path d="M16.5409 15.5388L13.0963 14.5994V13.4069C13.3006 13.2026 13.508 12.9952 13.7048 12.7985C14.1543 12.3489 14.493 11.8183 14.7079 11.2396H15.3346C15.6431 11.2396 15.9365 11.1739 16.2021 11.0566C16.041 11.6871 15.7148 12.2656 15.2448 12.7392C15.0131 12.9652 15.0084 13.3362 15.2344 13.5678C15.4603 13.7995 15.8313 13.8042 16.0629 13.5782C16.9829 12.6583 17.4895 11.4351 17.4895 10.1338V8.45702C17.4895 7.361 16.6668 6.45412 15.6067 6.31983V6.26037C15.6068 3.16885 13.0916 0.653656 9.99934 0.653656C6.90809 0.653656 4.3932 3.16858 4.3932 6.25983V6.31987C3.33305 6.45416 2.51039 7.36104 2.51039 8.45705V9.08463C2.51039 10.2729 3.47711 11.2396 4.66535 11.2396H5.29215C5.50715 11.8182 5.84594 12.3489 6.29551 12.7986L6.90363 13.4067V14.5993L3.45937 15.5388C1.42254 16.0942 0 17.9565 0 20.0677C0 20.3913 0.262344 20.6536 0.585938 20.6536C0.909531 20.6536 1.17188 20.3912 1.17188 20.0676C1.17188 18.4835 2.2393 17.0862 3.7677 16.6694L6.91949 15.8097C6.95078 15.9417 7.0273 16.0602 7.13805 16.1433L9.4141 17.8503V20.0677C9.4141 20.3913 9.67645 20.6537 10 20.6537C10.3236 20.6537 10.586 20.3913 10.586 20.0677V17.8503L12.862 16.1432C12.9728 16.0602 13.0493 15.9417 13.0806 15.8097L16.2327 16.6694C17.7608 17.0861 18.8281 18.4835 18.8281 20.0677C18.8281 20.3913 19.0905 20.6536 19.4141 20.6536C19.7377 20.6536 20 20.3912 20 20.0676C20 17.9565 18.5776 16.0942 16.5409 15.5388ZM14.9792 9.72147V8.14327V7.47397H15.3346C15.8767 7.47397 16.3177 7.91498 16.3177 8.45705V9.08463C16.3177 9.6267 15.8767 10.0677 15.3346 10.0677H14.9792V9.72147ZM5.02082 8.14323V9.72143V10.0677H4.66535C4.12328 10.0677 3.68227 9.6267 3.68227 9.08463V8.45705C3.68227 7.91498 4.12328 7.47397 4.66535 7.47397H5.02082V8.14323ZM10 1.82553C12.3048 1.82553 14.2042 3.59284 14.4152 5.84338C13.583 4.25244 11.9164 3.16409 10 3.16409C8.08359 3.16409 6.41687 4.25252 5.5848 5.84354C5.79535 3.59295 7.69477 1.82553 10 1.82553ZM13.7622 7.55729H11.9277C11.2459 7.55729 10.605 7.29178 10.1229 6.80983L8.13703 4.82393C8.68812 4.51342 9.32367 4.33596 10 4.33596C11.9001 4.33596 13.4795 5.73514 13.7622 7.55729ZM7.91625 6.26041L7.33543 6.84139C7.03008 7.14674 6.65797 7.36065 6.25215 7.471C6.38312 6.73877 6.72437 6.07858 7.2107 5.55487C7.39527 5.73944 7.64227 5.98643 7.91625 6.26041ZM11.9245 15.3815L10 16.8249L8.07551 15.3815V14.4508C8.6466 14.8113 9.30828 15.0052 10.0003 15.0052C10.692 15.0052 11.3534 14.8114 11.9245 14.451V15.3815H11.9245ZM12.8762 11.9698L11.7286 13.1174C11.267 13.5791 10.6532 13.8333 10 13.8333C9.34715 13.8333 8.73336 13.5791 8.27164 13.1174L7.12414 11.9699C6.52348 11.3692 6.1927 10.5706 6.1927 9.72143V8.68139C6.93594 8.56104 7.62121 8.21287 8.1641 7.67006L8.74488 7.08909L9.29422 7.63854C9.99777 8.34186 10.933 8.7292 11.9277 8.7292H13.8073V9.72147C13.8073 10.5708 13.4766 11.3694 12.8762 11.9698Z" fill="#98A2B3"/>
                                      <path d="M15.0208 19.4818H13.138C12.8144 19.4818 12.5521 19.7441 12.5521 20.0677C12.5521 20.3913 12.8144 20.6537 13.138 20.6537H15.0208C15.3444 20.6537 15.6067 20.3913 15.6067 20.0677C15.6067 19.7441 15.3444 19.4818 15.0208 19.4818Z" fill="#667085"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_526_130">
                                        <rect width="20" height="20" fill="white" transform="translate(0 0.653656)"/>
                                      </clipPath>
                                    </defs>
                                  </svg> <span class="px-1">Counselor</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault1" style="">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="all">
                                        <label for="all"><i class="flaticon-home-fill-1 mr-1"></i><spna class="px-1">All Counselor</spna></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="isabella">
                                        <label for="isabella"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1">Isabella</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="valentina">
                                        <label for="valentina"><i class="flaticon-gear-fill mr-1"></i><span class="px-1">Valentina</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="alifTasnim">
                                        <label for="alifTasnim"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1">Alif Tasnim</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="mdShohagh">
                                        <label for="mdShohagh"><i class="flaticon-dots mr-1"></i><span class="px-1">Md Shohagh</span></label>
                                    </a>
                                </div>
                                
                            </div>

                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault4" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0667 7.57116C17.4792 8.51533 17.7083 9.55783 17.7083 10.6537C17.7083 14.9078 14.2542 18.362 10 18.362C5.74583 18.362 2.29166 14.9078 2.29166 10.6537C2.29166 6.39949 5.74583 2.94533 10 2.94533C10.345 2.94533 10.625 2.66533 10.625 2.32033C10.625 1.97533 10.345 1.69533 10 1.69533C5.05583 1.69533 1.04166 5.70949 1.04166 10.6537C1.04166 15.5978 5.05583 19.612 10 19.612C14.9442 19.612 18.9583 15.5978 18.9583 10.6537C18.9583 9.37949 18.6917 8.16783 18.2117 7.06949C18.0733 6.75366 17.7042 6.60949 17.3883 6.74783C17.0725 6.88616 16.9283 7.25449 17.0667 7.57116Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1667 1.69533C12.5833 1.69533 11.2983 2.98033 11.2983 4.56366C11.2983 5.05866 11.5225 5.66116 11.8692 6.24949C12.565 7.43366 13.725 8.59533 13.725 8.59533C13.9692 8.83949 14.3642 8.83949 14.6083 8.59533C14.6083 8.59533 15.7683 7.43366 16.4642 6.24949C16.8108 5.66116 17.035 5.05866 17.035 4.56366C17.035 2.98033 15.75 1.69533 14.1667 1.69533ZM14.1667 2.94533C15.06 2.94533 15.785 3.67033 15.785 4.56366C15.785 5.00366 15.4575 5.54449 15.1058 6.05449C14.7917 6.50949 14.4375 6.93283 14.1667 7.23783C13.8958 6.93283 13.5417 6.50949 13.2275 6.05449C12.8758 5.54449 12.5483 5.00366 12.5483 4.56366C12.5483 3.67033 13.2733 2.94533 14.1667 2.94533Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33583 11.1837L4.06083 12.887C4.5575 13.197 5.13167 13.362 5.71667 13.362H6.35C6.8975 13.362 7.4175 13.6012 7.77417 14.017L8.65 15.0395C9.06 15.5178 9.2025 16.1695 9.03 16.7745C8.80667 17.5545 8.56583 18.3987 8.56583 18.3987C8.47083 18.7303 8.66333 19.0762 8.995 19.1712C9.32667 19.2662 9.6725 19.0737 9.7675 18.742C9.7675 18.742 10.0083 17.8978 10.2317 17.1178C10.52 16.1095 10.2825 15.0228 9.59917 14.2262C9.31333 13.892 8.99833 13.5253 8.7225 13.2037C8.12917 12.5103 7.2625 12.112 6.35 12.112H5.71667C5.36583 12.112 5.02167 12.0137 4.72333 11.827L1.9975 10.1237C1.705 9.94117 1.31917 10.0295 1.13667 10.3228C0.954167 10.6153 1.0425 11.0012 1.33583 11.1837Z" fill="#98A2B3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.44083 4.26616C4.44083 4.26616 5.28417 5.95283 5.77083 6.92616C6.065 7.51533 6.59833 7.94866 7.235 8.11699L8.7 8.50449C9.06917 8.60199 9.355 8.89366 9.445 9.26449L10.0725 11.837C10.2083 12.3953 10.5492 12.882 11.0275 13.2012L11.4158 13.4595C11.9625 13.8245 12.64 13.937 13.275 13.7678C13.9108 13.5995 14.4425 13.1662 14.7367 12.5778L15.2158 11.6187C15.3525 11.347 15.6 11.1478 15.895 11.0745C15.895 11.0737 18.2208 10.4928 18.2208 10.4928C18.555 10.4087 18.7592 10.0695 18.675 9.73449C18.5917 9.40033 18.2525 9.19616 17.9175 9.28033L15.5917 9.86116C14.9433 10.0237 14.3975 10.4612 14.0983 11.0595L13.6183 12.0187C13.485 12.2862 13.2433 12.4828 12.9542 12.5595C12.6658 12.6362 12.3575 12.5853 12.1092 12.4195L11.7208 12.1612C11.5033 12.0162 11.3483 11.7945 11.2867 11.5412L10.66 8.96866C10.4608 8.15282 9.83167 7.51116 9.01917 7.29616L7.55417 6.90866C7.265 6.83199 7.0225 6.63532 6.88917 6.36699C6.40167 5.39366 5.55917 3.70782 5.55917 3.70782C5.405 3.39866 5.02917 3.27366 4.72083 3.42782C4.41167 3.58199 4.28667 3.95782 4.44083 4.26616Z" fill="#98A2B3"/>
                                  </svg> <span class="px-1">Country</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault4" style="">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="allBranch">
                                        <label for="allBranch"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1">All Country</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="uk">
                                        <label for="uk"><i class="flaticon-gear-fill mr-1"></i><span class="px-1">UK</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="dhaka">
                                        <label for="dhaka"><i class="flaticon-gear-fill mr-1"></i><span class="px-1">Dhaka</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="nepal">
                                        <label for="nepal"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1">Nepal</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="pakistan">
                                        <label for="pakistan"><i class="flaticon-dots mr-1"></i><span class="px-1">Pakistan</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="india">
                                        <label for="india"><i class="flaticon-dots mr-1"></i><span class="px-1">India</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="nigeria">
                                        <label for="nigeria"><i class="flaticon-dots mr-1"></i><span class="px-1">Nigeria</span></label>
                                    </a>
                                </div>
                                
                            </div>
                            
                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault3" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path d="M10 3.07553L9.72656 3.21225L3.47656 6.27866L3.125 6.45444V7.52866H16.875V6.45444L16.5234 6.27866L10.2734 3.21225L10 3.07553ZM10 4.48178L13.6719 6.27866H6.32812L10 4.48178ZM4.375 8.15366V14.4037H3.75V15.6537H16.25V14.4037H15.625V8.15366H14.375V14.4037H13.125V8.15366H11.875V14.4037H10.625V8.15366H9.375V14.4037H8.125V8.15366H6.875V14.4037H5.625V8.15366H4.375ZM2.5 16.2787V17.5287H17.5V16.2787H2.5Z" fill="#98A2B3"/>
                                  </svg> <span class="px-1">University</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault3" style="">
                                    <div class="dropdown-header">
                                        <input class="form-control py-2" type="text" id="searchInput" placeholder="Search Universities...">
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="allUniversity">
                                        <label for="allUniversity"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1">All University</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="angliaRuskin">
                                        <label for="angliaRuskin"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1">Anglia Ruskin University</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="acadia">
                                        <label for="acadia"><i class="flaticon-gear-fill mr-1"></i><span class="px-1">Acadia University</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="adler">
                                        <label for="adler"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1">Adler University</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="alexanderCollege">
                                        <label for="alexanderCollege"><i class="flaticon-dots mr-1"></i><span class="px-1">Alexander College</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="appliedBusinessAcademy">
                                        <label for="appliedBusinessAcademy"><i class="flaticon-gear-fill mr-1"></i><span class="px-1">Applied Business Academy</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="arden">
                                        <label for="arden"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1">Arden University</span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="artsUniversityBournemouth">
                                        <label for="artsUniversityBournemouth"><i class="flaticon-dots mr-1"></i><span class="px-1">Arts University Bournemouth</span></label>
                                    </a>
                                </div>
                                
                            </div>

                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault4" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.5625 3.12497C6.04297 3.12497 5.625 3.54294 5.625 4.06247V15.9375C5.625 16.2656 5.57031 16.582 5.46484 16.875H17.1875C17.707 16.875 18.125 16.457 18.125 15.9375V4.06247C18.125 3.54294 17.707 3.12497 17.1875 3.12497H6.5625ZM2.8125 18.75C1.25781 18.75 0 17.4922 0 15.9375V4.37497C0 3.85544 0.417969 3.43747 0.9375 3.43747C1.45703 3.43747 1.875 3.85544 1.875 4.37497V15.9375C1.875 16.457 2.29297 16.875 2.8125 16.875C3.33203 16.875 3.75 16.457 3.75 15.9375V4.06247C3.75 2.50778 5.00781 1.24997 6.5625 1.24997H17.1875C18.7422 1.24997 20 2.50778 20 4.06247V15.9375C20 17.4922 18.7422 18.75 17.1875 18.75H2.8125ZM6.875 5.31247C6.875 4.79294 7.29297 4.37497 7.8125 4.37497H11.5625C12.082 4.37497 12.5 4.79294 12.5 5.31247V8.43747C12.5 8.957 12.082 9.37497 11.5625 9.37497H7.8125C7.29297 9.37497 6.875 8.957 6.875 8.43747V5.31247ZM14.6875 4.37497H15.9375C16.457 4.37497 16.875 4.79294 16.875 5.31247C16.875 5.832 16.457 6.24997 15.9375 6.24997H14.6875C14.168 6.24997 13.75 5.832 13.75 5.31247C13.75 4.79294 14.168 4.37497 14.6875 4.37497ZM14.6875 7.49997H15.9375C16.457 7.49997 16.875 7.91794 16.875 8.43747C16.875 8.957 16.457 9.37497 15.9375 9.37497H14.6875C14.168 9.37497 13.75 8.957 13.75 8.43747C13.75 7.91794 14.168 7.49997 14.6875 7.49997ZM7.8125 10.625H15.9375C16.457 10.625 16.875 11.0429 16.875 11.5625C16.875 12.082 16.457 12.5 15.9375 12.5H7.8125C7.29297 12.5 6.875 12.082 6.875 11.5625C6.875 11.0429 7.29297 10.625 7.8125 10.625ZM7.8125 13.75H15.9375C16.457 13.75 16.875 14.1679 16.875 14.6875C16.875 15.207 16.457 15.625 15.9375 15.625H7.8125C7.29297 15.625 6.875 15.207 6.875 14.6875C6.875 14.1679 7.29297 13.75 7.8125 13.75Z" fill="#98A2B3"/>
                                  </svg> <span class="px-1">Courses</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault3" style="">
                                    <div class="dropdown-header">
                                        <input class="form-control py-2" type="text" id="searchInput" placeholder="Search Courses...">
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="allUniversity">
                                        <label for="allUniversity"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1"> All Courses </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="angliaRuskin">
                                        <label for="angliaRuskin"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1"> BSc in computer science </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="acadia">
                                        <label for="acadia"><i class="flaticon-gear-fill mr-1"></i><span class="px-1"> Masters in Management </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="adler">
                                        <label for="adler"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1"> Bachelor in Business Administration </span></label>
                                    </a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-3" role="group">
                                <button id="btndefault2" type="button" class="btn btn-outline-dark dropdown-toggle py-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <g clip-path="url(#clip0_526_4)">
                                      <path d="M16.875 2.52866H8.125C7.43359 2.52866 6.875 3.08725 6.875 3.77866V4.40366H5V3.77866C5 2.05209 6.39844 0.653656 8.125 0.653656H16.875C18.6016 0.653656 20 2.05209 20 3.77866V12.5287C20 14.2552 18.6016 15.6537 16.875 15.6537H16.25V13.7787H16.875C17.5664 13.7787 18.125 13.2201 18.125 12.5287V3.77866C18.125 3.08725 17.5664 2.52866 16.875 2.52866ZM1.875 18.1537C1.875 18.4974 2.15625 18.7787 2.5 18.7787H12.5C12.8438 18.7787 13.125 18.4974 13.125 18.1537V10.6537H1.875V18.1537ZM2.5 5.65366H12.5C13.8789 5.65366 15 6.77475 15 8.15366V18.1537C15 19.5326 13.8789 20.6537 12.5 20.6537H2.5C1.12109 20.6537 0 19.5326 0 18.1537V8.15366C0 6.77475 1.12109 5.65366 2.5 5.65366Z" fill="#98A2B3"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_526_4">
                                        <rect width="20" height="20" fill="white" transform="translate(0 0.653656)"/>
                                      </clipPath>
                                    </defs>
                                  </svg> <span class="px-1">Intake</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                  <div class="dropdown-menu" aria-labelledby="btndefault2" style="">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="allIntake">
                                        <label for="allIntake"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1"> All Intake </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="january2024">
                                        <label for="january2024"><i class="flaticon-home-fill-1 mr-1"></i><span class="px-1"> January 2024 </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="march2024">
                                        <label for="march2024"><i class="flaticon-gear-fill mr-1"></i><span class="px-1"> March 2024 </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="may2024">
                                        <label for="may2024"><i class="flaticon-bell-fill-2 mr-1"></i><span class="px-1"> May 2024 </span></label>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <input class="form-check-input form-check-primary checkbox_child" type="checkbox" id="september2024">
                                        <label for="september2024"><i class="flaticon-dots mr-1"></i><span class="px-1"> September 2024 </span></label>
                                    </a>
                                </div>
                                
                            </div>
    
                               
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row widget-statistic">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-followers">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="">Number of Leads</p>
                                                <h5 class="ps-5 fs-3 fw-bold">31.4K</h5>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="px-3"><hr class="m-0 p-0"></div>
                                    <div class="widget-content">    
                                        <div class="p-3 d-flex align-items-center">
                                            <div class="">
                                                <h5><span class="fw-bold text-success">12.7%</span> more from last week</h5>
                                            </div>
                                            {{-- <div class="w-chart">
                                                <div id="hybrid_followers"></div>
                                            </div> --}}
                                            <div class="w-chart-render-one">
                                                <div id="total-users"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-followers">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="">New Leads</p>
                                                <h5 class="ps-5 fs-3 fw-bold">1,740</h5>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="px-3"><hr class="m-0 p-0"></div>
                                    <div class="widget-content">    
                                        <div class="p-3 d-flex align-items-center">
                                            <div class="">
                                                <h5><span class="fw-bold text-success">12.7%</span> more from last week</h5>
                                            </div>
                                            {{-- <div class="w-chart">
                                                <div id="hybrid_followers"></div>
                                            </div> --}}
                                            <div class="w-chart-render-one">
                                                <div id="total-users"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-engagement">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="">Application Leads</p>
                                                <h5 class="ps-5 fs-3 fw-bold">3,635</h5>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="px-3"><hr class="m-0 p-0"></div>
                                    <div class="widget-content">    
                                        <div class="p-3 d-flex align-items-center">
                                            <div class="">
                                                <h5><span class="fw-bold text-success">12.7%</span> more from last week</h5>
                                            </div>
                                            {{-- <div class="w-chart">
                                                <div id="hybrid_followers"></div>
                                            </div> --}}
                                            <div class="w-chart-render-one">
                                                <div id="total-users"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-referral">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="">Agent Application</p>
                                                <h5 class="ps-5 fs-3 fw-bold">1,134</h5>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="px-3"><hr class="m-0 p-0"></div>
                                    <div class="widget-content">    
                                        <div class="p-3 d-flex align-items-center">
                                            <div class="">
                                                <h5><span class="fw-bold text-success">12.7%</span> more from last week</h5>
                                            </div>
                                            {{-- <div class="w-chart">
                                                <div id="hybrid_followers"></div>
                                            </div> --}}
                                            <div class="w-chart-render-one">
                                                <div id="total-users"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Application Status (487 Count)</h5>
                                </div>

                                <div class="task-action">
                                    <div class="dropdown ">
                                        <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="uniqueVisitors">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div id="uniqueVisits"></div>
                            </div>
                        </div>
                    </div>

                    <div id="chartBar" class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header pb-0 mb-0">                                
                                <div class="row pt-3">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Application Leads By Branch</h4> 
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area py-0 my-0">
                                <div id="s-bar" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-six container container-xxl p-3">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Counselor Performance </h4> 
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Leads</th>
                                            <th scope="col">Application</th>
                                            <th scope="col">Unconditional Offer</th>
                                            <th scope="col">Enrolled</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nafisa Naj Hossain</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-five">

                            <div class="widget-heading">
                                <h5 class="">Recent Activity Log</h5>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="activitylog" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="activitylog" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="w-shadow-top"></div>

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">
                                        
                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>New project created : <a href="javscript:void(0);"><span>[Cork Admin]</span></a></h5>
                                                </div>
                                                <p>07 May, 2022</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Mail sent to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></h5>
                                                </div>
                                                <p>06 May, 2022</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Server Logs Updated</h5>
                                                </div>
                                                <p>01 May, 2022</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Task Completed : <a href="javscript:void(0);"><span>[Backup Files EOD]</span></a></h5>
                                                </div>
                                                <p>30 Apr, 2022</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Documents Submitted from <a href="javascript:void(0);">Sara</a></h5>
                                                    <span class=""></span>
                                                </div>
                                                <p>25 Apr, 2022</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Server rebooted successfully</h5>
                                                    <span class=""></span>
                                                </div>
                                                <p>10 Apr, 2022</p>
                                            </div>
                                        </div>                                      
                                    </div>                                    
                                </div>

                                <div class="w-shadow-bottom"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2024</span> <a target="_blank" href="#">Lead2Enrollemnt CRM</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
@endsection