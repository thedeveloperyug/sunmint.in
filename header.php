<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/output.css" rel="stylesheet">
  <script src="js/script.js"></script>
  <link href="css/style2.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>

  <section>
    <div class="relative bg-white overflow-hidden">
      <div class="max-w-full  mx-auto">
        <div class="relative z-20 sm:pb-16 md:pb-20  lg:w-full lg:pb-8 xl:pb-6">
          <div class="">
            <div class="relative pt-8 px-4 sm:px-6">
              <nav class="relative flex items-center justify-items-between  sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="index.php">
                      <span class="sr-only">Logo</span>
                      <img alt="Workflow" class="h-14 lg:h-16 w-auto sm:h-10" src="images/sunmintlogo.png">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                      <button type="button" onclick='myfun();' class="mnu bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <!---------------------- navigation buttons--------------- -->
                <div class="hidden md:block text-lg flex-row justify-around md:ml-10 md:pr-4 md:space-x-4 ">
                  <a href="#aboutus" class="uppercase font-medium text-gray-600 hover:text-orange-600">About Us</a>
                  <a href="#services" class="uppercase font-medium text-gray-600 hover:text-orange-600">Services</a>
                  <a href="#products" class="uppercase font-medium text-gray-600 hover:text-orange-600">Products</a> 
                    <a href="#ourbrands" class="uppercase font-medium text-gray-600 hover:text-orange-600">our brands</a>

                  <a href="#ourteam" class="uppercase font-medium text-gray-600 hover:text-orange-600">TEAM</a>
                  <a href="#ourclient" class="uppercase font-medium text-gray-600 hover:text-orange-600">CLIENTS</a>
                  <span> </span>
                  <!-- <span class=" "> -->
                  <a href="https://www.youtube.com/channel/UC70fgOCpkWW028yMQ4kSKaA" class=" inline-block"> <svg version="1.1" class="h-8 relative opacity-70  ml-96 -right-72 -my-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 461.001 461.001" style="enable-background:new 0 0 461.001 461.001;" xml:space="preserve">
                    <g>
                        <path style="fill:#F61C0D;" d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
                    c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
                    C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
                    c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z" />
                    </g>

                </svg></a>
                <!-- </span> -->

                </div>
              </nav>
            </div>

            <div class="mnulist fixed -top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" id='navbarNav'>
              <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <div>
                    <img class="h-8 w-auto" src="images/sunmintlogo.png" alt="">
                  </div>
                  <div class="-mr-2">
                    <button type="button" onclick='myfun()' class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                      <span class="sr-only">Close main menu</span>
                      <!-- Heroicon name: outline/x -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">

                  <a href="#aboutus" class="block px-3 py-2 rounded-md text-base font-medium uppercase text-gray-700 hover:text-gray-900 hover:bg-gray-50">About Us</a>

                  <a href="#services" class="block px-3 py-2 rounded-md text-base uppercase  font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Services</a>

                  <a href="#ourbrands" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 uppercase ">our brands</a>
                  <a href="#products" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 uppercase ">Products</a>
                  <a href="#ourteam" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 uppercase ">TEAM</a>
                  <a href="#ourclient" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 uppercase ">CLIENTS</a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


























  <!-- <header class=" body-font h-screen">

    <section id="navbar" class="flex drop-shadow-xl z-20 bg-orange-400">
      <div class=" justify-start mt-6 px-10">
        <img alt="feature" class="object-cover contrast-100 invert object-center h-20 w-full" src="images/sunmintlogo.png">
 
      </div>

      <div class="font-thin py-8 mx-auto flex justify-center text-center">
        <a href="javascript:void(0)">
          <p class="text-2xl uppercase text- "> Engineering</p>
        </a>
        <a href="javascript:void(0)">
          <p class="text-2xl uppercase"> DESIGN & PROTOTYPING</p>
        </a>
        <a href="javascript:void(0)">
          <p class="text-2xl uppercase"> RESEARCH & STRATEGY</p>
        </a>
      </div>
      <div></div>
    </section>



  </header> -->






  <!-- 
  <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script> -->





  <script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>


  <!---------------------------Modals js ----------------------------------->
  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.modal-button");

    // All page modals
    var modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");

    // When the user clicks the button, open the modal
    for (var i = 0; i < btn.length; i++) {
      btn[i].onclick = function(e) {
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        modal.style.display = "block";
      }
    }

    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
      spans[i].onclick = function() {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
      }
    }
  </script>