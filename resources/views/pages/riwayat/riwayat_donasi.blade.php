@extends('layouts.app')

@section('title', 'Riwayat Donasi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Riwayat Donasi</h1>
                <div class="section-header-button">
                    <a href="features-post-create.html"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Riwayat Donasi</a></div>
                    <div class="breadcrumb-item">All Riwayat Donasi</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Riwayat Donasi</h2>
                <p class="section-lead">
                    You can manage all Riwayat Donasi, such as editing, deleting and more.
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
                                            <th>Foto Makanan</th>
                                            <th>Berat Makanan</th>
                                            <th>Jenis Makanan</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>agus</td>
                                            <td>082112345678</td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ asset('img/avatar/avatar-5.png') }}"
                                                        width="35"
                                                        data-toggle="title"
                                                        title="">
                                                </a>
                                            </td>
                                            <td>3</td>
                                            <td>Bahan Makanan</td>
                                            <td>3 mei</td>
                                            <td>
                                                <div class="badge badge-primary">Selesai</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>mila</td>
                                            <td>0832756332</td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ asset('img/avatar/avatar-5.png') }}"
                                                        width="35"
                                                        data-toggle="title"
                                                        title="">
                                                </a>
                                            </td>
                                            <td>1</td>
                                            <td>Sisa Makanan</td>
                                            <td>9 april</td>
                                            <td>
                                                <div class="badge badge-danger">Ditolak</div>
                                            </td>
                                        </tr>
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
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
