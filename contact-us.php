<?php include 'inc/header.php'; ?>
</div>
</header>
	<main>
		<section class="form-header">
			<div class="container clearfix">
				<h2>get in touch.</h2>
				<p>If you have a web development or design project in mind (be it a porfolio, company site, ecommerce etc) and you would like to hire us, or have any suggestions for the site here, drop us a line below. Thank you!</p>
			</div>
		</section>
			<section>
				<div class="container clearfix">
					<form name="send-email" id="email-form" action="send-email.php" method="post">
						<p>
							<input type="text" id="name" name="name" placeholder="Name..." value="<?php echo $name; ?>" required>
						</p>
						<p>
							<input type="email" id="email" name="email" placeholder="Email..." value="<?php echo $email; ?>" required>
						</p>
						<p>
							<textarea name="comments" id=comments" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
						</p>
						<p>
							<button type="submit" name="submit">Submit.</button>
						</p>
					</form>
				</div>
		</section>
	</main>
<?php include 'inc/footer.php'; ?>