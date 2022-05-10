{% load static %}
<header class="w-100 d-flex flex-wrap">
    <div class="col-12 col-md-3 d-flex flex-column align-items-md-start align-items-center justify-content-center p-3">
        <a href="{% url 'home' %}" class="no-style">
            <img src=" {% static 'pcdWebsite/images/caduceus.png' %}" height="75" class="d-md-block d-none">
            <img src="{% static 'pcdWebsite/images/logo_transparent.png' %}" height="75" class="d-block d-md-none">
        </a>
    </div>

    <div class="col-12 col-md-9 d-flex align-items-center justify-content-end">
        <nav class="d-flex align-items-center justify-content-md-end justify-content-center flex-grow-1 flex-wrap">
            <div id="navControl" class="col-12 overflow-hidden normal-nav">
                <ul class=" list-group list-group-horizontal-md align-items-center justify-content-md-end justify-content-center">
                    <li class="list-group-item p-1 border-0" style="background-color: inherit;"><button class="text-center header-nav">Article</button></li>
                    <li class="list-group-item p-1 border-0" style="background-color: inherit;"><button class="text-center header-nav">About Us</button></li>
                </ul>
            </div>

        </nav>
    </div>

    <div class="col-12 d-block d-md-none">
        <button id="showHideBtn" class="w-100 no-style style-1">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
</header>