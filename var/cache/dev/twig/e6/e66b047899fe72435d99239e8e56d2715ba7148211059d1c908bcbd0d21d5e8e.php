<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_64530ec823419acf93270de23700111f64d07972f29e76ba9fad4e522df69cf3 extends Twig_Template
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
        $__internal_550b8e27a7685cdc42854e916c24df1e85dd4a2f4fc9573cab8d03694f815e16 = $this->env->getExtension("native_profiler");
        $__internal_550b8e27a7685cdc42854e916c24df1e85dd4a2f4fc9573cab8d03694f815e16->enter($__internal_550b8e27a7685cdc42854e916c24df1e85dd4a2f4fc9573cab8d03694f815e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_550b8e27a7685cdc42854e916c24df1e85dd4a2f4fc9573cab8d03694f815e16->leave($__internal_550b8e27a7685cdc42854e916c24df1e85dd4a2f4fc9573cab8d03694f815e16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
