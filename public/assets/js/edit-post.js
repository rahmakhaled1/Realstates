document.addEventListener('DOMContentLoaded', function() {
    let popuEdit = document.querySelector(".editInner");
    let back = document.getElementById("back");
    let edit = document.querySelectorAll("#edit");

    if (back && popuEdit) {
        back.addEventListener("click", () => {
            popuEdit.style.display = "none";
        });
    }

    if (edit.length > 0 && popuEdit) {
        edit.forEach((e) => {
            e.addEventListener("click", () => {
                popuEdit.style.display = "flex";
            });
        });
    }
});
