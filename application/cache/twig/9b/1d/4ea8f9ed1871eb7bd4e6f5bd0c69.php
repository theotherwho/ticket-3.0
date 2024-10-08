<?php

/* pages/usuario/cadastrar.twig */
class __TwigTemplate_9b1d4ea8f9ed1871eb7bd4e6f5bd0c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base_cadastrar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["titulo"] = "Cadastrar Usuário";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo form_open("usuario/salvar");
        echo "
        <div class=\"form-group\">
            <label>Nome Completo</label>
            <input name=\"nome_completo\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Setor</label>
            <select name=\"setor\" class=\"form-control\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["setor"]) ? $context["setor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "ID_SETOR"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "DESCRICAO"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Ramal</label>
            <input name=\"ramal\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Tipo de Usuário</label>
            <select name=\"tipo_usuario\" class=\"form-control\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_usuario"]) ? $context["tipo_usuario"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "ID_TIPO_USUARIO"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "DESCRICAO"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Autenticação</label>
            <input name=\"usuario\" class=\"form-control\" placeholder=\"Usuário\">
        </div>
        <div class=\"form-group\">
            <input name=\"senha\" class=\"form-control\" placeholder=\"Senha\" type=\"password\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i> Ok </button>
        <button type=\"reset\" class=\"btn btn-primary\"><i class=\"fa fa-times\"></i> Cancelar </button>
    ";
        // line 38
        echo form_close();
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/usuario/cadastrar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
