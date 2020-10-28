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
    <br>
    
    <textarea name="body"  value ="{{ old('body') }}";></textarea>
    <br>
    <input type="submit" value="投稿" >
    {{-- value ="{{old('')}}" --}}
    {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
</form>
