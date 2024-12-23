<?php

/* templates/login.twig */
class __TwigTemplate_ff34994635ff95adbbb7ed5ae40d1c71 extends Twig_Template
{
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
        echo link_tag("/public/vendor/bootstrap/css/bootstrap.min.css");
        echo "

        <!-- MetisMenu CSS -->";
        // line 18
        echo link_tag("/public/vendor/metisMenu/metisMenu.min.css");
        echo "

        <!-- Custom CSS -->";
        // line 21
        echo link_tag("/public/dist/css/sb-admin-2.css");
        echo "

        <!-- Custom Fonts -->";
        // line 24
        echo link_tag("/public/vendor/font-awesome/css/font-awesome.min.css");
        echo "

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"login-panel panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-support fa-fw\"></i> Sistema de Administração de Solicitações Externas</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, base_url("index.php/login/autenticar"), "html", null, true);
        echo "\">
                                <fieldset>";
        // line 47
        if ((isset($context["alerta"]) ? $context["alerta"] : null)) {
            // line 48
            echo "                                    <div class=\"alert alert-danger\">";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["alerta"]) ? $context["alerta"] : null), "html", null, true);
            echo "
                                    </div>";
        }
        // line 52
        echo "                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Usuário\" name=\"usuario\" type=\"text\" autofocus required>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Senha\" name=\"senha\" type=\"password\" required />
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src=\"../vendor/jquery/jquery.min.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>

        <!-- Custom Theme JavaScript -->
        <script src=\"../dist/js/sb-admin-2.js\"></script>

    </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "templates/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
