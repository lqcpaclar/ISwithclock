<div class="container">
    <div class="clock">
    <div class="circle" id="sc" style="--clr:#04fc43;"><i></i></div>
    <div class="circle circle2" id="mn" style="--clr:#fee800;"><i></i></div>
    <div class="circle circle3" id="hr" style="--clr:#ff2972;"><i></i></div>

    <span style="--1:1;"><b>1</b></span>
    <span style="--1:2;"><b>2</b></span>
    <span style="--1:3;"><b>3</b></span>
    <span style="--1:4;"><b>4</b></span>
    <span style="--1:5;"><b>5</b></span>
    <span style="--1:6;"><b>6</b></span>
    <span style="--1:7;"><b>7</b></span>
    <span style="--1:8;"><b>8</b></span>
    <span style="--1:9;"><b>9</b></span>
    <span style="--1:10;"><b>10</b></span>
    <span style="--1:11;"><b>11</b></span>
    <span style="--1:12;"><b>12</b></span>
</div>

        <div id="time">
            <div id="hours" style="--clr:#04fc43;">00</div>
            <div id="minutes" style="--clr:#fee800;">00</div>
            <div id="seconds" style="--clr:#ff2972;">00</div>
            <div id="ampm">AM</div>
        </div>
    </div>
<script>
    let hr = document.querySelector('#hr');
    let mn = document.querySelector('#mn');
    let sc = document.querySelector('#sc');

    setInterval(() => {
        let day = new Date();
        let hh = day.getHours() * 30;
        let mm = day.getMinutes() * 6;
        let ss = day.getSeconds() * 6;

        hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;

        let hours = document.getElementById('hours');
        let minutes = document.getElementById('minutes');
        let seconds = document.getElementById('seconds');
        let ampm = document.getElementById('ampm');
        let h = new Date().getHours();
        let m = new Date().getMinutes();
        let s = new Date().getSeconds();

        let am = h >= 12 ? "PM" : "AM";
        if (h > 12) {
            h = h - 12;
        }
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        hours.innerHTML = h;
        minutes.innerHTML = m;
        seconds.innerHTML = s;
        ampm.innerHTML = am;
    })
</script>
<style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            background-image: url('https://wallpapercave.com/wp/wp5824693.jpg'); 
            background-size: cover;
            background-position: center;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: inherit;
            filter: blur(1.5px); 
            z-index: -1; 
            background-size: cover;
            background-position: center;
        }

        .containers {
            max-width: 500px;
            margin: 60px;
            margin-left: auto; 
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-size: cover;
            background-position: center;
        }

        h1 {
            text-align: center;
            color: #ff4d4d;
            margin-top: 20px;
            font-size: 24px;
        }

        input[type="text"],
        input[type="email"],
        button {
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f7f7f7;
            color: #333;
        }

        button {
            background-color: #ff4d4d;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e63e3e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
            text-align: left;
            font-size: 16px;
            color: #333;
        }

        th {
            background-color: #ff4d4d;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        button {
            padding: 8px 16px;
            margin-right: 8px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 14px;
            color: #fff;
        }

        button.edit {
            background-color: #4CAF50;
        }

        button.delete {
            background-color: #DC3545;
        }

        button:hover {
            background-color: #ff3333;
            transform: scale(1.05);
            
        }
        .container {
    position: absolute; 
    top: 30%;  
    left: 20%; 
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center; 
    background: #2f363e;
    border-radius: 20px;
    border-top-left-radius: 225px;
    border-top-right-radius: 225px;
    box-shadow: 25px 25px 25px rgba(0, 0, 0, 0.75),
                10px 10px 70px rgba(0, 0, 0, 0.25),
                inset 5px 5px 10px rgba(0, 0, 0, 0.5),
                inset 5px 5px 20px rgba(255, 255, 255, 0.2),
                inset -5px -5px 15px rgba(0, 0, 0, 0.75);
    width: 450px; 
    height: 450px; 
    margin-bottom: 30px;
}
.clock {
    position: relative;
    width: 450px;
    height: 450px;
    background: #2f363e;
    border-radius: 50%; 
    box-shadow: 10px 50px 70px rgba(0,0,0,.25),
                inset 5px 5px 10px rgba(0,0,0,0.5),
                inset 5px 5px 20px rgba(255,255,255,0.2),
                inset -5px -5px 15px rgba(0,0,0,0.75);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
}
        .clock::before
        {
            content::'';
            position: absolute;
            width: 8px;
            height: 8px;
            background: #2f363e;
            border: 3px solid #fff;
            border-radius: 50%;
            z-index: 100000;
        }
        .clock span{
            position: absolute;
            inset: 20px;
            color: #fff;
            text-align: center;
            transform: rotate(calc(30deg * var(--1)));
        }
        .clock span b{
            font-size: 2em;
            opacity: 0.25;
            font-weight: 600;
            display: inline-block;
            transform: rotate(calc(-30deg * var(--i)));
        }
        .circle
        {
            position: absolute;
            width: 300px;
            height: 300px;
            border: 2px solid rgba(0,0,0,.25);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            z-index: 10;
        }
        .circle i {
    position: absolute;
    width: 6px;
    height: 50%;
    background: var(--clr);
    opacity: 0.75;
    transform-origin: bottom;
    transform: scaleY(0.5) translateY(50%);
}

