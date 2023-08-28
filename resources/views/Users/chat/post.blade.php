<x-layout>
    <div class="bg-white rounded-lg flex flex-col w-[88%] shadow-lg p-2">
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
        
     <div class="flex flex-col w-full border-2 border-gray-400/20 rounded-lg pt-2 mx-auto pb-4 px-2">
        <h3 class="text-lg text-gray-700 font-semibold leading-normal mb-2">Community response</h3>


        @if (!empty($comments))
        @foreach ($comments as $comment)
          <div class="mt-2 border-b-[2px] pb-2 border-gray-200 last:border-b-0">
            <div class="flex space-x-2 items-center">
              <div class="w-7 h-7 relative overflow-hidden">
                <img src="{{asset('images/user_default.png')}}" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex items-center w-max space-x-2">
                <h5 class="text-sm">{{$comment->user->name}}</h5>
                <h6 class="text-xs text-gray-600">{{$comment->created_at->diffForHumans()}}</h6>
              </div>
            </div>
            <div class="ml-10 text-sm">
              <p>{{$comment->content}}</p>
            </div>
          </div>
        @endforeach
    @else
      <p class="text-center">No comment yet</p>
    @endif


      
    {{-- form to add comment --}}
        <form  action="{{route('comment.store', ['id' => $post->id])}}" method="post" class="flex space-x-2 mt-4">
            @csrf
            <div class="left-txt-area-file-input flex w-[88%] px-2 py-1 rounded-lg border-2 border-gray-100 ">
                <div class="left-txt-area flex flex-col w-full">
                    <textarea name="comment" id="topic" cols="1" rows="1" class="w-full h-full border-none outline-none resize-none" placeholder="Type your comment here..."></textarea>
                </div>
                @if ($errors->has('comment'))
                                <div class="error text-danger">
                                {{ $errors->first('comment')}}
                                </div>
                 @endif
            </div>
            <div class="right-btn-area flex justify-center items-center w-[12]">
                <button type="submit" class="bg-main/90 text-white px-4 py-2 rounded-lg w-full">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>


     </div>

     {{-- a link to access creating post --}}
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