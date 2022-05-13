<?php
 
   $email = $_POST['mail'];
   $sifre= $_POST['password'];
 
	if ($email=="" or $sifre=="")
	{
		
		ob_start();
		header("Refresh: 1; url=index.html");
         exit();	
	}
	else
	{
		if ($email=="g171210041@gmail.com" && $sifre=="anan")
		{
			
			ob_start();
			header("Refresh: 2; url=../index.html");
			exit();
		}
		else		{ 
            
			ob_start();
			header("Refresh: 1; url=index.html");
            exit();	
		}
	}
?>