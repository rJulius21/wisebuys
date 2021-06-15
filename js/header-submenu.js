

function operateSubMenu() {
  // UI VARIABLES
  const submenuOpeners = document.querySelectorAll('.header__nav-drop-1-link');
  const submenus = document.querySelectorAll('.header__nav-drop-2');

  ////////////////////////////////////////////////////////////////
  // FUNCTION DEFINITIONS

  function hideItem(item, index, arr) {
    //Hide all sub-menus
    item.nextElementSibling.style.display = 'none';
  } // END hideItem

  function openSubMenu(item, index, arr) {
    item.addEventListener('click', () => {
      if (item.nextElementSibling.style.display == 'none') {
        item.nextElementSibling.style.display = 'block';
      } else {
        item.nextElementSibling.style.display = 'none';
      } // END IF ELSE
    }) // END primary event listener
  } // END openSubMenu

  function closeSubmenuOnOutClick(item, index, arr) {
    document.addEventListener('click', (event) => {
      if (item.parentElement.contains(event.target)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    })
  } // END closeSubmenuOnOutClick

  ///////////////////////////////////////////////////
  // START CODE EXECUTION
  submenus.forEach(closeSubmenuOnOutClick);
  submenuOpeners.forEach(hideItem);
  submenuOpeners.forEach(openSubMenu);

}

///////////////////////////////////////////////////
// RUN SCRIPT ON THIS FILE
operateSubMenu()

