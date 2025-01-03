<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('components/head')

    <body>
        @include('components/navbar')

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('components/sidebar')
                </div>

                <div class="col-lg-10">
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
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        @include('components/footer')
    </body>
</html>
