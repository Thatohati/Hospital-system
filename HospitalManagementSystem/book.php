<html>
   <head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        
    <div class="boxed">
		<div id="containe" >   
                    
                    <form method="POST" action="bookAPP.php" >
                        <img src="images/book appointmnt.png " width="450" height="200"  >
                        <h2><i>Book Appointment</i></h2>
                      
				<input class="text" name="name" placeholder="Name*">
                                <input class="text" name="idnum" type="text" placeholder="Id Number*">
				<input class="text" name="email" type="text" placeholder="Email*">
                                <input class="text" name="contact" type="text" placeholder="Contact Number*">
                                
                              
                                <input name="dept"  type="text" class="text" placeholder="Department">
            <input  name="day" type="text" class="date" placeholder="Day">
            
                              <input name="month"  type="text" class="date" placeholder="Month*">  
                              <input  name="year" type="text" class="date" placeholder="Year">
                                <input  name="time" type="text" class="text" placeholder="Time">
					
						<input class="submit" type="submit" name="submit" value="Book">
                              
			</form>
			
         </div>
    </div>
				
    </body>
</html>