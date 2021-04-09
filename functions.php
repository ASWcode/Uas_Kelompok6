<?php 
    $koneksi = mysqli_connect("localhost","root","", "uas_kelompok6");
    if(!$koneksi){
        die("gagal terhubung dengan database : ".mysqli_connect_error());
    } 

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data){
        global $koneksi;
        $provinsi = $data["provinsi"];
        $kota = $data["kabupaten"];
        $kecamatan = $data["kecamatan"];
        $jenis = $data["jenis"];
        $faskes = $data["faskes"];
        $nik = $data["nik"];
        $nama = $data["nama"];
        $jk = $data["jk"];
        $umur = $data["umur"];
        $tglLahir = $data["tgl_lahir"];
        $noHp = $data["no_hp"];
        $alamat = $data["alamat"];
        $password = mysqli_real_escape_string($koneksi,$data["password"]);
        $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

        $result = mysqli_query($koneksi, "SELECT nomer_hp FROM pasien WHERE nomer_hp = '$noHp'"); 
        if(mysqli_fetch_assoc($result)){
            echo "<script>
              alert('Nomer HP sudah terdaftar di sistem.');
            </script>";
            return false;
        } 

        if ($password != $password2) {
            echo "<script>
                    alert('Konfirmasi Password tidak sesuai');
                </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($koneksi, "INSERT INTO pasien VALUES 
              (NULL, '$nik',  '$nama', '$jk', '$provinsi', '$provinsi', '$kota', '$kecamatan', '$jenis', '$faskes','$umur', '$tglLahir', '$noHp', '$alamat', '$password')");

        return mysqli_affected_rows($koneksi);
    }

?>