<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>View the product tree</h1>
<a href="/create">Create Item</a>
<ul>
@include('products.tree.recursion', $items)
</ul>
</body>
</html>
