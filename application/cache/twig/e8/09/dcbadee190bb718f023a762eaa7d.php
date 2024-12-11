<?php

/* pages/indicadores/index.twig */
class __TwigTemplate_e809dcbadee190bb718f023a762eaa7d extends Twig_Template
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
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["titulo"] = "Indicadores";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-comment fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["os_abertas"]) ? $context["os_abertas"] : null), "html", null, true);
        echo "</div>
                        <div>Abertas!</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">Ver Detalhes</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-gears fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["os_em_andamento"]) ? $context["os_em_andamento"] : null), "html", null, true);
        echo "</div>
                        <div>Em Andamento!</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">Ver Detalhes</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-red\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-ban fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["os_em_impedimento"]) ? $context["os_em_impedimento"] : null), "html", null, true);
        echo "</div>
                        <div>Suspensas!</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">Ver Detalhes</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-check fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["os_encerradas"]) ? $context["os_encerradas"] : null), "html", null, true);
        echo "</div>
                        <div>Encerradas!</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">Ver Detalhes</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "pages/indicadores/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
