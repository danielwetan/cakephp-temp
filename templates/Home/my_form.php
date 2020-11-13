<h3><?= $message ?></h3>

<?php 

echo $this->Form->create(null, array(
  // "url" => "/home/form-submit", // version 1
  "url" => ["controller" => "home", "action" => "formSubmit"], // version 2
  "id" => "first-id",
  "class" => "first-class",
  "type" => "file", // method in the form, can be post, file, get, etc
));

// define form elements
// Text input 
echo $this->Form->text("first_name", array(
  "placeholder" => "Enter First Name",
  "id" => "form-id",
  "class" => "form-class",
  "data-id" => 3
));

// Password input
echo $this->Form->password("password_field", array(
  "placeholder" => "Enter Your Password"
));

// Hidden form
echo $this->Form->hidden("first_hidden", array(
  "value" => "CakePHP"
));

echo "<br>";
echo "<br>";

// Textarea
echo $this->Form->textarea("notes", array(
  "placeholder" => "Address",
  "rows" => 4, // customizable
  "cols" => 20,
));

echo "<br>";
echo "<br>";

// Select Area
// echo $this->Form->select("gender", ["male", "female"]); // basic definition
echo $this->Form->select("gender", [ // custom value
  "Male" => "male", 
  "Female" => "female"], [
    "class" => "select-form",
    "id" => "gender"
  ]);

echo "<br>";
echo "<br>";

// Checkbox
echo $this->Form->checkbox("course", [
  "hiddenField" => false, // remove hidden field
  "class" => "form-checkbox",
]);

echo "<br>";
echo "<br>";

// Radios
// echo $this->Form->radio("gender", [
//   "male", "female"
// ]);
echo $this->Form->radio("gender", [
  ["value" => "male", "text" => "Male"],
  ["value" => "female", "text" => "Female", "label" => [
    "class" => "label-male"
  ]],
]);

echo "<br>";
echo "<br>";

// File Inputs
echo $this->Form->file("text_image", [
  "class" => "image_class",
  "id" => "image_id"
]);


echo $this->Form->end();
