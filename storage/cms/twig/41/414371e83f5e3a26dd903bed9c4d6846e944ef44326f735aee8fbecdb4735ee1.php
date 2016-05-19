<?php

/* C:\xampp\htdocs\PekiApp/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_4efaa44d5aeedb3d356ce09024e5a6437ce3c01c69cca404dbc9a168739c775a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_a87791e040165e31cd85afc42546658a10b169cb70fbbe210fa9294b9d2f42a8' => array($this, 'block___internal_a87791e040165e31cd85afc42546658a10b169cb70fbbe210fa9294b9d2f42a8'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a87791e040165e31cd85afc42546658a10b169cb70fbbe210fa9294b9d2f42a8", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_a87791e040165e31cd85afc42546658a10b169cb70fbbe210fa9294b9d2f42a8($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PekiApp/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* <pre>*/
/* {% filter escape %}*/
/* {{ "{% component 'demoTodo' %}" }}*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-question"></i> &nbsp; Wait, only one line is needed?*/
/* </p>*/
/* <p><em>Yes!</em> unlike the <a href="{{ 'ajax'|page }}">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>*/
/* <p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>*/
