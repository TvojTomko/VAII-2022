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
function confirmDeleteBreed(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=breed&a=deletebreed&id=" + id;
    }
    return false;
}
function confirmDeleteDog(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=dog&a=deletedog&id=" + id;
    }
    return false;
}
