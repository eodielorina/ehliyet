$(document).ready(function() {
    $(".navbar-toggler").on("click", function() {
        $("#navbarNav").toggleClass("collapase show")
    })
    $(".close-modal").on("click", function() {
        const currentModal = $(this).data("modal");
        $(`#${currentModal}`).modal("hide");
    })

})