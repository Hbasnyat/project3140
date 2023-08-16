
    <?php
        
            $firstName = $_GET['fn'];
            $lastName = $_GET['ln'];
            $email = $_GET['email'];
            $courses = '';
            if(isset($_GET['c1'])) $courses .= 'C++ ';
            if(isset($_GET['c2'])) $courses .= 'JAVA ';
            if(isset($_GET['c3'])) $courses .= 'RUBY ';
            if(isset($_GET['c4'])) $courses .= 'PYTHON ';
            $operatingSystemColor = $_GET['operating_system_color'];
            $operatingSystem = $_GET['operating_system'];
            $siteUsage = $_GET['site_usage'];
            $password = $_GET['password'];

            echo "<h3>Submitted Information:</h3>";
            echo "First Name: $firstName<br>";
            echo "Last Name: $lastName<br>";
            echo "Email: $email<br>";
            echo "Courses: $courses<br>";
            echo "Operating System Color: $operatingSystemColor<br>";
            echo "Operating System: $operatingSystem<br>";
            echo "Site Usage: $siteUsage<br>";
            echo "Password: $password<br>";
       
    ?>











