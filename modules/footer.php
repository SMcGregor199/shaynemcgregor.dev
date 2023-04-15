	</main>


	<footer>
		<inner-column style="border-top:1px solid var(--outlines); border-width:">
			<div class="site-footer">
				<picture class="site-icon">
					<img src="images/pixel-lion.jpeg" alt="a pixelated image of a cartoon lion">
				</picture>
				<nav class="site-nav">
					<a class="base-voice" href="?page=home"><span>home</span></a>
					<a class="base-voice" href="#"><span>articles</span></a>
					<a class="base-voice" href="#"><span>projects</span></a>
					<a class="base-voice" href="#"><span>contact</span></a>	
				</nav>
			</div>
		</inner-column>
	</footer>
	



	<script>
		var page = document.querySelector('body');
		

		window.addEventListener('click', function(event){
			if(event.target.matches('[rel="toggle"]')) {
				page.classList.toggle('menu-open');
				console.log('menu-toggled');
			}

			console.log(event.target);
		} );

	</script>
</body>

</html>

