<!DOCTYPE html>
<html lang="en">

<head>
    {% include "header.php" %}
    <title>About Us | CMS</title>
</head>
<body class="body">
    {% include "navbar.php" %}
    {% load static %}

    <div class="container">        
        <h4 style="text-align: center;">OUR TEAM</h4>
        
        <div class="d-flex card-deck pt-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/sample.jpg' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Albert Salomo</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/sample.jpg' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Baptista Varani Yoenata</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/sample.jpg' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Jessica Octaviany</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/sample.jpg' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Oscar Deladas</p>
                </div>
            </div>
        </div>

        <hr>

        <p>Hello! We are from team <b>Semoga A</b>. Our team members are shown on the picture above. This is our project from Digital Image Recognition subject. 
        This website was made for medical detection, especially lungs. So the visitor only has to submit the medical scans of lungs and the machine learning will start detecting. 
        The result will be shown in the same page, below the picture that submitted before. This machine learning can detect 3 types of lungs scans. Covid-19, Normal, and Pneumonia. For the reference, please check the <b>CONTENT</b> page. 
        Visitor can read and learn more about the machine learning that is implemented in this websites. About how the machine learning works and how it can determine the diseases</p>
    </div>
</body>