<?php

/* template.php */
class __TwigTemplate_0b119abf010bf1b6466bc4337283d0e8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>HelpDesk - Sistema de Administração de Solicitações Externas</title>

    <!-- Bootstrap Core CSS -->
    <?=link_tag('/public/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet')?>

    <!-- MetisMenu CSS -->
    <?=link_tag('/public/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet')?>

    <!-- DataTables CSS -->
    <?=link_tag('/public/vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet')?>

    <!-- DataTables Responsive CSS -->
    <?=link_tag('/public/vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet')?>

    <!-- Custom CSS -->
    <?=link_tag('/public/dist/css/sb-admin-2.css\" rel=\"stylesheet')?>

    <!-- Custom Fonts -->
    <?=link_tag('/public/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css')?>

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
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin: 0;background: #004778 url('<?=base_url();?>public/images/a5.gif') bottom left repeat-x;\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" style=\"color: #fff;\" href=\"<?=base_url();?>\"><i class=\"fa fa-support fa-fw\"></i> Tickets Externos</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-tasks\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class=\"pull-right text-muted\">40% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class=\"pull-right text-muted\">20% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                            <span class=\"sr-only\">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class=\"pull-right text-muted\">80% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Tasks</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-alerts\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Alerts</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Perfil</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"<?=base_url('index.php/login/logout');?>\"><i class=\"fa fa-sign-out fa-fw\"></i> Sair</a>
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
                        <?php if (\$this->session->userdata('ID_TIPO_USUARIO') == 1) { ?>
                        <li>
                            <a href=\"<?=base_url('index.php/indicadores');?>\"><i class=\"fa fa-dashboard fa-fw\"></i> Indicadores</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href=\"<?=base_url('index.php/ordem_servico/listar');?>\"><i class=\"fa fa-tasks fa-fw\"></i> Ordens de Serviço</a>
                        </li>
                        <?php if (\$this->session->userdata('ID_TIPO_USUARIO') == 1) { ?>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Cadastros Básicos<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"<?=base_url('index.php/usuario/listar');?>\"><i class=\"fa fa-users fa-fw\"></i> Usuários</span></a>
                                </li>
                                <li>                        
                                    <a href=\"<?=base_url('index.php/categoria/listar');?>\"><i class=\"fa fa-wrench fa-fw\"></i> Categorias</span></a>
                                </li>
                                <li>
                                    <a href=\"<?=base_url('index.php/setor/listar');?>\"><i class=\"fa fa-sitemap fa-fw\"></i> Setores</span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">Ordens de Serviço</h3>
                    <?php if (\$this->session->userdata('ID_TIPO_USUARIO') == 2) { ?>
                        <p><a class=\"btn btn-default\" href=\"<?=base_url('index.php/ordem_servico/cadastrar')?>\"><i class=\"fa fa-plus fa-fw\"></i> Cadastrar OS</a>
                    <?php } ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                        <?php if (\$this->session->flashdata('success')) { ?>
                            <div class=\"alert alert-success\"><?=\$this->session->flashdata('success')?></div>
                        <?php } ?>
                        <?php if (\$this->session->flashdata('danger')) { ?>
                            <div class=\"alert alert-danger\"><?=\$this->session->flashdata('danger')?></div>
                        <?php } ?>
                            <table width=\"100%\" class=\"table table-striped table-bordered <?php if (\$this->session->userdata('ID_TIPO_USUARIO') != 1) { ?>table-hover<?php } ?>\" id=\"dataTables-example\">                                <thead>
                                    <tr>
                                        <th>Nº O.S.</th>
                                        <th>Solicitante</th>
                                        <th>Categoria</th>
                                        <th>Problema</th>
                                        <th>Responsável</th>
                                        <th>Andamento</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach (\$ordem_servico as \$row): ?>
                                    <tr class=\"<?=\$row['CLASSE']?>\">
                                        <td><a href=\"<?=base_url('index.php/ordem_servico/editar/'.\$row['ID_ORDEM_SERVICO'])?>\" style=\"color: #333; text-decoration: none;\"><?=\$row['ID_ORDEM_SERVICO']?></td>
                                        <td><?=\$row['SOLICITANTE']?></td>
                                        <td><?=\$row['CATEGORIA']?></td>
                                        <td><?=\$row['PROBLEMA']?></td>
                                        <td><?=\$row['RESPONSAVEL']?></td>
                                        <td><?=\$row['STATUS']?></td>
                                        <td><?=\$row['DATA_ANDAMENTO']?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src=\"<?=base_url('/public/vendor/jquery/jquery.min.js')?>\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"<?=base_url('/public/vendor/bootstrap/js/bootstrap.min.js')?>\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"<?=base_url('/public/vendor/metisMenu/metisMenu.min.js')?>\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"<?=base_url('/public/vendor/datatables/js/jquery.dataTables.min.js')?>\"></script>
    <script src=\"<?=base_url('/public/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>\"></script>
    <script src=\"<?=base_url('/public/vendor/datatables-responsive/dataTables.responsive.js')?>\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"<?=base_url('/public/dist/js/sb-admin-2.js')?>\"></script>

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

    public function getTemplateName()
    {
        return "template.php";
    }

}
