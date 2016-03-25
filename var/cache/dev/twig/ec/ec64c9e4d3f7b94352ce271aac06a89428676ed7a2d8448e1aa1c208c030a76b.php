<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_31b4a55804a13b63351e56942d7d5e05ec62caf7f1b0af0540f8c9bb23a26a03 extends Twig_Template
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
        $__internal_543419a971a50c3da27c820720a71cdf2af9bae2a9ee4636be8cffed394a7691 = $this->env->getExtension("native_profiler");
        $__internal_543419a971a50c3da27c820720a71cdf2af9bae2a9ee4636be8cffed394a7691->enter($__internal_543419a971a50c3da27c820720a71cdf2af9bae2a9ee4636be8cffed394a7691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_543419a971a50c3da27c820720a71cdf2af9bae2a9ee4636be8cffed394a7691->leave($__internal_543419a971a50c3da27c820720a71cdf2af9bae2a9ee4636be8cffed394a7691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
