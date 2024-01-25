const topBar = document.getElementById("top-bar")
const MiddleBar = document.getElementById("middle-bar")
const bottomBar = document.getElementById("bottom-bar")
const hamMenu = document.getElementById("ham-menu")
const menuResponsive = document.getElementById("menu-responsive")
const hearts = document.querySelectorAll('.heart');
hamMenu.addEventListener('click',()=>{
    topBar.classList.toggle("top-active")
    bottomBar.classList.toggle("bottom-active")
    MiddleBar.classList.toggle("middle-active")
    menuResponsive.classList.toggle("hidden")
})

// Add click event listener to each heart
hearts.forEach((heart, index) => {
  heart.addEventListener('click', () => {
    // Toggle the 'red' class to change the color
    heart.classList.toggle('font-red');

    // You can also get the index or perform other actions here
    // console.log(`Heart ${index + 1} clicked!`);
  });
});