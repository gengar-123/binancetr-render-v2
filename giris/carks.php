<?php

$title = "Çark";

include_once 'partials/header.php'; 
include_once '..//connect.php';
function getGiftsData($db) {
    $stmt = $db->query("SELECT * FROM gifts LIMIT 1");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


$giftsData = getGiftsData($db);

if($_POST) {
    $giftsToUpdate = [];
    for($i = 1; $i <= 12; $i++) {
        if(isset($_POST["gift$i"])) {
            $giftsToUpdate["gift$i"] = $_POST["gift$i"];
        }
    }

    if(count($giftsToUpdate) > 0) {
        $queryParts = [];
        $queryValues = [];
        foreach ($giftsToUpdate as $column => $value) {
            $queryParts[] = "$column = ?";
            $queryValues[] = $value;
        }

        $query = "UPDATE gifts SET " . implode(', ', $queryParts) . " WHERE id = 1";
        $update = $db->prepare($query);
        $update->execute($queryValues);

        if($update){
            $ajax->redirect('carks');
        } else {
            $ajax->redirect('carks');
        }
    }
}

?>

<div class="main-wrapper">
    <div class="card card-bg">
        <div class="card-body">
            <form action="" method="post">
                <?php for($i = 1; $i <= 12; $i++): ?>
                    <div class="mb-3">
                        <label for="gift<?= $i ?>" class="form-label">Hediye <?= $i ?></label>
                        <input type="text" class="form-control" value="<?= htmlspecialchars($giftsData["gift$i"]) ?>" name="gift<?= $i ?>" id="gift<?= $i ?>" maxlength="11">
                    </div>
                <?php endfor; ?>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>
    </div>
</div>


<?php include_once 'partials/footer.php'; ?>
