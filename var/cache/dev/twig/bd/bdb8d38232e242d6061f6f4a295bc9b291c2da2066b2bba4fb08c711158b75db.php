<?php

/* default/#search.html_old.twig# */
class __TwigTemplate_f61c600fd0b89a95e558e074d38cb3881743d9d40aa5b9d409a21bb16f6fed71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("gendloc.html.twig", "default/#search.html_old.twig#", 1);
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
        $__internal_b1ab0eb5c113aa0d23ee9696a65f80a367b189ad98bb0391ebf5eb1facc9040c = $this->env->getExtension("native_profiler");
        $__internal_b1ab0eb5c113aa0d23ee9696a65f80a367b189ad98bb0391ebf5eb1facc9040c->enter($__internal_b1ab0eb5c113aa0d23ee9696a65f80a367b189ad98bb0391ebf5eb1facc9040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/#search.html_old.twig#"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ab0eb5c113aa0d23ee9696a65f80a367b189ad98bb0391ebf5eb1facc9040c->leave($__internal_b1ab0eb5c113aa0d23ee9696a65f80a367b189ad98bb0391ebf5eb1facc9040c_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e004e699bf7f36e2784ddf845e7859998ea23cc0c06fb83bddd5ce2f48f20187 = $this->env->getExtension("native_profiler");
        $__internal_e004e699bf7f36e2784ddf845e7859998ea23cc0c06fb83bddd5ce2f48f20187->enter($__internal_e004e699bf7f36e2784ddf845e7859998ea23cc0c06fb83bddd5ce2f48f20187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_e004e699bf7f36e2784ddf845e7859998ea23cc0c06fb83bddd5ce2f48f20187->leave($__internal_e004e699bf7f36e2784ddf845e7859998ea23cc0c06fb83bddd5ce2f48f20187_prof);

    }

    // line 11
    public function block_search($context, array $blocks = array())
    {
        $__internal_3136f5f0656d62017da07473e40b24b4be1e38e40417960ffc1efd8165444a8e = $this->env->getExtension("native_profiler");
        $__internal_3136f5f0656d62017da07473e40b24b4be1e38e40417960ffc1efd8165444a8e->enter($__internal_3136f5f0656d62017da07473e40b24b4be1e38e40417960ffc1efd8165444a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 12
        echo "    <div class=\"sidebar-pane.active\" id=\"search\">
      <h1>Recherche</h1>
      <h3>Attention vue Ã©cran</h3>
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
        
        $__internal_3136f5f0656d62017da07473e40b24b4be1e38e40417960ffc1efd8165444a8e->leave($__internal_3136f5f0656d62017da07473e40b24b4be1e38e40417960ffc1efd8165444a8e_prof);

    }

    public function getTemplateName()
    {
        return "default/#search.html_old.twig#";
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
/*       <h3>Attention vue Ã©cran</h3>*/
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
