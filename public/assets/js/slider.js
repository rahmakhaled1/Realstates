let input0 = document.getElementById('customFileInput0');
let fileData0 = document.getElementById('fileData0');
input0.addEventListener('input',()=>{
  fileData0.innerHTML = input0.files[0].name;
})