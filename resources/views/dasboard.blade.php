@extends('layaouts.master')


@section('content')
    <section class="bg-volunteers-section mb-56 pl-10 pr-10 mt-5 pt-40">
        <div class="container">
            <div class="row">
                <div class="contact-us">
                    <dashboard :useruid="{{ auth()->user()->UID }}" :profiledata="{{ $profile }}"></dashboard>
                    <!-- .row -->
                </div>
                <!-- .contact-us -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

@stop
