@extends('layaouts.master')

@section('content')

    <section class="bg-volunteers-section mb-56">
        <div class="container">
            <div class="row">
                <div class="working-section">
                    <div class="section-header mb-20">
                    </div>
                    <div class="flex md:flex-row-reverse flex-wrap">
                        <div class="w-full md:w-4/4  p-4 text-center text-gray-700">
                            <div class="login-reg-panel">
                                <div class="login-info-box">
                                    <label id="label-register" for="log-reg-show">Login</label>
                                    <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
                                </div>
                                <div class="white-panel">
                                    <div class="login-show">
                                        <h2>Anmelden</h2>
                                        <input type="text" placeholder="Email">
                                        <input type="password" placeholder="Password">
                                        <input type="button" value="Login">
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
