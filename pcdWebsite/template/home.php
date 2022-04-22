<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
    {% include "header.php" %}
    <title>Welcome | CMS</title>
</head>
<body>
    <div class="container-fluid pt-5" style="background-color: #F5F0EA;">
        <div class="container">
            {% load static %}
            <img class="pl-4" src="{% static 'pcdWebsite/images/logo_transparent.png' %}">
        </div>
        <div class="container">
            <p style="text-align: center; font-size: 2em;">Welcome to Caduceus Medical Scan. This website was made specifically 
            for lungs medical scans. this website was made for medical purposes.</p>
        </div>
        <div class="container pt-2">
            <a role="button" class="btn col-lg scan-now" style="background-color: #613E3C" href="{% url 'scan' %}">
                <p class="m-1" style="color: #F5F0EA; font-size: 2em;">SCAN NOW</p>
            </a>
        </div>
    </div>
</body>