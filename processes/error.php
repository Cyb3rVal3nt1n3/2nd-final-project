<?php
$error=  array();
if (count($error) > 0):?> 
	<div class="error">
		<?php foreach ($error as $error):?> 
			<p><? echo $error;?></p>
		<?php endforeach ?>
	</div>

<?php endif ?>