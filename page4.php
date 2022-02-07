<?php 
require_once './header.php';
require_once './nav.php'; 
?>

<footer class="footer_container_top">
	<div class="container">
		<div class="footer_top">
			<h1>Contact us</h1>
			<p>Proin iaculis purus consequat sem cure.</p>
		</div>
		<div class="footer_wrapper">
                    
					<div class="footer_form">
						<form>
							<input type="text"  placeholder="you name *" class="footer_item1" required>
							<input type="emeil" placeholder="your e-mail *" class="footer_item2">
							<input type="text"  placeholder="subject" class="footer_item3" required>
						</form> 
					</div>
						<form>
							<p><textarea name="comment" placeholder="Your message *" class="footer_item4"></textarea></p>	
						</form>
				</div>
					<div class="footer_button_wrapper">
						<button type="click" class="button">Send Message</button>
					</div>
		</div>			
	</footer>

<?php 
require_once './footer.php';
?>