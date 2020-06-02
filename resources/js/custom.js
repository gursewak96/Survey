// function for Modals.blade.php copy to clipboard functionality
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $(".collapse").collapse();
});

function copyToClipboard(e) {
    //copy the value of shareable link from parent's first child of clicked button
    var copyText = e.currentTarget.parentElement.firstElementChild;
    copyText.select();
    document.execCommand("copy");

    //Change the title of tooltip
    $(e.target)
        .attr("data-original-title", "Copied")
        .tooltip("show");
}

function toggleChevron(e) {
    var el = e.currentTarget.firstElementChild;
    if (el.className == "fas fa-chevron-down") {
        el.className = "fas fa-chevron-up";
    } else {
        el.className = "fas fa-chevron-down";
    }
}

function alertDelete(el) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this...",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            console.log(el.parentNode.submit());
        } else {
            swal("Your data is safe! 😎");
        }
    });
}

window.copyToClipboard = copyToClipboard;
window.toggleChevron = toggleChevron;
window.alertDelete = alertDelete;
