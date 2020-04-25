<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Просмотр дерева товаров</h1>
<a href="/create">Создать товар</a>
<ul>
@include('products.tree.recursion', $items)
</ul>
</body>
</html>
