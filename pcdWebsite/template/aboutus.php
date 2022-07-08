<!DOCTYPE html>
<html lang="en">

<head>
    {% include "header.php" %}
    <title>About Us | CMS</title>
</head>
<body class="body-html">
    {% include "navbar.php" %}
    {% load static %}

    <div class="container">        
        <h4 class="pt-5" style="text-align: center;">OUR TEAM</h4>
        
        <!-- <div class="d-flex justify-content-center card-deck pt-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/Albert_Salomo.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Albert Salomo</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/BaptistaVY.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Baptista Varani Yoenata</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/Jessica_Octaviany.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Jessica Octaviany</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/talangan_oscar.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Oscar Deladas</p>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;">
                    <h2>Albert Salomo</h2>
                    <p>Contribution : asd</p>
                </div>
                <div class="col-lg d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{% static 'pcdWebsite/images/member/Albert_Salomo.png' %}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center;">Albert Salomo</p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{% static 'pcdWebsite/images/member/BaptistaVY.png' %}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center;">Baptista Varani Yoenata</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="text-align: center;">
                    <h2>Baptista Varani Yoenata</h2>
                    <p>Contribution : asd</p>
                </div>
                <div class="w-100"></div>
                <div class="col mt-5" style="text-align: left">
                    <h2>Jessica Octaviany</h2>
                    <p>Contribution : asd</p>
                </div>
                <div class="col-lg d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/Jessica_Octaviany.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Jessica Octaviany</p>
                </div>
            </div>
            </div>
            <div class="w-100"></div>
                <div class="col-lg d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{% static 'pcdWebsite/images/member/Oscar_Deladas.png' %}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;">Oscar Deladas</p>
                </div>
                </div>
            </div>
            <div class="col mt-5 justify-content-left" style="text-align: left;">
                <h2>Oscar Deladas</h2>
                <p>Contribution : asd</p>
            </div>
            </div>
        </div>

        <hr class="m-5">

        <p style="text-align: justify;">Hello! We are from team <b>Semoga A</b>. Our team members are shown on the picture above. This is our project from Digital Image Recognition subject. 
        This website was made for medical detection, especially lungs. So the visitor only has to submit the medical scans of lungs and the machine learning will start detecting. 
        The result will be shown in the same page, below the picture that submitted before. This machine learning can detect 3 types of lungs scans. Covid-19, Normal, and Pneumonia. For the reference, please check the <b>CONTENT</b> page. 
        Visitor can read and learn more about the machine learning that is implemented in this websites. About how the machine learning works and how it can determine the diseases</p>
    </div>
</body>