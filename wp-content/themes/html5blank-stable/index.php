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
            <div class="row padding-5">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 bigger-font">
                    <p>La T, <b>Laboratorio de Tecnopolíticas para el bien común </b>
                    es un centro de pensamiento crítico sobre tecnología y sociedad.
                    Situado en el corazón de la <i>superilla</i> del <b>Poblenou</b> de <b>Barcelona</b> quiere ser 
                    un catalizador de proyectos y comunidades tecnológicas de investigación, 
                    desarrollo, prototipado y transformación para el bien común.</p>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <img class="full-width no-padding" src="<?php echo get_bloginfo('template_url') ?>/img/quees.png"/>
                </div>
            </div>
            <div class="row normal-font left-aligned padding-5">
                <div class="col-lg-3">
                    <p>
                        Describir y diagnosticar críticamente el presente de los modos de producción, uso y consumo de tecnologías.  
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                        Explorar tendencias y fronteras en la intersección de la tecnologías con la sociedad, estructurando debates y construyendo miradas disruptivas.    
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                       Construir procesos de pensamiento, investigación, prototipado y diseño de usos y tecnologías para el bien común.  
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                        Transversalizar conocimientos, saberes técnicos y visiones políticas facilitando el aprendizaje y la colaboración entre proyectos, comunidades, proyectos y visiones.  
                    </p>
                </div>
            </div>
            <div class="row normal-font left-aligned padding-5">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-3">
                    <p>
                        Fomentar y crear condiciones para la emergencia de proyectos, comunidades y tecnolog@s capaces de desarrollar ejemplares de tecnopoliticas para el bien común.  
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                         Contribuir al bien común, de su entorno próximo, la ciudad y el mundo, en forma de creación de relaciones, de producción de prototipos, de código e infraestructuras libres desde una visión de retorno social de la tecnología en distintos ámbitos.   
                    </p>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="proyectos" class="services-section">
        <div class="container central-column">
            <div class="row normal-font left-aligned">
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/cyberfeminism-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Ciberfeminismo</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">Ciberfeminismo se utiliza para describir las filosofías de una comunidad feminista contemporánea cuyos intereses se centran en el ciberespacio, Internet y la tecnología. El término surge de la fusión de "ciberespacio" y "feminismo" y su primera utilización se sitúa a finales de 1991 y 1992 en paralelo por parte de la teórica cultural inglesa Sadie Plant y del grupo de artistas australianas VNS Matrix conectado con el net.art.1 En la década de los años 90 se utiliza el término para describir el trabajo de las feministas interesadas en la teoría y la crítica.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/futura-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Barcelona Futura</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">The Barcelona Initiative for Technological Sovereignty (BITS) aims to stimulate a global debate on changes in the meanings of sovereignty, and to explore the ways in which the various types of sovereignty -of citizens, cities, nations and regions- match with global technologies. With a strong focus on the political effects of technological change. BITS will explore how the emergence of technology platforms and data extractivism is transforming governments, labor, ownership and access to basic concepts of life such as water, food, housing and energy.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/vr-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">VR LABS</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">The Experimental Virtual Environments (EVENT) Lab for Neuroscience and Technology carries out research in computer graphics and virtual environments with applications in psychology and neuroscience. The virtual reality laboratory is led by Mel Slater and is located at the Universitat de Barcelona, Departament de Personalitat, Avaluació i Tractament Psicològic The neuroscience aspects are led by Maria V. Sanchez-Vives located at IDIBAPS.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/makers-logo.png" />
                    <div class="row some-spacing"></div>
                    <div class="row bigger-font left-aligned">
                        <p class="h-centered">Makers</p>
                    </div>
                    <div class="row some-minor-spacing"></div>
                    <div class="row lighter-font normal-font left-aligned">
                        <p class="h-centered">Makers Laboratories Limited is a rapidly growing Indian Pharmaceutical company with a strong thrust on Branded Generics. We make life easier by offering high quality products at affordable prices. Our product portfolio covers a wide range of General Health Therapeutic segments. Our top formulation brands are Duramol (Paracetamol), Artemak-AB (α-β Arteether), Loroquin (Chloroquine), Nimuwin (Nimuselide), Coffwin (Anti cough Range) and Exylin (Amoxycillin range).</p>
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
          <div class="col-lg-3">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <?php
            echo do_shortcode('[add_eventon_fc]');
          ?>
          </div>
          <div class="col-lg-3">
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
                <p>Abriremos más, pero por ahora puedes:</p>
            </div>
            <div class="row some-minor-spacing"></div>
            <div class="row smaller-font left-aligned">
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa1.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Seguir nuestras redes sociales, donde tendras la info del dia a dia del los proyectos y el laboratorio</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa2.png" />
                    <div class="row some-mid-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Suscribirte a la newsletter de laT para que te llegue a tu mail toda la info </p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa3.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Sigue nuestros proyectos, duran hasta diciembre. Si quieres participar y recibir toda los materiales de alguno de los proyectos, aqui puedes suscribirte.</p>
                    </div>
                </div>
                <div class="col-lg-3 margin-50">
                    <img class="h-centered" src="<?php echo get_bloginfo('template_url') ?>/img/participa4.png" />
                    <div class="row some-minor-spacing"></div>
                    <div class="row smaller-font normal-font left-aligned">
                        <p class="h-centered">Si te has perdido alguna actividad, en laT/le la tienes todos los videos de nuestras actividades, tambien todas se retransmiten en directo en directo por si no puedes venir</p>
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
