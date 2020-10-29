<div>
    <P>
        <b>[エラー内容]</b>
    </P>
    @if (count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
<h1>タスク一覧</h1>


@foreach ($tasks as $task)
<form action="/tasks" method="post">
    @csrf
    <div style="display:inline-flex">
        <li style="list-style: none;">
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
        </li>
    </form>
    <form action ="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </div>
</form>
@endforeach

{{-- <input type="submit" value="新規論文投稿"> --}}
{{-- <a href="/tasks/{{ $task->id }}/"><button>新規論文投稿</button></a> --}}
{{-- <a href="/articles/create">投稿する</a> --}}
<hr>








<h1>新規論文投稿</h1>

<form action="/tasks" method="post">
    @csrf
    <p>
        <b>論文タイトル</b>
    </p>
    
    <input type="string" name="title"  value ="{{ old('title') }}";><br>
    
    <p>
        <b>本文</b>
    </p>
    
    <textarea name="body"  value ="{{ old('body') }}";></textarea>
    <br>
    <input type="submit" value="Create task" >
    {{-- value ="{{old('')}}" --}}
    {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
</form>
