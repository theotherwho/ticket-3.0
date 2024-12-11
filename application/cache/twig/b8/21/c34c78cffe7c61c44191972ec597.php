<?php

/* pages/ordem_servico/listar.twig */
class __TwigTemplate_b821c34c78cffe7c61c44191972ec597 extends Twig_Template
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
        $context["titulo"] = "Tickets Externos:";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "ID_TIPO_USUARIO"), "method") == 2)) {
            // line 5
            echo "        <p><a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/cadastrar"), "html", null, true);
            echo "\"><i class=\"fa fa-plus fa-fw\"> </i> Cadastrar </a>";
        }
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\" style=\"cursor: pointer;\">
        <thead>
            <tr style=\"background: url('";
        // line 11
        echo twig_escape_filter($this->env, base_url("public/images/sprite.png"), "html", null, true);
        echo "') repeat-x 0px 0px;\">";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "Nº O.S", 1 => "Solicitante", 2 => "Categoria", 3 => "Problema", 4 => "Responsável", 5 => "Andamento", 6 => "Data Andamento"));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 13
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</th>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "            </tr>
        </thead>
        <tbody>";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
            // line 19
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "CLASSE"), "html", null, true);
            echo "\">
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, (base_url("index.php/ordem_servico/editar/") . $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "ID_ORDEM_SERVICO")), "html", null, true);
            echo "\" style=\"color: #333; text-decoration: none;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "ID_ORDEM_SERVICO"), "html", null, true);
            echo " </td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "SOLICITANTE"), "html", null, true);
            echo " </td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "CATEGORIA"), "html", null, true);
            echo " </td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "PROBLEMA"), "html", null, true);
            echo " </td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "RESPONSAVEL"), "html", null, true);
            echo " </td>
                <td><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, (base_url("public/images/") . $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "ID_STATUS")), "html", null, true);
            echo ".gif\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "STATUS"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "DATA_ANDAMENTO"), "html", null, true);
            echo "</td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "        </tbody>
    </table>";
    }

    public function getTemplateName()
    {
        return "pages/ordem_servico/listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
