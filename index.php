
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
</head>
<body>
    <h1>Diskon</h1>
    <hr>

    
    <form action="" method="post" >
    <table border="0" cellpadding="5">

    <tr>
        <td><label for="pilih_barang">Pilih barang</label></td>
        <td><select name="pilih_barang" id="pilih_barang">
                <option style="display:none;" value=""></option>
                <option value="sabun">Sabun - Rp.3000</option>
                <option value="shampoo">Shampoo - Rp.2000</option>
                <option value="detergen">Detergen - Rp.5000</option>
                
        </select></td>
    </tr>
    <tr>
        <td><label for="jumlah_barang">Jumlah barang</label></td>
        <td><input type="text" name="jumlah_barang" id="jumlah_barang"></td>
    </tr>
        </table>
        
       <input type="radio" name="diskon" value="10">Diskon 10%
        <input type="radio" name="diskon" value="25">Diskon 25%
        <input type="radio" name="diskon" value="50">Diskon 50%
    
        <br><br>
        <input type="submit" name="submit" value="submit">
        <br><br>
    
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    if($_POST['pilih_barang'] == "sabun" ){
        $harga = 3000;
    }elseif($_POST['pilih_barang'] == "shampoo"){
        $harga = 2000;
    }elseif($_POST['pilih_barang'] == "detergen"){
        $harga = 5000;
 }

 $total = $_POST['jumlah_barang'] * $harga;
 if(isset($_POST['diskon'])){
    if($_POST['diskon'] == "10"){
        $diskon = $total * 10/100;
        $total_harga = $total - $diskon;
        echo "Barang :". $_POST['pilih_barang'] . "<br>";
        echo "Jumlah :". $_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja :" . $total . "<br>";
        echo "Diskon: 10%" . "<br>";
        echo "Selamat Anda mendapatkan diskon:" . $diskon . "<br>";
        echo "Anda harus membayar:" .$total_harga;
        
    }elseif($_POST['diskon'] == "25"){
        $diskon = $total * 25/100;
        $total_harga = $total - $diskon;
        echo "Barang :". $_POST['pilih_barang'] . "<br>";
        echo "Jumlah :" .$_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja :" . $total . "<br>";
        echo "Diskon:25%";
        echo "Selamat Anda mendapatkan diskon:" . $diskon . "<br>";
        echo "Anda harus membayar:" .$total_harga;
        
    }elseif($_POST['diskon'] == "50"){
        $diskon = $total * 50/100;
        $total_harga = $total - $diskon;
        echo "Barang :" . $_POST['pilih_barang'] . "<br>";
        echo "Jumlah :". $_POST['jumlah_barang'] . "<br>";
        echo "Total Belanja :" . $total . "<br>";
        echo "Diskon:50%". "<br>";
        echo "Selamat Anda mendapatkan diskon:" . $diskon . "<br>";
        echo "Anda harus membayar:" .$total_harga;
    }
}
}
?>