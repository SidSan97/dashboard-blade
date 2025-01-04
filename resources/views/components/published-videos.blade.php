<div class="card-dashboard">
    <div class="published-videos">
        <div class="col-12 d-flex mb-2">
            <div class="logo">#</div>
            <span class="card-title">PUBLISHED VIDEOS</span>
        </div>

        <div class="published-video-filters">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-xl-3 col-lg-6 mb-2 d-flex justify-content-center">
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

                    <div class="col-xl-3 col-lg-6 mb-2 d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">All Time Period</option>
                            <option value="1">Last 24 hours</option>
                            <option value="2">Last 7 days</option>
                            <option value="3">Last 30 days</option>
                            <option value="4">Last 3 months</option>
                            <option value="5">Custom</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-lg-6 mb-2 d-flex justify-content-center">
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

                    <div class="col-xl-3 col-lg-6 mb-2 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="d-flex justify-content-center align-items-center pv-info">
                                <i class="bi bi-film"></i>
                                <span class="text-success">11.549</span>
                                <i class="bi bi-arrow-up text-success"></i>
                            </div>

                            <div><span class="pv-info-text">PUBLISHED VIDEOS</span></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="chart-container">
                        <div class="d-flex align-items-center justify-content-end">
                            <img src="{{asset('img/flags/brasil.png')}}" alt="BR" class="rounded">
                            <span>BR</span>
                        </div>

                        <div>
                            <canvas id="myChart" height="300px" width="100%"></canvas>
                        </div>

                        <span>2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
