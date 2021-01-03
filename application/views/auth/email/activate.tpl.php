<html>
<body>
<style>
    body {​​​​​​​
		background-color: #FF5733;  
     text-align: center;
    }​​​​​​​
    </style>
	<h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor('auth/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
</body>
</html>