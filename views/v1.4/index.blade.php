<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}{{ $base_title }}</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1,user-scalable=no,target-densitydpi=device-dpi" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/default.min.css">
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
          <div>Copyright &copy; 2016</div>
          <div>Generated using <a target="_blank" href="https://github.com/php-pure/themer">Pure Themer</a></div>
        </div>
        <div class="designed-by pull-right clear-fix">Designed By: <a target="_blank" href="http://napoleon.vyew.me">napoleon.vyew.me</a></div>
      </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
    <script type="text/javascript">
      $(function() {
        $("table").addClass("table table-bordered");
        $("pre").each(function (i, block) {
          hljs.highlightBlock(block);
        });
      });
    </script>
  </body>
</html>
