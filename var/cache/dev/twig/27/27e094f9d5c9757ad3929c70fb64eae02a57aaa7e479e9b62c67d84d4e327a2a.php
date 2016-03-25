<?php

/* default/carte.html.twig */
class __TwigTemplate_1dfb065464579dbefaaeedede22a7191c319df9c635b7ea0f73ff9018d3dea30 extends Twig_Template
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
        $__internal_9ed53dca703e14463421ea2c40fba3d113fef5558129e5a22c6ee5b2cf3655fc = $this->env->getExtension("native_profiler");
        $__internal_9ed53dca703e14463421ea2c40fba3d113fef5558129e5a22c6ee5b2cf3655fc->enter($__internal_9ed53dca703e14463421ea2c40fba3d113fef5558129e5a22c6ee5b2cf3655fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/carte.html.twig"));

        // line 2
        echo "
<!-- LA CARTE -->
<div id=\"map\" class=\"sidebar-map\"></div>

<script type=\"text/javascript\">

  ";
        // line 9
        echo "  var apiKey = \"sraip834rjga289tw5abr8jb\";
  
  ";
        // line 12
        echo "  var layers = new Array();
  
  ";
        // line 15
        echo "  function geopUrl (key, layer, format)
  {\treturn \"http://wxs.ign.fr/\"+ key + \"/wmts?LAYER=\" + layer
  +\"&EXCEPTIONS=text/xml&FORMAT=\"+(format?format:\"image/jpeg\")+\"&SERVICE=WMTS&VERSION=1.0.0&REQUEST=GetTile&STYLE=normal&TILEMATRIXSET=PM\"
  +\"&TILEMATRIX={z}&TILECOL={x}&TILEROW={y}\" ;
  }
 
  var attributionIGN = '&copy; <a href=\"http://www.ign.fr/\">IGN-France</a>';
\t\t 
  ";
        // line 24
        echo "  ";
        // line 25
        echo "  var SCAN = L.tileLayer(geopUrl(apiKey,\"GEOGRAPHICALGRIDSYSTEMS.MAPS\"), { attribution:attributionIGN, maxZoom:18 } );
  var SCANEXPRESS = L.tileLayer(geopUrl(apiKey,\"GEOGRAPHICALGRIDSYSTEMS.MAPS.SCAN-EXPRESS.CLASSIQUE\"), { attribution:attributionIGN, maxZoom:18 } );
  var ORTHO = L.tileLayer(geopUrl(apiKey,\"ORTHOIMAGERY.ORTHOPHOTOS\"), { attribution:attributionIGN, maxZoom:19 } );

  ";
        // line 30
        echo "  var osmfr = L.tileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap France</a>'
  });

  ";
        // line 34
        if (array_key_exists("lat", $context)) {
            // line 35
            echo "    var center_x = ";
            echo twig_escape_filter($this->env, (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "html", null, true);
            echo ";
    var center_y = ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
            echo ";
  ";
        } else {
            // line 37
            echo " //si les coordonnées de l'unité n'ont pas pu être récupérées, la carte se centre sur l'ENSTA
    var center_x = 2.2187066;
    var center_y = 48.7110092;
  ";
        }
        // line 41
        echo "  
  var center_z = 12; // définition du zoom
  
  // marker resultat geoloc\t\t
  var locMarker = L.Icon.extend({
          options: {
              iconUrl: \"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon/loc.png"), "html", null, true);
        echo "\",
              shadowUrl: null
          }
  });

  // marker pulse icon
  var pulsingIcon = L.icon.pulse({iconSize:[20,20],color:'red'});

 /* EN COURS DE DEVELOPPEMENT
  // PRWSF - Résultats géolocalisation du jour pour l'utilisateur : dday une vue postgresql
  var where = \"unite='\"+unite+\"'\";
  var myPrwsfLayer = new lvector.PRWSF({
  url: \"./js/restpostgis/\",
  geotable: \"dday\",
  geomFieldName: \"coordinates\",
  where: where,
  fields: \"id,unite,datetime,precision,X(coordinates),Y(coordinates), orig\",
  scaleRange: [4,19],
  dynamic: true,
  autoUpdate: true,
  autoUpdateInterval: 15000,
  popupTemplate : function(properties) {
\t\t\tvar output = \"<h3>GENDLOC</h3>\";
\t\t\toutput += \"REF : \" + properties['unite'] + \" - \" + properties['orig'] +\"<br />\";
\t\t\toutput += \"HEURE : \" + properties['datetime'].substr(11,8) + \"<br />\";
\t\t\toutput += \"TELEPHONE : \" + properties['tel'] + \"<br />\";
\t\t\toutput += \"PRECISION : \" + properties['precision'] + \" m <br /><br />\";
\t\t\toutput += \"D.D LAT : \" + parseFloat (properties['st_y']).toFixed(5) + \" - LNG : \" + parseFloat (properties['st_x']).toFixed(5) +\"<br />\";
\t\t\toutput += \"D°M.M LAT : \" +  ConvertDDToDMM(parseFloat (properties['st_y'])) + \" - LNG : \" + ConvertDDToDMM(parseFloat (properties['st_x'])) +\"<br />\";
\t\t\toutput += \"D°M\\'S\\'\\' LAT : \" + ConvertDDToDMS(parseFloat (properties['st_y'])) + \" - LNG : \" + ConvertDDToDMS(parseFloat (properties['st_x'])) +\"<br />\";
\t\t\toutput += \"</br>COMMUNE : \"+ properties['com']+\"</br>BP : \"+properties['bp'];
\t\t\treturn output;
\t} ,
\tshowAll: false,
\tsymbology: {
    type: \"range\", // Defines the symbology as a range type where values above a minimum and below a maximum value are symbolized the same way
    property: \"precision\", // The property (field, attribute) to use for defining range values and styles
    ranges: [ // An array of value ranges to set symbology. Each value range has a specific symbology.
        {
            range: [1, 15], 
            vectorOptions: {
                                    icon: new locMarker({
                                        iconSize: new L.Point(18, 18),
\t\t\t\t\t\t\t\t\t\ticonAnchor: new L.Point(9, 9),
\t\t\t\t\t\t\t\t\t\tpopupAnchor: new L.Point(0, 0)\t\t\t\t\t\t
                                    }),
\t\t\t\t\t\t\t\t\topacity:0.9,
                                    title: \"{tel} - {id} ({unite})\"
                                }
        },{
            range: [15.01, 30],
            vectorOptions: {
                                    icon: new locMarker({
                                        iconSize: new L.Point(30, 30),
\t\t\t\t\t\t\t\t\t\ticonAnchor: new L.Point(15, 15),
\t\t\t\t\t\t\t\t\t\tpopupAnchor: new L.Point(0, 0)
                                    }),
\t\t\t\t\t\t\t\t\topacity:0.5,
                                    title: \"{id} ({unite})\"
                                }
        },{
            range: [30.01, 60],
            vectorOptions: {icon: new locMarker({
                                        iconSize: new L.Point(60/echelle, 60/echelle),
\t\t\t\t\t\t\t\t\t\ticonAnchor: new L.Point(30/echelle, 30/echelle),
\t\t\t\t\t\t\t\t\t\tpopupAnchor: new L.Point(0, 0)
\t\t\t\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\t\t\t\topacity:0.3,
                                    title: \"{id} ({unite})\"
        }}
    ]
}
    

});\t*/
  
  ";
        // line 124
        echo "  var map = L.map(\"map\", {
      center: new L.LatLng(center_y, center_x),
      zoom: center_z,
      doubleClickZoom: false
  });

  ";
        // line 131
        echo "  map.addLayer(SCAN);

