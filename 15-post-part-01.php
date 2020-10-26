<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - POST</title>
    <style>
        body{
            background-color: #3b3b40;
            color: #ccc;
            font-size: 16pt;
        }
        div{
            margin: 20px;
        }
        label{
            margin-right: 10px;
        }
        select{
            min-width: 150px;
            font-size: 16pt;
        }
        button{
            width: 20%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background-color: #999;
            cursor:pointer;
            font-size: 16pt;
        }
        button:hover{
            background-color: #4CAF50;
            transition: background-color .25s ease-out;
        }
    </style>
</head>
<body>
    <h1>Form to work with POST</h1>
    <form action="15-post-part-02.php" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="type your name">
        </div>
        <div>
            <label>E-Mail</label>
            <input type="text" name="email" placeholder="type your best email">
        </div>
        <div>
            <fieldset>
                <legend>Your technologies favorite</legend>
                <input type="checkbox" name="favtech[]" value="PHP">PHP</br>
                <input type="checkbox" name="favtech[]" value="Python">Python</br>
                <input type="checkbox" name="favtech[]" value="JS">JS</br>
                <input type="checkbox" name="favtech[]" value="Asp.NET">Asp.NET</br>
            </fieldset>
        </div>
        <div>
            <label>What's your stack?</label>
            <select name="stack">
                <option value="">Select</option>
                <option value="frontend">Frontend</option>
                <option value="backend">Backend</option>
                <option value="fullstack">Full Stack</option>
            </select>
        </div>
        <div>
            <label>Notes</label>
            <textarea name="notes" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
</body>
</html>