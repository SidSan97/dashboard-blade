<div class="card-dashboard mb-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <div class="logo">#</div>
                    <span class="card-title">POSTS</span>
                </div>

                <button class="three-button-menu">
                    <i class="bi bi-three-dots"></i>
                </button>
            </div>
        </div>

        <div class="row select-campaigns mb-2">
            <div class="col-md-3 col-6 mb-2 p-0">
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

            <div class="col-md-3 col-6 mb-2 p-0">
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

            <div class="col-md-3 col-6 mb-2 p-0">
                <select class="form-select" aria-label="Default select example">
                    <option selected="">All Time Period</option>
                    <option value="1">Last 24 hours</option>
                    <option value="2">Last 7 days</option>
                    <option value="3">Last 30 days</option>
                    <option value="4">Last 3 months</option>
                    <option value="5">Custom</option>
                </select>
            </div>

            <div class="col-md-3 col-6 mb-2 p-0">
                <select class="form-select" id="campaignSelect">
                    <option selected="">Top 10 - views</option>
                    <option value="1">Worse 10 - views</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6 mb-1">
                <div class="post-list">
                    <!-- CONTEUDO PRINCIPAL DA LISTA TOP SOCIAL -->
                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/instagram-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="posts-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <i class="bi bi-lightning-charge-fill text-warning"></i>
                        </div>

                        <hr>
                    </div>
                    <!-- fim da div -->

                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/tiktok-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Silva</strong>
                                <span>@simonsilva.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/canada.png')}}" alt="">
                                <span class="posts-country">CA</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <i class="bi bi-lightning-charge-fill text-warning"></i>
                        </div>

                        <hr>
                    </div>

                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/facebook-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/espanha.png')}}" alt="">
                                <span class="posts-country">ES</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>22189</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-1">
                <div class="post-list">
                    <!-- CONTEUDO PRINCIPAL DA LISTA TOP SOCIAL -->
                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/instagram-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/brasil.png')}}" alt="">
                                <span class="posts-country">BR</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <i class="bi bi-lightning-charge-fill text-warning"></i>
                        </div>

                        <hr>
                    </div>
                    <!-- fim da div -->

                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/tiktok-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Silva</strong>
                                <span>@simonsilva.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/canada.png')}}" alt="">
                                <span class="posts-country">CA</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <i class="bi bi-lightning-charge-fill text-warning"></i>
                        </div>

                        <hr>
                    </div>

                    <div class="posts-content mb-2">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/facebook-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span>@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-around">
                            <div class="d-flex">
                                <img src="{{asset('img/flags/espanha.png')}}" alt="">
                                <span class="posts-country">ES</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-eye"></i>
                                <span>22189</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
