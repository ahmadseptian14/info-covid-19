<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Covid</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light pb-5">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><strong>Info <span>Covid-19</span></strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="#">Beranda</a>
                  <a class="nav-link" href="#">Informasi</a>
                  <a class="nav-link" href="#">Edukasi</a>
                </div>
              </div>
            </div>
        </nav>


    {{-- hero --}}
    <div class="row pb-3 pt-5">
        <div class="col-12 col-lg-8">
            <h3 class="">Informasi seputar COVID-19 secara tepat dan akurat</h3>
            <p class="lead">Situs ini merupakan media informasi seputar COVID-19 yang diambil dari API Kawalcorona</p>
        </div>
    </div>

          {{-- Content --}}
    <main>
        <div class="row pt-5 text-center pb-4">
            <h3>Jumlah Kasus Di Indonesia Saat Ini</h3>
            <h5>Data Berdasarkan API dari Kawal Corona</h5>
        </div>
        <div class="row mb-5">
            @foreach ($data as $dataCovid)
            <div class="col-12 col-lg-4 text-center mb-5">
                <h3>Positif</h3>
                <div class="card">
                    <div class="card-body">
                       <h3 class="positif">{{$dataCovid['positif']}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center mb-5">
                <h3>Sembuh</h3>
                <div class="card">
                    <div class="card-body">
                       <h3 class="sembuh">{{$dataCovid['sembuh']}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center mb-5">
                <h3>Meninggal</h3>
                <div class="card ">
                    <div class="card-body">
                       <h3 class="meninggal">{{$dataCovid['meninggal']}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </main>
    </div>

    
  
</body>
</html>