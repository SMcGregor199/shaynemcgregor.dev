<script>
	import Reset from "../../css/meyer-reset.css";
	import Setup from "../../css/setup.css";
	import Settings from "../../css/settings.css"
	import Structure from "../../css/structure.css"
	import Typography from "../../css/typography.css"
	import Header from '../../components/Header.svelte';
	import Footer from '../../components/Footer.svelte';
</script>


<Header />

<main>
	<slot />
</main>

<Footer />





