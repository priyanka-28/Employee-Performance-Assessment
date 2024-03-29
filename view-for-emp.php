<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee List</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="Plugins/materialize/css/materialize.css">
<!--    <link rel="stylesheet" href="css/view.css">-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div id="main" class="card">
                    <div class="card-content">
                        <!--                            <span class="card-title">Task List</span>-->

                        <!--                                <form id="task-form">-->
                        <!--
                                    <div class="input-field col s12">
                                        <input type="text" name="task" id="task">
                                        <label for="task">New Task</label>
                                    </div>
-->

                        <!--                                </form>-->

                        <!--                            end of row-->
                        <div class="card-action">
                            <h5 id="task-title">Employee List</h5>
                            <div class="input-field col s12">
                                <input type="text" name="Filter" id="filter">
                                <label for="filter">Search</label>
                            </div>
<!--
                            <ul class="collection">
                                <li class="collection-item"><a href="" class="delete-item secondary-content"><i class="fa fa-eye"></i></a>Priyanka</li>
                                <li class="collection-item"><a href="" class="delete-item secondary-content"><i class="fa fa-eye"></i></a>Archana</li>
                                <li class="collection-item"><a href="" class="delete-item secondary-content"><i class="fa fa-eye"></i></a>Ria</li>
                            </ul>
-->
                            <?php
                                extract($_POST);
                                include("db.php");
                                $query="select EName from student.employee";
                                $result=$cn->query($query);
                                while ($result->num_rows>0)
                                {
                                    if ($row=$result->fetch_assoc())
                                    {?>
                                        <ul class="collection">
                                        <li class="collection-item"><a href="" class="delete-item secondary-content"><i class="fa fa-eye"></i></a> <?php echo($row["EName"])?></li>
                               
                            </ul>
                            <?php
                                    }
                                }
                                ?>
<!--                            <div class="row">-->
<!--                                <input type="submit" value="Add Employee" class="btn indigo darken-3">-->
<!--                            </div>-->
                            <!--                                <a href="#" class="clear-tasks btn black">Clear Tasks</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../materialize.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
