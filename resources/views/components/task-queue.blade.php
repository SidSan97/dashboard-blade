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
                <div class="cv-taks-main-content mb-2">
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

                    <div class="cv-tasks-schedule mb-3">
                        <div class="row">
                            <div class="col-lg-8 mb-2">
                                <span class="simpleTitle">Schedule To</span>

                                <div class="d-flex">
                                    <input type="date" class="form-control" id="">

                                    <button class="btn-schedule">Update Schedule</button>
                                </div>
                            </div>

                            <div class="col-lg-4 d-flex flex-column">
                                <span class="simpleTitle">Last Updated:</span>

                                <div>
                                    <span class="scheduleDate">03/09/2025</span> <span class="scheduleTime">02:01:36</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tasks-campaings">
                        <div class="d-flex flex-column mb-3">
                            <span class="simpleTitle">Campaign</span>

                            <span class="task-campaing-title">Quickspin Games in Stake Casino (Global)</span>
                        </div>

                        <div class="row task-campaing-content">
                            <div class="col-md-7 mb-2">
                                <span class="simpleTitle">Description</span>

                                <textarea class="form-control" id="" cols="30">
                                    Discover the magic of online slot gaming with NetEnt’s captivating titles! Dive into the vibrant world of Starburst, Gonzo’s Quest, and Dead or Alive 2 – each created to deliver exhilarating gameplay, stunning visuals, and unforgettable adventures. Unleash the thrill with generous bonuses and level up from Bronze to Diamond using promo code maple24. Embrace the innovation and fun of award-winning slots crafted by a pioneer in digital entertainment. Whether you're spinning reels on a lazy afternoon or chasing that next big win, the excitement never stops. Level up your play, explore new features, and join a community where the love of great games unites us all! #DigitalGaming
                                </textarea>

                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn-schedule">Generate New</button>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <span class="simpleTitle">Video</span>

                                <div class="task-video-block">
                                    <img src="{{asset('img/videoframe1.png')}}" class="mb-4 w-100" alt="">

                                    <div class="d-flex justify-content-center">
                                        <svg class="me-4" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                        </svg>

                                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.13708 0V11.8767L3.08042 8.84333L1.84375 10.08L7.00042 15.2367L12.1571 10.08L10.9204 8.84333L7.88708 11.8767V0H6.13708Z" fill="#3CC1DD"/>
                                            <path d="M14 16.9165H0V18.6665H14V16.9165Z" fill="#3CC1DD"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4 create-task">
                        <button class="me-3">Cancel Task</button>
                        <button>Save Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
