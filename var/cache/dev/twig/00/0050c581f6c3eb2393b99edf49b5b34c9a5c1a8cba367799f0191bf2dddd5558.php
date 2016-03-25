<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f4d06216e4f6cdc19dd6f744064b0386d65c66927a3363a1adcf13f0bac3b44a extends Twig_Template
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
        $__internal_2ab7a201b6f871dee30576691cf5a2cb8e073fe120d51968bb4f37cf1e717d19 = $this->env->getExtension("native_profiler");
        $__internal_2ab7a201b6f871dee30576691cf5a2cb8e073fe120d51968bb4f37cf1e717d19->enter($__internal_2ab7a201b6f871dee30576691cf5a2cb8e073fe120d51968bb4f37cf1e717d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2ab7a201b6f871dee30576691cf5a2cb8e073fe120d51968bb4f37cf1e717d19->leave($__internal_2ab7a201b6f871dee30576691cf5a2cb8e073fe120d51968bb4f37cf1e717d19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
