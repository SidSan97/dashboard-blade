<div class="card-dashboard mt-2 p-0 mb-2">
    <div class="campaigns-topics">
        <div class="container p-0">
            <div class="row mb-4">
                <div class="col-12 d-flex flex-sm-row flex-column">
                    <div class="logo">#</div>
                    <span class="card-title">TOPICS</span> <span class="mandatory-field">*</span>
                    <span class="smp-subtitle">Add at least one topic</span>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="topics-form">
                        <div class="folder-div p-2 mb-3" style="height: auto;">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4398 2.31803H10.51C10.3019 2.3161 10.0975 2.25551 9.92032 2.14394L7.07977 0.37897C6.68417 0.134665 6.23231 0.0029055 5.77014 0H2.56024C1.14654 0 0 1.17535 0 2.62578V16.3742C0 17.0706 0.269991 17.7381 0.749976 18.2315C1.22996 18.724 1.88149 19 2.56024 19H17.4398C18.8535 19 20 17.8247 20 16.3742V4.91401C19.9888 3.47318 18.8441 2.31236 17.4398 2.31803ZM14.6499 9.85877H5.35015C4.9639 9.85877 4.64985 9.53752 4.64985 9.14124C4.64985 8.744 4.9639 8.42275 5.35015 8.42275H14.6499C15.0361 8.42275 15.3501 8.744 15.3501 9.14124C15.3501 9.53752 15.0361 9.85877 14.6499 9.85877ZM15.3501 12.1874V12.1883C15.3501 12.5846 15.0361 12.9059 14.6499 12.9059H5.35015C5.15141 12.9309 4.95171 12.8664 4.80172 12.7308C4.65266 12.5942 4.56641 12.399 4.56641 12.1931C4.56641 11.9873 4.65266 11.7921 4.80172 11.6555C4.95171 11.5199 5.15139 11.4554 5.35015 11.4804H14.6499C15.0248 11.4795 15.3342 11.7834 15.3501 12.1672V12.1874ZM5.35015 14.5265L10 14.5275C10.3862 14.5275 10.7003 14.8487 10.7003 15.245C10.7003 15.6423 10.3862 15.9635 10 15.9635H5.35015C4.9639 15.9635 4.64985 15.6423 4.64985 15.245C4.64985 14.8487 4.9639 14.5275 5.35015 14.5275V14.5265ZM14.6499 6.80111L5.35015 6.80207C4.9639 6.80207 4.64985 6.47986 4.64985 6.08358C4.64985 5.6873 4.9639 5.36508 5.35015 5.36508H14.6499C15.0361 5.36508 15.3501 5.6873 15.3501 6.08358C15.3501 6.47986 15.0361 6.80207 14.6499 6.80207V6.80111Z" fill="#7B7B7B"/>
                            </svg>
                        </div>

                        <p>Add New Topic</p>

                        <div class="topics-form2 p-4">
                            <form action="" method="">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-8 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Type topic">
                                            <label for="floatingInput">Topic:</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-2 d-flex align-items-center">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a story here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Story:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-7 mb-2">
                                        <div class="legend-video-modal">
                                            <span>Video Resources</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <svg data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="13.5" cy="13.5" r="13.5" fill="#3CC1DD"></circle>
                                            <path d="M19.6322 15.33H14.7182V20.374H11.2862V15.33H6.37223V12.158H11.2862V7.114H14.7182V12.158H19.6322V15.33Z" fill="white"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label post-only" for="flexCheckDefault">
                                        Post now Only
                                    </label>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="save-topic-btn p-0">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
