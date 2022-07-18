<?php
    include 'ayar.php';
    include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Devlab</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?cache=<?=time()?>">
    <link rel="stylesheet" href="css/index1.css?cache=<?=time()?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
    
<header>
<div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
			<div class="hamburger">
				<a href="#">
					<input type="checkbox" id="menyAvPaa">
					<svg id="burger" for="menyAvPaa" class="ham ham3"viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
					  <path
							class="line top"
							d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
					  <path
							class="line middle"
							d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
					  <path
							class="line bottom"
							d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />
					</svg>
				</a>
			</div>

           <!--profile image & text-->
		   <div class="profile">
			<img src="a.png" alt="profile_picture">
			<h3>Chardee`</h3>
			<p>Founder</p>
            <h6>design by Chardee</h6>
		</div>
            <!--menu item-->
			<ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Hakkımızda</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Yakında Yayında</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        <script>
  var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>



<div class="body">
<div class="çerçeve">
  <img class="logo" src="a.png">
  <h1 class="annen"><strong>CODE DEVLAB</strong></h1>
  <p class="slogan">Useful Codes For You</p>
</div>
</headerlo>


    <div class="vr"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 mb-5">
              <p style="color:white;font-size:20px;margin-left:0px;">KODLAR</p>
            </div>
        </div>
        <div class="row">
            <?php
                $veri = $db->prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
                $veri->execute();
                $islem = $veri->fetchALL(PDO::FETCH_ASSOC);

                foreach($islem as $row){
                    echo '<div class="col-lg-3.5">
                        <div class="card">
                           <code class="card-img-top">'.$row["yazi_resim"].'</code>
                            <div class="card-body">
                            <h5 class="card-title">'.$row["yazi_baslik"].'</h5>
                            <p class="card-text">'.kisalt($row["yazi_aciklama"], 100).'</p>
                            <a href="yazi.php?link='.$row["yazi_link"].'" class="btn btn-dark">Devamını Oku</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>

        </div>
    </div>
    

</body>
<footeraa>
  <div>
  <a href="javascript:setTimeout(()=>{window. location = 'http://instagram.com/codedevlab' },2000);" class="fab fa-instagram"><a href="javascript:setTimeout(()=>{window. location = 'http://instagram.com/codedevlab' },1000);" class="sss">@codedevlab</a></a>
</div>
</footeraa>
<div>
</html>
