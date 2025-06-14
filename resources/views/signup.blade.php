@extends('layouts.authentication')
@section('title', 'Sign up ' . config('constants.web_name'))


@section('content')
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Sign up to <strong>{{ config('constants.web_name') }}</strong></h3>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                    adipisicing.</p> --}}
                </div>
                <form action="{{ route('signup.submit') }}" method="post" onsubmit="return validateForm()">
                    @csrf <!-- Bắt buộc để tránh lỗi 419 -->
                    <div class="form-group first {{ old('username') ? 'field--not-empty' : '' }}">
                        <label for="username">Username or Email</label>
                        <input type="text" value="{{ old('username') }}" class="form-control input-smaller" id="username"
                            name="username">
                    </div>
                    <div class="form-group position-relative mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control input-smaller pe-5" id="password" name="password">

                        <span onclick="togglePassword('password', this)"
                            style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>


                    <div class="form-group position-relative mb-4">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control input-smaller pe-5" id="confirm-password"
                            name="confirm-password">
                        <span onclick="togglePassword('confirm-password', this)"
                            style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>

                    <div class="form-group first {{ old('name') ? 'field--not-empty' : '' }}">
                        <label for="name">Fullname or Nickname</label>
                        <input type="text" value="{{ old('name') }}" class="form-control input-smaller" id="name"
                            name="name">
                    </div>


                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Tôi là nghệ sĩ</span>
                            <input class="form-check-input me-2" type="checkbox" id="is_artist" name="is_artist"
                                onchange="toggleArtist()">
                            <div class="control__indicator"></div>
                        </label>
                    </div>

                    <div class="form-group position-relative mb-4 d-none" id="search-artists">
                        <label for="search_artists" class="mb-2">Bạn là nghệ sĩ nào? Gõ tên tìm kiếm</label>
                        <input type="text" class="form-control" id="search_artists" name="search_artists"
                            autocomplete="off">

                        <ul class="list-group position-absolute w-100" id="suggestion-list"
                            style="z-index: 10; top: 100%; left: 0; display: none; max-height: 200px; overflow-y: auto;">
                        </ul>
                    </div>

                    <div class="form-group position-relative mb-4 d-none field--not-empty" id="proof-upload">
                        <label for="proof_upload" class="mb-2">Ảnh minh chứng (CMND, nghệ danh, sân khấu, v.v.)</label>
                        <br>
                        <input type="file" class="form-control input-smaller pe-5" id="proof_upload" name="proof_upload"
                            accept="image/*">
                    </div>



                    <input type="submit" value="Sign Up" class="btn text-white btn-block btn-primary">

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
                        <span>Sign up with Google</span>
                    </a>


                    <div class="ml-auto d-flex align-items-center justify-content-center">
                        <a href="{{ route('login') }}" class="forgot-pass">
                            Đã có tài khoản? Đăng nhập
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const confirm_password = document.getElementById('confirm-password');
            const name = document.getElementById('name');
            const is_artist = document.getElementById('is_artist');
            const search_artists = document.getElementById('search_artists');
            const proof_upload = document.getElementById('proof_upload');

            const val_username = username.value.trim();
            const val_password = password.value.trim();
            const val_confirm_password = confirm_password.value.trim();
            const val_name = name.value.trim();
            const val_search_artists = search_artists.value.trim();

            let isValid = true;

            // Reset class trước
            username.classList.remove('is-invalid');
            password.classList.remove('is-invalid');
            confirm_password.classList.remove('is-invalid');
            name.classList.remove('is-invalid');

            if (!val_username) {
                username.classList.add('is-invalid');
                isValid = false;
            }

            if (!val_password) {
                password.classList.add('is-invalid');
                isValid = false;
            }

            if (!val_confirm_password || val_confirm_password !== val_password) {
                confirm_password.classList.add('is-invalid');
                isValid = false;
            }

            if (is_artist.value) {
                if (!val_search_artists) {
                    search_artists.classList.add('is-invalid');
                    isValid = false;
                }
                if (proof_upload.files.length == 0) {
                    proof_upload.classList.add('is-invalid');
                    isValid = false;
                }
            }

            if (!val_name) {
                name.classList.add('is-invalid');
                isValid = false;
            }

            if (!isValid) {
                toastr.clear();
                if (!val_username && !val_password && !val_name && !val_confirm_password) {
                    toastr.warning('please fill all required fields', 'Warning');
                } else if (!val_username) {
                    toastr.warning('Please enter your username or email.', 'Warning');
                    username.focus();
                } else if (!val_password) {
                    toastr.warning('Please enter your password.', 'Warning');
                    password.focus();
                } else if (!val_confirm_password) {
                    toastr.warning('Please enter your re-entered password.', 'Warning');
                    confirm_password.focus();
                } else if (val_confirm_password !== val_password) {
                    toastr.warning('Re-entered password does not match.', 'Warning');
                    confirm_password.focus();
                } else {
                    toastr.warning('Please enter your name.', 'Warning');
                    name.focus();
                }
            }

            return isValid;
        }

        function toggleArtist() {
            const checkbox = document.getElementById('is_artist');
            const search_artist = document.getElementById('search-artists');
            const proofUpload = document.getElementById('proof-upload');
            if (checkbox.checked) {
                search_artist.classList.remove('d-none');
                proofUpload.classList.remove('d-none');
            } else {
                search_artist.classList.add('d-none');
                proofUpload.classList.add('d-none');
            }
        }

        const suggestions = [{
                name: "Sơn Tùng M-TP",
                avatar: "/img/logo_circle.png"
            },
            {
                name: "Mỹ Tâm",
                avatar: "/img/logo_circle.png"
            },
            {
                name: "JustaTee",
                avatar: "/img/logo_circle.png"
            }, // nếu không có ảnh thật
        ];


        const input = document.getElementById("search_artists");
        const suggestionList = document.getElementById("suggestion-list");

        input.addEventListener("input", function() {
            const query = this.value.trim().toLowerCase();
            suggestionList.innerHTML = "";

            if (!query) {
                suggestionList.style.display = "none";
                return;
            }

            const filtered = suggestions.filter(artist =>
                artist.name.toLowerCase().includes(query)
            );

            if (filtered.length === 0) {
                suggestionList.style.display = "none";
                return;
            }

            filtered.forEach(artist => {
                const li = document.createElement("li");
                li.className = "list-group-item list-group-item-action d-flex align-items-center";

                // Ảnh avatar
                const img = document.createElement("img");
                img.src = artist.avatar;
                img.alt = artist.name;
                img.style.width = "32px";
                img.style.height = "32px";
                img.style.objectFit = "cover";
                img.style.borderRadius = "50%";
                img.classList.add("me-2");

                // Tên
                const span = document.createElement("span");
                span.textContent = artist.name;

                li.appendChild(img);
                li.appendChild(span);

                li.addEventListener("click", function() {
                    input.value = artist.name;
                    suggestionList.style.display = "none";
                });

                suggestionList.appendChild(li);
            });

            suggestionList.style.display = "block";
        });

        // Ẩn gợi ý nếu click bên ngoài
        document.addEventListener("click", function(e) {
            if (!input.contains(e.target) && !suggestionList.contains(e.target)) {
                suggestionList.style.display = "none";
            }
        });
    </script>
@endsection
