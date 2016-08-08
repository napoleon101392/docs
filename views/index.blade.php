<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}{{ $baseTitle }}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/slayer.css">
  </head>
  <body>
    @include('includes.navigation-bar')
    <div class="container">
      <div class="row">
        <div class="col-md-3 version">
          @include('includes.drop-down-version')
        </div>
        <div class="col-md-9">
            <h1>{{ str_replace(' - ', '', $title) }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="sidebar col-md-3">
            {{ $sidebar }}
        </div>
        <div class="article col-md-9">
            {{ $body }}
        </div>
      </div>
    </div>
  </body>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</html>
