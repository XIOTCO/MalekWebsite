# Malek - AI Assistant for Kids Website

## Overview
This is a marketing/landing page website for Malek, an AI assistant designed specifically for children. The site provides information about the service, features, and includes a contact form for potential customers.

## Project Architecture
- **Frontend**: Static HTML/CSS/JavaScript website with Bootstrap framework
- **Backend**: PHP contact form handler
- **Server**: PHP built-in server
- **Deployment**: Configured for autoscale deployment on Replit

## Technical Stack
- HTML5, CSS3, JavaScript (jQuery)
- Bootstrap 5 framework
- PHP 8.2 for contact form processing
- FontAwesome and Flaticon for icons
- LayerSlider for image sliders

## Project Structure
- `index.html` - Main landing page
- `css/` - Stylesheets including main styles and Bootstrap
- `js/` - JavaScript files for functionality
- `img/` - All image assets organized by category
- `php/sendmail.php` - Contact form processing script
- `vendor/` - Third-party libraries (Bootstrap, jQuery, LayerSlider)
- `fonts/` - Font files and icon fonts

## Contact Form
The website includes a functional contact form that:
- Validates user input (name, email, subject, message)
- Uses AJAX to submit data to `php/sendmail.php`
- Sends emails to contact@malek.chat
- Provides user feedback on submission success/failure

## Development Setup
- Server runs on port 5000 using PHP built-in server
- Configured to serve static files and process PHP scripts
- All assets load correctly with proper MIME types

## Recent Changes
- Fixed missing image reference (callout.png → callout.jpg)
- Set up PHP server workflow for Replit environment
- Configured deployment settings for production

## User Preferences
- No specific user preferences documented yet

Last updated: September 18, 2025