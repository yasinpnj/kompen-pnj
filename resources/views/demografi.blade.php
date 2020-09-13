@extends('main')
@section('title', 'Dashboard')
    
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<center> <h1  class="h3 mb-2 text-gray-800">Data Demografi Dosen</h1></center>

<div class="card-body">
    {{-- <form action="/dosen/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> --}}
    <div class="form-group">
        <form action="{{url('/demo/data')}}" method="post">
            {{ csrf_field() }}
        <label for="Nama" class="control-label mb-1">Nama</label>
        <input name="nama_dosen" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
        <label for="Prodi" class="control-label mb-1">Prodi</label>
        <input name="prodi" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
        <label for="Jabatan" class="control-label mb-1">Jabatan</label>
        <input name="jabatan" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
       
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">submit</button>
            <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-ban"></i> Reset
            </button>
          </div>
          
    </form>
    </div>
</div>

</div>
@endsection