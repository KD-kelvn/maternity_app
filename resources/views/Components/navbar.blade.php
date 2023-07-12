<nav class="flex z-10 shadow-sm flex-row fixed top-0 left-0 right-0 items-center justify-between w-full py-6 px-4  bg-white overflow-hidden">
  <a  href="/" class="text-2xl mr-8 font-bold">Maternity</a>

  <form action="{{ route('search') }}" class="hidden md:block md:w-[56%]">
      <div class="relative overflow-hidden search-container flex lg:flex-row space-x-1 bg-slate-100 pr-2 rounded-lg">
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Search anything here..." class="h-10 w-full pl-3 pr-5 z-0 focus:shadow focus:outline-none bg-slate-100">
          <button type="submit" class="bg-transparent border-0 outline-none"><i class="fa fa-search text-gray-500 z-20 hover:text-gray-500"></i></button>
      </div>
  </form>  
  <a href="/profile/show" class="user flex items-center justify-end md:w-[10%] space-x-2">
      <img src="{{ asset('images/user_default.png') }}" alt="user" class="rounded-full md:w-[20%] md:h-[20%]">
  </a>
</nav>
