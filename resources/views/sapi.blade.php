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
                        <td class="d-flex">
                            <a class="btn btn-warning d-inline" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$cow->kode_sapi}}" data-id="{{$cow->kode_sapi}}">Edit</a>
                            <form action="{{ route('cows.destroy',$cow->kode_sapi) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-2 px-4">Delete</button>
                            </form>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-dark">
      <div class="modal-header text-dark">
        <h5 class="modal-title text-dark" id="exampleModalLabel">New message</h5>
        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-form" action="" method="POST">
            @csrf
            @method('PUT')
          <div class="form-row">
            <div class="col-lg-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="custom-select" name="jenis_kelamin" id="inputGroupSelect01">
                    <option selected id="jk" value="Jantan"></option>
                    <option value="Jantan">Jantan</option>
                    <option value="Betina">Betina</option>
                    
                </select>
            </div>
            <div class="col-lg-6">
                <label for="tgl_lahir">tgl_lahir</label>
                <input class="form-control" type="date" value="" name="tgl_lahir" id="tgl_lahir">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6">
                <label for="umur">umur</label>
                <input class="form-control" type="number" value="" name="umur" id="umur">
            </div>
            <div class="col-lg-6">
                <label for="bobot">bobot</label>
                <input class="form-control" type="number" value="" name="bobot" id="bobot">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">save</button>
      </div>
        </form>
    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('/js/script.js') }}"></script>
@endsection
