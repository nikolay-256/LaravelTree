<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>

<h1>Добавление нового товара</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">

    <form method="POST" action="/devicesaction">

        {{ csrf_field() }}

       <div>
          <label>Стоимость товара</label>
          <input type="text" name="position" placeholder="Введите стоимость товара, пример: 123.40">
      </div>

       <div>
          <label>Позиция товара в дереве товаров</label>
          <input type="text" name="position" placeholder="Введите позицию товара в дереве товаров, пример: 1.2.1">
      </div>
      <div>
            <label>Описание товара</label>
            <textarea name="title" placeholder="Введите описание товара"></textarea>

      </div>
      <div>

            <input type="submit" value="Добавить товар">

      </div>

    </form>

 </div>

</body>
</html>
