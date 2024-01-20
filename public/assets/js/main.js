const topBar = document.getElementById("top-bar")
const MiddleBar = document.getElementById("middle-bar")
const bottomBar = document.getElementById("bottom-bar")
const hamMenu = document.getElementById("ham-menu")
const menuResponsive = document.getElementById("menu-responsive")
hamMenu.addEventListener('click',()=>{
    topBar.classList.toggle("top-active")
    bottomBar.classList.toggle("bottom-active")
    MiddleBar.classList.toggle("middle-active")
    menuResponsive.classList.toggle("hidden")
})
const notice = document.getElementById('notice')
notice.addEventListener('click',()=>{
    window.location.href = '/notice'
})