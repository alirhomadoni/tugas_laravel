
<!DOCTYPE html>
<html>
<head>
	 <title>Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<form action="/welcomename" method="POST">
    @csrf
		<p>First name:</p>
		<input type="name" name="FirstName">
		<p>Last name:</p>
		<input type="name" name="LastName">
		<p>Gender: </p>
		<input type="radio" name="gender">
    	<label for="Male">Male</label><br>
    	<input type="radio" name="gender">
    	<label for="Female">Female</label><br> 	
    	<input type="radio" name="gender">
    	<label for="Other">Other</label><br>

    	<p>Nationality :</p>
    	<select name="stars">
        	<option value="Indonesia">Indonesia</option>
        	<option value="Non-Indonesia">Non-Indonesia</option>
         </select>
         <p>Language Spoken: </p>
   
   		<input type="checkbox" id="language1" name="language1"value="Bahasa Indonesia">
   		<label for="language1">Bahasa Indonesia</label><br>
   		<input type="checkbox" id="language2" name="language2"value="English">
   		<label for="language2">English</label><br>
    	<input type="checkbox" id="language3" name="language3"value="Other">
   		<label for="language3">Other</label><br>

   		<p>Bio:</p>
   		<textarea name="Text" rows="8" cols="25"></textarea><br>

   		<input type="submit" name="" value="Sign Up ">

	</form>
</body>
</html>