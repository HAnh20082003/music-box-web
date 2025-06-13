@extends('layouts.authentication')
@section('title', 'Login ' . config('constants.web_name'))


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('img/login/wp2400321.webp') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Login to <strong>{{ config('constants.web_name') }}</strong></h3>
                            {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                            adipisicing.</p> --}}
                        </div>
                        <form action="{{ route('login.submit') }}" method="post" onsubmit="return validateForm()">
                            @csrf <!-- Bắt buộc để tránh lỗi 419 -->
                            <div class="form-group first {{ old('username') ? 'field--not-empty' : '' }}">
                                <label for="username">Username or Email</label>
                                <input type="text" value="{{ old('username') }}" class="form-control input-smaller"
                                    id="username" name="username">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control input-smaller" id="password" name="password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember
                                        me</span>
                                    <input type="checkbox" checked="checked" name="remember" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot
                                        Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                            <br>

                            <a href="{{ route('google.login') }}"
                                class="btn btn-light border d-flex align-items-center justify-content-center"
                                style="text-decoration: none; color: inherit;">
                                <svg class="me-2" width="20" height="20" viewBox="0 0 533.5 544.3">
                                    <path fill="#4285F4"
                                        d="M533.5 278.4c0-17.4-1.4-34.3-4-50.6H272v95.9h146.9c-6.4 34-25 62.7-53.3 82l85.9 66.9c50.2-46.3 81-114.5 81-194.2z" />
                                    <path fill="#34A853"
                                        d="M272 544.3c72.3 0 132.9-23.9 177.1-64.7l-85.9-66.9c-23.8 16-54.1 25.5-91.2 25.5-70 0-129.2-47.2-150.4-110.4l-88.4 68.2C77.5 487 167.4 544.3 272 544.3z" />
                                    <path fill="#FBBC05"
                                        d="M121.6 327.8c-10.2-30-10.2-62.2 0-92.2L33.2 167.4C-11 246.1-11 354.3 33.2 433l88.4-68.2z" />
                                    <path fill="#EA4335"
                                        d="M272 107.7c39 0 74 13.4 101.4 39.5l76-76C394.9 24.1 333.9 0 272 0 167.4 0 77.5 57.3 33.2 167.4l88.4 68.2C142.8 154.9 202 107.7 272 107.7z" />
                                </svg>
                                &nbsp;
                                <span>Sign in with Google</span>
                            </a>


                            <div class="ml-auto d-flex align-items-center justify-content-center">
                                <a href="{{ route('password.request') }}" class="forgot-pass">
                                    Chưa có tài khoản? Đăng ký
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username');
            const password = document.getElementById('password');

            const val_username = username.value.trim();
            const val_password = password.value.trim();

            let isValid = true;

            // Reset class trước
            username.classList.remove('is-invalid');
            password.classList.remove('is-invalid');

            if (!val_username) {
                username.classList.add('is-invalid');
                isValid = false;
            }

            if (!val_password) {
                password.classList.add('is-invalid');
                isValid = false;
            }

            if (!isValid) {
                toastr.clear();
                if (!val_username && !val_password) {
                    toastr.warning('Please enter your username or email and password.', 'Warning');
                } else if (!val_username) {
                    toastr.warning('Please enter your username or email.', 'Warning');
                    username.focus();
                } else {
                    toastr.warning('Please enter your password.', 'Warning');
                    password.focus();
                }
            }

            return isValid;
        }
    </script>
@endsection
