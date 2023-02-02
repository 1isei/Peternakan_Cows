@extends('parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
            <div class="card">
            <h5 class="card-header text-left">Daftar Pangan</h5>
            <div class="col-md-4">
                <a href="/history_pemasukan" class="btn btn-primary btn-sm">Pemasukan</a>
                <a href="/history_pengeluaran" class="btn btn-warning btn-sm">Pengeluaran</a>
            </div>
            <div class="col-md-6 ml-1"> 
            </div>
            <div class="card-body" style="overflow:auto;height:600px!important;">
                <table class="table table-bordered table-light text-dark table-striped">
                    <tr>
                        <td>No</td>
                        <td>Kode Pangan</td>
                        <td>Jenis Pakan</td>
                        <td>stock</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <form action="/pangan" method="POST">
                            @csrf
                            <td>-</td>
                            <td></td>
                            <td>
                                <input type="text" name="jenis_pakan" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="stock" min="1">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Create</button>
                            </td>
                        </form>
                    </tr>
                    @foreach($pangan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode_pangan }}</td>
                        <td>{{ $p->jenis_pakan }}</td>
                        <td>{{ $p->stock }}</td>
                        <td>
                            <form action="/pangan/{{ $p->kode_pangan }}" method="POST">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" onclick="editPangan({{ $p->kode_pangan }})">Edit</button>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Deck?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </table>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-dark">
        <div class="modal-header text-dark">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Pangan</h5>
          <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="edit-segala-macam">

            </div>

        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

<script>

    function editPangan(kode_pangan) {
        $.get('/pangan/' + kode_pangan + '/edit', function (data) {
            $('.edit-segala-macam').html(data);
        })
    }

</script>

@endsection