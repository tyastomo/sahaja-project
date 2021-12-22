@extends('welcome')

@section('layout')
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.342), rgba(117, 19, 93, 0.73)), url('images/herobg.JPG');background-size: cover;">
    </div>
    <div class="content-center">
        <div class="container-fluid">
        <h1 class="title">{{ $data->name }}</h1>
        {{-- <div class="text-center">
            <h4 class="font-weight-light font-italic">"Secure the Barokah of Your Islamic Wedding Party"</h4>
        </div> --}}
        </div>
    </div>
</div>
<div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto text-center">
          <h2 class="title">Layanan {{ $data->name }}</h2>
        </div>

        <div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div>
        <div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div><div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div><div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div><div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div>
        <div class="col-md-4 ml-auto mr-auto text-center my-2">
            <button class="btn btn-primary btn-icon btn-lg btn-round" type="button">
                <i class="fas fa-users"></i>
            </button>
            <p> Jumlah tamu 100 Orang</p>
        </div>

      </div>
      <div class="separator separator-primary"></div>
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center bg-grey">
            <div class="card">
				<form method="POST" action="/product/{{ $data->uuid }}/order-cek" enctype="multipart/form-data">
                @csrf
				@method('POST')
					<div class="card-body">
						<h5 class="card-title">Pesan Paket</h5>
						<h6 class="card-subtitle mb-4 text-muted">Cek Ketersediaan</h6>
						<div class="form-group my-4 mx-4 px-4 spacer">
							<label for="" class="text-left">Lokasi Acara</label>
							<select class="form-control" name="lokasi">
								<option value="" selected>Pilih</option>
								@foreach($locations as $key => $location)
								<option value="{{ $location->uuid }}">{{ $location->location_code }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group my-4 mx-4 px-4">
							<label for="">Tanggal Acara</label>
								<div class="form-group">
									<input type="date" class="form-control" name="tanggal">
								</div>
						</div>
						<div class="form-group my-4 mx-4 px-4 spacer">
							<label for="" class="text-left">Waktu Acara</label>
							<select class="form-control" name="waktu">
								<option value="" selected>Pilih</option>
								@foreach($times as $key => $time)
								<option value="{{ $time->uuid }}">{{ \Carbon\Carbon::createFromFormat('H:i:s', $time->start_hour)->format('h:i')}} WIB - {{ \Carbon\Carbon::createFromFormat('H:i:s', $time->end_hour)->format('h:i')}} WIB</option>
								@endforeach
							</select>
						</div>
						<button class="btn btn-primary btn-outline-primary btn-round" type="submit">Cek Ketersediaan</button>
					</div>
				</form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
