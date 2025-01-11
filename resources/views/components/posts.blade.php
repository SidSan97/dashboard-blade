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

        <div class="row select-post mb-2">
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
                    <option selected="">All Time Period</option>
                    <option value="1">Last 24 hours</option>
                    <option value="2">Last 7 days</option>
                    <option value="3">Last 30 days</option>
                    <option value="4">Last 3 months</option>
                    <option value="5">Custom</option>
                </select>
            </div>

            <div class="col-xl-3 col-md-6 col-12 mb-2 p-0 d-flex justify-content-center">
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
                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/instagram-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span class="user-name">@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/brasil')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8281 0L7.87486 7.00012H14L2.62495 21L6.45326 11.3749H0L10.8281 0Z" fill="#FF9900"/>
                            </svg>
                        </div>
                    </div>
                    <!-- fim da div -->

                    <hr>

                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/facebook-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Carmen Sandiego</strong>
                                <span class="user-name">@carmen_santiago_info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/nova_zelandia')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/tiktok-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Hana Nakamura</strong>
                                <span class="user-name">@hanakamura.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/espanha')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8281 0L7.87486 7.00012H14L2.62495 21L6.45326 11.3749H0L10.8281 0Z" fill="#FF9900"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-1">
                <div class="post-list">
                    <!-- CONTEUDO PRINCIPAL DA LISTA TOP SOCIAL -->
                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/threads-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Simon Olváres</strong>
                                <span class="user-name">@simonolivares.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/canada')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8281 0L7.87486 7.00012H14L2.62495 21L6.45326 11.3749H0L10.8281 0Z" fill="#FF9900"/>
                            </svg>
                        </div>
                    </div>
                    <!-- fim da div -->

                    <hr>

                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/youtube-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Carmen Sandiego</strong>
                                <span class="user-name">@carmen_santiago_info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/coreia_sul')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="posts-content">
                        <div class="posts-data-user d-flex mb-2">
                            <img src="{{asset('img/x-logo.png')}}" class="rounded">

                            <div class="d-flex flex-column">
                                <span>September 12,2024 at 11:24:17 AM</span>
                                <strong>Hana Nakamura</strong>
                                <span class="user-name">@hanakamura.info</span>
                            </div>
                        </div>

                        <div class="posts-user-engajament d-flex justify-content-between">
                            <div class="d-flex">
                                @include('components/svg_flags/japao')
                            </div>

                            <div class="d-flex justify-content-center align-items-center posts-views">
                                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 9.3577C3.91168 9.3577 0.274099 5.53634 0.121102 5.37332C-0.0403672 5.20137 -0.0403672 4.93296 0.121102 4.76099C0.274183 4.59882 3.91186 0.776611 8.5 0.776611C13.0881 0.776611 16.7259 4.59797 16.8789 4.76099C17.0404 4.93295 17.0404 5.20135 16.8789 5.37332C16.7258 5.53549 13.0881 9.3577 8.5 9.3577ZM1.08633 5.06715C2.03627 5.95348 5.02866 8.46298 8.5 8.46298C11.9783 8.46298 14.9651 5.95561 15.9137 5.06786C14.9637 4.18083 11.9713 1.6715 8.5 1.6715C5.02168 1.6715 2.03491 4.1794 1.08633 5.06715Z" fill="#838383"></path>
                                    <path d="M11.6945 5.06714C11.6945 6.83142 10.265 8.26166 8.49994 8.26166C6.73565 8.26166 5.30542 6.8315 5.30542 5.06714C5.30542 3.30278 6.73558 1.87262 8.49994 1.87262C8.80609 1.87262 9.10108 1.91526 9.38069 1.99634C8.86343 2.22212 8.49994 2.74079 8.49994 3.34192C8.49994 4.15275 9.1584 4.81121 9.96923 4.81121C10.6529 4.81121 11.2288 4.34218 11.3917 3.70888C11.5846 4.12059 11.6945 4.58204 11.6945 5.06714Z" fill="#838383"></path>
                                </svg>
                                <span>32789</span>
                            </div>

                            <div class="d-flex">
                                <i class="bi bi-chat-left-text"></i>
                                <span>15</span>
                            </div>

                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8281 0L7.87486 7.00012H14L2.62495 21L6.45326 11.3749H0L10.8281 0Z" fill="#FF9900"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
