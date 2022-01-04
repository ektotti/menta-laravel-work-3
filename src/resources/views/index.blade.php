<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>
</head>
<body>
    <h1>ToDoリスト</h1>
    <div class="status">
        <input type="radio" name="status" id="all" value="" checked>
        <label for="all">すべて</label>
        <input type="radio" name="status" id="prosessing" value="">
        <label for="prosessing">作業中</label>
        <input type="radio" name="status" id="done" value="">
        <label for="done">完了</label>
    </div>
    <table>
        <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
        @isset($tasks)
        @foreach($tasks as $task)
        <tr><td>{{$loop->index}}</td><td>{{$task->comment}}</td><td><button>作業中</button></td><td><button>削除</button></td></tr>
        @endforeach
        @endisset
    </table>
    <div>
        <h2>新規タスクの追加</h2>
        <form action="" method="post">
            @csrf
            <input type="text" name="comment" id="comment">
            <input type="submit" value="追加">
        </form>
    </div>
</body>
</html>