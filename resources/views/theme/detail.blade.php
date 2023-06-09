@extends('theme.layouts.master')
@section('title', 'رزرو بلیط هواپیما، هتل و اتوبوس')

@section('content')
    <!-- Page header-->
    <section class="container pt-5 mt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">خانه</a></li>
                <li class="breadcrumb-item"><a href="">جستجوی اقامتگاه</a></li>
                <li class="breadcrumb-item active" aria-current="page">هتل اسپیناس</li>
            </ol>
        </nav>
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pb-sm-2">
            <h1 class="h2 me-3 mb-sm-0">هتل اسپیناس</h1>
            <div class="text-nowrap">
                <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle" type="button"
                    data-bs-toggle="tooltip" title="نشان کردن"><i class="fi-heart"></i></button>
                <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="اشتراک گذاری">
                    <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2" type="button"
                        data-bs-toggle="dropdown"><i class="fi-share"></i></button>
                    <div class="dropdown-menu dropdown-menu-end my-1">
                        <button class="dropdown-item" type="button"><i
                                class="fi-facebook fs-base opacity-75 me-2"></i>فیسبوک</button>
                        <button class="dropdown-item" type="button"><i
                                class="fi-twitter fs-base opacity-75 me-2"></i>توییتر</button>
                        <button class="dropdown-item" type="button"><i
                                class="fi-instagram fs-base opacity-75 me-2"></i>اینستاگرام</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-->
    <section class="container overflow-auto mb-5" data-simplebar>
        <div class="row g-2 g-md-3 gallery" data-thumbnails="true" style="min-width: 30rem;">
            <div class="col-8"><a class="gallery-item rounded rounded-md-3"
                    href="{{ asset('theme-assets/img/city-guide/single/01.jpg') }}"
                    data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;اتاق کودک&lt;/h6&gt;"><img
                        src="{{ asset('theme-assets/img/city-guide/single/01.jpg') }}" alt="Gallery thumbnail"></a></div>
            <div class="col-4"><a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3"
                    href="{{ asset('theme-assets/img/city-guide/single/02.jpg') }}"
                    data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;اتاق خواب&lt;/h6&gt;"><img
                        src="{{ asset('theme-assets/img/city-guide/single/02.jpg') }}" alt="Gallery thumbnail"></a><a
                    class="gallery-item rounded rounded-md-3"
                    href="{{ asset('theme-assets/img/city-guide/single/03.jpg') }}"
                    data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;اداری&lt;/h6&gt;"><img
                        src="{{ asset('theme-assets/img/city-guide/single/03.jpg') }}" alt="Gallery thumbnail"></a></div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                    <div class="col"><a class="gallery-item rounded-1 rounded-md-2"
                            href="{{ asset('theme-assets/img/city-guide/single/04.jpg') }}"
                            data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;اتاق کار&lt;/h6&gt;"><img
                                src="{{ asset('theme-assets/img/city-guide/single/04.jpg') }}" alt="Gallery thumbnail"></a>
                    </div>
                    <div class="col"><a class="gallery-item rounded-1 rounded-md-2"
                            href="{{ asset('theme-assets/img/city-guide/single/05.jpg') }}"
                            data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;اتاق مستر&lt;/h6&gt;"><img
                                src="{{ asset('theme-assets/img/city-guide/single/05.jpg') }}" alt="Gallery thumbnail"></a>
                    </div>
                    <div class="col"><a class="gallery-item rounded-1 rounded-md-2"
                            href="{{ asset('theme-assets/img/city-guide/single/06.jpg') }}"
                            data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;سرویس بهداشتی&lt;/h6&gt;"><img
                                src="{{ asset('theme-assets/img/city-guide/single/06.jpg') }}" alt="Gallery thumbnail"></a>
                    </div>
                    <div class="col"><a class="gallery-item rounded-1 rounded-md-2"
                            href="{{ asset('theme-assets/img/city-guide/single/07.jpg') }}"
                            data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;دستشویی فرنگی&lt;/h6&gt;"><img
                                src="{{ asset('theme-assets/img/city-guide/single/07.jpg') }}" alt="Gallery thumbnail"></a>
                    </div>
                    <div class="col"><a class="gallery-item rounded-1 rounded-md-2"
                            href="{{ asset('theme-assets/img/city-guide/single/08.jpg') }}"
                            data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;حمام&lt;/h6&gt;"><img
                                src="{{ asset('theme-assets/img/city-guide/single/08.jpg') }}" alt="Gallery thumbnail"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page content-->
    <section class="container pb-5 mb-md-4">
        <div class="row">
            <div class="col-md-7 mb-md-0 mb-3">
                <div class="card py-2 px-sm-4 px-3 shadow-sm">
                    <div class="card-body mx-n2">
                        <!-- Place info-->
                        <div class="d-flex align-items-start mb-3 pb-3 border-bottom"><img
                                src="{{ asset('theme-assets/img/city-guide/brands/hotel.svg') }}" width="60"
                                alt="Thumbnail">
                            <div class="pe-2 me-1">
                                <h3 class="h5 mb-2"> هتل اسپیناس</h3>
                                <ul class="list-unstyled d-flex flex-wrap fs-sm">
                                    <li class="me-2 mb-1 pe-1"><i
                                            class="fi-wallet mt-n1 ms-1 align-middle opacity-70"></i>150000 تومان</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Place contacts-->
                        <div class="mb-3 pb-3 border-bottom">
                            <h4 class="h5 mb-2">تماس با ما: </h4>
                            <ul class="nav row row-cols-sm-2 row-cols-1 gy-1">
                                <li class="col"><a class="nav-link p-0 fw-normal d-flex align-items-start"
                                        href="#"><i
                                            class="fi-map-pin mt-1 me-2 align-middle opacity-70"></i>فرانکفورت، خیابان اصلی
                                        پلاک 45</a></li>
                                <li class="col"><a
                                        class="nav-link d-inline-block p-0 fw-normal d-inline-flex align-items-start"
                                        href="tel:3025550107"><i
                                            class="fi-phone mt-1 me-2 align-middle opacity-70"></i>(302) 555-0107</a>, <a
                                        class="nav-link d-inline-block p-0 fw-normal" href="tel:3025550208">(302)
                                        555-0208</a></li>
                                <li class="col"><a class="nav-link p-0 fw-normal d-flex align-items-start"
                                        href="#"><i
                                            class="fi-globe mt-1 me-2 align-middle opacity-60"></i>bb-hotel.com</a></li>
                                <li class="col"><a class="nav-link p-0 fw-normal d-flex align-items-start"
                                        href="mailto:bb-hotel@example.com"><i
                                            class="fi-mail mt-1 me-2 align-middle opacity-70"></i>bb-hotel@example.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Place pricing-->
                        <div class="mb-3 pb-3 border-bottom">
                            <div class="row row-cols-sm-2 row-cols-1">
                                <div class="col mb-sm-0 mb-3">
                                    <h4 class="h5 mb-0">
                                        <span class="fs-5">500-1000 تومان </span>
                                        <span class="fs-base fw-normal text-body">/شب</span>
                                    </h4>
                                </div>
                                <div class="col">
                                    <a class="btn btn-primary btn-lg rounded-pill w-sm-auto w-100" href="#">
                                        رزرو و پرداخت آنلاین
                                        <i class="fi-chevron-right fs-sm ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Follow-->
                        <div class="d-flex align-items-center">
                            <h4 class="h5 mb-0 me-3">دنبال کردن: </h4>
                            <div class="text-nowrap"><a
                                    class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2"
                                    href="#"><i class="fi-facebook"></i></a><a
                                    class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2"
                                    href="#"><i class="fi-instagram"></i></a><a
                                    class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle"
                                    href="#"><i class="fi-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Location (Map)-->
            <div class="col-md-5">
                <div class="position-relative bg-size-cover bg-position-center bg-repeat-0 h-100 rounded-3"
                    style="background-image: url({{ asset('theme-assets/img/city-guide/single/map.jpg') }}); min-height: 250px;">
                    <div class="d-flex h-100 flex-column align-items-center justify-content-center"><img
                            class="d-block mx-auto mb-4 rounded-circle bg-white shadow"
                            src="{{ asset('theme-assets/img/city-guide/brands/hotel.svg') }}" width="40"
                            alt="Place logo"><a class="btn btn-primary rounded-pill stretched-link"
                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.924340088787!2d13.428504251724927!3d52.58906113876177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85284201593ab%3A0x28af69e02ce0e2fc!2sBusinesshotel%20Berlin!5e0!3m2!1sru!2sua!4v1618908622013!5m2!1sru!2sua"
                            data-iframe="true" data-bs-toggle="lightbox"><i class="fi-route me-2"></i>مشاهده نقشه</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
