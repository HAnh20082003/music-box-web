@extends('layouts.user')
@section('title', config('constants.web_name') . ' - My playlist')

@section('content')
    <style>
        /* Đổi màu hover của dropdown-item */
        #playlistContextMenu .dropdown-item:hover {
            background-color: #343a40 !important;
            /* Xám đậm */
            color: #fff !important;
        }
    </style>


    <section class="latest-albums-area section-padding-100" style="background-color: #1e1e2f;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="text-white">
                            <i class="fa fa-user-circle me-2 text-primary"></i>
                            My Albums/Songs
                        </h2>
                        <p class="text-muted mb-0">These are the songs and albums you've uploaded.</p>
                    </div>
                </div>
            </div>

            <!-- Search & Create Button -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="p-3 rounded d-md-flex justify-content-between align-items-center flex-wrap"
                        style="background-color: #16161f; border: 1px solid #fff;">

                        <!-- Search input + icon -->
                        <div class="input-group me-md-3 mb-3 mb-md-0" style="max-width: 400px;">
                            <input type="text" class="form-control bg-dark text-white"
                                placeholder="Search albums/songs...">
                            <button class="btn btn-outline-light border-white" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>

                        <!-- Action buttons (Create + Delete) -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#uploadMusicModal">
                                <i class="fa fa-upload me-1"></i> Upload New
                            </button>
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#aiMusicModal">
                                <i class="fa fa-robot me-1"></i> Make Music with AI
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu chuột phải -->
            <ul id="playlistContextMenu" class="dropdown-menu bg-dark"
                style="display: none; position: absolute; z-index: 1050;">
                <li><a class="dropdown-item text-warning" href="#" onclick="editAlbumsSongs()">Edit</a></li>
                <li><a class="dropdown-item text-danger" href="#" onclick="deleteAlbumsSongs()">Delete</a></li>
            </ul>

            <!-- Playlist Grid (2 rows x 3 cols = 6 items/page) -->
            <div class="row g-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-4">
                        <div class="single-album bg-dark p-3 rounded position-relative playlist-item"
                            data-id="{{ $i }}" data-is-album="1">
                            <a href="#">
                                <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid rounded mb-2">
                                <div class="album-info">
                                    <h5 class="text-white">Playlist #{{ $i + 1 }}</h5>
                                    <p>Example Song</p>
                                    {{-- <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> {{ rand(1, 20) }}k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> {{ rand(100, 5000) }} likes
                                    </p> --}}
                                </div>
                            </a>

                        </div>
                    </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link bg-dark text-white border-secondary" href="#"
                                    tabindex="-1">&laquo;</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link bg-primary text-white border-primary" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark text-white border-secondary" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark text-white border-secondary" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark text-white border-secondary" href="#">&raquo;</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="uploadMusicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white">
                        <i class="fa fa-upload me-2 text-success"></i> Upload Music / Album
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label" id="titleLabel">Song Title</label>
                            <input type="text" class="form-control bg-dark text-white border-white" name="titleInput"
                                id="titleInput" placeholder="Enter song title" required>
                        </div>


                        <!-- Cover Image -->
                        <div class="mb-3">
                            <label class="form-label">Cover Image</label>
                            <input type="file" class="form-control bg-dark text-white border-white" name="cover"
                                accept="image/*" id="coverInput">
                            <div class="mt-3 text-center">
                                <img id="coverPreview" src="#" alt="Preview"
                                    style="display: none; max-width: 100%; max-height: 200px; border-radius: 8px; border: 1px solid white;">
                            </div>
                        </div>

                        <!-- Checkbox: Đây là album -->
                        <div style="margin-left: 30px; margin-bottom: 10px;">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <input class="form-check-input" type="checkbox" id="isAlbumSwitch">
                                <label class="form-check-label mb-0" for="isAlbumSwitch">This is an album</label>
                            </div>
                        </div>

                        <!-- Nếu KHÔNG phải album: hiện tiêu đề bài hát + file -->
                        <div id="singleSongArea">
                            <div class="mb-3">
                                <label class="form-label">Song File</label>
                                <input type="file" class="form-control bg-dark text-white border-white"
                                    name="song_file" accept="audio/*">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-upload me-1"></i> Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="aiMusicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white border-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white">
                        <i class="fa fa-robot me-2 text-primary"></i> Create Music with AI
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">AI Prompt</label>
                            <textarea class="form-control bg-dark text-white border-white" name="prompt"
                                placeholder="Describe the style, instruments, mood..." rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <select class="form-select bg-dark text-white border-white" name="genre">
                                <option value="lofi">Lo-fi</option>
                                <option value="hiphop">Hip Hop</option>
                                <option value="pop">Pop</option>
                                <option value="edm">EDM</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-magic me-1"></i> Generate
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        let currentAlbumSongId = null;
        let isAlbum = null;

        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll('.playlist-item');
            const contextMenu = document.getElementById('playlistContextMenu');

            items.forEach(item => {
                item.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                    currentAlbumSongId = item.dataset.id;
                    isAlbum = item.dataset.isAlbum === '1';

                    // Hiện menu tại vị trí chuột
                    contextMenu.style.top = `${e.pageY}px`;
                    contextMenu.style.left = `${e.pageX}px`;
                    contextMenu.style.display = 'block';
                });
            });

            // Ẩn menu khi click bên ngoài
            document.addEventListener('click', function(e) {
                if (!e.target.closest('#playlistContextMenu')) {
                    contextMenu.style.display = 'none';
                }
            });
        });

        function deleteAlbumsSongs() {
            const contextMenu = document.getElementById('playlistContextMenu');
            contextMenu.style.display = 'none';

            Swal.fire({
                title: isAlbum ? 'Delete album?' : 'Delete song?',
                text: (isAlbum ? 'Are you sure you want to delete album' : 'Are you sure you want to delete song') +
                    " #" + currentAlbumSongId + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Xoá',
                cancelButtonText: 'Huỷ'
            }).then((result) => {
                if (result.isConfirmed) {
                    // TODO: xử lý xoá ở đây
                    Swal.fire('Đã xoá!', isAlbum ? 'Delete album success' : 'Delete song success', 'success');
                }
            });
        }
    </script>

    <script>
        const isAlbumSwitch = document.getElementById('isAlbumSwitch');
        const singleSongArea = document.getElementById('singleSongArea');

        isAlbumSwitch.addEventListener('change', function() {
            const label = document.getElementById('titleLabel');
            const input = document.getElementById('titleInput');
            if (this.checked) {
                label.textContent = 'Album Title';
                input.placeholder = 'Enter album title';
                singleSongArea.classList.add('d-none');
            } else {
                label.textContent = 'Song Title';
                input.placeholder = 'Enter song title';
                singleSongArea.classList.remove('d-none');
            }
        });
        document.getElementById('coverInput').addEventListener('change', function(e) {
            const preview = document.getElementById('coverPreview');
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                preview.src = '#';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
