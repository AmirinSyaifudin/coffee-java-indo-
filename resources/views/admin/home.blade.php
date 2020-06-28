@extends('admin.templates.default')

@section('content')
<h1>COFFEE JAVA</h1>


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">SELAMAT DATANG DAN SELAMAT MENIKMATI</h3>
            {{-- <a href="{{ route('admin.pasien.create') }}" class="btn btn-primary">Tambah Penulis</a> --}}
        </div>
            <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-hover">

                </table>
            </div>
    </div>

@endsection
