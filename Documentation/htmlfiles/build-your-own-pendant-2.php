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

        <div class="page-title"><h1>Build Your Own Pendant</h1></div>
        <div class="build-steps">
            <div class="step first">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearl</span>
                    <a href="build-your-own-pendant-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-right"><!-- --></div>
            <div class="step active">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Style</span>
                    <a href="build-your-own-pendant-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-left"><!-- --></div>
            <div class="step inactive last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Pendant</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-pendant.php"); ?>
            <div class="options">
                <h2>Customize Your Style</h2>
                <span class="title">Pendant Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><br /><br /><input type="checkbox" checked><span class="selected"><label for="pearls">Pendant with Diamonds</label></span></span>
                <div class="option-list two">
                    <a class="item item1" onclick="javascript:jshow('style1');jhide('style2');jhide('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                        <span class="label">Praesent style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jshow('style2');jhide('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                        <span class="label">Egestas style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jhide('style2');jshow('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                        <span class="label">Lipsum style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jhide('style2');jhide('style3');jshow('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                        <span class="label">Suscipit style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div id="style1" style="display:none">
                    <span class="title">Lipsum Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list three">
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant1.png" alt="" class="image" />
                            <span class="label">Phasellus</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
                </div>
                <div id="style2" style="display:none">
                    <span class="title">Egestas Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list three">
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant2.png" alt="" class="image" />
                            <span class="label">Phasellus</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
                </div>
                <div id="style3" style="display:none">
                    <span class="title">Praesent Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list three">
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant3.png" alt="" class="image" />
                            <span class="label">Phasellus</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
                </div>
                <div id="style4" style="display:none">
                    <span class="title">Lipsum Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                    <div class="option-list three">
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-pendant4.png" alt="" class="image" />
                            <span class="label">Phasellus</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <div class="clear"><!-- --></div>
                    </div>
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
                <span class="title">Chain Width<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a></span>
                <div class="option-list two">
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant-thin.png" alt="" class="image" />
                        <span class="label">Thin Chain</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item3">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-pendant-thick.png" alt="" class="image" />
                        <span class="label">Thick Chain</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Chain Length<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div class="option-list three">
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">16"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">18"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">20"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">22"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">24"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item4">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">26"</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <span class="title">Metal Type<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a></span>
                <div class="option-list four">
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">14K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">14K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">14K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color silver"><!-- --></div>
                        <span class="label">Silver</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color rose-gold"><!-- --></div>
                        <span class="label">18K Rose Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color yellow-gold"><!-- --></div>
                        <span class="label">18K Yellow Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color white-gold"><!-- --></div>
                        <span class="label">18K White Gold</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item metal item5">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <div class="color platinum"><!-- --></div>
                        <span class="label">Platinum</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-pendant-3.php" class="btn btn-action"><span>Next: Review Your Pendant</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>