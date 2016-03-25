<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_749c2a05ffe32e06b680e8081c22f2f6816c80b79c884efb0e9ed5b547a399ee extends Twig_Template
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
        $__internal_af70d183823ed05ca6cafd49ea06389919ad65b2c3d4b297b265a245222dc780 = $this->env->getExtension("native_profiler");
        $__internal_af70d183823ed05ca6cafd49ea06389919ad65b2c3d4b297b265a245222dc780->enter($__internal_af70d183823ed05ca6cafd49ea06389919ad65b2c3d4b297b265a245222dc780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_af70d183823ed05ca6cafd49ea06389919ad65b2c3d4b297b265a245222dc780->leave($__internal_af70d183823ed05ca6cafd49ea06389919ad65b2c3d4b297b265a245222dc780_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
