<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_237b2fcf0cbb66cd6e41b35ee82828db231db611e391ffb094ebb096d2d452b7 extends Twig_Template
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
        $__internal_eab6b36d3b9486773b806ad8f0ae6cc4378a34982625cbac5ab4969f7efb82ec = $this->env->getExtension("native_profiler");
        $__internal_eab6b36d3b9486773b806ad8f0ae6cc4378a34982625cbac5ab4969f7efb82ec->enter($__internal_eab6b36d3b9486773b806ad8f0ae6cc4378a34982625cbac5ab4969f7efb82ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab6b36d3b9486773b806ad8f0ae6cc4378a34982625cbac5ab4969f7efb82ec->leave($__internal_eab6b36d3b9486773b806ad8f0ae6cc4378a34982625cbac5ab4969f7efb82ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f951e4d513bcde06fb1b425cfafd5d2dc0f1dd9f142633f7907dbb27db58e57e = $this->env->getExtension("native_profiler");
        $__internal_f951e4d513bcde06fb1b425cfafd5d2dc0f1dd9f142633f7907dbb27db58e57e->enter($__internal_f951e4d513bcde06fb1b425cfafd5d2dc0f1dd9f142633f7907dbb27db58e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f951e4d513bcde06fb1b425cfafd5d2dc0f1dd9f142633f7907dbb27db58e57e->leave($__internal_f951e4d513bcde06fb1b425cfafd5d2dc0f1dd9f142633f7907dbb27db58e57e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0611580f666cff2499b23b8e6474467b0a11d777e527e7f8a08187e6b9e8bde7 = $this->env->getExtension("native_profiler");
        $__internal_0611580f666cff2499b23b8e6474467b0a11d777e527e7f8a08187e6b9e8bde7->enter($__internal_0611580f666cff2499b23b8e6474467b0a11d777e527e7f8a08187e6b9e8bde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0611580f666cff2499b23b8e6474467b0a11d777e527e7f8a08187e6b9e8bde7->leave($__internal_0611580f666cff2499b23b8e6474467b0a11d777e527e7f8a08187e6b9e8bde7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eabca1a183206ffb3fde373548f3a0157f02b2fa0cb49bb2ee7b7e990ac5bcbe = $this->env->getExtension("native_profiler");
        $__internal_eabca1a183206ffb3fde373548f3a0157f02b2fa0cb49bb2ee7b7e990ac5bcbe->enter($__internal_eabca1a183206ffb3fde373548f3a0157f02b2fa0cb49bb2ee7b7e990ac5bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eabca1a183206ffb3fde373548f3a0157f02b2fa0cb49bb2ee7b7e990ac5bcbe->leave($__internal_eabca1a183206ffb3fde373548f3a0157f02b2fa0cb49bb2ee7b7e990ac5bcbe_prof);

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
