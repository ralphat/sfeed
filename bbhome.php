<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transiti onal//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The BasketBall Team of NITT</title>

<link href="stylev2.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" href="flipclock.css">
<script src="jquery.min.js"></script>
<script src="flipclock.js"></script>

</head>
<body>

<style>
    body { 
          background: url(images/bgbb.jpg) repeat center center fixed; 
         -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          max-height: 100%;
          max-width: 100%;
}
</style>

<div class="cf">
<ul><li><a href="index.php"><h2>HOME</h2></a>
</li>
<li><a href="#mems"><h2>TEAM</h2></a>
</li>
<li><a href="#matches"><h2>MATCHES</h2></a>
</li>
<li><a href="#gall"><h2>BLOG</h2></a>
</li></ul>
</div>

<div id="container">
    <div class="login">
      <div id="to"><h2>ADMIN</h2></div>
      <form action="" method="post" target="">
        <input type="text" class="email_field" name="email" size="18" placeholder="Enter Key" value="" />
        <input type="hidden" value="sicanstudios" name="uri"/>
        <input type="hidden" name="loc" value="en_US"/>
        <input a href class="email_btn" name="submit" type="submit" value="DONE"/>
      </form>
    </div>
</div>

<div>
    <ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
    <div class="slide">
      <img src="images/gall1.jpg" />
        </div>
    <div class="nav">
      <label for="img-6" class="prev">&#x2039;</label>
      <label for="img-2" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/gall2.jpg" />
        </div>
    <div class="nav">
      <label for="img-1" class="prev">&#x2039;</label>
      <label for="img-3" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/gall3.jpg" />
        </div>
    <div class="nav">
      <label for="img-2" class="prev">&#x2039;</label>
      <label for="img-4" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/gall4.jpg" />
        </div>
    <div class="nav">
      <label for="img-3" class="prev">&#x2039;</label>
      <label for="img-5" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/gall5.jpg" />
        </div>
    <div class="nav">
      <label for="img-4" class="prev">&#x2039;</label>
      <label for="img-6" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/gall6.jpg" />
        </div>
    <div class="nav">
      <label for="img-5" class="prev">&#x2039;</label>
      <label for="img-1" class="next">&#x203a;</label>
    </div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot"></label>
      <label for="img-2" class="nav-dot"></label>
      <label for="img-3" class="nav-dot"></label>
      <label for="img-4" class="nav-dot"></label>
      <label for="img-5" class="nav-dot"></label>
      <label for="img-6" class="nav-dot"></label>
    </li>
</ul>
</div>

<div class="updates">
	<h2>UPDATES</h2>
	<ul style="list-style-type: none;">
		<li style="text-align:left;">
			<h3><a href="#live">Click</a> to follow live scores</h3>
		</li>
	</ul>
</div>
<style>
	.updates{
		border-style: ridge;
		border-color: black;
		color: black;
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		border-radius: 5px;
		margin-left: 25px;
		margin-top: 25px;
		display: inline-block;
		width: 400px;
		height: 550px;
		text-align: center;
		background: rgba(155, 0, 0, 0.4);
	}
</style>

<div class="scoreboard">
<a name="matches">
<table>
<td>
    <h2 style="text-align:center;">HOME</h2>
    <div class="clock"></div>
    <div class="counter">
    <button type="button" class="increment">+1</button>
	<button type="button" class="decrement">-1</button>
	<button type="button" class="reset">Reset</button>
	</div>
	<div style="position:relative; display:inline-block; top:-140px; margin-right:40px;">
	<h3>First Quarter : 3</h3>	
	<h3>Second Quarter : 3</h3>
	</div>
	<div style="position:relative; display:inline-block; top:-140px;">
	<h3>Third Quarter : 3</h3>
	<h3>Final Quarter : 3</h3>
	</div>
