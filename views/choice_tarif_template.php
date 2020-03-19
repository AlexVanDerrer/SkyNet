<div id="<?=translit($arr['title'].$arr['ID']);?>" class="hidden">

    <div class="choice-tarif-title">
        <div class="back">‹</div>
        <h3>Выбор тарифа</h3>
    </div>

    <div class="choice-tarif">
        <?php if($arr['pay_period'] == 1): ?>
        <div><h3>Тариф "<?=$arr['title'];?>"</h3></div>
        <h4>Период оплаты - <?=$arr['pay_period']; ?> месяц <br>
            <?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
        <?php endif; ?>

        <?php if($arr['pay_period'] == 3): ?>
        <div><h3>Тариф "<?=strstr($arr['title'], " (", true); ?>"</h3></div>
        <h4>Период оплаты - <?=$arr['pay_period']; ?> месяца <br>
            <?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
        <?php endif; ?>

        <?php if($arr['pay_period'] >= 6): ?>
        <div><h3>Тариф "<?=strstr($arr['title'], " (", true); ?>"</h3></div>
        <h4>Период оплаты - <?=$arr['pay_period']; ?> месяцев <br>
        <?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
        <?php endif; ?>

        <div class="choice-tarif-options">
            <p>разовый платеж - <?=$arr['price']; ?> руб <br>со счета спишется - <?=$arr['price']; ?> руб</p>
        </div>
        <div class="choice-tarif-date">
            <p>вступит в силу - сегодня <br>активно до - <?= date("d.m.Y", $arr['new_payday']);?> </p>
        </div>
        <div class="button"><a class="" href="#">Выбрать</a></div>
    </div>
</div>