<style>
   /* ============== START NAVBAR ==================== */
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #0693e3;
  box-shadow: 0 2px 16px hsla(220, 32%, 8%, .3);
  z-index: var(--z-fixed);
}

.nav {
  height: var(--header-height);
}

.nav__logo,
.nav__burger,
.nav__close {
  color: var(--white-color);
}

.nav__data {
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__logo {
  display: inline-flex;
  align-items: center;
  column-gap: .25rem;
  font-weight: var(--font-semi-bold);
}

.nav__logo i {
  font-weight: initial;
  font-size: 1.25rem;
}

.nav__toggle {
  position: relative;
  width: 32px;
  height: 32px;
}

.nav__burger,
.nav__close {
  position: absolute;
  width: max-content;
  height: max-content;
  inset: 0;
  margin: auto;
  font-size: 1.25rem;
  cursor: pointer;
  transition: opacity .1s, transform .4s;
}

.nav__close {
  opacity: 0;
}

/* Navigation for mobile devices */
@media screen and (max-width: 1118px) {
  .nav__menu {
    position: absolute;
    left: 0;
    top: 2.5rem;
    width: 100%;
    height: calc(100vh - 3.5rem);
    overflow: auto;
    pointer-events: none;
    opacity: 0;
    transition: top .4s, opacity .3s;
  }

  .nav__menu::-webkit-scrollbar {
    width: 0;
  }

  .nav__list {
    background-color: #0693e3;
    padding-top: 1rem;
  }
}

.nav__link {
  color: var(--white-color);
  background-color: #0693e3;
  font-weight: var(--font-semi-bold);
  padding: 1.25rem 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background-color .3s;
}

.nav__link:hover {
  background-color: #004b76;
}

/* Show menu */
.show-menu {
  opacity: 1;
  top: 3.5rem;
  pointer-events: initial;
}

/* Show icon */
.show-icon .nav__burger {
  opacity: 0;
  transform: rotate(90deg);
}

.show-icon .nav__close {
  opacity: 1;
  transform: rotate(90deg);
}

/*=============== Dropdown Navbar ===============*/
.dropdown__item {
  cursor: pointer;
}

.dropdown__arrow {
  font-size: 1.25rem;
  font-weight: initial;
  transition: transform .4s;
}

.dropdown__link,
.dropdown__sublink {
  padding: 1.25rem 1.25rem 1.25rem 2.5rem;
  color: var(--white-color);
  background-color: #004b76;
  display: flex;
  align-items: center;
  column-gap: .5rem;
  font-weight: var(--font-semi-bold);
  transition: background-color .3s;
}

.dropdown__link i,
.dropdown__sublink i {
  font-size: 1.25rem;
  font-weight: initial;
}

.dropdown__link:hover,
.dropdown__sublink:hover {
  background-color: #0693e3;
}

.dropdown__menu,
.dropdown__submenu {
  max-height: 0;
  overflow: hidden;
  transition: max-height .4s ease-out;
}

/* Show dropdown menu & submenu */
.dropdown__item:hover .dropdown__menu,
.dropdown__subitem:hover>.dropdown__submenu {
  max-height: 1000px;
  transition: max-height .4s ease-in;
}

/* Rotate dropdown icon */
.dropdown__item:hover .dropdown__arrow {
  transform: rotate(180deg);
}

/* For small devices */
@media screen and (max-width: 340px) {
  .container {
    margin-inline: 1rem;
  }

  .nav__link {
    padding-inline: 1rem;
  }
}

/* For large devices */
@media screen and (min-width: 1118px) {
  .container {
    margin-inline: auto;
  }

  .nav {
    height: calc(var(--header-height) + 2rem);
    display: flex;
    justify-content: space-between;
  }

  .nav__toggle {
    display: none;
  }

  .nav__list {
    height: 100%;
    display: flex;
    column-gap: 3rem;
  }

  .nav__link {
    height: 100%;
    padding: 0;
    justify-content: initial;
    column-gap: .25rem;
  }

  .nav__link:hover {
    background-color: transparent;
  }

  .dropdown__item,
  .dropdown__subitem {
    position: relative;
  }

  .dropdown__menu,
  .dropdown__submenu {
    max-height: initial;
    overflow: initial;
    position: absolute;
    left: 0;
    top: 6rem;
    opacity: 0;
    pointer-events: none;
    transition: opacity .3s, top .3s;
  }

  .dropdown__link,
  .dropdown__sublink {
    padding-inline: 1rem 3.5rem;
  }

  .dropdown__subitem .dropdown__link {
    padding-inline: 1rem;
  }

  .dropdown__submenu {
    position: absolute;
    left: 100%;
    top: .5rem;
  }

  /* Show dropdown menu */
  .dropdown__item:hover .dropdown__menu {
    opacity: 1;
    top: 5.5rem;
    pointer-events: initial;
    transition: top .3s;
  }

  /* Show dropdown submenu */
  .dropdown__subitem:hover>.dropdown__submenu {
    opacity: 1;
    top: 0;
    pointer-events: initial;
    transition: top .3s;
  }
}
/* ================== END NAVBAR =================== */
</style>

<header class="header">
   <nav class="nav container">
      <div class="nav__data">
         <a href="#" class="nav__logo">
            <img src="../../assets/img/logoStikes.png" alt="logo-stikes-panti-waluyo" width="230px" height="50px">
         </a>
         
         <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line nav__burger"></i>
            <i class="ri-close-line nav__close"></i>
         </div>
      </div>

      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
         <ul class="nav__list">
            <li><a href="index.php" class="nav__link">Home</a></li>
            <li><a href="absensi.php" class="nav__link">Absensi</a></li>

            <!-- Dropdown Mahasiswa -->
            <li class="dropdown__item">
               <div class="nav__link">
                  Mahasiswa <i class="ri-arrow-down-s-line dropdown__arrow"></i>
               </div>
               <ul class="dropdown__menu">
                  <li>
                     <a href="formMhs.php" class="dropdown__link">
                        <i class="ri-add-circle-line"></i> Tambah Mahasiswa
                     </a>
                  </li>
                  <li>
                     <a href="dataMhs.php" class="dropdown__link">
                        <i class="ri-edit-2-line"></i> Data Mahasiswa
                     </a>
                  </li>
               </ul>
            </li>

            <!-- Dropdown Dosen -->
            <li class="dropdown__item">
               <div class="nav__link">
                  Dosen <i class="ri-arrow-down-s-line dropdown__arrow"></i>
               </div>
               <ul class="dropdown__menu">
                  <li>
                     <a href="formDosen.php" class="dropdown__link">
                        <i class="ri-add-circle-line"></i> Tambah Dosen
                     </a>
                  </li>
                  <li>
                     <a href="dataDosen.php" class="dropdown__link">
                        <i class="ri-edit-2-line"></i> Data Dosen
                     </a>
                  </li>
               </ul>
            </li>

            <!-- Dropdown Matkul -->
            <li class="dropdown__item">
               <div class="nav__link">
                  Matkul <i class="ri-arrow-down-s-line dropdown__arrow"></i>
               </div>
               <ul class="dropdown__menu">
                  <li>
                     <a href="formMatkul.php" class="dropdown__link">
                        <i class="ri-add-circle-line"></i> Tambah Matkul
                     </a>
                  </li>
                  <li>
                     <a href="dataMatkul.php" class="dropdown__link">
                        <i class="ri-edit-2-line"></i> Data Matkul
                     </a>
                  </li>
               </ul>
            </li>

            <li><a href="laporanAbsensi.php" class="nav__link">Laporan Absensi</a></li>

            <!-- Dropdown Users -->
            <li class="dropdown__item users">
               <div class="nav__link">
                  Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
               </div>
               <ul class="dropdown__menu">
                  <li>
                     <a href="ubahPW.php" class="dropdown__link">
                        <i class="ri-user-line"></i> Ubah Password
                     </a>
                  </li>
                  <li>
                     <a href="../../../index.html" class="dropdown__link">
                        <i class="ri-logout-circle-line"></i> LogOut
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</header>
