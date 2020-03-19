<?php $max_price = pregMat(translit($arr['title'])); ?>
<div class="tarifs tarif-<?=translit($arr['title']);?>" onClick="func('<?=translit($arr['title']);?>')">
    <h2>Тариф "<?= $arr['title']?>"</h2>
    <div class="go">›</i></div>
<?php if ( $arr['title'] == 'Вода' or $arr['title'] == 'Вода HD') : ?>
    <div class="speed" style="background: #0075d9; "><?= $arr['speed']?> Мбит/с</div>
    <?php endif; ?>

    <?php if ( $arr['title'] == 'Земля') : ?>
    <div class="speed" style="background: #70603e;"><?= $arr['speed']?> Мбит/с</div>
    <?php endif; ?>

    <?php if ( $arr['title'] == 'Огонь' or $arr['title'] == 'Огонь HD') : ?>
    <div class="speed" style="background: #e74807;"><?= $arr['speed']?> Мбит/с</div>
    <?php endif; ?>
    <div class="tarif-options">
        
    <h3> <?=($arr['tarifs'][3]['price']/$arr['tarifs'][3]['pay_period']); ?> - <?=$max_price; ?> &#8381;/мес</h3>

    <?php if(isset($arr['free_options'])): ?>
    <p><?= $arr['free_options'][0]; ?><br><?= $arr['free_options'][1]; ?><br><?= $arr['free_options'][2]; ?></p>

    <?php endif; ?>
</div>
<div class="tarif-link">
    <a href="<?=$arr['link']?>">узнать подробнее на сайте www.sknt.ru</a>
</div>

</div> 