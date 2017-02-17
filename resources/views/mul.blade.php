<html>
<head>
<title>Multiply</title>
</head>

<body>
<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <form method="post" action="/product">
    Multiplication<br/>
    Enter the number 1: <input type="text" name="number1"><br/>
    Enter the number 2:<input type="text" name="number2"><br/>
    <input type="submit" value="Multiply">

    {{csrf_field()}}  
    </form>
</body>
</html>