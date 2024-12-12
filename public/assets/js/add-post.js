let dropContainer = document.getElementById("dropContainer");
let input1 = document.getElementById('fileInput');
let picsInner1 = document.getElementById('picsInner1');
dropContainer.ondragover = dropContainer.ondragenter = function (evt) {
  evt.preventDefault();
};

dropContainer.ondrop = function (evt) {
  const dT = new DataTransfer();
  input1.files = evt.dataTransfer.files;
  putImages2(input1.files);
  evt.preventDefault();
  console.log(input1.files);
};

input1.addEventListener('input',()=>{
  putImages2(input1.files);
})

function removeName(name){
  let arr = Array.from(input1.files)
  let filtered = arr.filter((e)=> e.name !== name);
  const dataTransfer = new DataTransfer();
  filtered.forEach(file => {
    dataTransfer.items.add(file);
  });
  input1.files = dataTransfer.files;
}


function putImages2(arr) {
  picsInner1.innerHTML='';
  for (let i = 0; i < arr.length; i++) {
    picsInner1.innerHTML += `<div class="pImage">
    <img src="${URL.createObjectURL(arr[i])}" alt="">
    <i class="fa-light fa-trash-can" data-name="${arr[i].name}"></i>
  </div>`;
  }

  let del2 = document.querySelectorAll('.pImage i');
  del2.forEach((e)=>{
    e.addEventListener('click',()=>{
      e.parentElement.remove();
      removeName2(e.dataset.name)
    })
  })
}

function removeName2(name){
  let arr = Array.from(input1.files)
  let filtered = arr.filter((e)=> e.name !== name);
  const dataTransfer2 = new DataTransfer();
  filtered.forEach(file => {
    dataTransfer2.items.add(file);
  });
  input1.files = dataTransfer2.files;
}

function removeActive(id) {
  let inner = document.getElementById(id.id);
  inner.classList.remove("active");
}
function removeActiveTwo(id) {
  let inner = document.getElementById(id);
  inner.classList.remove("active");
}
