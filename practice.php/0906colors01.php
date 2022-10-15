<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>
    <input type="text" id="info" readonly>
    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 16; $k++) : ?>
                    <td style="background-color: <?= sprintf("#00%X%X%X%X", $i, $i, $k, $k) ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <script>
        const table = document.querySelector("table");

        // table.addEventListener("mouseover", event=>{
        //     const target = event.target;
        //     // info.value = target.style.backgroundColor;
        //     info.value = target.getAttribute("style");
        // });
        table.addEventListener("mouseover", e => info.value = e.target.getAttribute("style") //省略時後面分號記得要拿掉 因為現在小括號裡當參數
        );

    </script>
</body>

</html>