
<p class="uk-margin-bottom uk-text-bold"><?php echo $projectData['date'] ?></p>
<p class="uk-margin-bottom"><span class="uk-text-bold">Mandat : </span><?php echo $projectData['mandat'] ?></p>
<p class="uk-margin-bottom"><span class="uk-text-bold">Pourquoi ce projet devrait vous intéresser? : </span><?php echo $projectData['raison'] ?></p>
<p class="uk-margin-bottom"><span class="uk-text-bold">Technologies utilisée : </span><?php echo $projectData['technologies'] ?></p>
<div class="uk-margin-bottom projet_source_wrapper">
	<span class="uk-text-bold projet_source">Sources : </span>
	<ul class="projet_source_list">
		<?php foreach ($projectData['sources'] as $valueSources): ?>
			<li><?php echo $valueSources ?></li>
		<?php endforeach; ?>
	</ul>
</div>

