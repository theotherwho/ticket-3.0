<?php

/* templates/base.twig */
class __TwigTemplate_27bd7ee0efbbc482d1d59ab627553a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    <title>Tickets Externos - Sistema de Atendimento e Registro de Solicitações Externas</title>

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
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "NOME_COMPLETO"), "method"), "html", null, true);
        echo " </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 68
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
        // line 81
        echo twig_escape_filter($this->env, base_url("index.php/indicadores"), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Indicadores</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url("index.php/ordem_servico/listar"), "html", null, true);
        echo "\"><i class=\"fa fa-tasks fa-fw\"></i> Atendimentos</a>
                        </li>";
        // line 86
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array(0 => "ID_TIPO_USUARIO"), "method") == 1)) {
            // line 87
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Cadastros Básicos<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, base_url("index.php/usuario/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-users fa-fw\"></i> Usuários</span></a>
                                </li>
                                <li>                        
                                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, base_url("index.php/categoria/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-wrench fa-fw\"></i> Categorias</span></a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, base_url("index.php/setor/listar"), "html", null, true);
            echo "\"><i class=\"fa fa-sitemap fa-fw\"></i> Entidades Externas</span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>";
        }
        // line 103
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
        // line 112
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
    <!-- jQuery -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, base_url("/public/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, base_url("/public/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, base_url("/public/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, base_url("/public/vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, base_url("/public/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true
        });

        \$('.table-hover tbody tr')
\t\t.mouseover(function(){\$(this).addClass('hover');})
\t\t.mouseout(function(){\$(this).removeClass('hover');})
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

    // line 117
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
