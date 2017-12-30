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

        <div class="page-title"><h1>Build Your Own Necklace</h1></div>
        <div class="build-steps">
            <div class="step first active">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearls</span>
                    <a href="build-your-own-necklace-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-left"><!-- --></div>
            <div class="step inactive">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Style</span>
                    <a href="build-your-own-necklace-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator"><!-- --></div>
            <div class="step inactive last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Necklace</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-necklace.php"); ?>
            <div class="options">
                <h2>Customize Your Pearls</h2>
                <span class="title">Pearl Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list four">
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jshow('colors1');jhide('colors2');jhide('colors3');jhide('colors4');jhide('colors5');jhide('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jshow('colors2');jhide('colors3');jhide('colors4');jhide('colors5');jhide('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jhide('colors2');jshow('colors3');jhide('colors4');jhide('colors5');jhide('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color3.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jhide('colors2');jhide('colors3');jshow('colors4');jhide('colors5');jhide('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color4.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jhide('colors2');jhide('colors3');jhide('colors4');jshow('colors5');jhide('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color5.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jhide('colors2');jhide('colors3');jhide('colors4');jhide('colors5');jshow('colors6');jhide('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('colorsempty');jshow('colors');jhide('colors1');jhide('colors2');jhide('colors3');jhide('colors4');jhide('colors5');jhide('colors6');jshow('colors7');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color7.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Pearl Color<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list" id="colorsempty">please choose a pearl type first</div>
                <div id="colors" style="display:none">
                <div class="option-list four" id="colors1" style="display:none">
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
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color7.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors2" style="display:none">
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
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors3" style="display:none">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color3.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors4" style="display:none">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
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
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors5" style="display:none">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
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
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color7.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors6" style="display:none">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
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
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color7.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="option-list four" id="colors7" style="display:none">
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color1.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color2.png" alt="" class="image" />
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
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color6.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item2">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/color7.png" alt="" class="image" />
                        <span class="label">Praesent</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                </div>
                <span class="title">Pearl Size<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize1.png" alt="" class="image" />
                        <span class="label">5.5 X 6mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize2.png" alt="" class="image" />
                        <span class="label">6 X 6.5mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize3.png" alt="" class="image" />
                        <span class="label">6.5 X 7mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize4.png" alt="" class="image" />
                        <span class="label">7.5 X 8mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize5.png" alt="" class="image" />
                        <span class="label">8 X 8.5mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/pearlsize6.png" alt="" class="image" />
                        <span class="label">8.5 X 9mm</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Pearl Quality<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">AAA</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">AA</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">A</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-necklace-2.php" class="btn btn-action"><span>Next: Customize Your Style</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>