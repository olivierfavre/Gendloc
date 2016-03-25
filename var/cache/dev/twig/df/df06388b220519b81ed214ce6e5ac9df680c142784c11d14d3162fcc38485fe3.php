<?php

/* ::search.html.twig */
class __TwigTemplate_e684c4a26ac9b2e3e66b3ad2924ebfb554e4ad0b7647a72cbefc4b6d6c902e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'results' => array($this, 'block_results'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb379fd6e245cc6fbda26ac4d25c4110141c2c54678c2d02e27fd95751e3695a = $this->env->getExtension("native_profiler");
        $__internal_bb379fd6e245cc6fbda26ac4d25c4110141c2c54678c2d02e27fd95751e3695a->enter($__internal_bb379fd6e245cc6fbda26ac4d25c4110141c2c54678c2d02e27fd95751e3695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::search.html.twig"));

        // line 1
        echo "
<div class=\"sidebar-pane\" id=\"search\">
  <h1>Recherche</h1>
  <h3>Attention vue écran</h3>
  <form action=";
        // line 5
        echo $this->env->getExtension('routing')->getPath("search");
        echo ">
    <input type=\"TEXT\" name=\"c\" id=\"c\" autofocus>
    <input type=\"submit\" value=\"RECHERCHER\" >
\t\t\t\t</br></br>
\t\t\t\t<div id=\"res_topo\"></div>
\t\t\t\t<div id=\"res_nominatim\"></div>
\t\t\t\t<div id=\"res_BAN\"></div>
\t\t\t\t<div id=\"res_com\"></div>
  </form>
  Recherche floue IGN, base adresse nationale et nominatim.
</div>

";
        // line 17
        $this->displayBlock('results', $context, $blocks);
        
        $__internal_bb379fd6e245cc6fbda26ac4d25c4110141c2c54678c2d02e27fd95751e3695a->leave($__internal_bb379fd6e245cc6fbda26ac4d25c4110141c2c54678c2d02e27fd95751e3695a_prof);

    }

    public function block_results($context, array $blocks = array())
    {
        $__internal_e46f45512bd764b981f2a4b127dc63fa23eb6be7766d9e23b0d279f02727fd20 = $this->env->getExtension("native_profiler");
        $__internal_e46f45512bd764b981f2a4b127dc63fa23eb6be7766d9e23b0d279f02727fd20->enter($__internal_e46f45512bd764b981f2a4b127dc63fa23eb6be7766d9e23b0d279f02727fd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "results"));

        
        $__internal_e46f45512bd764b981f2a4b127dc63fa23eb6be7766d9e23b0d279f02727fd20->leave($__internal_e46f45512bd764b981f2a4b127dc63fa23eb6be7766d9e23b0d279f02727fd20_prof);

    }

    public function getTemplateName()
    {
        return "::search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  29 => 5,  23 => 1,);
    }
}
/* */
/* <div class="sidebar-pane" id="search">*/
/*   <h1>Recherche</h1>*/
/*   <h3>Attention vue écran</h3>*/
/*   <form action={{ path('search') }}>*/
/*     <input type="TEXT" name="c" id="c" autofocus>*/
/*     <input type="submit" value="RECHERCHER" >*/
/* 				</br></br>*/
/* 				<div id="res_topo"></div>*/
/* 				<div id="res_nominatim"></div>*/
/* 				<div id="res_BAN"></div>*/
/* 				<div id="res_com"></div>*/
/*   </form>*/
/*   Recherche floue IGN, base adresse nationale et nominatim.*/
/* </div>*/
/* */
/* {% block results%}*/
/* {% endblock%}*/
/* */
