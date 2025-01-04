<div class="card-dashboard mb-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="d-flex justify-content-end">
                <button class="three-button-menu">
                    <i class="bi bi-three-dots"></i>
                </button>
            </div>

            <div class="col-md-6 d-flex">
                <div class="logo">#</div>
                <span class="card-title">TOP SOCIAL USERS</span>
            </div>

            <div class="col-md-6 d-flex justify-content-around tsu-status">
                <div>
                    <span>ACTIVE: </span> <span class="text-success">1278</span>
                </div>

                <div>
                    <span>INACTIVE: </span> <span class="text-danger">12</span>
                </div>
            </div>
        </div>

        <div class="row select-tsu mb-2">
            <div class="col-xl-3 col-md-6 col-12 mb-2 p-0 d-flex justify-content-center">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">All Countries</option>
                    <option value="1">Brazil</option>
                    <option value="2">Japan</option>
                    <option value="3">South Korea</option>
                    <option value="4">New Zealand</option>
                    <option value="5">Spain</option>
                    <option value="6">Canada</option>
                </select>
            </div>

            <div class="col-xl-3 col-md-6 col-12 mb-2 p-0 d-flex justify-content-center">
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

            <div class="col-xl-3 col-md-6 col-12 mb-2 p-0 d-flex justify-content-center">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">All States</option>
                    <option value="1">Active</option>
                    <option value="2">Draft</option>
                    <option value="3">On Hold</option>
                </select>
            </div>

            <div class="col-xl-3 col-md-6 col-12 mb-2 p-0 d-flex justify-content-center">
                <select class="form-select" id="campaignSelect">
                    <option selected="">Open this select menu</option>
                    <option value="1">How To Play Casino Online</option>
                    <option value="2">Stake Originals</option>
                    <option value="3">Baby Product Reviews</option>
                    <option value="4">Stake Casino - Japan</option>
                    <option value="5">Stake Casino - South Korea</option>
                    <option value="6">Gym Products Campaign - Women</option>
                    <option value="7">Gym Products Campaign - Men</option>
                    <option value="8">Stake Casino and Sportsbetting Brazil</option>
                    <option value="9">Evolution Gaming Live Table Games and Game Shows</option>
                    <option value="10">Sportsbetting Calendar 2024 - Brazil</option>
                    <option value="11">Sportsbetting Calendar 2024 - Japan</option>
                    <option value="12">Sportsbetting Calendar 2024 - South Korea</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6 mb-1">
                <div class="tsu-list">
                    <!-- CONTEUDO PRINCIPAL DA LISTA TOP SOCIAL -->
                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-success"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                                <i class="bi bi-arrow-up text-success"></i>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>

                        <hr>
                    </div>
                    <!-- fim da div -->

                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-success"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                                <i class="bi bi-arrow-up text-success"></i>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>

                        <hr>
                    </div>

                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-danger"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>0</span>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-1">
                <div class="tsu-list">
                    <!-- CONTEUDO PRINCIPAL DA LISTA TOP SOCIAL -->
                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-success"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                                <i class="bi bi-arrow-up text-success"></i>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>

                        <hr>
                    </div>
                    <!-- fim da div -->

                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-success"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                                <i class="bi bi-arrow-up text-success"></i>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>

                        <hr>
                    </div>

                    <div class="tsu-content mb-2">
                        <div class="tsu-data-user d-flex justify-content-around mb-2">
                            <img src="{{asset('img/man.jpg')}}">

                            <div class="d-flex flex-column align-items-center">
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>

                            <i class="bi bi-circle-fill text-danger"></i>
                        </div>

                        <div class="tsu-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="tsu-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>0</span>
                            </div>

                            <img src="{{asset('img/instagram-logo.png')}}" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
