<?php

/* pages/setor/listar.twig */
class __TwigTemplate_9d7213bdce2834338964a140c1c58e40 extends Twig_Template
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
        $context["titulo"] = "Entidades Externas ";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <p><a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, base_url("index.php/setor/cadastrar"), "html", null, true);
        echo "\"><i class=\"fa fa-plus fa-fw\"></i> Cadastrar </a></p>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <table width=\"100%\" class=\"table table-striped table-bordered\" id=\"dataTables-example\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Entidade</th>
            </tr>
        </thead>
        <tbody>";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["setor"]) ? $context["setor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["set"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "ID_SETOR"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "DESCRICAO"), "html", null, true);
            echo "</td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['set'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "        </tbody>
    </table>";
    }

    public function getTemplateName()
    {
        return "pages/setor/listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
