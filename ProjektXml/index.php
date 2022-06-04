<?php 
$json = file_get_contents('datadata.json');
 
$Obj = json_decode($json);
#printf(" %s je visok %u <br>",$Obj->Igrac2->Ime,$Obj->Igrac1->Visina);
// print $Obj->Igrac1->Ime."<br>";
// echo $Obj->Igrac1->Ime."<br>";
#print_r($Obj);
#echo"<br><br><br><h1>".$Obj->Igrac1->Visina."</h1>";


	?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		  <title>Characters from JSON</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		  <style>

		  	body {

	   				 position: relative; 
	  								}
	  		@media only screen and (max-width: 600px) {
  					body {
   							background-color: lightblue;
 				 }
}
	  		#section1 {padding-top:50px; height:50%;color: #fff; background-color: #007A33;;}
	  		#section2 {padding-top:3px; height:50%;color: #fff; background-color: #006bb6;}
	  	
	  		#logoc {border-radius: 10px;}
	  		button {position:relative; padding:10px;}
	  		
			  
			  	
		  	/*#red1{background-color: grey;
		  		height: 400px;}
		  	#red2{background-color: lightblue;
		  		height:400px;}
		  	*/
	  			
  			

		  </style>
		</head>
		<body data-spy="scroll" data-target=".navbar" data-offset="50">

		<nav class="navbar navbar-inverse navbar-fixed-top">
  			<div class="container-fluid">
    				<div class="navbar-header">
       				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         				 <span class="icon-bar"></span>
          				 <span class="icon-bar"></span>
         				 <span class="icon-bar"></span>                        
     				 </button>
      				<a class="navbar-brand" href="#">Nba Finals</a>
    			</div>
    			<div>
      				<div class="collapse navbar-collapse" id="myNavbar">
       				 	<ul class="nav navbar-nav">
          						<li><a href="#section1">Boston Celtics</a></li>
          						<li><a href="#section2">Golden State Warriors</a></li>
         						 
        				</ul>
      				</div>
    			</div>
  			</div>
		</nav>    
			
			
			
		

		
		

		
	

		<div class="container-fluid" id="section1">
			<div class="container"><br>
		  		                                    
		  <div class="dropdown">
		    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Player
		    		<span class="caret"></span></button>
		    	<ul class="dropdown-menu">
		     		<li><a href="https://www.nba.com/celtics/roster/profiles?pid=203935" target="_blank"><?php echo $Obj->Igrac6->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/celtics/roster/profiles?pid=1627759" target="_blank"><?php echo $Obj->Igrac7->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/celtics/roster/profiles?pid=1628369" target="_blank"><?php echo $Obj->Igrac8->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/celtics/roster/profiles?pid=201143" target="_blank"><?php echo $Obj->Igrac9->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/celtics/roster/profiles?pid=1629057" target="_blank"><?php echo $Obj->Igrac10->Ime; ?></a></li>

		   		 </ul>
  			</div>
		</div><br><br>
			<div class="row" id="red1">
				
				<div class="col-sm-2">
					<p> <?php echo $Obj->Igrac6->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac6->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac6->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac6->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac6->Asistencije; ?></p>
					<img src="img/Smart.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac7->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac7->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac7->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac7->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac7->Asistencije; ?></p>
					<img src="img/Brown.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac8->Ime; ?></p><hr>
				
					<p>Pozicija: <?php echo $Obj->Igrac8->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac8->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac8->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac8->Asistencije; ?></p>
					<img src="img/Tatum.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac9->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac9->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac9->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac9->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac9->Asistencije; ?></p>
					<img src="img/Horford.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac10->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac10->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac10->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac10->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac10->Asistencije; ?></p>
					<img src="img/Williams.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2" >
					
					
					<img src="img/celticslogo1.png"  id="Logoc"  class="img-responsive " alt="Robert Williams III">
				</div>
			</div>
		</div>

		<div class="container-fluid" id="section2">
			<div class="container">
		  		                                    
		  <div class="dropdown"><br>
		    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Player
		    		<span class="caret"></span></button>
		    	<ul class="dropdown-menu">
		     		<li><a href="https://www.nba.com/player/201939/stephen-curry" target="_blank"><?php echo $Obj->Igrac1->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/player/202691/klay-thompson" target="_blank"><?php echo $Obj->Igrac2->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/player/203952/andrew-wiggins" target="_blank"><?php echo $Obj->Igrac3->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/player/203110/draymond-green"><?php echo $Obj->Igrac4->Ime; ?></a></li>
		      		<li><a href="https://www.nba.com/player/1626172/kevon-looney" target="_blank"><?php echo $Obj->Igrac5->Ime; ?></a></li>

		   		 </ul>
  			</div><br><br>
		</div>
			<div class="row" id="red2">

				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac1->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac1->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac1->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac1->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac1->Asistencije; ?></p>
					<br><br><br>

					<img src="img/sef.png" class="img-responsive" alt="Steph Curry">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac2->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac2->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac2->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac2->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac2->Asistencije; ?></p>
					<img src="img/Klay.png" class="img-responsive" alt="Klay Thompson">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac3->Ime; ?></p><hr>
					
					<p>Pozicija: <?php echo $Obj->Igrac3->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac3->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac3->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac3->Asistencije; ?></p>
					<img src="img/Wiggins.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac4->Ime; ?></p><hr>
				
					<p>Pozicija: <?php echo $Obj->Igrac4->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac4->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac4->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac4->Asistencije; ?></p>
					<br>
					<img src="img/draymond.png" class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2">
					<p><?php echo $Obj->Igrac5->Ime; ?></p><hr>
				
					<p>Pozicija: <?php echo $Obj->Igrac5->Pozicija; ?></p>
					<p>Koševi: <?php echo $Obj->Igrac5->Kosevi; ?></p>
					<p>Skokovi: <?php echo $Obj->Igrac5->Skokovi; ?></p>
					<p>Asistencije: <?php echo $Obj->Igrac5->Asistencije; ?></p>
					<br>
				
					
					<br><br>
					<img src="img/looneyp.png"  class="img-responsive" alt="Robert Williams III">
				</div>
				<div class="col-sm-2" >
					
					<img src="img/warriorslogo1.png"  id="Logoc"  class="img-responsive" alt="Robert Williams III">
				</div>
				
				</div>
			</div>
		</div>

	</body>
</html>
