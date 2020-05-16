@extends('layaouts.master')

@section('content')

    <section class="bg-volunteers-section mb-56">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header mb-20">
                        @if(session('errors'))
                            <div class="alert alert-danger">
                                {{session('errors')->first('email') }}
                            </div>
                        @else
                            <div class="alert alert-info">
                                Bitte logen Sie sich mit die Informations die wir Sie per Email geschickt haben !
                                <ul>
                                    <li>Email : Ihre Email Adresse</li>
                                    <li>Password : UID</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="flex md:flex-row-reverse flex-wrap">
                        <div class="w-full md:w-4/4  p-4 text-center text-gray-700">
                            <div class="login-reg-panel">
                                <div class="login-info-box">
                                    <label id="label-register" for="log-reg-show">Login</label>
                                    <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
                                </div>
                                <div class="white-panel">
                                    <div class="login-show">
                                        <h2>Anmelden</h2>
                                        <form action="{{route('anmeldung')}}" method="post">
                                            @csrf
                                            <input type="text" placeholder="Email" required name="email" value="{{old('email')}}">
                                            <input type="text" placeholder="Erhaltende uid von der Email" required name="password">
                                            <button type="submit" class="btn btn-success">login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@stop
