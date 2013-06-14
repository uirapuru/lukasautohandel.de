<?php
$weekdays = array(
    "en" => array(
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ),
    "pl" => array(
        "Niedziela",
        "Poniedziałek",
        "Wtorek",
        "Środa",
        "Czwartek",
        "Piątek",
        "Sobota"
        ));
?>


<div class="news-item">
    <div class="news-header">
        <div class="news-date"><?php echo __($weekdays[$sf_user->getCulture()][(int) date("w", strtotime($news->getCreatedAt()))]); ?> : <?php echo date("d.m.Y", strtotime($news->getCreatedAt())); ?></div>
        <a href="<?php echo url_for("@show_news?id=" . $news->getId() . "&date=" . date("Y-m-d", strtotime($news->getCreatedAt())) . "&title=" . $news->getTitleSlug()); ?>" class="news-title"><?php echo $news->getMsgtitle(); ?></a>
    </div>
    <div class="news-content-wrapper">
        <div class="news-content"><?php echo $sf_data->getRaw('news')->getMsgbody(); ?></div>
        <ul class="news-footer">
            <li class="news-fb-link"><a href="<?php echo sfConfig::get("app_fb_fanpage"); ?>"></a></li>
            <li class="news-cloud-link"><a href="<?php echo sfConfig::get("app_cloud_page"); ?>"></a></li>
            <li class="news-yt-link"><a href="<?php echo sfConfig::get("app_yt_channel"); ?>"></a></li>
            <li class="news-tw-link"><a href="<?php echo sfConfig::get("app_twitter"); ?>"></a></li>
        </ul> 
    </div>
</div>






























