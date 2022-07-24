<script>
	import ArticleCard from "../../components/article-card.svelte";
	import RoundupArticle from "../../components/roundup-article.svelte";
	import RoundupCard from "../../components/roundup-card.svelte";
	var content = {
		title: "HELLO BIG CATS",
	};
	import data from "../../lib/articles.js";
</script>

<!-- <ArticleCard article={ content }/> -->
<RoundupArticle  articles={ data }  /> 
<!-- <RoundupCard /> -->

