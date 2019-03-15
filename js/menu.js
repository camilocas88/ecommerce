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
      if(!showMenu){
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
    }