@extends('layouts.app')

@section('title', 'Sampah')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sampah</h1>
                <div class="section-header-button">
                    <a href="features-post-create.html"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Sampah</a></div>
                    <div class="breadcrumb-item">All Sampah</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Sampah</h2>
                <p class="section-lead">
                    You can manage all Sampah, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Sampah</h4>
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
                                            <th>Foto Sampah</th>
                                            <th>Deskripsi</th>
                                            <th>Berat sampah</th>
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            {{-- @foreach  ($sampah as $bin) --}}
                                            <td>1</td>
                                            <td>Rizal</td>
                                            <td>08123456789</td>
                                            <td>https://www.google.com/maps/place/Bukit+Baruga+Antang/@-5.1565938,119.4853797,17z/data=!3m1!4b1!4m6!3m5!1s0x2dbee3400c0c1727:0xc749f3fb44786f21!8m2!3d-5.1565938!4d119.4879546!16s%2Fg%2F11gbl32_87?entry=ttu</td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ asset('img/avatar/avatar-5.png') }}"
                                                        width="35"
                                                        data-toggle="title"
                                                        title="">
                                                </a>
                                            </td>
                                            <td>makanan sisa kemarin</td>
                                            <td>4</td>
                                            <td>2 jan</td>
                                            <td>
                                                {{-- <div class="btn badge badge-primary">Verikasi</div>
                                                <div class="mt-2 btn badge badge-danger">Tolak</div> --}}
                                            <a href="{{ route('verifikasi_sampah') }}" class="btn badge badge-primary">Verifikasi</a>
                                            <a href="{{ route('tolak_sampah') }}" class="btn badge badge-primary">Tolak</a>
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
