<div class="card-dashboard mb-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-3 col-12 d-flex mb-2">
                <div class="logo">#</div>
                <span class="card-title">CREATED VIDEOS</span>
            </div>

            <div class="col-sm-8 col-12 cv-tasks-status">
                <div class="cv-tasks-numbers">
                    <span>DONE: </span> <span>12</span>
                </div>

                <div class="cv-tasks-numbers">
                    <span>PENDING: </span> <span>1244</span>
                </div>

                <div class="cv-tasks-numbers">
                    <span>ERROR: </span> <span>12</span>
                </div>

                <div class="cv-tasks-numbers">
                    <span>MANUAL: </span> <span>12</span>
                </div>

                <div class="cv-tasks-numbers">
                    <span>URGENT: </span> <span>37</span>
                </div>
            </div>
        </div>

        <div class="cv-tasks-filters mb-2">
            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search by username">
            </div>

            <div class="mb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">All countries</option>
                    <option value="1">Japan</option>
                    <option value="2">New Zealand</option>
                    <option value="3">South Korea</option>
                    <option value="4">Spain</option>
                    <option value="5">Canada</option>
                    <option value="6">Brazil</option>
                </select>
            </div>

            <div class="mb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">Select your campaign</option>
                    <option value="1">How To Play Casino Online</option>
                    <option value="2">Stake Originals</option>
                    <option value="3">Baby Product Reviews</option>
                    <option value="4">Stake Casino - Japan</option>
                    <option value="5">Stake Casino - South Korea</option>
                </select>
            </div>

            <div class="mb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">All Social Media</option>
                    <option value="1">Instagram</option>
                    <option value="2">TikTok</option>
                    <option value="3">Youtube</option>
                    <option value="4">X (Twitter)</option>
                    <option value="5">Bluesky</option>
                    <option value="6">Facebook</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6 mb-2">
                <div class="cv-taks-main-content">
                    <div class="row mb-2">
                        <div class="col-lg-8 mb-2">
                            <div class="cv-tasks-user-data d-flex justify-content-between">
                                <img src="https://sidneidev.com.br/projetos/dashboard-blade/public/img/tsu-photo3.png">

                                <div class="d-flex flex-column align-items-start cv-task-user-info">
                                    <strong>Lara Gaming</strong>
                                    <span>@laragaming888</span>
                                </div>

                                <div class="d-flex align-items-center">
                                    @include('components/svg_flags/brasil')

                                    <img class="ms-2" src="{{asset('img/instagram-logo.png')}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="d-flex flex-column ms-3 mt-2">
                                <span class="simpleTitle">Status</span>
                                <span class="cv-tasks-status">PENDING</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cv-tasks-schedule">
            <div class="row">
                <div class="col-lg-6 mb-2">
                    <span class="simpleTitle">Schedule To</span>

                    <div>
                        <input type="date" class="form-control" id="">

                        <button class="btn btn-schedule">Update Schedule</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="simpleTitle">Last Updated:</p>

                    <span class="scheduleDate">03/09/2025</span> <span class="scheduleTime">02:01:36</span>
                </div>
            </div>
        </div>
    </div>
</div>
