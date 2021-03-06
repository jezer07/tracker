  <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Potato Tracking</a>
                    <div class="nav-collapse collapse">
                        
                            
                        </ul>
                        <form class="navbar-form pull-right" action="authenticate.php" method="post">
                            <input class="span2" type="text" placeholder="Username" name="user">
                            <input class="span2" type="password" placeholder="Password" name="password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
        <div class="hero-unit">

     		<h1>Welcome to Potato</h1>
            <h2>Faculty Tracking System</h2>
		        </div>
     
       
   
        </div><!--/span-->
     <div class="row">
       
                <div class="span9 offset2">

        <!--<div id="myCarousel" class="carousel slide">
 <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
 
  <div class="carousel-inner">
    <div class="active item"><img src="img/1.jpg"/>
    <div class="carousel-caption">
                      <h4>Aristotle</h4>
                      <p>"It is the mark of an educated mind to be able to entertain a thought without accepting it."  </p>
                    </div></div>
    <div class="item"><img src="img/2.jpg"/>
    <div class="carousel-caption">
                      <h4>Mahatma Gandhi</h4>
                      <p>"Live as if you were to die tomorrow. Learn as if you were to live forever." </p>
                    </div></div>
    <div class="item"><img src="img/3.jpg"/>
    <div class="carousel-caption">
                      <h4>Nelson Mandela</h4>
                      <p>"Education is the most powerful weapon which you can use to change the world." </p>
                    </div></div>
    <div class="item"><img src="img/4.jpg"/>
    <div class="carousel-caption">
                      <h4>C.S. Lewis</h4>
                      <p>"The task of the modern educator is not to cut down jungles, but to irrigate deserts." </p>
                    </div></div>
    <div class="item"><img src="img/5.jpg"/>
    <div class="carousel-caption">
                      <h4>C.S. Lewis</h4>
                      <p>"Education without values, as useful as it is, seems rather to make man a more clever devil." </p>
                    </div></div>
    <div class="item"><img src="img/6.jpg"/>
    <div class="carousel-caption">
                      <h4>Leonardo da Vinci</h4>
                      <p>"Study without desire spoils the memory, and it retains nothing that it takes in." </p>
                    </div></div>
  </div>
  
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

-->
 <div class="row">
			<div class="span3">
           <h4> Students could:</h4>
            	<ul>
                <li>Could track faculties by name, daytime or by rooms</li>
                
                </ul>
            	</div>
                
                <div class="span3">
            <h4>Operators could:</h4>
            	<ul>
                <li>Could track faculties by name, daytime or by rooms</li>
                <li>Print reports</li>
                
                </ul>
            	</div>
                     <div class="span3">
            <h4>Admins could:</h4>
            	<ul>
                <li>Could track faculties by name, daytime or by rooms</li>
                <li>Print reports</li>
                <li>Add/Edit/Delete Users/Faculty/Schedule/Subjects/Sections/Rooms</li>
                
                </ul>
            	</div>
                
            </div><!--/row-->
        
      </div>
      
      
      
      </div>
       <hr/>
<footer>
                <p class="text-center">&copy; Potato 2012</p>
            </footer>
       <script>
			  $(document).ready(function(){
				$('.carousel').carousel({
				  interval: 2000
				});
			  });
			</script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="/js/vendor/bootstrap.min.js"></script>

        <script src="/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
