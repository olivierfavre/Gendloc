<?php

/* :default:search.html_old.twig */
class __TwigTemplate_387eec9ad8cfcabf9d5e758c4eb1ac73bcf3f02b22faf17c7fbd47ba8da9d2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("gendloc.html.twig", ":default:search.html_old.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'search' => array($this, 'block_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eaba6198dc79320dd36f96bf8cf29adedf05e5f2af901c95b5789738b42ee61 = $this->env->getExtension("native_profiler");
        $__internal_5eaba6198dc79320dd36f96bf8cf29adedf05e5f2af901c95b5789738b42ee61->enter($__internal_5eaba6198dc79320dd36f96bf8cf29adedf05e5f2af901c95b5789738b42ee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:search.html_old.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eaba6198dc79320dd36f96bf8cf29adedf05e5f2af901c95b5789738b42ee61->leave($__internal_5eaba6198dc79320dd36f96bf8cf29adedf05e5f2af901c95b5789738b42ee61_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_88b2f75757435e937b2c3501a7b69ee341664c9fb0fba85079dbafb2f46cd91c = $this->env->getExtension("native_profiler");
        $__internal_88b2f75757435e937b2c3501a7b69ee341664c9fb0fba85079dbafb2f46cd91c->enter($__internal_88b2f75757435e937b2c3501a7b69ee341664c9fb0fba85079dbafb2f46cd91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "<div id=\"sidebar\" class=\"sidebar active\">
  ";
        // line 5
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "
  
  <!-- Tab panes -->
  <div class=\"sidebar-content collapsed\">
    
    <!--tab SEARCH-->
    ";
        // line 11
        $this->displayBlock('search', $context, $blocks);
        // line 39
        echo "  </div>
</div>
";
        
        $__internal_88b2f75757435e937b2c3501a7b69ee341664c9fb0fba85079dbafb2f46cd91c->leave($__internal_88b2f75757435e937b2c3501a7b69ee341664c9fb0fba85079dbafb2f46cd91c_prof);

    }

    // line 11
    public function block_search($context, array $blocks = array())
    {
        $__internal_dcaed4d1118ee8d44fd18be8bacc5218d4f4970ed771b6753372567f8f16a488 = $this->env->getExtension("native_profiler");
        $__internal_dcaed4d1118ee8d44fd18be8bacc5218d4f4970ed771b6753372567f8f16a488->enter($__internal_dcaed4d1118ee8d44fd18be8bacc5218d4f4970ed771b6753372567f8f16a488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 12
        echo "    <div class=\"sidebar-pane.active\" id=\"search\">
      <h1>Recherche</h1>
      <h3>Attention vue écran</h3>
      <script>
\tfunction fillform(){
\t    searchform.nwlng.value = nw.lng;
\t    searchform.nwlat.value = nw.lat;
\t    searchform.selng.value = se.lng;
\t    searchform.selat.value = se.lat;
\t}
      </script>
      <form name=\"searchform\" action=";
        // line 23
        echo $this->env->getExtension('routing')->getPath("search_result");
        echo " onsubmit=\"fillform();\">
\t<input type=\"TEXT\" name=\"term\" id=\"term\" autofocus>
\t<input type=\"submit\" value=\"RECHERCHER\" >
\t<input type=\"hidden\" name=\"nwlng\">
\t<input type=\"hidden\" name=\"nwlat\">
\t<input type=\"hidden\" name=\"selng\">
\t<input type=\"hidden\" name=\"selat\">
\t\t\t\t</br></br>
\t\t\t\t<div id=\"res_topo\"></div>
\t\t\t\t<div id=\"res_BAN\"></div>
\t\t\t\t<div id=\"res_com\"></div>
      </form>
      Recherche floue IGN, base adresse nationale et nominatim.
      
    </div>
    ";
        
        $__internal_dcaed4d1118ee8d44fd18be8bacc5218d4f4970ed771b6753372567f8f16a488->leave($__internal_dcaed4d1118ee8d44fd18be8bacc5218d4f4970ed771b6753372567f8f16a488_prof);

    }

    public function getTemplateName()
    {
        return ":default:search.html_old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  70 => 12,  64 => 11,  55 => 39,  53 => 11,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'gendloc.html.twig'%}*/
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="sidebar active">*/
/*   {{ include('sidebar_menu.html.twig') }}*/
/*   */
/*   <!-- Tab panes -->*/
/*   <div class="sidebar-content collapsed">*/
/*     */
/*     <!--tab SEARCH-->*/
/*     {% block search %}*/
/*     <div class="sidebar-pane.active" id="search">*/
/*       <h1>Recherche</h1>*/
/*       <h3>Attention vue écran</h3>*/
/*       <script>*/
/* 	function fillform(){*/
/* 	    searchform.nwlng.value = nw.lng;*/
/* 	    searchform.nwlat.value = nw.lat;*/
/* 	    searchform.selng.value = se.lng;*/
/* 	    searchform.selat.value = se.lat;*/
/* 	}*/
/*       </script>*/
/*       <form name="searchform" action={{ path('search_result') }} onsubmit="fillform();">*/
/* 	<input type="TEXT" name="term" id="term" autofocus>*/
/* 	<input type="submit" value="RECHERCHER" >*/
/* 	<input type="hidden" name="nwlng">*/
/* 	<input type="hidden" name="nwlat">*/
/* 	<input type="hidden" name="selng">*/
/* 	<input type="hidden" name="selat">*/
/* 				</br></br>*/
/* 				<div id="res_topo"></div>*/
/* 				<div id="res_BAN"></div>*/
/* 				<div id="res_com"></div>*/
/*       </form>*/
/*       Recherche floue IGN, base adresse nationale et nominatim.*/
/*       */
/*     </div>*/
/*     {% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
