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
        <div class="player"></div>
      </div>
    </div>
    <div class="gallery">
      <h2>Explore</h2>
      <h1>Photo Gallery</h1>
      <div class="gallery-repeater">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/exemplo-galeria.jpg" alt="item-gallery" class="item-gallery">
      </div>
      <div class="btn-wrapper">
        <button class="full-album">FULL ALBUM</button>
      </div>
    </div>
  </section>
  <section class="yt-videos">
    <div class="yt-content">
      <div class="yt-title">
        <h2>Album</h2>
        <h1>My World</h1>
      </div>
      <div class="yt-repeater">
      </div>
    </div>
  </section>
  <section class="social">
    <ul class="social-content">
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-spotify.png" alt="item-social" class="item-social"></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-yt.png" alt="item-social" class="item-social"></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-insta.png" alt="item-social" class="item-social"></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-fb.png" alt="item-social" class="item-social"></a></li>
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
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
            <li class="event-content">Dia 25 / Nome do Evento / Local do Evento / 18h30</li>
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