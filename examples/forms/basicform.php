<html>
<head>
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <label for="firstname">First name</label>
    <input type="text" id="firstname" name="firstname" />
    <label for="lastname">Last name</label>
    <input type="text" id="lastname" name="lastname" />
    <h3>Occupation</h3>
    <label for="developer">Developer</label>
    <input type="radio" name="occupation" id="developer" value="Developer" />
    <label for="teacher">Teacher</label>
    <input type="radio" name="occupation" id="teacher" value="Teacher" />
    <label for="other">Other</label>
    <input type="radio" name="occupation" id="other" value="Other" />
    <label for="busy">Always busy</label>
    <input type="checkbox" id="busy" name="busy" />
    <input type="submit" value="Submit" />
  </form>
  <pre>
    <?php
      var_dump($_POST);
    ?>
  </pre>
</body>
</html>
