<?php
include "../head_foot/init-vars.php";
$kontakt = "bg-primary";
include "../head_foot/site-head.php";

?>
<!-- Content --->
<section class="bg-secondary">
  <div class="center d-flex  justify-content-center align-items-center  text-white">
    <div>
      <h1> Kontakt </h1>
      <form method="GET" action="ergebnis.php">
        <label for="suche"><b>Eingabe</b></label>
        <input type="text" placeholder="Vorname" name="suche">
        <input class="btn btn-primary" type="submit">
      </form>
    </div>
  </div>
</section>

<?php include "../head_foot/site-foot.php"; ?>