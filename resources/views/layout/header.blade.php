<header class="navbar navbar-expand-lg bg-body-tertiary py-3 mb-4 border-bottom">
    <div class="container-fluid">
        <p>
            <img src="https://github.com/Indra2201020002/IndraUTS/blob/main/93547273-pisces-fish-sign.jpg" alt="..." style="width:100px;height:100px;">
        </p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
```

    <ul class="nav nav-tabs">
        @php
            $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'ikan', 'name' => 'Jenis Ikan'], ['url' => 'booking', 'name' => 'Pemesanan']];
        @endphp

        @foreach ($menu as $m)
            @include('layout.nav-item', ['menu' => $m])
        @endforeach
    </ul>
</header>

