<?php require __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">登入</h5>

                    <form name="form1" onsubmit="checkForm(); return false;">
                        <div class="mb-3">
                            <label for="account" class="form-label">帳號</label>
                            <input type="text" class="form-control" id="account" 
                            name="account">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">密碼</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>
<?php include __DIR__ . '/parts/script.php'; ?>
<script>

function checkForm(){

    const fd = new FormData(document.form1);

// fetch 第一個參數是url 第二個參數是設定物件

    //用json改寫箭頭函式
    fetch('login-api.php',{
        method:'POST',
        body:fd,  //直接會設定content-type form 
    })
    .then(r=> r.json())
    .then(obj=>{
        console.log(obj);
    })


    // fetch('login-api.php',{
    //     method:'POST',
    //     body:fd,  //直接會設定content-type form 
    // }).then(function(response){
    //     return response.text();
    //     // return response.json();
    // }).then(function(result){
    //     console.log(result);
    // })
}

// https://www.youtube.com/watch?v=FH4S4Kx5JPg
// https://www.youtube.com/watch?v=9BB9Gl3VTYc


</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>