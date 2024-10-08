<?php

/* session_sample/index.twig */
class __TwigTemplate_81ec9d90c7a27184f181d771d5e78bef extends Twig_Template
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
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">Indicadores</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-green\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-comment fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["os_abertas"]) ? $context["os_abertas"] : null), "html", null, true);
        echo "</div>
                                    <div>Abertas!</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 27
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
        // line 44
        echo twig_escape_filter($this->env, (isset($context["os_em_andamento"]) ? $context["os_em_andamento"] : null), "html", null, true);
        echo "</div>
                                    <div>Em Andamento!</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 49
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
        // line 66
        echo twig_escape_filter($this->env, (isset($context["os_em_impedimento"]) ? $context["os_em_impedimento"] : null), "html", null, true);
        echo "</div>
                                    <div>Em Impedimento!</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 71
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
        // line 88
        echo twig_escape_filter($this->env, (isset($context["os_encerradas"]) ? $context["os_encerradas"] : null), "html", null, true);
        echo "</div>
                                    <div>Encerradas!</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 93
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
            </div>
        </div>
        <!-- /#page-wrapper -->


";
    }

    public function getTemplateName()
    {
        return "session_sample/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
