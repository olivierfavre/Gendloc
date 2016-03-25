<?php

/* default/search.html.twig */
class __TwigTemplate_15c9574a69c5e655054103a854ee2d952ceb552a943257e16fabc5fe08d7e796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("gendloc.html.twig", "default/search.html.twig", 3);
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
        $__internal_2312d37b773b693ca1cac74d9c4b05b0485ebe2fe0a23b5d8a96514911361252 = $this->env->getExtension("native_profiler");
        $__internal_2312d37b773b693ca1cac74d9c4b05b0485ebe2fe0a23b5d8a96514911361252->enter($__internal_2312d37b773b693ca1cac74d9c4b05b0485ebe2fe0a23b5d8a96514911361252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2312d37b773b693ca1cac74d9c4b05b0485ebe2fe0a23b5d8a96514911361252->leave($__internal_2312d37b773b693ca1cac74d9c4b05b0485ebe2fe0a23b5d8a96514911361252_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7f75578330f4d70f18ff6b7f56e55ff9f5a2599189f1bcf86809dfbf8a8e944f = $this->env->getExtension("native_profiler");
        $__internal_7f75578330f4d70f18ff6b7f56e55ff9f5a2599189f1bcf86809dfbf8a8e944f->enter($__internal_7f75578330f4d70f18ff6b7f56e55ff9f5a2599189f1bcf86809dfbf8a8e944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "<div id=\"sidebar\" class=\"sidebar active\">
  ";
        // line 7
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "
  
  <!-- Tab panes -->
  <div class=\"sidebar-content collapsed\">
    
    <!--tab SEARCH-->
    ";
        // line 13
        $this->displayBlock('search', $context, $blocks);
        // line 55
        echo "  </div>
</div>
";
        
        $__internal_7f75578330f4d70f18ff6b7f56e55ff9f5a2599189f1bcf86809dfbf8a8e944f->leave($__internal_7f75578330f4d70f18ff6b7f56e55ff9f5a2599189f1bcf86809dfbf8a8e944f_prof);

    }

    // line 13
    public function block_search($context, array $blocks = array())
    {
        $__internal_734d9bbcf9872dc7edfc7893c67d903e2b90c0a376b30e71ac1f3578eb69062e = $this->env->getExtension("native_profiler");
        $__internal_734d9bbcf9872dc7edfc7893c67d903e2b90c0a376b30e71ac1f3578eb69062e->enter($__internal_734d9bbcf9872dc7edfc7893c67d903e2b90c0a376b30e71ac1f3578eb69062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 14
        echo "    <div class=\"sidebar-pane.active\" id=\"search\">
      <h1>Recherche</h1>
      <h3>Attention vue écran</h3>
      
      <form name=\"searchform\">
\t<input type=\"TEXT\" name=\"c\" id=\"c\" autofocus >
\t<input type=\"submit\" value=\"RECHERCHER\" >

\t</br></br>
\t<div id=\"res_nominatim\"></div>
\t<div id=\"res_topo\"></div>
\t<div id=\"res_BAN\"></div>
\t<div id=\"res_com\"></div>
\t
      </form>
      Recherche floue IGN, base adresse nationale et nominatim.

      <script>
      //script qui permet l'affichage des résultats de la recherche
\t\$( \"#search\" ).submit(function( event ) { // fonction qui s'exécute quand on appuie sur le bouton \"recherche\"

\t    // Stop form from submitting normally
\t    event.preventDefault();

\t    term = encodeURIComponent(\$(\"#search\").find( \"input[name='c']\" ).val()); //récupère la valeur de 'c' qui est le terme à rechercher
\t    url = \"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("search_result");
        echo "\";
\t
\t    //Send the data using get
\t    var posting = \$.get( url, {c: term}) ;
\t
\t    // Put the results in a div
\t    posting.done(
\t        function( data ) {
\t            var content = \$( data );
                    \$( \"#res_nominatim\" ).empty().append( content );
\t        }
\t    );
\t})
      </script>
    </div>
    ";
        
        $__internal_734d9bbcf9872dc7edfc7893c67d903e2b90c0a376b30e71ac1f3578eb69062e->leave($__internal_734d9bbcf9872dc7edfc7893c67d903e2b90c0a376b30e71ac1f3578eb69062e_prof);

    }

    public function getTemplateName()
    {
        return "default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  70 => 14,  64 => 13,  55 => 55,  53 => 13,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# Affichage de l'onglet recherche de la sidebar #}*/
/* */
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
/*       */
/*       <form name="searchform">*/
/* 	<input type="TEXT" name="c" id="c" autofocus >*/
/* 	<input type="submit" value="RECHERCHER" >*/
/* */
/* 	</br></br>*/
/* 	<div id="res_nominatim"></div>*/
/* 	<div id="res_topo"></div>*/
/* 	<div id="res_BAN"></div>*/
/* 	<div id="res_com"></div>*/
/* 	*/
/*       </form>*/
/*       Recherche floue IGN, base adresse nationale et nominatim.*/
/* */
/*       <script>*/
/*       //script qui permet l'affichage des résultats de la recherche*/
/* 	$( "#search" ).submit(function( event ) { // fonction qui s'exécute quand on appuie sur le bouton "recherche"*/
/* */
/* 	    // Stop form from submitting normally*/
/* 	    event.preventDefault();*/
/* */
/* 	    term = encodeURIComponent($("#search").find( "input[name='c']" ).val()); //récupère la valeur de 'c' qui est le terme à rechercher*/
/* 	    url = "{{ path('search_result') }}";*/
/* 	*/
/* 	    //Send the data using get*/
/* 	    var posting = $.get( url, {c: term}) ;*/
/* 	*/
/* 	    // Put the results in a div*/
/* 	    posting.done(*/
/* 	        function( data ) {*/
/* 	            var content = $( data );*/
/*                     $( "#res_nominatim" ).empty().append( content );*/
/* 	        }*/
/* 	    );*/
/* 	})*/
/*       </script>*/
/*     </div>*/
/*     {% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
