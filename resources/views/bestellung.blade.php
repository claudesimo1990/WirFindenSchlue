@extends('layaouts.master')


@section('content')
    <section class="bg-volunteers-section">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header">
                        <h3 class="mb-5">Bestellung</h3>
                    </div>
                    <div class="flex md:flex-row-reverse flex-wrap">
                        <bestellungcomponent></bestellungcomponent>
                    </div>
                </div>

            </div>
            <!-- .working-section -->
        </div>

        <!-- .container -->
    </section>


@stop
