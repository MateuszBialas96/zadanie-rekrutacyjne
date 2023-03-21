<footer>
        <div class="footer-container auto-layout">
            <div class="footer-container__logo-section">
                <?php if (get_field("logo_stopka", "options")): ?> <img src="
                                                    <?php the_field(
                                                        "logo_stopka",
                                                        "options"
                                                    ); ?>" /> <?php endif; ?>
                <p class="footer-container__logo-section-paragraph">                                    
                    <?php if (get_field("opis_pod_logo", "options")): ?> 
                                                        <?php the_field(
                                                            "opis_pod_logo",
                                                            "options"
                                                        ); ?> <?php endif; ?>  
                </p>
            </div>
            <div class="footer-container__link-section">
                <p class="footer-container__link-section-paragraph">Quick links</p>                                     
                    <?php wp_nav_menu([
                        "menu" => "footer_menu",
                        "theme_location" => "footer_menu",
                        "depth" => 1,
                        "menu_class" => "footer__menu",
                        "container" => false,
                    ]); ?>
            </div>
            <div class="footer-container__contact-section">
                <p class="footer-container__contact-section-paragraph">Contact us</p>
                <p><?php if (get_field("nazwa_firmy", "options")): ?> 
                                                <?php the_field(
                                                    "nazwa_firmy",
                                                    "options"
                                                ); ?> <?php endif; ?> </p> 
                <p><?php if (get_field("adres", "options")): ?> 
                                                <?php the_field(
                                                    "adres",
                                                    "options"
                                                ); ?> <?php endif; ?>  </p> 
                <p><?php if (get_field("kod_pocztowy", "options")): ?> 
                                                <?php the_field(
                                                    "kod_pocztowy",
                                                    "options"
                                                ); ?> <?php endif; ?>  
                <?php if (get_field("kraj", "options")): ?> |
                                                <?php the_field(
                                                    "kraj",
                                                    "options"
                                                ); ?> <?php endif; ?>    
                <div class="footer-container__contact-section-buttons"></p>
                    <a href="mailto:test@test.pl"><button class="blue-button mail-button">Send mail</button></a>
                    <a href="tel:48729967705"><button class="blue-button call-button">Call us</button></a> 
                </div> 
            </div>
        </div>
        <div class="icon-container auto-layout">
                <?php if (have_rows("social_icons", "options")); ?>
                    <?php while (have_rows("social_icons", "options")):
                        the_row(); ?>
                        <a href="<?php the_sub_field(
                            "url",
                            "options"
                        ); ?>"><img src="<?php the_sub_field(
    "ikona",
    "options"
); ?>"></a>
                <?php
                    endwhile; ?>
        </div>
        <div class="copyright-container auto-layout">
                <?php if (get_field("copyright", "options")): ?> 
                                                <?php the_field(
                                                    "copyright",
                                                    "options"
                                                ); ?> <?php endif; ?> 
        </div>                                      
        
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
