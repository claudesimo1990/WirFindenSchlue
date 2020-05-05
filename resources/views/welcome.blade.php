@extends('layaouts.master')

@section('header')
    @include('layaouts.includes.header')
@stop

@section('content')
    <section class="bg-homebox-video">
        <iframe
            src="https://player.vimeo.com/video/407899200?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;autopause=0"
            frameborder="0" class="w-full" allow="autoplay; encrypted-media" width="" height="800"></iframe>
    </section>
    <section class="bg-volunteers-section">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="">Über uns</h3>
                    </div>
                    <div class="flex md:flex-row-reverse flex-wrap">
                        <div class="w-full md:w-2/4  p-4 text-center">
                            <img src="{{asset('/images/home01/Slider1.jpg')}}" alt="">
                        </div>
                        <div class="w-full md:w-2/4  p-4 text-center text-gray-700">
                            <p>
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
    <section class="bg-working-section">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="">Schon einmal den Schlüssel verloren ? </h3>
                        <div class="working-content">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="">Schon einmal den Schlüssel verloren ? </h3>
                        <div class="working-content">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
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
    <section class="bg-homebox-video">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="">Der SCHLÜ</h3>
                        <div class="working-content">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
                            </p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto minima nostrum ratione velit voluptate. Autem cupiditate dolores ducimus, et exercitationem explicabo ipsa reiciendis sed? Delectus itaque nemo recusandae similique.</span>
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
@stop
