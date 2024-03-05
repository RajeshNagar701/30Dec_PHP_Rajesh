
<?php

include_once('model.php'); // step 1


class control extends model   // step 2
{
	function __construct()
	{
		
		model::__construct();   // step 3
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/28Dec_PHP_2023/Project/website/control.php
		
		switch($url)
		{
			case '/admin':
				include_once('index.php');
			break;
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_categories':
				include_once('add_categories.php');
			break;
			case '/manage_categories':
				include_once('manage_categories.php');
			break;
			case '/add_product':
				include_once('add_product.php');
			break;
			case '/manage_product':
				include_once('manage_product.php');
			break;
			case '/add_employees':
				include_once('add_employees.php');
			break;
			case '/manage_employees':
				include_once('manage_employees.php');
			break;
			case '/manage_user':
				$arr_customers=$this->select('customers');
				include_once('manage_user.php');
			break;
			case '/manage_contact':
				$arr_contacts=$this->select('contacts');
				include_once('manage_contact.php');
			break;
			case '/manage_order':
				include_once('manage_order.php');
			break;
			case '/manage_cart':
				include_once('manage_cart.php');
			break;
			case '/manage_feedback':
				include_once('manage_feedback.php');
			break;
	
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>