
<?php

class control
{
	function __construct()
	{
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/28Dec_PHP_2023/Project/website/control.php
		
		switch($url)
		{
			case '/':
				include_once('index.php');
			break;
			case '/it_about':
				
				include_once('it_about.php');
			break;
			case '/it_service':
				include_once('it_service.php');
			break;
			case '/it_service_list':
				include_once('it_service_list.php');
			break;
			case '/it_service_detail':
				include_once('it_service_detail.php');
			break;
			case '/it_blog':
				include_once('it_blog.php');
			break;
			case '/it_blog_grid':
				include_once('it_blog_grid.php');
			break;
			case '/it_blog_detail':
				include_once('it_blog_detail.php');
			break;
			case '/it_career':
				include_once('it_career.php');
			break;
			case '/it_price':
				include_once('it_price.php');
			break;
			case '/it_faq':
				include_once('it_faq.php');
			break;
			case '/it_privacy_policy':
				include_once('it_privacy_policy.php');
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
				include_once('it_error.php');
			break;			
			
		}
	}
}


$obj=new control;

?>