<?php

/* pages/usuario/listar.twig */
class __TwigTemplate_8adca6e7aefe5fdebd641904c9c4c9e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base_listar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["titulo"] = "Usuários";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <p><a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, base_url("index.php/usuario/cadastrar"), "html", null, true);
        echo "\"><i class=\"fa fa-plus fa-fw\"></i> Cadastrar </a></p>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <table width=\"100%\" class=\"table table-striped table-bordered\" id=\"dataTables-example\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Setor</th>
                <th>Ramal</th>
                <th>Login</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuario"]) ? $context["usuario"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["us"]) ? $context["us"] : null), "ID_USUARIO"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["us"]) ? $context["us"] : null), "NOME_COMPLETO"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["us"]) ? $context["us"] : null), "SETOR"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["us"]) ? $context["us"] : null), "RAMAL"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["us"]) ? $context["us"] : null), "LOGIN"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "pages/usuario/listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
