<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $products = [
        [
            'name' => 'Laptop Dell Inspiron',
            'price' => 15000000, // 
            'qty' => 10,
            'image' => 'https://via.placeholder.com/50?text=Dell+Inspiron'
        ],
        [
            'name' => 'MacBook Air',
            'price' => 25000000,
            'qty' => 5,
            'image' => 'https://via.placeholder.com/50?text=MacBook+Air'
        ],
        [
            'name' => 'Asus ROG Strix',
            'price' => 30000000, 
            'qty' => 7,
            'image' => 'https://via.placeholder.com/50?text=Asus+ROG+Strix'
        ],
        [
            'name' => 'HP Pavilion',
            'price' => 20000000,
            'qty' => 0,
            'image' => 'https://via.placeholder.com/50?text=HP+Pavilion'
        ],
        [
            'name' => 'Lenovo ThinkPad',
            'price' => 18000000,
            'qty' => 8,
            'image' => 'https://via.placeholder.com/50?text=Lenovo+ThinkPad'
        ]
    ];
    ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($products as $key => $product) { ?>
        <tr>
            <th scope='row'><?php echo $key+1; ?></th>
            <td><img src="<?php echo $product['image'] ?>"/></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo number_format($product["price"], 0, ",","."); ?></td>
            <td><?php echo ($product["qty"]==0) ? "Out of stock" : $product["qty"]; ?></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</body>
</html>