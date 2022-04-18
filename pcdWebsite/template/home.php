<!DOCTYPE html>
<html lang="en">

<head>
    {% include "header.php" %}
    <title>Document</title>
</head>

<body>
    {% include "navbar.php" %}
    <div class="container">
        <!--Image Upload-->
        <a href="{% url 'scan' %}">Gelo</a>
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
                    <div class="img-test">
                        <img src="{{ file_url }}" alt="Uploaded Images" width=500 length=500>
                    </div>
                    <div class="result-test">
                        <h2><b style="color: black;">Result : </b><b 
                        style="color: white; font-weight: 100; text-decoration: none;">{{ result }}</b>
                        </h2>
                    </div>
                    <a class="btn-homepage" href="/">BACK TO HOMEPAGE</a>
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