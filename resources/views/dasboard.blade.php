@extends('layaouts.master')


@section('content')
    <section class="bg-volunteers-section mb-56 pl-10 pr-10 mt-5 pt-40">
        <div class="container">
            <div class="row">
                <div class="contact-us">
                    <div class="row">
                        <div class="col-md-12 ml-1">
                            <h3 class="contact-title mt-4 mb-4 ml-5">Daten</h3>
                            <div class="col-md-6">
                                <div class="contact-content">
                                    <div class="list-group bg-success">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            Persönliche Infos | UID : 653656565436365
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Anrede</span><span class="item">{{$profile->anrede = null ? '' : $profile->anrede}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Vorname</span><span class="item">{{$profile->vorname}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Nachname</span><span class="item">{{$profile->nachname}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">email</span><span class="item">{{$profile->email}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Straße</span><span class="item">{{$profile->StraßeHausnummer}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Plz</span><span class="item">{{$profile->PLZ}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Stadt</span><span class="item">{{$profile->Ort}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Phone</span><span class="item">{{$profile->phone}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-content">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            Pate Infos
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Anrede</span><span class="item">{{$profile->anrede_2 = '' ? '' : $profile->anrede_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Vorname</span><span class="item">{{$profile->vorname_2 = '' ? '' : $profile->vorname_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Nachname</span><span class="item">{{$profile->nachname_2 = '' ? '' : $profile->nachname_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Email</span><span class="item">{{$profile->email_2 = '' ? '' : $profile->email_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Phone</span><span class="item">{{$profile->phone_2 = '' ? '' : $profile->phone_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Straße</span><span class="item">{{$profile->strasse_2 = '' ? '' : $profile->strasse_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Stadt</span><span class="item">{{$profile->stadt_2 = '' ? '' : $profile->stadt_2}}</span></a>
                                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">PLZ</span><span class="item">{{$profile->plz_2 = '' ? '' : $profile->plz_2}}</span></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-4 -->
                        <pateform id="{{ $profile->id }}"></pateform>
                        <!-- .col-md-8 -->
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
