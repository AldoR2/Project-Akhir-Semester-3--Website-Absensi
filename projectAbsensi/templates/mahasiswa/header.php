<header class="header">
      <nav class="nav container">
         <div class="nav__data">
            <a href="#" class="nav__logo">
               <img src="../../assets/img/logoStikes.png" alt="logo-stikes-panti-waluyo" width="230px"
                  height="50px">
            </a>

            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line nav__burger"></i>
               <i class="ri-close-line nav__close"></i>
            </div>
         </div>

         <!--=============== NAV MENU ===============-->
         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li><a href="home.php" class="nav__link">Home</a></li>

               <!-- Dropdown Absensi -->
               <li><a href="dataAbsensi.php" class="nav__link">Absensi</a></li>

               <!-- Dropdown Matkul -->
               <li class="dropdown__item">
                  <div class="nav__link">
                     Matkul <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                  </div>

                  <ul class="dropdown__menu">
                     <li>
                        <a href="jadwal.php" class="dropdown__link">
                           <i class="ri-add-circle-line"></i> Jadwal Kuliah
                        </a>
                     </li>

                     <li>
                        <a href="dataMatkul.php" class="dropdown__link">
                           <i class="ri-edit-2-line"></i> Data Matkul
                        </a>
                     </li>
                  </ul>
               </li>

               <!-- Dropdown Users -->
               <li class="dropdown__item">
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