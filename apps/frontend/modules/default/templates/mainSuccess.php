<img src="/images/<?= $sf_user->getCulture(); ?>/caption-news.png" class="caption"/>

<?php foreach($news as $new): ?>
 <?php echo get_partial("news",array("news" => $new)); ?>
<?php endforeach; ?>

<? /*
<div class="news-item">
    <div class="news-header">
        <div class="news-date">Piątek : 23.12.2012</div>
        <div class="news-title">Et nisl postea sed, nec ad constituto intellegam.</div>
    </div>
    <div class="news-content-wrapper">
        <div class="news-content"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
        <ul class="news-footer">
            <li class="news-fb-link"><a href="#"></a></li>
            <li class="news-cloud-link"><a href="#"></a></li>
            <li class="news-yt-link"><a href="#"></a></li>
            <li class="news-tw-link"><a href="#"></a></li>
        </ul> 
    </div>
</div> */ ?>