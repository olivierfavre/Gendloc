<?php

/* admin/admin.html.twig */
class __TwigTemplate_10bbb9adce809c2df1e25d178e04e12e2b7639f9b38c9294df2a9c605e159142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("gendloc.html.twig", "admin/admin.html.twig", 3);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60eda38885c074702f406e81f4acb42a4abd7de8a315dbc51a63141c9299b35c = $this->env->getExtension("native_profiler");
        $__internal_60eda38885c074702f406e81f4acb42a4abd7de8a315dbc51a63141c9299b35c->enter($__internal_60eda38885c074702f406e81f4acb42a4abd7de8a315dbc51a63141c9299b35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60eda38885c074702f406e81f4acb42a4abd7de8a315dbc51a63141c9299b35c->leave($__internal_60eda38885c074702f406e81f4acb42a4abd7de8a315dbc51a63141c9299b35c_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_398407527ebaa035e5eb46c7546957df289069c158b85d41c8ad447a9491696a = $this->env->getExtension("native_profiler");
        $__internal_398407527ebaa035e5eb46c7546957df289069c158b85d41c8ad447a9491696a->enter($__internal_398407527ebaa035e5eb46c7546957df289069c158b85d41c8ad447a9491696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "<div id=\"sidebar\" class=\"sidebar active\">
  ";
        // line 7
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "

    <!-- Tab panes -->
    <div class=\"sidebar-content collapsed\">
    
        <!--tab ADMIN-->
        <div class=\"sidebar-pane.active\" id=\"admin\" style=\"text-align:center;\">
            </br>
            <tr><td>
                <form action=";
        // line 16
        echo $this->env->getExtension('routing')->getPath("security_createuser");
        echo ">
                    <input type=\"submit\" value=\"Créer un utilisateur\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%\" >
                    <br></br>
                </form>
            </td></tr>
            <tr><td>
                ";
        // line 23
        echo "                <form action=";
        echo $this->env->getExtension('routing')->getPath("index");
        echo ">
                    <input type=\"submit\" value=\"Supprimer un utilisateur\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;\">
                    <br></br>
                </form>
            </td></tr>
            <tr><td>
                ";
        // line 30
        echo "                <form action=";
        echo $this->env->getExtension('routing')->getPath("index");
        echo ">
                    <input type=\"submit\" value=\"Réinitialiser un mot de passe\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;\" >
                    <br></br>
                </form>
            </td></tr>
        ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 36
            echo "            <tr><td>
                ";
            // line 38
            echo "                <form action=";
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">
                    <input type=\"submit\" value=\"Créer une nouvelle unité\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;\" >
                    <br></br>
                </form>
            </td></tr>
            <tr><td>
                ";
            // line 45
            echo "                <form action=";
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">
                    <input type=\"submit\" value=\"Changer un rôle\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;\" >
                    <br></br>
                </form>
            </td></tr>
            <tr><td>
                ";
            // line 52
            echo "                <form action=";
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">
                    <input type=\"submit\" value=\"Supprimer une unité\" style=\"width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%\" >
                    <br></br>
                </form>
            </td></tr>
        ";
        }
        // line 58
        echo "        </div>
    </div>
</div>
";
        
        $__internal_398407527ebaa035e5eb46c7546957df289069c158b85d41c8ad447a9491696a->leave($__internal_398407527ebaa035e5eb46c7546957df289069c158b85d41c8ad447a9491696a_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 58,  108 => 52,  98 => 45,  88 => 38,  85 => 36,  83 => 35,  74 => 30,  64 => 23,  55 => 16,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# Affichage de l'onglet admin de la sidebar #}*/
/* */
/* {% extends 'gendloc.html.twig' %}*/
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="sidebar active">*/
/*   {{ include('sidebar_menu.html.twig') }}*/
/* */
/*     <!-- Tab panes -->*/
/*     <div class="sidebar-content collapsed">*/
/*     */
/*         <!--tab ADMIN-->*/
/*         <div class="sidebar-pane.active" id="admin" style="text-align:center;">*/
/*             </br>*/
/*             <tr><td>*/
/*                 <form action={{ path('security_createuser') }}>*/
/*                     <input type="submit" value="Créer un utilisateur" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%" >*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*             <tr><td>*/
/*                 {# <form action={{ path('security_drop_user') }}> #}*/
/*                 <form action={{ path('index') }}>*/
/*                     <input type="submit" value="Supprimer un utilisateur" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;">*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*             <tr><td>*/
/*                 {#  <form action={{ path('security_new_password') }}> #}*/
/*                 <form action={{ path('index') }}>*/
/*                     <input type="submit" value="Réinitialiser un mot de passe" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;" >*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*         {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <tr><td>*/
/*                 {# <form action={{ path('security_create_unite') }}> #}*/
/*                 <form action={{ path('index') }}>*/
/*                     <input type="submit" value="Créer une nouvelle unité" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;" >*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*             <tr><td>*/
/*                 {# <form action={{ path('security_new_role') }}> #}*/
/*                 <form action={{ path('index') }}>*/
/*                     <input type="submit" value="Changer un rôle" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%;" >*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*             <tr><td>*/
/*                 {# <form action={{ path('security_drop_unite') }}> #}*/
/*                 <form action={{ path('index') }}>*/
/*                     <input type="submit" value="Supprimer une unité" style="width:220px;height:40px;border-radius:10px;cursor:pointer;font-size:120%" >*/
/*                     <br></br>*/
/*                 </form>*/
/*             </td></tr>*/
/*         {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
