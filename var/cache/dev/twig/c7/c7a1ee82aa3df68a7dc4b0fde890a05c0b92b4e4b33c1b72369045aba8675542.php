<?php

/* base.html.twig */
class __TwigTemplate_8fb514e2df1b245f0f7789380c3cd9592a6e41bc545ccd128be4875c89275994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e95f9bdfa9a6b61b98574ad5f49840c34fdb4d7f80de6701ac2991d88b5b6ceb = $this->env->getExtension("native_profiler");
        $__internal_e95f9bdfa9a6b61b98574ad5f49840c34fdb4d7f80de6701ac2991d88b5b6ceb->enter($__internal_e95f9bdfa9a6b61b98574ad5f49840c34fdb4d7f80de6701ac2991d88b5b6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e95f9bdfa9a6b61b98574ad5f49840c34fdb4d7f80de6701ac2991d88b5b6ceb->leave($__internal_e95f9bdfa9a6b61b98574ad5f49840c34fdb4d7f80de6701ac2991d88b5b6ceb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cec1e75fadac3ce1330bf09a3a38f70c3f034258725122c6f8eed1677d07fa1f = $this->env->getExtension("native_profiler");
        $__internal_cec1e75fadac3ce1330bf09a3a38f70c3f034258725122c6f8eed1677d07fa1f->enter($__internal_cec1e75fadac3ce1330bf09a3a38f70c3f034258725122c6f8eed1677d07fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cec1e75fadac3ce1330bf09a3a38f70c3f034258725122c6f8eed1677d07fa1f->leave($__internal_cec1e75fadac3ce1330bf09a3a38f70c3f034258725122c6f8eed1677d07fa1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dedcec7d41aaf6de88e4a390acd3a652faa5d4f2ed21f3c8096bd17b2840a663 = $this->env->getExtension("native_profiler");
        $__internal_dedcec7d41aaf6de88e4a390acd3a652faa5d4f2ed21f3c8096bd17b2840a663->enter($__internal_dedcec7d41aaf6de88e4a390acd3a652faa5d4f2ed21f3c8096bd17b2840a663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dedcec7d41aaf6de88e4a390acd3a652faa5d4f2ed21f3c8096bd17b2840a663->leave($__internal_dedcec7d41aaf6de88e4a390acd3a652faa5d4f2ed21f3c8096bd17b2840a663_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5cf698571cde32a6e74372b11a08744828edcc45fa911718eb3b470b8a926d6 = $this->env->getExtension("native_profiler");
        $__internal_b5cf698571cde32a6e74372b11a08744828edcc45fa911718eb3b470b8a926d6->enter($__internal_b5cf698571cde32a6e74372b11a08744828edcc45fa911718eb3b470b8a926d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5cf698571cde32a6e74372b11a08744828edcc45fa911718eb3b470b8a926d6->leave($__internal_b5cf698571cde32a6e74372b11a08744828edcc45fa911718eb3b470b8a926d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44d302fbb4d138688702d6d23f3f4cb378fe49b1d23b97ac38de07c16c0fdfb2 = $this->env->getExtension("native_profiler");
        $__internal_44d302fbb4d138688702d6d23f3f4cb378fe49b1d23b97ac38de07c16c0fdfb2->enter($__internal_44d302fbb4d138688702d6d23f3f4cb378fe49b1d23b97ac38de07c16c0fdfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44d302fbb4d138688702d6d23f3f4cb378fe49b1d23b97ac38de07c16c0fdfb2->leave($__internal_44d302fbb4d138688702d6d23f3f4cb378fe49b1d23b97ac38de07c16c0fdfb2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
