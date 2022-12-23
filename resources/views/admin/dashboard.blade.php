@extends('layout.admin.app')
@section('css')
<style>
    
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="col d-flex flex-column gap-3">
            <div class="row">
                <div class="col-md-6 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="">
                            <h5 class="card-title">Mentors <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $mentor->count() }}</h6>
                                    {{-- <span class="text-muted small pt-2 ps-1">Banners</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="/admin/upcoming-event">
                            <h5 class="card-title">Upcoming Events <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $upcoming_event->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="/admin/banner">
                            <h5 class="card-title">Banner <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-images"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $banner->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="">
                            <h5 class="card-title">Blogs <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $blog->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="/admin/guidebook">
                            <h5 class="card-title">Guidebook <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $guidebook->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="">
                            <h5 class="card-title">Success Stories <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-book-atlas"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $success_stories->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <a class="card-body" href="/admin/testimonial">
                            <h5 class="card-title">Testimonial <span>| {{ now()->year }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <div class="ps-4">
                                    <h6>{{ $testimonial->count() }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Top 5 Blogs <span>| Blogs</span></h5>
                            <div class="news pb-3">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets/img/footer/image_1.png') }}" alt="">
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>
                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets/img/footer/image_1.png') }}" alt="">
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col"></div> --}}
            </div>
        </div>
    </section>
</main>
@endsection