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
                                    <h2>Have an account?</h2>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <label id="label-register" for="log-reg-show">Login</label>
                                    <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
                                </div>

                                <div class="register-info-box text-white">
                                    <h2 class="text-white">Don't have an account?</h2>
                                    <label id="label-login" for="log-login-show">Register</label>
                                    <input type="radio" name="active-log-panel" id="log-login-show">
                                </div>

                                <div class="white-panel">
                                    <div class="login-show">
                                        <h2>LOGIN</h2>
                                        <input type="text" placeholder="Email">
                                        <input type="password" placeholder="Password">
                                        <input type="button" value="Login">
                                        <a href="">Forgot password?</a>
                                    </div>
                                    <div class="register-show">
                                        <h2>REGISTER</h2>
                                        <input type="text" placeholder="Email">
                                        <input type="password" placeholder="Password">
                                        <input type="password" placeholder="Confirm Password">
                                        <input type="button" value="Register">
                                    </div>
                                </div>
                            </div>
                        </div>
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
