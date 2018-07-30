<!-- favicon -->
<link rel="shortcut icon" href="images/favicon/favicon.ico">

<style type="text/css">
* {
  font-family: bahnschrift;
}

h1.container {
  text-align: center;
}

p.container {
  text-align: center;
}

</style>

<div class="container">
	<h1 class="container">Missing fields</h1>
	<p class="container">Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
