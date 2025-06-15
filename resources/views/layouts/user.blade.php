<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login-form-08/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('login-form-08/css/owl.carousel.min.css') }}">




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login-form-08/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login-form-08/css/style.css') }}"> --}}

    <title>@yield('title', default: 'User')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo_circle.png') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('one-music-gh-pages/css/style.css') }}">

    <style>
        #scrollUp {
            bottom: 120px !important;
            /* cao hơn thanh player */
        }

        .playlist-sidebar {
            position: sticky;
            top: 70px;
            /* nếu bạn có header cố định */
            height: calc(100vh - 70px);
            overflow-y: auto;
        }


        .song-item:hover {
            background-color: rgba(255, 255, 255, 0.127) !important;
            cursor: pointer;
        }

        .custom-context-menu {
            position: absolute;
            z-index: 9999;
            display: none;
            min-width: 200px;
            background-color: #2c2f33;
            color: white;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            padding: 5px 0;
        }

        .custom-context-menu li {
            padding: 8px 15px;
            list-style: none;
            white-space: nowrap;
            cursor: pointer;
        }

        .custom-context-menu li:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .submenu {
            position: absolute;
            top: 0;
            left: 100%;
            display: none;
            background-color: #2c2f33;
            border-radius: 5px;
            min-width: 180px;
            padding: 5px 0;
        }

        .submenu.left {
            left: auto;
            right: 100%;
        }

        .has-submenu:hover .submenu {
            display: block;
        }

        .has-submenu::after {
            content: '▶';
            float: right;
        }
    </style>


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="{{ route('users.home') }}"
                            class="nav-brand d-flex align-items-center text-white text-decoration-none">
                            <img src="{{ asset('img/logo_circle.png') }}" alt="" class="img-fluid"
                                style="max-height: 40px;">
                            <span style="margin-left: 10px;">{{ config('constants.web_name') }}</span>
                        </a>


                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="albums-store.html">Albums</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="albums-store.html">Albums</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- Search form -->
                                    <li>
                                        <form action="" method="GET" class="d-flex align-items-center"
                                            style="margin-left: 15px;">
                                            <input type="text" name="query" class="form-control form-control-sm"
                                                placeholder="Search songs, albums..."
                                                style="width: 250px; background-color: #222; border: none; color: #fff;">
                                            <button type="submit" class="btn btn-sm text-white"
                                                style="margin-left: 5px;">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>

                                <div
                                    class="login-register-cart-button d-flex align-items-center text-white position-relative">
                                    @auth
                                        <!-- Logged in -->
                                        <div class="user-dropdown position-relative">
                                            <div class="d-flex align-items-center cursor-pointer" id="userDropdownToggle"
                                                style="cursor: pointer;">
                                                <!-- Avatar -->
                                                <img src="{{ Auth::user()->avatar_url ?? asset('img/logo_circle.png') }}"
                                                    alt="Avatar"
                                                    style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px;">

                                                <!-- Name + Followers -->
                                                <div class="me-2 text-white">
                                                    <div><strong>{{ Auth::user()->name }}</strong></div>
                                                    <div style="font-size: 13px;">{{ Auth::user()->followers_count ?? 0 }}
                                                        followers</div>
                                                </div>

                                                <!-- Dropdown icon -->
                                                <i class="fa fa-caret-down text-white" style="margin-left: 8px;"></i>

                                            </div>

                                            <!-- Dropdown menu -->
                                            <div id="userDropdownMenu" class="position-absolute bg-white rounded shadow p-2"
                                                style="top: 100%; right: 0; min-width: 160px; display: none; z-index: 1000;">
                                                <a href="" class="dropdown-item text-dark">Hồ sơ cá
                                                    nhân</a>
                                                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger">Đăng
                                                        xuất</button>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <!-- Guest -->
                                        <div class="login-register-btn mr-50">
                                            <a href="{{ route('login') }}" id="loginBtn" class="text-white">Login</a>
                                        </div>
                                    @endauth
                                </div>


                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <ul id="contextMenu" class="custom-context-menu">
        <li class="has-submenu">Thêm vào danh sách phát
            <ul class="submenu">
                <li>Danh sách phát 1</li>
                <li>Danh sách phát 2</li>
                <li>Danh sách phát 3</li>
            </ul>
        </li>
    </ul>
    <!-- ##### Header Area End ##### -->
    <main class="container-fluid bg-dark text-white" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-9 px-0">
                @yield('content')
                <!-- ##### Footer Area Start ##### -->
                <footer class="footer-area pt-3 mt-4" style="margin-bottom: 15px;">

                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-12 col-md-6">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                <p class="copywrite-text"><a
                                        href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                            {{-- 
            <div class="col-12 col-md-6">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Albums</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>


            <div class="col-md-3 bg-dark text-white border-start p-0">
                <!-- Sidebar playlist bên phải -->
                <div class="bg-dark text-white border rounded-start shadow-sm m-2 overflow-hidden"
                    style="position: sticky; top: 85px; height: 540px;">
                    <aside class="playlist-sidebar p-4">
                        <!-- Playlist Info -->
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('img/logo_circle.png') }}" alt="Playlist Cover"
                                class="rounded me-3 shadow" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1 text-white fw-bold">Chill Hits</h6>
                                <small class="text-muted d-block position-relative artist-hover-group">
                                    by
                                    <a href="/artist/son-tung-mtp"
                                        class="text-decoration-underline text-reset artist-hover-link">
                                        Sơn Tùng M-TP
                                    </a>

                                    <!-- Tooltip -->
                                    <div class="artist-hover-box bg-dark text-white p-2 rounded shadow position-absolute"
                                        style="display: none; min-width: 200px; top: 100%; left: 0; z-index: 1000;">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/logo_circle.png') }}" alt="Avatar"
                                                class="rounded-circle me-2" style="width: 40px; height: 40px;">
                                            <strong>Sơn Tùng M-TP</strong>
                                        </div>
                                    </div>
                                </small>
                                <small class="text-muted">Phát hành: 12/06/2025</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <button class="btn btn-outline-light btn-sm rounded-pill">
                                <i class="fa fa-random me-1"></i> Trộn bài
                            </button>
                            <button class="btn btn-outline-light btn-sm rounded-pill">
                                <i class="fa fa-play me-1"></i> Phát tất cả
                            </button>
                            <button class="btn btn-outline-light btn-sm rounded-pill">
                                <i class="fa fa-heart me-1"></i> Yêu thích
                            </button>
                        </div>
                        <!-- Wrapper scroll cho danh sách bài hát -->
                        <div style="max-height: 400px; overflow-y: auto;">
                            <ul class="list-group list-group-flush">

                                <li
                                    class="list-group-item song-item bg-transparent text-white border-0 d-flex justify-content-between align-items-center px-3 py-2">
                                    <div>
                                        <strong>Bài hát 1</strong><br>
                                        <small class="text-muted">Nghệ sĩ A</small>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light rounded-circle">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </li>

                                <li
                                    class="list-group-item song-item bg-transparent text-white border-0 d-flex justify-content-between align-items-center px-3 py-2">
                                    <div>
                                        <strong>Bài hát 1</strong><br>
                                        <small class="text-muted">Nghệ sĩ A</small>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light rounded-circle">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </li>

                                <li
                                    class="list-group-item song-item bg-transparent text-white border-0 d-flex justify-content-between align-items-center px-3 py-2">
                                    <div>
                                        <strong>Bài hát 1</strong><br>
                                        <small class="text-muted">Nghệ sĩ A</small>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light rounded-circle">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </aside>
                </div>

            </div>




        </div>
    </main>



    <!-- Modal -->
    <div class="modal fade" id="songDetailModal" tabindex="-1" aria-labelledby="songDetailLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white"> <!-- đổi sang dark -->
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="songDetailLabel">Chi tiết bài hát</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <img src="{{ asset('img/logo_circle.png') }}" class="rounded me-4"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <div>
                            <h4 class="text-white">Tên bài hát</h4>
                            <p><strong>Nghệ sĩ:</strong> Tên nghệ sĩ</p>
                            <p><strong>Album:</strong> Tên album</p>
                            <p><strong>Ngày phát hành:</strong> 01/01/2024</p>
                            <p><strong>Mô tả:</strong> Đây là bài hát nổi bật trong album mới nhất...</p>
                        </div>
                    </div>

                    <!-- Lyrics section -->
                    <div class="mt-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h5 class="mb-0">Lời bài hát</h5>
                            <button class="btn btn-sm btn-outline-light" onclick="copyLyrics()" title="Copy lyrics">
                                <i class="fa fa-copy"></i>
                            </button>
                        </div>
                        <div id="lyricsContent"
                            style="max-height: 200px; overflow-y: auto; background-color: #2c2c2c; color: #ccc; padding: 10px; border-radius: 5px;">
                            Đây là lời bài hát...<br>Line 2<br>Line 3<br>Line 4<br>
                            Line 2<br>Line 3<br>Line 4<br>
                            Line 2<br>Line 3<br>Line 4<br>
                            Line 2<br>Line 3<br>Line 4<br>...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Music Bar -->
    <div class="music-player fixed-bottom text-white py-2 px-3 shadow-lg"
        style="z-index: 999;background-color: #1e1e1e; color: white;">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Info bài hát -->
            <div class="d-flex align-items-center" style="gap: 12px;">
                <img src="{{ asset('img/logo_circle.png') }}" alt="Song" class="rounded-circle"
                    style="width: 50px; height: 50px; object-fit: cover;">
                <div>
                    <div class="fw-bold">Tên bài hát</div>
                    <div class="text-muted" style="font-size: 0.85rem;">Tên nghệ sĩ</div>
                </div>
                <button class="btn btn-sm btn-link text-white ms-2" style="font-size: 1.2rem;" title="Chi tiết"
                    data-bs-toggle="modal" data-bs-target="#songDetailModal">
                    <i class="fas fa-chevron-up"></i>
                </button>
            </div>

            <audio id="audioPlayer"
                src="https://jtjimcfaiovyvkmnclrf.supabase.co/storage/v1/object/public/audio//thap-roi-tu-do.mp3"
                hidden></audio>
            <!-- Thanh điều khiển chính -->
            <div class="d-flex align-items-center flex-grow-1 justify-content-center mx-3" style="max-width: 700px;">
                <!-- Các nút điều khiển -->
                <div class="d-flex align-items-center" style="gap: 12px;">
                    <button class="btn btn-outline-light btn-sm" onclick="prevTrack()" style="width: 30px;">
                        <i class="fas fa-step-backward"></i>
                    </button>
                    <button class="btn btn-outline-light btn-sm" onclick="rewind(5)" style="width: 30px;">
                        <i class="fas fa-backward"></i>
                    </button>
                    <button class="btn btn-outline-light btn-sm" onclick="togglePlayPause()" style="width: 30px;">
                        <i class="fas fa-play" id="playPauseIcon"></i>
                    </button>
                    <button class="btn btn-outline-light btn-sm" onclick="forward(5)" style="width: 30px;">
                        <i class="fas fa-forward"></i>
                    </button>
                    <button class="btn btn-outline-light btn-sm" onclick="nextTrack()" style="width: 30px;">
                        <i class="fas fa-step-forward"></i>
                    </button>
                </div>

                <!-- Thanh thời gian -->
                <!-- HTML -->
                <span class="time-current text-center" id="timeCurrent"
                    style="width: 50px; margin-left: 20px;">0:00</span>
                <input type="range" class="flex-grow-1" min="0" max="100" value="0"
                    id="seekBar" style="margin: 0 10px; cursor: pointer;">
                <span class="time-duration text-center" id="timeDuration" style="width: 50px;">4:05</span>


            </div>

            <!-- Âm lượng -->
            <div class="d-flex align-items-center" style="min-width: 120px;">
                <button class="btn btn-sm" id="volumeToggleBtn" onclick="toggleMute()"
                    style="border: none; background: transparent; width: 30px;">
                    <i class="fas fa-volume-up text-white" id="volumeIcon"></i>
                </button>
                <input type="range" min="0" max="100" value="40" id="volumeControl"
                    style="width: 100px; margin-left: 20px;cursor: pointer;">
                <span id="volumePercent"
                    style="margin-left: 10px; display: inline-block; width: 40px; text-align: left;">40%</span>

            </div>

        </div>
    </div>


    <!-- ##### Footer Area Start ##### -->
    {{-- <script src="{{ asset('login-form-08/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login-form-08/js/popper.min.js') }}"></script>
    <script src="{{ asset('login-form-08/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login-form-08/js/main.js') }}"></script>

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        function togglePassword(inputId, el) {
            const input = document.getElementById(inputId);
            const icon = el.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script> --}}

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        const audio = document.getElementById('audioPlayer');
        const playPauseIcon = document.getElementById('playPauseIcon');
        const volumeControl = document.getElementById('volumeControl');
        const volumePercent = document.getElementById('volumePercent');
        const volumeIcon = document.getElementById('volumeIcon');
        let previousVolume = 60;
        let isMuted = false;
        const seekBar = document.getElementById('seekBar');
        const timeCurrent = document.getElementById('timeCurrent');
        const timeDuration = document.getElementById('timeDuration');
        let isSeeking = false;

        volumeControl.value = previousVolume;
        volumePercent.textContent = previousVolume + '%';
        audio.volume = previousVolume / 100;

        // Cập nhật % khi kéo
        volumeControl.addEventListener('input', function() {
            const vol = parseInt(this.value);
            volumePercent.textContent = vol + '%';
            audio.volume = vol / 100;

            if (vol === 0) {
                isMuted = true;
                volumeIcon.classList.remove('fa-volume-up');
                volumeIcon.classList.add('fa-volume-mute');
            } else {
                isMuted = false;
                volumeIcon.classList.remove('fa-volume-mute');
                volumeIcon.classList.add('fa-volume-up');
                previousVolume = vol; // Lưu để toggle lại khi bật tiếng
            }
        });

        function toggleMute() {
            if (isMuted) {
                // Bật lại âm thanh
                volumeControl.value = previousVolume;
                volumePercent.textContent = previousVolume + '%';
                volumeIcon.classList.remove('fa-volume-mute');
                volumeIcon.classList.add('fa-volume-up');
                isMuted = false;
                audio.volume = previousVolume / 100;
            } else {
                // Tắt âm thanh
                previousVolume = parseInt(volumeControl.value);
                volumeControl.value = 0;
                volumePercent.textContent = '0%';
                volumeIcon.classList.remove('fa-volume-up');
                volumeIcon.classList.add('fa-volume-mute');
                isMuted = true;
                audio.volume = 0;
            }
        }

        function formatTime(seconds) {
            const min = Math.floor(seconds / 60);
            const sec = Math.floor(seconds % 60);
            return `${min}:${sec < 10 ? '0' : ''}${sec}`;
        }

        function togglePlayPause() {
            if (audio.paused || audio.ended) {
                audio.play();
                playPauseIcon.classList.remove('fa-play');
                playPauseIcon.classList.add('fa-pause');
            } else {
                audio.pause();
                playPauseIcon.classList.remove('fa-pause');
                playPauseIcon.classList.add('fa-play');
            }
        }

        function rewind(second) {
            audio.currentTime = Math.max(audio.currentTime - second, 0);
        }

        function forward(second) {
            audio.currentTime = Math.min(audio.currentTime + second, audio.duration);
        }
        // Khi audio load xong
        audio.addEventListener('loadedmetadata', () => {
            seekBar.max = Math.floor(audio.duration);
            timeDuration.textContent = formatTime(audio.duration);

        });

        // Khi audio đang phát
        audio.addEventListener('timeupdate', () => {
            if (!isSeeking) {
                seekBar.value = audio.currentTime;
                timeCurrent.textContent = formatTime(audio.currentTime);
            }
            console.log(isSeeking);
        });

        // Khi người dùng bắt đầu kéo
        seekBar.addEventListener('mousedown', () => {
            isSeeking = true;
        });

        // Khi người dùng kéo thanh tua
        seekBar.addEventListener('input', () => {
            timeCurrent.textContent = formatTime(seekBar.value);
        });

        // Khi người dùng thả chuột xong thì cập nhật audio
        seekBar.addEventListener('change', () => {
            audio.currentTime = seekBar.value;
            isSeeking = false;
        });

        // Đảm bảo icon đúng khi bài hát kết thúc
        audio.addEventListener('ended', () => {
            playPauseIcon.classList.remove('fa-pause');
            playPauseIcon.classList.add('fa-play');
        });

        seekBar.addEventListener('touchstart', () => {
            isSeeking = true;
        });
        seekBar.addEventListener('touchend', () => {
            isSeeking = false;
        });

        const contextMenu = document.getElementById('contextMenu');

        document.querySelectorAll('.song-item').forEach(item => {
            item.addEventListener('contextmenu', function(e) {
                e.preventDefault();

                // Hiển thị tạm để đo kích thước
                contextMenu.style.display = 'block';
                contextMenu.style.visibility = 'hidden';

                const submenu = contextMenu.querySelector('.submenu');

                let left = e.pageX;
                let top = e.pageY;

                submenu.classList.add('left'); // mở sang trái

                contextMenu.style.left = left + 'px';
                contextMenu.style.top = top + 'px';
                contextMenu.style.visibility = 'visible';
            });
        });

        // Click ngoài thì ẩn menu
        window.addEventListener('click', function() {
            contextMenu.style.display = 'none';
        });

        function copyLyrics() {
            const lyricsElement = document.getElementById("lyricsContent");
            const tempText = lyricsElement.innerText;

            navigator.clipboard.writeText(tempText).then(() => {
                toastr.success("Lyrics copied to clipboard!");
            }).catch(err => {
                toastr.error("Failed to copy lyrics: " + err);
            });
        }
    </script>

    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('one-music-gh-pages/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('one-music-gh-pages/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('one-music-gh-pages/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('one-music-gh-pages/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('one-music-gh-pages/js/active.js') }}"></script>


    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof toastr !== 'undefined') {
                    let errorMsg = @json($errors->all());

                    if (Array.isArray(errorMsg)) {
                        errorMsg = errorMsg.filter(e => e).join('<br>'); // nối các lỗi bằng <br>
                    } else if (typeof errorMsg !== 'string') {
                        errorMsg = String(errorMsg);
                    }

                    if (errorMsg) {
                        toastr.error(errorMsg, null, {
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            closeButton: true,
                            escapeHtml: false
                        });
                    }
                } else {
                    console.warn('toastr is not loaded.');
                }
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            let errorMsg = {!! json_encode(session('error')) !!};
            if (Array.isArray(errorMsg)) {
                errorMsg = errorMsg.join('<br>'); // nối các lỗi bằng thẻ <br>
            }
            toastr.error(errorMsg, null, {
                timeOut: 5000,
                extendedTimeOut: 2000,
                closeButton: true,
                escapeHtml: false
            });
        </script>
    @endif




</body>

</html>
