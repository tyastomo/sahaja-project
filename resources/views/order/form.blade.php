@extends('welcome')

@section('layout')
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.342), rgba(117, 19, 93, 0.73)), url('images/herobg.JPG');background-size: cover;">
    </div>
    <div class="content-center">
        <div class="container-fluid">
        <h1 class="title">Form Order</h1>
        {{-- <div class="text-center">
            <h4 class="font-weight-light font-italic">"Secure the Barokah of Your Islamic Wedding Party"</h4>
        </div> --}}
        </div>
    </div>
</div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-7 ml-auto mr-auto text-center bg-grey">
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title">Form Pesanan Paket {{ $product->name }}</h5>
                    {{--<h6 class="card-subtitle mb-4 text-muted">Cek Ketersediaan</h6>--}}
                    <div class="form-group my-4 mx-4 px-4 spacer">
                        <label for="" class="text-left">Lokasi Acara</label>
                        {{--<select class="form-control">
                            <option value="" selected>Pilih</option>
                            @foreach($locations as $key => $location)
                            <option value="{{ $location->uuid }}">{{ $location->location_code }}</option>
                            @endforeach
                        </select>--}}
						<input class="form-control" type="text" value="{{ $lokasi->name }}" readonly>
                    </div>
                    <div class="form-group my-4 mx-4 px-4">
                        <label for="">Tanggal Acara</label>
                            <div class="form-group">
                                <input type="date" class="form-control" value="{{$tanggal}}" readonly>
                            </div>
                    </div>
                    <div class="form-group my-4 mx-4 px-4 spacer">
                        <label for="" class="text-left">Waktu Acara</label>
                        {{--<select class="form-control">
                            <option value="" selected>Pilih</option>
                            @foreach($times as $key => $time)
                            <option value="{{ $time->uuid }}">{{ \Carbon\Carbon::createFromFormat('H:i:s', $time->start_hour)->format('h:i')}} WIB - {{ \Carbon\Carbon::createFromFormat('H:i:s', $time->end_hour)->format('h:i')}} WIB</option>
                            @endforeach
                        </select>--}}
						<input type="text" class="form-control" value="{{ $waktu->start_hour }} - {{ $waktu->end_hour }}" readonly>
                    </div>
					<hr>
					<h6 class="text-left ml-4">Jumlah Tamu</h6>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Tambahan Tamu</label>
						<select class="form-control" name="additional" id="additional" onChange="myFunction(this.options[this.selectedIndex].getAttribute('harga'))">
							<option value="" harga="0" selected>Pilih</option>
							@foreach($product->additional as $key => $additional)
							<option value="{{ $additional->uuid }}" harga="{{ $additional->cost }}">{{ $additional->pax}}</option>
							@endforeach
						</select>
					</div>
					<hr>
					<h6 class="text-left ml-4">Detail Pemesan</h6>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Nama Customer</label>
						<input type="text" class="form-control" name="customer">
					</div>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Email Customer</label>
						<input type="email" class="form-control" name="email_customer">
					</div>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Nama Calon Pengantin Pria</label>
						<input type="text" class="form-control" name="cpp">
					</div>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Nama Calon Pengantin Wanita</label>
						<input type="text" class="form-control" name="cpw">
					</div>
					<div class="form-group my-4 mx-4 px-4 spacer">
						<label for="" class="text-left">Detail Alamat</label>
						<textarea class="form-control" name="detail_alamat" rows="4"></textarea>
					</div>
                </div>
            </div>
        </div>
		<div class="col-md-5 ml-auto mr-auto text-center bg-grey">
            <div class="card ">
                <div class="card-body">
					<h5 class="card-title mb-4">Total Biaya</h5>
					<div class="row my-2">
						<div class="col-8 text-left">Harga Paket</div>
						<div class="col-4 font-weight-bold text-left" id="harga-produk" data-produk="{{ $product->price }}">@currency($product->price)</div>
					</div>
					<div class="row my-2">
						<div class="col-8 text-left">Biaya Tambahan</div>
						<div class="col-4 font-weight-bold text-left" id="additional-harga">Rp. </div>
					</div>
					<hr>
					<div class="row my-4">
						<div class="col-8 font-weight-bold text-left">Total Biaya</div>
						<div class="col-4 font-weight-bold text-left" id="total-harga">@currency($product->price)</div>
					</div>
					<div class="custom-control custom-checkbox text-left my-4">
						<input type="checkbox" class="custom-control-input" id="customCheck1" onclick="cek()">
						<label class="custom-control-label" for="customCheck1">Dengan ini saya menyetujui segala <a data-toggle="modal" href="#myModal">Syarat dan Ketentuan</a></label>
					</div>
                    <button id="bayar" class="btn btn-primary btn-outline-primary btn-round" type="submit" hidden>Lanjut ke Pembayaran</button>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>

  	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title font-weight-bold">Syarat dan Ketentuan</h4>
			</div>
			<div class="modal-body">
				<h6>Pelanggan yang kami hormati, kami memohon anda membaca dan memahami syarat dan ketentuan yang berlaku sebelum kerjasama ini dimulai</h6>
				<br>
				<ol>
					<li>Pelanggan diwajibkan untuk menyediakan ruang transit yang proper
						<ul>
							<li>Kaca</li>
							<li>Toilet</li>
							<li>Pendingin Ruangan</li>
							<li>Sumber listrik</li>
						</ul>
					</li>
					<li>Durasi Layanan
						<ul>
							<li>Standar durasi  layanan
								<ol>
									<li>
										SAHAJA A adalah 8 Jam
									</li>
									<li>
										SAHAJA B adalah 12 Jam
									</li>
									<li>
										SAHAJA C adalah 10 Jam
									</li>
								</ol>
							</li>
							<li>Pembagian waktu layanan SAHAJA adalah sebagai berikut:
								<ol>
									<li>
										Unlimited konsultasi sebelum Acara
									</li>
									<li>
										8 Jam saat Acara
									</li>
								</ol>
							</li>
							<li>Pelanggan dapat melakukan penambahan durasi layanan SAHAJA dan akan dikenakan biaya tambahan.</li>
						</ul>
					</li>
					<li>Pelanggan diwajibkan untuk menyediakan ruang transit yang proper
						<ul>
							<li>Biaya tambah waktu adalah biaya yang muncul apabila pelanggan menghendaki penambahan durasi layanan NWS dari yang sudah disepakati saat checkout baik melalui maupun tanpa konfirmasi sebelumnya.</li>
							<li>Besarnya biaya tambah waktu layanan paket
								<ol>
									<li>
										SAHAJA A adalah senilai Rp. 1.000.000,00/jam.
									</li>
									<li>
										SAHAJA B adalah senilai Rp. 2.000.000,00/jam.
									</li>
									<li>
										SAHAJA C adalah senilai Rp. 1.500.000,00/jam.
									</li>
								</ol>
							</li>
						</ul>
					</li>
					<li>Uang Muka
						<ul>
							<li>Uang muka yang dibayarkan berfungsi sebagai tanda jadi  kerjasama antara pihak pelanggan dan pihak SAHAJA.</li>
							<li>Nilai minimal uang muka adalah 50% dari total biaya yang muncul saat checkout pesanan.</li>
						</ul>
					</li>
					<li>Uang Muka
						<ul>
							<li>Pelanggan dapat melakukan pengajuan pengembalian dana apabila pelanggan menghendaki pembatalan layanan SAHAJA, adapun jumlah dana yang dapat dikembalikan adalah senilai 75% dari total yang sudah dibayarkan.</li>
							<li>Pembatalan layanan dapat dilakukan selambat-lambatnya 60 hari sebelum acara resepsi diselenggarakan, apabila pembatalan dilakukan kurang dari 60 hari, maka pengembalian dana tidak dapat dilakukan.</li>
							<li>Pelanggan dapat mempelajari lebih lanjut ketentuan proses pengembalian dana dengan membaca keterangan pada kolom FAQ</li>
						</ul>
					</li>
					<li>Pelunasan
						<ul>
							<li>Pelunasan dilakukan selambat-lambatnya pada hari H acara.</li>
							<li>SAHAJA hanya menerima pelunasan yang dilakukan dengan metode transfer Bank  VIRTUAL ACCOUNT</li>
							<li>Apabila terjadi keterlambatan pelunasan maka dikenakan biaya tambahan yaitu +10% dari total nilai transaksi yang muncul saat checkout.</li>
						</ul>
					</li>
					<li>Rapat koordinasi/Technical meeting
						<ul>
							<li>Penentuan waktu pelaksanaan rapat koordinasi maksimal H-6 acara.</li>
							<li>Penentuan waktu dan tempat rapat koordinasi dilakukan selambat-lambatnya H-5 hari rapat</li>
							<li>Perubahan waktu dan tempat dilakukan selambat-lambatnya H-5 hari rapat.</li>
							<li>SAHAJA memfasilitasi
								<ol>
									<li>LCD Proyektor</li>
									<li>Ballpoint</li>
									<li>Buku Panduan sesuai Paket/penyesuaian saat checkout</li>
								</ol>
							</li>
							<li>Pemangku hajat diwajibkan menyiapkan makan dan minum sesuai dengan jumlah tamu undangan dalam kegiatan rapat.</li>
							<li>Ukuran minimal ruangan rapat adalah 10x6m</li>
							<li>Durasi maksimal rapat adalah 3 jam</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>Pelanggan berhak melakukan 5x revisi Rundown.</li>
							<li>SAHAJA tidak melayani permintaan Rundown yang mengharuskan Tim SAHAJA untuk melewatkan waktu sholat.</li>
							<li>Pengumpulan revisi Buku panduan dilakukan selambat-lambatnya pada H-14 acara.</li>
							<li>Permintaan revisi dapat diubah selambat-lambatnya pada H-14 acara.</li>
							<li>SAHAJA akan melakukan konfirmasi kepada pelanggan dan SAHAJA berhak melakukan pengajuan penggantian kegiatan apabila ditemui permintaan kegiatan yang menyelisihi nilai adat ketimuran dan Islam.</li>
							<li>SAHAJA berhak menambahkan lagu dengan tema Islami apabila pada permintaan lagu yang diajukan oleh pelanggan tidak ditemukan lagu dengan tema Islami. Poin ini hanya berlaku apabila pelanggan SAHAJA adalah seorang muslim.</li>
						</ul>
					</li>
				</ol>
				<h6>Butuh bantuan? Silahkan cek halaman FAQ (Frequently Asked Questions). Atau anda bisa email ke Sahajawo@gmail.com atau hubungi 085157170113 (WhatsApp).</h6>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

		</div>
	</div>

	<script>
	function cek() {
		var bayar = document.getElementById('bayar');
		if(document.getElementById("customCheck1").checked == true){
			console.log('cok');
			bayar.hidden = false;
		} else {
			bayar.hidden = true;
		}
	}

	function myFunction(x) {
		var div = document.getElementById('additional-harga');
		var divtotal = document.getElementById('total-harga');


		var n = formatRupiah(x, 'Rp. ');
		var pharga = document.getElementById('harga-produk').getAttribute('data-produk');
		console.log(pharga);
		var totalharga = parseInt(pharga) + parseInt(x);
		var total = formatRupiah(totalharga, 'Rp. ');
		console.log(total);
		div.innerHTML = n;
		divtotal.innerHTML = total

	}

	function formatRupiah(angka, prefix){
		var number_string = angka.toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
	</script>

@endsection
