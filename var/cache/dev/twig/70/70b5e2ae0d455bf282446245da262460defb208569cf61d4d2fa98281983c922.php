<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba710ba838a3a26d0eb46dcb7a93fc735a5f1a2f7f7e7ffe09f4416968995b5c extends Twig_Template
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
        $__internal_ef092f498f7c500ae3bdd336c0b1e82cebe9e7f9524c07179611d17928531996 = $this->env->getExtension("native_profiler");
        $__internal_ef092f498f7c500ae3bdd336c0b1e82cebe9e7f9524c07179611d17928531996->enter($__internal_ef092f498f7c500ae3bdd336c0b1e82cebe9e7f9524c07179611d17928531996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ef092f498f7c500ae3bdd336c0b1e82cebe9e7f9524c07179611d17928531996->leave($__internal_ef092f498f7c500ae3bdd336c0b1e82cebe9e7f9524c07179611d17928531996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
