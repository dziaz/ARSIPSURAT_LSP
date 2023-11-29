<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="/assets/img" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  
 <div class="atas">
  <div class="col-12 shadow-sm" style="display: block;background-color: black;height: 10%;">
    <div class="container">
      <div class="row ">
        <div class="col-md-4 text-center mx-auto d-block ">
          <div class="card p-4" style="background-color: #ffcf00;border-radius: 0%;">
            <div class="mx-4 mr-0  py-0 mb-2 px-2">
              <img src="assets/img/Logo.png" class="img-fluid text-center " alt="Gambar Anda"
                style="border-radius: 0%; margin-left: 0.5rem;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
 @yield('content')
 

</html>