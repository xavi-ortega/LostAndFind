<?php

/* C:\xampp\htdocs\PekiApp/themes/PekiApp/partials/header.htm */
class __TwigTemplate_7cc2c2c92dc0a787d21be335f39b6b6e2d53bd5899ae3180a9a87b165a74b899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"index-banner\" class=\"parallax-container\">
    <div class=\"section no-pad-bot\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center teal-text text-lighten-2\">Parallax Template</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class=\"row center\">
                <a href=\"http://materializecss.com/getting-started.html\" id=\"download-button\" class=\"btn-large waves-effect waves-light teal lighten-1\">Get Started</a>
            </div>
            <br><br>
        </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/background1.jpg");
        echo "\" alt=\"Unsplashed background img 1\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PekiApp/themes/PekiApp/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
/* <div id="index-banner" class="parallax-container">*/
/*     <div class="section no-pad-bot">*/
/*         <div class="container">*/
/*             <br><br>*/
/*             <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>*/
/*             <div class="row center">*/
/*                 <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>*/
/*             </div>*/
/*             <div class="row center">*/
/*                 <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>*/
/*             </div>*/
/*             <br><br>*/
/*         </div>*/
/*     </div>*/
/*     <div class="parallax"><img src="{{ 'assets/images/background1.jpg'|theme }}" alt="Unsplashed background img 1"></div>*/
/* </div>*/
