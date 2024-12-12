let popuEdit = document.querySelector(".popUpEdit");
let back = document.getElementById("back");
let edit = document.querySelectorAll("#edit");


back.addEventListener("click", () => {
  popuEdit.style.display = "none";
});

edit.forEach((e) => {
  e.addEventListener("click", () => {
    popuEdit.style.display = "flex";
  });
});