.circle:nth-child(1) i {
    width: 2px;
}

.circle:nth-child(2) i {
    width: 6px;
    transform: rotate(90deg) scaleY(0.5) translateY(50%);
}

.circle2 {
    width: 240px;
    height: 240px;
    z-index: 9;
}

.circle3 {
    width: 180px;
    height: 180px;
    z-index: 8;
}

.circle::before {
    content: '';
    position: absolute;
    top: -8.5px;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: var(--clr);
    box-shadow: 0 0 20px var(--clr), 0 0 60px var(--clr);
}
        #time
        {
            margin-bottom: 40px;
            display: flex;
            padding: 10px 20px;
            font-size: 2em;
            font-weight: 600;
            border: 2px solid rgba(0,0,0,0.5);
            border-radius: 40px;
            box-shadow: 5px 5px 10px rgba(0,0,0,0.5),
            inset 5px 5px 20px rgba(255,255,255,0.2),
            inset -5px -5px 15px rgba(0,0,0,0.75);
        }
        #time div
        {
            position: relative;
            width: 60px;
            text-align: center;
            font-weight: 500;
            color: var(--clr);
        }
        #time div:nth-child(1)::after,
        #time div:nth-child(2)::after {
            content: ':';
            position: absolute;
            right: -4px;
}
        #time div-last-child
        {
            font-size: 0.5em;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        #time div:nth-child(2)::after
        {
            animation: animate 1s steps(1) infinite;
        }
        @keyframes animate
        {
            0%{
                opacity: 1;
            }
            50%
            {
                opacity: 0;
            }
        }
        .back-button {
    display: block;
    width: 250px;
    text-align: center;
    margin: 100px auto 10px;
    padding: 30px 20px;
    background-color: #ff4d4d;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.back-button:hover {
    background-color: #ff4d4d;
    transform: scale(1.05);
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "paclar";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addInformation($conn, $fullname, $age, $address, $contact) {
   
    if(strlen($age) > 10) { 
        echo "Error: Age is too long.";
        return;
    }
    
    $sql = "INSERT INTO information (fullname, age, address, contact) VALUES ('$fullname', '$age', '$address', '$contact')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<br><a href="paclar.php" class="back-button">Back</a>'; 
        exit();
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['add_information'])) {
    $fullname = $_POST["fullname"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];

    addInformation($conn, $fullname, $age, $address, $contact);
    header("Location: paclar.php");
    exit();
}
?>
<div class="containers">

    <div class="form-container form-animation">
        <form method="post" action="paclar.php">
            <input type="text" name="fullname" placeholder="FullName"><br>
            <input type="text" name="age" placeholder="Age"><br>
            <input type="text" name="address" placeholder="Address"><br>
            <input type="text" name="contact" placeholder="Contact"><br>
            <button type="submit" name="add_information">Add information</button>
        </form>
        
    </div>

    <?php
    echo '<div class="table-container table-animation">';
    echo '<table>';
    echo '<tr>';
    echo '<th>FullName</th>';
    echo '<th>Age</th>';
    echo '<th>Address</th>';
    echo '<th>Contact</th>';
    echo '<th>Actions</th>'; 
    echo '</tr>';

    $result = $conn->query("SELECT * FROM information");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['fullname'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['contact'] . '</td>';
    

            echo '<td>';
            echo '<form method="post" action="edit_information.php">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<button type="submit" name="edit_information">Edit</button>';
            echo '</form>';
            echo '<form method="post" action="delete_information.php">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<button type="submit" name="delete_information">Delete</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
            
        }
    }

    echo '</table>';
    echo '</div>';
    ?>
</div>


<?php $conn->close(); ?>
