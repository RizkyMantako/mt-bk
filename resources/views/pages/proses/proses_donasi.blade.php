@extends('layouts.app')

@section('title', 'Proses Donasi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Proses Donasi</h1>
                <div class="section-header-button">
                    <a href="features-post-create.html"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Proses Donasi</a></div>
                    <div class="breadcrumb-item">All Proses Donasi</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Proses Donasi</h2>
                <p class="section-lead">
                    You can manage all Proses Donasi, such as editing, deleting and more.
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
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search">
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
                                            <th>User Id</th>
                                            <th>Nama</th>
                                            <th>Nomor Hp</th>
                                            <th>Alamat</th>
                                            <th>Foto Makanan</th>
                                            <th>Jenis Donasi</th>
                                            <th>Berat Makanan</th>
                                            <th>Deskripsi</th>
                                            <th>Created_at</th>
                                            <th>Update Poin</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($proses_donasi as $vdonasi)
                                        <tr>
                                            <td>{{ $vdonasi->user_id }}</td>
                                            <td>{{ $vdonasi->nama }}</td>
                                            <td>{{ $vdonasi->no_hp }}</td>
                                            <td>{{ $vdonasi->alamat }}</td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ $vdonasi->foto_makanan }}"
                                                        width="35"
                                                        data-toggle="title"
                                                        title="">
                                                </a>
                                            </td>
                                            <td>{{ $vdonasi->jenis_donasi }}</td>
                                            <td>{{ $vdonasi->berat_makanan }}</td>
                                            <td>{{ $vdonasi->deskripsi }}</td>
                                            <td>{{ $vdonasi->created_at }}</td>
                                            <td>
                                                <a href="#editprosesdonasi" class="badge btn badge-warning" data-toggle="modal" title="edit poin">Edit Poin</a>
                                            </td>
                                            <td>
                                                <div class="badge badge-primary">Selesai</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- edit button poin --}}
    <div id="editprosesdonasi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Poin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Point</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
