<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3ef3e84982748ccd47af2c7c38b809cec0ef4527c500b76cf9ae5be95db92b55 extends Twig_Template
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
        $__internal_78f623f08c2bfcdd3373a8b46b38fad4838cbeb2d1dcc96270325e6184b87a24 = $this->env->getExtension("native_profiler");
        $__internal_78f623f08c2bfcdd3373a8b46b38fad4838cbeb2d1dcc96270325e6184b87a24->enter($__internal_78f623f08c2bfcdd3373a8b46b38fad4838cbeb2d1dcc96270325e6184b87a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_78f623f08c2bfcdd3373a8b46b38fad4838cbeb2d1dcc96270325e6184b87a24->leave($__internal_78f623f08c2bfcdd3373a8b46b38fad4838cbeb2d1dcc96270325e6184b87a24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
