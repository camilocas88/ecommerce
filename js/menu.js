// --------------------------------- Menu ----------------------------------

function openSlideMenu(){
    document.getElementById('side-menu').style.width = '290px';
    // document.getElementById('side-menu').style.height = '600px';
  }

  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
  }

// --------------------------------- Sub Menu ----------------------------------
const chevron = document.querySelectorAll('.fa-chevron-right')
const lists = document.querySelectorAll('.side-menu-ul')
const subMenu = document.querySelectorAll('.side-menu-ul ul')

for (let i = 0; i < lists.length; i++) {
  let showMenu = false
        lists[i].addEventListener("click", ()=> {
          if(!showMenu){
            chevron[i].classList.remove("fa-chevron-right")
            chevron[i].classList.add("fa-chevron-down")
            subMenu[i].style.display ="block"
            showMenu=true
          }else{
            chevron[i].classList.remove("fa-chevron-down")
            chevron[i].classList.add("fa-chevron-right")
            subMenu[i].style.display ="none"
            showMenu=false
          }
         })
    }

// --------------------------------- footer menu ----------------------------------

const footer = document.querySelectorAll('.despegable > li')
const footerMenu = document.querySelectorAll('.despegable ul')


for (let i = 0; i < footer.length; i++) {
  let showMenu = false
    footer[i].addEventListener("click", ()=> {
          if(!showMenu){
            footerMenu[i].style.display ="block"
            showMenu=true
          }else{
            footerMenu[i].style.display ="none"
            showMenu=false
          }
         })
    }

// --------------------------------- show content login page  ----------------------------------

// function showContent() {
//   element = document.getElementById("content");
//   check = document.getElementById("check");
//   if (check.checked) {
//       element.style.display='block';
//   }
//   else {
//       element.style.display='none';
//   }
// }