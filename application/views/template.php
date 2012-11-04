<?php
$this->load->view('templates/header',array($logged_in,$name,$userlevel));
$this->load->view($main_content,array($logged_in,$name,$userlevel,$power_graph,$main_content));
$this->load->view('templates/footer');

