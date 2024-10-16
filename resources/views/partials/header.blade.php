<nav
  class="relative flex w-full items-center justify-between 
  bg-AlgoBlue-100 py-2 text-white-500 hover:text-neutral-700 focus:text-neutral-700
  dark:bg-neutral-700 lg:py-4"
  data-twe-navbar-ref>
  
  <!-- Logo container -->
  <div class="flex-none px-3">
    <a href="{{route('home')}}">
      <img src="{{asset("./images/logoAlgoMarineWhite.png")}}" alt="Logo" class="h-10 w-auto">
    </a>
  </div>
  
  <!-- Navbar links container -->
  <div class="flex-grow flex justify-end items-center">
    <!-- Collapsible navbar container -->
    <div
      class="!visible hidden flex-grow basis-[100%] items-center justify-end lg:!flex lg:basis-auto"
      id="navbarSupportedContent2"
      data-twe-collapse-item>
      
      <!-- Navbar links -->
      <ul class="list-style-none flex flex-col ps-0 lg:flex-row lg:ml-auto text-right">
        <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
          <a class="text-black dark:text-white lg:px-2" href="#" aria-current="page">
            1
          </a>
        </li>
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0">
          <a class="p-0 text-black/60 transition duration-200 hover:text-black/80 dark:text-white/60 dark:hover:text-white/80 lg:px-2" href="#">
            2
          </a>
        </li>
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0">
          <a class="p-0 text-black/60 transition duration-200 hover:text-black/80 dark:text-white/60 dark:hover:text-white/80 lg:px-2" href="#">
            3
          </a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
