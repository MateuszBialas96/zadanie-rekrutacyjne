<?php

/**
 * @var array $block
 */
$idopinie = "opinie-" . $block["id"];
$naglowek = get_field("naglowek_sekcji");
$tresc = get_field("tresc_staly_box");
$label1 = get_field("label_button_1");
$url1 = get_field("url_button_1");
$label2 = get_field("label_button_2");
$url2 = get_field("url_button_2");

if (isset($block["data"]["preview_image_help"])):
    echo '<img src="' .
        $block["data"]["preview_image_help"] .
        '" style="width:100%; height:auto;">';
else:
     ?>
   
   <section class="opinie">
  <div class="opinie__naglowek">
    <span> <?= $naglowek ?> </span>
  </div>
  <div class="opinie__wrapper auto-layout">
    <div class="opinie__slider splide" id="
			<?= $idopinie ?>">
      <div class="splide__track">
        <div class="splide__list"> <?php if (
            have_rows("opinie")
        ); ?> <?php while (have_rows("opinie")):
     the_row(); ?> 
          <div class="opinie__container splide__slide">
                <span> <?php the_sub_field("opis"); ?> </span>
                <span> <?php the_sub_field("imie_i_nazwisko"); ?> </span>
                <span> <?php the_sub_field("stanowisko"); ?> </span>
          </div> <?php
 endwhile; ?> 
        </div>
      </div>
    </div>
    <div class="opinie__staly-box">
      <div class="opinie__content">
        <span> <?= $tresc ?> </span>
      </div>
      <div class="cta__buttons auto-layout">
        <a href="
					<?= $url1 ?>">
          <button class="secondary-button"> <?= $label1 ?> </button>
        </a>
        <a href="
					<?= $url2 ?>">
          <button class="primary-button"> <?= $label2 ?> </button>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
endif; ?>
