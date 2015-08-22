<?php
	include('includes/header.php');
	include('includes/navigation.php');

?>
<article>

	<div class="thirteen columns">
			<h2 class="amenities">Contact</h2>
        <div class="moveright">
		<hr class="indentmedium hrTop"/>
	        <h3 class="indentmedium articleTitle" id="articleTitle">Email</h3>
        <hr class="indentmedium hrBottom"/>
			
            <form action="thankyou.php" method="post">
            
            <label class="indentmedium">Name:</label>
			<input class="indentmedium input" id="name" name="name" type="text" placeholder="First and last name" required autofocus>          
            
            <label class="indentmedium">Email:</label>            
			<input class="indentmedium input" id="email" name="email" type="email" placeholder="example@domain.com" required>            
            
            <label class="indentmedium">Category:</label>            
            <select class="indentmedium input" id="about" name="about" required>
            	<option value=""></option>
                <option value="information">Requesting Information</option>
                <option value="schedule">Schedule a Tour</option>
                <option value="maintenance">Maintenance</option>
                <option value="comment">Make a Comment or Complaint</option>
                <option value="general">General Inquery</option>
            </select>
            
            <label class="indentmedium">Question:</label> 
            <textarea class="indentmedium input" id="question" cols="100" rows="5" name="comment" placeholder="How can we help you?"></textarea>          
            
            <button type="submit" class="indentmedium input" id="contactsubmit">Send It!</button>
            </form>
 		<hr class="hrTop"/>
	        <h3 class="articleTitle" id="articleTitle">Call Us</h3>
        <hr class="hrBottom"/>           
            
            <h3 class="big_phone">(254) 799-9696</h3>
</div>	</div>      
 
<br class="clear" />
</article>
<?php
	include('includes/footer.php');
?>