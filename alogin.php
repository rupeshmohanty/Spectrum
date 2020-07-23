<?php
session_start();
?>

<form role="form" method="post" action="login.php">
            <fieldset>              
              <p class="text-uppercase"> Login (Only for Admins)</p> 
                
              <div class="form-group">
                <label for="email">Your email:</label>
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-md btn-primary" value="Sign In" style="background-color: #5385c1">
              </div>
                 
            </fieldset>
        </form> 