<?php
             
             include 'connection.php';
        
            // Initialize variables to store form data
            $first_name = $middle_name = $last_name = $gender = $phone_number = $email = $address = $emergency_name = $emergency_phone = $emergency_address = $emergency_relation = $qualification = $student_status = $shift = $disability = "";

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $first_name = $_POST['first_name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                $gender = $_POST['gender'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $emergency_name = $_POST['emergency_name'];
                $emergency_phone = $_POST['emergency_phone'];
                $emergency_address = $_POST['emergency_address'];
                $emergency_relation = $_POST['emergency_relation'];
                $qualification = $_POST['qualification'];
                $student_status = $_POST['student_status'];
                $shift = $_POST['shift'];
                $disability = $_POST['disability'];

                // Prepare and execute the SQL query to insert data into the table
                $sql = "INSERT INTO students (first_name, middle_name, last_name, gender, phone_number, email, address, emergency_name, emergency_phone, emergency_address, emergency_relation, qualification, student_status, shift, disability) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("sssssssssssssss", $first_name, $middle_name, $last_name, $gender, $phone_number, $email, $address, $emergency_name, $emergency_phone, $emergency_address, $emergency_relation, $qualification, $student_status, $shift, $disability);
                $stmt->execute();

                // Check if the insertion was successful
                if ($stmt->affected_rows > 0){
					header("Location: sucess_reg.php");
					exit(0);
                } else {
                    $approval_message = "Failed to register.";
                }

                // Close the statement
                $stmt->close();
            }

            // Display approval message if set
            if (isset($approval_message)) {
                echo "<p class='approval_msg'>$approval_message</p>";
            }
		
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="./css/registration.css"> <!-- Link to your CSS file -->
</head>
<body>
	<?php include 'connection.php';?>
    <div class="container">
        <h1>Student Registration Form</h1>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
            <!-- Personal Information -->
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" cols="50" required></textarea>
            </div>

            <!-- Emergency Information -->
            <div class="emergency-info">
                <h2>Emergency Information</h2>
                <div class="form-group">
                    <label for="emergency_name">Full Name:</label>
                    <input type="text" id="emergency_name" name="emergency_name" required>
                </div>

                <div class="form-group">
                    <label for="emergency_phone">Phone Number:</label>
                    <input type="tel" id="emergency_phone" name="emergency_phone" required>
                </div>

                <div class="form-group">
                    <label for="emergency_address">Address:</label>
                    <textarea id="emergency_address" name="emergency_address" rows="4" cols="50" required></textarea>
                </div>

                <div class="form-group">
                    <label for="emergency_relation">Relation to the person:</label>
                    <input type="text" id="emergency_relation" name="emergency_relation" required>
                </div>
            </div>

            <!-- Qualification -->
            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <select id="qualification" name="qualification">
                    <option value="Grade 9">Grade 9</option>
                    <option value="Grade 10">Grade 10</option>
                    <option value="Grade 11">Grade 11</option>
                    <option value="Grade 12">Grade 12</option>
                </select>
            </div>

            <!-- New Student or Returning Student -->
            <div class="form-group">
                <label>Are you a new student?</label>
                <div class="radio-group">
                    <input type="radio" id="new_student" name="student_status" value="new_student">
                    <label for="new_student">New Student</label>
                    <input type="radio" id="returning_student" name="student_status" value="returning_student">
                    <label for="returning_student">Returning Student</label>
                </div>
            </div>

            <!-- Shift -->
            <div class="form-group">
                <label>Shift:</label>
                <div class="radio-group">
                    <input type="radio" id="regular_shift" name="shift" value="regular_shift">
                    <label for="regular_shift">Regular</label>
                    <input type="radio" id="night_shift" name="shift" value="night_shift">
                    <label for="night_shift">Night</label>
                </div>
            </div>

            <!-- Disability -->
            <div class="form-group">
                <label>Any form of disability?</label>
                <select id="disability" name="disability">
                    <option value="none">None</option>
                    <option value="physical">Physical</option>
                    <option value="visual">Visual</option>
                    <option value="hearing">Hearing</option>
                    <option value="learning">Learning</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" name="submit_btn" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
