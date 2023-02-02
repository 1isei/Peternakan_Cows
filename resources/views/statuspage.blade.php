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
                                            <a class="btn btn-warning">Edit</a>
                                            <form id="form-delete{{ $s->kode_sapi }}"
                                                action="{{ route('status.destroy', ['status' => $s->kode_sapi]) }}"
                                                method="post" style="display: none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <a href="#" type="submit" class="btn btn-danger mt-2"
                                                onclick="hapus({{ $s->kode_sapi }})">Delete</a>
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

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        function hapus(id) {
            document.getElementById("form-delete" + id).submit();
        }
    </script>
@endsection
