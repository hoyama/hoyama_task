<h1>タスク詳細</h1>

<b>タイトル:{{ $task->title }}</b>
<br>

<b>内容:{{ $task->body }}</b>
<br>

<div style="display:inline-flex">
    <a href="/tasks"><button>一覧へ戻る</button></a>
    <a href="/tasks/{{ $task->id }}/edit"><button>編集する</button></a>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form>
</div>
