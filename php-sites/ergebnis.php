<?php
include "../head_foot/init-vars.php";
$kontakt = "bg-primary";
include "../head_foot/site-head.php";
$servername = "localhost";
$username = "root";
$password = null;
$dbName = "myDB";
try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbName",  $username, $password,);
} catch (PDOException $e) {
    echo "Fehler:" . $e->getMessage();
    exit();
}
$stmt = $conn->prepare("SELECT id, firstname, lastname FROM Person where firstname like :firstname or lastname like :lastname");
$searchstr = $_GET['suche'];
$stmt->execute([':firstname' => "%$searchstr%", ':lastname' => "%$searchstr%"]);
$rowCount = $stmt->rowCount();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rows = $result;
$stmt = null;


?>
<!-- Content --->
<section class="bg-white">
    <div class="center d-flex  justify-content-center text-dark pt-66">
        <div>
            <h1> Kontakt <a class="btn btn-primary" role="button" href="kontakt.php">Zurück</a></h1>
            <table class="table table-striped bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th>Vorname</th>
                        <th>Nachname</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $rowCount; $i++) : ?>
                        <tr>
                            <th><?= $rows[$i]['firstname'] ?></th>
                            <th><?= $rows[$i]['lastname'] ?></th>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include "../head_foot/site-foot.php"; ?>