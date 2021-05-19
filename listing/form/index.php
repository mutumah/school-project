
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>List venue</title>


    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	
</head>
<body>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            <h2><div class="logo"><a href="#"><img class="logo_1" src="/marimar/images/logo24.png" alt=""></a></div></h2>
            </div>
        </div>
    </div>
</header>




<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h2>LIST YOUR VENUE</h2>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              

                      
                      <form class="reg-form" action="../../admin/mod_room/controller.php?action=add" enctype="multipart/form-data" method="POST">
   
        
        <div class="field-row">
            <label class="form-label" for="ROOM">Venue Name:</label>          
            <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder=
									  "Venue Name" type="text" value=""> 
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" name="ACCOMID" id="ACCOMID">Accomodation: </label>
            
          <select class="form-dropdown field">
         <option value="None"> none </option>
        <option value="12"> Standard Room(max 22hrs) </option>
        <option value="13"> Travelers Time(max 22 hrs)</option>
        <option value="15"> Bahaniyan Room(max 12 hrs) </option>
        <option value="17"> Field (max 24hrs)</option>
       </select>
       </div>



                <div class="field-row">
            <label class="form-label" for="ROOMDESC">Description: </label>
            <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder=
                    "Description" type="text" value="">
        </div>
        
        
        <div class="field-row">
            <label class="form-label" for="NUMPERSON">Max Number of People: </label>
            <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON" placeholder=
                    "Max Number of People" type="text" value="1" onkeyup="javascript:checkNumber(this);">
        </div>
                          
                                    
       <div class="field-row">
            <label class="form-label" for="PRICE">Price: </label>
            <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder=
									  "Price" type="text" value="" onkeyup="javascript:checkNumber(this);">
        </div>
   
  
        <div class="form-row">           
              <label class="form-label" for=
              "image">Upload Image:</label>
              <input type="file" name="image" value="" id="image">
          </div>

           <!--  <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMNUM">No. of Rooms:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value=""> -->
                <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder=
                    "Room #" type="hidden" value="1">
           <!--    </div>
            </div>
          </div> -->


          <div class="field-row">
            <label class="form-label" for="idno"></label>
            <button class="btn btn-primary" name="save" type="submit" ><b>ADD VENUE<b></button>
        </div>    
    	</div>
		</div>
    </div>
</section>
</body>
</html>
