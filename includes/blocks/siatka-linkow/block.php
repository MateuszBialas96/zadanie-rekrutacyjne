<?php

/**
 * @var array $block
 */
$idsiatka = "siatka-linkow-" . $block["id"];

if (isset($block["data"]["preview_image_help"])):
    echo '<img src="' .
        $block["data"]["preview_image_help"] .
        '" style="width:100%; height:auto;">';
else:
     ?>
   
    <section class="siatka-linkow-slider splide" id="<?= $idsiatka ?>">
                <div class="splide__track">
                        <div class="splide__list section siatka-linkow">
                            <?php if (have_rows("link_grid")); ?>
                    <?php while (have_rows("link_grid")):
                        the_row(); ?>
                        <a class="siatka-linkow__item splide__slide" href="<?php the_sub_field(
                            "link"
                        ); ?>"><div class="siatka-linkow__item-container"><img src="<?php the_sub_field(
    "zdjecie_w_tle"
); ?>"><span><?php the_sub_field("label"); ?></span></div></a>
                <?php
                    endwhile; ?>
                </div>
                </div>
    </section>
<?php
endif; ?>
