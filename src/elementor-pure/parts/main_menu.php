<?php
/*$locations = get_nav_menu_locations();
$menu = get_term( $locations["menu-1"], 'nav_menu' );
$menu_items = wp_get_nav_menu_items($menu->term_id);
print_r($menu_items);*/


?>
<style>
.megamenu {
  position: static;
}

.megamenu .dropdown-menu {
  background: none;
  border: none;
  width: 100%;
}

body[data-elementor-device-mode="desktop"] #primary-menu-wrap .megamenuwpa { background: #000000e0; }
#primary-menu-wrap h6 { color: white; }
body[data-elementor-device-mode="desktop"] #primary-menu-wrap h6 { font-size: 1.25rem; font-weight: normal; }
#primary-menu-wrap a { color: #fff; }
#primary-menu-wrap a:hover { color: #edab12; }
.dropdown-menu2 { background: #000000e0; color: white; }
.dropdown-menu2 a { color: #fff; }
.dropdown-menu2 a:hover { color: #edab12; background: none; }
#primary-menu-wrap .dropdown-toggle::after { display: none; }
#primary-menu-wrap > ul > li > a { text-transform: uppercase; }
</style>
<div id="primary-menu-wrap" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <!-- Megamenu-->
      <li class="nav-item dropdown megamenu"><a id="megamneu" href="/tanzkurse/" data-toggle="dropdown" class="nav-link dropdown-toggle">Tanzkurse</a>
        <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row rounded-0 m-0 shadow-sm megamenuwpa" style="width:100%;">
              <div class="col-lg-12 col-xl-12">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg mb-4">
                      <h6 class="font-weight-bold text-uppercase">Erwachsene</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="/tanzkurse/erwachsene/paare" class="nav-link text-small pb-0">Paare</a></li>
                        <li class="nav-item"><a href="/tanzkurse/erwachsene/singles" class="nav-link text-small pb-0 ">Singles</a></li>
                        <li class="nav-item"><a href="/tanzkurse/hochzeit" class="nav-link text-small pb-0 ">Hochzeitskurse & Gäste</a></li>
                        <li class="nav-item"><a href="/tanzkurse/azubis" class="nav-link text-small pb-0 ">Auszubildende</a></li>
                        <li class="nav-item"><a href="/tanzkurse/studenten" class="nav-link text-small pb-0 ">Studenten</a></li>
                        <li class="nav-item"><a href="/tanzkurse/50plus" class="nav-link text-small pb-0 ">50plus</a></li>
                        <li class="nav-item"><a href="/privatstunden" class="nav-link text-small pb-0 ">Privatstunden</a></li>
                      </ul>
                    </div>
                    <div class="col-lg mb-4">
                      <h6 class="font-weight-bold text-uppercase">Jugendliche/Kinder</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="/tanzkurse/schueler/" class="nav-link text-small pb-0 ">Schülerkurse</a></li>
                        <li class="nav-item"><a href="/tanzkurse/jugend/" class="nav-link text-small pb-0 ">Jugendkurse</a></li>
                        <li class="nav-item"><a href="/tanzkurse/kinder/" class="nav-link text-small pb-0 ">Kindertanzen (ab 3Jahre)</a></li>
                        <li class="nav-item"><a href="/tanzkurse/kinder/zumba" class="nav-link text-small pb-0 ">Zumba® Kids</a></li>
                      </ul>
                    </div>
                    <div class="col-lg mb-4">
                      <h6 class="font-weight-bold text-uppercase">Tanzwelt</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="/tanzkurse/breakdance" class="nav-link text-small pb-0 ">Breakdance</a></li>
                        <li class="nav-item"><a href="/tanzkurse/hip-hop" class="nav-link text-small pb-0 ">Hip Hop</a></li>
                        <li class="nav-item"><a href="/tanzkurse/salsa" class="nav-link text-small pb-0 ">Salsa</a></li>
                        <li class="nav-item"><a href="/tanzkurse/west-coast-swing" class="nav-link text-small pb-0 ">West Coast Swing</a></li>
                        <li class="nav-item"><a href="/tanzkurse/zumba" class="nav-link text-small pb-0 ">Zumba® Fitness</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!--<div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)no-repeat; background-size: cover;"></div>-->
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu dropdown-menu2" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/events/party">Parties</a>
          <a class="dropdown-item" href="/events/uebungsabende">Übungsabende</a>
          <a class="dropdown-item" href="/events/abschlussball">Abschlussball</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/events/">alle Veranstaltungen</a>
        </div>
      </li>
      <!--<li class="nav-item"><a href="" class="nav-link">Aktuelles</a></li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tanzschule
        </a>
        <div class="dropdown-menu dropdown-menu2" aria-labelledby="navbarDropdown">
          <!--<a class="dropdown-item" href="/tanzschule">Über uns</a>-->
          <a class="dropdown-item" href="/tanzmusik">Tanzmusik</a>
          <!--<a class="dropdown-item" href="/tanzschuhe">Tanzschuhe</a>-->
          <a class="dropdown-item" href="/gutscheine">Gutscheine</a>
          <a class="dropdown-item" href="/newsletter">Newsletter</a>
          <a class="dropdown-item" href="/faq">Häufig gestellte Fragen</a>
          <a class="dropdown-item" href="/kontakt">Kontakt & Anfahrt</a>
        </div>
      </li>
    </ul>
  </div>