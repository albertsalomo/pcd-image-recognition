<!DOCTYPE html>
<html lang="en">

<head>
    {% include "header.php" %}
    <title>Scanner | CMS</title>
</head>

<body class="body-scan">
    {% include "navbar.php" %}
    <div class="container">
        <!-- <a href="{% url 'scan' %}" name="scan">test</a> -->
        <!--Image Upload-->
        <div class="title">
            <h2>Please Upload Your File Here</h2>
        </div>
        <form method="post" enctype="multipart/form-data" action="upload">
            {% csrf_token %}
            <div class="upload">
                <label for="file-upload" class="custom-file-upload">
                    Choose File
                </label>
                <input id="file-upload" type="file" name="upload">
                <button class="scanBtn" type="submit">Scan</button>
            </div>
            <!--See File Uploaded-->
            <div class="row">
                {% if file_url %}
                <div class="after-scan">
                    <!-- <h4>The scanned image has been uploaded to : <a href="{{ file_url }}">{{ file_url }}</a></h4> -->
                    <p style="font-size: 1.5rem"><b style="color: white">FILENAME :  </b><b style="color: #6B6361">{{ file_url }}</b></p>
                    <div class="img-test">
                        <img src="{{ file_url }}" alt="Uploaded Images" width=500 length=500>
                    </div>
                    <div class="result-test">
                        <p><b style="color: #6B6361;">Result : </b>
                            <b style="color: white; font-weight: 100; text-decoration: none;">{{ result }}</b>
                        </p>
                    </div>
                    <a class="btn-homepage" href="{% url 'home' %}">BACK TO HOMEPAGE</a>
                </div>
                {% else %}
                <div class="before-testing">
                </div>
                {% endif %}
            </div>

    </div>
    </form>
    </div>
</body>

</html>