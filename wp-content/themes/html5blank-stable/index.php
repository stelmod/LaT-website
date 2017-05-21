<?php get_header(); ?>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="fullscreen-bg">
            <video controls autoplay loop muted playsinline class="fullscreen-bg__video">
                <source src="<?php echo get_bloginfo('template_url') ?>/img/TOB.mp4" type="video/mp4"/>
            </video>
        </div>
        <div class="container centered-t">
            <div class="row centered inverted">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container central-column-no-padding">
            <div class="row hidden-md hidden-sm hidden-xs">
                <div class="col-lg-12 no-padding">
                    <img class="full-width no-padding" src="<?php echo get_bloginfo('template_url') ?>/img/quees-completo.png"/>
                </div>
            </div>
            <div class="row padding-5 padding-bottom hidden-lg">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 bigger-font">
                  <p>La T, <b>el Laboratorio de tecnopolíticas para el bien común</b>, es un centro de pensamiento y prácticas críticas sobre tecnología, subjetividad y sociedad. El laboratorio quiere ser un catalizador de proyectos y comunidades de investigación, desarrollo y prototipado tecnológico orientados a la transformación social y el bien común.</p>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="row hidden-lg">
                <div class="col-lg-12 no-padding">
                    <img class="full-width no-padding" src="<?php echo get_bloginfo('template_url') ?>/img/quees.png"/>
                </div>
            </div>
          <div class="row black-on-white padding-60">
            <div class="col-lg-12">
              <div class="row normal-font left-aligned padding-5">
                  <div class="col-lg-3 col-md-6 padding-bottom-20">
                      <p class="bigger-font"><b>Territorio</b></p>
                      <p>
                      LaT se encuentra en la 8a planta del edificio Mediatic, junto a la <b>Superilla del PobleNou</b>, un reciente experimento de ecología urbana y espacio público. El laboratorio está situado en el distrito de Sant Martí, en el llamado <b>22@</b>, un área promovida como <b>distrito motor de la innovación tecnológica y del conocimiento en Barcelona</b>. Poblenou es un barrio con una fuerte tradición asociativa, con gran arraigo de colectivos makers, huertos urbanos y gran concentración de centros de investigación y formación y un fuerte tejido empresarial tecnológico.
                      </p>
                  </div>
                  <div class="col-lg-3 col-md-6 padding-bottom-20">
                      <p class="bigger-font"><b>Contexto tecnológico</b></p>
                      <p>
                      Estamos al inicio de una <b>"4ª revolución industrial"</b> que reconfigurará, de lo molecular a lo global, las estructuras materiales de la realidad. Pero las tecnologías no son neutras: constituyen <b>formas de vida y campos de batalla</b> dominados por las corporaciones más poderosas del planeta. Frente a la visión y el diseño de tecnología hegemónicos, guiados por la búsqueda del <b>beneficio privado</b>, han surgido formas de <b>resistencia, re-apropiación y construcción de alternativas</b> tecnológicas orientadas a la <b>autonomía social, la sostenibilidad y el bien común</b>. LaT aspira a nutrir esas alternativas.
                      </p>
                  </div>
                  <div class="col-lg-3 col-md-6 padding-bottom-20">
                      <p class="bigger-font"><b>Visión</b></p>
                      <p>
                      En LaT queremos ser un <b>ateneu de experimentación tecnopolítica</b> que sirva como catalizador de proyectos y comunidades de investigación, desarrollo, prototipado y acción orientados al bien común. Trabajamos para <b>ser un proyecto de referencia en la construcción de visiones y prácticas críticas</b>. También aspiramos a construir un proyecto resiliente y sostenible a largo plazo. Para lograrlo interpelamos y orientamos nuestras actividades a comunidades, colectivos y personas apasionadas por las tecnologías y la transformación social.
                      </p>
                  </div>
                  <div class="col-lg-3 col-md-6 padding-bottom-20">
                      <p class="bigger-font"><b>Misión</b></p>
                      <p>
                      LaT es un proyecto orientado a:

                      <ul>
                      <li>
                      <b>Analizar y diagnosticar</b> críticamente los modos de producción y uso de tecnologías, hoy. 
                      </li>
                      <li>
                      <b>Explorar nuevas tendencias</b> en la intersección entre tecnologías, subjetividad y sociedad.
                      </li>
                      <li>
                      Promover proyectos de <b>pensamiento, investigación, prototipado y diseño de</b> tecnologías libres para el bien común.
                      </li>
                      <li>
                      <b>Potenciar redes y comunidades</b> tecnopoliticas de aprendizaje, conocimiento y acción.
                      </li>
                      <li>
                      <b>Contribuir al bien común</b> de su entorno próximo, Poble Nou, Barcelona y el planeta. 
                      </li>
                      </p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="proyectos" class="services-section">
        <div class="container central-column">
            <div class="row normal-font left-aligned">
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/vr-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Virtual Reality Hub (VRHub)</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><i>Realidad Virtual aplicada a políticas públicas, bien común, cambio climático, género y arte</i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">VRHub: iniciativa destinada a concentrar talento, oportunidades y conocimiento en el campo de la Realidad Virtual desde un enfoque social.</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p>Coordinador: <b>Oscar Marín</b></p>
                        <p>Curador: <b>Javier Toret</b></p>
                        <p>Proximo evento: <b>7 de julio</b></p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/futura-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Barcelona Futura</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><i>Algo·ritmos del bien común. Diagramando la ciudad para nuestras nietas</i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">Una llamada a imaginar futuros posibles para la ciudad y el municipalismo desde un enfoque tecnopolítica, transversal y de los comunes.</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p>Coordinadores: <b>Pablo de Soto</b> y <b>Jose Pérez de Lama. Hackitectura.net</b></p>
                        <p>Curadores: <b>Javier Toret</b> y <b>Antonio Calleja</b></p>
                        <p>Proximo evento: <b>14 y 15 de julio</b></p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/cyberfeminism-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Ciberfeminismo</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><i>En las intersecciones entre género y tecnologías. Feminismos y ciberespacio.</i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">Pasado, presente, futuro: un ciclo para visibilizar espacios de acción ciberfeminista y facilitar la diversidad de género en campo tecnológico</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p>Coordinador: <b>Alex Hache</b></p>
                        <p>Curadores: <b>Javier Toret</b> y <b>Antonio Calleja</b></p>
                        <p>Proximo evento: <b>9 de junio</b></p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/makers-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Make/Made</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><i>Tecnopolíticas del diseño y prácticas del hacer para el bien común.</i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">Makers de barrio: vamos a pensar, diseñar y construir herramientas y dispositivos para el entorno urbano como bien común</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p>Coordinador: <b>Josian Llorente</b></p>
                        <p>Curador: <b>Javier Toret</b>
                        <p>Proximo evento: <b>23 de junio</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="actividades" class="actividades-section">
      <div class="container">
        <div class="row pink">
          <div class="col-lg-12 central-column padding-60">
            <p class="biggest-font">Actividades</p>
            <p class="bigger-font">La T es un nodo abierto, un lugar encuentro para compartir conocimiento y tiempo.</p>
            <p class="bigger-font">Cada jueves organizamos Beer2Peer charlas, presentaciones y actividades con una cerveza en la mano.</p>
            <p class="bigger-font">Consulta nuestro calendario de actividades.</p>
          </div>
        </div>
        <div class="row padding-60">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <?php
            echo do_shortcode('[add_eventon_fc]');
          ?>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 left-aligned normal-font top-padded display-table max-height">
            <div class="centered">
              <b>Los Jueves: Beer2peer</b>
              <p>Todos los jueves, a partir de las 18.30, estaremos en LaT con distintos eventos en una lógica informal, acogedora y unas birras para amenizar. Los eventos irán cambiando a cada semana, con los TrendingTalks y CCC y el C-4:</p>

              <ul>
              <li>
              <i>TrendingTalks:</i> Conferencias con personas que pensamos que son relevantes en los ámbitos de interés de laT. Curadoria de laT. 
              </li>

              <li>
              <i>CCC / Compartiu coneximent colectiu:</i> invitaremos a un colectivo o varios colectivos, proyecto o red para que presenten su trabajo y los conocimientos sobre temas específicos. Curadoría de laT.
              </li>

              <li>
              <i>C-4:</i> Ciencias - Comunes - Ciudades - Comunidades. 
              Seminario permanente de investigación colectiva sobre ciencias, tecnologías y transformación social. 
              Curadoria de Emmanuele Ecozzo y Luce prignano.
              </li>
              </ul>

              <b>Los viernes, a partir de las 18:30h: Sesiones de nuestros proyectos y presentaciones.  </b>
            </div>
          </div>
          <div class="col-lg-1">
          </div>
        </div>
      </div>
    </section>

    <!-- Participa Section -->
    <section id="participa" class="participa-section">
        <div class="container central-column">
            <div class="row biggest-font">
                <p>Participa</p>
            </div>
            <div class="row bigger-font">
                <p>LaT es un espacio abierto a la participacion y la creacion colectiva. </p>
                <p>Por lo que hemos habilitado varias formas para que participes.</p>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row smaller-font left-aligned">
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa1.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Síguenos en las redes sociales, donde tendrás la info actualizada de los proyectos y del laboratorio.</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row icon-array">
                      <a href="https://www.facebook.com/laTBcn">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/FB-f-Logo__white_50.png" height="35px"/>
                      </a>
                      <a href="https://twitter.com/laTBcn">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/Twitter_Logo_White_On_Image.png" height="48px"/>
                      </a>
                      <a href="https://www.instagram.com/Lat_bcn_/">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/glyph-logo_May2016.png" height="35px" class="inverted-glyph"/>
                      </a>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa2.png" />
                    <div class="row some-mid-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Suscríbete a la newsletter de laT para que te llegue a tu mail toda la info del laboratorio.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa3.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Sigue nuestros proyectos, que duran hasta diciembre. Si quieres participar y recibir las informaciones de alguno de los proyectos, aquí puedes suscribirte y empezar a formar parte de las distintas comunidades.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa4.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Si te has perdido alguna actividad, en laT/le tienes todos los videos de nuestras actividades. También se retransmiten en directo por si no puedes venir.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="bigger-font">Proponnos alguna actividad o proyecto</p>
                </div>
            </div>
            <div class="row some-spacing"></div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <input class="white-over-black smaller-font" type="text" placeholder="Nombre"/>
                </div>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <input class="white-over-black smaller-font" type="text" placeholder="e-mail"/>
                </div>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <textarea class="white-over-black smaller-font" type="text" placeholder="Mensaje" rows="6"></textarea>
                </div>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-lg-offset-3 col-md-offset-3 no-padding col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                    <button class="full-width">Enviar</button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
