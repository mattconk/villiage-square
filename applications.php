<?php
	include('includes/header.php');
	include('includes/navigation.php');
?>
<article>
<div class="thirteen columns">
	<h2 class="amenities">Applications</h2>
        <div class="moveright">
        <hr class="indentmedium hrTop"/>
        <h3 class="indentmedium articleTitle" id="articleTitle">Rental Applications</h3>
        <hr class="indentmedium hrBottom"/>
			<p class="indentmedium">Our rental applications are available online for your convenience. Please click the &quot;Go to Rental Application&quot; link below and complete the online application. </p> <br />
			<p class="indentmedium">There is a $35.00 per application processing fee that must be submitted before we review your application. <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&amp;business=info@villagesquareapt.com&amp;no_shipping=2&amp;no_note=1&amp;currency_code=USD&amp;bn=PP-BuyNowBF&amp;charset=UTF-8"><u>Click here</u></a> to pay application fee.</p>
 
        <FORM action="https://www.bluemoon.com/rentalapp/index.php" method="post" target="_blank">
	      <div>
                <INPUT type="hidden" name="IMPORTXML" value="<BLUEMOON><LOGIN><SERIAL-NUMBER>94111804</SERIAL-NUMBER></LOGIN><RENTALAPP><SETTINGS><TO-EMAIL>info@villagesquareapt.com</TO-EMAIL></SETTINGS></RENTALAPP></BLUEMOON>">
                <button name="LAUNCHRENTALAPP" class="indentmedium input" id="appsubmit" type="submit"/>Go to Rental Application</button> 

	      </div>
        </FORM>

        <hr class="indentmedium hrTop"/>
        <h3 class="indentmedium articleTitle" id="articleTitle">Additional Forms</h3>
        <hr class="indentmedium hrBottom"/>
        
        <p class="indentmediummore">There are also four forms the applicant must print, complete and fax to us, along with a copy of a State Photo ID and income verification (example: Paycheck stubs).</p>
        <p class="indentmediummore indentmediumless">
            <br />
            <a href="http://02bf2a6.netsolhost.com/addendum.pdf" target="_blank"><u>Addendum to Rental Application</u></a><br />
            <br />
            <a href="http://02bf2a6.netsolhost.com/public_information_request.pdf" target="_blank"><u>Public Information Request</u></a><br />
            <br />
            <a href="http://02bf2a6.netsolhost.com/Statement_of_Rental_Policy.pdf" target="_blank"><u>Statement of Rental Policy</u></a><br />
            <br />
            <a href="http://02bf2a6.netsolhost.com/Lease_Contract_Guaranty.pdf" target="_blank"><u>Lease Contract Guaranty</u></a><br />
            <br />
        </p>

 		<p><strong>Fax To: (254)799–7788</strong></p>



</div>
	</div>      
<br class="clear" />
</article>
<?php
	include('includes/footer.php');
?>