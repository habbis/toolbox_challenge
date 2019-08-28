<!DOCTYPE html>
<html>
<head>
    <title>Toolbox</title>
    <?php include "common/_head.php" ?>
</head>
<body>
    <?php include "common/_nav.php" ?>
    <?php include "common/_header.php" ?>

    <div class="container">

        <div class="row">
          <div class="col-md-12">
            <h2>Challenge</h2>
            <hr>
            <p>Create a tool to manage our cake-fridays.</p>
            <p>The features included should be:</p>
            <ul>
                <li>Use PHP7 and SQLite3.</li>
                <li>Add multiple usernames.</li>
                <li>Remove multiple usernames.</li>
                <li>Keep track of how many times a username has brought cake.</li>
                <li>Maintain a list of the next 4 upcomming cake-fridays:
                    <ul>
                        <li>Must be persistent.</li>
                        <li>Automatically extend list when a cake-friday has passed.</li>
                        <li>Randomly choose usernames, prioritizing those who has brought the least cake.</li>
                        <li>Should be able to shuffle/edit the list in case somebody want's to swap their turn or can't make it.</li>
                    </ul>
                </li>
            </ul>
            <p>Solve the challenge however you like - you don't have to use this template.</p>
            <p><b>Deadline: 2019-09-02 12:00</b>. Pack your solution in an archive and mail it to saaknes.</p>
            <a class="btn btn-primary btn-lg" href="#">Cake-Friday &raquo;</a>
          </div>
        </div>

    </div>

    <?php include "common/_foot.php" ?>
</body>
</html>
