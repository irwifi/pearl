<?php include_once("includes/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$site_title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$site_keywords;?>" />
	<meta name="description" content="<?=$site_description;?>" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />
	<?php include("includes/css.php"); ?>
	<?php include("includes/js.php"); ?>
</head>
<body>
<?php include_once("includes/header.php"); ?>
<div class="build-your-own">
    <div class="container">

        <div class="page-title"><h1>Build Your Own</h1></div>
        <div class="build-choose-product" onclick="window.location='build-your-own-ring-1.php'" style="cursor:pointer">
            <h2>Ring</h2>
            <img src="<?=$img_dir;?>/products/ring.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-ring-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product" onclick="window.location='build-your-own-earrings-1.php'" style="cursor:pointer">
            <h2>Earrings</h2>
            <img src="<?=$img_dir;?>/products/earrings.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-earrings-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product" onclick="window.location='build-your-own-pendant-1.php'" style="cursor:pointer">
            <h2>Pendant</h2>
            <img src="<?=$img_dir;?>/products/pendant.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-pendant-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product last" onclick="window.location='build-your-own-necklace-1.php'" style="cursor:pointer">
            <h2>Necklace</h2>
            <img src="<?=$img_dir;?>/products/necklace.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-necklace-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product" onclick="window.location='build-your-own-bracelet-1.php'" style="cursor:pointer">
            <h2>Bracelet</h2>
            <img src="<?=$img_dir;?>/products/bracelet.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-bracelet-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product" onclick="window.location='build-your-own-tincup-1.php'" style="cursor:pointer">
            <h2>Tin Cup</h2>
            <img src="<?=$img_dir;?>/products/tincup.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-tincup-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="build-choose-product" onclick="window.location='build-your-own-pearl-1.php'" style="cursor:pointer">
            <h2>Add a Pearl</h2>
            <img src="<?=$img_dir;?>/products/pearl.jpg" alt="" class="image" /><br />
            <p>Proin posuere urna id felis bibendum lobortis dolor id lipsum Praesent egestas dolor.</p>
            <a href="build-your-own-pearl-1.php" class="btn btn-action btn-medium"><span>Get Started</span></a>
        </div>
        <div class="clear"><!-- --></div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>