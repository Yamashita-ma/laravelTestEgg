<x-layout>
    <h2 class="title">新しい投稿の追加</h2>
    <form method = "post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
            <label class="create-label">
                タイトル
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
            <label class="create-label">
                内容
                <textarea name="body" cols="30" rows="10">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
            <label class="create-label">
                <input type="file" name="image_file_name">
            </label>
            <div class="form_btn">
                <button>OK！</button>
            </div>
    </form>

</x-layout>


