<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- Font Awesome CDN for icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General reset for margin, padding, and box-sizing */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *

        /* Header Section */
        /* General reset for margin, padding, and box-sizing */
            {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header Section */
        .header {
            width: 100%;
        }

        /* Navigation Bar */
        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 10%;
            background-color: #FF6C36;
            /* Dark Orange background color */
            position: sticky;
            top: 0;
            z-index: 1000;
            /* Ensures navbar stays on top of content */
            transition: top 0.3s;
        }

        /* Logo */
        .navbar-logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            font-family: 'Arial', sans-serif;
        }

        .navbar-logo span {
            color: navy;
        }

        /* Navbar Links */
        .navbar-right {
            display: flex;
            align-items: center;
        }

        .navbar-right a {
            color: white;
            font-size: 18px;
            font-weight: 500;
            margin: 0 33px;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
        }

        /* Navbar link hover effect */
        .navbar-right a:hover {
            color: purple;
            transform: scale(1.1);
        }

        /* User Login with Dropdown */
        /* Header Container */
        .header-container {
            display: flex;
            justify-content: center;
            /* Centering nav links */
            align-items: center;
            /* Center vertically */
            position: relative;
            /* So that we can use absolute positioning for user login */
            padding: 20px;
        }

        /* Nav links - Home, Contact */
        .nav-links {
            display: flex;
            gap: 20px;
            /* Space between links */
            justify-content: center;
            /* Keep nav items centered */
            width: 100%;
            /* Ensure the links are spread out */
        }

        .nav-links a {
            color: white;
            font-size: 18px;
            font-weight: 300;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ff7043;
            /* Light orange on hover */
        }

        /* User Login - Right Corner */
        .user-login {
            position: relative;
            right: auto;
            /* Move it to the right corner */
            color: white;
            font-size: 18px;
            font-weight: 300;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .user-login i {
            font-size: 20px;
            margin-right: 5px;
        }

        /* Dropdown Menu */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 2px;
        }

        .dropdown .dropdown-item {
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            display: block;
            font-size: 14px;
        }

        .dropdown .dropdown-item:hover {
            background-color: lightyellow;
            color: purple;
        }

        /* Show the dropdown when hovering over User Login */
        .user-login:hover .dropdown {
            display: block;
        }

        /* Make sure the items in the dropdown are full-width */
        .dropdown-item {
            width: 70%;
        }

        /* Mobile View - Make navbar links stack vertically */
        @media (max-width: 768px) {
            .navbar-right {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-right a {
                margin: 10px 0;
                font-size: 16px;
            }

            .user-login {
                margin-top: 10px;
                font-size: 16px;
            }

            .navbar-logo {
                font-size: 20px;
            }
        }

        /* Mobile View - Make navbar links stack vertically */
        @media (max-width: 768px) {
            .navbar-right {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-right a {
                margin: 10px 0;
                font-size: 16px;
            }

            .user-login {
                margin-top: 10px;
                font-size: 16px;
            }

            .navbar-logo {
                font-size: 20px;
            }
        }

        /* Video Container */
        .video-container {
            z-index: 1;
            width: 100%;
            height: 100vh;
            /* Full viewport height */
            position: relative;
            top: 0;
            left: 0;
        }

        /* Overlay with Gradient */
        .video-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(241, 120, 120, 0.5), rgba(13, 1, 179, 0.5));
            z-index: 1;
        }

        /* Video background styling */
        #video-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures video covers the full container */
        }

        /* .video-container {
    position: relative;
    width: 100%;
    height: auto;
    min-height: 100vh;
    overflow: hidden; Ensures video does not overflow container
} */

        .excellence-text {
            position: absolute;
            top: 50%;
            /* Adjust as needed to center text vertically */
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            /* Keeps text above video */
            color: orangered;
            font-size: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            text-align: center;
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
            /* Remove margin-top to prevent misalignment */
        }


        /* Excellence In Education Text Styling */
        /* .excellence-text {
            position: absolute;
            margin-top: 9%;
            /* Positioning the text a bit lower than the center */
        /* left: 50%; */
        /* transform: translate(-50%, -50%); */
        /* Center text horizontally and vertically */
        /* z-index: 2; */
        /* color: orangered; */
        /* font-size: 60px; */
        /* Larger font size for better visibility */
        /* font-family: 'Poppins', sans-serif; */
        /* Modern font */
        /* font-weight: 700; */
        /* text-align: center; */
        /* letter-spacing: 2px; */
        /* text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); */
        /* Text shadow for better visibility */
        /* transition: all 0.3s ease; */
        /* Smooth transition effect for hover */
        /* } */
        */

        /* Hover effect on Excellence text */
        .excellence-text:hover {
            color: #ff7043;
            /* Change text color to light orange on hover */
            transform: translate(-50%, -60%) scale(1.1);
            /* Slightly scale the text for hover effect and move upwards */
        }

        /* Optional: Additional styling for the subheading text (h6) */
        h6 {
            font-size: 20px;
            /* Slightly larger font size */
            color: #ff7043;
            /* Light orange color */
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin-top: 10px;
            transition: color 0.3s ease;
        }

        /* Hover effect for subheading text */
        h6:hover {
            color: #800080;
            /* Change to purple on hover */

        }




        .international {
            padding: 50px 5%;
            text-align: center;
            font-family: Arial, sans-serif;
            padding-top: 60px;
            background: rgb(243, 226, 194);
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .international h1 {
            font-size: 30px;
            color: navy;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .international p {
            color: rgb(77, 77, 77);
        }

        .features {
            padding: 30px 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            /* Allows wrapping of items */
            justify-content: space-between;
            gap: 20px;
        }

        .box {
            flex: 1 0 12%;
            background: linear-gradient(to bottom right, orangered, rgb(255, 108, 54));
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
            width: 160px;
            box-sizing: border-box;
            border: 3px solid rgb(255, 127, 76);
        }

        .box img {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }

        .box h4 {
            font-size: 18px;
            color: wheat;
            margin-bottom: 10px;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .programs {
            background: #5b427c;
        }

        .programs h1 {
            font-size: 40px;
            color: wheat;
            font-weight: bold;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 40px;
        }

        .programs p {
            padding-top: 9px;
            color: rgb(228, 228, 228);
            text-align: center;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .card-container {
            margin: 0;
            padding: 0;
            min-height: 60vh;
            background: #5b427c;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: consolas;
            flex-wrap: wrap;
        }

        .container {
            width: 700px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .container .card {
            position: relative;
            cursor: pointer;
        }

        .container .card .face {
            width: 270px;
            height: 200px;
            transition: 0.5s;
        }

        .container .card .face p {
            color: rgb(56, 56, 56);
            font-family: 'Courier New', Courier, monospace;
        }

        .container .card .face.face1 {
            position: relative;
            background: #5b427c;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        .container .card:hover .face.face1 {
            background: orangered;
            transform: translateY(0);
        }

        .container .card .face.face1 .content {
            opacity: 0.2;
            transition: 0.5s;
        }

        .container .card:hover .face.face1 .content {
            opacity: 1;
        }

        .container .card .face.face1 .content img {
            max-width: 80px;
            /* Set max width for image */
            height: auto;
            display: block;
            margin: 0 auto;
            /* Center the image horizontally */
        }

        .container .card .face.face1 .content h3 {
            margin: 10px 0 0;
            padding: 0;
            color: #fff;
            text-align: center;
            font-size: 1.5em;
        }

        .container .card .face.face2 {
            position: relative;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            transform: translateY(-100px);
        }

        .container .card:hover .face.face2 {
            transform: translateY(0);
        }

        .container .card .face.face2 .content p {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container .card .face.face2 .content a {
            margin: 15px 0 0;
            display: inline-block;
            text-decoration: none;
            font-weight: 900;
            color: black;
            padding: 5px;
            border: 1px solid #333;
        }

        .container .card .face.face2 .content a:hover {
            background: #333;
            color: #fff;
        }

        /* For the overall section */
        /* top school section*/
        /* For the overall section */
        /* For the overall section */

        /* For the overall section */
        /* For the overall section */
        /* For the overall section */
        /* For the overall section */
        .top-school {
            padding: 40px 20px;
            /* Add space at top and bottom */
            margin: 0 auto;
            max-width: 1200px;
            /* Adjust according to your layout */
            background-color: #FFEBCC;
            /* Light orange background color */
            border-bottom: 3px solid #333;
            /* Add line at the bottom of the section */
            text-align: center;
            /* Center the heading and content */
            box-sizing: border-box;
            /* Ensure padding doesn't overflow */
        }

        /* Center align the heading */
        .top-school h1 {
            font-size: 36px;
            color: black;
            /* Set text color to black */
            margin-bottom: 20px;
            /* Space between heading and content */
        }

        /* For the "mission" text */
        .top-school p {
            font-size: 18px;
            color: black;
            /* Set text color to black */
            margin-bottom: 40px;
            /* Space between the paragraph and image container */
        }

        /* Use Flexbox to arrange cards in a row */
        .image-container {
            display: flex;
            flex-wrap: wrap;
            /* This allows the cards to wrap to the next row when necessary */
            justify-content: space-between;
            /* This gives some space between cards */
        }

        /* For each image card */
        .image-card {
            position: relative;
            width: 23%;
            /* This gives 4 cards per row (100% / 4 = 25%, minus some space for margins) */
            margin: 10px 0;
            /* Adjust margin to get space between rows */
            min-height: 300px;
            /* You can increase or decrease this height */
            max-height: 400px;
            /* Optional: set a maximum height */
            overflow: hidden;
            /* To avoid images overflowing */
            border-radius: 8px;
            /* Optional: to give the boxes rounded corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Optional: adds a little shadow for depth */
            display: flex;
            flex-direction: column;
            background-color: #f4f4f4;
            /* Background color for the card */
        }

        /* Make sure images scale properly within the cards */
        .image-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            /* To match the card's rounded corners */
        }

        /* For the overlay (this will be the text) */
        .overlay {
            position: absolute;
            bottom: 0;
            /* Position the text at the bottom of the card */
            left: 0;
            right: 0;
            color: black;
            /* Set text color to black */
            padding: 10px;
            opacity: 1;
            /* Text is always visible */
            text-align: center;
            font-size: 14px;
            /* Removed the background-color from here */
        }

        /* Removed hover effects, so no background color change on hover */

        /* For smaller screens (Mobile devices) */
        @media (max-width: 768px) {
            .image-card {
                width: 48%;
                /* Adjust width for smaller screens, 2 cards per row */
            }
        }

        /* For extra small screens (Mobile Portrait) */
        @media (max-width: 480px) {
            .image-card {
                width: 100%;
                /* Stack the cards vertically */
            }
        }





        :root {
            --orange: #FF5733;
            /* Customize the hover color */
        }

        .team-section {
            padding: 50px 20px;
            background-color: #f5f5f5;
            text-align: center;
            padding-bottom: 100px;
            padding-top: 100px;
        }

        .team h1 {
            font-size: 2rem;
            color: navy;
            margin-bottom: 1rem;
        }

        .team p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 2rem;
        }

        .team-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .team-card {
            width: calc(50% - 40px);
            max-width: 420px;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .team-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .team-card img {
            width: 100%;
            height: auto;
            transition: transform 0.4s ease;
        }

        .team-card:hover img {
            transform: scale(1.08);
            /* Slight zoom on image */
        }

        .card-info {
            padding: 1.5rem;
        }

        .card-info h4 {
            font-size: 1.3rem;
            color: #333;
            margin: 0.5rem 0;
        }

        .card-info span {
            font-size: 0.9rem;
            color: #777;
        }

        .social-icons {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 30px;
            /* Space between icons */
            text-align: center;
        }

        .social-icons i {
            color: #555;
            font-size: 1.5rem;
            transition: color 0.3s, transform 0.3s;
        }

        .social-icons i:hover {
            color: var(--orange);
            transform: scale(1.1);
        }

        .rise {
            position: relative;
            width: 100%;
            height: 70vh;
            /* Full height of the viewport */
            background-image: url('images/bg.webp');
            /* Background image */
            background-size: cover;
            /* Ensure the image covers the entire section */
            background-position: center;
            /* Center the image */
            display: flex;
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            /* Center content vertically */
            color: #fff;
            /* Text color for contrast */
        }

        .rise .content {
            text-align: center;
            /* Center the content inside the div */
            padding: 20px;
        }

        .rise .logo {
            width: 180px;
            /* Adjust logo size */
            height: auto;
            margin-bottom: 20px;
            /* Space between logo and heading */
        }

        .rise .heading {
            font-size: 40px;
            /* Adjust heading size */
            margin-bottom: 10px;
            /* Space between heading and paragraph */
            color: navy;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .rise .description {
            font-size: 20px;
            /* Adjust paragraph text size */
            max-width: 800px;
            /* Optional: limit paragraph width for readability */
            margin: 0 auto;
            color: rgb(59, 59, 59);
        }

        /* Footer Styling */
        body,
        footer {
            margin: 0;
            padding: 0;
        }

        footer {
            margin-bottom: 0;
            /* Remove any extra space below the footer */
        }




        footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: relative;
            background-image:
                linear-gradient(rgba(119, 105, 115, 0.5), rgba(148, 9, 9, 0.5)),
                /* Transparent gradient overlay */
                url('img8.jpg');
            /* Replace with your actual image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Optional parallax effect */
            color: white;
            /* Default text color */
            height: 70vh;
        }

        /* Applying the blur effect only to the background */
        footer::before {
            content: '';
            /* Empty content */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            /* Inherit background image from footer */
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            /* Blur effect applied to the background image */
            z-index: -1;
            /* Ensures the blur effect stays behind the content */
        }

        /* Header Styling within Footer */
        footer h3 {
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 20px;
            padding-top: 40px;
        }

        /* Paragraph inside Footer (About Us, etc.) */
        footer p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 600;
            padding-right: 60px;
            line-height: 1.5em;
            color: white;
            /* Ensures text is white */
        }

        /* Footer Paragraph Hover Effect (if applicable) */
        footer p:hover {
            color: lightgray;
            /* Change color on hover */
        }

        /* Left Content section in Footer */
        .left-content {
            width: 50%;
        }

        /* Links in Important Links and Contact Us sections */
        .important-links,
        .contact-us {
            width: 25%;
        }

        /* Styling for links in Important Links and Contact Us */
        .important-links a,
        .contact-us a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 5px 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 600;
        }

        /* Hover effect for links */
        .important-links a:hover,
        .contact-us a:hover {
            text-decoration: underline;
            color: navy;
        }

        /* Contact Icons (if applicable) */
        .contact-us i {
            padding-right: 10px;
        }

        /* Articles Section */
        .articles {
            display: flex;
            flex-wrap: wrap;
            /* Allows articles to wrap to the next row */
            justify-content: center;
            /* Center the articles horizontally */
            gap: 20px;
            /* Spacing between articles */
        }

        article {
            width: 100%;
            /* Default to 100% width for small screens */
            max-width: 600px;
            /* Maximum width for each article */
            --img-scale: 1.001;
            --title-color: #ffff;
            --link-icon-translate: -20px;
            --link-icon-opacity: 0;
            position: relative;
            border-radius: 16px;
            box-shadow: none;
            background: wheat;
            transform-origin: center;
            transition: all 0.4s ease-in-out;
            overflow: hidden;
            margin-top: 50px;
            margin-bottom: 50px;
            left: 50%;
        }

        /* Basic styling for article titles */
        article h2 {
            text-align: center;
            margin: 0 0 18px 0;
            font-family: "Bebas Neue", cursive;
            font-size: 1.9rem;
            letter-spacing: 0.06em;
            color: var(--title-color);
            transition: color 0.3s ease-out;
        }

        /* Article Image */
        figure {
            text-align: center;
            margin: 0;
            padding: 0;
            aspect-ratio: 16 / 9;
            overflow: hidden;
        }

        /* Scaling and transitioning the article image */
        article img {
            max-width: 100%;
            transform-origin: center;
            transform: scale(var(--img-scale));
            transition: transform 0.4s ease-in-out;
        }

        /* Article Body Styling */
        .article-body {
            padding: 24px;
            align-items: center;
            justify-content: center;
        }

        .article-body p {
            text-align: center;
            font-size: 16px;
        }

        /* Hover effect for articles */
        article:has(:hover, :focus) {
            --img-scale: 1.1;
            --title-color: #28666e;
            --link-icon-translate: 0;
            --link-icon-opacity: 1;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        /* Global layout adjustments */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            margin: 0;
            font-family: "Figtree", sans-serif;
            font-size: 1.2rem;
            line-height: 1.6rem;
            background-image: linear-gradient(45deg, #91aeb9, #9ab6eb);
            min-height: 100vh;
        }

        /* Articles Section Layout */
        .articles {
            display: grid;
            max-width: 1200px;
            margin-inline: auto;
            padding-inline: 24px;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        /* Responsive Adjustments for Screens Smaller than 960px */
        @media screen and (max-width: 960px) {
            article {
                container: card/inline-size;
            }

            .article-body p {
                display: none;
                /* Hide article body text on smaller screens */
            }
        }

        /* Media Queries for Specific Containers */
        @container card (min-width: 380px) {
            .article-wrapper {
                display: grid;
                grid-template-columns: 100px 1fr;
                gap: 16px;
            }

            .article-body {
                padding-left: 0;
            }

            figure {
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            figure img {
                height: 100%;
                aspect-ratio: 1;
                object-fit: cover;
            }
        }

        /* Accessibility: Hiding elements visually */
        .sr-only:not(:focus):not(:active) {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        /* Footer Styling */
        body,
        footer {
            margin: 0;
            padding: 0;
        }

        footer {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            position: relative;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                /*Dark black overlay with transparency */
                /* linear-gradient(rgba(216, 191, 216, 0.5), rgba(138, 43, 226, 0.4)), Light purple gradient (lavender to medium purple) */
                url('images/img8.jpg');
            /* Replace with your actual image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Optional parallax effect */
            color: white;
            /* Default text color */
            height: 70vh;
            font-family: 'Roboto', sans-serif;
            /* Set font to Roboto */
        }

        /* Applying the blur effect only to the background */
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            /* Inherit background image from footer */
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            /* Blur effect applied to the background image */
            z-index: -1;
            /* Ensures the blur effect stays behind the content */
        }

        /* Header Styling within Footer */
        footer h3 {
            font-family: 'Roboto', sans-serif;
            padding-bottom: 10px;
            padding-top: 30px;
            font-weight: normal;
            /* Remove boldness */
        }

        /* Paragraph inside Footer (About Us, etc.) */
        footer p {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            padding-right: 30px;
            line-height: 1.5em;
            color: white;
            /* Ensures text is white */
            text-align: justify;
            /* Justify text for better readability */
            width: 100%;
            /* Make sure text fits within the container */
            box-sizing: border-box;
            /* Ensure padding doesn't cause overflow */
            font-weight: normal;
            /* Remove boldness */
            padding-top: 30px;
        }

        /* Footer Paragraph Hover Effect (if applicable) */
        footer p:hover {
            color: orangered;
            /* Change color on hover */
        }

        /* Left Content section in Footer */
        .left-content {
            width: 50%;
        }

        /* Links in Important Links and Contact Us sections */
        .important-links,
        .contact-us {
            width: 15%;
            padding-top: 30px;
        }

        /* Styling for links in Important Links and Contact Us */
        .important-links a,
        .contact-us a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 1px 10;
            font-family: 'Roboto', sans-serif;
            /* Use the same font for links */
            font-size: 16px;
            font-weight: normal;
            /* Remove boldness */
            padding-top: 10px;
        }

        /* Hover effect for links */
        .important-links a:hover,
        .contact-us a:hover {
            text-decoration: underline;
            color: orangered;
        }

        /* Contact Icons (if applicable) */
        .contact-us i {
            padding-right: auto;
        }

        /* Responsive Design for Mobile Devices */
        @media (max-width: 768px) {
            footer {
                flex-direction: column;
                /* Stack content vertically */
                height: auto;
                /* Allow footer to expand with content */
                padding: 15px;
                /* Slightly reduce padding on tablets */
            }

            .left-content,
            .important-links,
            .contact-us {
                width: 100%;
                /* Ensure each section takes full width */
                text-align: center;
                /* Center content for smaller screens */
                margin-bottom: 10px;
                /* Add space between sections */
            }

            footer p {
                font-size: 14px;
                /* Slightly reduce font size on smaller screens */
                padding-right: 0;
                /* Remove extra padding */
                text-align: center;
                /* Center the text on smaller screens */
                width: 100%;
                /* Ensure paragraph is not too wide */
                margin: 0 auto;
                /* Center the paragraph */
            }
        }

        @media (max-width: 480px) {
            footer {
                padding: 10px;
                /* Less padding for mobile */
            }

            footer p {
                font-size: 12px;
                /* Further reduce font size for very small screens */
                padding-right: 0;
                /* Remove padding */
                text-align: center;
                /* Center text on small screens */
                width: 90%;
                /* Adjust width for better readability */
                margin: 0 auto;
                /* Center the paragraph */
            }
        }

        /* Styling for the Important Links */
        .important-links a {
            display: flex;
            align-items: center;
            /* Vertically center the text and the circle */
            color: white;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            /* Font for the link text */
            font-size: 16px;
            font-weight: normal;
            /* Remove boldness */
            padding-left: 30px;
            /* Add space on the left for the circle */
            margin-bottom: 10px;
            /* Space between links */
            text-align: left;
            /* Align the text to the left */
        }

        /* Add right arrow symbol in a circle for Important Links */
        .important-links a::before {
            content: '→';
            /* Right arrow symbol */
            display: inline-block;
            background-color: #fff;
            /* White circle background */
            color: black;
            /* Symbol color */
            font-size: 24px;
            /* Adjust the size of the symbol */
            width: 30px;
            /* Width of the circle */
            height: 30px;
            /* Height of the circle */
            border-radius: 50%;
            /* Make the circle */
            text-align: center;
            /* Center the symbol inside the circle */
            line-height: 30px;
            /* Vertically center the symbol inside the circle */
            margin-right: 15px;
            /* Space between the circle and the text */
        }

        /* Styling for the About Us and Contact Us Sections */
        footer h3 {
            font-family: 'Roboto', sans-serif;
            /* Clean font style */
            font-size: 22px;
            /* Font size for the section titles */
            color: white;
            /* Title color */
            margin-bottom: 15px;
            /* Add some space below the title */
            text-align: left;
            /* Align titles to the left */
        }

        footer p {
            font-family: 'Roboto', sans-serif;
            /* Clean font style */
            font-size: 16px;
            /* Font size for paragraph */
            color: white;
            /* Paragraph color */
            line-height: 1.6;
            /* Line height for readability */
            margin-bottom: 15px;
            /* Space between paragraphs */
            text-align: left;
            /* Align text to the left */
        }

        /* Hover effect for paragraphs */
        footer p:hover {
            color: orangered;
            /* Change color on hover */
        }

        /* Adjust Contact Us and Important Links in Footer */
        .important-links,
        .contact-us {
            width: 25%;
            /* Set the width of each section */
            padding: 20px;
        }

        /* For smaller screens, make the footer items stack */
        @media (max-width: 768px) {
            footer {
                flex-direction: column;
                /* Stack the footer items vertically */
            }

            .important-links,
            .contact-us {
                width: 100%;
                /* Full width for each section */
                text-align: center;
                /* Center the content */
                margin-bottom: 20px;
                /* Add space between sections */
            }

            footer h3 {
                font-size: 18px;
                /* Adjust the font size of section titles */
            }

            footer p {
                font-size: 14px;
                /* Adjust font size of paragraphs */
            }
        }

        /* Articles Section */
        .articles {
            display: flex;
            flex-wrap: wrap;
            /* Allows articles to wrap to the next row */
            justify-content: center;
            /* Center the articles horizontally */
            gap: 20px;
            /* Spacing between articles */
        }

        article {
            width: 100%;
            /* Default to 100% width for small screens */
            max-width: 600px;
            /* Maximum width for each article */
            --img-scale: 1.001;
            --title-color: white;
            --link-icon-translate: -20px;
            --link-icon-opacity: 0;
            position: relative;
            border-radius: 16px;
            box-shadow: none;
            background: #fff;
            transform-origin: center;
            transition: all 0.4s ease-in-out;
            overflow: hidden;
            margin-top: 50px;
            margin-bottom: 50px;
            left: 50%;
        }

        /* Basic styling for article titles */
        article h2 {
            text-align: center;
            margin: 0 0 18px 0;
            font-family: "Bebas Neue", cursive;
            font-size: 1.9rem;
            letter-spacing: 0.06em;
            color: var(--title-color);
            transition: color 0.3s ease-out;
        }

        /* Article Image */
        figure {
            text-align: center;
            margin: 0;
            padding: 0;
            aspect-ratio: 16 / 9;
            overflow: hidden;
        }

        /* Scaling and transitioning the article image */
        article img {
            max-width: 100%;
            transform-origin: center;
            transform: scale(var(--img-scale));
            transition: transform 0.4s ease-in-out;
        }

        /* Article Body Styling */
        .article-body {
            padding: 24px;
            align-items: center;
            justify-content: center;
        }

        .article-body p {
            text-align: center;
            font-size: 16px;
        }

        /* Hover effect for articles */
        article:has(:hover, :focus) {
            --img-scale: 1.1;
            --title-color: #28666e;
            --link-icon-translate: 0;
            --link-icon-opacity: 1;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        /* General Section Styling */
        .our-values-section {
            text-align: center;
            margin: 50px auto;
            width: 80%;
        }

        /* Section Title Styling */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
            font-family: 'Arial', sans-serif;
        }

        /* Flexbox container for buttons */
        .values-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* Common button styling */
        .value-btn {
            padding: 15px 40px;
            font-size: 1.25rem;
            font-weight: 600;
            border-radius: 50px;
            /* Rounded corners (circular shape) */
            border: none;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease-in-out;
            /* Smooth transition */
            text-transform: uppercase;
            /* Uppercase text for buttons */
            letter-spacing: 1px;
            /* Space between letters */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Subtle shadow effect */
        }

        /* Hover effects */
        .value-btn:hover {
            transform: translateY(-5px);
            /* Slight lift effect on hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            /* Stronger shadow on hover */
        }

        /* Active button effect */
        .value-btn:active {
            transform: translateY(2px);
            /* Pressed effect */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Light shadow on click */
        }

        /* Button Colors - Each button with a unique color */
        .trustworthiness {
            background-color: #1E90FF;
            /* Blue */
            color: white;
        }

        .integrity {
            background-color: #32CD32;
            /* Green */
            color: white;
        }

        .efficacious {
            background-color: #FFD700;
            /* Gold */
            color: black;
        }

        .relationship {
            background-color: #FF6347;
            /* Tomato Red */
            color: white;
        }

        .teamwork {
            background-color: #8A2BE2;
            /* Blue Violet */
            color: white;
        }

        .ethics {
            background-color: red;
            /* This sets the background color to LimeGreen */
        }

        /* Hover colors (matching each button’s color on hover) */
        .trustworthiness:hover {
            background-color: #187bcd;
        }

        .integrity:hover {
            background-color: #28a745;
        }

        .efficacious:hover {
            background-color: #ffcc00;
        }

        .relationship:hover {
            background-color: #e55347;
        }

        .teamwork:hover {
            background-color: #7a4db7;
        }


        /* Global layout adjustments */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /*rise section*/
        /* Basic styling for the section */
        /* Basic styling for the section */
        /* Container styling */
        .rise {
            position: relative;
            padding: 40px;
            background-color: #fff;
            /* White background color */
            overflow: hidden;
            height: 100vh;
            /* Full viewport height */
        }

        /* Content styling */
        .content {
            position: relative;
            z-index: 2;
        }

        .logo {
            width: 100px;
            /* Adjust as needed */
            height: auto;
        }

        .heading {
            font-size: 2rem;
            margin-top: 10px;
        }

        .description {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* General circle styling */
        .circle {
            position: absolute;
            border-radius: 50%;
            animation: moveCircles 15s ease-in-out infinite;
            /* Slower animation with smooth easing */
        }

        /* Light Purple circle styling */
        .circle.white {
            background-color: rgba(180, 130, 255, 0.5);
            /* Light Purple */
        }

        /* Sky Blue circle styling */
        .circle.sky {
            background-color: rgba(135, 206, 250, 0.5);
            /* Lighter Sky Blue */
        }

        /* Sizes for each circle */
        .circle:nth-child(1) {
            width: 120px;
            height: 120px;
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .circle:nth-child(2) {
            width: 110px;
            height: 110px;
            top: 10%;
            left: 30%;
            animation-delay: 1s;
        }

        .circle:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 30%;
            left: 40%;
            animation-delay: 0.3s;
        }

        .circle:nth-child(4) {
            width: 95px;
            height: 95px;
            top: 20%;
            left: 70%;
            animation-delay: 0.4s;
        }

        .circle:nth-child(5) {
            width: 75px;
            height: 75px;
            top: 10%;
            left: 70%;
            animation-delay: 0.2s;
        }

        /* Keyframe Animation for Circles */
        /* Adjusting the movement to make circles move in all directions (top, bottom, left, right) */
        @keyframes moveCircles {
            0% {
                opacity: 0;
                transform: scale(0) translate(10px, 50px);
                /* Initial position */
            }

            25% {
                opacity: 1;
                transform: scale(1) translate(100px, 200px);
                /* Moving down and right */
            }

            50% {
                opacity: 1;
                transform: scale(1) translate(300px, -100px);
                /* Moving up and right */
            }

            75% {
                opacity: 0;
                transform: scale(1) translate(-200px, 150px);
                /* Moving left and down */
            }

            100% {
                opacity: 1;
                transform: scale(1) translate(-300px, 300px);
                /* Moving bottom left */
            }
        }




        /* Body Styling */
        body {
            margin: 0;
            font-family: "Figtree", sans-serif;
            font-size: 1.2rem;
            line-height: 1.6rem;
            background-image: linear-gradient(45deg, #91aeb9, #9ab6eb);
            min-height: 100vh;
        }

        /* Articles Section Layout */
        .articles {
            display: grid;
            max-width: 1200px;
            margin-inline: auto;
            padding-inline: 24px;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        /* Responsive Adjustments for Screens Smaller than 960px */
        @media screen and (max-width: 960px) {
            article {
                container: card/inline-size;
            }

            .article-body p {
                display: none;
                /* Hide article body text on smaller screens */
            }
        }

        /* Media Queries for Specific Containers */
        @container card (min-width: 380px) {
            .article-wrapper {
                display: grid;
                grid-template-columns: 100px 1fr;
                gap: 16px;
            }

            .article-body {
                padding-left: 0;
            }

            figure {
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            figure img {
                height: 100%;
                aspect-ratio: 1;
                object-fit: cover;
            }
        }

        /* Accessibility: Hiding elements visually */
        .sr-only:not(:focus):not(:active) {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }



        /* footer section end */


        /* Responsive styles */
        @media (max-width: 768px) {
            .image-card {
                width: calc(50% - 10px);
                /* Two images per row on tablet/medium screens */
            }
        }

        @media (max-width: 480px) {
            .image-card {
                width: 100%;
                /* One image per row on small screens */
            }
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .image-card {
                width: 48%;
                /* Two images per row on tablet/medium screen */
            }
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 1024px) {
            .box {
                flex: 1 0 30%;
                /* 2 boxes per row */
            }
        }

        @media (max-width: 768px) {
            .box {
                flex: 1 0 45%;
                /* 2 boxes per row */
            }

            .excellence-text {
                font-size: 40px;
                top: 25%;
            }

            .mission-text {
                font-size: 18px;
                top: 30%;
            }
        }

        @media (max-width: 480px) {
            .box {
                flex: 1 0 100%;
                /* 1 box per row */
            }

            .excellence-text {
                font-size: 30px;
                top: 20%;
            }

            .mission-text {
                font-size: 16px;
                top: 50%;
            }
        }

        /* Media Queries for larger screens */
        @media (max-width: 1349px) {
            .excellence-text {
                font-size: 50px;
                top: 30%;
            }

            .mission-text {
                font-size: 20px;
                top: 35%;
                /* Adjust the position accordingly */
            }
        }



        .mission-text {
            font-size: 18px;
            top: 30%;
            /* Adjust the position accordingly */
        }


        @media (max-width: 480px) {
            .excellence-text {
                font-size: 30px;
                top: 20%;
            }

            .mission-text {
                font-size: 16px;
                top: 50%;
                /* Adjust the position accordingly */
            }
        }
    </style>
    <?php //include('header.php') 
    ?>

</head>

<body>
    <header>
        <!-- Menu Links Section -->
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive and Sticky Navigation Bar</title>
            <link rel="stylesheet" href="styles.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        </head>

        <body>

            <!-- Menu Links Section -->
            <div class="header">
                <nav class="navigation">
                    <a href="index.php" class="navbar-logo"><span>Dua</span> International School</a>
                    <div class="navbar-right">
                        <a href="index.php">Home</a>
                        <a href="aboutus.php">About Us</a>
                        <a href="campus-functions.php">Events</a>
                        <a href="contactus.php">Contact Us</a>

                        <!-- User Login with Dropdown -->
                        <div class="user-login">
                            <?php if (isset($_SESSION['login'])) { ?>

                                <i class="fas fa-user"></i>
                                <span>User Login</span>
                                <!-- Dropdown Menu -->
                                <div class="dropdown">
                                    <a class="dropdown-item" href="/SMS/admin/dashboard.php">Dashboard</a>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            <?php } else { ?>
                                <a class="dropdown-item" href="login.php"><i class="fas fa-user"></i>User login</a>

                            <?php } ?>

                        </div>
                    </div>
                </nav>
            </div>

        </body>

        </html>


        <div class="video-container">
            <video autoplay loop muted id="video-bg">
                <source src="images/navbar_video.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Excellence In Education Text -->
        <div class="excellence-text">
            Excellence In Education
            <h6 style="font-size: 16px; color: white;">Our mission is to inspire students not only intellectually but also Spiritually.</h6>
        </div>

        <p class="mission-text">

        </p>
        </div>
    </header>



    <section class="international">
        <h1>WHY DUA INTERNATIONAL?</h1>
        <p>Building a Strong Foundation for Lifelong Learning: Early Learning Domains</p>

        <div class="features">
            <div class="row">
                <div class="box">
                    <img src="images/icon.png" alt="">
                    <h4>Approaches to Learning</h4>
                </div>
                <div class="box">
                    <img src="images/icon0.png" alt="">
                    <h4>Language and Literacy</h4>
                </div>
                <div class="box">
                    <img src="images/icon1.png" alt="">
                    <h4>Social Studies</h4>
                </div>
                <div class="box">
                    <img src="images/icon2.png" alt="">
                    <h4>Mathematics</h4>
                </div>
                <div class="box">
                    <img src="images/icon3.png" alt="">
                    <h4>Science & Engineering</h4>
                </div>
                <div class="box">
                    <img src="images/icon4.png" alt="">
                    <h4>Physical Development</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="programs">
        <h1>OUR PROGRAMS</h1>
        <p>Discovering the Wonders of Learning with Spica International's Four-Star Programs</p>
        <div class="card-container">
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="images/nursery.png">
                            <h3>Pre School</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Early Learning Adventures: Our Pre-School Program for Playgroup Nursery and Kindergarten
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="images/primary.png">
                            <h3>Primary School</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Building a Strong Foundation: Our Primary Schooling Program for Grades I to Grade V for
                                your child</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="images/bg.webp">
                            <h3>Middle School</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Our Comprehensive Schooling Program for Grades VI to VIII, Designed to Empower and
                                Inspire Young Minds</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="images/matric.png">
                            <h3>Matric School</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Preparing for Success: Our Matriculation Program for Grades IX and X, Focusing on
                                Academic Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-school">

        <h1>Among Top Schools in Gujranwala</h1>
        <p>Our one line mission is Active minds, Healthy Bodies & Happy Hearts.</p>
        <section class="image-container">
            <!-- First 4 Cards (Your Original Content) -->
            <div class="image-card">
                <img src="images/admission.jpg" alt="Program 1">
                <div class="overlay">
                    <h3>ADMISSIONS</h3>
                    <p>Learn about admission requirements,.</p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/student 6.jfif" alt="Program 2">
                <div class="overlay">
                    <h3>VIRTUAL 360 TOUR</h3>
                    <p>Join our virtual tour and discover our campus.</p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/scholarships.jpg" alt="Program 3">
                <div class="overlay">
                    <h3>SCHOLARSHIPS</h3>
                    <p>DUA offers a range of different scholarship programmes .</p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/learning.webp" alt="Program 4">
                <div class="overlay">
                    <h3>INNOVATIVE LEARNING</h3>
                    <p> DUA offers a dynamic robotics programme </p>
                </div>
            </div>

            <!-- Next 4 Cards (New Content) -->
            <div class="image-card">
                <img src="images/abs.jpg" alt="Program 5">
                <div class="overlay">
                    <h3>RESEARCH </h3>
                    <p>Explore cutting-edge research opportunities at DUA.</p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/img9.jpg" alt="Program 6">
                <div class="overlay">
                    <h3>MEET OUR FACULTY</h3>
                    <p>Our diverse and experienced faculty members.</p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/img7.jpg" alt="Program 7">
                <div class="overlay">
                    <h3>CAMPUS EVENTS</h3>
                    <p>Stay engaged with campus life through a variety of cultural. </p>
                </div>
            </div>
            <div class="image-card">
                <img src="images/img8.jpg" alt="Program 8">
                <div class="overlay">
                    <h3>INTERNSHIP OPPORTUNITIES</h3>
                    <p>Gain hands-on experience and prepare for your future career. </p>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="team">
                <h1>Meet Our Team</h1>
                <p>Our dedicated and skilled professionals</p>
                <div class="team-row">
                    <!-- Team Member 1 -->
                    <div class="team-card">
                        <img src="images/456.avif" alt="Teacher 1">
                        <div class="card-info">
                            <h4>Saba Tariq</h4>
                            <span>Math Teacher</span>
                            <div class="social-icons">
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="team-card">
                        <img src="images/it.avif" alt="Teacher 2">
                        <div class="card-info">
                            <h4>Adan Tahir</h4>
                            <span>Computer Science</span>
                            <div class="social-icons">
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="team-card">
                        <img src="images/teacher (2).avif" alt="Teacher 3">
                        <div class="card-info">
                            <h4>Madiha </h4>
                            <span>Science Teacher</span>
                            <div class="social-icons">
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="team-card">
                        <img src="images/image2.avif" alt="Teacher 4">
                        <div class="card-info">
                            <h4>Jannat Gull </h4>
                            <span>Islamiyat Teacher</span>
                            <div class="social-icons">
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 5 -->
                    <div class="team-card">
                        <img src="images/123.jpg" alt="Teacher 5">
                        <div class="card-info">
                            <h4>Esha Rahman</h4>
                            <span>English</span>
                            <div class="social-icons">
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Add more team members as needed, each in a "team-card" div -->
                </div>
            </div>
        </section>

        <section class="rise">
            <div class="content">
                <img src="images/logo.png" alt="Logo" class="logo">
                <h2 class="heading">Rise to Success!</h2>
                <p class="description">
                    To your preschooler, nothing is impossible! They are opening up their world and developing special friendships.
                    Together, they are learning new words and forming new ideas every day.
                </p>
            </div>
            <div class="circle white"></div>
            <div class="circle white"></div>
            <div class="circle sky"></div>
            <div class="circle sky"></div>
            <div class="circle sky"></div>
            <div class="circle white"></div>
            <div class="circle white"></div>
            <div class="circle white"></div>
            <div class="circle sky"></div>
            <div class="circle white"></div>
            <div class="circle sky"></div>

        </section>

        <div class="our-values-section">
            <h2 class="section-title">Our Values</h2>
            <div class="values-buttons">
                <button class="value-btn trustworthiness">Trustworthiness</button>
                <button class="value-btn integrity">Integrity</button>
                <button class="value-btn efficacious">Efficacious</button>
                <button class="value-btn relationship">Relationship</button>
                <button class="value-btn teamwork">Teamwork</button>
                <button class="value-btn ethics "> Ethics</button>
            </div>
        </div>

    </section>

    <footer>

        <div class="left-content">

            <h3>About Dua International</h3>
            <p>At Dua International School, we believe in nurturing young minds through play-based learning experiences. Our experienced teachers create a safe and stimulating environment where children can explore, discover, and learn at their own pace. We focus on developing social, emotional, cognitive, and physical skills to prepare children for success in school and beyond.</p>
        </div>

        <div class="important-links">
            <h3>Important Links</h3>

            <a href="login.php">Admin login</a>
            <a href="login.php">Teacher login</a>
            <a href="login.php">Student login</a>
            <a href="login.php"> Parent login</a>

        </div>

        <div class="contact-us">
            <h3>Contact Us</h3>
            <a href="tel:+923246237080">
                <i class="bi bi-telephone"></i>+92 324 6237080
            </a>
            <a href="mailto:duainternationalschool@gmail.com">
                <i class="bi bi-envelope"></i>duainternationalschool@gmail.com
            </a>
        </div>

    </footer>
</body>

</html>
<?php include('footer.php') ?>