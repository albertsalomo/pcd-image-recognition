<!DOCTYPE html>
<html lang="en">

<head>
    {% include "header.php" %}
    <title>Scanner | CMS</title>
</head>

<body class="body-scan w-100">
    <div class="d-flex flex-column" style="min-height: 100vh;">
        {% include "navbar.php" %}
        <div class="p-5 flex-grow-1 d-flex align-items-center justify-content-center">
            <div class="w-100">
                <h2 class="title mb-4">Please Upload Your File Here</h2>
                <form method="post" enctype="multipart/form-data" action="upload">
                    {% csrf_token %}
                    <div class="d-flex align-items-center flex-wrap mx-auto" style="max-width: 780px;">
                        <div class="col-6 col-md-3 d-flex justify-content-start order-1 order-md-0">
                            <button id="chooseFileBtn" type="button" for="file-upload" class="custom-file-upload text-nowrap w-100">
                                Choose File
                            </button>
                        </div>
                        <div class="col-12 col-md-6 order-0 order-md-1 d-flex justify-content-center justify-content-md-start">
                            <label for="" class="px-2 d-inline-block text-truncate" id="fileUploadName">Choose File</label>
                            <input id="file-upload" type="file" name="upload" class="d-none">
                        </div>
                        <div class="col-6 col-md-3 d-flex justify-content-end order-md-2 order-2">
                            <button class="scanBtn w-100" type="submit">Scan</button>
                        </div>
                    </div>

                    <!--See File Uploaded-->
                    <div>
                        {% if file_url %}
                        <div class="after-scan">
                            <p style="font-size: 1rem" class="text-center">
                                <b style="color: white">FILENAME : </b><br>
                                <b style="color: #6B6361" class="text-break">{{ file_url }}</b>
                            </p>
                            <div class="img-test">
                                <img src="{{ file_url }}" alt="Uploaded Images" class="img-fluid">
                            </div>
                            <div class="result-test">
                                <p><b style="color: #6B6361;">Result : </b>
                                    <b style="color: white; font-weight: 100; text-decoration: none;">{{ result }}</b>
                                </p>
                            </div>
                            <a class="btn-homepage" href="{% url 'home' %}">BACK TO HOMEPAGE</a>
                        </div>
                        {% else %}
                        <div class="before-testing"></div>
                        {% endif %}
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>