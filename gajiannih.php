<!DOCTYPE html>
<html>
<head>
<title>Gaji</title>
</head>
<body>
<center><h1>PENGGAJIHAN<br> PT.TEQUILALA BARBAQUE</center></h1>
<center>
  <form action = "soalsoal.php" method="post">
  <fieldset>
  <table>
      
    <tr>
  <td>Nama bendahara:</td>
  <td><input type='text' name=nama></input>
  </tr>
  <tr>
  <td>Nama pekerja:</td>
  <td><input type='text' name=namap></input>
  </tr>
   <tr>
  <td>Jenis kelamin:</td>
  <td><input type='radio' name=kelamin value=laki-laki>laki-laki
  <input type='radio' name=kelamin value=perempuan>perempuan</td>
       <tr>
  <td>Tanggal gaji:</td>
  <td><input type="date" name=tanggal ></input>
  <tr>
  <td>Jabatan:</td>
  <td><select name = jabatan>
    <option name = jabatan>---Pilih Jabatan---
    <option name = jabatan>direktur
    <option name = jabatan>manager
    <option name = jabatan>karyawan
    <option name = jabatan>OB
  </td></tr>
  <tr>
  <td>Pendidikan terakhir:</td>
  <td><select name = pendidikan>
    <option name = pendidikan>---Pendidikan terakhir---
    <option name = pendidikan>sd
    <option name = pendidikan>smp
    <option name = pendidikan>smk
    <option name = pendidikan>s1
    </td>
  </tr>
  <tr>
  <td>Lembur:</td>
  <td><input type='text' name=lembur>/Hari</input>
  </tr>
  
  <td><input type="submit" name=simpan value='kirim'></input>
  <td><b></b><input type="reset" name=reset value='reset'></input>
  </tr> 
</center>
  </table>
  </fieldset>
  </form>
  </body>
  </html>
  
  <?php
$nama=@$_POST['nama'];
$namap=@$_POST['namap'];
$kelamin=@$_POST['kelamin'];
$tanggal=@$_POST['tanggal'];
$jabatan=@$_POST['jabatan'];
$pendidikan=@$_POST['pendidikan'];
$lembur=@$_POST['lembur'];


echo "<h2>Gaji pokok</h2>";
echo "<td>Tanggal: $tanggal<br></td>";
echo "<tr>";
echo "<td>Nama bendahara: $nama<br></td>";
echo "<td>Nama pekerja: $namap<br></td>";
echo "<td>kelamin: $kelamin<br></td>";
echo "<td>Jabatan: $jabatan<br></td>";
echo "<td>Pendidikan terakhir: $pendidikan<br></td>";
echo "<td>Lembur: $lembur<br></td>";
echo "</tr>";

if ($jabatan == 'direktur'){
    $direktur= 10000000;
    $hasil = $direktur;
    echo "gaji : $hasil  <br>"; 
  }
  elseif ($jabatan == 'manager'){
    $manager= 7500000;
    $hasil = $manager;
    echo "gaji : $hasil  <br>"; 
  }
  elseif ($jabatan == 'karyawan'){
    $karyawan= 5000000;
    $hasil = $karyawan;
    echo "gaji : $hasil  <br>"; 
  }
  elseif ($jabatan == 'ob'){
    $ob= 2500000;
    $hasil = $ob;
    echo "gaji : $hasil  <br>"; 
  }

    echo "<h2>Tunjangan</h2>";

    if ($pendidikan == 'sd'){
        $sd= 200000;
        echo "Uang tunjangan pokok: $sd <br>";
        $tlembur = $lembur * 25000;
        echo "Vakasi lembur: Rp. $tlembur <br>";
        $tgaji=$hasil + $sd + $tlembur;
        echo"total gaji=$tgaji";
      }
      elseif ($pendidikan == 'smp'){
        $smp= 500000;
        echo "Uang tunjangan pokok: $smp <br>";
        $tlembur = $lembur * 25000;
        echo "Vakasi lembur: $smp <br>";

        $tgaji=$hasil + $smp + $tlembur;
        echo"total gaji=$tgaji";
      }
      elseif ($pendidikan == 'smk'){
        $smk= 1000000;
        echo "Uang tunjangan pokok: $smk <br>";
        $tlembur = $lembur * 25000;
        echo "Vakasi lembur: $tlembur <br>";
        $tgaji=$hasil + $smk + $tlembur;
        echo"total gaji=$tgaji";
      }
      elseif ($pendidikan == 's1'){
        $s1= 1500000;
        echo "Uang tunjangan pokok: $s1 <br>"; 
        $tlembur = $lembur * 25000;
        echo "Vakasi lembur: Rp. $tlembur <br>";

        $tgaji=$hasil + $s1 + $tlembur;
        echo"total gaji=$tgaji";
        
      }
      
      

      ?>