<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ac5ab09e405848c2534b85f4fb5c95d3a98b5b8af094f1462903d2eb5e251b96 extends Twig_Template
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
        $__internal_7c712a4032ee3bd0a3b5ac83088da195e908b25f600bb81d8b6fe18197734b6b = $this->env->getExtension("native_profiler");
        $__internal_7c712a4032ee3bd0a3b5ac83088da195e908b25f600bb81d8b6fe18197734b6b->enter($__internal_7c712a4032ee3bd0a3b5ac83088da195e908b25f600bb81d8b6fe18197734b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7c712a4032ee3bd0a3b5ac83088da195e908b25f600bb81d8b6fe18197734b6b->leave($__internal_7c712a4032ee3bd0a3b5ac83088da195e908b25f600bb81d8b6fe18197734b6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
