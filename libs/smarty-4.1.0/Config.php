<?php
    require_once "libs/smarty-4.1.0/Smarty.class.php";

    class Config {

        private $smarty;

        function __construct() {
            $this->smarty = new Smarty();
            $this->initialize();
        }

        function initialize() {
            $this->smarty->template_dir = 'view/templates';
            $this->smarty->compile_dir = 'view/templates_c';
            $this->smarty->cache_dir = 'control/cache';
            $this->smarty->config_dir = 'control/configs';
        }

        function setAssign($variable, $value) {
            $this->smarty->assign($variable, $value);
        }

        function setDisplay($display) {
            $this->smarty->display($display);
        }
    }
?>