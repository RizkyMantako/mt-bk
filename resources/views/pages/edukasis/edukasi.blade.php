@extends('layouts.app')

@section('title', 'Edukasi')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edukasi</h1>
            <div class="section-header-button">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmodal" title="add">
                    <span>Add New</span>
                </a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Edukasi</a></div>
                <div class="breadcrumb-item">All Edukasi</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Edukasi</h2>
            <p class="section-lead">
                You can manage all Edukasi, such as editing, deleting and more.
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
                                <form method="GET" action="{{ route('edukasis.edukasi') }}">
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
                                        <th>Id</th>
                                        <th>Sampul</th>
                                        <th>Judul</th>
                                        <th>Link</th>
                                        <th>Deskripsi</th>
                                        <th>tags</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        @foreach ($education as $edu)
                                        <td>{{ $edu->id }}</td>
                                        <td>
                                            <a href="#">
                                                <img alt="image" src="{{ $edu->sampul_link ?? asset('img/avatar/avatar-5.png') }}" width="35"
                                                    data-toggle="title" title="">
                                            </a>
                                        </td>
                                        <td>{{ $edu->judul }}</td>
                                        <td>{{ $edu->link_url }}</td>
                                        <td>{{ $edu->deskripsi }}</td>
                                        <td>
                                            @if (count(json_decode($edu->tags)) > 0)
                                            @foreach (json_decode($edu->tags) as $index => $tag)
                                            {{ $tag }}
                                            @if ($index < count(json_decode($edu->tags)) - 1)
                                                ,
                                                @endif
                                                @endforeach
                                                @endif
                                        </td>
                                        <td>{{ $edu->created_at }}</td>
                                        <td>
                                            <p>{{ $edu->sampul_link }}</p>
                                        </td>
                                        <td>


                                            <div class="container text-center">
                                                <div class="row align-items-start">
                                                    <div class="col  mt-2">
                                                        <div class=" badge btn badge-primary">Edit Berita</div>
                                                    </div>
                                                    <div class=" mt-2 col">
                                                        <div class=" badge btn badge-danger">Hapus Berita</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
    {{-- Edit Users Modal --}}

    <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="formEdukasi" action="{{ route('edukasis.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addmodalTitle">Tambah Edukasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="sampul">Sampul</label>
                            <input type="file" class="form-control" id="sampul" name="sampul" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="link_url">Link Url</label>
                            <input type="text" class="form-control" id="link_url" name="link_url" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="" cols="30" rows="10" class="form-control" id="deskripsi"
                                name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Tags</label>
                            <input class="form-control" type="text" data-role="tagsinput" name="tags">
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
@endpush