/* EN COURS DE DEVELOPPEMENT
  // affichage couche résultats géolocalisation
  myPrwsfLayer.setMap(map);
*/
  
  ";
        // line 139
        echo "  nw = map.getBounds().getNorthWest();
  se = map.getBounds().getSouthEast();

 
  
  ";
        // line 145
        echo "  var baseMaps = [{
      groupName : \"OSM\",
      expanded : true,
      layers    : {
           \"OSM FRANCE\": osmfr}
  },
  {
      groupName : \"IGN\",
      expanded : true,
      layers    : {
          \"SÃ©ries SCAN\" : SCAN,
          \"SÃ©ries EXPRESS\": SCANEXPRESS,
          \"SÃ©rie Orthophoto\": ORTHO
      }
  }];  

  var overlays = [];

  var options = {
      container_width : \"200px\",
      container_maxHeight : \"400px\", 
      group_maxHeight : \"150px\",
      exclusive : false
  };
\t\t
  var control = L.Control.styledLayerControl(baseMaps, overlays, options);
  map.addControl(control);

 
  
  ";
        // line 176
        echo "  var sidebar = L.control.sidebar('sidebar').addTo(map);

  
  ";
        // line 180
        echo "  L.control.scale({'position':'bottomleft','metric':true,'imperial':false }).addTo(map);

  ";
        // line 183
        echo "  L.control.coordinates(
  {
      useLatLngOrder:true,
      centerUserCoordinates:true,
      labelTemplateLat:\"D.D Lat {y}\",
      labelTemplateLng:\"Lng {x}\"
  }).addTo(map);
  
  ";
        // line 192
        echo "  L.control.coordinates({
      position:\"bottomright\",
      useDMS:true,
      centerUserCoordinates:true,
      labelTemplateLat:\"DÂ°MM'SS'' Lat {y}\",
      labelTemplateLng:\"Lng {x}\",
      useLatLngOrder:true
  }).addTo(map);

  ";
        // line 202
        echo "  map.on('moveend', function(e) {
      nw=map.getBounds().getNorthWest();
      se=map.getBounds().getSouthEast();
  });
  
  map.on('zoomend ', function(e)
  {
      if (map.getZoom() >= 15)
      {
          echelle=(map.getBounds().getEast()-map.getBounds().getWest())*80000/(map.getPixelBounds().max.x-map.getPixelBounds().min.x);
      }
      else
      {
          echelle=1;
      }

  });

