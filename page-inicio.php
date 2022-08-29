<?php // Template Name: Inicio 
?>

<?php get_header(); ?>

<main class="inicio">
  <section class="main">
    <div class="about-us-txt">
      <h1 class="title-about-us">ABOUT US</h1>
      <p>Brazilian multi-instrumentalist/singer, composer <strong>Carlos Cardozo</strong> delivers a strong
        overview <b>on Brazilian Samba, Bossa Nova, Forró, Funk adding jazz and folkloric
          fundamentals</b> with a hint of Brazilian northeastern rhythms.</p>

      <p>Cardozo's highly fine and assured vocals glows with his expressive compositions
        and the rich arrangements added by collaborators, producers André Valério and
        Sammy Barros.</p>

      <p>Also an exceptional cavaquinho player, Cardozo has changed the scene of <strong>Brazilian
          Samba music in Canada</strong> through a diverse amount of projects, featuring his abilities
        and skillfulness as bandleader and instrumentalist.
      </p>
    </div>
    <div class="about-us-img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-sec2.png" alt="foto" class="foto">
    </div>
  </section>
  <section class="gallery">
    <div class="album">
      <h2>Album</h2>
      <h1>My World</h1>
      <div class="player-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/capa-album.jpg" alt="album" class="album">
        <div class="player">
          <?php echo do_shortcode('[sonaar_audioplayer playlist_type="predefined" albums="24" artwork_id="" player_layout="skin_float_tracklist" hide_progressbar="default" display_control_artwork="true" hide_artwork="true" show_playlist="true" show_track_market="false" show_album_market="false" hide_timeline="true"][/sonaar_audioplayer]'); ?>
        </div>
      </div>
    </div>
    <div class="gallery">
      <h2>Explore</h2>
      <h1>Photo Gallery</h1>
      <div class="gallery-repeater">
        <?php if (have_rows('galeria')) : while (have_rows('galeria')) : the_row(); ?>
            <img src="<?php the_sub_field('foto'); ?>" alt="item-gallery" class="item-gallery">
        <?php endwhile;
        else : endif; ?>
      </div>
      <div class="btn-wrapper">
        <button class="full-album">FULL ALBUM</button>
      </div>
    </div>
  </section>
  <section class="yt-videos">
    <div class="yt-content">
      <div class="yt-title">
        <h2>YouTube</h2>
        <h1>My videos</h1>
      </div>
      <div class="yt-repeater">
          <?php if (have_rows('destaque_youtube')) : while (have_rows('destaque_youtube')) : the_row(); ?>
              <div class="repeater-iteration">
                <iframe src="<?php the_sub_field('video_do_youtube'); ?>" width="400" height="300"></iframe>
                <h3><?php the_sub_field('titulo'); ?></h3>
              </div>
          <?php endwhile;
          else : endif; ?>
      </div>
    </div>
  </section>
  <section class="social">
    <ul class="social-content">
      <li><a href="https://open.spotify.com/artist/52r4eeaNInzfaAKiXcL3kc?si=ciVhpO9KSRO-Az3ywRf8tg&nd=1#login" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-spotify.png" alt="item-social" class="item-social"></a></li>
      <li><a href="https://www.youtube.com/c/CarlosCardozoMusic" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-yt.png" alt="item-social" class="item-social"></a></li>
      <li><a href="https://www.instagram.com/carloscardozomusic/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-insta.png" alt="item-social" class="item-social"></a></li>
      <li><a href="https://www.facebook.com/carlos.cardozo.33" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-fb.png" alt="item-social" class="item-social"></a></li>
    </ul>
  </section>
  <section class="events">
    <div class="foto-events">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/foto-agenda.jpg" alt="events photo" class="ft-events">
      <div class="text-foto">
        <p>WHAT'S TODAY'S</p>
        <p>EVENT?</p>
      </div>
    </div>
    <div class="events-list">
      <div class="wrapper-wrapper-events">
        <h3>Check out my concert schedule</br> and have fun!</h3>
        <div class="event-repeater">
          <ul class="event-content-wrapper">
          <?php if (have_rows('eventos')) : while (have_rows('eventos')) : the_row(); ?>
              <div class="repeater-iteration">
                <li><?php the_sub_field('evento'); ?></li>
          <?php endwhile;
          else : endif; ?>
          </ul>
          <div class="btn-wrapper">
            <button class="full-events">PAST EVENTS</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="contact">
    <div class="text-contact">
      <h1>CONTACTS FOR</h1>
      <h1>EVENTS AND SHOWS</h1>
      <h4>Mr. Carlinhos Cardozo</h4>
      <p>
        RUE BEAUDRY QC H3Z 2Y7 </br>
        MONTREAL - CANADA </br>
        +14 303 44455 608
      </p>
      <h5>contact@carloscardozo.ca</h5>
      <h5>@carlinhoscardozo</h5>
    </div>
    <div class="form-wrapper">
      <h3>Send your message below</h3>
      <form action="" class="contact">
        <input type="text" placeholder="your name here"></br>
        <input type="text" placeholder="your email here"></br>
        <textarea name="message" rows="5" cols="30" placeholder="your message">
</textarea>
        <input type="submit" value="SEND MESSAGE">
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>