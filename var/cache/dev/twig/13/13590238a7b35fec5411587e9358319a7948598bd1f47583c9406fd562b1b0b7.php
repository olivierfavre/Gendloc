<?php

/* default/home.html.twig */
class __TwigTemplate_76dacf0fba53c65cc34172b3cd2b8eea1b518128305d5addae48ba1e40ae0e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("gendloc.html.twig", "default/home.html.twig", 3);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_429699b4fe44f13cae4c28d9cb764082df163a5f3aac6fd69423fda74d6534a9 = $this->env->getExtension("native_profiler");
        $__internal_429699b4fe44f13cae4c28d9cb764082df163a5f3aac6fd69423fda74d6534a9->enter($__internal_429699b4fe44f13cae4c28d9cb764082df163a5f3aac6fd69423fda74d6534a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429699b4fe44f13cae4c28d9cb764082df163a5f3aac6fd69423fda74d6534a9->leave($__internal_429699b4fe44f13cae4c28d9cb764082df163a5f3aac6fd69423fda74d6534a9_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_71f69012113f30d94517ffa7f06db5f719ddb61814c2d436d61e96421f65a1c3 = $this->env->getExtension("native_profiler");
        $__internal_71f69012113f30d94517ffa7f06db5f719ddb61814c2d436d61e96421f65a1c3->enter($__internal_71f69012113f30d94517ffa7f06db5f719ddb61814c2d436d61e96421f65a1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "<div id=\"sidebar\" class=\"sidebar collapsed\">
  ";
        // line 7
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "

  <!-- Tab panes -->
  <div class=\"sidebar-content active\">

    <!--tab HOME-->
    <div class=\"sidebar-pane.active\" id=\"home\">
      <h1>DEMO GENDLOC - CORG</h1>
      <h1>Fonctionnalités proposées</h1>
      <p>Fond de carte IGN et OSM</p>
      <p>Recherche IGN toponyme et commune</p>
      <p>Recherche nominatim openstreetmap</p>
      <p>Recherche Base Adresse Nationale - adresse.data.gouv.fr</p>
      <p>Gendloc</p>
      <p>Affichage couche tracking smartphone</p>
      <p>Affichage couche accueil gendarmerie</p>
      ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        <p>Administration des utilisateurs de l'application.<p>
\t  ";
        }
        // line 26
        echo "    </div>
  </div>
</div>
";
        
        $__internal_71f69012113f30d94517ffa7f06db5f719ddb61814c2d436d61e96421f65a1c3->leave($__internal_71f69012113f30d94517ffa7f06db5f719ddb61814c2d436d61e96421f65a1c3_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  64 => 24,  62 => 23,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# Affichage de l'onglet home de la sidebar #}*/
/* */
/* {% extends 'gendloc.html.twig' %}*/
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="sidebar collapsed">*/
/*   {{ include('sidebar_menu.html.twig') }}*/
/* */
/*   <!-- Tab panes -->*/
/*   <div class="sidebar-content active">*/
/* */
/*     <!--tab HOME-->*/
/*     <div class="sidebar-pane.active" id="home">*/
/*       <h1>DEMO GENDLOC - CORG</h1>*/
/*       <h1>Fonctionnalités proposées</h1>*/
/*       <p>Fond de carte IGN et OSM</p>*/
/*       <p>Recherche IGN toponyme et commune</p>*/
/*       <p>Recherche nominatim openstreetmap</p>*/
/*       <p>Recherche Base Adresse Nationale - adresse.data.gouv.fr</p>*/
/*       <p>Gendloc</p>*/
/*       <p>Affichage couche tracking smartphone</p>*/
/*       <p>Affichage couche accueil gendarmerie</p>*/
/*       {% if is_granted('ROLE_ADMIN') %}*/
/*         <p>Administration des utilisateurs de l'application.<p>*/
/* 	  {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
