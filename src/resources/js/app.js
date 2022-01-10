require('./bootstrap');

// input submitのボタンを押したら背景が青くなる処理。
let inputs = document.querySelectorAll('.submit');
inputs.forEach(function(input){
    input.addEventListener('click', function(e){
        console.log(e.target);
        e.target.classList.add('clicked');
    });
});

// タスクの状態によって表示/非表示を切り替える処理
// この処理で使用するオブジェクト(index.blade.php内)を変数へ代入
let status_options = document.querySelectorAll('.status_option');
    // タスクの状態を選ぶラジオボタン
let exist_tasks = document.querySelectorAll('.task');
    // index.blade.php内でループで回している登録したtask

// ラジオボタンから選んだstatusと各taskのstatusを比べて、styleの編集。
// ラジオボタンのクリックイベントで発火。
status_options.forEach(function(status_option){ 
    status_option.addEventListener('click', function(e){

        let selected_status = e.target.getAttribute('value');

        exist_tasks.forEach(function(exist_task){
            task_status = exist_task.querySelector('.task_status').getAttribute('id');
            
            if(selected_status === task_status | selected_status === 'all'){
                exist_task.classList.remove('undisplayed');
            }else{
                exist_task.classList.add('undisplayed');
            }
        })
    });
});