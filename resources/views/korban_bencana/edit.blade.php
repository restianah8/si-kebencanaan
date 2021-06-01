@extends('layout.template')

@section('title')
    edit data kerusakan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>edit data kerusakan</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      <!-- Credit Card -->
                      <div id="pay-invoice">
                          <div class="card-body">

                            <form action="/dashboard/korban_bencana/edit/{{ $korban_bencana->id }}" method="post" novalidate="novalidate">
                              @csrf
                              @method('PUT')


                                <div class="form-group">
                                    <label for="kejadian_bencana">kejadian_bencana:</label>
                                    <select name="id_kejadian_bencana" id="kejadian_bencana" class="form-control">
                                        @foreach ($kejadian_bencana as $item)
                                        <option value="{{ $item->id }}" >{{ $item->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dampak_bencana">dampak_bencana:</label>
                                    <select name="id_dampak_bencana" id="dampak_bencana" class="form-control">
                                        @foreach ($dampak_bencana as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="laki_laki">laki_laki:</label>
                                    <input type="text" name="laki_laki" value="{{ $korban_bencana->laki_laki }}" id="laki_laki" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="perempuan">perempuan:</label>
                                    <input type="text" name="perempuan" value="{{ $korban_bencana->perempuan }}" id="perempuan" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah:</label>
                                    <input type="text" name="jumlah" value="{{ $korban_bencana->jumlah }}" id="jumlah" class="form-control" required="required">
                                </div>


                                <div class="form-group text-right">
                                    <input type="submit" value="simpan Data" class="btn btn-primary">
                                </div>
                              </form>
                          </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

