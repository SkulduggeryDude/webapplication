<?php
setcookie("MARBLE", "WiOquHo2Sz", time() + (86400 * 30), "/"); // Cookie valid for 30 days
?>

<?php
$host = "startrek-payroll-mysql";
$db_name = $_SERVER["MYSQL_DATABASE"];
$db_username = $_SERVER["MYSQL_USER"];
$db_password = $_SERVER["MYSQL_PASSWORD"];

$conn = new mysqli($host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
if (!isset($_POST['s'])) {
?>
    <center style="background-image: url('background.jpg'); height:100%;">
        <form action="" method="post">
            <h2>OctopusGame Payroll Login</h2>
            <table style="border-radius: 25px; border: 2px solid black; padding: 20px; color: black;">
                <tr>
                    <td>User</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="OK" name="s">
                </tr>  
            </table>
        </form>
    </center>
<?php
}
?>

<?php
if ($_POST) {
    $user = $_POST['user'];
    error_log("USERNAME:" . $user);
    $pass = $_POST['password'];
    error_log("PASSWORD:" . $pass);
    $sql = "select username, salary from users where username = '$user' and password = '$pass'";
    error_log("QUERY:" . $sql);

    if ($conn->multi_query($sql)) {
        do {
            /* store first result set */
            echo "<center style='background-image: url(background.jpg); height:100%; color: black;'>";
            echo "<h2>Welcome, " . $user . "</h2><br>";
            echo "<table style='border-radius: 25px; border: 2px solid black; color: black;' cellspacing=30;>";
            echo "<tr><th>Username</th><th>Salary</th></tr>";
            if ($result = $conn->store_result()) {
                while ($row = $result->fetch_assoc()) {
                    $keys = array_keys($row);
                    echo "<tr>";
                    foreach ($keys as $key) {
                        echo "<td>" . $row[$key] . "</td>";
                    }
                    echo "</tr>\n";
                }
                $result->free();
            }
            if (!$conn->more_results()) {
                echo "</table></center>";
            }
        } while ($conn->next_result());
    }
}
?>

<!--
⠀⠀⠀⠀⠀⠀⢀⠤⠒⠒⠒⠋⠉⠉⠉⠉⠉⠓⢤⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⡴⠁⠀⠀⣀⠤⠖⢲⠒⠶⠤⣀⠀⠀⠙⢄⠀⠀⠀⠀⠀
⠀⠀⠀⡴⠋⠀⢀⡴⠋⠀⠀⡰⠋⠳⡀⠀⠀⠙⢦⡀⠈⠳⡀⠀⠀⠀
⠀⢀⠞⠀⠀⣠⠋⠀⠀⠀⡼⠁⡰⣄⠙⣄⠀⠀⠀⠹⡄⠀⠹⡄⠀⠀
⢠⠏⠀⠀⢰⠃⠀⠀⢀⡞⢀⡜⠁⠈⢦⠈⢦⠀⠀⠀⠹⡄⠀⠘⣆⠀
⡟⠀⠀⠀⡏⠀⠀⢀⠎⢀⡞⠀⠀⠀⠈⢧⠈⢣⠀⠀⠀⢇⠀⠀⠘⣆
⡇⠀⠀⢠⡇⠀⢀⡞⠀⢼⣀⣀⣀⣀⣀⣈⡧⠀⢧⠀⠀⢸⠀⠀⠀⢸
⡇⠀⠀⡼⢧⣀⣺⠤⠤⠤⢤⣀⣀⣀⣠⠤⠤⠤⠼⢃⣀⡼⡄⠀⠀⢸
⡇⠀⢀⡇⢸⡰⡌⠉⠉⠑⠒⠒⠒⠒⠒⠒⠒⠉⠉⣹⢸⠀⢷⠀⠀⢸
⡇⠀⢸⠀⠀⡇⢷⣄⠀⣀⣠⣤⢴⢦⣤⣀⣀⠀⣰⡏⡸⠀⠸⡄⠀⢸
⡇⠀⠸⠀⠀⢹⠘⣌⠫⣿⣶⣿⣾⣿⣿⣧⡿⢻⡼⠀⡇⠀⠀⡇⠀⢸
⣇⠀⢤⠀⠀⠘⡆⠹⣷⣨⠋⠀⠁⠈⠀⡁⣴⡿⠁⢸⠁⠀⢀⡇⠀⡏
⢸⡀⠀⠙⢦⡀⢹⡀⢹⡝⣧⠀⠀⠀⢀⡷⣻⠃⢠⠇⢀⡔⠉⠀⢠⠇
⠀⠙⢤⡀⠀⠙⢦⣳⡀⢱⣻⢿⣄⣠⡟⣧⠃⣠⣋⡴⠋⠀⣀⡴⠚⠀
⠀⠀⠀⠉⠲⣄⠀⠳⡙⢄⡹⣌⣿⣿⡽⣣⠞⣡⠋⣀⠴⠊⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠙⠲⢽⣆⠙⢺⠯⡟⢋⣡⠴⠓⠉⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠛⠒⠋⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
MARBLE{vbjrhita2b}
--!>
