<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DASHBOARD</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav me-auto sidebar-links d-lg-none">
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person-fill"></i> Social Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-file-earmark-text"></i> Campaigns</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Avatars</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-file-play"></i> Video Files</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-gear-fill"></i> Resources</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-film"></i> Status Video Generation</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-list-task"></i> Task Queue</a></li>
            </ul>

            <div class="navbar-nav ms-auto">
                <a class="nav-link d-flex align-items-center" aria-current="page" href="#">
                    WEDNESDAY, <strong>SEPTEMBER</strong>
                    12, 2024
                </a>
                <div class="dropdown">
                    <a class="nav-link notification dropdown-toggle" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell-fill notification-bell"></i>
                        <div class="notification-badge">+10</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <li class="dropdown-item alert-header">Alerts Center</li>
                        <li class="dropdown-item alert-content">
                            <div class="d-flex">
                                <img src="{{asset('img/tsu-photo2.png')}}" alt="" srcset="">

                                <div class="d-flex flex-column">
                                    <span class="alert-date">September 12,2024</span>

                                    <div class="alert-text-content">
                                        <strong class="warning-notification">WARNING: </strong> Fail to post the Reel <strong>Joon (Stake) (Korea)</strong>
                                         on instagram
                                    </div>
                                </div>
                            </div>

                            <hr>
                        </li>
                        <li class="dropdown-item alert-content">
                            <div class="d-flex">
                                <img src="{{asset('img/instagram-logo.png')}}" alt="" srcset="">

                                <div class="d-flex flex-column">
                                    <span class="alert-date">September 12,2024</span>

                                    <div class="alert-text-content">
                                        <strong class="warning-notification">WARNING: </strong> Avatar <strong>Joon (Stake) (Korea)</strong>
                                        no longer live on instagram
                                    </div>
                                </div>
                            </div>

                            <hr>
                        </li>
                        <li class="dropdown-item alert-content">
                            <div class="d-flex">
                                <img src="{{asset('img/tsu-photo1.png')}}" alt="" srcset="">

                                <div class="d-flex flex-column">
                                    <span class="alert-date">September 12,2024</span>

                                    <div class="alert-text-content">
                                        <strong class="alert-notification">ALERT: </strong> There is a new comment on <strong>José (Stake) (Brazil)</strong>
                                        Post. <strong class="alert-notification">Click to answer </strong>
                                    </div>
                                </div>
                            </div>

                            <hr>
                        </li>

                        <li class="dropdown-item text-center"><a href="#" class="show-all-alerts">Show All alerts</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <a class="nav-link" href="#">Will Lennon</a>
                    <img src="{{asset('img/will.png')}}" alt="Profile Picture" class="profile-picture">
                </div>
            </div>
        </div>
    </div>
</nav>
