<?php get_header(); ?>


  <div id="titel"></div>

  <div class="hero-front">
    <div class="hero-paddingddd"></div>
    <div class="hero-content">

      <div id="content_1a" class="hero-always-show">
        <h2 id="title-text" class="w_c">»Zitat das sich gewaschen hat und die Besucher Emotional packt.«</h2>
      </div>

      <div id="content_1b">
        <h1>Daheim ist eine Videotelefonie-Plattform für mobiles Lernen und kulturellen Austausch. Überall, Jederzeit und Kostenlos.</h1>
      </div>
      <div id="content_1c">
            <div class="zugang_main" id="zugang_main_1"><p class="smalltext b_c"><span class="bigtext b_c">Schon Daheim?</span></br>Melde dich an und starte gleich ein neues Gespräch.</p>
              <a href="https://app.willkommen-daheim.org/auth" class="button_main anmel_top zugang_button_space">
                <div class="bigtext g_c bold">Anmelden
              </div>
              </a>
            </div>
            <div class="zugang_main"><p class="smalltext b_c"><span class="bigtext b_c">Neu bei Daheim?</span></br>Registriere dich kostenlos und lege gleich los.</p>
              <a href="https://app.willkommen-daheim.org/auth/register" class="button_main regist_top zugang_button_space">
                <div class="bigtext w_c bold" >Registrieren
              </div>
              </a>
            </div>
        </div>
      </div>
    </div>

  </div>

  <div id="wrapper">

<?php

while (have_posts()) {
  the_post();
  the_content();
}

?>

<?php get_footer(); ?>
