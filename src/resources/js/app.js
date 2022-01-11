require('./bootstrap');

// input submitのボタンを押したら背景が青くなる処理。
const inputs = document.querySelectorAll('.submit');
inputs.forEach(function(input) {
    input.addEventListener('click', function(e) {
        console.log(e.target);
        e.target.classList.add('clicked');
    });
});

// タスクの状態によって表示/非表示を切り替える処理
// この処理で使用するオブジェクト(index.blade.php内)を変数へ代入
const statusOptions = document.querySelectorAll('.status_option');
    // タスクの状態を選ぶラジオボタン
const existTasks = document.querySelectorAll('.task');
    // index.blade.php内でループで回している登録したtask

// ラジオボタンから選んだstatusと各taskのstatusを比べて、styleの編集。
// ラジオボタンのクリックイベントで発火。
statusOptions.forEach(function(statusOption) { 
    statusOption.addEventListener('click', function(e) {

        let selectedStatus = e.target.getAttribute('value');

        existTasks.forEach(function(existTask) {
            task_status = existTask.querySelector('.task_status').getAttribute('id');
            
            if(selectedStatus === task_status | selectedStatus === 'all') {
                existTask.classList.remove('undisplayed');
            }else {
                existTask.classList.add('undisplayed');
            }
        })
    });
});