@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <h1>Selamat Datang Di Toko Kami ...</h1>
    <li class="breadcrumb-item active">Temukan keindahan tersembunyi dari lautan dan sungai di MOMO FISH STORE. Dari ikan karang berwarna-warni hingga spesies air tawar yang langka, kami menawarkan pilihan ikan yang memukau untuk memperindah akuarium Anda. 
      Koleksi kami yang luas mencakup berbagai ukuran dan jenis, memastikan bahwa setiap pecinta ikan dapat menemukan spesies yang sempurna sesuai dengan preferensi.</li>
@endsection

@section('content')

    <p>Ada beberapa jenis ikan yang kami jual : </p>

    <div class="card mb-3" style="max-width: 675px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://artikel.rumah123.com/wp-content/uploads/sites/41/2021/09/22222328/clown-fish-ikan-hias-air-laut-tercantik.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Ikan Laut</h5>
              <p class="card-text">Jenis ikan dari laut yang biasanya dipelihara dalam akuarium karena keindahan dan warna-warni yang menarik</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 675px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/02/27/alasan-ikan-arwana-tidak-untuk-dimakan-meski-harganya-lebih-mahal-dari-ferrari-2.jpeg?w=600&q=90" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Ikan Air Tawar</h5>
              <p class="card-text">Jenis ikan yang populer di kalangan pemilik akuarium karena keindahan warna dan pola yang menarik</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 675px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg8d49VoKYbIf17Regt8oTHmbScDKn4oRUdEIJoMk5EvWqbiLizfrpFN8uA5iOBMzzaKl7KKZdy6q6H_U90-SMMGqo2qDxUqFC7yp8_r2TmVdmI00TurB_k1OYIxE1TFWMzwLNNokhHOAP-DMVJbQpUuWkTx9Te4x0ENlTO8U8PTQM3ClmTpbWml7Gyxw/s320/Ikan%20Harimau%20siam.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Ikan Air Payau</h5>
              <p class="card-text">Jenis ikan yang biasa ditemui di perairan payau, seringkali memiliki penampilan yang menarik dan unik</p>
            </div>
          </div>
        </div>
      </div>

@endsection
