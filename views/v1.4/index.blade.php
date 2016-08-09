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
    <div class="footer">
      <div class="col-md-12">
        <div class="pull-left">
          <div>Copyright &copy; {{ date('Y') }}</div>
          <div>Generated using <a target="_blank" href="https://github.com/php-pure/themer">Pure Themer</a></div>
        </div>
        <div class="designed-by pull-right clear-fix">Designed By: <a target="_blank" href="#">napoleon.vyew.me</a></div>
      </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(function() {
        $("table").addClass("table tableb-ordered");
      });
    </script>
  </body>
</html>
