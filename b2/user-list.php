<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $users = [
        [
            'name' => 'John Doe',
            'phone' => '123-456-7890',
            'email' => 'john.doe@example.com',
            'gender' => 1, // 1 cho nam
            'address' => '123 Main St, Anytown, USA'
        ],
        [
            'name' => 'Jane Smith',
            'phone' => '987-654-3210',
            'email' => 'jane.smith@example.com',
            'gender' => 2, // 2 cho nữ
            'address' => '456 Elm St, Othertown, USA'
        ],
        [
            'name' => 'Alice Johnson',
            'phone' => '555-123-4567',
            'email' => 'alice.johnson@example.com',
            'gender' => 2, // 2 cho nữ
            'address' => '789 Oak St, Sometown, USA'
        ],
        [
            'name' => 'Bob Brown',
            'phone' => '444-987-6543',
            'email' => 'bob.brown@example.com',
            'gender' => 1, // 1 cho nam
            'address' => '321 Pine St, Anothertown, USA'
        ],
        [
            'name' => 'Charlie Davis',
            'phone' => '333-456-7890',
            'email' => 'charlie.davis@example.com',
            'gender' => 1, // 1 cho nam
            'address' => '654 Birch St, Differenttown, USA'
        ]
    ];
    ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $key => $user) { ?>
        <tr>
            <th scope='row'><?php echo $key+1; ?></th>
            <td><?php echo $user["name"]; ?></td>
            <td><?php echo ($user["gender"]==1) ? "Male" : "Female"; ?></td>
            <td><?php echo $user["phone"]; ?></td>
            <td><?php echo $user["email"]; ?></td>
            <td><?php echo $user["address"]; ?></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</body>
</html>