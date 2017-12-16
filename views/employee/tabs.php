<div class="header clearfix">
	<nav>
		<ul class="nav nav-tabs">
			<!--li role="presentation" <?php if ($action == "view" || $action == 'default') echo 'class="active"' ?>><a href="employee/view">View</a></li-->
            <li role="presentation" <?php if ($action == "bio" || $action == 'default') echo 'class="active"' ?>><a href="employee/bio">Bio</a></li>
            <li role="presentation" <?php if ($action == "nok") echo 'class="active"' ?>><a href="employee/nok">Next of Kin</a></li>
			<li role="presentation" <?php if ($action == "edu") echo 'class="active"' ?>><a href="employee/edu">Education</a></li>
			<li role="presentation" <?php if ($action == "cert") echo 'class="active"' ?>><a href="employee/cert">Pro. Certificates</a></li>
			<li role="presentation" <?php if ($action == "history") echo 'class="active"' ?>><a href="employee/history">History</a></li>
            <li role="presentation" <?php if ($action == "promo") echo 'class="active"' ?>><a href="employee/promo">Promotions</a></li>
            <li role="presentation" <?php if ($action == "transfer") echo 'class="active"' ?>><a href="employee/transfer">Transfer</a></li>
			<li role="presentation" <?php if ($action == "bank") echo 'class="active"' ?>><a href="employee/bank">Bank Info</a></li>
		</ul>
	</nav>
</dev>
