@extends('parent')
@section('content')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #546E7A;
            line-height: calc(2.6rem + 4px);
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: calc(2.6rem + 4px);
        }

        .select2-container .select2-selection--single {
            height: calc(2.6rem + 4px);
        }

        .select2-container--default .select2-selection--single {
            border: 2px solid #CFD8DC;
        }
    </style>
    <!--hero header-->
    <section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
        <div class="container">
            <div class="row vh-md-100">
                <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
                    <div class="card">
                        <div class="d-flex">
                            <h5 class="card-header text-left">Daftar Sapi</h5>
                            <h5 class="card-header text-left">Sehat: {{ $sehat->count() }}</h5>
                            <h5 class="card-header text-left">Sakit: {{ $sakit->count() }}</h5>
                            <h5 class="card-header text-left">Distribusi: {{ $distribusi->count() }}</h5>
                        </div>
                        <div class="card-body" style="overflow:auto;height:600px!important;">
                            <table class="table table-bordered table-light text-dark table-striped">
                                <tr>
                                    <td>No</td>
                                    <td>Kode Sapi</td>
                                    <td>Status</td>
                                    <td>tanggal</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <form action="{{ route('status.store') }}" method="POST">
                                        @csrf {{ method_field('POST') }}
                                        <td></td>
                                        <td>
                                            <select class="custom-select select2" id="inputGroupSelect02" name="kode_sapi"
                                                style="height: 72.5">
                                                @foreach ($cows as $item)
                                                    <option value="{{ $item->kode_sapi }}">{{ $item->kode_sapi }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td width="150">
                                            <select class="custom-select" id="inputGroupSelect02" name="status_id">
                                                @foreach ($status as $item)
                                                    <option value="{{ $item->id }}">{{ $item->status }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="date" class="form-control" name="tanggal"></td>
                                        <td>
                                            <button class="btn btn-primary" type="submit">Create</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php $a = 1; ?>
                                @foreach ($cow as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->kode_sapi }}</td>
                                        <td>{{ $s->status->status }}</td>
                                        <td>{{ $s->tanggal }}</td>
                                        <td>
                                            <td class="d-flex">
                                                <a class="btn btn-warning d-inline" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$s->id}}" data-id="{{$s->id}}">Edit</a>
                                                <form action="{{ route('status.destroy',$s->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ml-2 px-4">Delete</button>
                                                </form>
                                            </td>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <select class="custom-select" name="status_id" id="inputGroupSelect01">
                                    <option value="1" id="status"></option>
                                    <option value="1">Sehat</option>
                                    <option value="2">Sakit</option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal">tanggal</label>
                                <input class="form-control" type="date" value="" name="tanggal" id="tanggal">
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });

            $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /* When click show user */
            $('body').on('click', '#btnEdit', function () {
                var kodeSapi = $(this).data('id');
                $.get('/status/'+ kodeSapi +'/edit', function (data) {
                    console.log(data);
                    $('#status').html(data[2]);
                    $('#status').val(data[1]);
                    $('#tanggal').val(data[3]);
                    $('#edit-form').attr('action', '/status/'+data[0]);
                })
            });

            });
        </script>
    @endsection
