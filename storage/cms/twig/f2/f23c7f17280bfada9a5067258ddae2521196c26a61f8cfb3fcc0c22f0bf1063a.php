<?php

/* C:\xampp\htdocs\LostAndFind/themes/fabriciorabelo-squad/layouts/default.htm */
class __TwigTemplate_d1f38c3d353b3137fe1673a66b52b928829f7ea77ede14ea8b22586feca6bdbc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <meta charset=\"utf-8\">
    <title>Lost&Find - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <!-- Metadata -->
    <meta name=\"title\" content=\"";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "meta_description", array()), "html", null, true);
        }
        echo "\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Fonts -->
    <link href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\" />

    <!-- Squad theme CSS -->
    <link href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/color/default.css");
        echo "\" rel=\"stylesheet\">

    <!--[if lte IE 9]>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Extra styles -->
    ";
        // line 33
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 34
        echo "
    <!-- Inline styles -->
    <style>";
        // line 36
        $context['__placeholder_inline_styles_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('inline_styles', $context['__placeholder_inline_styles_default_contents']);
        unset($context['__placeholder_inline_styles_default_contents']);        echo "</style>
</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">
    <!-- Preloader -->
    <div id=\"preloader\">
      <div id=\"load\"></div>
    </div>

    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "
    ";
        // line 47
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 48
        echo "
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
    <!-- Core JavaScript Files -->
    <script src=\"";
        // line 52
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 53
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.scrollTo.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>]

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/custom.js");
        echo "\"></script>

    <!-- OctoberCMS Ajax Framework and extras -->
    ";
        // line 62
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 63
        echo "
    <!-- Extra -->
    ";
        // line 65
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 66
        echo "
    <!-- Inline scripts -->
    <script>";
        // line 68
        $context['__placeholder_inline_scripts_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('inline_scripts', $context['__placeholder_inline_scripts_default_contents']);
        unset($context['__placeholder_inline_scripts_default_contents']);        echo "</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\LostAndFind/themes/fabriciorabelo-squad/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 68,  169 => 66,  166 => 65,  162 => 63,  155 => 62,  149 => 59,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  123 => 50,  119 => 49,  116 => 48,  114 => 47,  111 => 46,  107 => 45,  95 => 36,  91 => 34,  88 => 33,  77 => 25,  73 => 24,  67 => 21,  63 => 20,  57 => 17,  44 => 11,  40 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt-br">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Lost&Find - {{ this.page.title }}</title>*/
/* */
/*     <!-- Metadata -->*/
/*     <meta name="title" content="{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.theme.meta_title }}{% endif %}">*/
/*     <meta name="keywords" content="{{ this.theme.meta_keywords }}">*/
/*     <meta name="description" content="{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.theme.meta_description }}{% endif %}">*/
/* */
/*     <!-- Mobile Metas -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ 'assets/css/bootstrap.min.css'|theme }}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- Fonts -->*/
/*     <link href="{{ 'assets/font-awesome/css/font-awesome.min.css'|theme }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ 'assets/css/animate.css'|theme }}" rel="stylesheet" />*/
/* */
/*     <!-- Squad theme CSS -->*/
/*     <link href="{{ 'assets/css/style.css'|theme }}" rel="stylesheet">*/
/*     <link href="{{ 'assets/color/default.css'|theme }}" rel="stylesheet">*/
/* */
/*     <!--[if lte IE 9]>*/
/*         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>*/
/*         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- Extra styles -->*/
/*     {% styles %}*/
/* */
/*     <!-- Inline styles -->*/
/*     <style>{% placeholder inline_styles %}</style>*/
/* </head>*/
/* */
/* <body id="page-top" data-spy="scroll" data-target=".navbar-custom">*/
/*     <!-- Preloader -->*/
/*     <div id="preloader">*/
/*       <div id="load"></div>*/
/*     </div>*/
/* */
/*     {% partial 'header' %}*/
/* */
/*     {% page %}*/
/* */
/*     {% partial 'footer' %}*/
/* */
/*     <!-- Core JavaScript Files -->*/
/*     <script src="{{ 'assets/js/jquery.min.js'|theme }}"></script>*/
/*     <script src="{{ 'assets/js/bootstrap.min.js'|theme }}"></script>*/
/*     <script src="{{ 'assets/js/jquery.easing.min.js'|theme }}"></script>*/
/*     <script src="{{ 'assets/js/jquery.scrollTo.js'|theme }}"></script>*/
/*     <script src="{{ 'assets/js/wow.min.js'|theme }}"></script>]*/
/* */
/*     <!-- Custom Theme JavaScript -->*/
/*     <script src="{{ 'assets/js/custom.js'|theme }}"></script>*/
/* */
/*     <!-- OctoberCMS Ajax Framework and extras -->*/
/*     {% framework extras %}*/
/* */
/*     <!-- Extra -->*/
/*     {% scripts %}*/
/* */
/*     <!-- Inline scripts -->*/
/*     <script>{% placeholder inline_scripts %}</script>*/
/* </body>*/
/* </html>*/
