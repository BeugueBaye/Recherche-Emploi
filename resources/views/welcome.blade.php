<!DOCTYPE html>
<html lang="en">
<head>


                 <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <script src="{{ url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
                 <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECHERCHE TRAVAIL</title>
</head>
<body class="antialiased">

  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
          <a href="{{ url('/home') }}" class="text-sm text-blue-700 " style="border:5px solid">Accueil</a>
      @else
          {{-- <a href="{{ route('jobs.index') }}" class="text-sm text-blue-700 " style="border:5px solid">Voir les offres</a> --}}
          <a href="{{ route('login') }}" class="ml-4 text-sm text-blue-700 " style="border:5px solid">Se connecter</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-blue-700 " style="border:5px solid">S'inscrire</a>
          @endif
      @endif
  </div>
@endif
 
            <!--  Header -->
<div class="container-fluid p-0">
    <img src = "{{ url('img/banner.jpg')}}" style="width: 100%;" >
</div>
             <!-- End Header -->

            <!--   Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                      </form>
                    </div>
                  </div> 
              </nav>
            <!--  End Navbar-->

<!-- Sidenav & Body & Sidbar  -->
<div class = "container" >
    <div class ="row" style = "margin-top: 20px;">
    
                      <!-- 4.1)  Sidenav avec 4 colonnes -->
    <div class="col-4">



        <div class="card border-primary  mb-3" style="max-width: 18rem;">
            <div class="card-header bg-primary" style="color:white;">LES DOMAINES CONCERNES</div>
            <div class="card-body text-primary" style="padding:0px;">
        <div class="vertical-menu" >
           
            <a href="#">DOMAINE INFORMATIQUE</a>
            <a href="#">DOMAINE TRANSPORT </a>
            <a href="#">DOMAINE CULTURE</a>
            <a href="#">DOMAINE PECHE</a>
            <a href="#">DOMAINE ELEVAGE</a>
          </div>
          </div></div>
         

        <div class="card border-primary  mb-3" style="max-width: 18rem;">
            {{-- <div class="card-header bg-primary" style="color:white;">Login Form</div> --}}
            <div class="card-body text-primary">

                
 <!--  Login Form -->

 {{-- <div class="container login-container" >
    <div class="row">
        <div class="col-md-6 login-form-1" style="width:290px;">
            
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <br />
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <br />
                <div class="form-group" style="width:200px;">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <br />
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
            </form>
        </div>
        </div>
    </div> --}}
    


    <!-- End Login Form -->





            </div>
          </div> 
     

             

      

</div>



                                <!-- End Sidenav-->
    
    
                         <!-- BODY avec 8 colonnes-->
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                Découvrez des métiers de l'informatique, TRANSPORT, culture, peche et elevage

              </div>
              <div class="card-body">
                <p class="card-text">
                Administrateur/Administratrice de base de données....  ...<br />
                <br /><br />
                Conducteur train. ...<br />
                <br /><br />
				        Architecte des systèmes maraichage. ...<br />
                <br /><br />
				        Capitaine bateau de peche. ...<br />
                <br /><br />
				        Chef/Cheffe de projet informatique....<br />
                <br /><br />
				        Medecin Veterinaire.....<br />
            </p>
                      {{-- <a href="#" class="btn btn-primary">Read More !</a> --}}
              </div>
    </div>
    </div>
    </div>
    </div>
    <br />
                                         <!-- End Body-->
    

 <div class = "container-fluid p-0" >
 <div class ="row" style = "margin-top: 20px;">                                       
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          {{-- <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div> --}}
          <!--Grid column-->

          <!--Grid column-->
          {{-- <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div> --}}
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>



</body>
</html>