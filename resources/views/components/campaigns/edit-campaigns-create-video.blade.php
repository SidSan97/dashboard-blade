<div class="card-dashboard mt-2 p-0 mb-2">
    <div class="campaign-create-video">
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
                    </div>

                    <div class="first-frame-radios d-flex justify-content-between">
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Avatar on first frame
                            </label>
                        </div>

                        <div class="form-check me-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Random Frame on first frame
                            </label>
                        </div>
                    </div>
                </div>

                <!--div class="cv-first-frame mb-2">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <span class="cffs">First Frame (Poster)</span> <sup>*</sup>
                        </div>

                        <div class="form-check check-cv talking-avatar-check">
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
                </div-->

                <div class="cv-others-container mb-2 talking-avatar">
                    <div class="form-check check-cv mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="showTalkingAvatar">
                        <label class="form-check-label" for="flexCheckDefault5">
                            Talking Avatar On Asset
                        </label>
                    </div>

                    <div id="showTalkingAvatarAsset">
                        <div class="row mb-2">
                            <div class="col-lg-6 mb-2">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="currentAvatar" id="talkingAvatar">
                                    <label class="form-check-label type-avatar-options" for="talkingAvatar">
                                        Current Avatar
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="expressAvatar" id="talkingAvatar" checked>
                                    <label class="form-check-label type-avatar-options" for="talkingAvatar">
                                        Express Avatar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="select-avatars-list mb-2">
                            <div class="select-avatars">
                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar1.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/brasil')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Anh</span>
                                    </div>
                                </div>

                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar2.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/united_states')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Elisa</span>
                                    </div>
                                </div>

                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar3.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/united_kingdom')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Dennis</span>
                                    </div>
                                </div>

                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar4.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/brasil')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Silva</span>
                                    </div>
                                </div>

                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar5.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/espanha')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Miguel</span>
                                    </div>
                                </div>

                                <div class="avatars-content">
                                    <div class="avatars-picture d-flex justify-content-center align-items-center">
                                        <img src="{{asset('img/avatar1.png')}}" alt="" srcset="">

                                        <div>
                                            @include('components/svg_flags/nova_zelandia')
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <span class="avatar-name">Billy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cv-subtitles mb-2">
                    <div class="form-check check-cv">
                        <label class="form-check-label" for="flexCheckDefault3">
                            Avatar Position
                        </label>
                    </div>

                    <div id="select-scene22">
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
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="form-check check-cv mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="showPromoCode">
                            <label class="form-check-label" for="showPromoCode">
                                Promotion Code
                            </label>
                        </div>

                        <span id="chck-cv-subtitle">Click in the Play button to preview</span>
                    </div>

                    <div id="show-promo-code">
                        <div class="promotion-code d-flex">
                            <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9903 7.26558L19.3986 1.93279C19.3187 1.22668 18.7724 0.680276 18.0663 0.600417L12.7349 0.00946461C12.2768 -0.0418125 11.8288 0.117063 11.5044 0.442376L0.441283 11.5048C0.155508 11.7889 0 12.1672 0 12.5698C0 12.9725 0.154658 13.3508 0.441283 13.6349L6.3653 19.5612C6.66033 19.8537 7.0453 20 7.43025 20C7.81522 20 8.20269 19.8537 8.4952 19.5612L19.5574 8.49534C19.8827 8.17171 20.0424 7.72455 19.9903 7.26558ZM17.1392 5.20018C16.8291 5.52298 16.4138 5.70118 15.9709 5.70118C15.5254 5.70118 15.1102 5.52298 14.7983 5.19513C14.4907 4.88746 14.3184 4.4722 14.3184 4.03087C14.3184 3.58787 14.4907 3.1726 14.8 2.86241C15.4455 2.21682 16.4937 2.21682 17.1392 2.86241C17.4493 3.1726 17.6208 3.58787 17.6208 4.03087C17.6217 4.4722 17.4494 4.88748 17.1392 5.20018Z" fill="#7B7B7B"/>
                            </svg>

                            <div class="promotion-code-list ms-2 w-100">
                                <div class="promotion-code-content d-flex justify-content-around align-items-center mb-2">
                                    <div><strong class="me-1">Promotion Code: </strong>samba24</div>

                                    @include('components/svg_flags/brasil')

                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"/>
                                    </svg>

                                    <svg width="14" height="20" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.02933 3.11036L11.5239 5.17366M1.26447 16.2083L2.53952 16.9607M4.93024 15.5984L1.18182 17.7273L1.43565 13.5351L9.28077 1.1354C9.32166 1.07137 9.38713 1.02554 9.46287 1.00793C9.53862 0.990308 9.61852 1.00233 9.68512 1.04136L12.678 2.80827C12.7443 2.84776 12.7917 2.91096 12.81 2.9841C12.8282 3.05724 12.8158 3.13439 12.7754 3.1987L4.93024 15.5984Z" stroke="#45BDDC" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    <svg width="28" height="28" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>

                                <div class="promotion-code-content d-flex justify-content-around align-items-center mb-2">
                                    <div><strong class="me-1">Promotion Code: </strong>samba24</div>

                                    @include('components/svg_flags/brasil')

                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"/>
                                    </svg>

                                    <svg width="14" height="20" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.02933 3.11036L11.5239 5.17366M1.26447 16.2083L2.53952 16.9607M4.93024 15.5984L1.18182 17.7273L1.43565 13.5351L9.28077 1.1354C9.32166 1.07137 9.38713 1.02554 9.46287 1.00793C9.53862 0.990308 9.61852 1.00233 9.68512 1.04136L12.678 2.80827C12.7443 2.84776 12.7917 2.91096 12.81 2.9841C12.8282 3.05724 12.8158 3.13439 12.7754 3.1987L4.93024 15.5984Z" stroke="#45BDDC" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    <svg width="28" height="28" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>

                                <div class="promotion-code-content d-flex justify-content-around align-items-center mb-2">
                                    <div><strong class="me-1">Promotion Code: </strong>samba24</div>

                                    @include('components/svg_flags/brasil')

                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"/>
                                    </svg>

                                    <svg width="14" height="20" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.02933 3.11036L11.5239 5.17366M1.26447 16.2083L2.53952 16.9607M4.93024 15.5984L1.18182 17.7273L1.43565 13.5351L9.28077 1.1354C9.32166 1.07137 9.38713 1.02554 9.46287 1.00793C9.53862 0.990308 9.61852 1.00233 9.68512 1.04136L12.678 2.80827C12.7443 2.84776 12.7917 2.91096 12.81 2.9841C12.8282 3.05724 12.8158 3.13439 12.7754 3.1987L4.93024 15.5984Z" stroke="#45BDDC" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    <svg width="28" height="28" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>

                                <div class="promotion-code-content d-flex justify-content-around align-items-center mb-2">
                                    <div><strong class="me-1">Promotion Code: </strong>samba24</div>

                                    @include('components/svg_flags/brasil')

                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"/>
                                    </svg>

                                    <svg width="14" height="20" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.02933 3.11036L11.5239 5.17366M1.26447 16.2083L2.53952 16.9607M4.93024 15.5984L1.18182 17.7273L1.43565 13.5351L9.28077 1.1354C9.32166 1.07137 9.38713 1.02554 9.46287 1.00793C9.53862 0.990308 9.61852 1.00233 9.68512 1.04136L12.678 2.80827C12.7443 2.84776 12.7917 2.91096 12.81 2.9841C12.8282 3.05724 12.8158 3.13439 12.7754 3.1987L4.93024 15.5984Z" stroke="#45BDDC" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    <svg width="28" height="28" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>

                                <div class="promotion-code-content d-flex justify-content-around align-items-center mb-2">
                                    <div><strong class="me-1">Promotion Code: </strong>samba24</div>

                                    @include('components/svg_flags/brasil')

                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"/>
                                    </svg>

                                    <svg width="14" height="20" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.02933 3.11036L11.5239 5.17366M1.26447 16.2083L2.53952 16.9607M4.93024 15.5984L1.18182 17.7273L1.43565 13.5351L9.28077 1.1354C9.32166 1.07137 9.38713 1.02554 9.46287 1.00793C9.53862 0.990308 9.61852 1.00233 9.68512 1.04136L12.678 2.80827C12.7443 2.84776 12.7917 2.91096 12.81 2.9841C12.8282 3.05724 12.8158 3.13439 12.7754 3.1987L4.93024 15.5984Z" stroke="#45BDDC" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    <svg width="28" height="28" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <label for="" class="mb-3 mt-3">Create Promotion Code</label>

                        <div class="create-promo-code">
                            <div class="row mb-2">
                                <div class="col-lg-8 mb-2">
                                    <input type="text" class="form-control" value="Promotion Code">
                                </div>

                                <div class="col-lg-4 mb-2 d-flex align-items-end">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Select Market</option>
                                        <option value="1">Random resources</option>
                                        <option value="2">Horizontal split fixed</option>
                                        <option value="3">Horizontal split Random</option>
                                        <option value="3">Full Screen 2 scenes</option>
                                        <option value="3">Full Screen 3 scenes</option>
                                        <option value="3">Full Screen 4 scenes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex mb-2 choose-file">
                                <button>Choose Image/Video</button>
                                <button>No file chosen</button>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" value="Link">
                                </div>

                                <div class="form-check check-cv">
                                    <input class="form-check-input" type="checkbox" value="" id="spokenBonus" checked>
                                    <label class="form-check-label" for="spokenBonus">
                                        Spoken Bonus
                                    </label>
                                </div>
                            </div>

                            <div class="tsu-modal-footer d-flex justify-content-end">
                                <button type="button">Save</button>
                                <button type="button" class="ms-2">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-2">
                <div class="cv-others-container mb-2">
                    <div class="form-check check-cv">
                        <input class="form-check-input" type="checkbox" value="" id="showTransitionsScenes">
                        <label class="form-check-label" for="showTransitionsScenes">
                            Transitions between Scenes
                        </label>
                    </div>

                    <div id="show-transitions-scenes" class="mt-3">
                        <div class="scenes-selected mb-3 d-flex">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 7L0 14V0L7 7ZM7 7L14 14V0L7 7Z" fill="#7B7B7B"/>
                            </svg>

                            <div class="scenes-name d-flex">
                                <strong>Slide Left</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>

                            <div class="scenes-name d-flex">
                                <strong>Pixelize</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>

                            <div class="scenes-name d-flex">
                                <strong>Slide Up</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="d-flex mb-3 justify-content-between st-subtitle">
                            <label for="">Transiton List</label>
                            <span>Click in the Play button to preview</span>
                        </div>

                        <div class="transitions-list">
                            <div class="d-flex justify-content-between">
                                <div class="row w-100 pt-3">
                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc1" checked>
                                                <label class="form-check-label" for="tlc1">
                                                    Slide Left
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc2">
                                                <label class="form-check-label" for="tlc2">
                                                    Cicle Crop
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc3">
                                                <label class="form-check-label" for="tlc3">
                                                    Radial
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc4" checked>
                                                <label class="form-check-label" for="tlc4">
                                                    Pixelize
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc5" checked>
                                                <label class="form-check-label" for="tlc5">
                                                    Slide Up
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc6">
                                                <label class="form-check-label" for="tlc6">
                                                    Horizontal Blur
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc7">
                                                <label class="form-check-label" for="tlc7">
                                                    Horizontal Slice
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc8">
                                                <label class="form-check-label" for="tlc8">
                                                    Wipe Left
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cv-others-container mb-2">
                    <div class="form-check check-cv">
                        <input class="form-check-input" type="checkbox" value="" id="showBrandLogo">
                        <label class="form-check-label" for="showBrandLogo">
                            Brand Logo Img
                        </label>
                    </div>

                    <div id="show-brand-logo" class="mt-3">
                        <div class="select-logo d-flex mb-2">
                            <select class="form-select me-3" aria-label="Default select example">
                                <option selected="">Brand logo</option>
                                <option value="1">Active</option>
                                <option value="2">Draft</option>
                            </select>

                            <div class="logos">
                                <div class="logos-selected d-flex">
                                    <img src="{{asset('img/stake_logo_final_1.png')}}" alt="" srcset="">

                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="choose-file d-flex">
                            <label for="" class="me-3">Upload New Logo</label>

                            <div class="d-flex logos-upload">
                                <button>Choose File</button>
                                <button>No file chosen</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cv-others-container mb-2">
                    <div class="form-check check-cv">
                        <input class="form-check-input" type="checkbox" value="" id="showBackgroundMusic">
                        <label class="form-check-label" for="showBackgroundMusic">
                            Background Music
                        </label>
                    </div>

                    <div id="show-background-music" class="mt-3">
                        <div class="scenes-selected mb-3 d-flex">
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.44618 10.1423C3.11095 10.1423 3.71362 10.4055 4.15466 10.8326V4.33843V2.06932V1.90934C4.15466 1.35747 4.60458 0.85991 5.15502 0.804136L12.9982 0.00520307C13.5496 -0.0510598 14 0.355501 14 0.908345V2.16912V3.33548V10.884V10.8938C13.9946 12.2309 12.9011 13.3131 11.5533 13.3131C10.2016 13.3131 9.10665 12.2255 9.10665 10.884C9.10665 9.5425 10.2021 8.45491 11.5533 8.45491C12.2181 8.45491 12.8208 8.71813 13.2618 9.14523V3.41082L4.89335 4.26308V12.5709V12.5807C4.88793 13.9178 3.79444 15 2.44667 15C1.09546 15 0 13.9124 0 12.5709C0 11.2294 1.09546 10.1418 2.44667 10.1418L2.44618 10.1423Z" fill="#7B7B7B"/>
                            </svg>

                            <div class="scenes-name d-flex">
                                <strong>Sports Crescendo Tunes</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>

                            <div class="scenes-name d-flex">
                                <strong>Exciting Tunes</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>

                            <div class="scenes-name d-flex">
                                <strong>Relaxing Tunes</strong>
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0002 0.636353C5.37663 0.636353 0.818359 5.19463 0.818359 10.8182C0.818359 16.4417 5.37663 21 11.0002 21C16.6237 21 21.182 16.4417 21.182 10.8182C21.182 5.19463 16.6237 0.636353 11.0002 0.636353ZM7.81836 6.30381L11.0002 9.48563L14.182 6.30381L15.5145 7.63635L12.3327 10.8182L15.5145 14L14.182 15.3325L11.0002 12.1507L7.81836 15.3325L6.48581 14L9.66763 10.8182L6.48581 7.63635L7.81836 6.30381Z" fill="#EF4A4F"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between st-subtitle">
                            <label for="">Music List</label>
                            <span>Click in the Play button to preview</span>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-8 mb-2">
                                <div class="">
                                    <div class="search-box">
                                        <i class="bi bi-search"></i>
                                        <input type="text" placeholder="Search by name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <select class="form-select w-100" aria-label="Default select example">
                                    <option selected="">All Music Style</option>
                                    <option value="1">Instagram</option>
                                    <option value="2">TikTok</option>
                                    <option value="3">Youtube</option>
                                    <option value="4">X (Twitter)</option>
                                    <option value="5">Bluesky</option>
                                    <option value="6">Facebook</option>
                                </select>
                            </div>
                        </div>

                        <div class="transitions-list">
                            <div class="d-flex justify-content-between">
                                <div class="row w-100 pt-3">
                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc1" checked="">
                                                <label class="form-check-label" for="tlc1">
                                                    Sports Crescendo Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc2">
                                                <label class="form-check-label" for="tlc2">
                                                    Working Upbeat Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc3">
                                                <label class="form-check-label" for="tlc3">
                                                    Tech Gaming
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc4" checked="">
                                                <label class="form-check-label" for="tlc4">
                                                    Exciting Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc5" checked="">
                                                <label class="form-check-label" for="tlc5">
                                                    Relaxing Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc6">
                                                <label class="form-check-label" for="tlc6">
                                                    Cheerfull Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc7">
                                                <label class="form-check-label" for="tlc7">
                                                    UFC Boxing Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="transitions-list-content d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tlc8">
                                                <label class="form-check-label" for="tlc8">
                                                    Soft Rock Tunes
                                                </label>
                                            </div>

                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0C6.24615 0 0 6.24615 0 14C0 21.7538 6.24615 28 14 28C21.7538 28 28 21.7538 28 14C28 6.24615 21.7538 0 14 0ZM20.4 15.0154L11.0769 20.4615C10.8923 20.5846 10.6769 20.6154 10.4923 20.6154C10.3077 20.6154 10.0923 20.5846 9.90769 20.4615C9.56923 20.2769 9.32308 19.8769 9.32308 19.4462V8.55385C9.32308 8.12308 9.56923 7.72308 9.90769 7.53846C10.2462 7.35385 10.7385 7.35385 11.0769 7.53846L20.4308 12.9846C20.7692 13.1692 20.9846 13.5692 20.9846 14C20.9846 14.4308 20.7385 14.8308 20.4 15.0154Z" fill="#3CC1DD"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <button class="ccv-btn dwc-btn">Delete Whole Campaign</button>
                    <button class="ccv-btn dc-btn ms-3">Draft Campaign</button>
                    <button class="ccv-btn hc-btn ms-3">Hold Campaign</button>
                    <button class="ccv-btn sc-btn ms-3">Save Campaign</button>
                </div>
            </div>
        </div>
    </div>
</div>
