<?php

/* pages/ordem_servico/cadastrar.twig */
class __TwigTemplate_f387d161f030d178e6d2e5d5fdb3ed44 extends Twig_Template
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
        $context["titulo"] = "Cadastrar Solicitação";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo form_open("ordem_servico/salvar");
        echo "
        <div class=\"form-group\">
            <label>Categoria</label>
            <select name=\"categoria\" class=\"form-control\">";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) ? $context["categoria"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "ID_CATEGORIA"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "DESCRICAO"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Problema</label>
            <textarea name=\"problema\" class=\"form-control\" rows=\"3\" placeholder=\"Descreva aqui seu problema\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i> Ok </button>
        <button type=\"reset\" class=\"btn btn-primary\"><i class=\"fa fa-times\"></i> Cancelar </button>";
        // line 19
        echo form_close();
    }

    public function getTemplateName()
    {
        return "pages/ordem_servico/cadastrar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
