<?php
    echo "<h1>Arrays are fun, okay? :) </h1>";
    // An array can be declared e.g. as $developers = []; or $developers = array();
    // I've alternated between the two within this to illustrate that.

// ARRAY
    $developers = array();
    echo "<h3>Array</h3>";

// adding to the array
    $developers[] = "Matthew";
    $developers[] = "Paul";
    $developers[] = "William";

    echo "This is developer 1:" . " " . $developers[0] . "<br>";
    echo "This is developer 2:" . " " . $developers[1] . "<br>";
    echo "This is developer 3:" . " " . $developers[2] . "<br> <br>";

    $developers[2] = "Bob";

    echo "Dev William was fired and replaced by" . " " . $developers[2] . "<hr>";

// ASSOCIATE ARRAY
    $hobbies['Samuel'] = "Guitar";
    $hobbies['Rudy'] = "Fishing";
    $hobbies['Clementine'] = "Magic Tricks";

    // OR 

    // $hobbies = array(
    //     "Samuel" => "Guitar",
    //     "Rudy" => "Fishing",
    //     "Clementine" => "Magic Tricks"
    // );
    echo "<h3>Associative Array</h3>";

// adding to the array 
    $hobbies += ["Paulo" => "Jogging"];

    echo "Rudy's hobby is " . $hobbies["Rudy"] . "<br>";
    echo "Paulo's " . "hobby is " . $hobbies["Paulo"] . "<hr>";

// MULTI-DIMENSIONAL ARRAY
    $agents = [
        ["Mutt", "Sanders", 33],
        ["Kaa-Z", "Mayne", 50],
        ];
    echo "<h3>Multi-Dimensional Array</h3>";

// adding to the array
    $agents[2] = array("Sofia", "Williams", 41);

    echo "The first names of the agents are " . $agents[0][0] . ", " . $agents[1][0] . ", and " . $agents[2][0] . ". <br>";
    echo "The last names of the agents are " . $agents[0][1] . ", " . $agents[1][1] . ", and " . $agents[2][1] . ". <br>";
    echo "The ages of the agents are " . $agents[0][2] . ", " . $agents[1][2] . ", and " . $agents[2][2] . ". <hr>";

// MULTI-DIMENSIONAL ASSOCIATE ARRAYS
    $basket = array(
        "food" => array("turkey sandwiches", "bananas", "chips"),
        "drinks" => array("water", "soda", "sweet tea"),
        );
    echo "<h3>Multi-Dimensional Associative Arrays</h3>";

    echo "The food in the basket is " . $basket["food"][0] . ", "
        . $basket["food"][1] . ", and " . $basket["food"][2] . "<br>";

    echo "The drinks in the basket are " . $basket["drinks"][0] . ", "
        . $basket["drinks"][1] . ", and " . $basket["drinks"][2] . "<br>";

    echo "The third letter of each drink in the basket = " . $basket["drinks"][0][2] . ", "
        . $basket["drinks"][1][2] . ", and " . $basket["drinks"][2][2] . "<br> <br>";
    // To echo $basket[0] or $basket[1] is no longer possible

    // ---------------------------------------

    $employees = [
        ["first_name" => "Mutt",
            "last_name" => "Sanders",
            "age" => 33
        ],
        ["first_name" => "Kaa-Z",
            "last_name" => "Mayne",
            "age" => 50
        ],
    ];

    echo "The first employee is " . $employees[0]["first_name"] . " " . $employees[0]["last_name"]
        . ", and he is " . $employees[0]["age"] . " years old. <br>";

    echo "The second employee is " . $employees[1]["first_name"] . " " . $employees[1]["last_name"]
        . ", and he is " . $employees[1]["age"] . " years old. <br>";

    $employees[0]["first_name"] = "Roy";
    echo "The first employee changed his name to " . $employees[0]["first_name"] . "<br><br>";

// adding to the array
    $employees[] = 
        ["first_name" => "Jessica",
        "last_name" => "Roberts",
        "age" => 50
    ];
    
    echo $employees[2]["first_name"] . " " . $employees[2]["last_name"] . " " . "has recently joined the array! <hr>";

    echo "<b> Now that's some basic array fun in PHP! More to come! <b>"
?>