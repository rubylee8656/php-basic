<?php require __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form name="form1" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="email" 
                            name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="mydate" class="form-label">日期</label>
                            <input type="date" class="form-control" id="mydate" name="mydate">
                        </div>
                        <div class="mb-3">
                            <label for="mydatetime" class="form-label">日期+時間</label>
                            <input type="datetime-local" class="form-control" id="mydatetime" name="mydatetime">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="cb" name="cb" value="yes">
                            <label class="form-check-label" for="cb">本站最高</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

            <pre><?php print_r($_POST) ?></pre>
        </div>
    </div>


</div>
<?php include __DIR__ . '/parts/script.php'; ?>

<?php include __DIR__ . '/parts/html-foot.php'; ?>