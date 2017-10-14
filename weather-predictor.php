<!DOCTYPE html>	
<html lang="en">
<head>	
<meta charset="utf-8">	
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="viewport" content="width=device-width, initial-
scale=1">	
<title>My Weather Scraper</title>	
	
<!-- Bootstrap -->	
<link href="css/bootstrap.min.css" rel="stylesheet">	
	
<!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->	
<!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->	
<!--[if lt IE 9]>	
<script src="https://oss.maxcdn.com/libs/html5shiv/
3.7.0/html5shiv.js"></script>	
<script src="https://oss.maxcdn.com/libs/respond.js/
1.4.2/respond.min.js"></script>	
<![endif]-->	
	
<style>	
	
html, body {
height:100%;

}

#topContainer{
       background-image:url("images/w.jpg");
       height:100%;
       width:100%;
       background-size:cover;      /*  FOR FULL IMAGE TO BE DISPLAYED NOT JUST PART OF IT  */
       background-position:center;
       padding-top:100px;   
}


.center{
      text-align:center;

}


.white{
   color:white;
}

p{
    padding-top:15px;
    padiing-bottom:15px;

}

button {
    margin-top:20px;
    margin-bottom:20px;
}

.alert{
    margin-top:20px;
    display:none;
  }

#topRow{
      margin-top:50px;
      text-align:center;
      
}

#topRow h1{
     font-size:300%;
     
     }

.bold{
    font-weight:bold;

}
	
.margintop{
     margin-top:10px;


}


</style>	
</head>	
<body>	



<div class="container contentContainer" id="topContainer">

     <div class="row">

          <div class="col-md-6 col-md-offset-3" id="topRow">    
          <h1 class="margintop white">Weather Predictor</h1>

          <p class="lead center white">Enter city below</p>  

         

          <form> 
               <div class="form-group">

                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Mumbai,London,Paris..." />
               </div>
    
                  <button id="findmyWeather" class="btn btn-success btn-lg">Find Weather</button>

              
         
         </form>
             <div id="success" class="alert alert-success">Success</div>

             <div id="fail" class="alert alert-danger">Please try Again </div>

            <div id="nocity" class="alert alert-danger">Please Enter a city </div>
         </div>
            
       
     </div>

</div>


	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>	
<!-- Include all compiled plugins (below), or include individual files
as needed -->	
<script src="js/bootstrap.min.js"></script>	

<script>

      $(".contentContainer").css("min-height",$(window).height());  /*  FOR Content CONTAINER HEIGHT TO BE SET TO FULL WINDOW HEIGHT  */
/* if height of device is smaller then height--> min-height        */


</script>

<script>

    $("#findmyWeather").click(function(event) {
         //was just submitting the form so...stop by adding variable event to click function and then...prevent default event from happenng

          event.preventDefault();   
                $(".alert").hide();

          if($("#city").val() != "") { 

          $.get("scraper.php?city="+$("#city").val(), function(data){
                //$("#success").html(data).fadeIn();   
               //take alert set html to value of data returned and fadeit

               if (data == ""){
                    
                    $("#fail").fadeIn();
 
               }

               else{
                    $("#success").html(data).fadeIn();
               }
          }); 
 
          } 
          else{
                $("#nocity").fadeIn();
          }
         //alert("Clicked");
    });

</script>

</body>	
</html>
