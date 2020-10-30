@if (count($errors) > 0)
    <div>
        <P>
            <b>[エラー内容]</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>新規論文投稿</h1>
<form action="/tasks" method="post">
    @csrf
    <p>
        <b>論文タイトル</b>
    </p>
    <input type="string" name="title"  value ="{{ old('title') }}";><br>

    <p>
        <b>本文</b><br>
        <input type="text" name="body"  value ="{{ old('body') }}";>
    </p>
    
    
    <input type="submit" value="更新">
</form>

<a href="/tasks/{{ $task->id }}"><button>詳細に戻る</button></a>
