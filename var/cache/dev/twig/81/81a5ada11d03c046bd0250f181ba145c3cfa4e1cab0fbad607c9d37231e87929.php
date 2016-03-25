<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ef3e12f83bf8dedf19bef2b81bff3e3021686ccbf62880c71c10ed1a7e5e52f8 extends Twig_Template
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
        $__internal_28d745ab09a063238efd56ae3972117bb136bf25de3dd931087b45fafa4653ad = $this->env->getExtension("native_profiler");
        $__internal_28d745ab09a063238efd56ae3972117bb136bf25de3dd931087b45fafa4653ad->enter($__internal_28d745ab09a063238efd56ae3972117bb136bf25de3dd931087b45fafa4653ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_28d745ab09a063238efd56ae3972117bb136bf25de3dd931087b45fafa4653ad->leave($__internal_28d745ab09a063238efd56ae3972117bb136bf25de3dd931087b45fafa4653ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
