<div class="card-dashboard mt-2 p-0 mb-2">
    <div class="campaign-create-video">
        <div class="container p-0">
            <div class="row mb-3">
                <div class="col-12 d-flex flex-sm-row flex-column">
                    <div class="logo">#</div>
                    <span class="card-title">CREATE VIDEO</span>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-6 mb-2">
                    <div class="cv-template mb-2">
                        <span>Template</span> <sup class="text-danger">*</sup>

                        <div class="d-flex mt-1 flex-column flex-md-row">
                            <div class="me-4 mb-2">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Template</option>
                                    <option value="1">Random resources</option>
                                    <option value="2">Horizontal split fixed</option>
                                    <option value="3">Horizontal split Random</option>
                                    <option value="3">Full Screen 2 scenes</option>
                                    <option value="3">Full Screen 3 scenes</option>
                                    <option value="3">Full Screen 4 scenes</option>
                                </select>
                            </div>

                            <div class="form-check check-cv me-2">
                                <input class="form-check-input" type="checkbox" value="" id="showBonusAfterScene">
                                <label class="form-check-label" for="showBonusAfterScene">
                                    Show Bonus After scene
                                </label>
                            </div>

                            <div class="select-scene" id="select-scene">
                                <input type="button" value="0">
                                <input type="button" value="1">
                                <input type="button" value="2">
                                <input type="button" value="3">
                            </div>
                        </div>
                    </div>

                    <div class="cv-subtitles mb-2">
                        <div class="d-flex w-100 justify-content-between flex-sm-row flex-column">
                            <div class="form-check check-cv">
                                <input class="form-check-input" type="checkbox" value="" id="cv-check-font">
                                <label class="form-check-label" for="cv-check-font">
                                    Subtitles
                                </label>
                            </div>

                            <div id="cv-select-font">
                                <div class="d-flex">
                                    <label for="">Subtitles Font</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Subtitles Font</option>
                                        <option value="1">Portugues</option>
                                        <option value="2">English</option>
                                        <option value="3">Spanish</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <span class="ms-3">*Subtitles not available in Japanese and Arabic languages</span>
                    </div>

                    <div class="cv-first-frame mb-2">
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <span class="cffs">First Frame (Poster)</span> <sup>*</sup>
                            </div>

                            <div class="form-check check-cv">
                                <input class="form-check-input" type="checkbox" value="" id="showBonusAfterScene2">
                                <label class="form-check-label" for="showBonusAfterScene2">
                                    Talking Avatar on Asset
                                </label>
                            </div>
                        </div>

                        <div class="first-frame-radios d-flex justify-content-between">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Avatar on first frame
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Random Frame on first frame
                                    </label>
                                </div>
                            </div>

                            <div id="select-scene2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Rounded Avatar on Top
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Full screen Avatar
                                    </label>
                                </div>

                                <div class="mt-2">
                                    <div class="d-flex">
                                        <span class="me-1">Select Scene</span>
                                        <div class="select-scene2">
                                            <input type="button" value="0">
                                            <input type="button" value="1">
                                            <input type="button" value="2">
                                            <input type="button" value="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cv-others-container mb-2">
                        <div class="form-check check-cv">
                            <input class="form-check-input" type="checkbox" value="" id="showFrameColor">
                            <label class="form-check-label" for="showFrameColor">
                                Frame
                            </label>
                        </div>

                        <div id="show-frame-color">
                            <label for="" class="ms-1">Frame Color</label> <br>

                            <div class="frame-color-selected d-flex mb-3">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.13308 11.5324C2.99133 11.5324 2.85744 11.5963 2.7682 11.7074C2.7682 11.7074 2.17319 12.4494 1.57553 13.3603C1.27716 13.8154 0.976134 14.3133 0.74339 14.7972C0.511497 15.2802 0.333008 15.7369 0.333008 16.1998C0.333008 17.7408 1.59218 18.9999 3.1331 18.9999C4.67403 18.9999 5.9332 17.7408 5.9332 16.1998C5.9332 15.7369 5.75469 15.2802 5.52195 14.7972C5.28918 14.3141 4.98818 13.8162 4.6898 13.3603C4.09302 12.4494 3.49801 11.7074 3.49801 11.7074C3.40964 11.5972 3.27484 11.5324 3.13308 11.5324Z" fill="#7B7B7B"/>
                                    <path d="M11.8257 0.332031C11.7023 0.332031 11.5833 0.381033 11.4958 0.468537C8.63454 3.32979 5.77217 6.19216 2.91092 9.05341C2.72891 9.23542 2.72891 9.53117 2.91092 9.71318C3.09293 9.89519 3.38868 9.89519 3.57069 9.71318L4.04583 9.23804L11.7654 16.9567C11.9474 17.1387 12.2431 17.1387 12.4251 16.9567L18.8636 10.5182C19.0456 10.3362 19.0456 10.0405 18.8636 9.85847L11.1449 2.14073L12.1565 1.1292C12.3385 0.947197 12.3385 0.65144 12.1565 0.469433C12.069 0.381931 11.9499 0.33293 11.8266 0.33293L11.8257 0.332031ZM10.4843 2.8006L14.8166 7.13201L5.28661 7.99829L10.4843 2.8006Z" fill="#7B7B7B"/>
                                </svg>

                                <div class="colors-selected-list">
                                    <div class="colors-selected d-flex justify-content-between align-items-center">
                                        <div class="color-value"><i class="bi bi-circle-fill"></i> <span class="color-hex">#02450A</span></div>

                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                        </svg>
                                    </div>

                                    <div class="colors-selected d-flex justify-content-between align-items-center">
                                        <div class="color-value"><i class="bi bi-circle-fill"></i> <span class="color-hex">#02450A</span></div>

                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                        </svg>
                                    </div>

                                    <div class="colors-selected d-flex justify-content-between align-items-center">
                                        <div class="color-value"><i class="bi bi-circle-fill"></i> <span class="color-hex">#02450A</span></div>

                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <label for="">Color</label>

                            <div class="add-color d-flex align-items-center justify-content-around">
                                <input type="color" name="" id="colorPicker">
                                <span id="colorPreview">#000000</span>
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13.5" cy="13.5" r="13.5" fill="#3CC1DD"/>
                                    <path d="M19.6322 15.33H14.7182V20.374H11.2862V15.33H6.37223V12.158H11.2862V7.114H14.7182V12.158H19.6322V15.33Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="cv-others-container">
                        <div class="form-check check-cv">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                            <label class="form-check-label" for="flexCheckDefault6">
                                Promotion Code
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-2">
                    <div class="cv-others-container mb-2">
                        <div class="form-check check-cv">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                            <label class="form-check-label" for="flexCheckDefault5">
                                Transitions between Scenes
                            </label>
                        </div>
                    </div>

                    <div class="cv-others-container mb-2">
                        <div class="form-check check-cv">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                            <label class="form-check-label" for="flexCheckDefault5">
                                Brand Logo Img
                            </label>
                        </div>
                    </div>

                    <div class="cv-others-container mb-2">
                        <div class="form-check check-cv">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
                            <label class="form-check-label" for="flexCheckDefault14">
                                Background Music
                            </label>
                        </div>
                    </div>

                    <div class="cv-others-container mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check check-cv">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
                                    <label class="form-check-label" for="flexCheckDefault15">
                                        Only Voice
                                    </label> <sup>*</sup>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check check-cv">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27">
                                    <label class="form-check-label" for="flexCheckDefault27">
                                        Muted Assets
                                    </label> <sup>*</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cv-others-container mb-2">
                        <div class="row">
                            <div class="col-lg-5">
                                <span class="cffs">Preview script in language</span>
                            </div>

                            <div class="col-lg-7 d-flex justify-content-between">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select language</option>
                                    <option value="1">English</option>
                                    <option value="2">Spanish</option>
                                    <option value="2">Portuguese</option>
                                    <option value="2">Korean</option>
                                    <option value="2">Japanese</option>
                                    <option value="2">Arabic</option>
                                </select>

                                <button class="ccv-btn pv-btn">Preview Video</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <div class="cv-others-container mb-2 d-flex justify-content-end">
                            <button class="ccv-btn dc-btn">Draft Campaign</button>
                            <button class="ccv-btn ac-btn ms-3">Activate Campaign</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
