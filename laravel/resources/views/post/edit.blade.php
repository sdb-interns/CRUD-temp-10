<x-layout>
    <x-slot name="title">
        投稿編集ページ
    </x-slot>
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        {{--todo:csrfトークンについて理解--}}
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">投稿名</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$post->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">テキスト</label>
            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" name="text" value="{{$post->text}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputUser" class="form-label">ユーザーを選択する</label>
            <select id="exampleInputUser" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</x-layout>
