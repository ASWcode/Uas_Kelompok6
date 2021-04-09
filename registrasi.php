<?php 
  require "./functions.php";
  $provinsi = query("SELECT nama_wilayah FROM wilayah WHERE level = 1");
  $kota = query("SELECT nama_wilayah FROM wilayah WHERE level = 2");
  $kecamatan = query("SELECT nama_wilayah FROM wilayah WHERE level = 3");
  $faskes = query("SELECT nama_faskes FROM faskes");

  if(isset($_POST["submit"])){
    if(registrasi($_POST) >0){
      echo "<script> alert(' data pasien berhasil di tambahkan');</script>";
    }else{
      echo mysqli_error($koneksi);
    }
  }

?>



<!DOCTYPE html>
  <html>
    <head>
      <!--datepicker-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="js/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <style>
          #pasien{
            background-image: url(img/image.jpg);
            background-size: cover;
            
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
                <li><a href="login.php"> Login </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
          <!--SIDENAV-->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="login.php">Login</a></li>
          </ul>
        <!--Input Data-->
      <form action="" method="post">
      <div class="container mb-5" id="pasien">
	      <h3 align="center" style="margin: 60px 10px 10px 10px;">DATA PASIEN COVID-19</h3><hr>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="provinsi"><i class="material-icons">add_location</i>Provinsi</label>
              <select class="form-control" name="provinsi" id="provinsi">
                <option value=""> Pilih Provinsi</option>
              </select>
            </div>
        
            <div class="form-group">
              <label for="kota"><i class="material-icons">add_location</i>Kabupaten/Kota</label>
              <select class="form-control" name="kabupaten" id="kabupaten">
                <option value=""></option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="kecamatan"><i class="material-icons">add_location</i>Kecamatan</label>
              <select class="form-control" name="kecamatan" id="kecamatan">
                <option value=""></option>
              </select>
            </div>
            <div class="form-group">
              <label for="jenis"><i class="material-icons">local_hospital</i>Jenis Faskes</label>
              <select class="form-control" name="jenis" id="jenis">
              <option value="" disabled selected> Pilih Jenis Faskes</option>
              <option value="Puskesmas" > Puskesmas</option>
              <option value="RSUD" > RSUD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="faskes"><i class="material-icons">local_hospital</i>Nama Faskes</label>
              <select class="form-control" name="faskes" id="faskes">
                <option value="" disabled selected> Pilih Nama Faskes</option>
                <?php 
                  foreach($faskes as $row) :
                    $namaFaskes = $row["nama_faskes"];
                ?>
                <option value="<?= $namaFaskes ?>"> <?= $namaFaskes ?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="input-field col s12">
              <textarea id="nik" name="nik" class="materialize-textarea" maxlength="16"></textarea>
              <label for="nik"><i class="material-icons">create</i>NIK</label>
            </div>
            <div class="input-field col s12">
              <textarea id="nama" name="nama" class="materialize-textarea" data-length="120"></textarea>
              <label for="nama"><i class="material-icons">person_pin</i>Nama</label>
            </div>
            <div class="form-group">
              <label for="jk"><i class="material-icons">people_outline</i>Jenis Faskes</label>
              <select class="form-control" name="jk" id="jk">
              <option value="" disabled selected> Pilih Jenis Kelamin</option>
              <option value="Laki Laki" > Laki-Laki</option>
              <option value="Perempuan" > Perempuan</option>
              </select>
            </div>
            <div class="input-field col s6">
              <input id="umur" name="umur" type="number" min="12" max="65" class="validate" required/>
              <label for="umur"><i class="material-icons">perm_identity</i>Umur</label>
            </div>
            <div class="input-field col s6">
              <input id="tanggal" name="tgl_lahir" type="text" class="form-control datepicker"  required/>
              <label for="tanggal"><i class="material-icons">today</i>Tanggal Lahir</label>
            </div>
            <div class="input-field col s12">
              <textarea id="no_hp" name="no_hp" class="materialize-textarea" data-length="120"></textarea>
              <label for="no_hp"><i class="material-icons">account_box</i>No Hp</label>
            </div>
            <div class="input-field col s12">
              <textarea id="alamat" name="alamat" class="materialize-textarea" data-length="120"></textarea>
              <label for="alamat"><i class="material-icons">add_location</i>Alamat</label>
            </div>
            <div class="input-field col s6">
              <input id="password" name="password" type="password"  class="validate" required/>
              <label for="password"><i class="material-icons">lock_outline</i>Password</label>
            </div>
            <div class="input-field col s6">
              <input id="password2" name="password2" type="password"  class="validate" required/>
              <label for="password2"><i class="material-icons">lock_outline</i>Konfirmasi Password</label>
            </div>
            <button type="submit" name="submit" class="waves-effect waves-light btn">DAFTAR</button>
          </div>
        </div>
      </div>
      </form>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
           const sideNav = document.querySelectorAll('.sidenav');
           M.Sidenav.init(sideNav);
        $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
      </script>
      <script type="text/javascript">
		$(document).ready(function(){
          	$.ajax({
                type: 'POST',
              	url: "get_provinsi.php",
              	cache: false, 
              	success: function(msg){
                  $("#provinsi").html(msg);
                }
            });

          	$("#provinsi").change(function(){
          	var provinsi = $("#provinsi").val();
	          	$.ajax({
	          		type: 'POST',
	              	url: "get_kabupaten.php",
	              	data: {provinsi: provinsi},
	              	cache: false,
	              	success: function(msg){
	                  $("#kabupaten").html(msg);
	                }
	            });
            });

            $("#kabupaten").change(function(){
          	var kabupaten = $("#kabupaten").val();
	          	$.ajax({
	          		type: 'POST',
	              	url: "get_kecamatan.php",
	              	data: {kabupaten: kabupaten},
	              	cache: false,
	              	success: function(msg){
	                  $("#kecamatan").html(msg);
	                }
	            });
            });

            $("#kecamatan").change(function(){
          	var kecamatan = $("#kecamatan").val();
            });
         });
	</script>
    </body>
  </html>