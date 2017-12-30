<script src="<?=$js_dir;?>/jquery.js" type="text/javascript"></script>
	<script src="<?=$js_dir;?>/icheck.js" type="text/javascript"></script>
	<script src="<?=$js_dir;?>/custom.js" type="text/javascript"></script>
    <script src="<?=$js_dir;?>/tooltip.js" type="text/javascript"></script>
    <script src="<?=$js_dir;?>/magiczoom.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
        increaseArea: '20%' // optional
      });
      $('input').on('ifClicked', function(event){
        $("div#extra").toggle();
      });
      $('input#pearls').on('ifClicked', function(event){
        $("#pearlsonly").show();
        $("#withdiamonds").hide();
      });
      $('input#diamonds').on('ifClicked', function(event){
        $("#pearlsonly").hide();
        $("#withdiamonds").show();
      });
    });
    </script>
    <script>
    $(document).ready(function(){
        $(".item1").click(function() {
            $(".item1").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item2").click(function() {
            $(".item2").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item3").click(function() {
            $(".item3").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item4").click(function() {
            $(".item4").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item5").click(function() {
            $(".item5").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item6").click(function() {
            $(".item6").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item7").click(function() {
            $(".item7").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item8a").click(function() {
            $(".item8a").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item8b").click(function() {
            $(".item8b").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item8c").click(function() {
            $(".item8c").removeClass('selected');
            $(this).addClass('selected');
        });
        $(".item8d").click(function() {
            $(".item8d").removeClass('selected');
            $(this).addClass('selected');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.tooltip').tooltipster({
            maxWidth:360
        });
    });
    </script>