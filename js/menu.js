// --------------------------------- Menu ----------------------------------

function openSlideMenu(){
    document.querySelector('.side-nav').style.display = 'block';
    
  }

  function closeSlideMenu(){
    document.querySelector('.side-nav').style.display = 'none';
  }

  // function toggle_visibility(id) {
  //   let e = document.getElementById(id);
  //   e.style.display = ((e.style.display!='none') ? 'none' : 'block');
  //   }

// --------------------------------- Sub Menu ----------------------------------
const chevron = document.querySelectorAll('.fa-chevron-down')
const lists = document.querySelectorAll('.side-menu-ul')
const subMenu = document.querySelectorAll('.side-menu-ul ul')

for (let i = 0; i < lists.length; i++) {
  let showMenu = false
        lists[i].addEventListener("click", ()=> {
          if(!showMenu){
            chevron[i].classList.remove("fa-chevron-down")
            chevron[i].classList.add("fa-chevron-up")
            subMenu[i].style.display ="block"
            showMenu=true
          }else{
            chevron[i].classList.remove("fa-chevron-up")
            chevron[i].classList.add("fa-chevron-down")
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