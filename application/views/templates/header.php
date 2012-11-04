<!DOCTYPE html>
<html lang="de">
  
  <head>
    <meta charset="utf-8">
    <title>
        PV-Logger
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ketterer,glock">
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css">
    <link href="<?php echo base_url();?>css/datepicker.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>ico/favicon.ico">
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>   
<?php if($main_content == "power_view"){?>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/powercharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/locales/bootstrap-datepicker.de.js" charset="UTF-8"></script>   
<?php 
}if($main_content == "manageusers_view"){?>
    <script type="text/javascript" src="<?php echo base_url();?>js/manageusers.js"></script>
<?php }?>

  </head>
  
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </a>
            <!-- Link auf Indexseite erstellt mit URL Helper -->
            <?php echo anchor('home', 'PV-Logger', array('class' => 'brand')); ?>
          <?php 
            if($logged_in == TRUE)
              { ?>
            <div class="nav-collapse">
              <ul class="nav">
                <li>
                  <!-- Link auf Übersichtsseite erstellt mit URL Helper -->
                  <?php echo anchor('home', 'Übersicht'); ?>
                </li>
                <li>
                  <!-- Link auf Momentatnverbrauchsseite erstellt mit URL Helper -->
                  <?php echo anchor('power', 'Leistung'); ?>
                </li>
                
                <li>
                  <!-- Link auf Rasperyy Pi Statusseite erstellt mit URL Helper -->
                  <?php 
                    //Nur für Administratoren sichtbar
                    if($userlevel == 2)
                    {
                        echo anchor('rasp', 'Raspberry Pi Status');
                    }
                  ?>
                </li>
              </ul>
            </div>
          <?php } ?>
            
          <?php 
            if($logged_in != TRUE)
            {
                echo form_open('user/validate', array('class' => 'navbar-form pull-right'));?>
                  <input name="username" placeholder="Nutzername" class="span2" type="text">
                  <input name="password" placeholder="Passwort" class="span2" type="password">
                  <button class="btn">
                      <i class="icon-key"></i>
                      Einloggen
                  </button>
                <?php echo form_close();
            }
            else
            {
                ?>
                <div class="btn-group pull-right hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo "Willkommen ".$name;?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if($userlevel == 2)
                            { ?>
                                <li><?php echo anchor('manage/users', '<i class="icon-user"></i> Benutzeradministration');?></li>
                                <li class="divider"></li>
                            <?php }?>
                            <li><?php echo anchor('user/logout', '<i class="icon-off"></i> Ausloggen');?></li>
                        </ul>
               </div>
               <div class="btn-group pull-right visible-phone">
                        
                            <label><?php echo "Willkommen ".$name;?></label>
                            
                            <?php if($userlevel == 2)
                            { ?>
                                <?php echo anchor('manage/users', '<i class="icon-user"></i> Benutzeradministration',array('class' => 'btn'));?>
                                
                            <?php }?>
                            <?php echo anchor('user/logout', '<i class="icon-off"></i> Ausloggen',array('class' => 'btn'));?>
               </div> 
                <?php
            }
           ?>
        </div>
      </div>
    </div>
    
