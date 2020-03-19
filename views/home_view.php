<?php require "head.php";?>

<div class="container-fluid">
    <div class="row">
        <div class="col column-1">
            <div id="tarifs">
                <?=$all_tarifs_str ?>
            </div>

        </div>

        <div class="col-sm column-2">
            <div id="one-tarif">
                <div class="zemlya hidden">
                        <div class="one-tarif-title">
                        <div class="home">‹</div>
                        <h3>Тариф "Земля"</h3>
                    </div>
                    <?=$tarif_ground_str ?>
                </div>
                <div class="voda hidden">
                    <div class="one-tarif-title">
                    <div class="home">‹</i></div>
                        <h3>Тариф "Вода"</h3>
                    </div>
                    <?=$tarif_whater_str ?>
                </div>
                <div class="ogon hidden">
                    <div class="one-tarif-title">
                    <div class="home">‹</i></div>
                        <h3 >Тариф "Огонь"</h3>
                    </div>
                    <?= $tarif_fire_str ?>
                </div>
                <div class="voda-hd hidden">
                    <div class="one-tarif-title">
                    <div class="home">‹</i></div>
                        <h3>Тариф "Вода HD"</h3>
                    </div>
                    <?= $tarif_whaterHD_str?>
                </div>
                <div class="ogon-hd hidden">
                    <div class="one-tarif-title">
                    <div class="home">‹</i></div>
                        <h3>Тариф "Огонь HD"</h3>
                    </div>
                    <?=$tarif_fireHD_str ?>
                </div>

            </div>
        </div>

        <div class="col-lg column-3">
            <div id="choice-tarif">
                <div class="choice-zemlya">
                    <?=$choice_ground_str ?>
                </div>
                <div class="choice-voda">
                    <?=$choice_whater_str ?>
                </div>
                <div class="choice-ogon">
                    <?= $choice_fire_str ?>
                </div>
                <div class="choice-voda-hd">
                    <?= $choice_whaterHD_str?>
                </div>
                <div class="choice-ogon-hd">
                    <?=$choice_fireHD_str ?>
                </div>

            </div>

        </div>
    </div>


</div>


<?php require "footer.php";?>