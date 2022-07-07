import datetime
from django.shortcuts import render
import pickle as pk
import numpy as np
from django.http import HttpResponse
from django.shortcuts import render
from django.core.files.storage import FileSystemStorage
import cv2
import tensorflow as tf
import os
from pathlib import Path
from pcdWebsite.settings import BASE_DIR, MEDIA_ROOT


def upload(request):
    if request.method == 'POST' and request.FILES['upload']:
        upload = request.FILES['upload']
        fss = FileSystemStorage()
        file = fss.save(upload.name, upload)
        file_url = fss.url(file)
        # Labeling
        class_label = ["Covid-19", "Normal", "Pneumonia"]
        # Model Deployment
        model = tf.keras.models.load_model('cxr_model_cnn_fixed.h5')
        # Dir image
        dir_image = os.path.join(MEDIA_ROOT, file)
        img = cv2.imread(dir_image)
        img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
        img = cv2.resize(img, (128, 128))
        img = np.array(img)
        img = img.reshape(1, 128, 128, 3)
        predict = class_label[np.argmax(model.predict(img))]
        if (request.COOKIES.get('theme')):
            theme = request.COOKIES.get('theme')
            return render(request, 'scan.php', {'file_url': file_url, 'result': predict, 'theme': theme})
        else:
            return render(request, 'scan.php', {'file_url': file_url, 'result': predict})
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES.get('theme')
        return render(request, 'scan.php', {'theme': theme})
    else:
        return render(request, 'scan.php')


def home(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "home.php", {'theme': theme})
    else:
        return render(request, "home.php")


def scan(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "scan.php", {'theme': theme})
    else:
        return render(request, "scan.php")


def aboutus(request):
    return render(request, "aboutus.php")


def content(request):
    return render(request, "content.php")


def settheme(request):
    if request.method == 'GET':
        theme = request.GET.get('theme')
        max_age = 14*24*60*60

        expires = datetime.datetime.strftime(datetime.datetime.utcnow()
                                             + datetime.timedelta(seconds=max_age), "%a, %d-%b-%Y %H:%M:%S GMT")

        response = HttpResponse('Theme changed.')
        response.set_cookie('theme', theme, max_age=max_age, expires=expires)
        return response


def gettheme(request):
    if request.method == 'GET':
        if request.COOKIES.get('theme'):
            theme = request.COOKIES.get('theme')
            jsonData = '{"theme": "'+theme+'"}'
            response = HttpResponse(jsonData)
        else:
            jsonData = '{"theme": ""}'
            response = HttpResponse(jsonData)
        return response


def result(imgPath):
    class_label = ["Covid 19", "Normal", "Pneumonia"]
    model = pk.load(open('cxr_model2.h5', 'rb'))
    img = cv2.imread(imgPath)
    img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    img = cv2.resize(img, (128, 128))
    img = np.array(img)
    img = img.reshape(1, 128, 128, 3)
    predict = class_label[np.argmax(model.predict(img))]
    return predict
