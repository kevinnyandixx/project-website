<!DOCTYPE html>
<html>
<head>
</style>
</style>
<body>
	<p>Hello <?php echo $first_name . ' ' . $last_name; ?>, </p>

	<div>
		<p>You have been registered to tshop</p>
		<p>Activate your account using this link: <?php echo base_url() . 'Account/activate/'.$email_address.'/'.urlencode($identifier); ?></p>
	</div>
</body>
</html>