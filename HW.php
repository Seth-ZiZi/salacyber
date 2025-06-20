<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Month Selection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f2f2f2; /* Light background */
            color: #333; /* Dark text color */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 70%;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #4CAF50; /* Primary color */
            margin-bottom: 25px;
            font-size: 24px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        input[type=text], input[type=number], select {
            width: 100%;
            padding: 20px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            width: 40%;
            background-color:rgb(145, 147, 145); /* Green background */
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color:rgb(202, 207, 202); /* Darker green on hover */
        }

        button[type=reset] {
            width: 40%;
            background-color: #db4343; /* Red background */
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            margin-left: 40px;
            margin-right: 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type=reset]:hover {
            background-color: #ea6570; /* Lighter red on hover */
        }

        .result {
            background-color: #a8a2a2; /* Background for result box */
            border-left: 5px solidrgb(152, 154, 152); /* Green border */
            padding: 15px 20px;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 16px;
        }

        .result b {
            color:rgb(39, 39, 39); /* Green text for result */
        }
    </style>
</head>
<body>
    <div>
        <h2>Month Selection</h2>

        <?php
        $months = array(
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        );

            $num = $_POST['num'];
            if ($num >= 1 && $num <= 12) {
                $NameofMon = $months[$num - 1];
                echo "You selected: <b>$NameofMon</b> (Month number is : <b>$num</b>)</div>";
            }
        
        ?>

        <form method="POST">
            <label for="num">Selection Months:</label>
            <select name="num" id="num">
                <option value="">Select month </option>
                <?php
                foreach ($months as $seth => $month) {
                    $monthNumber = $seth + 1;
                    echo "<option value='$monthNumber' $SelectedMon>$monthNumber - $month</option>";
                }
                ?>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
