@extends('parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="background-image: url('landing-page/img/preview.jpg');">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Selamat Datang di Website Peternakan Sapi !</h1>
                <p class="lead py-3">Dalam website ini terdapat informasi tentang peternakan dan juga kondisi dari setiap sapi yang ada</p>
                <a href="/cows"><button type="submit" class="btn btn-primary d-inline-flex flex-row align-items-center">
                    Coba
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
            </div>
        </div>
    </div>
</section>

<!-- features section -->
<section class="pt-6 pb-7" style="background-color: #1de9b6;" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Dalam website ini terdapat fitur fitur :</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="row feature-boxes">
                    <div class="col-md-6 box">
                        <div>
                    <i class="text-dark fa-solid fa-cow fa-2xl"></i>
                    </div><br>
                        <h5>Data Sapi</h5>
                        <div>
                        <p class="text-white">Dalam data sapi terdapat informasi tentang kode sapi, jenis kelamin, tanggal lahir, umur dan bobot sapi.
                            selain itu juga terdapat fitur untuk memasukan, mengedit dan menghapus data sapi tersebut.
                        </p>
                        </div>
                        <a href="/cows"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                    </div>
                    <div class="col-md-6 box">
                        <div>
                    <i class="text-dark fa-sharp fa-solid fa-hospital fa-2xl"></i>
                    </div> <br>
                        <h5>Status Kesehatan</h5>
                        <div>
                        <p class="text-white">Dalam status Kesehatan berisi tentang informasi kondisi kesehatan dari setiap sapi.
                        </p>
                        </div>
                        <br><br><br>
                        <a href="#"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                    </div>
                    <div class="col-md-6 box">
                        <div>
                        <i class="text-dark fa-solid fa-leaf fa-2xl"></i>
                    </div> <br>
                        <h5>Pangan Sapi</h5>
                        <div>
                        <p class="text-white">Dalam pangan sapi terdapat infornasi tentang pangan sapi apa saja yang ada dalam peternakan.
                        </p>
                        </div>
                        <br>
                        <a href="#"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                    </div>
                    <div class="col-md-6 box">
                        <div>
                        <i class="text-dark fa-sharp fa-solid fa-house fa-2xl"></i>
                    </div> <br>
                        <h5>Rumah Jagal</h5>
                        <div>
                        <p class="text-white">Dalam fitur rumah jagal terdapat infromasi tentang sapi yang sudah siap untuk dikirim ke rumah jagal.
                        </p>
                        </div>
                        <a href="#"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                </div>
            </div>
        </div>
</section>
<!-- </section> -->
@endsection
