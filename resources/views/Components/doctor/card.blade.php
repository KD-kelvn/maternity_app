@props(['data'])
<div class="card border border-gray-200 rounded-md flex flex-col p-2">
    <div class="icon-wrapper bg-gray-200 rounded-md p-2 text-center w-[30%] mb-4">
        <i class="{{$data['icon']}} text-4xl text-sky-500"></i>
      </div>
   <div class="data">
     <h2 class="font-bold text-5xl text-sky-500">{{$data['total']}}</>
     <h2 class="text-2xl font-semibold">{{$data['title']}}</h2>
   </div>
  
</div>