
<?php

include('config.php');





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Document</title>
</head>
<body>

<div class="container">
  <header class="header">
  <h1 id="title" class="text-center">Survey Form</h1>
  <p id="description" class="description text-center">Thank you for taking the time to help us improve the platform</p></header>
                <form method="POST" action="reglist.php">
                       <div class="form-group">
                         <label>name</label><input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                       </div>
                         <div class="form-group">
                           <label>email</label><input type="email" name="email" class="form-control" placeholder="Enter your email" required >
                         </div>
                           <div class="form-group">
                             <label name="number">number</label><input type="number" name="number" class="form-control" min="13" max="99" placeholder="Age" required >
                           </div>
            <div class="form-group">
               <p>Which option best discribes your current role</p>
             <select class="form-control" name="role" id="dropdown" required>
               <option disabled selected value>Select current role</option>
               <option value="Student">Student</option>
               <option value="Full time job">Full time job</option>
               <option value="Full time learner">Full time learner</option>
               <option value="Other">Other</option>
               <option value="Prefer not to say">Prefer not to say</option>
             </select>
        </div>
          <div class="form-group">
            <p>Would you recommend to a friend?</p>
              <label><input type="radio" class="inline" name="referer" value="Definately">Definately</label>
              <label><input type="radio" class="inline" name="referer" value="Maybe">Maybe</label>
              <label><input type="radio" class="inline" name="referer"  value="Not sure">Not sure</label>
        </div>
           <div form-control>
             <p>What is your favorite feature of codding?</p>
                <select id="most-like" class="form-control" name="mostlike">
                  <option disabled selected value>Select an option</option>
                  <option value="Challengies">challengies</option>
                  <option value="Projects">projects</option>
                  <option value="Community">community</option>
                  <option value="Open source">open source</option> 
                </select>
           </div>
             <div class="form-group">
              <p>What would you like to see improved?</p>
                <label><input type="checkbox" name="improve" value="Font-end Project">Front-end Projects</label>
                <label><input type="checkbox" name="improve" value="Back-end Project">Back-end Projects</label>
                <label><input type="checkbox" name="improve" value="Data Visualisation">Data Visualization</label>
                <label><input type="checkbox" name="improve" value="Chalengies">Challengies</label>
            </div>
               <div class="form-group"></div>
                 <p>Any comments or suggestions?</p>
                   <textarea name="comment" id="comment" value="comment" placeholder="comment here"></textarea>
               </div>
                  <div class="form-group" id="button">
                    <button type="submit" name="submit" class="submit-button">Submit</button>
      
  </div>
</form>
    </div>
      </body>
        </html>

