<?php 
	$gardens = getData('data/gardens.json'); 

	if($page == 'style-guide') { 

		$defaultGarden = [
			"title" => "Heading Level 3",
			"content" => "This is a paragraph text that gives a brief overview of its content. It'll be really exciting content so I hope you check it out.",
			"link" => "#",
			"linkText" => "Click Here",
		];
		$gardens = [$defaultGarden];
	}
?>		

<gardens-gallery>
	<?php foreach($gardens as $garden) { ?>
		<garden-card>
			<h3 class="card-title-font"><?=$garden['title']?></h3>
			<p class="paragraph-font"><?=$garden['content']?></p>
			<a href="<?=$garden['link']?>" target="#"class="link-font"><?=$garden['linkText']?></a>
		</garden-card>
	<?php } ?>
</gardens-gallery>
