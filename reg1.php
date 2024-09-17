<?php
echo "my name is:"$POST["Name"]"<br>"
echo "my email is:"$POST["Email"]"<br>"
echo "my password is:"$POST["password"]"<br>"
echo "my gender is:"$POST["Gender"]"<br>"
echo "languages known:"
for each($_POST["language"] as $_lang) {
echo $_lang."";
}
echo "<br>"
echo "selected course:" $_POST["course"]."<br>";