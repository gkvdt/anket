<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$form =[
        "branch" => [
          "arabic",
          "english"
        ],
        "name"=>"Full-name",
        "country" =>[
                "all -contries",
                "turkey",
                "america",
                "vs"
        ],
    "questionmode1" =>[
            "yes",
            "no"
    ],
    "questionmode2"=>[
           "Question -1",
        "Question -2",
        "Question -2",
        "Question -3",
        "Question -4",
        "Question -5",
        "Question -6",
        "Question -7",
        "Question -8",
        "Question -9"
],
    "SEND - Button"
];

echo "<pre>";

print_r($form);
echo "<pre>";

?>


</body>
</html>