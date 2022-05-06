<?php
 
   $email = $_POST['mail'];
   $sifre= $_POST['password'];
 
	if ($email=="" or $sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";	
		header("Refresh: 1; url=index.html");
         exit();	
	}
	else
	{
		if ($email=="g171210041@gmail.com" && $sifre=="anan")
		{
			echo "<center>Hoşgeldiniz. G171210041.</center>";
			header("Refresh: 2; url=../index.html");
		}
		else		{ 
            echo "<center>Kullanici Adi/Sifre Yanlis.<br></center>";
			header("Refresh: 1; url=index.html");
            exit();	
		}
	}
?>