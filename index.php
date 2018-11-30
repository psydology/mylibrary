<!-- a library created by Ahmed Essam @(ae.programe@gmailcom)
     This library is meant to be used either for personal use (on a localhost)
     or for a personal project (if you think its worth your time to use it anyway)

     any suggestions are so much welcome :D

     oh, also: i am using a "book shelf" picture liked on google images so hopefully
     it wont do any harm
--->

<html>
<head>
  <title>Welcome the library</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="icon" type="image/png" href="pics/fav.png" />
  <script>
  window.onload = function(){
      document.getElementsByName("booky").onclick = function(){
          document.getElementsByName("postvar")[0].value = this.value;
          document.forms.myform.submit();
      }
  };
</script>
</head>
<body>
  <table style="height:50px;" id="title">
    <tr>
      <td style="width:48px;">
        <div id="logo">

        </div>
      </td>
      <td>
        Welcome to the library
      </td>
              <form method="post" action="action.php">
      <td>
          <input class="searchbar" autocomplete="off" autocorrect="off" autocapitalize="off" name="search" type="text" value="" width="100%" maxlength="22"/>
      </td>
      <td>
        <input type="submit" class="createme" name="createnew" value="+" style="font-size:18px; width: 40px; height: 40px;"/>
    </td>
          </form>
    </tr>
    <tr>
    </tr>
  </table>
  <br />
  <form method="post" class="grid-container" action="action.php">
    <?php
      for ($x =  0; $x <= 20; $x++) {
          echo "<input type='submit' class='clicky' name='booky' value='".$x."'/>";
      }
    ?>
  </form>
</body>
</html>
