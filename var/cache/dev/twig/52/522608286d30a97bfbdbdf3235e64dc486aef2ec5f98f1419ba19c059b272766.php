<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e38734f33790e1c06bb5f798900864145396f4deec58c858ace616df00ea805 extends Twig_Template
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
        $__internal_f73ef7cff29353331981180fc00fa317add87af18d2ef3e184aee045268d85cb = $this->env->getExtension("native_profiler");
        $__internal_f73ef7cff29353331981180fc00fa317add87af18d2ef3e184aee045268d85cb->enter($__internal_f73ef7cff29353331981180fc00fa317add87af18d2ef3e184aee045268d85cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f73ef7cff29353331981180fc00fa317add87af18d2ef3e184aee045268d85cb->leave($__internal_f73ef7cff29353331981180fc00fa317add87af18d2ef3e184aee045268d85cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
