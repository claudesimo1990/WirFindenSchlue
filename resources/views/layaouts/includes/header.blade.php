<!-- Start Slider Section -->
<section class="bg-slider-option">
    <div class="slider-option slider-three">
        <div id="slider" class="carousel slide wow fadeInDown" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider-item">
                        <img src="{{asset('images/home01/Slider1.jpg')}}" alt="bg-slider-1">
                        <div class="slider-content-area">
                            <div class="container">
                                <div class="slider-content">
                                    <h2>Willkommen auf IFM SCHLÜ</h3>
                                    <h3>Das Netzwerk zum Schlüssel Wiederfinden.</h2>
                                    <p>Rund 4000 Schlüssel pro Jahr (in Berlin) finden den Weg in ein Fundbüro.
                                        Nur 15 Prozent finden den Weg zurück zum Eigentümer.
                                        Mit dem SCHLÜ - Anhänger ändert sich das nun.</p>
                                    <div class="slider-btn">
                                        <a href="{{ route('anmeldung') }}" class="btn btn-default">Anmelden</a>
                                        <a href="{{ route('bestellung') }}" class="btn btn-default">Bestellen</a>
                                    </div>
                                    <!-- .slider-btn -->
                                </div>
                                <!-- .carousel-caption -->
                            </div>
                            <!-- .container -->
                        </div>
                    </div>
                </div>
                <!-- .items -->

                <div class="item">
                    <div class="slider-item">
                        <img src="{{asset('images/home01/Slider2.jpg')}}" alt="bg-slider-2">
                        <div class="slider-content-area">
                            <div class="container">
                                <div class="slider-content">
                                    <h3>Sei ein Teil des Netzwerks von IFM
                                        Erwerbe einen IFM SCHLÜ Anhänger.
                                        Auch in deiner Lieblingsfarbe erhältlich.</h3>
                                    <div class="slider-btn">
                                        <a href="{{route('anmeldung')}}" class="btn btn-default">SCHLÜ LOGIN</a>
                                        <a href="{{route('bestellung')}}" class="btn btn-default">Bestellen</a>
                                    </div>
                                    <!-- .slider-btn -->
                                </div>
                                <!-- .carousel-caption -->
                            </div>
                            <!-- .container -->
                        </div>
                    </div>
                </div>
                <!-- .items -->
                <div class="item">
                    <div class="slider-item">
                        <img src="{{asset('images/home01/Slider1.jpg')}}" alt="bg-slider-3">
                        <div class="slider-content-area">
                            <div class="container">
                                <div class="slider-content">
                                    <h3 class="">Willkommen</h3>
                                    <h2>auf Wir Finden deine Schlü</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi cupiditate doloremque doloribus eius. </p>
                                    <div class="slider-btn">
                                        <a href="{{asset('anmeldung')}}" class="btn btn-default">Anmelden</a>
                                        <a href="{{asset('bestellung')}}" class="btn btn-default">Bestellen</a>
                                    </div>
                                    <!-- .slider-btn -->
                                </div>
                                <!-- .carousel-caption -->
                            </div>
                            <!-- .container -->
                        </div>
                    </div>
                </div>
                <!-- .items -->
            </div>
            <!-- .carosoul-inner -->
            <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <!-- .slider-option -->
</section>

<!-- End Slider Section -->
