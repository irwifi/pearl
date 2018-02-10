$(document).ready(function () {

    /*  $(document).on('touchmove',function(event){
         console.log(event.type.toLowerCase());
     }); */

    //Array of images
    //Testing remote images so that we can test image load
    /*  var imageArray2 = [
         'http://imgsv.imaging.nikon.com/lineup/dslr/d600/img/sample01/img_05_l.jpg',
         'http://farm3.static.flickr.com/2735/4108753360_9c225d5663_b.jpg',
         'http://img.olx.com.br/images/92/928722108929091.jpg',
         'http://www.wpaperhd.com/uploads/originals/2016/03/21/iphone-6se-camera-photo-test-N56K.jpg',
         'https://i.ytimg.com/vi/4p4NB7tvCdY/maxresdefault.jpg',
         'http://www.wallpapers13.com/wp-content/uploads/2016/10/The-color-of-autumn-forest-with-golden-yellow-leaves-of-aspen-trees-pine-green-mountain-rock-overcast-Colorado-United-States-Wallpaper-HD-1920x1200-1440x900.jpg',
         'http://www.wallpapers13.com/wp-content/uploads/2017/07/Meadow-Field-Silage-Ball-with-Green-Grass-in-Roll-San-Juan-Mountains-Colorado-Summer-Wallpaper-Hd-2560x1600.jpg',
         'http://www.wallpapers13.com/wp-content/uploads/2016/10/Autumn-landscape-Colorado-USA-forest-pine-trees-birch-leaves-with-golden-yellow-rocky-mountains-snow-sky-clouds-Desktop-Wallpaper-HD-2560x1600-1920x1200.jpg',
         'http://www.wallpapers13.com/wp-content/uploads/2016/10/Autumn-photo-Colorado-United-States-beautiful-nature-forest-with-pine-trees-green-leaves-with-golden-yellow-rocky-mountains-Desktop-Wallpaper-HD-2560x1600-1440x900.jpg',
         'https://cdn.photographylife.com/wp-content/uploads/2012/10/Nikon-D600-Sample-5.jpg',
         'https://digital-photography-school.com/wp-content/uploads/2016/12/Camera-on-ground-perspective-02.jpg',
         'https://vice-images.vice.com/images/content-images-crops/2015/08/27/urban-fox-hunter-084-body-image-1440675638-size_1000.jpg?output-quality=75',
         'https://c1.staticflickr.com/5/4016/4337894705_9e70b70017_b.jpg'
     ]; */

    //Array of images
    //Testing on local server with almost zero image load time
    var imageArray = [];

    //images for selected pearls
    var backgroundArray = [];

    for (i = 0; i < 24; i++) {
        var num = (i + 1) < 10 ? '0' + (i + 1) : (i + 1);
        imageArray[i] = "images/ring/360-No-Pearl_000" + (num) + ".png";
        backgroundArray[i] = "images/Pearl/black_"+(i+1)+".png";
    }

    /**
     * jq360 function parameter
     */
    var options = {
        //list of images(mandatory)
        //more images->more smoothness->but more image load time
        images: imageArray,

        //default pearl images
        background: backgroundArray,

        //rotaion method
        //click - click and drag to rotate
        //mousemove - capture pointer motion and rotate
        //auto - automatic rotation in defined direction(forward or backward)
        method: "click",

        //diraction of rotation
        direction: "forward"
    }

    /**
     * jq360 function
     */
    $('.JQ360').jq360(options);

    //changing pearl
    $("input[name='pearl']").on("change", function () {
        var pearl = $("input[name='pearl']:checked").first().val();

        //background: image array of selected pearl
        //store locally or loaded dynamically using ajax (here used local array)
//        for (i = 0; i < 24; i++) {
//            backgroundArray[i] = pearl;
//        }
        $('.JQ360').trigger("loadBackground", {
            background: backgroundArray
        });

    });

    $(".pearl label").on("click", function () {
        $("input[name='pearl']").removeAttr('checked');
        $(this).prev("input[name='pearl']").attr('checked', 'checked').change();
    });


});
