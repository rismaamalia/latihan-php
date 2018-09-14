<?php
if (isset($_POST['Pilih'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = nl2br($_POST['alamat']);
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];
    $email = $_POST['email'];
    $pengajar = $_POST['pengajar'];
    $nilai = $_POST['nilai'];

    echo "<table width = 700 border =1 bgcolor= lime>
    <tr>
        <td>Nama :</td>
        <td>$nama</td>
    </tr>

    <tr>
        <td>NIS :</td>
        <td>$nis</td>
    </tr>

    <tr>
        <td>Alamat :</td>
        <td>$alamat</td>
    </tr>

    <tr>
        <td>Kelamin :</td>
        <td>$kelamin</td>
    </tr>

    <tr>
        <td>Agama :</td>
        <td>$agama</td>
    </tr>

    <tr>
        <td>Sekolah :</td>
        <td>$sekolah</td>
    </tr>

    <tr>
        <td>Email :</td>
        <td>$email</td>
    </tr>

    <tr>
        <td>Pengajar :</td>
        <td>$pengajar</td>
    </tr>

    <tr>
        <td>Pelajaran yang Anda Sukai :</td>
        <td>
        ";
        if (isset($_POST ['pelajaran1'])){
            echo "+ " . $_POST['pelajaran1'] . "<br>";
        }
        if (isset($_POST ['pelajaran2'])){
            echo "+ " . $_POST['pelajaran2'] . "<br>";
        }
        if (isset($_POST ['pelajaran3'])){
            echo "+ " . $_POST['pelajaran3'] . "<br>";
        }
        if (isset($_POST ['pelajaran4'])){
            echo "+ " . $_POST['pelajaran4'] . "<br>";
        }
        if (isset($_POST ['pelajaran5'])){
            echo "+ " . $_POST['pelajaran5'] . "<br>";
        }" </td>
    </tr>

    <tr>
        ";
        if ($nilai>=23){
            echo
            "
            <tr>
                <td>Nilai Ijazah SD Anda : </td>
                <td>$nilai  <b>Selamat Anda Diterima</b> </td>
            </tr>";
        }
        else{
            echo
            "
            <tr>
                <td>Nilai Ijazah SD Anda : </td>
                <td>$nilai <b>Maaf Anda Belum Diterima</b> </td>
            </tr>";
        }"
    </tr>
    </table>";


}