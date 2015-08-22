<?php
	include('includes/header.php');
	include('includes/navigation.php');

?>
<article>

	<div class="thirteen columns">
		<h2 class="amenities">Renters</h2>
        <div class="moveright">
        <hr class="indentmedium hrTop"/>
        <h3 class="indentmedium articleTitle" id="articleTitle">Maintenance Request</h3>
        <hr class="indentmedium hrBottom"/>

            <form action="thankyou.php" method="post">
            
            <label class="indentmedium">Name:</label>
			<input class="indentmedium input" id="name" name="name" type="text" placeholder="First and last name" required autofocus>          
            
            <label class="indentmedium">Email:</label>            
			<input class="indentmedium input" id="email" name="email" type="email" placeholder="example@domain.com" required>            
            
            <label class="indentmedium">Maintenance Request</label> 
            <textarea class="indentmedium input" id="question" cols="100" rows="5" name="comment" placeholder="How can we help you?"></textarea>          
            
            <button type="submit" class="indentmedium input" id="contactsubmit">Send It!</button>
            </form>

        <hr class="indentmedium hrTop"/>
        	<h3 class="indentmedium articleTitle" id="articleTitle">Pay Rent</h3>
        <hr class="indentmedium hrBottom"/>
			
            <h3 class="indentmedium big_phone"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&amp;business=info@villagesquareapt.com&amp;no_shipping=2&amp;no_note=1&amp;currency_code=USD&amp;bn=PP-BuyNowBF&amp;charset=UTF-8">Pay Rent</a></h3>		
</div>
	</div>      
<br class="clear" />
</article>
<?php
	include('includes/footer.php');
?>