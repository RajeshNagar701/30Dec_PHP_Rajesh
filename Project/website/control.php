
<?php

include_once('../admin/model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		
		model::__construct();   // step 3
		
		date_default_timezone_set("asia/calcutta");
		
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
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$comment=$_REQUEST['comment'];	
					
					$created_at=date("Y-m-d H:i:s");
					$updated_at=date("Y-m-d H:i:s");
					
					$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment,"created_at"=>$created_at,"updated_at"=>$updated_at);
					
					$res=$this->insert('contacts',$arr);
					if($res)
					{
						echo "<script> 
						alert('Inquiry submit Success');
						window.location='it_contact';
						</script>";
					}
					else
					{
						echo "<script> 
						alert('failed');
						window.location='it_contact';
						</script>";
					}	
				}
				include_once('it_contact.php');
			break;
			case '/make_appointment':
				include_once('make_appointment.php');
			break;
			
			case '/login':
				include_once('login.php');
			break;
			
			case '/signup':
				$arr_countries=$this->select('countries');
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$pass=md5($_REQUEST['pass']);
					$gender=$_REQUEST['gender'];
					
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					
					$file=$_FILES['file']['name'];
					$path='images/customer/'.$file;
					$copy_file=$_FILES['file']['tmp_name'];
					move_uploaded_file($copy_file,$path);
					
					$cid=$_REQUEST['cid'];
					
					$created_at=date("Y-m-d H:i:s");
					$updated_at=date("Y-m-d H:i:s");
					
					$arr=array("name"=>$name,"email"=>$email,"pass"=>$pass,
					"gender"=>$gender,"lag"=>$lag,"file"=>$file,"cid"=>$cid,
					"created_at"=>$created_at,"updated_at"=>$updated_at);
					
					$res=$this->insert('customers',$arr);
					if($res)
					{
						echo "<script> 
						alert('Signup submit Success');
						window.location='signup';
						</script>";
					}
					else
					{
						echo "<script> 
						alert('failed');
						window.location='signup';
						</script>";
					}	
				}
				include_once('signup.php');
			break;
			
			default:
				include_once('it_error.php');
			break;			
			
		}
	}
}


$obj=new control;

?>