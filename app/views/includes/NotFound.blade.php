<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @include('includes.head')
    @include('includes.head.head1')
    <title></title>
  </head>
  <body>
    @include('includes.header.headerV')

    <div class="container alert404">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Lo sentimos, Se ha producido un error, la página solicitada no se encuentra!
                </div>
                <div class="error-actions">
                    <a href="login" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Volver al inicio </a>
                    <a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span>
                      Contactanos</a>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>
