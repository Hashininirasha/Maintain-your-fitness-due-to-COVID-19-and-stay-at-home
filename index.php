<?php 
require_once "pdo.php";
session_start();
if(isset($_SESSION['user_email'])){
   $user_email=$_SESSION['user_email']; 
   
   $id = $_SESSION['currentid'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Mantain your fitness - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#banner">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menu">Calculate BMI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact us</a>
      </li>
    
  </div>
</nav>
                            <!-- end nav-collapse -->
                       
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Maintain your Fitness with us <p></p> <span class="typer" id="some-id" data-delay="100" data-delim=":" data-words="Daliy:Weekly:Monthly:Whole life time ;-)" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1></p>
                            <h2>#stay home #stay safe</h2>
                            
               <div class="book-btn">             
						 
				<?php 
					#If you already login,sign in button change as logout btn
						 
                                    if (isset($user_email) && is_null($user_email)==false) {
									
					                 
                                     echo '<a href="logout.php" class="table-btn hvr-underline-from-center">'.$user_email.'</br>Log Out</a>';
        
                                       
                      }
                                    else{
                                        echo '<a href="login.php" class="table-btn hvr-underline-from-center">Sign in</a>';
                      }		 
						 ?>
                                <!--<a href="#reservation" class="table-btn hvr-underline-from-center">Sign in</a>-->
                     </div>      
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Web </h2>
                        <h3>due to COVID-19...</h3>
                        <p>Today all are facing COVID-19 virus. All counties are facing that problem. Some countries were putting curfews to control this virus. In this curfew period citizens must pay attention to their nutrition because they can't go outside and people can't go to gymnasium to maintain their fitness. Some people do exercises as a habit in their day to day life. People do not get exercise, the result of that is that they become fat and they face many problems. Some people become diabetes patients. Some are becoming heart disease patients. Some are increasing their diseases.
People are trapped at home. People can't buy Vegetables fruits and nutritional food in the market. They can't get a nutritional Diet. Especially children and older people. The result of that is that they will face many Complications.
People can't go out to meet his or her Doctor to get nutritional advice. Sometimes they can't contact a doctor. Then they haven't got any advice or idea how to maintain their fitness. The result of that is some are become Overweight and some are become Underweight. Both are very harmful for the body. In covid-19 period people should protect their mental Integrity as well as their fitness of body.
</p>
                       
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="image/green-vegetables.jpg" alt="About Main Image">
                            <img class="about-inset" src="image/ex.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Weekly Special </h2>
                        <h5 class="title-caption text-center"> </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="https://www.healthline.com/nutrition/sonoma-diet-review-does-it-work-for-weight-loss" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SONOMA DIET 
                                            <div class="line"></div>
                                            <div class="dit-line">The Sonoma Diet is a Mediterranean-inspired eating pattern designed to promote weight loss and improve overall health..</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img" >
                                    <img src="images/spfood1.jpg" alt="sp-menu" style="width: 332x; height: 200px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="https://healthysubstitute.com/protein-shake-for-weight-gain" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            PROTEIN SHAKE
                                            <div class="line"></div>
                                            <div class="dit-line">The Best Protein Shake Recipe for Weight Gain. then you understand the struggle of growing up really skinny If you’re still having a hard time gaining weight.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/spfood3.jpg" alt="sp-menu" style="width: 332x; height: 200px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="https://pinchofyum.com/lemon-chicken-soup-with-orzo" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Lemon Chicken Soup
                                            <div class="line"></div>
                                            <div class="dit-line">This Lemon Chicken Soup becomes your new Chicken Noodle.What a gorgeous, comforting, tasty soup! Love it! Will be adding dinner repertoire</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/spfood4.jpg" alt="sp-menu" style="width: 332x; height: 200px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="https://www.eatingwell.com/recipe/274166/baked-banana-nut-oatmeal-cups/" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Baked Banana-Nut Oatmeal Cups
                                            <div class="line"></div>
                                            <div class="dit-line"> Muffins meet oatmeal in these moist and tasty grab-and-go oatmeal cups.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/spfood5.JFIF" alt="sp-menu" style="width: 332x; height: 200px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="https://www.tarladalal.com/calories-for-egg-noodles-spicy-maggi-egg-noodles-14311" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Egg Noodles
                                            <div class="line"></div>
                                            <div class="dit-line">Egg Noodles within minites by simply cooking noodles with beaten eggs and vegitables.A smart way of noodles lovers with eggs and vegitables </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/spfood6.jpg" alt="sp-menu" style="width: 332x; height: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->
    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row" id="form">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Let's Calculate Your  BMI Value	
					</h2>
                        
						<p class="title-caption text-center">The body mass index (BMI) is a measure that uses your height and weight to work out if your weight is healthy. </p>
                        <script language="JavaScript">
					
						function calculateBmi() {
						var weight = document.bmiForm.weight.value;
						var height = document.bmiForm.height.value;
                        var week_no= document.bmiForm.week.value;
						if(weight > 0 && height > 0 && week_no> 0 && week_no < 5 ){	
						var finalBmi = weight/(height/100*height/100);
						document.bmiForm.bmi.value = finalBmi
						if(finalBmi < 18.5){
						document.bmiForm.meaning.value = "That you are Underweight."
						}
						if(finalBmi > 18.5 && finalBmi < 25){
						document.bmiForm.meaning.value = "That you are healthy."
						}
						if(finalBmi > 25){
						document.bmiForm.meaning.value = "That you have overweight."
						}
						}
                    
						else{
						alert("Please Fill in everything correctly");
						}
						}
												
						</script>
                   <?php  
                        
                if (isset($_POST['btnbmi']) && isset($_POST['week'])&& isset($_POST['bmi']) && isset($user_email) && is_null($user_email)==false) {
                            
                            $bmi=$_POST['bmi'];
                            
                           
                               
                              $i=$_POST['week'];
                              

                              $_SESSION['week']=$i;
                            
                            
                     
                            $w1="no";
                            $w2="no";
                            $w3="no";
                            $w4="no";
                            $mean="no";
                            
                            
                            $sql = "INSERT INTO check_bmi(user_id,week_one,week_two,week_three,week_four,mean) VALUES (:id,:wo,:wt,:wtt,:wf,:mean)";
                                $stmt = $pdo->prepare($sql);
                                $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                $stmt -> bindParam(':wo',$w2,PDO::PARAM_STR);
                                $stmt -> bindParam(':wt',$w2,PDO::PARAM_STR);
                                $stmt -> bindParam(':wtt',$w3,PDO::PARAM_STR);
                                $stmt -> bindParam(':wf',$w4,PDO::PARAM_STR);
                                $stmt -> bindParam(':mean',$mean,PDO::PARAM_STR);
                                $stmt->execute(); 
                                 
                            
                            $sql="SELECT * from check_bmi where user_id=:id";
                            $stmt=$pdo ->prepare($sql);
                            $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt -> fetchAll(PDO::FETCH_OBJ);
                            
                            foreach ($result as $row) {

                               $weekOne= $row->week_one;
                               $weekTwo= $row->week_two;
                               $weekThree= $row->week_three;
                               $weekFour= $row->week_four;
                            
                               
                               
                              
  
                                           
                         switch ($_SESSION['week']) {
                            

                            case 1:
                                if ($weekOne=="no") {
                                $sql = "UPDATE check_bmi set week_one=:weekone where user_id=:id";
                                     $stmt = $pdo->prepare($sql);
                                     $stmt -> bindParam(':weekone',$bmi,PDO::PARAM_STR);
                                     $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                     $stmt->execute(); 
                                     $row=$stmt->fetchAll(PDO::FETCH_ASSOC);             
                       
                                   }   

                               break;
                            case 2:
                                

                                $sql = "UPDATE check_bmi set week_two=:weektwo where user_id=:id";
                                $stmt = $pdo->prepare($sql);
                                $stmt -> bindParam(':weektwo',$bmi,PDO::PARAM_STR);
                                $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                $stmt->execute(); 
                                $row=$stmt->fetchAll(PDO::FETCH_ASSOC); 
                                
                               break;
                            case 3:
                                

                                $sql = "UPDATE check_bmi set week_three=:weekthree where user_id=:id";
                                $stmt = $pdo->prepare($sql);
                                $stmt -> bindParam(':weekthree',$bmi,PDO::PARAM_STR);
                                $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                $stmt->execute(); 
                                $row=$stmt->fetchAll(PDO::FETCH_ASSOC); 
                               
                                
                               break;
                            case 4:
                               
                                $sql = "UPDATE check_bmi set week_four=:weekfour where user_id=:id";
                                $stmt = $pdo->prepare($sql);
                                $stmt -> bindParam(':weekfour',$bmi,PDO::PARAM_STR);
                                $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                $stmt->execute(); 
                                $row=$stmt->fetchAll(PDO::FETCH_ASSOC); 
                                
                               break;   
}                     

                               
                             
                             }


                          
                   }

                  if(empty($_POST['check']) && isset($_SESSION['week']) && isset($_POST['btnbmi']) && $_SESSION['week']==1)
                             
                      {
                       $sql="SELECT * from check_bmi where user_id=:id";
                            $stmt=$pdo ->prepare($sql);
                            $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt -> fetchAll(PDO::FETCH_OBJ);
                            
                            foreach ($result as $row) {

                               $weekone= $row->week_one;  
                               $weektwo= $row->week_two;
                               $weekthree= $row->week_three;
                               $weekfour= $row->week_four;
                               // $meanWe=$row->mean;
                               

                                

                       if($weekone!="no" && $weektwo!="no" && $weekthree!="no" && $weekfour!="no" ){
                        
                          $sql = "DELETE from check_bmi  where user_id=:id";
                    
                                     $stmt = $pdo->prepare($sql);
                                     $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
                                     $stmt->execute(); 
  
                 }

                       
                 }
                  }

              
                  if(!isset($user_email)){
                        echo "<h3 class='alert alert-secondary text-danger'>Note : Please Sign up for doing your BMI test weekly...</h3></br>";
                   }

                 
                   ?>
                <div class="row">
                    <div class="col-sm-6 col-12 order-sm-first">
						<form method="post" class="border-right row" name="bmiForm"><h2>
                     <?php 
                        if(isset($user_email) && is_null($user_email)==false){ ?>
                          <div class="custom-control custom-switch col-sm-12 ml-2 alert-light text-dark">
                                 <input type="checkbox" class="custom-control-input" name="check" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"> Are you new user ? </label>
                              </div><br/><br/>  
                    
                              <label class="col-sm-6"> Enter your week No</label><input type="number" name="week" min="1" max="4" class="col-sm-6" placeholder="Between 1 - 4 weeks"><br/><br/>
                  
                  <?php }
                     ?>
                           
						<label class="col-sm-6">Your Weight(kg)</label><input type="text" name="weight" class="col-sm-6"><br /><br/>
						<label class="col-sm-6">Your Height(cm)</label><input type="text" name="height" class="col-sm-6"><br /><br/>
                        
						
                         <?php 
                        if(isset($user_email) && is_null($user_email)==false){ ?>
                            <input class="btn btn-md btn-secondary ml-5" type="submit" name="btnbmi" value="Calculate BMI" onClick="calculateBmi()"><br><br>
                           <div class="btn btn-group">
                                <input class="btn btn-md btn-outline-dark" name="show" type="submit" value="Show Table" onclick="window.location='#graph';" id="show"/>
                                <input class="btn btn-md btn-outline-dark" name="hide" type="submit" value="Hide Table" onclick="window.location='#graph';"  id="hide"/>
                              </div><br /><br>
                        <?php } 
                       if (!isset($user_email)) {?>
                           <input class="btn btn-md btn-dark ml-5" type="submit" name="btnbmiNew" value="Calculate BMI" onclick="window.location='#form';">

                       
                       <?php
                     }
                       

                     if (isset($_POST['btnbmiNew']) && isset($_POST['bmi']) && !isset($user_email)) {

                        ?>
          
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                            Check Report
                        </button><br><br>
                        
                        <?php

                             if (empty($_POST['weight']) || empty($_POST['height'])) {
                                 
                                 $Error="Enter weight and height to calculate";
                                 echo "<p class='alert alert-danger'>Error :".$Error."<p>";
                                 

                             }
                            
                             else{
                                echo "<p class='alert alert-primary' id='success'>Data entered success!<p>";

                                $Weight=$_POST['weight'];
                                $Height=$_POST['height'];
                        
                                $BMI=round($Weight/($Height/100*$Height/100),2);   


                                   if($BMI < 18.5){
                                       $status = "That you are Underweight.";
                                        $foot="bg-danger";
                        }
                                  else if($BMI  > 18.5 && $BMI  < 25){
                                        $status = "That you are healthy.";
                                        $foot="bg-success";
                        }
                                   else if($BMI  > 25){
                                        $status = "That you have overweight.";
                                        $foot="bg-warning";
                        } 
                                   else{
                                       $status = "This is impossible";
                                       $foot="bg-white";
                           }

                        echo "<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'><div class='modal-dialog'><div class='modal-content'>
                               <div class='modal-header ".$foot."'>
                                  <h3 class='modal-title text-center text-light' id='exampleModalLabel'>BMI Report</h3>
                                  <button type=button class='close' aria-label='Close' data-dismiss='modal' aria-label='close'>
                                     <span aria-hidden='true'>&times;</span>
                                  </button>
                                
                                </div>
                                <div class=modal-body>
                                    <table class='bg-light table border-lg table-active'>
                                        <tr><th>Your Weight</th><th>:</th><td>".$Weight."</td></tr>
                                        <tr><th>Your Height</th><th>:</th><td>".$Height."</td></tr>
                                        <tr><th>Your BMI Value</th><th>:</th><td>".$BMI."</td></tr>
                                        <tr><th>Your Status</th><th>:</th><td>".$status."</td></tr>
                                    </table>
                                </div>
                                <div class='modal-footer ".$foot."'></div>
                                </div></div></div>";
                             }
                         } 
                        
      

                     ?>
                        <div class="d-none">
						  <input type="text" name="bmi" size="10">
						  <input type="text" name="meaning" size="25">
                        </div>
                        <!-- <input class="btn btn-md  border-dark btn-secondary" type="reset" value="Reset" /> -->
                        
						</h2>

						</form>
                   </div>     
                  <div class="col-sm order-sm-last" id="graph">
                  <?php
                if (isset($_POST['show']) &&  isset($user_email) && is_null($user_email)==false) {
                    $sql="SELECT * from check_bmi where user_id=:fid";
                    $stmt=$pdo ->prepare($sql);
                    $stmt -> bindParam(':fid',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    $result=$stmt -> fetchAll(PDO::FETCH_OBJ);
                    if ($stmt->rowCount()>0) {
                        $cnt=1;
                        foreach ($result as $row) {
                               $week_one= $row->week_one;  
                               $week_two= $row->week_two;
                               $week_three= $row->week_three;
                               $week_four= $row->week_four;
                            
                        $Mean=(floatval($week_one) +floatval($week_two) +floatval($week_three)+floatval($week_four))/$_SESSION['week'];
                        
                               $meanWEEK= strval($Mean);
                    
                                     
                              $sql = "UPDATE check_bmi set mean=:meanv where user_id=:fid";
                                $stmt = $pdo->prepare($sql);
                                $stmt -> bindParam(':meanv',$meanWEEK,PDO::PARAM_STR);
                                $stmt -> bindParam(':fid',$id,PDO::PARAM_INT);
                                $stmt->execute();
                               
                                $sql="SELECT * from check_bmi where user_id=:fid";
                                 $stmt=$pdo ->prepare($sql);
                                $stmt -> bindParam(':fid',$id,PDO::PARAM_INT);
                                $stmt->execute();
                                $result=$stmt -> fetchAll(PDO::FETCH_OBJ);
                               
                               foreach ($result as $row) {
                                    $meanW=$row->mean;
                                   
                               
                     


                            for ($j=0; $j <5 ; $j++) { 
                                $c[0]=   $week_one;
                                $c[1]=   $week_two;
                                $c[2]=   $week_three;
                                $c[3]=   $week_four;
                                $c[4]= $meanW;



                                if( $c[$j] > 0 && $c[$j] < 18.5){
                                  $colour[$j] = "bg-danger";
                        }
                               else if($c[$j] > 18.5  && $c[$j] < 25){
                                  $colour[$j] = "bg-success";
                        }
                              else if($c[$j] > 25){
                                 $colour[$j] = "bg-warning";
                        } 

                              else if ($c[$j]==0) {
                                 $colour[$j]= "bg-dark";
                              }
                              else{
                                 $colour[$i]= "bg-light";
                           }
                         
                            }
                                
                            


                                
                            echo "<table class='table table-bordered table-dark responsive'>";
                            echo "<tr>";
                            echo "<thead>";
                            echo "<th>Week No</th>";
                            echo "<th>BMI</th>";
                            echo "<th>Status</th>";
                            echo "</thead>";
                            echo "</tr>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<th>1st Week</th>";
                            echo "<th>".$row->week_one."</th>";
                            echo "<th class=".$colour[0]."></th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>2nd Week</th>";
                            echo "<th>".$row->week_two."</th>";
                            echo "<th class=".$colour[1]."></th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>3rd Week</th>";
                            echo "<th>".$row->week_three."</th>";
                            echo "<th class=".$colour[2]."></th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>4th Week</th>";
                            echo "<th>".$row->week_four."</th>";
                            echo "<th class=".$colour[3]."></th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>Mean</th>";
                            echo "<th>".$meanW."</th>";
                            echo "<th class=".$colour[4]."></th>";
                            echo "</tr>";
                            echo "</tbody>";
                            $cnt++;
                            echo "</table>";

}
   
                    }
                       
                  
                        }

                        echo "<hr><br><table class='row justify-content-center'><tr>
                                          <td class='col-sm-1 bg-danger'></td>
                                          <td class='col-sm-2'>Underweight</td>
                                          <td class='col-sm-1'>|</td>
                                          <td class='col-sm-1 bg-success'></td>
                                          <td class='col-sm-3'>Healthy</td>
                                          <td class='col-sm-1'>|</td>
                                          <td class='col-sm-1 bg-warning'></td>
                                          <td class='col-sm-2'>Overweight</td>
                                          </tr></table><br><br>";

                    }

                   
                    if (isset($_POST['hide']) &&  isset($user_email) && is_null($user_email)==false) {
                        echo " ";
                      
                      
                    }
                      
                    

                        ?>


                        </div>
                        </div>
					</div>
                   

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Nutritional Advices 	
					</h2>
                        <p class="title-caption text-center">You can get Nutritional advices according to you BMI value and you can your fitness. </p>
                    </div>
                    <div class="team-box">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Underweight</h3>
                                        <p>You can determine whether you are underweight by using a Body Mass Index (BMI) calculator. If your BMI is less than 18.5, you are underweight. Your doctor also can help determine if you’re underweight based on your height, weight, what you eat, and your activity level.Risks of being underweight 🙄 Being underweight can cause health problems, just as being overweight can. 😐</p><br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Osteoporosis 👨‍🦳 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Skin, hair, or teeth problems 💅 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Getting sick frequently 🏥 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Premature births 👶 </br>
                                        <p>the following tips can help you:</p>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Add healthy calories 💪<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Go Nutrient dense 🥗<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Snaks away 🍟<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Eat mini meals 🍈<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Bulk Up 🧘‍♀️🧘‍♂️<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Drink milk 🥛<br>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Healthy</h3>
                                        <p>You can determine whether you are Healty by using a Body Mass Index (BMI) calculator. If your BMI is 18.5 to 24.9, you are Healty. Your doctor also can help to maintain your healty level 💪🤸‍♀️ based on your height, weight, what you eat, and your activity level 🚴‍♀️</p><br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Eat a variety of nutrient rich foods 🥗<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Avoid too much caffeine ☕<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Be active 🏃‍♀️💃<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Relax 💆‍♀️🍁<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Get involved and meet people in a positive environment 🌸🍃<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Don’t drink sugar calories 🥨🍹🍰<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i>Get enough sleep 🧛‍♀️<br>
                                        <p>It is important that we pay attention to each part of the body and the body as a whole to maintain proper fitness. Since every part of the body works in conjunction with every other part, it is critical that all parts are healthy and maintained by receiving what they need.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Overweight</h3>
                                        <p>You can determine whether you are Overweight by using a Body Mass Index (BMI) calculator. If your BMI is Over than 24.9, you are Overweight. Your doctor also can help determine if you’re Overweight based on your height, weight, what you eat, and your activity level.Risks of being Overweight 🙄 Being Overweight can cause health problems, just as being Overweight can. 😐</p><br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>All-causes of death (mortality) 😯 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Sleep apnea and breathing problems 😴😷 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>High blood pressure (hypertension) 💔 </br>
                                        <i class='fas fa-running' style='font-size:14px;color:blue'></i>Gallbladder disease 😫 </br>
                                        <p>the following tips can help you:</p>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Add Resistance Exercises 🏃‍♂️🏊‍♂️<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Add Protein to Your Diet🥗<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Avoid Processed Foods 🍔🍕🍟<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Count Calories Once in a While 🙌<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Avoid Liquid Calories 🍻<br>
                                        <i class='fas fa-heartbeat' style='font-size:14px;color:red'></i> Drink More Water 🥛<br>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->


    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                    Our Blog   
                </h2>
                
                        </h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                    <h5 class="block-title text-center">The Profligate Distribution of Milk</h3>
                                        <img src="images/cow.jpg" alt="" />
                                        <div class="overlay">
                                            <a href="https://gomiebear.medium.com/the-profligate-of-milk-bc56cce3e4a1"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>

                                    </div>

                                  
                                        <p>In this time and age, there is a limit of sources within the United States Of America, and possibly worldwide. An article published on March 18, 2014 by Paula Marantz Cohen named “The Milk of Human (Un)kindness” expressed the concerns of public school systems wasting milk that is provided to students by a private catering company. In one of the nation’s poorest cities (Camden, New Jersey), students receive free breakfast and are routinely served milk — whether they want it or not. In the article, it states “Every morning, representatives from the company deliver the meals to her classroom.</p>.
                                    
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                    <h5 class="block-title text-center">10 things I wish before buying an air fryer</h3>
                                        <img src="images/air.jpeg" alt="" />
                                        <div class="overlay">
                                            <a href="https://medium.com/insider/10-things-i-wish-i-knew-before-buying-an-air-fryer-9db23ef5a279"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Throughout 2020, I’ve heard many friends and people all over social media raving about their air fryers.
When the holidays came around, I decided to finally find out what all the fuss was about. Instantly, I understood why so many people have fallen in love with the kitchen appliance. The air fryer became a game-changer in my kitchen, allowing me to cook dinner in minutes and fry chicken, vegetables, and other foods without submerging them in unhealthy oil.
Even though the appliance changed my cooking lifestyle for the better, there were still a few things about the air fryer that surprised me and that I wish I knew before I made the purchase.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                    <h5 class="block-title text-center">Hysterical...</h3>
                                        <img src="images/gap.jpeg" alt="" />
                                        <div class="overlay">
                                            <a href="https://devonclarebanfield-1221.medium.com/hysterical-9421ed76a027"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Where there is an abundance of suffering, there is also abundant room for healing. Feminists and other scholars are now investigating the areas in history when women have suffered the greatest. The pay gap is frequently discussed in political and academic circles, as well as in the media. Women’s roles in society, from mothering to domestic duties, have been undervalued, and in turn underpaid, for all of human history. But what about healthcare? A lack of funding, historical sexism, and minimal research means that physicians do not always uphold the same standard of care for their male and female patients. This is known as the health gap.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                    <h5 class="block-title text-center">Fitness age in 30</h3>
                                        <img src="images/time.png" alt="" />
                                        <div class="overlay">
                                            <a href="https://dmitri-konash.medium.com/how-to-cut-your-fitness-age-by-30-years-328f29e2ffa6"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>MyGarmin app made me a late New Year present on January 12th this year. It is a screenshot from Garmin app at the top of this article. I admit, it made me very happy! Earlier I made a post on my website (see profile) which explains why VO2Max, a number which shows how effectively your body processes oxygen, is such an important health indicator. In short: higher VO2Max translates in higher probability of living longer. The abovementioned post explains how scientists arrived at this conclusion and you if you know your number you can compare it to average population tables in my article. </p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="https://medium.com/">View the Blog</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->

 
   
    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                   
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>we are undergraduates of uva wellassa university of Sri lanka and Sabaragamuwa university of sri lanka.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>Sri lanka</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+94 71 396 7671 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">fitness@gamil.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                            
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2020Covid-19 Let's rise Together <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
</section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>