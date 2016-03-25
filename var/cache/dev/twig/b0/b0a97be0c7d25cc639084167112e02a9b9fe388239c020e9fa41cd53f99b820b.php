<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b09e23ff06d4dbd5f5393198e99c2d99c95c7463d4038f71d62bdfe4b5f00ea1 extends Twig_Template
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
        $__internal_fb93829c1b2d99884a46504f5858253b781437d93b05a06d05447204a8ec84be = $this->env->getExtension("native_profiler");
        $__internal_fb93829c1b2d99884a46504f5858253b781437d93b05a06d05447204a8ec84be->enter($__internal_fb93829c1b2d99884a46504f5858253b781437d93b05a06d05447204a8ec84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fb93829c1b2d99884a46504f5858253b781437d93b05a06d05447204a8ec84be->leave($__internal_fb93829c1b2d99884a46504f5858253b781437d93b05a06d05447204a8ec84be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
