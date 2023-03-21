<?php

/**
 * @var array $block
 */

$idcta = "cta-" . $block["id"];
$bg = get_field("kolor_tla_cta");
$tresc = get_field("tresc_cta");
$label1 = get_field("label_przycisk_1");
$url1 = get_field("link_przycisk_1");
$label2 = get_field("label_przycisk_2");
$url2 = get_field("link_przycisk_2");

if (isset($block["data"]["preview_image_help"])):
    echo '<img src="' .
        $block["data"]["preview_image_help"] .
        '" style="width:100%; height:auto;">';
else:
     ?>
    <section class="section cta auto-layout" id="<?= $idcta ?>" style="background: <?= $bg ?>">
        <div class="cta__content auto-layout">
            <?= $tresc ?>
        </div>
        <div class="cta__buttons auto-layout">
            <a href="<?= $url1 ?>"><button class="secondary-button"><?= $label1 ?></button></a>
            <a href="<?= $url2 ?>"><button class="primary-button"><?= $label2 ?></button></a>
        </div>
    </section>
<?php
endif; ?>
