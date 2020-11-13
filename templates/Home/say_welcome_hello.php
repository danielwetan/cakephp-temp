Welcome, Hello!

<?php echo $cell = $this->cell('Data::sayMessage', [
  "message" => "Parameter"
])->render() ?>


<?php
echo $this->Html->link(
  "Youtube",
  // "/home/say-hello",
  [
    "controller" => "Home",
    "action" => "sayWelcome",
    "_full" => true, // display full url
  ],
  [
    "class" => "sample-class",
    "id" => "sample-id"
  ]
);