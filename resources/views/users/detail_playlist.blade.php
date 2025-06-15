@extends('layouts.user')
@section('title', config('constants.web_name') . ' - Detail playlist')

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
                            My playlists
                        </h2>
                        <p class="text-muted mb-0">Browse and manage your personal playlists.</p>
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
                            <input type="text" class="form-control bg-dark text-white" placeholder="Search playlists...">
                            <button class="btn btn-outline-light border-white" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>

                        <!-- Action buttons (Create + Delete) -->
                        <div class="d-flex gap-2">
                            <a onclick="openCreateModal()" class="btn btn-dark border-white text-white"
                                data-bs-toggle="modal" data-bs-target="#createPlaylistModal">
                                <i class="fa fa-plus me-1"></i> Create New Playlist
                            </a>
                            <button class="btn btn-danger" id="deleteSelectedBtn" disabled>
                                <i class="fa fa-trash me-1"></i> Delete Selected
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu chuột phải -->
            <ul id="playlistContextMenu" class="dropdown-menu bg-dark"
                style="display: none; position: absolute; z-index: 1050;">
                <li><a class="dropdown-item text-warning" href="#" onclick="editPlaylist()">Edit</a></li>
                <li><a class="dropdown-item text-danger" href="#" onclick="deletePlaylist()">Delete</a></li>
            </ul>

            <!-- Playlist Grid (2 rows x 3 cols = 6 items/page) -->
            <div class="row g-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-4">
                        <div class="single-album bg-dark p-3 rounded position-relative playlist-item"
                            data-id="{{ $i }}">
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
                                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="createPlaylistModal" tabindex="-1" aria-labelledby="createPlaylistModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white border-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="createPlaylistModalLabel">
                        <i class="fa fa-music me-2 text-primary"></i> Create New Playlist
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form id="playlistForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="playlist_id" id="playlistId"> <!-- Chỉ cần khi chỉnh sửa -->
                    <div class="modal-body">
                        <!-- Playlist Name -->
                        <div class="mb-3">
                            <label for="playlistName" class="form-label">Playlist Name</label>
                            <input type="text" class="form-control bg-dark text-white border-white" id="playlistName"
                                name="name" placeholder="Enter playlist name" required>
                        </div>

                        <!-- Playlist Image -->
                        <div class="mb-3">
                            <label for="playlistImage" class="form-label">Playlist Image</label>
                            <input type="file" class="form-control bg-dark text-white border-white" id="playlistImage"
                                name="image" accept="image/*">
                            <!-- Preview Image -->
                            <div class="mb-3 d-flex justify-content-center">
                                <img id="previewImage" src="#" alt="Preview"
                                    style="display: none; max-width: 100%; max-height: 200px; border-radius: 8px; border: 1px solid white; margin-top: 20px;">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check me-1"></i> Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        const modal = bootstrap.Modal.getOrCreateInstance(document.getElementById("createPlaylistModal"));
        document.getElementById('playlistImage').addEventListener('change', function(event) {
            const input = event.target;
            const preview = document.getElementById('previewImage');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });

        let currentPlaylistId = null;

        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll('.playlist-item');
            const contextMenu = document.getElementById('playlistContextMenu');

            items.forEach(item => {
                item.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                    currentPlaylistId = item.dataset.id;

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

        function deletePlaylist() {
            const contextMenu = document.getElementById('playlistContextMenu');
            contextMenu.style.display = 'none';

            Swal.fire({
                title: 'Delete playlist?',
                text: 'Are you sure you want to delete playlist #' + currentPlaylistId + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Xoá',
                cancelButtonText: 'Huỷ'
            }).then((result) => {
                if (result.isConfirmed) {
                    // TODO: xử lý xoá ở đây
                    Swal.fire('Đã xoá!', 'Playlist đã được xoá.', 'success');
                }
            });
        }

        function openCreateModal() {
            // Reset form
            document.getElementById("playlistForm").reset();
            document.getElementById("previewImage").style.display = "none";
            document.getElementById("createPlaylistModalLabel").innerHTML =
                '<i class="fa fa-music me-2 text-primary"></i> Create New Playlist';
            document.getElementById("playlistForm").action = '/playlists'; // hoặc route('playlists.store')
            document.querySelector("input[name='_method']")?.remove(); // Nếu có hidden input PUT thì xóa
            document.getElementById("playlistId").value = '';
            document.querySelector("#playlistForm button[type='submit']").innerHTML =
                '<i class="fa fa-check me-1"></i> Create';
            document.querySelector("#playlistForm button[type='submit']").classList.remove('btn-warning');
            document.querySelector("#playlistForm button[type='submit']").classList.add('btn-success');

            modal.show();
        }



        function editPlaylist() {
            document.getElementById("playlistId").value = currentPlaylistId;

            //fetch

            document.getElementById("createPlaylistModalLabel").innerHTML =
                '<i class="fa fa-edit me-2 text-warning"></i> Edit Playlist';

            document.getElementById("playlistForm").action = '/playlists/' +
                currentPlaylistId; // route('playlists.update', playlist.id)

            // Thêm method spoofing cho PUT
            if (!document.querySelector("input[name='_method']")) {
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = "_method";
                input.value = "PUT";
                document.getElementById("playlistForm").appendChild(input);
            }
            document.querySelector("#playlistForm button[type='submit']").innerHTML =
                '<i class="fa fa-save me-1"></i> Save Changes';
            document.querySelector("#playlistForm button[type='submit']").classList.remove('btn-success');
            document.querySelector("#playlistForm button[type='submit']").classList.add('btn-warning');

            modal.show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
