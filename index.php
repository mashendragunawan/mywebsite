<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="nv">
        <nav>
            <ul>
                <h2>Mas Hendra</h2>
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
            <p>Baca update Artikel dan tutorial terbaru setiap harinya.</p>
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
        <h3 ><?php echo $d['Judul']; ?></h3>
        <p class="tanggal"><?php echo $d['tanggal']; ?></p>
        <?php echo "<a href='".$d['btn']."' class='ac'>Read More</a>";?>
        </div>
    </div>
    <?php
    }
    ?>
    </div>
    <div class="footer">
        <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/330247112/original/6081b95b9b09114315ba1403de12e1e7956f9149/code-websites-using-html-css-and-javascript.png" alt="">
    </div>
    <div class="footer1">
        <div class="med">
        <a href="">About</a>
        <a href="">Contack US</a>
        <a href="">Privacy </a><br>
        </div>   
        <div class="ico">
        <i class="fa fa-github" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <i class="fa fa-youtube-play" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>  
        <div class="cop">
        <p>Copyright © 2024 www.mashendra.com</p
        </div>
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
        max-width:content;
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
        margin-left:9px;
        margin-top:20px;
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
        width:272px;
    }
    .home{
        width:1700px;
        position:absolute;
        left:150px;
        top:800px;
    }
    .jdcard h4{
        font-size:30px;
        font-weight:bold;
        font-family:sans-serif; 
        position:absolute;
        left:655px;
        top:-135px;
    }
    .jdcard p{
        position:absolute;
        top:-60px;
        font-family:sans-serif; 
        font-weight:bold;
        left:600px;
        color:#bdc3c7;

    }
    .tanggal{
        background-color:#7ed6df;
        width:100px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:15px; 
        font-weight: bold;
        color:#fff;
        height:30px;
    }
    .footer{
        width:auto;
        background-color:black;
        height:630px;
    }
    .footer img{
        width: 100%;
        height: 630px;
        object-fit: cover;
    }
    .footer1{
        width:auto;
        height:200px;
        background-color:#34495e;
        margin-top:1100px;
    }
    @media only screen and (max-width:600px){
        .lia{
            display:none;
        }
        .footer{
            display:none;Z
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
        .footer1{
            display:none;
        }
    }
    @media only screen and (max-width:400px){
        .lia{
            display:none;
        }
        .footer{
            display:none;Z
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
        .med{
            display:none;
        }
    }
    @media only screen and (min-width:786px){
    .home{
        width:1200px;
        margin-left:-50px;
    }
    .footer{
        width:auto;
        background-color:black;
        height:630px;
    }
    .lia{
        width:200px;
        margin-left:30px;
    }
    h2{
        margin-left:-230px;
    }
    .container{
        width:250px;
        height:320px;
    }
    img{
        width:250px;
        height:150px;
    }
    .tag{
        width:50px;
        height:25px;
        font-size:12px;
        margin-top:-2px;
        margin-left:5px;
    }
    h3{
        font-size:13px;
        width:190px;
        margin-left:4px;
        position:relative;
        white-space: pre-line;
        height:50px;
        line-height: 1.8;
    }
    .tanggal{
        width:60px;
        height:25px;
        font-size:10px;
        position:relative;
        color:black;
        top: 10px;
        left:-5px;
    }
    .ac{
        width:180px;
        font-size:12px;
        height:25px;
        position:relative;
        top:-2px;
        left:-2px;
    }
    .jdcard h4{
        font-size:30px;
        font-weight:bold;
        font-family:sans-serif; 
        position:absolute;
        left:490px;
        top:-135px;
    }
    .jdcard p{
        position:absolute;
        top:-60px;
        font-family:sans-serif; 
        font-weight:bold;
        left:440px;
        color:#8395a7;
    }
    .med{
       
        width:300px;
        position:relative;
        top:30px;
        left:520px;
    }
    .med a{
        font-size:18px;
        padding:0px 15px;
        color:#fff;
        text-decoration: none;
        
    }
    .med a:hover{
        text-decoration: underline;
        transition: text-decoration-thickness 0.2s ease-in-out;
    }
    .ico i{
        font-size:25px;
        padding:0px 10px;
        color:#fff;
    }
    .ico{
        position:relative;
        width:260px;
        top:80px;
        left:540px;
    }
    .cop p{
        color:#fff;
        position:relative;
        top:110px;
        left:510px;
        width:400px;
    }
    
}

</style>
<script>
    
</script>
</html>