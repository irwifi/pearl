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
        <div class="build-steps">
            <div class="step">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearl</span>
                    <a href="build-your-own-pearl-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="step active">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Setting</span>
                    <a href="build-your-own-pearl-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="step inactive last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Product</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-pearl.php"); ?>
            <div class="options">
                <h2>Customize Your Setting</h2>
                <span class="title">Setting Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a>&nbsp;&nbsp;&nbsp;<input type="checkbox" checked><span class="selected"><label for="pearls">Setting with Diamonds</label></span></span>
                <div class="option-list two">
                    <a class="item item1">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Praesent style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Egestas style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Lipsum style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Suscipit style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div id="extra">
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
                <span class="title">Metal Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a></span>
                <div class="option-list four">
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">14K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">14K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">14K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color silver"><!-- --></div>
                        <span class="label">Silver</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">18K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">18K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">18K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color platinum"><!-- --></div>
                        <span class="label">Platinum</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Engraving<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a>&nbsp;&nbsp;<span class="selected">(optional)</span></span>
                <div class="form-input">
                    <input type="text" class="input" value="Your engraving..." />
                    <div class="note">24 characters remaining</div>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-pearl-3.php" class="btn btn-action"><span>Next: Review Your Ring</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>