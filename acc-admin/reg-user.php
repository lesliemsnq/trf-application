<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login-admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login-admin.php");
  }
  
?>
<!DOCTYPE html>
<!-- YouTube or Website - CodingLab -->
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Registered User</title>
    <link rel="stylesheet" href="acc-admin.css"/>
    <link rel="stylesheet" href="table.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <style>
        table#table_user {
            margin: 0 auto;
            border-collapse: collapse;
            font-family: 'Poppins', sans-serif;
            font-weight: 100;
            background: maroon;
            color: #fff;
            text-rendering: optimizeLegibility;
            border-radius: 5px;
            width: 95%;
        }

        table#table_user caption {
            font-size: 2rem;
            color: black;
            margin: 1rem;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center left, center right;
        }

        table#table_user thead th {
            font-weight: 600;
        }

        table#table_user thead th,
        table#table_user tbody td {
            padding: .8rem;
            font-size: 20px;
        }

        table#table_user tbody td {
            padding: .8rem;
            font-size: 20px;
            color: black;
            background: #eee;
        }

        table#table_user tbody tr:not(:last-child) {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .box {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: none;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            border-radius: 5px;

        }

        .box i.bx {
            color: #FFF;
            /* Set the color to white */
        }

        @media screen and (max-width: 600px) {
            table#table_user caption {
                background-image: none;
            }

            table#table_user thead {
                display: none;
            }

            table#table_user tbody td {
                display: block;
                padding: .6rem;
            }

            table#table_user tbody tr td:first-child {
                background: #666;
                color: #fff;
            }

            table#table_user tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 6rem;
            }
        }

        .table-container {
            height: 500px; /* Adjust the desired height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
    </style>

</head>
<body>
<nav class="sidebar">
    <a href="#" class="logo"><img src="../trf_logo.png"
                                  style="position: absolute; top: 20px; left: 70px; height: 30px"></a>
    <div class="menu-content">
        <br>
        <br>
        <ul class="menu-items">
            <div class="menu-title">Admin-Menu</div>
            <li class="item">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="item">
                <a href="reg-user.php">Registered Users</a>
            </li>
            <li class="item">
                <a href="#">List of Forms</a>
            </li>
            <li class="item">
                <a href="#">Reports & Evaluation</a>
            </li>
            <div class="menu-title">Admin-Personal Menu</div>
            <li class="item">
                <a href="list-admin.php">List of Admins</a>
            </li>
            <li class="item">
                <a href="add-admin.php">Create Admin</a>
            </li>
            <li class="item">
                <a href="logout-admin.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<?php if (isset($_SESSION['username'])) : ?>
    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
        <span class="navbar-text" style=" position: absolute;top: 15px; right: 16px;">
            Welcome <strong><?php echo $_SESSION['username']; ?></strong>
            <?php endif ?>
        </span>
    </nav>

<main class="main">
    <div class="table-container">
        <table id="table_user">
            <caption><b>Registered Users</b></caption>
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include('config-admin.php');

            $sqlSelect = "SELECT * FROM users";
            $result = mysqli_query($conn, $sqlSelect);

            while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo ($data['password']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="box"
                           style="background-color:#f0ad4e; ">
                            <i class='bx bx-edit'></i>
                        </a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="box"
                           style="background-color:#d9534f;">
                            <i class='bx bx-trash'></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</main>

<script src="script-admin.js"></script>
<script>
    var headertext = [],
        headers = document.querySelectorAll("#table_user th"),
        tablerows = document.querySelectorAll("#table_user th"),
        tablebody = document.querySelector("#table_user tbody");

    for (var i = 0; i < headers.length; i++) {
        var current = headers[i];
        headertext.push(current.textContent.replace(/\r?\n|\r/, ""));
    }
    for (var i = 0, row; row = tablebody.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
            col.setAttribute("data-th", headertext[j]);
        }
    }
</script>
</body>
</html>
