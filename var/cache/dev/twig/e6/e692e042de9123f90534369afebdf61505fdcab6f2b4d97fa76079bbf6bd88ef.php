<?php

/* sidebar_menu.html.twig */
class __TwigTemplate_46efef34ed04528417eb386a27cdc3b9725ea4ec572f96a669d42ec70847bc5f extends Twig_Template
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
        $__internal_ed5b079bffc72e3957d077130f30e962711328acbef060a7a29b8faffdaf5dc4 = $this->env->getExtension("native_profiler");
        $__internal_ed5b079bffc72e3957d077130f30e962711328acbef060a7a29b8faffdaf5dc4->enter($__internal_ed5b079bffc72e3957d077130f30e962711328acbef060a7a29b8faffdaf5dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar_menu.html.twig"));

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
        
        $__internal_ed5b079bffc72e3957d077130f30e962711328acbef060a7a29b8faffdaf5dc4->leave($__internal_ed5b079bffc72e3957d077130f30e962711328acbef060a7a29b8faffdaf5dc4_prof);

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
