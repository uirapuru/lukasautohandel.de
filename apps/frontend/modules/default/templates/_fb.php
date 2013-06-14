<style>
    div#fb-like-box {
        background-color: #060606;
        /*border: 1px solid #2C2C2C;*/
        overflow:hidden;
        padding: 12px 7px 10px 10px;
        width: <?php if(preg_match("@Safari@ui",$_SERVER["HTTP_USER_AGENT"])) { echo "285"; } else { echo "302"; } ?>px;
        -moz-box-sizing: border-box;
        color: #B6B6B6;
        font-family: Helvetica,Arial sans serif;
        font-size: 11px;
        text-align: justify;
    }

    div#fb-like-box div#fb-header-title {
        width:230px;float:left;
    }

    div#fb-like-box div#fb-header-title h2 {
        color: #01b7ff;
        font-size: 24px;
        font-family: Tahoma, sans-serif;
        font-weight: normal !important;
    }
    div#fb-like-box div#fb-like-button{
        width:53px;float:left;
    }
    div#fb-like-box div#fb-like-button iframe {
        border:none; overflow:hidden; width:49px; height:21px;   
    }
</style>

<div id="fb-like-box">
    <div id="fb-header-title">
        <h2>Facebook</h2>
    </div>
    <div id="fb-like-button">
        <iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href=<?php echo urlencode(sfConfig::get("app_fb_fanpage")); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=49&amp;action=like&amp;colorscheme=dark&amp;height=21" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
    <div class="textwidget">
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

        <fb:fan href="<?php echo sfConfig::get("app_fb_fanpage"); ?>" colorscheme="dark" connections="10" width="275" height="165" show_faces="true" stream="false" header="false" profile_id="<?php echo sfConfig::get("app_fb_profile_owner"); ?>" css="<?php echo $sf_context->getRequest()->getUriPrefix() . sfConfig::get("app_fb_custom_css") ?>"></fb:fan>
    </div>
</div>