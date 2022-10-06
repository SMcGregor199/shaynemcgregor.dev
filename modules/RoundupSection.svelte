<script>
	import data from "$lib/weeklyRoundup.js";
	import RoundupCard from "$components/RoundupCard.svelte";
</script>

<section class="roundup">
	<h1>Roundups</h1>
	<div class="roundup-card-grid">
		<RoundupCard />
		<RoundupCard />
		<RoundupCard />
		<RoundupCard />
	</div>
</section>

<style>
	.roundup {
		@apply grid grid-cols-1 gap-8;
	}
	.roundup-card-grid {
		@apply grid sm:grid-cols-2 gap-8 lg:grid-cols-3 gap-4 xl:gap-16;
	}
	h1 {
		@apply font-[acuta] text-black mb-12;
	}
</style>