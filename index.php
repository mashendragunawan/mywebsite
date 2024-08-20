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
                <h2  class="Robet" >Mas Hendra</h2>
                <div class="lia">
                <li><a class="active" href="">Home</a></li>
                <li><a class="aa" href="">Tutorial</a></li>
                <li><a class="aa" href="">Aplikasi</a></li>
                <li><a class="aa" href="">Artikel</a></li>
                <li><a class="aa" href="">About</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="home dd">
        <div class="jdcard">
            <h4>Terbaru Di MasHendra</h4>
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
        <?php echo "<a href='".$d['btn']."' class='ac'>Read More</a>";?>
        </div>
    </div>
    <?php
    }
    ?>
    </div>
</body>
<style>
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
        background-color: #2980b9;
        width: 60px;
        height:28px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:15px; 
        font-weight: bold;  
        color:#fff;
    }
    ul{
        background-color:#fff;
        margin:auto;
        padding:auto;
        height:50px;
        list-style: none;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
        
    }
    .lia{
        display:flex;
        width:700px;
        justify-content:center;
        align-items:center;
        position:absolute;
        left:800px;
        top:4px;
        height:40px;
        font-weight:bold;
        font-family:sans-serif;
    }
    .aa{
        color:#00b894;
        text-decoration: none;
    }
    .aa:hover{
        background-color:#00b894;
        width:100px;
        height:38px; 
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-weight:bold;
        border-radius:2px;
        color:#fff;
        text-decoration: none; 
    }
    .active{
        background-color:#00b894;
        width:270px;
        height:38px; 
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-weight:bold;
        border-radius:2px;
        color:#fff;
        text-decoration: none;
    }
    li{
        margin:10px 15px;   
    }
    body{
        margin:auto;
        padding:auto;
    }
    h2{
        color:#16a085;
        position:absolute;
        left:400px;
        top:-23px;
        font-weight:bold;
        font-size:35px;
    }
     .ac{
        text-decoration: none;
        margin:50px 10px;
        background-color:#16a085;
        color:#fff; 
        width:270px;
        height:38px; 
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-weight:bold;
        border-radius:2px;
    }
    .lia a{
        width:100px;
        
    }
    h3{
        margin:10px 10px;
        font-family: sans-serif;
        width:108%;
    }
    .home{
        width:1700px;
        position:absolute;
        left:150px;
        top:600px;
    }
    .jdcard{
        background-color:red;
        width:200px;
        height:150px;
    }
    .tanggal
    @media only screen and (max-width:600px){
        .lia{
            display:none;
        }
        ul{
            max-width:content;
        }
        h2{
            margin-left:-350px;
        }
        .home{
            position:absolute;
            left:90px;
            width:350px;
            top:80px;
            
        }
        .container{
            width:300px;
            margin:10px 20px;
        }
        img{
            width:300px;
        }
         .ac{
            width: 276px;
            margin:30px 10px;
        }
        h3{
            width:230px;
        }
        .jdcard {
        display: none;
      }
      .container:hover{
            transform: none;
        }
    }
    @media only screen and (max-width:400px){
        .lia{
            display:none;
        }
        ul{
            max-width:content;
        }
        h2{
            margin-left:-380px;
        }
        .home{
            position:absolute;
            left:10px;
            width:370px;
            top:80px;
        }
        .container{
            width:330px;
            margin:10px 20px;
        }
        .container:hover{
            transform: none;
        }
        img{
            width:330px;
        }
         .ac {
            width: 307px;
            margin:30px 10px;
        }
        h3{
            width:320px;

        }
    }
</style>
</html>