/* EN COURS DE DEVELOPPEMENT
// Fonction utilisée pour faire apparaitrer un popup indiquant l'altitude, la commune et l'unité compétente lorsqu'on double-clique sur la carte 
  map.on('dblclick', function(e) {
      alt_com(e);
  });
*/

/* EN COURS DE DEVELOPPEMENT
// fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour la BAN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker
  ";
        // line 230
        echo "  \$(document).on('click', '#ban-table tr', function() {
      \$(this).closest(\"tr\").siblings().removeClass(\"highlighted\");
      \$(this).toggleClass(\"highlighted\");
      var x = \$(this).find('td').first().text();
      var y = \$(this).find('td').last().text();
      var nom = \$(this).find('.nom').text();
      map.setView([y, x],16);
      L.marker([y, x]).addTo(map).bindPopup(\"<STRONG>\"+nom+\"</STRONG></BR>DÂ°D LAT : \"+y+\" - LONG : \"+x+\"</BR>DÂ°M.M' LAT : \"+ConvertDDToDMM(y)+\" - LONG : \"+ConvertDDToDMM(x)+\"</BR>DÂ°M'S'' LAT : \"+ConvertDDToDMS(y)+\" - LONG : \"+ConvertDDToDMS(x));
  });
*/


// fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour NOMINATIM, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker
\t\$(document).on('click', '#nominatim-table tr', function() {
    \$(this).closest(\"tr\").siblings().removeClass(\"highlighted\");
    \$(this).toggleClass(\"highlighted\");
    // récupération des données présentes dans les class de searchResult.html.twig
\tvar y = \$(this).find('.lat').text();
\tvar x = \$(this).find('.lng').text();
\tvar nom = \$(this).find('.nom').text();
    map.setView([y, x],16);
\tL.marker([y, x]).addTo(map).bindPopup(\"<STRONG>\"+nom+\"</STRONG></BR>DÂ°D LAT : \"+y+\" - LONG : \"+x+\"</BR>DÂ°M.M' LAT : \"+ConvertDDToDMM(y)+\" - LONG : \"+ConvertDDToDMM(x)+\"</BR>DÂ°M'S'' LAT : \"+ConvertDDToDMS(y)+\" - LONG : \"+ConvertDDToDMS(x));
\t});

/* EN COURS DE DEVELOPPEMENT\t
// fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour la toponymie IGN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker
\t\$(document).on('click', '#my-table tr', function() {
    \$(this).closest(\"tr\").siblings().removeClass(\"highlighted\");
    \$(this).toggleClass(\"highlighted\");
\t//var row = \$(this).find('td').slice(2).text;
\tvar x = \$(this).find('td').first().text();
\tvar y = \$(this).find('td').last().text();
    var nom = \$(this).find('.nom').text();
\tvar com = \$(this).find('.com').text();
\tmap.setView([y, x],15);
\tL.marker([y, x]).addTo(map).bindPopup(\"<STRONG>\"+nom+\" - \"+com+\"</STRONG></BR>DÂ°D LAT : \"+y+\" - LONG : \"+x+\"</BR>DÂ°M.M' LAT : \"+ConvertDDToDMM(y)+\" - LONG : \"+ConvertDDToDMM(x)+\"</BR>DÂ°M'S'' LAT : \"+ConvertDDToDMS(y)+\" - LONG : \"+ConvertDDToDMS(x));
\t});
*/

/* EN COURS DE DEVELOPPEMENT
// fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour les communes IGN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker  
  \$(document).on('click', '#com-table tr', function() {
    \$(this).closest(\"tr\").siblings().removeClass(\"highlighted\");
    \$(this).toggleClass(\"highlighted\");
\t//var row = \$(this).find('td').slice(2).text;
\tvar x = \$(this).find('td').first().text();
\tvar y = \$(this).find('td').last().text();
\tvar com = \$(this).find('.com').text();
\tmap.setView([y, x],12);
\tL.marker([y, x]).addTo(map).bindPopup(\"<STRONG>\"+com+\"</STRONG></BR>DÂ°D LAT : \"+y+\" - LONG : \"+x+\"</BR>DÂ°M.M' LAT : \"+ConvertDDToDMM(y)+\" - LONG : \"+ConvertDDToDMM(x)+\"</BR>DÂ°M'S'' LAT : \"+ConvertDDToDMS(y)+\" - LONG : \"+ConvertDDToDMS(x));
\t});
*/

// fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de géoloc, de faire apparaitre le marker de géoloc en y incluant un popup qui apparait lorsqu'on clique sur le marker
\$(document).on('click', '#res_loc tr', function() {
    \$(this).closest(\"tr\").siblings().removeClass(\"highlighted\");
    \$(this).toggleClass(\"highlighted\");
    // récupération des données présentes dans les class de smsloc.html.twig
    var x = \$(this).find('.lng').text();
\tvar y = \$(this).find('.lat').text();
\tvar tel = \$(this).find('.tel').text();
\tvar alt = \$(this).find('.alt').text();
\tvar heure = \$(this).find('.heure').text();
\tvar com = \$(this).find('.com').text();
    var bp = \$(this).find('.bp').text();
\tif (x) {
    \tmap.setView([y, x],13);
    \tL.marker([y, x],{icon: pulsingIcon}).addTo(map).bindPopup(\"<STRONG> G&eacuteolocalisation de \"+heure+\"</STRONG></BR>DÂ°D LAT : \"+y+\" - LONG : \"+x+\"</BR>DÂ°M.M' LAT : \"+ConvertDDToDMM(y)+\" - LONG : \"+ConvertDDToDMM(x)+\"</BR>DÂ°M'S'' LAT : \"+ConvertDDToDMS(y)+\" - LONG : \"+ConvertDDToDMS(x)+\"</br> T&eacutel&eacutephone : \"+tel+\"</br> Altitude : \"+alt+\" m</br> Commune : \"+com+\"</br> Unit&eacute comp&eacutetente : \"+bp);
\t}
});
</script>
";
        
        $__internal_9ed53dca703e14463421ea2c40fba3d113fef5558129e5a22c6ee5b2cf3655fc->leave($__internal_9ed53dca703e14463421ea2c40fba3d113fef5558129e5a22c6ee5b2cf3655fc_prof);

    }

    public function getTemplateName()
    {
        return "default/carte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 230,  253 => 202,  242 => 192,  232 => 183,  228 => 180,  223 => 176,  191 => 145,  184 => 139,  175 => 131,  167 => 124,  88 => 47,  80 => 41,  74 => 37,  69 => 36,  64 => 35,  62 => 34,  56 => 30,  50 => 25,  48 => 24,  38 => 15,  34 => 12,  30 => 9,  22 => 2,);
    }
}
/* {# Affichage de la carte #}*/
/* */
/* <!-- LA CARTE -->*/
/* <div id="map" class="sidebar-map"></div>*/
/* */
/* <script type="text/javascript">*/
/* */
/*   {# Cle API Geoportail #}*/
/*   var apiKey = "sraip834rjga289tw5abr8jb";*/
/*   */
/*   {# Liste des couches a afficher #}*/
/*   var layers = new Array();*/
/*   */
/*   {# L'url des services Geoportail #}*/
/*   function geopUrl (key, layer, format)*/
/*   {	return "http://wxs.ign.fr/"+ key + "/wmts?LAYER=" + layer*/
/*   +"&EXCEPTIONS=text/xml&FORMAT="+(format?format:"image/jpeg")+"&SERVICE=WMTS&VERSION=1.0.0&REQUEST=GetTile&STYLE=normal&TILEMATRIXSET=PM"*/
/*   +"&TILEMATRIX={z}&TILECOL={x}&TILEROW={y}" ;*/
/*   }*/
/*  */
/*   var attributionIGN = '&copy; <a href="http://www.ign.fr/">IGN-France</a>';*/
/* 		 */
/*   {# Definition des couches #}*/
/*   {# Carte IGN #}*/
/*   var SCAN = L.tileLayer(geopUrl(apiKey,"GEOGRAPHICALGRIDSYSTEMS.MAPS"), { attribution:attributionIGN, maxZoom:18 } );*/
/*   var SCANEXPRESS = L.tileLayer(geopUrl(apiKey,"GEOGRAPHICALGRIDSYSTEMS.MAPS.SCAN-EXPRESS.CLASSIQUE"), { attribution:attributionIGN, maxZoom:18 } );*/
/*   var ORTHO = L.tileLayer(geopUrl(apiKey,"ORTHOIMAGERY.ORTHOPHOTOS"), { attribution:attributionIGN, maxZoom:19 } );*/
/* */
/*   {# Carte Open OpenStreetMap_Mapnik #}*/
/*   var osmfr = L.tileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {*/
/*   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap France</a>'*/
/*   });*/
/* */
/*   {% if lat is defined%}*/
/*     var center_x = {{ lng }};*/
/*     var center_y = {{ lat }};*/
/*   {% else %} //si les coordonnées de l'unité n'ont pas pu être récupérées, la carte se centre sur l'ENSTA*/
/*     var center_x = 2.2187066;*/
/*     var center_y = 48.7110092;*/
/*   {% endif %}*/
/*   */
/*   var center_z = 12; // définition du zoom*/
/*   */
/*   // marker resultat geoloc		*/
/*   var locMarker = L.Icon.extend({*/
/*           options: {*/
/*               iconUrl: "{{ asset('images/icon/loc.png') }}",*/
/*               shadowUrl: null*/
/*           }*/
/*   });*/
/* */
/*   // marker pulse icon*/
/*   var pulsingIcon = L.icon.pulse({iconSize:[20,20],color:'red'});*/
/* */
/*  /* EN COURS DE DEVELOPPEMENT*/
/*   // PRWSF - Résultats géolocalisation du jour pour l'utilisateur : dday une vue postgresql*/
/*   var where = "unite='"+unite+"'";*/
/*   var myPrwsfLayer = new lvector.PRWSF({*/
/*   url: "./js/restpostgis/",*/
/*   geotable: "dday",*/
/*   geomFieldName: "coordinates",*/
/*   where: where,*/
/*   fields: "id,unite,datetime,precision,X(coordinates),Y(coordinates), orig",*/
/*   scaleRange: [4,19],*/
/*   dynamic: true,*/
/*   autoUpdate: true,*/
/*   autoUpdateInterval: 15000,*/
/*   popupTemplate : function(properties) {*/
/* 			var output = "<h3>GENDLOC</h3>";*/
/* 			output += "REF : " + properties['unite'] + " - " + properties['orig'] +"<br />";*/
/* 			output += "HEURE : " + properties['datetime'].substr(11,8) + "<br />";*/
/* 			output += "TELEPHONE : " + properties['tel'] + "<br />";*/
/* 			output += "PRECISION : " + properties['precision'] + " m <br /><br />";*/
/* 			output += "D.D LAT : " + parseFloat (properties['st_y']).toFixed(5) + " - LNG : " + parseFloat (properties['st_x']).toFixed(5) +"<br />";*/
/* 			output += "D°M.M LAT : " +  ConvertDDToDMM(parseFloat (properties['st_y'])) + " - LNG : " + ConvertDDToDMM(parseFloat (properties['st_x'])) +"<br />";*/
/* 			output += "D°M\'S\'\' LAT : " + ConvertDDToDMS(parseFloat (properties['st_y'])) + " - LNG : " + ConvertDDToDMS(parseFloat (properties['st_x'])) +"<br />";*/
/* 			output += "</br>COMMUNE : "+ properties['com']+"</br>BP : "+properties['bp'];*/
/* 			return output;*/
/* 	} ,*/
/* 	showAll: false,*/
/* 	symbology: {*/
/*     type: "range", // Defines the symbology as a range type where values above a minimum and below a maximum value are symbolized the same way*/
/*     property: "precision", // The property (field, attribute) to use for defining range values and styles*/
/*     ranges: [ // An array of value ranges to set symbology. Each value range has a specific symbology.*/
/*         {*/
/*             range: [1, 15], */
/*             vectorOptions: {*/
/*                                     icon: new locMarker({*/
/*                                         iconSize: new L.Point(18, 18),*/
/* 										iconAnchor: new L.Point(9, 9),*/
/* 										popupAnchor: new L.Point(0, 0)						*/
/*                                     }),*/
/* 									opacity:0.9,*/
/*                                     title: "{tel} - {id} ({unite})"*/
/*                                 }*/
/*         },{*/
/*             range: [15.01, 30],*/
/*             vectorOptions: {*/
/*                                     icon: new locMarker({*/
/*                                         iconSize: new L.Point(30, 30),*/
/* 										iconAnchor: new L.Point(15, 15),*/
/* 										popupAnchor: new L.Point(0, 0)*/
/*                                     }),*/
/* 									opacity:0.5,*/
/*                                     title: "{id} ({unite})"*/
/*                                 }*/
/*         },{*/
/*             range: [30.01, 60],*/
/*             vectorOptions: {icon: new locMarker({*/
/*                                         iconSize: new L.Point(60/echelle, 60/echelle),*/
/* 										iconAnchor: new L.Point(30/echelle, 30/echelle),*/
/* 										popupAnchor: new L.Point(0, 0)*/
/* 										}),*/
/* 										opacity:0.3,*/
/*                                     title: "{id} ({unite})"*/
/*         }}*/
/*     ]*/
/* }*/
/*     */
/* */
/* });	*//* */
/*   */
/*   {# La carte Leaflet #}*/
/*   var map = L.map("map", {*/
/*       center: new L.LatLng(center_y, center_x),*/
/*       zoom: center_z,*/
/*       doubleClickZoom: false*/
/*   });*/
/* */
/*   {# ajout de la couche IGN SCAN #}*/
/*   map.addLayer(SCAN);*/
/* */
/* /* EN COURS DE DEVELOPPEMENT*/
/*   // affichage couche résultats géolocalisation*/
/*   myPrwsfLayer.setMap(map);*/
/* *//* */
/*   */
/*   {# rÃ©cupÃ©ration de la boundingbox #}*/
/*   nw = map.getBounds().getNorthWest();*/
/*   se = map.getBounds().getSouthEast();*/
/* */
/*  */
/*   */
/*   {# initialisation et ajout menu couches #}*/
/*   var baseMaps = [{*/
/*       groupName : "OSM",*/
/*       expanded : true,*/
/*       layers    : {*/
/*            "OSM FRANCE": osmfr}*/
/*   },*/
/*   {*/
/*       groupName : "IGN",*/
/*       expanded : true,*/
/*       layers    : {*/
/*           "SÃ©ries SCAN" : SCAN,*/
/*           "SÃ©ries EXPRESS": SCANEXPRESS,*/
/*           "SÃ©rie Orthophoto": ORTHO*/
/*       }*/
/*   }];  */
/* */
/*   var overlays = [];*/
/* */
/*   var options = {*/
/*       container_width : "200px",*/
/*       container_maxHeight : "400px", */
/*       group_maxHeight : "150px",*/
/*       exclusive : false*/
/*   };*/
/* 		*/
/*   var control = L.Control.styledLayerControl(baseMaps, overlays, options);*/
/*   map.addControl(control);*/
/* */
/*  */
/*   */
/*   {# affichage sidebar #}*/
/*   var sidebar = L.control.sidebar('sidebar').addTo(map);*/
/* */
/*   */
/*   {# affichage échelle en bas à gauche #}*/
/*   L.control.scale({'position':'bottomleft','metric':true,'imperial':false }).addTo(map);*/
/* */
/*   {# affichage coordonnÃ©es curseur DD en bas à droite #}*/
/*   L.control.coordinates(*/
/*   {*/
/*       useLatLngOrder:true,*/
/*       centerUserCoordinates:true,*/
/*       labelTemplateLat:"D.D Lat {y}",*/
/*       labelTemplateLng:"Lng {x}"*/
/*   }).addTo(map);*/
/*   */
/*   {# affichage coordonnÃ©es curseur DMS en bas à droite #}*/
/*   L.control.coordinates({*/
/*       position:"bottomright",*/
/*       useDMS:true,*/
/*       centerUserCoordinates:true,*/
/*       labelTemplateLat:"DÂ°MM'SS'' Lat {y}",*/
/*       labelTemplateLng:"Lng {x}",*/
/*       useLatLngOrder:true*/
/*   }).addTo(map);*/
/* */
/*   {# RÃ©cupÃ©ration boundingbox aprÃ¨s mouvement carte #}*/
/*   map.on('moveend', function(e) {*/
/*       nw=map.getBounds().getNorthWest();*/
/*       se=map.getBounds().getSouthEast();*/
/*   });*/
/*   */
/*   map.on('zoomend ', function(e)*/
/*   {*/
/*       if (map.getZoom() >= 15)*/
/*       {*/
/*           echelle=(map.getBounds().getEast()-map.getBounds().getWest())*80000/(map.getPixelBounds().max.x-map.getPixelBounds().min.x);*/
/*       }*/
/*       else*/
/*       {*/
/*           echelle=1;*/
/*       }*/
/* */
/*   });*/
/* */
/* /* EN COURS DE DEVELOPPEMENT*/
/* // Fonction utilisée pour faire apparaitrer un popup indiquant l'altitude, la commune et l'unité compétente lorsqu'on double-clique sur la carte */
/*   map.on('dblclick', function(e) {*/
/*       alt_com(e);*/
/*   });*/
/* *//* */
/* */
/* /* EN COURS DE DEVELOPPEMENT*/
/* // fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour la BAN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker*/
/*   {#handler click sur rÃ©sultat BAN #}*/
/*   $(document).on('click', '#ban-table tr', function() {*/
/*       $(this).closest("tr").siblings().removeClass("highlighted");*/
/*       $(this).toggleClass("highlighted");*/
/*       var x = $(this).find('td').first().text();*/
/*       var y = $(this).find('td').last().text();*/
/*       var nom = $(this).find('.nom').text();*/
/*       map.setView([y, x],16);*/
/*       L.marker([y, x]).addTo(map).bindPopup("<STRONG>"+nom+"</STRONG></BR>DÂ°D LAT : "+y+" - LONG : "+x+"</BR>DÂ°M.M' LAT : "+ConvertDDToDMM(y)+" - LONG : "+ConvertDDToDMM(x)+"</BR>DÂ°M'S'' LAT : "+ConvertDDToDMS(y)+" - LONG : "+ConvertDDToDMS(x));*/
/*   });*/
/* *//* */
/* */
/* */
/* // fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour NOMINATIM, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker*/
/* 	$(document).on('click', '#nominatim-table tr', function() {*/
/*     $(this).closest("tr").siblings().removeClass("highlighted");*/
/*     $(this).toggleClass("highlighted");*/
/*     // récupération des données présentes dans les class de searchResult.html.twig*/
/* 	var y = $(this).find('.lat').text();*/
/* 	var x = $(this).find('.lng').text();*/
/* 	var nom = $(this).find('.nom').text();*/
/*     map.setView([y, x],16);*/
/* 	L.marker([y, x]).addTo(map).bindPopup("<STRONG>"+nom+"</STRONG></BR>DÂ°D LAT : "+y+" - LONG : "+x+"</BR>DÂ°M.M' LAT : "+ConvertDDToDMM(y)+" - LONG : "+ConvertDDToDMM(x)+"</BR>DÂ°M'S'' LAT : "+ConvertDDToDMS(y)+" - LONG : "+ConvertDDToDMS(x));*/
/* 	});*/
/* */
/* /* EN COURS DE DEVELOPPEMENT	*/
/* // fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour la toponymie IGN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker*/
/* 	$(document).on('click', '#my-table tr', function() {*/
/*     $(this).closest("tr").siblings().removeClass("highlighted");*/
/*     $(this).toggleClass("highlighted");*/
/* 	//var row = $(this).find('td').slice(2).text;*/
/* 	var x = $(this).find('td').first().text();*/
/* 	var y = $(this).find('td').last().text();*/
/*     var nom = $(this).find('.nom').text();*/
/* 	var com = $(this).find('.com').text();*/
/* 	map.setView([y, x],15);*/
/* 	L.marker([y, x]).addTo(map).bindPopup("<STRONG>"+nom+" - "+com+"</STRONG></BR>DÂ°D LAT : "+y+" - LONG : "+x+"</BR>DÂ°M.M' LAT : "+ConvertDDToDMM(y)+" - LONG : "+ConvertDDToDMM(x)+"</BR>DÂ°M'S'' LAT : "+ConvertDDToDMS(y)+" - LONG : "+ConvertDDToDMS(x));*/
/* 	});*/
/* *//* */
/* */
/* /* EN COURS DE DEVELOPPEMENT*/
/* // fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de recherche pour les communes IGN, de faire apparaitre le marker en y incluant un popup qui apparait lorsqu'on clique sur le marker  */
/*   $(document).on('click', '#com-table tr', function() {*/
/*     $(this).closest("tr").siblings().removeClass("highlighted");*/
/*     $(this).toggleClass("highlighted");*/
/* 	//var row = $(this).find('td').slice(2).text;*/
/* 	var x = $(this).find('td').first().text();*/
/* 	var y = $(this).find('td').last().text();*/
/* 	var com = $(this).find('.com').text();*/
/* 	map.setView([y, x],12);*/
/* 	L.marker([y, x]).addTo(map).bindPopup("<STRONG>"+com+"</STRONG></BR>DÂ°D LAT : "+y+" - LONG : "+x+"</BR>DÂ°M.M' LAT : "+ConvertDDToDMM(y)+" - LONG : "+ConvertDDToDMM(x)+"</BR>DÂ°M'S'' LAT : "+ConvertDDToDMS(y)+" - LONG : "+ConvertDDToDMS(x));*/
/* 	});*/
/* *//* */
/* */
/* // fonction permettant, au moment où l'on clique sur une ligne du tableau contenant les résultats de géoloc, de faire apparaitre le marker de géoloc en y incluant un popup qui apparait lorsqu'on clique sur le marker*/
/* $(document).on('click', '#res_loc tr', function() {*/
/*     $(this).closest("tr").siblings().removeClass("highlighted");*/
/*     $(this).toggleClass("highlighted");*/
/*     // récupération des données présentes dans les class de smsloc.html.twig*/
/*     var x = $(this).find('.lng').text();*/
/* 	var y = $(this).find('.lat').text();*/
/* 	var tel = $(this).find('.tel').text();*/
/* 	var alt = $(this).find('.alt').text();*/
/* 	var heure = $(this).find('.heure').text();*/
/* 	var com = $(this).find('.com').text();*/
/*     var bp = $(this).find('.bp').text();*/
/* 	if (x) {*/
/*     	map.setView([y, x],13);*/
/*     	L.marker([y, x],{icon: pulsingIcon}).addTo(map).bindPopup("<STRONG> G&eacuteolocalisation de "+heure+"</STRONG></BR>DÂ°D LAT : "+y+" - LONG : "+x+"</BR>DÂ°M.M' LAT : "+ConvertDDToDMM(y)+" - LONG : "+ConvertDDToDMM(x)+"</BR>DÂ°M'S'' LAT : "+ConvertDDToDMS(y)+" - LONG : "+ConvertDDToDMS(x)+"</br> T&eacutel&eacutephone : "+tel+"</br> Altitude : "+alt+" m</br> Commune : "+com+"</br> Unit&eacute comp&eacutetente : "+bp);*/
/* 	}*/
/* });*/
/* </script>*/
/* */
