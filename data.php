<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="js/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <style>
      table{
        border-collapse: collapse:
      }
      th,td{
        padding: 8px:
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
                <li><a href="">Lihat Data</a></li>
                <li><a href="registrasi.php">Tambah Data</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
          <!--SIDENAV-->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="">Lihat Data</a></li>
            <li><a href="registrasi.php">Tambah Data</a></li>
          </ul>
      <div class="container center bg-info text-white">
        <h2>DAFTAR DATA COVID-19</H2>
        <table class="table text-white">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Faskes</th>
              <th scope="col">Nama</th>
              <th scope="col">NIK</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Umur</th>
              <th scope="col">No.Hp</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td scope="row">rsud fatmawati</td>
              <td scope="row">angelina</td>
              <td scope="row">181011401625</td>
              <td scope="row">perempuan</td>
              <td scope="row">23</td>
              <td scope="row">1234567891234</td>
              <td scope="row"><a class="btn-floating waves-effect waves-light cyan"><i class="material-icons">create</i>
                <a class="btn-floating waves-effect waves-light cyan"><i class="material-icons">file_download</i>
                <a class="btn-floating waves-effect waves-light cyan"><i class="material-icons">delete</i></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
           const sideNav = document.querySelectorAll('.sidenav');
           M.Sidenav.init(sideNav);
          </script>
    </body>
  </html>