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
                        <form action="{{ route('cows.store')}}" method="POST">
                        @csrf {{ method_field('POST')}}
                        <td></td>
                        <td><input type="text" class="form-control" name="kode_sapi"></td>
                        <td width="150">
                        <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin">
                            <option value="Betina">Betina</option>
                            <option value="Jantan">Jantan</option>
                        </select>
                        </td>
                        <td><input type="date" class="form-control" name="tgl_lahir"></td>
                        <td><input type="number" class="form-control" min="0" name="umur"></td>
                        <td><input type="number" class="form-control" min="0" name="bobot"></td>
                        <td>
                            <button class="btn btn-primary" type="submit">Create</button>
                        </td>
                        </form>
                    </tr>
                    <?php $a=1;?>
                    @foreach($cows as $cow)
                    <tr>
                        <td> <?= $a++?></td>
                        <td>{{ $cow->kode_sapi }}</td>
                        <td>{{ $cow->jenis_kelamin }}</td>
                        <td>{{ $cow->tgl_lahir }}</td>
                        <td>{{ $cow->umur }}</td>
                        <td>{{ $cow->bobot }}</td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger mt-2">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
