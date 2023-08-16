 // JavaScript code here

   // EDisplay the current date
    const currentDate = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString('en-US', options);

    // Update the dateDisplay element
    const dateDisplay = document.getElementById('dateDisplay');
    dateDisplay.textContent = `${formattedDate}`;
  

    function generateEmail() {
      // Fetch first name from the text box
      var firstName = document.getElementById("fn").value.toLowerCase();

      // Fetch last name from the text box
      var lastName = document.getElementById("ln").value.toLowerCase();

      var add = "@onlineprogrammingtutorials.edu";

      var uniqueID = generateUniqueID();

      var email = firstName + "." + lastName + uniqueID + add;

      document.getElementById("email").value = email;
    }

    function generateUniqueID() {
      var timestamp = new Date().getTime();
      var randomID = Math.floor(10000000 + Math.random() * 90000000);
      return randomID.toString();
    }

    function enrollUser() {
      var firstName = document.getElementById("fn").value;
      var codeName = document.getElementById("ln").value;

      // Other user inputs (courses, operating system, etc.)

      var password = document.getElementById("password").value;

      // Perform any additional actions here, such as saving data to a database, showing a success message, etc.
      window.alert("Congratulations, you are enrolled to Online Tutorials, Mr " + codeName);
    }
      
     
   function loginUser() {
      var existingUsername = document.getElementById("existing_username").value;
      var existingPassword = document.getElementById("existing_password").value;

      // Perform the login validation here, such as checking against a database or predefined user credentials
      // For example, you can compare the entered username and password with stored data or an API call.

      // If the login is successful, display a message or perform the desired action.
      if (existingUsername === "existing_user" && existingPassword === "password") {
        window.alert("Welcome back, " + existingUsername + "!");
      } else {
        window.alert("Invalid username or password. Please try again.");
      }
    }  

  