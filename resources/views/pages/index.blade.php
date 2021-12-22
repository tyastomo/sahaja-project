@extends('welcome')

@section('layout')
      <div class="page-header page-header" id="home">
        <div class="page-header-image" data-parallax="true" style="background-image: url('images/herobg.JPG');">
        </div>
        <div class="content-center">
          <div class="container-fluid">
            <h1 class="title">Sahaja Islamic Wedding Organizer</h1>
            <div class="text-center">
              <h4 class="font-weight-light font-italic">"Secure the Barokah of Your Islamic Wedding Party"</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-about-us" id="profil">
        <div class="container">
          <div class="row">
            <div class="col-md-10 ml-auto mr-auto text-center">
              <h2 class="title">Siapa Kami?</h2>
              <h5 class="description">Sahaja sebagai layanan Islamic wedding organizer bertekad untuk menjaga kualitas layanan dengan menanamkan nilai-nilai islam sebagai landasan dalam bekerja. Kami berkomitmen memberikan layanan prima melalui kekompakan, kompetensi, dan komitmen tim demi menjaga pesta pernikahan impian yang sesuai dengan syariat Islam.</h5>
            </div>
          </div>
          <div class="separator separator-primary"></div>
        </div>
      </div>
      <div class="section section-team text-center" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.342), rgba(117, 19, 93, 0.73)), url('images/secbg.JPG');background-size: cover;" id="produk">
        <div class="container">
          <h2 class="title text-white">Temukan Kualitas Kami, <br/>dan tentukan pilihan Anda</h2>
          <div class="team">
            <div class="row mt-4">
              @foreach($data as $key => $product)
              <div class="col-md-4">
                  <div class="card rounded-lg bg-warning text-white">
                      <div class="card-header my-4">
                          <h3 class="card-title font-weight-bold">{{$product->name}}</h3>
                      </div>
                      <div class="card-body bg-white text-secondary">
                          <h4 class="card-subtitle mb-2 text-primary"> @currency($product->price)</h4>
                          {{-- <span>Paket Khusus Acara</span> --}}
                          <hr class="w-50"/>
                          <p class="font-weight-bold text-primary">{{$product->category->name}}</p>
                          <hr class="w-50"/>

                          <p class="card-text mt-4">Maksimal 100 tamu</p>
                          <p class="card-text">5 orang tim WO</p>
                          <p class="card-text">10 Buku panduan</p>
                          <p class="card-text">Layanan Konsultasi</p>
                          <p class="card-text">Technical Meeting</p>
                          <p class="card-text">8 Jam Durasi Layanan</p>
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="col-6">
                              <a class="btn btn-primary btn-round" href="{{route('product.page', ["id" => $product->uuid])}}">
                                  PILIH LAYANAN
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
              {{-- <div class="col-md-4">
                  <div class="card rounded-lg bg-warning text-white">
                      <div class="card-header my-4">
                          <h3 class="card-title font-weight-bold">Sahaja B</h3>
                      </div>
                      <div class="card-body bg-white text-secondary">
                          <h4 class="card-subtitle mb-2 text-primary">Rp. 7.000.000</h4>
                          <hr class="w-50"/>
                          <p class="font-weight-bold text-primary">AKAD & RESEPSI</p>
                          <hr class="w-50"/>

                          <p class="card-text mt-4">Maksimal 300 tamu</p>
                          <p class="card-text">7 orang tim WO</p>
                          <p class="card-text">15 Buku panduan</p>
                          <p class="card-text">Layanan Konsultasi</p>
                          <p class="card-text">Technical Meeting</p>
                          <p class="card-text">12 Jam Durasi Layanan</p>
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="col-6">
                              <button class="btn btn-primary btn-round" type="button">
                                  PILIH LAYANAN
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card rounded-lg bg-warning text-white">
                      <div class="card-header my-4">
                          <h3 class="card-title font-weight-bold">Sahaja C</h3>
                      </div>
                      <div class="card-body bg-white text-secondary">
                          <h4 class="card-subtitle mb-2 text-primary">Rp. 5.500.000</h4>
                          <hr class="w-50"/>
                          <p class="font-weight-bold text-primary">RESEPSI</p>
                          <hr class="w-50"/>

                          <p class="card-text mt-4">Maksimal 300 tamu</p>
                          <p class="card-text">6 orang tim WO</p>
                          <p class="card-text">15 Buku panduan</p>
                          <p class="card-text">Layanan Konsultasi</p>
                          <p class="card-text">Technical Meeting</p>
                          <p class="card-text">10 Jam Durasi Layanan</p>
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="col-6">
                              <button class="btn btn-primary btn-round" type="button">
                                  PILIH LAYANAN
                              </button>
                          </div>
                      </div>
                  </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contact-us text-center" id="kontak">
        <div class="container">
          <h2 class="title">Kirim pesan pada Kami</h2>
          <p class="description">Kami menunggu perbincangan dengan Anda!</p>
          <div class="row">
            <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Nama...">
              </div>
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Email...">
              </div>
              <div class="textarea-container">
                <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Tulis Pesan...."></textarea>
              </div>
              <div class="send-button">
                <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Kirim Pesan</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endsection
