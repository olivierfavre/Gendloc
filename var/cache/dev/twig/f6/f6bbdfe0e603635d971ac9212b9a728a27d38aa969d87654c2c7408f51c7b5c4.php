<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8501188801927329ce8335a8e1a42b6abb0639e9674bca92bfadcd00a59d4797 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade84e485eb33277c7c7a40d01df118ac1a177d16354313f6fc36359851dae1f = $this->env->getExtension("native_profiler");
        $__internal_ade84e485eb33277c7c7a40d01df118ac1a177d16354313f6fc36359851dae1f->enter($__internal_ade84e485eb33277c7c7a40d01df118ac1a177d16354313f6fc36359851dae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade84e485eb33277c7c7a40d01df118ac1a177d16354313f6fc36359851dae1f->leave($__internal_ade84e485eb33277c7c7a40d01df118ac1a177d16354313f6fc36359851dae1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_015ca465fb9316e541aa5266dd91a9b98a7d6d15cbf6a94e5f7d80648139cdbd = $this->env->getExtension("native_profiler");
        $__internal_015ca465fb9316e541aa5266dd91a9b98a7d6d15cbf6a94e5f7d80648139cdbd->enter($__internal_015ca465fb9316e541aa5266dd91a9b98a7d6d15cbf6a94e5f7d80648139cdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_015ca465fb9316e541aa5266dd91a9b98a7d6d15cbf6a94e5f7d80648139cdbd->leave($__internal_015ca465fb9316e541aa5266dd91a9b98a7d6d15cbf6a94e5f7d80648139cdbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_304180ab71e8e2c454d694601011f97c0228c33d5e0e9ec8288539455a808ef2 = $this->env->getExtension("native_profiler");
        $__internal_304180ab71e8e2c454d694601011f97c0228c33d5e0e9ec8288539455a808ef2->enter($__internal_304180ab71e8e2c454d694601011f97c0228c33d5e0e9ec8288539455a808ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_304180ab71e8e2c454d694601011f97c0228c33d5e0e9ec8288539455a808ef2->leave($__internal_304180ab71e8e2c454d694601011f97c0228c33d5e0e9ec8288539455a808ef2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61a4b9afd350aac2c8391750ead6efd3c0045d54060f0d9ac3325061dd2ffbe5 = $this->env->getExtension("native_profiler");
        $__internal_61a4b9afd350aac2c8391750ead6efd3c0045d54060f0d9ac3325061dd2ffbe5->enter($__internal_61a4b9afd350aac2c8391750ead6efd3c0045d54060f0d9ac3325061dd2ffbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_61a4b9afd350aac2c8391750ead6efd3c0045d54060f0d9ac3325061dd2ffbe5->leave($__internal_61a4b9afd350aac2c8391750ead6efd3c0045d54060f0d9ac3325061dd2ffbe5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
