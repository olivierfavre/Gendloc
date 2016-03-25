<?php

/* sidebar_menu.html.twig */
class __TwigTemplate_5c177510b39db8c0b24b37225060665813f9199c98b0bc9587d0cb03d85c62f2 extends Twig_Template
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
        $__internal_a7a8bf87d8531c3eb3a7252b8a9f4beae12300801d4bea496e2fd4538eef0180 = $this->env->getExtension("native_profiler");
        $__internal_a7a8bf87d8531c3eb3a7252b8a9f4beae12300801d4bea496e2fd4538eef0180->enter($__internal_a7a8bf87d8531c3eb3a7252b8a9f4beae12300801d4bea496e2fd4538eef0180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar_menu.html.twig"));

        // line 1
        echo "<!-- Définition de la sidebar -->

  <ul class=\"sidebar-tabs\" role=\"tablist\">
    <li><a href=\"#index\" role=\"tab\"><i class=\"fa fa-home\"></i></a></li>
    <li><a href=\"/search\" role=\"tab\"><i class=\"fa fa-search\"></i></a></li>
    <li><a href=\"/geoloc\" role=\"tab\"><i class=\"fa fa-map-marker\"></i></a></li>
    <li><a href=\"#messages\" role=\"tab\"><i class=\"fa fa-envelope\"></i></a></li>
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " <!-- Affichage de l'onglet d'administration pour les admintrateurs -->
        <li><a href=\"/admin\" role=\"tab\"><i class=\"fa fa-cog\"></i></a></li>
    ";
        }
        // line 11
        echo "    <li><a href=\"/logout\" role=\"tab\"><i class=\"fa fa-power-off\"></i></a></li>
  </ul>

     
";
        
        $__internal_a7a8bf87d8531c3eb3a7252b8a9f4beae12300801d4bea496e2fd4538eef0180->leave($__internal_a7a8bf87d8531c3eb3a7252b8a9f4beae12300801d4bea496e2fd4538eef0180_prof);

    }

    public function getTemplateName()
    {
        return "sidebar_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 8,  22 => 1,);
    }
}
/* <!-- Définition de la sidebar -->*/
/* */
/*   <ul class="sidebar-tabs" role="tablist">*/
/*     <li><a href="#index" role="tab"><i class="fa fa-home"></i></a></li>*/
/*     <li><a href="/search" role="tab"><i class="fa fa-search"></i></a></li>*/
/*     <li><a href="/geoloc" role="tab"><i class="fa fa-map-marker"></i></a></li>*/
/*     <li><a href="#messages" role="tab"><i class="fa fa-envelope"></i></a></li>*/
/*     {% if is_granted('ROLE_ADMIN') %} <!-- Affichage de l'onglet d'administration pour les admintrateurs -->*/
/*         <li><a href="/admin" role="tab"><i class="fa fa-cog"></i></a></li>*/
/*     {% endif %}*/
/*     <li><a href="/logout" role="tab"><i class="fa fa-power-off"></i></a></li>*/
/*   </ul>*/
/* */
/*      */
/* */
