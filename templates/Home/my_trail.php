<?php 

// define breadcrumbs 1 
$this->Breadcrumbs->add([
  [
    "title" => "Home",
    "url" =>  ["controller" => "Home", "action" => "dashboard"]
    ]
]);

// define breadcrumbs 2
$this->Breadcrumbs->add(
  "Student",
  ["controller" => "Home", "action" => "student"],
  [
    "class" => "add-student-class",
    "id" => 21,
    "innerAttrs" => [ // inner attributes
      "class" => "first-child",
      "id" => "first-id"
    ]
  ]
);

$this->Breadcrumbs->add(
  "Add Student",
  ["controller" => "Home", "action" => "add_student"]
);

// Add this link to the first breadcrumb
$this->Breadcrumbs->prepend(
  "First Page",
  ["controller" => "Home", "action" => "first_page"]
);

echo $this->Breadcrumbs->render([
  "class" => "my-own-trail"
])?>
