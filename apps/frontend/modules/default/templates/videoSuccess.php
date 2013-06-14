<img src="/images/<?= $sf_user->getCulture(); ?>/caption-wideo.png" class="caption"/>

<style>
    div.video_item {
        width:639px;
        height: 134px;
        background-image: url("/images/video_bg.png");
        background-color: transparent;
        background-position: top left;
        background-repeat: no-repeat;
        position: relative;
        /*margin-bottom: 20px;*/
    }
    div.video_item div.thumb img {
        position: absolute;
        width: 158px;
        top: -10px;
    }    
    div.video_item div.thumb {
        width:158px;
        top: 19px;
        left: 1px;
        height: 89px;
        overflow: hidden;
        position: relative;
    }    

    div.video_item a.button {
        width:58px;
        height: 59px;
        background-image: url("/images/video_button.png");
        background-color: transparent;
        background-position: top left;
        background-repeat: no-repeat;
        position: absolute;
        top: 36px;
        left: 50px;
        font-family: "Myriad",sans-serif;
    }

    div.title {
        position: absolute;
        top: 17px;
        left: 190px;
        width: 344px;
        height: 30px;
        /*background-color: rgba(0,0,255,0.5);*/
        color: #ffffff;
        line-height: 30px;
        font-family: "Myriad",sans-serif;
        font-weight: bold;
        font-size: 14px;
    }
    div.description {
        font-weight: normal;
        font-size: 13px;
        font-family: "Myriad",sans-serif;
        position: absolute;
        top: 52px;
        left: 190px;
        width: 384px;
        height: 55px;
        /*background-color: rgba(0,255,255,0.5);*/
        color: #ffffff;
        line-height: 1.5em;
        overflow: hidden;
    }


</style>

<?php if ($videos->count() > 0): ?>
    <?php foreach ($videos as $video): ?>
        <?php parse_str(parse_url($video->getLink(), PHP_URL_QUERY), $vars); ?>
        <div class="video_item">
            <div class="thumb">
                <img src="http://img.youtube.com/vi/<?php echo $vars['v']; ?>/default.jpg" class="thumb"/>
            </div>
            <a href="<?php echo $video->getLink(); ?>#custom=true&width=700&height=516" rel="prettyPhoto" class="button"></a>
            <div class="title"><?php echo $video->getTitle(); ?></div>
            <div class="description"><?php echo $video->getDescription(); ?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<script type="text/javascript" charset="utf-8">
    $(function(){			
        $("a[rel^='prettyPhoto']").prettyPhoto({
            default_width: 700,
            default_height: 516,
            social_tools: '',
            autoplay: true
        });
    });
</script>


