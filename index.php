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
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                </div>
            </ul>
        </nav>
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
    h3, p{
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
    button{
        margin:10px 10px;
        background-color: #04AA6D;
        border: none;
        color: white;
        font-weight: bold; 
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        width:270px;
    }
    ul{
        background-color:red;
        margin:auto;
        padding:auto;
        height:50px;
        
    }
    .lia{
        display:flex;
        background-color:blue;
        width:300px;
        justify-content:center;
        align-items:center;
        position:absolute;
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
        a,li{
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