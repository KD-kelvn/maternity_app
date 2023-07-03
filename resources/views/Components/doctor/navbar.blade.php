<nav class="flex z-10 shadow-sm flex-row fixed top-0 left-0 right-0 items-center justify-between w-full py-6 px-4  bg-white overflow-hidden">
    <a  href="/" class="text-2xl mr-8 font-bold">Maternity</a>
 
    <div class="date-wrapper flex items-center">
      <div class="date">
        <h3 class="text-sm text-gray-500 font-semibold">Today`s date</h3>
        <div class="time text-2xl font-bold">
          <span class="day">{{date('d')}}</span>
          <span class="month">{{date('M')}}</span>
          <span class="year">{{date('Y')}}</span>
          {{-- calender icon --}}
         
        </div>
      </div>
     
      <svg class="w-10 h-10 ml-2 bg-gray-200 p-2 rounded-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 4a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V6c0-1.1.9-2 2-2h14zM5 2a2 2 0 00-2 2v1h18V4a2 2 0 00-2-2H5z"/><path d="M2 10h20v9a2 2 0 01-2 2H4a2 2 0 01-2-2v-9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h8"/></svg>
    </div>

 
</nav>