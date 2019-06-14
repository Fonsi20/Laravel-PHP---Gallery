<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fonsi Web Laravel v1.0</title>
</head>

<body>
    <div class="container my-4 nav justify-content-end">
            <li class="nav-item">
        <a href="{{route('inicio')}}" class="nav-link">Home</a>  </li>
        <li class="nav-item">
        <a href="{{route('foto')}}" class="nav-link">Fotos</a>  </li>
        <li class="nav-item">
        <a href="{{route('blog')}}" class="nav-link">Blog</a>  </li>
        <li class="nav-item">
        <a href="{{route('nosotros')}}" class="nav-link">Nosotros</a>  </li>
    </div>
    <div class="container">
        @yield('seccion')
    </div>
 

    <!-- Footer -->
<footer class="page-footer font-small bg-primary">

        <!-- Footer Links -->
        <div class="container">

          <!-- Grid row-->
          <hr class="rgba-white-light" style="margin: 0 15%;">
      
          <!-- Grid row-->
          <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
      
            <!-- Grid column -->
            <div class="col-md-8 col-12 mt-5 text-white">
              <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->
          <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
      
          <!-- Grid row-->
          <div class="row pb-3">
      
            <!-- Grid column -->
            <div class="col-md-12">
      
              <div class="mb-5 flex-center">
      
                <!-- Facebook -->
                <a class="fb-ic">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                    <i class="fab fa-instagram"></i>
                </a>
                <!--Github-->
                <a class="git-ic">
                    <i class="fab fa-github"></i>
                </a>
      
              </div>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a  class="text-white" href="https://github.com/Fonsi20"> Fonsi Github</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>