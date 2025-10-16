<?php
$title = "Kayıtlar";
include_once 'partials/header.php';

?>
<div class="main-wrapper">

    <div class="d-flex justify-content-between">
        <div>
            <button type="button" class="btn btn-outline-secondary m-b-xs">Toplam Ban: <span><?= $ajax->getBans()['count'] ?></span></button>
        </div>
        <div>
            <button type="button" class="btn btn-danger m-b-xs" id="banClear">Ban Sıfırla</button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="2%" scope="col">#</th>
                    <th width="7%" scope="col">IP</th>
                    <th width="10%" scope="col">İşlem</th>
                </tr>
            </thead>
            <tbody id="bans">
                <?php foreach ($ajax->getBans()['data'] as $ban): ?>
                    <tr>
                        <td class="bg-success id">
                            <?= $ban['id'] ?>
                        </td>
                        <td>
                            <?= $ban['ipAddress'] ?>
                        </td>
                        <td>
                            <button class="btn btn-danger remove p-2 pb-1 pt-1" data-id="<?= $ban['id'] ?>"><i
                                    class="fas fa-trash"></i></button>
                            <button class="btn btn-danger unban p-2 pb-1 pt-1" data-ip="<?= $ban['ipAddress'] ?>"><i
                                    class="fas fa-ban"></i> Ban Kaldır</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<script>
    // $(document).ready(function () { 
    //     setInterval(send, 2000);
    // });

    // function send() {
    // $.ajax({
    //     type: "POST",
    //     url: "ajax",
    //     data: "data=true",
    //     success: function (res) {
    //         res = JSON.parse(res);
    //         $("#online").text(res.online);
    //         $("#total").text(res.total);
    //         $("#records").html(res.records);
    //     }
    // })
    // } 

    $(document).on("click", ".unban", function () {
        $.ajax({
            type: "POST",
            url: "ajax",
            data: "unban=true&ip=" + $(this).data('ip'),
            success: function () {
                window.location.reload()
            }
        });
    })

    $(document).on("click", "#banClear", function () {
        Swal.fire({
            title: "Dikkat!",
            text: "Sistemdeki tüm ban kayıtlarını silmek istediğinize emin misiniz?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Evet, sil!",
            cancelButtonText: "Hayır, iptal et!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "ajax",
                    data: "banClear=true",
                    success: function () {
                        send();
                    }
                })
            }
        });
    });

</script>
<?php include_once 'partials/footer.php'; ?>