<?php

/* pages/categoria/cadastrar.twig */
class __TwigTemplate_20dfaf185c649fbf70cfe1b49e64b958 extends Twig_Template
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
        $context["titulo"] = "Cadastrar Categoria";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo form_open("categoria/salvar");
        echo "
        <div class=\"form-group\">
            <label>Descrição</label>
            <input class=\"form-control\" name=\"descricao\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i> Ok </button>
        <button type=\"reset\" class=\"btn btn-primary\"><i class=\"fa fa-times\"></i> Cancelar </button>";
        // line 11
        echo form_close();
    }

    public function getTemplateName()
    {
        return "pages/categoria/cadastrar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
