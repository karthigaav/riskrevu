<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HELLO TITLE</title>
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"/> -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/> -->
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/font-awesome-4.7.0/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/animate-css/animate.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/hover-css/hover.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
</head>
<body>
    <!--Content begins-->
    
    
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h1 class="textcenter">Todo List</h1>
                </div>
            </div><!-- col-xs-12 -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Todo List Items</h4>
                    </div>
                    <div class="panel-body" id="todo-list">
                        <ul>
                            <?php if ($items){ foreach ($items as $item){?>
                            <li>
                                <h3>
                                    <?php echo $item['desc']; ?> &nbsp; 
                                    
                                        <i class="delete fa fa-trash" data-id="<?php echo $item['id'];?>"></i>

                                </h3>
                            </li>
                            <?php }  } // END IF, END FOREACH LOOP ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="panel">
                    <div class="panel-heading">
                        <h4>Enter a new item</h4>
                    </div>
                    <div class="panel-body">
                       <form action="<?php echo site_url('test/new_item');?>" method="POST">
                            <input type="text" name="item" placeholder="Todo List Item"/>
                            <br/><br/>
                            <button class="btn btn-primary" type="submit">Submit</button>
                       </form>
                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
    
    
    
    <!--CONTEND ENDS -->
</body>
<script src="<?php echo site_url('assets/jquery/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo site_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo site_url('assets/wow/dist/wow.min.js');?>"></script>
<script>
       new WOW().init();
</script>
<script src="<?php echo site_url('assets/js/script.js')?>"></script>
</html>