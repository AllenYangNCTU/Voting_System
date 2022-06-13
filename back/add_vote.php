<form action="../api/add_vote.php" method="post">
    <div>
        <label for="subject">Theme</label>
        <input type="text" name="subject" id="subject">
        <input type="button" value="add option" onclick="more()">
    </div>
    <div id="options">
        <div>
            <label>Option</label><input type="text" name="option[]">
        </div>
    </div>
    <input type="submit" value="add option">

</form>
<script>
function more() {
    let opt = `<div><label>Option:</label><input type="text" name="option[]"></div>`;
    let opts = document.getElementById('options').innerHTML;
    opts = opts + opt;
    document.getElementById('options').innerHTML = opts;
}
</script>