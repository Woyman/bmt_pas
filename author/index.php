<?php
ob_start();
session_start();
error_reporting(E_ALL & ~E_NOTICE);
/*setlocale(LC_ALL, 'Indonesia');
date_default_timezone_set('Asia/Jakarta');*/
		include("../inc/config/connection.php");
		
		include("../inc/variable.php");
		include("../inc/function.php");

		include("session.php");
		// include("inc/pagename.php");

			if (!$page){
					header("location: index.php?page=dashboard");
			}
			 else  if(!file_exists('pages/'.$page.'.php')) {
			 	include("pages/404.php");
			}
			else { 

				include("../layout/header-author.php");
				if($page!='login')
				{
					include("../layout/nav-author.php");	
					include("pages/$page.php"); 	 
				}else{
					include("pages/login.php"); 	 
				}
				
				include("../layout/script-author.php");	
			}
?>
 </body>
</html>
