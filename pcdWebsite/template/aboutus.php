<!DOCTYPE html>
{% if theme %}
<html lang="en" data-theme="{{ theme }}">
{% else %}
<html lang="en" data-theme="">
{% endif %}

<head>
    {% include "header.php" %}
    <title>About Us | CMS</title>
</head>

<body class="w-100 color-and-bg-color-3">
    {% include "navbar.php" %}
    {% load static %}

    <div class="container">
        <h4 class="pt-5" style="text-align: center; padding-bottom: 5%">OUR TEAM</h4>
        <div class="card mb-3 rounded-pill border color-and-bg-color-1" id="card-team-1">
            <div class="d-flex align-items-center">
                <div class="col col-9 d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="card-team-title">Albert Salomo</h1>
                    <h3 class="card-team-subtitle">412019040</h3>
                    <h5 class="card-team-contribution">Contribution</h5>
                    <p style="margin-left: 50px; text-align: center;">
                        Membuat dan mengusulkan ide project, mengerjakan code model dasar machine learning CNN, menampilkan
                        confusion matrix model CNN, membuat dan mengusulkan pengerjaan dasar project kelompok menggunakan website dengan framework
                        Django, serta membantu pengembangan desain website.
                    </p>
                </div>
                <div class="col col-3 d-flex justify-content-center p-3" style="text-align: center;">
                    <img class="card-img-top img-fluid rounded-circle" src="{% static 'pcdWebsite/images/member/1x1/Albert_Salomo.png' %}" alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="card mb-3 rounded-pill border color-and-bg-color-1">
            <div class="d-flex align-items-center">
                <div class="col col-3 d-flex justify-content-center p-3" style="text-align: center;">
                    <img class="card-img-top img-fluid rounded-circle" src="{% static 'pcdWebsite/images/member/1x1/BaptistaVY.png' %}" alt="Card image cap">
                </div>
                <div class="col col-9 d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="card-team-title">Baptista Varani Yoenata</h1>
                    <h3 class="card-team-subtitle">412019019</h3>
                    <h5 class="card-team-contribution">Contribution</h5>
                    <p style="margin-right: 50px; text-align: center;">
                        Merancang design website dan membantu pengerjaan pada bagian front-end
                    </p>
                </div>
            </div>
        </div>
        <div class="card mb-3 rounded-pill border color-and-bg-color-1">
            <div class="d-flex align-items-center">
                <div class="col col-9 d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="card-team-title">Jessica Octaviany</h1>
                    <h3 class="card-team-subtitle">412019009</h3>
                    <h5 class="card-team-contribution">Contribution</h5>
                    <p style="margin-left: 50px; text-align: center;">
                        Menambahkan dataset, Memodifikasi model CNN untuk meningkatkan akurasi dan menambahkan arsitektur VGG-16, melatih model dan memodifikasi
                        optimizer vgg-16 untuk meningkatkan akurasi, serta membantu analisa model dan merapihkan code model
                    </p>
                </div>
                <div class="col col-3 d-flex justify-content-center p-3" style="text-align: center;">
                    <img class="card-img-top img-fluid rounded-circle" src="{% static 'pcdWebsite/images/member/1x1/Jessica_Octaviany.png' %}" alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="card mb-3 rounded-pill border color-and-bg-color-1">
            <div class="d-flex align-items-center">
                <div class="col col-3 d-flex justify-content-center p-3" style="text-align: center;">
                    <img class="card-img-top img-fluid rounded-circle" src="{% static 'pcdWebsite/images/member/1x1/Oscar_Deladas.png' %}" alt="Card image cap">
                </div>
                <div class="col col-9 d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="card-team-title">Baptista Varani Yoenata</h1>
                    <h3 class="card-team-subtitle">412019019</h3>
                    <h5 class="card-team-contribution">Contribution</h5>
                    <p style="margin-right: 50px; text-align: center;">
                    Memodifikasi front-end dan back-end website serta mengatur agar GitHub kelompok tetap terorganisir. 
                    Menambah fitur scan history ke dalam website serta menambahkan beberapa validasi ketika ingin melakukan scan.
                    </p>
                </div>
            </div>
        </div>

        <hr class="m-5">

        <p style="text-align: justify; padding-bottom: 5%;">Hello! We are from team <b>Semoga A</b>. Our team members are shown on the picture above. This is our project from Digital Image Recognition subject.
            This website was made for medical detection, especially lungs. So the visitor only has to submit the medical scans of lungs and the machine learning will start detecting.
            The result will be shown in the same page, below the picture that submitted before. This machine learning can detect 3 types of lungs scans. Covid-19, Normal, and Pneumonia. For the reference, please check the <b>CONTENT</b> page.
            Visitor can read and learn more about the machine learning that is implemented in this websites. About how the machine learning works and how it can determine the diseases</p>
    </div>
</body>