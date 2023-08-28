<x-layout>
    <div class="bg-white rounded-lg flex flex-col w-[88%] shadow-lg p-2">
        @foreach ($posts as $post)
            <a href="/users/chat/post/{{$post->id}}">
                <div class="topic w-full border-b-2 border-gray-200/20 flex flex-col pb-2">
                    <div class="top-user-details flex space-x-2 items-center w-max">
                    <div class="left-img w-8 h-8 relative overflow-hidden">
                            <img src="{{asset('images/user_default.png')}}" alt="" class="w-full h-full rounded-full">
                    </div>
                    {{-- name and time --}}
                    <div class="name-time">
                        <h5 class="text-base leading-normal">{{$post->user->name}}</h5>
                        <h6 class="text-xs leading-normall">{{$post->created_at->diffForHumans() }}</h6>
                    </div>
                    </div>
                    <div class="topic-content ml-10 text-base leading-normal">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </a>
        @endforeach
        
    
     <div class="create-topic-container w-full mx-auto mt-8">
        <a href="/users/chat/create" class="right-btn-area flex justify-center items-center">
            <button type="submit" class="bg-main w-[60%] text-white px-4 py-2 rounded-lg">
                Create a topic
                <i class="fas fa-paper-plane"></i>
            </button>
        </a>
     </div>
     </div>

</x-layout>