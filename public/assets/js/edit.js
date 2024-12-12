let input2 = document.getElementById("customFileInput2");
let fileData2 = document.getElementById("fileData2");
input2.addEventListener("input", () => {
  fileData2.innerHTML = input2.files[0].name;
});

let popuEdit = document.querySelector(".popUpEdit");
let back = document.getElementById("back");
let edit = document.querySelectorAll("#edit");
let add = document.querySelectorAll("#add");



back.addEventListener("click", () => {
  popuEdit.style.display = "none";
});

edit.forEach((e) => {
  e.addEventListener("click", () => {
    popuEdit.style.display = "flex";
  });
});

