<!-- VERSION 1.1 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LANDING PAGE</title>
        <link rel="icon" type="image/x-icon" href="IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="CSS/LANDING_PAGE.CSS">
       
    </head>

    <body>

        
        <div class="header">
            
                <a href="index.php"><img src="IMAGES/PESO_LOGO.png"  style="width:100px;height:100px; float: left;"></a>
                <a href="https://santarosacity.gov.ph"><img src="IMAGES/STA_ROSA_LOGO.png"  style="width:100px; height:100px; float: right;"></a>
            
        </div>

        <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                    
                        <li><a href="HTML-PHP/ABOUT_US.php">ABOUT US</a></li>
                        <li><a href="HTML-PHP/REQUIREMENTS.php">REQUIREMENTS</a></li>
                        <li><a href="HTML-PHP/JOB_OFFERS.php">JOB OFFERS</a></li>
                        <li><a href="HTML-PHP/URGENT_HIRING.php">URGENT HIRING</a></li>
                        <li><a href="HTML-PHP/HELP_CENTER.php">HELP CENTER</a></li>
                    </ul>
                    
                </div>

                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </a>
            </nav>
        </center>

        <div class="column">

            <br>  <br>  <br>     
            <div class="columnA">
                <div class="card1">
                    <div class="card1A">
                        <center><input type="text" placeholder="SEARCH FOR A JOB!"></center>
                    </div>
                </div>
                <br>  <br>  <br>  <br>  <br>  <br> 
                
            </div>
            <div class="columnB">
                <div class="card2">
                    <br> 
                    <center><h1>LOG IN</h1>
                        <br> <br> 
                        <a href="HTML-PHP/applicant/APPLICANT_LOGIN.php">
                            <button class="btn login">APPLICANT</button>
                        </a>
                        <br> <br>
                        <a href="HTML-PHP/company/COMPANY_LOGIN.php">  
                            <button class="btn login">COMPANY</button>
                        </a>
                        <br> <br> 
                        <a href="HTML-PHP/peso/PESO_LOGIN.php"> 
                            <button class="btn login">PESO</button>
                        </a>
                    </center>
                </div>
                <br>  <br>  <br>  <br>  <br>  <br> 
            </div>

        </div>
 

        
        <script src="JS/LANDING_PAGE.JS"></script>
        
    </body>
</html>
