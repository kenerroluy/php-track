<style>
    * {
        padding: 0;
        margin: 0;
        /* outline: 0.1px solid black; */
    }

    .wrapper {
        margin: 0 auto;
        border: 1px solid black;
        border-radius: 20px;
        padding: 10px;
        width: 400px;
        min-height: 300px;
    }

    h1 {
        text-align: center;
    }

    form {
        padding: 20px 40px
    }

    form input {
        margin: 10px 0;
        display: block;
    }

    .input_name {
        padding: 5px;
        width: 150px;
        height: 30px;
    }

    select {
        text-align: center;
        display: block;
        margin: 10px 0;
    }

    #course {
        width: 150px;
        height: 30px;
    }

    #score {
        height: 30px;
    }

    textarea {
        padding: 5px;
        width: 100%;
        height: 50px;
        margin: 10px 0;
        display: block;
    }

    input {
        width: 70px;
        height: 30px
    }

    #submit_btn {
        margin-top: 30px;
        margin-left: 250px
    }
</style>
<div class="wrapper">
    <h1>Feedback Form</h1>
    <form action='index2.php' method='POST'>
        <label>Your Name (optional): <input type='text' name='name' class="input_name">
        </label>
        <label for="course">Course Title:</label>
        <select name="course" id="course">
            <option value="Web Fundamental">Web Fundamental</option>
            <option value="PHP Track">PHP Track</option>
            <option value="Jquery Track">JQuery Track</option>
            <option value="Python Track">Python track</option>
        </select>
        <label for="rate">Given Score (1-10):</label>
        <select name="score" id="score">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <option value=<?='"' . $i . '"' ?>><?= $i ?></option>
            <?php } ?>
        </select>
        <label>Reason:
            <textarea type="text" name="reason"></textarea>
        </label>
        <input type="submit" name="submit" id="submit_btn" Placeholder="Submit">
    </form>
</div>