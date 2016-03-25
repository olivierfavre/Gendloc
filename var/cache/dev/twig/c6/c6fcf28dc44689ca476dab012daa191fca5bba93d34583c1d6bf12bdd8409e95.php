<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_954f300746a1cbe654a624b381e975e10eb4ac897c405ba0e94d494b9e0cf0fc extends Twig_Template
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
        $__internal_bd19b57c0bd844243ee18de2417f53b5d1fecda0771388f2b6ba9b45efb218fe = $this->env->getExtension("native_profiler");
        $__internal_bd19b57c0bd844243ee18de2417f53b5d1fecda0771388f2b6ba9b45efb218fe->enter($__internal_bd19b57c0bd844243ee18de2417f53b5d1fecda0771388f2b6ba9b45efb218fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bd19b57c0bd844243ee18de2417f53b5d1fecda0771388f2b6ba9b45efb218fe->leave($__internal_bd19b57c0bd844243ee18de2417f53b5d1fecda0771388f2b6ba9b45efb218fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
