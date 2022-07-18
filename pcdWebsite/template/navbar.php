{% load static %}
<header class="w-100 d-flex flex-wrap color-and-bg-color-1">
    <div class="col-12 col-md-3 d-flex flex-column align-items-md-start align-items-center justify-content-center p-3">
        <a href="{% url 'home' %}" class="no-style">
            {% if theme %}
            {% if theme == "dark" %}
            <img src=" {% static 'pcdWebsite/images/caduceus_darktheme.png' %}" height="75" class="d-md-block d-none" id="headerImgSmall">
            <img src="{% static 'pcdWebsite/images/logo_transparent_darktheme.png' %}" height="75" class="d-block d-md-none" id="headerImgBig">
            {% elif theme == "light" %}
            <img src=" {% static 'pcdWebsite/images/caduceus.png' %}" height="75" class="d-md-block d-none" id="headerImgSmall">
            <img src="{% static 'pcdWebsite/images/logo_transparent.png' %}" height="75" class="d-block d-md-none" id="headerImgBig">
            {% endif %}
            {% else %}
            <img src=" {% static 'pcdWebsite/images/caduceus.png' %}" height="75" class="d-md-block d-none" id="headerImgSmall">
            <img src="{% static 'pcdWebsite/images/logo_transparent.png' %}" height="75" class="d-block d-md-none" id="headerImgBig">
            {% endif %}
        </a>
    </div>

    <div class="col-12 col-md-9 d-flex align-items-center justify-content-end">
        <nav class="d-flex align-items-center justify-content-md-end justify-content-center flex-grow-1 flex-wrap">
            <div id="navControl" class="col-12 overflow-hidden normal-nav">
                <ul class=" list-group list-group-horizontal-md align-items-center justify-content-md-end justify-content-center">
                    <li class="list-group-item p-1 border-0 color-and-bg-color-1"><a class="custom-nav-link" href="{% url 'aboutus' %}">About Us</a></li>
                    <li class="list-group-item p-1 border-0 color-and-bg-color-1"><a class="custom-nav-link" href="{% url 'article' %}">Article</a></li>
                    <li class="list-group-item p-1 border-0 color-and-bg-color-1"><a class="custom-nav-link" href="{% url 'history' %}">History</a>/li>
                    <li class="list-group-item p-1 border-0 color-and-bg-color-1">
                        <div class="theme-switch-wrapper p-2">
                            <label class="theme-switch" for="darkSwitch">
                                <input type="checkbox" id="darkSwitch" class="dark-mode-switch" />
                                <div class="slider round">
                                    <div class="thumb d-flex align-items-center justify-content-center">
                                        <i class="fa fa-sun-o thumb-icon-1" aria-hidden="true" style="color:yellow"></i>
                                        <i class="fa fa-moon-o thumb-icon-2" aria-hidden="true" style="color: blue;"></i>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    <div class="col-12 d-block d-md-none">
        <button id="showHideBtn" class="w-100 color-and-bg-color-2 style-2">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
</header>