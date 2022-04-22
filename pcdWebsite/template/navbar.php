{% load static %}
<!-- <div class="navbar">
    <a class="navbar-brand" href="/">
        <img src="{% static 'pcdWebsite/images/logo.png' %}" width="250" height="150">
    </a>
</div> -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid d-flex">
            {% load static %}
            <a target="_self" href="/"><img class="logo" src="{% static 'pcdWebsite/images/logo_transparent.png' %}"></a>
            <button id="navbar-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        {% load static %}
                        <a class="nav-link" href="{% url 'aboutus' %}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{% url 'content' %}">Content</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Models</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{% url 'home' %}">a</a>
                            <a class="dropdown-item" href="{% url 'home' %}">b</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>