<?php require __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form name="form1" method="post" action="" enctype="multipart/form-data" 
                        onsubmit="return checkForm();">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="email" 
                            name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="cb" name="cb" value="yes">
                            <label class="form-check-label" for="cb">本站最高</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                    <a href="https://shopping.pchome.com.tw/" 
                        onclick="confirm('買') ? null : event.preventDefault()">shopping</a>
                        <br>

                    <a href="https://shopping.pchome.com.tw/" 
                        onclick="return false;">shopping</a>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include __DIR__ . '/parts/script.php'; ?>
<script>

function checkForm(){
    console.log(cb.checked);
    if(!cb.checked){
        alert('請勾選[本站最高]');
        return false;
    }
}
/*
document.forms
document.form1
document.form1.elements
document.form1.elements[0]
document.form1.elements['email']
document.form1.email
*/
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>