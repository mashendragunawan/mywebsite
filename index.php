<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Card</title>
</head>
<body>
    <div class="nv">
        <nav>
            <ul>
                <h2>Mas Hendra</h2>
                <div class="lia">
                <li><a href="">Home</a></li>
                <li><a href="">Tutorial</a></li>
                <li><a href="">Aplikasi</a></li>
                <li><a href="">Artikel</a></li>
                <li><a href="">About</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="home">
        <div class="inf">
                <h3 class="rr">Artikel Terbaru mashendra.com</h3>
                <p class="aa">Baca Update Artikel Terbaru </p>
        </div>
    <?php
    include 'koneksi.php';
    $data= mysqli_query($con, "select * from tb_card ORDER by id DESC");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="container">
        <div class="utama">
        <?php echo"<img src='".$d['gambar']."' alt=''>";?>
        <p class="tag"><?php echo $d['tag']; ?></p>
        <h3><?php echo $d['judul']; ?></h3>
        <p class="tanggal"><?php echo $d['tangal']; ?></p>
        <?php echo"<a href='".$d['btn']."'>"; ?>Read More</a>
        </div>
    </div>
    <?php
    }
    ?>
    </div>
</body>
<style>
    .rr{
        position:absolute;
        
    }
    .aa{
        position:absolute;
        
    }
    .utama{
        width:250px;
        height:300px; 
    }
    .container{
        width:290px;
        height:450px;
        margin:12px 10px;
        background-color:#fff;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
        border-radius:5px 5px 5px 5px;
        display:inline-flex;
        transition: transform 0.3s ease;    
    }
    .container:hover{
        transform: scale(1.1);
    }
    img{
        width:290px;
        height:250px;
        object-fit: cover;
        border-radius:5px 5px 0px 0px;
    }
     p{
        margin:10px 10px;
        font-family: sans-serif;
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
    ul{
        background-color:red;
        margin:auto;
        padding:auto;
        height:50px;
        list-style: none;
        
    }
    .lia{
        display:flex;
        width:300px;
        justify-content:center;
        align-items:center;
        position:absolute;
        left:1100px;
        top:4px;
        font-weight:bold;
        font-family:sans-serif;
    }
    li{
        margin:10px 15px;
        
    }
    .lia a{
        text-decoration: none;
        color:#fff;
        font-size:18px;
    }
    body{
        margin:auto;
        padding:auto;
    }
    .inf{
        background-color:red;
    }
    h2{
        color:#fff;
        position:absolute;
        left:400px;
        top:-23px;
        font-weight:bold;
        font-size:35px;
    }
    .home{
        width: 75%;
        position:absolute;
        top:200px;
        left:270px;
    }
    a{
        text-decoration: none;
        margin:30px 10px;
        background-color:#16a085;
        color:#fff; 
        width: 108%;
        height:38px; 
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-weight:bold;
        border-radius:2px;
    }
    h3{
        margin:10px 10px;
        font-family: sans-serif;
        width:108%;
    }
    
    @media only screen and (max-width:600px){
        .container{
            margin:10px 10px;
            height:460px;
            width:340px;
            overflow: hidden;
        }
        button{
            width: 320px;
            border-radius:5px;
        }
        img{
            object-fit: cover;
            width:340px;
            
        }
        .lia a,li{
            display:none;

    }
    ul{
        display:flex;
        background-color:red;
        margin:auto;
        padding:auto;
        
    }
    li{
        margin:10px 5px;
        
    }
    body{
        margin:auto;
        padding:auto;
    }
    h2{
        color:#fff;
    }
    }
</style>
</html>