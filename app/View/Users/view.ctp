<h1>Viewing <?php echo $user['User']['username']; ?>'s Developer Profile</h1>

<table id="devs">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $user['User']['firstname']; ?> <?php echo $user['User']['lastname']; ?></td>
	</tr>
	<tr>
		<td>Country</td>
		<td><?php echo $user['User']['country']; ?></td>
	</tr>
	<tr>
		<td>Experience</td>
		<td><?php echo $user['User']['experience']; ?> years</td>
	</tr>
	<tr>
		<td>Contact</td>
		<td><?php echo $user['User']['email']; ?></td>
	</tr>
</table>
<p>My skillset:</p>
<div id="skillset"><?php echo $user['User']['skills']; ?></div>
<?php echo $this->Html->script('jquery-1.7.js'); ?>
<?php echo $this->Html->script('alternate-table-styling.js'); ?>