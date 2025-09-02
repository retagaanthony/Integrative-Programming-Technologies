<form method="post">
    <h2>Enter Values</h2>
    Age: <input type="number" name="age" required><br><br>
    Temperature: <input type="number" name="temperature" required><br><br>
    Score: <input type="number" name="score" required><br><br>
    Day: 
    <select name="day" required>
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
        <option>Sunday</option>
    </select><br><br>
    
    <input type="submit" value="Submit">
</form><?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $temperature = $_POST["temperature"];
    $score = $_POST["score"];
    $day = $_POST["day"];

    echo "<h2>Results:</h2>";

  
    echo "<h3></h3>";
    if ($age >= 18) {
        echo "You are old enough to vote.<br>";
    }

    
    echo "<h3></h3>";
    if ($temperature > 25) {
        echo "init sarap mag kape!<br>";
    } else {
        echo "lamig sarap mag  ice cream!<br>";
    }

    
    echo "<h3></h3>";
    if ($score >= 90) {
        echo "Grade: A<br>";
    } elseif ($score >= 75) {
        echo "Grade: B<br>";
    } elseif ($score >= 50) {
        echo "Grade: C<br>";
    } else {
        echo "Grade: F<br>";
    }

  
    echo "<h3></h3>";
    switch ($day) {
        case "Monday":
            echo "umpisa  pa lang!<br>";
            break;
        case "Wednesday":
            echo "malapit na!<br>";
            break;
        case "Friday":
            echo "etooo naa!<br>";
            break;
        default:
            echo "layo pa.<br>";
    }
}
?>


