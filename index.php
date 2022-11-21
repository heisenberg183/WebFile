<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and XML</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>
        Welcome to Bookstore
    </h1>

    <table border=1>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Price</th>
        </tr>
        <?php
        $xml = simplexml_load_file("sample.xml");
        foreach ($xml->children() as $book) {
            echo "<tr>";
            echo "<td>" . $book->title . "</td>";
            echo "<td>" . $book->author . "</td>";
            echo "<td>" . $book->genre . "</td>";
            echo "<td>" . $book->price . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <footer class="footer">
        <!--TODO: change name -->
        <p>Created with &lt;3 by <span>Priyanshu</span> </p>
    </footer>
</body>

</html>