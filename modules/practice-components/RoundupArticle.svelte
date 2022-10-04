<script>
	export let roundups;
	export let excerpt = false;
	let topics = roundups.topics;
	let blockquote = roundups.blockquote;
</script>

{#each topics as topic}
	<section class="container mx-auto">
		<div class="inner-column">
			<div class="roundup-article">
				<div class="roundup-intro">
					<h2>
						<a href="/2022/{roundups.month}/{roundups.slug}">
							{topic.title}</a>
					</h2>
					<p>
						{topic.description}
					</p>
				</div>
				{#if !excerpt}
					<ul class="roundup-list">
						{#each topic.articles as article}
							<li>
								<h3><a href={article.link}>{article.title}</a></h3>
								<p class="description">{article.description}</p>
							</li>
						{/each}
					</ul>

					<blockquote cite="www.https://obamaipsum.com/">
						<p>
							{blockquote}
						</p>
					</blockquote>
				{/if}
			</div>
		</div>
	</section>
{/each}

<style>
	.roundup-article {
		@apply flex flex-col gap-4;
	}

	.roundup-article p {
		@apply leading-normal max-w-prose;
	}

	.roundup-intro p a {
		@apply text-white underline;
	}

	ul {
		@apply flex flex-col gap-4 list-disc ml-4;
	}

	h3 {
		@apply text-h3 mb-1;
	}

	h3 a {
		@apply no-underline text-secondary;
	}

	ul li {
		@apply flex flex-col gap-2;
	}

	a {
		@apply text-white;
	}

	blockquote {
		@apply border-l-4 border-white ml-4 pl-4;
	}
</style>
