<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        padding: 0;
        margin: 0;
    }
    form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
   
    </style>
</head>
<body>
    <form action="calculator.php" method="post">
        <input type="number" name="num1" id="" placeholder="Pick a  Number">

        <select name="operand">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="divide">Divide</option>
            <option value="multiply">Multiply</option>
        </select>

        <input type="number" name="num2" id="" placeholder="Pick a  Number">
        
        <button type="submit">Calculate</button>
    </form>
</body>
</html>