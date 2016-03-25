<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6b3e8871d3bab07f4f6664ebcc9c8eef6ed77d4724a2afaadb4b224fc6d79995 extends Twig_Template
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
        $__internal_6d69b391ac56e320a47e95acf6e5651f4b9958bf50b150412c7aa9d62887e9e4 = $this->env->getExtension("native_profiler");
        $__internal_6d69b391ac56e320a47e95acf6e5651f4b9958bf50b150412c7aa9d62887e9e4->enter($__internal_6d69b391ac56e320a47e95acf6e5651f4b9958bf50b150412c7aa9d62887e9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6d69b391ac56e320a47e95acf6e5651f4b9958bf50b150412c7aa9d62887e9e4->leave($__internal_6d69b391ac56e320a47e95acf6e5651f4b9958bf50b150412c7aa9d62887e9e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
