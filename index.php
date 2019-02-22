<?php
ob_start();
session_start();
error_reporting(E_ALL & ~E_NOTICE);
/*setlocale(LC_ALL, 'Indonesia');
date_default_timezone_set('Asia/Jakarta');*/
		// include("inc/config/connection.php");
		include("inc/variable.php");
		include("inc/function.php");
		include("inc/pagename.php");

			if (!$page){
					header("location: index.php?page=home");
			}
			 else  if(!file_exists('pages/'.$page.'.php')) {
			 	include("pages/404.php");
			}
			else { 
				include("layout/header.php");
				include("layout/nav.php");
					if($page=='home')
					{
						include("layout/cover.php");
					} 
				include("pages/$page.php"); 	 
				include("layout/footer.php");	
				include("layout/script.php");	
			}
?>
 </body>
</html>
