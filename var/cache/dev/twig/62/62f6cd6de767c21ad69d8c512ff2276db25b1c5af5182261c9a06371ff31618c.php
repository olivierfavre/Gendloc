<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d962a67fe217a9063aa0fcecb3fd84a3b0ed36159c70f19ad49f3fe14c44817f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_889e4853ec71fab902f50052e84158ac86f9d581094e6daa59e3a90801431b1b = $this->env->getExtension("native_profiler");
        $__internal_889e4853ec71fab902f50052e84158ac86f9d581094e6daa59e3a90801431b1b->enter($__internal_889e4853ec71fab902f50052e84158ac86f9d581094e6daa59e3a90801431b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889e4853ec71fab902f50052e84158ac86f9d581094e6daa59e3a90801431b1b->leave($__internal_889e4853ec71fab902f50052e84158ac86f9d581094e6daa59e3a90801431b1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_424f51d8397bf93b112467324718bfbd6b293ee9646fa0712f441c7f55011564 = $this->env->getExtension("native_profiler");
        $__internal_424f51d8397bf93b112467324718bfbd6b293ee9646fa0712f441c7f55011564->enter($__internal_424f51d8397bf93b112467324718bfbd6b293ee9646fa0712f441c7f55011564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_424f51d8397bf93b112467324718bfbd6b293ee9646fa0712f441c7f55011564->leave($__internal_424f51d8397bf93b112467324718bfbd6b293ee9646fa0712f441c7f55011564_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07ba3fe93091b974d0096defb270bec271d8200e0740dfa0075ebfab77e6794b = $this->env->getExtension("native_profiler");
        $__internal_07ba3fe93091b974d0096defb270bec271d8200e0740dfa0075ebfab77e6794b->enter($__internal_07ba3fe93091b974d0096defb270bec271d8200e0740dfa0075ebfab77e6794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_07ba3fe93091b974d0096defb270bec271d8200e0740dfa0075ebfab77e6794b->leave($__internal_07ba3fe93091b974d0096defb270bec271d8200e0740dfa0075ebfab77e6794b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
