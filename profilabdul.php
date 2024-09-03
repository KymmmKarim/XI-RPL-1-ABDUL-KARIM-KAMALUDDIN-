<?php

// Define variables with personal information
$nama = "Abdul Karim Kamaluddin"; // Name of the person
$umur = 17; // Age of the person
$tinggi = 158; // Height of the person in cm
$sekolah = "SMK NEGERI 2 KOTA BANDUNG"; // School name
$cita_cita = "Atlet"; // Career goal

// URL to the photo of Pratama Arhan (replace this URL with the actual URL if available)
$foto_url = "pratama.PNG"; // Replace with actual photo URL

// Output the complete HTML structure with inline CSS for styling
echo "<html>
<head>
    <style>
        /* Basic styling for the body of the document */
        body {
            font-family: Arial, sans-serif; /* Sets the font family for the whole page */
            background-color: #f4f4f4; /* Sets a light grey background color for the entire page */
            color: #333; /* Sets a dark grey text color for better readability */
            text-align: center; /* Center-aligns all text in the body */
            padding: 20px; /* Adds 20px padding around the edges of the body */
        }
        /* Styling for the container that holds the profile information */
        .container {
            background-color: #fff; /* Sets a white background color for the container */
            border-radius: 10px; /* Rounds the corners of the container by 10px */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow effect around the container */
            display: inline-block; /* Makes the container only as wide as its content */
            padding: 20px; /* Adds 20px padding inside the container */
            max-width: 600px; /* Limits the maximum width of the container to 600px */
            margin: auto; /* Centers the container horizontally */
        }
        /* Styling for the main heading */
        h1 {
            color: #4CAF50; /* Sets the color of the heading text to green */
            font-size: 24px; /* Sets the font size of the heading text to 24px */
        }
        /* Styling for paragraphs */
        p {
            font-size: 18px; /* Sets the font size of the paragraph text to 18px */
            margin: 10px 0; /* Adds 10px margin above and below each paragraph */
        }
        /* Styling for highlighted text */
        .highlight {
            color: #FF5722; /* Sets the color of highlighted text to orange */
            font-weight: bold; /* Makes the highlighted text bold */
        }
        /* Styling for the profile photo */
        .profile-photo {
            margin-top: 20px; /* Adds margin above the photo */
            border: 5px solid #007BFF; /* Adds a blue border around the photo */
            border-radius: 10px; /* Rounds the corners of the border */
            width: 200px; /* Sets the width of the photo */
            height: auto; /* Maintains aspect ratio of the photo */
        }
    </style>
</head>
<body>
    <div class='container'> <!-- Container div for holding the profile information with styling -->
        <h1>Profil Siswa</h1> <!-- Main heading of the profile section -->
        <p>Nama: <span class='highlight'>$nama</span></p> <!-- Displays the name with highlighted text -->
        <p>Umur: <span class='highlight'>$umur tahun</span></p> <!-- Displays the age with highlighted text -->
        <p>Tinggi: <span class='highlight'>$tinggi cm</span></p> <!-- Displays the height with highlighted text -->
        <p>Sekolah: <span class='highlight'>$sekolah</span></p> <!-- Displays the school name with highlighted text -->
        <p>Cita-cita: <span class='highlight'>$cita_cita</span></p> <!-- Displays the career goal with highlighted text -->
        <img src='$foto_url' alt='Foto Pratama Arhan' class='profile-photo'> <!-- Displays the profile photo with border -->
    </div>
</body>
</html>";

?>