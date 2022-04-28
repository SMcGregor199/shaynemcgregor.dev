	</main>

	<footer class="site-footer">
		<inner-column>
			<p class = "paragraph-voice">Thanks for checking out my website. If you'd like to talk about web design and rap music, you can contact me directly at <span>shayne.mcgregor@yale.edu</span>.</p>

			<p class="paragraph-voice">If you're curious , I'll also include a link to my <a href="https://github.com/SMcGregor199" class="link-font">Github</a>.</p>
			<p class="paragraph-voice" target="github">Additionally, you can also follow me on <a href="https://community.codenewbie.org/smcgregor199" class="link-font" target="codenewbie">Codenewbie</a> where I repost most of my work from Substack</p> 
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

