	</main>

	<footer class="site-footer">
		<inner-column>
			<p class = "base-voice">Thanks for checking out my website. If you'd like to talk about web design and rap music, you can contact me directly at <span>shayne.mcgregor@yale.edu</span>.</p>

			<p class="base-voice">If you're curious , I'll also include a link to my <a href="https://github.com/SMcGregor199">Github</a>.</p>

		</inner-column>
	</footer>

	<script>
		var page = document.querySelector("body");

		var home = document.querySelector('[rel="home"]');
		var about = document.querySelector('[rel="about"]');
		var writing = document.querySelector('[rel="writing"]');
		var projects = document.querySelector('[rel="projects"]');
		var playlist = document.querySelector('[rel="playlist"]');

		var button = document.querySelector('button');

			button.addEventListener("click",function(event){
			page.classList.toggle("menu-open");	
			});

			home.addEventListener("click", function(event){
				page.classList.toggle("menu-open");
			});

			about.addEventListener("click", function(event){
				page.classList.toggle("menu-open");
			});
			
			writing.addEventListener("click", function(event){
				page.classList.toggle("menu-open");
			});
			
			projects.addEventListener("click", function(event){
				page.classList.toggle("menu-open");
			});
			
			playlist.addEventListener("click", function(event){
				page.classList.toggle("menu-open");
			});

	</script>
</body>

</html>

