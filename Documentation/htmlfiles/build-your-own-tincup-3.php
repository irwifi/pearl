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

        <div class="page-title"><h1>Build Your Own Tin Cup</h1></div>
        <div class="build-steps">
            <div class="step first">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearls</span>
                    <a href="build-your-own-necklace-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator"><!-- --></div>
            <div class="step">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Style</span>
                    <a href="build-your-own-necklace-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-right"><!-- --></div>
            <div class="step active last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Tin Cup</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-tincup.php"); ?>
            <div class="options">
                <h2>Review Your Necklace</h2>
                <div class="actions clean">
                    <span class="build-price">Price: $1,250</span>
                    <a href="#" class="btn btn-simple btn-wishlist"><span>Add To Wishlist</span></a><a href="#" class="btn btn-action btn-cart"><span>Add To Cart</span></a>
                </div>
                <div class="summary">
                    <span class="title">Summary</span>
                    <div class="column">
                        <strong>Pearl selection</strong><br />
                        Lorem: Dolor sit amet<br />
                        Consectetur: Adipiscing<br />
                        Fusce: Varius egestas<br />
                        Mollis: Integer turpis<br />
                        Proin elit: Risus varius<br />
                        <a href="build-your-own-necklace-1.php">Edit your selection</a><br />
                    </div>
                    <div class="column">
                        <strong>Style selection</strong><br />
                        Lorem: Dolor sit amet<br />
                        Consectetur: Adipiscing<br />
                        Fusce: Varius egestas<br />
                        Mollis: Integer turpis<br />
                        Proin elit: Risus varius<br />
                        <a href="build-your-own-necklace-2.php">Edit your selection</a><br />
                    </div>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="share">
                    <span class="title">Share this item</span>
                    <ul class="social">
                        <li><a href="#"><span class="icon" rel="_blank">F</span></a></li>
                        <li><a href="#"><span class="icon" rel="_blank">L</span></a></li>
                        <li><a href="#"><span class="icon" rel="_blank">T</span></a></li>
                        <li><a href="#"><span class="icon" rel="_blank">G</span></a></li>
                        <li><a href="#" rel="_blank"><span class="icon iconplus">I</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>