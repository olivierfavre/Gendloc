<?php

/* gendloc.html.twig */
class __TwigTemplate_5de363558671a98ba2b6ee73f8edf87c310e16a4e512d3293fe46fb24df7284c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'carte' => array($this, 'block_carte'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caadf01b0846f4eb67660b81c8a031bff72d0b1528832b1f7b5f860dec486251 = $this->env->getExtension("native_profiler");
        $__internal_caadf01b0846f4eb67660b81c8a031bff72d0b1528832b1f7b5f860dec486251->enter($__internal_caadf01b0846f4eb67660b81c8a031bff72d0b1528832b1f7b5f860dec486251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gendloc.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html ; charset=UTF-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta  charset=\"UTF-8\" >

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 56
        echo "    
  </head>
  <body>
    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "
   
    ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "  </body>
</html>
";
        
        $__internal_caadf01b0846f4eb67660b81c8a031bff72d0b1528832b1f7b5f860dec486251->leave($__internal_caadf01b0846f4eb67660b81c8a031bff72d0b1528832b1f7b5f860dec486251_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08561a816ac874d130f5f6f39d898e939eceb617a23bcbc3f285ff1f79680fb = $this->env->getExtension("native_profiler");
        $__internal_f08561a816ac874d130f5f6f39d898e939eceb617a23bcbc3f285ff1f79680fb->enter($__internal_f08561a816ac874d130f5f6f39d898e939eceb617a23bcbc3f285ff1f79680fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " GENDLOC - SECOURS EN MONTAGNE - ADMIN ";
        } else {
            echo " GENDLOC - SECOURS EN MONTAGNE ";
        }
        
        $__internal_f08561a816ac874d130f5f6f39d898e939eceb617a23bcbc3f285ff1f79680fb->leave($__internal_f08561a816ac874d130f5f6f39d898e939eceb617a23bcbc3f285ff1f79680fb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8612b913581db1ccfefdd087c5f303de2c0a0a992c7d72342e6740e01db9947 = $this->env->getExtension("native_profiler");
        $__internal_f8612b913581db1ccfefdd087c5f303de2c0a0a992c7d72342e6740e01db9947->enter($__internal_f8612b913581db1ccfefdd087c5f303de2c0a0a992c7d72342e6740e01db9947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        // line 11
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <!--bibliothèque jquery -->
    <script src=\"http://code.jquery.com/jquery-2.1.3.min.js\"></script>
    <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css\" />
    <script src=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js\"></script>
    <!--bibliothèque leaflet pour affichage map-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!--bibliothèque sidebar pour affichage menu-->
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sidebar/leaflet-sidebar.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sidebar/leaflet-sidebar.css"), "html", null, true);
        echo "\" />
    <!--bibliothèque dynatable pour affichage résultats recherches et sms-->
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-dynatable/jquery.dynatable.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-dynatable/jquery.dynatable.css"), "html", null, true);
        echo "\" />
    <!--bibliothèque coordinates pour affichage coordonnées sous la souris-->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.src.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.css"), "html", null, true);
        echo "\" />
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.ie.css"), "html", null, true);
        echo "\" /><![endif]-->
    <!--feuille de style table-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main/table.css"), "html", null, true);
        echo "\" />
    <!--bibliothèque intl-tel-input pour affichage menu envoi sms-->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/intl-tel-input/build/js/intlTelInput.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/intl-tel-input/build/css/intlTelInput.css"), "html", null, true);
        echo "\">
    <!--bibliothèque styledLayerControl pour affichage menu couches geo-->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Leaflet.StyledLayerControl/src/styledLayerControl.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Leaflet.StyledLayerControl/css/styledLayerControl.css"), "html", null, true);
        echo "\" />
    <!--bibliothèque leaflet-ajax-->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet-ajax/dist/leaflet.ajax.min.js"), "html", null, true);
        echo "\"></script>
    <!--bibliothèque restpostgis pour affichage couche résultats géoloc-->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/restpostgis/lvector.js"), "html", null, true);
        echo "\"></script>
    <!--biblioteque leaflet pulse pour marker geoloc selectionné-->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet-pulse/L.Icon.Pulse.js"), "html", null, true);
        echo "\"></script>   
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet-pulse/L.Icon.Pulse.css"), "html", null, true);
        echo "\" />
\t
    <style>
      body {
      padding: 0;
      margin: 0;
      }
      html, body, #map {
      height: 100%;
      font-family: Verdana, Arial, sans-serif;
      font-size: 12px;
      }
    </style>
    ";
        
        $__internal_f8612b913581db1ccfefdd087c5f303de2c0a0a992c7d72342e6740e01db9947->leave($__internal_f8612b913581db1ccfefdd087c5f303de2c0a0a992c7d72342e6740e01db9947_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6064c2cbed425808d4a182a70f30b636196d000d8731315c86ad8634c122d87e = $this->env->getExtension("native_profiler");
        $__internal_6064c2cbed425808d4a182a70f30b636196d000d8731315c86ad8634c122d87e->enter($__internal_6064c2cbed425808d4a182a70f30b636196d000d8731315c86ad8634c122d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script>
    ";
        // line 62
        echo "    function ConvertDDToDMS(D){
        var sign;
    \tD<0?sign=\"-\":\"\";
    \treturn [sign,Math.abs(0|D), '° ', 0|(D<0?D=-D:D)%1*60, \"' \", 0|D*60%1*60, '\"'].join('');
    }
    function ConvertDDToDMM(D){
    \tvar sign;
    \tD<0?sign=\"-\":\"\";
    \treturn [sign,Math.abs(0|D), '° ', ((D<0?D=-D:D)%1*60).toFixed(3), \"' \"].join('');
    }

/* EN COURS DE DEVELOPPEMENT   
    function alt_com(e) {
      url = \"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("open_alti");
        echo "\";
      // Send the data using post
      var lng = parseFloat (e.latlng.lng);
      var lat = parseFloat (e.latlng.lat);
      var posting = \$.get( url, {lng : lng,lat :lat}) ;
      // Put the results in a div
      posting.done(function( data ) {
    \t\tvar content = jQuery.parseJSON(data);
    \t\t//alert (content.elevations[0]);
    \t\tvar alt =(content.elevations[0]);
    \t\t//return (content);
    \t\turl = \"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("req_commune");
        echo "\";
    \t\tvar lng = parseFloat (e.latlng.lng);
            var lat = parseFloat (e.latlng.lat);
    \t\tvar posting = \$.get( url, {lng : lng,lat :lat}) ;
    \t\tposting.done(function( data ) {
    \t\t\tvar content = jQuery.parseJSON(data);
    \t\t\tvar commune = content.commune;
    \t\t\tvar bp = content.bp;
    \t\t\t//alert (\"COMMUNE : \"+commune+\"\\r\\n BP : \"+ bp + \"\\r\\n ALTITUDE : \"+alt+\" m\");
    \t\t\tvar popcop = L.popup()
    \t\t\t\t.setLatLng(e.latlng)
    \t\t\t\t.setContent(\"COMMUNE : \"+commune+\"</br> BP : \"+ bp +)
    \t\t\t\t.openOn(map);
    \t\t\treturn(content);
    \t\t});
    \t\tvar popcop = L.popup()
    \t\t\t.setLatLng(e.latlng)
    \t\t\t.setContent(\"</br> ALTITUDE : \"+alt+\" m\")
    \t\t\t.openOn(map);
    \t\treturn(content);
    \t})
    }
*/
    </script>
    ";
        
        $__internal_6064c2cbed425808d4a182a70f30b636196d000d8731315c86ad8634c122d87e->leave($__internal_6064c2cbed425808d4a182a70f30b636196d000d8731315c86ad8634c122d87e_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b7c5135dec2bc19198b8a544c638e7cbfc609197564720bb39a355b4df2cca = $this->env->getExtension("native_profiler");
        $__internal_67b7c5135dec2bc19198b8a544c638e7cbfc609197564720bb39a355b4df2cca->enter($__internal_67b7c5135dec2bc19198b8a544c638e7cbfc609197564720bb39a355b4df2cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        // line 114
        echo "

    ";
        // line 116
        $this->displayBlock('sidebar', $context, $blocks);
        // line 119
        echo "
     ";
        // line 120
        $this->displayBlock('carte', $context, $blocks);
        // line 123
        echo "
   
    ";
        
        $__internal_67b7c5135dec2bc19198b8a544c638e7cbfc609197564720bb39a355b4df2cca->leave($__internal_67b7c5135dec2bc19198b8a544c638e7cbfc609197564720bb39a355b4df2cca_prof);

    }

    // line 116
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_245a65f823efc0bceedccb410be37d8912bbb00160b64f2d0eb10e94b114ae5b = $this->env->getExtension("native_profiler");
        $__internal_245a65f823efc0bceedccb410be37d8912bbb00160b64f2d0eb10e94b114ae5b->enter($__internal_245a65f823efc0bceedccb410be37d8912bbb00160b64f2d0eb10e94b114ae5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 117
        echo "        ";
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "
    ";
        
        $__internal_245a65f823efc0bceedccb410be37d8912bbb00160b64f2d0eb10e94b114ae5b->leave($__internal_245a65f823efc0bceedccb410be37d8912bbb00160b64f2d0eb10e94b114ae5b_prof);

    }

    // line 120
    public function block_carte($context, array $blocks = array())
    {
        $__internal_520387a96a284a3fab4f0c7259b18d75e08375527448ffdc83175db822996d1d = $this->env->getExtension("native_profiler");
        $__internal_520387a96a284a3fab4f0c7259b18d75e08375527448ffdc83175db822996d1d->enter($__internal_520387a96a284a3fab4f0c7259b18d75e08375527448ffdc83175db822996d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carte"));

        // line 121
        echo "        ";
        echo twig_include($this->env, $context, "default/carte.html.twig");
        echo "
    ";
        
        $__internal_520387a96a284a3fab4f0c7259b18d75e08375527448ffdc83175db822996d1d->leave($__internal_520387a96a284a3fab4f0c7259b18d75e08375527448ffdc83175db822996d1d_prof);

    }

    public function getTemplateName()
    {
        return "gendloc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 121,  301 => 120,  291 => 117,  285 => 116,  276 => 123,  274 => 120,  271 => 119,  269 => 116,  265 => 114,  258 => 113,  226 => 86,  212 => 75,  197 => 62,  194 => 60,  188 => 59,  167 => 42,  163 => 41,  158 => 39,  153 => 37,  148 => 35,  144 => 34,  139 => 32,  135 => 31,  130 => 29,  125 => 27,  121 => 26,  117 => 25,  112 => 23,  108 => 22,  103 => 20,  99 => 19,  89 => 11,  82 => 10,  65 => 7,  56 => 126,  54 => 113,  50 => 111,  48 => 59,  43 => 56,  41 => 10,  35 => 7,  28 => 2,);
    }
}
/* {# Page de base avec inclusion des bibliothèques, définitions des fonctions utilisées pour la carte, inclusion de la carte dans le bloc carte #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-type" content="text/html ; charset=UTF-8" />*/
/*     <title>{% block title %} {% if is_granted('ROLE_ADMIN') %} GENDLOC - SECOURS EN MONTAGNE - ADMIN {% else %} GENDLOC - SECOURS EN MONTAGNE {% endif %}{% endblock %}</title>*/
/*     <meta  charset="UTF-8" >*/
/* */
/*     {% block stylesheets %} {# Inclusion des bibliothèques et des feuilles de style #}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <!--bibliothèque jquery -->*/
/*     <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>*/
/*     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />*/
/*     <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>*/
/*     <!--bibliothèque leaflet pour affichage map-->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*     <!--bibliothèque sidebar pour affichage menu-->*/
/*     <script src="{{ asset('js/sidebar/leaflet-sidebar.min.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/sidebar/leaflet-sidebar.css') }}" />*/
/*     <!--bibliothèque dynatable pour affichage résultats recherches et sms-->*/
/*     <script src="{{ asset('js/jquery-dynatable/jquery.dynatable.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/jquery-dynatable/jquery.dynatable.css') }}" />*/
/*     <!--bibliothèque coordinates pour affichage coordonnées sous la souris-->*/
/*     <script src="{{ asset('js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.src.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.css') }}" />*/
/*     <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('js/Leaflet.Coordinates/dist/Leaflet.Coordinates-0.1.4.ie.css') }}" /><![endif]-->*/
/*     <!--feuille de style table-->*/
/*     <link rel="stylesheet" href="{{ asset('css/main/table.css') }}" />*/
/*     <!--bibliothèque intl-tel-input pour affichage menu envoi sms-->*/
/*     <script src="{{ asset('js/intl-tel-input/build/js/intlTelInput.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/intl-tel-input/build/css/intlTelInput.css') }}">*/
/*     <!--bibliothèque styledLayerControl pour affichage menu couches geo-->*/
/*     <script src="{{ asset('js/Leaflet.StyledLayerControl/src/styledLayerControl.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/Leaflet.StyledLayerControl/css/styledLayerControl.css') }}" />*/
/*     <!--bibliothèque leaflet-ajax-->*/
/*     <script src="{{ asset('js/leaflet-ajax/dist/leaflet.ajax.min.js') }}"></script>*/
/*     <!--bibliothèque restpostgis pour affichage couche résultats géoloc-->*/
/*     <script src="{{ asset('/js/restpostgis/lvector.js') }}"></script>*/
/*     <!--biblioteque leaflet pulse pour marker geoloc selectionné-->*/
/*     <script src="{{ asset('js/leaflet-pulse/L.Icon.Pulse.js') }}"></script>   */
/*     <link rel="stylesheet" href="{{ asset('js/leaflet-pulse/L.Icon.Pulse.css') }}" />*/
/* 	*/
/*     <style>*/
/*       body {*/
/*       padding: 0;*/
/*       margin: 0;*/
/*       }*/
/*       html, body, #map {*/
/*       height: 100%;*/
/*       font-family: Verdana, Arial, sans-serif;*/
/*       font-size: 12px;*/
/*       }*/
/*     </style>*/
/*     {% endblock %}*/
/*     */
/*   </head>*/
/*   <body>*/
/*     {% block javascripts %}*/
/*     <script>*/
/*     {# Définitions des fonctions utilisées par la carte #}*/
/*     function ConvertDDToDMS(D){*/
/*         var sign;*/
/*     	D<0?sign="-":"";*/
/*     	return [sign,Math.abs(0|D), '° ', 0|(D<0?D=-D:D)%1*60, "' ", 0|D*60%1*60, '"'].join('');*/
/*     }*/
/*     function ConvertDDToDMM(D){*/
/*     	var sign;*/
/*     	D<0?sign="-":"";*/
/*     	return [sign,Math.abs(0|D), '° ', ((D<0?D=-D:D)%1*60).toFixed(3), "' "].join('');*/
/*     }*/
/* */
/* /* EN COURS DE DEVELOPPEMENT   */
/*     function alt_com(e) {*/
/*       url = "{{ path('open_alti') }}";*/
/*       // Send the data using post*/
/*       var lng = parseFloat (e.latlng.lng);*/
/*       var lat = parseFloat (e.latlng.lat);*/
/*       var posting = $.get( url, {lng : lng,lat :lat}) ;*/
/*       // Put the results in a div*/
/*       posting.done(function( data ) {*/
/*     		var content = jQuery.parseJSON(data);*/
/*     		//alert (content.elevations[0]);*/
/*     		var alt =(content.elevations[0]);*/
/*     		//return (content);*/
/*     		url = "{{ path('req_commune') }}";*/
/*     		var lng = parseFloat (e.latlng.lng);*/
/*             var lat = parseFloat (e.latlng.lat);*/
/*     		var posting = $.get( url, {lng : lng,lat :lat}) ;*/
/*     		posting.done(function( data ) {*/
/*     			var content = jQuery.parseJSON(data);*/
/*     			var commune = content.commune;*/
/*     			var bp = content.bp;*/
/*     			//alert ("COMMUNE : "+commune+"\r\n BP : "+ bp + "\r\n ALTITUDE : "+alt+" m");*/
/*     			var popcop = L.popup()*/
/*     				.setLatLng(e.latlng)*/
/*     				.setContent("COMMUNE : "+commune+"</br> BP : "+ bp +)*/
/*     				.openOn(map);*/
/*     			return(content);*/
/*     		});*/
/*     		var popcop = L.popup()*/
/*     			.setLatLng(e.latlng)*/
/*     			.setContent("</br> ALTITUDE : "+alt+" m")*/
/*     			.openOn(map);*/
/*     		return(content);*/
/*     	})*/
/*     }*/
/* *//* */
/*     </script>*/
/*     {% endblock %}*/
/* */
/*    */
/*     {% block body %} {# Définitions du bloc body qui contient la sidebar et la carte #}*/
/* */
/* */
/*     {% block sidebar%}*/
/*         {{ include('sidebar_menu.html.twig') }}*/
/*     {% endblock %}*/
/* */
/*      {% block carte %}*/
/*         {{ include('default/carte.html.twig') }}*/
/*     {% endblock %}*/
/* */
/*    */
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
