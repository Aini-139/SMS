<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Dua International School</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f7fc;
            color: #333;
            line-height: 1.6;
        }

        /* Header Section */
        /* General reset for margin, padding, and box-sizing */

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


        /* General section styling */
        .about-us-section {
            position: relative;
            /* Ensures positioning context for the overlay and text */
            width: 100%;
            height: 500px;
            /* Adjust the height of the section as per your requirement */
            background: linear-gradient(rgba(255, 180, 04, 0.3), rgba(255, 180, 05, 0.3)), url('images/kk.jpg');
            background-size: cover;
            /* Ensures the image covers the entire section */
            overflow: hidden;
            /* Prevents any overflow */
        }

        /* Overlay to darken the image */
        .about-us-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            /* Dark overlay on top of the image (optional) */
            z-index: 1;
        }

        /* Text container for centering the "About Us" heading */
        .text-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Centering text */
            color: white;
            /* Text color */
            text-align: center;
            z-index: 2;
            /* Ensures text is above the overlay */
        }

        /* Heading styling */
        .text-container h1 {
            font-size: 60px;
            /* Large font size for heading */
            font-family: 'Poppins', sans-serif;
            /* Modern font family */
            font-weight: 700;
            /* Bold text */
            letter-spacing: 2px;
            /* Spacing between letters */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            /* Text shadow for better visibility */
            margin: 0;
        }

        /* Responsive behavior */
        @media (max-width: 1024px) {

            /* For tablet and smaller screens */
            .about-us-section {
                height: 400px;
                /* Adjust section height for smaller screens */
            }

            .text-container h1 {
                font-size: 40px;
                /* Slightly smaller font size */
            }
        }

        @media (max-width: 768px) {

            /* For mobile screens */
            .about-us-section {
                height: 300px;
                /* Adjust section height further for mobile */
            }

            .text-container h1 {
                font-size: 30px;
                /* Further reduce font size */
            }
        }

        /* Centered About Us Section */

        /* About Us Section Styles */
        /* Add commas after each list item except the last one */
        .comma-separated-list li {
            display: inline;
            /* Make the list items appear in a row */
            margin-right: 10px;
            /* Add some space between items */
        }

        .comma-separated-list li::after {
            content: ',';
            /* Add comma after each item */
        }

        .comma-separated-list li:last-child::after {
            content: '';
            /* Remove the comma after the last item */
        }

        /* For the Events Section */
        .events-container {
            padding: 40px 20px;
            background-color: #f9f9f9;
            /* Light gray background */
            text-align: center;
            /* Center the heading and paragraph */
            margin-top: 40px;
            /* Space above the events section */
            border-radius: 8px;
            /* Rounded corners for the section */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Light shadow for depth */
        }

        /* Style for the Events Heading */
        .events-container h2 {
            font-size: 36px;
            color: purple;
            /* Dark text color */
            margin-bottom: 20px;
            /* Space between heading and paragraph */
            text-transform: uppercase;
            /* Make the heading uppercase */
            letter-spacing: 2px;
            /* Space between letters */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        /* Style for the Events Paragraph */
        .events-container p {
            font-size: 18px;
            color: orangered;
            /* Lighter text color for the paragraph */
            line-height: 1.6;
            /* Line height for readability */
            max-width: 800px;
            /* Set a max-width for the paragraph */
            margin: 0 auto;
            /* Center the paragraph */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        /* Hover effect for heading */
        .events-container h2:hover {
            color: #800080;
            /* Change color to purple on hover */
        }

        /* Hover effect for paragraph */
        .events-container p:hover {
            color: #800080;
            /* Change color to purple on hover */
        }

        /* For smaller screens (Mobile devices) */
        @media (max-width: 768px) {
            .events-container {
                padding: 20px 10px;
                /* Less padding on smaller screens */
            }

            .events-container h2 {
                font-size: 28px;
                /* Adjust font size for heading */
            }

            .events-container p {
                font-size: 16px;
                /* Adjust font size for paragraph */
            }
        }

        /* Flexbox Container */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Align items vertically in the center */
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            /* Allow the content to wrap on smaller screens */
        }

        .container img {
            width: 100%;
            /* Make the image take the full width of the container */
            max-width: 500px;
            /* Limit the width to prevent it from getting too large */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Remove space below the image */
            border-radius: 8px;
            /* Round the corners of the image */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* Add a shadow for better separation */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth hover effect */
        }

        /* Image Hover Effect */
        .container img:hover {
            transform: scale(1.05);
            /* Slight zoom effect */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            /* Stronger shadow on hover */
        }

        /* Text Content */
        .text-content {
            flex: 1;
            /* Allow the text to take up the remaining space */
            padding: 20px;
        }

        .text-content h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .text-content p {
            font-size: 1.125rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .text-content p:hover {
            transform: translateY(-10px);
            background-color: greenyellow
                /* Darker shade */
        }

        .cta-btn {
            padding: 10px 20px;
            background-color: #32CD32;
            /* Green button */
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #28a745;
            /* Darker green on hover */
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .about-us-container {
                padding: 15px;
                /* Reduce padding on smaller screens */
            }

            .about-us-container h2 {
                font-size: 2rem;
                /* Smaller title size for mobile */
            }

            .about-us-container p {
                font-size: 1rem;
                /* Smaller font for better readability */
            }

            .container {
                flex-direction: column;
                /* Stack image and text vertically */
                align-items: center;
                /* Center the content */
            }

            .container img {
                max-width: 90%;
                /* Allow the image to take full width on mobile */
            }

            .text-content {
                padding: 10px;
                text-align: center;
            }
        }

        /* Basic box styling */
        .box {
            flex: 1;
            padding: 20px;
            background-color: #2c3e50;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        /* Left box styling */
        .left {
            background-color: #3498db;
        }

        /* Right box styling */
        .right {
            background-color: #e74c3c;
        }

        /* Heading inside the box */
        h2 {
            font-size: 24px;
            color: white;
        }

        /* Paragraph inside the box */
        p {
            font-size: 16px;
            color: #ecf0f1;
            line-height: 1.6;
        }

        /* Hover effect */
        .box:hover {
            transform: translateY(-10px);
            background-color: #34495e;
            /* Darker shade */
        }

        /* Hover effects for each box (optional customization) */
        .left:hover {
            background-color: #2980b9;
        }

        .right:hover {
            background-color: #c0392b;
        }

        /* Importing Google Font - Roboto Condensed */
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');

        /* Global Styling */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        /* Container Flexbox layout for left and right boxes */
        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 30px;
            flex-wrap: wrap;
        }

        /*
/* Basic Reset and Layout */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .sections-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 50px;
        }

        /* Section Styles */
        .section {
            position: relative;
            width: 45%;
            padding: 50px;
            border-radius: 10px;
            color: white;
            overflow: hidden;
        }

        /* Mission Section */
        .mission {
            background-color: #FFA500;
            /* Light orange */
        }

        /* Vision Section */
        .vision {
            background-color: #6a4c93;
            /* Light purple */
        }

        /* Circle Animation Container */
        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        /* Circle Styles */
        .circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            animation: moveCircles 12s linear infinite;
        }

        h2 {
            font-size: 2.5rem;
            /* Makes the text bigger */
            font-weight: bold;
            /* Makes the text bold */
        }


        /* Circle-Specific Positioning and Sizes */
        .circle-1 {
            width: 150px;
            height: 150px;
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            top: 40%;
            left: 50%;
            animation-delay: 3s;
        }

        .circle-3 {
            width: 100px;
            height: 100px;
            top: 60%;
            left: 30%;
            animation-delay: 6s;
        }

        /* Keyframe Animation for Circles */
        @keyframes moveCircles {
            0% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(200px, -150px);
            }

            50% {
                transform: translate(400px, 100px);
            }

            75% {
                transform: translate(600px, -100px);
            }

            100% {
                transform: translate(0, 0);
            }
        }

        /* Typography */
        h2 {
            font-size: 2rem;
            line-height: 2.5rem;
            font-weight: 700;
        }

        p {
            font-size: 1.125rem;
            line-height: 1.75rem;
            margin-top: 15px;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .sections-wrapper {
                flex-direction: column;
                gap: 30px;
            }

            .section {
                width: 100%;
            }
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

        /*section img*/
        /* Main Container for Image Gallery */
        .image-gallery {
            width: 90%;
            margin: 0 auto;
            padding-top: 40px;
        }

        /* Styling for Each Row */
        .image-row {
            display: flex;
            justify-content: space-between;
            /* Space out the image boxes */
            margin-bottom: 40px;
            /* Space between rows */
        }

        /* Styling for Each Image Box */
        .image-box {
            width: 23%;
            /* 4 items per row (100% / 4 = 25%, minus some space for margins) */
            position: relative;
            overflow: hidden;
            border: 2px solid #ddd;
            /* Light border for each box */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition */
            text-align: center;
            background-color: #fff;
            /* White background for the boxes */
        }

        /* Ensure images scale properly */
        .image-box img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            /* Rounded corners for images */
        }

        /* Add a description below each image */
        .image-box p {
            padding: 10px;
            color: #333;
            font-size: 16px;
            font-weight: 600;
            background-color: #f4f4f4;
            margin: 0;
        }

        /* Hover effects for image boxes */
        .image-box:hover {
            transform: scale(1.05);
            /* Slightly enlarge the box */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            /* Darker shadow on hover */
        }

        /* Responsive Design: Adjust for Smaller Screens */
        @media (max-width: 768px) {
            .image-box {
                width: 48%;
                /* 2 items per row on tablets */
            }
        }

        @media (max-width: 480px) {
            .image-box {
                width: 100%;
                /* 1 item per row on mobile */
            }
        }

        /* Styling for the Events Section */
        /* Styling for the Events Section */
        /* Styling for the Events Section */
        .events-section {
            background-color: #7D4B9C;
            /* Light purple background */
            padding: 40px;
            /* Add some padding for spacing */
            text-align: center;
            /* Center the text */
            position: relative;
            /* Ensure the circles are positioned inside this container */
            overflow: hidden;
            /* Hide any overflow (for animation effects) */
            animation: bgColorChange 5s ease-in-out infinite;
            /* Background color transition */
        }

        /* Keyframes for background color transition */
        @keyframes bgColorChange {
            0% {
                background-color: #E1D0FF;
                /* Light purple */
            }

            50% {
                background-color: #9B8FFF;
                /* Lighter purple */
            }

            100% {
                background-color: #E1D0FF;
                /* Back to light purple */
            }
        }

        /* Styling for the Heading */
        section {
            margin-top: 0;
            padding-top: 0;
        }


        /* Styling for the Events Section */
        .events-section {
            background-color: #6A4C9C;
            /* Purple background for the section */
            padding: 40px;
            /* Add padding for spacing */
            text-align: center;
            /* Center the text */
            position: relative;
            /* Ensure the circles are positioned inside this container */
            overflow: hidden;
            /* Hide any overflow (for animation effects) */
            margin-bottom: 0;
            /* Remove any margin below the section */
            animation: bgColorChange 5s ease-in-out infinite;
            /* Background color transition */
            border-bottom: 5px solid #333;
            /* Line added below the section */
        }

        /* Keyframes for background color transition */
        @keyframes bgColorChange {
            0% {
                background-color: #6A4C9C;
                /* Purple */
            }

            50% {
                background-color: #9B8FFF;
                /* Lighter purple */
            }

            100% {
                background-color: #6A4C9C;
                /* Back to purple */
            }
        }

        /* Styling for the Heading */
        .events-section h1 {
            font-size: 60px;
            /* Very large font size for 'EVENTS' */
            font-weight: bold;
            /* Make the text bold */
            color: orangered;
            /* White color for the text */
            font-family: 'Arial', sans-serif;
            /* Use a clean, modern font */
            letter-spacing: 2px;
            /* Add some spacing between the letters */
            text-transform: uppercase;
            /* Make the text all uppercase */
            margin: 0;
            /* Remove any default margin */
            z-index: 1;
            /* Make sure the heading stays on top of the circles */
        }

        /* Small Circle Styling */
        .circle {
            position: absolute;
            /* Absolute position inside the container */
            border-radius: 50%;
            /* Make the circles round */
            background-color: #ff8c11;
            /* Orange color for the circles */
            width: 60px;
            /* Small circle width */
            height: 60px;
            /* Small circle height */
            animation: moveCircles 20s infinite ease-in-out;
            /* Animation for moving circles */
        }

        /* Unique positions and delays for each circle */
        .circle-1 {
            top: 10%;
            /* Position for the first circle */
            left: 10%;
            animation-delay: 0s;
            /* Start immediately */
        }

        .circle-2 {
            top: 30%;
            /* Position for the second circle */
            left: 70%;
            animation-delay: 4s;
            /* Delay the second circle animation */
        }

        .circle-3 {
            top: 50%;
            /* Position for the third circle */
            left: 50%;
            animation-delay: 2s;
            /* Delay the third circle animation */
        }

        .circle-4 {
            top: 70%;
            /* Position for the fourth circle */
            left: 20%;
            animation-delay: 3s;
            /* Delay the fourth circle animation */
        }

        /* Keyframes for moving circles */
        @keyframes moveCircles {
            0% {
                transform: translate(0, 0);
                /* Initial position */
                background-color: #FFD580;
                /* Orange */
            }

            25% {
                transform: translate(100px, -100px);
                /* Move diagonally */
                background-color: #FFB84D;
                /* Lighter orange */
            }

            50% {
                transform: translate(200px, 0);
                /* Move horizontally */
                background-color: #FF8C00;
                /* Orange */
            }

            75% {
                transform: translate(100px, 100px);
                /* Move diagonally */
                background-color: #FFB84D;
                /* Lighter orange */
            }

            100% {
                transform: translate(0, 0);
                /* Return to initial position */
                background-color: #FF8C00;
                /* Orange */
            }
        }




        /* Footer Section */
        footer {
            background: #800080;
            color: white;
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        footer h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        footer p {
            font-size: 16px;
            margin-bottom: 15px;
            line-height: 1.5em;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ff7043;
        }

        /* Media Query for Mobile Responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 45px;
            }

            header nav ul {
                flex-direction: column;
            }

            header nav ul li {
                margin-bottom: 10px;
            }

            .about-us-container {
                padding: 20px;
                width: 95%;
            }

            .about-us-container h2 {
                font-size: 28px;
            }

            footer {
                padding: 20px;
            }
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
                linear-gradient(rgba(319, 105, 115, 0.5), rgba(348, 9, 9, 0.5)),
                /* Transparent gradient overlay */
                url('images/img8.jpg');
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
            background: white;
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
    </style>
</head>

<body>


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
<section class="about-us-section">
    <div class="overlay"></div>
    <div class="text-container">
        <h1>Dua International School</h1>
    </div>
</section>

<section class="events-section">
    <h1>EVENTS</h1>
    <!-- Small circles inside the section -->
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>
</section>

<!-- About Us Section -->


<section class="events-container">
    <h2>Events at Dua International School</h2>
    <p>Alhamdulillah, we are excited to announce a series of upcoming events at Dua International School. Our school regularly hosts cultural festivals, sports events, and academic workshops that encourage students to develop their talents and teamwork. These events provide valuable opportunities for our students to shine in various fields.</p>
    <p>Our commitment to fostering holistic growth means that every student is encouraged to participate and experience the joy of learning through activities outside the traditional classroom. Alhamdulillah, we are grateful for the support of our dedicated teachers, staff, and parents who make these events possible, enriching the lives of our students.</p>
</section>

<section class="image-gallery">
    <!-- Row 1 -->
    <div class="image-row">
        <div class="image-box">
            <img src="images/xx.jpg" alt="Image 1">
            <p> School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/img12.jpg" alt="Image 2">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/img11.jpg" alt="Image 3">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/im12.jpg" alt="Image 4">
            <p>School Functions</p>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="image-row">
        <div class="image-box">
            <img src="images/ee.jpg" alt="Image 5">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/ii.jpg" alt="Image 6">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/oo.jpg" alt="Image 7">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/qq.jpg" alt="Image 8">
            <p>School Functions</p>
        </div>
    </div>

    <!-- Row 3 -->
    <div class="image-row">
        <div class="image-box">
            <img src="images/qw.jpg" alt="Image 9">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/ab.jpg" alt="Image 10">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/ll.jpg" alt="Image 11">
            <p>School Functions</p>
        </div>
        <div class="image-box">
            <img src="images/nn.jpg" alt="Image 12">
            <p>School Functions</p>
        </div>
    </div>
</section>


<!--end-->
<div class="sections-wrapper">
    <!-- Our Mission Section -->
    <div class="section mission">
        <h2 class="text-white font-bold text-3xl">Our Mission</h2>
        <p class="text-lg">
            Our mission is to inspire and empower people through innovation, creativity, and collaboration. We aim to foster a sustainable future where individuals and organizations can thrive, making meaningful contributions to society.
        </p>
        <div class="circles">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
        </div>
    </div>

    <!-- Our Vision Section -->
    <div class="section vision">
        <h2 class="text-white font-bold text-2xl">Our Vision</h2>
        <p class="text-lg">
            Our vision is to lead the way in creating positive change through technological advancements. We strive to create a world where innovation drives progress and enhances lives on a global scale.
        </p>
        <div class="circles">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
    </div>
</div>

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

<footer>

    <div class="left-content">

        <h3>About Dua International</h3>
        <p>At Dua International School, we believe in nurturing young minds through play-based learning experiences. Our experienced teachers create a safe and stimulating environment where children can explore, discover, and learn at their own pace. We focus on developing social, emotional, cognitive, and physical skills to prepare children for success in school and beyond.</p>
    </div>

    <div class="important-links">
        <h3>Important Links</h3>
        <a href="index.php">Home</a>

        <a href="aboutus.php">About Us</a>
        <a href="campus-functions.php">Events</a>
        <a href="contactus.php">Contect Us</a>
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
