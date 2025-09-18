# Malek AI Assistant - Website Project

## Overview
This is a PHP-based website for "Malek" - an AI Assistant designed for kids with full parental control. The website serves as a landing page showcasing the features and benefits of the Malek AI platform.

## Project Architecture
- **Frontend**: Static HTML with CSS, JavaScript, and Bootstrap framework
- **Backend**: PHP for handling contact form submissions via email
- **Assets**: Images, fonts, and LayerSlider components for interactive elements
- **Server**: PHP built-in development server

## Recent Changes
- September 18, 2025: Successfully imported and configured the project for Replit environment
- PHP 8.2 environment configured and running on port 5000
- Development workflow set up with PHP built-in server
- All static assets (CSS, JS, images, fonts) serving correctly
- Added STEM Authentication section with animated logo and feature highlights
- Implemented CSS animations including gentle bounce effects and hover interactions
- Integrated STEM.org logo and responsive design for mobile compatibility

## File Structure
- `index.html` - Main landing page
- `php/sendmail.php` - Contact form email handler
- `js/custom.js` - Main JavaScript functionality including contact form
- `css/style.css` - Main stylesheet
- `img/` - Image assets directory
- `fonts/` - Font files (FontAwesome and Flaticon)
- `vendor/` - Third-party libraries (Bootstrap, jQuery, LayerSlider)

## Technical Details
- PHP version: 8.2.23
- Development server: PHP built-in server on 0.0.0.0:5000
- Email functionality: Uses PHP `mail()` function for contact form
- Frontend frameworks: Bootstrap 5, jQuery, LayerSlider

## Contact Form
The website includes a functional contact form that:
- Validates required fields client-side
- Sends AJAX requests to `php/sendmail.php`
- Processes email sending via PHP `mail()` function
- Sends emails to: contact@malek.chat

## Current Status
✅ Website fully functional in development
✅ All assets loading correctly
✅ Contact form working with PHP backend
✅ STEM Authentication section implemented with animations
🟡 Ready for deployment configuration