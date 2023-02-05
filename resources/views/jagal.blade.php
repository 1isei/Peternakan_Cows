@extends('parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
            <div class="card">
            <h5 class="card-header text-left">Rumah Jaggal</h5>
            <div class="card-body" style="overflow:auto;height:600px!important;">
                <table class="table table-bordered table-light text-dark table-striped">
                    <tr>
                        <td>No</td>
                        <td>Kode Sapi</td>
                        <td>Tanggal</td>
                    </tr>
                    <?php $i=1;?>
                    @foreach($sapidistribusi as $sapi)
                    <tr>
                        <td><?= $i++;?></td>
                        <td>{{ $sapi->kode_sapi }}</td>
                        <td>{{ $sapi->tanggal }}</td>
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
