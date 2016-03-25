<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df3aa7e759287dc8ec9a7675705cc214bd35eb659ee9f71f507c0fc4bca9d37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0ff00cddbe062259644e719d6697d3821e633a907699bb008e866daebf1bc00 = $this->env->getExtension("native_profiler");
        $__internal_d0ff00cddbe062259644e719d6697d3821e633a907699bb008e866daebf1bc00->enter($__internal_d0ff00cddbe062259644e719d6697d3821e633a907699bb008e866daebf1bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ff00cddbe062259644e719d6697d3821e633a907699bb008e866daebf1bc00->leave($__internal_d0ff00cddbe062259644e719d6697d3821e633a907699bb008e866daebf1bc00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b637da2b223d057fc9765a6c28cc73bf7eb7e32d326a21b5ae72e4c41c45be0e = $this->env->getExtension("native_profiler");
        $__internal_b637da2b223d057fc9765a6c28cc73bf7eb7e32d326a21b5ae72e4c41c45be0e->enter($__internal_b637da2b223d057fc9765a6c28cc73bf7eb7e32d326a21b5ae72e4c41c45be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b637da2b223d057fc9765a6c28cc73bf7eb7e32d326a21b5ae72e4c41c45be0e->leave($__internal_b637da2b223d057fc9765a6c28cc73bf7eb7e32d326a21b5ae72e4c41c45be0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d47c0b8a2277b885a7d98344b9db74bef801892e6eb8c0f50be8b98373f85e90 = $this->env->getExtension("native_profiler");
        $__internal_d47c0b8a2277b885a7d98344b9db74bef801892e6eb8c0f50be8b98373f85e90->enter($__internal_d47c0b8a2277b885a7d98344b9db74bef801892e6eb8c0f50be8b98373f85e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d47c0b8a2277b885a7d98344b9db74bef801892e6eb8c0f50be8b98373f85e90->leave($__internal_d47c0b8a2277b885a7d98344b9db74bef801892e6eb8c0f50be8b98373f85e90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d5af3d1828889e9dd92247cf2a5e9af09c77728558a47c6d0dd44a9f627cc71 = $this->env->getExtension("native_profiler");
        $__internal_7d5af3d1828889e9dd92247cf2a5e9af09c77728558a47c6d0dd44a9f627cc71->enter($__internal_7d5af3d1828889e9dd92247cf2a5e9af09c77728558a47c6d0dd44a9f627cc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d5af3d1828889e9dd92247cf2a5e9af09c77728558a47c6d0dd44a9f627cc71->leave($__internal_7d5af3d1828889e9dd92247cf2a5e9af09c77728558a47c6d0dd44a9f627cc71_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
