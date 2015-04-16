<?php
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My First HTML Form</title>
    <link rel="stylesheet" href="salmon.css">
</head>
<body>
<h1 class="cohort-name">User Login</h1>    
<form method="POST" action="/process-form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password">
    </p>    
    <p>
        <button type="submit">Login</button>
    </p>
</form>  
<h1 class="cohort-name">Compose An Email</h1>
<form method="POST" action="/my_first_form.php">
    <p>
        <label for="from">From</label>
        <input id="from" name="from" type="text">
    </p>
    <p>
        <label for="to">To</label>
        <input id="to" name="to" type="text">                       
    </p>
    <p>
        <label for="subject">Subject</label>
        <input id="subject" name="subject" type="text">
    </p>
    <p>
        <textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>
    </p>
     <p>
        <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
        <label for="save_copy">Save to Your Sent Folder?</label>
    </p>
    <p>
        <button type="submit">Send</button>
    </p>
</form>
<h1>Multiple Choice Test</h1>
<form method="POST" action="/my_first_form.php">
    <p>Do you prefer Mac or PC?</p>
    <label>
        <input type="radio" name="q1" value="Mac">
        Mac
    </label>
    <label>
        <input type="radio" name="q1" value="PC">
        PC
    </label>
    <p>Do you prefer Ford or Chevy?</p>
        <label>
        <input type="radio" name="q2" value="Ford">
        Ford
    </label>
    <label>
        <input type="radio" name="q2" value="Chevy">
        Chevy
    </label>
    <p>What ingredients do you like on your hamburger?</p>
        <label><input type="checkbox" id="q3" name="q3[]" value="Cheese">Cheese</label>
        <label><input type="checkbox" id="q3" name="q3[]" value="Pickles">Pickles</label>
        <label><input type="checkbox" id="q3" name="q3[]" value="Onions">Onions</label>
        <label><input type="checkbox" id="q3" name="q3[]" value="Lettuce">Lettuce</label>
        <label><input type="checkbox" id="q3" name="q3[]" value="Tomato">Tomato</label>
        <br>
        <br>
    <label for="colors">What are your favorite colors?</label>
    <br>  
    <br>
    <select id="colors" name="colors []" multiple>
        <option value="blue">Blue</option>  
        <option value="green">Green</option>  
        <option value="yellow">Yellow</option>  
        <option value="red">Red</option>  
        <option value="orange">Orange</option>  
        <option value="purple">Purple</option>
    </select>      
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
<h1>Select Testing</h1>
<form method="POST" action="/my_first_form.php">
    <label for="select_testing">Do You Know How to Swim?</label>
        <select id="q4" name="q4">
            <option value="1">Yes</option>
            <option value="0" selected>No</option>
        </select> 
    <p>
        <button type="submit">Submit</button>
    </p>       
</form>
</body>
</html> 