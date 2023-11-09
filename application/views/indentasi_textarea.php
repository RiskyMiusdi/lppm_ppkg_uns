<!DOCTYPE html>
<html>

<head>
    <title>Textarea Example</title>
    <style>
        /* Tambahkan gaya CSS untuk indentasi */
        .indented-textarea {
            padding: 10px;
            white-space: pre-line;
            /* Memastikan indentasi tetap terjaga */
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo site_url('indentasi/process_text'); ?>">
        <!-- Tambahkan class "indented-textarea" untuk textarea -->
        <textarea name="input_text" rows="5" cols="40" class="indented-textarea"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>