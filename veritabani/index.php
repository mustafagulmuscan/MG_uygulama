$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";  // Veritabanı adını ekleyin

$conn = new mysqli($servername, $username, $password, $dbname);  // Veritabanı adı eklenmiş oldu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
