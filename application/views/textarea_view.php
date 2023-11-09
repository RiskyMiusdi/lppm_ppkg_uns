<!DOCTYPE html>
<html>

<head>
    <title>Textarea Example</title>
</head>

<body>
    <form method="post" action="<?php echo site_url('your_controller/process_text'); ?>">
        <textarea name="input_text" rows="5" cols="40"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>