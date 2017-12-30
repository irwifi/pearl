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

        <div class="page-title"><h1>Build Your Own Bracelet</h1></div>
        <div class="build-steps">
            <div class="step first">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearls</span>
                    <a href="build-your-own-bracelet-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-right"><!-- --></div>
            <div class="step active">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Style</span>
                    <a href="build-your-own-bracelet-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-left"><!-- --></div>
            <div class="step inactive last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Bracelet</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-bracelet.php"); ?>
            <div class="options">
                <h2>Customize Your Style</h2>
                <span class="title">Bracelet Style<!-- <span class="selected">Praesent</span> --></span>
                <div class="form-radio">
                    <input type="radio" name="style" id="pearls"><label for="pearls">Pearls only</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="style" id="diamonds" checked><label for="diamonds">Pearls with Diamond Rondelles</label>
                </div>
                <div id="extra">
                    <span class="title">Rondelle Quantity<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list two">
                        <a class="item item1">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-rondelle1.png" alt="" class="image" />
                            <span class="label">Every 5 Pearls (8 total)</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item1">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-rondelle2.png" alt="" class="image" />
                            <span class="label">Every 3 Pearls (14 total)</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item1">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-rondelle3.png" alt="" class="image" />
                            <span class="label">Every 2 Pearls (21 total)</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item1">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-rondelle4.png" alt="" class="image" />
                            <span class="label">Every Other Pearl (44 total)</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
                    <span class="title">Diamond Quality<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list three">
                        <a class="item item2">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-diamond.png" alt="" class="image" />
                            <span class="label">G Color, SI Clarity</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item2">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-diamond.png" alt="" class="image" />
                            <span class="label">F Color, VS Clarity</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item2">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-diamond.png" alt="" class="image" />
                            <span class="label">D Color, IS Clarity</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
                </div>
                <span class="title">Bracelet Length<!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">16"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">24"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">20"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">28"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">30"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">40"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Metal Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">14K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">14K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">14K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color silver"><!-- --></div>
                        <span class="label">Silver</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">18K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">18K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">18K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color platinum"><!-- --></div>
                        <span class="label">Platinum</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-bracelet-3.php" class="btn btn-action"><span>Next: Review Your Bracelet</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>