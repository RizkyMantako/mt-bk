@extends('layouts.app')

@section('title', 'Sampah')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Sampah</h1>
            <div class="section-header-button">
                <a href="features-post-create.html" class="btn btn-primary">Add New</a>
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
                                <form method="GET" action="{{ route('sampah.sampah') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
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
                                    @foreach ($sampahs as $bin)
                                    <tr>
                                        <td>{{ $bin->user_id }}</td>
                                        <td>{{ $bin->nama }}</td>
                                        <td>{{ $bin->no_hp }}</td>
                                        <td>{{ $bin->alamat }}</td>
                                        <td>
                                            <a href="#">
                                                <img alt="image" src="{{ $bin->foto_sampah }}" width="35"
                                                    data-toggle="title" title="">
                                            </a>
                                        </td>
                                        <td>{{ $bin->deskripsi }}</td>
                                        <td>{{ $bin->berat_sampah }}</td>
                                        <td>{{ $bin->created_at }}</td>
                                        <td>
                                            {{-- <div class="btn badge badge-primary">Verikasi</div>
                                            <div class="mt-2 btn badge badge-danger">Tolak</div> --}}

                                            <a href="#" class="badge btn badge-primary edit-bin-link"
                                                data-toggle="modal" data-target="#verifSampahsmodal"
                                                data-bin-id="{{ $bin->id }}" title="edit">
                                                <span>Verifikasi</span>
                                            </a>
                                            <a href="#" class="badge btn badge-primary tolak-bin-link"
                                                data-toggle="modal" data-target="#verifSampahsmodal"
                                                data-bin-id="{{ $bin->id }}" title="edit">
                                                <span>Tolak</span>
                                            </a>

                                        </td>
                                        @endforeach
                                    </tr>
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
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
                                            <a class="page-link" href="#" aria-label="Next">
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


    <div id="verifSampahsmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="verifSampahsmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="proses-sampah-verifikasi-form" action="" method="POST">
                    @csrf
                    @method('put')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editusersmodalTitle">Verifikasi Sampah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="status" name="status" value=terverifikasi>
                        <div class="form-group">
                            <label for="rupiah">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"
                                required></textarea>
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
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-posts.js') }}"></script>

<script>
        $('.edit-bin-link').on('click', function() {
            var binId = $(this).data('bin-id');
            var formAction = '/proses_sampah/' + binId ;
            $('#proses-sampah-verifikasi-form').attr('action', formAction);
            $('#proses-sampah-verifikasi-form #status').val('Terverifikasi');

        });
        $('.tolak-bin-link').on('click', function() {
            var binId = $(this).data('bin-id');
            var formAction = '/proses_sampah/' + binId ;
            $('#proses-sampah-verifikasi-form').attr('action', formAction);
            $('#proses-sampah-verifikasi-form #status').val('Ditolak');

        });
</script>
@endpush