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
    <!--CONTENT BEGINS-->
    
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h1 class="textcenter">Todo List</h1>
                </div>
            </div>
        </div><!--row -->
        <div class="row">
            <div class="col-md-6">
                 <div class="panel">
                <div class="panel-heading">
                    <h3>Todo list items</h3>
                </div>
                <div class="panel-body">
                    <ul>
                       <?php 
                       if(!empty($items)){
                           foreach($items as $item){ ?>
                           <li>
                               <h3><?php echo $item->desc; ?> &nbsp; 
                                   <a href="<?php echo site_url('todolist/delete/' . $item->id); ?>">
                                       <i class="fa fa-trash"></i> 
                                   </a>
                               </h3> 
                           </li>
                       <?php } } // END IF END FOEACH ?>
                    </ul>
                </div> 
            </div>
                
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Enter your new todo list item </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo site_url('todolist/set_item'); ?>">
                            <input type="text" placeholder="Todo List Item" name="item">
                            <br/><br/>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
    <!--CONTENT ENDS -->
</body>
        <!--JavaScript jdbcdj-->

<script src="<?php echo site_url('assets/jquery/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo site_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo site_url('assets/wow/dist/wow.min.js');?>"></script>
<script>
       new WOW().init();
</script>
<script src="<?php echo site_url('assets/js/script.js')?>"></script>
</html>
