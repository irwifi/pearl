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

        <div class="page-title"><h1>Add a Pearl</h1></div>
        <div class="build-steps two">
            <div class="step first active">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearls &amp; Style</span>
                    <a href="build-your-own-pearl-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-left"><!-- --></div>
            <div class="step inactive last">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Review Your Product</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-pearl.php"); ?>
            <div class="options">
                <h2>Customize Your Pearls &amp; Style</h2>
                <div class="form-radio">
                    <input type="radio" name="style" id="pearls" checked><label for="pearls">Pearls only</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="style" id="diamonds"><label for="diamonds">Pearls with Chain</label>
                </div>
                <span class="title">Pearl Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item item1 selected">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Akoya</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Pearl Color<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color3.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color4.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color5.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Pearl Size<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize1.png" alt="" class="image" />
                        <span class="label">6mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize2.png" alt="" class="image" />
                        <span class="label">7mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize3.png" alt="" class="image" />
                        <span class="label">8mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Pearl Quality<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">AAA</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">AA</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">A</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Number of Pearls<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">1</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">2</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">3</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">4</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">5</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">6</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">7</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">8</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">9</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">10</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">11</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label">12</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div id="extra" style="display:none">
                <span class="title">Chain Length<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">16"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">17"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">18"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">19"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">20"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">21"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">22"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">23"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="show-more" id="showmore" onclick="javascript:jhide('showmore');jshow('more');jshow('showless');"><span>View more lengths</span></a>
                    <div id="more" style="display:none;">
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">24"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">25"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">26"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">27"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">28"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">29"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">30"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">31"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">32"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">33"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">34"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">35"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">36"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">37"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">38"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">39"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    </div>
                    <div class="clear"><!-- --></div>
                    <a class="show-less" id="showless" onclick="javascript:jhide('more');jshow('showmore');jhide('showless');" style="display:none;"><span>View less lengths</span></a>
                </div>
                </div>
                <span class="title">Metal Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a></span>
                <div class="option-list four">
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">14K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">14K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">14K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color silver"><!-- --></div>
                        <span class="label">Silver</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">18K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">18K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">18K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item6">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color platinum"><!-- --></div>
                        <span class="label">Platinum</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-pearl-2.php" class="btn btn-action"><span>Next: Review Your Product</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>