@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-button">
                    <a href="features-post-create.html"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Users</h2>
                <p class="section-lead">
                    You can manage all Users, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All User</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form method="GET" action="{{route('users.index')}}">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>ID</th>
                                            <th>Foto Profil</th>
                                            <th>Nama</th>
                                            <th>Nomor Hp</th>
                                            <th>Alamat</th>
                                            <th>Rekening</th>
                                            <th>Poin</th>
                                            <th>Rupiah</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id}}</td>
                                            <td>{{ $user->foto_profil}}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->no_hp}}</td>
                                            <td>{{ $user->alamat}}</td>
                                            <td>{{ $user->rekening}}</td>
                                            <td>{{ $user->poin}}</td>
                                            <td>{{ $user->rupiah}}</td>
                                            <td>{{ $user->created_at}}</td>
                                            <td>
                                                <a href="#editusersmodal{{ $user->id }}" class="badge btn badge-primary" data-toggle="modal" title="edit"><span>Edit</span></a>

                                                <a href="{{ route('users.destroy', $user->id) }}"
                                                    class="badge btn badge-danger"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-user-form-{{ $user->id }}').submit();"
                                                    title="delete">Hapus</a>

                                                <form id="delete-user-form-{{ $user->id }}"
                                                    action="{{ route('users.destroy', $user->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                   {{$users->withQueryString()->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Edit Users Modal --}}
    <div id="editusersmodal{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editusersmodal{{ $user->id }}Title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editusersmodal{{ $user->id }}Title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="poin">poin</label>
                            <input type="text" class="form-control" id="poin" name="poin" value="{{ $user->poin }}" required>
                        </div>
                        <div class="form-group">
                            <label for="rupiah">Rupiah</label>
                            <input type="text" class="form-control" id="rupiah" name="rupiah" value="{{ $user->rupiah }}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Delete Users Modal --}}


@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script>
        $('#deleteUserModal{{ $user->id }}').on('hidden.bs.modal', function (e) {
            $(this).find('form').trigger('reset');
        });
    </script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
