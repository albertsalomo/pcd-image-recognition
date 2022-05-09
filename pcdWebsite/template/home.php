<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
    {% include "header.php" %}
    <title>Welcome | CMS</title>
</head>

<body class="d-flex m-0 align-items-center justify-content-center flex-column" style="background-color: #F5F0EA; min-height:100vh">
    <div class="p-3">
        <div class="text-center">
            {% load static %}
            <img class="p-4 img-fluid" src="{% static 'pcdWebsite/images/logo_transparent.png' %}">
        </div>
        <div class="container">
            <p class="desc-p" style="text-align: center;">Welcome to Caduceus Medical Scan. This website was made specifically
                for lungs medical scans. This website was made for medical purposes.</p>
        </div>
        <div class="container pt-2">
            <a role="button" class="btn scan-now w-100" style="background-color: #613E3C" href="{% url 'scan' %}">
                <p class="m-1" style="color: #F5F0EA; font-size: 2em;">SCAN NOW</p>
            </a>
        </div>
    </div>
</body>