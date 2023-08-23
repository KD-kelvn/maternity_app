<div class="topic w-full border-b-2 border-gray-200/20 flex flex-col pb-2">
   <div class="top-user-details flex space-x-2 items-center w-max">
      <div class="left-img w-8 h-8 relative overflow-hidden">
            <img src="{{asset('images/user_default.png')}}" alt="" class="w-full h-full rounded-full">
      </div>
      {{-- name and time --}}
      <div class="name-time">
        <h5 class="text-base leading-normal">{{$discussion->sender->name ?? "kevoo"}}</h5>
        <h6 class="text-xs leading-normall">{{$discussion->sendAt ?? "6 minutes ago"}}</h6>
      </div>
   </div>
    <div class="topic-content ml-10 text-base leading-normal">
        <p>{{$discussion->topic ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."}}</p>
    </div>
</div>