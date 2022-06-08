<!DOCTYPE html>
{% if theme %}
<html lang="en" class="homepage" data-theme="{{ theme }}">
{% else %}
<html lang="en" class="homepage" data-theme="">
{% endif %}

<head>
    {% include "header.php" %}
    <title>Welcome | CMS</title>
</head>

<body class="d-flex m-0 align-items-center justify-content-center flex-column color-and-bg-color-1" style="min-height:100vh;">
    <div class="p-3">
        <div class="text-center">
            {% load static %}
            <img class="p-4 img-fluid" src="{% static 'pcdWebsite/images/logo_transparent.png' %}">
        </div>
        <div class="container">
            <p class="desc-p" style="text-align: center;">Welcome to Caduceus Medical Scan. This website was made specifically
                for lungs medical scans. This website was made for medical purposes.</p>
        </div>

        <a role="button" href="{% url 'scan' %}" style="text-decoration: none;">
            <p class="w-100 style-1 text-center" style="font-size: 2em; color:inherit; background-color: #613E3C; color: #F5F0EA">SCAN NOW </p>
        </a>

    </div>
</body>