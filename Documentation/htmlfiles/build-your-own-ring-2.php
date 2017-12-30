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

        <div class="page-title"><h1>Build Your Own Ring</h1></div>
        <div class="build-steps">
            <div class="step first">
                <span class="number">1</span>
                <div class="name">
                    <span class="title">Customize Your Pearl</span>
                    <a href="build-your-own-ring-1.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-right"><!-- --></div>
            <div class="step active">
                <span class="number">2</span>
                <div class="name">
                    <span class="title">Customize Your Setting</span>
                    <a href="build-your-own-ring-2.php">Edit your selection</a>
                </div>
            </div>
            <div class="separator active-left"><!-- --></div>
            <div class="step inactive last">
                <span class="number">3</span>
                <div class="name">
                    <span class="title">Review Your Ring</span>
                </div>
            </div>
            <div class="clear"><!-- --></div>
        </div>
        <div class="build-content">

            <?php include("includes/photo-ring.php"); ?>
            <div class="options">
                <h2>Customize Your Setting</h2>
                <span class="title">Setting Style<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><br /><br /><input type="checkbox" checked="checked"><span class="selected"><label for="pearls">Setting with Diamonds</label></span></span>
                <div class="option-list two">
                    <a class="item item1" onclick="javascript:jshow('style1');jhide('style2');jhide('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Praesent style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jshow('style2');jhide('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Egestas style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jhide('style2');jshow('style3');jhide('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
                        <span class="label">Lipsum style</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item1" onclick="javascript:jhide('style1');jhide('style2');jhide('style3');jshow('style4');">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <img src="<?=$img_dir;?>/products/option-ring.png" alt="" class="image" />
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
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8a">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
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
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8b">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
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
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8c">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
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
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Vestibulum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Aenean</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Maecenas</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Elementum</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
                            <span class="label">Accumsan</span>
                            <span class="price-from">from $120</span>
                        </a>
                        <a class="item item8d">
                            <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                            <img src="<?=$img_dir;?>/products/option-ring-style.png" alt="" class="image" />
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
                <span class="title">Ring Size<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a><!-- <span class="selected">Praesent</span> --></span>
                <div id="basic" class="option-list four">
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">5.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">6</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">6.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">7</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">7.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">8</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">8.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                    <a class="show-more" id="showmore" onclick="javascript:jhide('showmore');jhide('basic');jshow('more');jshow('showless');"><span>View more sizes</span></a>
                </div>
                <div class="option-list four" id="more" style="display:none;">
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">4</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">4.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">5.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">6</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">6.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">7</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">7.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">8</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">8.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">9</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">9.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">10</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">10.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">11</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <a class="item item7">
                        <img src="<?=$img_dir;?>/selected.png" alt="" class="check" />
                        <span class="label strong">11.5</span>
                        <span class="price-from">from $120</span>
                    </a>
                    <div class="clear"><!-- --></div>
                    <a class="show-less" id="showless" onclick="javascript:jhide('more');jshow('showmore');jhide('showless');jshow('basic');" style="display:none;"><span>View less sizes</span></a>
                </div>
                <span class="title">Engraving<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a>&nbsp;&nbsp;<span class="selected">(optional)</span></span>
                <div class="form-input">
                    <input type="text" class="input" id="engraving" maxlength="24" value="Your engraving..." />
                    <div class="note"><span id="chars">24</span> characters remaining</div>
                    <script>
                        var maxLength = 24;
                        $('input#engraving').focus(function() {
                          $(this).val('');
                          var length = $(this).val().length;
                          var length = maxLength-length;
                          $('#chars').text(length);
                        });
                        $('input#engraving').blur(function() {
                          $(this).val('Your engraving...');
                          var length = $(this).val().length;
                          var length = maxLength-length;
                          $('#chars').text(length);
                        });
                        $('input#engraving').keyup(function() {
                          var length = $(this).val().length;
                          var length = maxLength-length;
                          $('#chars').text(length);
                        });
                    </script>

                </div>
                <span class="title">Engraving Font<a href="#" class="question-tip tooltip" title="Ullamcorper ligula nibh in diam pellentesque scelerisque elit nisi, porttitor venenatis sapien gravida">?</a>&nbsp;&nbsp;<span class="selected">(optional)</span></span>
                <div class="font-selector">
                    <div class="preview">
                        <p></p>
                        <script>
                            $( "input#engraving" )
                            .keyup(function() {
                            var value = $( this ).val();
                                $( "div.preview p" ).text( value );
                            })
                            .keyup();
                        </script>
                    </div>
                    <select id="fontfamily">
                        <option value="default" selected="selected">Poppins</option>
                        <option value="font1">Bitter</option>
                        <option value="font2">Lobster</option>
                        <option value="font3">Gloria Hallelujah</option>
                        <option value="font4">Pacifico</option>
                    </select>
                    <link href="https://fonts.googleapis.com/css?family=Bitter:700|Gloria+Hallelujah|Lobster|Pacifico" rel="stylesheet">
                    <style>
                        .build-your-own .build-content .options .font-selector p { font-family:'Poppins'; font-weight:700; }
                        .build-your-own .build-content .options .font-selector .default { font-family:'Poppins'; font-weight:700; }
                        .build-your-own .build-content .options .font-selector .font1 { font-family:'Bitter'; font-weight:700; }
                        .build-your-own .build-content .options .font-selector .font2 { font-family:'Lobster'; }
                        .build-your-own .build-content .options .font-selector .font3 { font-family:'Gloria Hallelujah'; }
                        .build-your-own .build-content .options .font-selector .font4 { font-family:'Pacifico'; }
                    </style>
                    <script>
                        var selectedFont = 'default';
                        $('#fontfamily').change(function(){
                            $('div.preview p').removeClass(selectedFont).addClass($(this).val());
                            selectedFont = $(this).val();
                        });
                    </script>
                </div>
                <div class="actions">
                    <span class="build-price">Price: $1,250</span>
                    <a href="build-your-own-ring-3.php" class="btn btn-action"><span>Next: Review Your Ring</span></a>
                </div>
            </div>
            <div class="clear"><!-- --></div>

        </div>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>