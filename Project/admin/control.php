
<?php

class control
{
	function __construct()
	{
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
				include_once('manage_user.php');
			break;
			case '/manage_contact':
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
			case '/it_shop':
				include_once('it_shop.php');
			break;
			case '/it_shop_detail':
				include_once('it_shop_detail.php');
			break;
			case '/it_cart':
				include_once('it_cart.php');
			break;
			case '/it_checkout':
				include_once('it_checkout.php');
			break;
			case '/it_contact':
				include_once('it_contact.php');
			break;
			case '/make_appointment':
				include_once('make_appointment.php');
			break;		
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>