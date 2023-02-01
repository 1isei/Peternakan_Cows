@extends('parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
            <div class="card">
            <h5 class="card-header text-left">Daftar Sapi</h5>
            <div class="card-body" style="overflow:auto;height:600px!important;">
                <table class="table table-bordered table-light text-dark table-striped">
                    <tr>
                        <td>No</td>
                        <td>Kode Sapi</td>
                        <td>Jenis Kelamin</td>
                        <td>Tanggal Lahir</td>
                        <td>Umur</td>
                        <td>Bobot</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <form action="{{ route('')}}">
                        <td></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                        <td><input type="number" class="form-control" min="0"></td>
                        <td><input type="number" class="form-control" min="0"></td>
                        <td>
                            <a class="btn btn-primary">Create</a>
                        </td>
                        </form>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>00001</td>
                        <td>Jantan</td>
                        <td>02-02-2022</td>
                        <td>1 Tahun</td>
                        <td>30kg</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>00002</td>
                        <td>Jantan</td>
                        <td>02-02-2022</td>
                        <td>1 Tahun</td>
                        <td>30kg</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>00003</td>
                        <td>Jantan</td>
                        <td>02-02-2022</td>
                        <td>1 Tahun</td>
                        <td>30kg</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>00004</td>
                        <td>Jantan</td>
                        <td>02-02-2022</td>
                        <td>1 Tahun</td>
                        <td>30kg</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>00004</td>
                        <td>Jantan</td>
                        <td>02-02-2022</td>
                        <td>1 Tahun</td>
                        <td>30kg</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection