<section>
	<inner-column>
		<roundup-card>
			<picture class="image">
				<img src="/immigration.jpg">
			</picture>

			<div class="card-info">
				<h3>July 19th</h3>
				<address class="author"><span>By</span> Shayne McGregor</address>
				<a href="?">Read More</a>
			</div>
		</roundup-card>

	</inner-column>
</section>


<style>
	roundup-card {
		display: flex;
		flex-direction: row;
		align-items: flex-end;
		gap: 15px;
	}
	@media(max-width: 500px) {
		roundup-card {
			flex-direction: column;
		}
	}
	h3 {
		font-size: 28px;
	}
	span {
		font-style: italic;
		color: #c5c9cd;
	}

	.card-info {
		display: flex;
		flex-direction: column;
		gap: 15px;
	}

	.card-info a {
		font-size: 20px;
		text-decoration: underline;
	}

	.image {
		max-width: 250px;
		clip-path: polygon(100% 46%, 100% 100%, 0 70%, 0 0);
	}
</style>