<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>



    <form action="/create" method="post">
        @csrf
        <div class="form">
            <center><h2><strong>Create</strong>&nbsp;an account</h2></center>

            <b><label for="name">Name:<span style="color: red">*</span></label><br><br></b>
            &emsp;<input type="name" name="firstname"required/>&emsp;
            <input type="name" name="lastname"required/><br>
            &emsp;<label for="name">Firstname</label>
            <label for="name">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Lastname</label><br><br><br>
            <b><label for="text">Birth date:</label><br><br></b>
            &emsp;<input type="date" name="month"><br><br>
            <b><label for="text">Mobile Number:<span style="color: red">*</span></label></b><br><br>
            &emsp;<input type="tel" name="mobile number" pattern="[0-9]{10}"><br><br>
            <b><label for="text">Email Address:<span style="color: red">*</span></label></b><br><br>
            &emsp;<input type="Email" name="email"required/><br><br>
            <b><label for="text">Address:<span style="color: red">*</span></label></b><br><br>
            &emsp;<input type="text" name="address" size="60"><br>
            &emsp;<span class="small">street address</span><br><br>
            &emsp;<input type="text" name="address" size="20">&emsp;
            &emsp;<input type="text" name="address" size="20">&emsp;<br>
            &emsp;<span class="small">city</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;<span class="small">state</span><br><br>
            <b><label for="text">How were you reffred to us?</label></b><br><br>
            &emsp;<input type="checkbox" name="walk in">
           <label for="text">Walk in</label><br>
           &emsp;<input type="checkbox" name="newspaper">
           <label for="checkbox">newspaper</label><br><br><br>
           <input type="checkbox" required/>&nbsp;I agree to the license terms.<br><br><br>



       <b><label for="text">Upload resume</label></b><br><br>

       <input type="file"><br><br>
    <div class="g-recaptcha" data-sitekey="6Le2Mo4gAAAAAKmdEUbENEwWgHRLamet895ejXuC"></div>

     <center><input type="submit" value="submit" id="rcorners"></center>


      </div>
       </form>
    </body>

    </html>
