# Build Modern Laravel Apps Using Inertia.js

This repository contains notes and code snippets for learning and building modern Laravel applications using Inertia.js. The learning material is based on Jeffrey Way's *Build Modern Laravel Apps Using Inertia.js* series on Laracasts. 

## Series Overview

Inertia.js provides a modern approach to building single-page applications (SPAs) without relying heavily on frontend frameworks. The series covers essential concepts, practical use cases, and advanced features.

### Episodes

#### **The Basics**
1. **What is Inertia.js**  
   Understand the purpose and use cases of Inertia.js. *(5m 36s)*
2. **Install and Configure Inertia**  
   Learn how to set up Inertia in a Laravel project. *(6m 23s)*
3. **Pages**  
   Manage and create pages for Inertia-based applications. *(5m 49s)*
4. **Inertia Links**  
   Replace standard links with Inertia's `<Link>` component. *(7m 14s)*
5. **Progress Indicators**  
   Add user-friendly progress indicators. *(1m 57s)*
6. **Perform Non-GET Requests**  
   Submit forms or perform POST requests with Inertia. *(6m 44s)*

#### **Advanced Topics**
7. **Preserve Scroll Position**  
   Maintain scroll position during navigation. *(4m 04s)*
8. **Active Links**  
   Style active navigation links. *(6m 45s)*
9. **Layout Files**  
   Organize your app with reusable layouts. *(7m 22s)*
10. **Shared Data**  
    Share data across all pages. *(6m 48s)*

#### **Forms**
19. **Inertia Forms 101**  
    Learn to handle forms using Inertia.js. *(10m 47s)*
20. **Display Failed Validation Messages**  
    Display errors from server-side validation. *(5m 32s)*
21. **Inertia's Form Helper**  
    Simplify form handling with Inertia's helper. *(7m 23s)*

#### **Authentication and Authorization**
23. **Authentication With Inertia**  
    Implement user authentication flows. *(17m 00s)*
24. **Authorization Tips**  
    Ensure proper access control within your app. *(9m 03s)*

## Instructor

**Jeffrey Way**  
Creator of Laracasts. He is known for breaking down complex concepts into simple, digestible lessons.

## Setup Instructions

1. Install Laravel and Inertia.js in your project:
   ```bash
   composer create-project --prefer-dist laravel/laravel my-app
   npm install inertiajs/inertia
