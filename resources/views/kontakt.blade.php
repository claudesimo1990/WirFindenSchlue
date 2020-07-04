@extends('layaouts.master')


@section('content')

    <section class="bg-volunteers-section pl-10 pr-10 mt-5 pt-40">
        <div class="container">
            <div class="row">
                <div class="contact-us">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="contact-title">Hinterlassen Sie uns einen Nachrricht</h3>
                            <form action="{{route('kontakt.post')}}" method="POST" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nameId" name="name" placeholder="Name und Vorname" required>
                                        </div>
                                        <!-- .form-group -->
                                    </div>
                                    <!-- .col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailId" name="email" placeholder="Email Adresse" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-6 -->
                                </div>
                                <!-- .row -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subjectId" name="subject" placeholder="Object" required>
                                </div>
                                <textarea class="form-control text-area" name="content" rows="3" placeholder="Nachrricht ..."></textarea>
                                <button type="submit" class="btn btn-default">senden</button>
                            </form>
                        </div>
                        <!-- .col-md-8 -->
                        <div class="col-md-4">
                            <h3 class="contact-title">Kontakte</h3>
                            <ul class="contact-address">
                                <li>
                                    <i class="flaticon-placeholder"></i>
                                    <div class="contact-content">
                                        <p>Thomasstraße 55 12053 Berlin</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-vibrating-phone"></i>
                                    <div class="contact-content">
                                        <p>88013 659 214 512,</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-message"></i>
                                    <div class="contact-content">
                                        <p>kontakt@ichfindemeinen.de</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-4 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .contact-us -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

@stop
