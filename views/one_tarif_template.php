<?php $price = pregMat(translit($arr['title'])); ?>

<div id="<?=translit($arr['title']);?>" onClick="funcOneTarif('<?=translit($arr['title']);?>')">


        <div class="one-tarif">
            <?php if($arr['pay_period'] == 1): ?>
            <h3><?=$arr['pay_period']; ?> месяц</h3>
            <div class="one-tarif-options">
                <h4><?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
                <p>разовый платеж - <?=$arr['price'];?> &#8381;</p>
            </div>
            <?php endif; ?>

            <?php if($arr['pay_period'] == 3): ?>
            <h3><?=$arr['pay_period']; ?> месяца</h3>
            <div class="one-tarif-options">
                <h4><?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
                <p>разовый платеж - <?=$arr['price'];?> &#8381; <br>скидка -
                    <?=($arr['pay_period']*$price)-$arr['price'];?> &#8381;</p>
            </div>
            <?php endif; ?>

            <?php if($arr['pay_period'] >= 6): ?>
            <h3><?=$arr['pay_period']; ?> месяцев</h3>
            <div class="one-tarif-options">
                <h4><?=($arr['price']/$arr['pay_period']); ?> &#8381;/мес</h4>
                <p>разовый платеж - <?=$arr['price'];?> &#8381; <br>скидка -
                    <?=($arr['pay_period']*$price)-$arr['price'];?> &#8381;</p>
            </div>

            <?php endif; ?>
        </div>

    </div>