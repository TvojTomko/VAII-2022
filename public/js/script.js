function confirmDeleteShow(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=show&a=deleteshow&id=" + id;
    }
    return false;
}
function confirmDeleteClub(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=club&a=deleteclub&id=" + id;
    }
    return false;
}