$(document).ready(function() {
    $(".close-modal").on("click", function() {
        const currentModal = $(this).data("modal");
        $(`#${currentModal}`).modal("hide");
    })
})