<!DOCTYPE html>
<html>
  <head>
    <title>404 Page Not Found - {{ $base_title }}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slayer.css">
  </head>
  <body>
    @include('includes.navigation-bar')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          404 Page Not Found!
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="col-md-12">
        <div class="pull-left">
          <div>Copyright &copy; {{ date('Y') }}</div>
          <div>Generated using <a target="_blank" href="https://github.com/php-pure/themer">Pure Themer</a></div>
        </div>
        <div class="designed-by pull-right clear-fix">Designed By: <a target="_blank" href="#">napoleon.vyew.me</a></div>
      </div>
    </div>
  </body>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</html>
