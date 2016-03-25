<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ce6365647d5d4935d770687974e14c8d3e76d0f9c0f9974352773c6dfca96647 extends Twig_Template
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
        $__internal_9582b9ad0c4cbb138f9d2bb55970d55d7811aa7d75f810a73b8be3323d82a153 = $this->env->getExtension("native_profiler");
        $__internal_9582b9ad0c4cbb138f9d2bb55970d55d7811aa7d75f810a73b8be3323d82a153->enter($__internal_9582b9ad0c4cbb138f9d2bb55970d55d7811aa7d75f810a73b8be3323d82a153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9582b9ad0c4cbb138f9d2bb55970d55d7811aa7d75f810a73b8be3323d82a153->leave($__internal_9582b9ad0c4cbb138f9d2bb55970d55d7811aa7d75f810a73b8be3323d82a153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
