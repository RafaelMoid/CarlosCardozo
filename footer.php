        <footer class="footer">
            <!-- Footer Wordpress -->
            <div class="footer-section">

                <div class="logo-box">
                    <p>Developed by</p>
                    <a href="https://jazzz.com.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/JAZZZ.png" alt="Logo da Jazz"></a>
                </div>
            </div>
        </footer>
        <!-- Footer Wordpress -->
        <?php wp_footer(); ?>
        <!-- Fecha Footer Wordpress -->

        

        <div id="modal-gallery" class="modal-container hide">
            <div class="modal">
                <div class="modal-header">
                    <h3 class="modal-title">Gallery</h3>
                    <button class="fechar">x</button>
                </div>
                <div class="gallery-repeater">
                    <?php if (have_rows('galeria')) : while (have_rows('galeria')) : the_row(); ?>
                            <img src="<?php the_sub_field('foto'); ?>" alt="item-gallery" class="item-gallery">
                    <?php endwhile;
                    else : endif; ?>
                </div>
            </div>
        </div>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>

        </body>



        </html>