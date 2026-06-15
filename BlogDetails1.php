<?php include 'header.php'; ?>

<section>
    <?php
    // Get the request URI
    $uri = $_SERVER['REQUEST_URI'];
    
    // Split the URI by '/' and get the last element
    $parts = explode('/', trim($uri, '/'));
    
    // Check if the last part is an ID
    if (isset($parts[1])) {
        $id = $parts[1];
        
        // Display details based on the value of 'id'
        switch ($id) {
            case '1':
                echo "<h1>Details 1</h1>";
                break;
            case '2':
                echo "<h1>Details 2</h1>";
                break;
            case '3':
                echo "<h1>Details 3</h1>";
                break;
            case '4':
                echo "<h1>Details 4</h1>";
                break;
            default:
                echo "<h1>There is no blog details for this ID.</h1>";
                break;
        }
    } else {
        // If no ID is provided, show a default message
        echo "<h1>No ID provided in the URL.</h1>";
    }
    ?>
</section>

<?php include 'footer.php'; ?>
