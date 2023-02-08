<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if(!function_exists('img_loader'))
	{
		function img_loader($name)
		{
			return base_url()."/assets/img/".$name;
		}
	}

	if(!function_exists('css_loader'))
	{
		function css_loader($name)
		{
			return base_url()."/assets/css/".$name.".css";
		}
	}

	if(!function_exists('js_loader'))
	{
		function js_loader($name)
		{
			return base_url()."/assets/js/".$name.".js";
		}
	}

	if(!function_exists('jquery_loader'))
	{
		function jquery_loader($name)
		{
			return base_url()."/assets/js/jquery/".$name.".js";
		}
	}

	

?>