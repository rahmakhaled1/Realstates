let input = document.getElementById('customFileInput');
let fileData = document.getElementById('fileData');
input.addEventListener('input',()=>{
  fileData.innerHTML = input.files[0].name;
})

let input2 = document.getElementById('customFileInput2');
let fileData2 = document.getElementById('fileData2');
input2.addEventListener('input',()=>{
  fileData2.innerHTML = input2.files[0].name;
})

