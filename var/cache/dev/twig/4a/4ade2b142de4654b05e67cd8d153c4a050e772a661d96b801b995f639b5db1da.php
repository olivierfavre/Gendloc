<?php

/* default/position.html.twig */
class __TwigTemplate_78cd39762159ddf39a661555788ec1fe8902afd2d4d6ba0ba26eb3a4dc107db1 extends Twig_Template
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
        $__internal_22cfee8a8ab07cd4416e6b08c609f6a4965cb105c396223536f45e2da281063c = $this->env->getExtension("native_profiler");
        $__internal_22cfee8a8ab07cd4416e6b08c609f6a4965cb105c396223536f45e2da281063c->enter($__internal_22cfee8a8ab07cd4416e6b08c609f6a4965cb105c396223536f45e2da281063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/position.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<title>GENDLOC</title>

<style>
table,tr,td
{
border:1px solid black;
font-size:120%;
text-align:center;
}
div#vert{background-color:green;}
div#rouge{background-color:red;}
</style>
<script src=\"http://code.jquery.com/jquery-2.1.3.min.js\"></script>
<script type=\"text/javascript\">
//initialisation des variables, p(precision) arbitrairement à 999 (supérieur à 100)
var watchId=null;
var it=0;
var x=0;
var y=0;
var p=999;
var sms_token = \"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" ;

// fonction qui gère la récupération des données de géoloc par le navigateur
function startWatch(){
    if (navigator.geolocation)
        var watchId = navigator.geolocation.watchPosition(
                        successCallback,
                        errorCallback,
                        {enableHighAccuracy:true,
                                            timeout:30000,
                                            maximumAge:2000,
                                            frequency: 1000
                        }
                      );
    else
        alert(\"Votre navigateur ne prend pas en charge la géolocalisation HTML5\");
\t\t//informer le serveur
}

// fonction qui permet de sortir du processus de géoloc
function stopWatch(){
    //exécuter quand position GPS valide et précision meilleure que 15m
\tnavigator.geolocation.clearWatch(watchId);
\tWatchId=null;
\tlocajax();
}
\t
// fonction qui gère les erreurs 
function errorCallback(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
              alert(\"Vous n'avez pas autorisé le partage de votre position, modifiez vos réglages et RECOMMENCEZ\");
    \t\t  //informer serveur erreur 4
    \t\t  it=4;
    \t\t  locajax();
              break;     
        case error.POSITION_UNAVAILABLE:
              alert(\"Recommencer GPS à ON - vue du ciel\");
    \t\t  //informer serveur erreur 5
    \t\t  it=5;
    \t\t  locajax();
              break;
        case error.TIMEOUT:
              //informer serveur erreur 6
    \t\t  it=6;
    \t\t  locajax();
    \t\t  alert(\"Le service n'a pas répondu à temps - RECOMMENCEZ vue du ciel\");
              break;
    }
}

// fonction qui s'exécue en cas de succès
function successCallback(position){
    p=position.coords.accuracy;
\tx=position.coords.longitude;
\ty=position.coords.latitude;
\tif (p<100) {
\t   document.getElementById(\"coord\").innerHTML = \"LAT : \" + y.toFixed(5) + \" / LONG : \" + x.toFixed(5) + \" / PRECISION : \" + p;
\t}
    if (p<=15) {
\t\tif (it<3) {
\t\t  it=3;
\t\t  stopWatch();
\t\t}
\t}
\tif (p<30) {
\t\tif (it<2) {
\t\t  it=2;
\t\t  locajax();
\t\t}
\t}
\tif (p<100) {
\t\tif (it==0) {
\t\t  it=1;
\t\t  locajax();
\t\t}
    }
}

// fonction qui fait apparître les informations de succe.html.twig via la route /succes
function locajax() {
\t  url = \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("succes");
        echo "\";
\t  var posting = \$.get( url, { l: sms_token, prec: p, lng: x, lat: y, n: it}) ;
\t  // Put the results in a div
\t  posting.done(function( data ) {
\t     var content = \$( data );
\t     \$( \"#retour\" ).empty().append( content );
\t  });
}\t\t  
\t\t  
</script>

</head>
<body  bgcolor=\"silver\" onload=\"startWatch();\">
  <h1>LOCALISATION SECOURS</h1></br>
  <div>
    <h2>
      <ul type=\"circle\">
\t<li>Vérifier GPS et DATA à ON</li>
\t<li>Accepter le partage de votre position</li>
\t<li>Attendre l'indication SUCCES</li>
\t<li>L'envoi de votre position est automatique</li>
      </ul>
    </h2>
  </div>
  <h2><div id=\"coord\">/</div></br></h2>
  <div id=\"retour\"><table width='100%'>
      <!-- etat de départ -->
      <tr><td><div id='rouge'>PRECISION 100 m</div></td></tr>
      <tr><td><div id='rouge'>PRECISION 30 m</div></td></tr>
      <tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>
    </table><br>
    <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table></div>
</body>
</html>
";
        
        $__internal_22cfee8a8ab07cd4416e6b08c609f6a4965cb105c396223536f45e2da281063c->leave($__internal_22cfee8a8ab07cd4416e6b08c609f6a4965cb105c396223536f45e2da281063c_prof);

    }

    public function getTemplateName()
    {
        return "default/position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 109,  50 => 28,  22 => 2,);
    }
}
/* {# Affichage de la page vers laquelle est dirigé un requérant lorsqu'il clique sur le lien #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8"/>*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/* <title>GENDLOC</title>*/
/* */
/* <style>*/
/* table,tr,td*/
/* {*/
/* border:1px solid black;*/
/* font-size:120%;*/
/* text-align:center;*/
/* }*/
/* div#vert{background-color:green;}*/
/* div#rouge{background-color:red;}*/
/* </style>*/
/* <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>*/
/* <script type="text/javascript">*/
/* //initialisation des variables, p(precision) arbitrairement à 999 (supérieur à 100)*/
/* var watchId=null;*/
/* var it=0;*/
/* var x=0;*/
/* var y=0;*/
/* var p=999;*/
/* var sms_token = "{{ token }}" ;*/
/* */
/* // fonction qui gère la récupération des données de géoloc par le navigateur*/
/* function startWatch(){*/
/*     if (navigator.geolocation)*/
/*         var watchId = navigator.geolocation.watchPosition(*/
/*                         successCallback,*/
/*                         errorCallback,*/
/*                         {enableHighAccuracy:true,*/
/*                                             timeout:30000,*/
/*                                             maximumAge:2000,*/
/*                                             frequency: 1000*/
/*                         }*/
/*                       );*/
/*     else*/
/*         alert("Votre navigateur ne prend pas en charge la géolocalisation HTML5");*/
/* 		//informer le serveur*/
/* }*/
/* */
/* // fonction qui permet de sortir du processus de géoloc*/
/* function stopWatch(){*/
/*     //exécuter quand position GPS valide et précision meilleure que 15m*/
/* 	navigator.geolocation.clearWatch(watchId);*/
/* 	WatchId=null;*/
/* 	locajax();*/
/* }*/
/* 	*/
/* // fonction qui gère les erreurs */
/* function errorCallback(error){*/
/*     switch(error.code){*/
/*         case error.PERMISSION_DENIED:*/
/*               alert("Vous n'avez pas autorisé le partage de votre position, modifiez vos réglages et RECOMMENCEZ");*/
/*     		  //informer serveur erreur 4*/
/*     		  it=4;*/
/*     		  locajax();*/
/*               break;     */
/*         case error.POSITION_UNAVAILABLE:*/
/*               alert("Recommencer GPS à ON - vue du ciel");*/
/*     		  //informer serveur erreur 5*/
/*     		  it=5;*/
/*     		  locajax();*/
/*               break;*/
/*         case error.TIMEOUT:*/
/*               //informer serveur erreur 6*/
/*     		  it=6;*/
/*     		  locajax();*/
/*     		  alert("Le service n'a pas répondu à temps - RECOMMENCEZ vue du ciel");*/
/*               break;*/
/*     }*/
/* }*/
/* */
/* // fonction qui s'exécue en cas de succès*/
/* function successCallback(position){*/
/*     p=position.coords.accuracy;*/
/* 	x=position.coords.longitude;*/
/* 	y=position.coords.latitude;*/
/* 	if (p<100) {*/
/* 	   document.getElementById("coord").innerHTML = "LAT : " + y.toFixed(5) + " / LONG : " + x.toFixed(5) + " / PRECISION : " + p;*/
/* 	}*/
/*     if (p<=15) {*/
/* 		if (it<3) {*/
/* 		  it=3;*/
/* 		  stopWatch();*/
/* 		}*/
/* 	}*/
/* 	if (p<30) {*/
/* 		if (it<2) {*/
/* 		  it=2;*/
/* 		  locajax();*/
/* 		}*/
/* 	}*/
/* 	if (p<100) {*/
/* 		if (it==0) {*/
/* 		  it=1;*/
/* 		  locajax();*/
/* 		}*/
/*     }*/
/* }*/
/* */
/* // fonction qui fait apparître les informations de succe.html.twig via la route /succes*/
/* function locajax() {*/
/* 	  url = "{{ path('succes') }}";*/
/* 	  var posting = $.get( url, { l: sms_token, prec: p, lng: x, lat: y, n: it}) ;*/
/* 	  // Put the results in a div*/
/* 	  posting.done(function( data ) {*/
/* 	     var content = $( data );*/
/* 	     $( "#retour" ).empty().append( content );*/
/* 	  });*/
/* }		  */
/* 		  */
/* </script>*/
/* */
/* </head>*/
/* <body  bgcolor="silver" onload="startWatch();">*/
/*   <h1>LOCALISATION SECOURS</h1></br>*/
/*   <div>*/
/*     <h2>*/
/*       <ul type="circle">*/
/* 	<li>Vérifier GPS et DATA à ON</li>*/
/* 	<li>Accepter le partage de votre position</li>*/
/* 	<li>Attendre l'indication SUCCES</li>*/
/* 	<li>L'envoi de votre position est automatique</li>*/
/*       </ul>*/
/*     </h2>*/
/*   </div>*/
/*   <h2><div id="coord">/</div></br></h2>*/
/*   <div id="retour"><table width='100%'>*/
/*       <!-- etat de départ -->*/
/*       <tr><td><div id='rouge'>PRECISION 100 m</div></td></tr>*/
/*       <tr><td><div id='rouge'>PRECISION 30 m</div></td></tr>*/
/*       <tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>*/
/*     </table><br>*/
/*     <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table></div>*/
/* </body>*/
/* </html>*/
/* */
