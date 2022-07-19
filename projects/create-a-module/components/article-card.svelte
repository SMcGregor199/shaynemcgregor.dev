<section>
	<inner-column>

		<article-card>

			<div class="resource-info">
				<h2 class="title">Obama Ipsum</h2>
				<address class="author">By Barak Obama</address>
				<p class="blurb">She had this enormous capacity for wonder, and lived by the Golden Rule. When John McCain said we could just "muddle through" in Afghanistan, I argued for more resources and more troops to finish the fight against the terrorists who actually attacked us on 9/11, and made clear that we must take out Osama bin Laden and his lieutenants if we have them in our sights. On economic development, we will create a new corps of business volunteers to partner with counterparts in Muslim-majority countries.</p>

				<nav class="card-nav">
					<a href="?">Read More!</a>
					<a href="?">Check out Similar Resources</a> 
				</nav>

			</div>


			<picture class="card-image">
				<img src="https://peprojects.dev/images/portrait.jpg">
			</picture>

		</article-card>

	</inner-column>
</section>


<style>
	article-card {
		display: block;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}

@media(min-width: 500px) {
	article-card {
		flex-direction: row;
		align-items: flex-end;
		}
	}

	article-card .resource-info {
		display: flex;
		flex-direction: column;
		gap: 15px;
	}

	article-card .resource-info h2 {
		font-size: 30px;
		font-style: italic;
		font-weight: 400;
	}

	article-card .resource-info address {
		font-size: 18px;
		font-weight: 700;
	}

	article-card .resource-info p {
		font-size: 18px;
		line-height: 1.5;
		max-width: 60ch;
	}

	article-card .card-image {
		max-width: 200px;
	}

	article-card .card-nav {
		display: flex;
		flex-direction: row;
		gap: 15px;
	}

	article-card a {
		text-decoration: underline;
	}

</style>