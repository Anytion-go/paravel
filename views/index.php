<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $props['title']; ?></title>
    <link rel="stylesheet" href="/public/styles.css">
</head>

<body>
    <main class="container text-center">
        <h1> <?php echo $props['header']; ?> </h1>
        <p>
            writing PHP with mVc but very simple and lightweight.
        </p>
        <div class="m-3">
            <a oncontextmenu="rightClick(this.href)" target="_blank" href="https://github.com/Anytion-go/paravel#readme" title="right click to open new tab">Read documents at github</a>
            <a oncontextmenu="rightClick(this.href)" target="_blank" href="https://github.com/Anytion-go/paravel/issues" title="right click to open new tab">report bug</a>
            <a oncontextmenu="rightClick(this.href)" href="https://github.com/Anytion-go/paravel" title="right click to open new tab">github repository</a>
        </div>
    </main>
    <script>
        function rightClick(href) {
            window.open(href, "_blank")
        }
    </script>
</body>

</html>