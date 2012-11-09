<?php

	if (!$sdsObject) {
		die('Requested object doesn\'t exist!');
	}

	// Array of SD object properties 
	$properties = $sdsObject->getProperties();
?>

<form class="WikiaForm SDObject" id="SDObject" method="POST">
	<h1><strong><?= $sdsObject->getName(); ?></strong></h1>
	<?php if($context == SD_CONTEXT_SPECIAL): ?>
		<a href="?action=edit" class="wikia-button" title="Edit SDS Object">Edit</a>
	<?php endif; ?>
	<dl class="SDObjectDetails">
		<dt>Type:</dt>
		<dd><?= $sdsObject->getType(); ?></dd>
	</dl>
	
	<table class="article-table SDObjectProperties WikiaGrid">
		<caption>Object properties:</caption>
		<thead>
			<tr>
				<th class="grid-1">Property label:</th>
				<?php if($context == SD_CONTEXT_EDITING): ?>
					<th class="grid-5">Property value:</th>
				<?php else : ?>
					<th class="grid-3">Property value:</th>
					<th class="grid-2">Wiki text sample:</th>
				<?php endif; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $properties as $property ) : ?>
				<?php 
					$propertyValue = $property->getValue();
					$propertyLabel = $property->getLabel();
					$propertyName = $property->getName();
					$propertyHTML = $property->render( $context );
				?>

				<?php // Render HTML using renderers  ?>
				
				<?php if($propertyHTML !== false) : ?>
					<tr>
						<th><?= ucfirst(preg_replace('/([A-Z])/', ' ${1}',$propertyLabel)); ?>:</th>
						<td><?= $propertyHTML;?></td>
						<?php if($context == SD_CONTEXT_SPECIAL): ?>
							<td><pre><?= $propertyName; ?></pre></td>
						<?php endif; ?>
					</tr>
					<?php continue; ?>
				<?php endif; ?>
				
				
				<?php // Render properties manually ?>
				<tr>
					<th><?= ucfirst(preg_replace('/([A-Z])/', ' ${1}', $propertyLabel)); ?>:</th>
				
					<?php // display 'empty' for empty object properties ?>
					<?php if (($context != SD_CONTEXT_EDITING) && empty($propertyValue)) : ?>
						<td><p class="empty">empty (!container)</p></td>
						<?php if($context == SD_CONTEXT_SPECIAL): ?>
							<td><pre><?= $propertyName; ?></pre></td>
						<?php endif; ?>
				</tr>
						<?php continue; ?>
					<? endif ?>
		
					<td><p><?php echo $property->getValueObject()->render($context); ?></p></td>
					<?php if($context == SD_CONTEXT_SPECIAL): ?>
						<td><pre><?= $propertyName; ?></pre></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php if($context == SD_CONTEXT_EDITING): ?>
		<input type="submit" value="Save Changes to the SDS Object" class="wikia-button SDObjectSave" />
	<?php endif; ?>
</form>