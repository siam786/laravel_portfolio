<!-- MOBILE MENU -->
<div class="orido_tm_mobile_menu w-full h-auto fixed top-0 left-0 hidden z-[10] middle:block">
    <div class="mobile_menu_inner w-full h-auto float-left clear-both bg-white py-[10px] px-[20px]">
        <div class="mobile_in w-full h-auto clear-both float-left flex items-center justify-between">
            <div class="logo">
                <a href="{{ route('home') }}"><img class="max-w-[90px] max-h-[70px]" src="assets/img/logo/siam.png"
                        alt="" /></a>
            </div>
            <div class="trigger leading-[0]">
                <div class="hamburger hamburger--slider">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown w-full h-auto clear-both float-left bg-white hidden">
        <div class="dropdown_inner w-full h-auto clear-both float-left py-[25px] px-[20px]">
            <ul class="anchor_nav">
                <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium"
                    href="{{ route('home') }}">Home</a></li>
                <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium"
                        href="{{ route('about') }}">About Me</a></li>
                {{-- <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium"
                        href="#service">Service</a></li> --}}
                <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium"
                        href="{{ route('project') }}">Projects</a></li>
                {{-- <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium" href="#blog">Blog</a>
                </li> --}}
                <li class="float-left w-full"><a class="text-black inline-block p-0 font-medium"
                        href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /MOBILE MENU -->

<!-- HEADER -->
<div
    class="orido_tm_header fixed top-0 left-0 right-0 z-[10] py-[25px] px-[150px] transition-all duration-300 middle:hidden">
    <div class="header_in w-full flex items-center justify-between">
        <div class="logo">
            <a href="{{ route('home') }}"><img class="max-w-[170px] max-h-[90px]"
                    src="{{ asset('assets/img/logo/siam.png') }}" alt="" /></a>
        </div>
        <div class="menu relative">
            <ul class="anchor_nav flex items-center" style>
                <li style="text-white" class="mr-[50px]"><a class="text-[#fff]" href="{{ route('home') }}">Home</a></li>
                <li  class="mr-[50px]"><a class="text-[#fff]" href="{{ route('about') }}">About Me</a></li>
                {{-- <li class="mr-[50px]"><a class="text-[#fff]" href="#service">Service</a></li> --}}
                <li class="mr-[50px]"><a class="text-[#fff]" href="{{ route('project') }}">Projects</a></li>
                {{-- <li class="mr-[50px]"><a class="text-[#fff]" href="#blog">Blog</a></li> --}}
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <span class="ccc"></span>
        </div>
        {{-- <div class="button"><a class="text-main-color font-bold font-dm inline-block rounded-[18px] px-[40px] pt-[17px] pb-[18px] transition-all duration-300" href="https://themeforest.net/user/marketify/portfolio" target="_blank">Purchase Now</a></div> --}}
    </div>
</div>
<!-- /HEADER -->
