<?php get_header(); ?>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="fullscreen-bg">
            <video controls autoplay loop muted playsinline poster="<?php echo get_bloginfo('template_url') ?>/img/planB_home.png" class="fullscreen-bg__video">
                <source src="<?php echo get_bloginfo('template_url') ?>/img/TOB.mp4" type="video/mp4"/>
            </video>
        </div>
        <div class="container centered-t">
            <div class="row centered inverted">
                <div class="col-lg-12">
                  <!-- static image will go here //-->
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container central-column-no-padding">
            <div class="row padding-5 padding-bottom">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 bigger-font">
                <p><?php _e('La T, <b>el Laboratorio de tecnopolíticas para el bien común</b>, es un centro de pensamiento y prácticas críticas sobre tecnología, subjetividad y sociedad. El laboratorio quiere ser un catalizador de proyectos y comunidades de investigación, desarrollo y prototipado tecnológico orientados a la transformación social y el bien común.', 'html5blank'); ?></p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <img class="full-width no-padding" src="<?php echo get_bloginfo('template_url') ?>/img/quees.png"/>
                </div>
            </div>
          <div class="row black-on-white padding-60">
            <div class="col-lg-12">
              <div class="row normal-font left-aligned padding-5">
                  <div class="col-lg-3 col-sm-6 col-md-6 padding-bottom-20">
                    <p class="bigger-font"><b><?php _e('Territorio', 'html5blank'); ?></b></p>
                      <p>
                        <?php _e('LaT se encuentra en la 8a planta del edificio Mediatic, junto a la <b>Superilla del PobleNou</b>, un reciente experimento de ecología urbana y espacio público. El laboratorio está situado en el distrito de Sant Martí, en el llamado <b>22@</b>, un área promovida como <b>distrito motor de la innovación tecnológica y del conocimiento en Barcelona</b>. Poblenou es un barrio con una fuerte tradición asociativa, con gran arraigo de colectivos makers, huertos urbanos y gran concentración de centros de investigación y formación y un fuerte tejido empresarial tecnológico.', 'html5blank'); ?>
                      </p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-6 padding-bottom-20">
                    <p class="bigger-font"><b><?php _e('Contexto tecnológico', 'html5blank');?></b></p>
                      <p>
                        <?php _e('Estamos al inicio de una <b>"4ª revolución industrial"</b> que reconfigurará, de lo molecular a lo global, las estructuras materiales de la realidad. Pero las tecnologías no son neutras: constituyen <b>formas de vida y campos de batalla</b> dominados por las corporaciones más poderosas del planeta. Frente a la visión y el diseño de tecnología hegemónicos, guiados por la búsqueda del <b>beneficio privado</b>, han surgido formas de <b>resistencia, re-apropiación y construcción de alternativas</b> tecnológicas orientadas a la <b>autonomía social, la sostenibilidad y el bien común</b>. LaT aspira a nutrir esas alternativas.', 'html5blank'); ?>
                      </p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-6 padding-bottom-20">
                    <p class="bigger-font"><b><?php _e('Visión'); ?></b></p>
                      <p>
                        <?php _e('En LaT queremos ser un <b>ateneu de experimentación tecnopolítica</b> que sirva como catalizador de proyectos y comunidades de investigación, desarrollo, prototipado y acción orientados al bien común. Trabajamos para <b>ser un proyecto de referencia en la construcción de visiones y prácticas críticas</b>. También aspiramos a construir un proyecto resiliente y sostenible a largo plazo. Para lograrlo interpelamos y orientamos nuestras actividades a comunidades, colectivos y personas apasionadas por las tecnologías y la transformación social.', 'html5blank'); ?>
                      </p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-6 padding-bottom-20">
                    <p class="bigger-font"><b><?php _e('Misión', 'html5blank'); ?></b></p>
                      <p>
                      <?php _e('LaT es un proyecto orientado a:', 'html5blank'); ?>

                      <ul>
                      <li>
                      <?php _e('<b>Analizar y diagnosticar</b> críticamente los modos de producción y uso de tecnologías, hoy.', 'html5blank'); ?>
                      </li>
                      <li>
                      <?php _e('<b>Explorar nuevas tendencias</b> en la intersección entre tecnologías, subjetividad y sociedad.', 'html5blank'); ?>
                      </li>
                      <li>
                      <?php _e('Promover proyectos de <b>pensamiento, investigación, prototipado y diseño de</b> tecnologías libres para el bien común.', 'html5blank'); ?>
                      </li>
                      <li>
                      <?php _e('<b>Potenciar redes y comunidades</b> tecnopoliticas de aprendizaje, conocimiento y acción.', 'html5blank'); ?>
                      </li>
                      <li>
                      <?php _e('<b>Contribuir al bien común</b> de su entorno próximo, Poble Nou, Barcelona y el planeta.', 'html5blank'); ?>
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
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/vr-logo.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                      <p class="h-centered"><?php _e('Virtual Reality Hub (VRHub)', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><i><?php _e('Realidad Virtual aplicada a políticas públicas, bien común, cambio climático, género y arte', 'html5blank'); ?></i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('VRHub: iniciativa destinada a concentrar talento, oportunidades y conocimiento en el campo de la Realidad Virtual desde un enfoque social.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p><?php _e('Coordinador', 'html5blank'); ?>:</p>
                      <p><b><?php _e('Oscar Marín', 'html5blank'); ?></b></p>
                      <p><?php _e('Curador', 'html5blank'); ?>:</p>
                      <p><b><?php _e('Javier Toret', 'html5blank'); ?></b></p>
                      <p><?php _e('Próximo evento', 'html5blank'); ?>:</p>
                      <p><b><?php _e('7 de julio', 'html5blank'); ?></b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/futura-logo.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                      <p class="h-centered"><?php _e('Barcelona Futura', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><i><?php _e('Algo·ritmos del bien común. Diagramando la ciudad para nuestras nietas', 'html5blank'); ?></i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Una llamada a imaginar futuros posibles para la ciudad y el municipalismo desde un enfoque tecnopolítica, transversal y de los comunes.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p><?php _e('Coordinadores', 'html5blank'); ?>:</p>
                      <p><b><?php _e('Pablo DeSoto', 'html5blank'); ?></b> <?php _e('y', 'html5blank'); ?> <b><?php _e('Jose Pérez de Lama', 'html5blank'); ?>. Hackitectura.net</b></p>
                      <p><?php _e('Curadores', 'html5blank'); ?>:</p>
                      <p><b><?php _e('Javier Toret', 'html5blank'); ?></b> <?php _e('y', 'html5blank'); ?> <b><?php _e('Antonio Calleja', 'html5blank'); ?></b></p>
                      <p><?php _e('Próximo evento', 'html5blank'); ?>:</p>
                      <p><b><?php _e('14 y 15 de julio', 'html5blank'); ?></b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/cyberfeminism-logo.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                      <p class="h-centered"><?php _e('Ciberfeminismo', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><i><?php _e('En las intersecciones entre género y tecnologías. Feminismos y ciberespacio.', 'html5blank'); ?></i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Pasado, presente, futuro: un ciclo para visibilizar espacios de acción ciberfeminista y facilitar la diversidad de género en campo tecnológico', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p><?php _e('Coordinador', 'html5blank'); ?>:</p>
                      <p><b>Alex Hache</b></p>
                      <p><?php _e('Curadores', 'html5blank'); ?>:</p>
                      <p><b>Javier Toret</b> y <b>Antonio Calleja</b></p>
                      <p><?php _e('Próximo evento', 'html5blank'); ?>:</p>
                      <p><b><?php _e('9 de junio', 'html5blank'); ?></b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/makers-logo.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Make/Made</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><i><?php _e('Tecnopolíticas del diseño y prácticas del hacer para el bien común.', 'html5blank'); ?></i></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Makers de barrio: vamos a pensar, diseñar y construir herramientas y dispositivos para el entorno urbano como bien común', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                      <p><?php _e('Coordinador', 'html5blank'); ?>:</p>
                      <p><b>Josian Llorente</b></p>
                      <p><?php _e('Curador', 'html5blank'); ?>:</p>
                      <p><b>Javier Toret</b>
                      <p><?php _e('Próximo evento', 'html5blank'); ?>: <b><?php _e('23 de junio', 'html5blank'); ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="actividades" class="actividades-section">
      <div class="container">
        <div class="row pink display-table">
          <div class="col-lg-12 central-column padding-60">
            <p class="biggest-font"><?php _e('Actividades', 'html5blank'); ?></p>
            <p class="bigger-font"><?php _e('La T es un nodo abierto, un lugar encuentro para compartir conocimiento y tiempo.', 'html5blank'); ?></p>
            <p class="bigger-font"><?php _e('Cada jueves organizamos Beer2Peer charlas, presentaciones y actividades con una cerveza en la mano.', 'html5blank'); ?></p>
            <p class="bigger-font"><?php _e('Consulta nuestro calendario de actividades.', 'html5blank'); ?></p>
          </div>
        </div>
        <div class="row padding-60">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 left-aligned normal-font display-table max-height">
            <div class="centered">
              <b><?php _e('Los Jueves: Beer2peer', 'html5blank'); ?></b>
              <p><?php _e('Todos los jueves, a partir de las 18.30, estaremos en LaT con distintos eventos en una lógica informal, acogedora y unas birras para amenizar. Los eventos irán cambiando a cada semana, con los TrendingTalks y CCC y el C-4:', 'html5blank'); ?></p>

              <p>
              <?php _e('<i>TrendingTalks:</i> Conferencias con personas que pensamos que son relevantes en los ámbitos de interés de laT. Curadoria de laT.', 'html5blank'); ?>
              </p>

              <p>
              <?php _e('<i>CCC / Compartiu coneximent colectiu:</i> invitaremos a un colectivo o varios colectivos, proyecto o red para que presenten su trabajo y los conocimientos sobre temas específicos. Curadoría de laT.', 'html5blank'); ?>
              </p>

              <p>
              <?php _e('<i>C-4:</i> Ciencias - Comunes - Ciudades - Comunidades. 
              Seminario permanente de investigación colectiva sobre ciencias, tecnologías y transformación social. 
              Curadoria de Emmanuele Ecozzo y Luce prignano.', 'html5blank'); ?>
              </p>

              <b><?php _e('Los viernes, a partir de las 18:30h: Sesiones de nuestros proyectos y presentaciones.', 'html5blank'); ?></b>
            </div>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
          <?php
            echo do_shortcode('[add_eventon_fc]');
          ?>
          </div>
          <div class="col-lg-1">
          </div>
        </div>
      </div>
    </section>

    <!-- Who are we Section -->
    <section id="who-are-we" class="who-are-we-section">
        <div class="container central-column">
            <div class="row biggest-font margin-40">
              <p class="text-centered"><?php _e('Quiénes somos', 'html5blank'); ?></p>
            </div>
            <div class="row normal-font left-aligned">
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/toret.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Javier Toret</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Coordinación general del Laboratorio. Curaduría de proyectos. Coordinación de líneas de investigación y desarrollo.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered italics"><?php _e('Me gusta conectar y producir multiplicidades variables e intensivas entre filosofía,
                            clínica, política, tecnologia, comunicación, datos, redes, deseo, movimientos, tecnopolítica. 15M. Globalrev.
                            Rebelcities. Comunes. GlobalSouth. Investigador, psicólogo, activista y tecnólogo.', 'html5blank'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/thais.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Thais Ruiz de Alda</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Project Manager', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Jurista, eterna estudiante de entornos digitales y cambio social. Me interesa
                            todo lo que tiene que ver con la cultura digital, la soberanía tecnológica y el activismo social.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/hector.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Hector Huerga</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Responsable de Comunicación. Equipo de Producción', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Si sale comunicación es por que me ha molado el arte del micro-relato, así, en redes;
                            lo de la producción es accidental, como lo mejor que siempre pasa en la vida. Filólogo, activista y escritor.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/antonio.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Antonio Calleja</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Curaduría de proyectos y coordinación de líneas de investigación y desarrollo.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Investigador, IN3/UOC.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/eunate.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Eunate Serrano</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de producción y comunicación.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Investigadora. Comunicación política y periodismo de datos.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/marcela.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Marcela Canavarro</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Periodista con interés práctico y teórico en ciencia de datos, activismo
                            social y uso de la tecnología para el cambio social y el bien común.', 'html5blank'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row normal-font left-aligned">
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/bruno.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Bruno Sokolowicz</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación. Responsable de laT[le].', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Periodista optimista. Activista zen. Presentador TV. #CulturaDigital @tipstve Radio @scannerfm @350BCN', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/dani.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Dani Ortiz</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación/web', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Psicólogo y programador con ínfulas de activista. De vez en cuando
                            intenta mejorar el mundo con escarceos en ONG’s.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/sergio.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Sergio Alvarez</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación/web', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Permanentemente a caballo entre la ingeniería, la investigación y la cinematografía.
                            Interesado en el impacto de las nuevas tecnologías en la sociedad y en el individuo, y fundamentalmente
                            en las implicaciones de los avances en inteligencia artificial y big data.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/pinar.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Pinar Wennerberg</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de producción', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Me gusta innovar a través de la tecnología y ayudar a crear productos de software
                            técnicamente excelentes que mejoran la vida humana. Valoro fuertes relaciones humanas basadas
                            en la confianza y el respeto mutuo.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/stelios.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Stelios Modes</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación/web', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Ingeniero informático y entusiasta de la tecnología. Interesado en big data,
                            código abierto y derechos digitales.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/lliure.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Lliure Hilla Ariza</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de Producción.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Surfeando entre saberes expertos y activistas, entre lo local y lo metropolit(ano).
                            Produciendo para el común siempre que sea sexy y me aseguren que se puede liar parda ;)  
                            Nota: no lo sé como traducir al inglés…', 'html5blank'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row normal-font left-aligned">
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/ana.jpg" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Ana Bastero</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Costurera: a veces con hilos otras en redes, con experiencia cosiendo en
                            movimientos sociales y medios de comunicación.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 margin-bottom-40">
                    <img class="img-circle h-centered" height="100" src="<?php echo get_bloginfo('template_url') ?>/img/ste.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Stephen Cowley</p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered"><?php _e('Equipo de comunicación/web', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-very-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="italics h-centered"><?php _e('Ingeniero informático y entusiasta de la tecnología.', 'html5blank'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Participa Section -->
    <section id="participa" class="participa-section">
        <div class="container central-column">
            <div class="row biggest-font">
              <p><?php _e('Participa', 'html5blank'); ?></p>
            </div>
            <div class="row bigger-font">
              <p><?php _e('LaT es un espacio abierto a la participacion y la creacion colectiva.', 'html5blank'); ?></p>
              <p><?php _e('Por lo que hemos habilitado varias formas para que participes.', 'html5blank'); ?></p>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row smaller-font left-aligned">
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa1.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Síguenos en las redes sociales, donde tendrás la info actualizada de los proyectos y del laboratorio.', 'html5blank'); ?></p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row icon-array">
                      <a href="https://www.facebook.com/laTBcn">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/FB-f-Logo__white_50.png" class="inverted-glyph" height="35px"/>
                      </a>
                      <a href="https://twitter.com/laTBcn">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/Twitter_Logo_Blue.png" class="grey-glyph" height="48px"/>
                      </a>
                      <a href="https://www.instagram.com/Lat_bcn_/">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/glyph-logo_May2016.png" height="35px"/>
                      </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa2.png" />
                    <div class="row some-mid-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Suscríbete a la newsletter de laT para que te llegue a tu mail toda la info del laboratorio.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa3.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Sigue nuestros proyectos, que duran hasta diciembre. Si quieres participar y recibir las informaciones de alguno de los proyectos, aquí puedes suscribirte y empezar a formar parte de las distintas comunidades.', 'html5blank'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa4.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                      <p class="h-centered"><?php _e('Si te has perdido alguna actividad, en laT/le tienes todos los videos de nuestras actividades. También se retransmiten en directo por si no puedes venir.', 'html5blank'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <p class="bigger-font"><?php _e('Proponnos alguna actividad o proyecto', 'html5blank'); ?></p>
                </div>
            </div>
            <div class="row some-spacing"></div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                  <input class="white-over-black smaller-font" type="text" placeholder="<?php _e('Nombre', 'html5blank'); ?>"/>
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
                  <textarea class="white-over-black smaller-font" type="text" placeholder="<?php _e('Mensaje', 'html5blank'); ?>" rows="6"></textarea>
                </div>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-lg-offset-3 col-md-offset-3 no-padding col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                  <button class="full-width"><?php _e('Enviar', 'html5blank'); ?></button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
