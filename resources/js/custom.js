// function for Modals.blade.php copy to clipboard functionality
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
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

window.copyToClipboard = copyToClipboard;
