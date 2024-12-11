<?php

/* pages/ordem_servico/editar.twig */
class __TwigTemplate_3b1e2d245987a5f3d890a3ed64f78e50 extends Twig_Template
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
        $context["titulo"] = ("Ticket Nº:" . $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "ID_ORDEM_SERVICO"));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <p><a class=\"btn btn-primary\" href=\"\"><i class=\"fa fa-print\"></i> Imprimir </a></p>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row show-grid\">
        <div class=\"col-xs-6 col-md-4\"><label>Solicitante</label>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "RESPONSAVEL"), "html", null, true);
        echo "</div>
        <div class=\"col-xs-6 col-md-4\"><label>Categoria</label>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "CATEGORIA"), "html", null, true);
        echo "</div>
        <div class=\"col-xs-6 col-md-4\"><label>Data Abertura</label>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "DATA_ANDAMENTO"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"well\"><label>Problema</label>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "PROBLEMA"), "html", null, true);
        echo "</div>";
        // line 13
        if (($this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "ID_ULT_STATUS_OS") != 1)) {
            // line 14
            echo "        <table width=\"100%\" class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>Andamento</th>
                    <th>Descrição</th>
                    <th>Responsável</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["andamento"]) ? $context["andamento"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo "                <tr>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "STATUS"), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "PROBLEMA"), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "RESPONSAVEL"), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "DATA_ANDAMENTO"), "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "            </tbody>
        </table>";
        }
        // line 35
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "ID_TIPO_USUARIO"), "method") == 3)) {
            // line 36
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">";
            // line 40
            echo form_open(("ordem_servico/atualizar/" . $this->getAttribute((isset($context["ordem_servico"]) ? $context["ordem_servico"] : null), "ID_ORDEM_SERVICO")));
            echo "
                            <div class=\"form-group\">
                                <label>Novo Andamento</label>
                                <select name=\"status\" class=\"form-control\">";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 45
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "ID_STATUS"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "DESCRICAO"), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 47
            echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label>Descrição</label>
                                <textarea name=\"andamento\" class=\"form-control\" rows=\"3\" placeholder=\"Descreva aqui o andamento do atendimento\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i> Ok </button>
                            <button type=\"reset\" class=\"btn btn-primary\"><i class=\"fa fa-times\"></i> Cancelar </button>";
            // line 55
            echo form_close();
            echo "
                    </div>
                </div>
            </div>
        </div>";
        }
    }

    public function getTemplateName()
    {
        return "pages/ordem_servico/editar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
