<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}{{ $base_title }}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slayer.css">
  </head>
  <body>
    @include('includes.navigation-bar')
    <div class="container">
      <div class="row">
        <div class="col-md-3 version">
          @include('includes.drop-down-version', ['versions' => $versions])
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
