<div style='border: 5px solid black;'>
  <div style='margin-left:450px; font-size:50px'><b>Sign In Form</b></div><br><br>
  <form style='margin-left:400px; font-size:30px' onsubmit="return formvalidation()" action='result.php' name="myform"
    method="get">
    Enter Your Name:-<input type="text" name='username' placeholder="Enter username"><br><br>
    Password:-<input type='password' name='pass' placeholder="Enter your Password"><br><br>
    Date:-
    <select name="date">
      <?php
      for ($i = 1; $i <= 31; $i++) {
        echo ("<option value='$i'>$i<option>");
      }
      ; ?>
    </select>
    <select name="month">
      <?php
      $d50 = array("jan", "feb", "march", "april", "may", "june", "july", "august", "sept", "oct", "nov", "dec");
      foreach ($d50 as $value) {
        echo ("<option value='$value'>$value</option>");
      }
      ;
      ?>
    </select>
    <select name="year">
      <?php
      for ($i = 1950; $i <= 2025; $i++) {
        echo ("<option value='$i'>$i<option>");
      }
      ; ?>
    </select>
    <br><br>
    E-Mail:-<input type="email" required name="email" placeholder="enter you email"><br><br>
    Gender:-<input type='radio' name='gen' value='male'>Male
    <input type='radio' name='gen' value='Female'>Female<br><br>
    Enter Your Fav Subjects:-<input type="checkbox" name="sub[]" value='hindi'>Hindi
    <input type="checkbox" name="sub[]" Value="english">English<br><br>
    Upload File:- <input type="file" name="file"><br><br>

    <input type="submit" value="Sign Up" name="submit"><br><br>
    </from>
    <script>
      function formvalidation() {
        var d1 = document.myform.username;
        var d2 = document.myform.pass;

        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/;
        if (d2.value != d2.value.match(regex)) {
          alert('password issue');
          d2.focus();
          return false;
        }
        else if (d1.value == '') {
          alert('name not empty');
          d1.focus()
          return false
        }

      }


    </script>



</div>


</body>

</html>