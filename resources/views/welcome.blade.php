@extends('layaouts.master')

@section('header')
    @include('layaouts.includes.header')
@stop

@section('content')
<section class="mt-10">
    <div class="container">
        <div class="row">
            <div class="working-section">
                <div class="section-header">
                    <h3 class="">Wie lauft's ?</h3>
                </div>
                <div class="">
                     <videocomponent></videocomponent>
                </div>
            </div>
        </div>
     </div>
    </section>
    <section class="bg-volunteers-section mt-0">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="pt-10">Über uns</h3>
                    </div>
                    <div class="flex md:flex-row-reverse flex-wrap">
                        <div class="w-full md:w-2/4  p-4 text-center">
                            <img src="{{asset('/images/home01/Slider1.jpg')}}" alt="">
                        </div>
                        <div class="w-full md:w-2/4  p-4 text-center text-gray-700">
                            <p class="text-justify ml-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus
                                exercitationem fugit harum inventore molestiae quisquam quod, soluta? Amet dolores eaque
                                exercitationem facere magnam magni minus non possimus quia voluptatum!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus
                                exercitationem fugit harum inventore molestiae quisquam quod, soluta? Amet dolores eaque
                                exercitationem facere magnam magni minus non possimus quia voluptatum!
                                exercitationem facere magnam magni minus non possimus quia voluptatum!
                                exercitationem facere magnam magni minus non possimus quia voluptatum!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-homebox-video">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="mb-10">Der SCHLÜ</h3>
                        <div class="working-content w-full">
                            <p class="text-justify ml-4 w-full"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- .working-section -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <section class="bg-volunteers-section">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="testimonial-option">
                        <div class="section-header mt-10">
                            <h3 class="">Was sagen unsere Kunden</h2>
                        </div>
                        <!-- .section-header -->
                        <div class="testimonial-container swiper-container-horizontal m-3">
                            <div class="swiper-wrapper" style="transform: translate3d(-396.667px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-prev" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide swiper-slide-active" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide swiper-slide-next" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide" style="width: 376.667px; margin-right: 20px;">
                                    <div class="testimonial-content">
                                        <p>Motnectaly dseminate equity that invested users Conventliy actualize and sustainable aplccations Enthusiastically what innovate opensource awesome theme for scenarios.</p>
                                    </div>
                                    <!-- .testimonial-content -->
                                    <div class="author-details">
                                        <!-- .author-img -->
                                    </div>
                                    <!-- .author-details -->
                                </div>
                                <!-- .swiper-slide -->

                            </div>
                            <!-- .swiper-wrapper -->

                        </div>
                        <!-- .testmonial-container -->
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                    </div>
                    <!-- .testimonial-option -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .testimonial-overlay -->
    </section>
@stop
