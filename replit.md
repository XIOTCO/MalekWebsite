# Malek AI Assistant Website

## Overview
This is a static HTML marketing website for Malek, an AI assistant designed for kids. The website serves as a landing page showcasing features, safety controls, and the mission of providing a safe learning environment for children.

## Project Structure
- **Frontend**: HTML, CSS, JavaScript with Bootstrap framework
- **Backend**: PHP contact form handler
- **Assets**: Images, fonts, and vendor libraries

## Key Features
- Responsive design with Bootstrap
- Interactive slider showcasing key features
- Contact form with PHP email processing
- Smooth scrolling navigation
- Modern animations and effects

## Current Status
✅ **Website is fully functional and deployed**
- PHP web server running on port 5000
- Contact form working with email functionality
- All static assets loading correctly
- Deployment configured for production

## Technical Setup
- **Language**: PHP 8.2
- **Server**: PHP built-in web server
- **Port**: 5000 (configured for Replit environment)
- **Deployment**: Autoscale (stateless website)

## Recent Changes (September 2025)
- Imported from GitHub repository
- Configured PHP 8.2 environment for Replit
- Fixed router.php to properly execute PHP files instead of serving them as static content
- Set up workflow to serve website on port 5000 using PHP built-in server
- Fixed PHP deprecation warnings in contact form (replaced FILTER_SANITIZE_STRING with FILTER_SANITIZE_FULL_SPECIAL_CHARS)
- Configured deployment settings for production (autoscale deployment)
- Verified contact form functionality and PHP execution
- All assets and functionality tested and working
- Website fully operational and ready for deployment

## User Preferences
- Simple static website setup
- PHP contact form for user inquiries
- Clean, child-friendly design
- Fast loading and responsive

## Project Architecture
- **Main page**: index.html - Landing page with all content
- **Contact**: php/sendmail.php - Handles form submissions
- **Styles**: css/ - Custom styling and Bootstrap
- **Scripts**: js/ - jQuery and custom interactions
- **Assets**: img/ - Images and graphics
- **Vendor**: Third-party libraries (Bootstrap, jQuery, etc.)

## Contact Form
The contact form uses AJAX to submit data to `php/sendmail.php` which processes the email sending. The form includes:
- Client-side validation
- Email format verification  
- Success/error feedback
- Smooth scrolling to results

## Deployment
Configured for Replit's autoscale deployment:
- Automatically scales based on traffic
- Perfect for static websites with minimal server-side processing
- Uses PHP built-in server for simplicity