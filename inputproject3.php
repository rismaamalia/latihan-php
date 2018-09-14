<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Raport Sederhana</title>
</head>
<body>
    <h1><center>SISTEM RAPORT SEDERHANA</center></h1>
    <form action="prosesproject3.php" method="post">
    <table>
    <tr>
        <td>Nama : </td>
        <td><input type="text" name="nama"></td>
    </tr>
    
    <tr>
        <td>NIS : </td>
        <td><input type="number" name="nis"></td>
    </tr> 
    
    <tr>
        <td>Alamat : </td>
        <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
    </tr>
    
    <tr>
        <td>Jenis Kelamin : </td>
        <td><input type="radio" name="kelamin" value="Laki-laki">Laki-laki 
        <input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
    </tr> 
    
    <tr>
        <td>Agama : </td>
        <td><select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            </select></td>
    </tr>

    <tr>
        <td>Sekolah : </td>
        <td><input type="text" name="sekolah"></td>
    </tr>
    
    <tr>
        <td>Email :  </td>
        <td><input type="email" name="email"></td>
    </tr>

    <tr>
        <td>Pengajar : </td>
        <td><input type="text" name="pengajar"></td>
    </tr>
    
    <tr>
        <td>Mata Pelajaran yang Disukai : </td>
            <td><input type="checkbox" name="pelajaran1" value="Matematika" checked> Matematika
                <input type="checkbox" name="pelajaran2" value="Bahasa Indonesia"> Bahasa Indonesia
                <input type="checkbox" name="pelajaran3" value="Bahasa Inggris"> Bahasa Inggris <br>
                <input type="checkbox" name="pelajaran4" value="Fisika"> Fisika
                <input type="checkbox" name="pelajaran5" value="Kimia"> Kimia</td>
    </tr> 
    
    <tr>
        <td>Masukkan Nilai Ijazah SD : </td>
        <td><input type="number" name="nilai"></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" value="Input Data" name="Pilih">
        <input type="reset" value="Reset"></td>
    </tr>
    </table>
    </form>
</body>
</html>