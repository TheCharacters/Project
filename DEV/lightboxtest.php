
<html>
	<head>
		<title>Quick Simple Light Box</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<style type="text/css">
		
		body
		{
			font-family: Helvetica, Arial;
		}
		
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
		
		<script type="text/javascript">
		
			$(document).ready(function(){
			
				$('.lightbox').click(function(){
					$('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
					$('.box').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box').css('display', 'block');
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
		
	</head>
	<body>
	
	<h1>This is my webpage...</h1>
	<a href="#" class="lightbox">Open Lightbox</a>
	
	<div class="backdrop"></div>
	<div class="box"><div class="close">x</div>This is the lightbox!!!</div>
	
	</body>
</html>
