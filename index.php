<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Card</title>
</head>
<body>
    <?php
    include 'koneksi.php';
    $data= mysqli_query($con, "select * from tb_card ORDER by id DESC");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="container">
        <div class="utama">
        <img src="background.jpg" alt="">
        <p><?php echo $d['tag']; ?></p>
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
        width:250px;
        height:300px;
        margin:0px 8px;
        background-color:red;
        display:inline-flex;
    }
    img{
        width:250px;
        height:150px;
    }
    h3, p{
        margin:10px 10px;
    }
</style>
</html>