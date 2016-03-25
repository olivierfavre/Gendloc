<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_91696681a721c21ab0c1eb0885f0b1ae53342cc3cc9ad6b1daaccd4a7daa7936 extends Twig_Template
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
        $__internal_3f04c3cbcee820b5ba0a8995ec39e08e88d02a0fa3ac560995520eb8d7d8aa6e = $this->env->getExtension("native_profiler");
        $__internal_3f04c3cbcee820b5ba0a8995ec39e08e88d02a0fa3ac560995520eb8d7d8aa6e->enter($__internal_3f04c3cbcee820b5ba0a8995ec39e08e88d02a0fa3ac560995520eb8d7d8aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3f04c3cbcee820b5ba0a8995ec39e08e88d02a0fa3ac560995520eb8d7d8aa6e->leave($__internal_3f04c3cbcee820b5ba0a8995ec39e08e88d02a0fa3ac560995520eb8d7d8aa6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
