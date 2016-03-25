<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ab9c24a554da964beedd918107eafc2bbabf756bb8cc928956f7e578e0347b31 extends Twig_Template
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
        $__internal_a813d69531d0944503aa95a3fa84bca69a6fbed9c8168d7c4a0dbfed4331f91e = $this->env->getExtension("native_profiler");
        $__internal_a813d69531d0944503aa95a3fa84bca69a6fbed9c8168d7c4a0dbfed4331f91e->enter($__internal_a813d69531d0944503aa95a3fa84bca69a6fbed9c8168d7c4a0dbfed4331f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a813d69531d0944503aa95a3fa84bca69a6fbed9c8168d7c4a0dbfed4331f91e->leave($__internal_a813d69531d0944503aa95a3fa84bca69a6fbed9c8168d7c4a0dbfed4331f91e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
