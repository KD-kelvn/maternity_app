<x-navbar/>
<div class="app relative flex w-full">
<x-sidebar/>
    <div class="app-center-container flex flex-col mt-[8%] ml-[19%] w-[52%]">
        {{$slot}}
    </div>
 <x-suggestions/>
</div>