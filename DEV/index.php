<!DOCTYPE html>
<html>
    <head>
        <title>TC Music Exchange</title>
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <!-- THIS IS REQUIRED FOR THE LOGIN TO APPEAR CORRECTLY!!!! -->
        <style type="text/css">
		
		.backdrop
		{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
			background:#000;
			opacity: .0;
			filter:alpha(opacity=0);
			z-index:50;
			display:none;
		}


		.box
		{
			position:absolute;
			top:20%;
			left:30%;
			width:500px;
			height:300px;
			background:#ffffff;
			z-index:51;
			padding:10px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-moz-box-shadow:0px 0px 5px #444444;
			-webkit-box-shadow:0px 0px 5px #444444;
			box-shadow:0px 0px 5px #444444;
			display:none;
		}

		.close
		{
			float:right;
			margin-right:6px;
			cursor:pointer;
		}
		
		</style>
              <!-- END OF LIGHTBOX STYLING -->
              
        <!-- Lightbox script -->
        <script>
		
		$(document).ready(function(){
			
			$('.lightbox').click(function(){
				$('.backdrop,.box').animate({'opacity':'.50'}, 300, 'linear');
				$('.box').animate({'opacity':'1.00'}, 300, 'linear');
				$('.backdrop,.box').css('display','block');
			});
				
			$('.close').click(function(){
				close_box();
			});
				
			$('.backdrop').click(function(){
				close_box();
			});
			
		});
			
		function close_box()
		{
			$('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
				$('.backdrop, .box').css('display', 'none');
			});
		}
		
	 </script>
         <!-- End of LIghtbox script -->
        
    </head>
    <body>
        
        <!-- Lightbox DIVs DO NOT CHANGE!  -->
        <div class='backdrop'></div>
        <div class='box'>
            <div class='close'>x</div>
            Lightbox Content Goes Here</div>
        <!-- END OF LIGHTBOX DIVs -->
        
        
      <div id="main">
        <div id="banner">
            <img src="images/banner.jpg" alt="TC Music Exchange" />
        </div>

        <h1 id="main_message">Welcome to the Characters Music Exchange!</h1>

<!-- Container -->
<div id='container'>
    
<!--LOGIN  -->
<div id="login_button">
    <a href='#' class='lightbox'>Login</a>
</div>
<!--END OF LOGIN -->

<!-- Navigation Menu(bar) -->
<div id='nav_container'>
    <ul>
        <li><a href="url">What is TC Music Exhange</a></li>
        <li><a href="url">Search Music</a></li>
        <li><a href="url">Search Musicians</a></li>
        <li><a href="url">FAQ</a></li>
        <li><a href="url"> About Us</a></li>
    </ul>    
</div>
<!-- End Navigation Menu -->

<div class='left_col'>
    
</div>

<div class='right_col'>
    
</div>

<div class='top_stack'>
    
</div>

<div class='bottom_stack'>
    
</div>

</div> <!-- End of container -->
</div>
    </body>
    
</html>
