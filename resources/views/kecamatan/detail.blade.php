@extends('layout.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="fas fa-user"></i> Daftar Siswa</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <a href="{{ route('kecamatan')}}" class="btn btn-secondary mb-3"><i class="mr-2"></i>Kembali</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
