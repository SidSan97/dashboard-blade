<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('components/head')

    <body>
        @include('components/navbar')

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-1 d-lg-block d-sm-none sidebar-col">
                    @include('components/sidebar')
                </div>

                <div class="col-xl-10 col-lg-11 col-md-12">
                    <main class="main-content">
                        <div class="container-fluid p-0">
                            <div class="row mb-2">
                                <div class="col-lg-9">
                                    @include('components/overviews')
                                </div>

                                <div class="col-lg-3 d-flex flex-column justify-content-between">
                                    @include('components/total-earned')

                                    @include('components/total-invested')
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-6 mb-2">
                                    @include('components/campaigns')

                                    @include('components/published-videos')
                                </div>

                                <div class="col lg-6 mb-2">
                                    @include('components/total-views')

                                    @include('components/top-social-users')

                                    @include('components/posts')
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        @include('components/footer')
    </body>
</html>
