<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Andrey D. Viana &middot; Portfolio</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Andrey D. Viana Portfolio">
    <meta name="author" content="Andrey D. Viana">

    <link href="http://portfolio.andreyviana.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://portfolio.andreyviana.com/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://portfolio.andreyviana.com/assets/css/base.css" rel="stylesheet">

  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Andrey D. Viana - Portfolio</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="http://portfolio.andreyviana.com/">Início</a></li>
                <li><a href="http://portfolio.andreyviana.com/contato.php">Contato</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li><a href="http://andreyviana.com.br/" target="_blank">Página Profissional</a></li>
                <li><a href="https://github.com/andreydjason" target="_blank">Github</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


    <div class="container marketing marketing-header">
      <div class="row">
        <div class="span12">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Entre em contato...</h2>
          <div id="wufoo-q7x2x3">
            <a href="http://andreydjason.wufoo.com/forms/q7x2x3">Clique aqui para entrar em contato</a>.
          </div>
          <script type="text/javascript">var q7x2x3;(function(d, t) {
          var s = d.createElement(t), options = {
          'userName':'andreydjason', 
          'formHash':'q7x2x3', 
          'autoResize':true,
          'height':'557',
          'async':true,
          'header':'show'};
          s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
          s.onload = s.onreadystatechange = function() {
          var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
          try { q7x2x3 = new WufooForm();q7x2x3.initialize(options);q7x2x3.display(); } catch (e) {}};
          var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
          })(document, 'script');</script>
        </div><!-- /.span12 -->
      </div><!-- /.row -->
    </div>


    <div class="container marketing">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; 2013 <a href="http://portfolio.andreyviana.com/">Andrey D. Viana &middot; Portfolio</a></p>
      </footer>

    </div><!-- /.container -->


    <script src="http://portfolio.andreyviana.com/assets/js/jquery-1.9.1.min.js"></script>
    <script src="http://portfolio.andreyviana.com/assets/js/bootstrap.min.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
 
