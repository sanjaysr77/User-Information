// Import necessary modules
const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

// Middleware to parse incoming JSON and URL-encoded data
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Simulate a simple in-memory storage for the form submissions
let registrations = [];

// Serve the HTML, CSS, and JS files
app.use(express.static(__dirname));  // Serve all static files from the current directory

// Handle the POST request from the registration form
app.post('/register', (req, res) => {
  const { name, email, phone, gender, dob, country, interests, address } = req.body;

  // Check if all required fields are provided
  if (!name || !email || !phone || !gender || !dob || !country) {
    return res.status(400).json({ message: 'Please fill in all required fields.' });
  }

  // Store the registration details (in this case, just in memory)
  const newRegistration = {
    name,
    email,
    phone,
    gender,
    dob,
    country,
    interests: interests || [],
    address,
  };

  registrations.push(newRegistration);

  // Respond to the frontend
  res.status(200).json({ message: 'Registration successful!', data: newRegistration });
});

// Start the server
app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
