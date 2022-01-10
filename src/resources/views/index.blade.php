<?php use App\task; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>TodoApp</title>
</head>
<body>
    <h1>ToDoリスト</h1>
    <div class="status">
        <input class="status_option" type="radio" name="status" id="all" value="all" checked>
        <label for="all">すべて</label>
        <input class="status_option" type="radio" name="status" id="work" value="{{task::$status['work']}}">
        <label for="work">作業中</label>
        <input class="status_option" type="radio" name="status" id="complete" value="{{task::$status['complete']}}">
        <label for="complete">完了</label>
    </div>
    <table>
        <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
        @isset($tasks)
            @foreach($tasks as $task)
                @php
                    $status = $task->status === task::$status['work'] ? '作業中' : '完了';
                @endphp
                <tr class="task">
                    <td>{{$loop->index}}</td>
                    <td>{{$task->comment}}</td>
                    <form action="/tasks/{{$task->id}}" method="POST">
                        @csrf
                        @method('patch')
                        <td><input class="submit task_status" type="submit" name="status" id="{{$task->status}}" value="{{$status}}"></td>
                    </form>
                    <form action="/tasks/{{$task->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <td><input class="submit" type="submit" value="削除"></td>
                    </form>
                </tr>
            @endforeach
        @endisset
    </table>
    <div>
        <h2>新規タスクの追加</h2>
        <form action="" method="post">
            @csrf
            <input type="text" name="comment" id="comment">
            <input class="submit" type="submit" value="追加">
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>