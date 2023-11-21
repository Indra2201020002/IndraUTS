<header class="navbar navbar-expand-lg bg-body-tertiary py-3 mb-4 border-bottom">
    <div class="container-fluid">
        <p><img src="https://previews.123rf.com/images/krisdog/krisdog1801/krisdog180100229/93547273-pisces-fish-sign.jpg" alt="Gambar_Ikan" style="width:100px;height:100px;">MOMO FISH STORE</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
```

    <ul class="nav nav-pills">
        @php
            $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'ikan', 'name' => 'Jenis Ikan'], ['url' => 'booking', 'name' => 'Pemesanan']];
        @endphp

        @foreach ($menu as $m)
            @include('layout.nav-item', ['menu' => $m])
        @endforeach
    </ul>
</header>