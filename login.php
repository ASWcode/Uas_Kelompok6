<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <style>
          section{
            background-image: url(img/backgroun.jpg);
            background-repeat: no-repeat;
            background-size: cover;
          }
          form{
              height: 550px;
          }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--navbar-->
      <div class="navbar-fixed">
        <nav class="cyan darken-2">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">ZA</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="registrasi.php">Tambah Data</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
          <!--SIDENAV-->
          <ul class="sidenav" id="mobile-nav">
          <li><a href="registrasi.php">Tambah Data</a></li>
          </ul>
        <!--login-->
      <section id="login" class="login">
        <div class="container ">
          <div class="row center">
            <form class="col s12">
              <h3 class="light teal-text text-lighten-1 center">LOGIN</h3>
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Telephone</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">lock_outline</i>
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <form action="#">
                  <p>
                    <label>
                      <input type="checkbox" />
                      <span>Remember Me</span>
                    </label>
                  </p>
                <button type="submit" class="btn tea">Login</button>
            </form>
          </div>
        </div>
      </section>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
          <script>
           const sideNav = document.querySelectorAll('.sidenav');
           M.Sidenav.init(sideNav);
          </script>
    </body>
  </html>