</td>
<td>
    <h2>AWAY</h2>
	<div class="clock2"></div>
	<div class="counter">
	<button type="button" class="increment2">+1</button>
	<button type="button" class="decrement2">-1</button>
	<button type="button" class="reset2">Reset</button>
	</div>
	<div style="position:relative; display:inline-block; top:-140px; margin-right:40px;">	
	<h3>First Quarter : 3</h3>
	<h3>Second Quarter : 3</h3>
	</div>
	<div style="position:relative; display:inline-block; top:-140px;">
	<h3>Third Quarter : 3</h3>
	<h3>Final Quarter : 3</h3>
	</div>
</td>
</table>
</div>

<style type="text/css">
.scoreboard td{
		color: black;
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		margin-left: 20px;
		margin-top: 25px;
		display: inline-block;
		width: 800px;
		height: 200px;
		text-align: center;
		background: rgba(155, 0, 0, 0.4);
	}

    .clock, .clock2{
        margin:2em;
        position: relative;

    }
    .clock h2, .clock2 h2{
        color: black;
        font-weight: bold;
        float: left;
        position: relative;
        font-size: 200%;
    }
    .counter button{
	font-size: 20px;
	padding: 5px;
	background: black;
	color: white;
	font-family: Futura, "Trebuchet MS", Arial, sans-serif;
	position: relative;
	top: -180px;  
	left: -310px;
  display: none;
}
</style>

        <script type="text/javascript">
            var clock;

            $(document).ready(function() {
                clock = new FlipClock($('.clock'), {
                    clockFace: 'Counter',
                });
                $('.increment').click(function() {
					clock.increment();
				});

				$('.decrement').click(function() {
					clock.decrement();
				});

				$('.reset').click(function() {
					clock.reset();
				});

            });
            $(document).ready(function() {
                clock2 = new FlipClock($('.clock2'), {
                    clockFace: 'Counter',
                });
                $('.increment2').click(function() {
					clock2.increment();
				});

				$('.decrement2').click(function() {
					clock2.decrement();
				});

				$('.reset2').click(function() {
					clock2.reset();
				});
            });
        </script>

<div>
<a name="mems"></a><div>
    <ul style="list-style-type: none;" class="members">
        <li>
            <div class="mem0"><ul style="list-style-type:none; margin:0px;">
                <li>
                        <h2 class="rotate">RONDO</h2>
                        <img src="images/rondo1.jpg" height="300px" width="250px">
                        <div class="hidden">
                        <img src="images/rondo2.jpg" height="300px" width="250px">
                   
                        <img src="images/rondo3.jpg" height="300px" width="250px">
                    
                        <img src="images/rondo4.jpg" height="300px" width="250px">
                        </div>
                        <div class="details" style="float:right; position: relative; left:-500px;">
                                <h2>NAME :</h2>
                                <h2>POSITION :</h2>
                                <h2>BRANCH AND YEAR :</h2>
                                <h3>ABOUT ME ---</h3>
                        </div>
                    </li>
                </ul></div>
        </li>
        <li>
                <div class="mem1">
                <ul>
                    <li>
                        <h2 class="rotate" style="left:-140px;">KEVIN</h2>
                        <img src="images/kg1.jpg" height="300px" width="250px">
                        <div class="hidden">
                        <img src="images/kg3.jpg" height="300px" width="250px">
                   
                        <img src="images/kg2.jpg" height="300px" width="250px">
                    
                        <img src="images/kg4.jpg" height="300px" width="250px">
                        </div>
                        <div class="details" style="float:right; position: relative; left:-500px;">
                                <h2>NAME :</h2>
                                <h2>POSITION :</h2>
                                <h2>BRANCH AND YEAR :</h2>
                                <h3>ABOUT ME ---</h3>
                        </div>
                    </li>
                </ul>
                </div>
        </li>
    </ul>    
</div>                

<script>
$(document).ready(function(){
$(".mem0").hover(function(){
    $(".mem0 .hidden").hide();
    $(".mem0 .details").show();
},function(){
    $(".mem0 .hidden").show();
    $(".mem0 .details").hide();
});     
$(".mem1").hover(function(){
    $(".mem1 .hidden").hide();
    $(".mem1 .details").show();
},function(){
    $(".mem1 .hidden").show();
    $(".mem1 .details").hide();
});       
});

</script>

</div>

</body>
</html>
