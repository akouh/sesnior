<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet"
              type="text/css"
              href="mystyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" >

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title></title>

        <script>
            function checkstrength() {
                v = document.getElementById("pass").value;
                m = document.getElementById("passmessage");
                l = v.length;

                if (l === 0) {
                    m.innerHtml = "";
                }
                if (l <= 6) {
                    // write a message to use saying password is week 
                    // this message is  to be written next to be field  

                    m.innerHTML = "Password too weak";
                    m.style.color = "red";
                } else if (l > 6 && l <= 8) {
                    m.innerHTML = "password is Medium";
                    m.style.color = "orange";
                } else {
                    m.innerHTML = "password is Strange";
                    m.style.color = "green";
                    return true;
                }
                return false;
            }
            function checkpassmatch() {
                p1 = document.getElementById("pass").value;
                p2 = document.getElementById("comfpass").value;

                s = document.getElementById("confurmemessage");


                if (p1 == p2) {
                    // write a message to use saying password is not matching 
                    // this message is  to be written next to be field  

                    s.innerHTML = "Password  match ";
                    s.className = "danger";
                    return true;
                } else {
                    s.innerHTML = "Password don't match";
                    s.className = "danger";
                    return false;
                }

            }
            function checkphone() {
                p = document.getElementById("phone");
                if (p.search(/^\+961-\d{1,2}-\d{6}$/ != 1)) {
                    return true;
                }
                alert("wrong phone format:");
                return false;
            }
            function validate() {
                if (checkstrength() && checkpassmatch() && checkphone()) {
                    return true;
                } else {
                    if (!checkstrength())
                        document.getElementById("pass1").focus();
                }
                return false;
            }



        </script>
        <style>
            body{
                color: white;
            }
        </style>


    <body class="centered"  style="background-image:url(https://lh3.googleusercontent.com/-IzW_GQEdhP8/VM5hZTGvXII/AAAAAAAABto/3yM6sf7_vhA/s1600/free-download-1600x900-resolution-of-high-quality-background-cool.jpg) ;
          background-repeat:repeat;">
          <?PHP
          ?>
        <div class="col-lg-12">
            <div class="bs-component">
                <form action="adds.php" method="post"  > 
            <fieldset>
                <div>
                    <label> First name </label> 
                    <input   id="fname" name="fname" placeholder="John" maxlength="50" required >
                
                    <label>Last name</label>
                    <input  type="text" id="lname"  name="lname" placeholder="Smith" maxlength="50" required>    

                </div>
                 <div>
                    <label> Store Name </label> 
                    <input class='form-control'  id="Store_name" name="Store_name" placeholder="Store Name" maxlength="50" required >
                 </div>
                <div>
                    <br/>
                    <label>Birthdate :</label>
                    <input type="date" name="birthday" id="birthday" required>
               
                    <label> Gender :</label>
                    
                    <label class="radio-inline" >
                        <input  type="radio" checked id="gender" name="gender" 
                            value="M">
                        M</label>
                    <label class="radio-inline"> 
                        <input type="radio" id="gender" name="gender" value="F" >
                        F</label>
                </div>

                <div >
                       <label>Country</label>
                    <select class="form-control" id="myselect" name="country">
                        <option value="-1">Choose your country</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Egypt">Egypt</option>
                    </select>
                </div>

                <div >

                    <label>Phone number </label> 
                    <td><input class="form-control" type="tel" name="Pnumber" id="phone" placeholder="xx-xxxxxx"  maxlength="8">
                  </div>

                <div>

                    <label for="address">Address</label>
                    <textarea class="form-control"  rows="3" name="address" id="address" maxlength="185"  >
                    </textarea>

                </div>

                <div >

                    <label>E-MAIL</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="e-mail"  maxlength="150" >
                </div>

                <div >
                    <label>Password</label>
                    <input class="form-control" type="password" 
                           name="password"
                           id="pass" required
                           placeholder="password" 
                           oninput="checkstrength()">
                    <label id="passmessage">   
                    </label>
                </div>

                <div>

                    <label>Confirm password</label>
                    <input class="form-control" type="password"
                           name="comfpass"
                           id="comfpass" required
                           placeholder="Confirm password">
                    <label id="confurmemessage"></label>

                </div>

                <input type="submit" value="sign up" style="float: right" class="box">
            </fieldset>
        </form>
                </div>
            </div>
    </body>
</html>
