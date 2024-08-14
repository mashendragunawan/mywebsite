<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Card</title>
</head>
<body>
    <h1>Test</h1>
    <h3>Belajar VERSAMA GITHUB</h3>
    <?php
    include 'koneksi.php';
    $data= mysqli_query($con, "select * from tb_card ORDER by id DESC");
    while($d = mysqli_fetch_array($data)){
    ?>
   <h4>WWWR</h4>
    <div class="container">
        <div class="utama">
        <?php echo"<img src='".$d['gambar']."' alt=''>";?>
        <p class="tag"><?php echo $d['tag']; ?></p>
        <h3><?php echo $d['judul']; ?></h3>
        <p><?php echo $d['tangal']; ?></p>
        <button>Read More</button>
        </div>
    </div>
    <?php
    }
    ?>
</body>
<style>
    .utama{
        width:250px;
        height:300px; 
    }
    .container{
        width:290px;
        height:420px;
        margin:0px 8px;
        background-color:#fff;
        box-shadow: 5px 5px 0px rgba(0, 0, 0, 0.2);
        border-radius:5px 5px 0px 0px;
        display:inline-flex;
    }
    img{
        width:290px;
        height:250px;
        object-fit: cover;
        border-radius:5px 5px 0px 0px;
    }
    h3, p{
        margin:10px 10px;
    }
    .tag{
        background-color: rgba(9, 132, 227, 0.5);
        width: 60px;
        height:28px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:15px; 
        font-weight: bold;  
    }
    button{
        margin:10px 10px;
    }
</style>
</html>