<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js">
<head>
    <meta charset= "<?php bloginfo(charset) ?>" />
    <title><?php wp_title('-',true,'right'); bloginfo() ?></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"> 
    <!-- GA -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-', 'auto');
    ga('send', 'pageview');
    </script>

<?php wp_head(); ?>
</head>
<body>

    <!-- engloba todo o conteúdo: -->
    <div class="main">
        <!-- menu de navegação: -->
        <section class="container" id="header">
            <div class="row-fluid">
                <div class="brand">
                    <img src="https://lh3.googleusercontent.com/-EXdmZMXpQhQ/VZRKRMIkxmI/AAAAAAAABaI/b6tmX9Nj-gQ/s247/mslogo.png" alt="MIC Vitória" width="" height="">
                </div>

                <nav class="top-nav">
                    
                    <ul class="nav-menu">
                        <li><a href="#" title="Sobre">Sobre</a></li>
                        <li><a href="#" title="Students to Business">S2B</a></li>
                        <li><a href="#" title="Projetos">Projetos</a></li>
                        <li><a href="#" title="Contato">Contato</a></li>
                    </ul>

                    <!-- redes sociais barra superior: -->
                    <div class="top-nav-social">
                        
                        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-face.jpg" rel="" title="" /></a>
                        <a href="https://twitter.com/MICVitoria"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" rel="" title="" /></a>

                    </div>
                    <!-- :redes sociais barra superior -->

                </nav>
            </div>
        </section>
        <!-- :menu de navegação -->

        <!-- conteúdo geral: -->
        <!-- noticias: -->
        <section class="container" id="noticias">
            <div class="row-fluid">
                    <h1>MIC Vitória</h1>
                    <h2>Centro de Inovação da Microsoft em Vitória - ES.</h2>
                    <p>Uma excelete oportunidade de adquirir conhecimento e se inserir no mercado de trabalho.</p>
            </div>
        </section>
        <!-- :noticias -->

        <!-- destaques: -->
        <section class="container" id="destaques">
            <div class="row-fluid">

            </div>
        </section>
        <!-- :destaques -->

        <!-- blogs: -->
        <section class="container" id="blogs">
            <div class="row-fluid">

            </div>
        </section>
        <!-- :blogs -->

        <!-- footerbar: -->
        <section class="container" id="footerBar">
            <div class="row-fluid">

            <!-- redes sociais barra inferior: -->
                <div class="container">
                    
                    <p id="p-footerBar">Follow MIC Vitória: </p>

                    <ul id="social-footerBar">
                        
                        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-face.jpg" rel="" title="" /></a>
                        <a href="https://twitter.com/MICVitoria"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" rel="" title="" /></a>
                        
                    </ul>

                </div>
                <!-- :redes sociais barra inferior -->

            </div>
        </section>
        <!-- :footerbar -->
        <!-- :conteúdo geral -->
    </div>

    <!-- footer: -->
    <section class="container" id="footer">
        <div class="row-fluid">

            <!-- footer-content: -->
            <div id="footer-content">

                <!-- footer-apoio: -->
                <div id="footer-apoio">

                </div>
                <!-- :footer-apoio -->

                <!-- footer-ferramentas: -->
                <div id="footer-ferramentas">

                </div>
                <!-- :footer-ferramentas -->

            </div>
            <!-- :footer-content -->

        </div>
    </section>
    <!-- :footer -->
    <!-- :engloba todo o conteúdo -->

    <!--script src="//code.jquery.com/jquery-1.11.0.min.js"></script-->
    <script type="text/javascript">
    jQuery( document ).ready(function() {

    });
    </script>

<?php wp_footer(); ?>
</body>
</html>