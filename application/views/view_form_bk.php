<html>
<head>
<title>Codeigniter Form Submit Using Post and Get Method</title>
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/form_submit_test/css/style.css">-->
</head>

<body>

<div class="main">
<div id="content">
<h3 id='form_head'>Codelgniter Form Submit </h3><br/>
<div id="form_input">
<?php
// Open form and set URL for submit form
echo form_open('./form/data_submitted');
// Show Name Field in View Page
echo form_label('User Name :', 'u_name');
$data= array(
'name' => 'u_name',
'placeholder' => 'Please Enter User Name',
'class' => 'input_box'
);
echo form_input($data);
// Show Email Field in View Page
echo "<br/>";
echo form_label('User email:', 'u_email');
$data= array(
'type' => 'email',
'name' => 'u_email',
'placeholder' => 'Please Enter Email Address',
'class' => 'input_box'
);
echo form_input($data);
?>
</div>


<div id="form_button">
<?php // Show Update Field in View Page
$data = array(
'type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'
);
echo form_submit($data); ?>
</div>


<?php echo form_close();
// Close Form
?>


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