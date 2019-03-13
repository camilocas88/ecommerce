// --------------------------------- Menu ----------------------------------

function openSlideMenu(){
    document.getElementById('side-menu').style.width = '290px';
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
locations.addEventListener('click', listcity)

function listcity(){
  if(!showMenu){
    listLocations.classList.remove("fa-chevron-right")
    listLocations.classList.add("fa-chevron-down")    
    subMenuLocation.style.display = "block"
    showMenu=true
  }else{
    listLocations.classList.add("fa-chevron-right")
    listLocations.classList.remove("fa-chevron-down")    
    subMenuLocation.style.display = "none"
    showMenu=false
  }
}

function toggleList(){
  if(!showMenu){
  list.classList.remove("fa-chevron-right")
  list.classList.add("fa-chevron-down")
  subMenu.style.display = "block"
  showMenu = true
  }else{
    list.classList.add("fa-chevron-right")
  list.classList.remove("fa-chevron-down")
  subMenu.style.display ="none"
  showMenu = false
  }
}