@extends('parent')
@section('content')

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
            <div class="card">
            <h5 class="card-header text-left">Buat Pengeluaran</h5>
            <div class="col-md-6 ml-1"> 
            </div>
            <div class="card-body" style="overflow:auto;height:600px!important;">
                @if (session('create'))
                    <div class="alert alert-success" role="alert">
                        {{ session('create') }}
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('delete') }}
                    </div>
                @endif
                <table class="table table-bordered table-light text-dark table-triped">
                    <tr>
                        <td>No</td>
                        <td>tanggal</td>
                        <td>Jenis Pakan</td>
                        <td>jumlah pangan</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <form action="/pangan3" method="POST">
                            @csrf
                            <td>-</td>
                            <td><input type="date" name="tanggal" class="form-control"></td>
                            <td>
                                <select class="custom-select" id="inputGroupSelect02" name="tipe_pangan">
                                    @foreach ($pakans as $item)
                                        <option value="{{ $item->kode_pangan}}">{{ $item->jenis_pakan}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="jumlah_pangan" min="1">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Create</button>
                            </td>
                        </form>
                    </tr>
                </table>
                <h5 class="text-left">History Pengeluaran</h5>
                <table class="table table-bordered table-light text-dark table-striped">
                    <tr>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Jenis Pangan</td>
                        <td>Jumlah Pangan</td>
                    </tr>

                    @foreach($pengeluaran as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->pangan->jenis_pakan }}</td>
                        <td>{{ $p->jumlah_pangan }}</td>
                    </tr>
                    @endforeach
                </table>
                </table>
                <div class="col">
                    <a href="/pangan" class="btn btn-danger btn-sm">Back</a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>