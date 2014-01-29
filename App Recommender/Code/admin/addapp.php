<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}

	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '<center><form action="" method="post">
			<br>Choose Applicaton catogiry : 
			<select id="catogiry" name="cat">
				<option value="Games">Games</option>
				<option value="Books">Books</option>
				<option value="Business">Business</option>
				<option value="Comics">Comics</option>
				<option value="Communication">Communication</option>
				<option value="Education">Education</option>
				<option value="Entertainment">Entertainment</option>
				<option value="Finance">Finance</option>
				<option value="Health">Health & Fitness</option>
				<option value="Libraries">Libraries</option>
				<option value="Lifestyle">Lifestyle</option>
				<option value="LiveWallpaper">LiveWallpaper</option>
				<option value="Media">Media</option>
				<option value="Medical">Medical</option>
				<option value="Music">Music</option>
				<option value="News">News</option>
				<option value="Personalization">Personalization</option>
				<option value="Photography">Photography</option>
				<option value="Productivity">Productivity</option>
				<option value="Shopping">Shopping</option>
				<option value="Social">Social Networking</option>
				<option value="Sports">Sports</option>
				<option value="Tools">Tools</option>
				<option value="Transportation">Transportation</option>
				<option value="Travel">Travel</option>
				<option value="Weather">Weather</option>
				<option value="Widgets">Widgets</option>
			</select>
			<br>Application name: <input type="text" name="name"><br>
			<br>Application rating:<input type="text" name="rate" maxlength="3"><br>
			<br>Recommenders: <input type="text" name="recommenders"><br>
			<br>5 Strat rating: <input type="text" name="rate5"><br>
			<br>4 Strat rating: <input type="text" name="rate4"><br>
			<br>3 Strat rating: <input type="text" name="rate3"><br>
			<br>2 Strat rating: <input type="text" name="rate2"><br>
			<br>1 Strat rating: <input type="text" name="rate1"><br>
			
			<br>Review 1: <input type="text" name="review1"><br>
			<br>Review 2: <input type="text" name="review2"><br>
			<br>Review 3: <input type="text" name="review3"><br>

			<br>Extra information: <input type="text" name="col1"><br>
			<br>Extra information: <input type="text" name="col2"><br>
			<br>Extra information: <input type="text" name="col3"><br>
			<br>Extra information: <input type="text" name="col4"><br>
			<br>Extra information: <input type="text" name="col5"><br>

			<br><input type="submit" value="submit">
			</form><br><br>I have left 5 more coloumns free for extra information
			<br>';
	}
	else
	{
		$table = ($_POST['cat']);
		$name=$_POST['name'];	
		$rate=$_POST['rate'];		
		$recommenders=$_POST['recommenders'];	
		
		$rate5=$_POST['rate5'];		
		$rate4=$_POST['rate4'];		
		$rate3=$_POST['rate3'];		
		$rate2=$_POST['rate2'];		
		$rate1=$_POST['rate1'];		
		
		$review1=$_POST['review1'];		
		$review2=$_POST['review2'];		
		$review3=$_POST['review3'];
		
		$col5=$_POST['col5'];		
		$col4=$_POST['col2'];		
		$col3=$_POST['col3'];		
		$col2=$_POST['col4'];		
		$col1=$_POST['col1'];		
		
		$sql="INSERT INTO $table 
		(appname,rating,recommenders,rate5,rate4,rate3,rate2,rate1,review1,review2,review3,col1,col2,col3,col4,col5)		VALUES 		('$name','$rate','$recommenders','$rate5','$rate4','$rate3','$rate2','$rate1','$review1','$review2','$review3','$col1','$col2','$col3','$col4','$col5',)";

		mysql_query($sql) or print(mysql_error());
		print("Application Successfull added.");
	}

?>