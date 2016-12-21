<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exame Normal</title>

    <?= $this->Html->css(['bootstrap.min','bootstrap-theme','bootstrap','bootstrap.min.css.map','navestilo.css']) ?>
    <?= $this->Html->script(['jquery-3.1.1.min','bootstrap.min']) ?>

<?= $this->Html->css(['bootstrap.min.css','datepicker3.css','styles.css']) ?>

<!--Icons-->
<?= $this->Html->script(['lumino.glyphs.js']) ?>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Exame &nbsp;</span><?= $this->html->link('Recorrencia',['controller'=>'requests','action'=>'index']) ?></a>

                <ul class="user-menu">
                 <?php if($usuario_corrente['role']=='user'): ?>       
                        <li >                                
                                <?= $this->html->link('registar pedido',['controller'=>'requests','action'=>'add']) ?>
                         </li>
                 <?php endif; ?>

                 <?php if($usuario_corrente['role']=='admin'): ?>       
                        <li >  
                                                     
                                <?= $this->html->link('lista pedidos activos',['controller'=>'requests','action'=>'indexa']) ?>
                                <?= $this->html->link('lista pedidos encerrados',['controller'=>'requests','action'=>'indexn']) ?>
                         </li>
                 <?php endif; ?>

                                

                    <?php if(isset($usuario_corrente)): ?>
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?= $usuario_corrente['email'] ?>
                            <ul class="dropdown-menu" role="menu">
                                <li>                                
                                <?= $this->html->link('Sair',['controller'=>'users','action'=>'logout']) ?>
                                </li>
                            </ul>
                        </li>
                    <?php endif ?>

                    <?php if(!(isset($usuario_corrente))): ?>
                        <li class="dropdown pull-right">
                            <?= $this->html->link('Regista-se',['controller'=>'users','action'=>'add']) ?>
                        </li>
                        <li class="dropdown pull-right">
                            <?= $this->html->link('Logar-se',['controller'=>'users','action'=>'login']) ?>
                        </li>                            
                    <?php endif ?>

                </ul>
            </div>

                            
        </div><!-- /.container-fluid -->
    </nav>

        <?= $this->Flash->render() ?>
        
            <?= $this->fetch('content') ?>
        
<?php if(isset($usuario_corrente)): ?>        
        <div class="row"
                                      
        <div class="row">
            <div class="col-md-8">
            
                
          
        </div><!--/.row-->
    </div>  <!--/.main-->
<?php endif ?>

<?php $this->Html->script(['jquery-1.11.1.min.js','bootstrap.min.js','chart.min.js','chart-data.js','easypiechart.js','easypiechart-data.js','bootstrap-datepicker.js']) ?>

    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
   
</body>


</html>
