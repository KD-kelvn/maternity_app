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