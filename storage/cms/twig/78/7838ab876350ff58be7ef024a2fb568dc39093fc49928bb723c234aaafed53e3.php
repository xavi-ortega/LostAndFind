<?php

/* C:\xampp\htdocs\lostandfind/themes/fabriciorabelo-squad/partials/footer.htm */
class __TwigTemplate_b1e9eff87c6072158ac89d9ede5819205ddb968c80f6a042c0552da19e152da8 extends Twig_Template
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
        echo "<footer>
 <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-md-12 col-lg-12\">
             <div class=\"wow shake\" data-wow-delay=\"0.4s\">
             <div class=\"page-scroll marginbot-30\">
                 <a href=\"#intro\" id=\"totop\" class=\"btn btn-circle\">
                     <i class=\"fa fa-angle-double-up animated\"></i>
                 </a>
             </div>
             </div>
             <p>&copy;Copyright ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". Todos os direitos reservados.</p>
         </div>
     </div>
 </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\lostandfind/themes/fabriciorabelo-squad/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
/* <footer>*/
/*  <div class="container">*/
/*      <div class="row">*/
/*          <div class="col-md-12 col-lg-12">*/
/*              <div class="wow shake" data-wow-delay="0.4s">*/
/*              <div class="page-scroll marginbot-30">*/
/*                  <a href="#intro" id="totop" class="btn btn-circle">*/
/*                      <i class="fa fa-angle-double-up animated"></i>*/
/*                  </a>*/
/*              </div>*/
/*              </div>*/
/*              <p>&copy;Copyright {{ now|date('Y') }} - {{ this.theme.site_name }}. Todos os direitos reservados.</p>*/
/*          </div>*/
/*      </div>*/
/*  </div>*/
/* </footer>*/
