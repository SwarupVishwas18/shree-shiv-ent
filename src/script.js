let burger = document.querySelector('.burger')
let links = document.querySelector("#links")
burger.addEventListener("click",function(){
    links.classList.toggle("open")
})