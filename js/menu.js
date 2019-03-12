// --------------------------------- Menu ----------------------------------

function openSlideMenu(){
    document.getElementById('side-menu').style.width = '250px';
    // document.getElementById('side-menu').style.height = '600px';
  }

  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
  }

// --------------------------------- Sub Menu ----------------------------------
const list = document.querySelector('.fa-chevron-right')
const listLocations = document.querySelector('.fa-chevron-right')
const products = document.querySelector('.submenu')
const locations = document.querySelector('.submenuLocation')
const subMenu = document.querySelector(".submenu > ul")
const subMenuLocation = document.querySelector(".submenuLocation > ul")

window.onload = init;
function init(){
subMenu.style.display = "none"; 
subMenuLocation.style.display = "none"; 
}


let showMenu = false

products.addEventListener('click', toggleList)
locations.addEventListener('click', toggleList)

function toggleList(){
  if(!showMenu){
    // list.classList.remove("fa-chevron-right")
    list.forEach(item => item.classList.remove('fa-chevron-right'))
    list.forEach(item => item.classList.add('fa-chevron-down'))
    listLocations.forEach(item => item.classList.remove('fa-chevron-right'))
    listLocations.forEach(item => item.classList.add('fa-chevron-down'))
    // list.classList.add("fa-chevron-down")
    subMenu.style.display = "block"
    subMenuLocation.style.display = "block"
    showMenu=true

  }else{
    list.forEach(item => item.classList.add('fa-chevron-right'))
    list.forEach(item => item.classList.remove('fa-chevron-down'))
    listLocations.forEach(item => item.classList.add('fa-chevron-right'))
    listLocations.forEach(item => item.classList.remove('fa-chevron-down'))
    subMenu.style.display = "none"
    subMenuLocation.style.display = "none"
    showMenu = false
  }
}