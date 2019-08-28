<html>
<head>
<title>Codeigniter Form Submit Using Post and Get Method</title>
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>css/style.css"> -->
</head>

<body>

<div class="main">
<div id="content">

<h3 id='form_head'>Codelgniter Form Submit </h3><br/>
<div id="form_input">
<form action="./data_submitted" method="post">
User Name : <input type="text" name="u_name" placeholder="Please Enter User Name" class="input_box">
<br/>
User email: <input type="text" name="u_email" placeholder="Please Enter Email Address" class="input_box">
<input type="submit" value="Submit" class="submit">
</form>


<!-- // Display Entered values in View Page -->
<?php if(isset($user_name) && isset($user_email_id)){
echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered User Name : </label>".$user_name;
echo "<br><label class='label_output'>Entered Email: </label>".$user_email_id;
echo "<div>";
echo "</div>";
} ?>

</div>
</div>

</body>
</html>