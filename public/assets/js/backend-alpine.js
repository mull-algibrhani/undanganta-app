function data() {
 function getThemeFromLocalStorage() {
  // if user already changed the theme, use it
  if (window.localStorage.getItem('dark')) {
   return JSON.parse(window.localStorage.getItem('dark'))
  }

  // else return their preferences
  return (
   !!window.matchMedia &&
   window.matchMedia('(prefers-color-scheme: dark)').matches
  )
 }

 function setThemeToLocalStorage(value) {
  window.localStorage.setItem('dark', value)
 }


 return {
  dark: getThemeFromLocalStorage(),
  toggleTheme() {
   this.dark = !this.dark
   setThemeToLocalStorage(this.dark)
  },
  menuMobileOpen: false,
  toggleMobileMenu() {
   this.menuMobileOpen = !this.menuMobileOpen
  },
  closeMenuMobile() {
   this.menuMobileOpen = false
  },
  HideMenu: !0,
  toggleDesktopMenu: function toggleDesktopMenu() {
   this.HideMenu = !this.HideMenu;
  },
  openMenu: function openMenu() {
   this.HideMenu = !1;
  },
  // isNotificationsMenuOpen: false,
  // toggleNotificationsMenu() {
  //  this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
  // },
  // closeNotificationsMenu() {
  //  this.isNotificationsMenuOpen = false
  // },
  // isProfileMenuOpen: false,
  // toggleProfileMenu() {
  //  this.isProfileMenuOpen = !this.isProfileMenuOpen
  // },
  // closeProfileMenu() {
  //  this.isProfileMenuOpen = false
  // },
  // isPostMenuOpen: false,
  // togglePostMenu() {
  //  this.isPostMenuOpen = !this.isPostMenuOpen
  // },
  // isGaleriMenuOpen: false,
  // toggleGaleriMenu() {
  //  this.isGaleriMenuOpen = !this.isGaleriMenuOpen
  // },
  // isTeamsMenuOpen: false,
  // toggleTeamsMenu() {
  //  this.isTeamsMenuOpen = !this.isTeamsMenuOpen
  // },
  // isSettingsMenuOpen: false,
  // toggleSettingsMenu() {
  //  this.isSettingsMenuOpen = !this.isSettingsMenuOpen
  // },
  // // Modal
  // isModalOpen: false,
  // trapCleanup: null,
  // openModal() {
  //  this.isModalOpen = true
  //  this.trapCleanup = focusTrap(document.querySelector('#modal'))
  // },
  // closeModal() {
  //  this.isModalOpen = false
  //  this.trapCleanup()
  // },
 }
}

function animasiHeader() {
 return {
  runAnimasi: false,
  cekAnimasiHeader() {
   if (!sessionStorage.getItem("runAnimasiHeader")) {
    this.runAnimasi = true;
    sessionStorage.setItem("runAnimasiHeader", "true");
   }
  }
 };
}
