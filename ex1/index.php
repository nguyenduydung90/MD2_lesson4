<?php
include_once 'Employee.php';
include_once 'EmployeeManager.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label><input type="text" name="surename" placeholder="surename"></label>
    <label><input type="text" name="_name" placeholder="Name"></label>
    <label><input type="text" name="birthday" placeholder="birth"></label>
    <label><input type="text" name="add" placeholder="address"></label>
    <label><input type="text" name="posi" placeholder="position"></label>
    <button type="submit">ADD</button>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surename = $_REQUEST["surename"];
    $name = $_REQUEST['_name'];
    $birth = $_REQUEST['birthday'];
    $address = $_REQUEST['add'];
    $position = $_REQUEST['posi'];


    $employeeManager = EmployeeManager::getInformation();
    $employee = [
        'surename' => $surename,
        'name' => $name,
        'birthday' => $birth,
        'address' => $address,
        'position' => $position
    ];
    array_push($employeeManager, $employee);
    EmployeeManager::add($employeeManager);

}
?>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    <?php
    foreach ($employeeManager as $index => $value):
        ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $value['surename']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['birthday']; ?></td>
            <td><?php echo $value['address']; ?></td>
            <td><?php echo $value['position']; ?></td>
            <td><button type="submit">Delete</button></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
