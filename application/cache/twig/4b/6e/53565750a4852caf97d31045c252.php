<?php

/* templates/base_listar.twig */
class __TwigTemplate_4b6e53565750a4852caf97d31045c252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Tickets Externos - Sistema de Gerenciamento de Solicitações Externas</title>

    <!-- Bootstrap Core CSS -->";
        // line 15
        echo link_tag("/public/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet");
        echo "

    <!-- MetisMenu CSS -->";
        // line 18
        echo link_tag("/public/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet");
        echo "

    <!-- DataTables CSS -->";
        // line 21
        echo link_tag("/public/vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet");
        echo "

    <!-- DataTables Responsive CSS -->";
        // line 24
        echo link_tag("/public/vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet");
        echo "

    <!-- Custom CSS -->";
        // line 27
        echo link_tag("/public/dist/css/sb-admin-2.css\" rel=\"stylesheet");
        echo "

    <!-- Custom Fonts -->";
        // line 30
        echo link_tag("/public/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css");
        echo "

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin: 0;background: #004778 url('";
        // line 46
        echo twig_escape_filter($this->env, base_url("public/images/a5.gif"), "html", null, true);
        echo "') bottom left repeat-x;\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" style=\"color: #fff;\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><i class=\"fa fa-support fa-fw\"></i> Tickets Externos</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "NOME_COMPLETO"), "method"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, base_url("index.php/login/logout"), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, base_url("index.php/indicadores"), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Indicadores</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\"><i class=\"fa fa-tasks fa-fw\"></i> Atendimentos</a>
                        </li>";
        // line 85
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "ID_TIPO_USUARIO"), "method") == 1)) {
            // line 86
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Cadastros Básicos<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, base_url("index.php/usuario/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-users fa-fw\"></i> Usuários</span></a>
                                </li>
                                <li>                        
                                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, base_url("index.php/categoria/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-wrench fa-fw\"></i> Categorias</span></a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, base_url("index.php/setor/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-sitemap fa-fw\"></i> Entidades</span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>";
        }
        // line 102
        echo "                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">";
        // line 118
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array(0 => "success"), "method")) {
            // line 119
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array(0 => "success"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 121
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array(0 => "danger"), "method")) {
            // line 122
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array(0 => "danger"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 124
        $this->displayBlock('toolbar', $context, $blocks);
        // line 126
        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">";
        // line 128
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
    <!-- jQuery -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, base_url("/public/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, base_url("/public/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, base_url("/public/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, base_url("/public/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true
        });

        \$('.table-hover tbody tr')
\t\t.click(function(){  
\t\t\twindow.location=\$(this).find('a').attr('href');
\t\t\treturn false;  
\t});  

    });
    
    </script>

</body>

</html>
";
    }

    // line 124
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 128
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/base_listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
