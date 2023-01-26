<style>
    * {
        padding: 0;
        margin: 0;
    }

    .wrapper {
        margin: 0 auto;
        border: 1px solid black;
        border-radius: 20px;
        padding: 20px;
        width: 400px;
        min-height: 300px;
    }

    h1 {
        margin: 10px;
        text-align: center;
    }

    div {
        margin: 20px 40px;
    }

    h4,
    p {
        display: inline-block;
    }

    p {
        margin-left: 30px;
    }

    form {
        margin-left: 40px;
    }

    input {
        width: 70px;
        height: 30px;
    }
</style>

<body>
    <div class="wrapper">
        <h1> Submitted Entry</h1>
        <div>
            <h4>Your Name (optional):</h4>
            <p>
                <?= $_POST['name'] ?>
            </p>
        </div>
        <div>
            <h4>Course Title:</h4>
            <p>
                <?= $_POST['course'] ?>
            </p>
        </div>
        <div>
            <h4>Given Score:</h4>
            <p>
                <?= $_POST['score'] ?>
            </p>
        </div>
        <div>
            <h4>Reason:</h4>
            <p>
                <?= $_POST['reason'] ?>
            </p>
        </div>
        <form>
            <input type="button" value="Return" onclick="history.back()">
        </form>
    </div>
</body>