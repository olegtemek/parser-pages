<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temek parser</title>
</head>
<style>
  form {
    margin: 0 auto;
    max-width: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
  }

  form input,
  form button {
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
  }
</style>

<body>
  <h1 style="text-align:center">Try it your self</h1>
  <form action="./temek_parser.php" method="get">
    <input type="text" name="url" placeholder="url" required>
    <input type="text" name="title" placeholder="query title, h1[attribute=&quot;title&quot;" required>
    <input type="text" name="body" placeholder="query body, div.test" required>
    <input type="text" name="another" placeholder="query another, div.test">
    <button type="submit">Start parse</button>
  </form>
</body>

</html>