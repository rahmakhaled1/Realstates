let i = document.querySelectorAll(".i");

i.forEach((e) => {
  e.addEventListener("click", () => {
    i.forEach((e) => {
      e.classList.remove("active");
    });
    e.classList.add("active");
  });
});

let menu = document.getElementById('menu');
let aside = document.querySelector('aside');

menu.addEventListener('click',()=>{
  aside.classList.toggle('showAside');
})
