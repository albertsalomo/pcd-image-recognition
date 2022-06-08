<!DOCTYPE html>
{% if theme %}
<html lang="en" data-theme="{{ theme }}">
{% else %}
<html lang="en" data-theme="">
{% endif %}

<head>
    {% include "header.php" %}
    <title>Scanner | CMS</title>
</head>

<body class="w-100 color-and-bg-color-3">
    <div class="d-flex flex-column" style="min-height: 100vh;">
        {% include "navbar.php" %}
        <div class="p-5 flex-grow-1 d-flex align-items-center justify-content-center">
            <form method="post" class="w-100" enctype="multipart/form-data" action="upload" style="max-width: 780px;">
                <h2 class="mb-4">Please Upload Your File Here</h2>
                {% csrf_token %}
                <div class="d-flex align-items-center flex-wrap justify-content-center">
                    <div class="col-6 col-md-3 d-flex justify-content-start order-1 order-md-0">
                        <button id="chooseFileBtn" type="button" for="file-upload" class="text-nowrap w-100 color-and-bg-color-1 style-1 me-2">
                            Choose File
                        </button>
                    </div>
                    <div class="col-12 col-md-6 order-0 order-md-1 d-flex justify-content-center justify-content-md-start">
                        <label for="" class="p-3 d-inline-block text-truncate" id="fileUploadName">Choose File</label>
                        <input id="file-upload" type="file" name="upload" class="d-none">
                    </div>
                    <div class="col-6 col-md-3 d-flex justify-content-end order-md-2 order-2">
                        <button class="w-100 style-1 ms-2 color-and-bg-color-2" type="submit">Scan</button>
                    </div>
                </div>

                <!--See File Uploaded-->
                {% if file_url %}
                <div class="pt-5">
                    <p class="text-center">
                        <b>FILENAME : </b><br>
                        <b class="text-break">{{ file_url }}</b>
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ file_url }}" alt="Uploaded Images" class="img-fluid">
                    </div>
                    <div class="text-center">
                        <h1 class="p-3" style="text-transform: uppercase;"><b>Result: </b>
                            <b>{{ result }}</b>
                        </h1>
                    </div>
                    <p class="text-center"><a class="text-center w-100 style-1 color-and-bg-color-2 link-1" href="{% url 'home' %}" style="text-decoration: none;">BACK TO HOMEPAGE</a></p>
                </div>
                {% else %}
                <div></div>
                {% endif %}
            </form>
        </div>
    </div>
</body>

</html>