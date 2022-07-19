<script>
	import "../../css/meyer-reset.css";
	import "../../css/setup.css";
	import  "../../css/settings.css"
	import  "../../css/structure.css"
	import "../../css/typography.css"
	import '../../components/Header.svelte';
	import '../../components/Footer.svelte';
</script>

<Header />

<main>
	<slot />
</main>

<Footer />





